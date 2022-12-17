<?php

namespace App\Http\Controllers;
use DB;
use Cache;
use Illuminate\Http\Request;
use App\Models;
// use Freshbitsweb\Laratables\Laratables;

class BlogController extends Controller
{       public function getlara()
    {
    //    return view('welcome');

    }





    
    public function getTrainings($id)
    {  // question1 
        //$blog = DB::select('select * from users');

        //question2
        //$blog = DB::select('select * from users where UserId = ?', [1]);

        //question3 
        //$blog = DB::select('select * from trainings');

        //question4
        $Selecttrainings = DB::select('select * from trainings where UserId = ?', [$id]);
        return $Selecttrainings;

    }
    //solution 1
    public function getUsers()
    {
        $ua = DB::select('select * from users');
        return $ua;
    }
    
    //solution 2
    public function getUsersid($id)
    {
        $blog = DB::select('select * from users where UserId = ?', [$id]);
        return $blog;
    }

    //solution 3 
    public function getAllTrainnees()
    {
        $blog = DB::select('select * from trainings');  
        return $blog; 

    }

//introducing caching



//     1. getAllUsersLaravelCache (no args) 
    public function getAllUsersLaravelCache()
    { 
        cache()->remember('ALLUSERSKEY', 60, function () { 

        return DB::table('users')->get();

        });

         return DB::table('users')->get();
    }

    




    //  2. getUserbyIdLaravelCache (takes an ID)
public function getUserbyIdLaravelCache($id)
{   
    cache()->remember('USERIDKEY', 60, function () use ($id){ 

        return DB::select('select * from users where UserId = ?', [$id]);

        });

    return DB::select('select * from users where UserId = ?', [$id]);
    
}





//  3. getAllTrainingsLaravelCache  (no args)
public function getAllTrainingsLaravelCache()
    {
        cache()->remember('ALLTRAININGSKEY', 60, function (){ 

            return DB::table('trainings')->get();
    
            });
    
             return DB::table('trainings')->get();

    }

    

//  4. getTrainingsByUserIdLaravelCache (takes an ID)    
public function getTrainingsByUserIdLaravelCache($id)
{   
    cache()->remember('TRAINIDKEY', 60, function () use($id){ 

      return DB::select('select * from trainings where UserId = ?', [$id]);

        });

    return DB::select('select * from trainings where UserId = ?', [$id]);
    
}

public function cachecheck()
{
    $value = Cache::get('ALLTRAININGSKEY', 'nothing exists');
    return $value;
}

public function UserClearcache(){
//forgetting the cache
    Cache()->forget('ALLUSERSKEY');

    // $value = Cache::get('ALLUSERSKEY', 'nothing exists');
    // return $value;
}

public function TrainingClearcache(){

    Cache::forget('ALLTRAININGSKEY');
    $value = Cache::get('ALLTRAININGSKEY', 'all cleared');
    return $value;
}





public function getAllUsersMemCached()
    { 
        cache()->remember('ALLUSERMEMCACHEDSKEY', 60*60*60, function (){ 

            return DB::table('users')->get();
    
            });
    
             return DB::table('users')->get();
         
    }


public function getAllTrainingsMemCached()
    { 
        cache()->remember('ALLTRAININGSMEMKEY', 60*60*60, function (){ 

            return DB::table('trainings')->get();
    
            });
    
             return DB::table('trainings')->get();
         
    }



 


}
