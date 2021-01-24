-- phpMyAdmin SQL Dump
-- version 4.6.6deb5ubuntu0.5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Dim 24 Janvier 2021 à 02:29
-- Version du serveur :  10.1.47-MariaDB-0ubuntu0.18.04.1
-- Version de PHP :  7.2.24-0ubuntu0.18.04.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `etudedecas`
--
CREATE DATABASE IF NOT EXISTS `etudedecas` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `etudedecas`;

-- --------------------------------------------------------

--
-- Structure de la table `Appareil`
--

CREATE TABLE `Appareil` (
  `id_appareil` int(11) NOT NULL,
  `nom_appareil` varchar(50) DEFAULT NULL,
  `id_type_appareil` int(11) NOT NULL,
  `allume` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `Appareil`
--

INSERT INTO `Appareil` (`id_appareil`, `nom_appareil`, `id_type_appareil`, `allume`) VALUES
(1, 'Ordinateur jules', 4, 1),
(2, 'radiateur salon', 7, 0),
(3, 'TV du salon', 3, 0),
(4, 'frigo salle a manger', 1, 0),
(5, 'frigo salle a manger', 1, 0),
(6, 'frigo salle a manger', 1, 0),
(7, 'machine à laver', 5, 0);

-- --------------------------------------------------------

--
-- Structure de la table `Appartement`
--

CREATE TABLE `Appartement` (
  `id_appartement` int(11) NOT NULL,
  `numero_appart` int(11) DEFAULT NULL,
  `id_deg_cit` int(11) NOT NULL,
  `id_type_appart` int(11) NOT NULL,
  `id_secu` int(11) NOT NULL,
  `id_maison` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `Appartement`
--

INSERT INTO `Appartement` (`id_appartement`, `numero_appart`, `id_deg_cit`, `id_type_appart`, `id_secu`, `id_maison`) VALUES
(1, 12, 1, 1, 1, 17),
(2, 13, 1, 3, 1, 17),
(3, 14, 1, 5, 1, 16),
(4, 3, 1, 2, 2, 15),
(5, 8, 1, 5, 4, 15);

-- --------------------------------------------------------

--
-- Structure de la table `Consommer`
--

CREATE TABLE `Consommer` (
  `id_type_appareil` int(11) NOT NULL,
  `id_ressource` int(11) NOT NULL,
  `conso` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `Consommer`
--

INSERT INTO `Consommer` (`id_type_appareil`, `id_ressource`, `conso`) VALUES
(1, 1, 0.55),
(2, 1, 0.246),
(3, 1, 0.271),
(4, 1, 2.192),
(5, 1, 0.7),
(5, 2, 75),
(6, 1, 0.959),
(7, 1, 0.33);

-- --------------------------------------------------------

--
-- Structure de la table `Degre_citoyennete`
--

CREATE TABLE `Degre_citoyennete` (
  `id_deg_cit` int(11) NOT NULL,
  `libelle` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `Degre_citoyennete`
--

INSERT INTO `Degre_citoyennete` (`id_deg_cit`, `libelle`) VALUES
(1, 'Indefini'),
(2, 'Fort'),
(3, 'Moyen'),
(4, 'Faible');

-- --------------------------------------------------------

--
-- Structure de la table `Degre_isolation`
--

CREATE TABLE `Degre_isolation` (
  `id_deg_iso` int(11) NOT NULL,
  `libelle` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `Degre_isolation`
--

INSERT INTO `Degre_isolation` (`id_deg_iso`, `libelle`) VALUES
(1, 'Indefini'),
(2, 'Fort'),
(3, 'Moyen'),
(4, 'Faible');

-- --------------------------------------------------------

--
-- Structure de la table `Degre_securite`
--

CREATE TABLE `Degre_securite` (
  `id_secu` int(11) NOT NULL,
  `libelle` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `Degre_securite`
--

INSERT INTO `Degre_securite` (`id_secu`, `libelle`) VALUES
(1, 'Indefini'),
(2, 'Fort'),
(3, 'Moyen'),
(4, 'Faible');

-- --------------------------------------------------------

--
-- Structure de la table `Departement`
--

CREATE TABLE `Departement` (
  `nom_departement` varchar(50) NOT NULL,
  `nom_region` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `Departement`
--

INSERT INTO `Departement` (`nom_departement`, `nom_region`) VALUES
('Finistere', 'Bretagne'),
('Indre et Loire', 'Centre val de Loire'),
('Loiret', 'Centre val de Loire');

-- --------------------------------------------------------

--
-- Structure de la table `Emplacement`
--

CREATE TABLE `Emplacement` (
  `id_appareil` int(11) NOT NULL,
  `Description` varchar(200) DEFAULT NULL,
  `id_piece` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `Emplacement`
--

INSERT INTO `Emplacement` (`id_appareil`, `Description`, `id_piece`) VALUES
(1, 'Bureau de la chambre', 3),
(2, 'mur droit du salon sous la fenêtre', 5),
(3, 'Sur le meuble TV', 5),
(4, 'derriere la table', 7),
(5, 'derriere la table', 7),
(6, 'derriere la table', 7),
(7, 'étage', 8);

-- --------------------------------------------------------

--
-- Structure de la table `Fonctionner`
--

CREATE TABLE `Fonctionner` (
  `id_appareil` int(11) NOT NULL,
  `debut_fonction` datetime NOT NULL,
  `fin_fonction` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `Fonctionner`
--

INSERT INTO `Fonctionner` (`id_appareil`, `debut_fonction`, `fin_fonction`) VALUES
(2, '2021-01-23 22:40:34', '2021-01-23 22:40:34'),
(2, '2021-01-23 22:46:32', '2021-01-23 22:46:32'),
(2, '2021-01-23 23:00:21', '2021-01-23 23:00:24'),
(2, '2021-01-24 00:30:27', '2021-01-24 00:30:32'),
(3, '2021-01-24 00:32:25', '2021-01-24 00:32:32'),
(4, '2021-01-24 00:49:32', '2021-01-24 00:49:41'),
(4, '2021-01-24 01:45:17', '2021-01-24 01:45:22'),
(7, '2021-01-24 00:32:43', '2021-01-24 00:32:52'),
(7, '2021-01-24 00:33:01', '2021-01-24 00:33:15'),
(7, '2021-01-24 00:37:34', '2021-01-24 00:38:00');

-- --------------------------------------------------------

--
-- Structure de la table `Genre`
--

CREATE TABLE `Genre` (
  `id_genre` int(11) NOT NULL,
  `libelle` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `Genre`
--

INSERT INTO `Genre` (`id_genre`, `libelle`) VALUES
(1, 'Homme'),
(2, 'Femme'),
(3, 'Autre');

-- --------------------------------------------------------

--
-- Structure de la table `Louer`
--

CREATE TABLE `Louer` (
  `id_utilisateur` int(11) NOT NULL,
  `id_appartement` int(11) NOT NULL,
  `date_fin` date DEFAULT NULL,
  `date_debut` date DEFAULT NULL,
  `nb_habitants` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `Louer`
--

INSERT INTO `Louer` (`id_utilisateur`, `id_appartement`, `date_fin`, `date_debut`, `nb_habitants`) VALUES
(4, 1, NULL, '2021-01-24', 4),
(4, 3, NULL, '2021-01-24', 5),
(4, 4, NULL, '2021-01-24', 3);

-- --------------------------------------------------------

--
-- Structure de la table `Maison`
--

CREATE TABLE `Maison` (
  `id_maison` int(11) NOT NULL,
  `nom_maison` varchar(50) DEFAULT NULL,
  `evaluation` varchar(50) DEFAULT NULL,
  `rue` varchar(50) DEFAULT NULL,
  `numero_maison` int(11) DEFAULT NULL,
  `code_postal` varchar(50) NOT NULL,
  `id_deg_cit` int(11) NOT NULL,
  `id_deg_iso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `Maison`
--

INSERT INTO `Maison` (`id_maison`, `nom_maison`, `evaluation`, `rue`, `numero_maison`, `code_postal`, `id_deg_cit`, `id_deg_iso`) VALUES
(15, 'Loft proche fleuve', 'Neuf', 'rue du fleuve', 2, '29000', 1, 2),
(16, 'Maison du lac', 'Bon état', 'rue du lac', 4, '29000', 1, 3),
(17, 'Maison ville', 'Abimée', 'rue du boucher', 12, '29000', 1, 4);

-- --------------------------------------------------------

--
-- Structure de la table `Piece`
--

CREATE TABLE `Piece` (
  `id_piece` int(11) NOT NULL,
  `libelle_piece` varchar(50) DEFAULT NULL,
  `id_appartement` int(11) NOT NULL,
  `id_type_piece` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `Piece`
--

INSERT INTO `Piece` (`id_piece`, `libelle_piece`, `id_appartement`, `id_type_piece`) VALUES
(1, 'Cuisine', 5, 2),
(2, 'Salon', 5, 3),
(3, 'Chambre 1', 5, 4),
(4, 'Chambre 2', 5, 4),
(5, 'Salon', 4, 3),
(6, 'Chambre 3', 4, 4),
(7, 'salle a manger', 4, 9),
(8, 'Cellier étage', 4, 7);

-- --------------------------------------------------------

--
-- Structure de la table `Posseder`
--

CREATE TABLE `Posseder` (
  `id_utilisateur` int(11) NOT NULL,
  `id_maison` int(11) NOT NULL,
  `date_fin` date DEFAULT NULL,
  `date_debut` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `Posseder`
--

INSERT INTO `Posseder` (`id_utilisateur`, `id_maison`, `date_fin`, `date_debut`) VALUES
(4, 15, NULL, '0000-00-00'),
(4, 16, NULL, '2021-01-06'),
(4, 17, NULL, '2021-01-20');

-- --------------------------------------------------------

--
-- Structure de la table `Produire`
--

CREATE TABLE `Produire` (
  `id_type_appareil` int(11) NOT NULL,
  `id_substance` int(11) NOT NULL,
  `conso` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `Produire`
--

INSERT INTO `Produire` (`id_type_appareil`, `id_substance`, `conso`) VALUES
(1, 1, 0.7),
(2, 1, 0.274),
(3, 1, 0.285),
(4, 1, 2.34),
(5, 1, 0.9),
(6, 1, 1.04),
(7, 1, 6.4);

-- --------------------------------------------------------

--
-- Structure de la table `Region`
--

CREATE TABLE `Region` (
  `nom_region` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `Region`
--

INSERT INTO `Region` (`nom_region`) VALUES
('Bretagne'),
('Centre val de Loire');

-- --------------------------------------------------------

--
-- Structure de la table `Ressource`
--

CREATE TABLE `Ressource` (
  `id_ressource` int(11) NOT NULL,
  `nom_ressource` varchar(50) NOT NULL,
  `valeur_minimale` double DEFAULT NULL,
  `valeur_maximale` double DEFAULT NULL,
  `valeur_critique` double DEFAULT NULL,
  `valeur_ideale` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `Ressource`
--

INSERT INTO `Ressource` (`id_ressource`, `nom_ressource`, `valeur_minimale`, `valeur_maximale`, `valeur_critique`, `valeur_ideale`) VALUES
(1, 'Electricité', NULL, NULL, NULL, NULL),
(2, 'Eau', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `Substance`
--

CREATE TABLE `Substance` (
  `id_substance` int(11) NOT NULL,
  `nom_substance` varchar(50) DEFAULT NULL,
  `valeur_minimale` double DEFAULT NULL,
  `valeur_maximale` double DEFAULT NULL,
  `valeur_critique` double DEFAULT NULL,
  `valeur_ideale` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `Substance`
--

INSERT INTO `Substance` (`id_substance`, `nom_substance`, `valeur_minimale`, `valeur_maximale`, `valeur_critique`, `valeur_ideale`) VALUES
(1, 'Chaleur', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `Type_appareil`
--

CREATE TABLE `Type_appareil` (
  `id_type_appareil` int(11) NOT NULL,
  `libelle` varchar(50) DEFAULT NULL,
  `demo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `Type_appareil`
--

INSERT INTO `Type_appareil` (`id_type_appareil`, `libelle`, `demo`) VALUES
(1, 'Frigo', 'https://www.youtube.com/watch?v=fY511Gr0lYU'),
(2, 'Micro-ondes', 'https://www.youtube.com/watch?v=u3dVsSv3nlg'),
(3, 'TV', 'https://www.youtube.com/watch?v=m8lRVQP2jOY'),
(4, 'Ordinateur', 'https://www.youtube.com/watch?v=-SiDtQUI2v0'),
(5, 'Machine a laver', 'https://www.youtube.com/watch?v=Hs77bsXVw-8&ab_channel=Polyn%C3%A9siela1%C3%A8rePolyn%C3%A9siela1%C3%A8re'),
(6, 'Seche-linge', 'https://www.youtube.com/watch?v=f62Mqzw0eX4&ab_channel=Electro%26CuisineDEFITEC'),
(7, 'Radiateur', 'https://www.youtube.com/watch?v=WG1xDU1vFe8&ab_channel=Electro%26CuisineDEFITECElectro%26CuisineDEFITEC');

-- --------------------------------------------------------

--
-- Structure de la table `Type_appartement`
--

CREATE TABLE `Type_appartement` (
  `id_type_appart` int(11) NOT NULL,
  `libelle` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `Type_appartement`
--

INSERT INTO `Type_appartement` (`id_type_appart`, `libelle`) VALUES
(1, 'F1'),
(2, 'F2'),
(3, 'T1'),
(4, 'T2'),
(5, 'T3');

-- --------------------------------------------------------

--
-- Structure de la table `Type_piece`
--

CREATE TABLE `Type_piece` (
  `id_type_piece` int(11) NOT NULL,
  `libelle` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `Type_piece`
--

INSERT INTO `Type_piece` (`id_type_piece`, `libelle`) VALUES
(1, 'Entree'),
(2, 'Cuisine'),
(3, 'Salon'),
(4, 'Chambre'),
(5, 'Salle de bain'),
(6, 'Toilettes'),
(7, 'Cellier'),
(8, 'Cave'),
(9, 'Salle a manger');

-- --------------------------------------------------------

--
-- Structure de la table `Utilisateur`
--

CREATE TABLE `Utilisateur` (
  `id_utilisateur` int(11) NOT NULL,
  `admin` int(11) DEFAULT NULL,
  `prenom` varchar(50) DEFAULT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `actif` int(11) DEFAULT NULL,
  `tel` varchar(50) DEFAULT NULL,
  `date_naissance` date DEFAULT NULL,
  `mail` varchar(50) DEFAULT NULL,
  `date_creation` date DEFAULT NULL,
  `id_genre` int(11) NOT NULL,
  `mdp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `Utilisateur`
--

INSERT INTO `Utilisateur` (`id_utilisateur`, `admin`, `prenom`, `nom`, `actif`, `tel`, `date_naissance`, `mail`, `date_creation`, `id_genre`, `mdp`) VALUES
(4, 0, 'damien', 'mimi', 1, '0669696969', '2020-12-11', 'damien@hotmail.com', '2021-01-04', 1, 'damien'),
(8, 1, 'michel', 'michou', 1, '0248747895', '2020-12-08', 'admin', '2020-12-01', 1, 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `Ville`
--

CREATE TABLE `Ville` (
  `code_postal` varchar(50) NOT NULL,
  `nom_ville` varchar(50) NOT NULL,
  `nom_departement` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `Ville`
--

INSERT INTO `Ville` (`code_postal`, `nom_ville`, `nom_departement`) VALUES
('29000', 'Quimper', 'Finistere'),
('37000', 'Tours', 'Indre et Loire'),
('45000', 'Orleans', 'Loiret');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `Appareil`
--
ALTER TABLE `Appareil`
  ADD PRIMARY KEY (`id_appareil`),
  ADD KEY `id_type_appareil` (`id_type_appareil`);

--
-- Index pour la table `Appartement`
--
ALTER TABLE `Appartement`
  ADD PRIMARY KEY (`id_appartement`),
  ADD KEY `id_deg_cit` (`id_deg_cit`),
  ADD KEY `id_type_appart` (`id_type_appart`),
  ADD KEY `id_secu` (`id_secu`),
  ADD KEY `id_maison` (`id_maison`);

--
-- Index pour la table `Consommer`
--
ALTER TABLE `Consommer`
  ADD PRIMARY KEY (`id_type_appareil`,`id_ressource`),
  ADD KEY `FK_idRess` (`id_ressource`);

--
-- Index pour la table `Degre_citoyennete`
--
ALTER TABLE `Degre_citoyennete`
  ADD PRIMARY KEY (`id_deg_cit`);

--
-- Index pour la table `Degre_isolation`
--
ALTER TABLE `Degre_isolation`
  ADD PRIMARY KEY (`id_deg_iso`);

--
-- Index pour la table `Degre_securite`
--
ALTER TABLE `Degre_securite`
  ADD PRIMARY KEY (`id_secu`);

--
-- Index pour la table `Departement`
--
ALTER TABLE `Departement`
  ADD PRIMARY KEY (`nom_departement`),
  ADD KEY `nom_region` (`nom_region`);

--
-- Index pour la table `Emplacement`
--
ALTER TABLE `Emplacement`
  ADD PRIMARY KEY (`id_appareil`),
  ADD KEY `id_piece` (`id_piece`);

--
-- Index pour la table `Fonctionner`
--
ALTER TABLE `Fonctionner`
  ADD PRIMARY KEY (`id_appareil`,`debut_fonction`);

--
-- Index pour la table `Genre`
--
ALTER TABLE `Genre`
  ADD PRIMARY KEY (`id_genre`);

--
-- Index pour la table `Louer`
--
ALTER TABLE `Louer`
  ADD PRIMARY KEY (`id_utilisateur`,`id_appartement`),
  ADD KEY `id_appartement` (`id_appartement`);

--
-- Index pour la table `Maison`
--
ALTER TABLE `Maison`
  ADD PRIMARY KEY (`id_maison`),
  ADD KEY `code_postal` (`code_postal`),
  ADD KEY `id_deg_cit` (`id_deg_cit`),
  ADD KEY `id_deg_iso` (`id_deg_iso`);

--
-- Index pour la table `Piece`
--
ALTER TABLE `Piece`
  ADD PRIMARY KEY (`id_piece`),
  ADD KEY `id_appartement` (`id_appartement`),
  ADD KEY `id_type_piece` (`id_type_piece`);

--
-- Index pour la table `Posseder`
--
ALTER TABLE `Posseder`
  ADD PRIMARY KEY (`id_utilisateur`,`id_maison`),
  ADD KEY `id_maison` (`id_maison`);

--
-- Index pour la table `Produire`
--
ALTER TABLE `Produire`
  ADD PRIMARY KEY (`id_type_appareil`,`id_substance`),
  ADD KEY `FK_idSubstance` (`id_substance`);

--
-- Index pour la table `Region`
--
ALTER TABLE `Region`
  ADD PRIMARY KEY (`nom_region`);

--
-- Index pour la table `Ressource`
--
ALTER TABLE `Ressource`
  ADD PRIMARY KEY (`id_ressource`);

--
-- Index pour la table `Substance`
--
ALTER TABLE `Substance`
  ADD PRIMARY KEY (`id_substance`);

--
-- Index pour la table `Type_appareil`
--
ALTER TABLE `Type_appareil`
  ADD PRIMARY KEY (`id_type_appareil`);

--
-- Index pour la table `Type_appartement`
--
ALTER TABLE `Type_appartement`
  ADD PRIMARY KEY (`id_type_appart`);

--
-- Index pour la table `Type_piece`
--
ALTER TABLE `Type_piece`
  ADD PRIMARY KEY (`id_type_piece`);

--
-- Index pour la table `Utilisateur`
--
ALTER TABLE `Utilisateur`
  ADD PRIMARY KEY (`id_utilisateur`),
  ADD KEY `id_genre` (`id_genre`);

--
-- Index pour la table `Ville`
--
ALTER TABLE `Ville`
  ADD PRIMARY KEY (`code_postal`),
  ADD KEY `nom_departement` (`nom_departement`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `Appareil`
--
ALTER TABLE `Appareil`
  MODIFY `id_appareil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `Appartement`
--
ALTER TABLE `Appartement`
  MODIFY `id_appartement` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `Degre_citoyennete`
--
ALTER TABLE `Degre_citoyennete`
  MODIFY `id_deg_cit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `Degre_isolation`
--
ALTER TABLE `Degre_isolation`
  MODIFY `id_deg_iso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `Degre_securite`
--
ALTER TABLE `Degre_securite`
  MODIFY `id_secu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `Genre`
--
ALTER TABLE `Genre`
  MODIFY `id_genre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `Maison`
--
ALTER TABLE `Maison`
  MODIFY `id_maison` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT pour la table `Piece`
--
ALTER TABLE `Piece`
  MODIFY `id_piece` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `Ressource`
--
ALTER TABLE `Ressource`
  MODIFY `id_ressource` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `Substance`
--
ALTER TABLE `Substance`
  MODIFY `id_substance` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `Type_appareil`
--
ALTER TABLE `Type_appareil`
  MODIFY `id_type_appareil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `Type_appartement`
--
ALTER TABLE `Type_appartement`
  MODIFY `id_type_appart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `Type_piece`
--
ALTER TABLE `Type_piece`
  MODIFY `id_type_piece` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT pour la table `Utilisateur`
--
ALTER TABLE `Utilisateur`
  MODIFY `id_utilisateur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `Appareil`
--
ALTER TABLE `Appareil`
  ADD CONSTRAINT `Appareil_ibfk_1` FOREIGN KEY (`id_type_appareil`) REFERENCES `Type_appareil` (`id_type_appareil`);

--
-- Contraintes pour la table `Appartement`
--
ALTER TABLE `Appartement`
  ADD CONSTRAINT `Appartement_ibfk_1` FOREIGN KEY (`id_deg_cit`) REFERENCES `Degre_citoyennete` (`id_deg_cit`),
  ADD CONSTRAINT `Appartement_ibfk_2` FOREIGN KEY (`id_type_appart`) REFERENCES `Type_appartement` (`id_type_appart`),
  ADD CONSTRAINT `Appartement_ibfk_3` FOREIGN KEY (`id_secu`) REFERENCES `Degre_securite` (`id_secu`),
  ADD CONSTRAINT `Appartement_ibfk_4` FOREIGN KEY (`id_maison`) REFERENCES `Maison` (`id_maison`);

--
-- Contraintes pour la table `Consommer`
--
ALTER TABLE `Consommer`
  ADD CONSTRAINT `Consommer_ibfk_1` FOREIGN KEY (`id_type_appareil`) REFERENCES `Type_appareil` (`id_type_appareil`),
  ADD CONSTRAINT `Consommer_ibfk_2` FOREIGN KEY (`id_ressource`) REFERENCES `Ressource` (`id_ressource`),
  ADD CONSTRAINT `FK_idRess` FOREIGN KEY (`id_ressource`) REFERENCES `Ressource` (`id_ressource`),
  ADD CONSTRAINT `FK_idTypeApp` FOREIGN KEY (`id_type_appareil`) REFERENCES `Type_appareil` (`id_type_appareil`);

--
-- Contraintes pour la table `Departement`
--
ALTER TABLE `Departement`
  ADD CONSTRAINT `Departement_ibfk_1` FOREIGN KEY (`nom_region`) REFERENCES `Region` (`nom_region`);

--
-- Contraintes pour la table `Emplacement`
--
ALTER TABLE `Emplacement`
  ADD CONSTRAINT `Emplacement_ibfk_1` FOREIGN KEY (`id_appareil`) REFERENCES `Appareil` (`id_appareil`),
  ADD CONSTRAINT `Emplacement_ibfk_2` FOREIGN KEY (`id_piece`) REFERENCES `Piece` (`id_piece`);

--
-- Contraintes pour la table `Fonctionner`
--
ALTER TABLE `Fonctionner`
  ADD CONSTRAINT `Fonctionner_ibfk_1` FOREIGN KEY (`id_appareil`) REFERENCES `Appareil` (`id_appareil`);

--
-- Contraintes pour la table `Louer`
--
ALTER TABLE `Louer`
  ADD CONSTRAINT `Louer_ibfk_1` FOREIGN KEY (`id_utilisateur`) REFERENCES `Utilisateur` (`id_utilisateur`),
  ADD CONSTRAINT `Louer_ibfk_2` FOREIGN KEY (`id_appartement`) REFERENCES `Appartement` (`id_appartement`);

--
-- Contraintes pour la table `Maison`
--
ALTER TABLE `Maison`
  ADD CONSTRAINT `Maison_ibfk_1` FOREIGN KEY (`code_postal`) REFERENCES `Ville` (`code_postal`),
  ADD CONSTRAINT `Maison_ibfk_2` FOREIGN KEY (`id_deg_cit`) REFERENCES `Degre_citoyennete` (`id_deg_cit`),
  ADD CONSTRAINT `Maison_ibfk_3` FOREIGN KEY (`id_deg_iso`) REFERENCES `Degre_isolation` (`id_deg_iso`);

--
-- Contraintes pour la table `Piece`
--
ALTER TABLE `Piece`
  ADD CONSTRAINT `Piece_ibfk_1` FOREIGN KEY (`id_appartement`) REFERENCES `Appartement` (`id_appartement`),
  ADD CONSTRAINT `Piece_ibfk_2` FOREIGN KEY (`id_type_piece`) REFERENCES `Type_piece` (`id_type_piece`);

--
-- Contraintes pour la table `Posseder`
--
ALTER TABLE `Posseder`
  ADD CONSTRAINT `Posseder_ibfk_1` FOREIGN KEY (`id_utilisateur`) REFERENCES `Utilisateur` (`id_utilisateur`),
  ADD CONSTRAINT `Posseder_ibfk_2` FOREIGN KEY (`id_maison`) REFERENCES `Maison` (`id_maison`);

--
-- Contraintes pour la table `Produire`
--
ALTER TABLE `Produire`
  ADD CONSTRAINT `FK_idSubstance` FOREIGN KEY (`id_substance`) REFERENCES `Substance` (`id_substance`),
  ADD CONSTRAINT `FK_idTypeAppProduire` FOREIGN KEY (`id_type_appareil`) REFERENCES `Type_appareil` (`id_type_appareil`);

--
-- Contraintes pour la table `Utilisateur`
--
ALTER TABLE `Utilisateur`
  ADD CONSTRAINT `Utilisateur_ibfk_1` FOREIGN KEY (`id_genre`) REFERENCES `Genre` (`id_genre`);

--
-- Contraintes pour la table `Ville`
--
ALTER TABLE `Ville`
  ADD CONSTRAINT `Ville_ibfk_1` FOREIGN KEY (`nom_departement`) REFERENCES `Departement` (`nom_departement`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
