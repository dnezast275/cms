-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Des 2020 pada 03.10
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `category`
--

CREATE TABLE `category` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_slug` varchar(255) NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `category`
--

INSERT INTO `category` (`id`, `category_name`, `category_slug`, `created_at`, `updated_at`, `active`) VALUES
(1, 'Inovasi', 'inovasi', '2020-10-29', '2020-10-29', 1),
(2, 'Teknologi', 'teknologi', NULL, NULL, 1),
(3, 'Hiburan', 'hiburan', NULL, NULL, 1),
(4, 'Games', 'games', NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `child_comment`
--

CREATE TABLE `child_comment` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_comment` int(9) NOT NULL,
  `comment` varchar(800) NOT NULL,
  `author_comment` varchar(255) NOT NULL,
  `liked` int(9) NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `child_comment`
--

INSERT INTO `child_comment` (`id`, `parent_comment`, `comment`, `author_comment`, `liked`, `created_at`) VALUES
(1, 1, 'Maen nya bagus gan', 'dNezast', 2, '2020-11-03'),
(2, 1, 'Iya gan, maennya bagus gan', 'My Name Is...', 7, '2020-11-03'),
(3, 2, 'Hai mbak, boleh kenalan gak?', 'Anonyomous', 0, '2020-11-03'),
(4, 5, 'halo juga', 'Putri Septian', 5, '2020-11-05'),
(5, 1, 'Ku bales ya komen mu', 'dNezast', 5, '2020-11-14'),
(6, 5, 'SKSD lau sokap', 'dNezast', 5, '2020-11-14'),
(7, 7, 'Hai kenalan dong', 'Nadila Putri', 5, '2020-12-04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `comment`
--

CREATE TABLE `comment` (
  `id` int(10) UNSIGNED NOT NULL,
  `slug_post` varchar(255) NOT NULL,
  `parent_comment` int(9) DEFAULT NULL,
  `comment` varchar(800) NOT NULL,
  `author_comment` varchar(255) NOT NULL,
  `liked` int(9) NOT NULL,
  `created_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `comment`
--

INSERT INTO `comment` (`id`, `slug_post`, `parent_comment`, `comment`, `author_comment`, `liked`, `created_at`) VALUES
(1, 'temuan-mutakhir-dari-karya', NULL, 'Ini komentar pertama ku', 'Muhamad Ramdani Hidayatullah', 4, '2020-11-01'),
(2, 'temuan-mutakhir-dari-karya', NULL, 'Postingannya bagus gan', 'Nina Nurhasanah', 6, '2020-11-01'),
(3, 'temuan-mutakhir-dari-karya', NULL, 'sssssssssssssssssssssssssssssssssssssssssssssssssss', 'Muhamad Ramdani Hidayatullah', 5, '2020-11-05'),
(4, 'temuan-mutakhir-dari-karya', NULL, 'komentar', 'Nadila Putri', 5, '2020-11-05'),
(5, 'temuan-mutakhir-dari-karya', NULL, 'halo cewe', 'Muhamad Ramdani Hidayatullah', 5, '2020-11-05'),
(6, 'temuan-mutakhir-dari-karya', NULL, 'Kali ini komen aja dehh', 'dNezast', 5, '2020-11-14'),
(7, 'xiaomi-resmi-luncurkan-poco-x3-nfc', NULL, 'Postingannya bermanfaat gan. Saya bantu share ya', 'Muhamad Ramdani Hidayatullah', 5, '2020-12-02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `post`
--

CREATE TABLE `post` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `category_slug` varchar(255) NOT NULL,
  `content` varchar(9999) NOT NULL,
  `author` varchar(255) NOT NULL,
  `head_img` varchar(255) NOT NULL,
  `bg_img` varchar(255) NOT NULL,
  `md_img` varchar(255) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  `watched` int(9) NOT NULL,
  `liked` int(9) NOT NULL,
  `comment` int(9) NOT NULL,
  `active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `post`
--

INSERT INTO `post` (`id`, `title`, `slug`, `category_slug`, `content`, `author`, `head_img`, `bg_img`, `md_img`, `created_at`, `updated_at`, `watched`, `liked`, `comment`, `active`) VALUES
(1, 'Temuan Mutakhir dari Karya Anak Bangsa Indonesia', 'temuan-mutakhir-dari-karya-anak-bangsa', 'inovasi', '<p style=\"text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus eligendi dolore odit! Ipsam fuga totam, fugiat voluptatibus odio veritatis quibusdam! Dolorem veritatis vero a tempore ab modi facere doloremque, quisquam aliquid voluptatibus aspernatur quam nobis quibusdam? Suscipit provident sapiente amet magni, maxime quaerat laboriosam ducimus fuga, facere, laborum quam? Alias esse deleniti perferendis! Repellendus ut amet, velit ullam possimus eligendi ipsam consectetur libero iure doloremque at et suscipit inventore quia recusandae commodi tenetur totam consequatur quidem nobis molestias soluta error eum sint! Dignissimos, laboriosam saepe consectetur cupiditate placeat dolorum. Veritatis, quis aspernatur. Porro, iure accusantium obcaecati laboriosam amet quia pariatur placeat facilis molestias consectetur, molestiae est tenetur nemo. Minus obcaecati fugiat deserunt atque, facilis sint, quibusdam omnis nesciunt voluptatum suscipit, incidunt hic excepturi ex delectus quasi dicta fugit. Dignissimos nostrum, vero ex ipsum, dolores eius autem accusamus eos animi corporis officia sit odit pariatur dolore iste iusto beatae veniam. Nesciunt placeat impedit fugiat ullam modi quam, vel, corporis nam provident nemo ab neque aliquid laborum! Obcaecati similique dolore corporis odit ex dolor nesciunt, consequatur numquam doloribus soluta totam deserunt ab facere. Nam architecto vel culpa amet, sed voluptate doloremque, nulla accusantium, officia modi tenetur quas! Quaerat animi ullam ex architecto.</p>', 'Administrator', 'img/bg-img/49.jpg', 'img/bg-img/1.jpg', 'img/md-img/md-2.jpg', '2020-10-29', '2020-10-29', 675, 643, 564, 1),
(2, 'Temuan Mutakhir dari Karya Anak Bangsa Indonesia', 'temuan-mutakhir-dari-karya', 'inovasi', '<p style=\"text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus eligendi dolore odit! Ipsam fuga totam, fugiat voluptatibus odio veritatis quibusdam! Dolorem veritatis vero a tempore ab modi facere doloremque, quisquam aliquid voluptatibus aspernatur quam nobis quibusdam? Suscipit provident sapiente amet magni, maxime quaerat laboriosam ducimus fuga, facere, laborum quam? Alias esse deleniti perferendis! Repellendus ut amet, velit ullam possimus eligendi ipsam consectetur libero iure doloremque at et suscipit inventore quia recusandae commodi tenetur totam consequatur quidem nobis molestias soluta error eum sint! Dignissimos, laboriosam saepe consectetur cupiditate placeat dolorum. Veritatis, quis aspernatur. Porro, iure accusantium obcaecati laboriosam amet quia pariatur placeat facilis molestias consectetur, molestiae est tenetur nemo. Minus obcaecati fugiat deserunt atque, facilis sint, quibusdam omnis nesciunt voluptatum suscipit, incidunt hic excepturi ex delectus quasi dicta fugit. Dignissimos nostrum, vero ex ipsum, dolores eius autem accusamus eos animi corporis officia sit odit pariatur dolore iste iusto beatae veniam. Nesciunt placeat impedit fugiat ullam modi quam, vel, corporis nam provident nemo ab neque aliquid laborum! Obcaecati similique dolore corporis odit ex dolor nesciunt, consequatur numquam doloribus soluta totam deserunt ab facere. Nam architecto vel culpa amet, sed voluptate doloremque, nulla accusantium, officia modi tenetur quas! Quaerat animi ullam ex architecto.</p>', 'Administrator', 'img/bg-img/49.jpg', 'img/bg-img/2.jpg', 'img/md-img/md-2.jpg', '2020-10-29', '2020-10-29', 675, 643, 564, 1),
(3, 'Xiaomi Resmi Luncurkan Poco X3 NFC', 'xiaomi-resmi-luncurkan-poco-x3-nfc', 'teknologi', '<p style=\"text-align: justify;\"><strong>Layar</strong> <br>\r\n                                POCO X3 NFC memiliki layar berukuran 6,67 inci dengan resolusi FHD+ 2400 x 1080 pixels dan aspek layar ke bodi sebesar 91,25% sehingga layar ponsel memiliki kesan lebih lebar dan lebih luas. <br>\r\n\r\n                                <img src=\"/img/bg-img/poco-x3-nfc/poco-x3-1.jpg\" alt=\"\">\r\n                                \r\n                                Apalagi, ponsel juga diberikan sertifikasi TÜV Rheinland yang dapat mengurangi sinar biru berbahaya pada ponsel jadi aman digunakan untuk menikmati konten media sepanjang hari. Terlepas dari itu, layar POCO X3 NFC pun mendapat dukungan IP53 yang berarti tahan terhadap cipratan air.</p>\r\n\r\n                            <p style=\"text-align: justify;\">\r\n                                <img src=\"/img/bg-img/poco-x3-nfc/poco-x3-2.jpg\" alt=\"\">  <br>\r\n                                Adapun yang menjadi daya pikat utama dari layar POCO X3 NFC adalah refresh rate 120Hz yang memungkinkan layar bekerja lebih cepat dan lebih responsif ketika bermain game. Untuk mengurangi konsumsi daya, layar ponsel secara otomatis akan berjalan dengan refresh rate 50Hz saat tidak digunakan.</p>\r\n\r\n                                <p style=\"text-align: justify;\">\r\n                                    <strong>Kamera</strong> <br>\r\n                                    <img src=\"/img/bg-img/poco-x3-nfc/poco-x3-3.jpg\" alt=\"\"><br>\r\n                                    POCO X3 NFC meluncur dengan modul triple kamera dimana konfigurasinya adalah 64MP untuk lensa utama Sony IMX682, 13MP untuk lensa ultra-wide dengan sudut FOV 119 derajat, 2MP untuk lensa makro dan 2MP untuk lensa depth.\r\n                                </p>', 'dNezast', 'img/bg-img/bg-poco-x3-nfc.jpg', 'img/bg-img/poco-x3-nfc.jpg', 'img/md-img/md-poco-x3-nfc.jpg', '2020-11-15', '2020-11-15', 45, 24, 223, 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `child_comment`
--
ALTER TABLE `child_comment`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `child_comment`
--
ALTER TABLE `child_comment`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `post`
--
ALTER TABLE `post`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
