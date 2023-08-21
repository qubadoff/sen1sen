<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Cv extends Model
{

    protected $table = 'cv';

    protected $fillable =[
        'name',
        'surname',
        'age',
        'education',
        'experience',
        'language',
        'city',
        'email',
        'phone',
        'cv_file',
        'cv_status',
        'information'
    ];

    protected $guarded = [];

}
