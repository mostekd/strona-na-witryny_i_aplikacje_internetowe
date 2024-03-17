-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2024 at 09:59 AM
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
  `login` varchar(255) NOT NULL,
  `haslo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `administratorzy`
--

INSERT INTO `administratorzy` (`id`, `login`, `haslo`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `artykul`
--

CREATE TABLE `artykul` (
  `artykul_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `tresc` longtext NOT NULL,
  `link` longtext NOT NULL,
  `autor` varchar(255) NOT NULL,
  `data` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `artykul`
--

INSERT INTO `artykul` (`artykul_id`, `title`, `tresc`, `link`, `autor`, `data`) VALUES
(50, 'test', 'test', 'https://pl.wikipedia.org/wiki/Biblioteka', 'test', '2024-03-09 22:23:01'),
(51, 'test2', 'test2', 'https://pl.wikipedia.org/wiki/Biblioteka', 'test2', '2024-03-10 10:24:09'),
(55, '', 'asdsad', '', '', '2024-03-13 12:00:15'),
(56, '', 'dasda', '', '', '2024-03-13 12:00:25'),
(57, '', 'dsadas', '', '', '2024-03-13 12:01:06'),
(58, 'asdasd', 'asdasd', '', 'asdas', '2024-03-13 12:01:10');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `ksiazki`
--

CREATE TABLE `ksiazki` (
  `id_ksiazki` int(11) NOT NULL,
  `tytul` varchar(255) NOT NULL,
  `autor` varchar(255) NOT NULL,
  `wydawnictwo` varchar(255) NOT NULL,
  `rok_wydania` varchar(255) NOT NULL,
  `isbn` varchar(255) NOT NULL,
  `aktywna` tinyint(1) NOT NULL,
  `uwagi` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `ksiazki`
--

INSERT INTO `ksiazki` (`id_ksiazki`, `tytul`, `autor`, `wydawnictwo`, `rok_wydania`, `isbn`, `aktywna`, `uwagi`) VALUES
(146, 'Harry Potter i Kamień Filozoficzny', 'J.K. Rowling', 'Media Rodzina', '2016', '9781408855652', 1, '');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uczen`
--

CREATE TABLE `uczen` (
  `id_ucznia` int(11) NOT NULL,
  `imie` varchar(50) NOT NULL,
  `nazwisko` varchar(50) NOT NULL,
  `PESEL` varchar(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `uwagi` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `uczen`
--

INSERT INTO `uczen` (`id_ucznia`, `imie`, `nazwisko`, `PESEL`, `email`, `uwagi`) VALUES
(45, 'test', 'test', '01234567890', 'test@test.pl', 'test');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `wpisy_urzytkownika`
--

CREATE TABLE `wpisy_urzytkownika` (
  `id_wpisu_urzytkownika` int(11) NOT NULL,
  `tytul` varchar(255) NOT NULL,
  `tresc` longtext NOT NULL,
  `autor` varchar(255) NOT NULL,
  `data` datetime NOT NULL,
  `aktywny` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `wpisy_urzytkownika`
--

INSERT INTO `wpisy_urzytkownika` (`id_wpisu_urzytkownika`, `tytul`, `tresc`, `autor`, `data`, `aktywny`) VALUES
(6, 'test', 'test', 'test', '2024-03-11 21:55:46', 0);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `wypożyczenia`
--

CREATE TABLE `wypożyczenia` (
  `id_wyporzyczenia` int(11) NOT NULL,
  `id_ksiazki` int(11) NOT NULL,
  `id_ucznia` int(11) NOT NULL,
  `data_wypozyczenia` datetime NOT NULL,
  `data_zwrotu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zdj`
--

CREATE TABLE `zdj` (
  `id` int(11) NOT NULL,
  `nazwa` varchar(255) NOT NULL,
  `opis` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `zdj`
--

INSERT INTO `zdj` (`id`, `nazwa`, `opis`, `path`) VALUES
(1, '', '', '../zdj/1.jpg'),
(2, '', '', '../zdj/2.jpg'),
(3, '', '', '../zdj/3.jpeg'),
(4, '', '', '../zdj/4.jpg'),
(5, '', '', '../zdj/5.jpeg'),
(6, '', '', '../zdj/6.jpeg'),
(7, '', '', '../zdj/7.jpeg'),
(8, '', '', '../zdj/8.jpeg'),
(9, '', '', '../zdj/9.jpeg'),
(10, '', '', '../zdj/10.jpeg');

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
-- Indeksy dla tabeli `ksiazki`
--
ALTER TABLE `ksiazki`
  ADD PRIMARY KEY (`id_ksiazki`);

--
-- Indeksy dla tabeli `uczen`
--
ALTER TABLE `uczen`
  ADD PRIMARY KEY (`id_ucznia`);

--
-- Indeksy dla tabeli `wpisy_urzytkownika`
--
ALTER TABLE `wpisy_urzytkownika`
  ADD PRIMARY KEY (`id_wpisu_urzytkownika`);

--
-- Indeksy dla tabeli `wypożyczenia`
--
ALTER TABLE `wypożyczenia`
  ADD PRIMARY KEY (`id_wyporzyczenia`),
  ADD KEY `id_ksiazki` (`id_ksiazki`),
  ADD KEY `id_ucznia` (`id_ucznia`);

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
  MODIFY `artykul_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `ksiazki`
--
ALTER TABLE `ksiazki`
  MODIFY `id_ksiazki` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=147;

--
-- AUTO_INCREMENT for table `uczen`
--
ALTER TABLE `uczen`
  MODIFY `id_ucznia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `wpisy_urzytkownika`
--
ALTER TABLE `wpisy_urzytkownika`
  MODIFY `id_wpisu_urzytkownika` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `wypożyczenia`
--
ALTER TABLE `wypożyczenia`
  MODIFY `id_wyporzyczenia` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `zdj`
--
ALTER TABLE `zdj`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `wypożyczenia`
--
ALTER TABLE `wypożyczenia`
  ADD CONSTRAINT `wypożyczenia_ibfk_1` FOREIGN KEY (`id_ucznia`) REFERENCES `uczen` (`id_ucznia`),
  ADD CONSTRAINT `wypożyczenia_ibfk_2` FOREIGN KEY (`id_ksiazki`) REFERENCES `ksiazki` (`id_ksiazki`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
