-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 29, 2024 at 10:04 PM
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
(37, '1', '1', '1', ''),
(38, '2', '2', '2', ''),
(39, '3', '3', '3', ''),
(40, '4', '4', '4', ''),
(41, '5', '5', '5', ''),
(42, '6', '6', '6', ''),
(43, '7', '7', '7', ''),
(44, '8', '8', '8', ''),
(45, '9', '9', '9', ''),
(46, '10', '10', '10', ''),
(47, '11', '11', '11', ''),
(48, '12', '12', '12', ''),
(49, '13', '13', '13', ''),
(50, '14', '14', '14', '');

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
  MODIFY `artykul_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `zdj`
--
ALTER TABLE `zdj`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
