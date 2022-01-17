-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Gen 17, 2022 alle 19:23
-- Versione del server: 10.4.22-MariaDB
-- Versione PHP: 8.1.1

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
-- Struttura della tabella `libro`
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
  `immagine` text NOT NULL,
  `descrizione` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `libro`
--

INSERT INTO `libro` (`CodiceLibro`, `Titolo`, `Lingua`, `Editore`, `AnnoPubblicazione`, `Sezione`, `NumScaffale`, `NumPosto`, `ISBN`, `immagine`, `descrizione`) VALUES
('0001', 'La metamorfosi', 'Italiano', 'Mondadori', 1904, 'Lingue straniere', 1, 1, '3432432432442', 'https://images-na.ssl-images-amazon.com/images/I/61IljYs0TzL.jpg', 'Una mattina il giovane Gregor si accorge al suo risveglio di essersi trasformato in un insetto. Questo cambiamento non è facile da accettare per lui, ma soprattutto per la sua famiglia, composta dai due genitori e da una sorella minore. Vari episodi porteranno il protagonista a riflettere sulle sue condizioni prima e dopo la trasformazione e questo lo porterà a prendere una decisione drastica.'),
('0002', 'Harry Potter e il calice di fuoco', 'Italiano', 'Salani Editore', 2000, 'Per Ragazzi', 5, 15, '2135464564894', 'https://images-na.ssl-images-amazon.com/images/I/91sJm25RjuL.jpg', 'Durante l\'estate dopo il terzo anno scolastico, Harry Potter sogna che Lord Voldemort e il suo servo Codaliscia, alias Peter Minus, hanno trovato rifugio presso la villa abbandonata dei Riddle a Little Hangleton. Frank Bryce, l\'anziano custode babbano della casa, nota una luce proveniente dalla villa e va a vedere chi siano gli intrusi, ma viene scoperto dal serpente di Voldemort, Nagini, e ucciso dal Signore Oscuro in persona.'),
('0003', 'Dr Jekyll e Mr Hide', 'Inglese', 'Signet Classics', 1886, 'Lingue straniere', 1, 7, '1234567899874', 'https://images-na.ssl-images-amazon.com/images/I/91SHfGDkeKS.jpg', 'L\'avvocato Utterson e suo cugino Enfield, due rispettabili gentiluomini londinesi, sono soliti compiere insieme ogni domenica una passeggiata, finendo spesso per camminare per molto tempo senza dire una parola; durante una di queste uscite, si ritrovano vicino alla porta di un edificio che un tempo era popolato da prostitute; è di colore nero, ha una sola porta, non ha finestre si trova vicino ad un vicolo in un popoloso quartiere della città, ricco di negozi e vetrine.'),
('0004', 'Programmare con Php 7', 'Italiano', 'Apogeo', 2019, 'Libri tecnici', 2, 1, '2581473691590', 'https://images-na.ssl-images-amazon.com/images/I/619328CGieL.jpg', 'Questo manuale si rivolge a chi non conosce PHP e vuole imparare a utilizzarlo nella moderna versione 7 secondo il paradigma della programmazione a oggetti. L\'approccio è tutoriale: alla teoria sono affiancati numerosi esempi di codice che spaziano dalle basi del linguaggio alle sue funzionalità più moderne, dedicate per esempio alla sicurezza e alla cifratura delle password. Inoltre sono presenti diversi box che spingono ad approfondire i temi trattati attraverso esercizi mirati allo sviluppo di un\'applicazione nelle sue tre componenti chiave: l\'interfaccia utente, la parte logica e la gestione dei dati e dei database. In questo modo il lettore si trova ad apprendere un metodo di lavoro professionale e a sperimentare PHP 7 insieme a tecnologie web moderne come HTML5, CSS3, JSON, senza dimenticare JavaScript, XML e MySQL.'),
('0005', 'Il nuovo Java - guida completa alla programmazione moderna ', 'Italiano', 'Hoepli', 2020, 'Libri tecnici', 2, 12, '1591597534862', 'https://www.nuovojava.it/assets/img/cover.jpg', 'Una guida completa e aggiornata alla versione 15 con tutto quello che serve per imparare a programmare in Java nel nuovo decennio. Il lettore viene accompagnato nel mondo dello sviluppo software, passo dopo passo, con una teoria chiara e rigorosa e una pratica ricca di esempi ed esercitazioni. Il nuovo Java parte dalle basi per arrivare a trattare tutti gli argomenti che hanno rivoluzionato il linguaggio, come i reference a metodi, gli stream, il sistema modulare, le JVM custom, le espressioni switch, i text block e tanto altro ancora. Il testo è particolarmente adatto agli studenti universitari, ma anche ad aspiranti programmatori senza nessuna esperienza e, allo stesso tempo, agli sviluppatori Java che vogliono aggiornarsi alla versione 15.');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `libro`
--
ALTER TABLE `libro`
  ADD PRIMARY KEY (`CodiceLibro`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
