<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Diary extends Model
{
    protected $fillable = [
        'user_id',
        'title',
        'stream_title',
        'stream_url',
        'before_body',
        'after_body',
        'stream_start'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
