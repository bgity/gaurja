-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2020 at 01:46 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gau_urja`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `cdate` timestamp(6) NULL DEFAULT CURRENT_TIMESTAMP(6)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `cdate`) VALUES
(2, 'admin', '827ccb0eea8a706c4c34a16891f84e7b', '0000-00-00 00:00:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(20) NOT NULL,
  `blog_title` varchar(2000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `blog_link` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `blog_content` varchar(5000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `blog_image` varchar(500) NOT NULL,
  `created_date` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6),
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `blog_title`, `blog_link`, `blog_content`, `blog_image`, `created_date`, `status`) VALUES
(1, 'disscuss on hauurja', 'Gauurja', '<p>we can do</p>\r\n', 'assets/images/blog_images/20200823081943Bakulabai Shewate.jpeg', '2020-08-23 02:49:43.000000', 0),
(2, 'disscuss on gauurja123', 'disscuss on gauurja123', '<p>disscuss on gauurja123</p>\r\n', 'assets/images/blog_images/20200823082109Hiren Sitapara.jpeg', '2020-08-23 02:51:09.000000', 0);

-- --------------------------------------------------------

--
-- Table structure for table `contact_enquiry`
--

CREATE TABLE `contact_enquiry` (
  `enquiry_id` int(11) NOT NULL,
  `user_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `user_email` varchar(100) NOT NULL DEFAULT '',
  `phone` varchar(13) NOT NULL,
  `subject` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `message` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `cdate` timestamp(3) NOT NULL DEFAULT CURRENT_TIMESTAMP(3) ON UPDATE CURRENT_TIMESTAMP(3)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_enquiry`
--

INSERT INTO `contact_enquiry` (`enquiry_id`, `user_name`, `user_email`, `phone`, `subject`, `message`, `cdate`) VALUES
(12, 'Surendra murkute ', 'spmurkute2014@gmail.com', '9850408725', '', '', '2019-10-20 10:06:50.211'),
(13, 'Vasant dhongde', 'vdhingde34@gmil.com', '9860541784', 'Soraysis BP daybetij shugar', '\r\n', '2019-10-21 05:31:54.692'),
(14, 'Manoj uttam kunde', 'manojk88@gmail.com', '7745808764', 'Psorisiss', 'Hii', '2019-10-21 06:49:27.688'),
(15, 'Dnyaneshwar Phapale', 'dspauto@gmail.com', '9421379749', 'Soraysiss', 'Let me know date of your workshop', '2019-10-27 09:47:20.564'),
(20, 'Vinayak shankar chaughule', 'vinayakchaughule.999@gmail.com', '8407926620', 'Hair loss', 'Reply me...Any solution ', '2019-11-20 12:28:48.827'),
(21, 'Dnyaneshwar Kangane ', 'dnyaneshwarkangne143@gmail.com', '7709203532', 'Hair fall', 'Hair fall', '2019-11-21 05:39:14.885'),
(22, 'Sandip kakaji Nikam', 'sandipnikam641@gmail.com', '9975932925', 'Kes galti hone', 'केस गळणे थांबविण्यासाठी काही उपच्यार आहे का', '2019-11-21 16:36:58.314'),
(28, 'Rahul b birar', 'rahul.birar9192@gmail.com', '9763297555', 'Hair fall', 'Stop hairfal', '2019-11-26 17:25:29.954'),
(29, 'Dattatray Dighole ', 'digholedpdmba@gmail.com', '7620655999', 'Hair fall ', 'I m Dattatray Dighole From Sinnar. I m facing my hair fall problem last 5years...plz give me best solution. ', '2019-11-27 08:06:46.530'),
(30, 'Shivram', 'boradeshiv@gmail.com', '9423080353', 'Hair loss', 'Suffering hair fall...... ', '2019-11-27 10:56:32.254'),
(31, 'Mruganayani ashok torawane ', 'monapatil88@gmail.co', '7972082214', 'Panchkarm', 'Majya stomach var khup charbi aliy plz suggested me', '2019-12-11 11:32:32.484'),
(32, 'Mayuri Sagar Amup', 'mayuriamup094@gmail.com', '9834772681', 'Periods problem', 'Pregnancy problem', '2019-12-30 08:55:52.447'),
(33, 'Devaki Rahul thakur', 'rt09323@gmail.com', '9604777951', 'Period yet aahe pan pregnancy rahat nahi a khup pryant kart aahe tarisudha ', 'Pregnancy rahat nahi a ', '2020-01-05 16:15:17.673'),
(34, 'Devki Rahul Thakur', '', '9022626153', '', 'pregnancy raht nahi', '2020-01-05 05:00:00.000'),
(35, 'Vikas Talekar', '', '8975065505', '', 'testing', '2020-01-07 05:00:00.000'),
(36, 'dinesh kolhe', '', '9503260300', '', 'dinesh', '2020-02-09 05:00:00.000'),
(37, 'Dinesh Kolhe', '', '9503260300', '', 'dinesh', '2020-02-09 05:00:00.000'),
(38, 'Dinesh Kolhe', '', '9503260300', '', 'dinesh', '2020-02-09 05:00:00.000'),
(39, 'Dinesh Kolhe', '', '9503260300', '', 'dinesh', '2020-02-09 05:00:00.000');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `product_details` varchar(20000) NOT NULL,
  `product_image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `product_details`, `product_image`) VALUES
