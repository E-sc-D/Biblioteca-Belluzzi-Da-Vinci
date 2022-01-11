-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2022 at 05:51 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `biblioteca`
--

-- --------------------------------------------------------

--
-- Table structure for table `appartiene`
--

CREATE TABLE `appartiene` (
  `CodiceLibro` varchar(16) NOT NULL,
  `CodiceCategoria` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appartiene`
--

INSERT INTO `appartiene` (`CodiceLibro`, `CodiceCategoria`) VALUES
('0001', '001'),
('0002', '004'),
('0003', '005'),
('0004', '002'),
('0005', '002');

-- --------------------------------------------------------

--
-- Table structure for table `autore`
--

CREATE TABLE `autore` (
  `CodiceAutore` varchar(16) NOT NULL,
  `Nome` text NOT NULL,
  `Cognome` text NOT NULL,
  `DataNascita` date NOT NULL,
  `LuogoNascita` text NOT NULL,
  `Biografia` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `autore`
--

INSERT INTO `autore` (`CodiceAutore`, `Nome`, `Cognome`, `DataNascita`, `LuogoNascita`, `Biografia`) VALUES
('1001', 'Robert Louis', 'Stevenson', '1850-11-13', 'Edimburgo', 'Robert Louis Balfour Stevenson (Edimburgo, 13 novembre 1850 – Vailima, 3 dicembre 1894) è stato uno scrittore, drammaturgo e poeta scozzese dell\'età vittoriana, noto principalmente per i romanzi L\'isola del tesoro e Lo strano caso del dottor Jekyll e del signor Hyde.'),
('1002', 'Joanne', 'Rowling', '1965-07-31', 'Yate', 'Joanne Rowling (Yate, 31 luglio 1965[1]) è una scrittrice, sceneggiatrice e produttrice cinematografica britannica. La sua fama è legata alla serie di romanzi di Harry Potter, che ha scritto firmandosi con lo pseudonimo J. K. Rowling (in cui \"K\" sta per Kathleen, nome della nonna paterna), motivo per cui la scrittrice è spesso indicata impropriamente come \"Joanne Kathleen Rowling\".[2] Nel 2013 pubblica la sua prima opera con lo pseudonimo di Robert Galbraith.[3] Nel 2011 è stata inserita da Forbes nella classifica delle donne più ricche del Regno Unito.[4]'),
('1003', 'Franz', 'Kafka', '1883-07-03', 'Praga', 'Franz Kafka (Praga, 3 luglio 1883 – Kierling, 3 giugno 1924) è stato uno scrittore boemo di lingua tedesca.\r\n\r\nNato nei territori dell\'Impero austro-ungarico, divenuti Repubblica cecoslovacca a partire dal 1918, è ritenuto una delle maggiori figure della letteratura del XX secolo e importante esponente del modernismo[1] e del realismo magico[2].'),
('1004', 'Steve', 'Prettyman', '1969-12-12', 'Denver', 'Steve Prettyman, nato a Denver il 12 dicembre 1969 è uno scrittore di libri rivolti al settore informatico.'),
('1005', 'Claudio', 'De Sio Cesari', '1980-05-05', 'Verona', 'Claudio de Sio Cesari, nato a Verona nel 1980 è un programmatore e uno scrittore di libri.');

-- --------------------------------------------------------

--
-- Table structure for table `categoria`
--

CREATE TABLE `categoria` (
  `CodiceCategoria` varchar(16) NOT NULL,
  `Descrizione` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categoria`
--

INSERT INTO `categoria` (`CodiceCategoria`, `Descrizione`) VALUES
('001', 'Classici'),
('002', 'Libri Tecnici'),
('003', 'Horror'),
('004', 'Per ragazzi'),
('005', 'Lingue straniere');

-- --------------------------------------------------------

--
-- Table structure for table `libro`
--

CREATE TABLE `libro` (
  `CodiceLibro` varchar(16) NOT NULL,
  `Titolo` text NOT NULL,
  `Lingua` text NOT NULL,
  `Editore` text NOT NULL,
  `AnnoPubblicazione` int(4) NOT NULL,
  `Sezione` text NOT NULL,
  `NumScaffale` int(16) NOT NULL,
  `NumPosto` int(16) NOT NULL,
  `ISBN` varchar(32) NOT NULL,
  `immagine` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `libro`
--

INSERT INTO `libro` (`CodiceLibro`, `Titolo`, `Lingua`, `Editore`, `AnnoPubblicazione`, `Sezione`, `NumScaffale`, `NumPosto`, `ISBN`, `immagine`) VALUES
('0001', 'La metamorfosi', 'Italiano', 'ET Classici', 1915, 'Classici', 4, 12, '1234567518532', 'https://images-na.ssl-images-amazon.com/images/I/61IljYs0TzL.jpg'),
('0002', 'Harry Potter e il calice di fuoco', 'Italiano', 'Salani Editore', 2000, 'Per Ragazzi', 5, 15, '2135464564894', 'https://images-na.ssl-images-amazon.com/images/I/91sJm25RjuL.jpg'),
('0003', 'Dr Jekyll e Mr Hide', 'Inglese', 'Signet Classics', 1886, 'Lingue straniere', 1, 7, '1234567899874', 'https://images-na.ssl-images-amazon.com/images/I/91SHfGDkeKS.jpg'),
('0004', 'Programmare con Php 7', 'Italiano', 'Apogeo', 2019, 'Libri tecnici', 2, 1, '2581473691590', 'https://images-na.ssl-images-amazon.com/images/I/619328CGieL.jpg'),
('0005', 'Il nuovo Java - guida completa alla programmazione moderna ', 'Italiano', 'Hoepli', 2020, 'Libri tecnici', 2, 12, '1591597534862', 'https://www.nuovojava.it/assets/img/cover.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `prestito`
--

CREATE TABLE `prestito` (
  `CodiceFiscale` varchar(16) NOT NULL,
  `DataFinePrestito` date NOT NULL,
  `DataInizioPrestito` date NOT NULL,
  `CodiceLibro` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prestito`
--

INSERT INTO `prestito` (`CodiceFiscale`, `DataFinePrestito`, `DataInizioPrestito`, `CodiceLibro`) VALUES
('dasd4564ds', '2021-12-24', '2021-12-08', '0001'),
('ds5258fdsf', '2021-10-18', '2021-10-30', '0002'),
('ewqer165151wq', '2021-12-22', '2021-12-06', '0005'),
('sadad46546', '2022-01-08', '2022-01-02', '0002'),
('sadad46546', '2021-12-09', '2022-01-19', '0003');

-- --------------------------------------------------------

--
-- Table structure for table `scrive`
--

CREATE TABLE `scrive` (
  `CodiceAutore` varchar(16) NOT NULL,
  `Anno` int(11) NOT NULL,
  `CodiceLibro` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `scrive`
--

INSERT INTO `scrive` (`CodiceAutore`, `Anno`, `CodiceLibro`) VALUES
('1001', 1886, '0003'),
('1002', 2000, '0002'),
('1003', 1915, '0001'),
('1004', 2019, '0004'),
('1005', 2020, '0005');

-- --------------------------------------------------------

--
-- Table structure for table `utente`
--

CREATE TABLE `utente` (
  `CodiceFiscale` varchar(16) NOT NULL,
  `Nome` text NOT NULL,
  `Cognome` text NOT NULL,
  `DataRegistrazione` date NOT NULL,
  `Indirizzo` text NOT NULL,
  `Password` text NOT NULL,
  `Admin` tinyint(1) NOT NULL,
  `NumTessera` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `utente`
--

INSERT INTO `utente` (`CodiceFiscale`, `Nome`, `Cognome`, `DataRegistrazione`, `Indirizzo`, `Password`, `Admin`, `NumTessera`) VALUES
('dasd4564ds', 'Mario', 'Rossi', '2022-01-06', 'mario@gmail.com', 'mario', 0, '0003'),
('ds5258fdsf', 'Xhiao', 'Rossi', '2022-01-01', 'xhiao@gmail.com', 'xhiao', 0, '0002'),
('ewqer165151wq', 'Simone', 'Alessandrini', '2022-01-04', 'simone@gmail.com', 'simone', 0, '0005'),
('sadad46546', 'Mirco', 'Alessandrini', '2021-07-01', 'ciccio89@gmail.com', 'paguri', 1, '0004'),
('sd654ad65s4', 'Carlo', 'Verdone', '2022-01-08', 'carloverdone@gmail.com', 'verdone', 1, '0001');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appartiene`
--
ALTER TABLE `appartiene`
  ADD PRIMARY KEY (`CodiceLibro`,`CodiceCategoria`),
  ADD KEY `appartiene_categoria` (`CodiceCategoria`);

--
-- Indexes for table `autore`
--
ALTER TABLE `autore`
  ADD PRIMARY KEY (`CodiceAutore`);

--
-- Indexes for table `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`CodiceCategoria`);

--
-- Indexes for table `libro`
--
ALTER TABLE `libro`
  ADD PRIMARY KEY (`CodiceLibro`);

--
-- Indexes for table `prestito`
--
ALTER TABLE `prestito`
  ADD PRIMARY KEY (`CodiceFiscale`,`CodiceLibro`),
  ADD KEY `prestito_libro` (`CodiceLibro`);

--
-- Indexes for table `scrive`
--
ALTER TABLE `scrive`
  ADD PRIMARY KEY (`CodiceAutore`,`CodiceLibro`),
  ADD KEY `scrive_libro` (`CodiceLibro`);

--
-- Indexes for table `utente`
--
ALTER TABLE `utente`
  ADD PRIMARY KEY (`CodiceFiscale`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appartiene`
--
ALTER TABLE `appartiene`
  ADD CONSTRAINT `appartiene_categoria` FOREIGN KEY (`CodiceCategoria`) REFERENCES `categoria` (`CodiceCategoria`),
  ADD CONSTRAINT `appartiene_libro` FOREIGN KEY (`CodiceLibro`) REFERENCES `libro` (`CodiceLibro`);

--
-- Constraints for table `prestito`
--
ALTER TABLE `prestito`
  ADD CONSTRAINT `prestito_libro` FOREIGN KEY (`CodiceLibro`) REFERENCES `libro` (`CodiceLibro`),
  ADD CONSTRAINT `prestito_utente` FOREIGN KEY (`CodiceFiscale`) REFERENCES `utente` (`CodiceFiscale`);

--
-- Constraints for table `scrive`
--
ALTER TABLE `scrive`
  ADD CONSTRAINT `scrive_autore` FOREIGN KEY (`CodiceAutore`) REFERENCES `autore` (`CodiceAutore`),
  ADD CONSTRAINT `scrive_libro` FOREIGN KEY (`CodiceLibro`) REFERENCES `libro` (`CodiceLibro`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
