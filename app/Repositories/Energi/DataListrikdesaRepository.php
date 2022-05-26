<?php

namespace App\Repositories\Energi;

use App\Models\Energi\DataListrikdesa;
use App\Repositories\BaseRepository;

/**
 * Class DataListrikdesaRepository
 * @package App\Repositories\Energi
 * @version March 21, 2022, 5:07 am UTC
*/

class DataListrikdesaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Desa',
        'PenggunaListrikPln',
        'PenggunaNonListrikPln'
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
        return DataListrikdesa::class;
    }
}
