<?php

namespace App\Models\Energi;

use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class DataListrik
 * @package App\Models\Energi
 * @version March 21, 2022, 4:53 am UTC
 *
 * @property string $ListrikPln
 * @property string $ListrikNonPln
 * @property string $BukanPenggunaListrik
 */
class DataListrik extends Model
{

    use HasFactory;

    public $table = 'data_listriks';
    



    public $fillable = [
        'ListrikPln',
        'ListrikNonPln',
        'BukanPenggunaListrik'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'ListrikPln' => 'string',
        'ListrikNonPln' => 'string',
        'BukanPenggunaListrik' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'ListrikPln' => 'required',
        'ListrikNonPln' => 'required',
        'BukanPenggunaListrik' => 'required'
    ];

    
}
