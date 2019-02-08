-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 06, 2019 at 10:31 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.10-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iplayfootballdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `academics`
--

CREATE TABLE `academics` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `academic_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `academic_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `academic_state` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `academic_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `academic_image_id` text COLLATE utf8mb4_unicode_ci,
  `academic_facebook_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `academic_address` text COLLATE utf8mb4_unicode_ci,
  `academic_package_id` int(10) UNSIGNED DEFAULT NULL,
  `academic_status_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `academics`
--

INSERT INTO `academics` (`id`, `user_id`, `academic_name`, `academic_phone`, `academic_state`, `academic_email`, `academic_image_id`, `academic_facebook_id`, `academic_address`, `academic_package_id`, `academic_status_id`, `created_at`, `updated_at`) VALUES
(2, 0, 'Abraham DuBuque', '+6909526212589', 'North Dakota', 'abshire.victoria@example.com', 'public/images/AUDVAKskO6Mjs4jrGUSIG0bH10p41A2PhNKDk3kE.jpeg', '13', '9500 Sauer Plains\nSchinnerville, ME 95221', 5, 1, '2018-11-28 22:10:53', '2018-11-28 22:10:53'),
(5, 0, 'Jeffrey Schulist III', '+2628697582222', 'Missouri', 'fhyatt@example.net', NULL, '16', '30928 Bailey Shore\nNorth Cordelia, NC 91948-8639', 10, 2, '2018-11-28 22:10:54', '2018-11-28 22:10:54'),
(6, 0, 'Cornell Wintheiser', '+9521563436883', 'South Dakota', 'yfeest@example.com', NULL, '6', '8867 Ike Inlet Apt. 968\nTerrellhaven, NV 04266', 4, 2, '2018-11-28 22:10:54', '2018-11-28 22:10:54'),
(7, 0, 'Dr. Cheyenne Rowe DVM', '+8788192329082', 'Oklahoma', 'altenwerth.tanner@example.org', NULL, '6', '7231 Howell Field Suite 609\nLake Gust, OR 01846', 7, 3, '2018-11-28 22:10:54', '2018-11-28 22:10:54'),
(8, 0, 'Hershel Roberts MD', '+8734688396603', 'Arkansas', 'alyce34@example.net', NULL, '1', '931 Bechtelar Lights\nEast Taraborough, NM 45200-0417', 6, 1, '2018-11-28 22:10:54', '2018-11-28 22:10:54'),
(9, 0, 'Ms. Adrianna Mosciski II', '+5963365588457', 'Utah', 'asa.bergstrom@example.org', NULL, '15', '76469 Aufderhar Drive Apt. 079\nJanelleshire, MI 32969-9994', 10, 3, '2018-11-28 22:10:54', '2018-11-28 22:10:54'),
(10, 0, 'Kelsie Buckridge', '+1820693310960', 'Maine', 'gottlieb.electa@example.net', NULL, '2', '90750 Rempel Hills\nSouth Eastonmouth, MS 49855-3035', 4, 3, '2018-11-28 22:10:54', '2018-11-28 22:10:54'),
(11, 0, 'Shanie Kerluke', '+5816022207596', 'Tennessee', 'ntillman@example.org', NULL, '12', '6911 Floyd Park Suite 352\nWest Nyaport, MN 51431-0494', 7, 3, '2018-11-28 22:10:54', '2018-11-28 22:10:54'),
(12, 0, 'Wilmer Davis', '+7219622326594', 'Oregon', 'aiyana81@example.org', NULL, '13', '18042 Kiehn Forest Apt. 818\nNorth Scottyside, OK 73236', 3, 3, '2018-11-28 22:10:54', '2018-11-28 22:10:54'),
(13, 0, 'Mrs. Serenity Murphy', '+3773790487769', 'Nevada', 'rice.paul@example.com', NULL, '6', '5987 Kuphal Views Apt. 811\nLake Elisa, IL 66999', 6, 1, '2018-11-28 22:10:54', '2018-11-28 22:10:54'),
(14, 0, 'Everett Armstrong', '+7199631022721', 'Hawaii', 'kling.rowena@example.net', NULL, '7', '3732 Cruickshank Park Apt. 530\nEast Gennaroside, MN 46104-0688', 10, 2, '2018-11-28 22:10:54', '2018-11-28 22:10:54'),
(15, 0, 'Rebeca Mills', '+3556202240127', 'California', 'lsteuber@example.net', 'public/images/AUDVAKskO6Mjs4jrGUSIG0bH10p41A2PhNKDk3kE.jpeg', '13', '716 Damaris Highway Apt. 053\nBoscoburgh, NV 66534-9378', 7, 3, '2018-11-28 22:10:54', '2018-11-28 22:10:54'),
(16, 0, 'Dr. Juwan Boyle', '+1292408205061', 'Wisconsin', 'hhoppe@example.org', NULL, '20', '833 Willis Rue\nNew Georgianna, TN 01425-9949', 10, 3, '2018-11-28 22:10:54', '2018-11-28 22:10:54'),
(17, 0, 'Shany Marks', '+8095919529610', 'Minnesota', 'bartell.mikayla@example.net', NULL, '15', '144 Marguerite Wall Suite 244\nEast Tracebury, OK 89092-0390', 9, 3, '2018-11-28 22:10:54', '2018-11-28 22:10:54'),
(18, 0, 'Ms. Ashleigh McLaughlin', '+8264008927208', 'Tennessee', 'desiree.lang@example.net', NULL, '15', '1184 Amara Hills\nWardton, AK 11532', 10, 1, '2018-11-28 22:10:54', '2018-11-28 22:10:54'),
(19, 0, 'Dr. Willa Emmerich', '+2467941074540', 'Oregon', 'ihane@example.org', NULL, '2', '3615 Malvina Mall\nEast Garlandberg, SD 69499', 6, 3, '2018-11-28 22:10:54', '2018-11-28 22:10:54'),
(20, 0, 'Hertha Larson DDS', '+2157345226055', 'Arizona', 'gaston60@example.net', NULL, '9', '2664 Earl Landing Apt. 689\nEast Carlotta, NC 10318', 2, 2, '2018-11-28 22:10:54', '2018-11-28 22:10:54'),
(21, 0, 'Rischoola Rischoola', '8145655830', NULL, 'rischoola@gmail.com', NULL, 'Solomoneseme', 'Rumuolumeni', 13, 1, '2018-12-29 08:56:16', '2018-12-29 08:56:16'),
(23, 42, 'Academic', '08145655830', 'Nigeria', 'academic@gmail.com', 'public/images/Clq0GZLTawW4wIDuEGGNgxnZaZcyKTjkYoEcFIaR.jpeg', NULL, 'Port Harcourt', NULL, 2, '2019-01-24 04:43:02', '2019-02-05 14:55:43');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(10) UNSIGNED NOT NULL,
  `message_subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message_body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `message_type` int(11) DEFAULT NULL,
  `message_sender_id` int(11) NOT NULL,
  `message_receiver_id` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message_sender_role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message_receiver_role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message_status_id` int(11) NOT NULL DEFAULT '15',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `message_subject`, `message_body`, `message_type`, `message_sender_id`, `message_receiver_id`, `message_sender_role`, `message_receiver_role`, `message_status_id`, `created_at`, `updated_at`) VALUES
(1, 'Dr.', 'Et omnis ipsam sit dicta ea voluptatibus saepe. Vitae similique rerum est. Corrupti et impedit quo consequuntur. Eaque odit voluptatem molestiae exercitationem harum.', 17, 14, '15', 'scout', 'scout', 15, '2018-11-28 22:10:54', '2018-11-28 22:10:54'),
(2, 'Prof.', 'Omnis error similique debitis debitis sed velit. Voluptatem dicta voluptatem voluptatem. Laborum unde qui voluptatem corporis pariatur. Non nulla nostrum ipsa in modi.', 17, 6, '16', 'team', 'team', 15, '2018-11-28 22:10:54', '2018-11-28 22:10:54'),
(3, 'Mr.', 'Fugit maxime tenetur qui praesentium ut voluptatem. Laboriosam debitis rerum saepe optio voluptatibus consequatur suscipit. Ut consequatur aut aut. Eaque minima a odio perferendis.', 17, 11, '8', 'user', 'user', 15, '2018-11-28 22:10:55', '2018-11-28 22:10:55'),
(4, 'Mr.', 'Delectus qui iste ut autem non in. In sunt velit odit quia voluptate quisquam ex. Error in quidem assumenda iusto. Eos quis sapiente cumque non quis dolorum.', 16, 17, '14', 'user', 'user', 2, '2018-11-28 22:10:55', '2018-11-28 22:10:55'),
(5, 'Mrs.', 'Consectetur consequatur non sed assumenda nisi explicabo. Sit esse qui et quos quibusdam. Tempore quia maiores sed assumenda aut. Reiciendis iure est libero qui eos omnis.', 17, 18, '41', 'player', 'player', 14, '2018-11-28 22:10:55', '2019-01-24 04:23:26'),
(6, 'Prof.', 'Odio aut accusantium ut ratione eius unde qui voluptatem. Id nobis at vel ut qui perferendis porro voluptatum. Et non neque sequi impedit.', 1, 5, '9', 'team', 'team', 4, '2018-11-28 22:10:55', '2018-11-28 22:10:55'),
(7, 'Dr.', 'Debitis sit natus velit neque numquam quas. Illum sit quis reprehenderit dolorum nihil aliquid. Quo assumenda sint quidem quae sunt eum aut.', 2, 9, '6', 'user', 'user', 3, '2018-11-28 22:10:55', '2018-11-28 22:10:55'),
(8, 'Miss', 'Magni odio quod dolor molestiae qui. Quo nihil repellendus qui beatae quasi optio. Ex rem libero earum iure. Quo atque praesentium vel deleniti aliquam modi quia explicabo.', 17, 13, '17', 'player', 'player', 15, '2018-11-28 22:10:55', '2018-11-28 22:10:55'),
(9, 'Mr.', 'Ut quis magnam omnis minima. Quisquam repellat fugiat voluptatem harum architecto omnis est.', 17, 9, '1', 'team', 'team', 15, '2018-11-28 22:10:55', '2018-11-28 22:10:55'),
(10, 'Miss', 'Suscipit a rerum distinctio velit. Aut aut deleniti alias.', 17, 3, '3', 'team', 'team', 15, '2018-11-28 22:10:55', '2018-11-28 22:10:55'),
(11, 'Mr.', 'Eum eaque aliquid quas est at qui et doloremque. Ratione enim et non consequatur velit quia. Est ea tenetur est id perspiciatis pariatur.', 1, 19, '7', 'scout', 'scout', 4, '2018-11-28 22:10:55', '2018-11-28 22:10:55'),
(12, 'Ms.', 'Aut consectetur excepturi omnis qui perspiciatis. Itaque mollitia et modi dignissimos in exercitationem. Recusandae labore et et quos. Necessitatibus pariatur fuga placeat eius occaecati non.', 16, 6, '17', 'academie', 'academie', 2, '2018-11-28 22:10:55', '2018-11-28 22:10:55'),
(13, 'Dr.', 'Voluptas voluptates eos eaque et. Omnis harum libero quam autem qui dignissimos rerum.', 17, 16, '11', 'scout', 'scout', 15, '2018-11-28 22:10:55', '2018-11-28 22:10:55'),
(14, 'Dr.', 'Iure accusamus aut unde. Omnis aut ex voluptatum aut eaque ut. Explicabo et numquam quia sed sunt.', 1, 13, '9', 'user', 'user', 1, '2018-11-28 22:10:55', '2018-11-28 22:10:55'),
(15, 'Ms.', 'Fuga veritatis eum nam quaerat nulla. Impedit qui ad distinctio amet sed reiciendis. Delectus fugiat nemo illum et molestiae.', 16, 5, '19', 'player', 'player', 2, '2018-11-28 22:10:55', '2018-11-28 22:10:55'),
(16, 'Miss', 'Tempora eveniet quo ea ex nobis. Assumenda laborum blanditiis omnis adipisci adipisci. Est fugiat qui quod qui doloribus veritatis.', 2, 1, '20', 'player', 'player', 4, '2018-11-28 22:10:55', '2018-11-28 22:10:55'),
(17, 'Dr.', 'Culpa velit repellat veniam atque. Perspiciatis culpa repellat enim nesciunt fugiat voluptas. Sequi corporis eligendi aut aut maiores pariatur.', 17, 8, '7', 'user', 'user', 15, '2018-11-28 22:10:55', '2018-11-28 22:10:55'),
(18, 'Mr.', 'Saepe inventore odio in nulla quia. Sequi enim nam aut eveniet aliquid qui eius. Vel distinctio delectus quaerat et hic harum adipisci eos. Perferendis ducimus et pariatur magnam modi omnis.', 2, 9, '8', 'player', 'player', 3, '2018-11-28 22:10:55', '2018-11-28 22:10:55'),
(19, 'Dr.', 'Eveniet dignissimos quia minus maxime placeat. Numquam rerum assumenda nisi enim sit. Adipisci tempore corporis temporibus enim. Dolorum et atque vitae.', 16, 10, '14', 'academie', 'academie', 1, '2018-11-28 22:10:55', '2018-11-28 22:10:55'),
(20, 'Prof.', 'Voluptates eum ea voluptatem omnis sint sapiente. Eius consequatur numquam aut dolor distinctio cupiditate atque.', 16, 11, '2', 'team', 'team', 2, '2018-11-28 22:10:55', '2018-11-28 22:10:55'),
(21, 'I WANT TO ACTIVATE MY DOMAIN', '<div style=\'color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: \"Droid Sans Mono\", monospace, monospace, \"Droid Sans Fallback\"; line-height: 19px; white-space: pre;\'><span style=\"color: #808080;\">&lt;</span><span style=\"color: #569cd6;\">input</span> <span style=\"color: #9cdcfe;\">type</span>=<span style=\"color: #ce9178;\">\"hidden\"</span> <span style=\"color: #9cdcfe;\">name</span>=<span style=\"color: #ce9178;\">\"_token\"</span> <span style=\"color: #9cdcfe;\">value</span>=<span style=\"color: #ce9178;\">\"{{ @csrf_token() }}\"</span><span style=\"color: #808080;\">&gt;</span></div>\n', 16, 1, '2', NULL, NULL, 15, '2018-12-28 19:28:32', '2018-12-28 19:28:32'),
(23, 'I WANT TO ACTIVATE MY DOMAIN', '<p>&nbsp;I WANT TO ACTIVATE MY DOMAIN&nbsp;&nbsp;I WANT TO ACTIVATE MY DOMAIN&nbsp;&nbsp;I WANT TO ACTIVATE MY DOMAIN&nbsp;&nbsp;I WANT TO ACTIVATE MY DOMAIN&nbsp;&nbsp;I WANT TO ACTIVATE MY DOMAIN&nbsp;&nbsp;I WANT TO ACTIVATE MY DOMAIN&nbsp;&nbsp;I WANT TO ACTIVATE MY DOMAIN&nbsp;&nbsp;I WANT TO ACTIVATE MY DOMAIN&nbsp;&nbsp;I WANT TO ACTIVATE MY DOMAIN&nbsp;&nbsp;I WANT TO ACTIVATE MY DOMAIN&nbsp;&nbsp;I WANT TO ACTIVATE MY DOMAIN&nbsp;&nbsp;I WANT TO ACTIVATE MY DOMAIN&nbsp;&nbsp;I WANT TO ACTIVATE MY DOMAIN&nbsp;&nbsp;I WANT TO ACTIVATE MY DOMAIN&nbsp;&nbsp;I WANT TO ACTIVATE MY DOMAIN&nbsp;&nbsp;I WANT TO ACTIVATE MY DOMAIN&nbsp;&nbsp;I WANT TO ACTIVATE MY DOMAIN&nbsp;&nbsp;I WANT TO ACTIVATE MY DOMAIN&nbsp;<p><img data-filename=\"hb1-min-min.jpg\" style=\"width: 724px;\" src=\"15460300980.png\"></p><p>&nbsp;I WANT TO ACTIVATE MY DOMAIN&nbsp;&nbsp;I WANT TO ACTIVATE MY DOMAIN&nbsp;&nbsp;I WANT TO ACTIVATE MY DOMAIN&nbsp;&nbsp;I WANT TO ACTIVATE MY DOMAIN&nbsp;&nbsp;I WANT TO ACTIVATE MY DOMAIN&nbsp;&nbsp;I WANT TO ACTIVATE MY DOMAIN&nbsp;<br></p></p>\n', 16, 1, '5', NULL, NULL, 15, '2018-12-28 19:48:18', '2018-12-28 19:48:18'),
(24, 'I could not Install SSL', '<p>I could not Install SSLI could not Install SSLI could not Install SSLI could not Install SSLI could not Install SSLI could not Install SSLI could not Install SSLI could not Install SSLI could not Install SSLI could not Install SSLI could not Install SSLI could not Install SSLI could not Install SSLI could not Install SSLI could not Install SSLI could not Install SSLI could not Install SSLI could not Install SSLI could not Install SSLI could not Install SSLI could not Install SSLI could not Install SSLI could not Install SSLI could not Install SSLI could not Install SSLI could not Install SSLI could not Install SSLI could not Install SSL<br></p>\n', 16, 1, '2', NULL, NULL, 15, '2019-01-05 10:18:58', '2019-01-05 10:18:58'),
(25, 'MY WEBSITE IS NOT UP.', '<p><img data-filename=\"Screenshot from 2019-01-03 14-53-17.png\" style=\"width: 724px;\" src=\"/home/kaperskyguru/Projects/PHPProjects/iplayfootball/storage/app/images/15466895500.png/15466895500.png\"><p>kjashkajjjjjjjjkjsbajskajjjjjjjjjjjjjj;<span style=\'color: rgb(206, 145, 120); background-color: rgb(30, 30, 30); font-family: \"Droid Sans Mono\", monospace, monospace, \"Droid Sans Fallback\"; white-space: pre;\'>{{url(\'/admin/details/\'.$message-&gt;id)}}kajshkjashdkjasdajsdasajskanhskjdahkjsdasdhkajsdhakjsdkasdasakdasdasdasdas</span></p></p>\n', 17, 1, '2', NULL, NULL, 15, '2019-01-05 10:59:10', '2019-01-05 10:59:10'),
(26, 'I could not Install SSL', '<p>am testing this website like madam testing this website like madam testing this website like madam testing this website like madam testing this website like madam testing this website like madam testing this website like madam testing this website like madam testing this website like madam testing this website like madam testing this website like madam testing this website like madam testing this website like madam testing this website like mad<p><img data-filename=\"dbDesign.png\" style=\"width: 724px;\" src=\"app/images/15466898830.png\"></p><p>am testing this website like madam testing this website like madam testing this website like madam testing this website like madam testing this website like madam testing this website like madam testing this website like madam testing this website like madam testing this website like madam testing this website like madam testing this website like madam testing this website like madam testing this website like madam testing this website like madam testing this website like madam testing this website like madam testing this website like mad<br></p></p>\n', 16, 1, '2', NULL, NULL, 15, '2019-01-05 11:04:43', '2019-01-05 11:04:43'),
(27, 'I could not Install SSL', '<p><img data-filename=\"codeautomation.jpg\" style=\"width: 464px;\" src=\"/home/kaperskyguru/Projects/PHPProjects/iplayfootball/storage/public/15466905700.png\"><br></p>\n', 16, 1, '2', NULL, NULL, 15, '2019-01-05 11:16:10', '2019-01-05 11:16:10'),
(28, 'MY WEBSITE IS NOT UP.', '<p><img data-filename=\"dbDesign.png\" style=\"width: 724px;\" src=\"/home/kaperskyguru/Projects/PHPProjects/iplayfootball/storage/app/public/images/15466908130.png\"><br></p>\n', 16, 1, '2', NULL, NULL, 15, '2019-01-05 11:20:13', '2019-01-05 11:20:13'),
(29, 'I WANT TO ACTIVATE MY DOMAIN', '<p><img data-filename=\"Screenshot from 2018-08-14 12-42-26.png\" style=\"width: 724px;\" src=\"http://127.0.0.1:8000/app/public/images15466909150.png\"><br></p>\n', 16, 1, '3', NULL, NULL, 15, '2019-01-05 11:21:55', '2019-01-05 11:21:55'),
(30, 'I WANT TO ACTIVATE MY DOMAIN', '<p><img data-filename=\"dbDesign.png\" style=\"width: 724px;\" src=\"/storage/15466915180.png\"><br></p>\n', 16, 1, '3', NULL, NULL, 15, '2019-01-05 11:31:58', '2019-01-05 11:31:58'),
(31, 'I WANT TO ACTIVATE MY DOMAIN', '<p><img data-filename=\"Screenshot from 2018-10-06 17-29-43.png\" style=\"width: 724px;\" src=\"http://127.0.0.1:8000/15466917930.png\"><br></p>\n', 16, 1, '2', NULL, NULL, 15, '2019-01-05 11:36:33', '2019-01-05 11:36:33'),
(32, 'I could not Install SSL', '<p><img data-filename=\"codeautomation.jpg\" style=\"width: 464px;\" src=\"http://127.0.0.1:8000/storage/15466921120.png\"><br></p>\n', 16, 1, '3', NULL, NULL, 15, '2019-01-05 11:41:52', '2019-01-05 11:41:52'),
(33, 'I WANT TO ACTIVATE MY DOMAIN', '<p><iframe frameborder=\"0\" src=\"//www.youtube.com/embed/TmysA3TbuVU\" width=\"640\" height=\"360\" class=\"note-video-clip\"></iframe><br></p>\n', 16, 1, '4', NULL, NULL, 15, '2019-01-05 11:50:57', '2019-01-05 11:50:57'),
(34, 'sasd', '<p>ascdas</p>\n', 16, 22, 'Admin', 'admin', 'admin', 15, '2019-01-16 14:45:37', '2019-01-16 14:45:37'),
(35, 'Testing', '<p>Testing</p>\n', 16, 22, '22', 'admin', 'admin', 15, '2019-01-16 14:54:53', '2019-01-16 14:54:53'),
(36, 'cvbcv', '<p>Lets see this again</p>\n', 16, 22, 'admin', 'admin', 'admin', 15, '2019-01-16 14:56:02', '2019-01-16 14:56:02'),
(37, 'akjshkjahskjhakjhsjhaj', '<p>akjshkjahskjhakjhsjhajakjshkjahskjhakjhsjhajakjshkjahskjhakjhsjhajakjshkjahskjhakjhsjhajakjshkjahskjhakjhsjhajakjshkjahskjhakjhsjhajakjshkjahskjhakjhsjhajakjshkjahskjhakjhsjhajakjshkjahskjhakjhsjhajakjshkjahskjhakjhsjhajakjshkjahskjhakjhsjhajakjshkjahskjhakjhsjhajakjshkjahskjhakjhsjhajakjshkjahskjhakjhsjhajakjshkjahskjhakjhsjhajakjshkjahskjhakjhsjhajakjshkjahskjhakjhsjhajakjshkjahskjhakjhsjhajakjshkjahskjhakjhsjhajakjshkjahskjhakjhsjhajakjshkjahskjhakjhsjhajakjshkjahskjhakjhsjhajakjshkjahskjhakjhsjhajakjshkjahskjhakjhsjhajakjshkjahskjhakjhsjhajakjshkjahskjhakjhsjhajakjshkjahskjhakjhsjhajakjshkjahskjhakjhsjhajakjshkjahskjhakjhsjhaj<br></p>\n', 16, 41, 'admin', 'team', 'admin', 14, '2019-01-23 20:18:04', '2019-01-24 04:28:18');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(53, '2014_10_12_000000_create_users_table', 1),
(54, '2014_10_12_100000_create_password_resets_table', 1),
(55, '2018_10_19_114346_create_players_table', 1),
(56, '2018_10_19_114423_create_messages_table', 1),
(57, '2018_10_19_114446_create_notices_table', 1),
(58, '2018_10_19_114513_create_notifications_table', 1),
(59, '2018_10_19_114536_create_scouts_table', 1),
(60, '2018_10_19_114606_create_statuses_table', 1),
(61, '2018_10_19_114632_create_verifications_table', 1),
(62, '2018_11_20_091058_create_academics_table', 1),
(63, '2018_11_21_141143_create_teams_table', 1),
(64, '2018_11_21_152502_create_packages_table', 1),
(65, '2018_11_21_152538_create_images_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `id` int(10) UNSIGNED NOT NULL,
  `notice_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notice_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `notice_enddate` datetime NOT NULL,
  `notice_publishdate` datetime NOT NULL,
  `notice_startdate` datetime NOT NULL,
  `notice_visibility_id` int(11) NOT NULL,
  `notice_status_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`id`, `notice_title`, `notice_desc`, `notice_enddate`, `notice_publishdate`, `notice_startdate`, `notice_visibility_id`, `notice_status_id`, `created_at`, `updated_at`) VALUES
(1, 'Ab facere voluptatum non quisquam.', 'Reiciendis aspernatur dolores ad quaerat. Qui voluptatem cum quasi dolor quasi. Odio itaque totam ea eum ut. Voluptatem et doloribus iste in eum dolorem. Voluptatem voluptas nesciunt adipisci sint.', '2019-01-02 00:00:00', '2002-04-12 00:00:00', '1985-06-13 00:00:00', 6, 1, '2018-11-28 22:10:56', '2019-01-03 15:10:56'),
(2, 'Qui et repellat atque sint ipsa.', 'Molestiae quaerat nesciunt et exercitationem. Eum et sed asperiores vel consequatur. Temporibus magni aliquam aut pariatur aut dolor.', '2001-12-21 21:02:20', '1992-12-10 05:53:47', '1977-03-28 15:49:12', 5, 2, '2018-11-28 22:10:57', '2018-11-28 22:10:57'),
(3, 'Et nihil ut magnam repellat.', 'Quia fugit omnis officia quis consequatur est. Tempore assumenda debitis et et maiores et. Molestiae voluptates assumenda nisi aut nostrum aut maiores.', '2003-04-29 15:24:11', '2011-06-25 18:29:15', '1992-04-16 13:54:33', 9, 4, '2018-11-28 22:10:57', '2018-11-28 22:10:57'),
(4, 'Sequi ut sunt voluptates facere et ea.', 'Perspiciatis et aliquid et soluta. Est iusto est deleniti quasi est.', '2014-06-13 07:22:38', '1979-05-27 04:23:51', '2003-01-05 21:07:39', 9, 1, '2018-11-28 22:10:57', '2018-11-28 22:10:57'),
(5, 'Quam qui quia ullam ipsum sunt odio.', 'Ut velit natus perspiciatis saepe. Porro ex iure sint consequuntur. Nihil ut modi occaecati consequatur qui quam nobis.', '1972-08-31 13:46:20', '2000-08-12 14:19:35', '1985-11-14 21:05:08', 4, 2, '2018-11-28 22:10:57', '2018-11-28 22:10:57'),
(6, 'Corporis sed aperiam deleniti.', 'Nisi autem voluptatibus eum voluptate atque possimus asperiores harum. Omnis quisquam autem repudiandae vero voluptas quos sint vitae. Iusto consequatur sunt aliquid perspiciatis est.', '2017-10-28 17:17:06', '1977-09-12 05:21:40', '1971-11-20 00:56:21', 9, 3, '2018-11-28 22:10:57', '2018-11-28 22:10:57'),
(7, 'Ut voluptatum quia inventore ex non.', 'Laudantium nihil modi ab est eum quos sed. Vel sed minima doloribus ducimus. Ut eaque praesentium architecto vel ut ex illo.', '1980-10-15 01:41:37', '2016-06-17 07:55:48', '2015-02-26 11:55:54', 8, 4, '2018-11-28 22:10:57', '2018-11-28 22:10:57'),
(8, 'Itaque laudantium labore sit.', 'Dolor exercitationem at iure quasi odio natus. Harum voluptatem quidem officia commodi aut nulla. Omnis laudantium fugit velit aliquid nisi non repudiandae. In adipisci odit cumque et optio.', '1977-08-31 23:28:11', '2004-02-21 10:08:56', '2016-07-27 23:24:21', 6, 1, '2018-11-28 22:10:57', '2018-11-28 22:10:57'),
(9, 'Et autem provident velit.', 'Dolores consequatur modi mollitia aut. Ducimus ut beatae minus qui amet velit. Quia est incidunt assumenda dolores perspiciatis.', '1995-05-16 03:58:53', '1972-09-18 16:36:39', '1980-05-28 02:48:59', 6, 3, '2018-11-28 22:10:57', '2018-11-28 22:10:57'),
(10, 'Accusantium et qui tempora ea harum.', 'Qui delectus inventore ab corporis temporibus officia. Perspiciatis provident at dolores qui rerum. Qui optio dolore est amet rerum explicabo. Aperiam voluptates ipsum amet voluptatem similique.', '1977-09-15 20:12:33', '2012-05-24 00:38:46', '2003-01-08 05:01:05', 6, 4, '2018-11-28 22:10:57', '2018-11-28 22:10:57'),
(11, 'Et ut aut iusto adipisci.', 'Dolores nesciunt suscipit error provident in non sequi. Beatae dolores quia quo incidunt beatae dolores et. Qui inventore mollitia ex quia.', '1979-09-22 03:33:43', '2002-12-04 19:35:39', '1994-03-24 21:57:23', 7, 1, '2018-11-28 22:10:57', '2018-11-28 22:10:57'),
(12, 'Ab odit quam laudantium eius assumenda.', 'Sed quisquam fugiat exercitationem sint vel. Assumenda non est mollitia magni. Reprehenderit eos nihil rerum id. Enim in ab et impedit aut reprehenderit.', '2006-09-04 15:11:10', '1993-08-03 07:54:34', '1985-03-10 12:06:18', 7, 1, '2018-11-28 22:10:57', '2018-11-28 22:10:57'),
(13, 'Aut molestiae velit praesentium sunt.', 'Eaque dolores ut voluptates harum maxime soluta. Id incidunt libero aut illo accusantium ut officia. Esse nihil quia dolorem tenetur similique. Perspiciatis cumque voluptatem ut et explicabo.', '2001-06-23 00:16:32', '1988-05-10 10:05:06', '2004-12-24 21:02:43', 9, 2, '2018-11-28 22:10:57', '2018-11-28 22:10:57'),
(14, 'Maiores et rerum doloremque ipsa.', 'Cupiditate eaque ex inventore sunt tempore hic qui. Ut ipsa animi nobis est facilis consectetur. Fuga dolor itaque iure officia voluptas officia dolores. Similique alias esse blanditiis velit.', '1985-07-09 20:40:18', '1983-07-28 01:08:37', '2006-01-17 02:31:43', 6, 2, '2018-11-28 22:10:57', '2018-11-28 22:10:57'),
(15, 'Natus commodi dolore itaque velit.', 'Atque libero cum nostrum omnis architecto. Quo est enim dolores fuga molestiae ea earum incidunt. Autem ducimus rerum dolor repudiandae consectetur voluptas soluta. Facere possimus velit aspernatur.', '1991-07-15 04:23:45', '1982-08-14 15:51:39', '2005-10-01 17:11:36', 7, 2, '2018-11-28 22:10:57', '2018-11-28 22:10:57'),
(16, 'Quos eum sit qui dolores quam.', 'Qui rerum est similique sed nam dolor natus. Consectetur officia est vero. Voluptas incidunt ut sed non quia.', '1986-09-08 11:11:26', '2014-08-10 22:00:08', '1973-03-03 21:44:38', 4, 1, '2018-11-28 22:10:57', '2018-11-28 22:10:57'),
(17, 'Et fuga cumque explicabo quia.', 'Autem id eum pariatur aliquid qui praesentium magnam enim. Exercitationem animi in est natus quia. Voluptatem numquam enim perspiciatis. Consequatur facilis velit ut est quae quia dolor.', '1993-09-04 19:38:09', '2012-12-13 10:09:33', '2005-11-26 18:49:08', 7, 1, '2018-11-28 22:10:57', '2018-11-28 22:10:57'),
(18, 'Optio aut ea facere optio nisi.', 'Id optio natus est. Dicta alias qui enim.', '2006-11-22 05:15:54', '1979-04-09 12:18:24', '1988-08-08 02:56:25', 8, 4, '2018-11-28 22:10:57', '2018-11-28 22:10:57'),
(19, 'Quod quia ut eligendi cumque rerum.', 'Iusto et maxime officiis maxime a. Corrupti facilis voluptatem quidem voluptas nesciunt. Alias nesciunt nobis dolores eaque quam et nam quos.', '1992-01-08 12:34:19', '2000-11-29 02:31:37', '1987-08-11 16:02:10', 7, 2, '2018-11-28 22:10:58', '2018-11-28 22:10:58'),
(20, 'Hello', 'oeijflkjdklfjkldsfsdsf', '2018-12-21 00:00:00', '2018-12-11 00:00:00', '2018-12-14 00:00:00', 4, 1, '2018-12-27 12:27:48', '2018-12-27 12:27:48'),
(21, 'Start a Nigerian news blog from scratch and make money blogging.', '\'status\', \'Profile updated!\'', '2018-12-09 00:00:00', '2018-12-10 00:00:00', '2018-12-08 00:00:00', 4, 2, '2018-12-28 10:03:29', '2018-12-28 10:03:29'),
(22, 'Start a Nigerian news blog from scratch and make money blogging.', '\'status\', \'Profile updated!\'', '2018-12-09 00:00:00', '2018-12-10 00:00:00', '2018-12-08 00:00:00', 4, 2, '2018-12-28 10:04:03', '2018-12-28 10:04:03'),
(23, 'Start a Nigerian news blog from scratch and make money blogging.', '\'status\', \'Profile updated!\'', '2018-12-09 00:00:00', '2018-12-10 00:00:00', '2018-12-08 00:00:00', 4, 2, '2018-12-28 10:06:42', '2018-12-28 10:06:42'),
(24, 'Start a Nigerian news blog from scratch and make money blogging.', '\'status\', \'Profile updated!\'', '2018-12-09 00:00:00', '2018-12-10 00:00:00', '2018-12-08 00:00:00', 4, 2, '2018-12-28 10:07:49', '2018-12-28 10:07:49'),
(25, 'Start a Nigerian news blog from scratch and make money blogging.', 'Start a Nigerian news blog from scratch and make money blogging.Start a Nigerian news blog from scratch and make money blogging.Start a Nigerian news blog from scratch and make money blogging.', '2018-12-15 00:00:00', '2018-12-14 00:00:00', '2018-12-13 00:00:00', 4, 2, '2018-12-28 10:09:20', '2018-12-28 10:09:20'),
(26, 'Start a Nigerian news blog from scratch and make money blogging.', 'Testing again', '2019-01-23 00:00:00', '2019-01-16 00:00:00', '2019-01-18 00:00:00', 6, 1, '2019-01-03 14:55:47', '2019-01-03 14:55:47');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(10) UNSIGNED NOT NULL,
  `notification_type` int(11) NOT NULL,
  `notification_message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notification_status_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `name`, `price`, `desc`, `created_at`, `updated_at`) VALUES
