-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  sam. 18 août 2018 à 21:24
-- Version du serveur :  5.7.21
-- Version de PHP :  5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `katiagg`
--

-- --------------------------------------------------------

--
-- Structure de la table `newprojects`
--

DROP TABLE IF EXISTS `newprojects`;
CREATE TABLE IF NOT EXISTS `newprojects` (
  `id` int(3) NOT NULL,
  `title` varchar(40) NOT NULL,
  `img` varchar(30) NOT NULL,
  `tags` text NOT NULL,
  `summary` text NOT NULL,
  `links` text NOT NULL,
  `description` text NOT NULL,
  `technologies` varchar(60) NOT NULL,
  `date` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `newprojects`
--

INSERT INTO `newprojects` (`id`, `title`, `img`, `tags`, `summary`, `links`, `description`, `technologies`, `date`) VALUES
(1, 'Chromanima', 'chromanima.jpg', '<span class=\"tag\">Unity</span>\r\n<span class=\"tag\">Game</span>\r\n', '2D puzzle platformer', '<a href=\"https://youtu.be/xFvzKKEBBEg\" onclick=\"window.open(this.href); return false;\">Video</a>\r\n<a href=\"https://github.com/Kagigz/Unijam\" onclick=\"window.open(this.href); return false;\">Github</a>', '<p>Created during a game jam with 5 other people. We had less than 48h to find an idea and develop a game from scratch.</p>\r\n\r\n<p>In our platformer/puzzle-game, a lost soul is helped by little souls who each have a different power to move past obstacles. When you use a power, it disappears, so you have to play strategically to keep the powers you\'ll need later.</p>', 'Unity', 'Oct 17'),
(3, 'Gaia', 'gaia.jpg', '<span class=\"tag\">Mobile App</span>\r\n<span class=\"tag\">Chatbot</span>', 'Chatbot app for people with Alzheimer\'s', '<a href=\"https://youtu.be/q0h4v9mNRNA\" onclick=\"window.open(this.href); return false;\">Video</a>\r\n<a href=\"https://github.com/Kagigz/gaia\" onclick=\"window.open(this.href); return false;\">Github</a>\r\n<a href=\"https://agirlintech.com/2018/04/01/gaia-ep4/\" onclick=\"window.open(this.href); return false;\">Blog</a>\r\n', '<p>Chatbot mobile app made with Ionic, using the dialogflow API and firebase.</p>\r\n<p>For now, the user can ask the chatbot to add reminders and who some people are. The next steps are on my blog. </p>\r\n', 'Ionic, Dialogflow, Firebase', 'Dec 17 - X'),
(2, 'Jardin Secret', 'jardinsecret.jpg', '<span class=\"tag\">Unity</span>\r\n<span class=\"tag\">VR</span>', 'Personalized VR experience', '<a href=\"https://youtu.be/X24rP1jTpWA\" onclick=\"window.open(this.href); return false;\">Video</a>\r\n', '<p>Developed with 4 other people as an end-of-study project for the French video game studio From the Bard, using assets created by Studio Oracle.</p>\r\n<p>In this garden in virtual reality, an AI monitors changes in the environment based on the player\'s actions. That way, the garden evolves into something matching the player\'s preferences.</p>', 'Unity, Oculus Rift, Leap motion', 'Oct 17 - Feb 18'),
(4, 'The Village', 'thevillage.jpg', '<span class=\"tag\">Unity</span>\r\n<span class=\"tag\">VR</span>\r\n<span class=\"tag\">Game</span>', 'VR RPG Game', '<a href=\"https://agirlintech.com/2018/01/23/thevillage-ep1/\" onclick=\"window.open(this.href); return false;\">Blog</a>', '<p>Game in which the player can explore a village in virtual reality and talk to its inhabitants to learn about its history.</p>', 'Unity, Windows MR Headset, MRTK', 'Jan 18 - X'),
(5, 'Populate', 'populate.jpg', '<span class=\"tag\">Unity</span>\r\n<span class=\"tag\">Mobile App</span>\r\n<span class=\"tag\">Game</span>', '2D mobile game', '<a href=\"https://youtu.be/cCIht7YCK34\" onclick=\"window.open(this.href); return false;\">Video</a>\r\n<a href=\"https://agirlintech.com/2018/07/05/populate-ep3/\" onclick=\"window.open(this.href); return false;\">Blog</a>', '<p>Mobile game in which the player needs to keep organisms alive by feeding them. The organisms reproduce and it gets harder to feed those who need it most.</p>', 'Unity', 'Jun 18 - X'),
(6, 'Musicalously', 'musicalously.jpg', '<span class=\"tag\">Unity</span>', 'Customizable sound visualizer', '<a href=\"https://youtu.be/AVSZH8UPU4I\" onclick=\"window.open(this.href); return false;\">Video</a>\r\n<a href=\"https://github.com/Kagigz/soundvisualizer\" onclick=\"window.open(this.href); return false;\">Github</a>', '<p>Sound visualizer and music player with UI controls and a color palette to change the aspect of the sound visualization.</p>', 'Unity', 'Aug 18');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
