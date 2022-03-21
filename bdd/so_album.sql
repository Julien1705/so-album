-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 21 mars 2022 à 16:05
-- Version du serveur : 10.4.21-MariaDB
-- Version de PHP : 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `so_album`
--

-- --------------------------------------------------------

--
-- Structure de la table `connexion`
--

CREATE TABLE `connexion` (
  `id` int(11) NOT NULL,
  `login` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `connexion`
--

INSERT INTO `connexion` (`id`, `login`, `password`) VALUES
(7, 'admin@admin.fr', '@dmin');

-- --------------------------------------------------------

--
-- Structure de la table `maquettes_psd`
--

CREATE TABLE `maquettes_psd` (
  `CD_SUPPORT` varchar(15) NOT NULL,
  `CD_MAQUETTE` varchar(10) NOT NULL,
  `NB_ZONES` int(2) NOT NULL,
  `NB_PAGES` int(1) NOT NULL,
  `THEMES` varchar(20) NOT NULL,
  `FAVORI` tinyint(1) NOT NULL DEFAULT 0,
  `ACTIF` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `maquettes_psd`
--

INSERT INTO `maquettes_psd` (`CD_SUPPORT`, `CD_MAQUETTE`, `NB_ZONES`, `NB_PAGES`, `THEMES`, `FAVORI`, `ACTIF`) VALUES
('EGNI_24P', '@00', 1, 1, '', 1, 1),
('EGNI_24P', '@000', 1, 1, '', 0, 1),
('EGNI_24P', '@001', 5, 1, '', 0, 1),
('EGNI_24P', '@002', 3, 1, '', 0, 1),
('EGNI_24P', '@003', 2, 1, '', 0, 1),
('EGNI_24P', '@004', 2, 1, '', 0, 1),
('EGNI_24P', '@006', 4, 1, '', 0, 1),
('EGNI_24P', '@008', 6, 1, '', 0, 1),
('EGNI_24P', '@009', 4, 1, '', 0, 1),
('EGNI_24P', '@01', 1, 2, '', 0, 1),
('EGNI_24P', '@010', 2, 1, '', 0, 1),
('EGNI_24P', '@012', 4, 1, '', 0, 1),
('EGNI_24P', '@013', 7, 1, '', 0, 1),
('EGNI_24P', '@014', 3, 1, '', 0, 1),
('EGNI_24P', '@015', 3, 1, '', 0, 1),
('EGNI_24P', '@016', 3, 1, '', 0, 1),
('EGNI_24P', '@017', 2, 1, '', 0, 1),
('EGNI_24P', '@019', 3, 1, '', 0, 1),
('EGNI_24P', '@02', 2, 2, '', 0, 1),
('EGNI_24P', '@020', 2, 1, '', 0, 1),
('EGNI_24P', '@023', 4, 1, '', 0, 1),
('EGNI_24P', '@024', 4, 1, '', 0, 1),
('EGNI_24P', '@028', 2, 1, '', 0, 1),
('EGNI_24P', '@029', 8, 1, '', 0, 1),
('EGNI_24P', '@031', 2, 1, '', 0, 1),
('EGNI_24P', '@032', 3, 1, '', 0, 1),
('EGNI_24P', '@033', 5, 1, '', 0, 1),
('EGNI_24P', '@035', 7, 1, '', 0, 1),
('EGNI_24P', '@039', 6, 1, '', 0, 1),
('EGNI_24P', '@04', 4, 2, '', 0, 1),
('EGNI_24P', '@040', 7, 1, '', 0, 1),
('EGNI_24P', '@041', 4, 1, '', 0, 1),
('EGNI_24P', '@045', 2, 1, '', 0, 1),
('EGNI_24P', '@048', 2, 1, '', 0, 1),
('EGNI_24P', '@05', 3, 2, '', 0, 1),
('EGNI_24P', '@052', 4, 1, '', 0, 1),
('EGNI_24P', '@058', 2, 1, '', 0, 1),
('EGNI_24P', '@06', 3, 2, '', 0, 1),
('EGNI_24P', '@060', 5, 1, '', 0, 1),
('EGNI_24P', '@064', 3, 1, '', 0, 1),
('EGNI_24P', '@069', 6, 1, '', 0, 1),
('EGNI_24P', '@07', 4, 2, '', 0, 1),
('EGNI_24P', '@071', 3, 1, '', 0, 1),
('EGNI_24P', '@073', 12, 1, '', 0, 1),
('EGNI_24P', '@076', 3, 1, '', 0, 1),
('EGNI_24P', '@077', 9, 1, '', 0, 1),
('EGNI_24P', '@078', 4, 1, '', 0, 1),
('EGNI_24P', '@079', 11, 1, '', 0, 1),
('EGNI_24P', '@08', 6, 2, '', 0, 1),
('EGNI_24P', '@080', 10, 1, '', 0, 1),
('EGNI_24P', '@081', 8, 1, '', 0, 1),
('EGNI_24P', '@082', 2, 1, '', 0, 1),
('EGNI_24P', '@083', 7, 1, '', 0, 1),
('EGNI_24P', '@09', 2, 2, '', 0, 1),
('EGNI_24P', '@090', 3, 1, '', 0, 1),
('EGNI_24P', '@090 2', 3, 1, '', 0, 1),
('EGNI_24P', '@093', 3, 1, '', 0, 1),
('EGNI_24P', '@093 2', 3, 1, '', 0, 1),
('EGNI_24P', '@095', 4, 1, '', 0, 1),
('EGNI_24P', '@097', 3, 1, '', 0, 1),
('EGNI_24P', '@098', 4, 1, '', 0, 1),
('EGNI_24P', '@099', 3, 1, '', 0, 1),
('EGNI_24P', '@104', 4, 1, '', 0, 1),
('EGNI_24P', '@107', 2, 1, '', 0, 1),
('EGNI_24P', '@11', 4, 2, '', 0, 1),
('EGNI_24P', '@110', 2, 1, '', 0, 1),
('EGNI_24P', '@113', 5, 1, '', 0, 1),
('EGNI_24P', '@117', 3, 1, '', 0, 1),
('EGNI_24P', '@118', 4, 1, '', 0, 1),
('EGNI_24P', '@12', 4, 2, '', 0, 1),
('EGNI_24P', '@121', 3, 1, '', 0, 1),
('EGNI_24P', '@125', 2, 1, '', 0, 1),
('EGNI_24P', '@127', 3, 1, '', 0, 1),
('EGNI_24P', '@13', 2, 2, '', 0, 1),
('EGNI_24P', '@134', 6, 1, '', 0, 1),
('EGNI_24P', '@135', 2, 1, '', 0, 1),
('EGNI_24P', '@138', 2, 1, '', 0, 1),
('EGNI_24P', '@14', 8, 2, '', 0, 1),
('EGNI_24P', '@144', 5, 1, '', 0, 1),
('EGNI_24P', '@145', 2, 1, '', 0, 1),
('EGNI_24P', '@146', 3, 1, '', 0, 1),
('EGNI_24P', '@147', 3, 1, '', 0, 1),
('EGNI_24P', '@149', 3, 1, '', 0, 1),
('EGNI_24P', '@15', 5, 2, '', 0, 1),
('EGNI_24P', '@151', 6, 1, '', 0, 1),
('EGNI_24P', '@155', 2, 1, '', 0, 1),
('EGNI_24P', '@160', 4, 1, '', 0, 1),
('EGNI_24P', '@162', 6, 1, '', 0, 1),
('EGNI_24P', '@164', 2, 1, '', 0, 1),
('EGNI_24P', '@166', 4, 1, '', 0, 1),
('EGNI_24P', '@167', 3, 1, '', 0, 1),
('EGNI_24P', '@169', 2, 1, '', 0, 1),
('EGNI_24P', '@16X', 6, 2, '', 0, 1),
('EGNI_24P', '@17', 9, 2, '', 0, 1),
('EGNI_24P', '@170', 7, 1, '', 0, 1),
('EGNI_24P', '@171', 4, 1, '', 0, 1),
('EGNI_24P', '@173', 7, 1, '', 0, 1),
('EGNI_24P', '@174', 3, 1, '', 0, 1),
('EGNI_24P', '@18', 6, 2, '', 0, 1),
('EGNI_24P', '@19', 12, 2, '', 0, 1),
('EGNI_24P', '@199', 3, 1, '', 0, 1),
('EGNI_24P', '@20', 10, 2, '', 0, 1),
('EGNI_24P', '@200', 4, 1, '', 0, 1),
('EGNI_24P', '@202', 6, 1, '', 0, 1),
('EGNI_24P', '@21', 6, 2, '', 0, 1),
('EGNI_24P', '@211', 11, 1, '', 0, 1),
('EGNI_24P', '@213_349', 6, 2, '', 0, 1),
('EGNI_24P', '@22', 9, 2, '', 0, 1),
('EGNI_24P', '@23', 20, 2, '', 0, 1),
('EGNI_24P', '@24', 11, 2, '', 0, 1),
('EGNI_24P', '@25', 10, 2, '', 0, 1),
('EGNI_24P', '@26', 6, 2, '', 0, 1),
('EGNI_24P', '@27', 5, 2, '', 0, 1),
('EGNI_24P', '@28', 10, 2, '', 0, 1),
('EGNI_24P', '@302', 4, 1, '', 0, 1),
('EGNI_24P', '@303', 5, 1, '', 0, 1),
('EGNI_24P', '@307', 3, 1, '', 0, 1),
('EGNI_24P', '@315', 4, 1, '', 0, 1),
('EGNI_24P', '@318', 4, 1, '', 0, 1),
('EGNI_24P', '@320', 5, 1, '', 0, 1),
('EGNI_24P', '@329', 7, 1, '', 0, 1),
('EGNI_24P', '@333', 7, 1, '', 0, 1),
('EGNI_24P', '@900', 18, 2, '', 0, 1),
('EGNI_24P', '@9023', 7, 2, '', 0, 1),
('EGNI_24P', '@9173', 12, 2, '', 0, 1),
('EGNI_24P', '@9200', 3, 2, '', 0, 1),
('EGNI_24P', '@9201', 5, 2, '', 0, 1),
('EGNI_24P', '@9202', 4, 2, '', 0, 1),
('EGNI_24P', '@9203', 4, 2, '', 0, 1),
('EGNI_24P', '@9210', 6, 2, '', 0, 1),
('EGNI_24P', '@9211', 6, 2, '', 0, 1),
('EGNI_24P', '@9212', 6, 2, '', 0, 1),
('EGNI_24P', '@9213', 6, 2, '', 0, 0),
('EGNI_24P', '@9214', 5, 2, '', 0, 1),
('EGNI_24P', '@9215', 5, 2, '', 0, 1),
('EGNI_24P', '@9220', 4, 2, '', 0, 1),
('EGNI_24P', '@9221', 2, 2, '', 0, 1),
('EGNI_24P', '@9222', 3, 2, '', 0, 1),
('EGNI_24P', '@9223', 3, 2, '', 0, 1),
('EGNI_24P', '@9224', 2, 2, '', 0, 1),
('EGNI_24P', '@9225', 4, 2, '', 0, 1),
('EGNI_24P', '@9230', 6, 2, '', 0, 1),
('EGNI_24P', '@9231', 6, 2, '', 0, 1),
('EGNI_24P', '@9232', 4, 2, '', 0, 1),
('EGNI_24P', '@9233', 4, 2, '', 0, 1),
('EGNI_24P', '@9234', 6, 2, '', 0, 1),
('EGNI_24P', '@9235', 5, 2, '', 0, 1),
('EGNI_24P', '@9236', 9, 2, '', 0, 1),
('EGNI_24P', '@9237', 4, 2, '', 0, 1),
('EGNI_24P', '@9238', 4, 2, '', 0, 1),
('EGNI_24P', '@997', 5, 1, '', 0, 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `connexion`
--
ALTER TABLE `connexion`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `connexion`
--
ALTER TABLE `connexion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
