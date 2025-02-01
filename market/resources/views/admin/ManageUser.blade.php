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

      <div class="main-panel">
        <div class="content-wrapper">
      <div class="card-body">
    <h4 class="card-title">USERS</h4>
    <div class="table-responsive">
      <table class="table">
        <thead>
          <tr>
            <th>
              </div>
            </th>
            <th> Id </th>
            <th> Name </th>
            <th> Email </th>
            <th> Phone </th>
            <th> Usertype </th>
            <th> Address </th>
            <th> Status </th>
          </tr>
        </thead>
        <tbody>
        @forelse($users as $use)
          <tr>
            <td>
              <div class="form-check form-check-muted m-0">
                <label class="form-check-label">
                  <img src="{{asset('/adminCss/assets/images/dope.jpg')}}" alt="image" />
                </label>
              </div>
            </td>

            <td> {{$use->id}} </td>
            <td> {{$use->name}} </td>
            <td> {{$use->email}} </td>
            <td> {{$use->phone}} </td>
            <td> {{$use->usertype}} </td>
            <td> {{$use->address}} </td>
            <td>
              <button class="badge badge-outline-success" style="background-color: transparent">Approved</button>
              <button class="badge badge-outline-warning" style="background-color: transparent">Pending</button>
              <button class="badge badge-outline-danger" style="background-color: transparent">Rejected</button>
            </td>
          </tr>
          @empty
          <tr>
              <td colspan="9">No products found.</td>
          </tr>
        @endforelse
        </tbody>
      </table>
    </div>
    @include('admin.footer')
  </div>
  </div>
  </div>


  </body>
  @include('admin.script')
  </html>