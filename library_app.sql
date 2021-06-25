-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2020 at 01:24 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `author` text NOT NULL,
  `isbn` varchar(100) NOT NULL,
  `category` text NOT NULL,
  `descriptions` varchar(5000) NOT NULL,
  `cover` varchar(3000) NOT NULL,
  `uploadedby` varchar(300) NOT NULL,
  `requests` int(11) NOT NULL,
  `available` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `title`, `author`, `isbn`, `category`, `descriptions`, `cover`, `uploadedby`, `requests`, `available`) VALUES
(1, 'BASIC ELECTRONICS', 'B L Theraja', '20584613', 'Electronics', 'The best book of electronics', 'http:192.168.43.225/../library/images/book_covers/BASICELECTRONICS.png', 'innocentmasuki99@gmail.com', 15, 12),
(2, 'C++ FOR NOVICE PROGRAMMERS', 'Leonard Mselle', '28594137854', 'Programming', 'Most Programming books are written as programming-language manuals. Since teaching notes originate from these very books, they invariably carry the same deficiencies. This approach is devoid of cognitive dose. It has therefore turned learning programming into a boring subject. This book provides a solution to this problem by employing simple concrete models called RAM diagrams to present the material for novices. The approach emphasizes on the basics to ensure that every aspect is clearly understood with absolute ease. Learning programming can be fun.', 'http:192.168.43.225/../library/images/book_covers/C++FORNOVICEPROGRAMMERS.png', 'innocentmasuki99@gmail.com', 4, 49),
(4, 'C++ PROGRAMMING', 'D S Malick', '956345182054', 'Programming', 'Introduction to Computer Programming is considered to be one of tough-to-teach subjects. Programming materials are potentially ambiguous. For most abstract subjects, such as mathematics and physics the common technique used to tackle ambiguity is illustration. This book, like others, by the same author, relies on the prowess of Memory Transfer Language (MTL) to illustrate all introductory programming concepts. With MTL, novice programmers are given a simple compass which enables them to compare what they think the machine should do, with what actually the machine is doing. In this way they avoid misconceptions which are rife in programming. MTL has turned learning and teaching programming into a sort of fun', 'http:192.168.43.225/../library/images/book_covers/C++PROGRAMMING.png', 'innocentmasuki99@gmail.com', 15, 22),
(5, 'PROGRAMMING LANGUAGES', 'Robert Sebesta', '8256349105', 'Programming', 'Introduction to Computer Programming is considered to be one of tough-to-teach subjects. Programming materials are potentially ambiguous. For most abstract subjects, such as mathematics and physics the common technique used to tackle ambiguity is illustration. This book, like others, by the same author, relies on the prowess of Memory Transfer Language (MTL) to illustrate all introductory programming concepts. With MTL, novice programmers are given a simple compass which enables them to compare what they think the machine should do, with what actually the machine is doing. In this way they avoid misconceptions which are rife in programming. MTL has turned learning and teaching programming into a sort of fun', 'http:192.168.43.225/../library/images/book_covers/PROGRAMMINGLANGUAGES.png', 'innocentmasuki99@gmail.com', 5, 100),
(6, 'MECHANISM OF THE HEAVENS', 'Mary Somerville ', '28563191', 'Religion', 'Religious texts are texts related to a religious tradition. They differ from literary texts by being a compilation or discussion of beliefs, mythologies, ritual practices, commandments or laws, ethical conduct, spiritual aspirations, and for creating or fostering a religious community', 'http:192.168.43.225/../library/images/book_covers/MECHANISMOFTHEHEAVENS.png', 'alan@alan.com', 4, 12),
(8, 'SORRY FOR YOUR LOSS', 'Jessie Ann', '9864521', 'Novel', 'A mother eho lost a child', 'http:192.168.43.225/../library/images/book_covers/SORRYFORYOURLOSS.png', 'innocentmasuki99@gmail.com', 6, 89),
(9, 'NO PLACE LIKE HERE', 'Christina June', '28564319', 'Novel', 'This is the best inspiring book', 'http:192.168.43.225/../library/images/book_covers/NOPLACELIKEHERE.png', 'alan@alan.com', 2, 20),
(10, 'DIGITAL ELECTRONICS ', 'Anil K Maini', '8256343197', 'Electronics', 'The fundamentals and implementation of digital electronics are essential to understanding the design and working of consumer/industrial electronics', 'http:192.168.43.225/../library/images/book_covers/DIGITALELECTRONICS.png', 'alan@alan.com', 4, 44),
(11, 'ELECTRONIC CIRCUITS ', 'H N Shivashankar', '3651546194', 'Electronics', 'The author has used his wide experience and expertise to explain the concepts and fundamentals behind the development of analog electronic circuits in detail. The book is particularly useful for students who want to learn about electronic circuits for a career in electronics. This book covers the operation of BJT transistor circuits and op-amp circuits', 'http:192.168.43.225/../library/images/book_covers/ELECTRONICCIRCUITS.png', 'alan@alan.com', 3, 44),
(12, 'JAVA FOR BEGINNERS ', 'Josh Thompsons', '9280063555', 'Programming', 'The book, “Java: Java For Beginners Guide To Learn Java And Java Programming”, contains proven steps and strategies on how to learn basic programming in Java, including lesson summaries for easy reference and lessons at the end of each chapter to help you compound your new knowledge. Java is a simple language, object-oriented and incredibly easy to learn, provided you put your mind to it. Once you have learned the fundamental concepts and how to write the code, you will soon be programming like a pro!\n', 'http:192.168.43.225/../library/images/book_covers/JAVAFORBEGINNERS.png', 'alan@alan.com', 9, 72),
(13, 'C++ PROGRAMMING IN RAM', 'Leonard Mselle', '9789987735488', 'Programming', 'Computer programming is a subject that is both difficult to teach and to comprehend. The reason is that programming learners are required to simultaneously contend with diverse issues.\n\nIn this book, an attempt is made to employ new concrete models, by the name of  Memory Msele Transfer Language (MTL) inverted by Prof. Leonard James Mselle (made of RAM diagrams) to enable the leaner and the tutor to visualize most of intrinsic issues of programming. MTL visualization is designed to reduce ambiguity and hence facilitate comprehension. In addition, topics in this book are organized and presented to facilitate the learner to feel that he/ she is “working the machine” and the machine has no influence on what goes wrong on the code.\n\nAll programs are dissected through RAM diagrams (MTL)  to enable the learner to appreciate the power of close tracking the code.\n\nThe intention is for the learner to appreciate the usefulness of close tracking and use the tool as compass for navigation through codes.', 'http:192.168.43.225/../library/images/book_covers/C++PROGRAMMINGINRAM.png', 'alan@alan.com', 5, 63);

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `author` text NOT NULL,
  `requestedby` varchar(300) NOT NULL,
  `cover` varchar(3000) NOT NULL,
  `views` text NOT NULL,
  `status` text NOT NULL,
  `isbn` varchar(200) NOT NULL,
  `approvedby` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `id` int(11) NOT NULL,
  `fullname` text NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(100) NOT NULL,
  `category` text NOT NULL,
  `imagepath` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`id`, `fullname`, `email`, `password`, `category`, `imagepath`) VALUES
(2, 'Innocent Masuki ', 'innocentmasuki99@gmail.com', 'innocent', '', 'http:192.168.43.225/../library/images/user_images/InnocentMasuki.png'),
(3, 'Ndege Jack', 'ndegejackson1@gmail.com', 'mapemandege', 'Admin', 'http:192.168.43.225/../library/images/user_images/NdegeJack.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `isbn` (`isbn`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
