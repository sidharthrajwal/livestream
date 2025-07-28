<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class VedioPosts extends Model
{

    protected $fillable = [
        'post_title',
        'post_description',
        'post_thumbnail',
        'post_file_title',
    ];
    
    public function postLikesDislikes(): HasMany
    {
        return $this->hasMany(PostLikeDislikeModel::class, 'post_id');
    }

}
