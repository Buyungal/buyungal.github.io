<?php

namespace App\Repositories\Pendidikan;

use App\Models\Pendidikan\DataSMK;
use App\Repositories\BaseRepository;

/**
 * Class DataSMKRepository
 * @package App\Repositories\Pendidikan
 * @version March 21, 2022, 6:53 am UTC
*/

class DataSMKRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Desa',
        'JumlahSekolahMenengahKejuruan'
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
        return DataSMK::class;
    }
}
