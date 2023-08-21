<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;


class Education extends Model
{

    use Translatable;

    protected $table = 'education';

    protected $fillable = [
        'name'
    ];

    protected $guarded = [];

    protected $translatable = [
        'name'
    ];

}
