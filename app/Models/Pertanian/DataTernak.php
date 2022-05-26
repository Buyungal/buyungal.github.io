<?php

namespace App\Models\Pertanian;

use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class DataTernak
 * @package App\Models\Pertanian
 * @version March 21, 2022, 4:43 am UTC
 *
 * @property string $JenisTernak
 * @property string $Tahun2018
 * @property string $Tahun2019
 * @property string $Tahun2020
 */
class DataTernak extends Model
{

    use HasFactory;

    public $table = 'data_ternaks';
    



    public $fillable = [
        'JenisTernak',
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
        'JenisTernak' => 'string',
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
        'JenisTernak' => 'required',
        'Tahun2018' => 'required',
        'Tahun2019' => 'required',
        'Tahun2020' => 'required'
    ];

    
}
