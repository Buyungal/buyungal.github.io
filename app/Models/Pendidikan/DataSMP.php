<?php

namespace App\Models\Pendidikan;

use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class DataSMP
 * @package App\Models\Pendidikan
 * @version March 21, 2022, 6:42 am UTC
 *
 * @property string $Desa
 * @property string $JumlahSekolahMenengahPertama
 */
class DataSMP extends Model
{

    use HasFactory;

    public $table = 'data_s_m_ps';
    



    public $fillable = [
        'Desa',
        'JumlahSekolahMenengahPertama'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'Desa' => 'string',
        'JumlahSekolahMenengahPertama' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Desa' => 'required',
        'JumlahSekolahMenengahPertama' => 'required'
    ];

    
}
