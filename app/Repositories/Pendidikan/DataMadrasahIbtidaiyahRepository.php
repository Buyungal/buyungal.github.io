<?php

namespace App\Repositories\Pendidikan;

use App\Models\Pendidikan\DataMadrasahIbtidaiyah;
use App\Repositories\BaseRepository;

/**
 * Class DataMadrasahIbtidaiyahRepository
 * @package App\Repositories\Pendidikan
 * @version March 21, 2022, 6:38 am UTC
*/

class DataMadrasahIbtidaiyahRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Desa',
        'JumlahSekolahMadrasahIbtidaiyah'
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
        return DataMadrasahIbtidaiyah::class;
    }
}
