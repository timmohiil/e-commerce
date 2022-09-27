-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Sep 2022 pada 11.52
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ibroart`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nama_lengkap` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `nama_lengkap`) VALUES
(2, 'vcm', '12345', 'Visi Catur Mitra');

-- --------------------------------------------------------

--
-- Struktur dari tabel `blog`
--

CREATE TABLE `blog` (
  `id_blog` int(11) NOT NULL,
  `judul_blog` varchar(100) NOT NULL,
  `artikel_blog` mediumtext NOT NULL,
  `foto_blog` varchar(100) NOT NULL,
  `kategori_blog` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `blog`
--

INSERT INTO `blog` (`id_blog`, `judul_blog`, `artikel_blog`, `foto_blog`, `kategori_blog`) VALUES
(11, 'PT. VISI CATUR MITRA (VCM)', 'PT.VISI CATUR MITRA (VCM)was established in  Cilegon on July 2010 for supporting many kinds of industrial Plant, such as Petrochemical, Oil & Gas, Mining, Power Plants and General industries, especially in Indonesia.Various of customers target are: Plant Owner, Main Contractor (EPC), Sub Contractor (Vendor Specialist), Trading Company, or Equal Level Company.The company operation is supported by chosen personnels from various types of business activities which have skill, experience, and widely network for more than 10 years in their respective fields.The company’s goal is to achieve customer ‘s satisfactory with following compliances: competitive, professionalism, and quality.\r\nOur VisionBecome  a  reputable  national  company  with  fulfillment  capability  toachieve   customer’s   satisfactory   in   respective   field   of   company’sbusinesses for supporting many kinds of industrial plant.Our Mission1.  Provide  competitive  and  wide  variety  of  business  for  supportingmany kinds of industries.2.  Become  a  synergy  company  with  high  quality  performance  toachieve customer’s satisfactory.3.  Give advantage point for both customer and company.4.  Business continuity with customer.Our Strategy & Motto“Customer’sSatisfactoryis ourGoal”To achieve the eagerly, the company committed to implement value ofCompetitiveTo offer competitive price, but reasonable.ProfessionalismTo  work  with  good  planning,  management,  execution,  controlling,quickly  resolution,  safety  workingmethod  with  zero  accident  target,excellent integrity, ethics, responsibility, and team work motto.QualityTo serve with high quality performance and result as priority to meetcustomer’s   requirements,   no   delayed   schedule,   effectively   andefficiency in every activity and work.\r\n', 'Sticker', 'Logo.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cetak`
--

CREATE TABLE `cetak` (
  `id_cetak` int(11) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `jumlah_cetak` varchar(100) NOT NULL,
  `foto_produk` varchar(100) NOT NULL,
  `bahan_cetak` varchar(100) NOT NULL,
  `ukuran_cetak` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `cetak`
--

INSERT INTO `cetak` (`id_cetak`, `nama_produk`, `jumlah_cetak`, `foto_produk`, `bahan_cetak`, `ukuran_cetak`) VALUES
(13, 'pin', '200', 'logo-ai-ori.png', 'plastik pin', '9 x 5');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ongkir`
--

CREATE TABLE `ongkir` (
  `id_ongkir` int(5) NOT NULL,
  `nama_kota` varchar(100) NOT NULL,
  `tarif` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ongkir`
--

INSERT INTO `ongkir` (`id_ongkir`, `nama_kota`, `tarif`) VALUES
(1, 'Indramayu', 20000),
(2, 'Jombang', 25000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `operator`
--

CREATE TABLE `operator` (
  `id_operator` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `operator`
--

INSERT INTO `operator` (`id_operator`, `username`, `password`, `nama_lengkap`) VALUES
(1, 'apriyani', '12345', 'indra apriyani');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `email_pelanggan` varchar(100) NOT NULL,
  `nama_pelanggan` varchar(20) NOT NULL,
  `password_pelanggan` varchar(20) NOT NULL,
  `telepon_pelanggan` varchar(20) NOT NULL,
  `alamat_pelanggan` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `email_pelanggan`, `nama_pelanggan`, `password_pelanggan`, `telepon_pelanggan`, `alamat_pelanggan`) VALUES
(1, 'jajal@gmail.com', 'jajal', '12345', '085806028654', 'jl.majasari desa majasari kec.Sliyeg kab.Indramayu'),
(2, 'jainudin123@gmail.com', 'jainudin', 'qwerty97', '087756666135', 'Blok.Prapatan RT: 07 RW: 01 desa.sukagumiwang Kec.sukagumiwang Kab.Indramayu'),
(3, 'dasuki23@gmail.com', 'dasuki', '1943672', '085876245913', 'desa. legok blok slaur RT:13 Rw:02 kec.lohbener indramayu'),
(4, 'hardian@gmail.com', 'hardian', '12345678', '087678564324', 'Jl. Haurgeulis - Patrol, Anjatan Utara, Kec. Anjatan, Kabupaten Indramayu, Jawa Barat 45256'),
(5, 'arifinsetiananto@gmail.com', 'arifin', '4321', '08953214567', 'Jl. Raya Pu Saradan No.Desa, Sekarmulya, Kec. Gabuswetan, Kabupaten Indramayu, Jawa Barat 45263'),
(6, 'marjuli45@gmail.com', 'markuli', 'imaginer', '0858762564172', 'Jl. Olah Raga No.45, Karanganyar, Kec. Indramayu, Kabupaten Indramayu, Jawa Barat 45213'),
(7, 'dwi123@gmail.com', 'dwi komalasari', '12345678', '0877596324512', 'G8F5+M4M, Jl. Siliwangi, Jatibarang Baru, Kec. Jatibarang, Kabupaten Indramayu, Jawa Barat 45273'),
(19, 'jajang22@gmail.com', 'jajang', '19terate22', '087858734654', 'desa.sukamulya blok.talun kec.tukdana indramayu'),
(27, 'apriyantosuroso@gmail.com', 'suroso apriyanto', '12345678', '08983215894', 'blok.telaga rt:06 Rw:02 des.kalianyar kec.krangkeng indramayu'),
(31, 'sudirman87@gmail.com', 'sudirman', '1984abc', '087785564925', 'blok buyut desa gadingan kec.sliyeg indramayu'),
(36, 'dewifitriani@gmail.com', 'dewi fitriani', 'dewifitriani', '085807654135', 'Jl. MT Haryono No.2, Sindang, Kec. Sindang, Kabupaten Indramayu, Jawa Barat 45222'),
(37, 'rahmarahma@gmail.com', 'rahmawati', 'rahma', '08567891354', 'J8Q3+8X9, Panyindangan Wetan, Kec. Sindang, Kabupaten Indramayu, Jawa Barat 45225'),
(39, 'mugywaradluffy@gmail.com', 'luffy', 'onepiece', '089654372816', '9CCX+WXQ, Panguragan Kulon, Kec. Panguragan, Kabupaten Cirebon, Jawa Barat 45163'),
(40, 'dulkarim123@gmail.com', 'dulkarim', 'duldulkarim', '085732561746', '9FH5+PCC, Bl. Satu, Panguragan Lor, Kec. Panguragan, Kabupaten Cirebon, Jawa Barat 45163'),
(41, 'supriyadi@gmail.com', 'suriadi', '12345678', '+62 898-6197-726', '9FH5+PCC, Bl. Satu, Panguragan Lor, Kec. Panguragan, Kabupaten Cirebon, Jawa Barat 45163'),
(42, 'shakilah43@gmail.com', 'shakila', '321456', '+62 831-4849-4115', 'Jl. Raya Patrol - Anjatan, blok bunder No.48, Patrol, Kec. Patrol, Kabupaten Indramayu, Jawa Barat 45257'),
(43, 'larasati@gmail.com', 'tiara larasati', 'tiara123', '+62 819-3973-8369', 'Jl. Babar Layar III, RT.06/RW.02, Terusan, Kec. Sindang, Kabupaten Indramayu, Jawa Barat 45222'),
(44, 'arifarif@gmail.com', 'moh.arif', 'arif321', '+62 838-2451-6297', 'Jl. Otto Iskandardinata, Cisaga, Kec. Cibogo, Kabupaten Subang, Jawa Barat 41285'),
(45, 'cakimansinaga@gmail.com', 'cakiman sinaga', '12345678', '+62 838-2227-4432', 'Jl. Palabuan No.85, Sukamelang, Kec. Subang, Kabupaten Subang, Jawa Barat 41211'),
(46, 'fififitriani@gmail.com', 'fifi fitriani', '12345678', '+62 877-6109-1282', 'FQ6G+FG3, Jl. Raya Pramuka, Sukamelang, Kec. Subang, Kabupaten Subang, Jawa Barat 41211'),
(47, 'sellawidia@gmail.com', 'sella widiawati', 'sella231', '+62 895-0643-7725', 'Jl. Brawijaya No.07, Kadipaten, Kec. Kadipaten, Kabupaten Majalengka, Jawa Barat 45452'),
(48, 'supriadi@gmail.com', 'supriadi', '1943672', '+62 812-2302-258', 'Pranggong, Kec. Arahan, Kabupaten Indramayu, Jawa Barat 45365'),
(49, 'sitiaminah@gmail.com', 'siti aminah', 'sitiaminah', '+62 812-2302-258', 'GFG5+MXG, Unnamed Road, Karangampel Kidul, Kec. Karangampel, Kabupaten Indramayu, Jawa Barat 45283'),
(50, 'fajrianti@gmail.com', 'fajrianti', 'fajriah123', '087678564324', 'J47V+356, Muntur, Kec. Losarang, Kabupaten Indramayu, Jawa Barat 45253'),
(51, 'muhammadhardian@gmail.com', 'muhammad ahrdian', '12345678', '085876245913', 'J9PP+W62, Jalan Raya, Balongan, Indramayu Regency, West Java 45217'),
(52, 'wartoni@gmail.com', 'wartoni', '12345678', '+62 877-2570-7571', 'Jl. Jend. Sudirman No.151, Singajaya, Kec. Indramayu, Kabupaten Indramayu, Jawa Barat 45218'),
(53, 'kharisma13@gmail.com', 'kharisma muhammad', 'kharisma', '+62 812-2302-258', 'Unnamed Road, Sukasari, Kec. Arahan, Kabupaten Indramayu, Jawa Barat 45365'),
(54, 'lucymuh123@gmail.com', 'luky muhammad', 'lucy123', '+62 877-2570-7571', 'H7H3+C2F, Jl. Larangan - Lelea, Tamansari, Kec. Lelea, Kabupaten Indramayu, Jawa Barat 45261'),
(55, 'handoyo31@GMAIL.COM', 'handoyo', 'QWERTY', '+62 896-6084-8418', '999M+Q6V, Raya Susukan, Bojong Kulon, Kec. Susukan, Kabupaten Cirebon, Jawa Barat 45166'),
(56, 'TAUFIK@GMAIL.COM', 'TAUFIK', '12345', '+62 877-2570-7571', 'Jl. Siliwangi No. 31, Dekat Stasiun No.9, Jatibarang, Kec. Jatibarang, Kabupaten Indramayu, Jawa Barat 45273'),
(57, 'SOFYAN76@GMAIL.COM', 'SOFYAN', 'QWERTY', '+62 812-1785-0400', 'Jl. Tulungagung, Kec. Kertasemaya, Kabupaten Indramayu, Jawa Barat 45274'),
(58, 'TOYIB123@GMAIL.COM', 'TOYIB', '12345678', '087678564324', 'FFGV+2XW, Unnamed Road, Singakerta, Kec. Krangkeng, Kabupaten Indramayu, Jawa Barat 45284'),
(59, 'AYUFITRIANI@GMAIL.COM', 'AYU FITRIANI', '12345678', '+62 821-1873-1369', 'Jl. Neglasari, Banjarsari, Kacamatan Banjarsari, Kabupaten Ciamis, Jawa Barat 46383'),
(60, 'ANNISA123@GMAIL.CM', 'SIRLY ANNISA', '12345678', '+62 882-2430-1471', 'Jl. Jatitengah, Kec. Jatitujuh, Kabupaten Majalengka, Jawa Barat 45458');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `id_pembelian` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `bank` varchar(100) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `bukti` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `id_pembelian`, `nama`, `bank`, `jumlah`, `tanggal`, `bukti`) VALUES
(27, 141, 'indra', 'BRI', 25000, '2022-08-14', '20220814055710'),
(28, 140, 'indra', 'BRI', 540000, '2022-08-14', '20220814055810'),
(29, 139, 'indra', 'BRI', 12000, '2022-08-14', '20220814060100'),
(30, 138, 'indra', 'BRI', 12500, '2022-08-14', '20220814060221'),
(31, 107, 'indra', 'BRI', 30000, '2022-08-14', '20220814060344'),
(32, 107, 'indra', 'BRI', 30000, '2022-08-14', '20220814074242'),
(33, 99, '', '', 0, '2022-08-17', '20220817153620'),
(34, 100, '', '', 0, '2022-08-17', '20220817154300'),
(35, 99, '', '', 0, '2022-08-17', '20220817154436'),
(36, 99, 'indra', 'stiker', 100, '2022-08-17', '20220817154631');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembelian`
--

CREATE TABLE `pembelian` (
  `id_pembelian` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `id_ongkir` int(11) NOT NULL,
  `tanggal_pembelian` date NOT NULL,
  `total_pembelian` int(11) NOT NULL,
  `nama_kota` varchar(100) NOT NULL,
  `tarif` int(11) NOT NULL,
  `alamat_pengiriman` text NOT NULL,
  `status_pembelian` varchar(100) NOT NULL DEFAULT 'Menunggu dikonfirmasi'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pembelian`
--

INSERT INTO `pembelian` (`id_pembelian`, `id_pelanggan`, `id_ongkir`, `tanggal_pembelian`, `total_pembelian`, `nama_kota`, `tarif`, `alamat_pengiriman`, `status_pembelian`) VALUES
(98, 9, 0, '2022-06-12', 246000, '', 0, 'patrol', 'sedang di proses'),
(99, 2, 0, '2022-06-18', 24000, '', 0, 'sukagumiwang', 'cancel'),
(100, 4, 0, '2022-06-20', 15000, '', 0, 'anjatan', 'sedang di proses'),
(101, 5, 0, '2022-06-21', 232000, '', 0, 'gabus wetan', 'sedang di proses'),
(102, 8, 0, '2022-06-21', 500, '', 0, 'cirebon', 'selesai'),
(103, 6, 0, '2022-06-21', 200000, '', 0, 'indramayu', 'sedang di proses'),
(104, 6, 0, '2022-06-22', 1000, '', 0, 'indramayu', 'sedang di proses'),
(105, 16, 0, '2022-06-22', 15000, '', 0, 'pertamina', 'selesai'),
(106, 16, 0, '2022-06-23', 12000, '', 0, 'pertamina', 'selesai'),
(107, 1, 0, '2022-06-23', 30000, '', 0, 'majasari', 'selesai'),
(108, 14, 0, '2022-06-23', 4000, '', 0, 'karangampel', 'selesai'),
(109, 26, 0, '2022-06-24', 2000, '', 0, 'kertasmaya', 'selesai'),
(110, 24, 0, '2022-06-25', 200000, '', 0, 'telering', 'selesai'),
(111, 27, 0, '2022-06-25', 15000, '', 0, 'krangkeng', 'selesai'),
(112, 22, 0, '2022-06-26', 12000, '', 0, 'yoyga indramayu', 'selesai'),
(113, 31, 0, '2022-06-27', 12000, '', 0, 'gadingan', 'selesai'),
(114, 10, 0, '2022-06-27', 200000, '', 0, 'bolang adventure', 'selesai'),
(115, 13, 0, '2022-06-29', 72000, '', 0, 'arahan', 'selesai'),
(116, 21, 0, '2022-06-27', 12000, '', 0, 'lelea', 'selesai'),
(117, 27, 0, '2022-06-28', 15000, '', 0, 'krangkeng', 'selesai'),
(118, 17, 0, '2022-06-29', 15000, '', 0, 'vivo telering', 'selesai'),
(119, 3, 0, '2022-07-01', 12000, '', 0, 'lohbener', 'selesai'),
(120, 2, 0, '2022-07-03', 15000, '', 0, 'sukagumiwang', 'selesai'),
(121, 20, 0, '2022-07-03', 12000, '', 0, 'majantara arahan', 'selesai'),
(122, 7, 0, '2022-07-04', 15000, '', 0, 'jatibarang', 'selesai'),
(123, 15, 0, '2022-07-04', 12000, '', 0, 'losarang', 'selesai'),
(124, 11, 0, '2022-07-04', 12000, '', 0, 'subang', 'selesai'),
(125, 8, 0, '2022-07-05', 12000, '', 0, 'cirebon', 'selesai'),
(126, 27, 0, '2022-07-06', 12000, '', 0, 'krangkeng', 'selesai'),
(127, 29, 0, '2022-07-06', 500, '', 0, 'jati tujuh', 'selesai'),
(128, 12, 0, '2022-07-07', 14000, '', 0, 'majalengka', 'selesai'),
(129, 8, 0, '2022-07-06', 24000, '', 0, 'cirebon', 'selesai'),
(130, 11, 0, '2022-07-06', 12000, '', 0, 'subang', 'selesai'),
(131, 11, 0, '2022-07-07', 12000, '', 0, 'subang', 'selesai'),
(132, 21, 0, '2022-07-08', 15000, '', 0, 'lelea', 'selesai'),
(133, 7, 0, '2022-07-08', 12000, '', 0, 'jatibarang', 'selesai'),
(134, 19, 0, '2022-07-09', 1000, '', 0, 'tukdana', 'selesai'),
(135, 28, 0, '2022-07-10', 12000, '', 0, 'banjarsari', 'selesai'),
(136, 23, 0, '2022-07-11', 12000, '', 0, 'arjawinangun', 'selesai'),
(137, 23, 0, '2022-07-12', 12000, '', 0, 'arjawinangun', 'selesai'),
(138, 1, 0, '2022-07-27', 12500, '', 0, 'jl. mjasari blok prapatan desa. majasih kec sliyeg indramayu', 'selesai'),
(139, 1, 0, '2022-07-27', 12000, '', 0, '', 'sedang di proses'),
(140, 1, 0, '2022-08-12', 540000, '', 0, 'jl.majasari sliyeg des.majasih rt:13/rw:02 kec sliyeg indramayu\r\n', 'sedang di proses'),
(141, 1, 0, '2022-08-14', 25000, '', 0, 'JL MAJASARI RT;13 RW;02 DESA MAJASIH KEC. SLIYEG INDRAMAYU', 'sedang di proses'),
(142, 1, 0, '2022-08-14', 200000, '', 0, 'JL MAJASARI RT;13 RW;02 DESA MAJASIH KEC. SLIYEG INDRAMAYU', 'Menunggu dikonfirmasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembelian_product`
--

CREATE TABLE `pembelian_product` (
  `id_pembelian_product` int(11) NOT NULL,
  `id_pembelian` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `jumlah_pembelian` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `berat` int(11) NOT NULL,
  `sub_berat` int(11) NOT NULL,
  `sub_harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pembelian_product`
--

INSERT INTO `pembelian_product` (`id_pembelian_product`, `id_pembelian`, `id_product`, `jumlah_pembelian`, `nama`, `harga`, `berat`, `sub_berat`, `sub_harga`) VALUES
(49, 63, 37, 1, 'flyer/lembar', 120000, 500, 500, 120000),
(50, 64, 38, 1, 'Id  Card', 200000, 500, 500, 200000),
(51, 65, 37, 1, 'Bussines Card', 120000, 500, 1000, 240000),
(52, 65, 38, 2, 'Id  Card', 200000, 500, 1000, 400000),
(53, 66, 37, 1, 'Kop Surat', 120000, 500, 500, 120000),
(54, 67, 39, 1, 'Kop Surat', 600000, 500, 500, 600000),
(55, 68, 41, 1, 'Bussines Card', 500000, 500, 500, 500000),
(56, 69, 37, 1, 'flyer/lembar', 120000, 500, 500, 120000),
(57, 70, 37, 1, 'Kop Surat', 120000, 500, 500, 120000),
(58, 71, 37, 1, 'Kop Surat', 120000, 500, 500, 120000),
(59, 71, 80, 1, 'Media Indor', 200000, 500, 500, 200000),
(60, 71, 80, 1, 'Media Indor', 500000, 500, 500, 500000),
(61, 72, 81, 1, 'mug/ gelas ', 120000, 500, 500, 120000),
(62, 73, 37, 2, 'flyer/lembar', 120000, 500, 1000, 240000),
(63, 74, 80, 1, 'Media Indor', 600000, 500, 500, 600000),
(64, 74, 37, 1, 'Kop Surat', 120000, 500, 500, 120000),
(65, 75, 80, 1, 'Media Indor', 200000, 500, 500, 200000),
(66, 76, 38, 1, 'flyer/lembar', 200000, 500, 500, 200000),
(67, 77, 37, 1, 'Id  Card', 120000, 500, 500, 120000),
(68, 78, 81, 1, 'mug/ gelas ', 120000, 500, 500, 120000),
(69, 79, 81, 1, 'mug/ gelas ', 200000, 500, 500, 200000),
(70, 80, 38, 1, 'Id  Card', 200000, 500, 500, 200000),
(71, 81, 81, 1, 'mug/ gelas ', 120000, 500, 500, 120000),
(72, 82, 37, 1, 'Bussines Card', 120000, 500, 500, 120000),
(73, 83, 80, 4, 'Media Indor', 200000, 500, 2000, 800000),
(74, 84, 38, 2, 'zoro Sam', 200000, 500, 500, 200000),
(75, 84, 37, 1, 'kucing', 120000, 500, 500, 120000),
(76, 84, 39, 1, 'kucing21', 600000, 500, 500, 600000),
(77, 84, 41, 1, 'zoro zoro', 500000, 500, 500, 500000),
(78, 85, 60, 2, '19 TERATE 22', 500000, 500, 500, 500000),
(79, 85, 61, 1, 'BAKAYARO', 600000, 500, 500, 600000),
(80, 85, 65, 1, 'DUA', 700000, 500, 500, 700000),
(81, 85, 68, 1, 'LIMA', 400000, 500, 500, 400000),
(82, 86, 62, 1, 'SANA SINI', 700000, 500, 500, 700000),
(83, 86, 63, 1, '19 TERATE 22', 800000, 500, 500, 800000),
(84, 87, 61, 1, 'BAKAYARO', 600000, 500, 500, 600000),
(85, 88, 61, 1, 'BAKAYARO', 600000, 500, 500, 600000),
(86, 89, 63, 1, '19 TERATE 22', 800000, 500, 500, 800000),
(87, 89, 66, 1, 'TIGA', 850000, 700, 700, 850000),
(88, 90, 62, 1, 'SANA SINI', 700000, 500, 500, 700000),
(89, 91, 61, 1, 'BAKAYARO', 600000, 500, 500, 600000),
(90, 92, 62, 1, 'SANA SINI', 700000, 500, 500, 700000),
(91, 93, 60, 1, '19 TERATE 22', 500000, 500, 500, 500000),
(92, 94, 73, 1, 'SEPULUH', 500000, 500, 500, 500000),
(93, 95, 72, 3, 'SEMBILAN', 600000, 500, 1500, 1800000),
(94, 96, 74, 3, 'undangan pernikahan', 500000, 500, 1500, 1500000),
(95, 97, 61, 1, 'BAKAYARO', 600000, 500, 500, 600000),
(96, 98, 78, 1, 'Bussines Card', 15000, 1, 1, 15000),
(97, 98, 79, 1, 'Kop Surat', 1000, 3, 3, 1000),
(98, 98, 80, 1, 'Media Indor', 200000, 2000, 2000, 200000),
(99, 98, 81, 1, 'mug/ gelas ', 30000, 200, 200, 30000),
(100, 99, 77, 2, 'Id  Card', 12000, 20, 40, 24000),
(101, 100, 78, 1, 'Bussines Card', 15000, 1, 1, 15000),
(102, 101, 84, 1, 'sertificate', 3500, 3, 3, 3500),
(103, 101, 76, 1, 'flyer/lembar', 500, 1, 1, 500),
(104, 101, 77, 1, 'Id  Card', 12000, 20, 20, 12000),
(105, 101, 78, 1, 'Bussines Card', 15000, 1, 1, 15000),
(106, 101, 79, 1, 'Kop Surat', 1000, 3, 3, 1000),
(107, 101, 80, 1, 'Media Indor', 200000, 2000, 2000, 200000),
(108, 102, 76, 1, 'flyer/lembar', 500, 1, 1, 500),
(109, 103, 80, 1, 'Media Indor', 200000, 2000, 2000, 200000),
(110, 104, 79, 1, 'Kop Surat', 1000, 3, 3, 1000),
(111, 105, 78, 1, 'Bussines Card', 15000, 1, 1, 15000),
(112, 106, 77, 1, 'Id  Card', 12000, 20, 20, 12000),
(113, 107, 81, 1, 'mug/ gelas ', 30000, 200, 200, 30000),
(114, 108, 83, 2, 'pin', 2000, 10, 20, 4000),
(115, 109, 83, 1, 'pin', 2000, 10, 10, 2000),
(116, 110, 80, 1, 'Media Indor', 200000, 2000, 2000, 200000),
(117, 111, 78, 1, 'Bussines Card', 15000, 1, 1, 15000),
(118, 112, 77, 1, 'Id  Card', 12000, 20, 20, 12000),
(119, 113, 77, 1, 'Id  Card', 12000, 20, 20, 12000),
(120, 114, 80, 1, 'Media Indor', 200000, 2000, 2000, 200000),
(121, 115, 81, 2, 'mug/ gelas ', 30000, 200, 200, 30000),
(122, 115, 77, 1, 'Id  Card', 12000, 20, 20, 12000),
(123, 116, 77, 1, 'Id  Card', 12000, 20, 20, 12000),
(124, 117, 78, 1, 'Bussines Card', 15000, 1, 1, 15000),
(125, 118, 78, 1, 'Bussines Card', 15000, 1, 1, 15000),
(126, 119, 77, 1, 'Id  Card', 12000, 20, 20, 12000),
(127, 120, 78, 1, 'Bussines Card', 15000, 1, 1, 15000),
(128, 121, 77, 1, 'Id  Card', 12000, 20, 20, 12000),
(129, 122, 78, 1, 'Bussines Card', 15000, 1, 1, 15000),
(130, 123, 77, 1, 'Id  Card', 12000, 20, 20, 12000),
(131, 124, 77, 1, 'Id  Card', 12000, 20, 20, 12000),
(132, 125, 77, 1, 'Id  Card', 12000, 20, 20, 12000),
(133, 126, 77, 1, 'Id  Card', 12000, 20, 20, 12000),
(134, 127, 76, 1, 'flyer/lembar', 500, 1, 1, 500),
(135, 128, 83, 1, 'pin', 2000, 10, 10, 2000),
(136, 128, 77, 1, 'Id  Card', 12000, 20, 20, 12000),
(137, 129, 77, 2, 'Id  Card', 12000, 20, 40, 24000),
(138, 130, 77, 1, 'Id  Card', 12000, 20, 20, 12000),
(139, 131, 77, 1, 'Id  Card', 12000, 20, 20, 12000),
(140, 132, 78, 1, 'Bussines Card', 15000, 1, 1, 15000),
(141, 133, 77, 1, 'Id  Card', 12000, 20, 20, 12000),
(142, 134, 79, 1, 'Kop Surat', 1000, 3, 3, 1000),
(143, 135, 77, 1, 'Id  Card', 12000, 20, 20, 12000),
(144, 136, 77, 1, 'Id  Card', 12000, 20, 20, 12000),
(145, 137, 77, 1, 'Id  Card', 12000, 20, 20, 12000),
(146, 138, 76, 1, 'flyer/lembar', 500, 1, 1, 500),
(147, 138, 77, 1, 'Id  Card', 12000, 20, 20, 12000),
(148, 139, 77, 1, 'Id  Card', 12000, 20, 20, 12000),
(149, 140, 77, 20, 'Id  Card', 12000, 20, 400, 240000),
(150, 140, 78, 20, 'Bussines Card', 15000, 1, 20, 300000),
(151, 141, 76, 50, 'flyer/lembar', 500, 1, 50, 25000),
(152, 142, 80, 1, 'Media Indor', 200000, 2000, 2000, 200000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `product`
--

CREATE TABLE `product` (
  `id_product` int(11) NOT NULL,
  `nama_product` varchar(20) NOT NULL,
  `harga_product` int(11) NOT NULL,
  `berat_product` int(11) NOT NULL,
  `foto_product` varchar(100) NOT NULL,
  `ukuran_product` varchar(20) NOT NULL,
  `jenis_bahan` varchar(100) NOT NULL,
  `deskripsi_product` mediumtext NOT NULL,
  `kategori_product` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `product`
--

INSERT INTO `product` (`id_product`, `nama_product`, `harga_product`, `berat_product`, `foto_product`, `ukuran_product`, `jenis_bahan`, `deskripsi_product`, `kategori_product`) VALUES
(76, 'flyer/lembar', 500, 1, 'flayer.jpg', 'A5', 'HVS', '', 'Famleat Leaflet / Flayer Brosur'),
(77, 'Id  Card', 12000, 20, 'id card.jpg', '86 x 54', 'plastik', '', 'Stopmap Kartu Nama Id Card'),
(78, 'Bussines Card', 15000, 1, 'kartu nama.jpg', '9 x 5', 'art karton', '', 'Stopmap Kartu Nama Id Card'),
(79, 'Kop Surat', 1000, 3, 'kop surat.jpg', 'A4', 'HVS 80 GMS', '', 'Kop Surat/Label Amplop'),
(80, 'Media Indor', 200000, 2000, 'media indoor.webp', '60 X 160', 'banner viber', '', 'Display Room Indoor / Outdoor'),
(81, 'mug/ gelas ', 30000, 200, 'mug.webp', '10 X 15', 'kaca', '', 'Pin & Mug'),
(83, 'pin', 2000, 10, 'pin.jpg', 'Tebal 3', 'Dof laminating', '', 'Pin & Mug'),
(84, 'sertificate', 3500, 3, 'sertifikat.jpg', 'A4', 'HVS 80 GMS', '', 'Book Certificate'),
(85, 'Raw Material', 2147483647, 2147483647, '1.jpg', '21787216872', 'banyu', 'ehwuuewufwhpiq', 'Sticker');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id_blog`);

--
-- Indeks untuk tabel `cetak`
--
ALTER TABLE `cetak`
  ADD PRIMARY KEY (`id_cetak`);

--
-- Indeks untuk tabel `ongkir`
--
ALTER TABLE `ongkir`
  ADD PRIMARY KEY (`id_ongkir`);

--
-- Indeks untuk tabel `operator`
--
ALTER TABLE `operator`
  ADD PRIMARY KEY (`id_operator`);

--
-- Indeks untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indeks untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indeks untuk tabel `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`id_pembelian`),
  ADD UNIQUE KEY `id_pembelian` (`id_pembelian`);

--
-- Indeks untuk tabel `pembelian_product`
--
ALTER TABLE `pembelian_product`
  ADD PRIMARY KEY (`id_pembelian_product`);

--
-- Indeks untuk tabel `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_product`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `blog`
--
ALTER TABLE `blog`
  MODIFY `id_blog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `cetak`
--
ALTER TABLE `cetak`
  MODIFY `id_cetak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `ongkir`
--
ALTER TABLE `ongkir`
  MODIFY `id_ongkir` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `operator`
--
ALTER TABLE `operator`
  MODIFY `id_operator` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT untuk tabel `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `id_pembelian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=143;

--
-- AUTO_INCREMENT untuk tabel `pembelian_product`
--
ALTER TABLE `pembelian_product`
  MODIFY `id_pembelian_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=153;

--
-- AUTO_INCREMENT untuk tabel `product`
--
ALTER TABLE `product`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
