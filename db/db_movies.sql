-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 07, 2018 at 10:31 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_movies`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_genre`
--

DROP TABLE IF EXISTS `tbl_genre`;
CREATE TABLE IF NOT EXISTS `tbl_genre` (
  `genre_id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT,
  `genre_name` varchar(125) NOT NULL,
  PRIMARY KEY (`genre_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_genre`
--

INSERT INTO `tbl_genre` (`genre_id`, `genre_name`) VALUES
(1, 'Action'),
(2, 'Adventure'),
(3, 'Comedy'),
(4, 'Crime'),
(5, 'Drama'),
(6, 'Historical'),
(7, 'Horror'),
(8, 'Musical'),
(9, 'Science Fiction'),
(10, 'War'),
(11, 'Western'),
(12, 'Animation'),
(13, 'Family'),
(14, 'Fantasy'),
(15, 'Romance'),
(16, 'Sport');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_movies`
--

DROP TABLE IF EXISTS `tbl_movies`;
CREATE TABLE IF NOT EXISTS `tbl_movies` (
  `movies_id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT,
  `movies_cover` varchar(75) NOT NULL DEFAULT 'cover_default.jpg',
  `movies_title` varchar(125) NOT NULL,
  `movies_year` varchar(5) NOT NULL,
  `movies_runtime` varchar(25) NOT NULL,
  `movies_storyline` text NOT NULL,
  `movies_trailer` varchar(75) NOT NULL DEFAULT 'trailer_default.jpg',
  `movies_release` varchar(125) NOT NULL,
  PRIMARY KEY (`movies_id`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_movies`
--

INSERT INTO `tbl_movies` (`movies_id`, `movies_cover`, `movies_title`, `movies_year`, `movies_runtime`, `movies_storyline`, `movies_trailer`, `movies_release`) VALUES
(22, 'planetEarth2.jpg', 'Planet Earth Two', '2016', '128', 'David Attenborough returns in this breathtaking documentary showcasing life on Planet Earth.', 'trailer_default.jpg', '2017'),
(23, 'aQuietPlace.jpg', 'A Quiet Place', '2018', '132', 'A family is forced to live in silence while hiding from creatures that hunt by sound.', 'trailer_default.jpg', '2018'),
(24, 'theMiracleSeason.jpg', 'The Miracle Season', '2018', '143', 'After the tragic death of star volleyball player Caroline Line Found, a team of dispirited high school girls must band together under the guidance of their tough-love coach in hopes of winning the state championship.', 'trailer_default.jpg', '2018'),
(25, 'youWereNeverReallyHere.jpg', 'You Were Never Really Here', '2017', '167', 'A traumatized veteran, unafraid of violence, tracks down missing girls for a living. When a job spins out of control, Joe\'s nightmares overtake him as a conspiracy is uncovered leading to what may be his death trip or his awakening.', 'trailer_default.jpg', '2017'),
(26, 'pandas.jpg', 'Pandas', '2017', '90', 'In the mountains of Sichuan, China, a researcher forms a bond with Qian Qian, a panda who is about to experience nature for the first time.', 'trailer_default.jpg', '2017'),
(27, 'leanOnPete.jpg', 'Lean On Pete', '2017', '96', 'A teenager gets a summer job working for a horse trainer and befriends the fading racehorse, Lean on Pete.', 'trailer_default.jpg', '2017'),
(28, 'theEndless.jpg', 'The Endless', '2017', '83', 'Two brothers return to the cult they fled from years ago to discover that the group\'s beliefs may be more sane than they once thought.', 'trailer_default.jpg', '2017'),
(29, 'whereIsKyra.jpg', 'Where is Kyra?', '2017', '134', 'In Brooklyn, New York, Kyra (Pfeiffer) loses her job and struggles to survive on her ailing mother\'s income. As the weeks and months go on, her problems worsen. This leads her on a risky and enigmatic path that threatens her life.', 'trailer_default.jpg', '2017'),
(30, 'spinningMan.jpg', 'Spinning Man', '2018', '99', 'A happily married professor, known for having many affairs with students, becomes the prime suspect when a young woman has gone missing.', 'trailer_default.jpg', '2018'),
(31, 'acrimony.jpg', 'Acrimony', '2018', '88', 'A faithful wife, tired of standing by her devious husband, is enraged when it becomes clear she has been betrayed.', 'trailer_default.jpg', '2018'),
(32, 'iCanOnlyImagine.jpg', 'I Can Only Imagine', '2018', '87', 'The inspiring and unknown true story behind MercyMes beloved, chart topping song that brings ultimate hope to so many is a gripping reminder of the power of true forgiveness.', 'trailer_default.jpg', '2018'),
(33, 'pacificUprising.jpg', 'Pacific Uprising', '2018', '122', 'Jake Pentecost, son of Stacker Pentecost, reunites with Mako Mori to lead a new generation of Jaeger pilots, including rival Lambert and 15-year-old hacker Amara, against a new Kaiju threat.', 'trailer_default.jpg', '2018'),
(34, 'sherlockGnomes.jpg', 'Sherlock Gnomes', '2018', '77', 'Garden gnomes, Gnomeo & Juliet, recruit renowned detective Sherlock Gnomes to investigate the mysterious disappearance of other garden ornaments.', 'trailer_default.jpg', '2018'),
(35, 'loveSimon.jpg', 'Love, Simon', '2018', '66', 'Simon Spier keeps a huge secret from his family, his friends, and all of his classmates: he\'s gay. When that secret is threatened, Simon must face everyone and come to terms with his identity.', 'trailer_default.jpg', '2018'),
(36, 'tombRaider.jpg', 'Tomb Raider', '2018', '123', 'Lara Croft, the fiercely independent daughter of a missing adventurer, must push herself beyond her limits when she finds herself on the island where her father disappeared.', 'trailer_default.jpg', '2018'),
(37, 'truthOrDare.jpg', 'Truth Or Dare', '2018', '122', 'A harmless game of Truth or Dare among friends turns deadly when someone -- or something -- begins to punish those who tell a lie or refuse the dare.', 'trailer_default.jpg', '2018'),
(38, 'overboard.jpg', 'Overboard', '2018', '133', 'A spoiled, wealthy yacht owner is thrown overboard and becomes the target of revenge from his mistreated employee. A remake of the 1987 comedy.', 'trailer_default.jpg', '2018'),
(39, 'theRider.jpg', 'Rider', '2018', '111', 'After suffering a near fatal head injury, a young cowboy undertakes a search for new identity and what it means to be a man in the heartland of America.', 'trailer_default.jpg', '2018'),
(40, 'beirut.jpg', 'Beirut', '2018', '111', 'Caught in the crossfires of civil war, CIA operatives must send a former U.S. diplomat to negotiate for the life of a friend he left behind.', 'trailer_default.jpg', '2018'),
(41, 'zama.jpg', 'Zama', '2018', '111', 'Based on the novel by Antonio Di Benedetto written in 1956, on Don Diego de Zama, a Spanish officer of the seventeenth century settled in Asunción, who awaits his transfer to Buenos Aires.', 'trailer_default.jpg', '2018'),
(42, '20weeks.jpg', '20 Weeks', '2018', '133', 'A couple must decide on how to move forward when their baby is diagnosed with a serious health condition at the 20 week scan.', 'trailer_default.jpg', '2018'),
(43, 'marrowbone.jpg', 'Marrowbone', '2018', '122', 'A young man and his three younger siblings, who have kept secret the death of their beloved mother in order to remain together, are plagued by a sinister presence in the sprawling manor in which they live.', 'trailer_default.jpg', '2018'),
(44, 'rampage.jpg', 'Rampage', '2018', '111', 'Primatologist Davis Okoye shares an unshakable bond with George, the extraordinarily intelligent gorilla who has been in his care since birth. But a rogue genetic experiment gone awry transforms this gentle ape into a raging monster. ', 'trailer_default.jpg', '2018'),
(45, 'tully.jpg', 'Tully', '2018', '133', 'The film is about Marlo, a mother of three including a newborn, who is gifted a night nanny by her brother. Hesitant to the extravagance at first, Marlo comes to form a unique bond with the baby.', 'trailer_default.jpg', '2018'),
(46, 'ghostStories.jpg', 'Ghost Stories', '2018', '134', 'Arch skeptic Professor Phillip Goodman embarks upon a terror-filled quest when he stumbles across a long-lost file containing details of three cases of inexplicable hauntings.', 'trailer_default.jpg', '2018');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mov_genre`
--

DROP TABLE IF EXISTS `tbl_mov_genre`;
CREATE TABLE IF NOT EXISTS `tbl_mov_genre` (
  `mov_genre_id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT,
  `movies_id` mediumint(9) NOT NULL,
  `genre_id` mediumint(9) NOT NULL,
  PRIMARY KEY (`mov_genre_id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_mov_genre`
--

INSERT INTO `tbl_mov_genre` (`mov_genre_id`, `movies_id`, `genre_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 9),
(4, 2, 1),
(5, 2, 5),
(6, 2, 6),
(7, 2, 10),
(8, 3, 1),
(9, 3, 5),
(10, 3, 9),
(11, 4, 1),
(12, 4, 2),
(13, 4, 5),
(14, 4, 9),
(15, 5, 8),
(16, 5, 13),
(17, 5, 14),
(18, 6, 5),
(19, 6, 6),
(20, 6, 10),
(21, 7, 1),
(22, 7, 2),
(23, 7, 3),
(24, 7, 15),
(25, 8, 5),
(26, 8, 9),
(27, 9, 3),
(28, 9, 5),
(29, 9, 16),
(30, 10, 14),
(31, 10, 2),
(32, 10, 3),
(33, 10, 8),
(34, 10, 13),
(35, 11, 2),
(36, 11, 5);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

DROP TABLE IF EXISTS `tbl_user`;
CREATE TABLE IF NOT EXISTS `tbl_user` (
  `user_id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_fname` varchar(250) NOT NULL,
  `user_name` varchar(250) NOT NULL,
  `user_pass` varchar(250) NOT NULL,
  `user_email` varchar(250) NOT NULL,
  `user_lvllist` varchar(10) NOT NULL,
  `user_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_ip` varchar(50) NOT NULL DEFAULT 'no',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_fname`, `user_name`, `user_pass`, `user_email`, `user_lvllist`, `user_date`, `user_ip`) VALUES
(2, 'Connor', 'connorclark', 'connor1234', 'connor@gmail.com', '', '2018-04-07 21:15:13', '::1');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
