<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    //
    protected $fillable = [
        'title',
        'brief',
        'image',
        'youtube_link',
        'body',
        'show_section_id',
        'is_active' 
    ];
}
