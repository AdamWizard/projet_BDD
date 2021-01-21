-- phpMyAdmin SQL Dump
-- version 4.6.6deb5ubuntu0.5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Mer 20 Janvier 2021 à 15:20
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



--
-- Structure de la table `Appareil`
--

CREATE TABLE `Appareil` (
  `id_appareil` int(11) NOT NULL,
  `nom_appareil` varchar(50) DEFAULT NULL,
  `demo` varchar(200) DEFAULT NULL,
  `debut_fonctionnement` datetime DEFAULT NULL,
  `fin_fonctionnement` datetime DEFAULT NULL,
  `id_type_appareil` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



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
-- Structure de la table `Consommer`
--

CREATE TABLE `Consommer` (
  `id_ressource` int(11) NOT NULL,
  `id_appareil` int(11) NOT NULL,
  `Conso` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



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
(1, 'Indefini');


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
(1, 'Indefini');


--
-- Structure de la table `Degre_securite`
--

CREATE TABLE `Degre_securite` (
  `id_secu` int(11) NOT NULL,
  `libelle` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



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


--
-- Structure de la table `Emplacement`
--

CREATE TABLE `Emplacement` (
  `id_appareil` int(11) NOT NULL,
  `Description` varchar(200) DEFAULT NULL,
  `id_piece` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



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
(7, 'myhouse', 'Super niquel', 'rue des poussieres', 12, '29000', 1, 1),
(8, 'myhouse', 'Super niquel', 'rue des poussieres', 12, '29000', 1, 1),
(9, 'myhouse', 'Super niquel', 'rue des poussieres', 12, '29000', 1, 1),
(10, 'myhouse', 'Super niquel', 'rue des poussieres', 12, '29000', 1, 1),
(11, 'myhouse', 'Super niquel', 'rue des poussieres', 12, '29000', 1, 1),
(12, 'myhouse', 'Super niquel', 'rue des poussieres', 12, '29000', 1, 1),
(13, 'myhouse', 'Super niquel', 'rue des poussieres', 2, '29000', 1, 1),
(14, 'myhouse', 'Super niquel', 'rue des poussieres', 2, '29000', 1, 1),
(15, 'myhouse', 'Super niquel', 'rue des poussieres', 2, '29000', 1, 1),
(16, 'myhouse', 'Super niquel', 'rue des poussieres', 2, '29000', 1, 1);



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
(4, 16, NULL, '2021-01-06');



--
-- Structure de la table `PossederAppareil`
--

CREATE TABLE `PossederAppareil` (
  `id_appartement` int(11) NOT NULL,
  `id_appareil` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



--
-- Structure de la table `Produire`
--

CREATE TABLE `Produire` (
  `id_appareil` int(11) NOT NULL,
  `id_substance` int(11) NOT NULL,
  `Conso` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



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
-- Structure de la table `Type_appareil`
--

CREATE TABLE `Type_appareil` (
  `id_type_appareil` int(11) NOT NULL,
  `libelle` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



--
-- Structure de la table `Type_appartement`
--

CREATE TABLE `Type_appartement` (
  `id_type_appart` int(11) NOT NULL,
  `libelle` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



--
-- Structure de la table `Type_piece`
--

CREATE TABLE `Type_piece` (
  `id_type_piece` int(11) NOT NULL,
  `libelle` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



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
(4, 0, 'damien', 'mimi', 1, '0669696969', '2020-12-11', 'damien@hotmail.com', NULL, 1, 'dams'),
(5, 0, 'test', 'test', 1, '0669696969', '2020-12-19', 'dam@dam.fr', '2020-12-19', 1, 'dams'),
(6, 0, 'adam', 'adam', 1, '0782414574', '2000-12-14', 'adam@gmail.com', '2021-01-04', 1, 'adam'),
(7, 0, 'matmat', 'matmat', 1, '0669696969', '1998-02-02', 'matmat@gmail.com', '2021-01-04', 3, 'mat'),
(8, 0, 'az', 'az', 1, '0669696969', '1998-03-31', 'adam@gmail.com', '2021-01-04', 1, 'adam');



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
  ADD PRIMARY KEY (`id_ressource`,`id_appareil`),
  ADD KEY `id_appareil` (`id_appareil`);

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
-- Index pour la table `PossederAppareil`
--
ALTER TABLE `PossederAppareil`
  ADD PRIMARY KEY (`id_appartement`,`id_appareil`),
  ADD KEY `id_appareil` (`id_appareil`);

--
-- Index pour la table `Produire`
--
ALTER TABLE `Produire`
  ADD PRIMARY KEY (`id_appareil`,`id_substance`),
  ADD KEY `id_substance` (`id_substance`);

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
  MODIFY `id_appareil` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `Appartement`
--
ALTER TABLE `Appartement`
  MODIFY `id_appartement` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `Degre_citoyennete`
--
ALTER TABLE `Degre_citoyennete`
  MODIFY `id_deg_cit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `Degre_isolation`
--
ALTER TABLE `Degre_isolation`
  MODIFY `id_deg_iso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `Degre_securite`
--
ALTER TABLE `Degre_securite`
  MODIFY `id_secu` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `Genre`
--
ALTER TABLE `Genre`
  MODIFY `id_genre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `Maison`
--
ALTER TABLE `Maison`
  MODIFY `id_maison` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT pour la table `Piece`
--
ALTER TABLE `Piece`
  MODIFY `id_piece` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `Ressource`
--
ALTER TABLE `Ressource`
  MODIFY `id_ressource` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `Substance`
--
ALTER TABLE `Substance`
  MODIFY `id_substance` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `Type_appareil`
--
ALTER TABLE `Type_appareil`
  MODIFY `id_type_appareil` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `Type_appartement`
--
ALTER TABLE `Type_appartement`
  MODIFY `id_type_appart` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `Type_piece`
--
ALTER TABLE `Type_piece`
  MODIFY `id_type_piece` int(11) NOT NULL AUTO_INCREMENT;
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
  ADD CONSTRAINT `Consommer_ibfk_1` FOREIGN KEY (`id_ressource`) REFERENCES `Ressource` (`id_ressource`),
  ADD CONSTRAINT `Consommer_ibfk_2` FOREIGN KEY (`id_appareil`) REFERENCES `Appareil` (`id_appareil`);

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
-- Contraintes pour la table `PossederAppareil`
--
ALTER TABLE `PossederAppareil`
  ADD CONSTRAINT `PossederAppareil_ibfk_1` FOREIGN KEY (`id_appartement`) REFERENCES `Appartement` (`id_appartement`),
  ADD CONSTRAINT `PossederAppareil_ibfk_2` FOREIGN KEY (`id_appareil`) REFERENCES `Appareil` (`id_appareil`);

--
-- Contraintes pour la table `Produire`
--
ALTER TABLE `Produire`
  ADD CONSTRAINT `Produire_ibfk_1` FOREIGN KEY (`id_appareil`) REFERENCES `Appareil` (`id_appareil`),
  ADD CONSTRAINT `Produire_ibfk_2` FOREIGN KEY (`id_substance`) REFERENCES `Substance` (`id_substance`);

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
