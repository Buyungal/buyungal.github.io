<?php

namespace App\Repositories\Pertanian;

use App\Models\Pertanian\DataUnggas;
use App\Repositories\BaseRepository;

/**
 * Class DataUnggasRepository
 * @package App\Repositories\Pertanian
 * @version March 21, 2022, 4:46 am UTC
*/

class DataUnggasRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'JenisUnggas',
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
        return DataUnggas::class;
    }
}
