<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    public $timestamps = false;
    //
    protected $guarded = ['id'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    public function exist($inputs)
    {
        return 
        $exists = self::where('user_id', auth()->id())
                       ->where('post_id', $inputs->post_id)
                       ->get();
        
    }

    public function scopeMine($q)
    {
        $q->where('user_id', auth()->id());
    }
}
