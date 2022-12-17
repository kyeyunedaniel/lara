@extends('layouts.navigationbar')
@section('content')
  <title>View User Records</title>
  <br><br><br><br>

        <!-- user pop  START -->
<div class="modal fade userpopup" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">ADD USERS</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          
          <div class="modal-body">
            <form action = "/create" method = "post" class="form-group" style="width:70%; margin-left:15%;" action="/action_page.php">
      
                <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>"><input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
              
                  <label class="form-group">First Name:</label>
                  <input type="text" class="form-control" placeholder="First Name" name="first_name" required>
                  <label>Last Name:</label>
                  <input type="text" class="form-control" placeholder="Last Name" name="last_name"required>
                  <label>Email:</label>
                  <input type="text" class="form-control" placeholder="Enter Email" name="email" required><br>
                  
                
          </div>
    
        <div class="modal-footer">
        <button type="submit"  value = "Add student" class="btn btn-primary">Submit</button>
        
        </form>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
  {{-- END OF THE POPUP --}}
    
    <div class="container">
        
          
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".userpopup">ADD USER</button>

       
        
        <br><br>
        {{-- Adding multiple users --}}
        <form action="/multiple1" method="post">
          <input type="number" class="form-control" placeholder="Enter a number" name="num1" required><br>
          <button type="submit"  value = "Add Multiple users" class="btn btn-primary">Add Multiple users</button>
      </form>
      <br><br><br>
      <form action="/delete1" method="post">
          
          <button type="submit"  value = "Delete All Users" class="btn btn-primary">Delete All Users</button>
      </form>
      </div>
      <br>
<div class="container">
  <h2 class="text-center">View user Records</h2>
           
  <table id = "myTable"class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th data-column="0">First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        
      </tr>
    </thead>
    <tbody>
    @foreach ($users as $user)
      <tr>
      <td>{{ $user->UserId }}</td>
      <td>{{ $user->FirstName }}</td>
      <td>{{ $user->LastName }}</td>
      
      <td>{{ $user->EmailAddress }}</td>
      
      
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script src="//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script>
$(document).ready( function () {
    $('#myTable').DataTable({

      "columnDefs": [
    { "searchable": false, "targets": 1 }
  ]
    }
    //   processing: true,
    //   columnDefs: [
    // { "searchable": false, "targets": 0 }
  // ]
  
  );
} );
</script>
@endsection