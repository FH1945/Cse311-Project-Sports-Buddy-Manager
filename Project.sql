-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2020 at 04:03 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tempproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `available_game`
--

CREATE TABLE `available_game` (
  `game` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `available_game`
--

INSERT INTO `available_game` (`game`) VALUES
('BADMINTON'),
('BASKETBALL'),
('BILLIARD'),
('CAROM'),
('CHESS'),
('CRICKET'),
('FOOTBALL'),
('TABLE TENNIS');

-- --------------------------------------------------------

--
-- Table structure for table `available_timeslot`
--

CREATE TABLE `available_timeslot` (
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `available_timeslot`
--

INSERT INTO `available_timeslot` (`date`, `time`) VALUES
('2020-05-02', '09:00:00'),
('2020-05-02', '10:00:00'),
('2020-05-02', '11:00:00'),
('2020-05-02', '12:00:00'),
('2020-05-02', '13:00:00'),
('2020-05-02', '14:00:00'),
('2020-05-02', '15:00:00'),
('2020-05-02', '16:00:00'),
('2020-05-03', '09:00:00'),
('2020-05-03', '10:00:00'),
('2020-05-03', '11:00:00'),
('2020-05-03', '12:00:00'),
('2020-05-03', '13:00:00'),
('2020-05-03', '14:00:00'),
('2020-05-03', '15:00:00'),
('2020-05-03', '16:00:00'),
('2020-05-04', '09:00:00'),
('2020-05-04', '10:00:00'),
('2020-05-04', '11:00:00'),
('2020-05-04', '12:00:00'),
('2020-05-04', '13:00:00'),
('2020-05-04', '14:00:00'),
('2020-05-04', '15:00:00'),
('2020-05-04', '16:00:00'),
('2020-05-05', '10:00:00'),
('2020-05-05', '11:00:00'),
('2020-05-05', '12:00:00'),
('2020-05-05', '13:00:00'),
('2020-05-05', '14:00:00'),
('2020-05-05', '15:00:00'),
('2020-05-05', '16:00:00'),
('2020-05-06', '09:00:00'),
('2020-05-06', '10:00:00'),
('2020-05-06', '11:00:00'),
('2020-05-06', '12:00:00'),
('2020-05-06', '13:00:00'),
('2020-05-06', '14:00:00'),
('2020-05-06', '15:00:00'),
('2020-05-06', '16:00:00'),
('2020-05-07', '09:00:00'),
('2020-05-07', '10:00:00'),
('2020-05-07', '11:00:00'),
('2020-05-07', '12:00:00'),
('2020-05-07', '13:00:00'),
('2020-05-07', '14:00:00'),
('2020-05-07', '15:00:00'),
('2020-05-07', '16:00:00'),
('2020-05-08', '09:00:00'),
('2020-05-08', '10:00:00'),
('2020-05-08', '11:00:00'),
('2020-05-08', '12:00:00'),
('2020-05-08', '13:00:00'),
('2020-05-08', '14:00:00'),
('2020-05-08', '15:00:00'),
('2020-05-08', '16:00:00'),
('2020-05-09', '09:00:00'),
('2020-05-09', '10:00:00'),
('2020-05-09', '11:00:00'),
('2020-05-09', '12:00:00'),
('2020-05-09', '13:00:00'),
('2020-05-09', '14:00:00'),
('2020-05-09', '15:00:00'),
('2020-05-09', '16:00:00'),
('2020-05-10', '09:00:00'),
('2020-05-10', '10:00:00'),
('2020-05-10', '11:00:00'),
('2020-05-10', '12:00:00'),
('2020-05-10', '13:00:00'),
('2020-05-10', '14:00:00'),
('2020-05-10', '15:00:00'),
('2020-05-10', '16:00:00'),
('2020-05-11', '09:00:00'),
('2020-05-11', '10:00:00'),
('2020-05-11', '11:00:00'),
('2020-05-11', '12:00:00'),
('2020-05-11', '13:00:00'),
('2020-05-11', '14:00:00'),
('2020-05-11', '15:00:00'),
('2020-05-11', '16:00:00'),
('2020-05-12', '09:00:00'),
('2020-05-12', '10:00:00'),
('2020-05-12', '11:00:00'),
('2020-05-12', '12:00:00'),
('2020-05-12', '13:00:00'),
('2020-05-12', '14:00:00'),
('2020-05-12', '15:00:00'),
('2020-05-12', '16:00:00'),
('2020-05-13', '09:00:00'),
('2020-05-13', '10:00:00'),
('2020-05-13', '11:00:00'),
('2020-05-13', '12:00:00'),
('2020-05-13', '13:00:00'),
('2020-05-13', '14:00:00'),
('2020-05-13', '15:00:00'),
('2020-05-13', '16:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `date`
--

CREATE TABLE `date` (
  `available_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `date`
--

INSERT INTO `date` (`available_date`) VALUES
('2020-05-02'),
('2020-05-03'),
('2020-05-04'),
('2020-05-05'),
('2020-05-06'),
('2020-05-07'),
('2020-05-08'),
('2020-05-09'),
('2020-05-10'),
('2020-05-11'),
('2020-05-12'),
('2020-05-13'),
('2020-05-14'),
('2020-05-15'),
('2020-05-16'),
('2020-05-17'),
('2020-05-18'),
('2020-05-19'),
('2020-05-20'),
('2020-05-21'),
('2020-05-22'),
('2020-05-23'),
('2020-05-24'),
('2020-05-25'),
('2020-05-26'),
('2020-05-27');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `user_id` int(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`user_id`, `password`) VALUES
(1821926042, 'nsuer'),
(1821926, 'szl'),
(181654321, 'kalamanus'),
(1722359640, '123'),
(1414, '12'),
(170077, '123'),
(1812046642, 'ass'),
(1844046042, 'lamia'),
(1236, 'ufff');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `message_id` int(11) NOT NULL,
  `From_user` int(100) NOT NULL,
  `To_user` int(100) NOT NULL,
  `message` text NOT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `status_of` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`message_id`, `From_user`, `To_user`, `message`, `time_stamp`, `status_of`) VALUES
(1, 1236, 1821926, 'Hi sabbir! \r\nuff', '2020-05-18 08:20:47', 1),
(2, 1821926, 1236, 'hi sexy!!', '2020-05-18 09:22:28', 1);

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `req_from` int(100) DEFAULT NULL,
  `req_to` int(100) DEFAULT NULL,
  `status` varchar(15) DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`req_from`, `req_to`, `status`) VALUES
(1844046042, 1821926042, 'accepted'),
(1823046042, 182146042, 'pending'),
(1821146042, 1822116042, 'pending'),
(1844046042, 1812046642, 'pending'),
(1821926042, 1822116042, 'rejected'),
(1844046042, 1821926042, 'accepted'),
(1821926, 1821926042, 'accepted'),
(170077, 1812046642, 'accepted'),
(1821926, 1821926042, 'accepted'),
(1821926, 1812046642, 'pending'),
(1821926, 1812046642, 'pending'),
(1236, 1821926, 'accepted'),
(1236, 1821926, 'accepted'),
(1821926, 1236, 'accepted');

-- --------------------------------------------------------

--
-- Table structure for table `selected_timeslot`
--

CREATE TABLE `selected_timeslot` (
  `user_id` int(100) NOT NULL,
  `s_date` date NOT NULL,
  `s_time` time NOT NULL,
  `s_game` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `selected_timeslot`
--

INSERT INTO `selected_timeslot` (`user_id`, `s_date`, `s_time`, `s_game`) VALUES
(1821926, '2020-05-11', '10:00:00', 'BASKETBALL'),
(1821926, '2020-05-13', '11:00:00', 'FOOTBALL'),
(1821926, '2020-05-12', '15:00:00', 'CHESS'),
(1236, '2020-05-11', '10:00:00', 'BADMINTON'),
(1236, '2020-05-11', '11:00:00', 'BADMINTON'),
(1236, '2020-05-11', '12:00:00', 'BADMINTON');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `interested_game` varchar(100) NOT NULL,
  `team_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`interested_game`, `team_id`) VALUES
('hocky', 1),
('cricket', 2),
('badminton', 3),
('football', 4),
('carrom', 5);

-- --------------------------------------------------------

--
-- Table structure for table `team_player`
--

CREATE TABLE `team_player` (
  `id` int(100) NOT NULL,
  `team_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team_player`
--

INSERT INTO `team_player` (`id`, `team_id`) VALUES
(1821926042, 1),
(1823046042, 1),
(1823446042, 1),
(1821926042, 2),
(1814046042, 2),
(1821146042, 2),
(1822116042, 3),
(182146042, 4),
(1844046042, 4),
(1843046042, 5),
(1866046042, 5);

-- --------------------------------------------------------

--
-- Table structure for table `time`
--

CREATE TABLE `time` (
  `available_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `time`
--

INSERT INTO `time` (`available_time`) VALUES
('09:00:00'),
('10:00:00'),
('11:00:00'),
('12:00:00'),
('13:00:00'),
('14:00:00'),
('15:00:00'),
('16:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(100) NOT NULL,
  `nsuid` int(100) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `gender` varchar(15) DEFAULT NULL,
  `Department` varchar(10) DEFAULT NULL,
  `Semester` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `nsuid`, `email`, `gender`, `Department`, `Semester`) VALUES
('nushrat pathan mim', 1236, 'mim@gmail.com', 'female', 'ECE', '181'),
('hasan rayhan rabbi', 1414, 'kak@gmail.com', 'Male', 'ENG', '192'),
('122222', 22222, 'a@gmail.com', 'Male', 'BBA', '1st'),
('qwe', 123456, 'a@gmail.com', 'Male', 'BBA', '2nd'),
('forte night', 170077, 'a@gmail.com', 'Male', 'ENG', '201'),
('122222', 222223, 'a@gmail.com', 'Male', 'BBA', '1st'),
('Sabbir Ahmed Sozol', 1821926, 'sabbirsozol@gmail.com', 'Male', 'ECE', '182'),
('122222', 2222233, 'a@gmail.com', 'Male', 'BBA', '1st'),
('sahariar kabir', 111760000, 'a@gmail.com', 'Male', 'BBA', '11th'),
('rakin saifullah', 181654321, 'rakin@gmail.com', 'Male', 'ECE', '181'),
('Shariar khan KM', 182146042, 'shariar.khan@gmail.com', 'male', 'CSE', 'Spring-202'),
('afraridoy', 1722359640, 'a@gmail.com', 'Female', 'ECE', '5th'),
('Hasibur Rahman Ridoy', 1812046642, 'hrr.aro@gmail.com', 'Camel', 'CSE', 'Spring-202'),
('nayeem far', 1814046042, 'nayeem.fr@gmail.com', 'female', 'CSE', 'Spring-202'),
('nazmul', 1821146042, 'naz.mul@gmail.com', 'male', 'ARCHI', 'Spring-202'),
('Sabbir sozol', 1821926042, 'sabir.szl@gmail.com', 'Ashol purush', 'CSE', 'Spring-202'),
('Sanjana nazia hossain', 1822116042, 'sanjana.nazia@gmail.com', 'ashol purush', 'CSE', 'Spring-202'),
('Zul-ikram ', 1823046042, 'zul.ikr@gmail.com', 'male', 'CSE', 'Spring-202'),
('Zul-ikram khan', 1823446042, 'zul.ir@gmail.com', 'male', 'CSE', 'Spring-202'),
('abul kasem', 1843046042, 'abul.kas@gmail.com', 'male', 'CSE', 'Spring-202'),
('lamia', 1844046042, 'la.mia@gmail.com', 'female', 'ENV', 'Spring-201'),
('oisharjo', 1853046042, 'oisa.jo@gmail.com', 'female', 'LAW', 'Spring-202'),
('sadia', 1855046042, 'sa.dia@gmail.com', 'female', 'BBA', 'Spring-202'),
('atika', 1866046042, 'ati.ka@gmail.com', 'female', 'SBE', 'Spring-201');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `available_game`
--
ALTER TABLE `available_game`
  ADD PRIMARY KEY (`game`);

--
-- Indexes for table `available_timeslot`
--
ALTER TABLE `available_timeslot`
  ADD PRIMARY KEY (`date`,`time`),
  ADD KEY `ts_time` (`time`);

--
-- Indexes for table `date`
--
ALTER TABLE `date`
  ADD PRIMARY KEY (`available_date`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`message_id`),
  ADD KEY `From_user` (`From_user`),
  ADD KEY `To_user` (`To_user`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD KEY `request_From_id` (`req_from`),
  ADD KEY `request_Reciever_id` (`req_to`);

--
-- Indexes for table `selected_timeslot`
--
ALTER TABLE `selected_timeslot`
  ADD KEY `slots_user_index` (`user_id`),
  ADD KEY `slots_s_date` (`s_date`),
  ADD KEY `slots_s_time` (`s_time`),
  ADD KEY `selected_timeslot_ibfk_4` (`s_game`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`team_id`);

--
-- Indexes for table `team_player`
--
ALTER TABLE `team_player`
  ADD KEY `id` (`id`),
  ADD KEY `group_id` (`team_id`);

--
-- Indexes for table `time`
--
ALTER TABLE `time`
  ADD PRIMARY KEY (`available_time`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`nsuid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `team_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `available_timeslot`
--
ALTER TABLE `available_timeslot`
  ADD CONSTRAINT `ts_date` FOREIGN KEY (`date`) REFERENCES `date` (`available_date`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ts_time` FOREIGN KEY (`time`) REFERENCES `time` (`available_time`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `login_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`nsuid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `message_ibfk_1` FOREIGN KEY (`From_user`) REFERENCES `user` (`nsuid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `message_ibfk_2` FOREIGN KEY (`To_user`) REFERENCES `user` (`nsuid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `request`
--
ALTER TABLE `request`
  ADD CONSTRAINT `request_From_id` FOREIGN KEY (`req_from`) REFERENCES `user` (`nsuid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `request_Reciever_id` FOREIGN KEY (`req_to`) REFERENCES `user` (`nsuid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `selected_timeslot`
--
ALTER TABLE `selected_timeslot`
  ADD CONSTRAINT `selected_timeslot_ibfk_2` FOREIGN KEY (`s_time`) REFERENCES `available_timeslot` (`time`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `selected_timeslot_ibfk_3` FOREIGN KEY (`s_date`) REFERENCES `available_timeslot` (`date`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `selected_timeslot_ibfk_4` FOREIGN KEY (`s_game`) REFERENCES `available_game` (`game`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `slots_user_index` FOREIGN KEY (`user_id`) REFERENCES `user` (`nsuid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `team_player`
--
ALTER TABLE `team_player`
  ADD CONSTRAINT `team_player_ibfk_1` FOREIGN KEY (`id`) REFERENCES `user` (`nsuid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `team_player_ibfk_2` FOREIGN KEY (`team_id`) REFERENCES `team` (`team_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
