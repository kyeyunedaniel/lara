<?php

namespace App\Http\Controllers;
use Freshbitsweb\Laratables\Laratables;
use Illuminate\Http\Request;
use App\Models\Driver;
// use DB;
class DriverController extends Controller
{
    //
    public function driverfun()
    {   $users = DB::select('select * from users');
       // $data = DB::all('id','firstname','lastname','email');
        return $users;
    }


    public function larat()
    {
        return Laratables::recordsOf(Driver::class);
    }
   
    public function getDrivers()
    {   
        

    return Laratables::recordsOf(Driver::class, function($query)
        {
        return $query->where('id', 1);
        });
        
    }
    public function getLarat(){
        return view('lara');
    }
}