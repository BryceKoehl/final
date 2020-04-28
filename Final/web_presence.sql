-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2020 at 03:53 AM
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
  `post_frequency` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `celebrity`
--

INSERT INTO `celebrity` (`celeb_id`, `first_name`, `last_name`, `gender`, `age`, `web_presence`, `most_active`, `post_frequency`) VALUES
(1, 'Donald', 'Trump', 'Male', 72, 'Twitter: https://www.twitter.com/realDonaldTrump \nFacebook: https://www.facebook.com/donaldtrump/\nWebsite: https://www.donaldjtrump.com/', 'Twitter: https://www.twitter.com/realDonaldTrump\n', 'Posting:daily'),
(2, 'Cody', 'Johnston', 'Male\n', 35, 'https://twitter.com/drmistercody?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor', 'https://twitter.com/drmistercody', 'bi-weekly'),
(3, 'Dwayne', 'Johnson', 'Male', 47, 'Instagram : https://www.instagram.com/therock/ Youtube: https://www.youtube.com/user/therock/videos Twitter: https://twitter.com/TheRock?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor', 'https://twitter.com/TheRock?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor', '14,035,109 total follower, following 271 people, 23,970 tweets overal, 7.6 tweets a day, 215 tweets a month'),
(4, 'Pete', 'Buttigieg', 'Male\n', 37, 'Twitter: https://twitter.com/PeteButtigieg Facebook : https://www.facebook.com ? petebuttigieg1 LINKEDIN: https://www.linkedin.com/company/pete-for-america/', 'https://twitter.com/PeteButtigieg ', 'Posting: Daily, Number of Followers: 1.6M, Following: 2591, 6.6 tweets a day, 175 tweets a month'),
(5, 'Elon ', 'Musk', 'Male', 48, 'Twitter: https://twitter.com/elonmusk?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor Instagram: https://www.instagram.com/elonmusk/?hl=en Facebook:N/A', 'https://twitter.com/elonmusk?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor', 'Posting: Daily Number of Followers: 29.7M, Following: 80, 5.4 tweets a day, 97 tweets a month'),
(6, 'Joe', 'Rogan', 'Male', 52, 'Twitter: https://twitter.com/joerogan?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor                    https://www.facebook.com/JOEROGAN/                            http://podcasts.joerogan.net/', 'https://twitter.com/joerogan?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor\n   ', 'Posting: Daily\nNumber of Followers: 5.5M\nTotal Number of Posts: 45.2K\nTotal Number of Likes: 747'),
(7, 'Jared', 'Knabenbauer', 'Male', 34, 'Twitter: https://twitter.com/ProJared?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor    Youtube: https://www.youtube.com/channel/UC2e0bNZ6CzT-Xvr070VaGsw', 'https://twitter.com/ProJared?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor\n ', 'Posting: Daily\nNumber of Followers: 184k\nTotal Number of Posts: 9156\nTotal Number of Likes: 12.6k'),
(8, 'Craig', 'Thompson', 'Male', 24, 'Twitter: https://twitter.com/MiniLaddd?lang=en Youtube: https://www.youtube.com/user/MiniLaddd', 'https://twitter.com/MiniLaddd?lang=en\n', 'Posting: Daily\nNumber of Followers:1.65M\nTotal Number of Posts: 64.3K\nTotal Number of Likes:71'),
(9, 'Kim', 'Kardashian', 'Female', 39, 'Instagram: https://www.instagram.com/kimkardashian/?hl=en\nTwitter: https://twitter.com/KimKardashian?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor\nFacebook: https://www.facebook.com/KimKardashian/\n', 'https://twitter.com/KimKardashian?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor\n', 'Postings: Average of 16 per day\nFollowers: 62.4M\nPosts: 30,905\n'),
(10, 'Zendaya', 'Stoermer Coleman\n', 'Female', 23, 'Instagram: https://www.instagram.com/zendaya/\nTwitter: https://twitter.com/Zendaya\nFacebook: https://www.facebook.com/Zendaya/\nMySpace: https://myspace.com/zendaya\n', 'https://www.instagram.com/zendaya/\n\n', 'Posting: Between 3-5 days \nFollowers: 63.7M \nTotal Posting: 3,419\nMost Likes: 6M+'),
(11, 'Bernie', 'Sanders', 'Male', 78, 'Campaign Website: https://berniesanders.com/ \nInstagram: https://www.instagram.com/berniesanders/\nPresidential campaign Twitter: https://twitter.com/BernieSanders\nSenate Twitter: https://twitter.com/SenSanders\n', ' https://twitter.com/BernieSanders\n\n', 'Posting: Average of 10 tweets/day\nFollowers: 10M\nPosts: 15.9K\nMost likes: 882K+'),
(12, 'Russell', 'Vitale', 'Male', 27, 'Instagram: https://www.instagram.com/russ/?hl=en\nTwitter: https://twitter.com/russdiemon?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor\nFacebook: https://www.facebook.com/russtheone/\n', 'https://twitter.com/russdiemon?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor\n', 'Postings: Average of 11 per day\nFollowers: 2.2M\nPosts: 39.4K\n'),
(13, 'O.J', 'Simpson', 'Male', 72, 'Twitter Url https://twitter.com/TheRealOJ32 ', 'https://twitter.com/TheRealOJ32/status/1198650054162231296', 'Posting: Daily\nFollowers: 923k\nPosts: 92\nLikes: 99'),
(14, 'Kanye', 'West', 'Male', 42, 'Twitter: https://twitter.com/kanyewest?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor ', 'https://twitter.com/kanyewest?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor', 'Number of Followers: 29.4 million\nTotal Num of Post: 1,191\nTotal Num of Likes: 3\nPosting: Weekly/Monthly\n'),
(15, 'Ariana', 'Grande', 'Female', 26, 'https://www.instagram.com/arianagrande/?hl=en', 'https://www.instagram.com/arianagrande/?hl=en', 'posting:daily\nfollowers: 167.9 M\nposts:4415\nlikes: 11.2 B\nviews per day: 24,641\n'),
(16, 'John', 'Cena', 'Male', 42, 'Instgram (https://instagram.com/JohnCena), Facebook (https://facebook.com/johncena), Website (https://wwe.com/superstars/john-cena)', 'https://twitter.com/JohnCena', 'Posting: Daily (occasionally twice daily)Number of Followers: 11.9MPosts: 6,233Likes: 7'),
(17, 'Justin ', 'Bieber', 'Male', 25, 'https://www.instagram.com/justinbieber/ \nhttps://www.facebook.com/JustinBieber/\nhttps://twitter.com/justinbieber?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor\n', 'https://www.instagram.com/justinbieber/ \n', 'Post : 4790 \nFollower: 122M\nFollowing: 331\nLike: 20M '),
(18, 'Stuart\n', 'Ashen', 'Male\n', 42, 'Youtube URL: https://www.youtube.com/channel/UCxt9Pvye-9x_AIcb1UtmF1Q\n\nTwitter URL: https://twitter.com/ashens\nAshens URL: https://www.ashens.com/\n', 'https://www.youtube.com/channel/UCxt9Pvye-9x_AIcb1UtmF1Q', 'Uploading: Biweekly/Weekly\n# of Subscribers: 1.43 Million\nTotal Views: 451 Million'),
(19, 'Riley', 'Reid', 'Female', 28, 'https://twitter.com/rileyreidx3?lang=en', 'https://twitter.com/rileyreidx3?lang=en', 'Weekly'),
(20, 'Ryan', 'Reynolds', 'Male', 43, 'https://twitter.com/vancityreynolds', 'https://twitter.com/vancityreynolds', 'daily'),
(21, 'Marques ', 'Brownlee ', 'Male ', 26, 'https://www.youtube.com/user/marquesbrownlee ', 'https://twitter.com/MKBHD ', ''),
(22, 'Bernie', 'Sanders', 'Male', 78, 'Twitter:https://twitter.com/BernieSanders?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor\nFacebook:https://www.facebook.com/berniesanders/\nCampaign Website: https://berniesanders.com/', 'Twitter', 'Posting:  Daily                       Number of Followers: 10M                           Total Num of Posts: 15.9K           Total Num of Likes: 979'),
(23, 'Gordon', 'Ramsay', 'Male', 53, 'Facebook:https://www.facebook.com/gordonramsay/\nInstagram:https://www.instagram.com/gordongram/?hl=en\nTwitter:https://twitter.com/GordonRamsay?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor', 'Facebook', 'Posting: Daily                         Number of Followers: 8.6M                           Total Num of Posts: N/A                 Total Num of Likes: 8.3M'),
(24, 'Travis', 'Scott', 'Male', 28, 'Instagram:https://www.instagram.com/travisscott/?hl=en\nTwitter:https://twitter.com/trvisXX?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor\nWebsite:https://www.travisscott.com/', 'Instagram', 'Posting: Randomly                         Number of Followers: 22.3M                           Total Num of Posts: 2.9M                 Total Num of Likes: N/A'),
(25, 'Ellen', 'DeGeneres', 'Female', 61, 'Instagram:https://www.instagram.com/theellenshow/?hl=en\nTwitter:https://twitter.com/TheEllenShow?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor\nFacebook:https://www.facebook.com/ellentv/', 'Instagram', 'Posting: Daily                        Number of Followers: 80.1M                           Total Num of Posts: 8,200                 Total Num of Likes: N/A           '),
(26, 'Musk', 'Elon', 'Male', 48, 'Twitter Url:https://twitter.com/elonmusk?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor\nTesla Url: https://www.tesla.com/elon-musk\nBiography url: https://www.biography.com/business-figure/elon-musk', 'Twitter: https://twitter.com/elonmusk?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor ', 'Posting: Daily Number of Followers: 29.6M Total num of Post: 9342 Total Num of likes: 4312 Total num of retweets:'),
(27, 'Adrian', 'Wojnarowski', 'Male', 50, ' Twitter Url : https://twitter.com/wojespn?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor\nInstagram Url  : https://www.instagram.com/wojespn/?hl=en\nEspnpressrom Url : https://espnpressroom.com/us/bios/adrian-wojnarowski/\nFacebook Url : https://www.facebook.com/wojespn/\n ', 'https://twitter.com/wojespn?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor', 'Posting: Daily Number of Followers: 3.75M Total num of Post: 16.7k Total Num of likes: 6895 Total num of retweets:'),
(28, 'Jimmy', 'Fallon', 'Male', 45, 'Twitter Url : https://twitter.com/jimmyfallon?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor\nNBC Url : https://www.nbc.com/the-tonight-show\nYoutube Url : https://www.youtube.com/user/latenight\nFacebook Url : https://www.facebook.com/JimmyFallon/ ', 'https://twitter.com/jimmyfallon?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor', 'Posting: Daily Number of Followers: 51.5m Total num of Post: 12.2k Total Num of likes: 1466 Total num of retweets:'),
(29, 'Ellen', 'Degeneres', 'Female', 61, 'Twitter Url : https://twitter.com/TheEllenShow\nFacebook Url: https://www.facebook.com/ellentv/\nInstagram Url: https://www.instagram.com/theellenshow/\nYoutube Url: https://www.youtube.com/user/TheEllenShow/search?query=ellen+in+your+ear\nPinterest Url: https://www.pinterest.com/ellentv/', 'https://twitter.com/TheEllenShow', 'Posting: Daily Number of Followers: 79.1m Total num of Post: 20.6k Total Num of likes: 1880 Total num of retweets:'),
(30, 'Mark ', 'Hamill', 'Male', 68, 'Facebook URL: https://www.facebook.com/HamillHimself/\nInstagram URL: https://www.instagram.com/hamillhimself/?hl=en\nTwitter URL: https://twitter.com/HamillHimself?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor\n', 'https://twitter.com/HamillHimself?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor', 'Posting: Daily\nNumber of followers: 4.5m\nTotal number of posts: 8994\nTotal Number of Likes: 100M\nTotal Number of Retweets: 997\n'),
(31, 'Lexi', 'Kaufman', 'Female', 28, 'Twitter URL: https://twitter.com/AlexaBliss_WWEÿ\nInstagram URL: https://www.instagram.com/alexa_bliss_wwe_/', 'https://twitter.com/AlexaBliss_WWEÿ', '4.2M followers\n2671 posts\n7736 likes'),
(32, 'Elon', 'Musk', 'Male', 40, 'Twitter', 'https://twitter.com/notch', 'Posting: Daily, # of Followers: 29.3M, # of Posts: 9432, # of Likes: 4312'),
(33, 'Markus', 'Persson', 'Male', 48, 'Twitter', 'https://twitter.com/elonmusk', 'Posting: Daily, # of Followers: 3.73M, # of Posts: 73k, # of Likes: 9.7k '),
(34, 'Andrew', 'George', 'Male', 27, 'LinkedIn URL: \nhttps://www.linkedin.com/in/adg/\nFacebook URL: \nhttps://www.facebook.com/andrew.george.7543', '', ''),
(35, 'Burnie', 'Sanders', 'Male', 78, 'Twitter URL: \nhttps://twitter.com/BurnieSanders\nFacebook URL:\nhttps://www.facebook.com/berniesanders/\nBurnie Sanders campaign site:\nhttps://berniesanders.com/', 'Example:\nhttps://twitter.com/BurnieSanders', 'Posting: Daily\nNumber of Followers: 10M\nTotal number of posts: 15.9K\nTotal number of likes: 979\nTotal number of retweets: N/A'),
(36, 'Nasser', 'Paydar', 'Male', 64, 'Twitter URL: https://twitter.com/paydar\nFacebook URL: https://www.facebook.com/IUPUI/', 'MAP:\nhttps://twitter.com/paydar', 'Posting: Daily\nNumber of Followers: 4449\nTotal number of posts: 2485\nTotal number of likes: 7445\nTotal number of retweets: 68'),
(37, 'Barack', 'Obama', 'Male', 58, 'Twitter URL: https://twitter.com/barackobama', 'MAP:\nhttps://twitter.com/barackobama', 'Posting: Daily\nNumber of Followers: 110.5M\nTotal number of posts: 15.7K\nTotal number of likes: 11\nTotal number of retweets: 40,693'),
(38, 'Sean', 'Connery', 'Male', 89, 'https://www.seanconnery.com/', 'https://www.seanconnery.com/filmography/', 'Updated yearly'),
(39, 'Justin', 'Trudeau', 'Male', 47, 'https://www.instagram.com/justinpjtrudeau/', 'https://www.instagram.com/p/B5eU8VhAOG5/', 'Posting - Daily, Followers 3.2M'),
(40, 'Alison', 'Brie', 'Female', 36, 'https://www.instagram.com/alisonbrie/', 'https://www.instagram.com/p/B5YXdNrHt_U/', 'Posting - Daily, Followers 970K'),
(41, 'Tommy', 'Lee', 'Male', 57, 'https://www.instagram.com/tommylee/', 'https://www.instagram.com/p/B5Zybf3l-xX/', 'Posting - Daily, Followers 919K'),
(42, 'Eric', 'Egan', 'Male', 27, 'https://twitter.com/HeartAttackMane ', 'https://twitter.com/HeartAttackMane ', 'Twitter - 9k followers\nPosting: Multiple times a day'),
(43, 'Barack ', 'Obama', 'Male', 58, 'https://twitter.com/BarackObama', 'https://twitter.com/BarackObama', 'Posting: weekly'),
(44, 'Bernie', 'Sanders', 'Male', 78, 'https://twitter.com/BernieSanders', 'https://twitter.com/BernieSanders', 'Posting: weekly'),
(45, 'Ryan', 'Reynolds', 'Male', 43, 'https://twitter.com/VancityReynolds', 'https://twitter.com/VancityReynolds', 'Posting: Every Few Days\nFollowers: 15 million\nPosts: 1,390\nLikes: 13.9 k'),
(46, 'Robert', 'Downey Jr.', 'Male', 54, 'Twitter', 'Twitter', 'Posting: A few times a month\nFollowers: 14.6 million\nPosts: 618\nLikes: 1,299'),
(47, 'Mathew', 'Mercer', 'Male', 37, 'Twitter', 'Twitter', 'Posting: Every Day\nFollowers: 458 k\nPosts: 22.5 k\nLikes: 92.2 k'),
(48, 'Klayton', 'Huddlston', 'Male', 21, 'Instagram', 'Instagram', 'Posting: Every Other Day\nFollowers: 96.9 k\nPosts: 664'),
(49, 'Marques ', 'Brownlee', 'Male', 26, 'https://www.youtube.com/user/marquesbrownlee', 'https://twitter.com/MKBHD', ''),
(50, 'James', 'Wilson', 'Male', 29, 'https://twitter.com/UberHaxorNova?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor \nyoutube: https://www.youtube.com/user/UberHaxorNova\ntwitch.tv: https://www.twitch.tv/uberhaxornova\n\n', 'Posting:daily\nnumber of followers:654k\nnumber of likes:1355\nnumber of posts:16.5k\n', ''),
(51, 'Lewis', 'Hamilton', 'Male', 34, 'Twitter URL:\nhttps://twitter.com/lewishamilton\nInstagram URL :\nhttps://www.instagram.com/lewishamilton/\nFacebook URL :\nhttps://www.facebook.com/LewisHamilton/', 'https://www.instagram.com/lewishamilton/\n', 'Posting: Every 2 days\nNumber of followers: 13.7M\nTotal Num of Post: 693\nTotal Num of likes: 300000'),
(52, 'Ray', 'Chase', 'Male', 32, 'Twitter URL:\nhttps://twitter.com/RayChase\nInstagram URL : instagram.com/raychasenation/?hl=en\nFacebook URL :', 'https://twitter.com/RayChase\n', 'Posting: Daily\nNumber of followers: 46.3k\nTotal Num of Post: N.A.\nTotal Num of likes: N.A.'),
(53, 'a', 'a', 'a', 3, 'a', 'a', 'a');

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
(25, 5, 5, '0.02');

