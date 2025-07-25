<?php

namespace App\Models;
use App\Models\VedioPosts;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;



class PostLikeDislikeModel extends Model
{
    protected $fillable = [
        'user_id',
        'post_id',
      'is_like',
    ];
    
    protected $table = 'post_like_dislike'; 
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function post(): BelongsTo 
    {
        return $this->belongsTo(VedioPosts::class, 'post_id');
    }
}
