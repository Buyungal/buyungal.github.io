<?php

namespace App\Models\Pendidikan;

use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class DataSMK
 * @package App\Models\Pendidikan
 * @version March 21, 2022, 6:53 am UTC
 *
 * @property string $Desa
 * @property string $JumlahSekolahMenengahKejuruan
 */
class DataSMK extends Model
{

    use HasFactory;

    public $table = 'data_s_m_ks';
    



    public $fillable = [
        'Desa',
        'JumlahSekolahMenengahKejuruan'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'Desa' => 'string',
        'JumlahSekolahMenengahKejuruan' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Desa' => 'required',
        'JumlahSekolahMenengahKejuruan' => 'required'
    ];

    
}
