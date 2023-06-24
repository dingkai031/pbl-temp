-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Jun 2023 pada 15.45
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tracer_study`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kuesioner`
--

CREATE TABLE `kuesioner` (
  `id_kuesioner` int(7) UNSIGNED NOT NULL,
  `id_mahasiswa` int(7) UNSIGNED DEFAULT NULL,
  `id_perusahaan` int(7) UNSIGNED DEFAULT NULL,
  `jawaban_kuesioner` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`jawaban_kuesioner`)),
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kuesioner`
--

INSERT INTO `kuesioner` (`id_kuesioner`, `id_mahasiswa`, `id_perusahaan`, `jawaban_kuesioner`, `created_at`, `updated_at`, `deleted_at`) VALUES
(4, 2, NULL, '{\"kuesioner_awal\":[{\"question\":\"nim\",\"answer\":\"2222222222222\"},{\"question\":\"alamat\",\"answer\":\"tamansati\"},{\"question\":\"kualitas-pendidik\",\"answer\":[\"1\"]},{\"question\":\"bimbingan-secara-umum\",\"answer\":[\"2\"]},{\"question\":\"bimbingan-ujian-akhir\",\"answer\":[\"2\"]},{\"question\":\"materi-pelajaran\",\"answer\":[\"2\"]},{\"question\":\"keberagaman-program-studi\",\"answer\":[\"2\"]},{\"question\":\"sistem-penilaian\",\"answer\":[\"2\"]},{\"question\":\"penekanan-praktik\",\"answer\":[\"2\"]},{\"question\":\"metode-pengajaran\",\"answer\":[\"2\"]},{\"question\":\"koleksi-buku\",\"answer\":[\"2\"]},{\"question\":\"ketersediaan-bahan-ajar\",\"answer\":[\"2\"]},{\"question\":\"kualitas-fasilitas\",\"answer\":[\"2\"]},{\"question\":\"kualitas-magang\",\"answer\":[\"2\"]},{\"question\":\"kualitas-bhs-asing\",\"answer\":[\"2\"]},{\"question\":\"program-pengembangan-budaya\",\"answer\":[\"2\"]},{\"question\":\"penempatan-magan\",\"answer\":[\"2\"]},{\"question\":\"kejelasan-magang\",\"answer\":[\"2\"]},{\"question\":\"sarana-praktik-ditempat-magang\",\"answer\":[\"2\"]},{\"question\":\"bimbingan-selama-magan\",\"answer\":[\"2\"]},{\"question\":\"evaluasi-setelah-magang\",\"answer\":[\"2\"]},{\"question\":\"penyaluran-kerja-setelah-magan\",\"answer\":[\"2\"]},{\"question\":\"kesesuaian-tugas-magan\",\"answer\":[\"2\"]},{\"question\":\"kurikulum-berstandar-industri\",\"answer\":[\"2\"]},{\"question\":\"sertifikat-kompetensi\",\"answer\":[\"tidak\"]},{\"question\":\"jenis-sertifikat\",\"answer\":\"tidak tau\"},{\"question\":\"asal-sertifikat\",\"answer\":[\"poltek-negri-batam\"]},{\"question\":\"asal-sertifikat-lainnya\",\"answer\":\"asd\"},{\"question\":\"sudah-bekerja\",\"answer\":[\"tidak\"]},{\"question\":\"kerja-di-tempat-magang\",\"answer\":[\"tidak\"]},{\"question\":\"skala-perusahaan-tempat-bekerja\",\"answer\":[\"internasional\"]},{\"question\":\"penghasilan-perbulan\",\"answer\":[\"&lt;1juta\"]},{\"question\":\"memiliki-usaha\",\"answer\":[\"ya\"]},{\"question\":\"tahun-mulai-usaha\",\"answer\":\"123\"},{\"question\":\"jenis-usaha\",\"answer\":[\"jasa\"]},{\"question\":\"jenis-usaha-lainnya\",\"answer\":\"asd\"},{\"question\":\"nama-usaha\",\"answer\":\"ads\"},{\"question\":\"alamat-usaha\",\"answer\":\"asd\"},{\"question\":\"prestasi-selama-kuliah\",\"answer\":[\"tidak\"]},{\"question\":\"bidang-prestasi\",\"answer\":[\"akademik\"]},{\"question\":\"tingkat-prestasi-akademik\",\"answer\":[\"lokal\"]},{\"question\":\"tingkat-prestasi-non-akademik\",\"answer\":[\"lokal\"]},{\"question\":\"juara-prestasi\",\"answer\":[\"1\"]},{\"question\":\"juara-prestasi-lainnya\",\"answer\":\"2\"}]}', '2023-06-18 23:26:10', '2023-06-18 23:26:10', '0000-00-00 00:00:00'),
(5, 3, NULL, '{\"kuesioner_awal\":[{\"question\":\"kualitas-pendidik\",\"answer\":[\"5\"]},{\"question\":\"bimbingan-secara-umum\",\"answer\":[\"5\"]},{\"question\":\"bimbingan-ujian-akhir\",\"answer\":[\"5\"]},{\"question\":\"materi-pelajaran\",\"answer\":[\"5\"]},{\"question\":\"keberagaman-program-studi\",\"answer\":[\"5\"]},{\"question\":\"sistem-penilaian\",\"answer\":[\"5\"]},{\"question\":\"penekanan-praktik\",\"answer\":[\"5\"]},{\"question\":\"metode-pengajaran\",\"answer\":[\"5\"]},{\"question\":\"koleksi-buku\",\"answer\":[\"5\"]},{\"question\":\"ketersediaan-bahan-ajar\",\"answer\":[\"5\"]},{\"question\":\"kualitas-fasilitas\",\"answer\":[\"5\"]},{\"question\":\"kualitas-magang\",\"answer\":[\"5\"]},{\"question\":\"kualitas-bhs-asing\",\"answer\":[\"5\"]},{\"question\":\"program-pengembangan-budaya\",\"answer\":[\"5\"]},{\"question\":\"penempatan-magan\",\"answer\":[\"5\"]},{\"question\":\"kejelasan-magang\",\"answer\":[\"5\"]},{\"question\":\"sarana-praktik-ditempat-magang\",\"answer\":[\"5\"]},{\"question\":\"bimbingan-selama-magan\",\"answer\":[\"5\"]},{\"question\":\"evaluasi-setelah-magang\",\"answer\":[\"5\"]},{\"question\":\"penyaluran-kerja-setelah-magan\",\"answer\":[\"5\"]},{\"question\":\"kesesuaian-tugas-magan\",\"answer\":[\"5\"]},{\"question\":\"kurikulum-berstandar-industri\",\"answer\":[\"5\"]},{\"question\":\"sertifikat-kompetensi\",\"answer\":[\"tidak\"]},{\"question\":\"jenis-sertifikat\",\"answer\":\"Juara 1 Mobile Legend Kota Batam\"},{\"question\":\"asal-sertifikat\",\"answer\":[\"poltek-negri-batam\",\"kegiatan-mandiri\"]},{\"question\":\"asal-sertifikat-lainnya\",\"answer\":\"\"},{\"question\":\"sudah-bekerja\",\"answer\":[\"ya\"]},{\"question\":\"kerja-di-tempat-magang\",\"answer\":[\"tidak\"]},{\"question\":\"skala-perusahaan-tempat-bekerja\",\"answer\":[\"lokal\"]},{\"question\":\"penghasilan-perbulan\",\"answer\":[\"1-5juta\"]},{\"question\":\"memiliki-usaha\",\"answer\":[\"ya\"]},{\"question\":\"tahun-mulai-usaha\",\"answer\":\"3\"},{\"question\":\"jenis-usaha\",\"answer\":[\"jasa\"]},{\"question\":\"jenis-usaha-lainnya\",\"answer\":\"\"},{\"question\":\"nama-usaha\",\"answer\":\"Joki Nerr Store\"},{\"question\":\"alamat-usaha\",\"answer\":\"Piayu\"},{\"question\":\"prestasi-selama-kuliah\",\"answer\":[\"ya\"]},{\"question\":\"bidang-prestasi\",\"answer\":[\"non-akademik\"]},{\"question\":\"tingkat-prestasi-akademik\",\"answer\":[\"internasional\"]},{\"question\":\"tingkat-prestasi-non-akademik\",\"answer\":[\"internasional\"]},{\"question\":\"juara-prestasi\",\"answer\":[\"1\"]},{\"question\":\"juara-prestasi-lainnya\",\"answer\":\"1\"}]}', '2023-06-24 20:10:44', '2023-06-24 20:10:44', '0000-00-00 00:00:00'),
(6, 4, NULL, '{\"kuesioner_awal\":[{\"question\":\"kualitas-pendidik\",\"answer\":[\"4\"]},{\"question\":\"bimbingan-secara-umum\",\"answer\":[\"2\"]},{\"question\":\"bimbingan-ujian-akhir\",\"answer\":[\"5\"]},{\"question\":\"materi-pelajaran\",\"answer\":[\"5\"]},{\"question\":\"keberagaman-program-studi\",\"answer\":[\"5\"]},{\"question\":\"sistem-penilaian\",\"answer\":[\"5\"]},{\"question\":\"penekanan-praktik\",\"answer\":[\"5\"]},{\"question\":\"metode-pengajaran\",\"answer\":[\"5\"]},{\"question\":\"koleksi-buku\",\"answer\":[\"5\"]},{\"question\":\"ketersediaan-bahan-ajar\",\"answer\":[\"5\"]},{\"question\":\"kualitas-fasilitas\",\"answer\":[\"5\"]},{\"question\":\"kualitas-magang\",\"answer\":[\"5\"]},{\"question\":\"kualitas-bhs-asing\",\"answer\":[\"4\"]},{\"question\":\"program-pengembangan-budaya\",\"answer\":[\"4\"]},{\"question\":\"penempatan-magan\",\"answer\":[\"4\"]},{\"question\":\"kejelasan-magang\",\"answer\":[\"4\"]},{\"question\":\"sarana-praktik-ditempat-magang\",\"answer\":[\"4\"]},{\"question\":\"bimbingan-selama-magan\",\"answer\":[\"4\"]},{\"question\":\"evaluasi-setelah-magang\",\"answer\":[\"4\"]},{\"question\":\"penyaluran-kerja-setelah-magan\",\"answer\":[\"4\"]},{\"question\":\"kesesuaian-tugas-magan\",\"answer\":[\"4\"]},{\"question\":\"kurikulum-berstandar-industri\",\"answer\":[\"4\"]},{\"question\":\"sertifikat-kompetensi\",\"answer\":[\"tidak\"]},{\"question\":\"jenis-sertifikat\",\"answer\":\"cisco\"},{\"question\":\"asal-sertifikat\",\"answer\":[\"poltek-negri-batam\"]},{\"question\":\"asal-sertifikat-lainnya\",\"answer\":\"\"},{\"question\":\"sudah-bekerja\",\"answer\":[\"tidak\"]},{\"question\":\"kerja-di-tempat-magang\",\"answer\":[\"tidak\"]},{\"question\":\"skala-perusahaan-tempat-bekerja\",\"answer\":[\"lokal\"]},{\"question\":\"penghasilan-perbulan\",\"answer\":[\"&lt;1juta\"]},{\"question\":\"memiliki-usaha\",\"answer\":[\"tidak\"]},{\"question\":\"tahun-mulai-usaha\",\"answer\":\"2022\"},{\"question\":\"jenis-usaha\",\"answer\":[\"jasa\"]},{\"question\":\"jenis-usaha-lainnya\",\"answer\":\"tidak\"},{\"question\":\"nama-usaha\",\"answer\":\"telor\"},{\"question\":\"alamat-usaha\",\"answer\":\"piayu\"},{\"question\":\"prestasi-selama-kuliah\",\"answer\":[\"tidak\"]},{\"question\":\"bidang-prestasi\",\"answer\":[\"akademik\"]},{\"question\":\"tingkat-prestasi-akademik\",\"answer\":[\"nasional\"]},{\"question\":\"tingkat-prestasi-non-akademik\",\"answer\":[\"lokal\"]},{\"question\":\"juara-prestasi\",\"answer\":[\"1\"]},{\"question\":\"juara-prestasi-lainnya\",\"answer\":\"1\"}]}', '2023-06-24 20:28:21', '2023-06-24 20:28:21', '0000-00-00 00:00:00'),
(7, 6, NULL, '{\"kuesioner_awal\":[{\"question\":\"kualitas-pendidik\",\"answer\":[\"4\"]},{\"question\":\"bimbingan-secara-umum\",\"answer\":[\"4\"]},{\"question\":\"bimbingan-ujian-akhir\",\"answer\":[\"4\"]},{\"question\":\"materi-pelajaran\",\"answer\":[\"4\"]},{\"question\":\"keberagaman-program-studi\",\"answer\":[\"4\"]},{\"question\":\"sistem-penilaian\",\"answer\":[\"4\"]},{\"question\":\"penekanan-praktik\",\"answer\":[\"4\"]},{\"question\":\"metode-pengajaran\",\"answer\":[\"4\"]},{\"question\":\"koleksi-buku\",\"answer\":[\"4\"]},{\"question\":\"ketersediaan-bahan-ajar\",\"answer\":[\"4\"]},{\"question\":\"kualitas-fasilitas\",\"answer\":[\"4\"]},{\"question\":\"kualitas-magang\",\"answer\":[\"3\"]},{\"question\":\"kualitas-bhs-asing\",\"answer\":[\"3\"]},{\"question\":\"program-pengembangan-budaya\",\"answer\":[\"4\"]},{\"question\":\"penempatan-magan\",\"answer\":[\"4\"]},{\"question\":\"kejelasan-magang\",\"answer\":[\"5\"]},{\"question\":\"sarana-praktik-ditempat-magang\",\"answer\":[\"4\"]},{\"question\":\"bimbingan-selama-magan\",\"answer\":[\"3\"]},{\"question\":\"evaluasi-setelah-magang\",\"answer\":[\"3\"]},{\"question\":\"penyaluran-kerja-setelah-magan\",\"answer\":[\"5\"]},{\"question\":\"kesesuaian-tugas-magan\",\"answer\":[\"5\"]},{\"question\":\"kurikulum-berstandar-industri\",\"answer\":[\"5\"]},{\"question\":\"jenis-sertifikat\",\"answer\":\"ccna\"},{\"question\":\"asal-sertifikat\",\"answer\":[\"poltek-negri-batam\"]},{\"question\":\"asal-sertifikat-lainnya\",\"answer\":\"tidak ada\"},{\"question\":\"sudah-bekerja\",\"answer\":[\"ya\"]},{\"question\":\"kerja-di-tempat-magang\",\"answer\":[\"ya\"]},{\"question\":\"skala-perusahaan-tempat-bekerja\",\"answer\":[\"lokal\"]},{\"question\":\"penghasilan-perbulan\",\"answer\":[\"5juta&gt;\"]},{\"question\":\"memiliki-usaha\",\"answer\":[\"ya\"]},{\"question\":\"tahun-mulai-usaha\",\"answer\":\"2015\"},{\"question\":\"jenis-usaha\",\"answer\":[\"manufaktur\"]},{\"question\":\"jenis-usaha-lainnya\",\"answer\":\"manufactur\"},{\"question\":\"nama-usaha\",\"answer\":\"mebel\"},{\"question\":\"alamat-usaha\",\"answer\":\"batam\"},{\"question\":\"prestasi-selama-kuliah\",\"answer\":[\"ya\"]},{\"question\":\"bidang-prestasi\",\"answer\":[\"akademik\"]},{\"question\":\"tingkat-prestasi-akademik\",\"answer\":[\"lokal\"]},{\"question\":\"tingkat-prestasi-non-akademik\",\"answer\":[\"lokal\"]},{\"question\":\"juara-prestasi\",\"answer\":[\"1\"]},{\"question\":\"juara-prestasi-lainnya\",\"answer\":\"1\"}]}', '2023-06-24 20:32:34', '2023-06-24 20:32:34', '0000-00-00 00:00:00'),
(8, 7, NULL, '{\"kuesioner_awal\":[{\"question\":\"kualitas-pendidik\",\"answer\":[\"2\"]},{\"question\":\"bimbingan-secara-umum\",\"answer\":[\"2\"]},{\"question\":\"bimbingan-ujian-akhir\",\"answer\":[\"2\"]},{\"question\":\"materi-pelajaran\",\"answer\":[\"2\"]},{\"question\":\"keberagaman-program-studi\",\"answer\":[\"2\"]},{\"question\":\"sistem-penilaian\",\"answer\":[\"2\"]},{\"question\":\"penekanan-praktik\",\"answer\":[\"2\"]},{\"question\":\"metode-pengajaran\",\"answer\":[\"1\"]},{\"question\":\"koleksi-buku\",\"answer\":[\"1\"]},{\"question\":\"ketersediaan-bahan-ajar\",\"answer\":[\"1\"]},{\"question\":\"kualitas-fasilitas\",\"answer\":[\"2\"]},{\"question\":\"kualitas-magang\",\"answer\":[\"1\"]},{\"question\":\"kualitas-bhs-asing\",\"answer\":[\"1\"]},{\"question\":\"program-pengembangan-budaya\",\"answer\":[\"2\"]},{\"question\":\"penempatan-magan\",\"answer\":[\"2\"]},{\"question\":\"kejelasan-magang\",\"answer\":[\"5\"]},{\"question\":\"sarana-praktik-ditempat-magang\",\"answer\":[\"1\"]},{\"question\":\"bimbingan-selama-magan\",\"answer\":[\"2\"]},{\"question\":\"evaluasi-setelah-magang\",\"answer\":[\"1\"]},{\"question\":\"penyaluran-kerja-setelah-magan\",\"answer\":[\"1\"]},{\"question\":\"kesesuaian-tugas-magan\",\"answer\":[\"1\"]},{\"question\":\"kurikulum-berstandar-industri\",\"answer\":[\"1\"]},{\"question\":\"sertifikat-kompetensi\",\"answer\":[\"tidak\"]},{\"question\":\"jenis-sertifikat\",\"answer\":\"adasd\"},{\"question\":\"asal-sertifikat\",\"answer\":[\"lembaga-mitra-poltek-batam\"]},{\"question\":\"asal-sertifikat-lainnya\",\"answer\":\"asdas\"},{\"question\":\"sudah-bekerja\",\"answer\":[\"tidak\"]},{\"question\":\"kerja-di-tempat-magang\",\"answer\":[\"ya\"]},{\"question\":\"skala-perusahaan-tempat-bekerja\",\"answer\":[\"nasional\"]},{\"question\":\"penghasilan-perbulan\",\"answer\":[\"5juta&gt;\"]},{\"question\":\"memiliki-usaha\",\"answer\":[\"tidak\"]},{\"question\":\"tahun-mulai-usaha\",\"answer\":\"12312\"},{\"question\":\"jenis-usaha\",\"answer\":[\"jasa\"]},{\"question\":\"jenis-usaha-lainnya\",\"answer\":\"sdfsd\"},{\"question\":\"nama-usaha\",\"answer\":\"asdasd\"},{\"question\":\"alamat-usaha\",\"answer\":\"dasfasd\"},{\"question\":\"prestasi-selama-kuliah\",\"answer\":[\"tidak\"]},{\"question\":\"bidang-prestasi\",\"answer\":[\"akademik\"]},{\"question\":\"tingkat-prestasi-akademik\",\"answer\":[\"nasional\"]},{\"question\":\"tingkat-prestasi-non-akademik\",\"answer\":[\"internasional\"]},{\"question\":\"juara-prestasi\",\"answer\":[\"1\"]},{\"question\":\"juara-prestasi-lainnya\",\"answer\":\"1\"}]}', '2023-06-24 20:41:28', '2023-06-24 20:41:28', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `loker`
--

CREATE TABLE `loker` (
  `id_loker` int(7) NOT NULL,
  `id_perusahaan` int(7) UNSIGNED NOT NULL,
  `posisi` varchar(30) NOT NULL,
  `tingkat_pengalaman` varchar(40) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `loker`
--

INSERT INTO `loker` (`id_loker`, `id_perusahaan`, `posisi`, `tingkat_pengalaman`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'Programmer', 'pemula', '2023-06-20 16:09:36', '2023-06-20 16:09:36', NULL),
(2, 1, 'Manager', 'professional', '2023-06-20 16:26:50', '2023-06-20 16:26:50', NULL),
(3, 1, 'CEO', 'pemula', '2023-06-20 20:01:52', '2023-06-20 20:01:52', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id_mahasiswa` int(7) UNSIGNED NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `nim` varchar(13) NOT NULL,
  `email_kampus` varchar(40) NOT NULL,
  `alamat` text NOT NULL,
  `prodi` varchar(40) NOT NULL,
  `telp` varchar(14) NOT NULL,
  `jenis_kelamin` int(1) UNSIGNED NOT NULL,
  `ipk` float UNSIGNED NOT NULL,
  `is_lulus` int(1) UNSIGNED NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id_mahasiswa`, `nama_lengkap`, `nim`, `email_kampus`, `alamat`, `prodi`, `telp`, `jenis_kelamin`, `ipk`, `is_lulus`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'User Satu', '8888444433332', 'usersatu@poltekbatam.ac.ids', 'Jalan kuda raya No 3', 'Teknik Informatika', '088811223344', 1, 3.88, 1, '2023-06-14 14:26:29', '2023-06-14 14:26:29', NULL),
(2, 'Joko Indan', '2222222222222', 'jokoindan@poltek.ac.id', 'Taman sari', 'D3 Teknik Informatika', '081390909090', 1, 4, 1, '2023-06-18 12:45:57', '2023-06-18 12:45:57', NULL),
(3, 'Jidan', '3312211050', 'jidan@polibatam.ac.id', 'piayu', 'Informatika', '082135463', 1, 3, 1, '2023-06-24 15:09:11', '2023-06-24 15:09:11', NULL),
(4, 'Naura', '3312211060', 'naura@polibatam.ac.id', 'piayu', 'Informatika', '085465266', 0, 3.55, 1, '2023-06-24 15:11:43', '2023-06-24 15:11:43', NULL),
(5, 'Verdyawan', '3312211045', 'verdy@polibatam.ac.id', 'legenda', 'Informatika', '085466161615', 1, 3.5, 1, '2023-06-24 15:15:03', '2023-06-24 15:15:03', NULL),
(6, 'Dewarta', '3312211042', 'dewarta@polibatam.ac.id', 'bt aji', 'Informatika', '08621621621', 1, 3.55, 1, '2023-06-24 15:28:36', '2023-06-24 15:28:36', NULL),
(7, 'samsul', '3312211044', 'samsul@polibatam.ac.id', 'piayu', 'Informatika', '08153161', 1, 3, 1, '2023-06-24 15:39:03', '2023-06-24 15:39:03', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `perusahaan`
--

CREATE TABLE `perusahaan` (
  `id_perusahaan` int(7) UNSIGNED NOT NULL,
  `nama_perusahaan` varchar(75) NOT NULL,
  `email_perusahaan` varchar(75) NOT NULL,
  `telp_perusahaan` varchar(20) NOT NULL,
  `alamat_perusahaan` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `perusahaan`
--

INSERT INTO `perusahaan` (`id_perusahaan`, `nama_perusahaan`, `email_perusahaan`, `telp_perusahaan`, `alamat_perusahaan`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'PT. Cipta Karya', 'ciptakarya@gmail.com', '021-233-233', 'Jalan Ir.Soekarno', '2023-06-18 19:55:54', '2023-06-18 19:55:54', NULL),
(2, 'PT Shimano Batam', 'shimanobatam@gmail.com', '02213223', 'Batamindo Muka kuning lot 100-110', '2023-06-24 10:39:11', '2023-06-24 10:39:11', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `riwayat_kerja`
--

CREATE TABLE `riwayat_kerja` (
  `id_riwayat_kerja` int(7) UNSIGNED NOT NULL,
  `id_user` int(7) UNSIGNED NOT NULL,
  `id_perusahaan` int(7) UNSIGNED NOT NULL,
  `lama_kerja` int(3) NOT NULL,
  `jabatan` varchar(40) NOT NULL,
  `penghasilan` int(25) NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `deleted_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `user_id` int(7) UNSIGNED NOT NULL,
  `id_mahasiswa` int(7) UNSIGNED DEFAULT NULL,
  `id_perusahaan` int(7) UNSIGNED DEFAULT NULL,
  `username` varchar(40) NOT NULL,
  `password` text NOT NULL,
  `email` varchar(40) NOT NULL,
  `level` int(1) NOT NULL DEFAULT 3,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`user_id`, `id_mahasiswa`, `id_perusahaan`, `username`, `password`, `email`, `level`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, NULL, NULL, 'admin', '$2y$10$xWZ7UU3PlpG3vclTxOQV0OTPhSMRE5ij8ugCQjeVAWBGXDn9YF4.a', 'admin@admin.com', 1, '2023-06-14 19:36:55', '2023-06-14 19:36:55', NULL),
