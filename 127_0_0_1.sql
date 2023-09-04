-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2021 at 05:38 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `finalproj`
--
CREATE DATABASE IF NOT EXISTS `finalproj` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `finalproj`;

-- --------------------------------------------------------

--
-- Table structure for table `birth`
--

CREATE TABLE `birth` (
  `id` int(11) NOT NULL,
  `others` varchar(20) NOT NULL,
  `bren` varchar(20) NOT NULL,
  `lastname` text NOT NULL,
  `firstname` text NOT NULL,
  `middlename` text NOT NULL,
  `dob` varchar(20) NOT NULL,
  `pob` varchar(20) NOT NULL,
  `prov` varchar(20) NOT NULL,
  `country` text NOT NULL,
  `lastname1` text NOT NULL,
  `firstname1` text NOT NULL,
  `middlename1` text NOT NULL,
  `lastname2` text NOT NULL,
  `firstname2` text NOT NULL,
  `middlename2` text NOT NULL,
  `tin` int(20) NOT NULL,
  `tn` varchar(20) NOT NULL,
  `lname` text NOT NULL,
  `fname` text NOT NULL,
  `mi` text NOT NULL,
  `add1` varchar(20) NOT NULL,
  `city` text NOT NULL,
  `prov1` varchar(20) NOT NULL,
  `telno` int(20) NOT NULL,
  `sign` varchar(20) NOT NULL,
  `month` varchar(10) NOT NULL,
  `day` varchar(10) NOT NULL,
  `year` int(20) NOT NULL,
  `month1` varchar(10) NOT NULL,
  `day1` varchar(10) NOT NULL,
  `year1` varchar(10) NOT NULL,
  `rby` varchar(20) NOT NULL,
  `date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `birth`
--

INSERT INTO `birth` (`id`, `others`, `bren`, `lastname`, `firstname`, `middlename`, `dob`, `pob`, `prov`, `country`, `lastname1`, `firstname1`, `middlename1`, `lastname2`, `firstname2`, `middlename2`, `tin`, `tn`, `lname`, `fname`, `mi`, `add1`, `city`, `prov1`, `telno`, `sign`, `month`, `day`, `year`, `month1`, `day1`, `year1`, `rby`, `date`) VALUES
(1, 'asd', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '', ''),
(2, '', 'asdas', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '', ''),
(3, '', 'asdas', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '', ''),
(4, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', 0, 'asdsa', '', '', 0, '', '', '', '', ''),
(5, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '', ''),
(6, 'ad', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `death`
--

CREATE TABLE `death` (
  `id` int(11) NOT NULL,
  `others` varchar(10) NOT NULL,
  `bren` varchar(10) NOT NULL,
  `lastname` text NOT NULL,
  `firstname` text NOT NULL,
  `middlename` text NOT NULL,
  `dob` varchar(10) NOT NULL,
  `pob` varchar(10) NOT NULL,
  `prov` varchar(15) NOT NULL,
  `country` text NOT NULL,
  `whens` varchar(15) NOT NULL,
  `tin` int(15) NOT NULL,
  `tn` varchar(15) NOT NULL,
  `country1` text NOT NULL,
  `others1` varchar(15) NOT NULL,
  `country2` text NOT NULL,
  `lname` text NOT NULL,
  `fname` text NOT NULL,
  `mi` text NOT NULL,
  `adds` varchar(15) NOT NULL,
  `city` text NOT NULL,
  `prov1` varchar(15) NOT NULL,
  `telno` int(20) NOT NULL,
  `month` varchar(15) NOT NULL,
  `day` varchar(15) NOT NULL,
  `year` int(10) NOT NULL,
  `month1` varchar(15) NOT NULL,
  `day2` varchar(15) NOT NULL,
  `year2` int(15) NOT NULL,
  `cdli` varchar(15) NOT NULL,
  `pages` int(10) NOT NULL,
  `pages1` int(10) NOT NULL,
  `rby` varchar(15) NOT NULL,
  `dates` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `death`
--

INSERT INTO `death` (`id`, `others`, `bren`, `lastname`, `firstname`, `middlename`, `dob`, `pob`, `prov`, `country`, `whens`, `tin`, `tn`, `country1`, `others1`, `country2`, `lname`, `fname`, `mi`, `adds`, `city`, `prov1`, `telno`, `month`, `day`, `year`, `month1`, `day2`, `year2`, `cdli`, `pages`, `pages1`, `rby`, `dates`) VALUES
(1, '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', 0, '', '', 0, '', '', 0, '', 0, 0, '', ''),
(2, '', '', 'dasd', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', 0, '', '', 0, '', '', 0, '', 0, 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `marriage`
--

CREATE TABLE `marriage` (
  `id` int(11) NOT NULL,
  `others` varchar(256) NOT NULL,
  `name` varchar(256) NOT NULL,
  `hno` varchar(256) NOT NULL,
  `st` varchar(256) NOT NULL,
  `town` varchar(80) NOT NULL,
  `country` varchar(80) NOT NULL,
  `code` varchar(80) NOT NULL,
  `tno` varchar(80) NOT NULL,
  `email` varchar(80) NOT NULL,
  `quantity` varchar(80) NOT NULL,
  `surname` varchar(80) NOT NULL,
  `forename` varchar(80) NOT NULL,
  `fname` varchar(80) NOT NULL,
  `mname` varchar(80) NOT NULL,
  `forename2` varchar(80) NOT NULL,
  `fname2` varchar(80) NOT NULL,
  `day` varchar(80) NOT NULL,
  `month` varchar(80) NOT NULL,
  `year` varchar(80) NOT NULL,
  `date` varchar(80) NOT NULL,
  `place` varchar(80) NOT NULL,
  `mtown` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `marriage`
--

INSERT INTO `marriage` (`id`, `others`, `name`, `hno`, `st`, `town`, `country`, `code`, `tno`, `email`, `quantity`, `surname`, `forename`, `fname`, `mname`, `forename2`, `fname2`, `day`, `month`, `year`, `date`, `place`, `mtown`) VALUES
(3, 'asdas', 'asdas', 'sdsdas', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(9, '', 'asdas', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(10, '', 'sad', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(11, '', 'asd', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(12, 'asdas', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `phil`
--

CREATE TABLE `phil` (
  `id` int(11) NOT NULL,
  `identification` varchar(20) NOT NULL,
  `konsulta` varchar(20) NOT NULL,
  `lastname` text NOT NULL,
  `firstname` text NOT NULL,
  `extension` varchar(20) NOT NULL,
  `middlename` text NOT NULL,
  `nomiddlename` varchar(20) NOT NULL,
  `mononym` varchar(20) NOT NULL,
  `lastname1` text NOT NULL,
  `firstname1` text NOT NULL,
  `extension1` varchar(20) NOT NULL,
  `middlename1` varchar(20) NOT NULL,
  `nomiddlename1` varchar(20) NOT NULL,
  `mononym1` varchar(20) NOT NULL,
  `lastname2` text NOT NULL,
  `firstname2` text NOT NULL,
  `extension2` varchar(20) NOT NULL,
  `middlename2` varchar(20) NOT NULL,
  `nomiddlename2` varchar(20) NOT NULL,
  `mononym2` varchar(20) NOT NULL,
  `month` varchar(20) NOT NULL,
  `day` varchar(20) NOT NULL,
  `year` int(20) NOT NULL,
  `pob` varchar(20) NOT NULL,
  `philsys` varchar(20) NOT NULL,
  `tax` varchar(20) NOT NULL,
  `address` varchar(30) NOT NULL,
  `phonenum` int(20) NOT NULL,
  `mobnum` int(20) NOT NULL,
  `business` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `address2` varchar(30) NOT NULL,
  `address3` varchar(30) NOT NULL,
  `prof` varchar(20) NOT NULL,
  `yearprof` varchar(20) NOT NULL,
  `earning` varchar(20) NOT NULL,
  `earning2` varchar(20) NOT NULL,
  `income` varchar(20) NOT NULL,
  `printname` varchar(20) NOT NULL,
  `dates` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `phil`
--

INSERT INTO `phil` (`id`, `identification`, `konsulta`, `lastname`, `firstname`, `extension`, `middlename`, `nomiddlename`, `mononym`, `lastname1`, `firstname1`, `extension1`, `middlename1`, `nomiddlename1`, `mononym1`, `lastname2`, `firstname2`, `extension2`, `middlename2`, `nomiddlename2`, `mononym2`, `month`, `day`, `year`, `pob`, `philsys`, `tax`, `address`, `phonenum`, `mobnum`, `business`, `email`, `address2`, `address3`, `prof`, `yearprof`, `earning`, `earning2`, `income`, `printname`, `dates`) VALUES
(1, '', '', 'asdas', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 0, 0, '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `sss`
--

CREATE TABLE `sss` (
  `id` int(11) NOT NULL,
  `lastname` text NOT NULL,
  `firstname` text NOT NULL,
  `middlename` text NOT NULL,
  `suffixname` text NOT NULL,
  `month` varchar(20) NOT NULL,
  `day` int(8) NOT NULL,
  `year` int(8) NOT NULL,
  `qyear2` int(8) NOT NULL,
  `nat` varchar(15) NOT NULL,
  `rel` varchar(15) NOT NULL,
  `prov` text NOT NULL,
  `prov1` text NOT NULL,
  `bldg` text NOT NULL,
  `blk` varchar(15) NOT NULL,
  `street` varchar(15) NOT NULL,
  `subd` varchar(15) NOT NULL,
  `brgy` text NOT NULL,
  `muni` text NOT NULL,
  `province` text NOT NULL,
  `country` text NOT NULL,
  `zipcode` int(15) NOT NULL,
  `mobileno` int(15) NOT NULL,
  `email` varchar(15) NOT NULL,
  `phoneno` int(15) NOT NULL,
  `flastname` text NOT NULL,
  `ffirstname` text NOT NULL,
  `fmiddlename` text NOT NULL,
  `fsuffix` text NOT NULL,
  `month1` varchar(15) NOT NULL,
  `day1` int(15) NOT NULL,
  `year1` int(15) NOT NULL,
  `clastname` text NOT NULL,
  `cfirstname` text NOT NULL,
  `cmiddlename` text NOT NULL,
  `csuffixname` text NOT NULL,
  `month2` varchar(15) NOT NULL,
  `day2` int(15) NOT NULL,
  `year2` int(15) NOT NULL,
  `lastname1` text NOT NULL,
  `firstname1` text NOT NULL,
  `middlename1` text NOT NULL,
  `suffixname1` text NOT NULL,
  `cmonth2` varchar(15) NOT NULL,
  `cday2` varchar(15) NOT NULL,
  `cyear2` int(15) NOT NULL,
  `lastname2` text NOT NULL,
  `firstname2` text NOT NULL,
  `middlename2` text NOT NULL,
  `suffixname2` text NOT NULL,
  `month3` varchar(15) NOT NULL,
  `day3` varchar(15) NOT NULL,
  `year3` int(15) NOT NULL,
  `lastname3` text NOT NULL,
  `firstname3` text NOT NULL,
  `middlename3` text NOT NULL,
  `suffixname3` text NOT NULL,
  `smonth3` varchar(15) NOT NULL,
  `sday3` varchar(15) NOT NULL,
  `syear3` int(15) NOT NULL,
  `prof` varchar(15) NOT NULL,
  `yearprof` int(15) NOT NULL,
  `earning` int(15) NOT NULL,
  `foradd` varchar(15) NOT NULL,
  `earning1` int(15) NOT NULL,
  `earning2` int(15) NOT NULL,
  `income` int(15) NOT NULL,
  `printname` varchar(15) NOT NULL,
  `dates` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sss`
--

INSERT INTO `sss` (`id`, `lastname`, `firstname`, `middlename`, `suffixname`, `month`, `day`, `year`, `qyear2`, `nat`, `rel`, `prov`, `prov1`, `bldg`, `blk`, `street`, `subd`, `brgy`, `muni`, `province`, `country`, `zipcode`, `mobileno`, `email`, `phoneno`, `flastname`, `ffirstname`, `fmiddlename`, `fsuffix`, `month1`, `day1`, `year1`, `clastname`, `cfirstname`, `cmiddlename`, `csuffixname`, `month2`, `day2`, `year2`, `lastname1`, `firstname1`, `middlename1`, `suffixname1`, `cmonth2`, `cday2`, `cyear2`, `lastname2`, `firstname2`, `middlename2`, `suffixname2`, `month3`, `day3`, `year3`, `lastname3`, `firstname3`, `middlename3`, `suffixname3`, `smonth3`, `sday3`, `syear3`, `prof`, `yearprof`, `earning`, `foradd`, `earning1`, `earning2`, `income`, `printname`, `dates`) VALUES
(1, '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, '', 0, '', '', '', '', '', 0, 0, '', '', '', '', '', 0, 0, '', '', '', '', '', '', 0, '', '', '', '', '', '', 0, '', '', '', '', '', '', 0, '', 0, 0, '', 0, 0, 0, '', 0),
(2, '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, '', 0, '', '', '', '', '', 0, 0, '', '', '', '', '', 0, 0, '', '', '', '', '', '', 0, '', '', '', '', '', '', 0, '', '', '', '', '', '', 0, 'asdas', 0, 0, '', 0, 0, 0, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(2, '123', '123@15', '123'),
(3, 'lark', '123@1', '123'),
(4, 'wolf', '1@1', '12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `birth`
--
ALTER TABLE `birth`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `death`
--
ALTER TABLE `death`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marriage`
--
ALTER TABLE `marriage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `phil`
--
ALTER TABLE `phil`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sss`
--
ALTER TABLE `sss`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `birth`
--
ALTER TABLE `birth`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `death`
--
ALTER TABLE `death`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `marriage`
--
ALTER TABLE `marriage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `phil`
--
ALTER TABLE `phil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sss`
--
ALTER TABLE `sss`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
