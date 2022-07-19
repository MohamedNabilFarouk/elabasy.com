-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 25, 2021 at 04:40 AM
-- Server version: 5.6.41-84.1
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elabasy4_elabasy`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `name`, `phone`, `address`, `email`, `note`, `created_at`, `updated_at`) VALUES
(3, 'mohamed', '01101312', 'dafafdfa', 'mohamed98mahmoud2016@gmail.com', 'kfdfka', '2020-02-06 19:12:15', '2020-02-06 19:12:15'),
(7, 'mohamed', '0100', 'dkasgjagj', '0123@gmail.com', 'fdsakfgdasgjfa', '2020-02-06 19:22:45', '2020-02-06 19:22:45'),
(8, 'mohamed', '7s7s', 'fndkfjaj', 'mohamed98mahmoud2016@gmail.com', 'cdahfjdhfa', '2020-02-06 19:24:21', '2020-02-06 19:24:21'),
(10, 'mohamed', '01111748937', '36amr els ayed', 'mohamednabilfarouk@gmail.com', 'test', '2020-02-06 21:18:50', '2020-02-06 21:18:50'),
(12, 'محمد حسين', '0100', 'mohfda@gmail.com', 'mohamed98mahmoud2016@gmail.com', 'dfjaghfahsdf', '2020-02-07 16:29:10', '2020-02-07 16:29:10'),
(13, 'mahmoud salah', '01066551065', 'nasr streat', 'm.s.a.morgaan@gmail.com', '2 ؤمخؤن', '2020-02-07 18:10:41', '2020-02-07 18:10:41'),
(14, 'test', '0111748937', '22asdasdbjj', 'mohamednabilfarouk@gmail.com', 'test', '2020-02-09 19:25:51', '2020-02-09 19:25:51'),
(16, 'asASD', '011278923', 'AASDA', 'mohamedbilly1@gmail.com', 'TEST', '2020-02-09 19:36:57', '2020-02-09 19:36:57'),
(17, 'dd', '0113656545', 'jkhghjigha', 'mohamedbilly1@gmail.com', 'gggg', '2020-02-09 19:41:11', '2020-02-09 19:41:11'),
(18, 'bhvhjh', '846545614562', 'klhohoi', 'mohamednabilfarouk@gmail.com', 'ihuiuii', '2020-02-10 00:55:18', '2020-02-10 00:55:18'),
(19, 'Mohamed Nabil Farouk', '01111748937', '36amr els ayed', 'mohamednabilfarouk@gmail.com', 'sssssss', '2020-02-18 23:39:40', '2020-02-18 23:39:40'),
(20, 'ابانوب', '012047', 'الجمالية', 'abanoubsamir192@yahoo.com', 'hjfjyfjyfj', '2020-02-18 23:51:26', '2020-02-18 23:51:26'),
(26, 'mahmoud salah', '01066551065', 'nasr streat', 'm.s.a.morgaan@gmail.com', 'jhbhjutftyfty', '2020-02-18 23:53:59', '2020-02-18 23:53:59'),
(27, 'mahmoud salahklnj', '01066551065', 'nasr streat', 'm.s.a.morgaan@gmail.com', 'nujcnuih', '2020-02-18 23:55:03', '2020-02-18 23:55:03'),
(29, 'abanoub', '123456', 'egypt', 'pepoo@gmail.com', '112233', '2020-02-19 00:04:32', '2020-02-19 00:04:32'),
(30, 'test test', '011117489372', '36amr els ayed', 'mohamedbilly1@gmail.com', 'adasdasdasdas', '2020-02-19 00:20:15', '2020-02-19 00:20:15'),
(31, 'a s', '66666', 'asdf', 'asd@gmail.com', 'hthht4h64', '2020-02-19 00:30:58', '2020-02-19 00:30:58'),
(32, 'aaaaa', '+201001679174', '13 souq el samak el kadeem - el khoronfish st', 'abanoubsamir192@yahoo.com', 'ارساله الي قريبي', '2020-02-21 01:32:12', '2020-02-21 01:32:12'),
(33, 'sssssssss', '01022885985', 'asdasdas', 'ssadasd@email', 'asdasd', '2020-02-25 21:02:53', '2020-02-25 21:02:53'),
(34, 'test pridce', 'sss', 'sss', 'ssss@sss', 'sssss', '2020-02-25 21:28:58', '2020-02-25 21:28:58');

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE `ads` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ads`
--

