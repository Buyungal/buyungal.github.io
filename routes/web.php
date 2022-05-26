<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::group(['prefix' => 'geografi'], function () {
    Route::resource('dataluaswilayahhs', App\Http\Controllers\Geografi\dataluaswilayahhController::class, ["as" => 'geografi']);
});


Route::group(['prefix' => 'kependudukan'], function () {
    Route::resource('dataPenduduks', App\Http\Controllers\Kependudukan\DataPendudukController::class, ["as" => 'kependudukan']);
});



Route::group(['prefix' => 'pertanian'], function () {
    Route::resource('dataLuasPanenCabeRawits', App\Http\Controllers\Pertanian\DataLuasPanenCabeRawitController::class, ["as" => 'pertanian']);
});


Route::group(['prefix' => 'pertanian'], function () {
    Route::resource('dataLuasPanenTomats', App\Http\Controllers\Pertanian\DataLuasPanenTomatController::class, ["as" => 'pertanian']);
});


Route::group(['prefix' => 'pertanian'], function () {
    Route::resource('dataProduksiTomats', App\Http\Controllers\Pertanian\DataProduksiTomatController::class, ["as" => 'pertanian']);
});


Route::group(['prefix' => 'pertanian'], function () {
    Route::resource('dataProduksiCabeRawits', App\Http\Controllers\Pertanian\DataProduksiCabeRawitController::class, ["as" => 'pertanian']);
});


Route::group(['prefix' => 'kependudukan'], function () {
    Route::resource('dataKepadatanPenduduks', App\Http\Controllers\Kependudukan\DataKepadatanPendudukController::class, ["as" => 'kependudukan']);
});


Route::group(['prefix' => 'pertanian'], function () {
    Route::resource('dataProduksiBuahs', App\Http\Controllers\Pertanian\DataProduksiBuahController::class, ["as" => 'pertanian']);
});


Route::group(['prefix' => 'pertanian'], function () {
    Route::resource('dataTernaks', App\Http\Controllers\Pertanian\DataTernakController::class, ["as" => 'pertanian']);
});


Route::group(['prefix' => 'pertanian'], function () {
    Route::resource('dataUnggas', App\Http\Controllers\Pertanian\DataUnggasController::class, ["as" => 'pertanian']);
});


Route::group(['prefix' => 'energi'], function () {
    Route::resource('dataListriks', App\Http\Controllers\Energi\DataListrikController::class, ["as" => 'energi']);
});


Route::group(['prefix' => 'energi'], function () {
    Route::resource('dataListrikdesas', App\Http\Controllers\Energi\DataListrikdesaController::class, ["as" => 'energi']);
});


Route::group(['prefix' => 'kesehatan'], function () {
    Route::resource('dataTenagaKesehatans', App\Http\Controllers\Kesehatan\DataTenagaKesehatanController::class, ["as" => 'kesehatan']);
});


Route::group(['prefix' => 'pendidikan'], function () {
    Route::resource('dataSekolahDasars', App\Http\Controllers\Pendidikan\DataSekolahDasarController::class, ["as" => 'pendidikan']);
});


Route::group(['prefix' => 'pendidikan'], function () {
    Route::resource('dataMadrasahIbtidaiyahs', App\Http\Controllers\Pendidikan\DataMadrasahIbtidaiyahController::class, ["as" => 'pendidikan']);
});


Route::group(['prefix' => 'pendidikan'], function () {
    Route::resource('dataSMPs', App\Http\Controllers\Pendidikan\DataSMPController::class, ["as" => 'pendidikan']);
});


Route::group(['prefix' => 'pendidikan'], function () {
    Route::resource('dataMTs', App\Http\Controllers\Pendidikan\DataMTSController::class, ["as" => 'pendidikan']);
});


Route::group(['prefix' => 'pendidikan'], function () {
    Route::resource('dataSMAs', App\Http\Controllers\Pendidikan\DataSMAController::class, ["as" => 'pendidikan']);
});


Route::group(['prefix' => 'pendidikan'], function () {
    Route::resource('dataMAs', App\Http\Controllers\Pendidikan\DataMAController::class, ["as" => 'pendidikan']);
});


Route::group(['prefix' => 'pendidikan'], function () {
    Route::resource('dataSMKs', App\Http\Controllers\Pendidikan\DataSMKController::class, ["as" => 'pendidikan']);
});


Route::group(['prefix' => 'kesehatan'], function () {
    Route::resource('dataPuskesmas', App\Http\Controllers\Kesehatan\DataPuskesmasController::class, ["as" => 'kesehatan']);
});


Route::group(['prefix' => 'kesehatan'], function () {
    Route::resource('dataPusKbs', App\Http\Controllers\Kesehatan\DataPusKbController::class, ["as" => 'kesehatan']);
});


Route::group(['prefix' => 'agama'], function () {
    Route::resource('dataTempatIbadahs', App\Http\Controllers\Agama\DataTempatIbadahController::class, ["as" => 'agama']);
});


Route::get('/keagamaan', [App\Http\Controllers\SemuaDataController::class, 'hasilpencacahanDataTempatIbadah']);

Route::get('/geografi', [App\Http\Controllers\SemuaDataController::class, 'hasildataluaswilayah']);

Route::get('/penduduk', [App\Http\Controllers\SemuaDataController::class, 'hasilpdatakepadatanpenduduk']);

Route::get('/pendidikan', [App\Http\Controllers\SemuaDataController::class, 'hasildatapendidikan']);

Route::get('/kesehatan', [App\Http\Controllers\SemuaDataController::class, 'hasildatapuskb']);

Route::get('/pertanian', [App\Http\Controllers\SemuaDataController::class, 'datapertanianhasil']);

Route::get('/energi', [App\Http\Controllers\SemuaDataController::class, 'hasilDataListrikku']);



 