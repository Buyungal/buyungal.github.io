<?php

namespace App\Repositories\Pertanian;

use App\Models\Pertanian\DataTernak;
use App\Repositories\BaseRepository;

/**
 * Class DataTernakRepository
 * @package App\Repositories\Pertanian
 * @version March 21, 2022, 4:43 am UTC
*/

class DataTernakRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'JenisTernak',
        'Tahun2018',
        'Tahun2019',
        'Tahun2020'
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
        return DataTernak::class;
    }
}
