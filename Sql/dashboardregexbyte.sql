-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2024 at 05:45 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dashboardregexbyte`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(10) NOT NULL,
  `title` varchar(20) NOT NULL,
  `description` varchar(40) NOT NULL,
  `user_id` int(10) NOT NULL,
  `image` varchar(250) NOT NULL,
  `timestamp` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `description`, `user_id`, `image`, `timestamp`) VALUES
(13, 'Backend', 'jskahmkjwidhakdk', 27, '1725702625_4ab1d1065d19a8004416_1.jpg', '2024-09-18'),
(14, 'UIUX', 'djssajdhwkjwkjsahdas', 27, '1725901050_744a87653bb9a4f6e112.png', '2024-09-18'),
(15, 'Frontend', 'sm mnmsndman,ams,am.', 27, 'bg_banner2_3.jpg', '2024-09-18');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `description` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `status`, `description`) VALUES
(59, 'Backend Development', '1', 'Backend Web Development Category'),
(60, 'Front End Development', '1', 'Front End Web Development Category'),
(61, 'Full Stack Web Development', '1', 'Full Stack Web Development Category.'),
(62, 'Mobile App Development', '1', 'Mobile App Development Category'),
(63, 'UI/UX Designing	', '1', 'UI/UX Designing Category');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `columns_id` int(10) NOT NULL,
  `firstName` varchar(10) NOT NULL,
  `lastName` varchar(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `message` varchar(50) NOT NULL,
  `current-timestamp` datetime(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`columns_id`, `firstName`, `lastName`, `email`, `message`, `current-timestamp`) VALUES
(3, 'Majid', 'Khan', 'm@gmail', 'We Are Satisfied about your so', '2024-09-06 14:28:03.842832'),
(5, 'm', 'ajid', 'da@123', 'kankajdknkcnsnjnkmkaskakaskjkandkaskskamsanxkankam', '2024-09-06 22:36:43.477662'),
(6, 'sdm', 'mdlmd', 'aMS@12', ',dlsdd', '2024-10-02 10:52:12.448017'),
(7, 'ADS', 'ADSDS', 'AS@DSDK1', 'SDAS', '2024-10-02 10:52:34.375176'),
(8, 'FDE22E', 'S', 'SD@F', 'SADS', '2024-10-02 10:53:00.226106'),
(9, 'MLDM', 'MSDM,S', 'ALDM@FSLDK', 'SDDSD', '2024-10-02 10:53:17.041659'),
(10, 'DSMLWMLDS', 'MADMSLS', 'ASA@SDL', 'MDLSDMSS', '2024-10-02 10:53:44.029965'),
(11, 'FDEW', 'DSF', 'SD@RSA', 'sfgfd', '2024-10-02 10:54:06.769689'),
(12, 'dsfdf', 'fdff', 'df@ew', 'dfsd', '2024-10-02 10:54:28.341230'),
(13, 'fsd', 'sfs', 'sz@12', 'fsdfd', '2024-10-02 10:54:47.671593'),
(14, 'sd', 'sdsds', 'as@12wd', 'dss', '2024-10-02 10:55:06.176488'),
(15, 'sdsa', 'sas', 'ads@12', 'adssa', '2024-10-02 10:55:36.347987'),
(16, 'ads', 'ads', 'as@2', 'fdsf', '2024-10-02 10:55:54.118471'),
(17, 'adsd', 'ads', 'ads@1213', 'nnfsnd', '2024-10-02 10:56:15.192011'),
(18, 'csdna', 'mskak', 'msa@wdskj', 'skks', '2024-10-02 10:56:40.652092'),
(19, 'skdm', 'mkskams', 'madm@wdmsld', 'salms', '2024-10-02 10:56:54.466727'),
(20, ',smd,a', 'mdw,', 'lwdw@2', 'lkadsl', '2024-10-02 10:57:16.145372'),
(21, 'smna,dm', 'mslmd', 'AM@DSL', 'LDSKDLKL', '2024-10-02 10:57:43.072817'),
(22, 'rw,m`', 'masdm,a', 'wdmsld@mdkf', 'dmsdm,', '2024-10-02 16:23:13.064171'),
(23, ' fs,f,s', 'md,md,', 'kljdk@wmfsk', 'mdskjk', '2024-10-02 16:23:30.187315'),
(24, 'dsd', 'd', 'sd@dsl', 'ds', '2024-10-02 22:32:16.921341'),
(25, 'ssds', 'dsd', 'as@dsds', 'sd', '2024-10-02 22:32:35.004522'),
(26, 'ndksdk', 'dskjds', 'mskds@fskldj', 'mskdd', '2024-10-02 22:32:47.516246'),
(27, 'dmsdnmmsk', 'mdskdejwoe', 'm@wflfkls', 'dsldklkq', '2024-10-02 22:32:59.709908'),
(28, 'nf,sjwkj', 'dsldl', 'dksldk@wdsldk', 'dsldk', '2024-10-02 22:33:12.864676'),
(29, 'dc', 'sd', 's@ds', 'mdmbdn', '2024-10-04 13:02:42.932261');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(10) NOT NULL,
  `idProject` int(10) NOT NULL,
  `image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `idProject`, `image`) VALUES
(52, 29, '1725901050_3900b14a7a855a4fcbef.jpg'),
(53, 29, '1725901050_744a87653bb9a4f6e112.png'),
(54, 29, '1725901050_437a339b6f7927ef8830.png'),
(55, 29, '1725901051_be64a0aabd7f7db4e195.png'),
(56, 30, '1728108147_e5a17da706421cb7db08.jpg'),
(57, 31, '1728108402_31edc3239dd3135e31db.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(10) NOT NULL,
  `idCategory` int(10) NOT NULL,
  `projectTitle` varchar(50) NOT NULL,
  `projectDescription` varchar(100) NOT NULL,
  `createdAt` datetime(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `idCategory`, `projectTitle`, `projectDescription`, `createdAt`) VALUES
(29, 63, 'Ui UX design', 'adaksjkaaaaadddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd', '0000-00-00 00:00:00.000000'),
(30, 61, 'Web Development', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the ', '2024-10-05 11:02:27.380254'),
(31, 62, 'Mobile App', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the ', '2024-10-05 11:06:42.854784');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `profile` varchar(250) NOT NULL,
  `id` int(10) NOT NULL,
  `title` varchar(30) NOT NULL,
  `status` varchar(10) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`profile`, `id`, `title`, `status`, `description`) VALUES
('bg_banner1.jpg', 25, 'Welcome To RegexByte', '1', 'Top Rated Software Development Company\r\n'),
('bg_banner2_3.jpg', 26, 'We Are Team Of Experts', '1', 'Top Rated Software Development Company');

-- --------------------------------------------------------

--
-- Table structure for table `user-table`
--

CREATE TABLE `user-table` (
  `id` int(11) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `phone` int(10) NOT NULL,
  `image` varchar(100) NOT NULL,
  `status` varchar(40) NOT NULL,
  `created-at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user-table`
--

INSERT INTO `user-table` (`id`, `firstname`, `lastname`, `email`, `Password`, `phone`, `image`, `status`, `created-at`) VALUES
(18, 'Majid', 'khan', 'm@gmail', '$2y$10$xbOcA2m/AgQU.bih8u0JUOV3WtYIExVXzCRLc.PLr7I3kLt0vItym', 232323, 'user.png', 'inactive', '0000-00-00 00:00:00'),
(19, 'Majid', 'khan', 'm1@gmail', '$2y$10$BijaBi3bGEiue2drIc/htOdfv9yrtnnl0vnDD.fZf4j4JPfa8tpDu', 12121212, 'user.png', 'active', '2021-12-12 00:00:00'),
(27, ',mw', 'qlldmk', 'Q@gmail', '$2y$10$4al6ioGgjzAL/jS6sgNgeOeGtBP0guL03j.et9IYVthbIpDNJk1BO', 12121212, 'RBlogo.jfif', 'active', '1221-12-12 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user_review`
--

