-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Creato il: Mar 08, 2017 alle 21:58
-- Versione del server: 5.7.17-0ubuntu0.16.04.1
-- Versione PHP: 7.0.15-0ubuntu0.16.04.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `certonline`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `dati_fatturazione`
--

CREATE TABLE `dati_fatturazione` (
  `ID` int(11) NOT NULL,
  `intestazione` text NOT NULL,
  `piva_cf` text NOT NULL,
  `via` text NOT NULL,
  `loc` text NOT NULL,
  `prov` text NOT NULL,
  `cap` text NOT NULL,
  `tel` text NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `dati_fatturazione`
--

INSERT INTO `dati_fatturazione` (`ID`, `intestazione`, `piva_cf`, `via`, `loc`, `prov`, `cap`, `tel`, `email`) VALUES
(1, 'Luca Scalvi', '03287500171', 'Via Vannucci 2', 'Brescia', 'BS', '25124', '3336005850', 'luca@scalvi.it');

-- --------------------------------------------------------

--
-- Struttura della tabella `visure`
--

CREATE TABLE `visure` (
  `id` int(32) NOT NULL,
  `catasto` text NOT NULL,
  `dati` text NOT NULL,
  `messaggio` text NOT NULL,
  `id_cliente` int(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `visure`
--

INSERT INTO `visure` (`id`, `catasto`, `dati`, `messaggio`, `id_cliente`) VALUES
(1, 'fabbricato', 'dati_catastali', 'ciao diego', 0),
(2, 'fabbricato', 'civico', 'Via Vannucci 2 Brescia', 0),
(3, 'fabbricato', 'dati_anagrafici', 'Via Vannucci 2 Brescia', 0),
(4, 'fabbricato', 'dati_anagrafici', 'Via Vannucci 2 Brescia', 0);

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `dati_fatturazione`
--
ALTER TABLE `dati_fatturazione`
  ADD PRIMARY KEY (`ID`);

--
-- Indici per le tabelle `visure`
--
ALTER TABLE `visure`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `dati_fatturazione`
--
ALTER TABLE `dati_fatturazione`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT per la tabella `visure`
--
ALTER TABLE `visure`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
