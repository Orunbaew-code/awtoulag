-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Июн 07 2024 г., 06:25
-- Версия сервера: 10.4.28-MariaDB
-- Версия PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `awtoulag`
--

-- --------------------------------------------------------

--
-- Структура таблицы `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(15) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `admins`
--

INSERT INTO `admins` (`admin_id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Структура таблицы `bus_routes`
--

CREATE TABLE `bus_routes` (
  `route_id` int(31) NOT NULL,
  `Origin` varchar(127) NOT NULL,
  `Destination` varchar(127) NOT NULL,
  `DepartureTime` varchar(63) NOT NULL,
  `Frequency` varchar(63) NOT NULL,
  `Number` int(15) DEFAULT NULL,
  `type` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `bus_routes`
--

INSERT INTO `bus_routes` (`route_id`, `Origin`, `Destination`, `DepartureTime`, `Frequency`, `Number`, `type`) VALUES
(1, 'Babadayhan', 'Tejen', '08:00', 'Her 30 min', 13, 'city'),
(2, '15-nji mekdep', 'Saglyk öýi', '07:30', 'Her 1 sagat', 14, 'city'),
(3, 'Tejen', 'Aşgabat', '09:00', 'Günde', NULL, 'intercity'),
(4, 'Aşgabat', 'Änew', '11:00', 'Günde 3 awtobus', NULL, 'intercity'),
(5, 'Tejen', 'Babadayhan', '10:00', '30 min', 15, 'city');

-- --------------------------------------------------------

--
-- Структура таблицы `contacts`
--

CREATE TABLE `contacts` (
  `contact_id` int(31) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(2047) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `contacts`
--

INSERT INTO `contacts` (`contact_id`, `name`, `email`, `message`, `date`) VALUES
(3, 'Omarow Omar', 'komarik@gmail.com', 'Men Omar Omarow Omarowic', '2024-05-01'),
(4, 'asdasdasd', 'asdasd@gmail.com', 'asdasdasdasdasd', '2024-06-06');

-- --------------------------------------------------------

--
-- Структура таблицы `events`
--

CREATE TABLE `events` (
  `event_id` int(31) NOT NULL,
  `event_a` varchar(255) NOT NULL,
  `event_p` varchar(2047) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `events`
--

INSERT INTO `events` (`event_id`, `event_a`, `event_p`) VALUES
(1, 'Jemgyýetçilik transport howpsuzlygy ussahanasy', 'Jemgyýetçilik transportynyň howpsuzlygy boýunça maslahatlar üçin mugt seminara gatnaşyň. Gatnaşýan wagtyňyz jemgyýetçilik transportynda howpsuzlyk üçin gymmatly strategiýalary öwreniň. [Sene] [Wagt], [Salgy].'),
(2, 'Merkezi awtobus ammarynda açyk gapylar güni', 'Merkezi awtobus ammaryna aýlanyp görüň we amallarymyz barada has giňişleýin öwreniň! Täzelenmelerden lezzet alyň we LPTA topary bilen duşuşyň. [Sene] [Wagt] -dan [Wagt] -a çenli.'),
(4, 'Jemgyýetçilik transport howpsuzlygy ussahanasy', 'Jemgyýetçilik transportynyň howpsuzlygy boýunça maslahatlar üçin mugt seminara gatnaşyň. Gatnaşýan wagtyňyz jemgyýetçilik transportynda howpsuzlyk üçin gymmatly strategiýalary öwreniň. [Sene] [Wagt], [Salgy].'),
(5, 'Merkezi awtobus ammarynda açyk gapylar güni', 'Merkezi awtobus ammaryna aýlanyp görüň we amallarymyz barada has giňişleýin öwreniň! Täzelenmelerden lezzet alyň we LPTA topary bilen duşuşyň. [Sene] [Wagt] -dan [Wagt] -a çenli.');

-- --------------------------------------------------------

--
-- Структура таблицы `faqs`
--

CREATE TABLE `faqs` (
  `faq_id` int(11) NOT NULL,
  `faq_summary` varchar(511) NOT NULL,
  `faq_p` varchar(2047) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `faqs`
--

INSERT INTO `faqs` (`faq_id`, `faq_summary`, `faq_p`) VALUES
(1, 'Haýsy hyzmatlary hödürleýärsiňiz?', 'Gurluşyk materiallaryny eltip bermek, ýykmak we galyndylary aýyrmak, abadanlaşdyryş ulaglary, gazuw-agtaryş we ýerleri arassalamak we aşa köp ýük daşamak ýaly dürli ýük awtoulaglaryny çekmek hyzmatlaryny hödürleýäris.'),
(2, 'Hyzmatlardan nädip peýdalanmaly?', '“Hyzmatlar\" sahypasyna girip ýa-da bize jaň edip, aňsatlyk bilen hyzmatlardan peýdalanyp bilersiňiz. “Ýük awtoulaglary” sahypasynda aljak we iberilýän ýerleriňizi, material görnüşini (islege görä) we mukdaryny girizmek soralar, taksi we awtobus hyzmatlaryna hem aňsatlyk bilen düşünmek mümkin. Anketany tabşyranyňyzdan soň, sargyt bermek üçin gysga wagtda siziň bilen habarlaşarys.'),
(3, 'Haýsy ýerlerde hyzmat edýärsiňiz?', 'Biz Aşgabat welaýatynyň dürli ýerlerinde hyzmat edýäris. Aşgabat welaýatynyň belli bir ýeriňizde elýeterliligi tassyklamak üçin biziň bilen habarlaşmagyňyzy haýyş edýäris.'),
(4, 'Adaty nyrhlaryňyz nähili?', 'Biziň nyrhlarymyz uzaklyga, çekilýän materiallara we mukdarda birnäçe faktorlara baglydyr. Şeýle-de bolsa, bäsdeşlik nyrhlaryny üpjün etmegi maksat edinýäris. Takyk baha bermek üçin biziň bilen habarlaşyň ýa-da Hyzmatlar sahypasyna girmegiňizi haýyş edýäris.'),
(5, 'Käbir materiallary daşamak üçin rugsatnama gerekmi?', 'Käbir ýagdaýlarda, çekilýän materiallara we ýerli düzgünlere baglylykda rugsatlar talap edilip bilner. Rugsatnamanyň zerurdygyny ýa-da ýokdugyny kesgitlemekde size kömek etmekden hoşal we zerur bolsa rugsat bermek işine kömek edip bileris.');

-- --------------------------------------------------------

--
-- Структура таблицы `joblistings`
--

CREATE TABLE `joblistings` (
  `job_id` int(31) NOT NULL,
  `job_title` varchar(255) NOT NULL,
  `job_description` varchar(2047) NOT NULL,
  `job_qualifications` varchar(2047) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `joblistings`
--

INSERT INTO `joblistings` (`job_id`, `job_title`, `job_description`, `job_qualifications`) VALUES
(1, 'Ýük maşyn sürüji (Ýük maşyn)', 'Ösýän toparymyza goşulmak üçin ygtybarly we tejribeli “Dump Truck Driver” gözleýäris. Wezipeler gurluşyk meýdançalaryna materiallary daşamak, howpsuz sürüjilik ýazgysyny ýöretmek we kompaniýanyň syýasatlaryna eýermek ýaly zatlary öz içine alýar.', 'Ýük awtoulagynyň tassyklamasy bilen hakyky täjirçilik sürüjilik şahadatnamasy <br>Ýük awtoulagyny dolandyrmak üçin azyndan 2 ýyl tejribe <br>Arassa sürüjilik ýazgysy <br>Güýçli howpsuzlyk çärelerine we howpsuzlyk düzgünlerine boýun bolmak şerti <br>Ajaýyp aragatnaşyk we şahsyýet başarnyklary'),
(2, 'Dizel mehaniki', 'Toparymyza goşulmak üçin ökde dizel mehanikini gözleýäris. Jogapkärçilikler dürli täjirçilik ulaglaryna diagnoz goýmagy we abatlamagy, öňüni alyş hyzmatyny etmegi we flotumyzyň howpsuz we ygtybarly işlemegini öz içine alýar.', 'Kepillendirilen dizel mehaniki ýa-da güýçli tejribe.<br>Ýük awtoulaglarynda we beýleki agyr tehnikalarda iş tejribesi.<br>Güýçli mehaniki ussatlygy we meseläni çözmek endikleri. <br>Jikme-jikliklere we howpsuzlyk proseduralaryny ýerine ýetirmek ukybyna ajaýyp üns'),
(3, 'Dispetçer', 'Toparymyza goşulmak üçin höwesli we guramaçylykly Dispetçer gözleýäris. Jogaplar, gowşuryşlary meýilleşdirmek, sürüjiler we müşderiler bilen aragatnaşyk saklamak we iberiş bölümimiziň kadaly işlemegini üpjün etmekdir.', 'Güýçli aragatnaşyk we şahsyýet başarnyklary.<br>Işleri ileri tutmak we birnäçe möhletli dolandyrmak ukyby.<br>Dispetçer programma üpjünçiligi ýa-da şuňa meňzeş ulgam bilen tejribe.<br>Ajaýyp guramaçylyk ukyplary we jikme-jikliklere üns.');

-- --------------------------------------------------------

--
-- Структура таблицы `lostfound`
--

CREATE TABLE `lostfound` (
  `found_id` int(31) NOT NULL,
  `found_date` date NOT NULL,
  `found_item` varchar(255) NOT NULL,
  `found_place` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `lostfound`
--

INSERT INTO `lostfound` (`found_id`, `found_date`, `found_item`, `found_place`) VALUES
(1, '2024-05-16', 'Gara Gapjyk', 'Änew'),
(2, '2024-06-01', 'Passport', 'Babadaýhan etrap.');

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `news_id` int(31) NOT NULL,
  `news_a` varchar(255) NOT NULL,
  `news_p` varchar(2047) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`news_id`, `news_a`, `news_p`) VALUES
(1, 'Gündogar etrapda täze awtobus ugurlary açyldy', 'Gündogar etrapçasyna hyzmat edýän täze awtobus ugurlarynyň güýje girjekdigini mälim edýäris. Bu ugurlar [esasy ýerleri agzamak] üçin aragatnaşygy üpjün eder.'),
(2, 'Uly ýaşlylar we okuwçylar üçin arzanladyş', 'Ähli jemgyýetçilik transport mümkinçiliklerinde arzanladylan nyrhlardan lezzet alyň! Bu programma 65 ýaşdan uly ýaşlylar we şahsyýetnamasy bolan okuwçylar üçin elýeterlidir. Saýlaw we anketa barada has giňişleýin öwreniň [degişli sahypa baglanyşyk].'),
(4, 'Gündogar etrapda täze awtobus ugurlary açyldy', 'Gündogar etrapçasyna hyzmat edýän täze awtobus ugurlarynyň güýje girjekdigini mälim edýäris. Bu ugurlar [esasy ýerleri agzamak] üçin aragatnaşygy üpjün eder.'),
(5, 'Uly ýaşlylar we okuwçylar üçin arzanladyş', 'Ähli jemgyýetçilik transport mümkinçiliklerinde arzanladylan nyrhlardan lezzet alyň! Bu programma 65 ýaşdan uly ýaşlylar we şahsyýetnamasy bolan okuwçylar üçin elýeterlidir. Saýlaw we anketa barada has giňişleýin öwreniň [degişli sahypa baglanyşyk].');

-- --------------------------------------------------------

--
-- Структура таблицы `quote_requests`
--

CREATE TABLE `quote_requests` (
  `quote_id` int(15) NOT NULL,
  `origin` varchar(255) NOT NULL,
  `destination` varchar(255) NOT NULL,
  `material_type` varchar(255) NOT NULL,
  `quantity` int(31) NOT NULL,
  `quantity_unit` varchar(63) NOT NULL,
  `request_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `quote_requests`
--

INSERT INTO `quote_requests` (`quote_id`, `origin`, `destination`, `material_type`, `quantity`, `quantity_unit`, `request_time`) VALUES
(1, 'Tejen', 'Babadayhan', 'construction', 10, 'tons', '12:34:03'),
(2, 'Tejen', 'Aşgabat', 'construction', 6, 'Meter Kub', '17:53:20');

-- --------------------------------------------------------

--
-- Структура таблицы `taxi_requests`
--

CREATE TABLE `taxi_requests` (
  `request_id` int(31) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phone` varchar(63) NOT NULL,
  `origin` varchar(255) NOT NULL,
  `destination` varchar(255) NOT NULL,
  `request_date` varchar(31) NOT NULL,
  `request_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `taxi_requests`
--

INSERT INTO `taxi_requests` (`request_id`, `name`, `phone`, `origin`, `destination`, `request_date`, `request_time`) VALUES
(2, 'Omarow Omar', '61111111', 'Gurtly', 'Awtokombinat', '2024-06-06', '16:49:34'),
(3, 'Amanow Aman', '62222222', 'Ahal', 'Aşgabat', '2024-06-06', '17:52:50');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Индексы таблицы `bus_routes`
--
ALTER TABLE `bus_routes`
  ADD PRIMARY KEY (`route_id`);

--
-- Индексы таблицы `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`contact_id`);

--
-- Индексы таблицы `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_id`);

--
-- Индексы таблицы `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`faq_id`);

--
-- Индексы таблицы `joblistings`
--
ALTER TABLE `joblistings`
  ADD PRIMARY KEY (`job_id`);

--
-- Индексы таблицы `lostfound`
--
ALTER TABLE `lostfound`
  ADD PRIMARY KEY (`found_id`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- Индексы таблицы `quote_requests`
--
ALTER TABLE `quote_requests`
  ADD PRIMARY KEY (`quote_id`);

--
-- Индексы таблицы `taxi_requests`
--
ALTER TABLE `taxi_requests`
  ADD PRIMARY KEY (`request_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `bus_routes`
--
ALTER TABLE `bus_routes`
  MODIFY `route_id` int(31) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `contacts`
--
ALTER TABLE `contacts`
  MODIFY `contact_id` int(31) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `events`
--
ALTER TABLE `events`
  MODIFY `event_id` int(31) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `faqs`
--
ALTER TABLE `faqs`
  MODIFY `faq_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `joblistings`
--
ALTER TABLE `joblistings`
  MODIFY `job_id` int(31) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `lostfound`
--
ALTER TABLE `lostfound`
  MODIFY `found_id` int(31) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(31) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `quote_requests`
--
ALTER TABLE `quote_requests`
  MODIFY `quote_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `taxi_requests`
--
ALTER TABLE `taxi_requests`
  MODIFY `request_id` int(31) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
