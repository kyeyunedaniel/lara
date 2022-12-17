<?php

namespace App\Http\Controllers;
use DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;

class TrainingController extends Controller
{
    //
    
public function indexe(Request $request){
    $Uid = $request->input('uid');
    $train1 = $request->input('train');
    $start_date = $request->input('start_date');
    $end_date = $request->input('end_date');

    $data=array('UserID'=>$Uid,"train"=>$train1,"StartDate"=>$start_date,"EndDate"=>$end_date);
    DB::table('trainings')->insert($data);
    echo "Record inserted successfully.<br/>";
    echo '<a href = "/trained">Click Here</a> to go back.';
    }

    
    
}