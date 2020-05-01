-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2020 at 06:00 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_presence`
--

-- --------------------------------------------------------

--
-- Table structure for table `celebrity`
--

CREATE TABLE `celebrity` (
  `celeb_id` int(11) NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `age` int(200) NOT NULL,
  `web_presence` text NOT NULL,
  `most_active` text NOT NULL,
  `post_frequency` text NOT NULL,
  `images` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `celebrity`
--

INSERT INTO `celebrity` (`celeb_id`, `first_name`, `last_name`, `gender`, `age`, `web_presence`, `most_active`, `post_frequency`, `images`) VALUES
(1, 'Donald', 'Trump', 'Male', 72, 'Twitter: https://www.twitter.com/realDonaldTrump \nFacebook: https://www.facebook.com/donaldtrump/\nWebsite: https://www.donaldjtrump.com/', 'Twitter: https://www.twitter.com/realDonaldTrump\n', 'Posting:daily', 'Trump.jpeg'),
(2, 'Cody', 'Johnston', 'Male\n', 35, 'https://twitter.com/drmistercody?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor', 'https://twitter.com/drmistercody', 'bi-weekly', 'Johnston.jpeg'),
(3, 'Dwayne', 'Johnson', 'Male', 47, 'Instagram : https://www.instagram.com/therock/ Youtube: https://www.youtube.com/user/therock/videos Twitter: https://twitter.com/TheRock?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor', 'https://twitter.com/TheRock?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor', '14,035,109 total follower, following 271 people, 23,970 tweets overal, 7.6 tweets a day, 215 tweets a month', 'therock.jpeg'),
(4, 'Pete', 'Buttigieg', 'Male\n', 37, 'Twitter: https://twitter.com/PeteButtigieg Facebook : https://www.facebook.com â€º petebuttigieg1 LINKEDIN: https://www.linkedin.com/company/pete-for-america/', 'https://twitter.com/PeteButtigieg ', 'Posting: Daily, Number of Followers: 1.6M, Following: 2591, 6.6 tweets a day, 175 tweets a month', 'Buttigieg.jpeg'),
(5, 'Elon ', 'Musk', 'Male', 48, 'Twitter: https://twitter.com/elonmusk?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor Instagram: https://www.instagram.com/elonmusk/?hl=en Facebook:N/A', 'https://twitter.com/elonmusk?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor', 'Posting: Daily Number of Followers: 29.7M, Following: 80, 5.4 tweets a day, 97 tweets a month', 'Musk.jpeg'),
(6, 'Joe', 'Rogan', 'Male', 52, 'Twitter: https://twitter.com/joerogan?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor                    https://www.facebook.com/JOEROGAN/                            http://podcasts.joerogan.net/', 'https://twitter.com/joerogan?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor\n   ', 'Posting: Daily\nNumber of Followers: 5.5M\nTotal Number of Posts: 45.2K\nTotal Number of Likes: 747', 'Rogan.jpeg'),
(7, 'Jared', 'Knabenbauer', 'Male', 34, 'Twitter: https://twitter.com/ProJared?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor    Youtube: https://www.youtube.com/channel/UC2e0bNZ6CzT-Xvr070VaGsw', 'https://twitter.com/ProJared?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor\n ', 'Posting: Daily\nNumber of Followers: 184k\nTotal Number of Posts: 9156\nTotal Number of Likes: 12.6k', 'Knabenbauer.jpeg'),
(8, 'Craig', 'Thompson', 'Male', 24, 'Twitter: https://twitter.com/MiniLaddd?lang=en Youtube: https://www.youtube.com/user/MiniLaddd', 'https://twitter.com/MiniLaddd?lang=en\n', 'Posting: Daily\nNumber of Followers:1.65M\nTotal Number of Posts: 64.3K\nTotal Number of Likes:71', 'cthompson.jpeg'),
(9, 'Kim', 'Kardashian', 'Female', 39, 'Instagram: https://www.instagram.com/kimkardashian/?hl=en\nTwitter: https://twitter.com/KimKardashian?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor\nFacebook: https://www.facebook.com/KimKardashian/\n', 'https://twitter.com/KimKardashian?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor\n', 'Postings: Average of 16 per day\nFollowers: 62.4M\nPosts: 30,905\n', 'kimk.jpeg'),
(10, 'Zendaya', 'Stoermer Coleman\n', 'Female', 23, 'Instagram: https://www.instagram.com/zendaya/\nTwitter: https://twitter.com/Zendaya\nFacebook: https://www.facebook.com/Zendaya/\nMySpace: https://myspace.com/zendaya\n', 'https://www.instagram.com/zendaya/\n\n', 'Posting: Between 3-5 days \nFollowers: 63.7M \nTotal Posting: 3,419\nMost Likes: 6M+', 'zendaya.jpeg'),
(11, 'Bernie', 'Sanders', 'Male', 78, 'Campaign Website: https://berniesanders.com/ \nInstagram: https://www.instagram.com/berniesanders/\nPresidential campaign Twitter: https://twitter.com/BernieSanders\nSenate Twitter: https://twitter.com/SenSanders\n', ' https://twitter.com/BernieSanders\n\n', 'Posting: Average of 10 tweets/day\nFollowers: 10M\nPosts: 15.9K\nMost likes: 882K+', 'bernie.jpeg'),
(12, 'Russell', 'Vitale', 'Male', 27, 'Instagram: https://www.instagram.com/russ/?hl=en\nTwitter: https://twitter.com/russdiemon?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor\nFacebook: https://www.facebook.com/russtheone/\n', 'https://twitter.com/russdiemon?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor\n', 'Postings: Average of 11 per day\nFollowers: 2.2M\nPosts: 39.4K\n', 'Vitale.jpeg'),
(13, 'O.J', 'Simpson', 'Male', 72, 'Twitter Url https://twitter.com/TheRealOJ32 ', 'https://twitter.com/TheRealOJ32/status/1198650054162231296', 'Posting: Daily\nFollowers: 923k\nPosts: 92\nLikes: 99', 'oj.jpeg'),
(14, 'Kanye', 'West', 'Male', 42, 'Twitter: https://twitter.com/kanyewest?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor ', 'https://twitter.com/kanyewest?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor', 'Number of Followers: 29.4 million\nTotal Num of Post: 1,191\nTotal Num of Likes: 3\nPosting: Weekly/Monthly\n', 'kanye.jpeg'),
(15, 'Ariana', 'Grande', 'Female', 26, 'https://www.instagram.com/arianagrande/?hl=en', 'https://www.instagram.com/arianagrande/?hl=en', 'posting:daily\nfollowers: 167.9 M\nposts:4415\nlikes: 11.2 B\nviews per day: 24,641\n', 'Grande.jpeg'),
(16, 'John', 'Cena', 'Male', 42, ' Instgram (https://instagram.com/JohnCena), Facebook (https://facebook.com/johncena), Website (https://wwe.com/superstars/john-cena)\n', 'https://twitter.com/JohnCena\n', 'Posting: Daily (occasionally twice daily)\nNumber of Followers: 11.9M\nPosts: 6,233\nLikes: 7\n', 'Cena.jpeg'),
(17, 'Justin ', 'Bieber', 'Male', 25, 'https://www.instagram.com/justinbieber/ \nhttps://www.facebook.com/JustinBieber/\nhttps://twitter.com/justinbieber?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor\n', 'https://www.instagram.com/justinbieber/ \n', 'Post : 4790 \nFollower: 122M\nFollowing: 331\nLike: 20M ', 'Bieber.jpeg'),
(18, 'Stuart\n', 'Ashen', 'Male\n', 42, 'Youtube URL: https://www.youtube.com/channel/UCxt9Pvye-9x_AIcb1UtmF1Q\n\nTwitter URL: https://twitter.com/ashens\nAshens URL: https://www.ashens.com/\n', 'https://www.youtube.com/channel/UCxt9Pvye-9x_AIcb1UtmF1Q', 'Uploading: Biweekly/Weekly\n# of Subscribers: 1.43 Million\nTotal Views: 451 Million', 'Ashen.jpeg'),
(19, 'Riley', 'Reid', 'Female', 28, 'https://twitter.com/rileyreidx3?lang=en', 'https://twitter.com/rileyreidx3?lang=en', 'Weekly', 'Reid.jpeg'),
(20, 'Ryan', 'Reynolds', 'Male', 43, 'https://twitter.com/vancityreynolds', 'https://twitter.com/vancityreynolds', 'daily', 'Reynolds.jpeg'),
(21, 'Marques ', 'Brownlee ', 'Male ', 26, 'https://www.youtube.com/user/marquesbrownlee ', 'https://twitter.com/MKBHD ', '', 'Brownlee.jpeg'),
(22, 'Bernie', 'Sanders', 'Male', 78, 'Twitter:https://twitter.com/BernieSanders?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor\nFacebook:https://www.facebook.com/berniesanders/\nCampaign Website: https://berniesanders.com/', 'Twitter', 'Posting:  Daily                       Number of Followers: 10M                           Total Num of Posts: 15.9K           Total Num of Likes: 979', 'bernie.jpeg'),
(23, 'Gordon', 'Ramsay', 'Male', 53, 'Facebook:https://www.facebook.com/gordonramsay/\nInstagram:https://www.instagram.com/gordongram/?hl=en\nTwitter:https://twitter.com/GordonRamsay?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor', 'Facebook', 'Posting: Daily                         Number of Followers: 8.6M                           Total Num of Posts: N/A                 Total Num of Likes: 8.3M', 'Ramsay.jpeg'),
(24, 'Travis', 'Scott', 'Male', 28, 'Instagram:https://www.instagram.com/travisscott/?hl=en\nTwitter:https://twitter.com/trvisXX?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor\nWebsite:https://www.travisscott.com/', 'Instagram', 'Posting: Randomly                         Number of Followers: 22.3M                           Total Num of Posts: 2.9M                 Total Num of Likes: N/A', 'Scott.jpeg'),
(25, 'Ellen', 'DeGeneres', 'Female', 61, 'Instagram:https://www.instagram.com/theellenshow/?hl=en\nTwitter:https://twitter.com/TheEllenShow?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor\nFacebook:https://www.facebook.com/ellentv/', 'Instagram', 'Posting: Daily                        Number of Followers: 80.1M                           Total Num of Posts: 8,200                 Total Num of Likes: N/A           ', 'DeGeneres.jpeg'),
(26, 'Musk', 'Elon', 'Male', 48, 'Twitter Url:https://twitter.com/elonmusk?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor\nTesla Url: https://www.tesla.com/elon-musk\nBiography url: https://www.biography.com/business-figure/elon-musk', 'Twitter: https://twitter.com/elonmusk?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor ', 'Posting: Daily Number of Followers: 29.6M Total num of Post: 9342 Total Num of likes: 4312 Total num of retweets:', 'Elon.jpeg'),
(27, 'Adrian', 'Wojnarowski', 'Male', 50, ' Twitter Url : https://twitter.com/wojespn?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor\nInstagram Url  : https://www.instagram.com/wojespn/?hl=en\nEspnpressrom Url : https://espnpressroom.com/us/bios/adrian-wojnarowski/\nFacebook Url : https://www.facebook.com/wojespn/\n ', 'https://twitter.com/wojespn?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor', 'Posting: Daily Number of Followers: 3.75M Total num of Post: 16.7k Total Num of likes: 6895 Total num of retweets:', 'Wojnarowski.jpeg'),
(28, 'Jimmy', 'Fallon', 'Male', 45, 'Twitter Url : https://twitter.com/jimmyfallon?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor\nNBC Url : https://www.nbc.com/the-tonight-show\nYoutube Url : https://www.youtube.com/user/latenight\nFacebook Url : https://www.facebook.com/JimmyFallon/ ', 'https://twitter.com/jimmyfallon?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor', 'Posting: Daily Number of Followers: 51.5m Total num of Post: 12.2k Total Num of likes: 1466 Total num of retweets:', 'Fallon.jpeg'),
(29, 'Ellen', 'Degeneres', 'Female', 61, 'Twitter Url : https://twitter.com/TheEllenShow\nFacebook Url: https://www.facebook.com/ellentv/\nInstagram Url: https://www.instagram.com/theellenshow/\nYoutube Url: https://www.youtube.com/user/TheEllenShow/search?query=ellen+in+your+ear\nPinterest Url: https://www.pinterest.com/ellentv/', 'https://twitter.com/TheEllenShow', 'Posting: Daily Number of Followers: 79.1m Total num of Post: 20.6k Total Num of likes: 1880 Total num of retweets:', 'Degeneres.jpeg'),
(30, 'Mark ', 'Hamill', 'Male', 68, 'Facebook URL: https://www.facebook.com/HamillHimself/\nInstagram URL: https://www.instagram.com/hamillhimself/?hl=en\nTwitter URL: https://twitter.com/HamillHimself?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor\n', 'https://twitter.com/HamillHimself?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor', 'Posting: Daily\nNumber of followers: 4.5m\nTotal number of posts: 8994\nTotal Number of Likes: 100M\nTotal Number of Retweets: 997\n', 'Hamill.jpeg'),
(31, 'Lexi', 'Kaufman', 'Female', 28, 'Twitter URL: https://twitter.com/AlexaBliss_WWEÂ \nInstagram URL: https://www.instagram.com/alexa_bliss_wwe_/', 'https://twitter.com/AlexaBliss_WWEÂ ', '4.2M followers\n2671 posts\n7736 likes', 'Kaufman.jpeg'),
(32, 'Elon', 'Musk', 'Male', 40, 'Twitter', 'https://twitter.com/notch', 'Posting: Daily, # of Followers: 29.3M, # of Posts: 9432, # of Likes: 4312', 'Musk.jpeg'),
(33, 'Markus', 'Persson', 'Male', 48, 'Twitter', 'https://twitter.com/elonmusk', 'Posting: Daily, # of Followers: 3.73M, # of Posts: 73k, # of Likes: 9.7k ', 'Persson.jpeg'),
(34, 'Andrew', 'George', 'Male', 27, 'LinkedIn URL: \nhttps://www.linkedin.com/in/adg/\nFacebook URL: \nhttps://www.facebook.com/andrew.george.7543', '', '', 'George.jpeg'),
(35, 'Burnie', 'Sanders', 'Male', 78, 'Twitter URL: \nhttps://twitter.com/BurnieSanders\nFacebook URL:\nhttps://www.facebook.com/berniesanders/\nBurnie Sanders campaign site:\nhttps://berniesanders.com/', 'Example:\nhttps://twitter.com/BurnieSanders', 'Posting: Daily\nNumber of Followers: 10M\nTotal number of posts: 15.9K\nTotal number of likes: 979\nTotal number of retweets: N/A', 'bernie.jpeg'),
(36, 'Nasser', 'Paydar', 'Male', 64, 'Twitter URL: https://twitter.com/paydar\nFacebook URL: https://www.facebook.com/IUPUI/', 'MAP:\nhttps://twitter.com/paydar', 'Posting: Daily\nNumber of Followers: 4449\nTotal number of posts: 2485\nTotal number of likes: 7445\nTotal number of retweets: 68', 'Paydar.jpeg'),
(37, 'Barack', 'Obama', 'Male', 58, 'Twitter URL: https://twitter.com/barackobama', 'MAP:\nhttps://twitter.com/barackobama', 'Posting: Daily\nNumber of Followers: 110.5M\nTotal number of posts: 15.7K\nTotal number of likes: 11\nTotal number of retweets: 40,693', 'Obama.jpeg'),
(38, 'Sean', 'Connery', 'Male', 89, 'https://www.seanconnery.com/', 'https://www.seanconnery.com/filmography/', 'Updated yearly', 'Connery.jpeg'),
(39, 'Justin', 'Trudeau', 'Male', 47, 'https://www.instagram.com/justinpjtrudeau/', 'https://www.instagram.com/p/B5eU8VhAOG5/', 'Posting - Daily, Followers 3.2M', 'Trudeau.jpeg'),
(40, 'Alison', 'Brie', 'Female', 36, 'https://www.instagram.com/alisonbrie/', 'https://www.instagram.com/p/B5YXdNrHt_U/', 'Posting - Daily, Followers 970K', 'alison.jpeg'),
(41, 'Tommy', 'Lee', 'Male', 57, 'https://www.instagram.com/tommylee/', 'https://www.instagram.com/p/B5Zybf3l-xX/', 'Posting - Daily, Followers 919K', 'Lee.jpeg'),
(42, 'Eric', 'Egan', 'Male', 27, 'https://twitter.com/HeartAttackMane ', 'https://twitter.com/HeartAttackMane ', 'Twitter - 9k followers\nPosting: Multiple times a day', 'Egan.jpeg'),
(43, 'Barack ', 'Obama', 'Male', 58, 'https://twitter.com/BarackObama', 'https://twitter.com/BarackObama', 'Posting: weekly', 'Obama.jpeg'),
(44, 'Bernie', 'Sanders', 'Male', 78, 'https://twitter.com/BernieSanders', 'https://twitter.com/BernieSanders', 'Posting: weekly', 'bernie.jpeg'),
(45, 'Ryan', 'Reynolds', 'Male', 43, 'https://twitter.com/VancityReynolds', 'https://twitter.com/VancityReynolds', 'Posting: Every Few Days\nFollowers: 15 million\nPosts: 1,390\nLikes: 13.9 k', 'Reynolds.jpeg'),
(46, 'Robert', 'Downey Jr.', 'Male', 54, 'Twitter', 'Twitter', 'Posting: A few times a month\nFollowers: 14.6 million\nPosts: 618\nLikes: 1,299', 'Downey.jpeg'),
(47, 'Mathew', 'Mercer', 'Male', 37, 'Twitter', 'Twitter', 'Posting: Every Day\nFollowers: 458 k\nPosts: 22.5 k\nLikes: 92.2 k', 'Mercer.jpeg'),
(48, 'Klayton', 'Huddlston', 'Male', 21, 'Instagram', 'Instagram', 'Posting: Every Other Day\nFollowers: 96.9 k\nPosts: 664', 'Huddlston.jpeg'),
(49, 'Marques ', 'Brownlee', 'Male', 26, 'https://www.youtube.com/user/marquesbrownlee', 'https://twitter.com/MKBHD', '', 'Brownlee.jpeg'),
(50, 'James', 'Wilson', 'Male', 29, 'https://twitter.com/UberHaxorNova?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor \nyoutube: https://www.youtube.com/user/UberHaxorNova\ntwitch.tv: https://www.twitch.tv/uberhaxornova\n\n', 'Posting:daily\nnumber of followers:654k\nnumber of likes:1355\nnumber of posts:16.5k\n', '', 'Wilson.jpeg'),
(51, 'Lewis', 'Hamilton', 'Male', 34, 'Twitter URL:\nhttps://twitter.com/lewishamilton\nInstagram URL :\nhttps://www.instagram.com/lewishamilton/\nFacebook URL :\nhttps://www.facebook.com/LewisHamilton/', 'https://www.instagram.com/lewishamilton/\n', 'Posting: Every 2 days\nNumber of followers: 13.7M\nTotal Num of Post: 693\nTotal Num of likes: 300000', 'Hamilton.jpeg'),
(52, 'Ray', 'Chase', 'Male', 32, 'Twitter URL:\nhttps://twitter.com/RayChase\nInstagram URL : instagram.com/raychasenation/?hl=en\nFacebook URL :', 'https://twitter.com/RayChase\n', 'Posting: Daily\nNumber of followers: 46.3k\nTotal Num of Post: N.A.\nTotal Num of likes: N.A.', 'Chase.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `celebrity_dimension`
--

CREATE TABLE `celebrity_dimension` (
  `id` int(11) NOT NULL,
  `celeb_id` int(11) NOT NULL,
  `dim_id` int(11) NOT NULL,
  `frequency` decimal(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `celebrity_dimension`
--

INSERT INTO `celebrity_dimension` (`id`, `celeb_id`, `dim_id`, `frequency`) VALUES
(1, 1, 1, '1200.00'),
(2, 1, 2, '0.20'),
(3, 1, 3, '0.51'),
(4, 1, 4, '2.50'),
(5, 1, 5, '1.80'),
(6, 2, 1, '200.00'),
(7, 2, 2, '0.24'),
(8, 2, 3, '2.89'),
(9, 2, 4, '0.12'),
(10, 2, 5, '3.20'),
(11, 3, 1, '450.00'),
(12, 3, 2, '0.14'),
(13, 3, 3, '0.25'),
(14, 3, 4, '1.65'),
(15, 3, 5, '3.01'),
(16, 4, 1, '300.00'),
(17, 4, 2, '0.42'),
(18, 4, 3, '2.50'),
(19, 4, 4, '1.20'),
(20, 4, 5, '1.20'),
(21, 5, 1, '120.00'),
(22, 5, 2, '2.45'),
(23, 5, 3, '1.02'),
(24, 5, 4, '1.42'),
(25, 5, 5, '0.02'),
(26, 6, 1, '421.00'),
(27, 6, 2, '0.12'),
(28, 6, 3, '0.25'),
(29, 6, 4, '1.54'),
(30, 6, 5, '0.36'),
(31, 7, 1, '458.00'),
(32, 7, 2, '2.54'),
(33, 7, 3, '0.45'),
(34, 7, 4, '1.33'),
(35, 7, 5, '0.21'),
(36, 8, 1, '102.00'),
(37, 8, 2, '0.54'),
(38, 8, 3, '1.46'),
(39, 8, 4, '1.02'),
(40, 8, 5, '0.78'),
(41, 9, 1, '56.00'),
(42, 9, 2, '1.22'),
(43, 9, 3, '2.11'),
(44, 9, 4, '0.43'),
(45, 9, 5, '0.89'),
(46, 10, 1, '810.00'),
(47, 10, 2, '2.55'),
(48, 10, 3, '0.12'),
(49, 10, 4, '0.45'),
(50, 10, 5, '1.44'),
(51, 11, 1, '0.00'),
(52, 11, 2, '0.00'),
(53, 11, 3, '0.00'),
(54, 11, 4, '0.00'),
(55, 11, 5, '0.00'),
(56, 12, 1, '0.00'),
(57, 12, 2, '0.00'),
(58, 12, 3, '0.00'),
(59, 12, 4, '0.00'),
(60, 12, 5, '0.00'),
(61, 13, 1, '0.00'),
(62, 13, 2, '0.00'),
(63, 13, 3, '0.00'),
(64, 13, 4, '0.00'),
(65, 13, 5, '0.00'),
(66, 14, 1, '0.00'),
(67, 14, 2, '0.00'),
(68, 14, 3, '0.00'),
(69, 14, 4, '0.00'),
(70, 14, 5, '0.00'),
(71, 15, 1, '0.00'),
(72, 15, 2, '0.00'),
(73, 15, 3, '0.00'),
(74, 15, 4, '0.00'),
(75, 15, 5, '0.00'),
(76, 16, 1, '0.00'),
(77, 16, 2, '0.00'),
(78, 16, 3, '0.00'),
(79, 16, 4, '0.00'),
(80, 16, 5, '0.00'),
(81, 17, 1, '0.00'),
(82, 17, 2, '0.00'),
(83, 17, 3, '0.00'),
(84, 17, 4, '0.00'),
(85, 17, 5, '0.00'),
(86, 18, 1, '0.00'),
(87, 18, 2, '0.00'),
(88, 18, 3, '0.00'),
(89, 18, 4, '0.00'),
(90, 18, 5, '0.00'),
(91, 19, 1, '0.00'),
(92, 19, 2, '0.00'),
(93, 19, 3, '0.00'),
(94, 19, 4, '0.00'),
(95, 19, 5, '0.00'),
(96, 20, 1, '0.00'),
(97, 20, 2, '0.00'),
(98, 20, 3, '0.00'),
(99, 20, 4, '0.00'),
(100, 20, 5, '0.00'),
(101, 21, 1, '0.00'),
(102, 21, 2, '0.00'),
(103, 21, 3, '0.00'),
(104, 21, 4, '0.00'),
(105, 21, 5, '0.00'),
(106, 22, 1, '0.00'),
(107, 22, 2, '0.00'),
(108, 22, 3, '0.00'),
(109, 22, 4, '0.00'),
(110, 22, 5, '0.00'),
(111, 23, 1, '0.00'),
(112, 23, 2, '0.00'),
(113, 23, 3, '0.00'),
(114, 23, 4, '0.00'),
(115, 23, 5, '0.00'),
(116, 24, 1, '0.00'),
(117, 24, 2, '0.00'),
(118, 24, 3, '0.00'),
(119, 24, 4, '0.00'),
(120, 24, 5, '0.00'),
(121, 25, 1, '0.00'),
(122, 25, 2, '0.00'),
(123, 25, 3, '0.00'),
(124, 25, 4, '0.00'),
(125, 25, 5, '0.00'),
(126, 26, 1, '0.00'),
(127, 26, 2, '0.00'),
(128, 26, 3, '0.00'),
(129, 26, 4, '0.00'),
(130, 26, 5, '0.00'),
(131, 27, 1, '0.00'),
(132, 27, 2, '0.00'),
(133, 27, 3, '0.00'),
(134, 27, 4, '0.00'),
(135, 27, 5, '0.00'),
(136, 28, 1, '0.00'),
(137, 28, 2, '0.00'),
(138, 28, 3, '0.00'),
(139, 28, 4, '0.00'),
(140, 28, 5, '0.00'),
(141, 29, 1, '0.00'),
(142, 29, 2, '0.00'),
(143, 29, 3, '0.00'),
(144, 29, 4, '0.00'),
(145, 29, 5, '0.00'),
(146, 30, 1, '0.00'),
(147, 30, 2, '0.00'),
(148, 30, 3, '0.00'),
(149, 30, 4, '0.00'),
(150, 30, 5, '0.00'),
(151, 31, 1, '0.00'),
(152, 31, 2, '0.00'),
(153, 31, 3, '0.00'),
(154, 31, 4, '0.00'),
(155, 31, 5, '0.00'),
(156, 32, 1, '0.00'),
(157, 32, 2, '0.00'),
(158, 32, 3, '0.00'),
(159, 32, 4, '0.00'),
(160, 32, 5, '0.00'),
(161, 33, 1, '0.00'),
(162, 33, 2, '0.00'),
(163, 33, 3, '0.00'),
(164, 33, 4, '0.00'),
(165, 33, 5, '0.00'),
(166, 34, 1, '0.00'),
(167, 34, 2, '0.00'),
(168, 34, 3, '0.00'),
(169, 34, 4, '0.00'),
(170, 34, 5, '0.00'),
(171, 35, 1, '0.00'),
(172, 35, 2, '0.00'),
(173, 35, 3, '0.00'),
(174, 35, 4, '0.00'),
(175, 35, 5, '0.00'),
(176, 36, 1, '0.00'),
(177, 36, 2, '0.00'),
(178, 36, 3, '0.00'),
(179, 36, 4, '0.00'),
(180, 36, 5, '0.00'),
(181, 37, 1, '0.00'),
(182, 37, 2, '0.00'),
(183, 37, 3, '0.00'),
(184, 37, 4, '0.00'),
(185, 37, 5, '0.00'),
(186, 38, 1, '0.00'),
(187, 38, 2, '0.00'),
(188, 38, 3, '0.00'),
(189, 38, 4, '0.00'),
(190, 38, 5, '0.00'),
(191, 39, 1, '0.00'),
(192, 39, 2, '0.00'),
(193, 39, 3, '0.00'),
(194, 39, 4, '0.00'),
(195, 39, 5, '0.00'),
(196, 40, 1, '0.00'),
(197, 40, 2, '0.00'),
(198, 40, 3, '0.00'),
(199, 40, 4, '0.00'),
(200, 40, 5, '0.00'),
(201, 41, 1, '0.00'),
(202, 41, 2, '0.00'),
(203, 41, 3, '0.00'),
(204, 41, 4, '0.00'),
(205, 41, 5, '0.00'),
(206, 42, 1, '0.00'),
(207, 42, 2, '0.00'),
(208, 42, 3, '0.00'),
(209, 42, 4, '0.00'),
(210, 42, 5, '0.00'),
(211, 43, 1, '0.00'),
(212, 43, 2, '0.00'),
(213, 43, 3, '0.00'),
(214, 43, 4, '0.00'),
(215, 43, 5, '0.00'),
(216, 44, 1, '0.00'),
(217, 44, 2, '0.00'),
(218, 44, 3, '0.00'),
(219, 44, 4, '0.00'),
(220, 44, 5, '0.00'),
(221, 45, 1, '0.00'),
(222, 45, 2, '0.00'),
(223, 45, 3, '0.00'),
(224, 45, 4, '0.00'),
(225, 45, 5, '0.00'),
(226, 46, 1, '0.00'),
(227, 46, 2, '0.00'),
(228, 46, 3, '0.00'),
(229, 46, 4, '0.00'),
(230, 46, 5, '0.00'),
(231, 47, 1, '0.00'),
(232, 47, 2, '0.00'),
(233, 47, 3, '0.00'),
(234, 47, 4, '0.00'),
(235, 47, 5, '0.00'),
(236, 48, 1, '0.00'),
(237, 48, 2, '0.00'),
(238, 48, 3, '0.00'),
(239, 48, 4, '0.00'),
(240, 48, 5, '0.00'),
(241, 49, 1, '0.00'),
(242, 49, 2, '0.00'),
(243, 49, 3, '0.00'),
(244, 49, 4, '0.00'),
(245, 49, 5, '0.00'),
(246, 50, 1, '0.00'),
(247, 50, 2, '0.00'),
(248, 50, 3, '0.00'),
(249, 50, 4, '0.00'),
(250, 50, 5, '0.00'),
(251, 51, 1, '0.00'),
(252, 51, 2, '0.00'),
(253, 51, 3, '0.00'),
(254, 51, 4, '0.00'),
(255, 51, 5, '0.00'),
(256, 52, 1, '0.00'),
(257, 52, 2, '0.00'),
(258, 52, 3, '0.00'),
(259, 52, 4, '0.00'),
(260, 52, 5, '0.00');

-- --------------------------------------------------------

--
-- Table structure for table `personality_dimension`
--

CREATE TABLE `personality_dimension` (
  `dim_id` int(11) NOT NULL,
  `dimension` varchar(200) NOT NULL,
  `qualities` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `keywords` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `personality_dimension`
--

INSERT INTO `personality_dimension` (`dim_id`, `dimension`, `qualities`, `description`, `keywords`, `image`) VALUES
(1, 'Extraversion', 'Friendliness, gregariousness, assertiveness, activity level, cheerfulness', 'Degree of activeness, sociability, and talkativeness', '# of posts and length of posts', 'e.jpeg'),
(2, 'Agreeableness', 'Trust, morality, altruism, cooperation, modesty', 'Personality traits such as cooperativeness, kindness and trust', 'Thank you, love, kind, nice, cooperate, together', 'a.jpeg'),
(3, 'Conscientiousness', 'Self-efficacy, orderliness, dutifulness, achievement-striving, self-discipline', 'Refers to the degree of achievement orientation. Being hardworking, organize and reliable is linked with high score', 'I am aware, proud, achieve, accomplish, success, know', 'c.jpeg'),
(4, 'Neuroticism', 'Anxious, jealousy, envy, anger, loneliness', 'Indicates the emotional stability degree. People who have low degree of neuroticism are calm, secure and confident whereas the opposite anxious, insecure and moody', 'I, me, myself; mine, my, damn you, f word, so, I am the best, sad, happy, hate, hater', 'n.jpeg'),
(5, 'Openness', 'Imagination, emotionality, intellect, liberalism, adventurous', 'Related with creative, cultural, and intellectual interest', 'Culture, creative, open, intellectual, appreciate', 'o.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `following` int(11) NOT NULL,
  `likes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `celebrity`
--
ALTER TABLE `celebrity`
  ADD PRIMARY KEY (`celeb_id`);

--
-- Indexes for table `celebrity_dimension`
--
ALTER TABLE `celebrity_dimension`
  ADD PRIMARY KEY (`id`),
  ADD KEY `celeb_id` (`celeb_id`,`dim_id`),
  ADD KEY `dim_id` (`dim_id`);

--
-- Indexes for table `personality_dimension`
--
ALTER TABLE `personality_dimension`
  ADD PRIMARY KEY (`dim_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `celebrity`
--
ALTER TABLE `celebrity`
  MODIFY `celeb_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `celebrity_dimension`
--
ALTER TABLE `celebrity_dimension`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=261;

--
-- AUTO_INCREMENT for table `personality_dimension`
--
ALTER TABLE `personality_dimension`
  MODIFY `dim_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `celebrity_dimension`
--
ALTER TABLE `celebrity_dimension`
  ADD CONSTRAINT `celebrity_dimension_ibfk_2` FOREIGN KEY (`dim_id`) REFERENCES `personality_dimension` (`dim_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `celebrity_dimension_ibfk_3` FOREIGN KEY (`celeb_id`) REFERENCES `celebrity` (`celeb_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
