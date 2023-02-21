-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Фев 21 2023 г., 12:05
-- Версия сервера: 8.0.32-0ubuntu0.20.04.2
-- Версия PHP: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `courses`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` int NOT NULL,
  `name` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `is_active` tinyint NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `is_active`) VALUES
(1, 'Мобильные телефоны', 'Это мобильные телефоны', 1),
(2, 'Планшеты', NULL, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `courses`
--

CREATE TABLE `courses` (
  `id` int NOT NULL,
  `title` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `is_display` tinyint(1) NOT NULL DEFAULT '1',
  `start_date` datetime NOT NULL,
  `end_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `courses`
--

INSERT INTO `courses` (`id`, `title`, `description`, `is_display`, `start_date`, `end_date`) VALUES
(1, 'Web developer', NULL, 1, '2023-02-15 15:36:00', '2023-02-15 15:36:00');

-- --------------------------------------------------------

--
-- Структура таблицы `course_student`
--

CREATE TABLE `course_student` (
  `id` int NOT NULL,
  `student_id` int NOT NULL,
  `course_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `course_student`
--

INSERT INTO `course_student` (`id`, `student_id`, `course_id`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 4, 1),
(4, 3, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `course_teacher`
--

CREATE TABLE `course_teacher` (
  `id` int NOT NULL,
  `course_id` int NOT NULL,
  `teacher_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `course_teacher`
--

INSERT INTO `course_teacher` (`id`, `course_id`, `teacher_id`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `currencies`
--

CREATE TABLE `currencies` (
  `id` int NOT NULL,
  `name` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `currencies`
--

INSERT INTO `currencies` (`id`, `name`, `code`, `unit`) VALUES
(1, 'Доллар', 'USD', '$'),
(2, 'Евро', 'EUR', '€');

-- --------------------------------------------------------

--
-- Структура таблицы `lessons`
--

CREATE TABLE `lessons` (
  `id` int NOT NULL,
  `title` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `lessons`
--

INSERT INTO `lessons` (`id`, `title`, `description`, `course_id`) VALUES
(1, 'Работа с git', 'Основные команды\nВетвление и состояния в git\nКомандная работа в git', 1),
(2, 'Основы работы с PHP', 'Введение в php: типы данных, переменные, значение null, константы, комментарии, вставка php-кода на страницу\r\nАрифметика языка: сложение, вычитание, умножение, деление\r\nЛогические операции (ИЛИ, НЕ, И)', 1),
(3, 'Функциональное программирование в языке PHP', 'Понятие функции в языке PHP\r\nАнонимные и стрелочные функции\r\nРекурсивные функции\r\nФункции обратного вызова\r\nБазовые функции PHP - справочники функций\r\nМатематические функции в PHP\r\nФункции для работы с датой', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `partners`
--

CREATE TABLE `partners` (
  `id` int NOT NULL,
  `title` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `image_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_display` tinyint(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int DEFAULT NULL,
  `manufacturer` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `name`, `category_id`, `manufacturer`) VALUES
(1, 'Samsung max 7', 1, 'Samsung'),
(2, 'Huawei plus 6', NULL, 'Huawei'),
(3, 'test1', NULL, 'test'),
(4, 'iPhone galaxy 6', NULL, 'iPhone'),
(5, 'Google max 10', NULL, 'Google'),
(6, 'iPhone plus 12', NULL, 'iPhone'),
(7, 'iPhone max 7', NULL, 'iPhone'),
(8, 'Xiaomi max 13', NULL, 'Xiaomi'),
(9, 'Samsung mega 13', NULL, 'Samsung'),
(10, 'Samsung mega 9', NULL, 'Samsung'),
(11, 'Xiaomi ultra 10', NULL, 'Xiaomi'),
(12, 'Xiaomi plus 11', NULL, 'Xiaomi'),
(13, 'Samsung galaxy 5', NULL, 'Samsung'),
(14, 'Samsung plus 7', NULL, 'Samsung'),
(15, 'LG galaxy 8', NULL, 'LG'),
(16, 'Samsung plus 4', NULL, 'Samsung'),
(17, 'Xiaomi galaxy 13', NULL, 'Xiaomi'),
(18, 'Huawei galaxy 7', NULL, 'Huawei'),
(19, 'iPhone plus 13', NULL, 'iPhone'),
(20, 'Huawei plus 10', NULL, 'Huawei'),
(21, 'Samsung mega 6', NULL, 'Samsung'),
(22, 'Xiaomi max 13', NULL, 'Xiaomi'),
(23, 'Google ultra 8', NULL, 'Google'),
(24, 'Samsung plus 9', NULL, 'Samsung'),
(25, 'Xiaomi mega 10', NULL, 'Xiaomi'),
(26, 'Samsung plus 9', NULL, 'Samsung'),
(27, 'iPhone mega 10', NULL, 'iPhone'),
(28, 'Huawei galaxy 6', NULL, 'Huawei'),
(29, 'Huawei max 6', NULL, 'Huawei'),
(30, 'LG ultra 10', NULL, 'LG'),
(31, 'Google galaxy 12', NULL, 'Google'),
(32, 'iPhone galaxy 8', NULL, 'iPhone'),
(33, 'Google ultra 5', NULL, 'Google'),
(34, 'LG plus 9', NULL, 'LG'),
(35, 'Google mega 4', NULL, 'Google'),
(36, 'Xiaomi ultra 9', NULL, 'Xiaomi'),
(37, 'LG max 7', NULL, 'LG'),
(38, 'iPhone mega 9', NULL, 'iPhone'),
(39, 'Xiaomi plus 13', NULL, 'Xiaomi'),
(40, 'Xiaomi max 7', NULL, 'Xiaomi'),
(41, 'LG galaxy 3', NULL, 'LG'),
(42, 'Google galaxy 11', NULL, 'Google'),
(43, 'Samsung mega 13', NULL, 'Samsung'),
(44, 'Google plus 13', NULL, 'Google'),
(45, 'iPhone mega 12', NULL, 'iPhone'),
(46, 'Samsung mega 4', NULL, 'Samsung'),
(47, 'Xiaomi galaxy 8', NULL, 'Xiaomi'),
(48, 'Samsung plus 8', NULL, 'Samsung'),
(49, 'Xiaomi max 9', NULL, 'Xiaomi'),
(50, 'iPhone plus 5', NULL, 'iPhone'),
(51, 'iPhone mega 5', NULL, 'iPhone'),
(52, 'Samsung max 9', NULL, 'Samsung'),
(53, 'Huawei max 5', NULL, 'Huawei'),
(54, 'LG ultra 9', NULL, 'LG'),
(55, 'Google max 4', NULL, 'Google'),
(57, 'Samsung galaxy 10', NULL, 'Samsung'),
(58, 'iPhone galaxy 7', NULL, 'iPhone'),
(59, 'LG galaxy 9', NULL, 'LG'),
(60, 'Huawei max 7', NULL, 'Huawei'),
(61, 'Google mega 3', NULL, 'Google'),
(62, 'Huawei galaxy 4', NULL, 'Huawei'),
(63, 'Samsung ultra 10', NULL, 'Samsung'),
(64, 'Xiaomi max 6', NULL, 'Xiaomi'),
(65, 'LG galaxy 11', NULL, 'LG'),
(66, 'Google max 13', NULL, 'Google'),
(67, 'Xiaomi mega 5', NULL, 'Xiaomi'),
(68, 'LG mega 11', NULL, 'LG'),
(69, 'LG mega 6', NULL, 'LG'),
(70, 'Samsung max 13', NULL, 'Samsung'),
(71, 'Samsung plus 10', NULL, 'Samsung'),
(72, 'Google ultra 11', NULL, 'Google'),
(73, 'Google max 3', NULL, 'Google'),
(74, 'iPhone ultra 6', NULL, 'iPhone'),
(75, 'Xiaomi ultra 11', NULL, 'Xiaomi'),
(76, 'Huawei mega 5', NULL, 'Huawei'),
(77, 'Huawei mega 4', NULL, 'Huawei'),
(78, 'Xiaomi max 7', NULL, 'Xiaomi'),
(79, 'Xiaomi max 8', NULL, 'Xiaomi'),
(80, 'Google galaxy 9', NULL, 'Google'),
(81, 'Samsung ultra 7', NULL, 'Samsung'),
(82, 'Samsung ultra 13', NULL, 'Samsung'),
(83, 'Google galaxy 12', NULL, 'Google'),
(84, 'Huawei max 3', NULL, 'Huawei'),
(85, 'iPhone plus 4', NULL, 'iPhone'),
(86, 'LG max 8', NULL, 'LG'),
(87, 'Xiaomi max 8', NULL, 'Xiaomi'),
(88, 'Samsung mega 3', NULL, 'Samsung'),
(89, 'Huawei mega 5', NULL, 'Huawei'),
(90, 'Google max 12', NULL, 'Google'),
(91, 'LG ultra 8', NULL, 'LG'),
(92, 'Xiaomi max 12', NULL, 'Xiaomi'),
(93, 'LG mega 13', NULL, 'LG'),
(94, 'Huawei max 11', NULL, 'Huawei'),
(95, 'Samsung ultra 10', NULL, 'Samsung'),
(96, 'Samsung plus 3', NULL, 'Samsung'),
(97, 'Xiaomi ultra 9', NULL, 'Xiaomi'),
(98, 'Samsung plus 11', NULL, 'Samsung'),
(99, 'iPhone plus 10', NULL, 'iPhone'),
(100, 'Samsung plus 11', NULL, 'Samsung'),
(101, 'new phone', NULL, 'iphone'),
(102, 'new phone', NULL, 'iphone'),
(103, 'New product', NULL, 'iphone'),
(104, 'test', NULL, 'test'),
(105, 'test', NULL, 'test'),
(106, 'test', NULL, 'test'),
(107, 'test', NULL, 'test');

-- --------------------------------------------------------

--
-- Структура таблицы `product_feature`
--

CREATE TABLE `product_feature` (
  `id` int NOT NULL,
  `name` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unit` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `product_feature`
--

INSERT INTO `product_feature` (`id`, `name`, `description`, `unit`) VALUES
(1, 'Размер', 'Размер обуви в европейском формате', ''),
(2, 'Цвет', 'Цвет', ''),
(3, 'Диагональ экрана', 'Диагональ экрана', '\"'),
(4, 'Частота экрана', 'Величина, обозначающая, сколько раз в секунду обновляется изображение на экране.', 'Гц'),
(5, 'Оперативная память', 'Оперативной память обеспечивает высокую функциональность и производительность компьютера за счет повышения скорости обработки данных.', 'Гб'),
(6, 'Емкость аккумулятора', 'Количество электрической энергии, которое может отдать полностью заряженный аккумулятор при определенном режиме разряда и температуре от начального до конечного напряжения', 'Ач');

-- --------------------------------------------------------

--
-- Структура таблицы `product_feature_values`
--

CREATE TABLE `product_feature_values` (
  `id` int NOT NULL,
  `product_id` int NOT NULL,
  `feature_id` int NOT NULL,
  `value` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `product_feature_values`
--

INSERT INTO `product_feature_values` (`id`, `product_id`, `feature_id`, `value`) VALUES
(3, 1, 3, '6.25'),
(4, 1, 4, '90'),
(5, 1, 5, '8'),
(6, 1, 6, '4300');

-- --------------------------------------------------------

--
-- Структура таблицы `product_prices`
--

CREATE TABLE `product_prices` (
  `id` int NOT NULL,
  `product_id` int DEFAULT NULL,
  `store_id` int DEFAULT NULL,
  `currency_id` int DEFAULT NULL,
  `price` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `product_prices`
--

INSERT INTO `product_prices` (`id`, `product_id`, `store_id`, `currency_id`, `price`) VALUES
(1, 1, 1, 1, '10'),
(2, 1, 2, 2, '14');

-- --------------------------------------------------------

--
-- Структура таблицы `product_quantity`
--

CREATE TABLE `product_quantity` (
  `id` int NOT NULL,
  `store_id` int DEFAULT NULL,
  `product_id` int DEFAULT NULL,
  `quantity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `product_quantity`
--

INSERT INTO `product_quantity` (`id`, `store_id`, `product_id`, `quantity`) VALUES
(1, 1, 1, 5),
(2, 2, 1, 7),
(3, 1, 2, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `stores`
--

CREATE TABLE `stores` (
  `id` int NOT NULL,
  `name` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `address` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `work_hours` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `stores`
--

INSERT INTO `stores` (`id`, `name`, `description`, `address`, `work_hours`) VALUES
(1, 'Пункт выдачи на победителей', NULL, 'Победителей 131', '08.00 - 20.00 будни, сб - вс выходной'),
(2, 'Пункт выдачи на независимости', 'Пункт выдачи на независимости', 'независимости 45', '08.00 - 20.00 будни, сб - вс выходной');

-- --------------------------------------------------------

--
-- Структура таблицы `stories`
--

CREATE TABLE `stories` (
  `id` int NOT NULL,
  `title` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_draft` tinyint(1) NOT NULL DEFAULT '0',
  `publication_at` datetime NOT NULL,
  `image_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `students`
--

CREATE TABLE `students` (
  `id` int NOT NULL,
  `name` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(55) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(55) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `students`
--

INSERT INTO `students` (`id`, `name`, `description`, `email`, `phone`, `country`) VALUES
(1, 'Andrey', '', '', '+375297564756', 'Belarus'),
(2, 'Alex', 'Test description', '', NULL, 'Belarus'),
(3, 'Roman', 'dfdsf', '', NULL, 'Belarus'),
(4, 'David', '', '', '+3753245345', 'Latvia');

-- --------------------------------------------------------

--
-- Структура таблицы `teachers`
--

CREATE TABLE `teachers` (
  `id` int NOT NULL,
  `surname` varchar(55) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(55) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `image_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `teachers`
--

INSERT INTO `teachers` (`id`, `surname`, `name`, `email`, `phone`, `description`, `image_url`) VALUES
(1, 'Mikser', 'Nikita', '', NULL, NULL, NULL),
(2, 'Test', 'Maria', '', '+45435345345', NULL, NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `course_student`
--
ALTER TABLE `course_student`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course_student_ibfk_1` (`course_id`),
  ADD KEY `course_student_ibfk_2` (`student_id`);

--
-- Индексы таблицы `course_teacher`
--
ALTER TABLE `course_teacher`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course_teacher_ibfk_1` (`course_id`),
  ADD KEY `course_teacher_ibfk_2` (`teacher_id`);

--
-- Индексы таблицы `currencies`
--
ALTER TABLE `currencies`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `lessons`
--
ALTER TABLE `lessons`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lessons_ibfk_1` (`course_id`);

--
-- Индексы таблицы `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_ibfk_1` (`category_id`);

--
-- Индексы таблицы `product_feature`
--
ALTER TABLE `product_feature`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `product_feature_values`
--
ALTER TABLE `product_feature_values`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `feature_id` (`feature_id`);

--
-- Индексы таблицы `product_prices`
--
ALTER TABLE `product_prices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `currency_id` (`currency_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `store_id` (`store_id`);

--
-- Индексы таблицы `product_quantity`
--
ALTER TABLE `product_quantity`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `store_id` (`store_id`);

--
-- Индексы таблицы `stores`
--
ALTER TABLE `stores`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `stories`
--
ALTER TABLE `stories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `course_student`
--
ALTER TABLE `course_student`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `course_teacher`
--
ALTER TABLE `course_teacher`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `currencies`
--
ALTER TABLE `currencies`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `lessons`
--
ALTER TABLE `lessons`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `partners`
--
ALTER TABLE `partners`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT для таблицы `product_feature`
--
ALTER TABLE `product_feature`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `product_feature_values`
--
ALTER TABLE `product_feature_values`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `product_prices`
--
ALTER TABLE `product_prices`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `product_quantity`
--
ALTER TABLE `product_quantity`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `stores`
--
ALTER TABLE `stores`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `stories`
--
ALTER TABLE `stories`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `students`
--
ALTER TABLE `students`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `course_student`
--
ALTER TABLE `course_student`
  ADD CONSTRAINT `course_student_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT,
  ADD CONSTRAINT `course_student_ibfk_2` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT;

--
-- Ограничения внешнего ключа таблицы `course_teacher`
--
ALTER TABLE `course_teacher`
  ADD CONSTRAINT `course_teacher_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT,
  ADD CONSTRAINT `course_teacher_ibfk_2` FOREIGN KEY (`teacher_id`) REFERENCES `teachers` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT;

--
-- Ограничения внешнего ключа таблицы `lessons`
--
ALTER TABLE `lessons`
  ADD CONSTRAINT `lessons_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT;

--
-- Ограничения внешнего ключа таблицы `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL ON UPDATE RESTRICT;

--
-- Ограничения внешнего ключа таблицы `product_feature_values`
--
ALTER TABLE `product_feature_values`
  ADD CONSTRAINT `product_feature_values_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `product_feature_values_ibfk_2` FOREIGN KEY (`feature_id`) REFERENCES `product_feature` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `product_prices`
--
ALTER TABLE `product_prices`
  ADD CONSTRAINT `product_prices_ibfk_1` FOREIGN KEY (`currency_id`) REFERENCES `currencies` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `product_prices_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `product_prices_ibfk_3` FOREIGN KEY (`store_id`) REFERENCES `stores` (`id`) ON DELETE SET NULL;

--
-- Ограничения внешнего ключа таблицы `product_quantity`
--
ALTER TABLE `product_quantity`
  ADD CONSTRAINT `product_quantity_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `product_quantity_ibfk_2` FOREIGN KEY (`store_id`) REFERENCES `stores` (`id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
