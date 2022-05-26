<?php

namespace App\Models\Pendidikan;

use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class DataSekolahDasar
 * @package App\Models\Pendidikan
 * @version March 21, 2022, 6:35 am UTC
 *
 * @property string $Desa
 * @property string $JumlahSekolahDasar
 */
class DataSekolahDasar extends Model
{

    use HasFactory;

    public $table = 'data_sekolah_dasars';
    



    public $fillable = [
        'Desa',
        'JumlahSekolahDasar'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'Desa' => 'string',
        'JumlahSekolahDasar' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Desa' => 'required',
        'JumlahSekolahDasar' => 'required'
    ];

    
}
