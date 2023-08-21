<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;


class Project extends Model
{

    use Translatable;

    protected $table = 'projects';

    protected $fillable = [
        'name',
        'description',
        'body',
        'image',
        'slug'
    ];

    protected $guarded = [];

    protected $translatable = [
        'name',
        'description',
        'body'
    ];

}