INSERT INTO `ads` (`id`, `image`, `text`, `link`) VALUES
(1, '487banner-image-3.jpg', '', NULL),
(2, 'img3.jpg', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `des` text COLLATE utf8mb4_unicode_ci,
  `title_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `des_ar` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `des`, `title_ar`, `des_ar`, `image`, `created_at`, `updated_at`) VALUES
(4, 'test', 'des', 'عنوان', 'تفاصيل تفاصيل تفاصيل', '8401.jpg', '2020-02-05 14:20:54', '2021-08-12 17:54:45'),
(5, 'Diamond ring is worn on top of the engagement band', 'des 2', NULL, NULL, '9795.jpg', '2020-02-05 14:24:58', '2021-08-12 17:57:32'),
(6, 'جديد', 'تفاصيل المدونة جديد', 'جديد', 'تفاصيل المدونة جديد', '4752.jpg', '2020-02-08 10:22:01', '2021-08-12 17:57:51'),
(7, 'ciramic type', 'ciramic details', 'انواع السراميك', 'بورسلين', '1953.jpg', '2020-02-14 00:47:08', '2021-08-12 17:59:52');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `name_ar`, `image`, `category_id`, `created_at`, `updated_at`) VALUES
(2, NULL, 'كليوباترا', NULL, 13, '2021-08-26 18:07:43', '2021-08-26 18:07:43'),
(3, NULL, 'مايوركا', NULL, 13, '2021-08-26 18:08:13', '2021-08-26 18:08:13'),
(4, NULL, 'ريماس', NULL, 13, '2021-08-26 18:08:21', '2021-08-26 18:08:21'),
(5, NULL, 'روكا', NULL, 13, '2021-08-26 18:08:29', '2021-08-26 18:08:29'),
(6, NULL, 'بورسالين مستورد', NULL, 14, '2021-08-26 18:09:03', '2021-08-26 18:09:03'),
(7, NULL, 'بورسالين محلي', NULL, 14, '2021-08-26 18:09:18', '2021-08-26 18:09:18'),
(8, NULL, 'كليوباترا صحي', NULL, 15, '2021-08-26 18:10:21', '2021-08-26 18:10:21'),
(9, NULL, 'ايديال ستاندر', NULL, 15, '2021-08-26 18:10:52', '2021-08-26 18:10:52'),
(10, NULL, 'ليسكيو', NULL, 15, '2021-08-26 18:11:03', '2021-08-26 18:11:03'),
(11, NULL, 'كيفانو', NULL, 16, '2021-08-26 18:11:23', '2021-08-26 18:11:23'),
(12, NULL, 'الطيب', NULL, 16, '2021-08-26 18:11:31', '2021-08-26 18:11:31'),
(13, NULL, 'الجوهرة', NULL, 13, '2021-08-26 18:11:41', '2021-08-26 18:11:41'),
(14, NULL, 'فوكس جلوب', NULL, 17, '2021-08-26 18:12:39', '2021-08-26 18:12:39'),
(15, NULL, 'تابلوهات حائط', NULL, 17, '2021-08-26 18:13:06', '2021-08-26 18:13:06'),
(16, 'Gravena.', 'جرافينا', NULL, 15, '2021-08-30 16:45:11', '2021-12-10 00:28:03'),
(17, 'Gravena', 'جرافينا', NULL, 16, '2021-09-07 14:56:46', '2021-09-07 14:56:46');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `des` text COLLATE utf8mb4_unicode_ci,
  `name_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `des_ar` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `des`, `name_ar`, `des_ar`, `image`) VALUES
