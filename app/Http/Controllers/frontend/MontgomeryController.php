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
            $room=$request['room']?? "";
            $bathrooms=$request['bathrooms']?? "";
         
            if($bedrooms !="" && $bathrooms !="" && $room!="")
            {
                $file = file::with( ['title','title.feacture'])->wherehas('title.feacture',function ($query) use ($bathrooms,$bedrooms,$room)
                {
                        $query->where('bathrooms','=',$bathrooms);
                        $query->where('bedrooms','=',$bedrooms);
                        $query->where('room','=',$room);
                 })->get();
          
                 return view('frontend.montgomery',compact('file'));
            }
            if($bedrooms !="")
            {
               
                $file = file::with( ['title','title.feacture'])->wherehas('title.feacture',function ($query) use ($bedrooms)
                {
                    $query->where('bedrooms','=',$bedrooms);
                })->get();
                return view('frontend.montgomery',compact('file'));
           
            }
            if($bathrooms !="")
            {
                $file = file::with( ['title','title.feacture'])->wherehas('title.feacture',function ($query) use ($bathrooms)
                {
                        $query->where('bathrooms','=',$bathrooms);
                 })->get();
            return view('frontend.montgomery',compact('file'));
                 
            }
            if($room !="")
            {
                $file = file::with( ['title','title.feacture'])->wherehas('title.feacture',function ($query) use ($room)
                {
                        $query->where('room','=',$room);
                 })->get();
            return view('frontend.montgomery',compact('file'));
                 
            }
            else
            {
                $file=file::with(['title','title.feacture'])->get(); 
                return view('frontend.montgomery',compact('file'));
            }
        }
       
        // $bedrooms=$request['bedrooms']?? "";
        // $bathrooms=$request['bathrooms']?? "";
        // if($bedrooms !=" ")
        // {
        //    $file = file::with( ['title','title.feacture'])->wherehas('title.feacture',function ($query) use ($bedrooms)
        //    {
        //     $query->where('bedrooms','=',$bedrooms);
        //    })->get();
        // }

        // else
        // { 
        //     $file=file::with(['title','title.feacture'])->get(); 
        // }
       
      
     
    }
}
