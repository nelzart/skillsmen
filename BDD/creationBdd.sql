-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 10 sep. 2021 à 12:15
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
) ENGINE=InnoDB AUTO_INCREMENT=452 DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

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
  `Fav_DateCreation` date NOT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=63 DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB AUTO_INCREMENT=427 DEFAULT CHARSET=utf8;

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
(199, 'Rhum', 'alcool'),
(200, 'sambucca', 'alcool'),
(201, 'sel', 'épice/fleur/condiments'),
(202, 'Southern Comfort', 'liqueur'),
(203, 'speculos', 'sirop'),
(204, 'sucre', 'épice/fleur/condiments'),
(205, 'Tequila ', 'alcool'),
(206, 'tonic', 'eau'),
(207, 'vanille', 'épice/fleur/condiments'),
(208, 'Vermouth dry', 'alcool'),
(209, 'Vermouth rouge', 'alcool'),
(210, 'Vermouth blanc', 'alcool'),
(211, 'vin', 'alcool'),
(212, 'Vodka ', 'alcool'),
(213, 'whisky ', 'alcool'),
(214, 'yuzu', 'sirop'),
(215, 'abricot (fruit)', 'fruit'),
(216, 'abricot (jus)', 'jus'),
(217, 'abricot (liqueur)', 'liqueur'),
(218, 'abricot (sirop)', 'sirop'),
(219, 'absinthe', 'alcool'),
(220, 'amande (fruit)', 'fruit'),
(221, 'amande (jus)', 'jus'),
(222, 'amande (liqueur)', 'liqueur'),
(223, 'amande (sirop)', 'sirop'),
(224, 'Amaretto', 'liqueur'),
(225, 'ananas (fruit)', 'fruit'),
(226, 'ananas (jus)', 'jus'),
(227, 'ananas (liqueur)', 'liqueur'),
(228, 'ananas (sirop)', 'sirop'),
(229, 'Angostura bitters', 'alcool'),
(230, 'anis étoilé', 'épice/fleur/condiments'),
(231, 'baies de genièvre', 'épice/fleur/condiments'),
(232, 'banane (fruit)', 'fruit'),
(233, 'banane (jus)', 'jus'),
(234, 'banane (liqueur)', 'liqueur'),
(235, 'banane (sirop)', 'sirop'),
(236, 'basilic (sirop)', 'sirop'),
(237, 'basilic', 'épice/fleur/condiments'),
(238, 'biere', 'alcool'),
(239, 'Bourbon ', 'alcool'),
(240, 'brandy', 'alcool'),
(241, 'camomille', 'épice/fleur/condiments'),
(242, 'canelle', 'épice/fleur/condiments'),
(243, 'caramel salé', 'sirop'),
(244, 'cardamome', 'épice/fleur/condiments'),
(245, 'cassis (fruit)', 'fruit'),
(246, 'cassis (jus)', 'jus'),
(247, 'cassis (liqueur)', 'liqueur'),
(248, 'cassis (sirop)', 'sirop'),
(249, 'cerise (fruit)', 'fruit'),
(250, 'cerise (jus)', 'jus'),
(251, 'cerise (liqueur)', 'liqueur'),
(252, 'cerise (sirop)', 'sirop'),
(253, 'champagne', 'alcool'),
(254, 'chocolat noir', 'épice/fleur/condiments'),
(255, 'citron  (fruit)', 'fruit'),
(256, 'citron  (jus)', 'jus'),
(257, 'citron  (liqueur)', 'liqueur'),
(258, 'citron  (sirop)', 'sirop'),
(259, 'citron vert (fruit)', 'fruit'),
(260, 'citron vert (jus)', 'jus'),
(261, 'citron vert (liqueur)', 'liqueur'),
(262, 'citron vert (sirop)', 'sirop'),
(263, 'coco (creme)', 'creme'),
(264, 'coco (fruit)', 'fruit'),
(265, 'coco (jus)', 'jus'),
(266, 'coco (lait)', 'lait'),
(267, 'coco (liqueur)', 'liqueur'),
(268, 'coco (sirop)', 'sirop'),
(269, 'Cognac ', 'alcool'),
(270, 'Cointreau - Triple sec ', 'alcool'),
(271, 'cola', 'soda'),
(272, 'cramberry (fruit)', 'fruit'),
(273, 'cramberry (jus)', 'jus'),
(274, 'cramberry (liqueur)', 'liqueur'),
(275, 'cramberry (sirop)', 'sirop'),
(276, 'creme de cacao', 'liqueur'),
(277, 'creme de whisky ', 'alcool'),
(278, 'Drambuie', 'liqueur'),
(279, 'eau gazeuse', 'eau'),
(280, 'eau minérale', 'eau'),
(281, 'fleur de jasmin', 'épice/fleur/condiments'),
(282, 'fleur de sel', 'épice/fleur/condiments'),
(283, 'fleur de sureaux (sirop)', 'sirop'),
(284, 'fleur de sureaux (liqueur)', 'liqueur'),
(285, 'fleur de violette', 'épice/fleur/condiments'),
(286, 'fleur d\'hibiscus', 'épice/fleur/condiments'),
(287, 'fraise (fruit)', 'fruit'),
(288, 'fraise (jus)', 'jus'),
(289, 'fraise (liqueur)', 'liqueur'),
(290, 'fraise (sirop)', 'sirop'),
(291, 'fraise des bois (fruit)', 'fruit'),
(292, 'fraise des bois (jus)', 'jus'),
(293, 'fraise des bois (liqueur)', 'liqueur'),
(294, 'fraise des bois (sirop)', 'sirop'),
(295, 'framboise (fruit)', 'fruit'),
(296, 'framboise (jus)', 'jus'),
(297, 'framboise (liqueur)', 'liqueur'),
(298, 'framboise (sirop)', 'sirop'),
(299, 'fruits de la passion (fruit)', 'fruit'),
(300, 'fruits de la passion (jus)', 'jus'),
(301, 'fruits de la passion (liqueur)', 'liqueur'),
(302, 'fruits de la passion (sirop)', 'sirop'),
(303, 'Galliano (liqueur)', 'liqueur'),
(304, 'Gin ', 'alcool'),
(305, 'gingembre (fruit)', 'fruit'),
(306, 'gingembre (jus)', 'jus'),
(307, 'gingembre (liqueur)', 'liqueur'),
(308, 'gingembre (sirop)', 'sirop'),
(309, 'gingembre ', 'épice/fleur/condiments'),
(310, 'ginger ale ', 'eau'),
(311, 'goyave (fruit)', 'fruit'),
(312, 'goyave (jus)', 'jus'),
(313, 'goyave (liqueur)', 'liqueur'),
(314, 'goyave (sirop)', 'sirop'),
(315, 'grappa', 'alcool'),
(316, 'jasmin', 'sirop'),
(317, 'kiwi (fruit)', 'fruit'),
(318, 'kiwi (jus)', 'jus'),
(319, 'kiwi (liqueur)', 'liqueur'),
(320, 'kiwi (sirop)', 'sirop'),
(321, 'laurier', 'épice/fleur/condiments'),
(322, 'limonade', 'eau'),
(323, 'litchi (fruit)', 'fruit'),
(324, 'litchi (jus)', 'jus'),
(325, 'litchi (liqueur)', 'liqueur'),
(326, 'litchi (sirop)', 'sirop'),
(327, 'madarine (fruit)', 'fruit'),
(328, 'madarine (jus)', 'jus'),
(329, 'madarine (liqueur)', 'liqueur'),
(330, 'madarine (sirop)', 'sirop'),
(331, 'malibu (fruit)', 'fruit'),
(332, 'malibu (jus)', 'jus'),
(333, 'malibu (liqueur)', 'liqueur'),
(334, 'malibu (sirop)', 'sirop'),
(335, 'mandarine (fruit)', 'fruit'),
(336, 'mandarine (jus)', 'jus'),
(337, 'mandarine (liqueur)', 'liqueur'),
(338, 'mandarine (sirop)', 'sirop'),
(339, 'mangue (fruit)', 'fruit'),
(340, 'mangue (jus)', 'jus'),
(341, 'mangue (liqueur)', 'liqueur'),
(342, 'mangue (sirop)', 'sirop'),
(343, 'melon (fruit)', 'fruit'),
(344, 'melon (jus)', 'jus'),
(345, 'melon (liqueur)', 'liqueur'),
(346, 'melon (sirop)', 'sirop'),
(347, 'menthe (fruit)', 'fruit'),
(348, 'menthe (jus)', 'jus'),
(349, 'menthe (liqueur)', 'liqueur'),
(350, 'menthe (sirop)', 'sirop'),
(351, 'menthe verte (fruit)', 'fruit'),
(352, 'menthe verte (jus)', 'jus'),
(353, 'menthe verte (liqueur)', 'liqueur'),
(354, 'menthe verte (sirop)', 'sirop'),
(355, 'Mezcal', 'alcool'),
(356, 'myrtille (fruit)', 'fruit'),
(357, 'myrtille (jus)', 'jus'),
(358, 'myrtille (liqueur)', 'liqueur'),
(359, 'myrtille (sirop)', 'sirop'),
(360, 'noix de muscade', 'épice/fleur/condiments'),
(361, 'orange (fruit)', 'fruit'),
(362, 'orange (jus)', 'jus'),
(363, 'orange (liqueur)', 'liqueur'),
(364, 'orange (sirop)', 'sirop'),
(365, 'orgeat (sirop)', 'sirop'),
(366, 'pamplemeousse (fruit)', 'fruit'),
(367, 'pamplemeousse (jus)', 'jus'),
(368, 'pamplemeousse (liqueur)', 'liqueur'),
(369, 'pamplemeousse (sirop)', 'sirop'),
(370, 'passoa (fruit)', 'fruit'),
(371, 'passoa (jus)', 'jus'),
(372, 'passoa (liqueur)', 'liqueur'),
(373, 'passoa (sirop)', 'sirop'),
(374, 'peche (fruit)', 'fruit'),
(375, 'peche (jus)', 'jus'),
(376, 'peche (liqueur)', 'liqueur'),
(377, 'peche (sirop)', 'sirop'),
(378, 'peche de vigne (fruit)', 'fruit'),
(379, 'peche de vigne (jus)', 'jus'),
(380, 'peche de vigne (liqueur)', 'liqueur'),
(381, 'peche de vigne (sirop)', 'sirop'),
(382, 'piment', 'épice/fleur/condiments'),
(383, 'piment de cayenne', 'épice/fleur/condiments'),
(384, 'pisang ambon (fruit)', 'fruit'),
(385, 'pisang ambon (jus)', 'jus'),
(386, 'pisang ambon (liqueur)', 'liqueur'),
(387, 'pisang ambon (sirop)', 'sirop'),
(388, 'Pisco', 'alcool'),
(389, 'pistache (sirop)', 'sirop'),
(390, 'poire (fruit)', 'fruit'),
(391, 'poire (jus)', 'jus'),
(392, 'poire (liqueur)', 'liqueur'),
(393, 'poire (sirop)', 'sirop'),
(394, 'poivre blanc', 'épice/fleur/condiments'),
(395, 'poivre noire', 'épice/fleur/condiments'),
(396, 'poivron', 'épice/fleur/condiments'),
(397, 'pomme (fruit)', 'fruit'),
(398, 'pomme (jus)', 'jus'),
(399, 'pomme (liqueur)', 'liqueur'),
(400, 'pomme (sirop)', 'sirop'),
(401, 'Porto', 'alcool'),
(402, 'Rhum', 'alcool'),
(403, 'sambucca', 'alcool'),
(404, 'sel', 'épice/fleur/condiments'),
(405, 'Southern Comfort', 'liqueur'),
(406, 'speculos', 'sirop'),
(407, 'sucre', 'épice/fleur/condiments'),
(408, 'Tequila ', 'alcool'),
(409, 'tonic', 'eau'),
(410, 'vanille', 'épice/fleur/condiments'),
(411, 'Vermouth dry', 'alcool'),
(412, 'Vermouth rouge', 'alcool'),
(413, 'Vermouth blanc', 'alcool'),
(414, 'vin', 'alcool'),
(415, 'Vodka ', 'alcool'),
(416, 'whisky ', 'alcool'),
(417, 'yuzu', 'sirop');

