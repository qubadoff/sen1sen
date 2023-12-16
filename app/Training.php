<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;


class Training extends Model
{
    use Translatable;

    protected $table = 'trainings';

    protected $fillable = [
        'name',
        'excerpt',
        'body',
        'image',
        'slug'
    ];

    protected $guarded = [];

    protected $casts = [];

    protected $translatable = [
        'name',
        'excerpt',
        'body'
    ];

}
