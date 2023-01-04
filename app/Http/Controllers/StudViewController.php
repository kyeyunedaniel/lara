<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;

class StudViewController extends Controller
{
    //
    public function index(){
        $users = DB::select('select * from users');
       

        return view('stud_view',['users'=>$users]);
        
        }
    
        public function pdfviewer()
        {   $data = DB::select('select * from users');

            $pdf = App::make('dompdf.wrapper');
            $pdf = Pdf::loadView('templates.pdfTemplate', compact('data'))->save(public_path('pdf/AssetBorrowing'.time().str::random(5).'.pdf'));
            
            //to download we can 
          
            return $pdf->stream();

            //a download feature willjust have this different 
           return $pdf->download('templates.pdfTemplate'.time().str::random(10).'.pdf');
        }
}
