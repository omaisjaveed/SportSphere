<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Testimonials extends Model
{
    protected $table = 'testimonials';

    protected $fillable = [
        'id',
        'title',
        'date',
        'description',
        'created_at',
        'updated_at',
    ];
}