(13, NULL, NULL, 'سيراميك', NULL, 'logo.png'),
(14, NULL, NULL, 'بورسالين', NULL, NULL),
(15, 'اطقم حمامات', NULL, 'اطقم حمامات', NULL, NULL),
(16, NULL, NULL, 'بانيوهات', NULL, NULL),
(17, NULL, NULL, 'اكسسوارات', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `name`, `email`, `phone`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Mohamed', 'mohamedbilly1@gmail.com', 'test', 'ssss', 'test', '2020-02-06 10:08:21', '2020-02-06 10:08:21'),
(2, 'Mohamed', 'mohamedbilly1@gmail.com', '0102288985', 'test', 'test', '2020-02-06 10:10:39', '2020-02-06 10:10:39'),
(3, 'test', 'mohamedbilly1@gmail.com', '01111748937', 'test', 'ssasxdas', '2020-02-06 10:12:11', '2020-02-06 10:12:11'),
(4, 'test', 'mohamedbilly1@gmail.com', '01111748937', 'test', 'ssasxdas', '2020-02-06 10:13:06', '2020-02-06 10:13:06'),
(5, 'Harrison', 'harrison.coughlan@yahoo.com', '033 400 46 57', 'Promo offer - Get Top 10 for your elabasy.com - £49 SEO Plan', 'Hello guys! I know you should be interested in our special offer:\r\n\r\nNow we have a PROMO offer for elabasy.com - powerful organic SEO strategy. \r\n\r\nIt will give you the top positions in Google search results, \r\n\r\ndoesn\'t matter on type of web resource you currently have.\r\n\r\nYou know, Organic SEO is a great marketing strategy to gain top 10 Google, \r\n\r\nespecially for the small business websites.\r\n\r\nWith a small investment, you get a permanent customers flow and noticeable increasing of profits.\r\n\r\nThere is no other methods  with such ROI! Try Organic SEO with our experienced SEO experts.\r\n\r\nYou can select from our standard plans or request a custom SEO plan \r\n\r\nthat will be tailored specifically for your website.\r\n\r\nThe effects of our Organic SEO efforts usually appear within 30 days \r\n\r\nafter we start to work with client\'s site.\r\n\r\nYou can verify this by starting with our SEO plan for £49 - no any subscription required.\r\n\r\nOrganic SEO, website optimization for search engines, \r\n\r\nkeyword selection, link building, local SEO, \r\n\r\nUI/UX optimization, SEO audits, free online SEO advices\r\n\r\nAnd don\'t forget - We work with the sites on any European language\r\n\r\n\r\nPlease, follow this link for details: https://soo.gd//88443  \r\n\r\nExcuse us if we \'ve disturbed you and we are sorry if you are not interested in this offer\r\n\r\nThanks for your attention', '2021-09-17 10:05:31', '2021-09-17 10:05:31'),
(6, 'David Holman', 'davidholman200@gmail.com', '83956297771', 'Master Degree', 'We are a Team of IT Experts specialized in the production of Real and authentic Documents such as Passport, Driving License , Diploma Certificates, PhD\'s, \r\nIELTS Certificate, Bachelor  degrees, NCLEX Certificate, MBA, ID Cards, SS Cards, Associate Certificate, University Certificates, Green Cards, Death Certificate, Master Degree, Working Permits, Visa\'s etc. Contact us on WhatsApp for more information +49 1590 2969018. or Email us at... documentsservicesexperts@gmail.com', '2021-11-16 09:06:43', '2021-11-16 09:06:43'),
(7, 'Mike Nelson', 'no-replySON@gmail.com', '82887166929', 'Local SEO for more business', 'Greetings \r\n \r\nWe will improve your Local Ranks organically and safely, using only whitehat methods, while providing Google maps and website offsite work at the same time. \r\n \r\nPlease check our pricelist here, we offer Local SEO at cheap rates. \r\nhttps://speed-seo.net/product/local-seo-package/ \r\n \r\nNEW: \r\nhttps://www.speed-seo.net/product/zip-codes-gmaps-citations/ \r\n \r\nregards \r\nMike Nelson\r\n \r\nSpeed SEO Digital Agency', '2021-11-16 10:21:38', '2021-11-16 10:21:38'),
(8, 'TimothyAlili', 'devachtvanvreckem@skynet.be', '85393652289', 'Register, press one button and get passive income from $ 5878 in a day', 'Change your life and get passive income more $ 9565 per day >>>>>>>>>>>>>>>>>>>>>>>>>>> https://www.google.com/url?q=https%3A%2F%2Fvk.cc%2Fc7Wvjo&sa=D&17=72&usg=AFQjCNHj_a66ufJc5MfSABppuo4GGGxh6w <<<<<<<<<<<<<<<<<<<<<<<<', '2021-11-18 14:18:33', '2021-11-18 14:18:33'),
(9, 'Georgeagrit', 'alfredochamartin@gmx.at', '83636434231', 'Confessions of a Bitcoin billionaire or passive income more $ 6855 in a day', 'Confessions of a Bitcoin billionaire or passive income more $ 5977 per day >>>>>>>>>>>>>>  https://www.google.com/url?q=https%3A%2F%2Fvk.cc%2Fc7Wvjo&sa=D&30=62&usg=AFQjCNHj_a66ufJc5MfSABppuo4GGGxh6w   <<<<<<<<<<<', '2021-11-18 15:10:03', '2021-11-18 15:10:03'),
(10, 'Haroldacecy', 'ian.macdougall@medportal.ca', '84398831984', 'Bitcoin trading bot that brings Elon Musk from $ 13000 per day', 'A few weeks ago, Elon Musk, in an interview, accidentally blabbed about a cryptocurrency trading robot that brings him passive income from $ 13,000 to $ 135,000 per day and asked to remove this moment from the video after filming. \r\nhttps://www.google.com/url?q=https%3A%2F%2Fvk.cc%2Fc8aMsu&sa=D&62=16&usg=AFQjCNGiMsVvcKCjtUl1s1o9fbbu24TnPA \r\nBut the operator who filmed all this remembered the name of the trading robot and tried to make money. \r\nOn the same day, he made a deposit of $ 500 and launched a trading robot and after 3 hours his account had $ 3750 and a week later $ 563700. \r\nOn the robot, you earn in the currency of your country, Europe - EUR, Australia - AUD, Canada - CAD, Sweden - SEC and so on. \r\nHurry up to register as after the influx of new users, the administrators decided to stop registering new users from next week. \r\nhttps://www.google.com/url?q=https%3A%2F%2Fvk.cc%2Fc8aMsu&sa=D&18=91&usg=AFQjCNGiMsVvcKCjtUl1s1o9fbbu24TnPA', '2021-11-20 12:38:21', '2021-11-20 12:38:21'),
(11, 'Roberts Zuluf', 'rfzuluf@gmail.com', '88279411517', 'Trying to Reach you', 'Hi \r\nHow are you? I wanted to reach out to you and verify that email was a good way to reach you or We can discuss this via the telephone,WhatsApp only. +90 555 140 8097 or contact@frzuluf.com \r\nI count in your honor for a quick response for a good deal. \r\nRegards, \r\nRoberts Zuluf', '2021-11-20 20:41:40', '2021-11-20 20:41:40'),
(12, 'TimothyAlili', 'wirunyat@inet.co.th', '88868567643', 'Bitcoin Miiliarder told how he makes money more $ 8868 in a day', 'Make Artificial Intelligence bring you from $ 8597 in a day >>>>>>>>>>>>>>>>>>>>>>>>>>> https://www.google.com/url?q=https%3A%2F%2Fvk.cc%2Fc8efyS&sa=D&49=93&usg=AFQjCNE19L0R90htG4gSNamEaeldZ-6c8g <<<<<<<<<<<<<<<<<<<<<<<<', '2021-11-23 07:07:43', '2021-11-23 07:07:43'),
(13, 'Grantphoto', 'izzyb25@yahoo.com.au', '86711628357', 'Binance: The Best Trading Robot in the World', 'According to Binance, this is the best trading robot in the world. \r\nhttps://www.google.com/url?q=https%3A%2F%2Fvk.cc%2Fc8kz55&sa=D&54=90&usg=AFQjCNEYo6mWXSP9gUinA8sLtVU0jLXlbQ \r\nBecause he is able to make 200% profit every day. \r\nFor example, you replenished your brokerage account with $ 500 (EUR, GBP, etc.) and he earned you from $ 1000 in net income within a day. Binance recommends using this particular trading robot for automated trading. \r\nhttps://www.google.com/url?q=https%3A%2F%2Fvk.cc%2Fc8kz55&sa=D&05=57&usg=AFQjCNEYo6mWXSP9gUinA8sLtVU0jLXlbQ', '2021-11-26 05:18:50', '2021-11-26 05:18:50'),
(14, 'Mike Finch', 'no-replySON@gmail.com', '83535314536', 'whitehat monthly SEO plans', 'Good Day \r\n \r\nI have just took an in depth look on your  elabasy.com for  the current search visibility and saw that your website could use a push. \r\n \r\nWe will increase your SEO metrics and ranks organically and safely, using only whitehat methods, while providing monthly reports and outstanding support. \r\n \r\nPlease check our plans here, we offer SEO at cheap rates. \r\nhttps://www.hilkom-digital.de/cheap-seo-packages/ \r\n \r\nStart enhancing your sales and leads with us, today! \r\n \r\n \r\nregards \r\nMike Finch\r\n \r\nHilkom Digital Team \r\nsupport@hilkom-digital.de', '2021-11-27 03:24:40', '2021-11-27 03:24:40'),
(15, 'Lloydlig', 'stephan-ochmann@t-online.de', '89363396958', ':+)+ Binance: The Best Trading Robot in the World ;$№+', 'According to Binance, this is the best trading robot in the world *$!* \r\nhttps://www.google.com/url?q=https%3A%2F%2Fvk.cc%2Fc8qvzi&sa=D&91=96&usg=AFQjCNH2QAwQV6sbS1u0SgHiVXKZSKhcKQ \r\nBecause he is able to make 200% profit every day ;(№* \r\nFor example, you replenished your brokerage account with $ 500 (EUR, GBP, etc.) and he earned you from $ 1000 in net income within a day !&№# \r\nBinance recommends using this particular trading robot for automated trading ?*!- \r\nhttps://www.google.com/url?q=https%3A%2F%2Fvk.cc%2Fc8qvzi&sa=D&91=71&usg=AFQjCNH2QAwQV6sbS1u0SgHiVXKZSKhcKQ', '2021-11-28 14:19:37', '2021-11-28 14:19:37'),
(16, 'RogerFrils', 'b.teschner91@t-online.de', '82679223667', 'Blockchain: The most profitable trading robot or income from $ 5000 per day )_**', 'Blockchain recommends to all people who are interested in additional permanent passive income of $ 5000 per day with a cryptocurrency trading robot. \r\nhttps://www.google.com/url?q=https%3A%2F%2Fvk.cc%2Fc8qvzi&sa=D&98=59&usg=AFQjCNH2QAwQV6sbS1u0SgHiVXKZSKhcKQ \r\nA trading robot is capable of making from 750% to 15000% profit per day ?^:$ \r\nhttps://www.google.com/url?q=https%3A%2F%2Fvk.cc%2Fc8qvzi&sa=D&63=05&usg=AFQjCNH2QAwQV6sbS1u0SgHiVXKZSKhcKQ \r\nThis success was achieved thanks to the advanced developments in the field of artificial intelligence %^:^ \r\nTens of thousands of people around the world are already using this trading robot, so start you ?-%) \r\nhttps://www.google.com/url?q=https%3A%2F%2Fvk.cc%2Fc8qvzi&sa=D&85=36&usg=AFQjCNH2QAwQV6sbS1u0SgHiVXKZSKhcKQ \r\nTo start, you need to do just three things: \r\n1. Make a deposit to your brokerage account from $ 500 !#*( \r\n2. Launch the trading robot %$;( \r\n3. Receive passive income from $ 5000 per day ?#($ \r\nhttps://www.google.com/url?q=https%3A%2F%2Fvk.cc%2Fc8qvzi&sa=D&47=65&usg=AFQjCNH2QAwQV6sbS1u0SgHiVXKZSKhcKQ', '2021-12-01 03:10:23', '2021-12-01 03:10:23'),
(17, 'TimothyAlili', 'c.maupertuis@orange.fr', '82946911932', 'Get ready to see your dollars roll in!', 'As You Wish >>>>>>>>>>>>>>>>>>>>>>>>>>> https://www.google.com/url?q=https%3A%2F%2Fvk.cc%2Fc8qvzi&sa=D&30=85&usg=AFQjCNH2QAwQV6sbS1u0SgHiVXKZSKhcKQ <<<<<<<<<<<<<<<<<<<<<<<<', '2021-12-03 10:09:45', '2021-12-03 10:09:45'),
(18, 'Mike Jerome', 'no-replySON@gmail.com', '89411613337', 'Get more dofollow backlinks for elabasy.com', 'Hello \r\n \r\nWe all know the importance that dofollow link have on any website`s ranks. \r\nHaving most of your linkbase filled with nofollow ones is of no good for your ranks and SEO metrics. \r\n \r\nBuy quality dofollow links from us, that will impact your ranks in a positive way \r\nhttps://www.digital-x-press.com/product/150-dofollow-backlinks/ \r\n \r\nBest regards \r\nMike Jerome\r\n \r\nsupport@digital-x-press.com', '2021-12-03 20:41:09', '2021-12-03 20:41:09'),
(19, 'NataMom', 'woodthighgire1988@gmail.com', '87169821837', 'Hello Admin!', 'مرحبا! إذا كنت ترغب في سحب لي على عصاك, ثم رسالة لي حيث يمكننا أن نلتقي https://localchicks3.com/?u=41nkd08&o=8dhpkzk', '2021-12-04 08:22:30', '2021-12-04 08:22:30'),
(20, 'TimothyAlili', 'jimmy.l91@hotmail.com', '87244548794', 'Income from one investment more $ 8885 in a day', 'Register, press one button and get passive income more $ 6959 per day >>>>>>>>>>>>>>>>>>>>>>>>>>> https://www.google.com/url?q=https%3A%2F%2Fvk.cc%2Fc8ED7K&sa=D&35=96&usg=AFQjCNEY3K5BsQ-mUq_FMcp6hGUAytb7Og <<<<<<<<<<<<<<<<<<<<<<<<', '2021-12-04 15:42:49', '2021-12-04 15:42:49'),
(21, 'Richard Andersen', 'donotreply.betrave@gmail.com', '84536181887', 'START TRADING  Online RIGHT NOW: With only 1 USD!', 'Dear, \r\nDo you know that you could also achieve an additional profit of more than 10% in just a few days trading on stock markets worldwide with minimum risk? \r\nWould you like to start trading or investing in the stock market more easily and quickly, with more confidence, effectiveness & efficiency? ONLINE? \r\n> TRY IT RIGHT NOW FOR FREE \r\nYou can start by opening a 100% free account, with a small amount like 1 USD for trial. To get started, please register here with our 100% accredited worldclass broker  CAPITAL, then we will guide you forward. \r\nLink for free registration RIGHT NOW: https://capital.com/?c=37799_3743058&pid=cellxpert \r\nHow to trade?: You just purchase an asset at a lower cost, then you resell it after a few moments (few hours or few days) at a higher cost; then you gain from the price increase. \r\n \r\nOn behalf of BETRAVE Team Worldwide: For more infos please  contact us by email contact@betrave.org or whatsapp +237620171905 or visit: http://www.betrave.org/', '2021-12-04 20:29:11', '2021-12-04 20:29:11'),
(22, 'TimothyAlili', 'd1d4c8@gmail.com', '86396716911', 'Bitcoin Miiliarder told how he makes money more $ 5859 in a day', 'REGISTER NOW and get more $ 6968 in a day >>>>>>>>>>>>>>>>>>>>>>>>>>> https://www.google.com/url?q=https%3A%2F%2Fvk.cc%2Fc8ED7K&sa=D&16=29&usg=AFQjCNEY3K5BsQ-mUq_FMcp6hGUAytb7Og <<<<<<<<<<<<<<<<<<<<<<<<', '2021-12-06 22:15:26', '2021-12-06 22:15:26'),
(23, 'JAMES COOK', 'james_cook78@yahoo.com', '84419539951', 'Loan @ 3%', 'Dear sir/ma \r\nWe are a finance and investment company offering loans at 3% interest rate. We will be happy to make a loan available to your organisation for your project. Our terms and conditions will apply. Our term sheet/loan agreement will be sent to you for review, when we hear from you. Please reply to this email ONLY cookj5939@gmail.com \r\n \r\nRegards. \r\nJames Cook \r\nChairman & CEO Euro Finance & Commercial Ltd', '2021-12-07 04:20:55', '2021-12-07 04:20:55'),
(24, 'Mike Lewin', 'no-replySON@gmail.com', '87319925327', 'Strengthen your Domain Authority', 'Hi there \r\n \r\nDo you want a quick boost in ranks and sales for your website? \r\nHaving a high DA score, always helps \r\n \r\nGet your elabasy.com to have a DA between 50 to 60 points in Moz with us today and reap the benefits of such a great feat. \r\n \r\nSee our offers here: \r\nhttps://www.strictlydigital.net/product/moz-da50-seo-plan/ \r\n \r\nOn SALE: \r\nhttps://www.strictlydigital.net/product/ahrefs-dr60/ \r\n \r\nThank you \r\nMike Lewin', '2021-12-09 00:08:33', '2021-12-09 00:08:33'),
(25, 'TimothyAlili', 'rustbitten@t-online.de', '81644329851', 'Deine Kollegen verdienen schon Vor 192000 EUR in der Woche', 'Schnelles Geld von 156000 EUR in der Woche >>>>>>>>>>>>>>>>>>>>>>>>>>> http://www.google.com/url?q=http%3A%2F%2Fgo.nihawiwa.com%2F0bnl&sa=D&51=09&usg=AFQjCNEUPijOi1LFtA_rg0rU0qfVGTKd6A <<<<<<<<<<<<<<<<<<<<<<<<', '2021-12-09 02:01:26', '2021-12-09 02:01:26'),
(26, 'Susan Johnson', 'livestaffinghub@gmail.com', '89322634967', 'I have a quick question', 'Hello \r\n \r\nMy main objective here, is to help you increase revenue for your business by providing Social Media Marketing for 1 WEEK FREE, then just $67 a month. \r\n \r\nTo learn more: WATCH OUR VIDEO  https://bit.ly/lsh67offer \r\n \r\nOur specialist in Facebook, Instagram, LinkedIn and Twitter has a singular purpose and that is to drive more sales for your business, so that you will be our customer for life. \r\n \r\nThis 1 WEEK FREE promotion is for this week only. So, if you want to get this deal before the deadline, click the link below. \r\n \r\nTo learn more: WATCH OUR VIDEO https://bit.ly/lsh67offer \r\n \r\nBest, \r\n \r\nSusan Johnson', '2021-12-10 21:55:48', '2021-12-10 21:55:48'),
(27, 'TimothyAlili', 'presidents@protonmail.ch', '84861265741', 'Fast income from one investment from $ 7776 in a day', 'A ready-made system for generating passive income from $ 9796 in a day >>>>>>>>>>>>>>>>>>>>>>>>>>> https://www.google.com/url?q=https%3A%2F%2Fvk.cc%2Fc8Prmu&sa=D&38=01&usg=AFQjCNH_EGwAiiB8MpWHxZlE1C27oj3Rvw <<<<<<<<<<<<<<<<<<<<<<<<', '2021-12-12 10:30:40', '2021-12-12 10:30:40'),
(28, 'Mike Morgan', 'no-replySON@gmail.com', '84678257628', 'Local SEO for more business', 'Good Day \r\n \r\nWe will enhance your Local Ranks organically and safely, using only whitehat methods, while providing Google maps and website offsite work at the same time. \r\n \r\nPlease check our pricelist here, we offer Local SEO at cheap rates. \r\nhttps://speed-seo.net/product/local-seo-package/ \r\n \r\nNEW: \r\nhttps://www.speed-seo.net/product/zip-codes-gmaps-citations/ \r\n \r\nregards \r\nMike Morgan\r\n \r\nSpeed SEO Digital Agency', '2021-12-13 18:29:55', '2021-12-13 18:29:55'),
(29, 'TimothyAlili', 'ulrichstoll@bluewin.ch', '87417951652', 'REGISTER NOW and get more $ 6858 in a day', 'REGISTER NOW and get from $ 9986 per day >>>>>>>>>>>>>>>>>>>>>>>>>>> https://www.google.com/url?q=https%3A%2F%2Fvk.cc%2Fc8Prmu&sa=D&89=23&usg=AFQjCNH_EGwAiiB8MpWHxZlE1C27oj3Rvw <<<<<<<<<<<<<<<<<<<<<<<<', '2021-12-14 11:38:13', '2021-12-14 11:38:13'),
(30, 'TimothyAlili', 'cry-tec@freenet.de', '81869662784', 'A ready-made system for generating passive income more $ 6586 in a day', 'Passive income from $ 5659 in a day >>>>>>>>>>>>>>>>>>>>>>>>>>> http://www.google.com/url?q=http%3A%2F%2Fgo.nirulugo.com%2F0bnl&sa=D&13=74&usg=AFQjCNErknOO8eaNhDQCQiKaUi6wsp9KfA <<<<<<<<<<<<<<<<<<<<<<<<', '2021-12-17 13:05:24', '2021-12-17 13:05:24'),
(31, 'TimothyAlili', 'andrea.vel@libero.it', '84137531629', 'Register, press one button and get passive income more $ 7558 in a day', 'Register, press one button and get passive income from $ 7885 per day >>>>>>>>>>>>>>>>>>>>>>>>>>> http://www.google.com/url?q=http%3A%2F%2Fgo.nirulugo.com%2F0bnl&sa=D&85=67&usg=AFQjCNErknOO8eaNhDQCQiKaUi6wsp9KfA <<<<<<<<<<<<<<<<<<<<<<<<', '2021-12-20 11:52:02', '2021-12-20 11:52:02'),
(32, 'Mike Eddington', 'no-replySON@gmail.com', '89939591115', 'cheap monthly SEO plans', 'Greetings \r\n \r\nI have just took an in depth look on your  elabasy.com for the ranking keywords and saw that your website could use an upgrade. \r\n \r\nWe will enhance your SEO metrics and ranks organically and safely, using only whitehat methods, while providing monthly reports and outstanding support. \r\n \r\nPlease check our services below, we offer SEO at cheap rates. \r\nhttps://www.hilkom-digital.de/cheap-seo-packages/ \r\n \r\nStart improving your sales and leads with us, today! \r\n \r\n \r\nregards \r\nMike Eddington\r\n \r\nHilkom Digital Team \r\nsupport@hilkom-digital.de', '2021-12-20 22:49:14', '2021-12-20 22:49:14'),
(33, 'TimothyAlili', 'ichschlafbeimartin@web.de', '81893515542', 'Deine Kollegen verdienen schon Vor 16800 EUR in der Woche', 'Dies ist Ihre Chance zu verdienen Vor 19300 EUR in der Woche >>>>>>>>>>>>>>>>>>>>>>>>>>> https://www.google.com/url?q=https%3A%2F%2Fvk.cc%2Fc9jD1p&sa=D&06=06&usg=AFQjCNE5-l7dYtpQNDLSz9x2TTehrGGJ2w <<<<<<<<<<<<<<<<<<<<<<<<', '2021-12-22 11:42:20', '2021-12-22 11:42:20');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `footer_ads`
--

CREATE TABLE `footer_ads` (
  `id` int(10) UNSIGNED NOT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `image`) VALUES
(1, '406product-image-4.jpg'),
(2, '38product-image-2-thumb.jpg'),
(3, '727portfolio-image-7.jpg'),
(4, '717blog-image-2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_06_26_000000_create_shopping_cart_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2020_01_21_100257_create_categories_table', 1),
(6, '2020_01_21_104847_create_products_table', 1),
(7, '2020_01_21_115257_create_ads_table', 1),
(8, '2020_01_23_063216_create_footer_ads_table', 1),
(9, '2020_01_23_063339_create_sliders_table', 1),
(10, '2020_01_23_094234_create_product_galleries_table', 1),
(11, '2020_01_27_095032_create_roles_table', 1),
(12, '2020_01_27_100048_create_user_roles_table', 1),
(14, '2020_02_04_120903_create_account_table', 2),
(15, '2020_02_04_121359_create_order_table', 3),
(16, '2020_02_05_100612_create_static_table', 4),
(17, '2020_02_05_104626_create_gallery_table', 5),
(18, '2020_02_05_141520_create_blog_table', 6),
(19, '2020_02_06_105412_create_contactus_table', 7),
(20, '2021_08_24_185315_create_brands_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(10) UNSIGNED NOT NULL,
  `product` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `price` double NOT NULL,
  `account_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `des` text COLLATE utf8mb4_unicode_ci,
  `name_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `des_ar` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `on_sale` tinyint(1) NOT NULL DEFAULT '0',
  `home` tinyint(1) NOT NULL DEFAULT '0',
  `deal` tinyint(1) NOT NULL DEFAULT '0',
  `deal_date` date DEFAULT NULL,
  `deal_price` double DEFAULT NULL,
  `price` double NOT NULL,
  `offer_price` double DEFAULT NULL,
  `quantity` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `des`, `name_ar`, `des_ar`, `image`, `category_id`, `brand_id`, `on_sale`, `home`, `deal`, `deal_date`, `deal_price`, `price`, `offer_price`, `quantity`) VALUES
(180, NULL, NULL, 'حوائط كليوباترا', 'سيراميك أجاثا جولد وبراون كليوباترا حوائط مطبخ 25×75 وارضيات اجاثا 59.5×59.5', '3233.jpg', 13, 2, 0, 1, 0, NULL, 100, 98, 0, 100),
(181, NULL, NULL, 'مورجانيتا 25×50سم / حوائط', 'سيراميك أجاثا جولد وبراون كليوباترا حوائط مطبخ 25×75 وارضيات اجاثا 59.5×59.5', '872.jpg', 13, 2, 0, 1, 0, NULL, NULL, 500, 0, 600),
(182, 'بورسالين هندي', 'بورسالين هندي درجة أولي 60×60سم', 'بورسالين هندي', 'بورسالين هندي درجة أولي 60×60سم', '5942.jpg', 14, 6, 0, 0, 0, NULL, NULL, 300, 0, 3000),
(183, 'بانيو الطيب موديل باريس 70×170 أبيض بدون الجانب', 'بانيو الطيب موديل باريس 70×170 أبيض بدون الجانب', 'بانيو الطيب موديل باريس 70×170 أبيض بدون الجانب', 'بانيو الطيب موديل باريس 70×170 أبيض بدون الجانب', '397tib-bathtub paris (1).jpg', 16, 12, 0, 0, 0, NULL, NULL, 500, 0, 300);

-- --------------------------------------------------------

--
-- Table structure for table `product_galleries`
--

CREATE TABLE `product_galleries` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_galleries`
--

INSERT INTO `product_galleries` (`id`, `image`, `product_id`) VALUES
(172, '9251.jpg', 180),
(173, '5552.jpg', 180),
(174, '7793.jpg', 180),
(175, '734.jpg', 181),
(176, '1175.jpg', 181),
(177, '2366.jpg', 181),
(178, '6721.jpg', 182),
(179, '3392.jpg', 182),
(180, '433.jpg', 182),
(181, '643tib-bathtub paris (1).jpg', 183),
(182, '697tib-bathtub paris (3).jpg', 183),
(183, '507tib-bathtub paris (4).jpg', 183),
(185, '393Screenshot 2021-09-15 162258.png', 189),
(186, '9991O2Q317wAQQoXOIDWlId9zVqeGnnMJII4ew4Mm7a.png', 188),
(187, '116default.png', 188),
(188, '872IMG_9664.PNG', 188),
(189, '60IMG_9756.PNG', 188),
(190, '76IMG_9757.PNG', 188),
(191, '488IMG_9758.PNG', 188),
(192, '244IMG_9759.PNG', 188),
(193, '972IMG_9664.PNG', 188),
(194, '571IMG_9757.PNG', 188),
(195, '308IMG_9758.PNG', 188),
(196, '66IMG_9759.PNG', 188),
(197, '278IMG_9664.PNG', 190),
(198, '300IMG_9757.PNG', 190),
(199, '482IMG_9758.PNG', 190),
(200, '989IMG_9759.PNG', 190),
(201, '915Screenshot 2021-09-15 172309.png', 189),
(202, '298Screenshot 2021-09-15 172309.png', 189),
(203, '397IMG_1239.JPEG', 191),
(204, '527IMG_1240.JPEG', 191),
(205, '820IMG_1227.PNG', 191),
(206, '342IMG_1239.JPEG', 191),
(207, '981IMG_1240.JPEG', 191),
(208, '639IMG_1227.PNG', 191),
(209, '240IMG_1239.JPEG', 191),
(210, '79IMG_1240.JPEG', 191);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role`) VALUES
(1, 'Admin'),
(2, 'NormalUser');

