-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2023 at 04:35 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `register`
--

-- --------------------------------------------------------

--
-- Table structure for table `crop`
--

CREATE TABLE `crop` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `cropid` int(255) NOT NULL,
  `season` varchar(255) NOT NULL,
  `price` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `crop`
--

INSERT INTO `crop` (`id`, `name`, `type`, `cropid`, `season`, `price`) VALUES
(1, 'Wheat', 'Cereal', 1001, 'Winter', 0),
(2, 'Wheat', 'Cereal', 1011, 'Winter', 0),
(3, 'Rice', 'Cereal', 1002, 'Winter', 0),
(4, 'Rice', 'Cereal', 1003, 'Winter', 100),
(5, 'Jasmine', 'Ornamental', 1004, 'All', 50),
(6, 'Marigold', 'Ornamental', 1005, 'Spring', 40),
(7, 'Cotton', 'Kharif', 1006, 'All', 80);

-- --------------------------------------------------------

--
-- Table structure for table `custlogin`
--

CREATE TABLE `custlogin` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cpassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `custlogin`
--

INSERT INTO `custlogin` (`id`, `name`, `password`, `cpassword`) VALUES
(1, 'Jessica', '', ''),
(2, 'Ansilla', 'abc', 'abc'),
(3, 'Serena', '123', '123'),
(4, 'Hansie', '$2y$10$ihxA9A4jpY4cqrZVCXWU2OcD1YWsAduwV9SioMnxUUrzsQv7oJJIW', '$2y$10$m9GWyJ9gRS5/JSR9ZkS.B.2V4kaMTGOLAYX2eA1Kj4kzuOUjb7THi');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `employeeid` int(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `name`, `employeeid`, `mobile`, `email`) VALUES
(1, 'Jessica', 100, '7019978723', 'jessiferns@gmail.com'),
(2, 'Ansilla', 101, '7530842234', 'ansillapais@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `fertilizer`
--

CREATE TABLE `fertilizer` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `fid` int(255) NOT NULL,
  `expdate` date NOT NULL,
  `type` varchar(255) NOT NULL,
  `fprice` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `fertilizer`
--

INSERT INTO `fertilizer` (`id`, `name`, `fid`, `expdate`, `type`, `fprice`) VALUES
(1, 'Gobra', 9, '2023-03-31', 'Organic', 0),
(2, 'Worm castings', 10, '2023-03-31', 'Organic', 0),
(3, 'Cow manure', 11, '2023-04-21', 'Organic', 0);

-- --------------------------------------------------------

--
-- Table structure for table `ftransaction`
--

CREATE TABLE `ftransaction` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `fid` int(255) NOT NULL,
  `tid` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `ftransaction`
--

INSERT INTO `ftransaction` (`id`, `name`, `fid`, `tid`) VALUES
(1, 'Hansie', 9, 12345),
(2, 'Hansie', 12, 1234);

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `cropid` int(255) NOT NULL,
  `tid` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`id`, `name`, `cropid`, `tid`) VALUES
