<?php

namespace App\Repositories;

use App\Models\Ml;
use App\Repositories\BaseRepository;

class MlRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'model_name',
        'version',
        'accuracy'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Ml::class;
    }
}
