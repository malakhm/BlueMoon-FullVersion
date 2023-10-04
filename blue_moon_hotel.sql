-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 18, 2023 at 07:12 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blue_moon_hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `account_id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`account_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`account_id`, `username`, `password`) VALUES
(1, 'abdallahbahij', '11597f'),
(2, 'hamwimalak', '11691f'),
(3, 'barakatmahmoud', '11756f');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `login_id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`login_id`),
  KEY `fk10` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`login_id`, `user_id`, `username`, `password`) VALUES
(1, 1, 'mokdadhassan', 'mkdhassan01'),
(2, 2, 'nourkhoury', 'nourkhoury22'),
(3, 3, 'elias_harb', 'harbelias2023'),
(4, 4, 'hala.semaan', 'semaanhala21'),
(5, 5, 'mariaghannam', 'maria_ghannam$'),
(6, 6, 'rabih.najjar', '$rabihnajjar$'),
(7, 7, 'massalkhi_hisham', 'hishamassalkhi99'),
(8, 8, 'omardaw', 'daw.omar1'),
(9, 9, 'lynn.ibrahim', 'lynn.ib20'),
(10, 10, 'ahmadghandour', 'ahmad1976');

-- --------------------------------------------------------

--
-- Table structure for table `mail`
--

DROP TABLE IF EXISTS `mail`;
CREATE TABLE IF NOT EXISTS `mail` (
  `mail_id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`mail_id`),
  KEY `fk7` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `mail`
--

