-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 13, 2022 at 11:03 AM
-- Server version: 5.7.37
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chitrakala`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(150) NOT NULL,
  `mobileno` varchar(12) NOT NULL,
  `password` varchar(120) NOT NULL,
  `editprivilage` tinyint(4) NOT NULL DEFAULT '1',
  `status` int(11) NOT NULL DEFAULT '0' COMMENT '0 - Active, -1 - Deactive',
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `username`, `email`, `mobileno`, `password`, `editprivilage`, `status`, `created_at`) VALUES
(1, 'chitrakala', 'chitrakala123', '', '', '$2y$10$Z8o6B2XWajF/A2VElYC29O4gwnFc8SAhFyKOZWi2baBFxV2N2EjNO', 1, 0, '2022-12-06 17:15:31');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `title` varchar(80) NOT NULL,
  `status` int(11) DEFAULT '0' COMMENT '0 - Active, 1- Deactive',
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `title`, `status`, `created_at`) VALUES
(1, 'ABC', 0, '2022-12-10 14:40:43'),
(2, 'DEF', 0, '2022-12-10 14:40:43'),
(3, 'GHI', 0, '2022-12-10 14:40:43');

-- --------------------------------------------------------

--
-- Table structure for table `medium`
--

CREATE TABLE `medium` (
  `m_id` int(11) NOT NULL,
  `mtitle` varchar(80) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0' COMMENT '0 - Active, 1- Deactive',
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medium`
--

INSERT INTO `medium` (`m_id`, `mtitle`, `status`, `created_at`) VALUES
(1, 'Wall Painting', 0, '2022-12-10 14:41:43'),
(2, 'Poster', 0, '2022-12-10 14:41:43'),
(3, 'Oil Painting', 0, '2022-12-10 14:41:43');

-- --------------------------------------------------------

--
-- Table structure for table `payment_log`
--

