-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 25 2024 г., 09:25
-- Версия сервера: 5.6.51-log
-- Версия PHP: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `angrobit`
--

-- --------------------------------------------------------

--
-- Структура таблицы `card_shop`
--

CREATE TABLE `card_shop` (
  `id` int(11) NOT NULL,
  `order_name` text,
  `id_users` text,
  `randomn_id` text,
  `connect_id` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `card_shop`
--

INSERT INTO `card_shop` (`id`, `order_name`, `id_users`, `randomn_id`, `connect_id`) VALUES
(2, '30', '95', '6544', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `name` text,
  `lpr` text,
  `tel` text,
  `email` text,
  `adres` text,
  `nextstep` text NOT NULL,
  `nextdata` text,
  `cat` text,
  `dataadd` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` text,
  `typeel` text,
  `codusers` text,
  `id_users` text,
  `connect_id` text,
  `randomn_id` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `clientsdesc`
--

CREATE TABLE `clientsdesc` (
  `id` int(11) NOT NULL,
  `namecompany` text,
  `phoneadress` text,
  `emailjuridic` text,
  `adressjuridic` text,
  `codfiscal` text,
  `id_users` text,
  `connect_id` text,
  `randomn_id` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `img_bd`
--

CREATE TABLE `img_bd` (
  `id` int(11) NOT NULL,
  `nameImg` text,
  `data_inser` text,
  `id_users` text,
  `randomn_id` text,
  `pag` text,
  `connect_id` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `nottes`
--

CREATE TABLE `nottes` (
  `id` int(11) NOT NULL,
  `name` text,
  `tema` text,
  `descriptionlic` text,
  `status` text NOT NULL,
  `data` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `idedit` text,
  `id_users` text,
  `randomn_id` text,
  `connect_id` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `dataprice` text,
  `valueprice` text,
  `des` text,
  `idedit` text,
  `valuta` text,
  `id_users` text,
  `randomn_id` text,
  `connect_id` text,
  `id_pages` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `preventivo`
--

CREATE TABLE `preventivo` (
  `id` int(11) NOT NULL,
  `numelepren` text,
  `lpr` text,
  `domeniul` text,
  `telefon` text,
  `orasul` text,
  `email` text,
  `nexaction` text,
  `statut` text,
  `data` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `id_pages` text,
  `id_users` text,
  `randomn_id` text,
  `connect_id` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `category_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brand_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `compare_at_price` decimal(10,2) DEFAULT NULL,
  `cost_per_item` decimal(10,2) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `sku` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `selling_type` set('in_store','online','both') COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('active','processing','close','pending') COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight` decimal(10,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `search_terms` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` int(11) DEFAULT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `btn_radio12` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `variants` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `category_id`, `brand_id`, `price`, `compare_at_price`, `cost_per_item`, `quantity`, `sku`, `selling_type`, `status`, `image`, `weight`, `created_at`, `search_terms`, `size`, `color`, `btn_radio12`, `variants`) VALUES
(3, 'ProductNme', 'DescProduct', 'Category 1', 'Brand 1', '13.00', '312.00', NULL, 312, '231', '', 'active', NULL, NULL, '2024-08-27 15:35:12', '', 38, '', 'on', 'Product variants,variants 2'),
(4, 'IPhone12', 'Phone Boono', 'Electronics', 'Iphone', '150.00', '100.00', NULL, NULL, NULL, '', 'active', NULL, NULL, '2024-08-27 15:55:45', NULL, 30, '#0f3bdb', 'on', NULL),
(5, '', '', '', '', '0.00', '0.00', NULL, NULL, NULL, '', 'active', NULL, NULL, '2024-08-27 18:42:18', NULL, 10, '#000000', 'on', NULL),
(6, '', '', '', '', '0.00', '0.00', NULL, NULL, NULL, '', 'active', NULL, NULL, '2024-08-27 18:42:25', NULL, 10, '#000000', 'on', NULL),
(7, '', '', '', '', '0.00', '0.00', NULL, NULL, NULL, '', 'active', NULL, NULL, '2024-08-27 19:04:09', NULL, 10, '#000000', 'on', NULL),
(8, 'dasd', 'desc', 'Clothing', 'Iphone', '123.00', '32.00', NULL, NULL, NULL, '', 'active', NULL, NULL, '2024-08-29 09:09:47', NULL, 50, '#c60101', 'on', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `project`
--

CREATE TABLE `project` (
  `id` int(11) NOT NULL,
  `name` text,
  `startdata` text,
  `enddata` text,
  `typeproject` text,
  `pricetotal` text,
  `description` text,
  `status` text,
  `typeel` text,
  `etpcount` text,
  `id_users` text,
  `connect_id` text,
  `randomn_id` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `projecttask`
--

CREATE TABLE `projecttask` (
  `id` int(11) NOT NULL,
  `name` text,
  `descrip` text,
  `data` text,
  `id_project` text NOT NULL,
  `id_users` text,
  `randomn_id` text,
  `connect_id` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `project_desc`
--

CREATE TABLE `project_desc` (
  `id` int(11) NOT NULL,
  `target_audience` text NOT NULL,
  `design_style` text NOT NULL,
  `color_scheme` text NOT NULL,
  `fonts` text NOT NULL,
  `layouts` text NOT NULL,
  `additional_notes` text NOT NULL,
  `status` text NOT NULL,
  `idedit` text NOT NULL,
  `id_users` text,
  `connect_id` text,
  `randomn_id` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `sizes`
--

CREATE TABLE `sizes` (
  `id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `size` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `task`
--

CREATE TABLE `task` (
  `id` int(11) NOT NULL,
  `name` text,
  `descrip` text,
  `data` text,
  `id_project` text,
  `status` text,
  `id_users` text,
  `randomn_id` text,
  `connect_id` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `task`
--

INSERT INTO `task` (`id`, `name`, `descrip`, `data`, `id_project`, `status`, `id_users`, `randomn_id`, `connect_id`) VALUES
(5, 'TestNamesContent', 'ContentDattas', '2024-05-19T12:13', NULL, 'all', '247', '896', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `taskmanager`
--

CREATE TABLE `taskmanager` (
  `id` int(11) NOT NULL,
  `name` text,
  `description` text,
  `starttask` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `endtask` text,
  `status` text,
  `datareg` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `id_users` text,
  `randomn_id` text,
  `connect_id` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `task_datte`
--

CREATE TABLE `task_datte` (
  `id` int(11) NOT NULL,
  `data` text,
  `id_users` text,
  `randomn_id` text,
  `connect_id` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `task_datte`
--

INSERT INTO `task_datte` (`id`, `data`, `id_users`, `randomn_id`, `connect_id`) VALUES
(5, '2024-05-18', '247', '802', NULL),
(6, '2024-05-19', '247', '762', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `tiket`
--

CREATE TABLE `tiket` (
  `id` int(11) NOT NULL,
  `id_tiket` text,
  `data_tiket` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `price_tiket` int(11) NOT NULL,
  `gold_tiket` text,
  `id_users` text,
  `randomn_id` text,
  `connect_id` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `tiket`
--

INSERT INTO `tiket` (`id`, `id_tiket`, `data_tiket`, `price_tiket`, `gold_tiket`, `id_users`, `randomn_id`, `connect_id`) VALUES
(13, '3560', '2024-08-27 12:56:10', 50, NULL, '95', '335', NULL),
(14, '8576', '2024-08-27 12:56:10', 50, NULL, '95', '461', NULL),
(15, '2895', '2024-08-27 12:56:10', 50, NULL, '95', '971', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `users_connect`
--

CREATE TABLE `users_connect` (
  `id` int(11) NOT NULL,
  `nikname` text NOT NULL,
  `login` text,
  `password` text,
  `role` text,
  `datatime` text,
  `closs` text,
  `status` text,
  `id_users` text,
  `connect_id` text,
  `randomn_id` text,
  `datainsert` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `datareg` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users_connect`
--

INSERT INTO `users_connect` (`id`, `nikname`, `login`, `password`, `role`, `datatime`, `closs`, `status`, `id_users`, `connect_id`, `randomn_id`, `datainsert`, `datareg`) VALUES
(1, 'RaduGalac', 'admin', 'ffa427f956821eddcbc46a9960fdd4b5', 'Administrator', '17.05.1992', 'yes', 'admin', NULL, NULL, '247', '2024-04-25 13:07:47', '2024-04-25 10:07:47'),
(55, 'dasdsadas', 'das12312', 'bb461aa8f446fb8b6aeb5cd0c912648c', NULL, NULL, NULL, NULL, NULL, NULL, '29', '2024-08-27 12:55:09', '2024-08-27 09:55:09'),
(56, 'dasdsadas', 'das12312', 'ffa427f956821eddcbc46a9960fdd4b5', NULL, NULL, NULL, NULL, NULL, NULL, '95', '2024-08-27 12:55:31', '2024-08-27 09:55:31'),
(57, 'fas2342', 'fsd23423fs', 'e42e031705e77f60f897555aa5dfe262', NULL, NULL, NULL, NULL, NULL, NULL, '323', '2024-08-29 09:54:32', '2024-08-29 06:54:32'),
(58, 'dsa23424', 'sdfs2423fds', 'e94c666ff4c84b6d55c146365d56cf27', NULL, NULL, NULL, NULL, NULL, NULL, '909', '2024-08-29 12:06:37', '2024-08-29 09:06:37'),
(59, 'TestNews', 'fds23423', '961a851fd560d5dfa1955b7ac90efb06', NULL, NULL, NULL, NULL, NULL, NULL, '971', '2024-08-29 12:08:03', '2024-08-29 09:08:03');

-- --------------------------------------------------------

--
-- Структура таблицы `users_info`
--

CREATE TABLE `users_info` (
  `id` int(11) NOT NULL,
  `nikname` text,
  `fname` text,
  `lastname` text,
  `email` text,
  `companyname` text,
  `adress` text,
  `countor` text,
  `city` text,
  `tel` text,
  `zipcode` text,
  `langue` text NOT NULL,
  `rating` text,
  `star` text,
  `des` text,
  `id_users` text,
  `connect_id` text,
  `randomn_id` text,
  `datareg` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users_info`
--

INSERT INTO `users_info` (`id`, `nikname`, `fname`, `lastname`, `email`, `companyname`, `adress`, `countor`, `city`, `tel`, `zipcode`, `langue`, `rating`, `star`, `des`, `id_users`, `connect_id`, `randomn_id`, `datareg`) VALUES
(10, NULL, 'RaduGalacIon', 'Galac', 'galacradu@gmail.com', NULL, 'dsa321313', 'Moldova', NULL, '06828158535', '3040', '', NULL, NULL, NULL, '247', NULL, NULL, '2024-08-24 13:55:17');

-- --------------------------------------------------------

--
-- Структура таблицы `users_mony`
--

CREATE TABLE `users_mony` (
  `id` int(11) NOT NULL,
  `count_token` text,
  `id_users` text,
  `randomn_id` text,
  `connect_id` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users_mony`
--

INSERT INTO `users_mony` (`id`, `count_token`, `id_users`, `randomn_id`, `connect_id`) VALUES
(2, '30', '95', '6544', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `users_refer`
--

CREATE TABLE `users_refer` (
  `id` int(11) NOT NULL,
  `id_users` text,
  `randomn_id` text,
  `connect_id` text,
  `data_accept` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users_refer`
--

INSERT INTO `users_refer` (`id`, `id_users`, `randomn_id`, `connect_id`, `data_accept`) VALUES
(10, '29', '999', '247', '2024-08-27 12:55:09'),
(11, '95', '260', '247', '2024-08-27 12:55:31'),
(12, '323', '674', '247', '2024-08-29 09:54:32'),
(13, '909', '97', '', '2024-08-29 12:06:37'),
(14, '971', '785', '247', '2024-08-29 12:08:03');

-- --------------------------------------------------------

--
-- Структура таблицы `users_seting`
--

CREATE TABLE `users_seting` (
  `id` int(11) NOT NULL,
  `name_pages` text NOT NULL,
  `acces_list` text,
  `randomn_id` text,
  `connect_id` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `users_tiket`
--

CREATE TABLE `users_tiket` (
  `id` int(11) NOT NULL,
  `id_users` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `variants`
--

CREATE TABLE `variants` (
  `id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `variant_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `card_shop`
--
ALTER TABLE `card_shop`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `clientsdesc`
--
ALTER TABLE `clientsdesc`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `img_bd`
--
ALTER TABLE `img_bd`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `nottes`
--
ALTER TABLE `nottes`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `preventivo`
--
ALTER TABLE `preventivo`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `projecttask`
--
ALTER TABLE `projecttask`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `project_desc`
--
ALTER TABLE `project_desc`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `sizes`
--
ALTER TABLE `sizes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- Индексы таблицы `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `taskmanager`
--
ALTER TABLE `taskmanager`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `task_datte`
--
ALTER TABLE `task_datte`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `tiket`
--
ALTER TABLE `tiket`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users_connect`
--
ALTER TABLE `users_connect`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users_info`
--
ALTER TABLE `users_info`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users_mony`
--
ALTER TABLE `users_mony`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users_refer`
--
ALTER TABLE `users_refer`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users_seting`
--
ALTER TABLE `users_seting`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users_tiket`
--
ALTER TABLE `users_tiket`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `variants`
--
ALTER TABLE `variants`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `card_shop`
--
ALTER TABLE `card_shop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `clientsdesc`
--
ALTER TABLE `clientsdesc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `img_bd`
--
ALTER TABLE `img_bd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `nottes`
--
ALTER TABLE `nottes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `preventivo`
--
ALTER TABLE `preventivo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `project`
--
ALTER TABLE `project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `projecttask`
--
ALTER TABLE `projecttask`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `project_desc`
--
ALTER TABLE `project_desc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `sizes`
--
ALTER TABLE `sizes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `task`
--
ALTER TABLE `task`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `taskmanager`
--
ALTER TABLE `taskmanager`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `task_datte`
--
ALTER TABLE `task_datte`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `tiket`
--
ALTER TABLE `tiket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT для таблицы `users_connect`
--
ALTER TABLE `users_connect`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT для таблицы `users_info`
--
ALTER TABLE `users_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `users_mony`
--
ALTER TABLE `users_mony`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `users_refer`
--
ALTER TABLE `users_refer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT для таблицы `users_seting`
--
ALTER TABLE `users_seting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `users_tiket`
--
ALTER TABLE `users_tiket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `variants`
--
ALTER TABLE `variants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `sizes`
--
ALTER TABLE `sizes`
  ADD CONSTRAINT `sizes_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Ограничения внешнего ключа таблицы `variants`
--
ALTER TABLE `variants`
  ADD CONSTRAINT `variants_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
