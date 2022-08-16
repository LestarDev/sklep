-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 13 Cze 2022, 10:20
-- Wersja serwera: 10.4.21-MariaDB
-- Wersja PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `sklep`
--

DELIMITER $$
--
-- Procedury
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `Al` ()  BEGIN
	SELECT * FROM produkty;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `last_id` ()  BEGIN
	SELECT id FROM produkty WHERE id=(select max(id) from produkty); 
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `change_password_request`
--

CREATE TABLE `change_password_request` (
  `id` int(11) NOT NULL,
  `id_profilu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `kategorie`
--

CREATE TABLE `kategorie` (
  `id` int(11) NOT NULL,
  `id_produktu` int(11) NOT NULL,
  `elektronika` int(1) NOT NULL,
  `moda` int(1) NOT NULL,
  `dom_i_ogrod` int(1) NOT NULL,
  `supermarket` int(1) NOT NULL,
  `dziecko` int(1) NOT NULL,
  `uroda` int(1) NOT NULL,
  `zdrowie` int(1) NOT NULL,
  `kultura_i_rozrywka` int(1) NOT NULL,
  `sport_i_turystyka` int(1) NOT NULL,
  `motoryzacja` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `kategorie`
--

INSERT INTO `kategorie` (`id`, `id_produktu`, `elektronika`, `moda`, `dom_i_ogrod`, `supermarket`, `dziecko`, `uroda`, `zdrowie`, `kultura_i_rozrywka`, `sport_i_turystyka`, `motoryzacja`) VALUES
(2, 13, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0),
(4, 15, 0, 1, 0, 0, 0, 1, 0, 0, 0, 0),
(5, 16, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0),
(6, 17, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0),
(8, 18, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0),
(9, 19, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `koszyk`
--

CREATE TABLE `koszyk` (
  `id` int(11) NOT NULL,
  `id_profilu` int(11) NOT NULL,
  `id_produktu` int(11) NOT NULL,
  `ilosc` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `koszyk`
--

INSERT INTO `koszyk` (`id`, `id_profilu`, `id_produktu`, `ilosc`) VALUES
(22, 4, 19, 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `kupione`
--

CREATE TABLE `kupione` (
  `id` int(11) NOT NULL,
  `id_produktu` int(11) NOT NULL,
  `id_profilu` int(11) NOT NULL,
  `data` date NOT NULL,
  `ilosc` int(3) NOT NULL,
  `stan` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `kupione`
--

INSERT INTO `kupione` (`id`, `id_produktu`, `id_profilu`, `data`, `ilosc`, `stan`) VALUES
(4, 15, 4, '2022-06-05', 1, 4),
(5, 16, 1, '2022-06-06', 1, 0),
(6, 13, 1, '2022-06-06', 1, 0),
(8, 18, 1, '2022-06-06', 1, 0),
(9, 19, 1, '2022-06-13', 6, 3),
(10, 15, 5, '2022-06-13', 1, 0);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `opcje_dostawy`
--

CREATE TABLE `opcje_dostawy` (
  `id_produktu` int(11) NOT NULL,
  `paczkomat_inpost` int(1) NOT NULL,
  `orlen` int(1) NOT NULL,
  `poczta_polska` int(1) NOT NULL,
  `ruch` int(1) NOT NULL,
  `zabka` int(1) NOT NULL,
  `lewiatan` int(1) NOT NULL,
  `abc` int(1) NOT NULL,
  `odbior_osobisty` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `opcje_dostawy`
--

INSERT INTO `opcje_dostawy` (`id_produktu`, `paczkomat_inpost`, `orlen`, `poczta_polska`, `ruch`, `zabka`, `lewiatan`, `abc`, `odbior_osobisty`) VALUES
(4, 1, 0, 0, 0, 1, 0, 0, 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `produkty`
--

CREATE TABLE `produkty` (
  `id` int(11) NOT NULL,
  `nazwa` varchar(32) COLLATE utf8mb4_polish_ci NOT NULL,
  `ilosc` int(6) NOT NULL,
  `ilosc_dostepnych` int(6) NOT NULL,
  `id_sprzedawca` int(11) NOT NULL,
  `cena` float NOT NULL,
  `marza` int(3) NOT NULL,
  `data_waznosci` date NOT NULL,
  `licytacja` int(1) NOT NULL,
  `wystawianie_faktury_vat` int(1) NOT NULL,
  `opis` text COLLATE utf8mb4_polish_ci NOT NULL,
  `zdjecie_miniaturka` text COLLATE utf8mb4_polish_ci NOT NULL,
  `widocznosc` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `produkty`
--

INSERT INTO `produkty` (`id`, `nazwa`, `ilosc`, `ilosc_dostepnych`, `id_sprzedawca`, `cena`, `marza`, `data_waznosci`, `licytacja`, `wystawianie_faktury_vat`, `opis`, `zdjecie_miniaturka`, `widocznosc`) VALUES
(11, 'arturProdukt', 2, 2, 2, 33, 20, '2022-04-30', 0, 1, 'Produkt artura', 'https://s3.przepisy.pl/przepisy3ii/img/variants/1280x0/jablko1213810.jpg', 1),
(12, 'a-t1', 2, 1, 2, 33, 100, '2022-03-26', 0, 1, 'test kategorii', 'https://sklep.onlemon.pl/data/include/img/news/1606817970.jpg', 0),
(13, 'a-t1', 2, 1, 2, 33, 100, '2022-03-26', 1, 0, 'test kategorii', 'https://sklep.onlemon.pl/data/include/img/news/1606817970.jpg', 0),
(15, 'Paczka', 1, 1, 0, 10, 0, '2022-03-26', 0, 1, 'Paczka, zwykly karton z powietrzem', 'https://www.pewnykurier.pl/theme/Pewnykurier2/img/paczki_standardowe.png', 0),
(16, 'Pilka', 10, 9, 1, 20, 2, '2022-03-26', 0, 0, 'Zwykla pilka', 'logo_judgment.png', 0),
(17, 'xxx', 2, 2, 1, 200, 10, '2022-04-13', 1, 1, 'jaqnbvjabjabvjasbvjsad\r\n bvjadsbvkabvjkabvk\r\njabvjdbvkjdsbvjdsjaqnbvjabjabvjasbvjsad\r\n bvjadsbvkabvjkabvk\r\njabvjdbvkjdsbvjdsv\r\nsdlnvlvnbsdalvbnsdjlvbsdkjvbsdkjvbsdkjvbsdjkvbsdkvjaqnbvjabjabvjasbvjsad\r\n bvjadsbvkabvjkabvk\r\njabvjdbvkjdsbvjdsv\r\nsdlnvlvnbsdalvbnsdjlvbsdkjvbsdkjvbsdkjvbsdjkvbsdkvjaqnbvjabjabvjasbvjsad\r\n bvjadsbvkabvjkabvk\r\njabvjdbvkjdsbvjdsv\r\nsdlnvlvnbsdalvbnsdjlvbsdkjvbsdkjvbsdkjvbsdjkvbsdkvv\r\nsdlnvlvnbsdalvbnsdjlvjaqnbvjabjabvjasbvjsad\r\n bvjadsbvkabvjkabvk\r\njabvjdbvkjdsbvjdsv\r\nsdlnvlvnbsdalvbnsdjlvbsdkjvbsdkjvbsdkjvbsdjkvbsdkvjaqnbvjabjabvjasbvjsad\r\n bvjadsbvkabvjkabvk\r\njabvjdbvkjdsbvjdsv\r\nsdlnvlvnbsdalvbnsdjlvbsdkjvbsdkjvbsdkjvbsdjkvbsdkvjaqnbvjabjabvjasbvjsad\r\n bvjadsbvkabvjkabvk\r\njabvjdbvkjdsbvjdsv\r\nsdlnvlvnbsdalvbnsdjlvbsdkjvbsdkjvbsdkjvbsdjkvbsdkvjaqnbvjabjabvjasbvjsad\r\n bvjadsbvkabvjkabvk\r\njabvjdbvkjdsbvjdsv\r\nsdlnvlvnbsdalvbnsdjlvbsdkjvbsdkjvbsdkjvbsdjkvbsdkvbsdkjvbsdkjvbsdkjvbsdjkvbsdkv', 'C:UsersLestarDownloadsIWP-v5.3.6-WinIWP-v5.3.6-Winimages/world.png', 0),
(18, 'Dynia', 4, 2, 4, 200, 2, '2022-06-16', 0, 1, 'Dynia, bez opakowania, polecam', 'https://cdn.pixabay.com/photo/2013/07/13/10/21/pumpkin-157050_960_720.png', 0),
(19, 'Cytryna - luzem', 7, 7, 4, 5, 2, '2022-07-10', 0, 1, 'Cytryna pakowana luzem, \r\nzapakowanie: pudełko', 'https://wyposazamysklepy.pl/userdata/public/gfx/12806/atrapa-cytryny-bardzo-realistyczna.png', 0);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uzytkownicy`
--

CREATE TABLE `uzytkownicy` (
  `Id` int(11) NOT NULL,
  `imie` varchar(32) COLLATE utf8mb4_polish_ci NOT NULL,
  `nazwisko` varchar(32) COLLATE utf8mb4_polish_ci NOT NULL,
  `email` varchar(64) COLLATE utf8mb4_polish_ci NOT NULL,
  `login` varchar(32) COLLATE utf8mb4_polish_ci NOT NULL,
  `haslo` varchar(32) COLLATE utf8mb4_polish_ci NOT NULL,
  `premium` int(1) NOT NULL,
  `zarejestrowany` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `uzytkownicy`
--

INSERT INTO `uzytkownicy` (`Id`, `imie`, `nazwisko`, `email`, `login`, `haslo`, `premium`, `zarejestrowany`) VALUES
(0, 'Wlasciciel', 'Projektu', 'nic@root.localhot', 'root', 'root', 1, 1),
(1, 'Mateusz', 'Borkowski', 'm.borkowski.2005@gmail.com', 'LestarDev', 'STANDART1', 1, 1),
(2, 'Artur', 'Karczewski', 'pijo@wp.pl', 'pijo123', 'arturk', 0, 0),
(4, 'Gosia', 'Dziekan', 'Gocha@wp.pl', 'gg110sm', 'WitamGocha11', 0, 1),
(5, 'Roberto', 'Niepodam', 'r.kowalski@wp.pl', 'robert1', 'Robert2!', 0, 1);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `change_password_request`
--
ALTER TABLE `change_password_request`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `kategorie`
--
ALTER TABLE `kategorie`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `koszyk`
--
ALTER TABLE `koszyk`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `kupione`
--
ALTER TABLE `kupione`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `produkty`
--
ALTER TABLE `produkty`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `change_password_request`
--
ALTER TABLE `change_password_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT dla tabeli `kategorie`
--
ALTER TABLE `kategorie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT dla tabeli `koszyk`
--
ALTER TABLE `koszyk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT dla tabeli `kupione`
--
ALTER TABLE `kupione`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT dla tabeli `produkty`
--
ALTER TABLE `produkty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