(2, 1, NULL, 'usersatu', '$2y$10$xsca5.fdU9dLiPSrOAGAv.E7mVl.MAhOPeH4K1as53n/khpQiW9ny', 'usersatu@gmail.com', 3, '2023-06-14 19:36:56', '2023-06-14 19:36:56', NULL),
(4, 2, NULL, 'jokoindan031', '$2y$10$0lCWFw/pZZ8LoC41YM/ae.GCXMzEZa0zCuXKwx4kC8U4MPVXhhfBy', 'jokoindan@gmail.com', 3, '2023-06-18 23:26:13', '2023-06-18 23:26:13', NULL),
(5, NULL, 1, 'ciptakarya', '$2y$10$fXINaVAkeOv5QH.KK.DCeO9qO.B.VB2zA1prOGSsjL3jvS/trL.Ly', 'ciptakarya@gmail.com', 2, '2023-06-19 01:02:47', '2023-06-19 01:02:47', NULL),
(24, NULL, 2, 'shimanobtm', '$2y$10$5R.OLx.ofPOjCDebOLd0MOgG5QasBKEYXnm4zlQkZPdgyx9f/qLSe', 'shimanobatam@gmail.com', 2, '2023-06-24 16:24:09', '2023-06-24 16:24:09', NULL),
(25, 3, NULL, 'jidan', '$2y$10$5gj3mqFN6Cfvv0dokdHSguKU4T5lAOqrwE9mfmTQOl.nGqOwZvhz.', 'jidan.rizky123@gmail.com', 3, '2023-06-24 20:10:44', '2023-06-24 20:10:44', NULL),
(26, 4, NULL, 'naura', '$2y$10$qZFMw9k1zY8rKyg2D9SGJuJbXNT7nT.1UIOjyaovZoNl9x2FsaMdi', 'naura@polibatam.ac.id', 3, '2023-06-24 20:28:21', '2023-06-24 20:28:21', NULL),
(27, 6, NULL, 'dewarta', '$2y$10$btfSNXf99sa7DGMVCaCm2uLAMhkpUjaRwsoQqMwI5LmbRPhsHs8Ti', 'dewarta@polibatam.ac.id', 3, '2023-06-24 20:32:34', '2023-06-24 20:32:34', NULL),
(28, 7, NULL, 'samsul', '$2y$10$0TrJgYQxxc1XfI5WWLlkYOm8g2hT40Hd5Ftb2UulvHQt1NTdDjne2', 'samsul@gmail.com', 3, '2023-06-24 20:41:29', '2023-06-24 20:41:29', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kuesioner`
--
ALTER TABLE `kuesioner`
  ADD PRIMARY KEY (`id_kuesioner`),
  ADD KEY `id_mahasiswa_kuesioner` (`id_mahasiswa`),
  ADD KEY `kuesioner_ibfk_2` (`id_perusahaan`);

--
-- Indeks untuk tabel `loker`
--
ALTER TABLE `loker`
  ADD PRIMARY KEY (`id_loker`),
  ADD KEY `id_perusahaan` (`id_perusahaan`);

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id_mahasiswa`);

