-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : sam. 12 sep. 2020 à 00:37
-- Version du serveur :  5.7.24
-- Version de PHP : 7.3.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `myportfolio`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id_ad` int(10) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id_ad`, `username`, `password`) VALUES
(1, 'zahid', 'zahid123'),
(2, 'fatimaezzahra', 'zahid123456');

-- --------------------------------------------------------

--
-- Structure de la table `counte`
--

CREATE TABLE `counte` (
  `id_c` int(10) NOT NULL,
  `nb_cl` int(11) NOT NULL,
  `nb_projetc` int(11) NOT NULL,
  `nb_hours` int(11) NOT NULL,
  `nb_workes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `counte`
--

INSERT INTO `counte` (`id_c`, `nb_cl`, `nb_projetc`, `nb_hours`, `nb_workes`) VALUES
(5, 2, 5, 30, 2);

-- --------------------------------------------------------

--
-- Structure de la table `education`
--

CREATE TABLE `education` (
  `id_ed` int(10) NOT NULL,
  `title` varchar(250) NOT NULL,
  `years` varchar(250) NOT NULL,
  `name_sc` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `education`
--

INSERT INTO `education` (`id_ed`, `title`, `years`, `name_sc`) VALUES
(1, ' Learner at Youcode Youssoufia Web and Mobile Development School', '2019 - Present', 'Youcode Youssoufia'),
(2, ' Technician Diploma specializing in IT Development', '2017â€“2019', 'the institute  Specialist in Applied Technology Ntic Safi'),
(3, '1st year at the Faculty of Science and Technology BÃ©ni Mellal MIPC', '2016-2017 ', 'Faculty of Science and Technology BÃ©ni Mellal'),
(4, ' Baccalaureate in Experimental Sciences option Physics', '2015-2016 ', 'Kachkat High School  Youssoufia');

-- --------------------------------------------------------

--
-- Structure de la table `professional_expe`
--

CREATE TABLE `professional_expe` (
  `id_ex` int(10) NOT NULL,
  `title` varchar(250) NOT NULL,
  `years` varchar(240) NOT NULL,
  `name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `professional_expe`
--

INSERT INTO `professional_expe` (`id_ex`, `title`, `years`, `name`) VALUES
(1, 'traineeship', '07/01/2019 to 07/31/2019', 'Public Writer\'s Cabinet in Youssoufia'),
(2, ' technical internship', ' 02/01/2019 to 02/28/2019', ' Youssoufia commune'),
(3, 'technical internship', ' 01/07/2020 to 31/08/2020', 'Web agency Divosoft');

-- --------------------------------------------------------

--
-- Structure de la table `projects`
--

CREATE TABLE `projects` (
  `id_pro` int(10) NOT NULL,
  `name_project` varchar(250) NOT NULL,
  `category` varchar(250) NOT NULL,
  `project_date` varchar(250) NOT NULL,
  `url_project` varchar(250) NOT NULL,
  `desc_project` text NOT NULL,
  `pict` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `projects`
--

INSERT INTO `projects` (`id_pro`, `name_project`, `category`, `project_date`, `url_project`, `desc_project`, `pict`) VALUES
(5, 'Covid_19', 'front end', '22,mars 2020', 'https://github.com/Fatima-Ezzahra-Zahid/corona-projet', 'Following the current state in Morocco facing the CORONA VIRUS pandemic, the trainers of YouCode YOUSSOUFIA, have proposed a project aimed at guiding the community to know its current state of health by answering questions that a doctor will ask us on site. .\r\n- Creation of a static and adaptable web user interface.\r\n- Development of a dynamic web user interface.\r\n- Integration of the test algorithm.', '651337.jpg'),
(6, 'real estate rental', 'Front end and back end ', '1, September 2020', 'https://github.com/Fatima-Ezzahra-Zahid/location-immobilier', '\r\nreal estate rental site is our business, for all\r\n real estate transactions whether: Apartment, Villa or Office rental, room and advertise your rental in all cities of Morocco', '104895.jpg'),
(7, 'site Webagency', 'front end', '22,Feb 2020', 'https://github.com/Fatima-Ezzahra-Zahid/Ecoteam/tree/master/Brief%20Projet%20Niv03%20-%20Developpement%20d\'un%20site%20Webagency/Website', 'showcase website of a web agency', '573886.jpg'),
(8, ' time trial challenge', 'front end', '30 ,April 2020 ', 'https://github.com/Apter-X/Ecoteam/tree/master/07.%20Atelier-ludique%20(contre%20la%20montre)', 'Landing page, develop a graphical interface against the clock', '883373.jpg'),
(10, 'site youcode', 'design photoshop', ' 9 ,Dec 2019 ', 'https://github.com/Fatima-Ezzahra-Zahid/maquettage-N1', 'Youcode site design of 3 mobile, discktop and tablet versions', '967316.jpg'),
(11, 'web application', 'front end', '30,Apr 2020 ', 'https://github.com/Apter-X/Ecoteam/tree/master/08.%20Front-end%20web%20application', 'project to build an application (Front-end): (development _ Scripting _ Testing _ Production)', '358348.png');

-- --------------------------------------------------------

--
-- Structure de la table `testimonials`
--

CREATE TABLE `testimonials` (
  `id_t` int(10) NOT NULL,
  `pict` varchar(250) NOT NULL,
  `text` text NOT NULL,
  `name_t` varchar(250) NOT NULL,
  `work` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `testimonials`
--

INSERT INTO `testimonials` (`id_t`, `pict`, `text`, `name_t`, `work`) VALUES
(1, '471378.jpg', 'I had the pleasure to work with Fatima-ezzahra in many development project. The will of obtaining result is the most powerful ability i\'ve seen on her. Besides to the adaptation in many environments technically and globally', 'Abdellatif Tijani', ' Referent trainer at YouCode'),
(2, '158929.jpg', 'It\'s with much enthusiasm that I recommend Fatima-Ezzahra, she\'s a highly skilled web developer a brilliant problem solver and a very creative person. I highly recommend her.', 'Mina Dakiri', 'WEB INTEGRATOR'),
(3, '280759.jpg', 'Anyone would be lucky to have Fatima-ezzahra as a colleague. ! She is always available to help us when needed, she strives for excellence and is a valuable team player. Her strongest qualities are problem solving and teamwork, which were very helpful to the project we worked on together.', 'Oussama Elhouari', 'web devoloper');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_ad`);

--
-- Index pour la table `counte`
--
ALTER TABLE `counte`
  ADD PRIMARY KEY (`id_c`);

--
-- Index pour la table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id_ed`);

--
-- Index pour la table `professional_expe`
--
ALTER TABLE `professional_expe`
  ADD PRIMARY KEY (`id_ex`);

--
-- Index pour la table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id_pro`);

--
-- Index pour la table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id_t`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_ad` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `counte`
--
ALTER TABLE `counte`
  MODIFY `id_c` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `education`
--
ALTER TABLE `education`
  MODIFY `id_ed` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `professional_expe`
--
ALTER TABLE `professional_expe`
  MODIFY `id_ex` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `projects`
--
ALTER TABLE `projects`
  MODIFY `id_pro` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id_t` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
