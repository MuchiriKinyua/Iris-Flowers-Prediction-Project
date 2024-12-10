<?php

namespace App\Repositories;

use App\Models\Data;
use App\Repositories\BaseRepository;

class DataRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'sepal_length',
        'sepal_width',
        'petal_length',
        'petal_width',
        'species'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Data::class;
    }
}
