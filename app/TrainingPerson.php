<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class TrainingPerson extends Model
{
    protected $table = 'trainingPeople';

    protected $fillable = [
        'name',
        'surname',
        'email',
        'phone',
        'training_id'
    ];

    protected $guarded = [];

    protected $casts = [];
}
