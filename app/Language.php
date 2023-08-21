<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;


class Language extends Model
{
    use Translatable;

    protected $table = 'languages';

    protected $fillable = [
        'name'
    ];

    protected $guarded = [];

    protected $translatable = [
        'name'
    ];

}
