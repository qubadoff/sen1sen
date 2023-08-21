<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;


class CvStatus extends Model
{
    use Translatable;

    protected $table = 'cv_status';

    protected $fillable = [
        'name'
    ];

    protected $guarded = [];

    protected $translatable = [
        'name'
    ];

}
