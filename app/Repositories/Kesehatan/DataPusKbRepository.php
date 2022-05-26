<?php

namespace App\Repositories\Kesehatan;

use App\Models\Kesehatan\DataPusKb;
use App\Repositories\BaseRepository;

/**
 * Class DataPusKbRepository
 * @package App\Repositories\Kesehatan
 * @version March 21, 2022, 7:06 am UTC
*/

class DataPusKbRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Desa',
        'JumlahPus',
        'JumlahPesertaKb'
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
        return DataPusKb::class;
    }
}
