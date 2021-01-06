-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2021 at 12:14 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `judulab` varchar(255) NOT NULL,
  `deskripsiab` text NOT NULL,
  `tema` varchar(255) NOT NULL,
  `gambarab` varchar(255) NOT NULL,
  `tanggal` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `judulab`, `deskripsiab`, `tema`, `gambarab`, `tanggal`) VALUES
(1, 'Antasena 2021', 'Antasena 2021 adalah kompetisi olimpiade dan seni tahunan yang diselenggarakan oleh siswa-siswi SMAU BP Amanatul Ummah, Mojokerto. dimana kompetisi ini terdiri dari 3 cabang lomba yakni islamic scout competition (ISC), festival qur\'ani dan seni islami (FIQSI), dan olimpiade sains remaja indonesia (OSIRIS). Antasena 2021 merupakan saat dimana para peserta dapat mengasah pengetahuan, ketrampilan, dan kreativitas dengan kemajuan teknologi sehingga dapat mengembangkan minat dan bakat', 'achievers of national youth, achieve dreams full of actions', 'imageab/ghsSdWvit5AMs9V9ZKxrt9BU8MaAiFdFDPQhmuDA.jpeg', '1 - 7 Maret 2021');

-- --------------------------------------------------------

--
-- Table structure for table `fiqsi`
--

