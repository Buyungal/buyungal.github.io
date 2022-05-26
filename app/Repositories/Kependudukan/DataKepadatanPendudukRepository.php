<?php

namespace App\Repositories\Kependudukan;

use App\Models\Kependudukan\DataKepadatanPenduduk;
use App\Repositories\BaseRepository;

/**
 * Class DataKepadatanPendudukRepository
 * @package App\Repositories\Kependudukan
 * @version March 21, 2022, 4:35 am UTC
*/

class DataKepadatanPendudukRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Desa',
        'Penduduk',
        'LuasWilayah',
        'KepadatanPenduduk'
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
        return DataKepadatanPenduduk::class;
    }
}
