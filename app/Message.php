<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Message extends Model
{
    protected $table = 'messages';

    protected $fillable = [
        'name',
        'surname',
        'email',
        'phone',
        'message',
    ];
    protected $guarded = [];

    protected $casts = [];
}