(1, '0', '38.00', 'Sint veritatis quasi ex odio. Dignissimos ipsum quidem rerum enim est. Rerum nemo quia dolorum blanditiis ad aperiam. Voluptatem eaque non iusto est.', '2018-11-28 22:10:48', '2018-11-28 22:10:48'),
(2, '0', '48.00', 'Fugiat molestias error est animi. Qui reiciendis architecto velit quia. Numquam odio explicabo animi rerum officia voluptatem quia. Libero assumenda rerum ea nulla.', '2018-11-28 22:10:48', '2018-11-28 22:10:48'),
(3, '2', '92.00', 'Sit fuga vel aut molestiae omnis assumenda esse. Dolor exercitationem similique commodi aut sit iste suscipit. Vel molestiae rerum totam.', '2018-11-28 22:10:49', '2018-11-28 22:10:49');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('Solomoneseme@gmail.com', '$2y$10$uorHNPUN.pPXtIBtiMBMeOoDQp8BL5CI/n1BEbv6k6NopFhqLUrne', '2019-01-24 10:14:52');

-- --------------------------------------------------------

--
-- Table structure for table `players`
--

CREATE TABLE `players` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `player_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `player_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `player_state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `player_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `player_image_id` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `player_height` int(11) DEFAULT NULL,
  `player_weight` int(11) DEFAULT NULL,
  `player_facebook_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `player_dob` date DEFAULT NULL,
  `player_address` text COLLATE utf8mb4_unicode_ci,
  `player_package_id` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT '19',
  `player_gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `player_status_id` int(10) UNSIGNED DEFAULT NULL,
  `player_position` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `player_games_played` int(11) DEFAULT '0',
  `player_minutes_played` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `player_super_substitute` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `player_associate_team` int(11) DEFAULT NULL,
  `player_associate_academic` int(11) DEFAULT NULL,
  `player_associate_scout` int(11) DEFAULT NULL,
  `player_biography` text COLLATE utf8mb4_unicode_ci,
  `player_team_spirit` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `player_passing_accuracy` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `player_ground_duel_winning` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `player_ariel_duel_winning` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `player_recovery` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `player_tackles_winning` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `player_clearance` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `player_blocking` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `player_interceptions` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `player_penalties_conceded` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `player_foul_winnings` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `player_goal_scoring` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `player_penalty_goals` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `player_successful_crosses` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `player_assist_ability` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `player_chances_creation` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `player_penalties_winnings` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `player_offsides` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `player_shooting_accuracy` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `players`
