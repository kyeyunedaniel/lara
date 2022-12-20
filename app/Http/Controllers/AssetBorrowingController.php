<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Models\AssetBorrowing;
use Freshbitsweb\Laratables\Laratables;

class AssetBorrowingController extends Controller
{   
    public function indexOwner()
    {
       
        return view('asset_borrowing');
    }

    public function getLists(){
        $username = session(Security::$SESSION_USER)->username;
        return Laratables::recordsOf(AssetBorrowing::class, function ($query) use ($username) {
            return $query->where('Request_by', $username);
        });
    }
}
