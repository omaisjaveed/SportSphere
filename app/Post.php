<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['user_id', 'body', 'image'];

    public function teams()
    {
        return $this->belongsToMany(Team::class, 'post_team');
    }
    
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    
        // Post.php
    public function likes()
    {
        return $this->hasMany(PostLike::class);
    }

    public function isLikedByUser() {
        return $this->likes()->where('user_id', auth()->id())->exists();
    }
}
