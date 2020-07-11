-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:8889
-- Время создания: Июл 11 2020 г., 20:58
-- Версия сервера: 5.7.25
-- Версия PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `leadsave`
--

-- --------------------------------------------------------

--
-- Структура таблицы `lead`
--

CREATE TABLE `lead` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `partners` varchar(255) NOT NULL,
  `status` int(11) DEFAULT NULL,
  `dates` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `lead`
--

INSERT INTO `lead` (`id`, `name`, `phone`, `partners`, `status`, `dates`) VALUES
(1, 'Peter Persin', '39404949494949', 'webvork', 1, '2020-07-07 00:00:00'),
(3, 'Peter Persin', '39404949494949', 'webvork', 1, '2020-07-10 00:00:00'),
(6, 'Alex Rodovski', '9328482905902399', 'leadrock', 1, '2020-07-11 20:07:35'),
(11, 'Semen', '9329483294823848', 'leadrock', 1, '2020-07-11 00:00:00'),
(12, 'Alex Rodovski', '9328482905902399', 'leadrock', 1, '2020-07-11 20:07:35');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `lead`
--
ALTER TABLE `lead`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `lead`
--
ALTER TABLE `lead`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
