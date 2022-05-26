<?php

namespace App\Repositories\Pendidikan;

use App\Models\Pendidikan\DataSMA;
use App\Repositories\BaseRepository;

/**
 * Class DataSMARepository
 * @package App\Repositories\Pendidikan
 * @version March 21, 2022, 6:47 am UTC
*/

class DataSMARepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Desa',
        'JumlahSekolahMenengahAtas'
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
        return DataSMA::class;
    }
}
