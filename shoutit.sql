-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2016 at 04:43 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `shoutit`
--

-- --------------------------------------------------------

--
-- Table structure for table `shouts`
--

CREATE TABLE IF NOT EXISTS `shouts` (
`id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `message` text NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shouts`
--

INSERT INTO `shouts` (`id`, `user`, `message`, `time`) VALUES
(1, 'Jack Sparrow', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.', '11:20:15'),
(2, 'Bhaumik Patel', 'Pellentesque efficitur eu purus vitae dignissim. Integer laoreet consectetur velit, eget lobortis arcu tristique luctus.', '11:21:15'),
(3, 'John', 'Donec interdum eu eros eu semper. Aenean congue, augue sed hendrerit faucibus, enim odio dapibus lectus, ultrices convallis felis ligula ac mauris.', '11:22:15'),
(4, 'Sam', 'Nulla laoreet augue id lacinia mattis. Nulla vitae quam eget sapien ullamcorper dictum. ', '11:23:15'),
(5, 'Agnel', 'Cras accumsan iaculis vulputate. Nam nisl eros, eleifend sit amet tortor vulputate, ultricies suscipit mauris. ', '11:24:15'),
(6, 'Agi', 'asdsadsadsa', '12:25:47'),
(7, 'aji', 'asdsadsadsa', '01:02:46'),
(8, 'sdsds', 'asdsadsadsa', '01:32:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `shouts`
--
ALTER TABLE `shouts`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `shouts`
--
ALTER TABLE `shouts`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
