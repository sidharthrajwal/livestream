<?php
namespace App\Http\Controllers\Dasboard;
use App\Http\Controllers\Controller;
use App\Models\VedioPosts;
use Illuminate\Http\Request;

class AllvedioController extends Controller
{
    public function index()
    {
        $videos = VedioPosts::all();
        return view('dashboard.userallvideos', compact('videos'));
    }
    public function editvediopost($id)
    {
       
        $videoToedit = VedioPosts::find($id);
        return view('dashboard.editvideopost', compact('videoToedit'));
    }
}