(1, 'test1', '<p>test 123</p>\r\n', 'product/images/202008230510521.png');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `service_name` varchar(200) NOT NULL,
  `service_details` varchar(15000) NOT NULL,
  `service_image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service_name`, `service_details`, `service_image`) VALUES
(1, 'Joint Pain', 'We have organised no. of Go Palak\'s from whole Maharashtra, who have studied the science behind Indiginous breed Gau Mata, who knows all the rules of collection,Partially processing of gavya\'s and their uses. We collect these gavyas, the highly richest source of medicines! ', 'services/images/1429920532.jpg'),
(2, 'Brain Tumor', 'We have organised no. of Go Palaks from whole Maharashtra, who have studied the science behind Indiginous breed Gau Mata, who knows all the rules of collection,Partially processing of gavyas and their uses. We collect these gavyas, the highly richest source of medicines! ', 'services/images/1585403540.jpg'),
(3, 'Inferlity', 'We have organised no. of Go Palak\'s from whole Maharashtra, who have studied the science behind Indiginous breed Gau Mata, who knows all the rules of collection,Partially processing of gavya\'s and their uses. We collect these gavyas, the highly richest source of medicines! ', 'services/images/513449417.jpg'),
(4, 'Child Counselling', 'We have organised no. of Go Palak\'s from whole Maharashtra, who have studied the science behind Indiginous breed Gau Mata, who knows all the rules of collection,Partially processing of gavya\'s and their uses. We collect these gavyas, the highly richest source of medicines! ', 'services/images/1746771780.jpg'),
(15, 'Residential Treatment ', 'We at the GAU URJA Natural Treatment Centre provides Residential treatment at Vaduj, Tal. Khatav, Dist. Satara\r\nIt includes\r\n1) Gau Based Detoxification\r\n2) Gau Based body Nourishment \r\n3) Sleepwell programmes for stressed people\r\n4) Be healthy with Gau Urja\r\n 5) Weakend programme for Family\r\n6) Sun Bath', 'services/images/1325287322.jpg'),
(16, 'OPD', '  1) Followup for treatment\r\n2) Medicines availability\r\n3) Post Detoxification treatments', 'services/images/825251091.jpg'),
(17, 'Natural Shoppy', 'You will get all the Gau Based Natural products ', 'services/images/466083413.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) CHARACTER SET macroman COLLATE macroman_bin DEFAULT NULL,
  `role_id` int(11) NOT NULL DEFAULT '1',
  `email` varchar(255) DEFAULT NULL,
  `mobile_number` varchar(25) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `cdate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `udate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `username`, `password`, `role_id`, `email`, `mobile_number`, `status`, `cdate`, `udate`) VALUES
(7, 'admin', '827ccb0eea8a706c4c34a16891f84e7b', 1, 'admin@gmail.com', '0000000000', 0, '2019-06-22 01:42:26', '2019-07-26 05:22:47'),
(10, 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 3, 'user@gmail.com', '0000000000', 0, '2019-07-22 00:23:03', '2019-07-26 05:23:37');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_franchise`
--

CREATE TABLE `tbl_franchise` (
  `id` int(11) NOT NULL,
  `store_name` varchar(1500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `store_location` varchar(1500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `store_details` varchar(2500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `store_image` varchar(1500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_franchise`
--

