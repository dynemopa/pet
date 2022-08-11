<?php

namespace App\Http\Controllers;
use App\Models\file;
use App\Models\title;
use Illuminate\Http\Request;

class FileController extends Controller
{
    public function create()
    {
        return view('imageUpload');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
                'filenames' => 'required',
                'filenames.*' => 'image'
        ]);
  
        $files = [];
        if($request->hasfile('filenames'))
         {
            foreach($request->file('filenames') as $file)
            {
                $name = time().rand(1,100).'.'.$file->extension();
                $file->move('uploads/students/', $name);  
                $files[] = $name;  
            }
         }
  
         $file= new File();
         $file->filenames = $files;
         $file->save();
  
        
        $title = new title();
        $title->title= $request['title'];
        $title->content= $request['content'];
        $title->save();
        
        return back()->with('success', 'Your Data has been successfully added');
    }
   
}
