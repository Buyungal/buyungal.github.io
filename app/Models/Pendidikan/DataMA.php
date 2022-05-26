<?php

namespace App\Models\Pendidikan;

use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class DataMA
 * @package App\Models\Pendidikan
 * @version March 21, 2022, 6:49 am UTC
 *
 * @property string $Desa
 * @property string $JumlahSekolahMadrasahAliyah
 */
class DataMA extends Model
{

    use HasFactory;

    public $table = 'data_m_as';
    



    public $fillable = [
        'Desa',
        'JumlahSekolahMadrasahAliyah'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'Desa' => 'string',
        'JumlahSekolahMadrasahAliyah' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Desa' => 'required',
        'JumlahSekolahMadrasahAliyah' => 'required'
    ];

    
}
