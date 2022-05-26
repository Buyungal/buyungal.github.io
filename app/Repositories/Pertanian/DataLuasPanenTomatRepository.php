<?php

namespace App\Repositories\Pertanian;

use App\Models\Pertanian\DataLuasPanenTomat;
use App\Repositories\BaseRepository;

/**
 * Class DataLuasPanenTomatRepository
 * @package App\Repositories\Pertanian
 * @version March 19, 2022, 12:01 am UTC
*/

class DataLuasPanenTomatRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'JenisTanaman',
        'Tahun2017',
        'Tahun2018',
        'Tahun2019'
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
        return DataLuasPanenTomat::class;
    }
}
