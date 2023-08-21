<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;


class Testimonial extends Model
{
    use Translatable;

    protected $table = 'testimonial';

    protected $fillable = [
        'name',
        'body',
        'work_desc',
        'image',
        'work_image'
    ];

    protected $guarded  = [];

    protected $translatable = [
        'name',
        'body',
        'work_desc'
    ];

}
