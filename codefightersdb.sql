-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2019 at 12:47 PM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codefightersdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `FeedbackID` int(11) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `problems`
--

CREATE TABLE `problems` (
  `ProblemID` int(11) NOT NULL,
  `ProblemName` varchar(255) DEFAULT NULL,
  `Volume` int(11) NOT NULL,
  `Description` text NOT NULL,
  `solved` int(11) DEFAULT 0,
  `TestCase` varchar(800) DEFAULT NULL,
  `TestCaseOutput` varchar(800) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `problems`
--

INSERT INTO `problems` (`ProblemID`, `ProblemName`, `Volume`, `Description`, `solved`, `TestCase`, `TestCaseOutput`) VALUES
(100, 'Welcome to Codefighters', 100, '<!doctype html>\r\n<html lang=\"en-US\">\r\n\r\n<head>\r\n	<link rel = \"stylesheet\" href=\"css/problem_css.css\">				\r\n</head>\r\n\r\n<body >\r\n	<div class=\"wrap\"> \r\n		<h2 class=\"header\" > 100 - Welcome to Codefighters </h2>\r\n		<p class=\"header\"> Time Limit:1 sec  Memory Limit: 32 MB </p> <br>\r\n		\r\n		<p> Hello, Coder. Welcome to the world of coding. And now its time to prove yourself as a boss coder. So, you want to tell the world that a new boss has come\r\n			so you want to tell that \"I am a new coder\". And in this problem you have to do the same thing just print the line \"I am a new coder\".\r\n		</p> <br>\r\n		\r\n		<h4> Input </h4>\r\n		<p> There is no input for this problem </p>\r\n		\r\n		<h4> Output </h4>\r\n		<p> Just print the line that was described above </p><br>\r\n		\r\n		<h4> Sample Input </h4> <br>\r\n		\r\n		<h4> Sample Output </h4>\r\n		<p> I am a new coder </p> <br>\r\n		\r\n		<p> <b>Problem setter: </b> Tasnid Mahin </p><br> <br>\r\n		\r\n	</div>\r\n	\r\n</body>\r\n\r\n\r\n</html>', 3, NULL, 'I am a new coder\r\n'),
(101, 'Esho jog kori', 100, '<!doctype html>\r\n<html lang=\"en-US\">\r\n\r\n<head>\r\n	<link rel = \"stylesheet\" href=\"css/problem_css.css\">				\r\n</head>\r\n\r\n<body >\r\n	<div class=\"wrap\"> \r\n		<h2 class=\"header\" > 101 - Esho jog kori </h2>\r\n		<p class=\"header\"> Time Limit:1 sec  Memory Limit: 32 MB </p> <br>\r\n		\r\n		<p> You are a great coder .so it is an easy task for you.Take two numbers then print their sum.\r\n		</p> <br>\r\n		\r\n		<h4> Input </h4>\r\n		<p> At first an integer T (1<=T<=100) that means number of testcase. Then 2 integers a and b in a single line. <br> 0<= a,b <=1000 </p>\r\n		\r\n		<h4> Output </h4>\r\n		<p> You have to print the sum of two numbers </p><br>\r\n		\r\n		<h4> Sample Input </h4> \r\n		<p> 5 <br> 1 1 <br> 2 3 <br> 10 5 <br> 21 34 <br> 56 6 </p>\r\n		\r\n		<h4> Sample Output </h4>\r\n		<p> 2 <br> 5 <br> 15 <br> 55 <br> 62 </p> <br>\r\n		\r\n		<p> <b>Problem setter: </b> Tasnid Mahin </p><br> <br>\r\n		\r\n	</div>\r\n	\r\n</body>\r\n\r\n\r\n</html>', 2, '10\r\n41 449\r\n328 474\r\n150 709\r\n467 329\r\n936 440\r\n700 117\r\n258 811\r\n952 491\r\n993 931\r\n823 431\r\n', '490\r\n802\r\n859\r\n796\r\n1376\r\n817\r\n1069\r\n1443\r\n1924\r\n1254\r\n'),
(200, 'Multiplication', 200, '<!doctype html>\r\n<html lang=\"en-US\">\r\n\r\n<head>\r\n	<link rel = \"stylesheet\" href=\"css/problem_css.css\">				\r\n</head>\r\n\r\n<body >\r\n	<div class=\"wrap\"> \r\n		<h2 class=\"header\" > 200 - Multiplication </h2>\r\n		<p class=\"header\"> Time Limit:1 sec  Memory Limit: 32 MB </p> <br>\r\n		\r\n		<p> You are a great coder .so it is an easy task for you.Take two numbers then print their multiplication.\r\n		</p> <br>\r\n		\r\n		<h4> Input </h4>\r\n		<p> At first an integer T (1<=T<=100) that means number of testcase. Then 2 integers a and b in a single line. <br> 0<= a,b <=1000 </p>\r\n		\r\n		<h4> Output </h4>\r\n		<p> You have to print the multiplication of two numbers </p><br>\r\n		\r\n		<h4> Sample Input </h4> \r\n		<p> 5 <br> 1 1 <br> 2 3 <br> 10 5 <br> 21 34 <br> 56 6 </p>\r\n		\r\n		<h4> Sample Output </h4>\r\n		<p> 1 <br> 6 <br> 50 <br> 714 <br> 336 </p> <br>\r\n		\r\n		<p> <b>Problem setter: </b> Tasnid Mahin </p><br> <br>\r\n		\r\n	</div>\r\n	\r\n</body>\r\n\r\n\r\n</html>', 1, '10\r\n41 449\r\n328 474\r\n150 709\r\n467 329\r\n936 440\r\n700 117\r\n258 811\r\n952 491\r\n993 931\r\n823 431\r\n', '18409\r\n155472\r\n106350\r\n153643\r\n411840\r\n81900\r\n209238\r\n467432\r\n924483\r\n354713\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `problem_category`
--

CREATE TABLE `problem_category` (
  `Problem_CategoryID` int(11) NOT NULL,
  `ProblemID` int(11) NOT NULL,
  `Tag` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `problem_category`
--

INSERT INTO `problem_category` (`Problem_CategoryID`, `ProblemID`, `Tag`) VALUES
(1, 100, 'Beginner Problems'),
(2, 101, 'Beginner Problems'),
(3, 200, 'Beginner Problems'),
(4, 101, 'Math'),
(5, 200, 'Math');

-- --------------------------------------------------------

--
-- Table structure for table `submissions`
--

CREATE TABLE `submissions` (
  `SubmissionID` int(11) NOT NULL,
  `ProblemID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `Verdict` varchar(255) DEFAULT NULL,
  `Language` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `submissions`
--

INSERT INTO `submissions` (`SubmissionID`, `ProblemID`, `UserID`, `Verdict`, `Language`) VALUES
(1, 100, 103, 'Accepted', 'cpp11'),
(2, 101, 103, 'Accepted', 'c'),
(3, 200, 103, 'Accepted', 'c'),
(4, 100, 102, 'Accepted', 'cpp'),
(5, 101, 102, 'Accepted', 'cpp'),
(6, 100, 100, 'Accepted', 'c');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UserID` int(11) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `solve` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserID`, `Username`, `Password`, `FirstName`, `LastName`, `Email`, `solve`) VALUES
(100, 'mahin1', '$2y$10$EUsLMv.2oAymrtByiuNQWOnZZYrqPTHH16MS09YTAWTY5J1CHoprq', 'mahin', 'mahin', 'mahin1@gmail.com', 1),
(101, 'tasnidmahin', '$2y$10$g4cDLh8cg1frMS6NX1aB9u8iCpatjY.suPCeiXJSi7xyVf1qYcr6G', 'Tasnid', 'Mahin', 'tasnidmahin@gmail.com', 0),
(102, 'Rafat97', '$2y$10$lu1SPkoLEZpvpv1U2GrvveMzyzenCTEng1smndq8AAz130JlaOYqq', 'Rafat', 'Haque', 'Rafat97@gmail.com', 2),
(103, 'faraz', '$2y$10$9IwKwbj/0C8oPKVY6UXjz.C0Rv9UOU4Ohzds7hhwzj9NqmGEnuv72', 'Faraz', 'Khan', 'faraz@gmail.com', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`FeedbackID`),
  ADD KEY `Username` (`Username`);

--
-- Indexes for table `problems`
--
ALTER TABLE `problems`
  ADD PRIMARY KEY (`ProblemID`),
  ADD UNIQUE KEY `ProblemID` (`ProblemID`);

--
-- Indexes for table `problem_category`
--
ALTER TABLE `problem_category`
  ADD PRIMARY KEY (`Problem_CategoryID`),
  ADD KEY `ProblemID` (`ProblemID`);

--
-- Indexes for table `submissions`
--
ALTER TABLE `submissions`
  ADD PRIMARY KEY (`SubmissionID`),
  ADD KEY `ProblemID` (`ProblemID`),
  ADD KEY `UserID` (`UserID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserID`),
  ADD UNIQUE KEY `Username` (`Username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `FeedbackID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `problem_category`
--
ALTER TABLE `problem_category`
  MODIFY `Problem_CategoryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `submissions`
--
ALTER TABLE `submissions`
  MODIFY `SubmissionID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`Username`) REFERENCES `users` (`Username`);

--
-- Constraints for table `problem_category`
--
ALTER TABLE `problem_category`
  ADD CONSTRAINT `problem_category_ibfk_1` FOREIGN KEY (`ProblemID`) REFERENCES `problems` (`ProblemID`);

--
-- Constraints for table `submissions`
--
ALTER TABLE `submissions`
  ADD CONSTRAINT `submissions_ibfk_1` FOREIGN KEY (`ProblemID`) REFERENCES `problems` (`ProblemID`),
  ADD CONSTRAINT `submissions_ibfk_2` FOREIGN KEY (`UserID`) REFERENCES `users` (`UserID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
