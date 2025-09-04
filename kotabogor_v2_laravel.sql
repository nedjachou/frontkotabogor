-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2024 at 04:01 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kotabogor_v2_laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `agenda`
--

CREATE TABLE `agenda` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `waktu` time NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `ket` varchar(150) NOT NULL,
  `user_id` int(11) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `agenda`
--

INSERT INTO `agenda` (`id`, `judul`, `waktu`, `lokasi`, `ket`, `user_id`, `create_at`, `update_at`) VALUES
(1, 'Menghadiri Buka Puasa bersama Classy Women Jakarta dan Anak Yatim', '16:30:00', 'Mid East Shisha and Lounge Bogor', '', 0, '2024-03-25 20:25:37', '0000-00-00 00:00:00'),
(2, 'Menerima Paduan Suara IPB', '13:00:00', 'Balaikota Bogor', '', 0, '2024-03-25 20:26:37', '0000-00-00 00:00:00'),
(3, 'Menerima Laporan Penyelenggaraan Bulan Dana PMI', '11:00:00', 'Paseban Narayana', '', 0, '2024-03-25 20:27:18', '0000-00-00 00:00:00'),
(4, 'Menerima Kunjungan Spesifik Komisi V DPR RI dalam rangka Meninjau Persiapan Fasilitas Transportasi A', '09:00:00', 'Terminal Baranangsiang', '', 0, '2024-03-25 20:27:47', '0000-00-00 00:00:00'),
(5, 'Mendampingi Kunjungan Kerja Menteri Perdagangan RI', '08:00:00', 'Pasar Kebon Kembang (Pasar Anyar Blok D), Pasar Mu', '', 0, '2024-03-25 20:28:18', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

CREATE TABLE `album` (
  `id` int(11) NOT NULL,
  `album` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `create_at` datetime NOT NULL,
  `update_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `link` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `jenis` int(11) NOT NULL,
  `tab` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `judul`, `link`, `image`, `jenis`, `tab`, `user_id`, `create_at`, `update_at`) VALUES
(2, 'pengumuman1', '#', '1.png', 1, 1, 3, '2024-03-27 03:37:36', '0000-00-00 00:00:00'),
(3, 'dinkes', '#', 'dinkes.png', 2, 1, 3, '2024-03-26 03:47:29', '0000-00-00 00:00:00'),
(4, 'diskominfo', '#', 'diskominfo.png', 2, 1, 3, '2024-03-26 03:47:29', '0000-00-00 00:00:00'),
(5, 'disparbud', '#', 'disparbud.png', 2, 1, 3, '2024-03-26 03:47:29', '0000-00-00 00:00:00'),
(6, 'dlh', '#', 'dlh.png', 2, 1, 3, '2024-03-26 03:47:29', '0000-00-00 00:00:00'),
(7, 'pengumuman1', '#', '2.png', 1, 1, 3, '2024-03-27 03:37:36', '0000-00-00 00:00:00'),
(8, 'pengumuman1', '#', '3.png', 1, 1, 3, '2024-03-27 03:37:36', '0000-00-00 00:00:00'),
(9, 'pengumuman1', '#', '4.png', 1, 1, 3, '2024-03-27 03:37:36', '0000-00-00 00:00:00'),
(10, 'pengumuman1', '#', '5.png', 1, 1, 3, '2024-03-27 03:37:36', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `dokumen`
--

CREATE TABLE `dokumen` (
  `id` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `file` varchar(50) NOT NULL,
  `konten` varchar(100) NOT NULL,
  `status` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id` int(11) NOT NULL,
  `album_id` int(11) NOT NULL,
  `file` varchar(50) NOT NULL,
  `ket` varchar(100) NOT NULL,
  `status` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `create_at` int(11) NOT NULL,
  `update_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `halaman`
--

CREATE TABLE `halaman` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `ket` text NOT NULL,
  `file` varchar(100) NOT NULL,
  `status` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `halaman`
--

INSERT INTO `halaman` (`id`, `judul`, `ket`, `file`, `status`, `user_id`, `create_at`, `update_at`) VALUES
(1, 'Sejarah Bogor', 'Sejarah Bogor\r\n\r\nHampir secara umum penduduk Bogor mempunyai keyakinan bahwa Kota Bogor mempunyai hubungan lokatif dengan Kota Pakuan, ibukota Pajajaran. Asal-usul dan arti Pakuan terdapat dalam berbagai sumber. Di bawah ini adalah hasil penelusuran dari sumber-sumber tersebut berdasarkan urutan waktu:\r\n\r\nNaskah Carita Waruga Guru (1750-an). Dalam naskah berbahasa Sunda Kuna ini diterangkan bahwa nama Pakuan Pajajaran didasarkan bahwa di lokasi tersebut banyak terdapat pohon Pakujajar.\r\n\r\n\r\nK.F. Holle (1869). Dalam tulisan berjudul De Batoe Toelis te Buitenzorg (Batutulis di Bogor), Holle menyebutkan bahwa di dekat Kota Bogor terdapat kampung bernama Cipaku, beserta sungai yang memiliki nama yang sama. Di sana banyak ditemukan pohon paku. Jadi menurut Holle, nama Pakuan ada kaitannya dengan kehadiran Cipaku dan pohon paku. Pakuan Pajajaran berarti pohon paku yang berjajar (\"op rijen staande pakoe bomen\").\r\n\r\nG.P. Rouffaer (1919) dalam Encyclopedie van Niederlandsch Indie edisi Stibbe tahun 1919. Pakuan mengandung pengertian \"paku\", akan tetapi harus diartikan \"paku jagat\" (spijker der wereld) yang melambangkan pribadi raja seperti pada gelar Paku Buwono dan Paku Alam. \"Pakuan\" menurut Fouffaer setara dengan \"Maharaja\". Kata \"Pajajaran\" diartikan sebagai \"berdiri sejajar\" atau \"imbangan\" (evenknie). Yang dimaksudkan Rouffaer adalah berdiri sejajar atau seimbang dengan Majapahit. Sekalipun Rouffaer tidak merangkumkan arti Pakuan Pajajaran, namun dari uraiannya dapat disimpulkan bahwa Pakuan Pajajaran menurut pendapatnya berarti \"Maharaja yang berdiri sejajar atau seimbang dengan (Maharaja) Majapahit\". Ia sependapat dengan Hoesein Djajaningrat (1913) bahwa Pakuan Pajajaran didirikan tahun 1433.\r\n\r\n\r\nR. Ng. Poerbatjaraka (1921). Dalam tulisan De Batoe-Toelis bij Buitenzorg (Batutulis dekat Bogor) ia menjelaskan bahwa kata \"Pakuan\" mestinya berasal dari bahasa Jawa kuno \"pakwwan\" yang kemudian dieja \"pakwan\" (satu \"w\", ini tertulis pada Prasasti Batutulis). Dalam lidah orang Sunda kata itu akan diucapkan \"pakuan\". Kata \"pakwan\" berarti kemah atau istana. Jadi, Pakuan Pajajaran, menurut Poerbatjaraka, berarti \"istana yang berjajar\"(aanrijen staande hoven).\r\n\r\nH. Ten Dam (1957). Sebagai Insinyur Pertanian, Ten Dam ingin meneliti kehidupan sosial-ekonomi petani Jawa Barat dengan pendekatan awal segi perkembangan sejarah. Dalam tulisannya, Verkenningen Rondom Padjadjaran (Pengenalan sekitar Pajajaran), pengertian \"Pakuan\" ada hubungannya dengan \"lingga\" (tonggak) batu yang terpancang di sebelah prasasti Batutulis sebagai tanda kekuasaan. Ia mengingatkan bahwa dalam Carita Parahyangan disebut-sebut tokoh Sang Haluwesi dan Sang Susuktunggal yang dianggapnya masih mempunyai pengertian \"paku\".\r\n\r\n\r\nIa berpendapat bahwa \"pakuan\" bukanlah nama, melainkan kata benda umum yang berarti ibukota (hoffstad) yang harus dibedakan dari keraton. Kata \"pajajaran\" ditinjaunya berdasarkan keadaan topografi. Ia merujuk laporan Kapiten Wikler (1690) yang memberitakan bahwa ia melintasi istana Pakuan di Pajajaran yang terletak antara Sungai Besar dengan Sungai Tanggerang (disebut juga Ciliwung dan Cisadane). Ten Dam menarik kesimpulan bahwa nama \"Pajajaran\" muncul karena untuk beberapa kilometer Ciliwung dan Cisadane mengalir sejajar. Jadi, Pakuan Pajajaran dalam pengertian Ten Dam adalah Pakuan di Pajajaran atau \"Dayeuh Pajajaran\".\r\n\r\nSebutan \"Pakuan\", \"Pajajaran\", dan \"Pakuan Pajajaran\" dapat ditemukan dalam Prasasti Batutulis (nomor 1 & 2) sedangkan nomor 3 bisa dijumpai pada Prasasti Kebantenan di Bekasi.\r\n\r\n\r\nDalam naskah Carita Parahiyangan ada kalimat berbunyi \"Sang Susuktunggal, inyana nu nyieunna palangka Sriman Sriwacana Sri Baduga Maharajadiraja Ratu Haji di Pakwan Pajajaran nu mikadatwan Sri Bima Punta Narayana Madura Suradipati, inyana pakwan Sanghiyang Sri Ratu Dewata\" (Sang Susuktunggal, dialah yang membuat tahta Sriman Sriwacana (untuk) Sri Baduga Maharaja Ratu Penguasa di Pakuan Pajajaran yang bersemayam di keraton Sri Bima Punta Narayana Madura Suradipati, yaitu pakuan Sanghiyang Sri Ratu Dewata).\r\n\r\n\r\nSanghiyang Sri Ratu Dewata adalah gelar lain untuk Sri Baduga. Jadi yang disebut \"pakuan\" itu adalah \"kadaton\" yang bernama Sri Bima dan seterunya. \"Pakuan\" adalah tempat tinggal untuk raja, biasa disebut keraton, kedaton atau istana. Jadi tafsiran Poerbatjaraka lah yang sejalan dengan arti yang dimaksud dalam Carita Parahiyangan, yaitu \"istana yang berjajar\". Tafsiran tersebut lebih mendekati lagi bila dilihat nama istana yang cukup panjang tetapi terdiri atas nama-nama yang berdiri sendiri. Diperkirakan ada lima (5) bangunan keraton yang masing-masing bernama: Bima, Punta, Narayana, Madura dan Suradipati. Inilah mungkin yang biasa disebut dalam peristilahan klasik \"panca persada\" (lima keraton). Suradipati adalah nama keraton induk. Hal ini dapat dibandingkan dengan nama-nama keraton lain, yaitu Surawisesa di Kawali, Surasowan di Banten dan Surakarta di Jayakarta pada masa silam.\r\n\r\n\r\nKarena nama yang panjang itulah mungkin orang lebih senang meringkasnya, Pakuan Pajajaran atau Pakuan atau Pajajaran. Nama keraton dapat meluas menjadi nama ibukota dan akhirnya menjadi nama negara. Contohnya : Nama keraton Surakarta Hadiningrat dan Ngayogyakarta Hadiningrat, yang meluas menjadi nama ibukota dan nama daerah. Ngayogyakarta Hadiningrat dalam bahasa sehari-hari cukup disebut Yogya.\r\n\r\n\r\nPendapat Ten Dam (Pakuan = ibukota ) benar dalam penggunaan, tetapi salah dari segi semantik. Dalam laporan Tome Pires (1513) disebutkan bahwa bahwa ibukota kerajaan Sunda itu bernama \"Dayo\" (dayeuh) dan terletak di daerah pegunungan, dua hari perjalanan dari pelabuhan Kalapa di muara Ciliwung. Nama \"Dayo\" didengarnya dari penduduk atau pembesar Pelabuhan Kalapa. Jadi jelas, orang Pelabuhan Kalapa menggunakan kata \"dayeuh\" (bukan \"pakuan\") bila bermaksud menyebut ibukota. Dalam percakapan sehari-hari, digunakan kata \"dayeuh\", sedangkan dalam kesusastraan digunakan \"pakuan\" untuk menyebut ibukota kerajaan.\r\n\r\nUntuk praktisnya, dalam tulisan berikut digunakan \"Pakuan\" untuk nama ibukota dan \"Pajajaran\" untuk nama negara, seperti kebiasaan masyarakat Jawa Barat sekarang ini.', 'gunung-salak.jpg', 1, 1, '2024-05-31 08:37:21', '0000-00-00 00:00:00'),
(2, 'Letak Geografis', 'Letak Geografis\r\n\r\nSecara geografis Kota Bogor terletak di antara 106’ 48’ BT dan 6’ 26’ LS, kedudukan geografis Kota Bogor di tengah-tengah wilayah Kabupaten Bogor serta lokasinya sangat dekat dengan Ibukota Negara, merupakan potensi yang strategis bagi perkembangan dan pertumbuhan ekonomi dan jasa, pusat kegiatan nasional untuk industri, perdagangan, transportasi, komunikasi, dan pariwisata.\r\n\r\n\r\nKETINGGIAN\r\nKota Bogor mempunyai rata-rata ketinggian minimum 190 m dan maksimum 330 m dari permukaan laut.\r\n\r\nIKLIM\r\nKondisi iklim di Kota Bogor suhu rata-rata tiap bulan 26’ C dengan suhu terendah 21,8’ C dengan suhu tertinggi 30,4’ C. Kelembaban udara 70 %, Curah hujan rata-rata setiap tahun sekitar 3.500 – 4000 mm dengan curah hujan terbesar pada bulan Desember dan Januari.\r\n\r\nWILAYAH ADMINISTRASI\r\nLuas Wilayah Kota bogor sebesar 11.850 Ha terdiri dari 6 kecamatan dan 68 kelurahan. Kemudian Secara Administratif kota Bogor terdiri dari 6 wilayah kecamatan, 31 kelurahan dan 37 desa (lima diantaranya termasuk desa tertinggal yaitu desa Pamoyanan, Genteng, Balungbangjaya, Mekarwangi dan Sindangrasa), 210 dusun, 623 RW, 2.712 RT dan dikelilingi oleh Wilayah Kabupaten Bogor yaitu sebagai berikut :\r\n\r\nSebelah Utara berbatasan dengan Kec. Kemang, Bojong Gede, dan Kec. Sukaraja Kabupaten Bogor.\r\nSebelah Timur berbatasan dengan Kec. Sukaraja dan Kec. Ciawi, Kabupaten Bogor.\r\nSebelah Barat berbatasan dengan Kec. Darmaga dan Kec. Ciomas, Kabupaten Bogor.\r\nSebelah Selatan berbatasan dengan Kec. Cijeruk dan Kec. Caringin, Kabupaten Bogor.', 'gunung-salak.jpg', 1, 1, '2024-06-03 01:04:17', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `katakunci` varchar(50) NOT NULL,
  `tagline` varchar(100) NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `map` varchar(200) NOT NULL,
  `create_at` datetime NOT NULL,
  `update_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `induk` int(11) NOT NULL,
  `urutan` int(11) NOT NULL,
  `link` varchar(50) NOT NULL,
  `status` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `judul`, `induk`, `urutan`, `link`, `status`, `user_id`, `create_at`, `update_at`) VALUES
(1, 'Beranda', 0, 1, '/#', 1, 1, '2024-05-31 02:32:49', '0000-00-00 00:00:00'),
(2, 'Profile', 0, 2, '#', 1, 1, '2024-05-31 02:34:17', '0000-00-00 00:00:00'),
(3, 'Informasi', 0, 3, '#', 1, 1, '2024-05-31 03:21:58', '0000-00-00 00:00:00'),
(4, 'Layanan', 0, 4, '#', 1, 1, '2024-05-31 03:22:09', '0000-00-00 00:00:00'),
(5, 'PPIP', 0, 5, 'https://ppid.kotabogor.go.id/', 1, 1, '2024-05-31 02:36:20', '0000-00-00 00:00:00'),
(6, 'Berita', 0, 6, '/berita', 1, 1, '2024-05-31 02:37:50', '2024-03-26 04:11:36'),
(7, 'FAQ', 0, 7, '/#faq', 1, 1, '2024-05-31 02:38:52', '2024-05-31 02:38:52'),
(8, 'Kontak', 0, 8, '#kontak', 1, 1, '2024-06-03 01:30:40', '2024-05-31 02:39:50');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pimpinan`
--

CREATE TABLE `pimpinan` (
  `id` int(11) NOT NULL,
  `nama_walikota` varchar(150) NOT NULL,
  `nama_wakilwalikota` varchar(150) NOT NULL,
  `profil_walikota` text NOT NULL,
  `profil_wakilwalikota` text NOT NULL,
  `foto_pimpinandaerah` varchar(100) NOT NULL,
  `foto_walikota` varchar(100) NOT NULL,
  `foto_wakilwalikota` varchar(100) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pimpinan`
--

INSERT INTO `pimpinan` (`id`, `nama_walikota`, `nama_wakilwalikota`, `profil_walikota`, `profil_wakilwalikota`, `foto_pimpinandaerah`, `foto_walikota`, `foto_wakilwalikota`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Dr. H. Bima Arya Sugiarto, S.I.P.', 'Dedie Abdu Rachim, M.A.', '>Dr. H. Bima Arya Sugiarto, S.I.P. (lahir 17 Desember 1972) \r\n                        adalah seorang politisi Indonesia dari Partai Amanat Nasional (PAN). Bima adalah Wali \r\n                        Kota Bogor dua periode yang menjabat sejak 20 April 2019 hingga 20 April 2024. Sebelumnya, \r\n                        ia adalah Wali Kota Bogor periode pertama sejak 7 April 2014 hingga 7 April 2019. Pak Bima \r\n                        merupakan anak pertama dari tiga bersaudara. Beliau merupakan putra dari Brigjen. Pol (Purn).\r\n                        Toni Sugiarto, seorang perwira polisi kelahiran Majalengka, Jawa Barat yang pernah menjabat \r\n                        sebagai anggota Dewan Perwakilan Rakyat dari Fraksi ABRI dan pernah aktif menjadi pembina \r\n                        berbagai organisasi kemasyarakatan.\r\n                        Bima menamatkan pendidikan SD di SDN Polisi IV, SMP di SMPN 1 Bogor, SMA di SMAN 1 Bogor. \r\n                        Selanjutnya Pak Bima lulus kuliah di Universitas Parahyangan dengan gelar sarjana hubungan \r\n                        internasional. Pak Bima lalu melanjutkan studinya di Universitas Monash di Melbourne, Australia; \r\n                        dan Universitas Nasional Australia di Canberra, Australia. Pak Bima juga memiliki banyak penghargaan, \r\n                        organisasi, buku dan karir seperti saat ini yang menjabat sebagai Walikota Kota Bogor.', 'Dedie Abdu Rachim, M.A. (lahir 6 April 1966) \r\n                        menjabat sebagai Wakil Wali Kota Bogor periode 2019 hingga 2024 mendampingi \r\n                        Bima Arya Sugiarto. Dedie A Rachim menamatkan pendidikan SMA di SMA Regina Pacis. \r\n                        Selanjutnya Dedie menyelesaikan pendidikan tingginya di Institut Teknologi Bandung, \r\n                        program studi Product Industrial Design. Ia lalu menyelesaikan pendidikan Magister dari \r\n                        program studi Administrasi/Kebijakan Publik Universitas Indonesia pada tahun 2013.\r\n                        Dedie berkarier sebagai karyawan swasta sejak 1996 hingga 2005 di sejumlah perusahaan antara \r\n                        lain Astra Mobil, Maha Cipta Indonesia, dan White Space. Setelah itu, ia mengikuti seleksi \r\n                        \"Indonesia Memanggil I\" dan berhasil lolos menjadi pegawai KPK.\r\n                        Dalam rentan waktu 12 tahun kariernya di KPK, pria kelahiran Garut 6 April 1966 itu juga pernah \r\n                        menduduki jabatan ad interim yaitu pelaksana tugas Direktur PP Laporan Harta Kekayaan Penyelenggara \r\n                        Negara, Plt Direktur Penelitian dan Pengembangan, juga pelaksana harian Deputi Bidang Pencegahan.', 'pimpinan-daerah.png', 'foto_walikota.jpg', 'foto_wakilwalikota.jpg', 1, '2024-05-31 06:57:42', '2024-05-31 07:29:02');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `file` varchar(100) NOT NULL,
  `konten` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `tgl_publikasi` date NOT NULL,
  `user_id` int(11) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `judul`, `file`, `konten`, `status`, `tgl_publikasi`, `user_id`, `create_at`, `update_at`) VALUES
(1, 'Tengah Malam, Dedie Rachim Terjun ke Lokasi Bencana Lebak Kantin', 'doktor24030111.jpg', 'Wakil Wali Kota Bogor, Dedie A. Rachim terjun ke lokasi bencana tanah longsor di RT 02/07, Lebak Kantin, Kelurahan Sempur, Kecamatan Bogor Tengah, Kota Bogor, Senin (25/3/2024) malam. Dedie tiba di lokasi sekitar pukul 00.10 WIB dan langsung melihat prose', 1, '2024-03-25', 1, '2024-03-25 05:49:45', '2024-03-25 05:49:45'),
(2, 'Berita 2', 'cth-thumbnail.png', 'test berita 2', 1, '2024-05-27', 1, '2024-05-28 06:53:40', '0000-00-00 00:00:00'),
(3, 'Berita 3', 'thumbnail-berita5.jpg', 'Konten berita', 1, '2024-05-28', 1, '2024-05-28 07:06:00', '0000-00-00 00:00:00'),
(4, 'Test ini merupakan test untuk berita 4', 'thumbnail-berita3.jpg', 'kontent berita 4 test test test', 1, '2024-05-28', 1, '2024-05-28 07:16:10', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `program_unggulan`
--

CREATE TABLE `program_unggulan` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `konten` text NOT NULL,
  `status` int(11) NOT NULL,
  `pimpinan_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `program_unggulan`
--

INSERT INTO `program_unggulan` (`id`, `judul`, `konten`, `status`, `pimpinan_id`, `created_at`, `updated_at`) VALUES
(1, 'BOGOR LANCAR', 'Konversi Angkot, Pembangunan Jalan Protokol Alternatif, Pembangunan Flyover di JL. RE Martadinata & Kebon Pedes, Penataan Kawasan Stasiun Kereta Api, Pembangunan Gedung Parkir di Pusat Kota, Penuntasan Sarana Terminal Baranangsiang dan Stasiun LRT', 1, 1, '2024-05-31 07:39:40', '2024-05-31 07:39:40'),
(2, 'BOGOR MOTEKAR', 'Pembangunan Jalur Pedestrian yang Terintegrasi di Pusat Kota, Pembangunan Kampung Wisata, Revitalisasi Pasar Tradisional, Kampungku Bersih dan Hijau, Pembangunan Pusat Kuliner di setiap Kecamatan', 1, 1, '2024-05-31 07:39:40', '2024-05-31 07:39:40'),
(3, 'BOGOR MERENAH', 'Pembangunan Museum, Revitalisasi Perpustakaan Kota, Pembangunan GOR di setiap Kecamatan,', 1, 1, '2024-05-31 07:39:40', '2024-05-31 07:39:40'),
(4, 'BOGOR SAMAWA', 'Menciptakan 20 ribu Kesempatan Kerja dengan Konsep Kolaborasi antara Pengusaha, UMKM, Perbankan & Profesional, Festival Seni & Helaran Budaya', 1, 1, '2024-05-31 07:39:40', '2024-05-31 07:39:40'),
(5, 'BOGOR SAMAWA', 'Menciptakan 20 ribu Kesempatan Kerja dengan Konsep Kolaborasi antara Pengusaha, UMKM, Perbankan & Profesional, Festival Seni & Helaran Budaya', 1, 1, '2024-05-31 07:39:40', '2024-05-31 07:39:40'),
(6, 'BOGOR KASOHOR', 'Sekolah Ibu, 50 Beasiswa tiap Tahun bagi Pelajar Berprestasi, Merenovasi 20 ribu RTLH sampai Tahun 2023, Pemberian Insentif bagi Guru Ngaji, Orang Tua Asuh,', 1, 1, '2024-05-31 07:39:40', '2024-05-31 07:39:40'),
(7, 'ABDI BOGOR', 'Mal Pelayanan Publik, Kunjungan Dokter ke Keluarga, Konseling & Call Center 24 Jam, Layanan Malam Kelurahan, RSUD Unggul', 1, 1, '2024-05-31 07:39:40', '2024-05-31 07:39:40');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `file` varchar(50) NOT NULL,
  `status` int(11) NOT NULL,
  `link` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sosial`
--

CREATE TABLE `sosial` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `link` varchar(50) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `submenu`
--

CREATE TABLE `submenu` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `link` varchar(50) NOT NULL,
  `status` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `submenu`
--

INSERT INTO `submenu` (`id`, `judul`, `link`, `status`, `menu_id`, `created_at`, `updated_at`) VALUES
(1, 'Visi Misi', '/#visiMisi', 1, 2, '2024-05-31 02:45:15', '2024-05-31 02:45:15'),
(2, 'Pimpinan Daerah', '/pimpinan-daerah', 1, 2, '2024-05-31 02:48:26', '2024-05-31 02:48:26'),
(3, 'Struktur Pemerintah dan Organisasi', '/struktur', 1, 2, '2024-05-31 02:48:26', '2024-05-31 02:48:26'),
(4, 'Sejarah Kota Bogor', '/sejarah', 1, 2, '2024-05-31 02:53:25', '2024-05-31 02:53:25'),
(5, 'Lambang Kota Bogor', '/lambang', 1, 2, '2024-05-31 02:53:25', '2024-05-31 02:53:25'),
(6, 'Letak Geografis', '/geografis', 1, 2, '2024-05-31 02:53:25', '2024-06-03 01:05:42'),
(7, 'Peta Kota Bogor', '/peta', 1, 2, '2024-05-31 02:53:25', '2024-05-31 02:53:25'),
(8, 'Prestasi dan Penghargaan', '/penghargaan', 1, 2, '2024-05-31 02:53:25', '2024-06-03 00:45:16'),
(9, 'Galeri', '/galeri', 1, 2, '2024-05-31 02:53:25', '2024-05-31 02:53:25'),
(10, 'Dokumen Perencanaan', '', 1, 3, '2024-05-31 03:23:46', '2024-05-31 03:28:08'),
(11, 'Badan Usaha Milik Daerah', '', 1, 3, '2024-05-31 03:23:46', '2024-05-31 03:28:03'),
(12, 'Pariwisata Kota Bogor', '', 1, 3, '2024-05-31 03:24:18', '2024-05-31 03:24:18'),
(13, 'Izin Bidang Penanaman Modal', '', 1, 3, '2024-05-31 03:26:00', '2024-05-31 03:26:00'),
(14, 'Daftar UKM', '', 1, 3, '2024-05-31 03:26:00', '2024-05-31 03:26:00'),
(15, 'Data Demografi', '', 1, 3, '2024-05-31 03:26:00', '2024-05-31 03:26:00'),
(16, 'BSW Kota Bogor', 'https://bsw-landing.kotabogor.go.id/', 1, 4, '2024-05-31 03:27:45', '2024-05-31 03:27:45');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dokumen`
--
ALTER TABLE `dokumen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `halaman`
--
ALTER TABLE `halaman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pimpinan`
--
ALTER TABLE `pimpinan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `program_unggulan`
--
ALTER TABLE `program_unggulan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sosial`
--
ALTER TABLE `sosial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `submenu`
--
ALTER TABLE `submenu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agenda`
--
ALTER TABLE `agenda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `album`
--
ALTER TABLE `album`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `dokumen`
--
ALTER TABLE `dokumen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `halaman`
--
ALTER TABLE `halaman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pimpinan`
--
ALTER TABLE `pimpinan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `program_unggulan`
--
ALTER TABLE `program_unggulan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sosial`
--
ALTER TABLE `sosial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `submenu`
--
ALTER TABLE `submenu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
