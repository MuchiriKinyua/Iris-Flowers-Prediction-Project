<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    public $table = 'data';

    public $fillable = [
        'Id',
        'SepalLengthCm',
        'SepalWidthCm',
        'PetalLengthCm',
        'PetalWidthCm',
        'Species'
    ];

    protected $casts = [
        'SepalLengthCm' => 'decimal:2',
        'SepalWidthCm' => 'decimal:2',
        'PetalLengthCm' => 'decimal:2',
        'PetalWidthCm' => 'decimal:2',
        'Species' => 'string'
    ];

    public static array $rules = [
        'Id' => 'nullable',
        'SepalLengthCm' => 'nullable|numeric',
        'SepalWidthCm' => 'nullable|numeric',
        'PetalLengthCm' => 'nullable|numeric',
        'PetalWidthCm' => 'nullable|numeric',
        'Species' => 'nullable|string|max:15',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
