-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 26 sep. 2021 à 09:08
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.4.16

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

CREATE TABLE `categoriecocktail` (
  `Typ_Id` int(11) NOT NULL,
  `Coc_Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categoriecocktail`
--

INSERT INTO `categoriecocktail` (`Typ_Id`, `Coc_Id`) VALUES
(1, 489),
(1, 504),
(2, 491),
(2, 497),
(2, 505),
(2, 507),
(3, 489),
(3, 498),
(3, 501),
(4, 489),
(4, 490),
(4, 492),
(4, 494),
(4, 495),
(4, 499),
(4, 506),
(5, 493),
(6, 488),
(6, 489),
(6, 490),
(6, 494),
(6, 495),
(6, 498),
(6, 499),
(6, 503),
(6, 504),
(7, 485),
(7, 487),
(7, 488),
(7, 489),
(7, 502),
(7, 503),
(9, 500),
(10, 506),
(11, 496),
(11, 505);

-- --------------------------------------------------------

--
-- Structure de la table `cocktail`
--

CREATE TABLE `cocktail` (
  `Coc_Id` int(11) NOT NULL,
  `Coc_Nom` varchar(100) NOT NULL,
  `Coc_Recette` text NOT NULL,
  `Coc_DateCreation` timestamp NOT NULL DEFAULT current_timestamp(),
  `Uti_Id` int(11) NOT NULL,
  `Coc_Etat` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `cocktail`
--

INSERT INTO `cocktail` (`Coc_Id`, `Coc_Nom`, `Coc_Recette`, `Coc_DateCreation`, `Uti_Id`, `Coc_Etat`) VALUES
(485, 'Mojito', 'Mettez vos glaçons dans un torchon, refermez-le puis, à l\'aide d\'un rouleau à pâtisserie, pilez la glace.<br />\r\nVous pouvez encore avoir des morceaux. Versez dans un bol et réservez au congélateur.<br />\r\nVersez les feuilles de menthe dans chaque verre<br />\r\nOn ne déchire pas les feuilles de menthe car les huiles essentielles se situent sur la surface. Cela permet aussi de ne pas avoir de petits bouts de menthe qui vont bloquer la paille. On les dépose juste au fond du verre.<br />\r\nCoupez le citron en deux puis chaque demi citron en 6 morceaux.<br />\r\nAjoutez le citron dans chaque verre<br />\r\nAjoutez les 6 morceaux de citron dans chaque verre (1/2 citron).<br />\r\nAjoutez le sirop de sucre de canne<br />\r\nAjoutez le sirop de sucre de canne. Le fait d\'utiliser un sucre liquide permet de ne pas sentir les cristaux du sucre à la dégustation du cocktail.<br />\r\nPilez, écrasez le citron avec un pilon spécial cocktail. Il est important que la menthe soit au fond du verre afin qu\'elle soit protégée à la fois par le sirop de sucre de canne et par les morceaux de citron.<br />\r\nAjoutez la glace pilée<br />\r\nAjoutez la glace pilée en laissant 2 cm de libre. Plus il y a de glace, moins elle fondra rapidement.<br />\r\nAjoutez le rhum.<br />\r\nAjoutez l\'eau gazeuse<br />\r\nComplétez avec l\'eau gazeuse.<br />\r\nMélangez le cocktail afin que les saveur se mêlent.<br />\r\nServez et dégustez<br />\r\nLe mojito se sert avec deux pailles qui vont permettre de mélanger le cocktail au fur et à mesure de la dégustation.', '2021-09-26 05:20:52', 44, 'publie'),
(487, 'Pina Colada', 'Réalisez la recette \"Piña Colada\" au mixeur.<br />\r\nDans un blender (mixer), versez les ingrédients avec 5 ou 6 glaçons et mixez le tout. C\'est prêt ! Versez dans le verre et dégustez. Peut aussi se réaliser au shaker si c\'est juste pour une personne.<br />\r\nServir dans un verre de type \"verre à vin\".<br />\r\nDécorer avec un morceau d\'ananas et une cerise confite.', '2021-09-26 05:25:06', 44, 'publie'),
(488, 'Blue Hawaiian', 'Réalisez la recette \"Blue Hawaiian\" au shaker.<br />\r\nFrappez les ingrédients au shaker avec des glaçons et versez en filtrant dans le verre rempli de glaçons ou de glace pilée.<br />\r\nServir dans un verre de type \"verre tulipe\".<br />\r\nDécorez avec un morceau d\'ananas et d\'une cerise confite.', '2021-09-26 05:27:13', 44, 'publie'),
(489, 'Long Island Iced Tea', 'Réalisez la recette \"Long island Iced Tea\" au shaker.<br />\r\nFrapper tous les ingrédients sauf le cola au shaker avec quelques glaçons, et verser (en retenant les glaçons) dans le verre contenant des glaçons. Complétez avec le cola.<br />\r\nServir dans un verre de type \"tumbler\".<br />\r\nDécorer avec une tranche de citron.', '2021-09-26 05:31:37', 44, 'publie'),
(490, 'Sex on the beach', 'Réalisez la recette \"Sex on the beach\" dans un verre à mélange.<br />\r\nVerser les alcools sur des glaçons, mélanger et compléter avec les jus de fruits<br />\r\n.<br />\r\nServir dans un verre de type \"verre tulipe\".<br />\r\nUn morceau d\'ananas et une cerise confite.', '2021-09-26 05:36:25', 44, 'publie'),
(491, 'Irish Coffee', 'Deux astuces avant de commencer : le whiskey sucré et le café doivent être à la même température, c\'est à dire très chauds.<br />\r\n<br />\r\nL\'autre astuce est un petit instrument très simple à réaliser, il vous suffit de \"sacrifier\" une petite cuillère : pliez une cuillère en \"L\" de façon à former un angle de 90°.<br />\r\n<br />\r\nDans un grand verre à pied résistant à la chaleur, versez le whiskey et le sucre de canne bien chaud. Utilisez ensuite votre petite cuillère pliée : il faut la placer dans le verre, à la surface du mélange, versez ensuite le café chaud dans la cuillère, en la remontant au fur et à mesure. Cela permet au café de ne pas \"plonger\" dans le whiskey, donc de rester au dessus et former une deuxième couche.<br />\r\n<br />\r\nAjoutez alors la chantilly, qui va former la troisième couche. Eventuellement, saupoudrez de cacao non sucré. Servez avec une paille.', '2021-09-26 05:39:50', 44, 'publie'),
(492, 'Bloody Mary', 'Mélanger les ingrédients liquides dans un shaker contenant des glaçons. Agiter, puis verser la préparation dans un verre de type \"tumbler\".<br />\r\nAjouter le sel de céleri, le sel et le poivre.<br />\r\nDécorer avec une tige de céleri et servir bien frais.', '2021-09-26 05:45:23', 44, 'publie'),
(493, 'Summit', 'Placez le zeste de citron et les lamelles de gingembre dans le verre et versez la moitié du Cognac.<br />\r\nPressez légèrement le gingembre 2 à 3 fois avec un pilon.<br />\r\nRemplissez le verre à moitié avec des glaçons et remuez 5 secondes à l’aide d’une cuillère. Versez le reste de Cognac et ajoutez la limonade et la pelure de concombre.<br />\r\nRemuez 5 secondes avec la cuillère et servez aussitôt. <br />\r\nC’est prêt à déguster...', '2021-09-26 05:47:43', 44, 'publie'),
(494, 'Blue Lagoon', 'Réalisez la recette \"Blue Lagoon\" au shaker.<br />\r\nPressez le jus d\'un demi-citron, ajoutez dans le shaker avec les autres ingrédients et des glaçons. Frappez puis versez dans le verre en filtrant.<br />\r\nAfin qu\'il soit plus frais et léger, remplissez auparavant le verre de glace pilée.<br />\r\nServir dans un verre de type \"verre à martini\".<br />\r\nUn long zeste de citron vert.', '2021-09-26 05:49:18', 44, 'publie'),
(495, 'White Russian', 'Versez la vodka, la liqueur de café et le lait directement dans le verre sur un lit de glaçons. <br />\r\nServez avec un bâtonnet mélangeur.', '2021-09-26 05:50:28', 44, 'publie'),
(496, 'Aperol Spritz', 'Dans un verre rempli au 3/4 de glaçons, versez 3 cl de vin blanc Prosecco.<br />\r\nAjoutez ensuite 2 cl d’Apérol.<br />\r\nComplétez avec 1 cl d’eau pétillante ou d’eau de Seltz.<br />\r\nMélangez avec l’aide d’une cuillère à cocktail pour bien faire remonter l’Aperol.<br />\r\nEnfin, plongez une rondelle d’orange dans le verre.<br />\r\nVous pouvez déguster votre cocktail bien frais.', '2021-09-26 05:53:53', 44, 'publie'),
(497, 'Mint Julep', 'Placer les feuilles de menthe dans un verre doseur avec le sirop de sucre et les écraser légèrement avec un pilon.<br />\r\nEnsuite, remplir le verre de glace et ajouter le whisky.<br />\r\nBien mélanger, saupoudrer de sucre en poudre et décorer d\'une feuille de menthe.', '2021-09-26 05:56:51', 44, 'publie'),
(498, 'Bramble', 'Remplir un verre old fashioned de glace pilée.<br />\r\nInsérer le gin, le jus de citron et le sirop de sucre.<br />\r\nInsérer la liqueur de mûre de façon circulaire.<br />\r\nDécorer avec 1 tranche de citron et 2 mûres.', '2021-09-26 05:58:16', 44, 'publie'),
(499, 'Cosmopolitan', 'Utilisez un shaker et préparez votre verre de Martini avec 2 glaçons pour refroidir votre verre.<br />\r\nAjouter le jus de citron, jus de cranberry, le triple sec et la vodka.<br />\r\nRemplissez le shaker de glaçons.<br />\r\nFermez le shaker et tenez le fermement à deux mains. Ensuite, shaker 8 secondes du haut vers le bas.<br />\r\nRetirez les glaçons de votre verre (il doit être bien frais maintenant !).<br />\r\nVersez la préparation du Cosmopolitan dans un verre à pied en utilisant une passoire du shaker pour éviter que les glaçons ne tombent dans votre verre.<br />\r\nDécorez votre verre avec une rondelle de citron.', '2021-09-26 06:00:30', 44, 'publie'),
(500, 'Virgin Mojito', 'Réalisez la recette \"Virgin Mojito\" directement dans le verre.<br />\r\nEcraser le quartier de citron vert dans le verre à l\'aide d\'un pilon. Placez la menthe fraîche dans la préparation et pilez-la délicatemente sans la broyer. Ajoutez le sirop saveur rhum et le sirop de mojito, quelques glaçons ou de la glace pilée. Mélangez et complétez avec de l\'eau gazeuse. Touillez légèrement et servez.<br />\r\nServir dans un verre de type \"tumbler\".', '2021-09-26 06:02:38', 44, 'publie'),
(501, 'Gin Tonic', 'Mettez les glaçons dans des verres type tumbler. Versez équitablement le gin dans chaque verre (4 cl par personne), puis ajoutez le tonic (8 cl par personne).<br />\r\nDécorez les verres avec une tranche de citron et une branche de romarin, si vous le souhaitez. Servez immédiatement.', '2021-09-26 06:08:16', 44, 'publie'),
(502, 'Daiquiri', 'Dans le bol de votre blender, mettez tous les ingrédients. Commencez par mixer à vitesse basse puis augmentez petit à petit jusqu’à ce que le mélange soit consistant.<br />\r\nServez dans des beaux verres à cocktail.', '2021-09-26 06:11:04', 44, 'publie'),
(503, 'Mai Tai', 'Réalisez la recette \"Mai Tai\" au shaker.<br />\r\nFrapper les ingrédients et servir dans un verre rempli de glace.<br />\r\nServir dans un verre de type \"verre tulipe\".<br />\r\nUne cerise confite, une tranche d\'orange et un petit parasol.', '2021-09-26 06:13:51', 44, 'publie'),
(504, 'Margarita', 'Givrez le bord du verre en passant un quartier de citron vert sur le pourtour, puis trempez-le dans une assiette avec du sel fin. <br />\r\n2.Versez tous les ingrédients dans un shaker avec des glaçons.<br />\r\n3.Secouez énergiquement puis filtrez le cocktail dans le verre.<br />\r\n4.Décorez avec un quartier de citron vert. Servez.', '2021-09-26 06:14:57', 44, 'publie'),
(505, 'Manhattan', 'Ajoutez le whisky, le vin et les Bitters et mélangez avec un bâton. <br />\r\nEn ce qui concerne les Bitters, plusieurs types peuvent être utilisés, le Peychaud, l’orange, etc. <br />\r\nPour finir, il est suffisant de placer une cerise en sirop transpercée d’un cure-dents dans un verre.', '2021-09-26 06:19:02', 44, 'publie'),
(506, 'Moscow Mule', 'Remplissez vos 2 gobelets avec de la glace. <br />\r\nVersez dans chaque gobelet 60 ml de Vodka et 15 ml de jus de citron vert puis complétez chaque verre avec de la ginger beer. <br />\r\nMélangez légèrement puis décorez d’une rondelle de citron vert et d’un brin de menthe fraîche.', '2021-09-26 06:20:57', 44, 'publie'),
(507, 'Whiskey sour', 'Préparer le \"Whisky Sour\" dans un shaker.<br />\r\n<br />\r\nPresser le jus d\'un citron, verser dans le shaker avec le whisky et le sucre de canne. Bien frapper avec quelques glaçons.<br />\r\n<br />\r\nVerser le tout dans un verre type \"old fashioned\".<br />\r\n<br />\r\n<br />\r\n', '2021-09-26 06:22:42', 44, 'publie');

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

CREATE TABLE `commentaires` (
  `Com_Id` int(11) NOT NULL,
  `Com_Contenu` text NOT NULL,
  `Com_dateCreation` timestamp NOT NULL DEFAULT current_timestamp(),
  `Coc_Id` int(11) NOT NULL,
  `Uti_Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `commentaires`
--

INSERT INTO `commentaires` (`Com_Id`, `Com_Contenu`, `Com_dateCreation`, `Coc_Id`, `Uti_Id`) VALUES
(40, 'Un peu fort en whiskey...', '2021-09-26 06:35:08', 505, 45),
(41, 'Dans le genre Ovni, on ne fait pas mieux, et pourtant, il s\'agit bien là d\'une petite pépite qui m\'a laissé sans voix... LITERALLEMENT !!', '2021-09-26 06:38:00', 492, 45);

-- --------------------------------------------------------

--
-- Structure de la table `compositioncocktail`
--

CREATE TABLE `compositioncocktail` (
  `Ing_Id` int(11) NOT NULL,
  `Coc_Id` int(11) NOT NULL,
  `comp_Quantite` float DEFAULT NULL,
  `comp_Unite` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `compositioncocktail`
--

INSERT INTO `compositioncocktail` (`Ing_Id`, `Coc_Id`, `comp_Quantite`, `comp_Unite`) VALUES
(2, 489, 1.5, 'cl'),
(2, 490, 3, 'cl'),
(2, 492, 4, 'cl'),
(2, 494, 4, 'cl'),
(2, 495, 6, 'cl'),
(2, 499, 2, 'cl'),
(2, 506, 12, 'cl'),
(4, 498, 3.5, 'cl'),
(4, 501, 16, 'cl'),
(5, 504, 4, 'cl'),
(6, 491, 5, 'cl'),
(6, 505, 4, 'cl'),
(6, 507, 5, 'cl'),
(7, 493, 4, 'cl'),
(8, 498, 1.5, 'cl'),
(76, 485, 10, 'cl'),
(76, 500, 10, 'cl'),
(119, 493, 6, 'cl'),
(149, 485, 6, 'feuille'),
(149, 497, 8, 'feuille'),
(149, 500, 2, 'feuille'),
(204, 502, 1, 'cuillère'),
(548, 485, 4, 'cl'),
(548, 487, 4, 'cl'),
(548, 488, 4, 'cl'),
(548, 489, 1.5, 'cl'),
(548, 503, 3, 'cl'),
(549, 485, 2, 'cl'),
(550, 485, 2, 'tranche'),
(550, 493, 1, 'zeste'),
(550, 500, 1, 'tranche'),
(550, 502, 1, 'trait'),
(551, 487, 2, 'cl'),
(552, 487, 12, 'cl'),
(552, 488, 8, 'cl'),
(552, 490, 5, 'cl'),
(553, 487, 4, 'cl'),
(553, 488, 4, 'cl'),
(554, 488, 2, 'cl'),
(554, 494, 3, 'cl'),
(555, 489, 1.5, 'cl'),
(556, 489, 1.5, 'cl'),
(556, 499, 2, 'cl'),
(556, 503, 2, 'cl'),
(556, 504, 2, 'cl'),
(557, 489, 1.5, 'cl'),
(558, 489, 3, 'cl'),
(559, 489, 1, 'cl'),
(559, 494, 2, 'cl'),
(559, 498, 1.5, 'cl'),
(560, 490, 2, 'cl'),
(561, 490, 2, 'cl'),
(562, 490, 6, 'cl'),
(563, 491, 2, 'cuillère'),
(563, 497, 1, 'cl'),
(563, 498, 1, 'cl'),
(563, 503, 1, 'cl'),
(563, 507, 2, 'cl'),
(564, 491, 5, 'goutte'),
(565, 491, 3, 'goutte'),
(566, 491, 2, 'zeste'),
(567, 492, 12, 'cl'),
(568, 492, 2, 'goutte'),
(569, 492, 1, 'cl'),
(570, 492, 1, 'g'),
(571, 492, 1, 'g'),
(572, 492, 1, 'g'),
(573, 493, 1, 'zeste'),
(574, 493, 4, 'tranche'),
(575, 495, 6, 'cl'),
(576, 495, 6, 'cl'),
(577, 496, 3, 'cl'),
(578, 496, 2, 'cl'),
(579, 496, 1, 'cl'),
(580, 496, 1, 'rondelle'),
(581, 497, 6, 'cl'),
(582, 499, 2, 'cl'),
(583, 499, 1, 'cl'),
(583, 503, 3, 'cl'),
(583, 504, 2, 'cl'),
(583, 506, 3, 'cl'),
(584, 500, 2, 'cl'),
(585, 500, 3, 'cl'),
(586, 501, 32, 'cl'),
(587, 501, 4, 'tranche'),
(587, 507, 5, 'tranche'),
(588, 502, 5, 'cl'),
(589, 503, 1, 'cl'),
(590, 505, 2, 'cl'),
(591, 505, 5, 'goutte'),
(592, 506, 24, 'cl');

-- --------------------------------------------------------

--
-- Structure de la table `discuter`
--

CREATE TABLE `discuter` (
  `Dis_EmetteurId` int(11) NOT NULL,
  `Dis_RecepteurId` int(11) NOT NULL,
  `Dis_DateCreation` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Dis_Id` int(11) NOT NULL,
  `Dis_Contenu` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `favoris`
--

CREATE TABLE `favoris` (
  `Fav_Id` int(11) NOT NULL,
  `Fav_DateCreation` timestamp NOT NULL DEFAULT current_timestamp(),
  `Coc_Id` int(11) NOT NULL,
  `Uti_Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `images`
--

CREATE TABLE `images` (
  `Img_Id` int(11) NOT NULL,
  `Img_Nom` varchar(100) NOT NULL,
  `Img_Adresse` varchar(100) NOT NULL,
  `Coc_Id` int(11) DEFAULT NULL,
  `Uti_Id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `images`
--

INSERT INTO `images` (`Img_Id`, `Img_Nom`, `Img_Adresse`, `Coc_Id`, `Uti_Id`) VALUES
(117, '485_coc.jpg', 'public/images', 485, 44),
(119, '487_coc.jpg', 'public/images', 487, 44),
(120, '488_coc.jpg', 'public/images', 488, 44),
(121, '489_coc.jpg', 'public/images', 489, 44),
(122, '490_coc.jpg', 'public/images', 490, 44),
(123, '491_coc.jpeg', 'public/images', 491, 44),
(124, '492_coc.jpg', 'public/images', 492, 44),
(125, '493_coc.jpg', 'public/images', 493, 44),
(126, '494_coc.jpeg', 'public/images', 494, 44),
(127, '495_coc.jpg', 'public/images', 495, 44),
(128, '496_coc.jpg', 'public/images', 496, 44),
(129, '497_coc.jpg', 'public/images', 497, 44),
(130, '498_coc.jpg', 'public/images', 498, 44),
(131, '499_coc.jpg', 'public/images', 499, 44),
(132, '500_coc.jpg', 'public/images', 500, 44),
(133, '501_coc.jpg', 'public/images', 501, 44),
(134, '502_coc.jpeg', 'public/images', 502, 44),
(135, '503_coc.jpg', 'public/images', 503, 44),
(136, '504_coc.jpg', 'public/images', 504, 44),
(137, '505_coc.jpg', 'public/images', 505, 44),
(138, '506_coc.jpg', 'public/images', 506, 44),
(139, '507_coc.jpg', 'public/images', 507, 44),
(152, '45_uti.png', 'public/images', NULL, 45);

-- --------------------------------------------------------

--
-- Structure de la table `ingredients`
--

CREATE TABLE `ingredients` (
  `Ing_Id` int(11) NOT NULL,
  `Ing_Nom` varchar(100) NOT NULL,
  `Ing_Categorie` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(149, 'menthe', 'jus'),
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
(548, 'rhum blanc', 'alcool'),
(549, 'sirop de sucre de canne', 'sirop'),
(550, 'citron vert', 'fruit'),
(551, 'rhum ambré', 'alcool'),
(552, 'jus d\'ananas', 'jus'),
(553, 'lait de coco', 'lait'),
(554, 'curaçao bleu', 'liqueur'),
(555, 'gin', 'alcool'),
(556, 'triple sec (grand marnier)', 'liqueur'),
(557, 'tequila', 'alcool'),
(558, 'cola', 'sodas'),
(559, 'jus de citron', 'jus'),
(560, 'sirop de melon', 'sirop'),
(561, 'chambord', 'liqueur'),
(562, 'jus de cranberry (canneberges)', 'jus'),
(563, 'sirop de canne', 'valide'),
(564, 'café', 'valide'),
(565, 'chantilly', 'valide'),
(566, 'cacao', 'valide'),
(567, 'Jus de tomate', 'valide'),
(568, 'Tabasco rouge', 'valide'),
(569, 'Sauce anglaise', 'valide'),
(570, 'sel de celeri', 'valide'),
(571, 'sel fin', 'valide'),
(572, 'poivre', 'valide'),
(573, 'concombre', 'valide'),
(574, 'gingembre', 'valide'),
(575, 'liqueur de café', 'valide'),
(576, 'lait', 'valide'),
(577, 'vin blanc pétillant Prosecco', 'valide'),
(578, 'Aperol', 'valide'),
(579, 'eau', 'valide'),
(580, 'orange', 'valide'),
(581, 'bourbon ou whiskey de seigle', 'valide'),
(582, 'jus de cranberry', 'valide'),
(583, 'jus de citron vert', 'valide'),
(584, 'sirop de mojito', 'valide'),
(585, 'sirop de caribbean (saveur rhum)', 'valide'),
(586, 'indian tonic', 'valide'),
(587, 'citron', 'valide'),
(588, 'rhum cubain', 'valide'),
(589, 'sirop d\'orgeat', 'valide'),
(590, 'vin rouge (vermouth)', 'valide'),
(591, 'essence aromatique d’herbe Bitters', 'valide'),
(592, 'ginger beer', 'valide'),
(593, 'citron', 'valide');

-- --------------------------------------------------------

--
-- Structure de la table `likes`
--

CREATE TABLE `likes` (
  `Lik_Id` int(11) NOT NULL,
  `Lik_DateCreation` timestamp NOT NULL DEFAULT current_timestamp(),
  `Coc_Id` int(11) NOT NULL,
  `Uti_Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `typecocktail`
--

CREATE TABLE `typecocktail` (
  `Typ_Id` int(11) NOT NULL,
  `Typ_Libelle` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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

CREATE TABLE `utilisateurs` (
  `Uti_Id` int(11) NOT NULL,
  `Uti_Pseudo` varchar(50) NOT NULL,
  `Uti_Login` varchar(50) NOT NULL,
  `Uti_Mdp` varchar(255) NOT NULL,
  `Uti_Droit` varchar(50) NOT NULL,
  `Uti_DateInscription` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`Uti_Id`, `Uti_Pseudo`, `Uti_Login`, `Uti_Mdp`, `Uti_Droit`, `Uti_DateInscription`) VALUES
(44, 'Dorian', 'dorian@dorian.fr', '$2y$10$0tQpSe/mYrqXjRGdoRffbulI9Eoqv5Mm7Y7RYZnPcl1w4wI1EOBxi', 'admin', '2021-09-26 00:55:53'),
(45, 'Fred', 'fred@fred.fr', '$2y$10$rupGyVrvWB93IZKaBZlLJe2gzD7K8QCXt.aKGV0LjB9juyqu8l7IC', 'contributeur', '2021-09-26 06:33:29');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categoriecocktail`
--
ALTER TABLE `categoriecocktail`
  ADD PRIMARY KEY (`Typ_Id`,`Coc_Id`),
  ADD KEY `CategorieCocktail_Cocktail0_FK` (`Coc_Id`);

--
-- Index pour la table `cocktail`
--
ALTER TABLE `cocktail`
  ADD PRIMARY KEY (`Coc_Id`),
  ADD KEY `Cocktail_Utilisateurs_FK` (`Uti_Id`);

--
-- Index pour la table `commentaires`
--
ALTER TABLE `commentaires`
  ADD PRIMARY KEY (`Com_Id`),
  ADD KEY `Commentaires_Cocktail_FK` (`Coc_Id`),
  ADD KEY `Commentaires_Utilisateurs0_FK` (`Uti_Id`);

--
-- Index pour la table `compositioncocktail`
--
ALTER TABLE `compositioncocktail`
  ADD PRIMARY KEY (`Ing_Id`,`Coc_Id`),
  ADD KEY `CompositionCocktail_Cocktail0_FK` (`Coc_Id`);

--
-- Index pour la table `discuter`
--
ALTER TABLE `discuter`
  ADD PRIMARY KEY (`Dis_Id`),
  ADD KEY `Discuter_Utilisateurs_FK` (`Dis_EmetteurId`),
  ADD KEY `Discuter_Utilisateurs0_FK` (`Dis_RecepteurId`);

--
-- Index pour la table `favoris`
--
ALTER TABLE `favoris`
  ADD PRIMARY KEY (`Fav_Id`),
  ADD KEY `Favoris_Cocktail_FK` (`Coc_Id`),
  ADD KEY `Favoris_Utilisateurs0_FK` (`Uti_Id`);

--
-- Index pour la table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`Img_Id`),
  ADD KEY `Images_Cocktail_AK` (`Coc_Id`) USING BTREE,
  ADD KEY `Images_Utilisateurs0_AK` (`Uti_Id`) USING BTREE;

--
-- Index pour la table `ingredients`
--
ALTER TABLE `ingredients`
  ADD PRIMARY KEY (`Ing_Id`);

--
-- Index pour la table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`Lik_Id`),
  ADD KEY `Likes_Cocktail_FK` (`Coc_Id`),
  ADD KEY `Likes_Utilisateurs0_FK` (`Uti_Id`);

--
-- Index pour la table `typecocktail`
--
ALTER TABLE `typecocktail`
  ADD PRIMARY KEY (`Typ_Id`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`Uti_Id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `cocktail`
--
ALTER TABLE `cocktail`
  MODIFY `Coc_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=508;

--
-- AUTO_INCREMENT pour la table `commentaires`
--
ALTER TABLE `commentaires`
  MODIFY `Com_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT pour la table `discuter`
--
ALTER TABLE `discuter`
  MODIFY `Dis_Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `favoris`
--
ALTER TABLE `favoris`
  MODIFY `Fav_Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `images`
--
ALTER TABLE `images`
  MODIFY `Img_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=153;

--
-- AUTO_INCREMENT pour la table `ingredients`
--
ALTER TABLE `ingredients`
  MODIFY `Ing_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=594;

--
-- AUTO_INCREMENT pour la table `likes`
--
ALTER TABLE `likes`
  MODIFY `Lik_Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `typecocktail`
--
ALTER TABLE `typecocktail`
  MODIFY `Typ_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `Uti_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

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
