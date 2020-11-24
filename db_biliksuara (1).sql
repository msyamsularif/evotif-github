-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2020 at 05:43 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_biliksuara`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`username`, `password`) VALUES
('TIF-4dm1n', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `tb_datasetpel`
--

CREATE TABLE `tb_datasetpel` (
  `id` int(1) NOT NULL DEFAULT 1,
  `tapel` varchar(10) NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_datasetpel`
--

INSERT INTO `tb_datasetpel` (`id`, `tapel`, `tgl`) VALUES
(1, '2020', '2020-06-30');

-- --------------------------------------------------------

--
-- Table structure for table `tb_identitaskampus`
--

CREATE TABLE `tb_identitaskampus` (
  `npsn` varchar(15) NOT NULL,
  `nm_kampus` varchar(32) NOT NULL,
  `jln` varchar(255) DEFAULT NULL,
  `desa` varchar(32) DEFAULT NULL,
  `kec` varchar(32) DEFAULT NULL,
  `kab` varchar(32) DEFAULT NULL,
  `nm_rektor` varchar(32) DEFAULT NULL,
  `nip` varchar(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_identitaskampus`
--

INSERT INTO `tb_identitaskampus` (`npsn`, `nm_kampus`, `jln`, `desa`, `kec`, `kab`, `nm_rektor`, `nip`) VALUES
('20107907', 'Universitas Krisnadwipayana', 'Jl. Jatiwaringin Raya Kompleks Kampus UNKRIS', 'Pondok Gede', 'Pondok Gede', 'Bekasi', 'Ali Khumaidi S.Kom, M.Kom.', '33333333333');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kelas`
--

CREATE TABLE `tb_kelas` (
  `kd_kelas` int(3) NOT NULL,
  `nm_kelas` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kelas`
--

INSERT INTO `tb_kelas` (`kd_kelas`, `nm_kelas`) VALUES
(10, 'Reguler Pagi'),
(11, 'Reguler Malam'),
(12, 'P2K'),
(13, 'Blended Learning'),
(14, 'Mabes ');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mahasiswa`
--

CREATE TABLE `tb_mahasiswa` (
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `nm_mahasiswa` varchar(32) DEFAULT NULL,
  `jk` char(1) NOT NULL,
  `kd_kelas` int(3) DEFAULT NULL,
  `hadir` varchar(12) NOT NULL DEFAULT 'Tidak Hadir'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_mahasiswa`
--

INSERT INTO `tb_mahasiswa` (`username`, `password`, `nm_mahasiswa`, `jk`, `kd_kelas`, `hadir`) VALUES
('1770231019', '1770231019', 'M', 'L', 13, 'Tidak Hadir'),
('1770231020', '1770231020', 'Test', 'L', 10, 'Tidak Hadir');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pilih`
--

CREATE TABLE `tb_pilih` (
  `id_pilih` int(11) NOT NULL,
  `nim` varchar(32) NOT NULL,
  `username` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pilihan`
--

CREATE TABLE `tb_pilihan` (
  `nim` varchar(32) NOT NULL,
  `nama` varchar(32) NOT NULL,
  `visi` varchar(255) NOT NULL,
  `misi` varchar(255) NOT NULL,
  `photo` varchar(32) NOT NULL,
  `no` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pilihan`
--

INSERT INTO `tb_pilihan` (`nim`, `nama`, `visi`, `misi`, `photo`, `no`) VALUES
('1770231021', 'FE', 'Loream', 'Loream', '1770231021.jpg', 1),
('1770231022', 'Syam', 'Loream ipsum bgt', 'Loream ipsummmm', '1770231022.jpg', 2),
('1770231023', 'TU', 'fddfd', 'ghgtg', '1770231023.jpg', 3);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_daftarhadir`
-- (See below for the actual view)
--
CREATE TABLE `view_daftarhadir` (
`nim` varchar(32)
,`nm_mahasiswa` varchar(32)
,`nm_kelas` varchar(32)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_vote`
-- (See below for the actual view)
--
CREATE TABLE `view_vote` (
`nim` varchar(32)
,`nama` varchar(32)
,`photo` varchar(32)
,`no` int(1)
,`username` varchar(32)
);

-- --------------------------------------------------------

--
-- Structure for view `view_daftarhadir`
--
DROP TABLE IF EXISTS `view_daftarhadir`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_daftarhadir`  AS  select `tb_mahasiswa`.`username` AS `nim`,`tb_mahasiswa`.`nm_mahasiswa` AS `nm_mahasiswa`,`tb_kelas`.`nm_kelas` AS `nm_kelas` from ((`tb_mahasiswa` join `tb_kelas` on(`tb_kelas`.`kd_kelas` = `tb_mahasiswa`.`kd_kelas`)) join `tb_pilih` on(`tb_mahasiswa`.`username` = `tb_pilih`.`username`)) ;

-- --------------------------------------------------------

--
-- Structure for view `view_vote`
--
DROP TABLE IF EXISTS `view_vote`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_vote`  AS  select `tb_pilihan`.`nim` AS `nim`,`tb_pilihan`.`nama` AS `nama`,`tb_pilihan`.`photo` AS `photo`,`tb_pilihan`.`no` AS `no`,`tb_mahasiswa`.`username` AS `username` from ((`tb_pilih` join `tb_pilihan` on(`tb_pilihan`.`nim` = `tb_pilih`.`nim`)) join `tb_mahasiswa` on(`tb_mahasiswa`.`username` = `tb_pilih`.`username`)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `tb_datasetpel`
--
ALTER TABLE `tb_datasetpel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_identitaskampus`
--
ALTER TABLE `tb_identitaskampus`
  ADD PRIMARY KEY (`npsn`);

--
-- Indexes for table `tb_kelas`
--
ALTER TABLE `tb_kelas`
  ADD PRIMARY KEY (`kd_kelas`);

--
-- Indexes for table `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `tb_pilih`
--
ALTER TABLE `tb_pilih`
  ADD PRIMARY KEY (`id_pilih`);

--
-- Indexes for table `tb_pilihan`
--
ALTER TABLE `tb_pilihan`
  ADD PRIMARY KEY (`nim`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_kelas`
--
ALTER TABLE `tb_kelas`
  MODIFY `kd_kelas` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tb_pilih`
--
ALTER TABLE `tb_pilih`
  MODIFY `id_pilih` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
