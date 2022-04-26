-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2022 at 04:30 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gmc`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `about_id` char(36) NOT NULL,
  `description` longtext DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `subtitle` varchar(255) DEFAULT NULL,
  `home_title` varchar(255) DEFAULT NULL,
  `home_desc` longtext DEFAULT NULL,
  `home_image` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`about_id`, `description`, `image`, `title`, `subtitle`, `home_title`, `home_desc`, `home_image`, `created_at`, `updated_at`) VALUES
('437ae9fe-85d8-43bc-9dfa-5b7660f8f4ui', '<div class=\"mb-5\">\r\n										<h1 class=\"title-lg fw-700 text-green\">Apa itu GMC</h1>\r\n										<p>GMC adalah Organisasi charity atau amal Masyarakat Muslim dunia secara kolektif\r\n										yang secara khusus mendedikasikan perannya dalam pembebasan kemiskinan\r\n										Masyarakat Global berbasis charity Islam</p>\r\n									</div>\r\n									<div class=\"mb-5\">\r\n										<h1 class=\"title-lg fw-700 text-green\">Visi Global Moeslim Charity (GMC)</h1>\r\n										<p>Menjadi Organisasi Sosial Muslim Dunia terdepan berbasis kekuatan charity Islam\r\n											untuk mewujudkan peradaban dunia yang bebas dari kemiskinan.</p>\r\n									</div>\r\n									<div class=\"mb-5\">\r\n										<h1 class=\"title-lg fw-700 text-green\">Misi Global Moeslim Charity (GMC)</h1>\r\n										<ol><li><p>Mengorganisir secara profesional semua unsur kekuatan charity Islam sebagai\r\n											modal terbesar pembebasan kemiskinan Masyarakat global.</p></li>\r\n<li><p>Mengorganisir secara profesional Masyarakat Muslim global sebagai subjek utama\r\n											pembebasan kemiskinan Masyarakat global.</p></li>\r\n<li><p>Mengorganisir secara profesional berbagai potensi dan isu strategis ekonomi dan\r\n											sosial sebagai instrumen program pemberdayaan Masyarakat global.</p></li>\r\n<li><p>Mengorganisir secara profesional semua potensi strategis kemitraan dengan\r\n											berbagai elemen stakeholders strategis global untuk bersama-sama berperan\r\n											aktif dalam pembebasan Masyarakat global dari kemiskinan.</p></li>\r\n</ol>\r\n									</div>\r\n									<div class=\"mb-5\">\r\n										<h1 class=\"title-lg fw-700 text-green\">Tujuan</h1>\r\n										<ol>\r\n<li><p>Mampu mewujudkan masyarakat global bebas dari kemiskinan</p></li>\r\n<li><p>Mampu mewujudkan kekuatan charity islam sebagai sumber modal utama pembebasan kemiskinan masyarakat global</p></li>\r\n<li><p>Mampu mweujudkan kekuatan masyarakat Muslim dunia sebagai subjek utama pembebasan kemiskinan masyarakat global</p></li>\r\n<li><p>Mampu mewujudkan kebersamaan dengan multi stakeholders global dalam pembebasan kemiskinan masyarakat global</p></li></ol>\r\n									</div>\r\n									<div class=\"mb-5\">\r\n										<h1 class=\"title-lg fw-700 text-green\">Makna Logo</h1>\r\n										<p>GMC adalah Organisasi charity atau amal Masyarakat Muslim dunia secara kolektif\r\n										yang secara khusus mendedikasikan perannya dalam pembebasan kemiskinan\r\n										Masyarakat Global berbasis charity Islam.</p>\r\n									</div>', 'a7cb0d55-b0c5-448f-bd63-430ecc87d256.jpg', 'Definisi Global Moeslim Charity (GMC)', 'Global dalam konteks GMC adalah cakupan wilayah atau size teritorial aktivitas kerja GMC, yaitu teritori Internasional atau Global.', 'Tentang Kami', 'GMC adalah Organisasi charity atau amal Masyarakat Muslim dunia secara kolektif yang secara khusus mendedikasikan perannya dalam pembebasan kemiskinan Masyarakat Global berbasis charity Islam. Cakupan aktivitas kerja cakupan Internasional Masyarakat Muslim Internasional sebagai kekuatan kolektif sekaligus sebagai subjek utama charity Aktivitas amal kolektif Masyarakat Muslim Dunia secara komprehensif', '15314fca-7829-427e-9754-1beb35104408.jpg', '2022-03-29 17:11:52', '2022-04-24 16:45:20');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
('437ae9fe-85d8-43bc-9dfa-5b7660f8f4cb', 'Administrator', 'admin@gmc.com', NULL, '$2a$12$lnkhFXzsdTBYAbwqUthW6OiQvTvzLENdaQgEs/RujOZyHeTkp.jdy', NULL, '2022-02-26 19:32:53', '2022-02-26 19:32:53');

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `article_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `published_at` datetime DEFAULT NULL,
  `source_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`article_id`, `title`, `slug`, `image`, `content`, `published_at`, `source_url`, `created_at`, `updated_at`) VALUES
('7c464af0-34a8-42e1-b585-4e1fbeed84d3', 'Gunung Anak Krakatau Naik Status Jadi Siaga', 'gunung-anak-krakatau-naik-status-jadi-siaga', '9dd28f9f-480b-48ce-b0cd-d9667fa16a48.jpg', '<p>\r\nStatus level aktivitas Gunung Anak Krakatau naik dari Waspada level II menjadi Siaga Level III per hari ini, Minggu (24/4/2020). Naiknya status aktivitas GAK yang berada di Selat Sunda itu disebabkan karena terjadi erupsi terus-menerus. \"Hasil pemantauan visual dan instrumental menunjukkan adanya kenaikan aktivitas yang semakin signifikan dan tingkat aktivitas Gunung Anak Kraktau dinaikkan dari Waspada (Level II) menjadi Siaga (Level III) terhitung sejak tanggal 24 April 2022, pukul 18.00 WIB,\" kata Kepala Badan Geologi, Eko Budi Leloni melalui leterangan tertulisnya, Minggu. Baca juga: Gunung Anak Krakatau Erupsi, Pijaran Lahar Terlihat dari Kawah Gunung Eko mengungkapkan, aktivitas vulkanik GAK saat ini masih dalam periode erupsi menerus dengan perubahan erupsi yang semula dominan abu, menjadi tipe strombolian yang menghasilkan lontaran-lontaran lava pijar pada tanggal 17 April 2022.\r\n<br><br>\r\nEko mengungkapkan, aktivitas vulkanik GAK saat ini masih dalam periode erupsi menerus dengan perubahan erupsi yang semula dominan abu, menjadi tipe strombolian yang menghasilkan lontaran-lontaran lava pijar pada tanggal 17 April 2022. Kemudian lontaran lava pijar terjadi kembali pada tanggal 23 April 2022 sekitar pukul 12:19 WIB teramati lava mengalir dan masuk ke laut. \"Hasil estimasi energi seismik saat ini teramati meningkat tajam bersamaan dengan membesarnya amplitudo Tremor menerus dan semakin intensnya kejadian erupsi yang menerus,\" ujar Eko.\r\n</p>', '2022-04-24 00:00:00', 'https://regional.kompas.com/read/2022/04/24/223445578/gunung-anak-krakatau-naik-status-jadi-siaga-ini-imbauan-bagi-warga.', '2022-04-24 14:07:12', '2022-04-24 15:09:03'),
('d9a688a6-4d59-442d-b427-07c196df00b7', 'OPRASIONAL GMC JOGJAKARTA', 'oprasional-gmc-jogjakarta', '87b9d349-8f83-49df-959e-5f35a0701d6f.jpg', '<p>Alhamdulillah ya Rabbal\'alamiin hari ini Senin 7 Maret 2022 telah resmi dimulainya operasional GMC Jogjakarta ditandai oleh pelantikan 10 personal tim intinya yg dipimpin oleh sdr Subiyanto sbg leadernya Program2 ekonomi produktif berbasis Charity Islam akan menjadi fokus utama program GMC di seluruh jejaringnya baik nasional muapun internasional.\r\n<br><br> Insya Allah GMC akan konsisten pada kerja2 penanganan kemiskinan masyarakat berbasis program2 ekonomi produktif mulai level mikro lokal hingga level makro nasional dan global Semua ini akan dijalankan diatas satu keyakinan bahwa Islam dan kaum Muslimin adalah solusi atas berbagI persoalan kehidupan dunia termasuk persoalan kemiskinan dlm semua dimensinya Modal terhebat utk mewujudkannya adalah ridho Allah Ta\'ala atas semua upaya dan ikhtiar ikhlas totalitas segenap pimpinan, dan semua personal GMC termasuk didalamnya adalah para relawan GMC yang menjadi energi utamanya</p>', '2022-03-07 00:00:00', 'https://kompas.com', '2022-03-07 01:47:40', '2022-04-24 14:50:48'),
('e74d711a-68c4-489c-8140-b07a2faf6aa8', 'Aliquam nemo sunt iu', 'aliquam-nemo-sunt-iu', '4d0cf755-ad2f-4486-8a5c-c99914d358ce.jpg', '<span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vulputate imperdiet tellus id ornare. Phasellus molestie sed erat at dictum. In nisl risus, tincidunt sit amet dignissim vitae, luctus non turpis. Nulla at turpis at dui euismod ultrices. Etiam tincidunt risus aliquam libero consectetur, varius molestie massa ornare. Maecenas aliquet nisl vel eleifend congue. Fusce a arcu fermentum, interdum diam sit amet, interdum urna. Nunc ullamcorper consequat eleifend. Nam dapibus velit in accumsan vestibulum. Integer sagittis leo eu lectus placerat cursus vel id mi. Nam consequat, mi nec auctor pharetra, turpis turpis varius augue, ut suscipit risus est et ligula. Vestibulum ullamcorper felis leo, non efficitur orci sagittis eget.</span>', '1998-07-26 00:00:00', 'https://www.gux.ca', '2022-02-27 03:04:57', '2022-03-11 05:44:30'),
('e7801f3a-b9b1-4bda-965a-6ffb4d4bf2bf', 'LAUNCHING GERAKAN EKONOMI KOMUNITAS', 'launching-gerakan-ekonomi-komunitas', 'bacbe8da-03ec-4368-a202-bd970213f52d.jpeg', '<p>Alhamdulillah</p><p>Program masterpice GMC di bidang ekonomi hari ini Rabu 9 Matet 2022 terselengga dg sukses di markas GMC Jakarta dihadiri oleh sejumlah mitra dan relawan GMC Jakarta</p><p><br></p><p>Kali ini GMC melalukan soft lounching program Gerakan Ekonomi Komunitas (GEK)</p><p>Program ini menggandeng jaringan rumah makan rakyat yaitu Warteg sebagai mitra pemberdayaan ekonomi GMC</p><p>Tahap awal GMC memilih 100 warteg sbg mitranya. Setiap warteg melayani makan gratis kpd para pemegang kartu ACC GMC. ACC singkatan dari Almaun Charity Card. Sebuah kartu multi layanan sosial yg diberikan GMC kpd kalangan masyarakat ekonomi bawah.</p><p><br></p><p>Para pemegang ACC nantinya akan mendapatkan layanan makan gratis di rumah2 makan katagori UMKM seperti warteg, layanan kesehatan gratis dan layanan pendidikan gratis.</p><p><br></p><p>Melalui program ACC ini minimal ada dua manfaat langsung bagi mayarakat.&nbsp;</p><p><br></p><p>Pertama, diharapakan ekonomi komunitas usaha mikro seperti warteg akan terus berkembang menjadi gerakan ekonomi yg kompetitif melalui suport GMC dalam bentuk captive customer berupa para pemegang kartu ACC yg dilayani makan gratis oleh masig2 warteg mitra GMC.&nbsp;</p><p><br></p><p>Mekanismenya, GMC menyiapkan deposit dana secara periodik di masing2 warteg sebagai jaminan makan gratis bagi para member ACC.&nbsp;</p><p><br></p><p>Manfaat kedua adalah, masyarakat ekonomi bawah yg kesulitan krn beratnya beban hidup akan menerima makan gratis di setiap warteg setiap hari sesuai jangka waktu yg ditetapkan GMC.&nbsp;</p><p><br></p><p>Ditargetkan dalam tahun&nbsp; 2022 ini ada 1000 warteg mjd mitra program ACC GMC dan 100 ribu kalangan ekonomi bawah menjadi member ACC yg mendapatkan layanan makan gratis.</p><p><br></p><p>Semua program ini didanai oleh dana charity berupa infak dan sedekah umat atau dana sosial lainya dari berbagai stakeholders</p><p><br></p><p>Moga program ini bisa menjadi gerakan kebajikkan umat dalam bentuk sedekah dan infak sekaligus program ini bisa membantu program pemerintah membangkitkan ekonomi mikro sekaligus menjadi gerakan solidaritas sosial maryarakat</p><p><br></p><p>GMC, bertekad menjadi bagian dari gerakkan ekonomi berbasis charity Islam untuk membebaskan masyarakat, bangsa, dan dunia bebas dari kemiskinan</p>', '2022-03-09 00:00:00', NULL, '2022-03-09 19:42:22', '2022-03-09 19:42:22');

-- --------------------------------------------------------

--
-- Table structure for table `banks`
--

CREATE TABLE `banks` (
  `bank_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `program_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `banks`
--

INSERT INTO `banks` (`bank_id`, `program_id`, `bank`, `name`, `number`, `created_at`, `updated_at`) VALUES
('112b66ec-d1a2-41a5-9df1-e2b381fddc5c', NULL, 'Bank Syariah Indonesia', 'Global Moeslim Charity', '1111019661', '2022-03-02 02:06:54', '2022-03-02 02:06:54');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` char(36) NOT NULL,
  `source_id` char(36) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `source_id`, `name`, `email`, `phone`, `subject`, `message`, `created_at`, `updated_at`) VALUES