-- --------------------------------------------------------

--
-- Table structure for table `shopping_cart`
--

CREATE TABLE `shopping_cart` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instance` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `text` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `text`, `text_ar`, `image`) VALUES
(1, '', '', '8673.jpg'),
(2, '', NULL, '7766.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `static`
--

CREATE TABLE `static` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ar` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `static`
--

INSERT INTO `static` (`id`, `code`, `value`, `ar`) VALUES
(1, 'phone', '01212635631', '01212635631'),
(2, 'email', 'contact@example.com', 'contact@example.com'),
(3, 'address', '10th Ramadan', 'العاشر من رمضان'),
(4, 'about-us-title', 'Al-Hassan', 'الحسن'),
(5, 'about-us-des', 'about US  about US  about US \r\nabout US \r\nabout US', 'تفاصيل عن الشركة'),
(6, 'facebook', 'https://www.facebook.com', 'https://www.facebook.com'),
(7, 'instagram', 'https://www.instagram.com', 'https://www.instagram.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@admin.com', NULL, '$2y$10$BFw5GcloLNnHgMmWMaSBIur6zpdmzhAG/oWYrMpO8MHmqXZCXx2ke', NULL, '2020-02-01 16:02:54', '2020-02-01 16:02:54'),
(2, 'mohamed nabil', 'mohamednabilfarouk@gmail.com', NULL, '$2y$10$aeilU8yBr6GHCAxC4EOop.xqxOgRFqgEiCnI.MWIuOuP4Eka070Ji', NULL, '2020-02-06 11:14:12', '2020-02-06 11:14:12');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL DEFAULT '2',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `user_id`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer_ads`
--
ALTER TABLE `footer_ads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_galleries`
--
ALTER TABLE `product_galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shopping_cart`
--
ALTER TABLE `shopping_cart`
  ADD PRIMARY KEY (`id`,`instance`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `static`
--
ALTER TABLE `static`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `ads`
--
ALTER TABLE `ads`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `footer_ads`
--
ALTER TABLE `footer_ads`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=184;

--
-- AUTO_INCREMENT for table `product_galleries`
--
ALTER TABLE `product_galleries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=211;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `static`
--
ALTER TABLE `static`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
