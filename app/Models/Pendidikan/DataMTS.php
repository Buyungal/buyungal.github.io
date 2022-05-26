<?php

namespace App\Models\Pendidikan;

use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class DataMTS
 * @package App\Models\Pendidikan
 * @version March 21, 2022, 6:44 am UTC
 *
 * @property string $Desa
 * @property string $JumlahSekolahMadrasahTsanawiyah
 */
class DataMTS extends Model
{

    use HasFactory;

    public $table = 'data_m_ts';
    



    public $fillable = [
        'Desa',
        'JumlahSekolahMadrasahTsanawiyah'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'Desa' => 'string',
        'JumlahSekolahMadrasahTsanawiyah' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Desa' => 'required',
        'JumlahSekolahMadrasahTsanawiyah' => 'required'
    ];

    
}
