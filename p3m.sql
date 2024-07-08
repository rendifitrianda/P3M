-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 08 Jul 2024 pada 08.15
-- Versi server: 8.0.30
-- Versi PHP: 8.2.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `p3m`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `dashboard`
--

CREATE TABLE `dashboard` (
  `id` bigint UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nidn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `klaster` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `institusi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `program_studi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenjang_pendidikan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan_akademik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lahir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomor_ktp` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomor_hp` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_surel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website_personal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen`
--

CREATE TABLE `dosen` (
  `id` bigint UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nidn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `klaster` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `institusi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenjang_pendidikan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `program_studi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomor_ktp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan_akademik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `tempat_lahir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomor_hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_surel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website_personal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `dosen`
--

INSERT INTO `dosen` (`id`, `nama`, `nidn`, `klaster`, `institusi`, `jenjang_pendidikan`, `program_studi`, `nomor_ktp`, `jabatan_akademik`, `alamat`, `tanggal_lahir`, `tempat_lahir`, `nomor_hp`, `alamat_surel`, `website_personal`, `username`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Rendi fitrianda', '1122077403', 'One', 'Politeknik Negeri ketapang', 's3', 'teknik_sipil', '900392093023', 'Dosen', 'kakakkakak', '2024-07-04', 'Pontianak', '0808080808080', 'Sungai jawi', 'eee', 'yusuf@gmail.com', '$2y$12$zdl6vVl08IXFZJgyxoSyfeF9t45kWxFUgRJ.uJ8LUfY9sBLYSIH9e', '2024-07-07 23:46:40', '2024-07-07 23:46:40');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(40, '0001_01_01_000000_create_users_table', 1),
(41, '0001_01_01_000001_create_cache_table', 1),
(42, '2024_06_12_041936_create_dosen_table', 1),
(43, '2024_06_20_025901_create_dashboard_table', 1),
(44, '2024_06_29_095102_penelitian_usulan_baru', 1),
(45, '2024_06_29_095809_penelitian_laporan_kemajuan', 1),
(46, '2024_06_29_100618_penelitian_laporan_akhir', 1),
(47, '2024_06_29_101125_penelitian_catatan_harian', 1),
(48, '2024_06_29_135328_pengabdian_usulan_baru', 1),
(49, '2024_06_29_135600_pengabdian_perbaikan_usulan', 1),
(50, '2024_06_29_135852_pengabdian_laporan_kemajuan', 1),
(51, '2024_06_29_140545_pengabdian_laporan_akhir', 1),
(52, '2024_06_29_141517_pengabdian_catatan_harian', 1),
(53, '2024_07_08_063358_dosen', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `operator`
--

CREATE TABLE `operator` (
  `id` bigint NOT NULL,
  `nidn` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `updated_at` timestamp NOT NULL,
  `created_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `operator`
--

INSERT INTO `operator` (`id`, `nidn`, `nama`, `no_hp`, `jenis_kelamin`, `username`, `password`, `updated_at`, `created_at`) VALUES
(1, '12345678912', 'Rendi Saja', '089787656908', 'Laki-laki', 'operator', '$2y$12$3TgUy3LeW0ck5hO4bShwEu.fcVzZEafv.lOUYJfUacB7itntEV5Cm', '2024-07-02 08:19:36', '2024-07-02 08:19:36');

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `penelitian_catatan_harian`
--

CREATE TABLE `penelitian_catatan_harian` (
  `id` bigint UNSIGNED NOT NULL,
  `skema` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `penelitian_laporan_akhir`
--

CREATE TABLE `penelitian_laporan_akhir` (
  `id` bigint UNSIGNED NOT NULL,
  `program` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `berkas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `penelitian_laporan_kemajuan`
--

CREATE TABLE `penelitian_laporan_kemajuan` (
  `id` bigint UNSIGNED NOT NULL,
  `program` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `berkas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `penelitian_usulan_baru`
--

CREATE TABLE `penelitian_usulan_baru` (
  `id` bigint UNSIGNED NOT NULL,
  `ketua` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bidang_fokus` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun_pelaksanaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `peran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_usulan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hasil_penilaian` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengabdian_catatan_harian`
--

CREATE TABLE `pengabdian_catatan_harian` (
  `id` bigint UNSIGNED NOT NULL,
  `skema` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengabdian_laporan_akhir`
--

CREATE TABLE `pengabdian_laporan_akhir` (
  `id` bigint UNSIGNED NOT NULL,
  `program` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `berkas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengabdian_laporan_kemajuan`
--

CREATE TABLE `pengabdian_laporan_kemajuan` (
  `id` bigint UNSIGNED NOT NULL,
  `program` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `berkas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengabdian_perbaikan_usulan`
--

CREATE TABLE `pengabdian_perbaikan_usulan` (
  `id` bigint UNSIGNED NOT NULL,
  `skema` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun_pelaksanaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dana_disetujui` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dokumen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengabdian_usulan_baru`
--

CREATE TABLE `pengabdian_usulan_baru` (
  `id` bigint UNSIGNED NOT NULL,
  `ketua` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bidang_fokus` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun_pelaksanaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `peran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_usulan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hasil_penilaian` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('YnFd7ce9libemzrTARtn16n5TJbR6astk37frubQ', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36 Edg/126.0.0.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiSVl5UVNRbjl6VXpiT2FFUjBIUUVET1hGckk2azNJTjN2OFRFZ1k2VCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9kb3Nlbi9kYXNoYm9hcmQiO31zOjUyOiJsb2dpbl9kb3Nlbl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1720421218);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `dashboard`
--
ALTER TABLE `dashboard`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `operator`
--
ALTER TABLE `operator`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `penelitian_catatan_harian`
--
ALTER TABLE `penelitian_catatan_harian`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `penelitian_laporan_akhir`
--
ALTER TABLE `penelitian_laporan_akhir`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `penelitian_laporan_kemajuan`
--
ALTER TABLE `penelitian_laporan_kemajuan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `penelitian_usulan_baru`
--
ALTER TABLE `penelitian_usulan_baru`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pengabdian_catatan_harian`
--
ALTER TABLE `pengabdian_catatan_harian`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pengabdian_laporan_akhir`
--
ALTER TABLE `pengabdian_laporan_akhir`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pengabdian_laporan_kemajuan`
--
ALTER TABLE `pengabdian_laporan_kemajuan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pengabdian_perbaikan_usulan`
--
ALTER TABLE `pengabdian_perbaikan_usulan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pengabdian_usulan_baru`
--
ALTER TABLE `pengabdian_usulan_baru`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT untuk tabel `dashboard`
--
ALTER TABLE `dashboard`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT untuk tabel `operator`
--
ALTER TABLE `operator`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `penelitian_catatan_harian`
--
ALTER TABLE `penelitian_catatan_harian`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `penelitian_laporan_akhir`
--
ALTER TABLE `penelitian_laporan_akhir`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `penelitian_laporan_kemajuan`
--
ALTER TABLE `penelitian_laporan_kemajuan`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `penelitian_usulan_baru`
--
ALTER TABLE `penelitian_usulan_baru`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pengabdian_catatan_harian`
--
ALTER TABLE `pengabdian_catatan_harian`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pengabdian_laporan_akhir`
--
ALTER TABLE `pengabdian_laporan_akhir`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pengabdian_laporan_kemajuan`
--
ALTER TABLE `pengabdian_laporan_kemajuan`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pengabdian_perbaikan_usulan`
--
ALTER TABLE `pengabdian_perbaikan_usulan`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pengabdian_usulan_baru`
--
ALTER TABLE `pengabdian_usulan_baru`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
