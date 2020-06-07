-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 05 juin 2020 à 13:24
-- Version du serveur :  5.7.24
-- Version de PHP :  7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `covoit1`
--

-- --------------------------------------------------------

--
-- Structure de la table `centredeformation`
--

DROP TABLE IF EXISTS `centredeformation`;
CREATE TABLE IF NOT EXISTS `centredeformation` (
  `nom_etab` varchar(250) NOT NULL,
  `id_ville` int(11) NOT NULL,
  `adresse` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`nom_etab`),
  KEY `fk_cf_ville` (`id_ville`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `centredeformation`
--

INSERT INTO `centredeformation` (`nom_etab`, `id_ville`, `adresse`) VALUES
('ADRIEN TESTUD                 ', 2, '62 RUE EMILE ZOLA, BP 65'),
('ALBERT CAMUS                  ', 4, '32 BIS RUE DE LA LOIRE BP 180'),
('ALBERT THOMAS                 ', 10, '20 RUE ALBERT THOMAS'),
('BEAUREGARD                    ', 7, ' 4 AVENUE PAUL CEZANNE'),
('BENOIT CHARVET                ', 12, '30 AVENUE BENOIT CHARVET'),
('BENOIT FOURNEYRON             ', 12, '24 RUE VIRGILE'),
('CARNOT                        ', 10, '35 AVENUE CARNOT'),
('CLAUDE LEBOIS                 ', 11, '8 BOULEVARD ALAMAGNY BP 128'),
('COLLEGE JULES VALLES', 5, '7 RUE ROBESPIERRE'),
('DU HAUT FOREZ                 ', 14, 'LE BOURG BP 191'),
('ETIENNE LEGRAND               ', 6, '8 BOULEVARD CHARLES GALLET BP 25'),
('ETIENNE MIMARD                ', 12, '32 RUE ETIENNE MIMARD'),
('FRANCOIS MAURIAC FOREZ        ', 1, '32 RUE DES BULLIEUX'),
('GEORGES BRASSENS              ', 9, '8 RUE GRANGE BURLAT'),
('HONORE D\'URFE                 ', 12, '1 IMPASSE LE CHATELIER BP 90259'),
('HOTELIER                      ', 11, '18 RUE FRANCOIS GILLET BP 21'),
('JACOB HOLTZER                 ', 4, '5 RUE MICHELET BP 170 '),
('JEREMIE DE LA RUE             ', 3, 'ROUTE DE SAINT BONNET BP 39'),
('NELSON MANDELA', 13, 'RUE DES CEDRES'),
('PIERRE COTON                  ', 8, 'LE BOURG'),
('PIERRE DESGRANGES             ', 1, '32 RUE DES BULLIEUX'),
('PRECIEUX', 7, 'BP 204'),
('RENE CASSIN                   ', 9, '11 CHEMIN SAINTE BARBE');

-- --------------------------------------------------------

--
-- Structure de la table `identif_moderateur`
--

DROP TABLE IF EXISTS `identif_moderateur`;
CREATE TABLE IF NOT EXISTS `identif_moderateur` (
  `moderateur_mail` varchar(250) NOT NULL,
  `moderateur_code` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `identif_moderateur`
--

INSERT INTO `identif_moderateur` (`moderateur_mail`, `moderateur_code`) VALUES
('covoit2020@gmail.com\r\n', 'wa5cNE39U');

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

DROP TABLE IF EXISTS `message`;
CREATE TABLE IF NOT EXISTS `message` (
  `mes_nom` varchar(250) NOT NULL,
  `mes_prenom` varchar(250) NOT NULL,
  `mes_email` varchar(250) NOT NULL,
  `mes_cf` varchar(250) NOT NULL,
  `mes_messages` varchar(250) NOT NULL,
  PRIMARY KEY (`mes_email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `moderateur`
--

DROP TABLE IF EXISTS `moderateur`;
CREATE TABLE IF NOT EXISTS `moderateur` (
  `mod_email` varchar(250) NOT NULL,
  `mod_message` varchar(250) NOT NULL,
  KEY `emailm` (`mod_email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `usr_id` int(11) NOT NULL AUTO_INCREMENT,
  `usr_nom` varchar(250) NOT NULL,
  `usr_prenom` varchar(250) NOT NULL,
  `usr_adresse` varchar(250) NOT NULL,
  `usr_ville` varchar(250) NOT NULL,
  `usr_codepostal` int(11) NOT NULL,
  `usr_email` varchar(250) NOT NULL,
  `usr_tel` int(11) NOT NULL,
  `nom_etab` varchar(250) NOT NULL,
  `usr_mdp1` varchar(250) NOT NULL,
  PRIMARY KEY (`usr_email`),
  KEY `usr_id` (`usr_id`),
  KEY `nom_etab` (`nom_etab`)
) ENGINE=InnoDB AUTO_INCREMENT=97 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`usr_id`, `usr_nom`, `usr_prenom`, `usr_adresse`, `usr_ville`, `usr_codepostal`, `usr_email`, `usr_tel`, `nom_etab`, `usr_mdp1`) VALUES
(67, 'toto', 'tata', '02 rue des cons', 'paris', 42100, 'a@gmail.com', 123654789, 'PRECIEUX', '2bb96c17704b4658d495dd0596282f6b37e36d94'),
(86, 'abdu', 'abdu', 'abdu', 'saint-etienne', 42000, 'abdu@abdu.fr', 287452169, 'PRECIEUX', '2bb96c17704b4658d495dd0596282f6b37e36d94'),
(94, 'suljic', 'abdulah', '12 rue marengo', 'saint-etienne', 42000, 'abdulah.suljic@hotmail.fr', 623643215, 'HONORE D\'URFE', '89f01f40f6e3c02fc498ae915a47681ca906e073'),
(21, 'suljic', 'Abdulah', '12 rue marengo', 'Sai', 42000, 'abdulah.sulljic@hotmail.fr', 623643215, 'PRECIEUX', '89f01f40f6e3c02fc498ae915a47681ca906e073'),
(42, 'adfel', 'adel', 'rue toto', 'ste', 42000, 'adel@gmail.com', 477, 'PRECIEUX', '1232'),
(44, 'adel', 'adel', 'rue des adel', 'saint etienne', 42000, 'adel@gmail.fr', 785968456, 'PRECIEUX', '2bb96c17704b4658d495dd0596282f6b37e36d94'),
(93, 'amir', 'amir', '14 rue des amir', 'saint-etienne', 42000, 'amir@hgmail.com', 758263541, 'PRECIEUX', '2bb96c17704b4658d495dd0596282f6b37e36d94'),
(89, 'David', 'DC', '1 rue P', 'Saint-etienne', 42100, 'dc@dc.fr', 477010203, 'PRECIEUX', '2bb96c17704b4658d495dd0596282f6b37e36d94'),
(90, 'fabrice', 'fabrice', '15 rues des cakes', 'saint-etienne', 42000, 'fabrice@gmail.fr', 854253621, 'PRECIEUX', '2bb96c17704b4658d495dd0596282f6b37e36d94'),
(96, 'ivan', 'ivan', '12 rue des lila', 'st-etienne', 42000, 'ivan@gmail.com', 785968574, 'ADRIEN TESTUD', '2bb96c17704b4658d495dd0596282f6b37e36d94'),
(88, 'jb', 'jb', 'jb', 'jb', 42000, 'jb@gmail.com', 1234567890, 'PRECIEUX', '6565e5b3365f20379a5302cc4c08ddfdcb16a729'),
(24, 'combet', 'karima', '12 rue des tulipes', 'saint-etienne', 42000, 'karima@hotmail.com', 785968456, 'PRECIEUX', 'c37d1a4c0135edbffb5bb769f2d36831c362f5dd'),
(84, 'samir', 'samir', '12 rue', 'paris', 93000, 'samir@gmail.f', 416259874, 'PRECIEUX', '2bb96c17704b4658d495dd0596282f6b37e36d94'),
(87, 'qsdf', 'qsd', 'qsd', 'qsd', 42100, 'toto@htp.com', 215479, 'PRECIEUX', '2bb96c17704b4658d495dd0596282f6b37e36d94'),
(95, 'test', 'test', '21 rue des tulipes', 'st-etienne', 42000, 'yara3673@gmail.com', 684578954, 'HONORE D\'URFE', '2bb96c17704b4658d495dd0596282f6b37e36d94');

-- --------------------------------------------------------

--
-- Structure de la table `ville_cf`
--

DROP TABLE IF EXISTS `ville_cf`;
CREATE TABLE IF NOT EXISTS `ville_cf` (
  `id_ville` int(11) NOT NULL AUTO_INCREMENT,
  `ville_nom` varchar(250) NOT NULL,
  `cf_codepostal` int(11) NOT NULL,
  PRIMARY KEY (`id_ville`),
  KEY `ville_nom` (`ville_nom`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `ville_cf`
--

INSERT INTO `ville_cf` (`id_ville`, `ville_nom`, `cf_codepostal`) VALUES
(1, 'Andrezieux Boutheon', 42166),
(2, 'Chambon Feugerolles', 42500),
(3, 'Charlieu ', 42190),
(4, 'Firminy', 42704),
(5, 'La Ricamarie ', 42150),
(6, 'Le Coteau ', 42124),
(7, 'Montbrison ', 42604),
(8, 'Neronde', 42510),
(9, 'Rive de Gier', 42800),
(10, 'Roanne ', 42328),
(11, 'Saint Chamond', 42405),
(12, 'Saint Etienne', 42021),
(13, 'Sorbiers ', 42290),
(14, 'Verrieres en Forez', 42600);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `centredeformation`
--
ALTER TABLE `centredeformation`
  ADD CONSTRAINT `fk_cf_ville` FOREIGN KEY (`id_ville`) REFERENCES `ville_cf` (`id_ville`);

--
-- Contraintes pour la table `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `message_ibfk_1` FOREIGN KEY (`mes_email`) REFERENCES `user` (`usr_email`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `moderateur`
--
ALTER TABLE `moderateur`
  ADD CONSTRAINT `message_ibfk_` FOREIGN KEY (`mod_email`) REFERENCES `message` (`mes_email`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
