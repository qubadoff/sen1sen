<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


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

    public function training(): BelongsTo
    {
        return $this->belongsTo(Training::class);
    }
}
