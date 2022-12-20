
@extends('layouts.navigationbar')
@section('content')
     <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/dataTables.bootstrap4.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <br><br>
    <div class="container">
        <table class ="driver_requests_owner table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>First Name</th>
                     <th>Last Name</th>
                    <th>Bith Date</th>
                     <th>Gender</th>
                     <th>Actions</th>
                </tr>
            </thead>
        </table>
    </div>
@endsection 


    

