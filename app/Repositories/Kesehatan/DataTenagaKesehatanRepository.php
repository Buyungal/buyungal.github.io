<?php

namespace App\Repositories\Kesehatan;

use App\Models\Kesehatan\DataTenagaKesehatan;
use App\Repositories\BaseRepository;

/**
 * Class DataTenagaKesehatanRepository
 * @package App\Repositories\Kesehatan
 * @version March 21, 2022, 6:32 am UTC
*/

class DataTenagaKesehatanRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'JumlahDokter',
        'JumlahPerawat',
        'JumlahBidan',
        'JumlahFarmasi',
        'JumlahAhliGizi'
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
        return DataTenagaKesehatan::class;
    }
}
