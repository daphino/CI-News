-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Mar 2020 pada 20.12
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_news1`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL,
  `image_url` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_dasar`
--

CREATE TABLE `data_dasar` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `sub_category_id` int(11) DEFAULT NULL,
  `has_child` tinyint(1) NOT NULL,
  `data_parent_id` int(11) NOT NULL,
  `data_name` varchar(191) NOT NULL,
  `satuan` varchar(191) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_dasar_detail`
--

CREATE TABLE `data_dasar_detail` (
  `id` int(11) NOT NULL,
  `data_dasar_id` int(11) NOT NULL,
  `tahun` int(11) NOT NULL,
  `jumlah_data` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `flyers`
--

CREATE TABLE `flyers` (
  `id` int(11) NOT NULL,
  `title` varchar(191) NOT NULL,
  `banner_url` varchar(191) NOT NULL,
  `created_by` varchar(191) NOT NULL,
  `file_url` varchar(191) NOT NULL,
  `description` longtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `flyers`
--

INSERT INTO `flyers` (`id`, `title`, `banner_url`, `created_by`, `file_url`, `description`, `created_at`, `updated_at`) VALUES
(3, 'Ea et earum minima ullam eum enim.', 'https://picsum.photos/id/0/300/300', 'Pinkie Halvorson I', 'https://picsum.photos/id/0/300/200', 'Corrupti aperiam possimus eius dolor ut vitae non. Molestias voluptatum officiis optio voluptas sed iure. Voluptatem natus quo dignissimos aut numquam. Voluptatem laboriosam delectus consequuntur qui. Nisi optio quos deleniti totam autem a numquam et.', '2020-03-20 19:12:12', '2020-03-20 19:12:12'),
(4, 'Dolor autem inventore qui.', 'https://picsum.photos/id/1/300/300', 'German Gibson', 'https://picsum.photos/id/1/300/200', 'Qui quia quis dolores omnis. Ea et laborum molestiae porro officia aut quia. Possimus sunt hic culpa cupiditate sit. Iure enim fugit vel minus ut ratione itaque. Id neque et dolor neque quo et.', '2020-03-20 19:12:12', '2020-03-20 19:12:12'),
(5, 'Expedita facilis at architecto ut et dolor.', 'https://picsum.photos/id/2/300/300', 'Bertha Bogisich DVM', 'https://picsum.photos/id/2/300/200', 'Voluptatem laborum iure voluptatum ex quaerat est est explicabo. Nisi nesciunt quisquam culpa sed cum minima. Dicta et perferendis occaecati esse. Voluptate debitis impedit perferendis deserunt officiis. Quo fugiat qui nesciunt consequatur voluptates ipsum.', '2020-03-20 19:12:12', '2020-03-20 19:12:12'),
(6, 'Minus eius quae amet quia id a dolores provident.', 'https://picsum.photos/id/3/300/300', 'Danielle Mayer', 'https://picsum.photos/id/3/300/200', 'Reiciendis nihil dolor consequatur rerum. Illum eveniet ducimus soluta et et quo dicta. Illum et delectus id. Cumque voluptates sunt ut aliquid omnis. Maxime voluptate quidem sit eius tenetur.', '2020-03-20 19:12:12', '2020-03-20 19:12:12'),
(7, 'Dolor ut nemo architecto fugiat expedita aut et nemo.', 'https://picsum.photos/id/4/300/300', 'Elmer Wuckert', 'https://picsum.photos/id/4/300/200', 'Sit blanditiis consectetur vero quis nostrum. Labore dignissimos qui sapiente vel. Doloremque ullam autem ratione beatae. Eos deserunt non et saepe est corrupti cumque voluptatem. Consequatur quo magni laudantium sunt magnam.', '2020-03-20 19:12:12', '2020-03-20 19:12:12'),
(8, 'Consectetur quia nesciunt animi qui nisi ipsa.', 'https://picsum.photos/id/5/300/300', 'Prof. Jillian Bosco V', 'https://picsum.photos/id/5/300/200', 'Corrupti nihil consectetur aut repellendus nulla. Voluptatibus quibusdam delectus magnam inventore numquam. Sit pariatur voluptas tempora sed laudantium aliquam. Excepturi velit corporis quia. Corporis aut quia quis dolores quis.', '2020-03-20 19:12:12', '2020-03-20 19:12:12'),
(9, 'Vel ut necessitatibus et pariatur velit.', 'https://picsum.photos/id/6/300/300', 'Blaze Gorczany', 'https://picsum.photos/id/6/300/200', 'Officia aut nostrum quisquam incidunt. Incidunt ratione at voluptatem porro facilis. Et tenetur dolore vel. Accusamus consequatur eum quisquam voluptas cupiditate. Id illo ut quo qui dolores.', '2020-03-20 19:12:12', '2020-03-20 19:12:12'),
(10, 'Autem occaecati qui magni.', 'https://picsum.photos/id/7/300/300', 'Mr. Levi Krajcik', 'https://picsum.photos/id/7/300/200', 'Nihil nesciunt voluptatem asperiores ut possimus. Dolorum saepe nulla odio ipsum. Exercitationem quo corporis sed vel autem ut. Autem est sed in autem nihil. Ea enim qui minima.', '2020-03-20 19:12:12', '2020-03-20 19:12:12'),
(11, 'Ut eum veritatis aut.', 'https://picsum.photos/id/8/300/300', 'Jaleel Mayert II', 'https://picsum.photos/id/8/300/200', 'Ut esse libero amet quas voluptate reiciendis non numquam. Nobis harum similique eum doloribus saepe doloremque unde dolore. Molestias excepturi maiores pariatur illum non earum adipisci. Aut rerum et laboriosam ullam numquam. Soluta aut similique rem.', '2020-03-20 19:12:12', '2020-03-20 19:12:12'),
(12, 'Dolorem laudantium dolores molestias.', 'https://picsum.photos/id/9/300/300', 'Sigurd Yundt', 'https://picsum.photos/id/9/300/200', 'Aut in qui provident hic voluptas saepe. Voluptatem qui libero voluptas ut dicta. Consequatur quam voluptatem impedit illo. Quo qui voluptatem non veniam possimus rerum. Facere neque corrupti eaque.', '2020-03-20 19:12:12', '2020-03-20 19:12:12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(191) NOT NULL,
  `short_desc` varchar(191) NOT NULL,
  `content` longtext NOT NULL,
  `published` varchar(191) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `news`
--

INSERT INTO `news` (`id`, `title`, `short_desc`, `content`, `published`, `created_at`, `updated_at`) VALUES
(48, 'Ullam voluptatibus et harum error.', 'Fugiat quas quam omnis aut velit impedit ut quod.', 'Voluptatem dicta nulla voluptatem voluptatem ipsa amet alias. Quos necessitatibus vel quibusdam eum doloremque. Sed nostrum qui sint ut. Officiis perspiciatis esse at omnis. Quam tempore vel dignissimos dolorem iusto.', 'Larry Grady', '2020-03-20 19:12:12', '2020-03-20 19:12:12'),
(49, 'Et est earum ea labore aut aut.', 'Eum dicta sit voluptatem dignissimos sunt libero optio deserunt necessitatibus beatae.', 'At quae iste fuga aut unde enim sit. Quibusdam incidunt ratione dolorem facilis enim dolore mollitia. Magni rerum voluptatibus soluta totam. Debitis id exercitationem explicabo accusamus. Neque nulla distinctio eum ea.', 'Miss Yolanda O\'Connell IV', '2020-03-20 19:12:12', '2020-03-20 19:12:12'),
(50, 'Dolor voluptatem maxime ipsum mollitia id.', 'Consequatur laudantium quis velit alias eaque ducimus.', 'Consequuntur beatae sint nemo omnis nam. Est numquam tenetur et in laborum. Omnis ea fugit ut quam ipsa incidunt. Odio voluptas rem debitis aliquid esse nihil qui. Quos eos mollitia reprehenderit voluptatem veniam cumque molestias.', 'Waino Gutkowski', '2020-03-20 19:12:12', '2020-03-20 19:12:12'),
(51, 'Et asperiores odio sit error et voluptatum.', 'Nihil et recusandae et perferendis et laboriosam a et molestias sit odit iste.', 'Voluptatem ipsum atque laudantium esse explicabo at. Et distinctio provident qui dolor rerum porro perspiciatis. Quisquam eaque et aliquid vero error saepe. Quos quos reiciendis quia ea nesciunt temporibus. Et distinctio nulla odit.', 'Prof. Juliet Torp I', '2020-03-20 19:12:12', '2020-03-20 19:12:12'),
(52, 'Voluptas eius alias facere impedit eveniet maiores.', 'Labore non minus ea sapiente vero illum illum enim.', 'Non ab voluptatum facere illo blanditiis. Tempora aspernatur dolorum est quasi nisi quasi. Similique eius provident eos. Magnam sit est sunt molestiae autem fugiat dignissimos delectus. Illum qui adipisci impedit consequatur ratione quis in.', 'Ellen Dibbert', '2020-03-20 19:12:12', '2020-03-20 19:12:12'),
(53, 'Esse odio est eum aliquid.', 'Voluptas illum fugiat sunt repellendus et aperiam et voluptatem officia eos.', 'Consequuntur similique quis impedit quia. Recusandae aut natus omnis. Maxime beatae odio magnam eum ex dolorem. Quo quasi ea autem dolor in sequi culpa id. Modi atque et ducimus voluptatem.', 'Nils Bartoletti', '2020-03-20 19:12:12', '2020-03-20 19:12:12'),
(54, 'Voluptas unde reiciendis quos reiciendis atque quibusdam nulla.', 'Qui eius perferendis nobis pariatur cum magnam.', 'Blanditiis sunt culpa alias sed aliquam laboriosam. Explicabo laborum quis quis beatae voluptas quia labore. Dolorem impedit dolore expedita mollitia velit molestiae. Culpa explicabo aspernatur vel aut non. Reprehenderit sunt eos exercitationem eum dolor placeat architecto.', 'Earl Rippin', '2020-03-20 19:12:12', '2020-03-20 19:12:12'),
(55, 'Molestias iure aliquid ea dolor dignissimos.', 'Sapiente eaque dolore ipsam laudantium eos aut enim illum aut est rerum est sit.', 'Quasi qui placeat et repudiandae. Praesentium voluptatem magni perspiciatis adipisci maxime. Nemo aut et ratione quia ad. Impedit voluptate facilis totam non est voluptatem. Totam beatae natus aut quia consequatur.', 'Emil Mayer V', '2020-03-20 19:12:12', '2020-03-20 19:12:12'),
(56, 'Delectus odit tenetur optio autem qui.', 'Autem voluptatem officia velit amet ut neque minima iusto.', 'Rerum sequi doloribus blanditiis tempora. Reprehenderit nobis et rerum. Enim et ab quia quis quis et ad. Animi omnis itaque dolore impedit distinctio voluptatem ut. Eum praesentium qui aut odit ipsam minus adipisci.', 'Verona Thiel Jr.', '2020-03-20 19:12:12', '2020-03-20 19:12:12'),
(57, 'Ratione consequatur dolor magnam delectus consequatur ea deserunt.', 'Ducimus vero non fugit est quis alias.', 'Error voluptatem eum consequatur alias. Ipsam perspiciatis veniam distinctio voluptas odit nihil illo quam. Accusamus est odit eveniet sunt earum animi. Quasi officiis cumque voluptates rem non. Corporis voluptas quam labore sed velit.', 'Philip Jacobs', '2020-03-20 19:12:12', '2020-03-20 19:12:12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `new_images`
--

CREATE TABLE `new_images` (
  `id` int(11) NOT NULL,
  `news_id` int(11) NOT NULL,
  `image_url` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `new_images`
--

INSERT INTO `new_images` (`id`, `news_id`, `image_url`) VALUES
(7, 48, 'https://picsum.photos/id/0/300/200'),
(8, 48, 'https://picsum.photos/id/1/300/200'),
(9, 48, 'https://picsum.photos/id/2/300/200'),
(10, 48, 'https://picsum.photos/id/3/300/200'),
(11, 48, 'https://picsum.photos/id/4/300/200'),
(12, 49, 'https://picsum.photos/id/0/300/200'),
(13, 49, 'https://picsum.photos/id/1/300/200'),
(14, 49, 'https://picsum.photos/id/2/300/200'),
(15, 49, 'https://picsum.photos/id/3/300/200'),
(16, 49, 'https://picsum.photos/id/4/300/200'),
(17, 50, 'https://picsum.photos/id/0/300/200'),
(18, 50, 'https://picsum.photos/id/1/300/200'),
(19, 50, 'https://picsum.photos/id/2/300/200'),
(20, 50, 'https://picsum.photos/id/3/300/200'),
(21, 50, 'https://picsum.photos/id/4/300/200'),
(22, 51, 'https://picsum.photos/id/0/300/200'),
(23, 51, 'https://picsum.photos/id/1/300/200'),
(24, 51, 'https://picsum.photos/id/2/300/200'),
(25, 51, 'https://picsum.photos/id/3/300/200'),
(26, 51, 'https://picsum.photos/id/4/300/200'),
(27, 52, 'https://picsum.photos/id/0/300/200'),
(28, 52, 'https://picsum.photos/id/1/300/200'),
(29, 52, 'https://picsum.photos/id/2/300/200'),
(30, 52, 'https://picsum.photos/id/3/300/200'),
(31, 52, 'https://picsum.photos/id/4/300/200'),
(32, 53, 'https://picsum.photos/id/0/300/200'),
(33, 53, 'https://picsum.photos/id/1/300/200'),
(34, 53, 'https://picsum.photos/id/2/300/200'),
(35, 53, 'https://picsum.photos/id/3/300/200'),
(36, 53, 'https://picsum.photos/id/4/300/200'),
(37, 54, 'https://picsum.photos/id/0/300/200'),
(38, 54, 'https://picsum.photos/id/1/300/200'),
(39, 54, 'https://picsum.photos/id/2/300/200'),
(40, 54, 'https://picsum.photos/id/3/300/200'),
(41, 54, 'https://picsum.photos/id/4/300/200'),
(42, 55, 'https://picsum.photos/id/0/300/200'),
(43, 55, 'https://picsum.photos/id/1/300/200'),
(44, 55, 'https://picsum.photos/id/2/300/200'),
(45, 55, 'https://picsum.photos/id/3/300/200'),
(46, 55, 'https://picsum.photos/id/4/300/200'),
(47, 56, 'https://picsum.photos/id/0/300/200'),
(48, 56, 'https://picsum.photos/id/1/300/200'),
(49, 56, 'https://picsum.photos/id/2/300/200'),
(50, 56, 'https://picsum.photos/id/3/300/200'),
(51, 56, 'https://picsum.photos/id/4/300/200'),
(52, 57, 'https://picsum.photos/id/0/300/200'),
(53, 57, 'https://picsum.photos/id/1/300/200'),
(54, 57, 'https://picsum.photos/id/2/300/200'),
(55, 57, 'https://picsum.photos/id/3/300/200'),
(56, 57, 'https://picsum.photos/id/4/300/200');

-- --------------------------------------------------------

--
-- Struktur dari tabel `peta_kabs`
--

CREATE TABLE `peta_kabs` (
  `id` int(11) NOT NULL,
  `title` varchar(191) NOT NULL,
  `banner_url` varchar(191) NOT NULL,
  `description` varchar(191) NOT NULL,
  `file_url` varchar(191) NOT NULL,
  `created_by` varchar(191) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `peta_kabs`
--

INSERT INTO `peta_kabs` (`id`, `title`, `banner_url`, `description`, `file_url`, `created_by`, `created_at`, `updated_at`) VALUES
(2, 'Eius ipsam quos eligendi suscipit ab earum.', 'https://picsum.photos/id/0/300/300', 'In omnis ducimus et inventore esse mollitia sequi. Quas aliquid consequuntur nesciunt corrupti ut. Reiciendis et et rerum sunt omnis consequatur. Eos eos quisquam molestiae occaecati quo laud', 'https://picsum.photos/id/0/300/200', 'Prof. Reilly Walter I', '2020-03-20 19:12:12', '2020-03-20 19:12:12'),
(3, 'Eveniet sit illum ea sequi aspernatur aperiam.', 'https://picsum.photos/id/1/300/300', 'Rerum numquam exercitationem ea unde magnam cumque. Placeat recusandae sequi sint necessitatibus id minus. Ex aut sit consequatur aliquam adipisci voluptatem perferendis eos. Ut deserunt qui ', 'https://picsum.photos/id/1/300/200', 'Reba McLaughlin', '2020-03-20 19:12:12', '2020-03-20 19:12:12'),
(4, 'Numquam ut nihil numquam fugit atque vel excepturi similique.', 'https://picsum.photos/id/2/300/300', 'Ut ea tenetur aut corporis exercitationem autem delectus tempora. Reiciendis aut voluptatem sit dicta eveniet velit. Et voluptas sequi illo labore et et maiores. Et quis earum eius consequatu', 'https://picsum.photos/id/2/300/200', 'Heber O\'Connell', '2020-03-20 19:12:12', '2020-03-20 19:12:12'),
(5, 'Unde sit culpa recusandae veritatis.', 'https://picsum.photos/id/3/300/300', 'Placeat in debitis maiores dolor distinctio libero dicta. Illo eum ducimus a rerum dolor. Ea maiores natus odit sed qui hic quam. Dolore nemo porro soluta repellat. Molestiae qui eos consecte', 'https://picsum.photos/id/3/300/200', 'Mrs. Aliyah Lakin', '2020-03-20 19:12:12', '2020-03-20 19:12:12'),
(6, 'Quis omnis illum architecto ut id ducimus.', 'https://picsum.photos/id/4/300/300', 'Dolores qui et vel optio. Dolorem dolor est maiores quaerat fugiat. Doloribus corporis magni ea vero voluptas dolores eligendi. Quia facilis commodi et sit sit beatae inventore. Autem ducimus', 'https://picsum.photos/id/4/300/200', 'Dr. Kendall Marvin', '2020-03-20 19:12:12', '2020-03-20 19:12:12'),
(7, 'Vitae molestiae quibusdam velit et dignissimos facilis iste aperiam.', 'https://picsum.photos/id/5/300/300', 'Et tenetur dolor consectetur eligendi. Velit vitae rerum quia rerum. Voluptatibus molestiae iure consequuntur eum assumenda minima. Id consectetur numquam fugit aspernatur enim. Voluptas et s', 'https://picsum.photos/id/5/300/200', 'Dr. Bradly Carroll', '2020-03-20 19:12:12', '2020-03-20 19:12:12'),
(8, 'Harum ea est et tempore labore amet laudantium.', 'https://picsum.photos/id/6/300/300', 'Itaque amet eum id dolor nemo placeat. Aut aut eos et voluptas. Facere qui temporibus id aliquid vel amet. Officia quia sit atque rem sit eaque totam. Qui vel consequuntur voluptate excepturi', 'https://picsum.photos/id/6/300/200', 'Hobart Koepp', '2020-03-20 19:12:12', '2020-03-20 19:12:12'),
(9, 'Eligendi quas ipsam eligendi ducimus accusantium et quae beatae.', 'https://picsum.photos/id/7/300/300', 'Omnis minima voluptas aut totam. Veritatis omnis reprehenderit quod ut et nihil suscipit. Voluptas vel animi ea et eveniet. A ad eligendi quas non eos ut. Natus eum voluptatem id quod ut.', 'https://picsum.photos/id/7/300/200', 'Elisha Wolff', '2020-03-20 19:12:12', '2020-03-20 19:12:12'),
(10, 'Veritatis temporibus et tenetur voluptatem quasi nobis ex.', 'https://picsum.photos/id/8/300/300', 'Quis suscipit vel tempore nihil ut qui. Iste natus repellat nihil ut id sit commodi. Vitae error nemo dicta sit unde soluta vitae id. Facilis et eaque ea. Itaque eaque et et.', 'https://picsum.photos/id/8/300/200', 'Jude Schmidt', '2020-03-20 19:12:12', '2020-03-20 19:12:12'),
(11, 'Aspernatur molestias voluptatem eveniet distinctio est.', 'https://picsum.photos/id/9/300/300', 'Qui sint doloribus autem non. Vero odio quibusdam id minima cum reiciendis sint. Quia et adipisci impedit placeat eos. Earum accusamus ea facere molestiae aut modi ad. Placeat quia enim archi', 'https://picsum.photos/id/9/300/200', 'Dora Weissnat', '2020-03-20 19:12:12', '2020-03-20 19:12:12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `banner_url` varchar(191) NOT NULL,
  `name` varchar(191) NOT NULL,
  `description` varchar(191) NOT NULL,
  `location` varchar(191) NOT NULL,
  `instagram` varchar(191) NOT NULL,
  `twitter` varchar(191) NOT NULL,
  `facebook` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `settings`
--

INSERT INTO `settings` (`id`, `banner_url`, `name`, `description`, `location`, `instagram`, `twitter`, `facebook`) VALUES
(1, 'http://localhost/CI-News/uploads/1584730840.jpg', 'sdfhsdiufhsdiuh ', 'dijhfisudhfu', 'hudhsfosudhf', 'ouihsdufhsdofuh', 'houisdhfosiudfh', 'dsfsdfsdfsdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `password` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'Josefina Howell', 'admin@admin.com', '$2y$10$CT2d9eWhfHnOu1TqJyinA.s/mrl16dAzcCdA0ioi750Y/pi5AbZV2'),
(2, 'Ms. Kyra Mann II', 'fruecker@boehm.com', '$2y$10$0IYF6ocJf7NzYS1dsmNGdOUbfdXbMpM7N4xl55VFqCFJON/2uf5VS'),
(3, 'Loyce Erdman', 'reynolds.judah@yahoo.com', '$2y$10$PRH1hb61d2cjtBVbhLkOQOb/C7l1/N4SgmpyrOQA1K0NnMpcGD9/q'),
(4, 'Prof. Jarred Abernathy', 'yvandervort@kuphal.com', '$2y$10$RMIwl7R0/yIofMMWyYBo4Obz3fL8.n4lxdKZ8sAWsdinHVgkMVq6m'),
(5, 'Solon Crist IV', 'walker.montana@cremin.org', '$2y$10$D8S.BpYZzQpXmDthu0f9veU5vOqEza1QCmsXiZwm0e28rqljqCDBi'),
(6, 'Miss Vita Beier', 'fkutch@yahoo.com', '$2y$10$mPo4oGbutHonhVhMuTVjhepmfynB0pRp1PRYlzJfKuILzMWYQB2bm'),
(7, 'Leta Nikolaus', 'michel03@larson.com', '$2y$10$5QKK0dswXSz.lMfbDpyAG.dTAknkWddqdRN8TqgujGDRWu/xxi0I6'),
(8, 'Dr. Jamal Bogisich III', 'mackenzie14@wintheiser.com', '$2y$10$/4WnN4H7LB1N/YM8X4ftt.tPQn0EjtEzOOM8VPl6jrffKevx0YkGa'),
(9, 'Dorian Pfeffer V', 'bode.delta@kulas.info', '$2y$10$84jVqaoheEjaMAREpX0dzOYjmvr6cYXPqDIjPrRr.jn7CqspZM1/y'),
(10, 'Jailyn Labadie', 'eosinski@orn.com', '$2y$10$r9ipb/fD8ugWaqawl/Piou2zSrVbnFcy7NdAWi/hoJJaTkrUAGfg.'),
(11, 'Prof. Oliver Mertz', 'aufderhar.jasper@gmail.com', '$2y$10$j3sEe7LAIix6MPy.lHFlyuDDqRuhK16WMx7itfoU2cubHElwRw6yO');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_dasar`
--
ALTER TABLE `data_dasar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_dasar_detail`
--
ALTER TABLE `data_dasar_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `flyers`
--
ALTER TABLE `flyers`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `new_images`
--
ALTER TABLE `new_images`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `peta_kabs`
--
ALTER TABLE `peta_kabs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `data_dasar`
--
ALTER TABLE `data_dasar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `data_dasar_detail`
--
ALTER TABLE `data_dasar_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `flyers`
--
ALTER TABLE `flyers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT untuk tabel `new_images`
--
ALTER TABLE `new_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT untuk tabel `peta_kabs`
--
ALTER TABLE `peta_kabs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
