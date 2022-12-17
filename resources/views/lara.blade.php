@extends('layouts.listings')

@section('content')

    <div class="container">
        <table id="drivers.list" class="table table-bordered table-striped">
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