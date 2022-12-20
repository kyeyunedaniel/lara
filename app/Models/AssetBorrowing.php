<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Freshbitsweb\Laratables\Laratables;

class AssetBorrowing extends Model
{
    // use HasFactory;
    public static function laratablesCustomActionOwner(AssetBorrowing $request)
    {
        $data = array(
            'request'=>$request
        );
        return view('stores.actions.asset_borrowing_owner_actions')->with($data)->render();
    }
}
