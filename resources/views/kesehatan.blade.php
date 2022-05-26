@extends('layouts.TAMPILAN')

@section('content')


<main> 
  <div class="px-1 py-1 my-1 text-center">
    <img class="d-block mx-auto mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
    <h1 class="display-5 fw-bold">STATDA KECAMATAN DULUPI</h1>
    <div class="col-lg-6 mx-auto">
      <p class="lead mb-4 fw-bold">Kesehatan</p>
      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">  </div>
    </div>
  </div>
 

  <div class="b-example-divider"></div>

  <div class="container col-xl-12 col-xxl-12 px-4 py-1">
    <div class="row align-items-center g-lg-12 py-1">
      <div class="col-lg-12 ">
      <h3 class="fw-bold lh-4">Data Jumlah Pasangan Usia Subur Tahun 2019</h3>
        <p class="col-lg-12 text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus minus sed ipsa earum, error voluptatum cupiditate consequatur eaque eligendi, tempora placeat, rem eos rerum ipsam quod in nesciunt optio cum!.</p>
      </div>
      
    </div>
  </div>

  <div class="b-example-divider"></div>

  <div class="container my-5">
    <div class="row p-1 pb-1 pe-lg-1 pt-lg-1 align-items-center rounded-3 border shadow-lg">
      <div class="col-lg-12 p-2 p-lg-1 pt-lg-1">
        <h3 class="fw-bold lh-4">Data Jumlah Pasangan Usia Subur Tahun 2019</h3>
        <table class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th class="text-center">Desa</th>
                      <th class="text-center">Jumlah Pasangan Usia Subur</th>
                      <th class="text-center">Jumlah Peserta Keluarga Berencana</th> 
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($hasildatapuskeluargab as $kegiatanhasilpencacahanDataTempatIbadah)
                    <tr data-widget="expandable-table" aria-expanded="false">
                      <td class="text-center">{{ $kegiatanhasilpencacahanDataTempatIbadah->Desa }}</td>
                      <td class="text-center">{{ $kegiatanhasilpencacahanDataTempatIbadah->JumlahPus }}</td>
                      <td class="text-center">{{ $kegiatanhasilpencacahanDataTempatIbadah->JumlahPesertaKb }}</td> 
                    </tr>
                    @endforeach 
                  </tbody>
                </table>
      </div> 
    </div>
  </div>


  <div class="b-example-divider"></div>

<div class="container col-xl-12 col-xxl-12 px-4 py-1">
  <div class="row align-items-center g-lg-12 py-1">
    <div class="col-lg-12 ">
    <h3 class="fw-bold lh-4">Data Jumlah Tenaga Kesehatan Tahun 2019</h3>
      <p class="col-lg-12 text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus minus sed ipsa earum, error voluptatum cupiditate consequatur eaque eligendi, tempora placeat, rem eos rerum ipsam quod in nesciunt optio cum!.</p>
    </div>
    
  </div>
</div>

<div class="b-example-divider"></div>

<div class="container my-5">
  <div class="row p-1 pb-1 pe-lg-1 pt-lg-1 align-items-center rounded-3 border shadow-lg">
    <div class="col-lg-12 p-2 p-lg-1 pt-lg-1">
      <h3 class="fw-bold lh-4">Data Jumlah Tenaga Kesehatan Tahun 2019</h3>
      <table class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th class="text-center">Jumlah Dokter</th>
                      <th class="text-center">Jumlah Perawat</th>
                      <th class="text-center">Jumlah Bidan</th> 
                      <th class="text-center">Jumlah Farmasi</th>
                      <th class="text-center">Jumlah Ahli Gizi</th> 
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($hasildatatenaga as $kegiatanhasilpencacahantenaga)
                    <tr data-widget="expandable-table" aria-expanded="false">
                      <td class="text-center">{{ $kegiatanhasilpencacahantenaga->JumlahDokter }}</td>
                      <td class="text-center">{{ $kegiatanhasilpencacahantenaga->JumlahPerawat }}</td>
                      <td class="text-center">{{ $kegiatanhasilpencacahantenaga->JumlahBidan }}</td> 
                      <td class="text-center">{{ $kegiatanhasilpencacahantenaga->JumlahFarmasi }}</td>
                      <td class="text-center">{{ $kegiatanhasilpencacahantenaga->JumlahAhliGizi }}</td> 
                    </tr>
                    @endforeach 
                  </tbody>
                </table>
    </div> 
  </div>
</div>

  <div class="b-example-divider"></div>

  <div class="container col-xl-12 col-xxl-12 px-4 py-1">
    <div class="row align-items-center g-lg-12 py-1">
      <div class="col-lg-12 ">
      <h3 class="fw-bold lh-4">Data PUSKESMAS Tahun 2019</h3>
        <p class="col-lg-12 text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus minus sed ipsa earum, error voluptatum cupiditate consequatur eaque eligendi, tempora placeat, rem eos rerum ipsam quod in nesciunt optio cum!.</p>
      </div>
      
    </div>
  </div>

  <div class="b-example-divider"></div>

  <div class="container my-5">
    <div class="row p-1 pb-1 pe-lg-1 pt-lg-1 align-items-center rounded-3 border shadow-lg">
      <div class="col-lg-12 p-2 p-lg-1 pt-lg-1">
        <h3 class="fw-bold lh-4">Data PUSKESMAS Tahun 2019</h3>
        <table class="table table-bordered table-hover">
          <thead>
            <tr>
              <th class="text-center">Desa</th>
              <th class="text-center">Jumlah PUSKESMAS Rawat Inap</th>
              <th class="text-center">Jumlah PUSKESMAS Tanpa Rawat Inap</th>  
            </tr>
          </thead>
          <tbody>
          @foreach($hasildatabanPusk as $kegiatanhasilpuskesmas)
            <tr data-widget="expandable-table" aria-expanded="false">
              <td class="text-left">{{ $kegiatanhasilpuskesmas->Desa }}</td>
              <td class="text-center">{{ $kegiatanhasilpuskesmas->PuskesmasRawatInap }}</td>
              <td class="text-center">{{ $kegiatanhasilpuskesmas->PuskesmasTanpaRawatInap }}</td>  
            </tr>
            @endforeach 
          </tbody>
        </table>
      </div> 
    </div>
  </div>

  <div class="b-example-divider"></div>

  <div class="bg-dark text-secondary px-1 py-1 text-center">
    <div class="py-1">
    <footer class="main-footer">
        <div class="float-right d-none d-sm-block">
            <b>Version</b> 1.0.0
        </div>
        <strong>
           Copyright &copy; Tahun 2022 <a href="https://yunnmootalu.web.app/">Biografiku</a>.
        </strong>
        All rights reserved.
    </footer>
    </div>
  </div> 
</main>

@endsection