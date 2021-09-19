--- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : Dim 19 sep. 2021 à 21:43
-- Version du serveur :  8.0.21
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `skillsman`
--

-- --------------------------------------------------------

--
-- Structure de la table `categoriecocktail`
--

DROP TABLE IF EXISTS `categoriecocktail`;
CREATE TABLE IF NOT EXISTS `categoriecocktail` (
  `Typ_Id` int NOT NULL,
  `Coc_Id` int NOT NULL,
  PRIMARY KEY (`Typ_Id`,`Coc_Id`),
  KEY `CategorieCocktail_Cocktail0_FK` (`Coc_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categoriecocktail`
--

INSERT INTO `categoriecocktail` (`Typ_Id`, `Coc_Id`) VALUES
(7, 452),
(3, 454),
(1, 455),
(3, 455),
(1, 456),
(3, 456),
(3, 457),
(8, 458);

-- --------------------------------------------------------

--
-- Structure de la table `cocktail`
--

DROP TABLE IF EXISTS `cocktail`;
CREATE TABLE IF NOT EXISTS `cocktail` (
  `Coc_Id` int NOT NULL AUTO_INCREMENT,
  `Coc_Nom` varchar(100) NOT NULL,
  `Coc_Recette` text NOT NULL,
  `Coc_DateCreation` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Uti_Id` int NOT NULL,
  `Coc_Etat` varchar(10) NOT NULL,
  PRIMARY KEY (`Coc_Id`),
  KEY `Cocktail_Utilisateurs_FK` (`Uti_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=459 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `cocktail`
--

INSERT INTO `cocktail` (`Coc_Id`, `Coc_Nom`, `Coc_Recette`, `Coc_DateCreation`, `Uti_Id`, `Coc_Etat`) VALUES
(452, 'modif_delamort', 'ccccc', '2021-09-10 19:23:30', 4, 'publie'),
(453, 'recette 2', 'eeee', '2021-09-10 16:33:35', 2, 'controle'),
(454, 'champagne', 'fffff', '2021-09-12 09:08:35', 43, 'publie'),
(455, 'aaaaa', 'fffff', '2021-09-12 09:10:14', 2, 'publie'),
(456, 'aaaaa_456', 'fffff', '2021-09-12 09:12:31', 43, 'publie'),
(457, 'ggg', 'drrr', '2021-09-12 09:15:36', 2, 'publie'),
(458, 'ddd', 'ddddd', '2021-09-12 09:35:51', 3, 'publie');

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

DROP TABLE IF EXISTS `commentaires`;
CREATE TABLE IF NOT EXISTS `commentaires` (
  `Com_Id` int NOT NULL AUTO_INCREMENT,
  `Com_Contenu` text NOT NULL,
  `Com_dateCreation` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Coc_Id` int NOT NULL,
  `Uti_Id` int NOT NULL,
  PRIMARY KEY (`Com_Id`),
  KEY `Commentaires_Cocktail_FK` (`Coc_Id`),
  KEY `Commentaires_Utilisateurs0_FK` (`Uti_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `commentaires`
--

INSERT INTO `commentaires` (`Com_Id`, `Com_Contenu`, `Com_dateCreation`, `Coc_Id`, `Uti_Id`) VALUES
(18, 'super cocktail', '2021-09-10 17:13:23', 452, 2),
(19, 'un peu raide', '2021-09-18 19:17:35', 452, 43),
(20, 'je confirme....mais excellent', '2021-09-18 19:18:24', 452, 43),
(21, 'yahouuuuuu', '2021-09-19 18:09:41', 456, 43);

-- --------------------------------------------------------

--
-- Structure de la table `compositioncocktail`
--

DROP TABLE IF EXISTS `compositioncocktail`;
CREATE TABLE IF NOT EXISTS `compositioncocktail` (
  `Ing_Id` int NOT NULL,
  `Coc_Id` int NOT NULL,
  `comp_Quantite` float DEFAULT NULL,
  `comp_Unite` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`Ing_Id`,`Coc_Id`),
  KEY `CompositionCocktail_Cocktail0_FK` (`Coc_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `compositioncocktail`
--

INSERT INTO `compositioncocktail` (`Ing_Id`, `Coc_Id`, `comp_Quantite`, `comp_Unite`) VALUES
(1, 452, 0, 'cl'),
(1, 457, 2, 'cl'),
(4, 454, 2, 'cl'),
(4, 455, 2, 'cl'),
(4, 456, 2, 'cl'),
(4, 457, 2, 'cl'),
(5, 455, 1, 'cl'),
(5, 456, 1, 'cl'),
(9, 458, 2, 'goutte'),
(427, 453, 1, 'cl'),
(428, 453, 2, 'tranche');

-- --------------------------------------------------------

--
-- Structure de la table `discuter`
--

DROP TABLE IF EXISTS `discuter`;
CREATE TABLE IF NOT EXISTS `discuter` (
  `Dis_EmetteurId` int NOT NULL,
  `Dis_RecepteurId` int NOT NULL,
  `Dis_DateCreation` timestamp NOT NULL,
  `Dis_Id` int NOT NULL AUTO_INCREMENT,
  `Dis_Contenu` text NOT NULL,
  PRIMARY KEY (`Dis_Id`),
  KEY `Discuter_Utilisateurs_FK` (`Dis_EmetteurId`),
  KEY `Discuter_Utilisateurs0_FK` (`Dis_RecepteurId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `favoris`
--

DROP TABLE IF EXISTS `favoris`;
CREATE TABLE IF NOT EXISTS `favoris` (
  `Fav_Id` int NOT NULL AUTO_INCREMENT,
  `Fav_DateCreation` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Coc_Id` int NOT NULL,
  `Uti_Id` int NOT NULL,
  PRIMARY KEY (`Fav_Id`),
  KEY `Favoris_Cocktail_FK` (`Coc_Id`),
  KEY `Favoris_Utilisateurs0_FK` (`Uti_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `images`
--

DROP TABLE IF EXISTS `images`;
CREATE TABLE IF NOT EXISTS `images` (
  `Img_Id` int NOT NULL AUTO_INCREMENT,
  `Img_Nom` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Img_Adresse` varchar(100) NOT NULL,
  `Coc_Id` int DEFAULT NULL,
  `Uti_Id` int DEFAULT NULL,
  PRIMARY KEY (`Img_Id`),
  KEY `Images_Cocktail_AK` (`Coc_Id`) USING BTREE,
  KEY `Images_Utilisateurs0_AK` (`Uti_Id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=75 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `images`
--

INSERT INTO `images` (`Img_Id`, `Img_Nom`, `Img_Adresse`, `Coc_Id`, `Uti_Id`) VALUES
(65, '453_coc.jpg', 'public/images', 453, 2),
(70, '452_coc.jpg', 'public/images', 452, 2),
(71, '454_coc.jpg', 'public/images', 454, 43),
(72, '455_coc.jpg', 'public/images', 455, 2),
(73, '456_coc.jpg', 'public/images', 456, 43),
(74, '458_coc.jpg', 'public/images', 458, 2);

-- --------------------------------------------------------

--
-- Structure de la table `ingredients`
--

DROP TABLE IF EXISTS `ingredients`;
CREATE TABLE IF NOT EXISTS `ingredients` (
  `Ing_Id` int NOT NULL AUTO_INCREMENT,
  `Ing_Nom` varchar(100) NOT NULL,
  `Ing_Categorie` varchar(50) NOT NULL,
  PRIMARY KEY (`Ing_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=430 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `ingredients`
--

INSERT INTO `ingredients` (`Ing_Id`, `Ing_Nom`, `Ing_Categorie`) VALUES
(1, 'rhum', 'base'),
(2, 'vodka', 'base'),
(3, 'sans alcool', 'base'),
(4, 'gin', 'base'),
(5, 'tequila', 'base'),
(6, 'whiskey', 'base'),
(7, 'cognac', 'base'),
(8, 'liqueur', 'base'),
(9, 'champagne', 'base'),
(10, 'biere', 'base'),
(11, 'vin', 'base'),
(12, 'abricot (fruit)', 'fruit'),
(13, 'abricot (jus)', 'jus'),
(14, 'abricot (liqueur)', 'liqueur'),
(15, 'abricot (sirop)', 'sirop'),
(16, 'absinthe', 'alcool'),
(17, 'amande (fruit)', 'fruit'),
(18, 'amande (jus)', 'jus'),
(19, 'amande (liqueur)', 'liqueur'),
(20, 'amande (sirop)', 'sirop'),
(21, 'Amaretto', 'liqueur'),
(22, 'ananas (fruit)', 'fruit'),
(23, 'ananas (jus)', 'jus'),
(24, 'ananas (liqueur)', 'liqueur'),
(25, 'ananas (sirop)', 'sirop'),
(26, 'Angostura bitters', 'alcool'),
(27, 'anis étoilé', 'épice/fleur/condiments'),
(28, 'baies de genièvre', 'épice/fleur/condiments'),
(29, 'banane (fruit)', 'fruit'),
(30, 'banane (jus)', 'jus'),
(31, 'banane (liqueur)', 'liqueur'),
(32, 'banane (sirop)', 'sirop'),
(33, 'basilic (sirop)', 'sirop'),
(34, 'basilic', 'épice/fleur/condiments'),
(35, 'biere', 'alcool'),
(36, 'Bourbon ', 'alcool'),
(37, 'brandy', 'alcool'),
(38, 'camomille', 'épice/fleur/condiments'),
(39, 'canelle', 'épice/fleur/condiments'),
(40, 'caramel salé', 'sirop'),
(41, 'cardamome', 'épice/fleur/condiments'),
(42, 'cassis (fruit)', 'fruit'),
(43, 'cassis (jus)', 'jus'),
(44, 'cassis (liqueur)', 'liqueur'),
(45, 'cassis (sirop)', 'sirop'),
(46, 'cerise (fruit)', 'fruit'),
(47, 'cerise (jus)', 'jus'),
(48, 'cerise (liqueur)', 'liqueur'),
(49, 'cerise (sirop)', 'sirop'),
(50, 'champagne', 'alcool'),
(51, 'chocolat noir', 'épice/fleur/condiments'),
(52, 'citron  (fruit)', 'fruit'),
(53, 'citron  (jus)', 'jus'),
(54, 'citron  (liqueur)', 'liqueur'),
(55, 'citron  (sirop)', 'sirop'),
(56, 'citron vert (fruit)', 'fruit'),
(57, 'citron vert (jus)', 'jus'),
(58, 'citron vert (liqueur)', 'liqueur'),
(59, 'citron vert (sirop)', 'sirop'),
(60, 'coco (creme)', 'creme'),
(61, 'coco (fruit)', 'fruit'),
(62, 'coco (jus)', 'jus'),
(63, 'coco (lait)', 'lait'),
(64, 'coco (liqueur)', 'liqueur'),
(65, 'coco (sirop)', 'sirop'),
(66, 'Cognac ', 'alcool'),
(67, 'Cointreau - Triple sec ', 'alcool'),
(68, 'cola', 'soda'),
(69, 'cramberry (fruit)', 'fruit'),
(70, 'cramberry (jus)', 'jus'),
(71, 'cramberry (liqueur)', 'liqueur'),
(72, 'cramberry (sirop)', 'sirop'),
(73, 'creme de cacao', 'liqueur'),
(74, 'creme de whisky ', 'alcool'),
(75, 'Drambuie', 'liqueur'),
(76, 'eau gazeuse', 'eau'),
(77, 'eau minérale', 'eau'),
(78, 'fleur de jasmin', 'épice/fleur/condiments'),
(79, 'fleur de sel', 'épice/fleur/condiments'),
(80, 'fleur de sureaux (sirop)', 'sirop'),
(81, 'fleur de sureaux (liqueur)', 'liqueur'),
(82, 'fleur de violette', 'épice/fleur/condiments'),
(83, 'fleur d\'hibiscus', 'épice/fleur/condiments'),
(84, 'fraise (fruit)', 'fruit'),
(85, 'fraise (jus)', 'jus'),
(86, 'fraise (liqueur)', 'liqueur'),
(87, 'fraise (sirop)', 'sirop'),
(88, 'fraise des bois (fruit)', 'fruit'),
(89, 'fraise des bois (jus)', 'jus'),
(90, 'fraise des bois (liqueur)', 'liqueur'),
(91, 'fraise des bois (sirop)', 'sirop'),
(92, 'framboise (fruit)', 'fruit'),
(93, 'framboise (jus)', 'jus'),
(94, 'framboise (liqueur)', 'liqueur'),
(95, 'framboise (sirop)', 'sirop'),
(96, 'fruits de la passion (fruit)', 'fruit'),
(97, 'fruits de la passion (jus)', 'jus'),
(98, 'fruits de la passion (liqueur)', 'liqueur'),
(99, 'fruits de la passion (sirop)', 'sirop'),
(100, 'Galliano (liqueur)', 'liqueur'),
(101, 'Gin ', 'alcool'),
(102, 'gingembre (fruit)', 'fruit'),
(103, 'gingembre (jus)', 'jus'),
(104, 'gingembre (liqueur)', 'liqueur'),
(105, 'gingembre (sirop)', 'sirop'),
(106, 'gingembre ', 'épice/fleur/condiments'),
(107, 'ginger ale ', 'eau'),
(108, 'goyave (fruit)', 'fruit'),
(109, 'goyave (jus)', 'jus'),
(110, 'goyave (liqueur)', 'liqueur'),
(111, 'goyave (sirop)', 'sirop'),
(112, 'grappa', 'alcool'),
(113, 'jasmin', 'sirop'),
(114, 'kiwi (fruit)', 'fruit'),
(115, 'kiwi (jus)', 'jus'),
(116, 'kiwi (liqueur)', 'liqueur'),
(117, 'kiwi (sirop)', 'sirop'),
(118, 'laurier', 'épice/fleur/condiments'),
(119, 'limonade', 'eau'),
(120, 'litchi (fruit)', 'fruit'),
(121, 'litchi (jus)', 'jus'),
(122, 'litchi (liqueur)', 'liqueur'),
(123, 'litchi (sirop)', 'sirop'),
(124, 'madarine (fruit)', 'fruit'),
(125, 'madarine (jus)', 'jus'),
(126, 'madarine (liqueur)', 'liqueur'),
(127, 'madarine (sirop)', 'sirop'),
(128, 'malibu (fruit)', 'fruit'),
(129, 'malibu (jus)', 'jus'),
(130, 'malibu (liqueur)', 'liqueur'),
(131, 'malibu (sirop)', 'sirop'),
(132, 'mandarine (fruit)', 'fruit'),
(133, 'mandarine (jus)', 'jus'),
(134, 'mandarine (liqueur)', 'liqueur'),
(135, 'mandarine (sirop)', 'sirop'),
(136, 'mangue (fruit)', 'fruit'),
(137, 'mangue (jus)', 'jus'),
(138, 'mangue (liqueur)', 'liqueur'),
(139, 'mangue (sirop)', 'sirop'),
(140, 'melon (fruit)', 'fruit'),
(141, 'melon (jus)', 'jus'),
(142, 'melon (liqueur)', 'liqueur'),
(143, 'melon (sirop)', 'sirop'),
(144, 'menthe (fruit)', 'fruit'),
(145, 'menthe (jus)', 'jus'),
(146, 'menthe (liqueur)', 'liqueur'),
(147, 'menthe (sirop)', 'sirop'),
(148, 'menthe verte (fruit)', 'fruit'),
(149, 'menthe verte (jus)', 'jus'),
(150, 'menthe verte (liqueur)', 'liqueur'),
(151, 'menthe verte (sirop)', 'sirop'),
(152, 'Mezcal', 'alcool'),
(153, 'myrtille (fruit)', 'fruit'),
(154, 'myrtille (jus)', 'jus'),
(155, 'myrtille (liqueur)', 'liqueur'),
(156, 'myrtille (sirop)', 'sirop'),
(157, 'noix de muscade', 'épice/fleur/condiments'),
(158, 'orange (fruit)', 'fruit'),
(159, 'orange (jus)', 'jus'),
(160, 'orange (liqueur)', 'liqueur'),
(161, 'orange (sirop)', 'sirop'),
(162, 'orgeat (sirop)', 'sirop'),
(163, 'pamplemeousse (fruit)', 'fruit'),
(164, 'pamplemeousse (jus)', 'jus'),
(165, 'pamplemeousse (liqueur)', 'liqueur'),
(166, 'pamplemeousse (sirop)', 'sirop'),
(167, 'passoa (fruit)', 'fruit'),
(168, 'passoa (jus)', 'jus'),
(169, 'passoa (liqueur)', 'liqueur'),
(170, 'passoa (sirop)', 'sirop'),
(171, 'peche (fruit)', 'fruit'),
(172, 'peche (jus)', 'jus'),
(173, 'peche (liqueur)', 'liqueur'),
(174, 'peche (sirop)', 'sirop'),
(175, 'peche de vigne (fruit)', 'fruit'),
(176, 'peche de vigne (jus)', 'jus'),
(177, 'peche de vigne (liqueur)', 'liqueur'),
(178, 'peche de vigne (sirop)', 'sirop'),
(179, 'piment', 'épice/fleur/condiments'),
(180, 'piment de cayenne', 'épice/fleur/condiments'),
(181, 'pisang ambon (fruit)', 'fruit'),
(182, 'pisang ambon (jus)', 'jus'),
(183, 'pisang ambon (liqueur)', 'liqueur'),
(184, 'pisang ambon (sirop)', 'sirop'),
(185, 'Pisco', 'alcool'),
(186, 'pistache (sirop)', 'sirop'),
(187, 'poire (fruit)', 'fruit'),
(188, 'poire (jus)', 'jus'),
(189, 'poire (liqueur)', 'liqueur'),
(190, 'poire (sirop)', 'sirop'),
(191, 'poivre blanc', 'épice/fleur/condiments'),
(192, 'poivre noire', 'épice/fleur/condiments'),
(193, 'poivron', 'épice/fleur/condiments'),
(194, 'pomme (fruit)', 'fruit'),
(195, 'pomme (jus)', 'jus'),
(196, 'pomme (liqueur)', 'liqueur'),
(197, 'pomme (sirop)', 'sirop'),
(198, 'Porto', 'alcool'),
(200, 'sambucca', 'alcool'),
(201, 'sel', 'épice/fleur/condiments'),
(202, 'Southern Comfort', 'liqueur'),
(203, 'speculos', 'sirop'),
(204, 'sucre', 'épice/fleur/condiments'),
(206, 'tonic', 'eau'),
(207, 'vanille', 'épice/fleur/condiments'),
(208, 'Vermouth dry', 'alcool'),
(209, 'Vermouth rouge', 'alcool'),
(210, 'Vermouth blanc', 'alcool'),
(427, 'huile', 'controle'),
(428, 'azerty', 'controle'),
(429, 'ngjtuyh', 'controle');

-- --------------------------------------------------------

--
-- Structure de la table `likes`
--

DROP TABLE IF EXISTS `likes`;
CREATE TABLE IF NOT EXISTS `likes` (
  `Lik_Id` int NOT NULL AUTO_INCREMENT,
  `Lik_DateCreation` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Coc_Id` int NOT NULL,
  `Uti_Id` int NOT NULL,
  PRIMARY KEY (`Lik_Id`),
  KEY `Likes_Cocktail_FK` (`Coc_Id`),
  KEY `Likes_Utilisateurs0_FK` (`Uti_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `typecocktail`
--

DROP TABLE IF EXISTS `typecocktail`;
CREATE TABLE IF NOT EXISTS `typecocktail` (
  `Typ_Id` int NOT NULL AUTO_INCREMENT,
  `Typ_Libelle` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`Typ_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `typecocktail`
--

INSERT INTO `typecocktail` (`Typ_Id`, `Typ_Libelle`) VALUES
(1, 'tequila'),
(2, 'whiskey'),
(3, 'gin'),
(4, 'vodka'),
(5, 'cognac'),
(6, 'liqueur'),
(7, 'rhum'),
(8, 'champagne'),
(9, 'sans alcool '),
(10, 'biere'),
(11, 'vin');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `Uti_Id` int NOT NULL AUTO_INCREMENT,
  `Uti_Pseudo` varchar(50) NOT NULL,
  `Uti_Login` varchar(50) NOT NULL,
  `Uti_Mdp` varchar(255) NOT NULL,
  `Uti_Droit` varchar(50) NOT NULL,
  `Uti_DateInscription` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`Uti_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`Uti_Id`, `Uti_Pseudo`, `Uti_Login`, `Uti_Mdp`, `Uti_Droit`, `Uti_DateInscription`) VALUES
(2, 'fred', 'fred@fred.fr', '12345678', 'contributeur', '2021-07-30 15:00:58'),
(3, 'Max la menace', 'max@fred.fr', '12345678', 'contributeur', '2021-07-30 13:00:58'),
(4, 'Zazou', 'zazou@fred.fr', '12345678', 'contributeur', '2021-07-30 13:00:58'),
(42, 'azerty', 'azerty@azerty.fr', '$2y$10$5dDgD7Jnjftp8l4AvCfMm.RJ24JMqy20dF0bs40BeGNaO2380Y8YS', '1', '2021-09-17 23:08:21'),
(43, 'Comcombre masqué', 'frederic.david@cariforefoccitanie.fr', '$2y$10$ZG1xubcuOaL9D6t2qP3Iwe4/OVZGGVp7jzyD6/WhVmuMIfU/gasTy', '1', '2021-09-18 09:53:20');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `categoriecocktail`
--
ALTER TABLE `categoriecocktail`
  ADD CONSTRAINT `CategorieCocktail_Cocktail0_FK` FOREIGN KEY (`Coc_Id`) REFERENCES `cocktail` (`Coc_Id`),
  ADD CONSTRAINT `CategorieCocktail_TypeCocktail_FK` FOREIGN KEY (`Typ_Id`) REFERENCES `typecocktail` (`Typ_Id`);

--
-- Contraintes pour la table `cocktail`
--
ALTER TABLE `cocktail`
  ADD CONSTRAINT `Cocktail_Utilisateurs_FK` FOREIGN KEY (`Uti_Id`) REFERENCES `utilisateurs` (`Uti_Id`);

--
-- Contraintes pour la table `commentaires`
--
ALTER TABLE `commentaires`
  ADD CONSTRAINT `Commentaires_Cocktail_FK` FOREIGN KEY (`Coc_Id`) REFERENCES `cocktail` (`Coc_Id`),
  ADD CONSTRAINT `Commentaires_Utilisateurs0_FK` FOREIGN KEY (`Uti_Id`) REFERENCES `utilisateurs` (`Uti_Id`);

--
-- Contraintes pour la table `compositioncocktail`
--
ALTER TABLE `compositioncocktail`
  ADD CONSTRAINT `CompositionCocktail_Cocktail0_FK` FOREIGN KEY (`Coc_Id`) REFERENCES `cocktail` (`Coc_Id`),
  ADD CONSTRAINT `CompositionCocktail_Ingredients_FK` FOREIGN KEY (`Ing_Id`) REFERENCES `ingredients` (`Ing_Id`);

--
-- Contraintes pour la table `discuter`
--
ALTER TABLE `discuter`
  ADD CONSTRAINT `Discuter_Utilisateurs0_FK` FOREIGN KEY (`Dis_RecepteurId`) REFERENCES `utilisateurs` (`Uti_Id`),
  ADD CONSTRAINT `Discuter_Utilisateurs_FK` FOREIGN KEY (`Dis_EmetteurId`) REFERENCES `utilisateurs` (`Uti_Id`);

--
-- Contraintes pour la table `favoris`
--
ALTER TABLE `favoris`
  ADD CONSTRAINT `Favoris_Cocktail_FK` FOREIGN KEY (`Coc_Id`) REFERENCES `cocktail` (`Coc_Id`),
  ADD CONSTRAINT `Favoris_Utilisateurs0_FK` FOREIGN KEY (`Uti_Id`) REFERENCES `utilisateurs` (`Uti_Id`);

--
-- Contraintes pour la table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `Images_Cocktail_FK` FOREIGN KEY (`Coc_Id`) REFERENCES `cocktail` (`Coc_Id`),
  ADD CONSTRAINT `Images_Utilisateurs0_FK` FOREIGN KEY (`Uti_Id`) REFERENCES `utilisateurs` (`Uti_Id`);

--
-- Contraintes pour la table `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `Likes_Cocktail_FK` FOREIGN KEY (`Coc_Id`) REFERENCES `cocktail` (`Coc_Id`),
  ADD CONSTRAINT `Likes_Utilisateurs0_FK` FOREIGN KEY (`Uti_Id`) REFERENCES `utilisateurs` (`Uti_Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
