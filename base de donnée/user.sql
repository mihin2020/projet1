-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : jeu. 28 jan. 2021 à 19:36
-- Version du serveur :  5.7.24
-- Version de PHP : 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `admin`
--

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` text NOT NULL,
  `ip` varchar(20) NOT NULL,
  `date_inscription` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `pseudo`, `email`, `password`, `ip`, `date_inscription`) VALUES
(1, 'mignon', 'hugues@gmail.com', '$2y$12$VIa9WVQLFoOOqfvuy0D8au0tyYeWXBYz04lYFCJbeAd2mNeu.mMoq', '::1', '2021-01-27 07:23:57'),
(2, 'ali', 'ali@gmail.com', '$2y$12$gToB3pucrSOgXree.AaoNeuVLuhnjSlNzVIY42bf95mD1zfYugKGC', '::1', '2021-01-27 07:41:10'),
(3, 'az', 'a@gmail.com', '$2y$12$dqVOtSVACNWoU.swqvK8EuaX1aiWrRBLoNiO/CV8SLBrgvM6mrp5q', '::1', '2021-01-27 07:44:49'),
(4, 'aime', 'aime@gmail.com', '$2y$12$pmj2Y0BAlYHpwb7zlltUsOiIDGjEcMFqzXgGeLTn/g3D3yMWj8Pj6', '::1', '2021-01-27 13:42:19'),
(5, 'hubert', 'hubert@gmail.com', '$2y$12$gZDwVWlCZBvlVsOajRIdEemOhmgXpnFWsU/w18V/TQ/c81kt0qkv.', '::1', '2021-01-27 14:25:57'),
(6, 'ariane', 'ariane@gmail.com', '$2y$12$zQ04t.eRrV494/vJq/yfM.KJE.kPMsIGJkbafyOy0U.S8L0fXHIS6', '::1', '2021-01-27 15:09:00'),
(7, 'nafi', 'nafi@gmail.com', '$2y$12$dBAyilb.LmPcpyKnh2pFPuUTTm7ZQt1zeJZO7lFCtEQttJFQxPehm', '::1', '2021-01-27 15:30:54'),
(8, 'ismael', 'ismael@gmail.com', '$2y$12$mK.Fkw3IGcRArys/e.FfzuI9icviv3sj8QrTD5YKxcMPgi2Lr6ile', '::1', '2021-01-27 16:39:30'),
(9, 'h', 'h@gmail.com', '$2y$12$nwPNHDJYSFsfrUDKz20ceu7wRsN4edaABxvIscmChY/LC108rzl0.', '::1', '2021-01-27 16:41:37'),
(10, 'leilla', 'leila@gmail.com', '$2y$12$.moOiPkGPbqHlZr2TbLG2.7Jw7IKJp5Lpu3UZyJOx296dXhnKpFsO', '::1', '2021-01-28 08:40:32'),
(11, 'rebecca', 'rebecca@gmail.com', '$2y$12$pr7LRI.crSSiP2rgcZj1fOV/YxuxFHLe8aXrAUnuYsT1IDI5BSunq', '::1', '2021-01-28 17:34:12');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
