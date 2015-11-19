-- phpMyAdmin SQL Dump
-- version 3.3.10.4
-- http://www.phpmyadmin.net
--
-- Host: mysql.jlcclients.com
-- Generation Time: Nov 18, 2015 at 04:13 PM
-- Server version: 5.6.25
-- PHP Version: 5.3.29

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `uofs_movies`
--

-- --------------------------------------------------------

--
-- Table structure for table `actors`
--

CREATE TABLE IF NOT EXISTS `actors` (
  `aID` mediumint(9) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `bio` longtext NOT NULL,
  `dob` date NOT NULL,
  `won_oscar` tinyint(4) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`aID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `actors`
--

INSERT INTO `actors` (`aID`, `first_name`, `last_name`, `bio`, `dob`, `won_oscar`, `timestamp`) VALUES
(1, 'Mark', 'Hamill', 'I suggest you try it again, Luke. This time, let go your conscious self and act on instinct. Leave that to me. Send a distress signal, and inform the Senate that all on board were killed. The Force is strong with this one. I have you now. What good is a reward if you ain''t around to use it? Besides, attacking that battle station ain''t my idea of courage. It''s more likeâ€¦suicide. Hokey religions and ancient weapons are no match for a good blaster at your side, kid', '1951-09-25', 0, '2014-11-21 13:15:23'),
(2, 'George', 'Clooney', 'Inflammable means flammable? What a country. Hi. I''m Troy McClure. You may remember me from such self-help tapes as "Smoke Yourself Thin" and "Get Some Confidence, Stupid!" Here''s to alcohol, the cause of â€” and solution to â€” all life''s problems. When I held that gun in my hand, I felt a surge of powerâ€¦like God must feel when he''s holding a gun. We started out like Romeo and Juliet, but it ended up in tragedy.', '1961-05-06', 1, '2014-11-21 13:15:23'),
(3, 'Harrison', 'Ford', 'Something', '1945-09-18', 0, '2015-09-23 16:09:25'),
(4, 'Marlo', 'Brando', 'The godfather', '1935-12-03', 1, '2015-09-23 15:20:27'),
(5, 'Rupert', 'Grint', 'The red head one', '1988-12-02', 1, '2015-09-30 15:48:00'),
(6, 'Anna', 'Kenddrick', 'Cute actress', '1985-08-09', 0, '2015-09-30 15:44:22'),
(7, 'Dan', 'Raddcliffe', 'Harry Potter', '1989-09-22', 0, '2015-09-30 15:47:15');

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE IF NOT EXISTS `genre` (
  `gID` smallint(6) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`gID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`gID`, `name`, `timestamp`) VALUES