INSERT INTO `tbl_franchise` (`id`, `store_name`, `store_location`, `store_details`, `store_image`) VALUES
(3, 'Swasha Natural Products & Treatment Centre', 'NL1B, Building No. 7, Shop No. 1 & 2, Behind Datta-Shani Mandir, Shatakar Apartment,  Sector 10, Near Nerul Railway station, Nerul (W), Navi Mumbai. 400706.   Contact No. 8291686703, Email. swashanatural@gmail.com', '<p>We provide Natural Fruits &amp; Vegetables!</p>\r\n\r\n<p>Hygenic &amp; Fresh from farm to consumer!</p>\r\n\r\n<p>We Provide Gau Urja Natural Treatment</p>\r\n\r\n<p>Specialist in Cancer Treatment by Natural Food.</p>\r\n\r\n<p>Treatment with Gau Urja &amp; Natural Food Based on Desi Seeds Is Our Core!</p>\r\n', 'store/images/20200709092120WhatsApp Image 2020-07-09 at 21.20.02.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_quotes`
--

CREATE TABLE `tbl_quotes` (
  `id` int(11) NOT NULL,
  `title` varchar(1500) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `cdate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `udate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_roles`
--

CREATE TABLE `tbl_roles` (
  `role_id` tinyint(4) NOT NULL COMMENT 'role id',
  `role` varchar(50) NOT NULL COMMENT 'role text'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_roles`
--

INSERT INTO `tbl_roles` (`role_id`, `role`) VALUES
(1, 'System Admin'),
(3, 'Employee'),
(4, 'admin1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slider`
--

CREATE TABLE `tbl_slider` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `slider_image` varchar(200) NOT NULL,
  `cdate` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_slider`
--

INSERT INTO `tbl_slider` (`id`, `title`, `slider_image`, `cdate`) VALUES
(1, 'Slider 1', 'assets/images/images_slider/534945846.jpg', '2019-10-12 07:45:39.371440'),
(2, 'Slider 2', 'assets/images/images_slider/463980564.png', '2019-10-12 07:46:16.948871');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_testimonials`
--

CREATE TABLE `tbl_testimonials` (
  `id` int(11) NOT NULL,
  `name` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `country_name` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `content` varchar(1500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `testimonials_image` varchar(1500) NOT NULL,
  `cdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_testimonials`
--

INSERT INTO `tbl_testimonials` (`id`, `name`, `country_name`, `content`, `testimonials_image`, `cdate`) VALUES
(1, 'Paro Hiren Sitapara', 'Australia', '<table cellspacing=\"0\" style=\"width:310pt\">\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"height:75.0pt; text-align:left; vertical-align:top; white-space:normal; width:310pt\">My Fertile egg count was less than One, I had taken 5 years treatment in India as well 3 years in Australia, But I didn&#39;t improve my egg count, I had taken Gau Urja based Natural Treatment at Vaduj, We gifted a baby boy by the grace of Gau Mata! It wasn&#39;t a Less than a miracle for our family!</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', 'testimonials/images/20200709083653Paro Hiren Sitapara.jpeg', '2020-07-09 08:36:53'),
(2, 'N. Shrinivasu Rao', 'India', '<p>I was diagnosed with RCC by TATA Cancer Hospital Kharghar, without taking any Chemo, Radiation or Medicine, I took Gau Urja Natural Treatment, Now, I&#39;m free from RCC, I feel thankful to myself for taking a decision of going for Gau Urja treatment, otherwise it wasn&#39;t be possible? Now, I&#39;m living energetic happy life with family!&nbsp;</p>\r\n', 'testimonials/images/20200709083756N. Shrinivasu Rao.jpeg', '2020-07-09 08:37:56'),
(3, 'Asha Jadhav-Tupe', 'India', '<h2 style=\"font-style:italic;\">I was having Tumour of 35 x 36 mm in brain, I was so fedup of headache, Inflamation in stomach due to medicine, I was planned to go for surgery. Now my toumour is 100% regressed by Gau Urja Natural Treatment! Thanks a lot for giving me a New Life, Thanks to Gau Urja.&nbsp;</h2>\r\n', 'testimonials/images/20200709083921Asha Jadhav-Tupe.jpeg', '2020-07-09 08:39:21'),
(4, 'Bakulabai Shevte', 'India', '<h3><var>My Heamoglobin cells were broking before they grow completely, I got complete relief from this by Gau Urja Natural Treatment, I&#39;m really thankful!</var></h3>\r\n', 'testimonials/images/20200709085237Bakulabai Shewate (1).jpeg', '2020-07-09 08:52:37'),
(5, 'Lata Pakhale', 'India', '<p>I have a CANCEROUS Tumour in my Lever, I was unable to digest even a sip of water, I was having contineous omiting and loose motion, as I took 15 days residential Natural Treatment by Gau Urja my tumour size is reduced by 5 mm and I&quot;m having food full of stomach! Thanks to Gau Urja</p>\r\n', 'testimonials/images/20200709085737Lata Pakhale.jpeg', '2020-07-09 08:57:37');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_vision_mission`
--

CREATE TABLE `tbl_vision_mission` (
  `id` int(11) NOT NULL,
  `title` varchar(1500) NOT NULL,
  `description` varchar(1500) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_vision_mission`
--

INSERT INTO `tbl_vision_mission` (`id`, `title`, `description`, `status`) VALUES
(1, 'Mission', 'To help people achieve&nbsp;award of God -&nbsp;Natural Death&nbsp;without any Disease!', 0),
(2, 'Vision', 'Reformation of socio system based on Gau urja!', 0),
(3, 'Core Values', 'Honesty,Quality,Caring,Constant Improvement ', 0),
(4, 'Goal', 'To provide Natural Treatment &amp; Natural Food to 12000 families up to Dec. 2020 and we can do\r\n', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_youtube_videos`
--

CREATE TABLE `tbl_youtube_videos` (
  `id` int(11) NOT NULL,
  `video_title` varchar(1500) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `video_date` varchar(255) NOT NULL,
  `video_content` varchar(5000) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `video_author` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `youtube_link` varchar(1000) CHARACTER SET utf16 COLLATE utf16_unicode_ci DEFAULT NULL,
  `video_image` varchar(500) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `cdate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `udate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_youtube_videos`
--

INSERT INTO `tbl_youtube_videos` (`id`, `video_title`, `video_date`, `video_content`, `video_author`, `youtube_link`, `video_image`, `status`, `cdate`, `udate`) VALUES
(25, 'Vericose Veins Cured by Gau Urja', '2019-12-14', '<p>Our video is showing varicose vein treatment subject but we try to cover the subjects: -varicose veins natural treatment -get rid of varicose veins naturally -get rid of varicose veins Varicose vein treatment however is an subject that i know something about. This video therefore should matter and of interest to you. Varicose Vein Treatment</p>\r\n', '', 'xLvMfbnlY3w', 'assets/images/video/20200711012716Vericose Veins Dabhake.png', 0, '2020-07-11 01:20:49', '2020-07-11 06:32:24'),
(26, '९ x ७ mm चा किडनी स्टोन दिड महिन्याच्या आत नाहिसा झाला।', '2018-08-12', '<p>&nbsp;Kidney stone can be cured by Gau Urja&nbsp;</p>\r\n\r\n<p>Natural Food based on desi seeds is a god gifted medicine for human being!</p>\r\n', '', 'vM0wg5S1txI', 'assets/images/video/20200711065452Dr. Dipak Tupe.png', 0, '2020-07-11 06:54:52', '2020-07-11 06:24:52');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `email` varchar(200) NOT NULL,
  `contact` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `time_stamp` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `contact`, `password`, `time_stamp`) VALUES
(1, 'Manish Nyaynit', 'manish.mbtb@gmail.com', '9860327187', '123', '2019-10-02 08:07:57.829689'),
(2, 'Manish Nyaynit', 'harshad.mbtb@gmail.com', '9860327188', '123', '2019-10-02 08:11:08.301907'),
(3, 'Manish Nyaynit', 'harshad.mbtb12@gmail.com', '9860327184', '123', '2019-10-02 09:14:18.378223'),
(5, 'Asvjd', 'vsjeo@gmail.com', '4679912457', 'asdfg', '2019-10-03 14:08:19.653584'),
(6, 'Suraj shinde', 'surajshinde827@gmail.com', '7620655526', '123456789', '2019-10-03 14:49:17.592544'),
(7, 'Adfhh', 'sdd@gmail.com', '2233445566', '12345', '2019-10-04 15:50:59.958203');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_enquiry`
--
ALTER TABLE `contact_enquiry`
  ADD PRIMARY KEY (`enquiry_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_franchise`
--
ALTER TABLE `tbl_franchise`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_quotes`
--
ALTER TABLE `tbl_quotes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_roles`
--
ALTER TABLE `tbl_roles`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_testimonials`
--
ALTER TABLE `tbl_testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_vision_mission`
--
ALTER TABLE `tbl_vision_mission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_youtube_videos`
--
ALTER TABLE `tbl_youtube_videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact_enquiry`
--
ALTER TABLE `contact_enquiry`
  MODIFY `enquiry_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_franchise`
--
ALTER TABLE `tbl_franchise`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_quotes`
--
ALTER TABLE `tbl_quotes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_roles`
--
ALTER TABLE `tbl_roles`
  MODIFY `role_id` tinyint(4) NOT NULL AUTO_INCREMENT COMMENT 'role id', AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_testimonials`
--
ALTER TABLE `tbl_testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_vision_mission`
--
ALTER TABLE `tbl_vision_mission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_youtube_videos`
--
ALTER TABLE `tbl_youtube_videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
