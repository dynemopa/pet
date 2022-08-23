<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\title;
use App\Models\feacture;
use App\Models\file;
use Illuminate\support\DB;



class MontgomeryimgController extends Controller
{
    public function index($files_id)
    {
        $file=file::with('title','title.feacture')->where('files_id','=',$files_id)->get();
      
     return  view('frontend.montgomeryimg', compact('file'));
    }
}
