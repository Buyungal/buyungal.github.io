<?php

namespace App\Repositories\Pendidikan;

use App\Models\Pendidikan\DataMA;
use App\Repositories\BaseRepository;

/**
 * Class DataMARepository
 * @package App\Repositories\Pendidikan
 * @version March 21, 2022, 6:49 am UTC
*/

class DataMARepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Desa',
        'JumlahSekolahMadrasahAliyah'
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
        return DataMA::class;
    }
}
