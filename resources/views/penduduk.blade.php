@extends('layouts.TAMPILAN')

@section('content')


<main> 
  <div class="px-1 py-1 my-1 text-center">
    <img class="d-block mx-auto mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
    <h1 class="display-5 fw-bold">STATDA KECAMATAN DULUPI</h1>
    <div class="col-lg-6 mx-auto">
      <p class="lead mb-4 fw-bold">KEPENDUDUKAN</p>
      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">  </div>
    </div>
  </div>
 

  <div class="b-example-divider"></div>

  <div class="container col-xl-12 col-xxl-12 px-4 py-1">
    <div class="row align-items-center g-lg-12 py-1">
      <div class="col-lg-12 ">
      <h3 class="fw-bold lh-4"> Data Penduduk Per Desa Tahun 2019</h3>
        <p class="col-lg-12 text-justify">Jumlah penduduk di Kecamatan Dulupi pada tahun 2019  tercatat sejumlah 17380 jiwa, yang terdiri dari 8869 laki-laki dan 8511 perempuan, dengan rata-rata rasio penduduk 104.
!.</p>

      </div>
      
    </div>
  </div>

  <div class="b-example-divider"></div>

  <div class="container my-5">
    <div class="row p-1 pb-1 pe-lg-1 pt-lg-1 align-items-center rounded-3 border shadow-lg">
      <div class="col-lg-12 p-2 p-lg-1 pt-lg-1">
        <h3 class="fw-bold lh-4"> Data Penduduk Per Desa Tahun 2019</h3>
        <table class="table table-bordered table-hover">
          <thead>
            <tr>
              <th class="text-center">Desa</th>
              <th class="text-center">Laki-laki (Jiwa)</th>
              <th class="text-center">Perempuan (Jiwa)</th> 
              <th class="text-center">Rasio</th> 
            </tr>
          </thead>
          <tbody>
          @foreach($hasildesapendudukk as $kegiatanhasilhasilpencacahanhasildesapendudukk)
            <tr data-widget="expandable-table" aria-expanded="false">
              <td class="text-left">{{ $kegiatanhasilhasilpencacahanhasildesapendudukk->Desa }}</td>
              <td class="text-center">{{ $kegiatanhasilhasilpencacahanhasildesapendudukk->LakiLaki}}</td>
              <td class="text-center">{{ $kegiatanhasilhasilpencacahanhasildesapendudukk->Perempuan}}</td>
              <td class="text-center">{{ $kegiatanhasilhasilpencacahanhasildesapendudukk->Rasio}}</td>
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
      <h3 class="fw-bold lh-4">Data Kepadatan Penduduk Tahun 2019</h3>
      <p class="col-lg-12 text-justify">Desa yang terpadat penduduknya di kecamatan dulupi tahun 2019 yaitu desa Dulupi dengan kepadatan penduduk sebanyak 228 jiwa/km2 dan desa yang tidak padat penduduknya yaitu desa Tangga Barito dengan kepadatan penduduk sebanyak 18 jiwa/km2.</p>  
      </div>
      
    </div>
  </div>

  <div class="b-example-divider"></div>

  <div class="container my-5">
    <div class="row p-1 pb-1 pe-lg-1 pt-lg-1 align-items-center rounded-3 border shadow-lg">
      <div class="col-lg-12 p-2 p-lg-1 pt-lg-1">
        <h3 class="fw-bold lh-4">Data Kepadatan Penduduk Tahun 2019</h3>
        <table class="table table-bordered table-hover">
          <thead>
            <tr>
              <th class="text-center">Desa</th>
              <th class="text-center">Jumlah Penduduk (Jiwa)</th>
              <th class="text-center">Luas Wilayah (Ha)</th> 
              <th class="text-center">Kepadatan Penduduk</th> 
            </tr>
          </thead>
          <tbody>
          @foreach($hasilpencacahadatakepadatanpenduduk as $kegiatanhasilhasilkepadatanpend)
            <tr data-widget="expandable-table" aria-expanded="false">
              <td class="text-left">{{ $kegiatanhasilhasilkepadatanpend->Desa }}</td>
              <td class="text-center">{{ $kegiatanhasilhasilkepadatanpend->Penduduk}}</td>
              <td class="text-center">{{ $kegiatanhasilhasilkepadatanpend->LuasWilayah}}</td>
              <td class="text-center">{{ $kegiatanhasilhasilkepadatanpend->KepadatanPenduduk}}</td>
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