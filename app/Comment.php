<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'user_id', 'post_id', 'body',
    ];

    public function replies() {
        return $this->hasMany('App\Reply', 'comment_id', 'id');
    }
}
