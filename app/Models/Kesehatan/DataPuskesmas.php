<?php

namespace App\Models\Kesehatan;

use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class DataPuskesmas
 * @package App\Models\Kesehatan
 * @version March 21, 2022, 6:58 am UTC
 *
 * @property string $Desa
 * @property string $PuskesmasRawatInap
 * @property string $PuskesmasTanpaRawatInap
 */
class DataPuskesmas extends Model
{

    use HasFactory;

    public $table = 'data_puskesmas';
    



    public $fillable = [
        'Desa',
        'PuskesmasRawatInap',
        'PuskesmasTanpaRawatInap'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'Desa' => 'string',
        'PuskesmasRawatInap' => 'string',
        'PuskesmasTanpaRawatInap' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Desa' => 'required',
        'PuskesmasRawatInap' => 'required',
        'PuskesmasTanpaRawatInap' => 'required'
    ];

    
}
