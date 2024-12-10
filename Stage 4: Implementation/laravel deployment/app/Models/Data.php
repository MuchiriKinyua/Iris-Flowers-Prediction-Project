<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    public $table = 'data';

    public $fillable = [
        'sepal_length',
        'sepal_width',
        'petal_length',
        'petal_width',
        'species'
    ];

    protected $casts = [
        'sepal_length' => 'float',
        'sepal_width' => 'float',
        'petal_length' => 'float',
        'petal_width' => 'float',
        'species' => 'string'
    ];

    public static array $rules = [
        'sepal_length' => 'nullable|numeric',
        'sepal_width' => 'nullable|numeric',
        'petal_length' => 'nullable|numeric',
        'petal_width' => 'nullable|numeric',
        'species' => 'nullable|string|max:50',
        'created_at' => 'required',
        'updated_at' => 'required'
    ];

    public function predictions(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Prediction::class, 'data_id');
    }
}
