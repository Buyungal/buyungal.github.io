<?php

namespace App\Models\Pendidikan;

use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class DataSMA
 * @package App\Models\Pendidikan
 * @version March 21, 2022, 6:47 am UTC
 *
 * @property string $Desa
 * @property string $JumlahSekolahMenengahAtas
 */
class DataSMA extends Model
{

    use HasFactory;

    public $table = 'data_s_m_as';
    



    public $fillable = [
        'Desa',
        'JumlahSekolahMenengahAtas'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'Desa' => 'string',
        'JumlahSekolahMenengahAtas' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Desa' => 'required',
        'JumlahSekolahMenengahAtas' => 'required'
    ];

    
}
