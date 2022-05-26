<?php

namespace App\Repositories\Pertanian;

use App\Models\Pertanian\DataProduksiBuah;
use App\Repositories\BaseRepository;

/**
 * Class DataProduksiBuahRepository
 * @package App\Repositories\Pertanian
 * @version March 21, 2022, 4:41 am UTC
*/

class DataProduksiBuahRepository extends BaseRepository
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
        return DataProduksiBuah::class;
    }
}
