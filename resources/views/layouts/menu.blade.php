
 
<li class="nav-item">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-edit"></i>
        <p>
        Keagamaan
        <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('agama.dataTempatIbadahs.index') }}"
            class="nav-link {{ Request::is('agama/dataTempatIbadahs*') ? 'active' : '' }}">
                <p>Data Tempat Ibadah</p>
            </a>
        </li>
    </ul>
</li>

<li class="nav-item">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-edit"></i>
        <p>
        Geografi
        <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('geografi.dataluaswilayahhs.index') }}"
            class="nav-link {{ Request::is('geografi/dataluaswilayahhs*') ? 'active' : '' }}">
                <p>Data Luas Wilayah</p>
            </a>
        </li>
    </ul>
</li>


<li class="nav-item">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-edit"></i>
        <p>
         Kependudukan
        <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('kependudukan.dataPenduduks.index') }}"
            class="nav-link {{ Request::is('kependudukan/dataPenduduks*') ? 'active' : '' }}">
                <p>Data Penduduk Per Desa</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('kependudukan.dataKepadatanPenduduks.index') }}"
            class="nav-link {{ Request::is('kependudukan/dataKepadatanPenduduks*') ? 'active' : '' }}">
                <p>Data Kepadatan Penduduk</p>
            </a>
        </li> 
    </ul>
</li>


<li class="nav-item">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-edit"></i>
        <p>
         Pendidikan
        <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview"> 
        <li class="nav-item">
            <a href="{{ route('pendidikan.dataSekolahDasars.index') }}"
            class="nav-link {{ Request::is('pendidikan/dataSekolahDasars*') ? 'active' : '' }}">
                <p>Data Sekolah SD</p>
            </a>
        </li>


        <li class="nav-item">
            <a href="{{ route('pendidikan.dataMadrasahIbtidaiyahs.index') }}"
            class="nav-link {{ Request::is('pendidikan/dataMadrasahIbtidaiyahs*') ? 'active' : '' }}">
                <p>Data Sekolah MI</p>
            </a>
        </li>


        <li class="nav-item">
            <a href="{{ route('pendidikan.dataSMPs.index') }}"
            class="nav-link {{ Request::is('pendidikan/dataSMPs*') ? 'active' : '' }}">
                <p>Data Sekolah SMP</p>
            </a>
        </li>


        <li class="nav-item">
            <a href="{{ route('pendidikan.dataMTs.index') }}"
            class="nav-link {{ Request::is('pendidikan/dataMTs*') ? 'active' : '' }}">
                <p>Data Sekolah MTS</p>
            </a>
        </li>


        <li class="nav-item">
            <a href="{{ route('pendidikan.dataSMAs.index') }}"
            class="nav-link {{ Request::is('pendidikan/dataSMAs*') ? 'active' : '' }}">
                <p>Data Sekolah SMA</p>
            </a>
        </li>


        <li class="nav-item">
            <a href="{{ route('pendidikan.dataMAs.index') }}"
            class="nav-link {{ Request::is('pendidikan/dataMAs*') ? 'active' : '' }}">
                <p>Data Sekolah MA</p>
            </a>
        </li>


        <li class="nav-item">
            <a href="{{ route('pendidikan.dataSMKs.index') }}"
            class="nav-link {{ Request::is('pendidikan/dataSMKs*') ? 'active' : '' }}">
                <p>Data Sekolah SMK</p>
            </a>
        </li> 
    </ul>
</li>

<li class="nav-item">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-edit"></i>
        <p>
            Kesehatan
        <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">

    <li class="nav-item">
        <a href="{{ route('kesehatan.dataTenagaKesehatans.index') }}"
        class="nav-link {{ Request::is('kesehatan/dataTenagaKesehatans*') ? 'active' : '' }}">
            <p>Data Tenaga Kesehatan</p>
        </a>
    </li>





    <li class="nav-item">
        <a href="{{ route('kesehatan.dataPuskesmas.index') }}"
        class="nav-link {{ Request::is('kesehatan/dataPuskesmas*') ? 'active' : '' }}">
            <p>Data Puskesmas</p>
        </a>
    </li>


    <li class="nav-item">
        <a href="{{ route('kesehatan.dataPusKbs.index') }}"
        class="nav-link {{ Request::is('kesehatan/dataPusKbs*') ? 'active' : '' }}">
            <p>Data PUS KB</p>
        </a>
    </li>
    </ul>
</li>

<li class="nav-item">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-edit"></i>
        <p>
        Pertanian
        <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('pertanian.dataLuasPanenCabeRawits.index') }}"
            class="nav-link {{ Request::is('pertanian/dataLuasPanenCabeRawits*') ? 'active' : '' }}">
                <p>Data Luas Panen Cabe Rawit</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('pertanian.dataLuasPanenTomats.index') }}"
            class="nav-link {{ Request::is('pertanian/dataLuasPanenTomats*') ? 'active' : '' }}">
                <p>Data Luas Panen Tomat</p>
            </a>
        </li>


        <li class="nav-item">
            <a href="{{ route('pertanian.dataProduksiTomats.index') }}"
            class="nav-link {{ Request::is('pertanian/dataProduksiTomats*') ? 'active' : '' }}">
                <p>Data Produksi Tomat</p>
            </a>
        </li>


        <li class="nav-item">
            <a href="{{ route('pertanian.dataProduksiCabeRawits.index') }}"
            class="nav-link {{ Request::is('pertanian/dataProduksiCabeRawits*') ? 'active' : '' }}">
                <p>Data Produksi Cabe Rawit</p>
            </a>
        </li>


        <li class="nav-item">
            <a href="{{ route('pertanian.dataProduksiBuahs.index') }}"
            class="nav-link {{ Request::is('pertanian/dataProduksiBuahs*') ? 'active' : '' }}">
                <p>Data Produksi Buah</p>
            </a>
        </li>


        <li class="nav-item">
            <a href="{{ route('pertanian.dataTernaks.index') }}"
            class="nav-link {{ Request::is('pertanian/dataTernaks*') ? 'active' : '' }}">
                <p>Data Ternak</p>
            </a>
        </li>


        <li class="nav-item">
            <a href="{{ route('pertanian.dataUnggas.index') }}"
            class="nav-link {{ Request::is('pertanian/dataUnggas*') ? 'active' : '' }}">
                <p>Data Unggas</p>
            </a>
        </li>
    </ul>
</li>
 

<li class="nav-item">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-edit"></i>
        <p>
        Energi
        <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
    <li class="nav-item">
        <a href="{{ route('energi.dataListriks.index') }}"
        class="nav-link {{ Request::is('energi/dataListriks*') ? 'active' : '' }}">
            <p>Data Listrik</p>
        </a>
    </li>


    <li class="nav-item">
        <a href="{{ route('energi.dataListrikdesas.index') }}"
        class="nav-link {{ Request::is('energi/dataListrikdesas*') ? 'active' : '' }}">
            <p>Data Listrik Per Desa</p>
        </a>
    </li>
    </ul>
</li>





















