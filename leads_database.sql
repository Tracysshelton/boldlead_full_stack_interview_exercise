--
-- Database: `leads`
--

CREATE DATABASE `leads`;

--
-- Table structure for table `newleads`
--

CREATE TABLE `newleads` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `fname` varchar(255),
  `lname` varchar(255),
  `email` varchar(255),
  `phone_number` int(10),
  `address` varchar(255),
  `city` varchar(255),
  `state` varchar(30),
  `zip` int(9),
  `home_sqft` int(11),
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;