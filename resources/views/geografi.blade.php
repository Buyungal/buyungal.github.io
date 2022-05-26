 
        
@extends('layouts.TAMPILAN')

@section('content')


<main> 
  <div class="px-1 py-1 my-1 text-center">
    <img class="d-block mx-auto mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
    <h1 class="display-5 fw-bold">STATDA KECAMATAN DULUPI</h1>
    <div class="col-lg-6 mx-auto">
      <p class="lead mb-4 fw-bold">GEOGRAFI</p>
      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">  </div>
    </div>
  </div>
 

  <div class="b-example-divider"></div>

  <div class="container col-xl-12 col-xxl-12 px-4 py-1">
    <div class="row align-items-center g-lg-12 py-1">
      <div class="col-lg-12 ">
      <h3 class="fw-bold lh-4 text-left">Data Wilayah</h3>
        <p class="text-justify"> Kecamatan Dulupi pada tahun 2019 merupakan satu di antara 7 (tujuh) kecamatan yang ada di Kabupaten Boalemo Provinsi Gorontalo. Kecamatan Dulupi terdiri dari 8 (delapan) desa dan masing-masing desa dipimpin oleh Kepala Desa sedangkan Kecamatan Dulupi dipimpin oleh seorang Camat.</p>
        <p class="text-justify">Kecamatan Dulupi secara astronomi terletak antara 0"29"41" lintang utara sampai dengan 0"55"38" lintang utara serta 122"14"26” bujur timur sampai dengan 122"30"57” bujur timur. </p>
Adapun luas wilayahnya 299,77 km2. Luas wilayah tersebut merupakan 16,43 % (persen) dari total luas wilayah Kabupaten Boalemo. 
 Sebagian Desa di Wilayah Kecamatan Dulupi merupakan Daerah Pesisir, dimana dua dari delapan desa wilayah tersebut berada di pesisir pantai, dengan ketinggian dari permukaan laut adalah 0-1350 mdpl. 
!.</p>
      </div>
      
    </div>
  </div>

  <div class="b-example-divider"></div>

  <div class="container my-5">
    <div class="row p-1 pb-1 pe-lg-1 pt-lg-1 align-items-center rounded-3 border shadow-lg">
      <div class="col-lg-12 p-2 p-lg-1 pt-lg-1">
        <h3 class="fw-bold lh-4">Data Luas Wilayah</h3>
        <table class="table table-bordered table-hover">
          <thead>
            <tr>
              <th class="text-center">Desa</th>
              <th class="text-center">Luas Wilayah (Km2)</th>
              <th class="text-center"> Persentase (%)</th> 
            </tr>
          </thead>
          <tbody>
          @foreach($hasilpencacahandataluaswilayahh as $kegiatanhasilhasilpencacahandataluaswilayahh)
            <tr data-widget="expandable-table" aria-expanded="false">
              <td class="text-left">{{ $kegiatanhasilhasilpencacahandataluaswilayahh->Desa }}</td>
              <td class="text-center">{{ $kegiatanhasilhasilpencacahandataluaswilayahh->LuasWilayah }}</td>
              <td class="text-center">{{ $kegiatanhasilhasilpencacahandataluaswilayahh->Persentase }}</td>
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