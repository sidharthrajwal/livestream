<?php


namespace App\Http\Controllers;
use Auth;
use App\Models\PostLikeDislikeModel;
use App\Models\VedioPosts;
use Illuminate\Http\Request;

class WatchStreamVedioController extends Controller
{
    public function watchStreamVedio($id)
    {
        
        $post_id = $id;
        $UserId = Auth::user()->id;
        $video = PostLikeDislikeModel::where('post_id', $post_id)->count();
        $posts = PostLikeDislikeModel::where('user_id', $UserId)->where('post_id', $post_id)->count();
        
   $likes = $video;
   return view('WatchNow', compact('likes', 'post_id', 'posts'));
    }
}