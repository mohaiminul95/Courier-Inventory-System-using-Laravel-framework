-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2018 at 09:14 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `courier`
--

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` int(10) UNSIGNED NOT NULL,
  `company_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `company_name`, `owner_name`, `email`, `phone`, `company_type`, `address`, `created_at`, `updated_at`) VALUES
(1, 'Spadestack IT', 'Spadestack', 'spadestack@gmail.com', '0182329324', 'IT', 'Dhaka', '2018-11-19 20:02:46', '2018-11-21 14:51:42'),
(2, 'Gleason, Swift and Wisoky', 'Rupert Schumm', 'hbrakus@example.net', '(532) 592-7689 x9367', 'Reduced modular instructionset', '33306 Loraine Haven Apt. 988\nBlandaport, CA 08106', '2018-11-21 14:35:10', '2018-11-21 14:35:10'),
(3, 'Pollich-Ledner', 'Kayden Cartwright', 'mcglynn.jordon@example.com', '1-885-995-8914 x6159', 'Quality-focused well-modulated pricingstructure', '374 Block Parkway Suite 385\nEast Federico, WY 11928-2703', '2018-11-21 14:35:10', '2018-11-21 14:35:10'),
(4, 'Emmerich LLC', 'Geoffrey Heller I', 'josephine.walsh@example.com', '743.885.4518 x993', 'Multi-tiered modular policy', '297 Georgianna Parkways Apt. 747\nSouth Bradyton, WY 86767', '2018-11-21 14:35:10', '2018-11-21 14:35:10'),
(5, 'Homenick, Cruickshank and Howe', 'Marianne Stiedemann', 'gutkowski.spencer@example.com', '586-655-0670 x68233', 'Visionary bottom-line service-desk', '9968 Schuppe Pass\nCaylastad, NJ 70805-4960', '2018-11-21 14:35:10', '2018-11-21 14:35:10'),
(6, 'Deckow-Koss', 'Cary Connelly MD', 'meda44@example.org', '861-947-4240', 'Robust global systemengine', '7583 Howell Points\nJessechester, NV 59125-5500', '2018-11-21 14:35:10', '2018-11-21 14:35:10'),
(7, 'Wisozk-Reichel', 'Dr. Nikita Greenholt', 'kihn.ted@example.net', '261.399.3647', 'Implemented maximized conglomeration', '7272 Bins Ways\nNew Christopfurt, MO 65486', '2018-11-21 14:35:10', '2018-11-21 14:35:10'),
(8, 'Murray, Botsford and Bednar', 'Buford Wisoky', 'josie.lakin@example.com', '(815) 565-3345 x46681', 'Stand-alone non-volatile firmware', '2714 Reichert Points Apt. 632\nPort Jaquelin, ID 43997', '2018-11-21 14:35:10', '2018-11-21 14:35:10'),
(9, 'Hayes PLC', 'Dr. Jarred Murazik Jr.', 'iebert@example.org', '798-767-4534 x1772', 'Innovative bi-directional instructionset', '2412 Legros Station\nLeoraside, MS 58715-2030', '2018-11-21 14:35:10', '2018-11-21 14:35:10'),
(10, 'Skiles, Nitzsche and Corwin', 'Melyna Rath', 'frederik.kertzmann@example.com', '+1-508-443-9497', 'Synergistic global localareanetwork', '9651 Anne Pines Suite 827\nGardnerport, MS 90081', '2018-11-21 14:35:10', '2018-11-21 14:35:10'),
(11, 'Schiller LLC', 'Edd Rohan Sr.', 'twila99@example.org', '1-445-980-8053 x6666', 'Vision-oriented mission-critical encryption', '660 O\'Reilly Square\nPort Annabell, IL 51266', '2018-11-21 14:35:10', '2018-11-21 14:35:10'),
(12, 'Ankunding-Kub', 'Tito Abernathy', 'ihuel@example.com', '498-498-9508 x50356', 'Universal multi-state challenge', '829 Zboncak Village Apt. 343\nNorth Jesus, AK 63664', '2018-11-21 14:35:10', '2018-11-21 14:35:10'),
(13, 'Stroman LLC', 'Autumn Walsh', 'greta.nikolaus@example.com', '363.618.3005 x39399', 'Balanced multimedia benchmark', '9956 Vivianne Highway\nNew Brady, AL 83424', '2018-11-21 14:35:10', '2018-11-21 14:35:10'),
(14, 'Hackett and Sons', 'Freeman Will IV', 'eleanora78@example.com', '397-557-0815 x45498', 'Extended holistic product', '869 Schmeler Well Apt. 490\nHeidenreichchester, IA 53242-1666', '2018-11-21 14:35:10', '2018-11-21 14:35:10'),
(15, 'Dickinson, Farrell and Toy', 'Mr. Vance Yost', 'terry.sophie@example.com', '693.605.7675 x5403', 'Open-architected asynchronous algorithm', '13608 Dickens Junction Suite 328\nSebastianfurt, ME 52697-2496', '2018-11-21 14:35:10', '2018-11-21 14:35:10'),
(16, 'Reynolds-Krajcik', 'Christina Braun Sr.', 'ramon.mayert@example.org', '608.308.7222', 'Future-proofed tertiary algorithm', '398 Eldora Forest\nPort Kirk, DE 75135-9737', '2018-11-21 14:35:10', '2018-11-21 14:35:10'),
(17, 'Effertz Inc', 'Maudie Sipes', 'adolf51@example.com', '+1 (470) 981-1810', 'Object-based incremental encoding', '452 Winona Meadow Apt. 722\nEast Maxwellchester, NY 01538-6259', '2018-11-21 14:35:11', '2018-11-21 14:35:11'),
(18, 'McDermott-Rowe', 'Meredith Zulauf', 'ardella.fritsch@example.com', '1-553-341-0660', 'Universal didactic capability', '7177 Mario Neck Suite 598\nEast Isaias, NJ 17461', '2018-11-21 14:35:11', '2018-11-21 14:35:11'),
(19, 'Morissette Group', 'Emile Tillman', 'kreiger.jakayla@example.org', '(262) 497-2214 x66434', 'Virtual even-keeled budgetarymanagement', '6131 Katrine Knoll\nSashaberg, MN 46375-0931', '2018-11-21 14:35:11', '2018-11-21 14:35:11'),
(20, 'Quitzon-Ritchie', 'Leola Renner', 'zdavis@example.com', '1-224-295-0725 x183', 'Open-source global policy', '1345 Dietrich Circles\nYundtberg, MN 86267-7566', '2018-11-21 14:35:11', '2018-11-21 14:35:11'),
(21, 'Lang, Jerde and Hessel', 'Elvera Stokes', 'marvin99@example.com', '+1-719-683-2208', 'Re-engineered modular framework', '71139 Myron Skyway Apt. 489\nNew Princesstown, VA 68505', '2018-11-21 14:35:11', '2018-11-21 14:35:11'),
(22, 'Sipes-Padberg', 'Therese Kerluke', 'jeramie.oconner@example.net', '(328) 605-3952 x1876', 'Managed optimal hub', '5349 Ebert Road Apt. 733\nPort Keshawntown, NM 69040', '2018-11-21 14:35:11', '2018-11-21 14:35:11'),
(23, 'Lueilwitz Group', 'Miss Elinore Hansen II', 'percival.bernhard@example.net', '(551) 234-4098', 'Multi-lateral didactic definition', '5241 Leannon Orchard Apt. 538\nQuigleyhaven, AK 91309', '2018-11-21 14:35:11', '2018-11-21 14:35:11'),
(24, 'Lebsack-Franecki', 'Bill Gutkowski', 'melyna44@example.org', '745.405.5340', 'Public-key bottom-line GraphicalUserInterface', '672 Weissnat Oval Suite 771\nMorissetteview, RI 84524-7136', '2018-11-21 14:35:11', '2018-11-21 14:35:11'),
(25, 'Runolfsdottir-O\'Reilly', 'Elisa Gutmann PhD', 'augusta.king@example.net', '860-557-4189 x265', 'Future-proofed zerodefect access', '621 Griffin Turnpike\nMantemouth, TX 97312-1431', '2018-11-21 14:35:11', '2018-11-21 14:35:11'),
(26, 'Powlowski PLC', 'Coralie Koss', 'nschmidt@example.net', '1-709-562-2626 x115', 'Configurable executive product', '66597 Gerhold Spurs Apt. 172\nEast Norbertomouth, OR 21476', '2018-11-21 14:35:11', '2018-11-21 14:35:11'),
(27, 'Goldner, Beatty and Kulas', 'Jacquelyn Blanda', 'wuckert.jayne@example.net', '541.719.3951 x847', 'Re-contextualized disintermediate superstructure', '932 Raleigh Viaduct\nPort Jace, OK 73884', '2018-11-21 14:35:11', '2018-11-21 14:35:11'),
(28, 'Steuber-Hilpert', 'Kavon O\'Keefe', 'gutmann.rosalia@example.net', '(440) 944-2259 x41018', 'Fully-configurable modular securedline', '604 Ambrose Keys\nKaraton, MN 83582-8719', '2018-11-21 14:35:11', '2018-11-21 14:35:11'),
(29, 'Buckridge-Nikolaus', 'Velva Trantow', 'kutch.cassandre@example.com', '1-774-944-4052 x32572', 'Horizontal attitude-oriented flexibility', '346 Hamill Falls\nMarvinburgh, KS 22614', '2018-11-21 14:35:11', '2018-11-21 14:35:11'),
(30, 'Heathcote-Heller', 'Lucius Wehner', 'lazaro.rippin@example.com', '713.250.5694 x283', 'Enhanced 24hour attitude', '3900 Isac Hill Suite 461\nWilsonport, MT 54646', '2018-11-21 14:35:11', '2018-11-21 14:35:11'),
(31, 'Jast-Schneider', 'Solon Marquardt', 'raina.ernser@example.com', '924-222-0904 x79685', 'Organic secondary approach', '3857 Greenholt Causeway Suite 721\nNew Eino, OK 19517-5701', '2018-11-21 14:35:11', '2018-11-21 14:35:11'),
(32, 'Tromp Ltd', 'Darian Turcotte', 'gerhold.liza@example.net', '269.815.3468', 'Triple-buffered 6thgeneration neural-net', '5328 Medhurst Haven\nCharleyton, IL 01906-0186', '2018-11-21 14:35:11', '2018-11-21 14:35:11'),
(33, 'Bruen Group', 'Maximillia Simonis IV', 'florian37@example.net', '+1-710-406-4868', 'Intuitive 3rdgeneration paradigm', '268 Lehner Shore Apt. 470\nPort Kavon, ME 07493', '2018-11-21 14:35:11', '2018-11-21 14:35:11'),
(34, 'Halvorson Ltd', 'Prof. Presley Anderson V', 'nparker@example.com', '1-248-465-4597', 'Stand-alone upward-trending definition', '754 Fae Run\nWest Carrie, WI 85285-8192', '2018-11-21 14:35:11', '2018-11-21 14:35:11'),
(35, 'Hodkiewicz, Gutmann and Graham', 'Suzanne Kilback', 'hilario.gerhold@example.org', '(593) 249-5283', 'Facetoface impactful intranet', '59679 Elias Shores Apt. 262\nLake Gabriella, OH 09077-0191', '2018-11-21 14:35:11', '2018-11-21 14:35:11'),
(36, 'Witting-Bahringer', 'Prof. Verda Murray IV', 'igleason@example.com', '+1.957.230.8621', 'Multi-channelled 24/7 intranet', '612 Nathanial Mews Apt. 471\nEstefaniastad, ID 78694', '2018-11-21 14:35:11', '2018-11-21 14:35:11'),
(37, 'Cronin Inc', 'Mr. Giovani Watsica IV', 'samanta.harber@example.org', '+1 (392) 451-3610', 'Sharable optimal instructionset', '678 Thiel Estate Apt. 281\nLake Jocelyn, ND 20874-1031', '2018-11-21 14:35:11', '2018-11-21 14:35:11'),
(38, 'Hessel, Medhurst and Von', 'Naomie Green', 'bcollier@example.org', '+1.348.456.6261', 'Synergistic mission-critical leverage', '995 Cole Key Suite 818\nKubbury, LA 83803-2657', '2018-11-21 14:35:11', '2018-11-21 14:35:11'),
(39, 'Mitchell-Wisoky', 'Ernestine Cole', 'hallie88@example.org', '+1-619-608-0995', 'User-centric neutral moderator', '39837 Heaney Lights\nPort Ronmouth, CA 35402-2189', '2018-11-21 14:35:11', '2018-11-21 14:35:11'),
(40, 'Stiedemann PLC', 'Dr. Edwardo Gerlach', 'franecki.jerad@example.net', '961-917-2371', 'Pre-emptive solution-oriented encoding', '3056 Kaden Corners Suite 434\nChristiansenshire, MO 19610-4869', '2018-11-21 14:35:11', '2018-11-21 14:35:11'),
(41, 'Trantow-Bednar', 'Heidi Muller', 'piper.dare@example.net', '(240) 855-2252', 'Advanced actuating hierarchy', '49875 Oda Mills Suite 444\nNew Sallie, TN 59141', '2018-11-21 14:35:11', '2018-11-21 14:35:11'),
(42, 'Grimes-Borer', 'Dr. Aimee Gusikowski', 'shields.caleb@example.net', '+1 (938) 297-1275', 'Cross-platform fresh-thinking extranet', '19337 Zboncak Lane Apt. 143\nBethberg, DE 28614', '2018-11-21 14:35:11', '2018-11-21 14:35:11'),
(43, 'Schiller Ltd', 'Mrs. Elvera Jacobson', 'jweber@example.org', '(842) 685-2833 x2190', 'Realigned upward-trending parallelism', '87384 Abelardo Pike Apt. 264\nPort Garret, PA 03437-1579', '2018-11-21 14:35:11', '2018-11-21 14:35:11'),
(44, 'Bartoletti Group', 'Destin Robel', 'ernesto.walsh@example.org', '1-302-774-4940 x98588', 'Total even-keeled orchestration', '3666 Lubowitz Prairie Apt. 085\nSouth Javon, WI 21747', '2018-11-21 14:35:11', '2018-11-21 14:35:11'),
(45, 'Botsford, Quigley and Maggio', 'Mohamed Leuschke', 'collier.johann@example.org', '(536) 623-4093 x21443', 'Innovative bi-directional opensystem', '58892 Frami Fall Suite 484\nSouth Arlenefurt, MD 04176-2642', '2018-11-21 14:35:11', '2018-11-21 14:35:11'),
(46, 'Stamm LLC', 'Alene Streich', 'anabel.dietrich@example.net', '+19655417609', 'Multi-lateral maximized protocol', '79043 Audra Circles Apt. 835\nNew Angelastad, WY 43029-1644', '2018-11-21 14:35:11', '2018-11-21 14:35:11'),
(47, 'Schultz-Grimes', 'Gwendolyn Kris', 'ktrantow@example.com', '324.968.9282', 'Digitized holistic circuit', '54198 Hoppe Well Suite 600\nNew Helgamouth, IA 19200', '2018-11-21 14:35:11', '2018-11-21 14:35:11'),
(48, 'Nikolaus-Corkery', 'May Koelpin Jr.', 'hansen.abigail@example.org', '886.349.3847', 'Proactive scalable synergy', '91901 Christiansen Course Suite 632\nRolandostad, CA 17031-5314', '2018-11-21 14:35:11', '2018-11-21 14:35:11'),
(49, 'Heidenreich and Sons', 'Prof. Hayden Schuppe', 'hahn.toby@example.org', '437.880.5349', 'Managed logistical initiative', '653 Crona Pines\nNorth Marcus, CO 01425-7294', '2018-11-21 14:35:11', '2018-11-21 14:35:11'),
(50, 'Crist Group', 'Dr. Margarita Kassulke MD', 'bernhard.zackary@example.org', '445.543.3791', 'Synchronised foreground array', '2162 Jacobi Summit\nPort Cullenfort, LA 82985', '2018-11-21 14:35:12', '2018-11-21 14:35:12'),
(51, 'Corkery-Lemke', 'Mr. Larry Hammes V', 'kirlin.eunice@example.net', '717.334.7231 x004', 'Function-based non-volatile knowledgeuser', '2570 Sauer Stravenue Suite 631\nMollymouth, WV 03083-9444', '2018-11-21 14:35:12', '2018-11-21 14:35:12');

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
(12, '2014_10_12_000000_create_users_table', 1),
(13, '2014_10_12_100000_create_password_resets_table', 1),
(14, '2018_10_26_235155_create_companies_table', 1),
(15, '2018_10_27_154246_create_orders_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `agent_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parcel_desc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `weight` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `booking_amount` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_processed` enum('yes','no') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `processing_amount` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `net_profit` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `processing_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_id`, `agent_id`, `order_date`, `parcel_desc`, `weight`, `booking_amount`, `is_processed`, `processing_amount`, `net_profit`, `processing_date`, `created_at`, `updated_at`) VALUES
(1, '233', '1', '2018-11-22', 'NA', '1234', '3000', NULL, NULL, NULL, NULL, '2018-11-19 20:07:25', '2018-11-19 20:07:25'),
(2, NULL, '39', '1982-11-23', 'Ullam reiciendis vel sit.', '4285', '7995', 'no', NULL, NULL, NULL, '2018-11-21 23:43:25', '2018-11-21 23:43:25'),
(3, NULL, '32', '2014-12-20', 'Non et voluptates quidem adipisci ad et nemo.', '2720', '962', 'no', NULL, NULL, NULL, '2018-11-21 23:43:25', '2018-11-21 23:43:25'),
(4, NULL, '12', '2001-04-21', 'Iusto magni in minus est.', '1705', '8279', 'yes', NULL, NULL, NULL, '2018-11-21 23:43:25', '2018-11-21 23:43:25'),
(5, NULL, '33', '1973-10-16', 'Aspernatur amet dolorum ab iusto dicta.', '4267', '679', 'no', NULL, NULL, NULL, '2018-11-21 23:43:25', '2018-11-21 23:43:25'),
(6, NULL, '27', '1982-12-21', 'Deserunt ex non laborum nobis qui nostrum.', '2172', '9764', 'yes', NULL, NULL, NULL, '2018-11-21 23:43:25', '2018-11-21 23:43:25'),
(7, NULL, '1', '2008-01-13', 'Animi accusantium eveniet aliquid ut maxime reiciendis sapiente.', '1935', '8960', 'no', NULL, NULL, NULL, '2018-11-21 23:43:25', '2018-11-21 23:43:25'),
(8, NULL, '45', '1988-09-25', 'Reiciendis cumque et et minima nemo voluptatem et.', '2447', '5714', 'no', NULL, NULL, NULL, '2018-11-21 23:43:25', '2018-11-21 23:43:25'),
(9, NULL, '34', '1988-11-02', 'Quia eos aut quos ab quis qui et.', '4402', '8852', 'yes', NULL, NULL, NULL, '2018-11-21 23:43:25', '2018-11-21 23:43:25'),
(10, NULL, '2', '2001-06-29', 'Velit enim aut dolorem illo in quam dicta.', '1623', '1672', 'no', NULL, NULL, NULL, '2018-11-21 23:43:25', '2018-11-21 23:43:25'),
(11, NULL, '8', '1970-03-30', 'Sit deserunt animi quisquam rem ullam.', '1827', '5116', 'yes', NULL, NULL, NULL, '2018-11-21 23:43:25', '2018-11-21 23:43:25'),
(12, NULL, '10', '1993-11-03', 'Nihil non dolor porro quisquam consequatur ea eum.', '3102', '6951', 'no', NULL, NULL, NULL, '2018-11-21 23:43:25', '2018-11-21 23:43:25'),
(13, NULL, '26', '1983-07-08', 'Voluptatem voluptatum iste occaecati ea omnis omnis.', '1483', '4165', 'yes', NULL, NULL, NULL, '2018-11-21 23:43:26', '2018-11-21 23:43:26'),
(14, NULL, '11', '2004-09-20', 'Adipisci aspernatur dolorum maxime et id illo voluptatibus.', '1568', '2364', 'no', NULL, NULL, NULL, '2018-11-21 23:43:26', '2018-11-21 23:43:26'),
(15, NULL, '30', '1996-01-06', 'Esse est eos cupiditate veritatis.', '3654', '731', 'no', NULL, NULL, NULL, '2018-11-21 23:43:26', '2018-11-21 23:43:26'),
(16, NULL, '28', '2009-04-20', 'Et molestiae excepturi cupiditate consequatur quia maxime sunt.', '2733', '4415', 'no', NULL, NULL, NULL, '2018-11-21 23:43:26', '2018-11-21 23:43:26'),
(17, NULL, '21', '1991-12-08', 'Aut repellat voluptate neque quia tenetur ea eos et.', '4373', '2819', 'no', NULL, NULL, NULL, '2018-11-21 23:43:26', '2018-11-21 23:43:26'),
(18, NULL, '49', '1993-04-17', 'Doloribus voluptatem necessitatibus corporis facilis mollitia optio.', '3118', '6395', 'no', NULL, NULL, NULL, '2018-11-21 23:43:26', '2018-11-21 23:43:26'),
(19, NULL, '41', '1999-10-10', 'Laudantium harum sint vero a sed laborum.', '4151', '9483', 'no', NULL, NULL, NULL, '2018-11-21 23:43:26', '2018-11-21 23:43:26'),
(20, NULL, '22', '1988-07-03', 'Vel dolores mollitia corrupti.', '3548', '7973', 'yes', NULL, NULL, NULL, '2018-11-21 23:43:26', '2018-11-21 23:43:26'),
(21, NULL, '13', '1982-10-24', 'Aperiam voluptas debitis autem libero aliquam.', '4148', '4460', 'yes', NULL, NULL, NULL, '2018-11-21 23:43:26', '2018-11-21 23:43:26'),
(22, NULL, '43', '2016-09-10', 'Ut voluptas voluptate sed a non.', '2491', '1019', 'yes', NULL, NULL, NULL, '2018-11-21 23:43:26', '2018-11-21 23:43:26'),
(23, NULL, '4', '1993-11-19', 'Placeat facilis dolorem consequatur deleniti rerum nulla architecto.', '3864', '1052', 'no', NULL, NULL, NULL, '2018-11-21 23:43:26', '2018-11-21 23:43:26'),
(24, NULL, '29', '1994-10-13', 'Doloremque nesciunt ipsum unde quia consequatur.', '2913', '3388', 'no', NULL, NULL, NULL, '2018-11-21 23:43:26', '2018-11-21 23:43:26'),
(25, NULL, '17', '1984-10-08', 'Eveniet labore qui est quia corrupti minus iure maiores.', '4523', '7519', 'yes', NULL, NULL, NULL, '2018-11-21 23:43:26', '2018-11-21 23:43:26'),
(26, NULL, '16', '1992-01-09', 'Blanditiis laudantium expedita quia ex eaque.', '4389', '2804', 'no', NULL, NULL, NULL, '2018-11-21 23:43:26', '2018-11-21 23:43:26'),
(27, NULL, '31', '1970-01-15', 'Aut consequatur vel et nihil qui molestias autem.', '3228', '8963', 'yes', NULL, NULL, NULL, '2018-11-21 23:43:26', '2018-11-21 23:43:26'),
(28, NULL, '25', '1996-02-09', 'Itaque officiis quidem molestiae deleniti sit excepturi.', '4364', '2507', 'yes', NULL, NULL, NULL, '2018-11-21 23:43:26', '2018-11-21 23:43:26'),
(29, NULL, '37', '1997-07-28', 'Recusandae tenetur ducimus vel architecto quod ea repellat.', '3979', '9150', 'yes', NULL, NULL, NULL, '2018-11-21 23:43:26', '2018-11-21 23:43:26'),
(30, NULL, '35', '1995-04-16', 'Ut sed sunt eos ut reiciendis.', '1296', '5414', 'no', NULL, NULL, NULL, '2018-11-21 23:43:26', '2018-11-21 23:43:26'),
(31, NULL, '9', '1983-04-18', 'Eum suscipit sed molestiae earum.', '2766', '3835', 'no', NULL, NULL, NULL, '2018-11-21 23:43:26', '2018-11-21 23:43:26'),
(32, NULL, '15', '2014-03-04', 'Quod occaecati totam rem.', '4622', '8735', 'yes', NULL, NULL, NULL, '2018-11-21 23:43:26', '2018-11-21 23:43:26'),
(33, NULL, '23', '1988-01-07', 'Sit sed recusandae quasi officiis adipisci.', '4760', '1669', 'yes', NULL, NULL, NULL, '2018-11-21 23:43:26', '2018-11-21 23:43:26'),
(34, NULL, '38', '2005-05-24', 'Dolores et aperiam quia possimus in accusantium.', '2777', '6010', 'no', NULL, NULL, NULL, '2018-11-21 23:43:26', '2018-11-21 23:43:26'),
(35, NULL, '47', '1971-07-23', 'Fuga sed nobis quia ipsum voluptatem ut distinctio.', '4995', '8471', 'yes', NULL, NULL, NULL, '2018-11-21 23:43:26', '2018-11-21 23:43:26'),
(36, NULL, '44', '2015-08-20', 'Omnis eum aut quo et consequatur.', '4029', '9609', 'yes', NULL, NULL, NULL, '2018-11-21 23:43:26', '2018-11-21 23:43:26'),
(37, NULL, '40', '1994-03-01', 'Placeat ullam accusamus et.', '2729', '6246', 'yes', NULL, NULL, NULL, '2018-11-21 23:43:26', '2018-11-21 23:43:26'),
(38, NULL, '36', '1988-04-30', 'Qui eaque ut omnis quo rerum vel.', '3099', '9917', 'no', NULL, NULL, NULL, '2018-11-21 23:43:26', '2018-11-21 23:43:26'),
(39, NULL, '42', '2007-12-31', 'Ut placeat quam rerum delectus ipsa.', '4061', '6952', 'no', NULL, NULL, NULL, '2018-11-21 23:43:26', '2018-11-21 23:43:26'),
(40, NULL, '14', '1978-07-01', 'Enim possimus est ratione est enim occaecati eligendi ea.', '3517', '949', 'no', NULL, NULL, NULL, '2018-11-21 23:43:26', '2018-11-21 23:43:26'),
(41, NULL, '5', '2014-09-20', 'Numquam voluptatem sed magnam et exercitationem et architecto.', '4462', '2012', 'no', NULL, NULL, NULL, '2018-11-21 23:43:26', '2018-11-21 23:43:26'),
(42, NULL, '24', '2011-11-02', 'Voluptatem rerum sapiente nemo non minus.', '2235', '3990', 'no', NULL, NULL, NULL, '2018-11-21 23:43:27', '2018-11-21 23:43:27'),
(43, NULL, '20', '1973-12-19', 'Maiores quo repellat quam rem laborum reprehenderit.', '1607', '5684', 'yes', NULL, NULL, NULL, '2018-11-21 23:43:27', '2018-11-21 23:43:27'),
(44, NULL, '46', '2005-12-28', 'Ut quod tenetur nostrum quisquam.', '4140', '6415', 'no', NULL, NULL, NULL, '2018-11-21 23:43:27', '2018-11-21 23:43:27'),
(45, NULL, '6', '2017-01-28', 'Quas molestias itaque voluptatem dolorem.', '2985', '4925', 'no', NULL, NULL, NULL, '2018-11-21 23:43:27', '2018-11-21 23:43:27'),
(46, NULL, '50', '1984-11-23', 'Ipsam dolores veniam consequatur qui sed quisquam.', '2130', '2312', 'yes', NULL, NULL, NULL, '2018-11-21 23:43:27', '2018-11-21 23:43:27'),
(47, NULL, '7', '1995-11-29', 'Consequatur beatae odio officia maiores.', '2620', '4729', 'yes', NULL, NULL, NULL, '2018-11-21 23:43:27', '2018-11-21 23:43:27'),
(48, NULL, '48', '2002-02-18', 'Nostrum et et laborum blanditiis laudantium sint.', '1120', '1586', 'yes', NULL, NULL, NULL, '2018-11-21 23:43:27', '2018-11-21 23:43:27'),
(49, NULL, '19', '2009-07-11', 'Accusamus quis vitae quam sed eum perspiciatis provident.', '2114', '4300', 'no', NULL, NULL, NULL, '2018-11-21 23:43:27', '2018-11-21 23:43:27'),
(50, NULL, '3', '1990-05-10', 'Blanditiis aut enim commodi cupiditate fuga ut maxime.', '2908', '4925', 'yes', NULL, NULL, NULL, '2018-11-21 23:43:27', '2018-11-21 23:43:27'),
(51, NULL, '18', '1997-11-12', 'Et placeat est vel voluptas.', '3144', '6538', 'no', NULL, NULL, NULL, '2018-11-21 23:43:27', '2018-11-21 23:43:27');

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
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
(1, 'Admin', 'admin@admin.com', NULL, '$2y$10$JOUoJrQbTlJbWYw9UBw56.AUuFHH4So.EPETb.19/0kY0uGo3WaNC', 'eRieUiWHfALKkDUAhnPOcKgeF58b3CDDDziASAV8Mqv69utS0XAVP99panz2', '2018-11-19 20:09:22', '2018-11-19 20:09:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
