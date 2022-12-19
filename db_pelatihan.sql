-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Des 2022 pada 09.25
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pelatihan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(3, 'Alexander Mukidi', 'f30.cahyo@gmail.com', 'default1.jpg', '$2y$10$F83nhATmWUsegH2molsnEOG2286Yy5Sa4fg/OwiYWBfYwtcY/liM2', 1, 1, 1664339447),
(4, 'Skipper', 'skipper@gmail.com', 'default.jpg', '$2y$10$iWA0qCxjETfJMsKQbtDa1eIhBqdkc9pH8eZsct7ls2Zs5NMnRzwZ6', 2, 1, 1665451695),
(5, 'Siti Avi', 'sitiavi@gmail.com', 'default.jpg', '$2y$10$xzHiSPHJmB4kA1ZK9uKVbOYzwO.1Efa.shv8H/ml8Y885LdTxkgQa', 2, 0, 1665990229),
(12, 'negato', 'ridernegato@gmail.com', 'default.jpg', '$2y$10$PROfoSTMnGiHZWikalhsGOddxcFfd3Sng3l/uErZ73xcjYsxQ4B7e', 2, 0, 1665995208);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2),
(7, 1, 3),
(8, 1, 4),
(9, 3, 2),
(10, 3, 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_course`
--

CREATE TABLE `user_course` (
  `id` int(1) NOT NULL,
  `course` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_course`
--

INSERT INTO `user_course` (`id`, `course`) VALUES
(1, 'Bahasa Inggris'),
(2, 'Bahasa Jepang'),
(3, 'Bahasa Mandarin'),
(4, 'Bahasa Perancis');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_material`
--

CREATE TABLE `user_material` (
  `id` int(11) NOT NULL,
  `course` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_material`
--

INSERT INTO `user_material` (`id`, `course`, `title`, `url`) VALUES
(1, 1, 'Pengantar Bahasa Inggris', 'www.google.com\r\n'),
(2, 2, 'Pengantar Bahasa Jepang', 'www.google.com\r\n'),
(3, 3, 'Pengantar Bahasa Mandarin', 'www.google.com'),
(4, 4, 'Pengantar Bahasa Perancis', 'www.google.com'),
(5, 0, 'Past Tense', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'Menu'),
(4, 'Instructor');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Peserta'),
(3, 'Instruktur');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'fa-solid fa-fw fa-gauge', 1),
(2, 2, 'My Profile', 'user', 'fa-solid fa-fw fa-user', 1),
(3, 2, 'Edit Profile', 'user/edit', 'fa-solid fa-fw fa-user-pen', 1),
(4, 3, 'Menu Management', 'menu', 'fa-solid fa-fw fa-folder', 1),
(5, 3, 'Sub Menu Management', 'menu/submenu', 'fa-solid fa-fw fa-folder-open', 1),
(7, 1, 'User Role', 'admin/role', 'fa-solid fa-fw fa-user-gear', 1),
(8, 2, 'Change Password', 'user/chpasswd', 'fa-regular fa-fw fa-user-lock', 1),
(9, 4, 'Teaching', 'instructor', 'fa-solid fa-fw fa-chalkboard-user', 1),
(10, 4, 'Scoring', 'instructor/scoring', 'fa-light fa-fw fa-clipboard-list-check', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_token`
--

INSERT INTO `user_token` (`id`, `email`, `token`, `date_created`) VALUES
(1, 'negato@gmail.com', '6hdiIQpQreyUFF5642lqzt3ESu9cmPvF6T1uwWYDB/w=', 1665994406),
(2, 'negato@gmail.com', '46kRtdHhbotwDnCZVibCLWLfrllspS/BsYNu0BTTm2s=', 1665994491),
(3, 'ridernegato@gmail.com', 'R6WvqOkNx+Aa7aOfMr/OUJ7ibaN0ztayq2xAfcvkevE=', 1665994702),
(4, 'ridernegato@gmail.com', '/NlNnZwD2xPm0uv+DSjPuqgJpg9m2d1k5ispQQktxTI=', 1665994755),
(5, 'ridernegato@gmail.com', 'nQE060+OnG5QFbjXJpyt8vTnynIvzq7KspKncMAAGJQ=', 1665994920),
(6, 'ridernegato@gmail.com', 'n9GknF0m6+EubyHlZ+6Jch00yCgW4Q+3LVGOaYLHtWo=', 1665995076),
(7, 'ridernegato@gmail.com', 'OChoOrl0Wv+DVkToReEplLAuMiLJGkIGwv4DkFINNC0=', 1665995208);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_course`
--
ALTER TABLE `user_course`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_material`
--
ALTER TABLE `user_material`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `user_course`
--
ALTER TABLE `user_course`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `user_material`
--
ALTER TABLE `user_material`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
