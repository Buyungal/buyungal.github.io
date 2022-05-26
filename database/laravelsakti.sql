-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Mar 2022 pada 01.28
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravelsakti`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dataluaswilayahhs`
--

CREATE TABLE `dataluaswilayahhs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Desa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `LuasWilayah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Persentase` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `dataluaswilayahhs`
--

INSERT INTO `dataluaswilayahhs` (`id`, `Desa`, `LuasWilayah`, `Persentase`, `created_at`, `updated_at`) VALUES
(1, 'Dulupi', '1212', '211', '2022-03-20 20:47:45', '2022-03-20 20:47:45');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_kepadatan_penduduks`
--

CREATE TABLE `data_kepadatan_penduduks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Desa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Penduduk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `LuasWilayah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `KepadatanPenduduk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `data_kepadatan_penduduks`
--

INSERT INTO `data_kepadatan_penduduks` (`id`, `Desa`, `Penduduk`, `LuasWilayah`, `KepadatanPenduduk`, `created_at`, `updated_at`) VALUES
(1, 'Dulupi', '100', '100', '100', '2022-03-20 20:37:30', '2022-03-20 20:37:30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_listrikdesas`
--

CREATE TABLE `data_listrikdesas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Desa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PenggunaListrikPln` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PenggunaNonListrikPln` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `data_listrikdesas`
--

INSERT INTO `data_listrikdesas` (`id`, `Desa`, `PenggunaListrikPln`, `PenggunaNonListrikPln`, `created_at`, `updated_at`) VALUES
(1, 'Dulupi', '100', '100', '2022-03-20 21:31:37', '2022-03-20 21:31:37');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_listriks`
--

CREATE TABLE `data_listriks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ListrikPln` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ListrikNonPln` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `BukanPenggunaListrik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_luas_panen_cabe_rawits`
--

CREATE TABLE `data_luas_panen_cabe_rawits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `JenisTanaman` enum('CabeRawit') COLLATE utf8mb4_unicode_ci NOT NULL,
  `Tahun2017` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Tahun2018` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Tahun2019` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_luas_panen_tomats`
--

CREATE TABLE `data_luas_panen_tomats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `JenisTanaman` enum('Tomat') COLLATE utf8mb4_unicode_ci NOT NULL,
  `Tahun2017` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Tahun2018` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Tahun2019` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_madrasah_ibtidaiyahs`
--

CREATE TABLE `data_madrasah_ibtidaiyahs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Desa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `JumlahSekolahMadrasahIbtidaiyah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_m_as`
--

CREATE TABLE `data_m_as` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Desa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `JumlahSekolahMadrasahAliyah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_m_ts`
--

CREATE TABLE `data_m_ts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Desa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `JumlahSekolahMadrasahTsanawiyah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_penduduks`
--

CREATE TABLE `data_penduduks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Desa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `LakiLaki` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Perempuan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Rasio` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `data_penduduks`
--

INSERT INTO `data_penduduks` (`id`, `Desa`, `LakiLaki`, `Perempuan`, `Rasio`, `created_at`, `updated_at`) VALUES
(1, 'Dulupi', '100', '100', '100', '2022-03-20 20:37:56', '2022-03-20 20:37:56');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_produksi_buahs`
--

CREATE TABLE `data_produksi_buahs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `JenisTanaman` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Tahun2017` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Tahun2018` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Tahun2019` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `data_produksi_buahs`
--