--

INSERT INTO `players` (`id`, `user_id`, `player_name`, `player_phone`, `player_state`, `player_email`, `player_image_id`, `player_height`, `player_weight`, `player_facebook_id`, `player_dob`, `player_address`, `player_package_id`, `player_gender`, `player_status_id`, `player_position`, `player_games_played`, `player_minutes_played`, `player_super_substitute`, `player_associate_team`, `player_associate_academic`, `player_associate_scout`, `player_biography`, `player_team_spirit`, `player_passing_accuracy`, `player_ground_duel_winning`, `player_ariel_duel_winning`, `player_recovery`, `player_tackles_winning`, `player_clearance`, `player_blocking`, `player_interceptions`, `player_penalties_conceded`, `player_foul_winnings`, `player_goal_scoring`, `player_penalty_goals`, `player_successful_crosses`, `player_assist_ability`, `player_chances_creation`, `player_penalties_winnings`, `player_offsides`, `player_shooting_accuracy`, `created_at`, `updated_at`) VALUES
(1, 0, 'Mrs. Gerry Mills IV UPDATED', '+9462253906883', 'Tennessee', 'oleta73@example.com', 'public/images/fieWDwwrWVwd5aGRcFSfTxjtsefKykGSUvAdwPDL.jpeg', 94, 115, '18', '1998-10-29', '731 Prohaska Views Suite 472\r\nFeilview, FL 34454-5676', '13', 'female', 5, 'Striker', 2, '4', 'Yes', 21, 42, 25, 'Ut dicta consequatur vel ut officia. Aut cupiditate ea sapiente excepturi. Dolorem magni sunt dolores. Facilis sint molestias possimus sunt ad corrupti provident.', 'Impressive', 'Impressive', 'Outstanding', 'Impressive', 'Okay', 'Outstanding', 'Okay', 'Okay', 'Impressive', 'Impressive', 'Outstanding', 'Outstanding', 'Okay', 'Impressive', 'Impressive', 'Outstanding', 'Outstanding', 'Outstanding', 'Okay', '2018-11-28 22:10:50', '2019-02-02 13:35:35'),
(2, 0, 'Gerson Nader', '+7169810697737', 'West Virginia', 'ernie.schimmel@example.net', NULL, 92, 304, '2', '2003-11-20', '3052 Unique Motorway\r\nWest Rosemarytown, SC 85603-5657', '1', 'male', 4, 'Mid-Fielder', 1, '1', '1', 1, 2, 3, 'Et expedita voluptas maxime enim. Velit et et aliquid veritatis deserunt aut aut vel. Et nulla voluptatem ipsa qui. Ab nemo dolorem doloribus inventore facere consequuntur et consequatur.', '1', '1', '1', NULL, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', NULL, '2018-11-28 22:10:50', '2019-02-02 11:58:06'),
(3, 0, 'Rico Erdman', '+1524567666002', 'Ohio', 'jorge03@example.net', NULL, 60, 273, '18', '1981-10-24', '376 Marks Track Apt. 763\nMorarland, KY 40400', '3', 'male', 3, 'Winger', 0, '0', '0', 1, 2, 3, 'Labore mollitia veniam porro non dolor aut eius. Ullam ut et ratione nesciunt dolor non. Cum dicta rerum quo ut ducimus occaecati recusandae.', '0', '0', '0', NULL, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', NULL, '2018-11-28 22:10:50', '2018-11-28 22:10:50'),
(4, 0, 'Broderick Franecki', '+7212872318253', 'Oklahoma', 'mike62@example.org', NULL, 82, 235, '17', '1986-11-25', '79484 Trey Loaf Suite 395\nNathanville, MT 59179-8272', '3', 'male', 6, 'Mid-Fielder', 0, '0', '0', 1, 2, 3, 'Quo nihil aut aut sequi rerum et a. Omnis eligendi id et laboriosam tempore enim aperiam aut. Accusantium sunt sit expedita blanditiis qui assumenda quia. Omnis aut harum quo reprehenderit.', '0', '0', '0', NULL, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', NULL, '2018-11-28 22:10:50', '2018-11-28 22:10:50'),
(5, 0, 'Judson Friesen', '+7048719260977', 'Alabama', 'ltorphy@example.org', NULL, 87, 99, '18', '2014-03-19', '5920 Toby Groves\nWest Allen, AZ 53918', '3', 'male', 7, 'Winger', 2, '2', '2', 1, 2, 3, 'Aut dolorum voluptatem omnis consequuntur velit cupiditate. Dolorem pariatur dolorem vitae nihil adipisci deleniti vel. Laudantium dolorem distinctio nihil a.', '2', '2', '2', NULL, '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', NULL, '2018-11-28 22:10:50', '2018-11-28 22:10:50'),
(6, 0, 'Antonina Christiansen III', '+8897444485095', 'Oklahoma', 'buckridge.arch@example.net', NULL, 90, 185, '11', '1984-01-22', '7068 Madge Avenue\nHankchester, WV 24868', '3', 'female', 8, 'Goal Keepeer', 1, '1', '1', 1, 2, 3, 'Maxime vel expedita vero quo. Sed aut deleniti sed quo cumque tenetur neque aliquam. Aliquid autem natus impedit. Commodi corporis eaque a et.', '1', '1', '1', NULL, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', NULL, '2018-11-28 22:10:50', '2018-11-28 22:10:50'),
(7, 0, 'Rudy Lueilwitz', '+5325557895109', 'Hawaii', 'swilderman@example.org', NULL, 96, 144, '6', '2009-01-31', '97886 Kali Freeway\r\nLake Ricky, ME 96222', '{$data[\'player\']->player_package_id}}', 'male', 3, 'Goal Keepeer', 0, '0', '0', 1, 2, 3, 'Perferendis autem a sint harum ut. Libero optio est velit tempore itaque. Aut earum ut aliquid placeat ex quos est quas. Eum distinctio quia quo molestias.', '0', '0', '0', NULL, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', NULL, '2018-11-28 22:10:50', '2019-01-03 11:46:39'),
(8, 0, 'Aylin Kulas Jr.', '+4557589479102', 'Oregon', 'ejaskolski@example.org', NULL, 72, 250, '15', '2011-07-13', '75074 Wuckert Dam\nPort Elodyburgh, MT 14283-5895', '1', 'female', 6, 'Striker', 0, '0', '0', 1, 2, 3, 'Enim omnis tempore omnis architecto. Omnis autem et quaerat quo ipsa. Sit magni aspernatur occaecati in dolores. Corrupti et et facere incidunt qui.', '0', '0', '0', NULL, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', NULL, '2018-11-28 22:10:51', '2018-11-28 22:10:51'),
(9, 0, 'Dr. Emily Schumm PhD', '+8709293871508', 'Kansas', 'sandra78@example.com', NULL, 97, 168, '18', '2015-02-14', '6804 Donnelly Parks Apt. 863\r\nO\'Keefemouth, ME 49469-3611', '13', 'female', 7, 'Goal Keepeer', 2, '2', 'Yes', 1, 2, 3, 'Culpa officiis quibusdam aliquam aut occaecati recusandae. Dolores reiciendis quos placeat omnis. Consequatur eveniet sed et excepturi. Cum eos omnis dolor vitae veritatis eos eos.', 'Okay', '2', '2', 'Outstanding', 'Impressive', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', NULL, '2018-11-28 22:10:51', '2019-01-03 11:47:11'),
(10, 0, 'Sanford Rath', '+1989155406190', 'Kentucky', 'virgil22@example.org', NULL, 90, 333, '8', '1983-11-24', '207 Minerva Village Suite 659\nTheronmouth, WV 82507', '2', 'male', 4, 'Winger', 2, '2', '2', 1, 2, 3, 'Illo vitae et vel vero numquam. Omnis alias ipsum magni culpa. Illum voluptatum ducimus delectus sunt ipsam at molestias. Molestias nihil tempora delectus dignissimos sed.', '2', '2', '2', NULL, '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', NULL, '2018-11-28 22:10:51', '2018-11-28 22:10:51'),
(11, 0, 'Lyric Moore', '+5961595606671', 'North Dakota', 'collin.heller@example.org', NULL, 55, 339, '6', '2018-04-09', '460 Rosamond Fords Suite 083\nOkunevatown, OH 77184', '1', 'male', 7, 'Mid-Fielder', 0, '0', '0', 1, 2, 3, 'Consequuntur iusto architecto officia necessitatibus eligendi perspiciatis. Aut recusandae numquam minima sint.', '0', '0', '0', NULL, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', NULL, '2018-11-28 22:10:51', '2018-11-28 22:10:51'),
(12, 0, 'Justyn Cummings', '+9871161730975', 'Montana', 'okey52@example.net', NULL, 59, 322, '5', '1996-04-28', '131 Keeling Crossroad\nLake Thomas, AZ 15364', '3', 'male', 8, 'Goal Keepeer', 2, '2', '2', 1, 2, 3, 'Aliquam similique vel sint libero eum quas. In natus sit assumenda vel et.', '2', '2', '2', NULL, '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', NULL, '2018-11-28 22:10:51', '2018-11-28 22:10:51'),
(13, 0, 'Catharine Hand', '+1630857353994', 'Oregon', 'adams.cora@example.net', NULL, 69, 225, '12', '2003-08-15', '955 Tyrel Stravenue\nLake Adellmouth, WI 02941-5623', '1', 'female', 10, 'Defender', 1, '1', '1', 1, 2, 3, 'Ut illo et fugiat non incidunt aut. Tempora beatae eum quisquam magnam.', '1', '1', '1', NULL, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', NULL, '2018-11-28 22:10:51', '2018-11-28 22:10:51'),
(14, 0, 'Dr. Rahul Rutherford', '+7119081183372', 'Minnesota', 'destiney.hagenes@example.net', NULL, 93, 317, '2', '1987-08-10', '708 Howe Lock Suite 559\nWeberborough, NH 54048-2517', '3', 'male', 9, 'Goal Keepeer', 1, '1', '1', 1, 2, 3, 'Ea blanditiis sit non illo ut amet. Aut enim repudiandae illo doloribus laborum. Animi accusamus omnis quisquam ea. Distinctio occaecati quidem ut quia.', '1', '1', '1', NULL, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', NULL, '2018-11-28 22:10:51', '2018-11-28 22:10:51'),
(15, 0, 'Mr. Bradly Langosh', '+3794014878325', 'Wisconsin', 'arlie94@example.com', NULL, 84, 201, '1', '1998-06-23', '7014 Romaine Glen\nBerniceshire, KY 00299', '2', 'male', 7, 'Striker', 2, '2', '2', 1, 2, 3, 'Corrupti consequuntur quia voluptatibus asperiores dolores. Vero ducimus deserunt quidem itaque molestiae facere odit eligendi. Mollitia dicta facere consequatur aut doloremque saepe quisquam.', '2', '2', '2', NULL, '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', NULL, '2018-11-28 22:10:51', '2018-11-28 22:10:51'),
(16, 0, 'Aubree Schroeder', '+4330236379574', 'Wisconsin', 'yfadel@example.com', NULL, 82, 221, '5', '1982-09-20', '2000 Maye Forges\nPort Lavernaland, NJ 88821-9972', '1', 'female', 9, 'Mid-Fielder', 2, '2', '2', 1, 2, 3, 'Natus possimus et et doloremque aperiam neque consequatur repudiandae. Voluptatem atque reiciendis et commodi ipsa nihil.', '2', '2', '2', NULL, '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', NULL, '2018-11-28 22:10:51', '2018-11-28 22:10:51'),
(17, 0, 'Wilmer Kub', '+6325929126468', 'North Carolina', 'armstrong.lyla@example.org', NULL, 74, 54, '7', '1987-04-14', '1054 Koch Track\nPort Reed, NV 28846-0871', '2', 'male', 9, 'Defender', 1, '1', '1', 1, 2, 3, 'Aspernatur laborum libero modi. Et laboriosam consequuntur suscipit ipsam ratione. Tenetur dolore perspiciatis ratione amet nihil.', '1', '1', '1', NULL, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', NULL, '2018-11-28 22:10:51', '2018-11-28 22:10:51'),
(18, 0, 'Nona Parisian MD', '+9559632565787', 'Maryland', 'phayes@example.org', NULL, 85, 137, '20', '2013-06-25', '8004 Steve Pines\nJayceville, OH 18513-6858', '1', 'female', 3, 'Winger', 1, '1', '1', 1, 2, 3, 'Esse magni voluptate qui. Labore harum maxime error cumque maiores. Temporibus sunt est est nam aut pariatur.', '1', '1', '1', NULL, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', NULL, '2018-11-28 22:10:51', '2018-11-28 22:10:51'),
(19, 0, 'Scot Lowe', '+4406592445174', 'Arizona', 'furman.volkman@example.net', NULL, 81, 227, '5', '1991-10-10', '1891 Casper Common Suite 893\nO\'Konport, TN 76448-0657', '3', 'male', 2, 'Striker', 1, '1', '1', 1, 2, 3, 'Qui et esse ea culpa debitis assumenda non. Dolores laborum quo harum accusantium.', '1', '1', '1', NULL, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', NULL, '2018-11-28 22:10:51', '2018-11-28 22:10:51'),
(20, 0, 'Mrs. Kelly Hermiston', '+5366367726429', 'Tennessee', 'botsford.justus@example.org', NULL, 56, 234, '12', '2017-02-25', '538 Durgan Place Suite 942\nLake Gregg, RI 40599', '3', 'female', 3, 'Winger', 1, '1', '1', 1, 2, 3, 'Animi facilis officia facilis aliquam unde eos et. Ut suscipit occaecati ut alias ut.', '1', '1', '1', NULL, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', NULL, '2018-11-28 22:10:51', '2018-11-28 22:10:51'),
(21, 0, 'Rischoola Rischoola', '8145655830', NULL, 'rischoola@gmail.com', NULL, 34, 56, 'Solomoneseme', '2018-12-28', 'Rumuolumeni', '13', 'Male', 1, NULL, NULL, NULL, NULL, 1, 2, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-12-29 08:15:36', '2018-12-29 08:15:36'),
(22, 0, 'Rischoola Rischoola', '8145655830', NULL, 'rischoola1@gmail.com', NULL, 23, 43, 'Solomoneseme', '2019-01-31', 'Rumuolumeni', '12', 'Male', 1, NULL, NULL, NULL, NULL, 1, 2, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-01-03 09:02:36', '2019-01-03 09:02:36'),
(25, 0, 'Rischoola Rischoola', '8145655830', NULL, 'rischoola3@gmail.com', NULL, 456, 45, 'Solomoneseme', '2019-03-11', 'Rumuolumeni', '12', 'Male', 1, NULL, 0, NULL, NULL, 41, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-01-14 20:37:14', '2019-01-14 20:37:14'),
(27, 0, 'Rischoola Rischoola', '8145655830', NULL, 'test@gmail.com', NULL, 456, 45, 'Solomoneseme', '2019-03-11', 'Rumuolumeni', '12', 'Male', 1, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-01-14 20:38:27', '2019-01-14 20:38:27'),
(29, 0, 'Rischoola Rischoola', '8145655830', NULL, 'test3@gmail.com', NULL, 456, 45, 'Solomoneseme', '2019-03-11', 'Rumuolumeni', '12', 'Male', 1, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-01-14 20:43:06', '2019-01-14 20:43:06'),
(30, 0, 'Rischoola Rischoola', '8145655830', NULL, 'rischoola4@gmail.com', NULL, 34, 2, 'Solomoneseme', '2019-01-09', 'Rumuolumeni', '12', 'Male', 1, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-01-14 20:48:17', '2019-01-14 20:48:17'),
(32, 0, 'Solomon Eseme', '8145655830', NULL, 'Solomoneseme444@gmail.com', NULL, 43, 45, 'Solomoneseme', '2019-01-11', '24 Iwofe', '12', 'Male', 1, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-01-14 20:51:40', '2019-01-14 20:51:40'),
(33, 27, 'Guacho', '81456558305', NULL, 'guacho@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '19', NULL, 3, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-01-14 22:02:37', '2019-01-14 22:02:37'),
(34, 28, 'Paul James', '09091234567', 'Nigeria', 'pualjames@gmail.com', NULL, 45, 45, NULL, '1994-01-17', 'Rumuola', '13', NULL, 1, 'Defender', 0, NULL, NULL, NULL, NULL, NULL, 'Am a great Player', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-01-16 19:35:39', '2019-01-16 20:26:30'),
(35, 29, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '19', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-01-22 08:33:52', '2019-01-22 08:33:52'),
(36, 30, 'tester tester', '8145655830', NULL, 'tester@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '19', NULL, 2, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-01-22 08:39:21', '2019-01-22 08:39:21'),
(37, 31, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '19', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-01-22 09:02:25', '2019-01-22 09:02:25'),
(38, 32, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '19', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-01-22 09:06:26', '2019-01-22 09:06:26'),
(39, 33, 'Junior paul', '08145655830', NULL, 'junior@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '19', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-01-22 10:51:56', '2019-01-22 10:51:56'),
(40, 36, 'Rischoola Rischoola', '8145655830', NULL, 'ris@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '19', NULL, 2, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-01-22 11:03:13', '2019-01-22 11:03:13'),
(44, 46, 'kaperskyguru', '08145655830', 'Nigeria', 'kaperskyguru@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '19', NULL, 2, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-01-25 11:31:54', '2019-01-25 11:31:54'),
(45, 47, 'Rischoola Rischoola', '8145655830', 'Nigeria', 'rischoolsa@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '19', NULL, 2, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-01-25 11:37:41', '2019-01-25 11:37:41'),
(46, 49, 'Solomon Eseme', '8145655830', 'Nigeria', 'Solomonesemwe@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '19', NULL, 2, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-01-25 11:58:37', '2019-01-25 11:58:37'),
(47, 50, 'Rischoola Rischoola', '8145655830', 'Nigeria', 'rischoolxa@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '19', NULL, 2, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-01-25 12:05:25', '2019-01-25 12:05:25'),
(48, 51, 'Rischoola Rischoola', '08145655830', 'Nigeria', 'rischoolaw@gmail.com', NULL, 34, 45, NULL, '1970-01-01', NULL, '19', NULL, 2, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-01-25 12:09:52', '2019-02-02 14:01:17'),
(49, 52, 'Solomon Eseme', '8145655830', 'Nigeria', 'rischo0ola@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '19', NULL, 2, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-01-25 13:01:21', '2019-01-25 13:01:21'),
(50, 53, 'Rischoola Rischoola', '8145655830', 'Nigeria', 'rischo90ola@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '19', NULL, 2, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-01-25 13:02:13', '2019-01-25 13:02:13'),
(51, 54, 'Rischoola Rischoola', '8145655830', 'Nigeria', 'rischo960ola@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '19', NULL, 2, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-01-25 13:03:17', '2019-01-25 13:03:17'),
(52, 56, 'player player', '08145655830', 'Nigeria', 'player@gmail.com', 'public/images/KpF50Gmi33JQCffHIWhCJgB6IKrITzGz8LoD8rPA.jpeg', NULL, NULL, NULL, '1970-01-01', NULL, '19', NULL, 2, NULL, 0, NULL, NULL, NULL, NULL, NULL, 'Am a gentle player', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-02-05 14:47:43', '2019-02-05 14:51:01'),
(53, 57, 'Test Player', '08145655830', 'Rivers State', 'testplayer@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '19', NULL, 1, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-02-05 20:40:46', '2019-02-05 20:40:46');

-- --------------------------------------------------------

--
-- Table structure for table `scouts`
--

CREATE TABLE `scouts` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `scout_image_id` text COLLATE utf8mb4_unicode_ci,
  `scout_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `scout_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `scout_state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scout_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `scout_licence` text COLLATE utf8mb4_unicode_ci,
  `scout_team_id` int(11) DEFAULT NULL,
  `scout_dob` date DEFAULT NULL,
  `scout_address` text COLLATE utf8mb4_unicode_ci,
  `scout_notes` text COLLATE utf8mb4_unicode_ci,
  `scout_gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scout_status_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `scouts`
--

INSERT INTO `scouts` (`id`, `user_id`, `scout_image_id`, `scout_name`, `scout_phone`, `scout_state`, `scout_email`, `scout_licence`, `scout_team_id`, `scout_dob`, `scout_address`, `scout_notes`, `scout_gender`, `scout_status_id`, `created_at`, `updated_at`) VALUES
(2, 0, 'public/images/AUDVAKskO6Mjs4jrGUSIG0bH10p41A2PhNKDk3kE.jpeg', 'Shanelle Rath', '+2524266768263', 'Ohio', 'thackett@example.org', '5', 68, '1971-08-16', '11580 Lind Village\nPort Colin, NC 74152-5085', 'Officiis voluptatem qui enim. Modi ullam doloremque expedita illum. Quo quo accusantium quam ut ad ut sed non. Eum totam qui cumque ratione suscipit. Alias laborum nesciunt esse quo pariatur.', 'female', 3, '2018-11-28 22:10:52', '2018-11-28 22:10:52'),
(3, 0, 'public/images/AUDVAKskO6Mjs4jrGUSIG0bH10p41A2PhNKDk3kE.jpeg', 'Fernando Mann', '+9865220439323', 'Illinois', 'zschuppe@example.net', '1', 77, '2004-07-09', '16715 Wiegand Parkway\nSarinashire, IN 32182-9408', 'Doloribus harum ut sed tempore ab odio. Eveniet corrupti rerum dolor placeat. Porro quia tempora exercitationem doloribus quidem nam cupiditate.', 'male', 1, '2018-11-28 22:10:52', '2018-11-28 22:10:52'),
(4, 0, NULL, 'John Murphy DVM', '+3836820057787', 'Florida', 'tbogisich@example.org', '18', 93, '1990-10-14', '3505 O\'Keefe Locks Apt. 207\nMatildastad, AZ 14062', 'Quam animi non velit. Ab cupiditate est ut sit. Distinctio temporibus est enim aut velit. Atque reiciendis eos quae. Eos harum ut id autem et.', 'male', 1, '2018-11-28 22:10:52', '2018-11-28 22:10:52'),
(5, 0, NULL, 'Prof. Bret Stanton PhD', '+6871169452483', 'Alaska', 'gbahringer@example.com', '7', 95, '1985-02-04', '834 Erdman Roads\nNorth Ivy, ND 97186-1934', 'Consequatur distinctio sint eos sed. Ut officia sint autem corrupti accusamus ipsam. Est necessitatibus non tempora suscipit. Quod dolor iure est labore et alias mollitia.', 'male', 3, '2018-11-28 22:10:52', '2018-11-28 22:10:52'),
(6, 0, NULL, 'Dr. Cleve Franecki', '+1133409596837', 'Vermont', 'verla.cummerata@example.org', '10', 61, '1979-05-30', '77443 Jasen Station Suite 063\nEinoburgh, WI 98888', 'Esse voluptas ullam repudiandae et excepturi dolorum asperiores delectus. Enim excepturi maxime dolorum maiores. Ut dolores dolores molestiae rerum quas esse.', 'male', 2, '2018-11-28 22:10:53', '2018-11-28 22:10:53'),
(7, 0, NULL, 'Otho Hammes', '+7523473244051', 'California', 'sandy49@example.com', '20', 52, '2012-03-20', '632 Corwin Pass Apt. 181\nRigobertostad, LA 44109', 'Molestiae repudiandae rerum et officiis nesciunt tenetur. Itaque alias odit odit distinctio nemo. Enim quia aut ut sed delectus.', 'male', 3, '2018-11-28 22:10:53', '2018-11-28 22:10:53'),
(8, 0, 'public/images/AUDVAKskO6Mjs4jrGUSIG0bH10p41A2PhNKDk3kE.jpeg', 'Prof. Keenan Donnelly', '+2589512686764', 'Wisconsin', 'istiedemann@example.net', '7', 100, '1983-11-25', '60014 Eleazar Drive Suite 201\nNaomiville, TX 07426', 'Vitae provident quis hic quibusdam. Quia est impedit quam quas explicabo temporibus quae.', 'male', 2, '2018-11-28 22:10:53', '2018-11-28 22:10:53'),
(9, 0, NULL, 'Zaria Jerde', '+4744644851595', 'District of Columbia', 'alphonso44@example.com', '4', 63, '2006-01-15', '15871 Buckridge Green Suite 709\nLake Napoleon, MT 79888', 'Facere id et vel facere. Aperiam culpa sed incidunt aspernatur in. Sequi eos distinctio iusto id doloribus laboriosam facilis.', 'female', 1, '2018-11-28 22:10:53', '2018-11-28 22:10:53'),
(10, 0, NULL, 'Mckenna Jast', '+7322047479157', 'Tennessee', 'dfranecki@example.org', '20', 76, '2006-11-28', '46830 Nikolaus Wells Apt. 626\nNorth Lilla, WI 04676-4806', 'Nihil illum quaerat qui ea voluptas laboriosam. Id placeat fugit quo totam quam. Libero sint qui qui omnis sit quia.', 'male', 3, '2018-11-28 22:10:53', '2018-11-28 22:10:53'),
(11, 0, NULL, 'Deon Purdy', '+5903169545845', 'New Hampshire', 'paxton.rohan@example.net', '19', 91, '2008-11-10', '323 Myriam Views\nRozellamouth, PA 21169-9010', 'Error consequatur sunt et et sit veritatis ea. Tempore tempora molestiae labore vel. Fugit distinctio aliquam ut.', 'male', 2, '2018-11-28 22:10:53', '2018-11-28 22:10:53'),
(12, 0, NULL, 'Sam Pouros', '+5754074753258', 'Idaho', 'jaron.kohler@example.org', '10', 64, '1971-09-09', '8039 Shields Pike Apt. 608\nEltonhaven, OK 31493', 'Eum est ratione aperiam illum vitae. Earum dolores omnis eos. Sunt est quia necessitatibus corrupti velit.', 'male', 3, '2018-11-28 22:10:53', '2018-11-28 22:10:53'),
(13, 0, NULL, 'Dr. Douglas Barton I', '+9316401917517', 'Nebraska', 'lfadel@example.org', '12', 100, '2004-10-11', '990 Nitzsche Creek Suite 604\nPaulafurt, NH 36517-6288', 'Officia earum ut voluptate. Corporis quis saepe est aut laboriosam facere eveniet.', 'male', 1, '2018-11-28 22:10:53', '2018-11-28 22:10:53'),
(14, 0, NULL, 'Donny Hayes', '+6672290276195', 'Utah', 'cjaskolski@example.com', '17', 74, '1990-08-17', '232 Mellie Village\nMertzchester, NM 05734', 'Dolorem quo aut repudiandae. Assumenda voluptas culpa facere iste. Sapiente rerum ullam dolores dignissimos.', 'male', 3, '2018-11-28 22:10:53', '2018-11-28 22:10:53'),
(15, 0, NULL, 'Dan Haley DDS', '+8870731401945', 'Maryland', 'dpagac@example.org', '5', 57, '2008-08-16', '324 Alford Port Apt. 939\nNew Braeden, MN 44037', 'Expedita nostrum doloribus nobis impedit omnis quae. Dolorem iusto suscipit qui fugiat saepe non. Deserunt natus qui tempora est.', 'male', 2, '2018-11-28 22:10:53', '2018-11-28 22:10:53'),
(16, 0, NULL, 'Louisa Koss', '+8434637690600', 'North Dakota', 'klocko.rosetta@example.net', '3', 93, '1983-03-30', '149 Hill Keys Suite 459\nNew Lue, GA 54428', 'Ratione dignissimos voluptas ad quas occaecati repellendus ratione. Consectetur est qui vero architecto sunt omnis. Sapiente officia repellat voluptatem. Quo laudantium ipsum quaerat suscipit.', 'male', 2, '2018-11-28 22:10:53', '2018-11-28 22:10:53'),
(17, 0, NULL, 'Prof. Quentin Hackett I', '+3550247527702', 'Mississippi', 'polly42@example.org', '12', 74, '1983-08-01', '341 Schroeder Lake Suite 647\nSouth Jasmin, DE 39011', 'Amet aut ratione repudiandae eos est vitae. Aut laboriosam a eaque libero qui eos blanditiis. Ut dolorem ipsum iusto voluptatem qui maiores excepturi ad.', 'male', 2, '2018-11-28 22:10:53', '2018-11-28 22:10:53'),
(18, 0, NULL, 'Prof. Percival Hamill', '+4642194402664', 'Massachusetts', 'jkonopelski@example.com', '7', 85, '1995-03-28', '4624 Fahey Parks Apt. 251\nHodkiewiczland, NM 80417-4687', 'Explicabo omnis consequatur ut dicta nisi. Blanditiis qui amet totam cumque hic perferendis et. Ab distinctio debitis et dolor eveniet similique esse.', 'male', 1, '2018-11-28 22:10:53', '2018-11-28 22:10:53'),
(19, 0, NULL, 'Mrs. Gerry Ledner', '+8957983942088', 'New Mexico', 'kdamore@example.com', '7', 86, '2002-02-05', '331 Braun Shoal Suite 290\nNorth Cyrilchester, LA 29454', 'Consectetur voluptatibus possimus fuga sint dolores iusto. Hic aut voluptatum minima. Dolores distinctio nulla eos distinctio. Hic quia et fugiat vel. Aliquid itaque atque qui veritatis et.', 'female', 2, '2018-11-28 22:10:53', '2018-11-28 22:10:53'),
(20, 0, NULL, 'Elyse Walker', '+9877434000018', 'Iowa', 'edmund23@example.org', '13', 81, '1996-08-30', '57773 Jany Fords\nWest Ransomland, OK 59743', 'Sed aut itaque ullam consequatur aut aut. Deserunt eum quam et et et sit mollitia autem. Voluptatem dolorem ut cumque. Autem asperiores officiis impedit accusantium illum.', 'female', 2, '2018-11-28 22:10:53', '2018-11-28 22:10:53'),
(25, 0, NULL, 'Rischoola Rischoola', '08145655830', '0', 'rischoola@gmail.com', 'ssas', 6, '2018-12-19', 'Rumuolumeni', 'mdae', 'Male', 1, '2018-12-28 12:35:49', '2018-12-28 12:35:49'),
(26, 0, NULL, 'Solomon Eseme', '08145655830', '0', 'Solomonesemeamadi@gmail.com', 'ssas', 4, '2019-01-10', '24 Iwofe', 'Good boy', 'Male', 1, '2019-01-03 12:55:34', '2019-01-03 13:01:12'),
(27, 55, NULL, 'Scout Scout', '08145655830', 'Nigeria', 'scout@gmail.com', NULL, NULL, NULL, 'Rumuolumeni, Port Harcourt.', NULL, NULL, 2, '2019-02-04 11:18:44', '2019-02-05 12:16:39');

-- --------------------------------------------------------

--
-- Table structure for table `statuses`
--

CREATE TABLE `statuses` (
  `id` int(10) UNSIGNED NOT NULL,
  `status_text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `statuses`
--

INSERT INTO `statuses` (`id`, `status_text`, `status_desc`, `created_at`, `updated_at`) VALUES
(1, 'Active', 'Voluptatum nisi cupiditate non eligendi laboriosam. Ipsa et quasi explicabo tempora omnis commodi vel. Harum optio aliquam sit quis nulla qui et.', '2018-11-28 22:10:49', '2018-11-28 22:10:49'),
(2, 'Pending', 'Deleniti vel nemo temporibus molestiae. Voluptatibus deleniti est distinctio unde officia rerum. Et quae sapiente porro consequuntur quae ut.', '2018-11-28 22:10:49', '2018-11-28 22:10:49'),
(3, 'Inactive', 'Natus nam est adipisci sequi delectus. Fugit hic vel tenetur vero. Exercitationem vitae deleniti ipsum voluptate. Eum facere eius nobis officia. Natus ratione molestiae neque odio deserunt.', '2018-11-28 22:10:49', '2018-11-28 22:10:49'),
(4, 'Everyone', 'Natus nam est adipisci sequi delectus. Fugit hic vel tenetur vero. Exercitationem vitae deleniti ipsum voluptate. Eum facere eius nobis officia. Natus ratione molestiae neque odio deserunt.', '2018-11-28 22:10:49', '2018-11-28 22:10:49'),
(5, 'Academics', 'Natus nam est adipisci sequi delectus. Fugit hic vel tenetur vero. Exercitationem vitae deleniti ipsum voluptate. Eum facere eius nobis officia. Natus ratione molestiae neque odio deserunt.', '2018-11-28 22:10:49', '2018-11-28 22:10:49'),
(6, 'Teams', 'Natus nam est adipisci sequi delectus. Fugit hic vel tenetur vero. Exercitationem vitae deleniti ipsum voluptate. Eum facere eius nobis officia. Natus ratione molestiae neque odio deserunt.', '2018-11-28 22:10:49', '2018-11-28 22:10:49'),
(7, 'Scouts', 'Natus nam est adipisci sequi delectus. Fugit hic vel tenetur vero. Exercitationem vitae deleniti ipsum voluptate. Eum facere eius nobis officia. Natus ratione molestiae neque odio deserunt.', '2018-11-28 22:10:49', '2018-11-28 22:10:49'),
(8, 'Players', 'Natus nam est adipisci sequi delectus. Fugit hic vel tenetur vero. Exercitationem vitae deleniti ipsum voluptate. Eum facere eius nobis officia. Natus ratione molestiae neque odio deserunt.', '2018-11-28 22:10:49', '2018-11-28 22:10:49'),
(9, 'Admins', 'Natus nam est adipisci sequi delectus. Fugit hic vel tenetur vero. Exercitationem vitae deleniti ipsum voluptate. Eum facere eius nobis officia. Natus ratione molestiae neque odio deserunt.', '2018-11-28 22:10:49', '2018-11-28 22:10:49'),
(10, 'Verified', 'Natus nam est adipisci sequi delectus. Fugit hic vel tenetur vero. Exercitationem vitae deleniti ipsum voluptate. Eum facere eius nobis officia. Natus ratione molestiae neque odio deserunt.', '2018-11-28 22:10:49', '2018-11-28 22:10:49'),
(11, 'Unverified', 'Natus nam est adipisci sequi delectus. Fugit hic vel tenetur vero. Exercitationem vitae deleniti ipsum voluptate. Eum facere eius nobis officia. Natus ratione molestiae neque odio deserunt.', '2018-11-28 22:10:49', '2018-11-28 22:10:49'),
(12, 'Read', '', NULL, NULL),
(13, 'Unread', '', NULL, NULL),
(14, 'Read', '', NULL, NULL),
(15, 'Unread', '', NULL, NULL),
(16, 'sent', '', NULL, NULL),
(17, 'inbox', '', NULL, NULL),
(18, 'draft', '', NULL, NULL),
(19, 'Free', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_id` text COLLATE utf8mb4_unicode_ci,
  `address` text COLLATE utf8mb4_unicode_ci,
  `type` int(11) DEFAULT NULL,
  `status_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `user_id`, `name`, `phone`, `state`, `email`, `image_id`, `address`, `type`, `status_id`, `created_at`, `updated_at`) VALUES
(1, 1, 'Janice  francis', '+9573813810479', 'Florida', 'johns.alexandro@example.org', 'public/images/AUDVAKskO6Mjs4jrGUSIG0bH10p41A2PhNKDk3kE.jpeg', '209 Juwan Crescent\r\nEast Deron, ME 39420', 3, 1, '2018-11-28 22:10:51', '2019-01-03 13:55:28'),
(2, 0, 'Cortez Kulas I', '+3804987860232', 'New York', 'gutmann.bernhard@example.net', NULL, '695 Bogan Garden\nWalkerside, WV 66055', 2, 1, '2018-11-28 22:10:51', '2018-11-28 22:10:51'),
(4, 0, 'Dr. Felipe Mann', '+2060161803242', 'Nevada', 'madelyn.powlowski@example.com', NULL, '760 Eileen Causeway\nWest Milomouth, UT 59719-9809', 2, 4, '2018-11-28 22:10:51', '2018-11-28 22:10:51'),
(5, 0, 'Sophia Gutkowski', '+7202381164323', 'District of Columbia', 'swift.madelynn@example.com', NULL, '50640 Schmeler Well Suite 338\nSouth Greenside, VA 47503-2777', 2, 1, '2018-11-28 22:10:51', '2018-11-28 22:10:51'),
(6, 0, 'Dr. Trenton Mertz I', '+5409261056756', 'Indiana', 'jakob07@example.org', NULL, '3976 Swift Glen\nEast Isachaven, HI 20694', 3, 2, '2018-11-28 22:10:51', '2018-11-28 22:10:51'),
(7, 0, 'Ashlynn Ondricka', '+7324447999117', 'South Dakota', 'jasen14@example.org', NULL, '128 Kreiger Point Suite 007\nNew Kaleigh, AR 37491', 1, 1, '2018-11-28 22:10:51', '2018-11-28 22:10:51'),
(8, 0, 'Pedro Quigley', '+2312998444127', 'New Jersey', 'raquel23@example.org', NULL, '706 Pamela Plains Apt. 576\nRolandoborough, HI 59091', 2, 4, '2018-11-28 22:10:52', '2018-11-28 22:10:52'),
(9, 0, 'Shaylee Bartoletti', '+4387028293081', 'New Jersey', 'tfeeney@example.com', NULL, '627 Alejandra Valleys Apt. 674\nSouth Newell, MT 85291', 2, 4, '2018-11-28 22:10:52', '2018-11-28 22:10:52'),
(10, 0, 'Orin Kovacek', '+1736363905077', 'Missouri', 'lowe.wilson@example.org', NULL, '3116 Lonzo Ridge\nWest Aubrey, MO 75213-7836', 1, 4, '2018-11-28 22:10:52', '2018-11-28 22:10:52'),
(11, 0, 'Prof. Ceasar Walker UPDATED', '+5266247818899', 'Kentucky', 'prohaska.lauriane@example.net', 'public/images/AUDVAKskO6Mjs4jrGUSIG0bH10p41A2PhNKDk3kE.jpeg', '1179 Prosacco Divide\r\nBradenfort, MN 71303', 3, 2, '2018-11-28 22:10:52', '2019-01-03 13:50:36'),
(12, 0, 'Donna DuBuque V', '+1496715088648', 'Oregon', 'heller.samson@example.net', NULL, '739 Ledner Mission Suite 953\nMasonmouth, CA 85484-5056', 2, 2, '2018-11-28 22:10:52', '2018-11-28 22:10:52'),
(13, 0, 'Chaz Okuneva', '+5706214207273', 'Arkansas', 'colton.mcdermott@example.org', NULL, '54812 Katrina Squares\nWisokyhaven, MD 42370-3115', 1, 4, '2018-11-28 22:10:52', '2018-11-28 22:10:52'),
(14, 0, 'Ms. Vickie Mueller IV', '+5871835157849', 'North Dakota', 'tharber@example.com', NULL, '4506 Becker Prairie\nOmerfurt, WV 47361-7251', 1, 1, '2018-11-28 22:10:52', '2018-11-28 22:10:52'),
(15, 0, 'Herminia Stoltenberg', '+9042734559916', 'Virginia', 'predovic.fleta@example.com', NULL, '5053 Sawayn Plains\nTristianfurt, IA 43060-9835', 1, 3, '2018-11-28 22:10:52', '2018-11-28 22:10:52'),
(16, 0, 'Dr. Chandler Herzog DDS', '+5083374348781', 'Arkansas', 'kovacek.dennis@example.org', NULL, '1711 Graham River Suite 337\nLake Rowland, PA 28000', 2, 3, '2018-11-28 22:10:52', '2018-11-28 22:10:52'),
(17, 0, 'Mrs. Kaitlyn Haag DDS', '+5121413891319', 'North Dakota', 'lind.adrianna@example.org', NULL, '845 Don Cliffs Apt. 711\nSouth Marian, SD 19963-2120', 3, 1, '2018-11-28 22:10:52', '2018-11-28 22:10:52'),
(18, 0, 'Prof. Lillie Kerluke', '+1267275415894', 'Nebraska', 'gutkowski.lawson@example.net', NULL, '69204 Bins Streets\nEast Molliefurt, WA 02303', 2, 3, '2018-11-28 22:10:52', '2018-11-28 22:10:52'),
(19, 0, 'Patricia Schumm', '+5565029935355', 'Utah', 'javonte.hills@example.com', NULL, '7358 Bryon Streets\nMohrfort, MD 91746', 3, 4, '2018-11-28 22:10:52', '2018-11-28 22:10:52'),
(20, 0, 'Karson Klein', '+7309755505979', 'North Carolina', 'juliana.abshire@example.net', NULL, '770 Will Pass Apt. 381\nMorissettefurt, ME 62241-1538', 1, 3, '2018-11-28 22:10:52', '2018-11-28 22:10:52'),
(21, 0, 'Rischoola Rischoola', '08145655830', NULL, 'rischoola@gmail.com', NULL, 'Rumuolumeni', 12, 1, '2018-12-28 13:08:30', '2018-12-28 13:08:30'),
(22, 41, 'Team Team', '08198767654', 'Nigeria', 'team@gmail.com', 'public/images/5lA7YQlaCkFgRIjU4SLMIN5KMlyEH6SMcJu65c3r.jpeg', 'Port harcourt, Rivers state, Nigeria, Africa', NULL, 2, '2019-01-23 17:51:55', '2019-02-05 14:44:37'),
(23, 48, 'Rischoola Rischoola', '8145655830', 'Nigeria', 'rischoozla@gmail.com', NULL, NULL, NULL, 2, '2019-01-25 11:42:41', '2019-01-25 11:42:41');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` int(11) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_id` int(11) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `state`, `email`, `role`, `email_verified_at`, `password`, `type`, `status_id`, `remember_token`, `token`, `created_at`, `updated_at`) VALUES
(1, 'Norwood Ferry', '+8628905476595', 'Massachusetts', 'wyman.carmella@example.org', 4, '2018-11-28 22:10:49', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'player', NULL, 'J3w1A0aCU3', '', '2018-11-28 22:10:49', '2018-11-28 22:10:49'),
(2, 'Miss Hulda Huels III', '+1022041669501', 'Alaska', 'okris@example.com', 4, '2018-11-28 22:10:49', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'admin', NULL, 'dRFiR4wJpK', '', '2018-11-28 22:10:49', '2018-11-28 22:10:49'),
(3, 'Genesis Bayer', '+1596087474896', 'Kansas', 'wwintheiser@example.org', 3, '2018-11-28 22:10:49', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'player', NULL, '7r8JsoiNgA', '', '2018-11-28 22:10:49', '2018-11-28 22:10:49'),
(4, 'Dr. Janae Upton', '+5079604656967', 'Massachusetts', 'christop.schimmel@example.com', 4, '2018-11-28 22:10:49', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'admin', NULL, 'PNxUBwf3yG', '', '2018-11-28 22:10:49', '2018-11-28 22:10:49'),
(5, 'Marlee Waters', '+8195778916449', 'Hawaii', 'christine.walsh@example.com', 1, '2018-11-28 22:10:49', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'player', NULL, 'TaWGopj44N', '', '2018-11-28 22:10:49', '2018-11-28 22:10:49'),
(6, 'Geraldine McClure', '+5030828261128', 'Wisconsin', 'cristina.haley@example.org', 3, '2018-11-28 22:10:49', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'scout', NULL, 'uvoUgoxw1E', '', '2018-11-28 22:10:49', '2018-11-28 22:10:49'),
(7, 'Lula Schaefer', '+1640359737521', 'New York', 'princess56@example.org', 2, '2018-11-28 22:10:49', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'admin', NULL, 'uGuaZAZExY', '', '2018-11-28 22:10:49', '2018-11-28 22:10:49'),
(8, 'Jayce Cummings MD', '+2240352867900', 'District of Columbia', 'barrows.daniella@example.org', 1, '2018-11-28 22:10:49', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'team', NULL, 'zqqTcXCnIa', '', '2018-11-28 22:10:49', '2018-11-28 22:10:49'),
(9, 'Teagan Blick', '+3373110763137', 'Idaho', 'kerluke.joshuah@example.org', 4, '2018-11-28 22:10:49', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'player', NULL, 'hWhoBV12iF', '', '2018-11-28 22:10:49', '2018-11-28 22:10:49'),
(10, 'Mrs. Zola Prosacco Sr.', '+4374162922510', 'Minnesota', 'raoul53@example.org', 1, '2018-11-28 22:10:49', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'academic', NULL, 'Rp4ln3awAq', '', '2018-11-28 22:10:50', '2018-11-28 22:10:50'),
(11, 'Pascale Daniel Sr.', '+9133365033225', 'Illinois', 'gschroeder@example.org', 4, '2018-11-28 22:10:49', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'admin', NULL, 'hEdPB29HWi', '', '2018-11-28 22:10:50', '2018-11-28 22:10:50'),
(12, 'Dejah Wisozk', '+9984291246917', 'Colorado', 'ebba.kreiger@example.net', 3, '2018-11-28 22:10:49', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'team', NULL, 'r34HYkiSH6', '', '2018-11-28 22:10:50', '2018-11-28 22:10:50'),
(13, 'Bart Schultz DVM', '+5337509869391', 'Illinois', 'metz.alison@example.com', 2, '2018-11-28 22:10:49', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'player', NULL, 'wEucc4IkxO', '', '2018-11-28 22:10:50', '2018-11-28 22:10:50'),
(14, 'Erwin Fadel', '+3312240418141', 'South Carolina', 'gabrielle.keeling@example.com', 1, '2018-11-28 22:10:49', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'player', NULL, 'Fx0bRHryjM', '', '2018-11-28 22:10:50', '2018-11-28 22:10:50'),
(15, 'Waldo Yost II', '+2378239393305', 'Arkansas', 'fquitzon@example.org', 2, '2018-11-28 22:10:49', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'team', NULL, 'id3mmr5BYV', '', '2018-11-28 22:10:50', '2018-11-28 22:10:50'),
(16, 'Prof. Pamela Quigley MD', '+9089073267405', 'Georgia', 'rahul12@example.org', 4, '2018-11-28 22:10:49', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'player', NULL, 'mZEb2fKNVf', '', '2018-11-28 22:10:50', '2018-11-28 22:10:50'),
(17, 'Ms. Ottilie Kuhlman DVM', '+7835956571008', 'North Carolina', 'mann.cassie@example.com', 2, '2018-11-28 22:10:49', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'scout', NULL, 'Qg6Mw2pugH', '', '2018-11-28 22:10:50', '2018-11-28 22:10:50'),
(18, 'Ola Bartell III', '+3186727002801', 'Iowa', 'qhessel@example.com', 4, '2018-11-28 22:10:49', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'scout', NULL, '4QOrOh0oir', '', '2018-11-28 22:10:50', '2018-11-28 22:10:50'),
(19, 'Dr. Alejandra Kemmer I', '+4593304095718', 'Colorado', 'kunze.jarrett@example.net', 2, '2018-11-28 22:10:49', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'academic', NULL, 'iifZkBoGAq', '', '2018-11-28 22:10:50', '2018-11-28 22:10:50'),
(20, 'Leilani Mayert', '+6055147311407', 'New Mexico', 'otto.romaguera@example.net', 2, '2018-11-28 22:10:49', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'scout', NULL, 'ZKnTmys5AM', '', '2018-11-28 22:10:50', '2018-11-28 22:10:50'),
(21, 'Rischoola Rischoola', '8145655830', 'Nigeria', 'rischoola@gmail.com', 7, NULL, '$2y$10$M7LJk0LwAzrstnn3XVI6IeDPz/QqG0f8GWEl2e5hyv6zqLI5vbIyu', NULL, NULL, 'm9TSaUjZSM6tP9x9mOHlQTaa94mF0PRPs4jDQEMz7aDB4FdDWSTINOTcZC6I', '', '2019-01-13 12:02:06', '2019-01-13 12:02:06'),
(22, 'Solomon Eseme', '8145655830', 'Nigeria', 'Solomoneseme@gmail.com', 9, NULL, '$2y$10$fo6g2zlu5e8ONt8ukC76fuGvlTNGTdUq8FQc4abTsH72D1grxm8Ve', NULL, NULL, 'Z3HlHfUgfUog7oWKmrp9K0sXMKTRv6dH3FRqQtg8BwcI1Bq9h8q9YwdK8fFj', '', '2019-01-13 12:34:58', '2019-01-13 12:34:58'),
(23, 'Solomon', '08145655830', 'Nigeria', 'rischool@gmail.com', 5, NULL, '$2y$10$tWsADrnfdYK5i1IO8/tw1e5e.rvR8YQGSkkaA2XynjjMc0ixSJ8Um', NULL, NULL, NULL, '', '2019-01-14 17:09:34', '2019-01-14 17:09:34'),
(24, 'Solomon Eseme', '8145655830', 'Nigeria', 'Solomoneseme444@gmail.com', 8, NULL, 'kjnjskn', NULL, NULL, NULL, '', '2019-01-14 20:51:40', '2019-01-14 20:51:40'),
(25, 'Solomon Eseme James', '8145655830', 'Rivers State', 'Solomonesemecccccc@gmail.com', 8, NULL, '$2y$10$vjFuKrM7tNrq8piERqTBWe.yFRvy9yzPSTHsemUrtOFr/bcISF4Mm', NULL, NULL, NULL, '', '2019-01-14 21:35:41', '2019-01-14 21:35:41'),
(26, 'Prof. Ceasar Walker UPDATED', '8145655830', 'Rivers State', 'rischoolavv@gmail.com', 8, NULL, '$2y$10$tT8MD1GjQTjJkDuE8sGGq.GCQaHcXxriyp2lsfO3XtWXD8/Yxl8ke', NULL, NULL, NULL, '', '2019-01-14 21:49:43', '2019-01-14 21:49:43'),
(27, 'Guacho', '81456558305', 'Rivers State', 'guacho@gmail.com', 8, NULL, '$2y$10$HCVLbrm/EiT1F5QeFUSkI.4SzjdYmEFDl7kgTdtoGTodfxT6hS1lm', NULL, NULL, NULL, '', '2019-01-14 22:02:37', '2019-01-14 22:02:37'),
(28, 'Paul James', '09091234567', 'Nigeria', 'pualjames@gmail.com', 8, NULL, '$2y$10$qmc/KDHJgIRZVsOphxBFfOfqT96tSDAo0qdHzw2LyXgeJgHoYrQqm', NULL, 1, 'r0CjcQUNcqiJ4kvsZQyeZgxgLSqw8ugWfYh5qwOmOrwY22iARRPl4tpEJOlE', '', '2019-01-16 19:35:38', '2019-01-16 19:35:38'),
(29, 'Chidera Amadi', '08145655830', 'Nigeria', 'chidera@gmail.com', 5, NULL, '$2y$10$6Br9h.4KN.o9mESs3JAfoOfHji0RITRexjpnOaWQNmmJSlMcTxy6G', NULL, NULL, NULL, '', '2019-01-22 08:33:52', '2019-01-22 08:33:52'),
(30, 'tester tester', '8145655830', 'Nigeria', 'tester@gmail.com', 8, NULL, '$2y$10$ZcqZDMiVRgDuyHT7YZV1ge962nEsJ2bOmQU3GzSbR3VJ3FjrxcdKa', NULL, 2, NULL, '', '2019-01-22 08:39:21', '2019-01-22 08:39:21'),
(31, 'Testing', '08198766543', 'Nigeria', 'testing@gmail.com', 5, NULL, '$2y$10$vNwtz8yTzl3V9t1mOeRgjeXgF3XDfHOq.zvmR8xsSB3FVc513/.zW', NULL, NULL, NULL, '', '2019-01-22 09:02:25', '2019-01-22 09:02:25'),
(32, 'Testingagain', '8145655830', 'Nigeria', 'testingagain@gmail.com', 6, NULL, '$2y$10$cEOVFxMTb3gYHhjvJC4FZuRjkGK6uQnc9lvXa2HdjTtIR92SBvANi', NULL, NULL, NULL, '', '2019-01-22 09:06:26', '2019-01-22 09:06:26'),
(33, 'Junior paul', '08145655830', 'Nigeria', 'junior@gmail.com', 8, NULL, '$2y$10$dnDXvj/f/wUzKimRH97EZevHNSqn5MZdynZcWP2hAoKQ2fP9CZXzy', NULL, NULL, NULL, '', '2019-01-22 10:51:56', '2019-01-22 10:51:56'),
(34, 'Solomon Eseme', '8145655830', 'Nigeria', 'Solomonese@gmail.com', 8, NULL, '$2y$10$tpPD3/6JrIYIOT0oEhyyHenPtT9n/QP2Q5xL4F9ktKKylqGAqYyHO', NULL, NULL, NULL, '', '2019-01-22 10:58:46', '2019-01-22 10:58:46'),
(35, 'Rischoola Rischoola', '8145655830', 'Nigeria', 'Solomon@gmail.com', 8, NULL, '$2y$10$1xLf4ZsbiI8cOGHnCyBB0.BT6.3JoWsG790UnwVX/rOqr8t3LPOFi', NULL, 2, NULL, '', '2019-01-22 11:00:56', '2019-01-22 11:00:56'),
(36, 'Rischoola Rischoola', '8145655830', 'Nigeria', 'ris@gmail.com', 8, NULL, '$2y$10$GbeJYOLC40SE9ifRCuph5O6OzEkF0BjiFjCx980LWcixwsSsfZquC', NULL, 2, NULL, '', '2019-01-22 11:03:13', '2019-01-22 11:03:13'),
(41, 'Team Team', '08198767654', 'Nigeria', 'team@gmail.com', 6, NULL, '$2y$10$MmW.3iEgBmexMB5o/Fe/MOTwkucVCzN214xVTIm7VKkT32ifgJsJu', NULL, 2, 'sJctNlQihK3g3LQQ4WjQ3glOThq7onhaHPYchczkOvaYTDsYAQiuuTTeefGG', '', '2019-01-23 17:51:55', '2019-01-23 17:51:55'),
(42, 'Academic', '08145655830', 'Nigeria', 'academic@gmail.com', 5, NULL, '$2y$10$lraDWibJRRlR8/0LlH6jMuoVv3YWK62gk6bnwwOHLcwz1LlQGI5ee', NULL, 2, 'UXJi71vQqVW7wOlCxa5crdtquQB6ceCemExtcE5L7fCkmCAcoV5O7YaXJbs6', '', '2019-01-24 04:43:02', '2019-01-24 04:43:02'),
(46, 'kaperskyguru', '08145655830', 'Nigeria', 'kaperskyguru@gmail.com', 8, NULL, '$2y$10$h4rehCK1ixuMjGYXzIgnFuUJMc2.13UhKlArfq2sT8uw2ZL7pubCa', NULL, 2, NULL, 'RjRfyaf3E6eALdJs5m71QgonXVxJUjbWNqK4PpQD1548419514', '2019-01-25 11:31:54', '2019-01-25 11:31:54'),
(47, 'Rischoola Rischoola', '8145655830', 'Nigeria', 'rischoolsa@gmail.com', 8, NULL, '$2y$10$xmVvKgHslMDD0NKBgw1jXOKIhv2YruQ3R73l26N3/fONTKtxO6C0.', NULL, 2, NULL, 'PBkIRXRBWETXLvU0oCWqiUatF1b0s4ea8xxLL7lr1548419861', '2019-01-25 11:37:41', '2019-01-25 11:37:41'),
(48, 'Rischoola Rischoola', '8145655830', 'Nigeria', 'rischoozla@gmail.com', 6, NULL, '$2y$10$HWnrsImRJ2YRIagrOp/96uc1xjy6cJ.6ygx7o3/AoDakJfJ9ULuoK', NULL, 2, NULL, 'oQXnH4i6c73EoCwX1SLyTpLTVrQMinqciwmZYP971548420160', '2019-01-25 11:42:40', '2019-01-25 11:42:40'),
(49, 'Solomon Eseme', '8145655830', 'Nigeria', 'Solomonesemwe@gmail.com', 8, NULL, '$2y$10$PPNOl3MnvDmZyTfWLmMwZu3dqFIqIYlaB/d0xEPFcAoTZsK1Vc7cS', NULL, 2, NULL, '0WiyM5wK6F2iKgtTCzFy4t3OYh0YiF8ah6fkWRyn1548421117', '2019-01-25 11:58:37', '2019-01-25 11:58:37'),
(50, 'Rischoola Rischoola', '8145655830', 'Nigeria', 'rischoolxa@gmail.com', 8, NULL, '$2y$10$aUT4IWHJtzBkQblPV72xEO1qH.g/1puyZ4s8hMNVo2eNFhrJDyYi2', NULL, 2, NULL, NULL, '2019-01-25 12:05:24', '2019-01-25 12:05:24'),
(51, 'Rischoola Rischoola', '8145655830', 'Nigeria', 'rischoolaw@gmail.com', 8, '2019-01-25 12:26:41', '$2y$10$BBdoKZp3ir70KMzxJzokDebMvsiYg0v63cz6YQ6GuT3TJUN2yd3Qa', NULL, 2, 'CBeAtfy9biayGH31BoSxUgg84bhi3ygNdMBFNwSAkVscS2kXuKSUPKspwS7y', NULL, '2019-01-25 12:09:52', '2019-02-02 13:54:16'),
(52, 'Solomon Eseme', '8145655830', 'Nigeria', 'rischo0ola@gmail.com', 8, NULL, '$2y$10$Gez4d5y6vVxAJG2ctkkypOTFTbBN/UlKurBGKkeW9GkejZhaJILwm', NULL, 2, NULL, NULL, '2019-01-25 13:01:20', '2019-01-25 13:01:20'),
(53, 'Rischoola Rischoola', '8145655830', 'Nigeria', 'rischo90ola@gmail.com', 8, NULL, '$2y$10$euVsS3CRphKYgr7ElDboKOdsbh/uKUqv8e3J9clBt.eyAHmZ8ydWS', NULL, 2, NULL, NULL, '2019-01-25 13:02:13', '2019-01-25 13:02:13'),
(54, 'Rischoola Rischoola', '8145655830', 'Nigeria', 'rischo960ola@gmail.com', 8, NULL, '$2y$10$bKB9Js0vyf1b7BhAIHepDOkabRr.8uuEfGWuJiQGuLV.xzb2J9XNO', NULL, 1, NULL, NULL, '2019-01-25 13:03:17', '2019-01-25 13:03:17'),
(55, 'Scout Scout', '08145655830', 'Nigeria', 'scout@gmail.com', 7, NULL, '$2y$10$XJUKJSCa301SYbuxM8JKguAVOEnzzYCkRjFTsuVVfVH3Cs./emjz6', NULL, 1, 'qIo2VLwFIZ0KWHrTIo6ybf3fuKpHiPRgnF8qDbXlpsHgbZqw6iSMq1HhvBJk', NULL, '2019-02-04 11:18:44', '2019-02-04 11:18:44'),
(56, 'player player', '08145655830', 'Nigeria', 'player@gmail.com', 8, '2019-02-05 14:49:42', '$2y$10$JuAoue2.Ez2JMnfm/W7w6uzkCJg6bR2UC2FjNzX5JPNc.7LqtcHwO', NULL, 1, NULL, NULL, '2019-02-05 14:47:43', '2019-02-05 14:49:42'),
(57, 'Test Player', '08145655830', 'Rivers State', 'testplayer@gmail.com', 8, NULL, '$2y$10$TiuMuBOE4sRlHneJQIdJHeeO5HGhZ9gIXwkxNepJNqJj6543.kvvq', 'player', 1, NULL, NULL, '2019-02-05 20:40:46', '2019-02-05 20:40:46');

-- --------------------------------------------------------

--
-- Table structure for table `verifications`
--

CREATE TABLE `verifications` (
  `id` int(10) UNSIGNED NOT NULL,
  `verification_user_id` int(11) NOT NULL,
  `verification_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `verification_firstfile_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `verification_secondfile_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `verification_state_id` int(11) NOT NULL DEFAULT '11',
  `verification_ID_type` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `verification_ID_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `verification_package` int(11) DEFAULT NULL,
  `verification_status_id` int(11) NOT NULL DEFAULT '10',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `verifications`
--

INSERT INTO `verifications` (`id`, `verification_user_id`, `verification_type`, `verification_firstfile_id`, `verification_secondfile_id`, `verification_state_id`, `verification_ID_type`, `verification_ID_number`, `verification_package`, `verification_status_id`, `created_at`, `updated_at`) VALUES
(1, 15, 'team', '2', '10', 4, '', '', NULL, 10, '2018-11-28 22:10:55', '2018-11-28 22:10:55'),
(2, 10, 'team', '10', '17', 4, '', '', NULL, 10, '2018-11-28 22:10:55', '2018-11-28 22:10:55'),
(3, 13, 'player', '13', '15', 2, '', '', NULL, 11, '2018-11-28 22:10:56', '2018-11-28 22:10:56'),
(4, 5, 'scout', '20', '9', 3, '', '', NULL, 10, '2018-11-28 22:10:56', '2018-11-28 22:10:56'),
(5, 14, 'player', '2', '13', 2, '', '', NULL, 11, '2018-11-28 22:10:56', '2018-11-28 22:10:56'),
(6, 2, 'scout', '11', '14', 2, '', '', NULL, 11, '2018-11-28 22:10:56', '2018-11-28 22:10:56'),
(7, 17, 'team', '14', '5', 3, '', '', NULL, 10, '2018-11-28 22:10:56', '2018-11-28 22:10:56'),
(8, 5, 'player', '18', '4', 4, '', '', NULL, 10, '2018-11-28 22:10:56', '2018-11-28 22:10:56'),
(9, 10, 'player', '9', '12', 4, '', '', NULL, 10, '2018-11-28 22:10:56', '2018-11-28 22:10:56'),
(10, 14, 'player', '2', '16', 2, '', '', NULL, 11, '2018-11-28 22:10:56', '2018-11-28 22:10:56'),
(11, 14, 'scout', '14', '10', 2, '', '', NULL, 11, '2018-11-28 22:10:56', '2018-11-28 22:10:56'),
(12, 3, 'scout', '17', '1', 3, '', '', NULL, 10, '2018-11-28 22:10:56', '2018-11-28 22:10:56'),
(13, 12, 'team', '18', '1', 4, '', '', NULL, 10, '2018-11-28 22:10:56', '2018-11-28 22:10:56'),
(14, 15, 'team', '3', '20', 4, '', '', NULL, 10, '2018-11-28 22:10:56', '2018-11-28 22:10:56'),
(15, 9, 'user', '14', '18', 1, '', '', NULL, 10, '2018-11-28 22:10:56', '2018-11-28 22:10:56'),
(16, 15, 'scout', '10', '20', 3, '', '', NULL, 10, '2018-11-28 22:10:56', '2018-11-28 22:10:56'),
(17, 4, 'team', '10', '9', 3, '', '', NULL, 10, '2018-11-28 22:10:56', '2018-11-28 22:10:56'),
(18, 10, 'user', '8', '19', 4, '', '', NULL, 10, '2018-11-28 22:10:56', '2018-11-28 22:10:56'),
(19, 20, 'player', '4', '8', 4, '', '', NULL, 10, '2018-11-28 22:10:56', '2018-11-28 22:10:56'),
(20, 1, 'team', '1', '4', 2, '', '', NULL, 11, '2018-11-28 22:10:56', '2018-11-28 22:10:56'),
(21, 23, 'player', 'images/sQnOYIfqCdDiNrJ5Hd8DkU02ET2EACvd8pH0CbwD.png', 'images/sQnOYIfqCdDiNrJ5Hd8DkU02ET2EACvd8pH0CbwD.png', 11, '1234567', '678', 13, 10, '2019-01-15 15:20:44', '2019-01-15 15:20:44'),
(22, 34, 'player', 'images/PP02XpAvcajU0gkS6icis92e5HBaCn3LcfLCOLmA.png', 'images/PP02XpAvcajU0gkS6icis92e5HBaCn3LcfLCOLmA.png', 11, '2345678', '70', 14, 2, '2019-01-16 20:33:40', '2019-01-16 20:33:40'),
(23, 22, 'team', 'images/NAYIxW6gR54k20txm0xOKSru1YxSHCvBJFSeBdPp.png', 'images/K9moss0swNZ66FvaEub6MVx2S2bv7IVOdETTCv8k.png', 11, '12345678', '13456789', 13, 2, '2019-01-23 21:09:29', '2019-01-23 21:09:29'),
(24, 42, 'academy', 'images/FEAKqE7NxTShNmehyVoJ0UpfQoZUUC12lfmG1X5Z.png', 'images/YzOHcmyowuzdbs0IiJqp35QggWReg682RegBpz5W.jpeg', 11, '2345678', '1234', 13, 2, '2019-01-29 17:04:02', '2019-01-29 17:04:02'),
(25, 55, 'scout', 'images/ruZxXbUQpXojucJhDMCewxZLuHzmQ7ZFTedCsNXt.png', 'images/M1Mopp7p7UCSBdgC8X6eSVKDvIC3tdGTyfXj1Giy.png', 2, '345678', '23456789', 14, 11, '2019-02-05 12:54:48', '2019-02-05 12:54:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academics`
--
ALTER TABLE `academics`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `academics_academic_email_unique` (`academic_email`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `players`
--
ALTER TABLE `players`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `players_player_email_unique` (`player_email`);

--
-- Indexes for table `scouts`
--
ALTER TABLE `scouts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `scouts_scout_email_unique` (`scout_email`);

--
-- Indexes for table `statuses`
--
ALTER TABLE `statuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `teams_email_unique` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `verifications`
--
ALTER TABLE `verifications`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `academics`
--
ALTER TABLE `academics`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `players`
--
ALTER TABLE `players`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
--
-- AUTO_INCREMENT for table `scouts`
--
ALTER TABLE `scouts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `statuses`
--
ALTER TABLE `statuses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
--
-- AUTO_INCREMENT for table `verifications`
--
ALTER TABLE `verifications`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
