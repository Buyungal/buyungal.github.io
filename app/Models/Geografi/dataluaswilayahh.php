<?php

namespace App\Models\Geografi;

use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class dataluaswilayahh
 * @package App\Models\Geografi
 * @version March 18, 2022, 4:24 pm UTC
 *
 * @property string $Desa
 * @property string $LuasWilayah
 * @property string $Persentase
 */
class dataluaswilayahh extends Model
{

    use HasFactory;

    public $table = 'dataluaswilayahhs';
    



    public $fillable = [
        'Desa',
        'LuasWilayah',
        'Persentase'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'Desa' => 'string',
        'LuasWilayah' => 'string',
        'Persentase' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Desa' => 'required',
        'LuasWilayah' => 'required',
        'Persentase' => 'required'
    ];

    
}
