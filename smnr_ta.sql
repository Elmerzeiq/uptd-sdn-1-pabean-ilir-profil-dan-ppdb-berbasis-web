-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Bulan Mei 2025 pada 18.58
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smnr_ta`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akademiks`
--

CREATE TABLE `akademiks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `akademiks`
--

INSERT INTO `akademiks` (`id`, `judul`, `isi`, `image`, `created_at`, `updated_at`) VALUES
(2, 'PPBD INFO', 'Halaman ini menyediakan informasi lengkap terkait Penerimaan Peserta Didik Baru (PPDB),\r\n                      termasuk syarat pendaftaran, jadwal pelaksanaan, tata cara pengisian formulir, serta mekanisme seleksi yang diterapkan.\r\n                       Informasi ini bertujuan untuk memudahkan calon siswa dan orang tua dalam memahami seluruh tahapan yang diperlukan untuk mendaftar ke sekolah pilihan.', '1740855048.jpg', '2025-03-01 11:50:48', '2025-03-01 11:50:48'),
(3, 'Kalender Akademik', 'Halaman ini memuat informasi lengkap mengenai Kalender Akademik sekolah, termasuk jadwal kegiatan belajar mengajar, hari libur, ujian tengah dan akhir semester, serta kegiatan penting lainnya.\r\n                      Kalender ini akan membantu siswa, orang tua, dan guru dalam memantau semua aktivitas akademik yang berlangsung sepanjang tahun ajaran.', '1740855116.jpg', '2025-03-01 11:51:56', '2025-03-01 11:51:56'),
(4, 'Ekstrakurikuler', 'Di halaman ini juga tersedia informasi mengenai kegiatan ekstrakurikuler yang ditawarkan oleh sekolah.\r\n                      Mulai dari kegiatan olahraga, seni, sains, hingga organisasi siswa.\r\n                      Setiap ekstrakurikuler bertujuan untuk mengembangkan potensi dan minat siswa di luar kegiatan belajar formal, serta memperkaya pengalaman mereka selama bersekolah.', '1740855162.png', '2025-03-01 11:52:42', '2025-03-01 11:52:42');

-- --------------------------------------------------------

--
-- Struktur dari tabel `beritas`
--

CREATE TABLE `beritas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `deskripsi` text NOT NULL,
  `isi` text NOT NULL,
  `tanggal` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `beritas`
--

