<?php

namespace App\Repositories\Pendidikan;

use App\Models\Pendidikan\DataMTS;
use App\Repositories\BaseRepository;

/**
 * Class DataMTSRepository
 * @package App\Repositories\Pendidikan
 * @version March 21, 2022, 6:44 am UTC
*/

class DataMTSRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Desa',
        'JumlahSekolahMadrasahTsanawiyah'
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
        return DataMTS::class;
    }
}
