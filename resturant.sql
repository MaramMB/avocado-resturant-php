-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 23 يوليو 2022 الساعة 22:01
-- إصدار الخادم: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `resturant`
--

-- --------------------------------------------------------

--
-- بنية الجدول `food`
--

CREATE TABLE `food` (
  `id` int(11) NOT NULL,
  `namee` varchar(40) NOT NULL,
  `price` double NOT NULL,
  `image` varchar(100) NOT NULL,
  `note` text NOT NULL,
  `typee` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `food`
--

INSERT INTO `food` (`id`, `namee`, `price`, `image`, `note`, `typee`) VALUES
(1, 'فلافل', 10, 'pic\\fla.png', ' فلفول يحب الفلافل \r\nكن مثل فلفول واطلب الفلافل', 'mean'),
(2, 'كبدة', 30, 'pic/kebda.png', 'الكبدة مفيدة وبتقوي الدم بالجسم فاطلب كبدة وثقل دمك ', 'mean'),
(3, 'شكشوكة', 40, 'pic/shk.png', '💅 بحبهاش فما تطلبوها \r\nزبائننا الكرام', 'mean'),
(4, 'عجة', 99, 'pic/age.png', 'الوصفة مأخوذة من ستي فتميزوا وكلو عجة ستي', 'mean'),
(5, 'نقانق', 45, 'pic/ng.png', 'اطلبها عزيزي الزبون توم وجيري كانو يوكلوها ليه انت لا', 'sandw'),
(6, 'بيض', 6, 'pic/egg.png', ' تتميز هاي الوجبة بسعرها القليل \r\n😌 حتى نذكرك ببعض الناس الي بحياتك ', 'mean'),
(7, 'فطيرة الافوكادو', 70, 'pic/favoc.png', 'ما بعرف ايش هي بس برضو بنصحكو تطلبوها بما انو فيها افوكادو', 'sandw'),
(8, 'فطيرة جبنة بزعتر', 50, 'pic/zches.png', 'اكلة الرحلات الرائعة الخفيفة وبزعتر الكيلو ب 5 اطلبوها حالا', 'sandw'),
(9, 'فطيرة سبانخ', 30, 'pic/spann.png', 'الوجبة المميزة الي عملناها من باقي عجينة الجبنة وزعتر اطلبوها الان ', 'sandw'),
(10, 'فطيرة جبنة', 30, 'pic/chess.png', 'اعزائي قصيرين الحيلة اطلبوها وزيدو ارباحنا واعتبرو انها اكلة صعبة  ', 'sandw'),
(11, 'جبنة وافوكادو', 66, 'pic/chavoc.png', 'علمي علمكو بهالوجبة بس عشان اسم المطعم بدنا نكثر اشياء افوكادية', 'sandw'),
(12, 'فول', 9, 'pic/6977676081936807.png', 'الفول المصري الرائع ينصح به قبل الامتحانات حتى تزيد ارباح الجامعة ', 'app'),
(13, 'حمص', 8, 'pic/823fe8ca-d40b-4507-92b3-06dee308704d.png', 'الصحن ب 8 والعلبة ب 4 شيكل بالمحلات بس انتو ادرى بمصلحتكو اعزائنا ', 'app'),
(14, 'تبولة', 34, 'pic/1-248.png', 'هتسألوني ليه سعرها هيك حقكوو \r\n😌 مطعمي وانا حرة فيه', 'app'),
(15, 'متبل', 18, 'pic/2511d021169f619a40b2955a77aca990_w750_h500.png', 'زهقت بالوصف فبدكو تطلبو اطلبو بدكوش عمرينكو ', 'app'),
(16, 'بطاطا', 24, 'pic/de298921167dc40210659f6aadf48ce8_w750_h750.png', 'الوجبة المفضلة الي شو ما كانت سيئة هتتاكل فاطلبوها', 'app'),
(17, 'كرات البطاطا', 16, 'pic/potato.png', 'هيكونوا 10 كرات اعزائي بس هنحط منهم 8 عشان الدايت 😉', 'app'),
(18, 'سلطة الافوكادو', 23, 'pic/0a2f4aac1fd69de5f73f093b08c1382d33ae637c.png', 'تطلبوهاش ما ضل عنا بقدونس نزينها ', 'ِapp'),
(19, 'عصير برتقال', 19, 'pic/orange.png', 'بدل ما تطلعوا بالشمس لتوخذوا فيتامين C اشربوا البرتقال', 'drink'),
(20, 'شراب الافوكادو', 14, 'pic/avocadoj.png', 'اكيد شراب مفيد فاطلبوا وبعدين بنتناقش بفائدتوا', 'drink'),
(21, 'كابتشينو', 13, 'pic/capat.png', 'بنرسم عليه وردة اذا كنت زعلان اذا كنت مبسوط اطلب اشي غالي الكابتشينو مش منيح', 'drink'),
(22, 'قهوة', 12, 'pic/coff.png', 'اطلبوها حتى تكتبو عليها صباح الخير وتبعثوها عالجروبات', 'drink'),
(23, 'شاي', 11, 'pic/tea.png', 'كن مثل ابو فارس ولا تكتفي بكاسة زبوننا الغالي', 'drink'),
(24, 'عصائر', 17, 'pic/image.png', 'ممنوع تطلب عصير برتقال من هان عشان توفر دولارين', 'drink'),
(25, 'شوكو', 45, 'pic/choco.png', 'يقول المثل يا حلوين اشربو الحليب', 'drink'),
(26, 'شطيرة سبونج بوب', 78, 'pic/spong.png', 'الوصفة التي لم يأخذها شمشوم ', 'sandw'),
(29, 'حلييب', 87, 'pic/milk.png', 'يقول المثل يا حلوين اشربو الحليب ', 'drink'),
(30, 'ملوخية', 0, 'pic/mlo.png', 'طبق محجوز لالاء فقط نظرا انو فش ناس طبيعية بتفطر عليها ', 'mean');

-- --------------------------------------------------------

--
-- بنية الجدول `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nameus` varchar(30) NOT NULL,
  `pass` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `users`
--

INSERT INTO `users` (`id`, `nameus`, `pass`) VALUES
(1, 'MaramMB', '123456'),
(2, 'Roua', '111111');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
