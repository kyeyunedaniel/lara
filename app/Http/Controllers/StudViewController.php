<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StudViewController extends Controller
{
    //
    public function index(){
        $users = DB::select('select * from users');
       

        return view('stud_view',['users'=>$users]);
        
        }
        
}
