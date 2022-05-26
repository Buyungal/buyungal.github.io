<?php

namespace App\Models\Kesehatan;

use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class DataTenagaKesehatan
 * @package App\Models\Kesehatan
 * @version March 21, 2022, 6:32 am UTC
 *
 * @property string $JumlahDokter
 * @property string $JumlahPerawat
 * @property string $JumlahBidan
 * @property string $JumlahFarmasi
 * @property string $JumlahAhliGizi
 */
class DataTenagaKesehatan extends Model
{

    use HasFactory;

    public $table = 'data_tenaga_kesehatans';
    



    public $fillable = [
        'JumlahDokter',
        'JumlahPerawat',
        'JumlahBidan',
        'JumlahFarmasi',
        'JumlahAhliGizi'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'JumlahDokter' => 'string',
        'JumlahPerawat' => 'string',
        'JumlahBidan' => 'string',
        'JumlahFarmasi' => 'string',
        'JumlahAhliGizi' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'JumlahDokter' => 'required',
        'JumlahPerawat' => 'required',
        'JumlahBidan' => 'required',
        'JumlahFarmasi' => 'required',
        'JumlahAhliGizi' => 'required'
    ];

    
}
