<?php

namespace App\Repositories\Pertanian;

use App\Models\Pertanian\DataLuasPanenCabeRawit;
use App\Repositories\BaseRepository;

/**
 * Class DataLuasPanenCabeRawitRepository
 * @package App\Repositories\Pertanian
 * @version March 18, 2022, 11:57 pm UTC
*/

class DataLuasPanenCabeRawitRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'JenisTanaman',
        'Tahun2017',
        'Tahun2018',
        'Tahun2019'
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
        return DataLuasPanenCabeRawit::class;
    }
}
