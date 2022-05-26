@extends('layouts.TAMPILAN')

@section('content')


<main> 
  <div class="px-1 py-1 my-1 text-center">
    <img class="d-block mx-auto mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
    <h1 class="display-5 fw-bold">STATDA KECAMATAN DULUPI</h1>
    <div class="col-lg-6 mx-auto">
      <p class="lead mb-4 fw-bold">Pertanian</p>
      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">  </div>
    </div>
  </div>
 

  <div class="b-example-divider"></div>

  <div class="container col-xl-12 col-xxl-12 px-4 py-1">
    <div class="row align-items-center g-lg-12 py-1">
      <div class="col-lg-12 ">
      <h3 class="fw-bold lh-4">Data Luas Panen Tanaman Caberawit</h3>
        <p class="col-lg-12 text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus minus sed ipsa earum, error voluptatum cupiditate consequatur eaque eligendi, tempora placeat, rem eos rerum ipsam quod in nesciunt optio cum!.</p>
      </div>
      
    </div>
  </div>

  <div class="b-example-divider"></div>

  <div class="container my-5">
    <div class="row p-1 pb-1 pe-lg-1 pt-lg-1 align-items-center rounded-3 border shadow-lg">
      <div class="col-lg-12 p-2 p-lg-1 pt-lg-1">
        <h3 class="fw-bold lh-4">Data Luas Panen Tanaman Caberawit</h3>
        <table class="table table-bordered table-hover">
          <thead>
            <tr>
              <th class="text-center">Jenis Tanaman</th>
              <th class="text-center">Tahun 2017 (Ha)</th> 
              <th class="text-center">Tahun 2018 (Ha)</th>
              <th class="text-center">Tahun 2019 (Ha)</th>  
            </tr>
          </thead>
          <tbody>
          @foreach($hasilDataLuasPanenCabeRawit as $PanenCabeRawit)
            <tr data-widget="expandable-table" aria-expanded="false">
              <td class="text-left">{{ $PanenCabeRawit->JenisTanaman}}</td>
              <td class="text-center">{{ $PanenCabeRawit->Tahun2017}}</td> 
              <td class="text-center">{{ $PanenCabeRawit->Tahun2018}}</td> 
              <td class="text-center">{{ $PanenCabeRawit->Tahun2019}}</td> 
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
      <h3 class="fw-bold lh-4">Data Produksi Tanaman Cabe Rawit</h3>
        <p class="col-lg-12 text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus minus sed ipsa earum, error voluptatum cupiditate consequatur eaque eligendi, tempora placeat, rem eos rerum ipsam quod in nesciunt optio cum!.</p>
      </div>
      
    </div>
  </div>

  <div class="b-example-divider"></div>

  <div class="container my-5">
    <div class="row p-1 pb-1 pe-lg-1 pt-lg-1 align-items-center rounded-3 border shadow-lg">
      <div class="col-lg-12 p-2 p-lg-1 pt-lg-1">
        <h3 class="fw-bold lh-4">Data Produksi Tanaman Cabe Rawit</h3>
        <table class="table table-bordered table-hover">
          <thead>
          <tr>
              <th class="text-center">Jenis Tanaman</th>
              <th class="text-center">Tahun 2017 (Ton)</th> 
              <th class="text-center">Tahun 2018 (Ton)</th>
              <th class="text-center">Tahun 2019 (Ton)</th>  
            </tr>
          </thead>
          <tbody>
          @foreach($hasilDataProduksiCabeRawit as $PanenproduCabeRawit)
            <tr data-widget="expandable-table" aria-expanded="false">
              <td class="text-left">{{ $PanenproduCabeRawit->JenisTanaman}}</td>
              <td class="text-center">{{ $PanenproduCabeRawit->Tahun2017}}</td> 
              <td class="text-center">{{ $PanenproduCabeRawit->Tahun2018}}</td> 
              <td class="text-center">{{ $PanenproduCabeRawit->Tahun2019}}</td> 
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
      <h3 class="fw-bold lh-4">Data Luas Panen Tanaman Tomat</h3>
        <p class="col-lg-12 text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus minus sed ipsa earum, error voluptatum cupiditate consequatur eaque eligendi, tempora placeat, rem eos rerum ipsam quod in nesciunt optio cum!.</p>
      </div>
      
    </div>
  </div>

  <div class="b-example-divider"></div>

  <div class="container my-5">
    <div class="row p-1 pb-1 pe-lg-1 pt-lg-1 align-items-center rounded-3 border shadow-lg">
      <div class="col-lg-12 p-2 p-lg-1 pt-lg-1">
        <h3 class="fw-bold lh-4">Data Luas Panen Tanaman Tomat</h3>
        <table class="table table-bordered table-hover">
          <thead>
          <tr>
              <th class="text-center">Jenis Tanaman</th>
              <th class="text-center">Tahun 2017 (Ha)</th> 
              <th class="text-center">Tahun 2018 (Ha)</th>
              <th class="text-center">Tahun 2019 (Ha)</th>  
            </tr>
          </thead>
          <tbody>
          @foreach($hasilDataLuasPanenTomat as $Panentomat)
            <tr data-widget="expandable-table" aria-expanded="false">
              <td class="text-left">{{ $Panentomat->JenisTanaman}}</td>
              <td class="text-center">{{ $Panentomat->Tahun2017}}</td> 
              <td class="text-center">{{ $Panentomat->Tahun2018}}</td> 
              <td class="text-center">{{ $Panentomat->Tahun2019}}</td> 
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
      <h3 class="fw-bold lh-4">Data Produksi Tanaman Tomat</h3>
        <p class="col-lg-12 text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus minus sed ipsa earum, error voluptatum cupiditate consequatur eaque eligendi, tempora placeat, rem eos rerum ipsam quod in nesciunt optio cum!.</p>
      </div>
      
    </div>
  </div>

  <div class="b-example-divider"></div>

  <div class="container my-5">
    <div class="row p-1 pb-1 pe-lg-1 pt-lg-1 align-items-center rounded-3 border shadow-lg">
      <div class="col-lg-12 p-2 p-lg-1 pt-lg-1">
        <h3 class="fw-bold lh-4">Data Produksi Tanaman Tomat</h3>
        <table class="table table-bordered table-hover">
          <thead>
          <tr>
              <th class="text-center">Jenis Tanaman</th>
              <th class="text-center">Tahun 2017 (Ton)</th> 
              <th class="text-center">Tahun 2018 (Ton)</th>
              <th class="text-center">Tahun 2019 (Ton)</th>  
            </tr>
          </thead>
          <tbody>
          @foreach($hasilDataProduksiTomat as $PanenprodTomat)
            <tr data-widget="expandable-table" aria-expanded="false">
              <td class="text-left">{{ $PanenprodTomat->JenisTanaman}}</td>
              <td class="text-center">{{ $PanenprodTomat->Tahun2017}}</td> 
              <td class="text-center">{{ $PanenprodTomat->Tahun2018}}</td> 
              <td class="text-center">{{ $PanenprodTomat->Tahun2019}}</td> 
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
      <h3 class="fw-bold lh-4">Data Produksi Tanaman Buah-buahan</h3>
        <p class="col-lg-12 text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus minus sed ipsa earum, error voluptatum cupiditate consequatur eaque eligendi, tempora placeat, rem eos rerum ipsam quod in nesciunt optio cum!.</p>
      </div>
      
    </div>
  </div>

  <div class="b-example-divider"></div>

  <div class="container my-5">
    <div class="row p-1 pb-1 pe-lg-1 pt-lg-1 align-items-center rounded-3 border shadow-lg">
      <div class="col-lg-12 p-2 p-lg-1 pt-lg-1">
        <h3 class="fw-bold lh-4">Data Produksi Tanaman Buah-buahan</h3>
        <table class="table table-bordered table-hover">
          <thead>
          <tr>
              <th class="text-center">Jenis Tanaman</th>
              <th class="text-center">Tahun 2017 (Ton)</th> 
              <th class="text-center">Tahun 2018 (Ton)</th>
              <th class="text-center">Tahun 2019 (Ton)</th>  
            </tr>
          </thead>
          <tbody>
          @foreach($hasilDataDataProduksiBuah as $Panenprodbuahtah)
            <tr data-widget="expandable-table" aria-expanded="false">
              <td class="text-left">{{ $Panenprodbuahtah->JenisTanaman}}</td>
              <td class="text-center">{{ $Panenprodbuahtah->Tahun2017}}</td> 
              <td class="text-center">{{ $Panenprodbuahtah->Tahun2018}}</td> 
              <td class="text-center">{{ $Panenprodbuahtah->Tahun2019}}</td> 
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
      <h3 class="fw-bold lh-4">Data Populasi Ternak</h3>
        <p class="col-lg-12 text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus minus sed ipsa earum, error voluptatum cupiditate consequatur eaque eligendi, tempora placeat, rem eos rerum ipsam quod in nesciunt optio cum!.</p>
      </div>
      
    </div>
  </div>

  <div class="b-example-divider"></div>

  <div class="container my-5">
    <div class="row p-1 pb-1 pe-lg-1 pt-lg-1 align-items-center rounded-3 border shadow-lg">
      <div class="col-lg-12 p-2 p-lg-1 pt-lg-1">
        <h3 class="fw-bold lh-4">Data Populasi Ternak</h3>
        <table class="table table-bordered table-hover">
        <thead>
        <tr>
            <th class="text-center">Jenis Ternak</th>
            <th class="text-center">Tahun 2018 (Ekor)</th> 
            <th class="text-center">Tahun 2019 (Ekor)</th>
            <th class="text-center">Tahun 2020 (Ekor)</th>  
          </tr>
        </thead>
        <tbody>
        @foreach($hasilDataTernak as $Panenternak)
          <tr data-widget="expandable-table" aria-expanded="false">
            <td class="text-left">{{ $Panenternak->JenisTernak}}</td>
            <td class="text-center">{{ $Panenternak->Tahun2018}}</td> 
            <td class="text-center">{{ $Panenternak->Tahun2019}}</td> 
            <td class="text-center">{{ $Panenternak->Tahun2020}}</td> 
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
      <h3 class="fw-bold lh-4">Data Populasi Unggas</h3>
        <p class="col-lg-12 text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus minus sed ipsa earum, error voluptatum cupiditate consequatur eaque eligendi, tempora placeat, rem eos rerum ipsam quod in nesciunt optio cum!.</p>
      </div>
      
    </div>
  </div>

  <div class="b-example-divider"></div>

  <div class="container my-5">
    <div class="row p-1 pb-1 pe-lg-1 pt-lg-1 align-items-center rounded-3 border shadow-lg">
      <div class="col-lg-12 p-2 p-lg-1 pt-lg-1">
        <h3 class="fw-bold lh-4">Data Populasi Unggas</h3>
        <table class="table table-bordered table-hover">
            <thead>
            <tr>
                <th class="text-center">Jenis Unggas</th>
                <th class="text-center">Tahun 2018 (Ekor)</th> 
                <th class="text-center">Tahun 2019 (Ekor)</th>
                <th class="text-center">Tahun 2020 (Ekor)</th>  
              </tr>
            </thead>
            <tbody>
            @foreach($hasilDataUnggas as $hasilunggass)
              <tr data-widget="expandable-table" aria-expanded="false">
                <td class="text-left">{{ $hasilunggass->JenisUnggas}}</td>
                <td class="text-center">{{ $hasilunggass->Tahun2018}}</td> 
                <td class="text-center">{{ $hasilunggass->Tahun2019}}</td> 
                <td class="text-center">{{ $hasilunggass->Tahun2020}}</td> 
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