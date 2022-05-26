<?php

namespace App\Repositories\Pertanian;

use App\Models\Pertanian\DataProduksiCabeRawit;
use App\Repositories\BaseRepository;

/**
 * Class DataProduksiCabeRawitRepository
 * @package App\Repositories\Pertanian
 * @version March 21, 2022, 4:29 am UTC
*/

class DataProduksiCabeRawitRepository extends BaseRepository
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
        return DataProduksiCabeRawit::class;
    }
}
