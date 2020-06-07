-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Июн 07 2020 г., 12:50
-- Версия сервера: 10.4.11-MariaDB
-- Версия PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `carrental`
--

-- --------------------------------------------------------

--
-- Структура таблицы `customer`
--

CREATE TABLE `customer` (
  `c_id` int(11) NOT NULL,
  `vehicle_id` int(11) NOT NULL,
  `cf_name` varchar(100) NOT NULL,
  `cl_name` varchar(100) NOT NULL,
  `c_email` varchar(100) NOT NULL,
  `c_mobile` varchar(100) NOT NULL,
  `nid` varchar(100) DEFAULT NULL,
  `w_start` date NOT NULL,
  `w_end` date NOT NULL,
  `payment_type` varchar(100) NOT NULL,
  `invoice_id` varchar(100) DEFAULT NULL,
  `c_address` varchar(400) DEFAULT NULL,
  `c_pass` varchar(30) NOT NULL,
  `extra` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `customer`
--

INSERT INTO `customer` (`c_id`, `vehicle_id`, `cf_name`, `cl_name`, `c_email`, `c_mobile`, `nid`, `w_start`, `w_end`, `payment_type`, `invoice_id`, `c_address`, `c_pass`, `extra`) VALUES
(16, 24, 'Илья', 'Буравцов', 'iuyl128ew@mail.ru', '+79111060897', NULL, '2020-06-07', '2020-06-13', 'Visa/Master Card', NULL, NULL, '1234', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `manufacturers`
--

CREATE TABLE `manufacturers` (
  `id` int(11) NOT NULL,
  `manufacturer_name` varchar(255) NOT NULL,
  `manufacturer_logo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `manufacturers`
--

INSERT INTO `manufacturers` (`id`, `manufacturer_name`, `manufacturer_logo`) VALUES
(22, 'BMW', ''),
(23, 'Nissan', ''),
(24, 'Lamborghini', ''),
(25, 'Lexus', ''),
(26, 'Volkswagen', ''),
(27, 'Toyota', '');

-- --------------------------------------------------------

--
-- Структура таблицы `models`
--

CREATE TABLE `models` (
  `id` int(11) NOT NULL,
  `manufacturer_id` int(11) NOT NULL,
  `model_name` varchar(255) NOT NULL,
  `model_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `models`
--

INSERT INTO `models` (`id`, `manufacturer_id`, `model_name`, `model_description`) VALUES
(12, 22, 'M2 F87', 'Спортивное купе, выпускаемое мюнхенским автомобильным концерном. Модель, по сути, является спортивной версией обычной «двойки». Впервые модель была представлена в октябре 2015 года, авто находится в производстве с конца 2015 года, по настоящее время. Начало спортивного флагмана начались в Великобритании с апреля 2016 года, тогда авто было представлено в рамках женевского автомобильного салона, а чуть позднее и в Детройте. Производитель купе заявляет, что модель «сочетает лучшие спортивные качества и классический задний привод с превосходной маневренностью и оптимальной управляемостью современных автомобилей BMW M». Что касается стоимости БМВ М2, то отмечают, что это наиболее доступная модель среди автомобилей всей линейки М-серии. '),
(13, 23, 'Skyline GT-R R34', '10-е поколение Nissan Skyline было представлено в мае 1998 в кузовах R34 с большим акцентом на спортивность и соответствие новым экологическим нормам. В базовой модели GT двигатель RB20E был заменен на RB20DE, в последний раз использовавшийся на R32, но модернизированный (NEO). R34 GT с двигателем RB20DE NEO и 5-ступенчатой коробкой передач, стал лучшим по топливной экономичности среди 6-цилиндровых Skyline всех поколений. 5-ступенчатая автоматическая трансмиссия была исключена из этого поколения, взамен предлагалась 4-ступенчатая АКПП и Полный привод. '),
(14, 23, '350Z', 'Автомобиль продолжил серию моделей Z-серии, став преемником Nissan 300ZX. На Японском рынке машина называлась Nissan Fairlady Z. После ухода модели 300ZX с американского рынка в 1996 году, руководство Nissan планировало его заменить вновь созданным 240Z, спроектированным североамериканским дизайнерским отделением Nissan в свободное от основной работы время. Концепт-кар был создан в июле 1998 года и показан журналистам и дилерам. Ютака Катаяма, известный как «Отец Z-серии» показал рисунок концепта публике, когда получал награду в области двигателестроения.'),
(15, 27, 'GT86', 'Компактный спортивный заднеприводный спорткар в кузове двухдверного купе, разработанное и производимое совместно компаниями Subaru и Toyota, официально представлено в декабре 2011 года на Токийском автосалоне[1]. BRZ это аббревиатура Boxer, Rear Wheel Drive, Zenith [2]. Модель продаётся под тремя разными брендами: Toyota (Toyota 86 в Японии, Австралии, Северной Америке и Северной Африке, Toyota GT-86 в Европе, Toyota FT-86 в Никарагуа и Ямайке), Subaru (Subaru BRZ) и Scion (Scion FR-S). Автомобиль официально продавался в России до 2015 года.'),
(16, 25, 'ES 200', 'Lexus ES / Toyota Windom — автомобиль бизнес-класса с кузовом типа седан, выпускаемый японским автопроизводителем Lexus с 1989 года. Автомобиль собирается на заводе в Японии, расположенном на острове Кюсю. Автомобиль имеет общую платформу с моделью Toyota Avalon.'),
(17, 24, 'Gallardo', 'Спорткар, выпускавшийся компанией Lamborghini c 2003 по 2013 года. Меньшая по размеру и мощности модель компании по сравнению с Lamborghini Murcielago. Презентация автомобиля состоялась на женевском автосалоне в марте 2003 года. На сегодняшний день это самая массовая модель от Lamborghini - за 10 лет производства было построено 14022 автомобиля. 25 ноября 2013 года был построен последний экземпляр - родстер Gallardo в модификации LP570-4 Spyder Performante.'),
(18, 26, 'Golf GTI VII', 'Седьмое поколение модели Golf, выпускающегося Volkswagen в Европе с конца сентября 2012 года. Первая информация о новом поколении появилась в июле 2011 года, и в течение года она постепенно пополнялась. Готовая версия была анонсирована в начале сентября 2012 года, показали её на Парижском автосалоне, а сразу после дебюта начались продажи седьмого поколения компактного автомобиля. Цена на него в Европе осталась прежней — 16 975 евро.');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `su` int(11) DEFAULT 0,
  `type` varchar(15) NOT NULL,
  `position` varchar(30) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(40) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `birthday` date NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `su`, `type`, `position`, `email`, `password`, `first_name`, `last_name`, `gender`, `birthday`, `mobile`, `address`) VALUES
(6, 1, 'admin', 'Super Admin', 'admin@admin.com', '21232f297a57a5a743894a0e4a801fc3', 'Алексей', 'Гавриков', 'Мужчина', '2002-01-06', '+79117107838', 'проспект Удариков, дом 49, корпус 1, квартира 17'),
(7, 1, 'employee', 'Employee Super', 'employee@employee.com', 'fa5473530e4d1a5a1e1eb53d2fedb10c', 'Олег', 'Осипов', 'Мужчина', '2002-06-20', '2323', 'улица Колотушкина, дом 33, кв. 19');

-- --------------------------------------------------------

--
-- Структура таблицы `vehicles`
--

CREATE TABLE `vehicles` (
  `vehicle_id` int(11) NOT NULL,
  `manufacturer_id` int(11) NOT NULL,
  `model_id` int(11) NOT NULL,
  `category` varchar(30) NOT NULL,
  `buying_price` double NOT NULL,
  `selling_price` double DEFAULT NULL,
  `mileage` int(11) NOT NULL,
  `color` varchar(15) NOT NULL,
  `add_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `sold_date` datetime DEFAULT NULL,
  `status` varchar(40) NOT NULL DEFAULT 'available',
  `registration_year` int(4) NOT NULL,
  `insurance_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `gear` varchar(15) NOT NULL,
  `doors` int(11) NOT NULL,
  `seats` int(11) NOT NULL,
  `tank` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `engine_no` int(11) NOT NULL,
  `chesis_no` int(11) NOT NULL,
  `featured` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `vehicles`
--

INSERT INTO `vehicles` (`vehicle_id`, `manufacturer_id`, `model_id`, `category`, `buying_price`, `selling_price`, `mileage`, `color`, `add_date`, `sold_date`, `status`, `registration_year`, `insurance_id`, `user_id`, `gear`, `doors`, `seats`, `tank`, `image`, `engine_no`, `chesis_no`, `featured`) VALUES
(13, 22, 12, 'Full-size', 250000, NULL, 0, 'Синий', '2020-06-06 21:00:00', NULL, 'available', 2020, 13579552, 6, 'автомат', 4, 4, 52, 'bmw_f87.jpg', 1, 1, 1),
(17, 24, 17, 'Full-size', 500000, NULL, 25000, 'Серый', '2020-06-06 21:00:00', NULL, 'available', 2006, 23758533, 6, 'автомат', 2, 2, 50, 'lambo_gallardo.jpg', 4, 4, 1),
(21, 23, 13, 'Full-size', 150000, NULL, 100000, 'Синий', '2019-04-01 21:00:00', NULL, 'available', 1999, 42145435, 6, 'ручная', 4, 4, 50, 'skyline_gtr2.jpg', 8, 8, 1),
(22, 23, 14, 'Mid-size', 100000, NULL, 50000, 'Оранжевый', '2020-06-06 21:00:00', NULL, 'available', 2004, 23154675, 6, 'автомат', 2, 2, 50, '350z1.jpg', 9, 9, 0),
(24, 27, 15, 'Mid-size', 59999, 100000, 24555, 'Красный', '2020-06-06 21:00:00', '2020-06-07 00:00:00', 'sold', 2014, 52547542, 6, 'ручная', 2, 2, 50, 'toyota_gt862.jpg', 10, 10, 0),
(25, 26, 18, 'Mid-size', 20000, NULL, 20000, 'Серый', '2020-06-06 21:00:00', NULL, 'available', 2012, 2415432, 6, 'ручная', 4, 4, 50, 'golf_gti_vii1.jpg', 11, 11, 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`c_id`),
  ADD UNIQUE KEY `v_id_2` (`vehicle_id`),
  ADD UNIQUE KEY `c_id` (`c_id`),
  ADD UNIQUE KEY `invoice_id` (`invoice_id`),
  ADD KEY `v_id` (`vehicle_id`),
  ADD KEY `c_id_2` (`c_id`);

--
-- Индексы таблицы `manufacturers`
--
ALTER TABLE `manufacturers`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `models`
--
ALTER TABLE `models`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Индексы таблицы `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`vehicle_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `customer`
--
ALTER TABLE `customer`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT для таблицы `manufacturers`
--
ALTER TABLE `manufacturers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT для таблицы `models`
--
ALTER TABLE `models`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `vehicle_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `fk` FOREIGN KEY (`vehicle_id`) REFERENCES `vehicles` (`vehicle_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