('1142875a-3d6c-4cbe-9da7-601b5c15f795', '9938b877-8974-48b9-8a0f-9d70c399037f', 'Sample User', 'user@itsolutionstuff.com', NULL, NULL, 'Test Comment', '2022-03-13 08:47:04', '2022-03-13 08:47:04'),
('7d3c4171-756d-475c-9893-effb2f299552', '9938b877-8974-48b9-8a0f-9d70c399037f', 'Sample User', 'user@itsolutionstuff.com', NULL, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nunc ex, euismod at sapien non, tincidunt molestie mi. Cras lobortis dignissim consequat. Sed fringilla arcu sed magna dignissim sagittis. Quisque ut velit a ex pellentesque feugiat. Aliquam sed consequat metus, et lacinia justo. Duis augue purus, facilisis a nisi et, ornare ullamcorper nibh. Nulla in mauris id ante sagittis imperdiet. Aenean nisl dolor, iaculis lacinia nisi eu, fringilla molestie urna. Vivamus ut enim id sapien accumsan dignissim. Fusce ultrices, metus vitae porta ullamcorper, augue magna blandit nisi, vitae tempor metus erat vel sapien. Nunc id elementum metus, cursus blandit velit. Morbi cursus turpis quis massa sodales ornare. Vivamus sodales magna tortor, vitae luctus diam venenatis vitae. Duis condimentum elit non nunc consectetur finibus.', '2022-03-13 08:48:33', '2022-03-13 08:48:33'),
('b750c397-28ba-42bc-878b-f32ffe6d2c00', 'f799337d-8938-4482-8287-a9e93e0e919d', 'test', 'zombiephoenix43@gmail.com', '087797689348', 'donasi', 'terimakasih', '2022-03-27 21:42:22', '2022-03-27 21:42:22');

-- --------------------------------------------------------

--
-- Table structure for table `donasi`
--

CREATE TABLE `donasi` (
  `donasi_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `program_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` double NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nomor` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `donasi`
--

INSERT INTO `donasi` (`donasi_id`, `user_id`, `program_id`, `admin_id`, `bank_id`, `amount`, `status`, `created_at`, `updated_at`, `nomor`) VALUES
('0deb73d4-d0a4-40e4-a969-0e9d90032a9c', 'b249939d-c545-4929-9c3a-e64108c842af', '14051156-e9ca-486e-a5dd-9e71005682c3', '437ae9fe-85d8-43bc-9dfa-5b7660f8f4cb', '5ccf21ad-8919-4c47-a392-2bb4a9c72889', 250000, 2, '2022-03-28 03:19:44', '2022-03-28 03:20:30', 'TvLBGhy8wY'),
('450f1b85-4582-4f5a-b97e-285e8d55fc21', 'a41b87c4-4432-424c-80d0-697a1c0c87e9', '77ecb2bb-7682-4bed-b481-b1867425a689', NULL, '649592a5-c97a-4385-b882-887f949a5343', 250000, 0, '2022-04-15 03:07:51', '2022-04-15 03:07:51', 'ifqYPWVJA3'),
('ae6e8021-2f53-4171-a75b-ce56bf0bfcf3', 'c6107612-e646-40bb-8b9f-7ec4dc9ec996', '14051156-e9ca-486e-a5dd-9e71005682c3', NULL, '5ccf21ad-8919-4c47-a392-2bb4a9c72889', 250000, 1, '2022-04-02 20:11:19', '2022-04-02 20:11:41', 'V7I8DvFb5j'),
('b1fde8e1-2ef2-4f28-b7e3-7af3e841e28d', 'c1d781ba-0ffa-4a66-a597-7adff9646fd9', '36690e58-80f3-41de-9938-c9a92cc90168', NULL, 'e04c6b1a-19b5-481f-9bfb-138369eae689', 250000, 0, '2022-04-12 22:30:52', '2022-04-12 22:30:52', 'brxiMoRKSx'),
('e6bd5a41-152c-4817-a125-4ce41ae8ef40', 'c6107612-e646-40bb-8b9f-7ec4dc9ec996', '77ecb2bb-7682-4bed-b481-b1867425a689', '437ae9fe-85d8-43bc-9dfa-5b7660f8f4cb', '649592a5-c97a-4385-b882-887f949a5343', 250000, 2, '2022-03-28 03:04:00', '2022-03-28 03:06:59', 'MFPoLxhXzM');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `kategori_id` char(36) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `kode` varchar(255) DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`kategori_id`, `nama`, `kode`, `keterangan`, `created_at`, `updated_at`, `image`) VALUES
('0193a749-2ad6-4fd6-bbc0-93b6b0824a62', 'Food Charity Project (FCP)', '50380b0324d6b0ac2f9eed1844d0a2e5', 'Food Charity Project (FCP)', '2022-03-04 10:15:10', '2022-03-17 17:04:36', '95c9d7ff-3abd-4eee-88fb-67de810a0fce.jpg'),
('19429fbf-9fa5-4913-8bdb-11c09298a57c', 'Disaster Charity Relief Project (DCRP)', '87fa515a08a34cfdd2b0acd0a9d4e0ab', 'Disaster Charity Relief Project (DCRP)', '2022-03-04 10:13:04', '2022-03-17 06:30:29', 'c0633de7-a526-465b-9187-32e81d9c7675.jpg'),
('2d2c0bd7-05c0-4ead-8f5f-f5ca2719dffe', 'Islamic Economic Charity Project (IECP)', '04d9b8aba8b5c00d75ae7a3bd886f851', 'Program pemberdayaan ekonomi masyarayakat', '2022-03-04 09:58:53', '2022-03-17 06:31:30', '6ede2069-ee9f-46a0-a6f8-97995d6f47a0.jpg'),
('304d8719-3c40-4a03-ab28-4a8404bab769', 'INTERNATINAL DISABILITY CHARITY PROJECT', '6d51ceeb3b08785020e3e23ba001ec02', 'INTERNATINAL DISABILITY CHARITY PROJECT', '2022-03-17 06:35:11', '2022-03-17 06:35:11', '47e9e786-32df-4698-8ee8-cedcbc97145f.jpg'),
('a13e8c8e-481b-4fc2-8b9d-401f93baea4a', 'Islamic Health Charity Project (IHCP)', 'da7bf32c6e89c01fb9ba2a655daf2652', 'Islamic Health Charity Project (IHCP)', '2022-03-04 10:12:34', '2022-03-17 06:31:52', 'cc7da64e-5730-4aeb-9ea8-9b582e040c00.jpg'),
('a3c68ef7-7a06-4d96-b48d-020448524445', 'International Qurbany Charity Project (IQCP)', 'f9e292a05491e97bcbf07c9e0a12bd65', 'International Qurbany Charity Project (IQCP)', '2022-03-04 10:14:15', '2022-03-17 06:32:14', '006f0b22-1f74-4331-bc66-5e975abdb386.jpg'),
('b62c76e6-a0fa-462d-9707-3ef04f489477', 'Water Sanitation Charity Project (WSCP)', 'ee22b2f4c529c8dcc05e24ba6f7e7f34', 'Water Sanitation Charity Project (WSCP)', '2022-03-04 10:13:47', '2022-03-17 06:32:32', '4f008438-e328-4b1c-9f21-243a55cd321f.jpg'),
('cc468dcd-6c08-44e7-b1d4-2c32b462fc88', 'International Refugees Charity Project (IRCP)', 'dee352e0f50d7d2097d3e68c03f3a0dc', 'International Refugees Charity Project (IRCP)', '2022-03-04 10:14:35', '2022-03-17 06:32:54', '0f557fc3-a772-4a78-9df2-416bcc8cd59b.jpg'),
('ee601418-191a-4443-823b-dc112a709c3f', 'Islamic Education Charity Project (IECP)', '7d44c7763da03bfbd0ee7e2231d3baf1', 'Islamic Education Charity Project (IECP)', '2022-03-04 10:12:04', '2022-03-17 06:33:21', '60bb5940-42c2-4e46-aeff-24d2210dfbac.jpg'),
('fb454f20-f2b8-41f6-9299-5b3ca26c237b', 'Migran Charity Project (MCP)', 'e8953ac58b3f5e170d238532d9fb3216', 'Migran Charity Project (MCP)', '2022-03-04 10:14:58', '2022-03-17 06:33:44', '13d4a3ca-6192-4f8d-b1f7-13668a680ed8.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `lain`
--

CREATE TABLE `lain` (
  `lain_id` char(36) NOT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `keterangan` longtext DEFAULT NULL,
  `caption1` varchar(255) DEFAULT NULL,
  `big_caption1` varchar(255) DEFAULT NULL,
  `caption2` varchar(255) DEFAULT NULL,
  `big_caption2` varchar(255) DEFAULT NULL,
  `caption_banner` varchar(255) DEFAULT NULL,
  `postdig_image` varchar(255) DEFAULT NULL,
  `postdig_text` varchar(255) DEFAULT NULL,
  `postdig_button_link` varchar(255) DEFAULT NULL,
  `postdig_active` int(11) NOT NULL,
  `postdig_button_name` varchar(255) DEFAULT NULL,
  `link_button` varchar(255) DEFAULT NULL,
  `article_desc` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `lain`
--

INSERT INTO `lain` (`lain_id`, `judul`, `image`, `keterangan`, `caption1`, `big_caption1`, `caption2`, `big_caption2`, `caption_banner`, `postdig_image`, `postdig_text`, `postdig_button_link`, `postdig_active`, `postdig_button_name`, `link_button`, `article_desc`, `created_at`, `updated_at`) VALUES
('819d977c-9716-4e56-949a-f0a4400930pp', 'Jaringan GMC Global', '0c63f403-3fde-4ba5-be8c-ac3ab960c252.jpg', 'GMC adalah Organisasi charity atau amal Masyarakat Muslim dunia secara kolektif yang secara khusus mendedikasikan perannya dalam pembebasan kemiskinan Masyarakat Global berbasis charity Islam.\r\n\r\nCakupan aktivitas kerja cakupan Internasional\r\nMasyarakat Muslim Internasional sebagai kekuatan kolektif sekaligus sebagai subjek utama charity\r\nAktivitas amal kolektif Masyarakat Muslim Dunia secara komprehensif', 'Bantuan bagi mereka yang membutuhkannya', 'Setiap donasi adalah bantuan penting untuk kehidupan semua orang', 'Bantuan bagi mereka yang membutuhkannya', 'Bersama Memberantas Kemiskinan Membangun Perekonomian', 'Love is not patronizing and charity isn\'t about pity, it is about love.', '324df65b-3b25-4718-b9f4-e3a3b7f54020.jpg', 'Bantu sesama yang membutuhkan Daftarkan diri jadi relawan GMC', 'https://docs.google.com/forms/d/e/1FAIpQLSfhWPmILpboGCOseKJpfP7AGKjoa3h_x6i2ti-dUnHdhrqpXQ/viewform?usp=sf_link', 0, 'Daftar Sekarang', 'https://www.facebook.com', 'Dapatkan informasi terkini tentang kegiatan-kegiatan GMC dalam rangka mengentaskan kemiskinan global', '2022-03-31 13:01:09', '2022-04-25 03:27:53');

-- --------------------------------------------------------

--
-- Table structure for table `legalitas`
--

CREATE TABLE `legalitas` (
  `legalitas_id` char(36) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `legalitas`
--

INSERT INTO `legalitas` (`legalitas_id`, `name`, `description`, `created_at`, `updated_at`) VALUES
('819d977c-9716-4e56-949a-f0a4400830ff', 'Legalitas GMC', '<p style=\"margin-bottom: 1rem; font-size: 18px;\">Yayasan Amal Muslim Universal (Global Moeslim Charity) sebagai pemilik dan pengelola situs https/globalmoeslimcharity.com didirikan berdasarkan Akta Pendirian Nomor 15 (lima belas) tertanggal 23 Februari 2022 sebagaimana telah mendapatkan pengesahan dari Kementerian Hukum dan Hak Asasi Manusia Republik Indonesia dengan Surat Keputusan Nomor AHU-0005162.AH.01.04.Tahun 2022 Tanggal 24 Februari 2022.</p><hr style=\"font-size: 18px;\"><p style=\"margin-bottom: 1rem; font-size: 18px;\">Yayasan Amal Muslim Universal (Global Moeslim Charity) telah melakukan Penyelenggaraan Perizinan Berusaha Berbasis Risiko melalui Sistem Online Single Submission (OSS) Kegiatan beroperasi melalui surat Nomor Induk Berusaha 2502220001121 yang berlaku di seluruh wilayah Republik Indonesia selama menjalankan kegiatan dengan tetap memperhatikan ketentuan peraturan perundang-undangan.</p>', '2022-03-29 16:57:25', '2022-04-24 06:31:32');

-- --------------------------------------------------------

--
-- Table structure for table `management`
--

CREATE TABLE `management` (
  `management_id` char(36) NOT NULL,
  `name` varchar(255) NOT NULL,
  `jabatan` varchar(255) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `description` longblob NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `management`
--

INSERT INTO `management` (`management_id`, `name`, `jabatan`, `image`, `description`, `created_at`, `updated_at`) VALUES
('819d977c-9716-4e56-949a-f0a4400830ec', 'KH. Mahfudz Syaubari MA', 'Ketua Dewan Pembina GMC', '8548c0c7-61b4-411e-b48c-2237c09ee5cf.jpg', 0x3c703e466967757220756c616d6120696e74656c656b7475616c2079616e672073616e676174206b756174206d656e616e616d6b616e206a697761206b656d616e64697269616e20706164610d0a73656d75612073616e7472692e0d0a536562616761692050656e676173756820506f6e7065732052697961646c756c204a616e6e61682050616365742c204b796169204d61686675647a2074657262756b74690d0a626572686173696c206d656d62616e67756e2064616e206d656d656c69686172612073656d7561206173657420506f6e7065732064656e67616e0d0a6b657465726c69626174616e206d75726e6920706172612073616e7472696e79612074616e7061207465726b656375616c692e2073656c61696e206974752062656c696175206a7567610d0a6d656e6a616261742073656261676169204b455455412050454d42494e41205950334920285961796173616e2050656e67756174616e20506572616e0d0a506573616e7472656e20496e646f6e65736961292c20446577616e2050656e617365686174204b444b204d5549204a6174696d2c20446577616e2050656e6173656861740d0a50494e42554b2064616e206265726261676169206f7267616e6973617369206c61696e6e79612e0d0a53656d616e676174206b656d616e64697269616e2064616e206b65706564756c69616e6e7961207465726861646170206c696e676b756e67616e20736f7369616c6e7961206974752c0d0a6b696e692062656c696175207065726c7561732073656261676169204b6574756120446577616e2050656d62696e6120474d432079616e67206265726b6f6e747269627573690d0a64616c616d20676572616b616e20616d616c206265726e616661736b616e2049736c616d2079616e67205261686d6174616e204c696c27616c616d696e2e3c62723e3c2f703e, '2022-03-29 09:15:39', '2022-04-24 02:44:49'),
('59d98356-c0c0-4b8b-a5be-696d46ffe0bb', 'Ahyudin', 'Presiden GMC', '2e2ac0ed-c2e7-42a2-a7c9-98871cebbfc0.JPG', 0x3c703e536f736f6b2070656e74696e672064616c616d207065726b656d62616e67616e2064616e206b656d616a75616e206c656d62616761206b656d616e757369616e0d0a61746175206c656d626167612066696c616e74726f706920646920496e646f6e657369612e0d0a4168797564696e2074616b207065726e616820416273656e206d656e63697074616b616e20736f6c757369207065726d6173616c6168616e206b656869647570616e0d0a736f7369616c206d656c616c756920676572616b616e20616d616c20796720496120646972696b616e20646920496e646f6e65736961206265726e616d6120476c6f62616c0d0a6c736c616d6963205068696c616e74726f706920466f756e646174696f6e2079616e67206d656e61756e6769206c656d62616761206b656d616e75736961616e0d0a7465726261696b20646920496e646f6e657369612073616c616820736174756e796120796169747520416b73692043657061742054616e6767617020284143542920313720746168756e2c0d0a476c6f62616c2057616b616620466f756e646174696f6e2c20476c6f62616c205a616b61742c20476c6f62616c2051757262616e2c204d524920646c6c2e0d0a4b696e692066696c616e74726f7069732079616e67206265726b6563696d70756e672064692064756e696120736f7369616c206b656d616e75736961616e2073656c616d612032330d0a746168756e206974752c206d656e646972696b616e20676572616b616e2062617275207365626167616920736f6c757369206b656d69736b696e616e2044756e69610d0a6265726e616d6120476c6f62616c204d6f65736c696d20436861726974792028474d43293c2f703e, '2022-04-24 02:40:42', '2022-04-24 02:40:42'),
('9316908c-db58-4b00-9d59-0d58c61e06da', 'Ustadz MZ Fadlan Rabbani Al-Garamatan', 'Ketua Dewan Pengawas GMC', '86d2cbf2-2a5c-40dd-9edb-249badfa8f88.jpg', 0x3c703e55737461647a204661646c616e207465726b656e616c20736562616761692073616c616820736174752070656e64616b7761682079616e6720626572686173696c0d0a6d656e6769736c616d6b616e2072696275616e20616e67676f74612073756b752061736c6920706564616c616d616e2064692050726f76696e73692050617075612e2044616e0d0a6d656d62616e67756e20506f6e646f6b20506573616e7472656e206265726e616d6120506f6e706573204e757520576161722041464b4e2064656e67616e0d0a6a756d6c61682073616e747269206b7572616e67206c656269682036303030206f72616e672079616e672074657273656261722064692073656c7572756820496e646f6e657369612e0d0a536562616761692070656e64616b7761682079616e67206c616869722064692046616b2d66616b2c2050617075612c2055737461647a204661646c616e2074616b207065726e61680d0a62657268656e7469206d656d626572696b616e20696c6d75207461756869642064616e20616b746966206469206265726261676169206c656d6261676120616d616c20756e74756b0d0a6d656d62616e7475206d656d616a756b616e2074616e61682050617075612e0d0a4b696e692c2062656c696175206d656d7065726c756173206a616c75722064616b7761686e79612064656e67616e206d656e6a616469204b6574756120446577616e0d0a50656e676177617320474d432079616e6720626572676572616b20616b746966206d656d62616e747520756d617420746572626562617320646172692062656c656e6767750d0a6b656d69736b696e616e2064616e206b657375736168616e2e3c62723e3c2f703e, '2022-04-24 02:43:04', '2022-04-24 02:43:04');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_02_24_134009_create_programs_table', 1),
(6, '2022_02_26_022038_create_donasis_table', 2),
(7, '2022_02_26_041056_create_relawans_table', 3),
(8, '2022_02_26_045148_create_parameters_table', 4),
(10, '2022_02_26_064653_create_articles_table', 5),
(11, '2022_02_26_101503_create_admins_table', 6),
(12, '2022_02_27_105608_create_banks_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `parameters`
--

CREATE TABLE `parameters` (
  `parameter_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `program`
--

CREATE TABLE `program` (
  `program_id` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_thumb` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `kode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `program`
--

INSERT INTO `program` (`program_id`, `title`, `subtitle`, `slug`, `image`, `icon`, `img_thumb`, `description`, `created_at`, `updated_at`, `kode`) VALUES
('14051156-e9ca-486e-a5dd-9e71005682c3', 'Food Charity Project', 'test', 'food-charity-project', 'c5afc5c9-504f-495b-99a1-148a26a59dee.png', '34f96b8e-381c-409d-b7d1-ab324b16cc35.png', NULL, 'Sejuta Cinta Dan Do\'a Untuk Banten,  Banjir yang menerjang di 7 kecamatan serang banten, Berdampak pada fasilitas ibadah, sekolah, dan fasilitas umum banyak yang rusak dan hancur. Agar mempercepat pemulihat Tempat ibadah, sekolah dan fasilitas lainnya, mari kita kirimkan doa terbaik kita, dan donasikan sebagian rezeki kita. karena sebaik baiknya rezeki, yang bisa membantu untuk sesama.', '2022-03-06 04:50:17', '2022-04-23 23:08:49', 'e8c067aeadb21ddd8eba82cf945fde95'),
('36690e58-80f3-41de-9938-c9a92cc90168', 'Economic Charity Project', 'economic', 'economic-charity-project', '5f7ce66e-d150-4bc5-b506-ab6914946be4.jpg', '019c65f8-7b3a-4693-89cd-323b5becc2c6.png', NULL, 'Gerakan Ekonomi Pesantren, Pemberdayaan kreativitas para santri dengan pelatihan usaha, dari mikro sampai makro. Yang di harapkan kedepannya bisa memberikan kemandirian untuk para santri yang berdampak kemajuan untuk para pesantren yang menaunginya. ekonomi bangkit, umat sejahtera', '2022-03-04 03:03:43', '2022-04-24 20:00:43', 'b13e133450f9bc36643e738e018fa29d'),
('77ecb2bb-7682-4bed-b481-b1867425a689', 'Disaster Charity Project', 'disaster', 'disaster-charity-project', '03ea1355-bca4-42e9-8c1a-dc8cd4218c1d.jpeg', '8f2aaeaa-3bea-4185-8374-4c2b50d79fcf.png', NULL, '100 Ribu alat untuk menunjang ibadah adik adik kita di pesantren. Marikita dukung masa depan bangsa dengan mendistribusikan peralatan belajar bagi santri Indonesia.', '2022-03-06 04:38:20', '2022-04-24 20:02:24', '2499d098359a698678422e57387b9200'),
('8960916a-be36-4eaa-acec-434c938d530a', 'Health Charity Project', 'health', 'health-charity-project', '09204476-e5d4-4a83-ae80-b4b7a0f67bc2.jpeg', 'daec9f3c-5f69-4b07-af04-c726ae0231af.png', NULL, '1 Juta pangan, untuk membantu meringankan keluarga yang kekurang di sekeliling kita. Bantu untuk mereka tetap tersenyum walaupun dalam ke terbatasan.', '2022-03-08 20:34:26', '2022-04-24 20:03:04', 'd04d1222a3ced4b48cb99282a185d727'),
('9938b877-8974-48b9-8a0f-9d70c399037f', 'Qurbany Charity Project', 'Qurbany', 'qurbany-charity-project', 'a9f33bf4-a455-4a80-8135-238cce2e2519.jpg', '7622a154-4cd8-4704-b8d2-572d5c0f71c5.png', NULL, 'Cupidatat ipsum et s', '2022-03-10 09:44:56', '2022-04-24 20:03:39', '3b51280b0bc3349a6330da94b451471a'),
('9f0169d6-2d40-419b-875a-679982f61ba0', 'Water Sanitation Charity Project', 'water', 'water-sanitation-charity-project', 'c66ce6be-1eeb-45a8-8ec2-df172212cf48.jpeg', '5dc0c8d2-8929-4006-bb47-b6e45b3bc049.png', NULL, 'Dorong santri berprestasi bangsa dengan tunjangan bantuan biaya belajar mererka.', '2022-03-06 04:39:46', '2022-04-24 20:04:07', 'e698826c9a0adfd0f7c3465161f4abc5'),
('a665aa3b-8583-4171-9340-f81de2bde1ec', 'Refugees Charity Project', 'Refugees', 'refugees-charity-project', 'a1c3b545-9700-49b3-bc62-cc9866a38698.jpg', '06d1f752-a9e1-43de-9567-3b7c9f3430bb.png', NULL, '<p>asdfasdf</p>', '2022-03-27 22:08:14', '2022-04-24 20:05:08', 'c0e833b75a2f6f33ae59d0abe759fb4f'),
('ac4cb5a2-d93e-49b1-9069-f54cd13592a2', 'Education Charity Project', 'Education', 'education-charity-project', '96ae7ef4-f21e-4c56-bb17-b32c14d7bc19.JPG', '177f5ecd-35dd-4a45-8fe7-ec89b2810ca6.png', NULL, 'Budaya patriarki yang sudah melekat di masyarakat telah membangun berbagai stigma (stereotype) yang merugikan perempuan untuk terjun dan aktif berkarir di ranah politik dan menjadi pemimpin. Beberapa stigma tersebut menjurus kepada pernyataan bahwa perempuan tidak cocok untuk menjadi pemimpin, termasuk dalam ranah politik. Dalam beberapa survei ditemukan beberapa alasan mengapa perempuan dinilai tidak memiliki kemampun dalam memimpin politik karena: \r\n1)	Menganggap agama melarang perempuan menjadi pemimpin;\r\n2)	Perempuan dianggap tidak cocok menjadi pemimpin;\r\n3)	Perempuan lebih emosional;\r\n4)	Pendidikan Laki-laki lebih tinggi dibanding perempuan;', '2022-03-09 23:39:14', '2022-04-24 20:05:45', '7ed7a013563b3eb07dd5f66cf3d77ad3'),
('cf303ff9-fb3c-41c9-abc9-a59c3ec8b85e', 'Migran Charity Project', 'Migran', 'migran-charity-project', '56608eca-8988-4516-a961-7a2c763569bd.jpeg', 'a277d24f-543e-47cd-b60c-357a90315d02.png', NULL, 'Gerakan Ekonomi Petani, Pemberdayaan para petani lokal untuk memberikan kesejahtraan kepada para petani, secara teroganisir dan lebih maximal, agar dapat lebih berkompetitif, di dalam pengembangan ketahan pangan.', '2022-03-04 03:00:32', '2022-04-24 20:06:15', '70e31b1c8aab85f61d6cf38d45d798cd'),
('e1b5ffc1-c47e-4ba1-997f-11972504eb02', 'Disability Charity Project', 'Disability', 'disability-charity-project', '0b131037-c4a0-4418-8d51-e03d6b6dcc08.jpeg', '67c0a526-bb26-43cd-a08f-43fdd48f6d6f.png', NULL, 'Sejuta Cinta Dan Do\'a Untuk Sumatra Barat, Gempa berkekuatan magnitudo 6,2SR, di Pasaman Barat. Berdampak pada rusaknya Infrastruktur fasilitas umum, seperti rumah ibadah, sekolah, dan lainnya. Agar mempercepat pemulihan Tempat ibadah, sekolah, dan fasilitas lainnya. Mari kita kirimkan do\'a terbaik kita, dan donasikan sebagian rezeki kita. karena sebaik baiknya rezeki, yang bisa membantu untuk sesama.', '2022-03-06 04:49:07', '2022-04-24 20:06:47', '2a9734c8637a32caca6db45087295055');

-- --------------------------------------------------------

--
-- Table structure for table `program_galeries`
--

CREATE TABLE `program_galeries` (
  `program_galery_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `program_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `program_galeries`
--

INSERT INTO `program_galeries` (`program_galery_id`, `program_id`, `image`, `created_at`, `updated_at`) VALUES
('0120216c-a9b6-48d9-b8a4-6e0ec59e1991', '9938b877-8974-48b9-8a0f-9d70c399037f', 'a12bd6b3-ef19-467c-be1e-5556a472f82d.jpg', '2022-03-10 09:44:57', '2022-03-10 09:44:57'),
('105fe592-30d1-496c-88b8-c3e7b7184b31', '9938b877-8974-48b9-8a0f-9d70c399037f', '5ee39e6a-754e-4218-9d9c-f8df1f936d0c.jpg', '2022-03-10 09:44:57', '2022-03-10 09:44:57'),
('5b155f53-d1ed-48f8-9f75-76057baf2c0a', '9938b877-8974-48b9-8a0f-9d70c399037f', '4d5d0945-2b15-498b-ab87-77999ef962bc.jpg', '2022-03-10 09:47:48', '2022-03-10 09:47:48'),
('643a8e64-5fd6-47ce-9186-ff41215cbb7e', 'a665aa3b-8583-4171-9340-f81de2bde1ec', 'e57f815c-22ad-4e09-9d68-f154c442482a.jpeg', '2022-04-24 20:05:08', '2022-04-24 20:05:08'),
('707e67a5-0bf7-41a2-a380-192cc559af0e', 'f799337d-8938-4482-8287-a9e93e0e919d', '297f9fd1-92ab-4e66-aa1c-befda7d9d24c.jpg', '2022-03-27 21:41:39', '2022-03-27 21:41:39'),
('82b30f58-feef-4662-a2ba-321ff1092d47', '36690e58-80f3-41de-9938-c9a92cc90168', '46d3feb3-8fc3-4175-a9bb-f9ca9d58032d.jpg', '2022-03-16 23:40:56', '2022-03-16 23:40:56'),
('8f1d915c-75db-4665-b9ed-022cbfd835f5', '14051156-e9ca-486e-a5dd-9e71005682c3', 'fc782ac6-8201-47f4-bc87-ddf143c3eb6c.png', '2022-04-23 23:08:49', '2022-04-23 23:08:49'),
('9bb739d5-7c07-4fe1-b053-c9d39e9d4726', 'ac4cb5a2-d93e-49b1-9069-f54cd13592a2', 'd177dbca-e1d9-4652-968b-edd93c81d176.JPG', '2022-04-24 20:05:45', '2022-04-24 20:05:45'),
('a45ca160-d7da-4c2d-ba81-65842c751658', '8960916a-be36-4eaa-acec-434c938d530a', '23108e7b-d584-4cc2-b812-8a66874fa761.jpg', '2022-03-27 22:15:39', '2022-03-27 22:15:39'),
('ac4f1f22-91e8-4a96-afa1-acc3fc1f3426', 'e1b5ffc1-c47e-4ba1-997f-11972504eb02', '6d9f168f-828e-4ee4-8a18-0d029b6de844.jpeg', '2022-04-24 20:06:47', '2022-04-24 20:06:47'),
('b0af68ab-8b56-420b-a11a-da9dadd4d7d4', '9f0169d6-2d40-419b-875a-679982f61ba0', 'c57a84cc-94a2-4c83-93f8-130555c1db71.jpg', '2022-03-17 00:18:05', '2022-03-17 00:18:05'),
('d9475772-7a4c-4948-bc23-444efa2c246b', 'cf303ff9-fb3c-41c9-abc9-a59c3ec8b85e', 'df855c14-b9fc-4988-9a85-4357da51de4b.jpeg', '2022-04-24 20:06:15', '2022-04-24 20:06:15'),
('e120e713-c5df-4682-98c1-468b8e3ad33f', '77ecb2bb-7682-4bed-b481-b1867425a689', '44885b48-2e82-492f-ae56-61484ef2dd43.jpg', '2022-03-16 23:45:04', '2022-03-16 23:45:04'),
('e2d4137b-9577-4b40-976e-e146bae400cd', '8960916a-be36-4eaa-acec-434c938d530a', '262a214d-6075-4d23-843f-74d81b365df0.jpg', '2022-03-16 23:46:42', '2022-03-16 23:46:42'),
('ff896f4e-8585-434f-8397-c60c7ffac55f', '9938b877-8974-48b9-8a0f-9d70c399037f', 'fd7add35-123e-420a-8ff0-b77ed4f99448.png', '2022-03-10 09:44:57', '2022-03-10 09:44:57');

-- --------------------------------------------------------

--
-- Table structure for table `prove`
--

CREATE TABLE `prove` (
  `prove_id` char(36) NOT NULL,
  `donasi_id` char(36) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `prove`
--

INSERT INTO `prove` (`prove_id`, `donasi_id`, `image`, `created_at`, `updated_at`) VALUES
('03229c31-5bbc-4b02-aa99-e8b01f94396e', 'ae6e8021-2f53-4171-a75b-ce56bf0bfcf3', '7d06231b-2663-4836-be10-a4aa1bcd1d4d.png', '2022-04-03 03:11:41', '2022-04-03 03:11:41'),
('6df661d3-d159-4a08-94c8-0052ad1cd2c7', 'e6bd5a41-152c-4817-a125-4ce41ae8ef40', 'ca40eedc-5948-46fc-ba36-cae14e483f84.jpeg', '2022-03-28 10:06:08', '2022-03-28 10:06:08'),
('e50875ff-4be6-4b8c-a9f3-f9dc6cdb3af0', '0deb73d4-d0a4-40e4-a969-0e9d90032a9c', '72507c2d-22d7-4d44-a8e9-f09af924b58c.jpeg', '2022-03-28 10:20:11', '2022-03-28 10:20:11');

-- --------------------------------------------------------

--
-- Table structure for table `relawan`
--

CREATE TABLE `relawan` (
  `relawan_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birth_place` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birth_date` date NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `skill` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `organization_exp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hoby` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `work_exp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_education` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ktp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `relawan`
--

INSERT INTO `relawan` (`relawan_id`, `name`, `email`, `phone`, `birth_place`, `birth_date`, `address`, `skill`, `organization_exp`, `hoby`, `work_exp`, `last_education`, `facebook`, `instagram`, `twitter`, `ktp`, `photo`, `status`, `created_at`, `updated_at`) VALUES
('2391ce5b-22c3-4d91-8e8a-f77fefbc1091', 'Quail Hale', 'wucif@mailinator.com', 'Aliquam sunt sequi p', NULL, '2003-06-23', 'Dicta velit eius pro', NULL, NULL, NULL, 'Velit earum quisqua', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-27 05:40:20', '2022-02-27 05:40:20'),
('2bdc338f-0cff-4124-bb6d-3c4e6f3fdefb', 'Muhammad amin', 'aminaceh@yahoo.com', '08126977755', NULL, '1972-09-07', 'Lamreh Darussalam Aceh Besar Aceh', NULL, NULL, NULL, 'Wiraswasta', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-09 08:22:07', '2022-03-09 08:22:07'),
('3accb6cc-28ae-416f-84cf-382dfce6b0f6', 'Ivy Salinas', 'topetatym@mailinator.com', 'Fuga Nulla assumend', NULL, '1980-04-22', 'Optio eveniet est', NULL, NULL, NULL, 'Sint voluptate offic', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 23:30:11', '2022-02-25 23:30:11'),
('3f57e78a-95bb-4139-b19e-9bfde444c7b5', 'wido agung mahrom', 'whido.a@gmail.com', '08988446891', NULL, '1998-09-05', 'kp. tarate', NULL, NULL, NULL, 'Sebagai relawan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-01 02:24:54', '2022-03-01 02:24:54'),
('7cc939d9-185a-4448-b838-cb0cc850ee8c', 'Carson Foley', 'mumejywer@mailinator.com', 'Est et ut ipsum repe', NULL, '1983-11-28', 'Perferendis officia', NULL, NULL, NULL, 'Veritatis illo volup', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-27 05:40:43', '2022-02-27 05:40:43'),
('836c3761-0fad-4d64-bb35-633e101cec39', 'Rhiannon Curtis', 'guzazo@mailinator.com', '+1 (885) 888-6341', NULL, '2015-01-01', 'Iusto ut nihil place', 'Occaecat fugiat labo', 'Mollitia qui volupta', 'Inventore neque volu', 'Voluptatem qui inven', 'Accusantium et ut cu', 'Natus dolor ipsum i', 'Ipsum nesciunt aut', 'Incidunt in laborio', '04f56a6a-f1a0-4833-bf0b-f4f07aa907fb.png', 'afa223a7-8b9f-420c-91fe-19eda2d9252e.png', 0, '2022-03-11 07:23:05', '2022-03-11 07:23:05'),
('88f8cc45-794a-47d7-ad9f-bc5249c08a5f', 'Hanan Yusron', 'abdulhanandasta212@gmail.com', '085892599135', NULL, '1981-07-01', 'Dasan Tapen\r\nGerung \r\nLombok Barat NTB', 'Lobby&Marketing', 'Pramuka\r\nOP3NH\r\nBEM FKIP&MPM Unram\r\nLDK Unram\r\nKAMMI\r\nReMas\r\nMUI Lobar\r\nPD IKAPPNH\r\nForum Arimatea NTB \r\nDASI NTB\r\nFOZ NTB', 'Jalan2 dan bantu orang', 'DASI NTB (MarKom)\r\nPT BGL (DirUt)\r\nGuru di beberapa sekolah', 'S1', 'Hanan Yusron', NULL, NULL, '93651132-1e53-45b8-b164-01f0134bdb0a.jpg', 'e9515c37-0464-405a-a356-b23d8b517d8d.jpg', 0, '2022-04-22 20:56:17', '2022-04-22 20:56:17'),
('8a6a9aec-00b8-4e9e-b70b-21a801bb870f', 'Casey Cohen', 'towezilune@mailinator.com', 'Nulla commodi ad aut', NULL, '2004-07-09', 'Ex vero temporibus i', NULL, NULL, NULL, 'Voluptatem ab ut ess', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 23:40:23', '2022-02-25 23:40:23'),
('a222f064-1b6b-4363-9b6b-5696f4a49b27', 'Nerea Spence', 'tuvulypo@mailinator.com', 'Ratione eum eos volu', NULL, '1980-08-09', 'Illo nihil repellend', NULL, NULL, NULL, 'Quis eveniet enim l', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 21:49:24', '2022-02-25 21:49:24'),
('bd6b4be9-a98b-497b-b6c7-f7e52a9e7703', 'Veda Gomez', 'sodu@mailinator.com', 'Dolorem possimus vo', NULL, '2021-03-14', 'Nulla earum ipsam ad', NULL, NULL, NULL, 'Do hic laboriosam q', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-27 05:37:02', '2022-02-27 05:37:02'),
('c2a2bd3f-c98e-42be-af6e-8f4c49627ea3', 'Akbar Tri Pratama', 'akbartripratama28@gmail.com', '082218385134', NULL, '2022-10-28', 'Dusun Krajan I RT 08 RW 02 Desa Sukareja Kecamatan Sukasari Kabupaten Subang Provinsi Jawa barat Indonesia', 'Programmer', 'Ketua OSIS SMK Darul Ma\'arif, Karang Taruna Desa Sukareja (Bendahara), Ikatan Mahasiswa Management (Sekretaris)', 'Membaca', 'Perangkat Desa', 'SMK', 'Akbar Tri Pratama', '@akbartripratama28', 'Akbar084akbar', 'ac94cc41-0b7c-4db0-b440-410576fb2e21.jpg', '92a2384c-c067-4cbe-9b71-a65fe208a173.jpg', 0, '2022-04-18 21:29:20', '2022-04-18 21:29:20'),
('cf00d1e7-0305-4a0b-9278-f3c265690301', 'your name', 'zombiephoenix43@gmail.com', '087797689348', NULL, '2005-02-01', 'jwfnajgglkajkagknalg', 'bersosialisasi', 'osis', 'main game', 'web development', 'SMK', 'ajhddhai', 'afayfuahfia', 'wa7tda7waw', '15982fc6-2f51-482f-80f4-b31e7a2a32b6.jpg', '59921a8f-44a3-4eb8-a7b0-ab36132f7004.jpg', 0, '2022-03-27 23:19:31', '2022-03-27 23:19:31'),
('da99b281-e36f-4e08-a43c-25a78537db1f', 'Quyn Santos', 'wuhisozeq@mailinator.com', 'Nihil libero quo et', NULL, '2018-07-27', 'In veniam voluptate', NULL, NULL, NULL, 'Veniam soluta volup', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 23:39:37', '2022-02-25 23:39:37'),
('f266b771-0044-48e3-a764-c7f9c9166737', 'Patience Mclean', 'fosonate@mailinator.com', 'Tempore eos quisqu', NULL, '1977-04-24', 'Molestiae labore ut', NULL, NULL, NULL, 'Cupiditate fugit qu', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-25 23:42:46', '2022-02-25 23:42:46'),
('f961895c-30eb-430f-aad5-b51a3a310dd9', 'Izul Islam', 'izulavraham@gmail.com', '089636950881', NULL, '1996-03-17', 'jalan masjid al Muhajirin 1, Cinangka, Sswangan,Depok\r\netc', 'Microsoft office call center, berbahasa Inggris dengan baik', 'Angkatan Muda Muhammadiyah', 'futsal badminton renang', 'Calll center dan Administrasi Aplikasi Telemedicine di PT PERTA MANDIRI SEJAHTERA', 'Strata 1', NULL, NULL, 'Izulislam', '5af0473a-3723-4bd3-bcaa-4218347a3f2f.jpg', '522799da-56e7-4fd5-8dd3-0087e56f8441.jpg', 0, '2022-03-20 16:42:06', '2022-03-20 16:42:06');

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `setting_id` char(36) NOT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `kontak1_name` varchar(255) DEFAULT NULL,
  `kontak1_phone` varchar(20) DEFAULT NULL,
  `kontak2_name` varchar(255) DEFAULT NULL,
  `kontak2_phone` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `link_fb` varchar(255) DEFAULT NULL,
  `link_twitter` varchar(255) DEFAULT NULL,
  `link_ig` varchar(255) DEFAULT NULL,
  `link_yt` varchar(255) DEFAULT NULL,
  `link_nav` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `address` longtext DEFAULT NULL,
  `bantuan` longtext DEFAULT NULL,
  `keterangan` longtext DEFAULT NULL,
  `footer_img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`setting_id`, `logo`, `kontak1_name`, `kontak1_phone`, `kontak2_name`, `kontak2_phone`, `email`, `link_fb`, `link_twitter`, `link_ig`, `link_yt`, `link_nav`, `created_at`, `updated_at`, `address`, `bantuan`, `keterangan`, `footer_img`) VALUES
('819d977c-9716-4e56-949a-f0a4400830pp', '95fa436b-cd4c-4849-a553-083681653d82.png', 'Shabila', '081212936528', 'Miftha', '081514698393', 'cs@globalmoeslimcharity.com', 'https://web.facebook.com/globalmoeslimcharity', 'https://twitter.com/GlobalMoeslimCh', 'https://www.instagram.com/globalmoeslimcharity/', 'https://www.youtube.com/channel/UCDYrylDf-gUjq37NlrkTtGg', 'https://azha.co.id', '2022-03-31 11:30:10', '2022-04-24 23:55:22', '<p>Beltway Office Park Tower A lt 3 Jl. Ampera Raya, RW.2, Ragunan, Kec. Ps. Minggu, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12540<br></p>', '<p>Mari bersama kami mengentaskan kemiskinan global dengan cara donasi di GMC<br></p>', '<p>Dukung dan ikuti sosial media kami untuk mendapatkan update informasi seputar kegiatan GMC<br></p>', 'footer-logo.png');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `slider_id` char(36) NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `subtitle` varchar(255) DEFAULT NULL,
  `is_button` int(11) NOT NULL,
  `button_link` varchar(255) DEFAULT NULL,
  `button_name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`slider_id`, `image`, `title`, `subtitle`, `is_button`, `button_link`, `button_name`, `created_at`, `updated_at`) VALUES
('b84c2e29-614f-425d-bb5d-5f60d2546bbc', '62aeb435-cdb2-4235-9e2b-684b233b75a3.jpg', 'Program Wakaf Quran', 'Pemberian wakaf 1000 quran kepada santri', 0, 'https://azha.co.id', 'yok', '2022-04-24 01:22:20', '2022-04-24 20:50:43'),
('e919a126-5b09-4a9f-8ddc-eb25ff167eeb', 'e8d5e015-4556-454d-ae6c-465970225250.jpeg', 'Program Pembedayaan Ekonomi Pesantren', 'Memajukan Ekonomi Pesantren di Nusantara dengan memperkuat Ilmu Ekonomi Syariah', 1, 'https://example.com', 'Donasi', '2022-04-24 01:38:26', '2022-04-24 01:38:26');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `email`, `email_verified_at`, `password`, `phone`, `address`, `remember_token`, `created_at`, `updated_at`) VALUES
('01d98cae-2602-46fb-9127-279f88f5e421', 'unknown', 'zombiephoenix43@gmail.com', NULL, '$2y$10$0pBCP7Z66N8wUTTK0cADdujXgK4XJCxGjwy3u5lDn06TgCmPAlLt2', '087797689348', NULL, NULL, '2022-03-27 21:22:48', '2022-03-27 21:22:48'),
('29d86459-ab33-44df-bc51-4576d62950c9', 'Reza Maulana', 'rumahjasa12@gmail.com', NULL, '$2y$10$uh2AxAE1.yziZ9EEzEVPQ.6xQ8kQuKrRZ7HgIeKn0oQwErLQs.6.6', '08980886811', NULL, NULL, '2022-03-10 00:10:03', '2022-03-10 00:10:03'),
('2d9cfba7-97af-401e-9857-42e3809b6f92', 'wfdssdgs', 'sfbsb@gmail.com', NULL, '$2y$10$hpc8J0ROfnfpxmu8j9.Tv.xT8NQW6Tr5kUcKXp33bcq2lyL.PNmD6', '08789992349', NULL, NULL, '2022-03-11 08:03:11', '2022-03-11 08:03:11'),
('a41b87c4-4432-424c-80d0-697a1c0c87e9', 'Hamba', 'Email@email.com', NULL, '$2y$10$mx7KQk/G6hteGIZ8kM23lOmtlYVIB8A5rLvzcKE1qob0wEwQw6gwq', '0812000000', NULL, NULL, '2022-04-15 03:07:51', '2022-04-15 03:07:51'),
('b249939d-c545-4929-9c3a-e64108c842af', 'Wido Agung Mahrom', 'whid.o.a@gmail.com', NULL, '$2y$10$gZIUJvig7qjI2ymtYphPSOYi3jnqAgYo60UrSrzQx/i6bi.0U09PS', '08988446891', NULL, NULL, '2022-03-28 03:19:44', '2022-03-28 03:19:44'),
('c1d781ba-0ffa-4a66-a597-7adff9646fd9', 'dd', 'gadaea@gmail.com', NULL, '$2y$10$9mPyFPXyzu9CaKpytmNynOoIn8OqVV1bi8QYPZG7mypChw0UDItHm', '08214535241', NULL, NULL, '2022-04-12 22:30:52', '2022-04-12 22:30:52'),
('c6107612-e646-40bb-8b9f-7ec4dc9ec996', 'Wido Agung Mahrom', 'whido.a@gmail.com', NULL, '$2y$10$ajmMKNC39fS9NKEPyqxKOusEFwsaVVtxDX.1Uku25Tjs66.tcip/a', '08988446891', NULL, NULL, '2022-03-10 00:15:08', '2022-03-10 00:15:08'),
('d3800aa1-0863-4fc3-a6b0-50ccbcfa18e6', 'Ipaz Matin', 'ipazmatin@gmail.com', NULL, '$2y$10$cA0y5Ch3gD7dSv0Xmps2lukC19qpe7/lCoXzVo0poyT9e1y0x2YvG', '85814973733', NULL, NULL, '2022-03-10 05:18:24', '2022-03-10 05:18:24'),
('eafbc7f1-54e1-477e-b80e-c36616c0d0bd', 'Urffan', 'urffanf@gmail.com', NULL, '$2y$10$hR9zL6TIaFSiyXr..XlFIuxrPX3LXqR8z6H98.GZg5f2hABKxaGcy', '082130672545', NULL, NULL, '2022-03-13 21:41:36', '2022-03-13 21:49:45');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `video_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`video_id`, `title`, `url`, `description`, `created_at`, `updated_at`) VALUES
('1', 'Bea Santri untuk Santri Papua', 'https://www.youtube.com/embed/2B1dlV9u5po', 'Deskripsi nya', NULL, '2022-04-24 15:48:30'),
('2', 'GMC buat Program Gerakan Ekonomi Pesantren', 'https://www.youtube.com/embed/ERXmGVRRvmo', 'Deskripsi nya', NULL, '2022-04-24 15:48:53'),
('3', 'Hadirnya GMC Mencerahkan Mencerdaskan Mengkaryakan Umat', 'https://www.youtube.com/embed/bEMDaW7yCiY', 'Deskripsi nya', NULL, '2022-04-24 15:49:13'),
('3b74a5ba-0c2b-4827-a08b-44bc2e636420', 'ACC, UMKM Berdaya dan Beri Makan Saudara Kita Yang Belum Beruntung', 'https://www.youtube.com/embed/ckWrXb4aK0c', NULL, '2022-03-20 19:59:22', '2022-03-27 22:28:07'),
('4', 'Presiden GMC Lepas GMC Volenteers', 'https://www.youtube.com/embed/0QN3ufCWl6k', 'Deskripsi nya', NULL, '2022-04-24 15:49:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`about_id`) USING BTREE;

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`) USING BTREE,
  ADD UNIQUE KEY `admins_email_unique` (`email`) USING BTREE;

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`article_id`) USING BTREE;

--
-- Indexes for table `banks`
--
ALTER TABLE `banks`
  ADD PRIMARY KEY (`bank_id`) USING BTREE;

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`) USING BTREE;

--
-- Indexes for table `donasi`
--
ALTER TABLE `donasi`
  ADD PRIMARY KEY (`donasi_id`) USING BTREE;

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`) USING BTREE;

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`kategori_id`) USING BTREE;

--
-- Indexes for table `lain`
--
ALTER TABLE `lain`
  ADD PRIMARY KEY (`lain_id`) USING BTREE;

--
-- Indexes for table `legalitas`
--
ALTER TABLE `legalitas`
  ADD PRIMARY KEY (`legalitas_id`) USING BTREE;

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `parameters`
--
ALTER TABLE `parameters`
  ADD PRIMARY KEY (`parameter_id`) USING BTREE;

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`) USING BTREE;

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`) USING BTREE,
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`) USING BTREE;

--
-- Indexes for table `program`
--
ALTER TABLE `program`
  ADD PRIMARY KEY (`program_id`) USING BTREE;

--
-- Indexes for table `program_galeries`
--
ALTER TABLE `program_galeries`
  ADD PRIMARY KEY (`program_galery_id`) USING BTREE;

--
-- Indexes for table `prove`
--
ALTER TABLE `prove`
  ADD PRIMARY KEY (`prove_id`) USING BTREE;

--
-- Indexes for table `relawan`
--
ALTER TABLE `relawan`
  ADD PRIMARY KEY (`relawan_id`) USING BTREE,
  ADD UNIQUE KEY `relawan_email_unique` (`email`) USING BTREE;

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`setting_id`) USING BTREE;

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`slider_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`) USING BTREE,
  ADD UNIQUE KEY `users_email_unique` (`email`) USING BTREE;

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`video_id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
