<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
class UserInsertController extends Controller
{
    //
    public function insertform(){
        return view('stud_create');
        
    }

    public function insert(Request $request){
            $first_name = $request->input('first_name');
            $last_name = $request->input('last_name');
            $email = $request->input('email');

            $data=array('FirstName'=>$first_name,"LastName"=>$last_name,"EmailAddress"=>$email);
            DB::table('users')->insert($data);
            echo "Record inserted successfully.<br/>";
            echo '<a href = "/view-records">Click Here</a> to go back.';
            }
   


public function mut(Request $request) {

 $num2 = $request->input('num1');  

 $num2=$num2+1;

for($i=1;$i<$num2;$i++){
    $fname = "FirstName".$i;
    $lname = "lastName".$i;
    $email = $i."@test.com";

   $data=array('FirstName'=>$fname,"LastName"=>$lname,"EmailAddress"=>$email);
            DB::table('users')->insert($data); 
    
}
return back();

}


public function delete(Request $request){
    DB::table('users')->truncate();
    
    return back();
    


}
public function delete2(Request $request){
    DB::table('trainings')->truncate();
    
    return back();
    


}











public function mut2(Request $request) {
    
   
   
   $num2 = $request->input('nux');  

    //$ui = DB::select('select UserId from users lIMIT 1');
    $ui=10;

    $number_of_result= DB::table("users")->count();
    //$fnumb = $number_of_result+$ui-1;
    $fnumb = 20;

///adding multiple data 
    $num2=$num2+1;
    for($i=1;$i<$num2;$i++){
      $da= rand(); 
      $trax = "Training ".$da;
      $Date = "2022-1-1";
      $ra = rand(0,360);
      
     //adding the random days between 0 and 360 
      $sdat = date('Y-m-d', strtotime($Date. ' + '.$ra.' days')); 
      $edat = date('Y-m-d', strtotime($sdat. ' + '.$ra.' days'));
      $good = rand($ui ,$fnumb);
      //echo $good;
      $uid= $good;

    $data=array('UserID'=>$uid,"train"=>$trax,"StartDate"=>$sdat,"EndDate"=>$edat);
    DB::table('trainings')->insert($data);
    }
    echo "Record inserted successfully.<br/>";
    echo '<a href = "/trained">Click Here</a> to go back.';
}}