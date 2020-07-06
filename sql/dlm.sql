-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 06, 2020 at 07:30 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE
= "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT
= 0;
START TRANSACTION;
SET time_zone
= "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dlm`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books`
(
  `Book_ID` varchar
(30) NOT NULL,
  `Book_Name` varchar
(80) NOT NULL,
  `Author_Name` varchar
(80) NOT NULL,
  `Publication` varchar
(80) NOT NULL,
  `issue_status` int
(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`
Book_ID`,
`Book_Name
`, `Author_Name`, `Publication`, `issue_status`) VALUES
('1', 'Computer Network', 'A.S. Tanenbaum', 'Pearson Education', 1),
('2', 'Data Warehousing ', 'Reema Theraja', 'Oxford University Press', 1),
('3', 'Computer Network', 'A.S. Tanenbaum', 'Pearson Education', 0),
('4', 'Data Warehousing ', 'Reema Theraja', 'Oxford University Press', 0),
('5', 'Computer Network', 'A.S. Tanenbaum', 'Pearson Education', 0),
('6', 'Data Warehousing ', 'Reema Theraja', 'Oxford University Press', 0),
('7', 'Computer Network', 'A.S. Tanenbaum', 'Pearson Education', 0),
('8', 'Data Warehousing ', 'Reema Theraja', 'Oxford University Press', 0);

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty`
(
  `SDRN_No` varchar
(30) NOT NULL,
  `First_Name` varchar
(30) NOT NULL,
  `Middle_Name` varchar
(30) NOT NULL,
  `Last_Name` varchar
(30) NOT NULL,
  `Email_ID` varchar
(30) NOT NULL,
  `Contact_No` bigint
(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`
SDRN_No`,
`First_Name
`, `Middle_Name`, `Last_Name`, `Email_ID`, `Contact_No`) VALUES
('101', 'Apurva', 'Swapnil', 'Shinde', 'apurva.karkhanis@rait.ac.in', 9821598302),
('102', 'Arjun', 'Khandu', 'Kale', 'kalearjun@gmail.com', 8989771132);

-- --------------------------------------------------------

--
-- Table structure for table `fac_book`
--

CREATE TABLE `fac_book`
(
  `SDRN_No` varchar
(30) NOT NULL,
  `Book_ID` varchar
(30) NOT NULL,
  `Book_Name` varchar
(80) NOT NULL,
  `Issue_Date` date NOT NULL,
  `Return_Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fac_book`
--

INSERT INTO `fac_book` (`
SDRN_No`,
`Book_ID
`, `Book_Name`, `Issue_Date`, `Return_Date`) VALUES
('101', '2', 'Data Warehousing ', '2020-07-01', '2020-07-08');

-- --------------------------------------------------------

--
-- Table structure for table `issue_request_fac`
--

CREATE TABLE `issue_request_fac`
(
  `SDRN_No` varchar
(30) NOT NULL,
  `Book_ID` varchar
(30) NOT NULL,
  `Book_Name` varchar
(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `issue_request_fac`
--

INSERT INTO `issue_request_fac` (`
SDRN_No`,
`Book_ID
`, `Book_Name`) VALUES
('101', '1', 'Computer Network');

-- --------------------------------------------------------

--
-- Table structure for table `issue_request_stud`
--

CREATE TABLE `issue_request_stud`
(
  `Roll_No` varchar
(30) NOT NULL,
  `Book_ID` varchar
(30) NOT NULL,
  `Book_Name` varchar
(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `issue_request_stud`
--

INSERT INTO `issue_request_stud` (`
Roll_No`,
`Book_ID
`, `Book_Name`) VALUES
('18CE8017', '2', 'Data Warehousing ');

-- --------------------------------------------------------

--
-- Table structure for table `requested_books`
--

CREATE TABLE `requested_books`
(
  `SDRN_No` varchar
(30) NOT NULL,
  `Faculty_Name` varchar
(80) NOT NULL,
  `Book_Name` varchar
(80) NOT NULL,
  `Author_Name` varchar
(80) NOT NULL,
  `Publication` varchar
(80) NOT NULL,
  `Date_Time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON
UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `requested_books`
--

INSERT INTO `requested_books` (`
SDRN_No`,
`Faculty_Name
`, `Book_Name`, `Author_Name`, `Publication`, `Date_Time`) VALUES
('101', 'Apurva Swapnil Shinde', 'Digital Signal Processing', 'A.Aanad Kumar', 'PHI Learning Pvt.Ltd', '2020-07-01 02:21:23'),
('102', 'Arjun Khandu Kale', 'Real Time Operating System ', 'Jane W.S Liu', 'Pearson ', '2020-07-01 02:24:22'),
('101', 'Apurva Swapnil Shinde', 'Computer g', 'reema thareja', 'xyz', '2020-07-06 03:01:07');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students`
(
  `Roll_No` varchar
(30) NOT NULL,
  `First_Name` varchar
(30) NOT NULL,
  `Middle_Name` varchar
(30) NOT NULL,
  `Last_Name` varchar
(30) NOT NULL,
  `Email_ID` varchar
(30) NOT NULL,
  `Contact_No` bigint
(10) NOT NULL,
  `Year` varchar
(5) NOT NULL,
  `Division` varchar
(5) NOT NULL,
  `Batch` varchar
(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`
Roll_No`,
`First_Name
`, `Middle_Name`, `Last_Name`, `Email_ID`, `Contact_No`, `Year`, `Division`, `Batch`) VALUES
('18CE5006', 'Varsha', 'Sushil', 'Kedare', 'varsha.kedare2411@gmail.com', 8108307911, 'BE', 'B', 'B4'),
('18CE5009', 'Reema', 'Anant', 'Kharat', 'reema.ak@gmail.com', 6677885131, 'BE', 'B', 'B4'),
('18CE8017', 'Diksha', 'Ajaykumar', 'Nigam', 'nigamdiksha02@gmail.com', 8104148955, 'SE', 'C', 'C3');

-- --------------------------------------------------------

--
-- Table structure for table `stud_book`
--

CREATE TABLE `stud_book`
(
  `Roll_No` varchar
(30) NOT NULL,
  `Book_ID` varchar
(30) NOT NULL,
  `Book_Name` varchar
(80) NOT NULL,
  `Issue_Date` date NOT NULL,
  `Return_Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stud_book`
--

INSERT INTO `stud_book` (`
Roll_No`,
`Book_ID
`, `Book_Name`, `Issue_Date`, `Return_Date`) VALUES
('18CE5009', '1', 'Computer Network ', '2020-07-01', '2020-07-08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
ADD PRIMARY KEY
(`Book_ID`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
ADD PRIMARY KEY
(`SDRN_No`);

--
-- Indexes for table `fac_book`
--
ALTER TABLE `fac_book`
ADD KEY `Book_ID`
(`Book_ID`),
ADD KEY `SDRN_No`
(`SDRN_No`);

--
-- Indexes for table `issue_request_stud`
--
ALTER TABLE `issue_request_stud`
ADD KEY `Roll_No`
(`Roll_No`),
ADD KEY `Book_ID`
(`Book_ID`);

--
-- Indexes for table `requested_books`
--
ALTER TABLE `requested_books`
ADD KEY `SDRN_No`
(`SDRN_No`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
ADD PRIMARY KEY
(`Roll_No`);

--
-- Indexes for table `stud_book`
--
ALTER TABLE `stud_book`
ADD KEY `Roll_No`
(`Roll_No`),
ADD KEY `Book_ID`
(`Book_ID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `fac_book`
--
ALTER TABLE `fac_book`
ADD CONSTRAINT `fac_book_ibfk_1` FOREIGN KEY
(`Book_ID`) REFERENCES `books`
(`Book_ID`),
ADD CONSTRAINT `fac_book_ibfk_2` FOREIGN KEY
(`SDRN_No`) REFERENCES `faculty`
(`SDRN_No`);

--
-- Constraints for table `issue_request_stud`
--
ALTER TABLE `issue_request_stud`
ADD CONSTRAINT `issue_request_stud_ibfk_1` FOREIGN KEY
(`Roll_No`) REFERENCES `students`
(`Roll_No`),
ADD CONSTRAINT `issue_request_stud_ibfk_2` FOREIGN KEY
(`Book_ID`) REFERENCES `books`
(`Book_ID`);

--
-- Constraints for table `requested_books`
--
ALTER TABLE `requested_books`
ADD CONSTRAINT `requested_books_ibfk_1` FOREIGN KEY
(`SDRN_No`) REFERENCES `faculty`
(`SDRN_No`);

--
-- Constraints for table `stud_book`
--
ALTER TABLE `stud_book`
ADD CONSTRAINT `stud_book_ibfk_1` FOREIGN KEY
(`Roll_No`) REFERENCES `students`
(`Roll_No`),
ADD CONSTRAINT `stud_book_ibfk_2` FOREIGN KEY
(`Book_ID`) REFERENCES `books`
(`Book_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
