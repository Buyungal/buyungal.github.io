<?php

namespace App\Models\Pendidikan;

use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class DataMadrasahIbtidaiyah
 * @package App\Models\Pendidikan
 * @version March 21, 2022, 6:38 am UTC
 *
 * @property string $Desa
 * @property string $JumlahSekolahMadrasahIbtidaiyah
 */
class DataMadrasahIbtidaiyah extends Model
{

    use HasFactory;

    public $table = 'data_madrasah_ibtidaiyahs';
    



    public $fillable = [
        'Desa',
        'JumlahSekolahMadrasahIbtidaiyah'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'Desa' => 'string',
        'JumlahSekolahMadrasahIbtidaiyah' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Desa' => 'required',
        'JumlahSekolahMadrasahIbtidaiyah' => 'required'
    ];

    
}
