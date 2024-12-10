<?php

namespace App\Repositories;

use App\Models\Prediction;
use App\Repositories\BaseRepository;

class PredictionRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'data_id',
        'predicted_species',
        'confidence_score',
        'model_version'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Prediction::class;
    }
}
