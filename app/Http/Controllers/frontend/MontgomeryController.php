<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\title;
use App\Models\feacture;
use App\Models\file;
use Illuminate\support\DB;

class MontgomeryController extends Controller
{
    public function index(Request $request)
    {
      
        if($request!="")
        {
            $bedrooms=$request['bedrooms']?? "";
            $bathrooms=$request['bathrooms']?? "";
            $room=$request['room']?? "";
            $price_per_night=$request['price_per_night']?? "";
           
           // search by all
            if($bedrooms !="" && $bathrooms !="" && $room!="")
            {
                $file = file::with( ['title','title.feacture'])->wherehas('title.feacture',function ($query) use ($bathrooms,$bedrooms,$room)
                { 
                    if($bedrooms !="")
                    {
                        $query->where('bathrooms','=',$bathrooms); 
                    }
                    if($bathrooms !="")
                    {
                        $query->where('bedrooms','=',$bedrooms);
                    }
                    if($room!="")
                    {
                        $query->where('room','=',$room);
                    }
                     })->get();
          
                 return view('frontend.montgomery',compact('file'));
            }
            else
            {
                $file=file::with(['title','title.feacture'])->get(); 
                return view('frontend.montgomery',compact('file'));
            }
        }
    } 

}
