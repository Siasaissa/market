<!DOCTYPE html>
<html lang="en">
<head>
@include('admin.head')
</head>
<body>
<form action="{{ route('admin.CreateSubCategory') }}" method="POST">
    @csrf
    <div class="container-scroller">
        <!-- partial:partials/_sidebar.html -->
        @include('admin.nav')
        <!-- partial -->
        @include('admin.headernav') 

        <div class="main-panel">
            <div class="content-wrapper">
                <div class="card-body">
                    <h4 class="card-title">Create SubCategory</h4>

                    <div class="add-items d-flex">
                        <select name="Category" class="form-control todo-list-input">
                            <option disabled selected>Choose a category</option>
                            @foreach ($category as $cat)
                                <option value="{{ $cat }}">{{ $cat }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="add-items d-flex">
                        <input type="text" class="form-control todo-list-input" name="subcategory" placeholder="Enter subcategory">
                    </div>

                    <button type="submit" class="add btn btn-primary ">Add</button>
                </div>
            </div>
        </div>
    </div>
</form>
@include('admin.footer')
@include('admin.script')
</body>
</html>
