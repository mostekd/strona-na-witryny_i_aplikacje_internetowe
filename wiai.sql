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

drop database if exists `wiai`;
create database `wiai`;
use `wiai`;

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
-- Struktura tabeli dla tabeli `article`
--

CREATE TABLE `article` (
  `article_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` longtext NOT NULL,
  `link` longtext NOT NULL,
  `author` varchar(255) NOT NULL,
  `data` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`article_id`, `title`, `text`, `link`, `author`, `data`) VALUES
(1, 'Artykuł nr 1', 'A tak sobie piszę bo mogę', 'https://pl.wikipedia.org/wiki/Biblioteka', 'Mostowski', '2024-03-09 22:23:01'),
(2, 'Artykuł nr 2', 'Testowa tresc artykułu numer 2', 'https://pl.wikipedia.org/wiki/Biblioteka', 'Mostowski', '2024-03-10 10:24:09'),
(3, 'Artykuł nr 3', 'Przecież nie damy 3ki pustej', '', 'Mostowski', '2024-03-13 12:00:15'),
(4, 'Artykuł nr 4', 'Do boju do boju do boju!! Raków góra!!!', '', 'Szczepanik', '2024-03-13 12:00:25'),
(5, 'Artykuł nr 5', 'Raków to nie góra a dzielnica w mieście Częstochowa', '', 'Świech', '2024-03-13 12:01:06'),
(6, 'Artykuł nr 6', 'W innych miastach pewnie też.....', '', 'Świech', '2024-03-13 12:01:10');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `book`
--

CREATE TABLE `book` (
  `id_book` int(11) NOT NULL ,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `publisher` varchar(255) NOT NULL,
  `publishYear` varchar(255) NOT NULL,
  `isbn` varchar(255) NOT NULL,
  `active` tinyint(1) NOT NULL,
  `comments` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id_book`, `title`, `author`, `publisher`, `publishYear`, `isbn`, `active`, `comments`) VALUES
(1, 'Harry Potter i Kamień Filozoficzny', 'J.K. Rowling', 'Media Rodzina', '1999', '9781408855652', 1, '');
INSERT INTO `book` (`id_book`, `title`, `author`, `publisher`, `publishYear`, `isbn`, `active`, `comments`) VALUES
(2, 'Harry Potter i Czara Ognia', 'J.K. Rowling', 'Media Rodzina', '2001', '83-7278-021-8', 1, '');
INSERT INTO `book` (`id_book`, `title`, `author`, `publisher`, `publishYear`, `isbn`, `active`, `comments`) VALUES
(3, 'Ciało', 'Stephen King', 'Prima', '1998', 'none', 1, '');

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
  `comments` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `uczen`
--

INSERT INTO `uczen` (`id_ucznia`, `imie`, `nazwisko`, `PESEL`, `email`, `comments`) VALUES
(45, 'test', 'test', '01234567890', 'test@test.pl', 'test');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `guestbook`
--

CREATE TABLE `guestbook` (
  `id_guestbook` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` longtext NOT NULL,
  `author` varchar(255) NOT NULL,
  `data` datetime NOT NULL,
  `active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `guestbook`
--

INSERT INTO `guestbook` (`id_guestbook`, `title`, `text`, `author`, `data`, `active`) VALUES
(1, 'Witam wszystkich', 'pierwszy wpis w księdze gosci', 'Testowy uzytkownik', '2024-03-11 21:55:46', 1);
INSERT INTO `guestbook` (`id_guestbook`, `title`, `text`, `author`, `data`, `active`) VALUES
(2, 'Witam was', 'drugi wpis w księdze gosci', 'Testowy uzytkownik', '2024-03-12 21:55:46', 1);
INSERT INTO `guestbook` (`id_guestbook`, `title`, `text`, `author`, `data`, `active`) VALUES
(3, 'Trolla machają', 'Troll', 'Testowy uzytkownik', '2024-03-13 21:55:46', 1);
INSERT INTO `guestbook` (`id_guestbook`, `title`, `text`, `author`, `data`, `active`) VALUES
(4, 'Harry to kłamca', 'Harry Potter umiera w 9tej części', 'Testowy uzytkownik', '2024-03-14 21:55:46', 0);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `wypożyczenia`
--

CREATE TABLE `wypożyczenia` (
  `id_wyporzyczenia` int(11) NOT NULL,
  `id_book` int(11) NOT NULL,
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
-- Indeksy dla tabeli `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`article_id`);

--
-- Indeksy dla tabeli `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id_book`);

--
-- Indeksy dla tabeli `uczen`
--
ALTER TABLE `uczen`
  ADD PRIMARY KEY (`id_ucznia`);

--
-- Indeksy dla tabeli `guestbook`
--
ALTER TABLE `guestbook`
  ADD PRIMARY KEY (`id_guestbook`);

--
-- Indeksy dla tabeli `wypożyczenia`
--
ALTER TABLE `wypożyczenia`
  ADD PRIMARY KEY (`id_wyporzyczenia`),
  ADD KEY `id_book` (`id_book`),
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
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `article_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id_book` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=147;

--
-- AUTO_INCREMENT for table `uczen`
--
ALTER TABLE `uczen`
  MODIFY `id_ucznia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `guestbook`
--
ALTER TABLE `guestbook`
  MODIFY `id_guestbook` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
  ADD CONSTRAINT `wypożyczenia_ibfk_2` FOREIGN KEY (`id_book`) REFERENCES `book` (`id_book`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
