-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mar 10 Novembre 2020 à 09:16
-- Version du serveur :  5.7.11
-- Version de PHP :  7.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `starwars`
--

-- --------------------------------------------------------

--
-- Structure de la table `climate`
--

CREATE TABLE `climate` (
  `id` int(3) UNSIGNED NOT NULL,
  `name` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `climate`
--

INSERT INTO `climate` (`id`, `name`) VALUES
(1, 'arid'),
(2, 'temperate'),
(3, 'tropical'),
(4, 'frozen'),
(5, 'murky'),
(6, 'windy'),
(7, 'hot'),
(8, 'humid');

-- --------------------------------------------------------

--
-- Structure de la table `film`
--

CREATE TABLE `film` (
  `id` int(3) UNSIGNED NOT NULL,
  `title` varchar(50) NOT NULL,
  `release_date` date DEFAULT NULL,
  `episode` int(2) DEFAULT NULL,
  `opening` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `film`
--

INSERT INTO `film` (`id`, `title`, `release_date`, `episode`, `opening`) VALUES
(1, 'A New Hope', '1977-05-25', 4, 'It is a period of civil war.\r\nRebel spaceships, striking\r\nfrom a hidden base, have won\r\ntheir first victory against\r\nthe evil Galactic Empire.\r\n\r\nDuring the battle, Rebel\r\nspies managed to steal secret\r\nplans to the Empire\'s\r\nultimate weapon, the DEATH\r\nSTAR, an armored space\r\nstation with enough power\r\nto destroy an entire planet.\r\n\r\nPursued by the Empire\'s\r\nsinister agents, Princess\r\nLeia races home aboard her\r\nstarship, custodian of the\r\nstolen plans that can save her\r\npeople and restore\r\nfreedom to the galaxy....'),
(2, 'The Empire Strikes Back', '1980-05-17', 5, 'It is a dark time for the\r\nRebellion. Although the Death\r\nStar has been destroyed,\r\nImperial troops have driven the\r\nRebel forces from their hidden\r\nbase and pursued them across\r\nthe galaxy.\r\n\r\nEvading the dreaded Imperial\r\nStarfleet, a group of freedom\r\nfighters led by Luke Skywalker\r\nhas established a new secret\r\nbase on the remote ice world\r\nof Hoth.\r\n\r\nThe evil lord Darth Vader,\r\nobsessed with finding young\r\nSkywalker, has dispatched\r\nthousands of remote probes into\r\nthe far reaches of space....'),
(3, 'Return of the Jedi', '1983-05-25', 6, 'Luke Skywalker has returned to\r\nhis home planet of Tatooine in\r\nan attempt to rescue his\r\nfriend Han Solo from the\r\nclutches of the vile gangster\r\nJabba the Hutt.\r\n\r\nLittle does Luke know that the\r\nGALACTIC EMPIRE has secretly\r\nbegun construction on a new\r\narmored space station even\r\nmore powerful than the first\r\ndreaded Death Star.\r\n\r\nWhen completed, this ultimate\r\nweapon will spell certain doom\r\nfor the small band of rebels\r\nstruggling to restore freedom\r\nto the galaxy...'),
(4, 'The Phantom Menace', '1999-05-19', 1, 'Turmoil has engulfed the\r\nGalactic Republic. The taxation\r\nof trade routes to outlying star\r\nsystems is in dispute.\r\n\r\nHoping to resolve the matter\r\nwith a blockade of deadly\r\nbattleships, the greedy Trade\r\nFederation has stopped all\r\nshipping to the small planet\r\nof Naboo.\r\n\r\nWhile the Congress of the\r\nRepublic endlessly debates\r\nthis alarming chain of events,\r\nthe Supreme Chancellor has\r\nsecretly dispatched two Jedi\r\nKnights, the guardians of\r\npeace and justice in the\r\ngalaxy, to settle the conflict....'),
(5, 'Attack of the Clones', '2002-05-16', 2, 'There is unrest in the Galactic\r\nSenate. Several thousand solar\r\nsystems have declared their\r\nintentions to leave the Republic.\r\n\r\nThis separatist movement,\r\nunder the leadership of the\r\nmysterious Count Dooku, has\r\nmade it difficult for the limited\r\nnumber of Jedi Knights to maintain \r\npeace and order in the galaxy.\r\n\r\nSenator Amidala, the former\r\nQueen of Naboo, is returning\r\nto the Galactic Senate to vote\r\non the critical issue of creating\r\nan ARMY OF THE REPUBLIC\r\nto assist the overwhelmed\r\nJedi....'),
(6, 'Revenge of the Sith', '2005-05-19', 3, 'War! The Republic is crumbling\r\nunder attacks by the ruthless\r\nSith Lord, Count Dooku.\r\nThere are heroes on both sides.\r\nEvil is everywhere.\r\n\r\nIn a stunning move, the\r\nfiendish droid leader, General\r\nGrievous, has swept into the\r\nRepublic capital and kidnapped\r\nChancellor Palpatine, leader of\r\nthe Galactic Senate.\r\n\r\nAs the Separatist Droid Army\r\nattempts to flee the besieged\r\ncapital with their valuable\r\nhostage, two Jedi Knights lead a\r\ndesperate mission to rescue the\r\ncaptive Chancellor....');

-- --------------------------------------------------------

--
-- Structure de la table `filmplanets`
--

CREATE TABLE `filmplanets` (
  `id_film` int(3) UNSIGNED NOT NULL,
  `id_planet` int(3) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `filmplanets`
--

INSERT INTO `filmplanets` (`id_film`, `id_planet`) VALUES
(1, 1),
(3, 1),
(1, 2),
(1, 3),
(2, 4),
(2, 5),
(3, 5),
(2, 6),
(3, 7),
(3, 8),
(3, 9);

-- --------------------------------------------------------

--
-- Structure de la table `hasclimate`
--

CREATE TABLE `hasclimate` (
  `id_planet` int(3) UNSIGNED NOT NULL,
  `id_climate` int(3) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `hasclimate`
--

INSERT INTO `hasclimate` (`id_planet`, `id_climate`) VALUES
(1, 1),
(11, 1),
(12, 1),
(2, 2),
(3, 2),
(6, 2),
(7, 2),
(8, 2),
(9, 2),
(10, 2),
(11, 2),
(12, 2),
(16, 2),
(3, 3),
(14, 3),
(4, 4),
(5, 5),
(12, 6),
(13, 7),
(15, 7),
(15, 8);

-- --------------------------------------------------------

--
-- Structure de la table `note`
--

CREATE TABLE `note` (
  `id` int(11) NOT NULL,
  `note` decimal(10,0) NOT NULL,
  `id_film` int(11) NOT NULL,
  `nb_note` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `note`
--

INSERT INTO `note` (`id`, `note`, `id_film`, `nb_note`) VALUES
(1, '4', 1, 6),
(2, '4', 2, 6),
(3, '5', 3, 1),
(4, '5', 4, 1),
(5, '5', 5, 1),
(6, '5', 6, 1);

-- --------------------------------------------------------

--
-- Structure de la table `people`
--

CREATE TABLE `people` (
  `id` int(6) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `gender` char(1) DEFAULT NULL,
  `height` int(3) DEFAULT NULL,
  `mass` int(4) DEFAULT NULL,
  `homeworld` int(3) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `people`
--

INSERT INTO `people` (`id`, `name`, `gender`, `height`, `mass`, `homeworld`) VALUES
(1, 'Luke Skywalker', 'M', 172, 77, 1),
(2, 'C-3PO', '-', 167, 75, 1),
(3, 'R2-D2', '-', 96, 32, 8),
(4, 'Darth Vader', 'M', 202, 136, 1),
(5, 'Leia Organa', 'F', 150, 49, 2),
(6, 'Owen Lars', 'M', 178, 120, 1),
(7, 'Obi-Wan Kenobi', 'M', 182, 77, 16),
(8, 'Anakin Skywalker', 'M', 188, 84, 1),
(9, 'Chewbacca', 'M', 228, 112, 14),
(10, 'Han Solo', 'M', 180, 80, 17);

-- --------------------------------------------------------

--
-- Structure de la table `planet`
--

CREATE TABLE `planet` (
  `id` int(3) UNSIGNED NOT NULL,
  `name` varchar(35) NOT NULL,
  `diameter` int(7) DEFAULT NULL,
  `population` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `planet`
--

INSERT INTO `planet` (`id`, `name`, `diameter`, `population`) VALUES
(1, 'Tatooine', 10465, '200000'),
(2, 'Alderaan', 12500, '2000000000'),
(3, 'Yavin IV', 10200, '1000'),
(4, 'Hoth', 7200, 'unknown'),
(5, 'Dagobah', 8900, 'unknown'),
(6, 'Bespin', 118000, '6000000'),
(7, 'Endor', 4900, '30000000'),
(8, 'Naboo', 12120, '4500000000'),
(9, 'Coruscant', 12240, '1000000000000'),
(10, 'Kamino', 19720, '1000000000'),
(11, 'Geonosis', 11370, '100000000000'),
(12, 'Utapau', 12900, '95000000'),
(13, 'Mustafar', 4200, '20000'),
(14, 'Kashyyyk', 12765, '45000000'),
(15, 'Felucia', 9100, '8500000'),
(16, 'Stewjon', 0, 'unknown'),
(17, 'Corellia', 11000, '3000000000');

-- --------------------------------------------------------

--
-- Structure de la table `playsin`
--

CREATE TABLE `playsin` (
  `id_people` int(6) UNSIGNED NOT NULL,
  `id_film` int(4) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `playsin`
--

INSERT INTO `playsin` (`id_people`, `id_film`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(9, 1),
(10, 1),
(1, 2),
(2, 2),
(3, 2),
(4, 2),
(5, 2),
(9, 2),
(10, 2),
(1, 3),
(2, 3),
(3, 3),
(4, 3),
(5, 3),
(9, 3),
(10, 3),
(2, 4),
(3, 4),
(8, 4),
(2, 5),
(3, 5),
(8, 5),
(1, 6),
(2, 6),
(3, 6);

-- --------------------------------------------------------

--
-- Structure de la table `species`
--

CREATE TABLE `species` (
  `id` int(3) UNSIGNED NOT NULL,
  `classification` varchar(30) DEFAULT NULL,
  `name` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `species`
--

INSERT INTO `species` (`id`, `classification`, `name`) VALUES
(1, 'mammal', 'Human'),
(2, 'artificial', 'Droid'),
(3, 'mammal', 'Wookie'),
(4, 'reptilian', 'Rodian'),
(5, 'gastropod', 'Hutt'),
(6, 'mammal', 'Yoda\'s species'),
(7, 'reptile', 'Trandoshan'),
(8, 'amphibian', 'Mon Calamari'),
(9, 'mammal', 'Ewok'),
(10, 'mammal', 'Sullustan'),
(11, 'unknown', 'Neimodian'),
(12, 'amphibian', 'Gungan'),
(13, 'mammal', 'Toydarian'),
(14, 'mammal', 'Dug'),
(15, 'mammal', 'Twi\'lek'),
(16, 'reptile', 'Aleena'),
(17, 'unknown', 'Vulptereen');

-- --------------------------------------------------------

--
-- Structure de la table `starship`
--

CREATE TABLE `starship` (
  `id` int(3) UNSIGNED NOT NULL,
  `class` varchar(40) NOT NULL,
  `mglt` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `starship`
--

INSERT INTO `starship` (`id`, `class`, `mglt`) VALUES
(1, 'corvette', 60),
(2, 'Star Destroyer', 60),
(3, 'landing craft', 70),
(4, 'Deep Space Mobile Battlestation', 10),
(5, 'Light freighter', 75),
(6, 'assault starfighter', 80),
(7, 'Starfighter', 100),
(8, 'Armed government transport', 50);

-- --------------------------------------------------------

--
-- Structure de la table `starshipsinfilms`
--

CREATE TABLE `starshipsinfilms` (
  `id_starship` int(3) UNSIGNED NOT NULL,
  `id_film` int(3) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(15) NOT NULL,
  `mail` varchar(40) NOT NULL,
  `mdp` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `pseudo`, `mail`, `mdp`) VALUES
(75, 'Sarah', 'emilielalou974@gmail.com', '202cb962ac59075b964b07152d234b70'),
(78, 'test', 'test@gmail.com', '098f6bcd4621d373cade4e832627b4f6');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `climate`
--
ALTER TABLE `climate`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `filmplanets`
--
ALTER TABLE `filmplanets`
  ADD PRIMARY KEY (`id_film`,`id_planet`),
  ADD KEY `fk_filmplanets_planet` (`id_planet`);

--
-- Index pour la table `hasclimate`
--
ALTER TABLE `hasclimate`
  ADD PRIMARY KEY (`id_planet`,`id_climate`),
  ADD KEY `fk_hasclimate_climate` (`id_climate`);

--
-- Index pour la table `note`
--
ALTER TABLE `note`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `people`
--
ALTER TABLE `people`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_people_homeworld` (`homeworld`);

--
-- Index pour la table `planet`
--
ALTER TABLE `planet`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `playsin`
--
ALTER TABLE `playsin`
  ADD PRIMARY KEY (`id_people`,`id_film`),
  ADD KEY `fk_playsin_film` (`id_film`);

--
-- Index pour la table `species`
--
ALTER TABLE `species`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `starship`
--
ALTER TABLE `starship`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `starshipsinfilms`
--
ALTER TABLE `starshipsinfilms`
  ADD PRIMARY KEY (`id_starship`,`id_film`),
  ADD KEY `fk_starshipinfilms_film` (`id_film`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `climate`
--
ALTER TABLE `climate`
  MODIFY `id` int(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `film`
--
ALTER TABLE `film`
  MODIFY `id` int(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `note`
--
ALTER TABLE `note`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `people`
--
ALTER TABLE `people`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT pour la table `planet`
--
ALTER TABLE `planet`
  MODIFY `id` int(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT pour la table `species`
--
ALTER TABLE `species`
  MODIFY `id` int(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT pour la table `starship`
--
ALTER TABLE `starship`
  MODIFY `id` int(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `filmplanets`
--
ALTER TABLE `filmplanets`
  ADD CONSTRAINT `fk_filmplanets_film` FOREIGN KEY (`id_film`) REFERENCES `film` (`id`),
  ADD CONSTRAINT `fk_filmplanets_planet` FOREIGN KEY (`id_planet`) REFERENCES `planet` (`id`);

--
-- Contraintes pour la table `hasclimate`
--
ALTER TABLE `hasclimate`
  ADD CONSTRAINT `fk_hasclimate_climate` FOREIGN KEY (`id_climate`) REFERENCES `climate` (`id`),
  ADD CONSTRAINT `fk_hasclimate_planet` FOREIGN KEY (`id_planet`) REFERENCES `planet` (`id`);

--
-- Contraintes pour la table `people`
--
ALTER TABLE `people`
  ADD CONSTRAINT `fk_people_homeworld` FOREIGN KEY (`homeworld`) REFERENCES `planet` (`id`);

--
-- Contraintes pour la table `playsin`
--
ALTER TABLE `playsin`
  ADD CONSTRAINT `fk_playsin_film` FOREIGN KEY (`id_film`) REFERENCES `film` (`id`),
  ADD CONSTRAINT `fk_playsin_people` FOREIGN KEY (`id_people`) REFERENCES `people` (`id`);

--
-- Contraintes pour la table `starshipsinfilms`
--
ALTER TABLE `starshipsinfilms`
  ADD CONSTRAINT `fk_starshipinfilms_film` FOREIGN KEY (`id_film`) REFERENCES `film` (`id`),
  ADD CONSTRAINT `fk_starshipinfilms_starship` FOREIGN KEY (`id_starship`) REFERENCES `starship` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
