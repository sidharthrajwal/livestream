<?php

namespace App\Http\Controllers\Dasboard;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VideoPostController extends Controller
{
    public function index()
    {
        return view('dashboard.vediopost');
    }


    public function createapost(Request $request)
    {
        // dd($request->all());
        $requestedata = $request->validate([
            'post_title' => 'required',
            'post_description' => 'required',
            'post_thumbnail' => 'required',
            'post_file' => 'required',
    
        ]);

       
        
    }
}

