-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 18 2017 г., 20:56
-- Версия сервера: 5.6.31
-- Версия PHP: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `FAF`
--

-- --------------------------------------------------------

--
-- Структура таблицы `Actors`
--

CREATE TABLE IF NOT EXISTS `Actors` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `birthdate` date NOT NULL,
  `biography` text NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Actors`
--

INSERT INTO `Actors` (`id`, `name`, `lastname`, `birthdate`, `biography`, `photo`) VALUES
(1, 'Пол', 'Уокер', '1973-09-12', 'Пол Уильям Уокер родился 12 сентября 1973 года в американском городе Глендейл, штат Калифорния[10]. Он старший сын бизнесмена Пола Уильяма Уокера III (род. 10 марта 1946)[11] и бывшей модели Шерил Крабтри[12] (они развелись в 2004 году). Пол был старшим ребёнком в семье: у него было два младших брата, Калеб Майкл (род. 4 октября 1977) и Коди Бо (род. 13 июня 1988), и две младшие сёстры, Эшли Джей (род. 5 апреля 1984) и Эми[13]. Семья Уокера — мормоны[11]. У актёра английское происхождение, а также есть ирландские и немецкие корни[14][15].', 'images/gallery/img_3.jp'),
(2, 'Вин ', 'Дизель', '1967-07-18', 'Марк Синклер Винсент родился 18 июля 1967 года в нью-йоркском районе Гринвич-Виллидж в небогатой семье. С самого рождения он вместе со своим братом-близнецом Полом, который был совсем не похож на Вина, рос и воспитывался матерью Делорой, которая была психиатром и увлекалась астрологией. Семья жила в нью-йоркском многоквартирном доме и испытывала нехватку денег. Настоящего отца будущий актёр не знал. Вин Дизель никогда не говорил о своей национальной принадлежности, но подчёркивал принадлежность к разным культурам[1].', 'images/gallery/img_4.jp');

-- --------------------------------------------------------

--
-- Структура таблицы `films`
--

CREATE TABLE IF NOT EXISTS `films` (
  `id` int(11) unsigned NOT NULL,
  `title` varchar(255) NOT NULL,
  `year` int(11) NOT NULL,
  `description` text NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `films`
--

INSERT INTO `films` (`id`, `title`, `year`, `description`, `photo`) VALUES
(1, 'Форсаж', 2001, 'Главный герой — полицейский под прикрытием Брайан О’Коннер (Уокер, Пол). Его цель — быть принятым в автобанду легендарного уличного гонщика Доминика Торетто (Вин Дизель), которого подозревают в налётах на грузовики с бытовой техникой и посадить Доминика Торетто', 'images/gallery/img_1.jpg'),
(2, 'Двойной форсаж', 2003, 'Бывший полицейский Брайан О’Коннер (Пол Уокер) вместе со своим старым другом Романом Пирсом (Тайриз Гибсон) собираются перевезти крупную сумму «грязных» денег известного мафиози Картера Вероне (Коул Хаузер) в качестве его подручных. Но на самом деле эта работа является лишь очередным прикрытием для Брайана, который вместе с тайным агентом Моникой Фуэнтес (Ева Мендес) должны уличить могущественного преступника.', 'images/gallery/img_2.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `Pages`
--

CREATE TABLE IF NOT EXISTS `Pages` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `html` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `Actors`
--
ALTER TABLE `Actors`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `films`
--
ALTER TABLE `films`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `Pages`
--
ALTER TABLE `Pages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `Actors`
--
ALTER TABLE `Actors`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `films`
--
ALTER TABLE `films`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `Pages`
--
ALTER TABLE `Pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
