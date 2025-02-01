<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.head')
</head>
<body>
<div class="container-scroller">
    @include('admin.nav')
    @include('admin.headernav')

    <div class="main-panel">
        <div class="content-wrapper">
            <div class="card-body">
                <h4 class="card-title">Add Product</h4>

                <!-- Success and Error Messages -->
                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <!-- Debugging Messages -->
                @if (session('debug'))
                    <div class="alert alert-warning">
                        <strong>Debug Info:</strong>
                        <pre>{{ session('debug') }}</pre>
                    </div>
                @endif

                <form action="{{ route('admin.InsertProduct') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <select name="category" class="form-control" required>
                            <option disabled selected>Choose a category</option>
                            @foreach ($category as $cat)
                                <option value="{{ $cat }}">{{ $cat }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <select name="subcategory" class="form-control" required>
                            <option disabled selected>Choose a subcategory</option>
                            @foreach ($subcategory as $subcat)
                                <option value="{{ $subcat }}">{{ $subcat }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" name="product_name" class="form-control" placeholder="Enter Product Name" required>
                    </div>
                    <div class="form-group">
                        <textarea name="description" class="form-control" placeholder="Enter Description" required></textarea>
                    </div>
                    <div class="form-group">
                        <input type="text" name="price" class="form-control" placeholder="Enter Price" required>
                    </div>
                    <div class="form-group">
                        <label for="image1">Upload front image:</label>
                        <input type="file" id="image1" name="image1" accept="image/*" required>
                    </div>
                    <div class="form-group">
                        <label for="image2">Upload side image:</label>
                        <input type="file" id="image2" name="image2" accept="image/*">
                    </div>
                    <div class="form-group">
                        <label for="image3">Upload back side image:</label>
                        <input type="file" id="image3" name="image3" accept="image/*">
                    </div>
                    <button type="submit" class="btn btn-primary">Add</button>
                </form>
            </div>
        </div>
    </div>
</div>
@include('admin.footer')
@include('admin.script')
</body>
</html>
