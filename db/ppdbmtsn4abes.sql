-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2022 at 05:39 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppdbmtsn4abes`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_berkas`
--

CREATE TABLE `tbl_berkas` (
  `id_berkas` int(11) NOT NULL,
  `id_siswa` int(11) DEFAULT NULL,
  `id_lampiran` int(2) DEFAULT NULL,
  `ket_berkas` varchar(255) DEFAULT NULL,
  `berkas` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_lampiran`
--

CREATE TABLE `tbl_lampiran` (
  `id_lampiran` int(2) NOT NULL,
  `lampiran` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_lampiran`
--

INSERT INTO `tbl_lampiran` (`id_lampiran`, `lampiran`) VALUES
(1, 'Kartu Keluarga (KK)'),
(2, 'Ijazah'),
(4, 'KTP'),
(5, 'Akte Kelahiran');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_panitia`
--

CREATE TABLE `tbl_panitia` (
  `id_panitia` int(11) NOT NULL,
  `nama_panitia` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `telepon_panitia` varchar(12) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_panitia`
--

INSERT INTO `tbl_panitia` (`id_panitia`, `nama_panitia`, `email`, `telepon_panitia`, `password`, `foto`) VALUES
(4, 'Atika', 'a.fadhluna@mhs.unsyiah.ac.id', '081131769067', '123456', '1656720070_1e8d15a55317493b488c.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pekerjaan`
--

CREATE TABLE `tbl_pekerjaan` (
  `id_pekerjaan` int(2) NOT NULL,
  `pekerjaan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pekerjaan`
--

INSERT INTO `tbl_pekerjaan` (`id_pekerjaan`, `pekerjaan`) VALUES
(1, 'Tidak Bekerja'),
(2, 'Pensiunan'),
(6, 'TNI AD');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_siswa`
--

CREATE TABLE `tbl_siswa` (
  `id_siswa` int(11) NOT NULL,
  `no_pendaftaran` varchar(12) DEFAULT NULL,
  `tgl_pendaftaran` date DEFAULT NULL,
  `nama_siswa` varchar(255) DEFAULT NULL,
  `nisn` int(10) DEFAULT NULL,
  `telepon_siswa` varchar(12) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(12) CHARACTER SET latin1 DEFAULT NULL,
  `tempat_lahir` varchar(255) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `alamat_rumah` varchar(255) DEFAULT NULL,
  `nama_ayah` varchar(255) DEFAULT NULL,
  `nama_ibu` varchar(255) DEFAULT NULL,
  `no_ortu` varchar(12) DEFAULT NULL,
  `sekolah_asal` varchar(255) DEFAULT NULL,
  `akte_kelahiran` varchar(255) DEFAULT NULL,
  `pas_photo` varchar(255) DEFAULT NULL,
  `nilai_ujian` int(3) DEFAULT 0,
  `status_pendaftaran` int(1) DEFAULT 0,
  `status_ppdb` int(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_siswa`
--

INSERT INTO `tbl_siswa` (`id_siswa`, `no_pendaftaran`, `tgl_pendaftaran`, `nama_siswa`, `nisn`, `telepon_siswa`, `password`, `jenis_kelamin`, `tempat_lahir`, `tgl_lahir`, `alamat_rumah`, `nama_ayah`, `nama_ibu`, `no_ortu`, `sekolah_asal`, `akte_kelahiran`, `pas_photo`, `nilai_ujian`, `status_pendaftaran`, `status_ppdb`) VALUES
(73, '202207180001', '2022-07-18', 'Roslinawati', 12345678, '081260741115', '12345678', 'P', 'bukloh', '2008-05-09', 'aaaaaa', 'aaaaa', 'tttttt', 'sssss', 'dffggg', '1658389076_0fd4445360748505754e.jpg', '1658389076_6a4667f21f1d32c3a316.jpeg', 0, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_soal`
--

CREATE TABLE `tbl_soal` (
  `id_soal` int(5) NOT NULL,
  `text_soal` text DEFAULT NULL,
  `opsi_a` text DEFAULT NULL,
  `opsi_b` text DEFAULT NULL,
  `opsi_c` text DEFAULT NULL,
  `opsi_d` text DEFAULT NULL,
  `kunci_jawaban` varchar(255) DEFAULT NULL,
  `created_soal` date DEFAULT NULL,
  `update_soal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_soal`
--

INSERT INTO `tbl_soal` (`id_soal`, `text_soal`, `opsi_a`, `opsi_b`, `opsi_c`, `opsi_d`, `kunci_jawaban`, `created_soal`, `update_soal`) VALUES
(3, '                                                                                                                                    <p><span style=\"color: rgb(50, 50, 51); font-family: &quot;Open Sans&quot;, arial, sans-serif;\">Berilah tanda silang (x) didepan huruf a,b, c atau d didepan jawaban yang benar !</span></p>                                                                                                                        ', '                                                                                                                                                <p><span style=\"color: rgb(50, 50, 51); font-family: &quot;Open Sans&quot;, arial, sans-serif;\">6 buah</span></p>                                                                                                                                    ', '                                                                                                                                                <p>8 buah</p>                                                                                                                                    ', '                                                                                                                                                <p>7 buah</p>                                                                                                                                    ', '                                                                                                                                                <p>4 buah</p>                                                                                                                                    ', 'B', '2022-07-11', '2022-07-11');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ta`
--

CREATE TABLE `tbl_ta` (
  `id_ta` int(11) NOT NULL,
  `tahun` year(4) DEFAULT NULL,
  `ta` varchar(25) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_ta`
--

INSERT INTO `tbl_ta` (`id_ta`, `tahun`, `ta`, `status`) VALUES
(5, 2020, '2020/2021', 1),
(6, 2021, '2021/2022', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `telepon` varchar(12) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nama_user`, `email`, `telepon`, `password`, `foto`) VALUES
(14, 'admin', 'admin@gmail.com', '081131769011', '12345', '1654407180_4caab0c600e108c10f56.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_web`
--

CREATE TABLE `tbl_web` (
  `id_setting` int(11) NOT NULL,
  `nsm` varchar(255) DEFAULT NULL,
  `npsn` varchar(255) DEFAULT NULL,
  `nama_sekolah` varchar(255) DEFAULT NULL,
  `jenjang_sekolah` varchar(255) DEFAULT NULL,
  `status_sekolah` varchar(255) DEFAULT NULL,
  `alamat_lengkap` text DEFAULT NULL,
  `provinsi` varchar(255) DEFAULT NULL,
  `kabupaten` varchar(255) DEFAULT NULL,
  `kecamatan` varchar(255) DEFAULT NULL,
  `telepon_sekolah` varchar(12) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `peta` text DEFAULT NULL,
  `nama_kepsek` varchar(255) DEFAULT NULL,
  `nip_kepsek` text DEFAULT NULL,
  `ttd_kepsek` varchar(255) DEFAULT NULL,
  `logo_sekolah` varchar(255) DEFAULT NULL,
  `nama_ketua` varchar(255) DEFAULT NULL,
  `nip_ketua` text DEFAULT NULL,
  `ttd_ketua` varchar(255) DEFAULT NULL,
  `tahun_ajaran` varchar(255) DEFAULT NULL,
  `beranda` text DEFAULT NULL,
  `keterangan_print` text DEFAULT NULL,
  `info_ujian` text DEFAULT NULL,
  `tahapan1` text DEFAULT NULL,
  `tahapan2` text DEFAULT NULL,
  `tahapan3` text DEFAULT NULL,
  `tahapan4` text DEFAULT NULL,
  `tahapan5` text DEFAULT NULL,
  `tahapan6` text DEFAULT NULL,
  `tahapan7` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_web`
--

INSERT INTO `tbl_web` (`id_setting`, `nsm`, `npsn`, `nama_sekolah`, `jenjang_sekolah`, `status_sekolah`, `alamat_lengkap`, `provinsi`, `kabupaten`, `kecamatan`, `telepon_sekolah`, `email`, `website`, `peta`, `nama_kepsek`, `nip_kepsek`, `ttd_kepsek`, `logo_sekolah`, `nama_ketua`, `nip_ketua`, `ttd_ketua`, `tahun_ajaran`, `beranda`, `keterangan_print`, `info_ujian`, `tahapan1`, `tahapan2`, `tahapan3`, `tahapan4`, `tahapan5`, `tahapan6`, `tahapan7`) VALUES
(1, '1234567', '000000', 'SMA 1 Ingin Jaya', 'MTsN', 'negeri', 'Jl. Banda Aceh Medan KM 15 Lambaro Sibreh, Kec.Suka Makmur Aceh Besar - 23361, Indonesia', 'Aceh', 'Aceh Besar', 'Suka Makmur', '081260741115', 'mtsn4acehbesar@gmail.com', 'http://www.mtsn4acehbesar.sch.id', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3971.646177114348!2d95.38308931422277!3d5.470526436025826!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x304039e2308cd039%3A0x54b702faa6aaf212!2smtsn%204%20aceh%20besar!5e0!3m2!1sid!2sid!4v1653282046491!5m2!1sid!2sid', 'Maimun', '160912345785', '1656638599_c9d4895f9d357755aaba.png', '1654820104_e6dcaf412434fae127f5.png', 'Atika Fadhluna', '1233444444', '1656638812_b8d82ade847519003b45.png', '2022/2023', '                                    <h4 style=\"margin-top:0cm\"><span lang=\"IN\"><font color=\"#000000\"><b>A. Syarat - syarat Pendaftaran</b></font></span></h4><ol><li style=\"margin-top: 0cm;\"><span lang=\"IN\">Mengisi Formulir Pendaftaran&nbsp;(Pada website ppdb)</span></li><li style=\"margin-top: 0cm;\"><span lang=\"IN\">Foto Akte Kelahiran</span></li><li style=\"margin-top: 0cm;\">Pas Photo 3 X 4 Layar Biru</li></ol><p style=\"margin-top:0cm\"><b>Note : Foto yang di upload harus scan dari file\r\nasli</b></p><h4 style=\"margin-top: 0cm;\"><span lang=\"IN\"><font color=\"#000000\"><span style=\"font-weight: 600;\">B. Syarat - syarat Pendaftaran Ulang</span></font></span></h4><ol><li style=\"margin-top: 0cm;\">Dinyatakan Lulus Seleksi oleh pihak sekolah</li><li style=\"margin-top: 0cm;\"><span lang=\"IN\" style=\"font-size: 10pt; line-height: 107%; font-family: Helvetica, sans-serif;\">Mengisi Biodata siswa (Pada\r\nwebsite ppdb)</span></li><li style=\"margin-top: 0cm;\"><span lang=\"IN\" style=\"font-size: 10pt; line-height: 107%; font-family: Helvetica, sans-serif;\">Foto Raport sem. Ganjil kelas\r\nVI</span></li><li style=\"margin-top: 0cm;\"><span lang=\"IN\" style=\"font-size: 10pt; line-height: 107%; font-family: Helvetica, sans-serif;\">Foto Kartu NISN</span></li><li style=\"margin-top: 0cm;\">Foto\r\n     Kartu Keluarga (KK)</li><li style=\"margin-top: 0cm;\"><span lang=\"IN\" style=\"font-size: 10pt; line-height: 107%; font-family: Helvetica, sans-serif;\">Foto KTP (Bapak/Ibu)</span></li><li style=\"margin-top: 0cm;\"><span lang=\"IN\" style=\"font-size: 10pt; line-height: 107%; font-family: Helvetica, sans-serif;\">Foto Kartu Sosial, seperti :\r\nKIP, BSM, PKH, PJPS, DLL.</span></li><li style=\"margin-top: 0cm;\"><span lang=\"IN\" style=\"font-size: 10pt; line-height: 107%; font-family: Helvetica, sans-serif;\">Pas Photo 3 X 4 Hitam\r\nPutih</span></li></ol><p style=\"margin-top: 0cm;\"><b><span style=\"font-size: 10pt; font-family: Helvetica, sans-serif;\">Note : Foto yang di upload harus scan dari file asli</span></b></p><h4 style=\"margin-top: 0cm; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span lang=\"IN\" style=\"font-family: Helvetica, sans-serif;\"><font color=\"#000000\"><b>C. Pengisian Formulir&nbsp;</b></font></span></h4><ol><li><span lang=\"IN\" style=\"font-size: 10pt; line-height: 107%; font-family: Helvetica, sans-serif;\">Tanggal : 07 Maret - 28 Maret\r\n2022</span></li><li><span lang=\"IN\" style=\"font-size: 10pt; line-height: 107%; font-family: Helvetica, sans-serif;\">Tempat : Website PPDB MTsN 4\r\nAceh Besar</span></li></ol><h5><span lang=\"IN\" style=\"font-size: 10pt; line-height: 107%; font-family: Helvetica, sans-serif;\"><br></span><h4><b><font color=\"#000000\">D. Ujian PPDB</font></b></h4></h5><ol><li><span lang=\"IN\" style=\"font-size:11.0pt;line-height:\r\n107%;font-family:\" calibri\",sans-serif;mso-ascii-theme-font:minor-latin;=\"\" mso-fareast-font-family:calibri;mso-fareast-theme-font:minor-latin;mso-hansi-theme-font:=\"\" minor-latin;mso-bidi-font-family:\"times=\"\" new=\"\" roman\";mso-bidi-theme-font:minor-bidi;=\"\" mso-ansi-language:in;mso-fareast-language:en-us;mso-bidi-language:ar-sa;=\"\" mso-no-proof:yes\"=\"\">Tanggal : 30 Maret 2022</span></li><li><span lang=\"IN\" style=\"font-size:11.0pt;line-height:\r\n107%;font-family:\" calibri\",sans-serif;mso-ascii-theme-font:minor-latin;=\"\" mso-fareast-font-family:calibri;mso-fareast-theme-font:minor-latin;mso-hansi-theme-font:=\"\" minor-latin;mso-bidi-font-family:\"times=\"\" new=\"\" roman\";mso-bidi-theme-font:minor-bidi;=\"\" mso-ansi-language:in;mso-fareast-language:en-us;mso-bidi-language:ar-sa;=\"\" mso-no-proof:yes\"=\"\">Tempat : Website PPDB MTsN 4 Aceh Besar / Sekolah<br></span><br></li></ol><h4><span style=\"font-weight: 600;\"><font color=\"#000000\">E. Pengumuman Kelulusan</font></span></h4><h5 style=\"margin-top:0cm\"><span lang=\"IN\" style=\"font-size: 11pt; line-height: 107%; font-family: Helvetica, sans-serif;\"><ol style=\"font-family: Poppins, Helvetica, \" sans-serif\";=\"\" font-size:=\"\" 13px;\"=\"\"><li><span lang=\"IN\" style=\"font-size: 11pt; line-height: 15.6933px; font-family: Calibri, sans-serif;\">Tanggal : 01 April 2022</span></li><li><span lang=\"IN\" style=\"font-size: 11pt; line-height: 15.6933px; font-family: Calibri, sans-serif;\">Tempat : Website PPDB MTsN 4 Aceh Besar / Sekolah</span></li></ol><p><span lang=\"IN\" style=\"font-size: 11pt; line-height: 15.6933px; font-family: Calibri, sans-serif;\"><br></span></p><p><span lang=\"IN\" style=\"font-size: 11pt; line-height: 15.6933px; font-family: Calibri, sans-serif;\"></span></p></span></h5><h4><span style=\"font-weight: 600;\"><font color=\"#000000\">F. Pendaftaran Ulang</font></span></h4><h5 style=\"margin-top: 0cm; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span lang=\"IN\" style=\"font-family: Helvetica, sans-serif;\"><ol style=\"font-family: Poppins, Helvetica, \" sans-serif\";=\"\" font-size:=\"\" 13px;\"=\"\"><li><span lang=\"IN\" style=\"font-size: 11pt; line-height: 15.6933px; font-family: Calibri, sans-serif;\">Tanggal : 11 April - 14 April 2022</span></li><li><span lang=\"IN\" style=\"font-size: 11pt; line-height: 15.6933px; font-family: Calibri, sans-serif;\">Tempat : Website PPDB MTsN 4 Aceh Besar / Sekolah</span></li></ol></span><span lang=\"IN\" style=\"font-size: 10pt; line-height: 107%; font-family: Helvetica, sans-serif;\"><o:p></o:p></span></h5><p style=\"margin-top:0cm\"><o:p></o:p></p><h5 style=\"margin-top:0cm\"><span lang=\"IN\"><blockquote><pre><br><p></p><p></p></pre><p></p></blockquote></span><o:p></o:p></h5>                                ', '                                                                                                                                                                                    <b style=\"color: rgb(0, 0, 0); font-family: Calibri; font-size: medium;\"><u>Siapkan Berkas Berikut Ketika anda melakukan DAFTAR ULANG :</u></b><span style=\"color: rgb(0, 0, 0); font-family: Calibri; font-size: medium;\"></span><br style=\"color: rgb(0, 0, 0); font-family: Calibri; font-size: medium;\"><table width=\"100%\" border=\"0\" style=\"color: rgb(0, 0, 0); font-family: Calibri; font-size: medium; margin-left: 5px;\"><tbody><tr><td width=\"1\" style=\"padding: 2px;\">1.</td><td style=\"padding: 2px;\">Cetak bukti pendaftaran</td><td width=\"1\" style=\"padding: 2px;\">:</td><td style=\"padding: 2px;\">1 lembar</td></tr><tr><td style=\"padding: 2px;\">2.</td><td style=\"padding: 2px;\">Foto copy Akte Kelahiran dan Kartu Keluarga</td><td style=\"padding: 2px;\">:</td><td style=\"padding: 2px;\">2 lembar</td></tr><tr><td style=\"padding: 2px;\">3.</td><td style=\"padding: 2px;\">Surat Keterangan Lulus dan Ijazah MTs/SMP <b>(*Apabila sudah ada)</b></td><td style=\"padding: 2px;\">:</td><td style=\"padding: 2px;\">2 lembar</td></tr><tr><td style=\"padding: 2px;\">4.</td><td style=\"padding: 2px;\">Fc. Kartu NISN <b>(*No. NISN/Screen NISN)</b></td><td style=\"padding: 2px;\">:</td><td style=\"padding: 2px;\">1 lembar</td></tr><tr><td valign=\"top\" style=\"padding: 2px;\">7.</td><td colspan=\"3\" style=\"padding: 2px;\">Semua berkas dimasukan kedalam map biru (PUTRA), map Kuning (PUTRI) dan diserahkan kepada Panitia PPDB MTsN 4 Aceh Besar Tahun Pelajaran 2021-2022</td></tr></tbody></table>                                                                                                                                                                                                                                    ', '                                                                                                            <p style=\"\"><span style=\"font-size: 15.275px; text-align: center;\">Belum ada Hasil Ujian</span></p><p style=\"\"><span style=\"font-size: 15.275px; text-align: center;\">Hasil Ujian akan diumumkan pada tanggal </span><span class=\"font-size-h4-lg\" style=\"text-align: center; font-weight: 600;\">18 Agustus 2022</span></p>                                                                                                ', '                                                                                                                                                                                                                                                            <blockquote style=\"font-family: Consolas, \"><p><font color=\"#424242\" style=\"\">Untuk dapat mengakses website PPDB Anda harus Mendaftarkan akun terlebih dahulu </font></p></blockquote><p><font color=\"#424242\">Klik pada tombol </font><font color=\"#000000\"><b>Daftar Akun dibawah.</b></font></p>                                                                                                                                                                                                                                                                                                    ', '                                                                                                                                                                                                                        <p>                                    <span style=\"\" courier=\"\" new\",=\"\" monospace;=\"\" font-size:=\"\" 14px;=\"\" white-space:=\"\" pre;\"=\"\"><font color=\"#424242\" style=\"\"><b> </b>Setelah Akun berhasil di daftar, Anda dapat melakukan Login.</font></span></p><p><span style=\"\" courier=\"\" new\",=\"\" monospace;=\"\" font-size:=\"\" 14px;=\"\" white-space:=\"\" pre;\"=\"\"><font color=\"#424242\" style=\"\">Klik tombol</font><font color=\"#000000\" style=\"\"> <b>Login Akun</b></font><font color=\"#424242\" style=\"\">. Masukkan NISN dan Password yang sudah Anda Daftarkan.</font></span></p><p><font color=\"#636363\"><b>Contoh : </b></font></p><p><font color=\"#636363\">NISN : 1708107046</font></p><p><font color=\"#636363\">Password : 123456</font></p>                                                                                                                                                                                                ', '                                                                                                                                                                                                                        <p><font color=\"#424242\">Setelah Berhasil Login. Anda harus mengisi formulir.</font></p><p><font color=\"#424242\">pilih isi formulir, setelah data yang diminta terisi, klik selesai.</font></p><p><font color=\"#000000\"><b>note :</b></font> </p><ol><li>siapkan scan pas photo dan akte kelahiran dalam bentuk foto</li><li>data yang sudah diisi tidak dapat diubah lagi</li></ol>                                                                                                                                                                                                ', '                                                                                                                                                                                                                        <p><font color=\"#424242\" style=\"\">setelah selesai mengisi formulir, print pendaftaran</font><font color=\"#9c00ff\" style=\"font-weight: bold;\"> </font><font style=\"font-weight: bold;\" color=\"#000000\">(jika diperlukan).</font></p>                                                                                                                                                                                                ', '                                                                                                                                                                                                                        <p><font color=\"#424242\" style=\"\">Ujian akan dilaksanakan pada website PPDB MTsN 4 Aceh Besar.</font></p><p><b style=\"\"><font color=\"#000000\">Tanggal :</font><font color=\"#424242\"> 30 Maret 2022</font></b></p><p><b style=\"\"><font color=\"#000000\">Jam :</font><font color=\"#3984c6\"> </font><font color=\"#424242\">10.00 - 11.00</font></b></p>                                                                                                                                                                                                ', '                                                                                                                                                                                                                        <p><font color=\"#424242\">Hasil Ujian akan diumumkan pada website PPDB MTsN 4 Aceh Besar.</font></p><p><span style=\"font-weight: 600;\"><font color=\"#000000\">Tanggal :</font><font color=\"#424242\">&nbsp;01 April 2022</font></span></p><p><span style=\"font-weight: 600;\"><font color=\"#000000\">Jam :</font><font color=\"#3984c6\">&nbsp;</font><font color=\"#424242\">10.00&nbsp;</font></span></p>                                                                                                                                                                                                ', '                                                                                                                                                                                                                        <p><font color=\"#424242\">Daftar ulang dapat dilakukan pada website PPDB MTsN 4 Aceh Besar.</font></p><p><font color=\"#424242\">note : lengkapi berkas-berkas yang diminta (berkas yang discan harus dari berkas aslinya)</font></p><p><span style=\"font-weight: 600;\"><font color=\"#000000\">Tanggal&nbsp; Daftar Ulang :</font><font color=\"#424242\">&nbsp;11 - 14 April 2022</font></span></p>                                                                                                                                                                                                ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_berkas`
--
ALTER TABLE `tbl_berkas`
  ADD PRIMARY KEY (`id_berkas`);

--
-- Indexes for table `tbl_lampiran`
--
ALTER TABLE `tbl_lampiran`
  ADD PRIMARY KEY (`id_lampiran`);

--
-- Indexes for table `tbl_panitia`
--
ALTER TABLE `tbl_panitia`
  ADD PRIMARY KEY (`id_panitia`);

--
-- Indexes for table `tbl_pekerjaan`
--
ALTER TABLE `tbl_pekerjaan`
  ADD PRIMARY KEY (`id_pekerjaan`);

--
-- Indexes for table `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indexes for table `tbl_soal`
--
ALTER TABLE `tbl_soal`
  ADD PRIMARY KEY (`id_soal`);

--
-- Indexes for table `tbl_ta`
--
ALTER TABLE `tbl_ta`
  ADD PRIMARY KEY (`id_ta`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `tbl_web`
--
ALTER TABLE `tbl_web`
  ADD PRIMARY KEY (`id_setting`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_berkas`
--
ALTER TABLE `tbl_berkas`
  MODIFY `id_berkas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_lampiran`
--
ALTER TABLE `tbl_lampiran`
  MODIFY `id_lampiran` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_panitia`
--
ALTER TABLE `tbl_panitia`
  MODIFY `id_panitia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_pekerjaan`
--
ALTER TABLE `tbl_pekerjaan`
  MODIFY `id_pekerjaan` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `tbl_soal`
--
ALTER TABLE `tbl_soal`
  MODIFY `id_soal` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_ta`
--
ALTER TABLE `tbl_ta`
  MODIFY `id_ta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_web`
--
ALTER TABLE `tbl_web`
  MODIFY `id_setting` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
