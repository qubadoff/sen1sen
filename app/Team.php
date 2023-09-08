<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;


class Team extends Model
{
    use Translatable;

    protected $table = 'team';

    protected $fillable = [
        'name',
        'work_desc',
        'image',
        'slug',
        'fb',
        'twitter',
        'instagram',
        'linkedin'
    ];

    protected $translatable = [
        'name',
        'work_desc'
    ];

    protected $guarded = [];

    protected $casts = [];
}
