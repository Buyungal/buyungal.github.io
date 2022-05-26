 
        
@extends('layouts.TAMPILAN')

@section('content')

<main> 
  <div class="px-1 py-1 my-1 text-center">
    <img class="d-block mx-auto mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
    <h1 class="display-5 fw-bold">STATDA KECAMATAN DULUPI</h1>
    <div class="col-lg-6 mx-auto">
      <p class="lead mb-4 fw-bold">Energi</p> 
    </div>
  </div>

  <div class="b-example-divider"></div>

  <div class="container col-xl-12 col-xxl-12 px-4 py-1">
    <div class="row align-items-center g-lg-12 py-1">
      <div class="col-lg-12 ">
      <h3 class="fw-bold lh-4"> (Data Pengguna Listrik)</h3>
        <p class="col-lg-12 text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus minus sed ipsa earum, error voluptatum cupiditate consequatur eaque eligendi, tempora placeat, rem eos rerum ipsam quod in nesciunt optio cum!.</p>
      </div>
      
    </div>
  </div>

  <div class="b-example-divider"></div>

  <div class="container my-5">
    <div class="row p-1 pb-1 pe-lg-1 pt-lg-1 align-items-center rounded-3 border shadow-lg">
      <div class="col-lg-12 p-2 p-lg-1 pt-lg-1">
        <h3 class="fw-bold lh-4"> (Data Pengguna Listrik)</h3>
        <table class="table table-bordered table-hover">
          <thead>
            <tr> 
              <th class="text-center">Jumlah Pengguna Listrik PLN (KK)</th>
              <th class="text-center">Jumlah Pengguna Listrik NON PLN (KK)</th>
              <th class="text-center">Jumlah Bukan Pengguna Listrik (KK)</th>
            </tr>
          </thead>
          <tbody>
          @foreach($hasilpencacahanDataListrik as $datapenggunalist)
            <tr data-widget="expandable-table" aria-expanded="false">
              <td class="text-center">{{ $datapenggunalist->ListrikPln }}</td>
              <td class="text-center">{{ $datapenggunalist->ListrikNonPln }}</td>
              <td class="text-center">{{ $datapenggunalist->BukanPenggunaListrik }}</td>
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
      <h3 class="fw-bold lh-4"> (Data Pengguna Listrik Per Desa)</h3>
        <p class="col-lg-12 text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus minus sed ipsa earum, error voluptatum cupiditate consequatur eaque eligendi, tempora placeat, rem eos rerum ipsam quod in nesciunt optio cum!.</p>
      </div>
      
    </div>
  </div>

  <div class="b-example-divider"></div>

  <div class="container my-5">
    <div class="row p-1 pb-1 pe-lg-1 pt-lg-1 align-items-center rounded-3 border shadow-lg">
      <div class="col-lg-12 p-2 p-lg-1 pt-lg-1">
        <h3 class="fw-bold lh-4"> (Data Pengguna Listrik Per Desa)</h3>
        <table class="table table-bordered table-hover">
          <thead>
            <tr>
              <th class="text-center">Desa</th>
              <th class="text-center">Jumlah Pengguna Listrik PLN dan Non PLN(KK)</th>
              <th class="text-center">Jumlah Tidak Menggunakan Listrik (KK)</th>
            </tr>
          </thead>
          <tbody>
          @foreach($hasilpencacahanDataListrikdesa as $datalistdesa)
            <tr data-widget="expandable-table" aria-expanded="false">
              <td class="text-left">{{ $datalistdesa->Desa }}</td>
              <td class="text-center">{{ $datalistdesa->PenggunaListrikPln }}</td>
              <td class="text-center">{{ $datalistdesa->PenggunaNonListrikPln }}</td>
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