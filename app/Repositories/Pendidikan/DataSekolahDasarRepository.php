<?php

namespace App\Repositories\Pendidikan;

use App\Models\Pendidikan\DataSekolahDasar;
use App\Repositories\BaseRepository;

/**
 * Class DataSekolahDasarRepository
 * @package App\Repositories\Pendidikan
 * @version March 21, 2022, 6:35 am UTC
*/

class DataSekolahDasarRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Desa',
        'JumlahSekolahDasar'
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
        return DataSekolahDasar::class;
    }
}