-- --------------------------------------------------------

--
-- Stand-in structure for view `celeb_person`
-- (See below for the actual view)
--
CREATE TABLE `celeb_person` (
`frequency` decimal(6,2)
);

-- --------------------------------------------------------

--
-- Table structure for table `personality_dimension`
--

CREATE TABLE `personality_dimension` (
  `dim_id` int(11) NOT NULL,
  `dimension` varchar(200) NOT NULL,
  `qualities` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `keywords` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `personality_dimension`
--

INSERT INTO `personality_dimension` (`dim_id`, `dimension`, `qualities`, `description`, `keywords`) VALUES
(1, 'Extraversion', 'Friendliness, gregariousness, assertiveness, activity level, cheerfulness', 'Degree of activeness, sociability, and talkativeness', '# of posts and length of posts'),
(2, 'Agreeableness', 'Trust, morality, altruism, cooperation, modesty', 'Personality traits such as cooperativeness, kindness and trust', 'Thank you, love, kind, nice, cooperate, together'),
(3, 'Conscientiousness', 'Self-efficacy, orderliness, dutifulness, achievement-striving, self-discipline', 'Refers to the degree of achievement orientation. Being hardworking, organize and reliable is linked with high score', 'I am aware, proud, achieve, accomplish, success, know'),
(4, 'Neuroticism', 'Anxious, jealousy, envy, anger, loneliness', 'Indicates the emotional stability degree. People who have low degree of neuroticism are calm, secure and confident whereas the opposite anxious, insecure and moody', 'I, me, myself; mine, my, damn you, f word, so, I am the best, sad, happy, hate, hater'),
(5, 'Openness', 'Imagination, emotionality, intellect, liberalism, adventurous', 'Related with creative, cultural, and intellectual interest', 'Culture, creative, open, intellectual, appreciate');

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

-- --------------------------------------------------------

--
-- Structure for view `celeb_person`
--
DROP TABLE IF EXISTS `celeb_person`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `celeb_person`  AS  select `celebrity_dimension`.`frequency` AS `frequency` from ((`celebrity` join `celebrity_dimension` on(`celebrity`.`celeb_id` = `celebrity_dimension`.`celeb_id`)) join `personality_dimension` on(`celebrity_dimension`.`dim_id` = `personality_dimension`.`dim_id`)) group by `personality_dimension`.`dimension` ;

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
  MODIFY `celeb_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `celebrity_dimension`
--
ALTER TABLE `celebrity_dimension`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

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
  ADD CONSTRAINT `celebrity_dimension_ibfk_1` FOREIGN KEY (`celeb_id`) REFERENCES `celebrity` (`celeb_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `celebrity_dimension_ibfk_2` FOREIGN KEY (`dim_id`) REFERENCES `personality_dimension` (`dim_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