(1, 'Serena', 1002, 1234),
(2, 'Shri', 1002, 12345),
(3, 'Shri', 1002, 1234),
(4, 'Shri', 1002, 1234),
(5, 'Hansie', 1002, 1234),
(6, 'Jessica', 1011, 1234),
(7, 'jess', 1002, 12345),
(8, 'diya', 1002, 1234),
(9, 'Hansie', 1002, 1234),
(10, 'Hansie', 1002, 1234),
(11, 'Hansie', 1002, 1234),
(12, 'Hansie', 1004, 12345),
(13, 'Hansie', 1004, 12345);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cpassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `cpassword`) VALUES
(1, 'jessica', '$2y$10$kpnJbssmXZ2NILCigYajI.BOHcmDZXF04Aukoogo.KjeNU8FPoF.K', '$2y$10$V9HE7V.UPKoi9nPqdGesc.a21f.dvBwJE5qqciZMsKgacqEOfG1O2'),
(2, 'Ansilla', '$2y$10$AuXxLWZR68BXF5.4sjvztOB4ZMY/Ec39.uxseN0Bp3FZFV/DLQkmi', '$2y$10$BHltmv.xQ/2QPKfT85QtbujKpYG6qg.MRFtXVtX.Vxtv2C3aLW4wi'),
(9, 'Serena', '$2y$10$zh7yacCoDwVH2DD/wSsQC.24MvWMg7EqkTW.PWT.lfiTnaeLkmJUW', '$2y$10$rWrkWcnniwGM0SOpaKXPvOP.ea4/7wl4344VkD8F3IAs7deDIBkVS'),
(10, 'Supritha', '$2y$10$/wIwqf36SaxNLx8s2bDk1unMe.2snCR1P6XmkR00Z/Mwq/If18rMW', '$2y$10$0yzy3cIdaZJWEg5X8KFf4e.VwOnD6TR7RG2CzMTNd4Re6P5NC9dsS'),
(11, 'Shri', '$2y$10$5j1YDDQTe5fX74m2Gu3o6OOdyL3kwB52XklwxB3s63JqJmGUKK5Tm', '$2y$10$GXEmRUD5X.xj1ZkBuE1./eSChhC3PAUCA/gEW7DWwE/jDeSLpJrS6'),
(12, 'Poojitha', '$2y$10$Q5ZcuDbqgyrQuNDHxOq15OZvM2eRIeGuSXev/6bOX61jtucuBhT0O', '$2y$10$o1CHvCvsu0Mpe2nEqFxFHuwc5tHW3.ZUiYS7XxmZzuX0lVb9FAkcq'),
(13, 'Clif', '$2y$10$lJZiydWZrKUcCU30.n53eu0UOYHqKOhSAtlT7ZhoGLK8wQdOixTri', '$2y$10$An6tStxt0lLk.NtHJRs4RuxLKz87S2AeNYqqQFWts8wzDE.T7xeYu'),
(14, 'lasya', '$2y$10$c5CCMmlixkMzWvg42BoG2udvxiiFdOP3WFVM0inN8iNTBSb2UHDi6', '$2y$10$jg6Pncywy1RxkMUnKjKDMu4NQxSgm5TsrvnZLLtRoAtfZvTb6KWJ6'),
(15, 'himani', '$2y$10$r8/eg6cRr9dg9fuxJ5TwHe90rgEmFYvGimqosTCKNG2Kik2NaO6K6', '$2y$10$tTM/fyVCjWovqNtDqconGuYI8HRdSx7Z52KhtuN7aMAluBPDpIZwK'),
(16, 'Alreya', '$2y$10$3drzKHczzHQFklMJFeQd0uQ015vp9PH1TuygJggnJ.f1a.kPU.3Cu', '$2y$10$d3WzPh0xwUA4w.sVz2U2..acGRgZCq2r6T0aQZpRcwZFYDGArCa6a'),
(17, 'Deone', 'abc', 'abc'),
(18, 'Diya', '$2y$10$oIzkaRvbi82dmBikHdIHzutYPkJHjHUCW.WBneFHGRPkkwwwa//RO', '$2y$10$8As9oGUDB.bTp17/M8FTJusKBt6oQmDiB4wDArKFNrR6axAziNIEC');

--
-- Triggers `user`
--
DELIMITER $$
CREATE TRIGGER `datainserttrigger` AFTER INSERT ON `user` FOR EACH ROW insert into userlogs values(null,username,NOW())
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `userlogs`
--

CREATE TABLE `userlogs` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `timestamp` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `userlogs`
--

INSERT INTO `userlogs` (`id`, `username`, `timestamp`) VALUES
(1, '', '2023-01-18'),
(2, '', '2023-01-18');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `userid` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `userid`, `email`, `contact`) VALUES
(1, '', 11, 'jessiferns@gmail.com', '7019978723'),
(2, 'Ansilla', 12, 'ansillapais@gmail.com', '9164925704'),
(3, 'Jessica', 13, 'jess@gmail.com', '123890754'),
(4, 'Serena', 14, 'sers@gmail.com', '7923234667'),
(5, 'Diya', 16, 'sers@gmail.com', '9000999009');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `crop`
--
ALTER TABLE `crop`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `custlogin`
--
ALTER TABLE `custlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fertilizer`
--
ALTER TABLE `fertilizer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ftransaction`
--
ALTER TABLE `ftransaction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userlogs`
--
ALTER TABLE `userlogs`
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
-- AUTO_INCREMENT for table `crop`
--
ALTER TABLE `crop`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `custlogin`
--
ALTER TABLE `custlogin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `fertilizer`
--
ALTER TABLE `fertilizer`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ftransaction`
--
ALTER TABLE `ftransaction`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `userlogs`
--
ALTER TABLE `userlogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
