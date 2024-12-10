<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prediction extends Model
{
    public $table = 'predictions';

    public $fillable = [
        'data_id',
        'predicted_species',
        'confidence_score',
        'model_version'
    ];

    protected $casts = [
        'predicted_species' => 'string',
        'confidence_score' => 'float',
        'model_version' => 'string'
    ];

    public static array $rules = [
        'data_id' => 'nullable',
        'predicted_species' => 'nullable|string|max:50',
        'confidence_score' => 'nullable|numeric',
        'model_version' => 'nullable|string|max:50',
        'created_at' => 'required',
        'updated_at' => 'required'
    ];

    public function data(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Data::class, 'data_id');
    }
}
