<?php

namespace App\Models\Pertanian;

use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class DataUnggas
 * @package App\Models\Pertanian
 * @version March 21, 2022, 4:46 am UTC
 *
 * @property string $JenisUnggas
 * @property string $Tahun2018
 * @property string $Tahun2019
 * @property string $Tahun2020
 */
class DataUnggas extends Model
{

    use HasFactory;

    public $table = 'data_unggas';
    



    public $fillable = [
        'JenisUnggas',
        'Tahun2018',
        'Tahun2019',
        'Tahun2020'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'JenisUnggas' => 'string',
        'Tahun2018' => 'string',
        'Tahun2019' => 'string',
        'Tahun2020' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'JenisUnggas' => 'required',
        'Tahun2018' => 'required',
        'Tahun2019' => 'required',
        'Tahun2020' => 'required'
    ];

    
}
