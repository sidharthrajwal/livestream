<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class VedioPosts extends Model
{

    public function postLikesDislikes(): HasMany
    {
        return $this->hasMany(PostLikeDislikeModel::class, 'post_id');
    }

}
