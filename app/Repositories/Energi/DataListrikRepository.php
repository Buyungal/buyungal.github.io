<?php

namespace App\Repositories\Energi;

use App\Models\Energi\DataListrik;
use App\Repositories\BaseRepository;

/**
 * Class DataListrikRepository
 * @package App\Repositories\Energi
 * @version March 21, 2022, 4:53 am UTC
*/

class DataListrikRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'ListrikPln',
        'ListrikNonPln',
        'BukanPenggunaListrik'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return DataListrik::class;
    }
}
