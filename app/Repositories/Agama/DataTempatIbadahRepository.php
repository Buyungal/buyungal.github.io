<?php

namespace App\Repositories\Agama;

use App\Models\Agama\DataTempatIbadah;
use App\Repositories\BaseRepository;

/**
 * Class DataTempatIbadahRepository
 * @package App\Repositories\Agama
 * @version March 21, 2022, 7:15 am UTC
*/

class DataTempatIbadahRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Desa',
        'JumlahMasjid',
        'JumlahMushola',
        'JumlahGerejaProtestan',
        'JumlahGerejaKatholik',
        'JumlahPura',
        'JumlahVihara'
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
        return DataTempatIbadah::class;
    }
}
