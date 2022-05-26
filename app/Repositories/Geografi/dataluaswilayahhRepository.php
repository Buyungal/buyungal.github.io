<?php

namespace App\Repositories\Geografi;

use App\Models\Geografi\dataluaswilayahh;
use App\Repositories\BaseRepository;

/**
 * Class dataluaswilayahhRepository
 * @package App\Repositories\Geografi
 * @version March 18, 2022, 4:24 pm UTC
*/

class dataluaswilayahhRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Desa',
        'LuasWilayah',
        'Persentase'
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
        return dataluaswilayahh::class;
    }
}
