<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Controllers\Controller;

use App\Http\Requests;

class TrainingViewController extends Controller
{
    //
    public function index(){
        
       
        $trainings = DB::select('select * from trainings');
        $users = DB::select('select * from users');

        return view('traintableview',['trainings'=>$trainings],['users'=>$users]);  
       


}
public function editfunc($id){
        
       
    //$trainings = DB::select('select * from trainings');
    $trainings = DB::table('trainings')
                ->where('No', '=', $id)
                ->get();
    
  
        //code...
        //return $trainings;  
        return view('editingpage',['trainings'=>$trainings]);
}
public function update_trainings(Request $request ,$id)
{
   $train= $request->input('deferred_training');
   $StartDate = $request->input('start_date');
   $EndDate = $request->input('end_date');

//    echo()

    DB::update('update trainings set train=?, StartDate=?, EndDate=? where No=?',[$train,$StartDate,$EndDate,$id] );
//    echo ('success <a href="/trained">click here to go home</a>'); 
    return redirect('/trained');
}
}