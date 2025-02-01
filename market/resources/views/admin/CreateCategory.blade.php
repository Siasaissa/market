<!DOCTYPE html>
<html lang="en">
  <head>
@include ('admin.head')
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include ('admin.nav')
      <!-- partial -->
      @include ('admin.headernav')

  @if(session('success'))
      <div class="alert alert-success" style="width: 50%; height: 10%px; margin-top: 5%; position:absolute; transform:transition 0.5 easeout;">{{ session('success') }}</div>
  @endif 


<form action="{{route('admin.CreateCategory')}}" method="POST">
  @csrf

      <div class="main-panel">
        <div class="content-wrapper">
      <div class="card-body">
    <h4 class="card-title">Create Category</h4>
    
    <div class="add-items d-flex">
        <input type="text" class="form-control todo-list-input" name="category" placeholder="enter category">
        
    </div>
    <button type="submit" class="add btn btn-primary ">Add</button>
</form>
    @include('admin.footer')
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
  </div>
  </div>


  </body>
  @include('admin.script')
  </html>