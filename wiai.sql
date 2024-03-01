-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2024 at 10:28 AM
-- Wersja serwera: 10.4.32-MariaDB
-- Wersja PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wiai`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `administratorzy`
--

CREATE TABLE `administratorzy` (
  `id` int(11) NOT NULL,
  `login` varchar(50) NOT NULL,
  `haslo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `administratorzy`
--

INSERT INTO `administratorzy` (`id`, `login`, `haslo`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `artykul`
--

CREATE TABLE `artykul` (
  `artykul_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `tresc` mediumtext NOT NULL,
  `link` varchar(100) NOT NULL,
  `autor` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `artykul`
--

INSERT INTO `artykul` (`artykul_id`, `title`, `tresc`, `link`, `autor`) VALUES
(1, 'tytuł1', 'treść1', 'link1', 'autor1'),
(2, 'tytuł2', 'treść2', 'link2', 'autor2'),
(3, 'tytuł3', 'treść3', 'link3', 'autor3'),
(4, 'tytuł4', 'treść4', 'link4', 'autor4'),
(5, 'tytuł5', 'treść5', 'link5', 'autor5'),
(6, 'tytuł6', 'treść6', 'link6', 'autor6'),
(7, 'tytuł7', 'treść7', 'link7', 'autor7'),
(8, 'tytuł8', 'treść8', 'link8', 'autor8'),
(9, 'tytuł9', 'treść9', 'link9', 'autor9'),
(10, 'tytuł10', 'treść10', 'link10', 'autor10'),
(11, 'tytuł11', 'treść11', 'link11', 'autor11'),
(12, 'tytuł12', 'treść12', 'link12', 'autor12'),
(13, 'tytuł13', 'treść13', 'link13', 'autor13'),
(14, 'tytuł14', 'treść14', 'link14', 'autor14'),
(15, 'tytuł15', 'treść15', 'link15', 'autor15'),
(16, 'tytuł16', 'treść16', 'link16', 'autor16'),
(17, 'tytuł17', 'treść17', 'link17', 'autor17'),
(18, 'tytuł18', 'treść18', 'link18', 'autor18'),
(19, 'tytuł19', 'treść19', 'link19', 'autor19'),
(20, 'tytuł20', 'treść20', 'link20', 'autor20');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zdj`
--

CREATE TABLE `zdj` (
  `id` int(11) NOT NULL,
  `nazwa` varchar(100) NOT NULL,
  `opis` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `zdj`
--

INSERT INTO `zdj` (`id`, `nazwa`, `opis`, `path`) VALUES
(1, '', '', './zdj/1.jpg'),
(2, '', '', './zdj/2.jpg'),
(3, '', '', './zdj/3.jpeg'),
(4, '', '', './zdj/4.jpg'),
(5, '', '', './zdj/5.jpeg'),
(6, '', '', './zdj/6.jpeg'),
(7, '', '', './zdj/7.jpeg'),
(8, '', '', './zdj/8.jpeg'),
(9, '', '', './zdj/9.jpeg'),
(10, '', '', './zdj/10.jpeg');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `administratorzy`
--
ALTER TABLE `administratorzy`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `artykul`
--
ALTER TABLE `artykul`
  ADD PRIMARY KEY (`artykul_id`);

--
-- Indeksy dla tabeli `zdj`
--
ALTER TABLE `zdj`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administratorzy`
--
ALTER TABLE `administratorzy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `artykul`
--
ALTER TABLE `artykul`
  MODIFY `artykul_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `zdj`
--
ALTER TABLE `zdj`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