CREATE TABLE `fiqsi` (
  `id` int(11) NOT NULL,
  `judulfiqsi` varchar(255) NOT NULL,
  `gambarfiqsi` varchar(255) NOT NULL,
  `deskripsifiqsi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fiqsi`
--

INSERT INTO `fiqsi` (`id`, `judulfiqsi`, `gambarfiqsi`, `deskripsifiqsi`) VALUES
(1, 'AL BANJARI', 'imagefiqsi/mrKpGCKkOtPmYU6SaNDhaUdPSyoBzxUmbQmKGMOr.png', 'AL BANJARI'),
(2, 'COVER ISLAMIC SONG', 'imagefiqsi/2JWskyjDAwCueEtoPHsbUnrbeRD2UEyqvgljE7a2.png', 'COVER ISLAMIC SONG'),
(3, 'KALIGRAFI', 'imagefiqsi/XbsjC4ZR1RRbzyJLAL1qBLmasrhegVEufpfOwA9l.png', 'KALIGRAFI'),
(4, 'MUSABAQOH TARTIL QURAN', 'imagefiqsi/ZBEhUot7J3HboGAQhYA4izszeNZdpmqj15TNGuOv.png', 'MUSABAQOH TARTIL QURAN'),
(5, 'MUSABAQOH TILAWATIL QUR AN', 'imagefiqsi/DOdlGpwyK2c8KEwzAY3S4kuRQzTegkGT1Sm1pIZE.png', 'MUSABAQOH TILAWATIL QUR AN'),
(6, 'SHORT MOVIE', 'imagefiqsi/JfV7h3phJcxJxEryL7jXwVAHHqaauGGb4lGXsYgp.png', 'SHORT MOVIE');

-- --------------------------------------------------------

--
-- Table structure for table `isc`
--

CREATE TABLE `isc` (
  `id` int(11) NOT NULL,
  `judulisc` varchar(255) NOT NULL,
  `gambarisc` varchar(255) NOT NULL,
  `deskripsiisc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `isc`
--

INSERT INTO `isc` (`id`, `judulisc`, `gambarisc`, `deskripsiisc`) VALUES
(1, 'COMPETITION OF PHOTOGRAPHY ONLINE', 'imageisc/G5ghXk3zTmep013kvrfbTC8D8nqWtnBZytQXs9BB.png', 'COMPETITION OF PHOTOGRAPHY ONLINE'),
(2, 'COVER SCOUT SONG', 'imageisc/doLHEep7gsqtuM5fOAr3YlkjZW9R3DkloFoIy5Zq.png', 'COVER SCOUT SONG'),
(3, 'GELEGAR YEL YEL OF SCOUT', 'imageisc/qnA7q91qfKmWluHH9ebuGfGoz3euHZnWYvV2ydGR.png', 'GELEGAR YEL YEL OF SCOUT'),
(4, 'PODCAST PENGGALANG MODE ON', 'imageisc/xU6s9ObGketVrTxYrPPX9c5ubfkTyU3pHjiFqger.png', 'PODCAST PENGGALANG MODE ON'),
(5, 'POSTER DIGITAL', 'imageisc/bbbdwUfUlhQbHlxSEofXZXwynPGjpaOMjQHQ6DkM.png', 'POSTER DIGITAL'),
(6, 'SAFARI CAMP', 'imageisc/sNBW6p0lRUt8KYCb3qXtaP6zJmwPEJSelV89x2Wo.png', 'SAFARI CAMP'),
(7, 'SCOUT INTELEGENCE COMPETITION', 'imageisc/B0943N071kcnm04o50IS0ZLCfhtMJgn4PzqUI5n1.png', 'SCOUT INTELEGENCE COMPETITION'),
(8, 'SCOUT SAHRIL QURAN', 'imageisc/5TmHp1B0CAR6PYbh0JMJ8OPb7QYFX4biImW5O2YE.png', 'SCOUT SAHRIL QURAN'),
(9, 'TARI KONTEMPORER', 'imageisc/qD2kg7EqIlhNw7vwSMaqL3KmNbgYOQrnfIlcQnsT.png', 'TARI KONTEMPORER');

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `fax` varchar(13) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `hour` varchar(255) NOT NULL,
  `wa` text NOT NULL,
  `ig` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`id`, `email`, `phone`, `fax`, `alamat`, `hour`, `wa`, `ig`) VALUES
(1, 'test@gmail.co.id', '+62 31 549 208622', '021111111111', 'Jl. Dempo No. 11 Surabaya 60252', '2AM - 3AM', 'asd', 'asd');

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
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `osiris`
--

CREATE TABLE `osiris` (
  `id` int(11) NOT NULL,
  `judulosiris` varchar(255) NOT NULL,
  `gambarosiris` varchar(255) NOT NULL,
  `deskripsiosiris` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `osiris`
--

INSERT INTO `osiris` (`id`, `judulosiris`, `gambarosiris`, `deskripsiosiris`) VALUES
(1, 'MATHEMATICS', 'imageosiris/WvqaNa1wc7mxqXt2DR80cqKnzyV8007UdcKxUdN2.png', 'MATHEMATICS'),
(2, 'SCIENCE', 'imageosiris/wTsa5BzhkVanzYX3oR0YOSbhg2OuYiIM8LwoNfhv.png', 'SCIENCE'),
(3, 'TROFF (try out offline)', 'imageosiris/qG4vR5OQGSLm4u34I0guE1R9jYRp0sAQSKQkpyG0.png', 'TROFF (try out offline)');

-- --------------------------------------------------------

--
-- Table structure for table `partner`
--

CREATE TABLE `partner` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `gambarpart` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `partner`
--

INSERT INTO `partner` (`id`, `name`, `gambarpart`) VALUES
(1, 'Client 1', 'imagepart/LD9pUYfF1o7iagJBvoeQSSXmQ6dDtrktHIBdyiLO.png'),
(2, 'Client 2', 'imagepart/e5C7dX4XefQBJ3v7lHOFmBbXYYmp12AtT7GeuwP3.jpeg'),
(3, 'Client 3', 'imagepart/68Lf8LneN7sh5ui2R1IQxrL0clTCtXKd2LdhIb2f.png'),
(4, 'Client 4', 'imagepart/m8NOBwP2sPUH9fAYuo7CN2vDVCzIhStvX41csFTp.png');

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
-- Table structure for table `profile_fiqsi`
--

CREATE TABLE `profile_fiqsi` (
  `id` int(11) NOT NULL,
  `nama_prof` varchar(255) NOT NULL,
  `desc_prof` text NOT NULL,
  `gambar_prof` varchar(255) NOT NULL,
  `tema_prof` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profile_fiqsi`
--

INSERT INTO `profile_fiqsi` (`id`, `nama_prof`, `desc_prof`, `gambar_prof`, `tema_prof`) VALUES
(1, 'Fiqsi', 'Festival Qurani dan Seni Islami (FIQSI) merupakan event tahunan yang diadakan oleh sma unggulan berbasis pesantren amanatul ummah. Festival Qurani dan Seni Islmai ditujukan sebagai wadah untuk berkarya serta mengembangkan bakat dan minat para pemuda indonesia di era digital dalam bidang seni islamu dengan memanfaatkan kemajuan teknologi', 'imageprofilefiqsi/zc0eKSreuKBSfbhXTPCLjH9EgPL19pDE1VEwTy3R.jpeg', 'Pengembangan seni islam pemuda di era digital');

-- --------------------------------------------------------

--
-- Table structure for table `profile_isc`
--

CREATE TABLE `profile_isc` (
  `id` int(11) NOT NULL,
  `nama_prof` varchar(255) NOT NULL,
  `desc_prof` text NOT NULL,
  `gambar_prof` varchar(255) NOT NULL,
  `tema_prof` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profile_isc`
--

INSERT INTO `profile_isc` (`id`, `nama_prof`, `desc_prof`, `gambar_prof`, `tema_prof`) VALUES
(1, 'ISC', 'islamic scout competition VI merupakan event pramuka bergengsi yang diadakan setiap tahunnya di SMAU BP AMANATUL UMMAH. Islamic Scout Competation adalah sebagai ajang kompetisi para penggalang islami dalam mengasah pengetahuan dan keterampilan di bidang keperamukaan, berbeda dari tahun-tahun sebelumnya, pada tahun ini Islamic Scout Competation diadakan secara online, dengan begitu para penggalang islami akan meningkatkan kemampuan dan mengembangkan kekretivitasan mereka yang berpacu dengan kemajuan teknologi pada saat ini.', 'imageprofileIsc/fft3rgh4HAemdt1ntKIMvr8NPoxpj1cSBXqEWZrg.jpeg', 'Bersiap menjadi penggalang yang bersinergi untuk revolusi negeri');

-- --------------------------------------------------------

--
-- Table structure for table `profile_osiris`
--

CREATE TABLE `profile_osiris` (
  `id` int(11) NOT NULL,
  `nama_prof` varchar(255) NOT NULL,
  `desc_prof` text NOT NULL,
  `gambar_prof` varchar(255) NOT NULL,
  `tema_prof` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profile_osiris`
--

INSERT INTO `profile_osiris` (`id`, `nama_prof`, `desc_prof`, `gambar_prof`, `tema_prof`) VALUES
(1, 'Osiris', 'Olimpiade Sains Remaja Indonesia (OSIRIS) merupakan ajang kompetisi dalam mengasah kemampuan remaja di bidang sains. sehingga diharapkan dapat mengembangkan minat dan bakat remaja di bidang sains yang dapat mengarah pada perkembangan intelektual remaja dalam mewujudkan negara indonesia dengan sumber daya yang berkualitas', 'imageprofileOsiris/l2k1NwlsFAugHDzsHvfsQQzQb6iGzKT4mMe58bAZ.jpeg', 'Semangat juang dan inovasi dalam  mengembangkan sains dan teknologi');

-- --------------------------------------------------------

--
-- Table structure for table `sponsor`
--

CREATE TABLE `sponsor` (
  `id` int(11) NOT NULL,
  `judulspon` varchar(255) NOT NULL,
  `gambarspon` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sponsor`
--

INSERT INTO `sponsor` (`id`, `judulspon`, `gambarspon`) VALUES
(1, 'test', 'imagespon/t5XMxJvatEQYnqEkNxDZ0zWUATA4r2O2aBfo9a8V.jpeg'),
(2, 'test2', 'imagespon/gWHTBs73WmEdWqy4tfSU1Gj8VLW4YrVxta47Zz4I.jpeg'),
(3, 'test3', 'imagespon/1KUdGDLMp4oosipaCN7Ufjpf12Bq5gLLy10o1Ykm.png'),
(4, 'test4', 'imagespon/4m5DXYn5PhdQ8I1rlbTfFkErw5D7TRJdVghUIVvc.jpeg'),
(5, 'test5', 'imagespon/AwCwvBPkHdm4XdI0NPqgJUnk3LGCGf8qFA81DnG1.jpeg');

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
(1, 'admin', 'admin@admin.com', NULL, '$2y$10$mLjjqEeE83b4uFfgwGmk/ekK2BFMD4VcvasgZSECUBlaSqAazr7Re', NULL, '2019-07-23 06:53:58', '2019-07-23 06:53:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fiqsi`
--
ALTER TABLE `fiqsi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `isc`
--
ALTER TABLE `isc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `osiris`
--
ALTER TABLE `osiris`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partner`
--
ALTER TABLE `partner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `profile_fiqsi`
--
ALTER TABLE `profile_fiqsi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile_isc`
--
ALTER TABLE `profile_isc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile_osiris`
--
ALTER TABLE `profile_osiris`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sponsor`
--
ALTER TABLE `sponsor`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fiqsi`
--
ALTER TABLE `fiqsi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `isc`
--
ALTER TABLE `isc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `osiris`
--
ALTER TABLE `osiris`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `partner`
--
ALTER TABLE `partner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `profile_fiqsi`
--
ALTER TABLE `profile_fiqsi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `profile_isc`
--
ALTER TABLE `profile_isc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `profile_osiris`
--
ALTER TABLE `profile_osiris`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sponsor`
--
ALTER TABLE `sponsor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
