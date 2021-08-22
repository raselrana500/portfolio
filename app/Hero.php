<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
    protected $fillable = [
        'name', 'profession', 'address','email','phone','facebooklink','instagramlink','twitterlink','youtubelink','linkedlink','github','cvlink'
    ];
}