(1, 'Sci-Fi', '2014-11-21 13:16:26'),
(2, 'Fantasy', '2014-11-21 13:16:26'),
(3, 'Political Satire', '2014-11-21 13:16:38'),
(4, 'Comedy', '2014-11-21 13:16:38'),
(5, 'Crime', '2014-11-21 13:26:18'),
(6, 'Thriller', '2014-11-21 13:26:18'),
(7, 'Cute Shenanigans', '2015-09-23 18:04:13');

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE IF NOT EXISTS `movies` (
  `mID` mediumint(9) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `year_released` year(4) NOT NULL,
  `synopsis` longtext NOT NULL,
  `was_novel` tinyint(4) NOT NULL,
  `studioID` mediumint(9) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`mID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=42 ;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`mID`, `title`, `year_released`, `synopsis`, `was_novel`, `studioID`, `timestamp`) VALUES
(1, 'Star Wars: A New Hope', 1977, 'Hokey religions and ancient weapons are no match for a good blaster at your side, kid. You''re all clear, kid. Let''s blow this thing and go home! I suggest you try it again, Luke. This time, let go your conscious self and act on instinct.', 0, 1, '2014-11-21 13:13:25'),
(2, 'Men Who Stare at Goats', 2009, 'Did you dress her up like this? Who''s that then? I''m not a witch. But you are dressed as oneâ€¦ Well, how''d you become king, then?', 1, 2, '2014-11-21 13:13:25'),
(3, 'Ocean''s Eleven', 2001, 'Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sed ut perspiciatis unde omnis iste natus error sit voluptatem. Cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam.', 0, 3, '2014-11-21 13:21:49'),
(4, 'Ocean''s Twleve', 2004, 'Eaque ipsa quae ab illo inventore veritatis et quasi. Architecto beatae vitae dicta sunt explicabo. Et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque. Cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia. Fugiat quo voluptas nulla pariatur? Nihil molestiae consequatur, vel illum qui dolorem eum.', 0, 3, '2014-11-21 13:21:49'),
(5, 'Pitch Perfect', 2012, 'A movie about sining', 0, 3, '2015-09-23 15:22:46'),
(6, 'The Godfather', 1972, 'Greatest', 1, 1, '2015-09-23 15:22:46'),
(7, 'Pitch Perfect 2', 2015, 'Moar Singing', 0, 3, '2015-09-23 16:00:56'),
(8, 'Black Mass', 2016, '', 0, 3, '2015-09-23 17:36:04'),
(9, 'Despicable Me', 2010, 'Cute movie about mad scientist turn dad', 0, 4, '2015-09-23 17:54:55'),
(10, 'Whiplash', 2014, 'Andrew Neiman (Miles Teller) is an ambitious young jazz drummer, in pursuit of rising to the top of his elite music conservatory. Terence Fletcher (J.K. Simmons), an instructor known for his terrifying teaching methods, discovers Andrew and transfers the aspiring drummer into the top jazz ensemble, forever changing the young man''s life. But Andrew''s passion to achieve perfection quickly spirals into obsession, as his ruthless teacher pushes him to the brink of his ability and his sanity.', 0, 3, '2015-09-23 17:56:07'),
(11, '', 0000, '', 0, 0, '2015-09-23 18:07:54'),
(12, 'The Lion King', 0000, '', 0, 0, '2015-09-23 18:07:54'),
(13, 'Furious 7', 2015, '', 0, 3, '2015-09-23 19:00:43'),
(14, 'CHEF', 2014, '', 0, 0, '2015-09-24 10:14:16'),
(15, 'chef', 0000, '', 0, 0, '2015-09-24 10:19:10'),
(16, 'chef', 0000, '', 0, 0, '2015-09-24 10:19:25'),
(17, 'chef', 0000, '', 0, 0, '2015-09-24 10:19:39'),
(18, 'chef', 0000, '', 0, 0, '2015-09-24 10:19:42'),
(19, 'Avatar', 2009, '', 0, 2, '2015-09-25 08:35:43'),
(20, 'The Giver', 2015, '', 1, 1, '2015-09-25 22:34:33'),
(21, 'Game os Thrones', 2014, '', 1, 3, '2015-09-27 15:57:26'),
(22, 'Game of thrones', 2014, '', 1, 3, '2015-09-27 16:42:49'),
(23, 'white chicks', 2014, '', 1, 2, '2015-09-27 23:24:56'),
(24, 'white chicks', 2014, '', 1, 2, '2015-09-27 23:25:03'),
(25, 'white chicks', 2014, '', 1, 2, '2015-09-27 23:25:22'),
(26, 'white chicks', 2014, '', 1, 2, '2015-09-27 23:25:26'),
(27, 'white chicks', 2014, '', 1, 2, '2015-09-27 23:25:26'),
(28, 'white chicks', 2014, '', 1, 2, '2015-09-27 23:25:27'),
(29, 'white chicks', 2014, '', 1, 2, '2015-09-27 23:25:27'),
(30, 'white chicks', 2014, '', 1, 2, '2015-09-27 23:25:28'),
(31, 'white chicks', 2014, '', 1, 2, '2015-09-27 23:25:28'),
(32, 'white chicks', 2014, '', 1, 2, '2015-09-27 23:25:40'),
(33, 'white chicks', 2014, '', 1, 2, '2015-09-27 23:25:41'),
(34, 'white chicks', 2014, '', 1, 2, '2015-09-27 23:25:42'),
(35, 'white chicks', 2014, '', 1, 2, '2015-09-27 23:25:42'),
(36, 'white chicks', 2014, '', 1, 2, '2015-09-27 23:25:43'),
(37, 'white chicks', 2014, '', 1, 2, '2015-09-27 23:25:57'),
(38, 'Transformers 4', 2014, '', 1, 2, '2015-09-27 23:29:44'),
(39, 'The Last Witch Hunter', 2014, '', 1, 3, '2015-09-29 15:39:16'),
(40, 'BLACK MASS', 2014, '', 0, 4, '2015-09-30 14:22:18'),
(41, 'Trainwreck', 2015, '', 0, 4, '2015-10-21 23:52:43');

-- --------------------------------------------------------

--
-- Table structure for table `movie_actors`
--

CREATE TABLE IF NOT EXISTS `movie_actors` (
  `maID` int(11) NOT NULL AUTO_INCREMENT,
  `movieID` mediumint(9) NOT NULL,
  `actorID` mediumint(9) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`maID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `movie_actors`
--

INSERT INTO `movie_actors` (`maID`, `movieID`, `actorID`, `timestamp`) VALUES
(1, 1, 1, '2014-11-21 13:15:39'),
(2, 2, 2, '2014-11-21 13:15:39'),
(3, 3, 2, '2014-11-21 13:24:14'),
(4, 4, 2, '2014-11-21 13:24:14'),
(5, 1, 3, '2015-09-23 15:23:14'),
(6, 6, 4, '2015-09-23 15:23:14'),
(10, 5, 6, '2015-09-23 15:23:55'),
(11, 0, 0, '2015-09-23 17:45:46'),
(12, 0, 0, '2015-09-23 17:45:46'),
(13, 0, 0, '2015-09-23 17:45:46'),
(14, 0, 0, '2015-09-23 17:45:46');

-- --------------------------------------------------------

--
-- Table structure for table `movie_genres`
--

CREATE TABLE IF NOT EXISTS `movie_genres` (
  `mgID` int(11) NOT NULL AUTO_INCREMENT,
  `movieID` mediumint(9) NOT NULL,
  `genreID` smallint(6) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`mgID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `movie_genres`
--

INSERT INTO `movie_genres` (`mgID`, `movieID`, `genreID`, `timestamp`) VALUES
(1, 1, 1, '2014-11-21 13:16:52'),
(2, 1, 2, '2014-11-21 13:16:52'),
(3, 2, 3, '2014-11-21 13:17:03'),
(4, 2, 4, '2014-11-21 13:17:03'),
(5, 3, 5, '2014-11-21 13:26:39'),
(6, 3, 6, '2014-11-21 13:26:39'),
(7, 4, 5, '2014-11-21 13:26:51'),
(8, 4, 6, '2014-11-21 13:26:51'),
(9, 0, 4, '2015-09-23 18:02:22'),
(10, 10, 7, '2015-09-23 18:09:09'),
(11, 13, 5, '2015-09-23 19:08:27'),
(12, 14, 4, '2015-09-24 10:28:21'),
(13, 14, 4, '2015-09-24 10:28:28'),
(14, 14, 4, '2015-09-24 10:28:38'),
(15, 14, 4, '2015-09-24 10:28:51'),
(16, 19, 1, '0000-00-00 00:00:00'),
(17, 19, 1, '2015-09-25 12:57:02'),
(18, 20, 7, '0000-00-00 00:00:00'),
(19, 20, 7, '2015-09-25 22:45:23'),
(20, 21, 3, '2015-09-27 16:03:28'),
(21, 21, 3, '2015-09-27 16:46:16'),
(22, 38, 2, '2015-09-27 23:33:55'),
(23, 38, 2, '2015-09-27 23:34:50'),
(24, 38, 2, '2015-09-27 23:38:44'),
(25, 38, 2, '2015-09-29 15:43:57'),
(26, 39, 3, '2015-09-29 15:44:44'),
(27, 4, 40, '2015-09-30 14:24:30'),
(28, 40, 5, '2015-09-30 14:25:14'),
(29, 38, 2, '2015-09-30 16:37:55'),
(30, 20, 7, '2015-09-30 16:39:11');

-- --------------------------------------------------------

--
-- Table structure for table `studio`
--

CREATE TABLE IF NOT EXISTS `studio` (
  `sID` mediumint(9) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `city` varchar(30) NOT NULL,
  `state` varchar(2) NOT NULL,
  `zip` varchar(10) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`sID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `studio`
--

INSERT INTO `studio` (`sID`, `name`, `city`, `state`, `zip`, `timestamp`) VALUES
(1, 'LucasFilms', 'San Francisco', 'CA', '94129', '2014-11-21 13:11:14'),
(2, 'Overture', 'Beverly Hills', 'CA', '90210', '2014-11-21 13:11:14'),
(3, 'Warner Bros.', 'Burbank ', 'CA', '92511', '2014-11-21 13:23:26');
