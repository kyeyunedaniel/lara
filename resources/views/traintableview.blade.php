@extends('layouts.navigationbar')
@section('content')    
<!-- TRAINING POPUP  START-->
<title>TRAINING</title>
<div class="modal fade userpopup" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" height:>
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">REGISTER FOR TRAINING</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          
          <div class="modal-body">
            <form action = "/train" method = "post" class="form-group" style="width:70%; margin-left:15%;" action="/action_page.php">
      
              <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>"><input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                <label class="form-group">UserID:</label>
                <br>
                <select name="uid">@foreach ($users as $usere)
                  <option>
                      
                      {{ $usere->UserId }}
                    
                  </option>  @endforeach
      
                </select>
                <br>
                <label class="form-group">TrainingDeffered:</label>
                <input type="text" class="form-control" placeholder="Training" name="train" required>
                <label>StartDate:</label>
                <input type="date" class="form-control" placeholder="Start Date" name="start_date"required>
                <label>EndDate:</label>
                <input type="date" class="form-control" placeholder="End Date" name="end_date" required><br>
          </div>
    
        <div class="modal-footer">
          <button type="submit"  value = "Add student" class="btn btn-primary">Add To Training</button>
        
        </form>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<br><br>
  {{-- END OF THE POPUP --}}
    <div class="container">
        <h1 class="text-center"></h1>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".userpopup">REGISTER FOR TRAINING</button>
        <br> <br><br>   
        <form action="/multiple2" method="post">
          <input type="number" class="form-control" placeholder="Enter a number" name="nux" required><br>
          <button type="submit"  value = "Add Multiple users" class="btn btn-primary">Add Multiple users</button>
      </form>
      <br><br><br>
      <form action="/delete2" method="post">
          
          <button type="submit"  value = "Delete All Users" class="btn btn-primary">Delete All Users</button>
      </form>
      </div>
      <br>




<div class="container">
  <h2 class="text-center">View user Records</h2>
           
  <table id = "myTable"class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>UserID</th>
        <th>Training Course</th> 
        <th>Start Date</th>
        <th>End Date</th>
        <th>Edit</th>
        <th>Delete</th>

      </tr>
    </thead>
    <tbody>     
     @foreach ($trainings as $training)
      <tr>
      <td>{{ $training->UserID }}</td>
      <td>{{ $training->train }}</td>
      <td>{{ $training->StartDate }}</td>
      <td>{{ $training->EndDate }}</td>
      <td><a href="click_edit/{{$training->No}}" class ="btn btn-success">Edit</a> </td>
      <td><a href="click_delete/{{$training->UserID}}" class ="btn btn-primary">Delete</a> </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script src="//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script>
$(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>
@endsection