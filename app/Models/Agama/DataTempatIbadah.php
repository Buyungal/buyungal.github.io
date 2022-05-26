<?php

namespace App\Models\Agama;

use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class DataTempatIbadah
 * @package App\Models\Agama
 * @version March 21, 2022, 7:15 am UTC
 *
 * @property string $Desa
 * @property string $JumlahMasjid
 * @property string $JumlahMushola
 * @property string $JumlahGerejaProtestan
 * @property string $JumlahGerejaKatholik
 * @property string $JumlahPura
 * @property string $JumlahVihara
 */
class DataTempatIbadah extends Model
{

    use HasFactory;

    public $table = 'data_tempat_ibadahs';
    



    public $fillable = [
        'Desa',
        'JumlahMasjid',
        'JumlahMushola',
        'JumlahGerejaProtestan',
        'JumlahGerejaKatholik',
        'JumlahPura',
        'JumlahVihara'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'Desa' => 'string',
        'JumlahMasjid' => 'string',
        'JumlahMushola' => 'string',
        'JumlahGerejaProtestan' => 'string',
        'JumlahGerejaKatholik' => 'string',
        'JumlahPura' => 'string',
        'JumlahVihara' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Desa' => 'required',
        'JumlahMasjid' => 'required',
        'JumlahMushola' => 'required',
        'JumlahGerejaProtestan' => 'required',
        'JumlahGerejaKatholik' => 'required',
        'JumlahPura' => 'required',
        'JumlahVihara' => 'required'
    ];

    
}
