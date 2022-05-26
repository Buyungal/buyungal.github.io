<?php

namespace App\Http\Controllers;

use App\Models\SemuaData;
use App\Models\Agama\DataTempatIbadah;

use App\Models\Energi\DataListrik;
use App\Models\Energi\DataListrikdesa;

use App\Models\Geografi\dataluaswilayahh;

use App\Models\Kependudukan\DataKepadatanPenduduk;
use App\Models\Kependudukan\DataPenduduk;

use App\Models\Pendidikan\DataMA;
use App\Models\Pendidikan\DataMadrasahIbtidaiyah;
use App\Models\Pendidikan\DataMTS;
use App\Models\Pendidikan\DataSekolahDasar;
use App\Models\Pendidikan\DataSMA;
use App\Models\Pendidikan\DataSMK;
use App\Models\Pendidikan\DataSMP; 


use App\Models\Kesehatan\DataPusKb;
use App\Models\Kesehatan\DataPuskesmas;
use App\Models\Kesehatan\DataTenagaKesehatan;

use App\Models\Pertanian\DataLuasPanenCabeRawit;
use App\Models\Pertanian\DataLuasPanenTomat;
use App\Models\Pertanian\DataProduksiBuah;
use App\Models\Pertanian\DataProduksiCabeRawit;
use App\Models\Pertanian\DataProduksiTomat;
use App\Models\Pertanian\DataTernak;
use App\Models\Pertanian\DataUnggas;

use App\Http\Requests\StoreSemuaDataRequest;
use App\Http\Requests\UpdateSemuaDataRequest;

class SemuaDataController extends Controller
{ 
    // keagamaan
    public function hasilpencacahanDataTempatIbadah()
    {
        $hasilpencacahanDataTempatIbadah = DataTempatIbadah::all();
       // dd($hasilpencacahanDataTempatIbadah);
        return view('/keagamaan',[
            'hasilpencacahanDataTempatIbadah'=>$hasilpencacahanDataTempatIbadah
        ]);
    }
 
// energi
    public function hasilDataListrikku()
    {
        $hasilpencacahanDataListrik = DataListrik::all();
        $hasilpencacahanDataListrikdesa = DataListrikdesa::all();
       // dd($hasilpencacahanDataListrikdesa);
        return view('/energi',[
            'hasilpencacahanDataListrik'=>$hasilpencacahanDataListrik,
            'hasilpencacahanDataListrikdesa'=>$hasilpencacahanDataListrikdesa
        ]);
    }
 
    // geografi

    public function hasildataluaswilayah()
    {
        $hasilpencacahandataluaswilayahh = dataluaswilayahh::all();
       // dd($hasilpencacahandataluaswilayahh);
         return view('/geografi',[
             'hasilpencacahandataluaswilayahh'=>$hasilpencacahandataluaswilayahh
         ]);
    }
 
    // penduduk 
    public function hasilpdatakepadatanpenduduk()
    {
        $hasilpencacahadatakepadatanpenduduk = DataKepadatanPenduduk::all();
        $hasildesapendudukk = DataPenduduk::all();
       // dd($hasilpencacahadatakepadatanpenduduk);
         return view('/penduduk',[
             'hasilpencacahadatakepadatanpenduduk'=>$hasilpencacahadatakepadatanpenduduk,
             'hasildesapendudukk'=>$hasildesapendudukk
         ]);
    }


    
    //  pendidikan
    public function hasildatapendidikan()
    {
        $hasildatapendidikannDataSekolahDasar = DataSekolahDasar::all(); 
        $hasildatapendidikannDSMA = DataSMA::all(); 
        $hasildatapendidikannDatDataSMK = DataSMK::all(); 
        $hasildatapendidikannDtDataSMP = DataSMP::all(); 
        $hasildatapeMadrasahIbtidaiyah = DataMadrasahIbtidaiyah::all(); 
        $hasildatapendidikannDtDtaMTS = DataMTS::all(); 
        $hasildatapendidikannMA = DataMA::all();
        
        //dd($hasildatapeMadrasahIbtidaiyah);
         return view('/pendidikan',[
            'hasildatapendidikannDataSekolahDasar'=>$hasildatapendidikannDataSekolahDasar,
            'hasildatapendidikannDSMA'=>$hasildatapendidikannDSMA,
            'hasildatapendidikannDatDataSMK'=>$hasildatapendidikannDatDataSMK,
            'hasildatapendidikannDtDataSMP'=>$hasildatapendidikannDtDataSMP,
            'hasildatapeMadrasahIbtidaiyah'=>$hasildatapeMadrasahIbtidaiyah,
            'hasildatapendidikannDtDtaMTS'=>$hasildatapendidikannDtDtaMTS,
             'hasildatapendidikannMA'=>$hasildatapendidikannMA 
         ]);
    }




    //  kesehatan
    public function hasildatapuskb()
    {
        $hasildatapuskeluargab = DataPusKb::all();
        $hasildatatenaga = DataTenagaKesehatan::all();
        $hasildatabanPusk = DataPuskesmas::all();
        
     //dd($hasildatabanPusk);
         return view('/kesehatan',[
             'hasildatapuskeluargab'=>$hasildatapuskeluargab,
             'hasildatatenaga'=>$hasildatatenaga,
             'hasildatabanPusk'=>$hasildatabanPusk
         ]);
    }

    //  pertanian

    public function datapertanianhasil()
    {
        $hasilDataLuasPanenCabeRawit = DataLuasPanenCabeRawit::all(); 
         $hasilDataLuasPanenTomat = DataLuasPanenTomat::all();
         $hasilDataDataProduksiBuah = DataProduksiBuah::all();
         $hasilDataProduksiCabeRawit = DataProduksiCabeRawit::all();
         $hasilDataProduksiTomat = DataProduksiTomat::all();
         $hasilDataTernak = DataTernak::all();
         $hasilDataUnggas = DataUnggas::all();

       // dd($hasilDataLuasPanenCabeRawit);
         return view('/pertanian',[
             'hasilDataLuasPanenCabeRawit'=>$hasilDataLuasPanenCabeRawit,
             'hasilDataLuasPanenTomat'=>$hasilDataLuasPanenTomat,
             'hasilDataDataProduksiBuah'=>$hasilDataDataProduksiBuah,
             'hasilDataProduksiCabeRawit'=>$hasilDataProduksiCabeRawit,
             'hasilDataProduksiTomat'=>$hasilDataProduksiTomat,
             'hasilDataTernak'=>$hasilDataTernak,
             'hasilDataUnggas'=>$hasilDataUnggas,
         ]);
    }
  
 

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSemuaDataRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSemuaDataRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SemuaData  $semuaData
     * @return \Illuminate\Http\Response
     */
    public function show(SemuaData $semuaData)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SemuaData  $semuaData
     * @return \Illuminate\Http\Response
     */
    public function edit(SemuaData $semuaData)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSemuaDataRequest  $request
     * @param  \App\Models\SemuaData  $semuaData
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSemuaDataRequest $request, SemuaData $semuaData)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SemuaData  $semuaData
     * @return \Illuminate\Http\Response
     */
    public function destroy(SemuaData $semuaData)
    {
        //
    }
}
