<?php
namespace App\Http\Controllers;
use App\Models\VedioPosts;
use Illuminate\Http\Request;

class MainViewController extends Controller
{
    public  function index()
    {
        $posts = VedioPosts::all();
        return view('home', compact('posts'));
    }
}
