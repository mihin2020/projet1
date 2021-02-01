-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : jeu. 21 jan. 2021 à 22:26
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
-- Base de données : `apprenants`
--

-- --------------------------------------------------------

--
-- Structure de la table `apprenant`
--

CREATE TABLE `apprenant` (
  `email` varchar(50) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `date_naissance` date NOT NULL,
  `adresse` varchar(50) NOT NULL,
  `telephone` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `apprenant`
--

INSERT INTO `apprenant` (`email`, `nom`, `prenom`, `date_naissance`, `adresse`, `telephone`) VALUES
('mihinaime@gmail.com', 'Mihin', 'Aimé', '2021-01-15', 'Saaba', '75672644'),
('niaoneyasmine@gmail.com', 'Niaoné', 'Yasminne', '2021-01-14', 'Balkui', '12002222'),
('bassinareecca@gmail.com', 'Bassina', 'Rébecca', '2021-01-05', 'Ouaga-inter', '79728605'),
('ouiaismael@gmail.com', 'Ouiya', 'Ismael', '2021-01-08', '04 BP 8217 Ouaga 04', '+226 12 45 78 '),
('tapsobanafi@gmail.com', 'Tapsoba', 'Nafissa', '2021-01-03', 'BP 04 58525 ouaga 2', '+226 36 25 98'),
('diabredavy@gmail.com', 'Diabré', 'Davy', '2021-01-04', 'BP 40 78547 ouaga 05', '+226 85 96 54'),
('nanaaicha@gmail.com', 'Nana', 'Aicha', '2020-12-31', 'Ouaga', '77777777'),
('nana@gmail.com', 'Nana', 'Aicha', '2020-12-31', 'Ouaga', '77777777'),
('victorien@gmail.com', 'Ouedraogo', 'Victorien', '2021-01-27', 'saaba', '78787878'),
('cisse@gmail.com', 'CissÃ©', 'Boubacar', '2021-01-10', 'Ouaga', '78898989');

-- --------------------------------------------------------

--
-- Structure de la table `liste`
--

CREATE TABLE `liste` (
  `NOM` varchar(50) NOT NULL,
  `PRENOM` varchar(50) NOT NULL,
  `NAISSANCE` date NOT NULL,
  `ADRESSE` varchar(50) NOT NULL,
  `TELEPHONE` int(15) NOT NULL,
  `EMAIL` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `liste`
--

INSERT INTO `liste` (`NOM`, `PRENOM`, `NAISSANCE`, `ADRESSE`, `TELEPHONE`, `EMAIL`) VALUES
('nana', 'aicha', '2021-01-21', 'katr yaar', 78957865, 'aicha@gmail.com'),
('doukoure', 'amara', '2021-01-09', 'hamdallay', 76686967, 'amara@gmail.com'),
('bassina', 'rebecca', '1993-06-07', 'patte doie', 78957865, 'bassina.@gmail.com'),
('zongo', 'bouba', '2021-01-20', 'katr yaar', 45789562, 'boubv.@gmail.com'),
('diebre', 'davy', '2019-04-21', 'zone 1', 78787878, 'davy@gmail.com'),
('ezin', 'kokou', '1992-02-15', 'nagrin', 54060255, 'ezin@gmail.com'),
('traore', 'franck', '1984-06-21', 'patte doie', 58565452, 'franck@gmail.com'),
('guigma', 'alain', '2020-12-31', 'ouaga 2000', 55897456, 'guigma@gmail.com'),
('mihin', 'hugues aime', '2021-01-28', 'saaba', 75672644, 'huguesaime@gmail.com'),
('bationo', 'max', '2021-01-05', 'dassasgho', 45789562, 'max@gmail.com'),
('Tapsoba', 'Nafissatou', '2020-12-30', 'ouaga 2000', 78898989, 'nafi@gmail.com'),
('niaone', 'yasmine', '2021-01-07', 'ouaga 2000', 55897456, 'niaone.@gmail.com'),
('bazie', 'sarah', '1993-11-21', 'goughin', 70717375, 'sara@gmail.com');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `apprenant`
--
ALTER TABLE `apprenant`
  ADD PRIMARY KEY (`email`);

--
-- Index pour la table `liste`
--
ALTER TABLE `liste`
  ADD PRIMARY KEY (`EMAIL`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