CREATE TABLE `payment_log` (
  `pid` int(11) NOT NULL,
  `proid` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `pay_array` text NOT NULL,
  `easebuzzid` varchar(80) NOT NULL,
  `ehash` varchar(255) NOT NULL,
  `status` int(11) NOT NULL COMMENT '1 -Success, -1 -Failure, 2 - Pending, 3 - Cancel'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment_log`
--

INSERT INTO `payment_log` (`pid`, `proid`, `amount`, `pay_array`, `easebuzzid`, `ehash`, `status`) VALUES
(1, 1, 500, '{\"name_on_card\":\"NA\",\"bank_ref_num\":\"475610\",\"udf3\":\"\",\"hash\":\"2c10e39206594d6bde72783cfa96b15460b5fd7da5d7dfb10dd9e8a4e9bb157ba44b91d0df57fd0fcded599bde275e9c7d0300f2896ffc34531bf587574cb021\",\"firstname\":\"Demo\",\"net_amount_debit\":\"500.0\",\"payment_source\":\"Easebuzz\",\"surl\":\"http:\\/\\/3.109.1.213\\/chitrakala\\/profile\\/success\\/\",\"error_Message\":\"PGS10001-Success\",\"issuing_bank\":\"NA\",\"cardCategory\":\"NA\",\"phone\":\"9988776655\",\"easepayid\":\"T9CS5P248K\",\"cardnum\":\"NA\",\"key\":\"2PBP7IABZ2\",\"udf8\":\"\",\"unmappedstatus\":\"NA\",\"PG_TYPE\":\"NA\",\"addedon\":\"2022-12-10 10:57:24\",\"cash_back_percentage\":\"50.0\",\"status\":\"success\",\"udf1\":\"\",\"merchant_logo\":\"NA\",\"udf6\":\"\",\"udf10\":\"\",\"txnid\":\"CHIT78\",\"productinfo\":\"For test\",\"furl\":\"http:\\/\\/3.109.1.213\\/chitrakala\\/profile\\/failure\\/\",\"card_type\":\"Debit Card\",\"amount\":\"500.0\",\"udf2\":\"1\",\"udf5\":\"\",\"mode\":\"DC\",\"udf7\":\"\",\"error\":\"NA\",\"udf9\":\"\",\"bankcode\":\"NA\",\"deduction_percentage\":\"2.30\",\"email\":\"Syed@savithru.com\",\"udf4\":\"\"}', 'T9CS5P248K', '2c10e39206594d6bde72783cfa96b15460b5fd7da5d7dfb10dd9e8a4e9bb157ba44b91d0df57fd0fcded599bde275e9c7d0300f2896ffc34531bf587574cb021', 1),
(2, 2, 500, '{\"name_on_card\":\"NA\",\"bank_ref_num\":\"454989\",\"udf3\":\"\",\"hash\":\"a395abcf36bb37714b9e1fc5a624636c08acd418dec6692a7f5365e5365703326f5a1e3006cc8e802c1925ca9650554fb55631aeac5862e734281917f9798599\",\"firstname\":\"Demo\",\"net_amount_debit\":\"500.0\",\"payment_source\":\"Easebuzz\",\"surl\":\"http:\\/\\/3.109.1.213\\/chitrakala\\/profile\\/success\\/\",\"error_Message\":\"PGS10001-Success\",\"issuing_bank\":\"NA\",\"cardCategory\":\"NA\",\"phone\":\"9988776655\",\"easepayid\":\"TZMJTF7T5D\",\"cardnum\":\"NA\",\"key\":\"2PBP7IABZ2\",\"udf8\":\"\",\"unmappedstatus\":\"NA\",\"PG_TYPE\":\"NA\",\"addedon\":\"2022-12-10 13:47:42\",\"cash_back_percentage\":\"50.0\",\"status\":\"success\",\"udf1\":\"\",\"merchant_logo\":\"NA\",\"udf6\":\"\",\"udf10\":\"\",\"txnid\":\"CHIT81\",\"productinfo\":\"For test\",\"furl\":\"http:\\/\\/3.109.1.213\\/chitrakala\\/profile\\/failure\\/\",\"card_type\":\"Debit Card\",\"amount\":\"500.0\",\"udf2\":\"2\",\"udf5\":\"\",\"mode\":\"DC\",\"udf7\":\"\",\"error\":\"NA\",\"udf9\":\"\",\"bankcode\":\"NA\",\"deduction_percentage\":\"2.30\",\"email\":\"Syed@savithru.com\",\"udf4\":\"\"}', 'TZMJTF7T5D', 'a395abcf36bb37714b9e1fc5a624636c08acd418dec6692a7f5365e5365703326f5a1e3006cc8e802c1925ca9650554fb55631aeac5862e734281917f9798599', 1),
(3, 4, 500, '{\"name_on_card\":\"NA\",\"bank_ref_num\":\"215880\",\"udf3\":\"\",\"hash\":\"ce1c374d5dd976623725c9ebf79119c56b0754e83428e171613afab88c6bd174118cf85a5e7e1b944dd18f74bc635918d89080475235e7516c42905a063d44fe\",\"firstname\":\"Demo\",\"net_amount_debit\":\"500.0\",\"payment_source\":\"Easebuzz\",\"surl\":\"http:\\/\\/3.109.1.213\\/chitrakala\\/profile\\/success\\/\",\"error_Message\":\"PGS10001-Success\",\"issuing_bank\":\"NA\",\"cardCategory\":\"NA\",\"phone\":\"9988776655\",\"easepayid\":\"T0EGLSMWUF\",\"cardnum\":\"NA\",\"key\":\"2PBP7IABZ2\",\"udf8\":\"\",\"unmappedstatus\":\"NA\",\"PG_TYPE\":\"NA\",\"addedon\":\"2022-12-10 15:12:51\",\"cash_back_percentage\":\"50.0\",\"status\":\"success\",\"udf1\":\"\",\"merchant_logo\":\"NA\",\"udf6\":\"\",\"udf10\":\"\",\"txnid\":\"CHIT48\",\"productinfo\":\"For test\",\"furl\":\"http:\\/\\/3.109.1.213\\/chitrakala\\/profile\\/failure\\/\",\"card_type\":\"Debit Card\",\"amount\":\"500.0\",\"udf2\":\"4\",\"udf5\":\"\",\"mode\":\"DC\",\"udf7\":\"\",\"error\":\"NA\",\"udf9\":\"\",\"bankcode\":\"NA\",\"deduction_percentage\":\"2.30\",\"email\":\"Syed@savithru.com\",\"udf4\":\"\"}', 'T0EGLSMWUF', 'ce1c374d5dd976623725c9ebf79119c56b0754e83428e171613afab88c6bd174118cf85a5e7e1b944dd18f74bc635918d89080475235e7516c42905a063d44fe', 1),
(4, 5, 500, '{\"name_on_card\":\"NA\",\"bank_ref_num\":\"910126\",\"udf3\":\"\",\"hash\":\"578fe7c4f252e49ef193270e99e9d59b7a2e1ea1f01f3cecdeb4c2b5737f8c6bd586a225712c773d96f11e0a1d4515ac5d21f715c8f6058a6ce77c594cd9336c\",\"firstname\":\"Demo\",\"net_amount_debit\":\"500.0\",\"payment_source\":\"Easebuzz\",\"surl\":\"http:\\/\\/3.109.1.213\\/chitrakala\\/profile\\/success\\/\",\"error_Message\":\"PGS10001-Success\",\"issuing_bank\":\"NA\",\"cardCategory\":\"NA\",\"phone\":\"9988776655\",\"easepayid\":\"TB9V742N4V\",\"cardnum\":\"NA\",\"key\":\"2PBP7IABZ2\",\"udf8\":\"\",\"unmappedstatus\":\"NA\",\"PG_TYPE\":\"NA\",\"addedon\":\"2022-12-10 15:27:00\",\"cash_back_percentage\":\"50.0\",\"status\":\"success\",\"udf1\":\"\",\"merchant_logo\":\"NA\",\"udf6\":\"\",\"udf10\":\"\",\"txnid\":\"CHIT93\",\"productinfo\":\"For test\",\"furl\":\"http:\\/\\/3.109.1.213\\/chitrakala\\/profile\\/failure\\/\",\"card_type\":\"Debit Card\",\"amount\":\"500.0\",\"udf2\":\"5\",\"udf5\":\"\",\"mode\":\"DC\",\"udf7\":\"\",\"error\":\"NA\",\"udf9\":\"\",\"bankcode\":\"NA\",\"deduction_percentage\":\"2.30\",\"email\":\"Syed@savithru.com\",\"udf4\":\"\"}', 'TB9V742N4V', '578fe7c4f252e49ef193270e99e9d59b7a2e1ea1f01f3cecdeb4c2b5737f8c6bd586a225712c773d96f11e0a1d4515ac5d21f715c8f6058a6ce77c594cd9336c', 1),
(5, 7, 500, '{\"name_on_card\":\"NA\",\"bank_ref_num\":\"506683\",\"udf3\":\"\",\"hash\":\"6c843c5f42eba20c4c7ff33bc219d6f8f8fefc15280fbb8d58a3fed33a3073e3eea290ef37d6baaef6d876e8872401d236852a2d835fc93c310081e3e190536b\",\"firstname\":\"Demo\",\"net_amount_debit\":\"500.0\",\"payment_source\":\"Easebuzz\",\"surl\":\"http:\\/\\/3.109.1.213\\/chitrakala\\/profile\\/success\\/\",\"error_Message\":\"PGS10001-Success\",\"issuing_bank\":\"NA\",\"cardCategory\":\"NA\",\"phone\":\"9988776655\",\"easepayid\":\"TNB9V3IXTT\",\"cardnum\":\"NA\",\"key\":\"2PBP7IABZ2\",\"udf8\":\"\",\"unmappedstatus\":\"NA\",\"PG_TYPE\":\"NA\",\"addedon\":\"2022-12-12 04:58:42\",\"cash_back_percentage\":\"50.0\",\"status\":\"success\",\"udf1\":\"\",\"merchant_logo\":\"NA\",\"udf6\":\"\",\"udf10\":\"\",\"txnid\":\"CHIT15\",\"productinfo\":\"For test\",\"furl\":\"http:\\/\\/3.109.1.213\\/chitrakala\\/profile\\/failure\\/\",\"card_type\":\"Debit Card\",\"amount\":\"500.0\",\"udf2\":\"7\",\"udf5\":\"\",\"mode\":\"DC\",\"udf7\":\"\",\"error\":\"NA\",\"udf9\":\"\",\"bankcode\":\"NA\",\"deduction_percentage\":\"2.30\",\"email\":\"Syed@savithru.com\",\"udf4\":\"\"}', 'TNB9V3IXTT', '6c843c5f42eba20c4c7ff33bc219d6f8f8fefc15280fbb8d58a3fed33a3073e3eea290ef37d6baaef6d876e8872401d236852a2d835fc93c310081e3e190536b', 1),
(9, 8, 500, '{\"name_on_card\":\"NA\",\"bank_ref_num\":\"607375\",\"udf3\":\"\",\"hash\":\"5b26e3ef96b93e0decdf30102c2d2fecc8929017e892cdd1763b56e4f3d3bd85f64cd5800edd4723cd411cec0db0cc4755c61eb58b04b41aad95632a866a5b54\",\"firstname\":\"Demo\",\"net_amount_debit\":\"500.0\",\"payment_source\":\"Easebuzz\",\"surl\":\"http:\\/\\/3.109.1.213\\/chitrakala\\/profile\\/success\\/\",\"error_Message\":\"PGS10001-Success\",\"issuing_bank\":\"NA\",\"cardCategory\":\"NA\",\"phone\":\"9988776655\",\"easepayid\":\"TM3UK4WG76\",\"cardnum\":\"NA\",\"key\":\"2PBP7IABZ2\",\"udf8\":\"\",\"unmappedstatus\":\"NA\",\"PG_TYPE\":\"NA\",\"addedon\":\"2022-12-13 09:28:03\",\"cash_back_percentage\":\"50.0\",\"status\":\"success\",\"udf1\":\"\",\"merchant_logo\":\"NA\",\"udf6\":\"\",\"udf10\":\"\",\"txnid\":\"CHIT46\",\"productinfo\":\"For test\",\"furl\":\"http:\\/\\/3.109.1.213\\/chitrakala\\/profile\\/failure\\/\",\"card_type\":\"Debit Card\",\"amount\":\"500.0\",\"udf2\":\"8\",\"udf5\":\"\",\"mode\":\"DC\",\"udf7\":\"\",\"error\":\"NA\",\"udf9\":\"\",\"bankcode\":\"NA\",\"deduction_percentage\":\"2.30\",\"email\":\"Syed@savithru.com\",\"udf4\":\"\"}', 'TM3UK4WG76', '5b26e3ef96b93e0decdf30102c2d2fecc8929017e892cdd1763b56e4f3d3bd85f64cd5800edd4723cd411cec0db0cc4755c61eb58b04b41aad95632a866a5b54', 1),
(10, 9, 500, '{\"name_on_card\":\"NA\",\"bank_ref_num\":\"749669\",\"udf3\":\"\",\"hash\":\"914bee0b3ea7e8e92cc3cd11591b619b2aca453be8241f1a62446a6169f12c0e422578066e1e86dd4d72deb96a4d7a075dce5d04ff15f96c4e509e37b3eb48b9\",\"firstname\":\"Demo\",\"net_amount_debit\":\"500.0\",\"payment_source\":\"Easebuzz\",\"surl\":\"http:\\/\\/3.109.1.213\\/chitrakala\\/profile\\/success\\/\",\"error_Message\":\"PGS10001-Success\",\"issuing_bank\":\"NA\",\"cardCategory\":\"NA\",\"phone\":\"9988776655\",\"easepayid\":\"T0EEBCM1VM\",\"cardnum\":\"NA\",\"key\":\"2PBP7IABZ2\",\"udf8\":\"\",\"unmappedstatus\":\"NA\",\"PG_TYPE\":\"NA\",\"addedon\":\"2022-12-13 10:36:04\",\"cash_back_percentage\":\"50.0\",\"status\":\"success\",\"udf1\":\"\",\"merchant_logo\":\"NA\",\"udf6\":\"\",\"udf10\":\"\",\"txnid\":\"CHIT47\",\"productinfo\":\"For test\",\"furl\":\"http:\\/\\/3.109.1.213\\/chitrakala\\/profile\\/failure\\/\",\"card_type\":\"Debit Card\",\"amount\":\"500.0\",\"udf2\":\"9\",\"udf5\":\"\",\"mode\":\"DC\",\"udf7\":\"\",\"error\":\"NA\",\"udf9\":\"\",\"bankcode\":\"NA\",\"deduction_percentage\":\"2.30\",\"email\":\"Syed@savithru.com\",\"udf4\":\"\"}', 'T0EEBCM1VM', '914bee0b3ea7e8e92cc3cd11591b619b2aca453be8241f1a62446a6169f12c0e422578066e1e86dd4d72deb96a4d7a075dce5d04ff15f96c4e509e37b3eb48b9', 1),
(11, 9, 500, '{\"name_on_card\":\"NA\",\"bank_ref_num\":\"749669\",\"udf3\":\"\",\"hash\":\"914bee0b3ea7e8e92cc3cd11591b619b2aca453be8241f1a62446a6169f12c0e422578066e1e86dd4d72deb96a4d7a075dce5d04ff15f96c4e509e37b3eb48b9\",\"firstname\":\"Demo\",\"net_amount_debit\":\"500.0\",\"payment_source\":\"Easebuzz\",\"surl\":\"http:\\/\\/3.109.1.213\\/chitrakala\\/profile\\/success\\/\",\"error_Message\":\"PGS10001-Success\",\"issuing_bank\":\"NA\",\"cardCategory\":\"NA\",\"phone\":\"9988776655\",\"easepayid\":\"T0EEBCM1VM\",\"cardnum\":\"NA\",\"key\":\"2PBP7IABZ2\",\"udf8\":\"\",\"unmappedstatus\":\"NA\",\"PG_TYPE\":\"NA\",\"addedon\":\"2022-12-13 10:36:04\",\"cash_back_percentage\":\"50.0\",\"status\":\"success\",\"udf1\":\"\",\"merchant_logo\":\"NA\",\"udf6\":\"\",\"udf10\":\"\",\"txnid\":\"CHIT47\",\"productinfo\":\"For test\",\"furl\":\"http:\\/\\/3.109.1.213\\/chitrakala\\/profile\\/failure\\/\",\"card_type\":\"Debit Card\",\"amount\":\"500.0\",\"udf2\":\"9\",\"udf5\":\"\",\"mode\":\"DC\",\"udf7\":\"\",\"error\":\"NA\",\"udf9\":\"\",\"bankcode\":\"NA\",\"deduction_percentage\":\"2.30\",\"email\":\"Syed@savithru.com\",\"udf4\":\"\"}', 'T0EEBCM1VM', '914bee0b3ea7e8e92cc3cd11591b619b2aca453be8241f1a62446a6169f12c0e422578066e1e86dd4d72deb96a4d7a075dce5d04ff15f96c4e509e37b3eb48b9', 1),
(12, 9, 500, '{\"name_on_card\":\"NA\",\"bank_ref_num\":\"749669\",\"udf3\":\"\",\"hash\":\"914bee0b3ea7e8e92cc3cd11591b619b2aca453be8241f1a62446a6169f12c0e422578066e1e86dd4d72deb96a4d7a075dce5d04ff15f96c4e509e37b3eb48b9\",\"firstname\":\"Demo\",\"net_amount_debit\":\"500.0\",\"payment_source\":\"Easebuzz\",\"surl\":\"http:\\/\\/3.109.1.213\\/chitrakala\\/profile\\/success\\/\",\"error_Message\":\"PGS10001-Success\",\"issuing_bank\":\"NA\",\"cardCategory\":\"NA\",\"phone\":\"9988776655\",\"easepayid\":\"T0EEBCM1VM\",\"cardnum\":\"NA\",\"key\":\"2PBP7IABZ2\",\"udf8\":\"\",\"unmappedstatus\":\"NA\",\"PG_TYPE\":\"NA\",\"addedon\":\"2022-12-13 10:36:04\",\"cash_back_percentage\":\"50.0\",\"status\":\"success\",\"udf1\":\"\",\"merchant_logo\":\"NA\",\"udf6\":\"\",\"udf10\":\"\",\"txnid\":\"CHIT47\",\"productinfo\":\"For test\",\"furl\":\"http:\\/\\/3.109.1.213\\/chitrakala\\/profile\\/failure\\/\",\"card_type\":\"Debit Card\",\"amount\":\"500.0\",\"udf2\":\"9\",\"udf5\":\"\",\"mode\":\"DC\",\"udf7\":\"\",\"error\":\"NA\",\"udf9\":\"\",\"bankcode\":\"NA\",\"deduction_percentage\":\"2.30\",\"email\":\"Syed@savithru.com\",\"udf4\":\"\"}', 'T0EEBCM1VM', '914bee0b3ea7e8e92cc3cd11591b619b2aca453be8241f1a62446a6169f12c0e422578066e1e86dd4d72deb96a4d7a075dce5d04ff15f96c4e509e37b3eb48b9', 1),
(13, 9, 500, '{\"name_on_card\":\"NA\",\"bank_ref_num\":\"749669\",\"udf3\":\"\",\"hash\":\"914bee0b3ea7e8e92cc3cd11591b619b2aca453be8241f1a62446a6169f12c0e422578066e1e86dd4d72deb96a4d7a075dce5d04ff15f96c4e509e37b3eb48b9\",\"firstname\":\"Demo\",\"net_amount_debit\":\"500.0\",\"payment_source\":\"Easebuzz\",\"surl\":\"http:\\/\\/3.109.1.213\\/chitrakala\\/profile\\/success\\/\",\"error_Message\":\"PGS10001-Success\",\"issuing_bank\":\"NA\",\"cardCategory\":\"NA\",\"phone\":\"9988776655\",\"easepayid\":\"T0EEBCM1VM\",\"cardnum\":\"NA\",\"key\":\"2PBP7IABZ2\",\"udf8\":\"\",\"unmappedstatus\":\"NA\",\"PG_TYPE\":\"NA\",\"addedon\":\"2022-12-13 10:36:04\",\"cash_back_percentage\":\"50.0\",\"status\":\"success\",\"udf1\":\"\",\"merchant_logo\":\"NA\",\"udf6\":\"\",\"udf10\":\"\",\"txnid\":\"CHIT47\",\"productinfo\":\"For test\",\"furl\":\"http:\\/\\/3.109.1.213\\/chitrakala\\/profile\\/failure\\/\",\"card_type\":\"Debit Card\",\"amount\":\"500.0\",\"udf2\":\"9\",\"udf5\":\"\",\"mode\":\"DC\",\"udf7\":\"\",\"error\":\"NA\",\"udf9\":\"\",\"bankcode\":\"NA\",\"deduction_percentage\":\"2.30\",\"email\":\"Syed@savithru.com\",\"udf4\":\"\"}', 'T0EEBCM1VM', '914bee0b3ea7e8e92cc3cd11591b619b2aca453be8241f1a62446a6169f12c0e422578066e1e86dd4d72deb96a4d7a075dce5d04ff15f96c4e509e37b3eb48b9', 1),
(14, 9, 500, '{\"name_on_card\":\"NA\",\"bank_ref_num\":\"749669\",\"udf3\":\"\",\"hash\":\"914bee0b3ea7e8e92cc3cd11591b619b2aca453be8241f1a62446a6169f12c0e422578066e1e86dd4d72deb96a4d7a075dce5d04ff15f96c4e509e37b3eb48b9\",\"firstname\":\"Demo\",\"net_amount_debit\":\"500.0\",\"payment_source\":\"Easebuzz\",\"surl\":\"http:\\/\\/3.109.1.213\\/chitrakala\\/profile\\/success\\/\",\"error_Message\":\"PGS10001-Success\",\"issuing_bank\":\"NA\",\"cardCategory\":\"NA\",\"phone\":\"9988776655\",\"easepayid\":\"T0EEBCM1VM\",\"cardnum\":\"NA\",\"key\":\"2PBP7IABZ2\",\"udf8\":\"\",\"unmappedstatus\":\"NA\",\"PG_TYPE\":\"NA\",\"addedon\":\"2022-12-13 10:36:04\",\"cash_back_percentage\":\"50.0\",\"status\":\"success\",\"udf1\":\"\",\"merchant_logo\":\"NA\",\"udf6\":\"\",\"udf10\":\"\",\"txnid\":\"CHIT47\",\"productinfo\":\"For test\",\"furl\":\"http:\\/\\/3.109.1.213\\/chitrakala\\/profile\\/failure\\/\",\"card_type\":\"Debit Card\",\"amount\":\"500.0\",\"udf2\":\"9\",\"udf5\":\"\",\"mode\":\"DC\",\"udf7\":\"\",\"error\":\"NA\",\"udf9\":\"\",\"bankcode\":\"NA\",\"deduction_percentage\":\"2.30\",\"email\":\"Syed@savithru.com\",\"udf4\":\"\"}', 'T0EEBCM1VM', '914bee0b3ea7e8e92cc3cd11591b619b2aca453be8241f1a62446a6169f12c0e422578066e1e86dd4d72deb96a4d7a075dce5d04ff15f96c4e509e37b3eb48b9', 1);

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `pro_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `emailid` varchar(120) NOT NULL,
  `mphone` varchar(12) NOT NULL,
  `about` text NOT NULL,
  `state` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `place` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `gstno` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `photo` varchar(150) NOT NULL,
  `profileimg` varchar(190) NOT NULL,
  `pdf` varchar(255) NOT NULL,
  `feedetails` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `astatus` tinyint(4) NOT NULL DEFAULT '2' COMMENT '1- Approve, 2- Disapprove',
  `status` tinyint(4) NOT NULL DEFAULT '-1' COMMENT '0 - Active, -1 - Deactive',
  `created_at` datetime NOT NULL,
  `modified_at` varchar(180) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`pro_id`, `name`, `emailid`, `mphone`, `about`, `state`, `country`, `place`, `age`, `gstno`, `gender`, `photo`, `profileimg`, `pdf`, `feedetails`, `address`, `astatus`, `status`, `created_at`, `modified_at`) VALUES
