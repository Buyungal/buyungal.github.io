<?php

namespace App\Repositories\Pendidikan;

use App\Models\Pendidikan\DataSMP;
use App\Repositories\BaseRepository;

/**
 * Class DataSMPRepository
 * @package App\Repositories\Pendidikan
 * @version March 21, 2022, 6:42 am UTC
*/

class DataSMPRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Desa',
        'JumlahSekolahMenengahPertama'
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
        return DataSMP::class;
    }
}
