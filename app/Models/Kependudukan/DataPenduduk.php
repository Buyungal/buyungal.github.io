<?php

namespace App\Models\Kependudukan;

use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class DataPenduduk
 * @package App\Models\Kependudukan
 * @version March 18, 2022, 11:35 pm UTC
 *
 * @property string $Desa
 * @property string $LakiLaki
 * @property string $Perempuan
 * @property string $Rasio
 */
class DataPenduduk extends Model
{

    use HasFactory;

    public $table = 'data_penduduks';
    



    public $fillable = [
        'Desa',
        'LakiLaki',
        'Perempuan',
        'Rasio'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'Desa' => 'string',
        'LakiLaki' => 'string',
        'Perempuan' => 'string',
        'Rasio' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Desa' => 'required',
        'LakiLaki' => 'required',
        'Perempuan' => 'required',
        'Rasio' => 'required'
    ];

    
}