INSERT INTO `beritas` (`id`, `judul`, `image`, `deskripsi`, `isi`, `tanggal`, `created_at`, `updated_at`) VALUES
(2, 'Menyambut bulan suci Ramadhan 1446 H', '1740739596.jpg', '<p><strong>Menyambut bulan suci Ramadhan 1446 H</strong></p>\r\n\r\n<p><strong>bersama Siswa-siswi HEBAT <a href=\"https://web.facebook.com/profile.php?id=100092457494049&amp;__cft__[0]=AZWM4e87XhW7NFMwEqvsl28ROvBQe2Tp7YUSoRq0RuBHzUAoaVJmC26wG6XmOb6CCPa3kEbEQzEZ5iBUUytgy2T36ZCCw6OBj-20hdAYr2rnLoYC9ILAEZk6N07mBRm2JybDy3mQbumfI_4vv1mnb_XttdMVEEZN_pE1P9TiE9PFMMkyB1duocrpHxabAz5veU4WJ5KFTZoOeG_ERl3t_myRWasZitOU3r3dLey-1f20gV2DAJBpxZM_q0Dbo4KNfiwAZ7lc8EMtMSpeo3MtMLql&amp;__tn__=-]K-R\">Uptdsdn I Pabean Ilir</a> dan Bapak/Ibu GTK UPTD SDN 1 PABEAN ILIR</strong></p>', '<p><strong>Menyambut bulan suci Ramadhan 1446 H</strong></p>\r\n\r\n<p><strong>bersama Siswa-siswi HEBAT <a href=\"https://web.facebook.com/profile.php?id=100092457494049&amp;__cft__[0]=AZWM4e87XhW7NFMwEqvsl28ROvBQe2Tp7YUSoRq0RuBHzUAoaVJmC26wG6XmOb6CCPa3kEbEQzEZ5iBUUytgy2T36ZCCw6OBj-20hdAYr2rnLoYC9ILAEZk6N07mBRm2JybDy3mQbumfI_4vv1mnb_XttdMVEEZN_pE1P9TiE9PFMMkyB1duocrpHxabAz5veU4WJ5KFTZoOeG_ERl3t_myRWasZitOU3r3dLey-1f20gV2DAJBpxZM_q0Dbo4KNfiwAZ7lc8EMtMSpeo3MtMLql&amp;__tn__=-]K-R\">Uptdsdn I Pabean Ilir</a> dan Bapak/Ibu GTK UPTD SDN 1 PABEAN ILIR</strong></p>', '2025-02-25', '2025-02-28 03:46:36', '2025-02-28 03:46:36'),
(3, 'Kegiatan Upacara di Uptdsdn I Pabean Ilir', '1740739727.jpg', '<p>Kedisiplinan mulai dari hal-hal kecil agar terbiasa, mulailah dari diri sendiri dan lingkungan sekolah.</p>', '<p>Kedisiplinan mulai dari hal-hal kecil agar terbiasa, mulailah dari diri sendiri dan lingkungan sekolah.</p>', '2025-02-24', '2025-02-28 03:48:47', '2025-02-28 03:48:47'),
(4, 'Kegiatan rutin hari sabtu dan rangkaian kegiatan syukuran ruang kelas baru yang akan ditempati oleh Siswa-siswi HEBAT UPTD SDN 1 Pabean Ilir.', '1740740229.jpg', '<p><strong>Kegiatan rutin hari sabtu dan rangkaian kegiatan syukuran ruang kelas baru yang akan ditempati oleh Siswa-siswi HEBAT UPTD SDN 1 Pabean Ilir.</strong></p>', '<p><strong>Kegiatan rutin hari sabtu dan rangkaian kegiatan syukuran ruang kelas baru yang akan ditempati oleh Siswa-siswi HEBAT UPTD SDN 1 Pabean Ilir.</strong></p>\r\n\r\n<p><strong>Terimakasih kepada Bapak/Ibu GTK, Siswa-siswi, Wali Murid HEBAT UPTD SDN 1 Pabean Ilir dan semua Pihak yang telah mendukung kegiatan-kegiatan di <a href=\"https://web.facebook.com/profile.php?id=100092457494049&amp;__cft__[0]=AZUXGzf2BVyTbsilinJYcYUPsFKCR88Acm2LunN4NmPEs3gFyHhBrsyEek4TwE0m6OoH9gzzfYgmY2D1lnPYHsgg7p-9MsyUILQLotyjoMv2wl725Gv4B41KphoAY9J0DwdH5jY3raeOjZVz42UNQ1PIKQkY_SEuDmibKkXs8hNKlpiZR8Gna4EEKmdr50fJM2s4Q5NfL9Tk0ocH4UAjifozSz-FISU40LvysKdo-QZnQcju3a2Tektg8vNsbuuG1palHwSEI_gC5pYUBgwQInbyEbAyZgeSAUUCopx_GmnR_Z4C1b0lXmHcELiUm5J7AhY&amp;__tn__=-]K-R\">Uptdsdn I Pabean Ilir</a></strong></p>\r\n\r\n<p><strong>-Senam bersama</strong></p>\r\n\r\n<p><strong>-Pembacaan asmaul husna</strong></p>\r\n\r\n<p><strong>-Sambutan kepala sekolah</strong></p>\r\n\r\n<p><strong>-Penghargaan lomba mewarnai dalam rangkah HUT PGRI dan Hari Guru Tahun 2024</strong></p>\r\n\r\n<p><strong>- Pembacaan surat yasin dan doa bersama</strong></p>\r\n\r\n<p><strong>-Secara simbolis pembukaan ruang kelas masing-masing.</strong></p>\r\n\r\n<p><strong>-Makan bersama Siswa-siswi HEBAT UPTD SDN 1 Pabean ilir</strong></p>', '2024-12-07', '2025-02-28 03:57:09', '2025-02-28 03:57:09'),
(5, 'Kegiatan rutin hari sabtu  Siswa-siswi HEBAT UPTD SDN 1 Pabean Ilir.', '1740838772.jpg', '<p>Sehat jasmani dan rohani</p>\r\n\r\n<p>Semangat berlatih lebih baik, terus bersosialisasi dan beradaptasi</p>', '<p>Sehat jasmani dan rohani</p>\r\n\r\n<p>Semangat berlatih lebih baik, terus bersosialisasi dan beradaptasi</p>', '2025-02-22', '2025-03-01 07:19:32', '2025-03-01 07:19:32'),
(6, 'Kegiatan Upacara di Uptdsdn I Pabean Ilir', '1740838946.jpg', '<p>Kegiatan Upacara di <a href=\"https://www.facebook.com/profile.php?id=100092457494049&amp;__cft__[0]=AZVFQ6FcJ5ev_dUpQ1Lc2N3bhnTLidRTnjf-SLRB_PMhR5OcQHVBDO6Pk9QwVtgqNI0kzrIZrlr207NJGmX4OffDbs5FWGXZMNNLcMZ-riMfmmmlPVRTX0lLL0G9FcV-MF_BnBH1H8DId5OA6ASmAGGFu7C8Dk_lVCd-ZpsCy-ShOA&amp;__tn__=-]K-R\">Uptdsdn I Pabean Ilir</a></p>', '<p>Senin, 17 Februari 2025</p>\r\n\r\n<p>Kegiatan Upacara di <a href=\"https://www.facebook.com/profile.php?id=100092457494049&amp;__cft__[0]=AZVFQ6FcJ5ev_dUpQ1Lc2N3bhnTLidRTnjf-SLRB_PMhR5OcQHVBDO6Pk9QwVtgqNI0kzrIZrlr207NJGmX4OffDbs5FWGXZMNNLcMZ-riMfmmmlPVRTX0lLL0G9FcV-MF_BnBH1H8DId5OA6ASmAGGFu7C8Dk_lVCd-ZpsCy-ShOA&amp;__tn__=-]K-R\">Uptdsdn I Pabean Ilir</a></p>', '2025-02-17', '2025-03-01 07:22:26', '2025-03-01 07:22:26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `berkas`
--

CREATE TABLE `berkas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `akta_kelahiran` varchar(255) DEFAULT NULL,
  `kartu_keluarga` varchar(255) DEFAULT NULL,
  `ktp_orangtua` varchar(255) DEFAULT NULL,
  `kia` varchar(255) DEFAULT NULL,
  `ijazah_tk_paud` varchar(255) DEFAULT NULL,
  `kip_kps_kks` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ekskuls`
--

CREATE TABLE `ekskuls` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `deskripsi` text NOT NULL,
  `isi` varchar(1000) NOT NULL,
  `tanggal` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `ekskuls`
--

INSERT INTO `ekskuls` (`id`, `judul`, `image`, `deskripsi`, `isi`, `tanggal`, `created_at`, `updated_at`) VALUES
(1, 'Ekstrakurikuler di UPTD SDN 1 Pabean Ilir', '1740794109.png', '<h2>Di UPTD SDN 1 Pabean Ilir, kami berkomitmen untuk mendukung pertumbuhan dan perkembangan setiap siswa secara holistik. Melalui tiga program ekstrakurikuler utama Pramuka, Tari, dan Futsal. Kami memberikan kesempatan bagi siswa untuk mengeksplorasi minat mereka, mengasah bakat, dan membangun karakter yang kuat. Bergabunglah dengan kami dalam perjalanan yang penuh inspirasi dan pengalaman tak terlupakan!</h2>', '<p>&nbsp;</p>\r\n\r\n<h3><strong>1. Pramuka</strong></h3>\r\n\r\n<h2>Ekstrakurikuler yang membentuk kedisiplinan, kemandirian, dan kebersamaan siswa melalui latihan baris-berbaris, tali-temali, serta kegiatan kepemimpinan.</h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><strong>2. Tari</strong></h3>\r\n\r\n<h2>Wadah bagi siswa yang memiliki minat dalam seni tari tradisional maupun modern. Kegiatan ini melatih kreativitas, keluwesan gerak, dan pengenalan budaya.</h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><strong>3. Futsal</strong></h3>\r\n\r\n<h2>Ekstrakurikuler olahraga yang mengembangkan keterampilan bermain futsal, kerja sama tim, serta semangat sportivitas melalui latihan teknik dasar dan strategi permainan.</h2>\r\n\r\n<p>&nbsp;</p>', '2025-03-01', '2025-02-28 12:29:02', '2025-02-28 19:18:36');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ekskul_details`
--

CREATE TABLE `ekskul_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `ekskul_details`
--

INSERT INTO `ekskul_details` (`id`, `image`, `kategori`, `created_at`, `updated_at`) VALUES
(1, '1740744300.jpg', 'tari', '2025-02-28 05:05:00', '2025-02-28 05:05:00'),
(2, '1740771263.jpg', 'pramuka', '2025-02-28 12:34:23', '2025-02-28 12:34:23'),
(3, '1740771304.jpg', 'futsal', '2025-02-28 12:35:04', '2025-02-28 12:35:04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `formulirs`
--

CREATE TABLE `formulirs` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `nama_panggilan` varchar(255) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `tinggi_badan` varchar(255) NOT NULL,
  `berat_badan` varchar(255) NOT NULL,
  `golongan_darah` varchar(255) DEFAULT NULL,
  `penyakit_pernah_derita` varchar(255) DEFAULT NULL,
  `agama` varchar(255) NOT NULL,
  `kewarganegaraan` varchar(255) NOT NULL,
  `tinggal_bersama` varchar(255) NOT NULL,
  `anak_ke` varchar(255) NOT NULL,
  `saudara_kandung` varchar(255) DEFAULT NULL,
  `saudara_tiri` varchar(255) DEFAULT NULL,
  `saudara_angkat` varchar(255) DEFAULT NULL,
  `bahasa_sehari` varchar(255) NOT NULL,
  `jarak_rumah_kesekolah` varchar(255) NOT NULL,
  `asal_tkra` varchar(255) NOT NULL,
  `alamat_tkra` varchar(255) NOT NULL,
  `tanggal_sttb` date DEFAULT NULL,
  `nomor_sttb` varchar(255) DEFAULT NULL,
  `kesulitan_di_tkra` varchar(255) DEFAULT NULL,
  `bakat_minat_anak` varchar(255) NOT NULL,
  `prestasi_belajar` varchar(255) DEFAULT NULL,
  `nama_ayah` varchar(255) NOT NULL,
  `tempat_lahir_ayah` varchar(255) NOT NULL,
  `tgl_lahir_ayah` date NOT NULL,
  `agama_ayah` varchar(255) NOT NULL,
  `kewarganegaraan_ayah` varchar(255) NOT NULL,
  `pendidikan_ayah` varchar(255) NOT NULL,
  `pekerjaan_ayah` varchar(255) NOT NULL,
  `instansi_kerja_ayah` varchar(255) DEFAULT NULL,
  `jabatan_kerja_ayah` varchar(255) DEFAULT NULL,
  `alamat_kantor_ayah` varchar(255) DEFAULT NULL,
  `lama_kerja_ayah_perhari` varchar(255) NOT NULL,
  `penghasilan_ayah` varchar(255) NOT NULL,
  `alamat_ayah` varchar(255) NOT NULL,
  `no_hp_ayah` varchar(255) DEFAULT NULL,
  `hubungan_ayah` varchar(255) NOT NULL,
  `nama_ibu` varchar(255) NOT NULL,
  `tempat_lahir_ibu` varchar(255) NOT NULL,
  `tgl_lahir_ibu` date NOT NULL,
  `agama_ibu` varchar(255) NOT NULL,
  `kewarganegaraan_ibu` varchar(255) NOT NULL,
  `pendidikan_ibu` varchar(255) NOT NULL,
  `pekerjaan_ibu` varchar(255) NOT NULL,
  `instansi_kerja_ibu` varchar(255) DEFAULT NULL,
  `jabatan_kerja_ibu` varchar(255) DEFAULT NULL,
  `alamat_kantor_ibu` varchar(255) DEFAULT NULL,
  `lama_kerja_ibu_perhari` varchar(255) NOT NULL,
  `penghasilan_ibu` varchar(255) NOT NULL,
  `alamat_ibu` varchar(255) NOT NULL,
  `no_hp_ibu` varchar(255) DEFAULT NULL,
  `hubungan_ibu` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `gallery`
--

CREATE TABLE `gallery` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `gallery`
--

INSERT INTO `gallery` (`id`, `image`, `kategori`, `created_at`, `updated_at`) VALUES
(1, '1740738802.jpg', 'Ekstrakurikuler', '2025-02-28 03:33:22', '2025-02-28 03:33:22'),
(2, '1740738852.jpg', 'Prestasi', '2025-02-28 03:34:12', '2025-02-28 03:34:12'),
(3, '1740739154.jpg', 'Ekstrakurikuler', '2025-02-28 03:35:07', '2025-02-28 03:39:14'),
(4, '1740738945.jpg', 'Kegiatan', '2025-02-28 03:35:45', '2025-02-28 03:35:45'),
(5, '1740740523.jpg', 'Kegiatan', '2025-02-28 03:38:48', '2025-02-28 04:02:03'),
(6, '1740739192.jpg', 'Ekstrakurikuler', '2025-02-28 03:39:52', '2025-02-28 03:39:52');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gurus`
--

CREATE TABLE `gurus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nip` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `sambutan` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `gurus`
--

INSERT INTO `gurus` (`id`, `nama`, `nip`, `jabatan`, `sambutan`, `image`, `created_at`, `updated_at`) VALUES
(2, 'Yayan Supyadin S.Ag.M.Pd.I.', '95457743963467', 'KEPALA SEKOLAH UPTD SDN 1 PABEAN ILIR', '<p><strong>Assalamu&rsquo;alaikum warahmatullahi wabarakatuh,</strong></p>\r\n\r\n<p><strong>Selamat datang di website resmi UPTD SDN 1 Pabean Ilir.<br />\r\nKami dengan bangga mempersembahkan platform ini sebagai sarana informasi dan komunikasi antara sekolah, siswa, orang tua, dan masyarakat luas. Melalui website ini, Anda dapat menemukan informasi seputar kegiatan sekolah, prestasi siswa, program akademik, serta berbagai kegiatan ekstrakurikuler yang kami tawarkan.</strong></p>\r\n\r\n<p><strong>Kami berkomitmen untuk memberikan pendidikan yang berkualitas guna membentuk generasi yang berkarakter, kreatif, dan berprestasi. Dengan dukungan seluruh warga sekolah dan masyarakat, kami yakin dapat bersama-sama mewujudkan visi dan misi sekolah.</strong></p>\r\n\r\n<p><strong>Terima kasih atas kunjungan Anda. Kami berharap website ini dapat memberikan manfaat dan memenuhi kebutuhan informasi Anda.</strong></p>\r\n\r\n<p><strong>Wassalamu&rsquo;alaikum warahmatullahi wabarakatuh.</strong></p>\r\n\r\n<p><strong>Hormat kami,<br />\r\nKepala Sekolah UPTD SDN 1 Pabean Ilir</strong><br />\r\n&nbsp;</p>', '1740736453.jpg', '2025-02-28 02:54:13', '2025-02-28 02:54:13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kalenders`
--

CREATE TABLE `kalenders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) NOT NULL,
  `image` varchar(1000) DEFAULT NULL,
  `deskripsi` text NOT NULL,
  `isi` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kalenders`
--

INSERT INTO `kalenders` (`id`, `judul`, `image`, `deskripsi`, `isi`, `tanggal`, `created_at`, `updated_at`) VALUES
(1, 'Kalender Akademik', '1740741321.jpg', '<p><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">KALENDER AKADEMIK</font></font></p>', '<p><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">KALENDER AKADEMIK</font></font></p>', '2025-02-28', '2025-02-28 04:12:07', '2025-02-28 04:15:21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_07_29_135148_create_personal_access_tokens_table', 1),
(5, '2024_08_26_100353_create_profile_table', 1),
(6, '2024_10_07_055712_create_profils_table', 1),
(7, '2024_10_09_110050_create_galleries_table', 1),
(8, '2025_01_12_154630_create_siswas_table', 1),
(9, '2025_01_13_155045_create_staff_table', 1),
(10, '2025_01_14_163459_create_gurus_table', 1),
(11, '2025_01_15_144338_create_akademiks_table', 1),
(12, '2025_01_15_153422_create_ekskuls_table', 1),
(13, '2025_01_20_045950_create_beritas_table', 1),
(14, '2025_01_21_111602_create_ekskul_details_table', 1),
(15, '2025_01_21_135514_create_kalenders_table', 1),
(16, '2025_01_23_012012_create_berkas_table', 1),
(17, '2025_02_01_150147_create_pengumuman_table', 1),
(18, '2025_02_02_160855_create_formulirs_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `tanggal` date NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pengumuman`
--

INSERT INTO `pengumuman` (`id`, `judul`, `isi`, `tanggal`, `kategori`, `created_at`, `updated_at`) VALUES
(1, 'Selamat Memperingati ISRA\'MIRAJ NABI MUHAMMAD SAW 27 RAJAB1446 H', '<p>Selamat Memperingati ISRA&#39;MIRAJ NABI MUHAMMAD SAW 27 RAJAB1446 H</p>\r\n\r\n<p>Isra Miraj Memberikan pelajaran bagi seluruh umat manusia untuk menjalin hubungan dengan Allah melalui&nbsp;<br />\r\nibadah dan doa, serta memperbanyak amalan untuk mendapat keridoan-Nya.</p>', '2025-01-27', 'eksternal', '2025-02-28 04:19:50', '2025-02-28 04:19:50'),
(2, 'Setelah Pendaftaran Siswa Baru', '<p>Kepada seluruh orang tua/wali dan siswa baru yang terhormat,</p>\r\n\r\n<p>Kami mengucapkan selamat datang kepada seluruh siswa baru di UPTD SDN 1 Pabean Ilir untuk tahun ajaran 2025/2026. Kami sangat senang menyambut kalian dalam keluarga besar kami dan berharap kalian menikmati setiap langkah perjalanan pendidikan di sini.</p>\r\n\r\n<p>Berikut beberapa informasi penting terkait tahap selanjutnya setelah pendaftaran:</p>\r\n\r\n<p>Orientasi Siswa Baru:</p>\r\n\r\n<p>Tanggal: Senin, 10 Februari 2025</p>\r\n\r\n<p>Waktu: 08:00 - 12:00</p>\r\n\r\n<p>Tempat: Aula UPTD SDN 1 Pabean Ilir</p>\r\n\r\n<p>Kehadiran siswa baru pada kegiatan orientasi ini sangat diharapkan karena akan memberikan gambaran umum tentang lingkungan sekolah, peraturan, dan program yang akan dijalani.</p>\r\n\r\n<p>Pembagian Buku dan Seragam:</p>\r\n\r\n<p>Tanggal: Rabu, 12 Februari 2025</p>\r\n\r\n<p>Waktu: 09:00 - 14:00</p>\r\n\r\n<p>Tempat: Ruang Distribusi UPTD SDN 1 Pabean Ilir</p>\r\n\r\n<p>Silakan membawa bukti pendaftaran dan kwitansi pembayaran untuk mengambil buku dan seragam sekolah.</p>\r\n\r\n<p>Pengarahan Orang Tua/Wali:</p>\r\n\r\n<p>Tanggal: Jumat, 14 Februari 2025</p>\r\n\r\n<p>Waktu: 10:00 - 12:00</p>\r\n\r\n<p>Tempat: Aula UPTD SDN 1 Pabean Ilir</p>\r\n\r\n<p>Diharapkan orang tua/wali siswa baru hadir untuk mendapatkan informasi lengkap mengenai proses belajar mengajar dan berbagai kegiatan di sekolah.</p>\r\n\r\n<p>Mulai Tahun Ajaran Baru:</p>\r\n\r\n<p>Tanggal: Senin, 17 Februari 2025</p>\r\n\r\n<p>Waktu: 07:30 - 14:30</p>\r\n\r\n<p>Tempat: UPTD SDN 1 Pabean Ilir</p>\r\n\r\n<p>Siswa diharapkan datang tepat waktu dengan mengenakan seragam sekolah dan membawa perlengkapan yang telah ditentukan.</p>\r\n\r\n<p>Jika ada pertanyaan lebih lanjut, jangan ragu untuk menghubungi pihak administrasi sekolah di nomor [Nomor Kontak Sekolah] atau melalui email [Alamat Email Sekolah].</p>\r\n\r\n<p>Terima kasih atas perhatian dan kerjasamanya. Kami berharap dapat menciptakan lingkungan belajar yang positif dan mendukung bagi semua siswa.</p>\r\n\r\n<p>Salam hangat,</p>', '2025-02-28', 'internal', '2025-02-28 04:21:05', '2025-02-28 04:25:39');

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `profile`
--

CREATE TABLE `profile` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL,
  `jml_siswa` varchar(255) NOT NULL,
  `jml_guru` varchar(255) NOT NULL,
  `jml_staff` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `kontak1` varchar(255) NOT NULL,
  `kontak2` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `profils`
--

CREATE TABLE `profils` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL,
  `jml_siswa` int(11) NOT NULL,
  `jml_guru` int(11) NOT NULL,
  `jml_staff` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `alamat` text NOT NULL,
  `kontak1` varchar(255) NOT NULL,
  `kontak2` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `profils`
--

INSERT INTO `profils` (`id`, `visi`, `misi`, `jml_siswa`, `jml_guru`, `jml_staff`, `image`, `alamat`, `kontak1`, `kontak2`, `email`, `created_at`, `updated_at`) VALUES
(1, '<p><strong>REMMPEG</strong></p>\r\n\r\n<p><strong>(RELIGIUS MAJU MENUJU PRESTASI GEMILANG)</strong></p>', '<ol>\r\n	<li><strong>Mendukung wajib belajar 12(dua belas) tahun.&nbsp;(Perda No: 8 Tahun 2015)</strong></li>\r\n	<li><strong>Mengimplementasi aktifitas sekolah yang religius,berakhlak mulia dan mematuhi ajaran agama&nbsp;</strong></li>\r\n	<li><strong>Mencerdaskan anak didik dengan mewujudkan KBM yang efektif dan efisien yang berorientasi kepada pengembangan ilmu pengetahuan dan teknologi&nbsp;</strong></li>\r\n	<li><strong>Membantu mangarahkan anak didik menjadi anak yang mandiri dan senang hidup bersih.&nbsp;</strong></li>\r\n	<li><strong>Meningkatkan kegiatan olahraga, kesenian, dan keterampilan&nbsp;</strong></li>\r\n	<li><strong>Melahirkan lulusan yang bermutu sesuai dengan standar kelulusan(SKL)&nbsp;</strong></li>\r\n	<li><strong>Memperingati hari-hari besar agama/nasional&nbsp;</strong></li>\r\n</ol>', 291, 8, 2, '1740735909.jpg', 'Jalan Brawijaya, Pabeanilir, Kec. Pasekan, Kab. Indramayu Prov. Jawa Barat', '+6282320192550', '+6282117332776', 'uptdsdn1pabeanilir@gmail.com', '2025-02-28 02:45:09', '2025-02-28 02:45:09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('fXm9fodO3wX6o1cirCcmC6YKuMSlRBIgew3HXGo6', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/135.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZmU1NHhqSHZpQ2ljbTg0WTVnNTNZbUttamxRdzNiZVY2RTJYa3F5NCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1744996067),
('iA82JZjCdqXjhnz8XS6S5uz9ZGT8qmGBL43t2yzo', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/134.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiSVozOHpRSGVQMGFwdzBpTGo4YWMxWktyT2dMSVhka1RPM21RZ0YyNiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9ndXJ1Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTt9', 1742904069),
('ilwC5sD3ejWScf1iSqD9ovgiUAgqknMCJMFWn1Qi', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/135.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiN1plaDV1ZzZpZUlxMmgxMGFKaHB5VTA4WUs1WGVPck5VZVp5OWx3RCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1744997771),
('pKO9qtiNtgyTQnaz2E50B0zXDuZu9KDFkZXXGAQz', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/135.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWjRpQW52S081ZDJzSVBRZEc5dUNoWWpzVnJ3ZVZNSlhlZjhaSjhVbCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1744996062),
('RuXcvppJwz9wiOsdUVGPXKRRP2Pc8dCbcXpxdOOD', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/134.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiZHdaUVpBR29HcXJqYmV6M29XY05ySlg2bXd1RmlSTHFWSVJOSG1IZiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9mb3JtdWxpci9jcmVhdGUiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToyO30=', 1742903770),
('wrgsEgpiKgcsNU3DEcwf9YXC8ZaLsDLcywLWVxiK', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/134.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRlA1bFRXS1VVME1MQ2JvY0pYQ1FXQ1BsZ0RuRjZQc0Y5WWZHTWt0VCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9zaXN3YS9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1742819844);

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswas`
--

CREATE TABLE `siswas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jenis_pendaftaran` varchar(255) NOT NULL,
  `nisn` varchar(255) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `no_handphone` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `staff`
--

CREATE TABLE `staff` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `staff`
--

INSERT INTO `staff` (`id`, `nama`, `jabatan`, `kategori`, `image`, `created_at`, `updated_at`) VALUES
(2, 'KHAERNINGSIH, S.Pd.', 'wali kelas 1', 'guru', '1740736261.jpg', '2025-02-28 02:51:01', '2025-02-28 02:51:01'),
(3, 'SRI MULYANTI, S.Pd.SD', 'wali kelas 2', 'guru', '1740736300.jpg', '2025-02-28 02:51:40', '2025-02-28 02:51:40'),
(4, 'SAMSUDIN S.Pd.', 'wali kelas 5', 'guru', '1740736393.jpg', '2025-02-28 02:53:13', '2025-02-28 02:53:13'),
(5, 'KURNANINGSIH, S.Pd.', 'wali kelas 3A', 'guru', '1740736611.jpg', '2025-02-28 02:56:51', '2025-02-28 02:56:51'),
(6, 'TITI SURYANI, S.Pd.', 'wali kelas 3B', 'guru', '1740736677.jpg', '2025-02-28 02:57:57', '2025-02-28 02:57:57'),
(7, 'UNTUNG KHORIDIN, S.Pd.', 'wali kelas\r\n                                4', 'guru', '1740736716.jpg', '2025-02-28 02:58:36', '2025-02-28 02:58:36'),
(8, 'KADNA SUHERNA, S.Pd.I.', 'Guru Mata Pelajaran PAI', 'guru', '1740736742.jpg', '2025-02-28 02:59:02', '2025-02-28 02:59:02'),
(9, 'UUN UNIROH, S.Pd.', 'wali kelas 6', 'guru', '1740736780.jpg', '2025-02-28 02:59:40', '2025-02-28 02:59:40'),
(10, 'KHAERUL FATKHULLAH, SP.', 'Operator Sekolah', 'staff', '1740736803.jpeg', '2025-02-28 03:00:03', '2025-02-28 03:00:03'),
(11, 'AHMAD WARYONO', 'Penjaga Sekolah', 'staff', '1740738592.jpeg', '2025-02-28 03:29:52', '2025-02-28 03:29:52');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `nama_lengkap` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','siswa','user') NOT NULL DEFAULT 'siswa',
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `nama_lengkap`, `email`, `email_verified_at`, `password`, `role`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin', NULL, 'admin@gmail.com', NULL, '$2y$12$rlDRS.nuFHWVwi03vUFixuCCYO83auC89HTpgH8JUDl7CTaeU8JeG', 'admin', 'active', NULL, NULL, NULL),
(2, 'Siswa', 'siswa', NULL, 'siswa@gmail.com', NULL, '$2y$12$kRiG/H./G8RY/gc35XKmHevxDJiPgEjAr24gKkNN3R1kt13hd6WZi', 'siswa', 'active', NULL, NULL, NULL),
(3, 'User', 'user', NULL, 'user@gmail.com', NULL, '$2y$12$Ka.eFN83wrWS14yhqSwvdeuHaZc37mZNCZW.6SCbJye7vR.LXlUdi', 'user', 'active', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akademiks`
--
ALTER TABLE `akademiks`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `beritas`
--
ALTER TABLE `beritas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `berkas`
--
ALTER TABLE `berkas`
  ADD PRIMARY KEY (`id`);

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
-- Indeks untuk tabel `ekskuls`
--
ALTER TABLE `ekskuls`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `ekskul_details`
--
ALTER TABLE `ekskul_details`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `formulirs`
--
ALTER TABLE `formulirs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `gurus`
--
ALTER TABLE `gurus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `gurus_nip_unique` (`nip`);

--
-- Indeks untuk tabel `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indeks untuk tabel `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kalenders`
--
ALTER TABLE `kalenders`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `profils`
--
ALTER TABLE `profils`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indeks untuk tabel `siswas`
--
ALTER TABLE `siswas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `siswas_nisn_unique` (`nisn`);

--
-- Indeks untuk tabel `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT untuk tabel `akademiks`
--
ALTER TABLE `akademiks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `beritas`
--
ALTER TABLE `beritas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `berkas`
--
ALTER TABLE `berkas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `ekskuls`
--
ALTER TABLE `ekskuls`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `ekskul_details`
--
ALTER TABLE `ekskul_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `formulirs`
--
ALTER TABLE `formulirs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `gurus`
--
ALTER TABLE `gurus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kalenders`
--
ALTER TABLE `kalenders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `profile`
--
ALTER TABLE `profile`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `profils`
--
ALTER TABLE `profils`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `siswas`
--
ALTER TABLE `siswas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `staff`
--
ALTER TABLE `staff`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