INSERT INTO `mail` (`mail_id`, `user_id`, `full_name`, `email`, `message`) VALUES
(1, 10, 'Ahmad Ghandour', 'ghandour.ahmad@gmail.com', 'Subject: Feedback on My Recent Stay\r\n\r\nDear Blue Moon Hotel Team,\r\n\r\nI wanted to express my sincere appreciation for the wonderful experience I had during my stay at your hotel. The exceptional service, comfortable room, and delightful dining made my trip truly memorable. Thank you for exceeding my expectations.\r\n\r\nBest regards,\r\nAhmad Ghanour'),
(2, 4, 'Hala Semaan', 'hala.semaan@hotmail.com', 'Subject: Important Feedback Regarding My Recent Stay\r\n\r\nDear Blue Moon Hotel Team,\r\n\r\nI\'m writing to provide some feedback about my recent stay at your hotel. While there were certain aspects that exceeded my expectations, there were also areas that left me somewhat disappointed. I believe constructive feedback is valuable for improvement, and I hope my observations can contribute positively to your services.\r\n\r\nBest regards,\r\nHala Semaan'),
(3, 3, 'Elias Harb', 'elias.harb@hotmail.com', 'Subject: Feedback on My Stay at Blue Moon Hotel\r\n\r\nDear Blue Moon Hotel Team,\r\n\r\nI wanted to share my experience during my recent stay. Overall, I appreciated the warm welcome and room cleanliness. However, I did encounter Wi-Fi connectivity issues in my room and noise from nearby construction that affected my sleep. I hope this feedback is helpful for future improvements.\r\n\r\nBest regards,\r\nElias Harb'),
(4, 6, 'Rabih Najjar', 'rabihnajjar65@gmail.com', 'Subject: Wonderful Experience at Blue Moon Hotel\r\n\r\nDear Blue Moon Hotel Team,\r\n\r\nI wanted to extend my gratitude for the fantastic experience I had during my recent stay at your hotel. The spa sessions were incredibly rejuvenating and the well-equipped gym allowed me to maintain my fitness routine. Your commitment to providing exceptional amenities truly made my stay remarkable.\r\n\r\nWarm regards,\r\nRabih Najjar');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE IF NOT EXISTS `news` (
  `news_id` int NOT NULL AUTO_INCREMENT,
  `photo` varchar(250) NOT NULL,
  `title` varchar(250) NOT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`news_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `photo`, `title`, `content`) VALUES
(1, 'blog_1.jpg', 'Relax and Rejuvenate: Complimentary Spa Session with Your Booking!', 'Indulge in a truly serene experience at Blue Moon Hotel. We\'re thrilled to announce that each room booking comes with an exquisite treat—a complimentary spa session that will transport you to a realm of tranquility. Unwind in our luxurious spa facilities and let our expert therapists pamper you. Immerse yourself in pure relaxation after a day of exploration. Your wellness journey starts here at Blue Moon Hotel.'),
(2, 'blog_2.jpg', 'Discover Lebanon\'s Cultural Gems from Blue Moon Hotel', 'Embrace the allure of Lebanon\'s cultural tapestry during your stay at Blue Moon Hotel. Nestled in the heart of this vibrant country, our hotel provides easy access to historical landmarks, bustling markets, and charming villages. Stroll through ancient streets, savor traditional cuisine, and immerse yourself in the warm hospitality of the Lebanese people. Let your journey be guided by the whispers of history and the colors of contemporary life.'),
(3, 'blog_3.jpg', 'Culinary Delights Await at Blue Moon Hotel\'s Restaurant', 'Embark on a culinary escapade right here at Blue Moon Hotel. Our renowned restaurant invites you to savor a delectable fusion of Lebanese flavors and international cuisine. From mouthwatering mezze to succulent grilled dishes, every bite is a journey of taste. Whether you\'re indulging in traditional dishes or exploring innovative creations, our skilled chefs craft culinary masterpieces to tantalize your senses. Join us for a gastronomic experience like no other.');

-- --------------------------------------------------------

--
-- Table structure for table `restaurant`
--

DROP TABLE IF EXISTS `restaurant`;
CREATE TABLE IF NOT EXISTS `restaurant` (
  `restaurant_id` int NOT NULL,
  `type` varchar(30) NOT NULL,
  `phone_number` int NOT NULL,
  `no_tables` int NOT NULL DEFAULT '120',
  PRIMARY KEY (`restaurant_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `restaurant`
--

INSERT INTO `restaurant` (`restaurant_id`, `type`, `phone_number`, `no_tables`) VALUES
(1, 'restaurant', 1220230, 100),
(2, 'bar', 1220230, 20);

-- --------------------------------------------------------

--
-- Table structure for table `restaurant_reservation`
--

DROP TABLE IF EXISTS `restaurant_reservation`;
CREATE TABLE IF NOT EXISTS `restaurant_reservation` (
  `reservation_id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `reservation_name` varchar(30) NOT NULL,
  `number` int NOT NULL,
  `restaurant_id` int NOT NULL,
  `reservation_type` varchar(30) NOT NULL,
  `no_of_guests` int NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `notes` varchar(250) NOT NULL,
  `status` varchar(30) NOT NULL DEFAULT 'pending',
  PRIMARY KEY (`reservation_id`),
  KEY `fk3` (`user_id`),
  KEY `fk4` (`restaurant_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `restaurant_reservation`
--

INSERT INTO `restaurant_reservation` (`reservation_id`, `user_id`, `reservation_name`, `number`, `restaurant_id`, `reservation_type`, `no_of_guests`, `date`, `time`, `notes`, `status`) VALUES
(1, 5, 'Maria Ghannam', 81276075, 1, 'restaurant', 6, '2023-08-22', '16:00:00', '', 'pending'),
(2, 3, 'Elias Harb', 71294870, 2, 'bar', 2, '2023-08-24', '21:00:00', '', 'pending'),
(3, 2, 'Nour Khoury', 70122874, 1, 'restaurant', 4, '2023-09-01', '18:30:00', '', 'pending'),
(4, 8, 'Omar Daw', 81566290, 2, 'bar', 1, '2023-09-03', '20:00:00', '', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

DROP TABLE IF EXISTS `rooms`;
CREATE TABLE IF NOT EXISTS `rooms` (
  `room_id` int NOT NULL AUTO_INCREMENT,
  `type` varchar(30) NOT NULL,
  `capacity` int NOT NULL,
  `size` int NOT NULL,
  `price` int NOT NULL,
  PRIMARY KEY (`room_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`room_id`, `type`, `capacity`, `size`, `price`) VALUES
(1, 'cityscape', 3, 32, 150),
(2, 'cityscapefamily', 6, 72, 250),
(3, 'coastaldeluxe', 3, 35, 250),
(4, 'classiccourtyard', 3, 47, 350),
(5, 'royalsuite', 4, 72, 500);

-- --------------------------------------------------------

--
-- Table structure for table `room_reservation`
--

DROP TABLE IF EXISTS `room_reservation`;
CREATE TABLE IF NOT EXISTS `room_reservation` (
  `booking_id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `full_name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `number` int NOT NULL,
  `room_id` int NOT NULL,
  `room_type` varchar(30) NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL,
  `no_of_guests` int NOT NULL,
  `notes` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `status` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'pending',
  PRIMARY KEY (`booking_id`),
  KEY `fk5` (`user_id`),
  KEY `room_id` (`room_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `room_reservation`
--

INSERT INTO `room_reservation` (`booking_id`, `user_id`, `full_name`, `email`, `number`, `room_id`, `room_type`, `checkin`, `checkout`, `no_of_guests`, `notes`, `status`) VALUES
(2, 1, 'Hassan Mokdad', 'hassanmokdad@gmail.com', 81961985, 3, 'coastaldeluxe', '2023-08-23', '2023-08-26', 1, NULL, 'pending'),
(3, 7, 'Hisham Massalkhi', 'hisham.massalkhi@hotmail.com', 76906910, 2, 'cityscapefamily', '2023-08-30', '2023-09-06', 5, NULL, 'pending'),
(4, 9, 'Lynn Ibrahim', 'lynnibrahim@gmail.com', 71342997, 4, 'classiccourtyard', '2023-08-28', '2023-09-28', 2, NULL, 'pending'),
(5, 6, 'Rabih Najjar', 'rabihnajjar65@gmail.com', 76675965, 5, 'royalsuite', '2023-08-30', '2023-09-04', 2, NULL, 'pending'),
(6, 10, 'Ahmad Ghandour', 'ghandour.ahmad@gmail.com', 71989222, 1, 'cityscape', '2023-09-13', '2023-09-24', 3, NULL, 'pending'),
(7, 4, 'Hala Semaan', 'hala.semaan@hotmail.com', 76099486, 1, 'cityscape', '2023-09-11', '2023-09-29', 3, NULL, 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int NOT NULL AUTO_INCREMENT,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `number` int NOT NULL,
  `address` varchar(250) NOT NULL,
  `email` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `booking_count` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `gender`, `dob`, `number`, `address`, `email`, `username`, `password`, `booking_count`) VALUES
(1, 'Hassan', 'Mokdad', 'male', '1968-03-01', 81961985, 'Sour-Sour city', 'hassanmokdad@gmail.com', 'mokdadhassan', 'mkdhassan01', 1),
(2, 'Nour', 'Khoury', 'female', '1965-07-15', 70122874, 'Beirut-Verdun', 'nour.khoury@gmail.com', 'nourkhoury', 'nourkhoury22', 4),
(3, 'Elias', 'Harb', 'male', '1985-04-22', 71294870, 'Aley-Bhamdoun', 'elias.harb@hotmail.com', 'elias_harb', 'harbelias2023', 0),
(4, 'Hala', 'Semaan', 'female', '1993-10-17', 76099486, 'Baabda-Hazmieh', 'hala.semaan@hotmail.com', 'hala.semaan', 'semaanhala21', 1),
(5, 'Maria', 'Ghannam', 'female', '1989-08-13', 81276075, 'Nabatieh-Mayfadoun', 'mariaghannam@gmail.com', 'mariaghannam', 'maria_ghannam$', 0),
(6, 'Rabih', 'Najjar', 'male', '1983-05-02', 76675965, 'Tripoli-Sahat Al Nour', 'rabihnajjar65@gmail.com', 'rabih.najjar', '$rabihnajjar$', 1),
(7, 'Hisham', 'Massalkhi', 'male', '1962-04-15', 76906910, 'Metn-Antelias', 'hisham.massalkhi@hotmail.com', 'massalkhi_hisham', 'hishamassalkhi99', 1),
(8, 'Omar', 'Daw', 'male', '1967-08-12', 81566290, 'Beirut-Hamra', 'omar.daw@gmail.com', 'omardaw', 'daw.omar1', 0),
(9, 'Lynn', 'Ibrahim', 'female', '1998-11-09', 71342997, 'Jbeil-Byblos', 'lynnibrahim@gmail.com', 'lynn.ibrahim', 'lynn.ib20', 1),
(10, 'Ahmad', 'Ghandour', 'male', '1976-10-03', 71989222, 'Beirut-Badaro', 'ghandour.ahmad@gmail.com', 'ahmadghandour', 'ahmad1976', 0);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `fk10` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mail`
--
ALTER TABLE `mail`
  ADD CONSTRAINT `fk7` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `restaurant_reservation`
--
ALTER TABLE `restaurant_reservation`
  ADD CONSTRAINT `fk3` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk4` FOREIGN KEY (`restaurant_id`) REFERENCES `restaurant` (`restaurant_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `room_reservation`
--
ALTER TABLE `room_reservation`
  ADD CONSTRAINT `fk5` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `room_reservation_ibfk_1` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`room_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
