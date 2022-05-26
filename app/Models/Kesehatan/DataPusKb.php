<?php

namespace App\Models\Kesehatan;

use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class DataPusKb
 * @package App\Models\Kesehatan
 * @version March 21, 2022, 7:06 am UTC
 *
 * @property string $Desa
 * @property string $JumlahPus
 * @property string $JumlahPesertaKb
 */
class DataPusKb extends Model
{

    use HasFactory;

    public $table = 'data_pus_kbs';
    



    public $fillable = [
        'Desa',
        'JumlahPus',
        'JumlahPesertaKb'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'Desa' => 'string',
        'JumlahPus' => 'string',
        'JumlahPesertaKb' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Desa' => 'required',
        'JumlahPus' => 'required',
        'JumlahPesertaKb' => 'required'
    ];

    
}