CREATE TABLE `user_review` (
  `id` int(10) NOT NULL,
  `user` varchar(20) NOT NULL,
  `review` varchar(40) NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_review`
--

INSERT INTO `user_review` (`id`, `user`, `review`, `created_at`) VALUES
(6, 'Majid', 'mzbfbdsdmds,smd,ma,sm,ams,ams,ma,mkdnsmm', '2024-09-18'),
(7, 'mlm', ',lml,', '2024-10-02'),
(8, 'sx', 'da', '2024-10-02'),
(9, 'dsdasacd', 'ssd', '2024-10-02'),
(10, 'fgfs', ',skjf', '2024-10-02'),
(11, 'sm,m', 'mdsdm', '2024-10-02'),
(12, 'dm,dmlqdmls', 'dlskflk', '2024-10-02'),
(13, 'dsm d', 'ds,md,sm', '2024-10-02'),
(14, 'w,md,m', 'dms,md,', '2024-10-02'),
(15, 'sd,m,', 'd,smd,', '2024-10-02'),
(16, 'md,md,', 'ds,md', '2024-10-02'),
(17, 'da,m', 'd,smd,', '2024-10-02'),
(18, 'dm,m', 'md,sm', '2024-10-02'),
(19, 'aa,m,', ',am,s', '2024-10-02'),
(20, 'dmm', 'm,amd,', '2024-10-02'),
(21, ',d,m', 'm,amd', '2024-10-02'),
(22, 'd,,sm', 'ma,md,', '2024-10-02'),
(23, 'd,am', 'm,amd,m', '2024-10-02'),
(24, ',', 'asas', '2024-10-02'),
(25, 'dks', 'm,d,m', '2024-10-02'),
(26, 'ndmand', 'md,msd,m', '2024-10-02'),
(27, ' d,m,', 'm,dms,md', '2024-10-02'),
(28, 'Aamir', 'ndjsd', '2024-10-04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`columns_id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_proj_Img` (`idProject`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_IDCategory` (`idCategory`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user-table`
--
ALTER TABLE `user-table`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `user_review`
--
ALTER TABLE `user_review`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `columns_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `user-table`
--
ALTER TABLE `user-table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `user_review`
--
ALTER TABLE `user_review`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `FK_proj_Img` FOREIGN KEY (`idProject`) REFERENCES `projects` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
