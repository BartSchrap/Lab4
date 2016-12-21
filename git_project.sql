-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Gegenereerd op: 19 dec 2016 om 10:10
-- Serverversie: 5.6.25
-- PHP-versie: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `git project`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `instructor-admin`
--

CREATE TABLE IF NOT EXISTS `instructor-admin` (
  `ID` int(11) NOT NULL,
  `UserStatus` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `naam` varchar(30) NOT NULL,
  `datum eerste les` date NOT NULL,
  `datum laatste les` date NOT NULL,
  `lesnummer` int(11) NOT NULL,
  `tijd besteed aan student` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `planning`
--

CREATE TABLE IF NOT EXISTS `planning` (
  `datum` date NOT NULL,
  `cursusnaam` varchar(30) NOT NULL,
  `aantal deelnemers` int(11) NOT NULL,
  `instructeurs` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `trainingen`
--

CREATE TABLE IF NOT EXISTS `trainingen` (
  `training` varchar(30) NOT NULL,
  `prijs` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `user-admin`
--

CREATE TABLE IF NOT EXISTS `user-admin` (
  `ID` int(11) NOT NULL,
  `UserStatus` varchar(11) NOT NULL,
  `voornaam` varchar(11) NOT NULL,
  `achternaam` varchar(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `land` varchar(20) NOT NULL,
  `bio` text NOT NULL,
  `datum aanmelding` date NOT NULL,
  `datum inschrijving` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `datum afmelding` date NOT NULL,
  `rol` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `instructor-admin`
--
ALTER TABLE `instructor-admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexen voor tabel `user-admin`
--
ALTER TABLE `user-admin`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `instructor-admin`
--
ALTER TABLE `instructor-admin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT voor een tabel `user-admin`
--
ALTER TABLE `user-admin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
