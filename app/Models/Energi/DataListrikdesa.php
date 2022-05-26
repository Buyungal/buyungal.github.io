<?php

namespace App\Models\Energi;

use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class DataListrikdesa
 * @package App\Models\Energi
 * @version March 21, 2022, 5:07 am UTC
 *
 * @property string $Desa
 * @property string $PenggunaListrikPln
 * @property string $PenggunaNonListrikPln
 */
class DataListrikdesa extends Model
{

    use HasFactory;

    public $table = 'data_listrikdesas';
    



    public $fillable = [
        'Desa',
        'PenggunaListrikPln',
        'PenggunaNonListrikPln'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'Desa' => 'string',
        'PenggunaListrikPln' => 'string',
        'PenggunaNonListrikPln' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Desa' => 'required',
        'PenggunaListrikPln' => 'required',
        'PenggunaNonListrikPln' => 'required'
    ];

    
}
