<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Cv extends Model
{

    protected $table = 'cv';

    protected $fillable =[
        'name',
        'surname',
        'father_name',
        'age',
        'education',
        'education_school_name',
        'speciality',
        'experience',
        'computer_skills',
        'hobby',
        'language',
        'city',
        'email',
        'phone',
        'cv_file',
        'cv_video',
        'cv_status',
        'information'
    ];

    protected $guarded = [];

}
