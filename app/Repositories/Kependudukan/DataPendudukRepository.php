<?php

namespace App\Repositories\Kependudukan;

use App\Models\Kependudukan\DataPenduduk;
use App\Repositories\BaseRepository;

/**
 * Class DataPendudukRepository
 * @package App\Repositories\Kependudukan
 * @version March 18, 2022, 11:35 pm UTC
*/

class DataPendudukRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Desa',
        'LakiLaki',
        'Perempuan',
        'Rasio'
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
        return DataPenduduk::class;
    }
}
