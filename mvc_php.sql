-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 06 mars 2024 à 15:27
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `mvc_php`
--

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

CREATE TABLE `commentaire` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `commentaire` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `commentaire`
--

INSERT INTO `commentaire` (`id`, `user_id`, `post_id`, `commentaire`, `created_at`) VALUES
(1, 26, 7, 'le lol', '2024-02-27 09:12:58'),
(3, 26, 7, 'bbebe', '2024-02-27 09:12:58'),
(4, 26, 7, '8997985', '2024-02-27 09:12:58'),
(5, 26, 7, '8997985', '2024-02-27 09:12:58'),
(6, 26, 7, '8997985', '2024-02-27 09:12:58'),
(21, 26, 7, 'lol', '2024-02-27 09:12:58'),
(22, 26, 7, 'xzczec', '2024-02-27 11:03:10'),
(23, 26, 7, 'enrenre', '2024-02-27 11:03:13'),
(24, 26, 7, 'hbrthbrtbh', '2024-02-27 11:03:19'),
(25, 26, 7, 'hbrth', '2024-02-27 11:57:58'),
(26, 26, 7, 'lol', '2024-02-27 11:58:11'),
(27, 26, 7, 'addamasssssssssssssss', '2024-02-27 11:58:23'),
(28, 26, 7, 'addamasssssssssssssss', '2024-02-27 11:59:22'),
(29, 26, 7, 'addamasssssssssssssss', '2024-02-27 11:59:27'),
(30, 26, 7, 'addamasssssssssssssss', '2024-02-27 11:59:36'),
(31, 26, 7, 'addamasssssssssssssss', '2024-02-27 12:01:59'),
(32, 26, 1, 'zczec', '2024-02-27 16:34:58'),
(33, 26, 3, 'zech&quot;ec', '2024-02-27 16:41:34'),
(34, 26, 10, 'rgberbbeb', '2024-02-28 13:23:36'),
(35, 26, 10, 'rgberbbeb', '2024-02-28 13:24:04'),
(36, 26, 10, 'rgberbbeb', '2024-02-28 13:24:18'),
(37, 26, 10, 'rgberbbeb', '2024-02-28 13:24:57'),
(38, 26, 10, 'ta mere', '2024-02-28 16:32:54'),
(39, 26, 8, 'fczeczac', '2024-02-28 16:58:41'),
(40, 26, 7, 'ta mere', '2024-02-28 16:58:51'),
(41, 26, 10, 'chcchdczczze', '2024-02-29 08:55:42'),
(42, 26, 10, 'jj-,-', '2024-03-05 15:22:36'),
(43, 26, 10, 'test', '2024-03-05 15:23:30'),
(44, 26, 10, 'test2', '2024-03-05 15:24:33');

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `firstname` varchar(35) NOT NULL,
  `lastname` varchar(55) NOT NULL,
  `address1` varchar(255) NOT NULL,
  `address2` varchar(255) NOT NULL,
  `city` varchar(55) NOT NULL,
  `state` varchar(35) NOT NULL,
  `zip` varchar(30) NOT NULL,
  `message` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id`, `user_id`, `firstname`, `lastname`, `address1`, `address2`, `city`, `state`, `zip`, `message`, `created_at`) VALUES
(9, 26, 'lol', 'lola', 'lol', 'lol', 'lol', 'Auvergne-Rhone-Alpes', 'lol', 'lol', '2024-02-26 10:13:30'),
(10, 27, 'Utilisateur', 'util', '8 rue du pouet', '', 'Honolulu', 'Mayotte', '70300', '', '2024-02-27 09:41:19'),
(11, 28, 'ta mere', 'ton pere', '', '', '', 'Provence Alpes C&ocirc;te d&rsquo;A', '58222', '', '2024-02-29 16:29:22'),
(12, 30, 'lolilol', 'lol', '', '', '', 'Ile-de-France', '52410', '', '2024-03-01 16:32:51'),
(13, 31, 'lolilol', 'lol', '', '', '', 'Ile-de-France', '52410', '', '2024-03-01 16:34:50'),
(14, 32, 'lolilol', 'lol', '', '', '', 'Ile-de-France', '52410', '', '2024-03-01 16:34:53'),
(15, 33, 'lolilol', 'lol', '', '', '', 'Ile-de-France', '52410', '', '2024-03-01 16:37:24'),
(16, 34, 'lolilol', 'lol', '', '', '', 'Ile-de-France', '52410', '', '2024-03-01 16:41:39'),
(17, 36, 'lolilollol', 'lal', 'zeczev', 'evezv', 'zevzev', 'Ile-de-France', 'zevzevez', 'czevz', '2024-03-05 11:24:16');

-- --------------------------------------------------------

--
-- Structure de la table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT 25,
  `title` varchar(80) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `post`
--

INSERT INTO `post` (`id`, `user_id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 25, 'Mon premier article de blog', 'Lorem ipsum dolor sit amet consectetur adipisicing elit.\r\nAlias provident deserunt aut, tempora fuga repellendus fugit unde ad, \r\nlabore sint sit odio minima dolorum obcaecati nisi, expedita quis rem facilis?', 'https://cdn.pixabay.com/photo/2017/04/09/09/56/avenue-2215317_960_720.jpg', '2024-02-20 11:25:05', '2024-03-04 14:52:27'),
(2, 25, 'Mon deuxième article de blog ohoh', 'Lorem ipsum dolor sit amet consectetur adipisicing elit.\r\nAlias provident deserunt aut, tempora fuga repellendus fugit unde ad, \r\nlabore sint sit odio minima dolorum obcaecati nisi, expedita quis rem facilis?', 'https://cdn.pixabay.com/photo/2017/01/19/23/46/church-1993645_960_720.jpg', '2024-02-20 11:27:12', '2024-03-04 14:52:27'),
(3, 25, 'Mon troisième article de blog eheh', 'Lorem ipsum dolor sit amet consectetur adipisicing elit.\r\nAlias provident deserunt aut, tempora fuga repellendus fugit unde ad, \r\nlabore sint sit odio minima dolorum obcaecati nisi, expedita quis rem facilis?', 'https://cdn.pixabay.com/photo/2014/07/28/20/39/sunset-404072_960_720.jpg', '2024-02-20 11:27:12', '2024-03-04 14:52:27'),
(4, 25, 'Mon quatrième article de blog uhuh', 'Lorem ipsum dolor sit amet consectetur adipisicing elit.\r\nAlias provident deserunt aut, tempora fuga repellendus fugit unde ad, \r\nlabore sint sit odio minima dolorum obcaecati nisi, expedita quis rem facilis?', 'https://cdn.pixabay.com/photo/2013/03/04/20/59/valley-90388_960_720.jpg', '2024-02-20 11:28:39', '2024-03-04 14:52:27'),
(5, 25, 'Mon cinquième article de blog ihih', 'Lorem ipsum dolor sit amet consectetur adipisicing elit.\r\nAlias provident deserunt aut, tempora fuga repellendus fugit unde ad, \r\nlabore sint sit odio minima dolorum obcaecati nisi, expedita quis rem facilis?', 'https://cdn.pixabay.com/photo/2016/11/25/15/14/landscape-1858602_960_720.jpg', '2024-02-20 11:28:39', '2024-03-04 14:52:27'),
(7, 26, 'lol', 'leolllo', 'https://images.ctfassets.net/hrltx12pl8hq/28ECAQiPJZ78hxatLTa7Ts/2f695d869736ae3b0de3e56ceaca3958/free-nature-images.jpg?fit=fill&amp;w=1200&amp;h=630', '2024-02-26 11:30:06', '2024-03-04 14:52:27'),
(8, 26, 'Pourqouacoube', 'hihilol', 'https://etudestech.com/wp-content/uploads/2023/05/midjourney-scaled.jpeg', '2024-02-27 15:03:04', '2024-03-04 14:52:27'),
(10, 26, 'lollol', 'updated', 'https://www.powertrafic.fr/wp-content/uploads/2023/04/image-ia-exemple.png', '2024-02-27 16:54:29', '2024-03-06 09:05:28'),
(12, 26, 'TEST', 'CREATE', 'https://media.istockphoto.com/id/1322220448/fr/photo/%C5%93il-futuriste-num%C3%A9rique-abstrait.jpg?s=612x612&amp;w=0&amp;k=20&amp;c=b9EtQYg5c3_IDoPdqusxBaAD00AhH2ygsiRHZib7Xk8=', '2024-03-06 09:34:09', '2024-03-06 09:34:09');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(80) NOT NULL,
  `password` varchar(255) NOT NULL,
  `roles` varchar(255) NOT NULL DEFAULT '[]',
  `registered_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `roles`, `registered_at`) VALUES
(25, 'tb@gmail.com', '$2y$10$lWX7aZfbom/xtCVJ3hb0wuvOptrDxn5ilGSf8zUhqPJ8bECaUcHDW', '[\"ROLE_ADMIN\",\"ROLE_MEMBER\"]', '2024-02-26 09:23:39'),
(26, 'lol@lol.lol', '$2y$10$mqNCtP0y.v3cEGhFDmylLeF8teO.ftdwxhAqkpIF0us19aXDja3gS', '[\"ROLE_ADMIN\",\"ROLE_MEMBER\"]', '2024-02-26 10:13:30'),
(27, 'user@lol.com', '$2y$10$CxjDBALJv9Jz6Kkys8CPsOKikmZDfPaUjyb6.DybyEoE2L3SHAp/m', '[]', '2024-02-27 09:41:19'),
(28, 'tg@tg.tg', '$2y$10$lAssAyo1ZAT4FK68LgpiiOOr.NN/vukb3j4P8ZCednw0kN58.soAe', '[]', '2024-02-29 16:29:22'),
(29, 'lil@lil.lil', '$2y$10$jBsmx7Fdvvu/I4yE3rSed.nf/GNJik5eVzXO.EeUFoIuOZBTjG2xe', '[]', '2024-03-01 16:22:50'),
(30, 'lil@lil.lil', '$2y$10$.0pflzqZFOyUBihqqAcKkOxq7ZE4e0PoTfRUvfZNMoUj8/.nQS2YW', '[]', '2024-03-01 16:32:51'),
(31, 'lil@lil.lil', '$2y$10$q5TVhkM5VCSpuNKmLtvYUujerbOlFvM03k0qLAP2g7JNE158gzLX2', '[]', '2024-03-01 16:34:50'),
(32, 'lil@lil.lil', '$2y$10$joJRN9K8r4q4q8mpT3v9jeidR1L1uEAqM.t54nQG8qVKlhH7J7Qtq', '[]', '2024-03-01 16:34:53'),
(33, 'lil@lil.lil', '$2y$10$I9KVr4JumgPbYXtKxUjznemtwan2mh2E0D71Up8C0XrRJLEYdhzYS', '[]', '2024-03-01 16:37:24'),
(34, 'lil@lil.lil', '$2y$10$bfJdDnTOnd8dqwC37ijXPezytWfYcBdMLVQgA4OFLHrQnsWJ765K6', '[]', '2024-03-01 16:41:39'),
(35, 'lal@lal.lal', '$2y$10$6nUxSJBqA8sUmoXrH1UAIO76Xrjzq.PRKlZlmeUlpIo3hz7hVbUve', '[]', '2024-03-05 11:23:25'),
(36, 'lal@lal.lal', '$2y$10$i7jqo6RaW8TbAPEw1AZUDuyrwYG0F3fa3ccVo0BfTyopcSN/OakQi', '[]', '2024-03-05 11:24:16');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_commentaire_user` (`user_id`),
  ADD KEY `fk_commentaire_post` (`post_id`);

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_contact_user` (`user_id`);

--
-- Index pour la table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_post_user` (`user_id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `commentaire`
--
ALTER TABLE `commentaire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT pour la table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD CONSTRAINT `fk_commentaire_post` FOREIGN KEY (`post_id`) REFERENCES `post` (`id`),
  ADD CONSTRAINT `fk_commentaire_user` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Contraintes pour la table `contact`
--
ALTER TABLE `contact`
  ADD CONSTRAINT `fk_contact_user` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Contraintes pour la table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `fk_post_user` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
