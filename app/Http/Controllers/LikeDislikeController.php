<?php

namespace App\Http\Controllers;

use App\Models\PostLikeDislikeModel;
use App\Models\VedioPosts;
use Illuminate\Http\Request;
use Auth;

class LikeDislikeController extends Controller
{
    function Customlike(Request $request)
    {
        $post_like_type = $request->post_like_type;

        $UserId = Auth::user()->id;

        if ($post_like_type == 'like') {
            $posts = PostLikeDislikeModel::where('user_id', $UserId)->where('post_id', $request->post_id)->first();

            if ($posts != null) {
                PostLikeDislikeModel::where('user_id', $UserId)
                    ->where('post_id', $request->post_id)
                    ->update(['is_like' => 1]);

                $count = PostLikeDislikeModel::where('post_id', $request->post_id)->count();
                // dd($count);
                return response()->json([
                    'like_status' => 'active',
                    'is_like' => '1',
                    'count' => $count,
                    'message' => 'Information reciesved successfully!'
                ], 200);
            } else {
                $NewPostlike = PostLikeDislikeModel::create([
                    'user_id' => $UserId,
                    'post_id' => $request->post_id,
                    'is_like' => '1',
                ]);

                $count = PostLikeDislikeModel::where('post_id', $request->post_id)->count();

                return response()->json([
                    'like_status' => 'not_active',
                    'count' => $count,
                    'message' => 'like added successfully!'
                ], 200);
            }
        } else {
            $NewPostlike = PostLikeDislikeModel::where('user_id', $UserId)
                ->where('post_id', $request->post_id)
                ->delete();
                $count = PostLikeDislikeModel::where('post_id', $request->post_id)->count();
            if ($NewPostlike) {
                return response()->json([
                    'is_like' => '0',
                    'count' => $count,
                    'message' => 'dislike status changed successfully!'
                ], 200);
            }
        }
    }
}
