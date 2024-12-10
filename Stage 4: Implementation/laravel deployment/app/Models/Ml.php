<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ml extends Model
{
    public $table = 'mls';

    public $fillable = [
        'model_name',
        'version',
        'accuracy'
    ];

    protected $casts = [
        'model_name' => 'string',
        'version' => 'string',
        'accuracy' => 'float'
    ];

    public static array $rules = [
        'model_name' => 'nullable|string|max:100',
        'version' => 'nullable|string|max:50',
        'accuracy' => 'nullable|numeric',
        'created_at' => 'required',
        'updated_at' => 'required'
    ];

    
}
