@extends('layouts.TAMPILAN')

@section('content')


<main> 
  <div class="px-1 py-1 my-1 text-center">
    <img class="d-block mx-auto mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
    <h1 class="display-5 fw-bold">STATDA KECAMATAN DULUPI</h1>
    <div class="col-lg-6 mx-auto">
      <p class="lead mb-4 fw-bold">Pendidikan</p>
      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">  </div>
    </div>
  </div>
 

  <div class="b-example-divider"></div>

  <div class="container col-xl-12 col-xxl-12 px-4 py-1">
    <div class="row align-items-center g-lg-12 py-1">
      <div class="col-lg-12 ">
      <h3 class="fw-bold lh-4">Data Pendidikan Sekolah Dasar Tahun 2019</h3> 
        <p class="col-lg-12 text-justify">Jumlah Sekolah SD di Kecamatan Dulupi Tahun 2019 sebanyak 19 Sekolah.</p>
      </div>
      
    </div>
  </div>

  <div class="b-example-divider"></div>

  <div class="container my-5">
    <div class="row p-1 pb-1 pe-lg-1 pt-lg-1 align-items-center rounded-3 border shadow-lg">
      <div class="col-lg-12 p-2 p-lg-1 pt-lg-1"> 
        <table class="table table-bordered table-hover">
          <thead>
            <tr>
              <th class="text-center">Desa</th>
              <th class="text-center">Jumlah Sekolah Dasar</th> 
            </tr>
          </thead>
          <tbody>
          @foreach($hasildatapendidikannDataSekolahDasar as $datasekSD)
            <tr data-widget="expandable-table" aria-expanded="false">
              <td class="text-left">{{ $datasekSD->Desa}}</td>
              <td class="text-center">{{ $datasekSD->JumlahSekolahDasar}}</td> 
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
      <h3 class="fw-bold lh-4">Data Pendidikan Sekolah SMP Tahun 2019</h3>
        <p class="col-lg-12 text-justify">Jumlah Sekolah SMP di Kecamatan Dulupi tahun 2019 sebanyak 9 sekolah!.</p>
      </div>
      
    </div>
  </div>

  <div class="b-example-divider"></div>

  <div class="container my-5">
    <div class="row p-1 pb-1 pe-lg-1 pt-lg-1 align-items-center rounded-3 border shadow-lg">
      <div class="col-lg-12 p-2 p-lg-1 pt-lg-1"> 
        <table class="table table-bordered table-hover">
          <thead>
            <tr>
              <th class="text-center">Desa</th>
              <th class="text-center">Jumlah Sekolah SMP</th> 
            </tr>
          </thead>
          <tbody>
          @foreach($hasildatapendidikannDtDataSMP as $datasekSMP)
            <tr data-widget="expandable-table" aria-expanded="false">
              <td class="text-left">{{ $datasekSMP->Desa }}</td>
              <td class="text-center">{{ $datasekSMP->JumlahSekolahMenengahPertama}}</td> 
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
      <h3 class="fw-bold lh-4">Data Pendidikan Sekolah SMA Tahun 2019</h3>
      <p class="col-lg-12 text-justify">Jumlah Sekolah SMA di Kecamatan Dulupi tahun 2019 sebanyak 1 sekolah !.</p>
      </div>
      
    </div>
  </div>

  <div class="b-example-divider"></div>

  <div class="container my-5">
    <div class="row p-1 pb-1 pe-lg-1 pt-lg-1 align-items-center rounded-3 border shadow-lg">
      <div class="col-lg-12 p-2 p-lg-1 pt-lg-1"> 
        <table class="table table-bordered table-hover">
          <thead>
            <tr>
              <th class="text-center">Desa</th>
              <th class="text-center">Jumlah Sekolah SMA</th> 
            </tr>
          </thead>
          <tbody>
          @foreach($hasildatapendidikannDSMA as $datasekSMAA)
            <tr data-widget="expandable-table" aria-expanded="false">
              <td class="text-left">{{ $datasekSMAA->Desa }}</td>
              <td class="text-center">{{ $datasekSMAA->JumlahSekolahMenengahAtas}}</td> 
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
      <h3 class="fw-bold lh-4">Data Pendidikan Sekolah Madrasah Ibtidaiyah Tahun 2019</h3>
      <p class="col-lg-12 text-justify">Jumlah Sekolah MI di Kecamatan Dulupi tahun 2019 sebanyak 2 sekolah!.</p>
      </div>
      
    </div>
  </div>

  <div class="b-example-divider"></div>

  <div class="container my-5">
    <div class="row p-1 pb-1 pe-lg-1 pt-lg-1 align-items-center rounded-3 border shadow-lg">
      <div class="col-lg-12 p-2 p-lg-1 pt-lg-1"> 
        <table class="table table-bordered table-hover">
          <thead>
            <tr>
              <th class="text-center">Desa</th>
              <th class="text-center">Jumlah Sekolah Madrasah Ibtidaiyah</th> 
            </tr>
          </thead>
          <tbody>
          @foreach($hasildatapeMadrasahIbtidaiyah as $dataseMI)
            <tr data-widget="expandable-table" aria-expanded="false">
              <td class="text-left">{{$dataseMI->Desa}}</td>
              <td class="text-center">{{$dataseMI->JumlahSekolahMadrasahIbtidaiyah}}</td> 
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
      <h3 class="fw-bold lh-4">Data Pendidikan Sekolah MTS Tahun 2019</h3>
      <p class="col-lg-12 text-justify">Jumlah Sekolah MTS di Kecamatan Dulupi tahun 2019 sebanyak 1 sekolah!.</p>
      </div>
      
    </div>
  </div>

  <div class="b-example-divider"></div>

  <div class="container my-5">
    <div class="row p-1 pb-1 pe-lg-1 pt-lg-1 align-items-center rounded-3 border shadow-lg">
      <div class="col-lg-12 p-2 p-lg-1 pt-lg-1"> 
        <table class="table table-bordered table-hover">
          <thead>
            <tr>
              <th class="text-center">Desa</th>
              <th class="text-center">Jumlah Sekolah MTS</th> 
            </tr>
          </thead>
          <tbody>
          @foreach($hasildatapendidikannDtDtaMTS as $dataSekoMtS)
            <tr data-widget="expandable-table" aria-expanded="false">
              <td class="text-left">{{ $dataSekoMtS->Desa }}</td>
              <td class="text-center">{{ $dataSekoMtS->JumlahSekolahMadrasahTsanawiyah}}</td> 
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
      <h3 class="fw-bold lh-4">Data Pendidikan Sekolah Madrasah Aliyah Tahun 2019</h3>
      <p class="col-lg-12 text-justify">Jumlah Sekolah MA di Kecamatan Dulupi tahun 2019 sebanyak 0 sekolah !.</p>
      </div>
      
    </div>
  </div>

  <div class="b-example-divider"></div>

  <div class="container my-5">
    <div class="row p-1 pb-1 pe-lg-1 pt-lg-1 align-items-center rounded-3 border shadow-lg">
      <div class="col-lg-12 p-2 p-lg-1 pt-lg-1"> 
        <table class="table table-bordered table-hover">
          <thead>
            <tr>
              <th class="text-center">Desa</th>
              <th class="text-center">Jumlah Sekolah Madrasah Aliyah</th> 
            </tr>
          </thead>
          <tbody>
          @foreach($hasildatapendidikannMA as $dataMASek)
            <tr data-widget="expandable-table" aria-expanded="false">
              <td class="text-left">{{ $dataMASek->Desa }}</td>
              <td class="text-center">{{ $dataMASek->JumlahSekolahMadrasahAliyah}}</td> 
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
      <h3 class="fw-bold lh-4">Data Pendidikan Sekolah SMK Tahun 2019</h3>
      <p class="col-lg-12 text-justify">Jumlah Sekolah SMK di Kecamatan Dulupi tahun 2019 sebanyak 1 sekolah !.</p>
      </div>
      
    </div>
  </div>

  <div class="b-example-divider"></div>

  <div class="container my-5">
    <div class="row p-1 pb-1 pe-lg-1 pt-lg-1 align-items-center rounded-3 border shadow-lg">
      <div class="col-lg-12 p-2 p-lg-1 pt-lg-1"> 
        <table class="table table-bordered table-hover">
          <thead>
            <tr>
              <th class="text-center">Desa</th>
              <th class="text-center">Jumlah Sekolah SMK</th> 
            </tr>
          </thead>
          <tbody>
          @foreach($hasildatapendidikannDatDataSMK as $dataseSMK)
            <tr data-widget="expandable-table" aria-expanded="false">
              <td class="text-left">{{ $dataseSMK->Desa }}</td>
              <td class="text-center">{{ $dataseSMK->JumlahSekolahMenengahKejuruan}}</td> 
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