INSERT INTO `data_produksi_buahs` (`id`, `JenisTanaman`, `Tahun2017`, `Tahun2018`, `Tahun2019`, `created_at`, `updated_at`) VALUES
(1, 'Alpukat', '8.2', '5.8', '6.4', '2022-03-20 20:42:01', '2022-03-20 20:42:01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_produksi_cabe_rawits`
--

CREATE TABLE `data_produksi_cabe_rawits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `JenisTanaman` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Tahun2017` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Tahun2018` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Tahun2019` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_produksi_tomats`
--

CREATE TABLE `data_produksi_tomats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `JenisTanaman` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Tahun2017` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Tahun2018` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Tahun2019` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_puskesmas`
--

CREATE TABLE `data_puskesmas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Desa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PuskesmasRawatInap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PuskesmasTanpaRawatInap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_pus_kbs`
--

CREATE TABLE `data_pus_kbs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Desa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `JumlahPus` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `JumlahPesertaKb` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_sekolah_dasars`
--

CREATE TABLE `data_sekolah_dasars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Desa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `JumlahSekolahDasar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_s_m_as`
--

CREATE TABLE `data_s_m_as` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Desa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `JumlahSekolahMenengahAtas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_s_m_ks`
--

CREATE TABLE `data_s_m_ks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Desa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `JumlahSekolahMenengahKejuruan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_s_m_ps`
--

CREATE TABLE `data_s_m_ps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Desa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `JumlahSekolahMenengahPertama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_tempat_ibadahs`
--

CREATE TABLE `data_tempat_ibadahs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Desa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `JumlahMasjid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `JumlahMushola` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `JumlahGerejaProtestan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `JumlahGerejaKatholik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `JumlahPura` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `JumlahVihara` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `data_tempat_ibadahs`
--

INSERT INTO `data_tempat_ibadahs` (`id`, `Desa`, `JumlahMasjid`, `JumlahMushola`, `JumlahGerejaProtestan`, `JumlahGerejaKatholik`, `JumlahPura`, `JumlahVihara`, `created_at`, `updated_at`) VALUES
(1, 'Dulupi', '1', '1', '1', '1', '1', '1', '2022-03-20 23:16:50', '2022-03-20 23:16:50');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_tenaga_kesehatans`
--

CREATE TABLE `data_tenaga_kesehatans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `JumlahDokter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `JumlahPerawat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `JumlahBidan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `JumlahFarmasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `JumlahAhliGizi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_ternaks`
--

CREATE TABLE `data_ternaks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `JenisTernak` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Tahun2018` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Tahun2019` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Tahun2020` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `data_ternaks`
--

INSERT INTO `data_ternaks` (`id`, `JenisTernak`, `Tahun2018`, `Tahun2019`, `Tahun2020`, `created_at`, `updated_at`) VALUES
(1, 'Sapi Potong', '4769', '4758', '5512', '2022-03-20 20:44:45', '2022-03-20 20:44:45');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_unggas`
--

CREATE TABLE `data_unggas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `JenisUnggas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Tahun2018` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Tahun2019` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Tahun2020` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `data_unggas`
--

INSERT INTO `data_unggas` (`id`, `JenisUnggas`, `Tahun2018`, `Tahun2019`, `Tahun2020`, `created_at`, `updated_at`) VALUES
(1, 'Ayam Kampung', '121', '121', '121', '2022-03-20 20:47:25', '2022-03-20 20:47:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_03_18_162449_create_dataluaswilayahhs_table', 1),
(6, '2022_03_18_233548_create_data_penduduks_table', 1),
(7, '2022_03_18_235732_create_data_luas_panen_cabe_rawits_table', 1),
(8, '2022_03_19_000135_create_data_luas_panen_tomats_table', 1),
(9, '2022_03_21_042729_create_data_produksi_tomats_table', 1),
(10, '2022_03_21_042928_create_data_produksi_cabe_rawits_table', 1),
(11, '2022_03_21_043557_create_data_kepadatan_penduduks_table', 1),
(12, '2022_03_21_044115_create_data_produksi_buahs_table', 2),
(13, '2022_03_21_044352_create_data_ternaks_table', 3),
(14, '2022_03_21_044632_create_data_unggas_table', 4),
(15, '2022_03_21_045325_create_data_listriks_table', 5),
(16, '2022_03_21_050739_create_data_listrikdesas_table', 6),
(17, '2022_03_21_063226_create_data_tenaga_kesehatans_table', 7),
(18, '2022_03_21_063535_create_data_sekolah_dasars_table', 8),
(19, '2022_03_21_063856_create_data_madrasah_ibtidaiyahs_table', 9),
(20, '2022_03_21_064220_create_data_s_m_ps_table', 10),
(21, '2022_03_21_064440_create_data_m_ts_table', 11),
(22, '2022_03_21_064744_create_data_s_m_as_table', 12),
(23, '2022_03_21_064905_create_data_m_as_table', 13),
(24, '2022_03_21_065304_create_data_s_m_ks_table', 14),
(25, '2022_03_21_065850_create_data_puskesmas_table', 15),
(26, '2022_03_21_070650_create_data_pus_kbs_table', 16),
(27, '2022_03_21_071546_create_data_tempat_ibadahs_table', 17);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'coba@test', 'coba@test', NULL, '$2y$10$u69eqyrUuJXD1IiF5coSF.QcTVBsKdEm9PmXFAIU17BptusyIDXuC', NULL, '2022-03-20 20:37:13', '2022-03-20 20:37:13');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `dataluaswilayahhs`
--
ALTER TABLE `dataluaswilayahhs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_kepadatan_penduduks`
--
ALTER TABLE `data_kepadatan_penduduks`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_listrikdesas`
--
ALTER TABLE `data_listrikdesas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_listriks`
--
ALTER TABLE `data_listriks`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_luas_panen_cabe_rawits`
--
ALTER TABLE `data_luas_panen_cabe_rawits`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_luas_panen_tomats`
--
ALTER TABLE `data_luas_panen_tomats`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_madrasah_ibtidaiyahs`
--
ALTER TABLE `data_madrasah_ibtidaiyahs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_m_as`
--
ALTER TABLE `data_m_as`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_m_ts`
--
ALTER TABLE `data_m_ts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_penduduks`
--
ALTER TABLE `data_penduduks`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_produksi_buahs`
--
ALTER TABLE `data_produksi_buahs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_produksi_cabe_rawits`
--
ALTER TABLE `data_produksi_cabe_rawits`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_produksi_tomats`
--
ALTER TABLE `data_produksi_tomats`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_puskesmas`
--
ALTER TABLE `data_puskesmas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_pus_kbs`
--
ALTER TABLE `data_pus_kbs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_sekolah_dasars`
--
ALTER TABLE `data_sekolah_dasars`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_s_m_as`
--
ALTER TABLE `data_s_m_as`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_s_m_ks`
--
ALTER TABLE `data_s_m_ks`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_s_m_ps`
--
ALTER TABLE `data_s_m_ps`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_tempat_ibadahs`
--
ALTER TABLE `data_tempat_ibadahs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_tenaga_kesehatans`
--
ALTER TABLE `data_tenaga_kesehatans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_ternaks`
--
ALTER TABLE `data_ternaks`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_unggas`
--
ALTER TABLE `data_unggas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `dataluaswilayahhs`
--
ALTER TABLE `dataluaswilayahhs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `data_kepadatan_penduduks`
--
ALTER TABLE `data_kepadatan_penduduks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `data_listrikdesas`
--
ALTER TABLE `data_listrikdesas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `data_listriks`
--
ALTER TABLE `data_listriks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `data_luas_panen_cabe_rawits`
--
ALTER TABLE `data_luas_panen_cabe_rawits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `data_luas_panen_tomats`
--
ALTER TABLE `data_luas_panen_tomats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `data_madrasah_ibtidaiyahs`
--
ALTER TABLE `data_madrasah_ibtidaiyahs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `data_m_as`
--
ALTER TABLE `data_m_as`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `data_m_ts`
--
ALTER TABLE `data_m_ts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `data_penduduks`
--
ALTER TABLE `data_penduduks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `data_produksi_buahs`
--
ALTER TABLE `data_produksi_buahs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `data_produksi_cabe_rawits`
--
ALTER TABLE `data_produksi_cabe_rawits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `data_produksi_tomats`
--
ALTER TABLE `data_produksi_tomats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `data_puskesmas`
--
ALTER TABLE `data_puskesmas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `data_pus_kbs`
--
ALTER TABLE `data_pus_kbs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `data_sekolah_dasars`
--
ALTER TABLE `data_sekolah_dasars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `data_s_m_as`
--
ALTER TABLE `data_s_m_as`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `data_s_m_ks`
--
ALTER TABLE `data_s_m_ks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `data_s_m_ps`
--
ALTER TABLE `data_s_m_ps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `data_tempat_ibadahs`
--
ALTER TABLE `data_tempat_ibadahs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `data_tenaga_kesehatans`
--
ALTER TABLE `data_tenaga_kesehatans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `data_ternaks`
--
ALTER TABLE `data_ternaks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `data_unggas`
--
ALTER TABLE `data_unggas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
