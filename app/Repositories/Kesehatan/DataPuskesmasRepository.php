<?php

namespace App\Repositories\Kesehatan;

use App\Models\Kesehatan\DataPuskesmas;
use App\Repositories\BaseRepository;

/**
 * Class DataPuskesmasRepository
 * @package App\Repositories\Kesehatan
 * @version March 21, 2022, 6:58 am UTC
*/

class DataPuskesmasRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Desa',
        'PuskesmasRawatInap',
        'PuskesmasTanpaRawatInap'
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
        return DataPuskesmas::class;
    }
}
