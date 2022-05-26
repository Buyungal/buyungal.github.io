<?php

namespace App\Models\Kependudukan;

use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class DataKepadatanPenduduk
 * @package App\Models\Kependudukan
 * @version March 21, 2022, 4:35 am UTC
 *
 * @property string $Desa
 * @property string $Penduduk
 * @property string $LuasWilayah
 * @property string $KepadatanPenduduk
 */
class DataKepadatanPenduduk extends Model
{

    use HasFactory;

    public $table = 'data_kepadatan_penduduks';
    



    public $fillable = [
        'Desa',
        'Penduduk',
        'LuasWilayah',
        'KepadatanPenduduk'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'Desa' => 'string',
        'Penduduk' => 'string',
        'LuasWilayah' => 'string',
        'KepadatanPenduduk' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Desa' => 'required',
        'Penduduk' => 'required',
        'LuasWilayah' => 'required',
        'KepadatanPenduduk' => 'required'
    ];

    
}
