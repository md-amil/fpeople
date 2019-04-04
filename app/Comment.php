<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    const ACTIVE = 1;
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    public function votes()
    {
        return $this->hasMany(CommentVote::class);
    }
}
