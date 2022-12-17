<?php

namespace App\Http\Controllers;
use App\Models\PdfUpload;

use Illuminate\Http\Request;

class PdfUploadController extends Controller
{
    public function getPdf(Request $Request)
    {   
        $data = new PdfUpload();
        $comment = $Request->input('comment_added');
        $fileextension = $Request->file('selectedfile')->extension();
        //get the location folder because we need it in the dattabase 
    
        if ($fileextension!='pdf')
        {
            return redirect('pdfUpload')->with('error', 'You can only submit pdf files')
                                        ->with('comment', $comment);
        }
        else {
        //add time to the file name the user has submitted 
        $filename= time().'_'.$Request->file('selectedfile')->getClientOriginalName();
        //save the physical form on the in storage/app/public/pdf
        $storagefolder = $Request->file('selectedfile')->storeAs('public/',$filename);
        //getting the comment added the user.
        $comment = $Request->input('comment_added');
        //get filesize 
        $filesize = $Request->file('selectedfile')->getSize(); 
        //get the file extension
        $filelocation='storage/'.$filename;
        //check if extension is pdf

        $data ->comment=$comment;
        $data ->name=$filename;
        $data ->size=$filesize;
        $data ->location=$filelocation;
        $data ->save();
        return redirect('pdfUpload')->with('success', 'Datat inserted successfully');
            //return ($filelocation);
         }
        // return($filename);
        // $data=array('name'=>$files,"location"=>$last_name,"comment"=>$email);
        // PdfUpload::class->insert($data);
    }
    public function viewPdf(){
        $data=PdfUpload::All();
        return view('pdfUpload', compact ('data'));
    }

    public function downloadpdf($filez){
        return response()-> download(public_path($filez));
    }
}