-- --------------------------------------------------------

--
-- Structure de la table `likes`
--

DROP TABLE IF EXISTS `likes`;
CREATE TABLE IF NOT EXISTS `likes` (
  `Lik_Id` int NOT NULL AUTO_INCREMENT,
  `Lik_DateCreation` date NOT NULL,
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
  `Type_Libelle` varchar(100) NOT NULL,
  PRIMARY KEY (`Typ_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `typecocktail`
--

INSERT INTO `typecocktail` (`Typ_Id`, `Type_Libelle`) VALUES
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
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`Uti_Id`, `Uti_Pseudo`, `Uti_Login`, `Uti_Mdp`, `Uti_Droit`, `Uti_DateInscription`) VALUES
(2, 'fred', 'fred@fred.fr', '12345678', 'contributeur', '2021-07-30 15:00:58');

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `v_cocktailcomplet`
-- (Voir ci-dessous la vue réelle)
--
DROP VIEW IF EXISTS `v_cocktailcomplet`;
CREATE TABLE IF NOT EXISTS `v_cocktailcomplet` (
`Coc_Id` int
,`Uti_Id` int
,`Coc_Nom` varchar(100)
,`Coc_Recette` text
,`Ing_Id` int
,`Ing_Nom` varchar(100)
,`comp_Quantite` float
,`comp_Unite` varchar(100)
,`Ing_Categorie` varchar(50)
,`categorie` varchar(100)
);

-- --------------------------------------------------------

--
-- Structure de la vue `v_cocktailcomplet`
--
DROP TABLE IF EXISTS `v_cocktailcomplet`;

DROP VIEW IF EXISTS `v_cocktailcomplet`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_cocktailcomplet`  AS  select `coc`.`Coc_Id` AS `Coc_Id`,`coc`.`Uti_Id` AS `Uti_Id`,`coc`.`Coc_Nom` AS `Coc_Nom`,`coc`.`Coc_Recette` AS `Coc_Recette`,`ing`.`Ing_Id` AS `Ing_Id`,`ing`.`Ing_Nom` AS `Ing_Nom`,`compcoc`.`comp_Quantite` AS `comp_Quantite`,`compcoc`.`comp_Unite` AS `comp_Unite`,`ing`.`Ing_Categorie` AS `Ing_Categorie`,`typcoc`.`Type_Libelle` AS `categorie` from ((((`cocktail` `coc` join `compositioncocktail` `compcoc` on((`coc`.`Coc_Id` = `compcoc`.`Coc_Id`))) join `ingredients` `ing` on((`ing`.`Ing_Id` = `compcoc`.`Ing_Id`))) left join `categoriecocktail` `catcoc` on((`catcoc`.`Coc_Id` = `coc`.`Coc_Id`))) join `typecocktail` `typcoc` on((`typcoc`.`Typ_Id` = `catcoc`.`Typ_Id`))) ;

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