--
-- Indeks untuk tabel `perusahaan`
--
ALTER TABLE `perusahaan`
  ADD PRIMARY KEY (`id_perusahaan`);

--
-- Indeks untuk tabel `riwayat_kerja`
--
ALTER TABLE `riwayat_kerja`
  ADD PRIMARY KEY (`id_riwayat_kerja`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_perusahaan` (`id_perusahaan`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `id_mahasiswa` (`id_mahasiswa`),
  ADD KEY `id_perusahaan` (`id_perusahaan`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kuesioner`
--
ALTER TABLE `kuesioner`
  MODIFY `id_kuesioner` int(7) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `loker`
--
ALTER TABLE `loker`
  MODIFY `id_loker` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id_mahasiswa` int(7) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `perusahaan`
--
ALTER TABLE `perusahaan`
  MODIFY `id_perusahaan` int(7) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `riwayat_kerja`
--
ALTER TABLE `riwayat_kerja`
  MODIFY `id_riwayat_kerja` int(7) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(7) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `kuesioner`
--
ALTER TABLE `kuesioner`
  ADD CONSTRAINT `kuesioner_ibfk_1` FOREIGN KEY (`id_mahasiswa`) REFERENCES `mahasiswa` (`id_mahasiswa`),
  ADD CONSTRAINT `kuesioner_ibfk_2` FOREIGN KEY (`id_perusahaan`) REFERENCES `perusahaan` (`id_perusahaan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `loker`
--
ALTER TABLE `loker`
  ADD CONSTRAINT `loker_ibfk_1` FOREIGN KEY (`id_perusahaan`) REFERENCES `perusahaan` (`id_perusahaan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `riwayat_kerja`
--
ALTER TABLE `riwayat_kerja`
  ADD CONSTRAINT `riwayat_kerja_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `riwayat_kerja_ibfk_2` FOREIGN KEY (`id_perusahaan`) REFERENCES `perusahaan` (`id_perusahaan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_mahasiswa`) REFERENCES `mahasiswa` (`id_mahasiswa`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `user_ibfk_2` FOREIGN KEY (`id_perusahaan`) REFERENCES `perusahaan` (`id_perusahaan`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
