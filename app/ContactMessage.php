<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class ContactMessage extends Model
{
    protected $table = 'contact_messages';

    protected $fillable = [
        'name',
        'surname',
        'email',
        'phone',
        'message'
    ];

    protected $guarded = [];
}
