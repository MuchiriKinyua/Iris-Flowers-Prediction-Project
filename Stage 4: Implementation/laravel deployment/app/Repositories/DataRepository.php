<?php

namespace App\Repositories;

use App\Models\Data;
use App\Repositories\BaseRepository;

class DataRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'Id',
        'SepalLengthCm',
        'SepalWidthCm',
        'PetalLengthCm',
        'PetalWidthCm',
        'Species'
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
