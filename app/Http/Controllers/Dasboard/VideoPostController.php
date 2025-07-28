<?php

namespace App\Http\Controllers\Dasboard;
use App\Http\Controllers\Controller;
use App\Models\VedioPosts;
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
                'post_file_title' => 'required',
            ]);
        
            if ($request->hasFile('post_thumbnail')) {
                $file = $request->file('post_thumbnail');
                $thumbnailfilename = time() . '.' . $file->getClientOriginalExtension();
                $file->move(storage_path('app/public/vediopostthumails'), $thumbnailfilename);
                $requestedata['post_thumbnail'] =  $thumbnailfilename;
            }
            
            if ($request->hasFile('post_file_title')) {
                $file = $request->file('post_file_title');
                $vediofilename = time() . '.' . $file->getClientOriginalExtension();
                $file->move(storage_path('app/public/vedioposts'), $vediofilename);
                $requestedata['post_file_title'] =  $vediofilename;
            }
            
          
          $NewPostlike = new VedioPosts();
          VedioPosts::create($requestedata);

          $request->session()->flash('status', 'Video Post Uploaded  successfuly!');
          return redirect()->route('vediopost');


    
        
    }
}

