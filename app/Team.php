<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
   

    protected $fillable = [
        'name',
        'slug',
        'league',
    ];
    
    public function posts()
    {
        return $this->belongsToMany(Post::class, 'post_team');
    }
}