(1, 'Syed afroz', 'syed@savithru.com', '9999999999', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut', 'Karnataka', 'India', 'Bengaluru', 25, 'GSTNO123', 'Male', 'assets/profile/CHITRAKALA87969.jpg', 'assets/profile/CHITRAKALA51501.jpg', 'assets/pdf/11949.pdf', 1, 'Akshya Nagar 1st Block 1st Cross, Rammurthy nagar, Bangalore 560016', 1, 0, '2022-12-10 16:27:00', ''),
(2, 'Afroz', 'ashwin@savithru.com', '9999999999', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut', 'Karnataka', 'India', 'Bengaluru', 23, 'ABS123', 'Male', 'assets/profile/CHITRAKALA76326.jpg', 'assets/profile/CHITRAKALA69219.jpg', 'assets/pdf/22083.pdf', 1, 'Akshya Nagar 1st Block 1st Cross, Rammurthy nagar, Bangalore 560016', 1, 0, '2022-12-10 19:17:03', ''),
(4, 'Basava', 'developerweb50@gmail.com', '7090099999', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut', 'Karnataka', 'India', 'Bengaluru', 30, '700', 'Male', 'assets/profile/CHITRAKALA97393.jpg', 'assets/profile/CHITRAKALA47209.jpg', 'assets/pdf/41157.pdf', 1, 'Bengaluru', 1, 0, '2022-12-10 20:42:22', ''),
(5, 'Gv Suresh', 'gvsuresh@gmail.com', '9845324062', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut', 'Karnataka', 'India', 'Bengaluru', 35, 'GSTNO1234', 'Male', 'assets/profile/CHITRAKALA73878.jpg', 'assets/profile/CHITRAKALA45341.jpg', 'assets/pdf/51565.pdf', 1, 'No. 251 53rd cross 4th block rajajinagar bangalore', 1, 0, '2022-12-10 20:56:20', ''),
(6, 'Ashok', 'ashok@gmail.com', '9999999999', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut', 'Karnataka', 'India', 'Bengaluru', 25, 'GSTNO123', 'Male', 'assets/profile/CHITRAKALA12548.jpg', 'assets/profile/CHITRAKALA79821.jpg', '', 1, 'Akshya Nagar 1st Block 1st Cross, Rammurthy nagar, Bangalore 560016', 1, 0, '2022-12-12 09:59:31', ''),
(7, 'Balu', 'syed@savithru.com', '9999999999', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut', 'Karnataka', 'India', 'Bengaluru', 30, 'GSTNO123', 'Male', 'assets/profile/CHITRAKALA78120.jpg', 'assets/profile/CHITRAKALA62243.jpg', 'assets/pdf/71250.pdf', 1, 'Akshya Nagar 1st Block 1st Cross, Rammurthy nagar, Bangalore 560016', 1, 0, '2022-12-12 10:28:20', ''),
(8, 'G V Suresh', 'sureshiyer@gmail.com', '9845324064', 'Once, the sages wanted to decide the deity to whom a ritual was to be dedicated. The sages appointed the sage Bhrigu to select the god. Bhrigu decided to test the gods', 'karnataka', 'india', 'Bangalore', 25, '', 'Male', 'assets/profile/CHITRAKALA58910.jpg', 'assets/profile/CHITRAKALA47234.jpg', 'assets/pdf/82197.pdf', 3, 'Akshya Nagar 1st Block 1st Cross, Rammurthy nagar, Bangalore 560016', 1, 0, '2022-12-13 14:56:18', ''),
(9, 'shrishail', 'shri@savithru.com', '4234234234', 'adasdasdasdas', 'karnata', 'sfsf', 'sdfsd', 25, 'dddfg', 'Female', 'assets/profile/CHITRAKALA74659.png', 'assets/profile/CHITRAKALA94818.pdf', 'assets/pdf/91862.pdf', 1, 'fdgdgfdsfg', 2, -1, '2022-12-13 16:05:47', ''),
(10, 'hfgh', 'fdsdf@gmail.com', '5666666666', 'fsdf', 'karnatak', 'dgfgdfg', 'gfdgdf', 344444444, 'fgd', 'Female', 'assets/profile/CHITRAKALA96361.jpg', 'assets/profile/CHITRAKALA27344.pdf', '', 1, 'gdfgdfgdfgdfgdfg', 2, -1, '2022-12-13 16:15:24', '');

-- --------------------------------------------------------

--
-- Table structure for table `profile_entries`
--

CREATE TABLE `profile_entries` (
  `pentryid` int(11) NOT NULL,
  `proid` int(11) NOT NULL,
  `pentry` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile_entries`
--

INSERT INTO `profile_entries` (`pentryid`, `proid`, `pentry`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 1),
(4, 2, 2),
(7, 4, 1),
(8, 4, 2),
(9, 4, 3),
(10, 5, 1),
(11, 5, 2),
(12, 5, 3),
(13, 6, 1),
(14, 6, 2),
(15, 7, 1),
(16, 7, 2),
(17, 7, 3),
(18, 8, 1),
(19, 8, 2),
(20, 8, 5),
(21, 9, 1),
(22, 10, 1);

-- --------------------------------------------------------

--
-- Table structure for table `profile_img`
--

CREATE TABLE `profile_img` (
  `imgid` int(11) NOT NULL,
  `proid` int(11) NOT NULL,
  `profileimg` varchar(160) NOT NULL,
  `title` varchar(80) NOT NULL,
  `amount` int(11) NOT NULL,
  `category` int(11) NOT NULL,
  `medium` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile_img`
--

INSERT INTO `profile_img` (`imgid`, `proid`, `profileimg`, `title`, `amount`, `category`, `medium`) VALUES
(1, 1, 'assets/profilework/CHITRAKALA170896.jpg', 'demo1', 10000, 1, 2),
(2, 1, 'assets/profilework/CHITRAKALA133437.jpg', 'Demo 2', 20000, 1, 2),
(3, 2, 'assets/profilework/CHITRAKALA266105.jpg', 'New artists', 20000, 1, 1),
(4, 2, 'assets/profilework/CHITRAKALA246044.jpg', 'New artists 1', 3000, 2, 2),
(5, 2, 'assets/profilework/CHITRAKALA262308.jpg', 'New artists 2', 3000, 3, 3),
(9, 4, 'assets/profilework/CHITRAKALA416644.jpg', 'New 12', 1000, 1, 3),
(10, 4, 'assets/profilework/CHITRAKALA413149.jpg', 'New 13', 2000, 2, 1),
(11, 4, 'assets/profilework/CHITRAKALA471082.jpg', 'New 14', 3000, 3, 2),
(12, 5, 'assets/profilework/CHITRAKALA561464.jpg', 'demo 1', 1000, 1, 1),
(13, 5, 'assets/profilework/CHITRAKALA567732.jpg', 'demo 2', 2000, 2, 3),
(15, 6, 'assets/profilework/CHITRAKALA612006.jpg', 'DESIGN1', 12000, 1, 1),
(16, 6, 'assets/profilework/CHITRAKALA698492.jpg', 'DESIGN2', 2000, 2, 2),
(17, 6, 'assets/profilework/CHITRAKALA693174.jpg', 'DESIGN3', 3000, 3, 3),
(18, 6, 'assets/profilework/CHITRAKALA686466.jpg', 'DESIGN4', 4000000, 1, 1),
(19, 7, 'assets/profilework/CHITRAKALA758914.jpg', 'design1', 1, 1, 1),
(20, 7, 'assets/profilework/CHITRAKALA722345.jpg', 'design2', 2, 2, 2),
(22, 8, 'assets/profilework/CHITRAKALA853036.jpg', 'Suresh Iyer1', 34, 2, 1),
(23, 8, 'assets/profilework/CHITRAKALA851788.jpg', 'Suresh Iyer1', 67, 2, 2),
(24, 8, 'assets/profilework/CHITRAKALA850690.jpg', 'Suresh Iyer1', 45, 3, 2),
(25, 8, 'assets/profilework/CHITRAKALA892606.jpg', 'Suresh Iyer1', 45, 2, 1),
(26, 8, 'assets/profilework/CHITRAKALA819161.jpg', 'Suresh Iyer1', 56, 2, 1),
(27, 8, 'assets/profilework/CHITRAKALA883614.jpg', 'Suresh Iyer1', 78, 3, 1),
(28, 8, 'assets/profilework/CHITRAKALA836144.jpg', 'Suresh Iyer1', 89, 3, 1),
(29, 8, 'assets/profilework/CHITRAKALA817215.jpg', 'Suresh Iyer1', 45, 1, 3),
(30, 8, 'assets/profilework/CHITRAKALA832692.jpg', 'Suresh Iyer1', 78, 2, 2),
(31, 9, 'assets/profilework/CHITRAKALA979407.png', 'demo', 123, 1, 1),
(32, 10, 'assets/profilework/CHITRAKALA1034999.jpg', '', 0, 0, 0),
(33, 10, 'assets/profilework/CHITRAKALA1016123.jpg', '', 0, 0, 0),
(34, 10, 'assets/profilework/CHITRAKALA1017069.jpg', '', 0, 0, 0),
(35, 10, 'assets/profilework/CHITRAKALA1093393.jpg', '', 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `medium`
--
ALTER TABLE `medium`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `payment_log`
--
ALTER TABLE `payment_log`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`pro_id`);

--
-- Indexes for table `profile_entries`
--
ALTER TABLE `profile_entries`
  ADD PRIMARY KEY (`pentryid`);

--
-- Indexes for table `profile_img`
--
ALTER TABLE `profile_img`
  ADD PRIMARY KEY (`imgid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `medium`
--
ALTER TABLE `medium`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `payment_log`
--
ALTER TABLE `payment_log`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `profile_entries`
--
ALTER TABLE `profile_entries`
  MODIFY `pentryid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `profile_img`
--
ALTER TABLE `profile_img`
  MODIFY `imgid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
