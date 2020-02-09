-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2020 at 10:29 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `placementdrive`
--

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `Id` int(100) NOT NULL,
  `Question` text NOT NULL,
  `Option1` text NOT NULL,
  `Option2` text NOT NULL,
  `Option3` text NOT NULL,
  `Option4` text NOT NULL,
  `Answer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`Id`, `Question`, `Option1`, `Option2`, `Option3`, `Option4`, `Answer`) VALUES
(1, '1. A can do a piece of work in 4 hours; B and C together can do it in 3 hours, while A and C together can do it in 2 hours. How long will B alone take to do it?', '8 hours\r\n', '10 hours', '12 hours', '24 hours', '10 hours'),
(2, '2. In how many ways a committee, consisting of 5 men and 6 women can be formed from 8 men and 10 women?', '266', '5040', '	\r\n11760', '86400', '11760'),
(3, '3. If the sum of two numbers is 55 and the H.C.F. and L.C.M. of these numbers are 5 and 120 respectively, then the sum of the reciprocals of the numbers is equal to:', '55/601', '601/55', '11/120', '120/11', '11/120'),
(4, '4. A cistern of capacity 8000 litres measures externally 3.3 m by 2.6 m by 1.1 m and its walls are 5 cm thick. The thickness of the bottom is:', '90 cm', '1 dm', '1 m', '1.1 cm', '1 dm'),
(5, '5. A alone can do a piece of work in 6 days and B alone in 8 days. A and B undertook to do it for Rs. 3200. With the help of C, they completed the work in 3 days. How much is to be paid to C?', 'Rs. 375', 'Rs. 400', 'Rs. 600', 'Rs. 800', 'Rs. 400'),
(6, '6. A can finish a work in 24 days, B in 9 days and C in 12 days. B and C start the work but are forced to leave after 3 days. The remaining work was done by A in:', '5 days', '6 days', '10 days', '10 1/2 days', '10 days'),
(7, '7. Three candidates contested an election and received 1136, 7636 and 11628 votes respectively. What percentage of the total votes did the winning candidate get?', '57%', '60%', '65%', '90%', '57%'),
(8, '8. <br>S1:	In the middle of one side of the square sits the Chairman of the committee, the most important person in the room.<br>\r\nP :	For a committee is not just a mere collection of individuals.<br>\r\nQ :	On him rests much of the responsibility for the success or failure of the committee.<br>\r\nR :	While this is happening we have an opportunity to get the \'feel\' of this committe.<br>\r\nS :	As the meeting opens, he runs briskly through a number of formalities.<br>\r\nS6:	From the moment its members meet, it begins to have a sort nebulous life of its own.\r\nThe Proper sequence should be:', 'RSQP', 'PQRS', 'SQPR', 'QSRP', 'QSRP'),
(9, 'In the following the questions choose the word which best expresses the meaning of the given word\r\n<br>\r\n9. CORPULENT', 'Lean', 'Gaunt', 'Emaciated', 'Obese', 'Obese'),
(10, '10. EMBEZZLE', 'Misappropriate', 'Balance', 'Remunerate', 'Clear', 'Misappropriate'),
(11, '11. Read each sentence to find out whether there is any grammatical error in it. The error, if any will be in one part of the sentence. The letter of that part is the answer. If there is no error, the answer is \'D\'. (Ignore the errors of punctuation, if any).', 'We discussed about the problem so thoroughly', 'on the eve of the examination', 'that I found it very easy to work it out.', 'No error', 'We discussed about the problem so thoroughly'),
(12, '12. Look at this series: 8, 6, 9, 23, 87 , ... What number should come next?', '128', '226', '324', '429', '429'),
(13, '13. The banker\'s gain on a bill due 1 year hence at 12% per annum is Rs. 6. The true discount is', 'Rs. 72\r\n', 'Rs. 36\r\n', 'Rs. 54', 'Rs. 50\r\n', 'Rs. 50\r\n'),
(14, '14. Numismatist : Coins\r\n\r\n', 'Jeweller : Jewels', 'Cartographer : Maps', 'Philatelist : Stamps', 'Geneticist : Chromosomes', 'Philatelist : Stamps'),
(15, '15. A person\'s present age is two-fifth of the age of his mother. After 8 years, he will be one-half of the age of his mother. How old is the mother at present?', '32 years', '36 years', '40 years', '48 years', '40 years'),
(16, '16. Two pipes A and B can fill a cistern in 37 minutes and 45 minutes respectively. Both pipes are opened. The cistern will be filled in just half an hour, if the B is turned off after:', '5 min', '9 min', '10 min', '15 min', '9 min'),
(17, '17. 8 litres are drawn from a cask full of wine and is then filled with water. This operation is performed three more times. The ratio of the quantity of wine now left in cask to that of water is 16 : 65. How much wine did the cask hold originally?', '18 litres', '24 litres', '32 litres', '42 litres', '24 litres'),
(18, '18. How many times are the hands of a clock at right angle in a day?', '22', '24', '44', '48', '44'),
(19, '19. If the true discount on s sum due 2 years hence at 14% per annum be Rs. 168, the sum due is:', 'Rs. 768', 'Rs. 968', 'Rs. 1960', 'Rs. 2400', 'Rs. 768'),
(20, '20. A trader mixes 26 kg of rice at Rs. 20 per kg with 30 kg of rice of other variety at Rs. 36 per kg and sells the mixture at Rs. 30 per kg. His profit percent is:', 'No profit, no loss', '5%', '8%', '10%', '5%');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Id` int(100) NOT NULL,
  `Email` text NOT NULL,
  `Correct` int(100) NOT NULL,
  `Wrong` int(100) NOT NULL,
  `Points` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Id`, `Email`, `Correct`, `Wrong`, `Points`) VALUES
(48, 'sdfv@mh.hjh', 10, 20, 40),
(49, 'sdf@gf.ghg', 30, 20, 120),
(50, 'df@df.dfs', 0, 20, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
