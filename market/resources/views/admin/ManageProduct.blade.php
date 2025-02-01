<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.head')
    <!-- Bootstrap CSS -->

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
    <div class="container-scroller">
        @include('admin.nav')
        @include('admin.headernav')

        <div class="main-panel">
            <div class="content-wrapper">
                <div class="card-body">
                    <form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search">
                        <input type="text" class="form-control" placeholder="Search products">
                    </form>
                    <h4 class="card-title">Order Status</h4>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>
                                        <div class="form-check form-check-muted m-0">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input">
                                            </label>
                                        </div>
                                    </th>
                                    <th>No</th>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Stock</th>
                                    <th>Price</th>
                                    <th>Category</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($products as $product)
                                    <tr>
                                        <td>
                                            <div class="form-check form-check-muted m-0">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input">
                                                </label>
                                            </div>
                                        </td>
                                        <td>{{ $product->id }}</td>
                                        <td><img src="{{ asset('storage/' . $product->image1) }}" alt="Product Image" width="50"></td>
                                        <td>{{ $product->product_name }}</td>
                                        <td>Instock</td>
                                        <td>{{ $product->price }}</td>
                                        <td>{{ $product->category }}</td>
                                        <td>{{ $product->updated_at }}</td>
                                        <td>
                                            <button class="badge badge-outline-success" style="background-color: transparent">View</button>
                                            <button class="badge badge-outline-warning" style="background-color: transparent" data-bs-toggle="modal" data-bs-target="#editModal-{{ $product->id }}">Edit</button>
                                            <form action="{{route('admin.ManageProduct.delete', $product->id)}}" method="get"><button class="badge badge-outline-danger"  style="background-color: transparent" value="">Delete</button></form>
                                        </td>
                                    </tr>
                                    <div class="modal fade" id="editModal-{{ $product->id }}" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="editModalLabel">Edit Item</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>

                                                <form action="{{ route('admin.ManageProduct.update', $product->id) }}" method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    @method('put')
                                                    <input type="hidden" name="id" value="{{ $product->id }}">
                                                
                                                    <div class="modal-body">
                                                        <div class="mb-3">
                                                            <label for="image1" class="form-label">Image</label>
                                                            <img src="{{ asset('storage/' . $product->image1) }}" alt="Product Image" width="50">
                                                            <input type="file" name="image1" class="form-control">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="price" class="form-label">Price</label>
                                                            <input type="text" name="price" class="form-control" value="{{ $product->price }}">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="product_name" class="form-label">product name</label>
                                                            <input type="text" name="product_name" class="form-control" value="{{ $product->product_name }}">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="category" class="form-label">Category</label>
                                                            <input type="text" name="category" class="form-control" value="{{ $product->category }}">
                                                            
                                                        </div>
                                                        <div class="mb-3">
                                                            <select name="" id="" class="form-control">
                                                                <option value="" class="form-control"></option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                                    </div>
                                                </form>
                                                
                                            
                                            </div>
                                        </div>
                                @empty
  0                                  <tr>
                                        <td colspan="9">No products found.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        
                    </div>
                    @include('admin.footer')
                </div>
            </div>
        </div>
    </div>
    @include('admin.script')
</body>
</html>
