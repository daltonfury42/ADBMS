-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 07, 2018 at 11:03 PM
-- Server version: 5.7.21-0ubuntu0.16.04.1
-- PHP Version: 7.0.25-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `SJET`
--

-- --------------------------------------------------------

--
-- Table structure for table `ADMIN`
--

CREATE TABLE `ADMIN` (
  `admin_id` varchar(20) NOT NULL,
  `password` varchar(60) NOT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ADMIN`
--

INSERT INTO `ADMIN` (`admin_id`, `password`, `email`) VALUES
('sjet', '$2y$10$KCxCYpiXhsns/Zzrhabg6.QDUM56eTimLtrDf0K.uptUcUFW9vuoq', 'webmaster@nitc.ac.in'),
('root', 'root', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `APPLICATION`
--

CREATE TABLE `APPLICATION` (
  `ready` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `APPLICATION`
--

INSERT INTO `APPLICATION` (`ready`) VALUES
(1);

-- --------------------------------------------------------

--
-- Table structure for table `APPLICATION_STATUS`
--

CREATE TABLE `APPLICATION_STATUS` (
  `app_id` int(11) NOT NULL,
  `RollNo` varchar(10) NOT NULL,
  `Scholarship` varchar(200) NOT NULL,
  `Status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `APPLICATION_STATUS`
--

INSERT INTO `APPLICATION_STATUS` (`app_id`, `RollNo`, `Scholarship`, `Status`) VALUES
(6, 'B140425CS', 'CREC Silver Jubilee Endowment Trust (SJET) Scholarships', 'approved'),
(8, 'B140004CS', 'CREC Silver Jubilee Endowment Trust (SJET) Scholarships', 'rejected'),
(9, 'b140425cs', 'CREC Silver Jubilee Endowment Trust (SJET) Scholarships', 'pending'),
(10, '', '', 'rejected'),
(11, 'b140425cs', 'CREC Silver Jubilee Endowment Trust (SJET) Scholarships', 'pending'),
(12, 'b140425cs', 'CREC Silver Jubilee Endowment Trust (SJET) Scholarships', 'pending'),
(13, 'b140425cs', 'CREC Silver Jubilee Endowment Trust (SJET) Scholarships', 'pending'),
(14, 'b140425cs', 'CREC Silver Jubilee Endowment Trust (SJET) Scholarships', 'approved'),
(15, '', '', 'pending'),
(16, 'b140425cs', 'CREC Silver Jubilee Endowment Trust (SJET) Scholarships', 'pending'),
(17, '', '', 'pending'),
(18, 'b140425cs', 'CREC Silver Jubilee Endowment Trust (SJET) Scholarships', 'pending'),
(19, '', '', 'pending'),
(20, '', '', 'pending'),
(21, 'b140425cs', 's7', 'approved'),
(22, 'b140425cs', 's7', 'pending'),
(23, '', '', 'pending'),
(24, '', '', 'pending'),
(25, 'b140425cs', 's7', 'pending'),
(26, '', '', 'pending'),
(27, '', '', 'pending'),
(28, '', '', 'pending'),
(29, 'b140425cs', 'CREC Silver Jubilee Endowment Trust (SJET) Scholarships', 'pending'),
(30, '', '', 'pending'),
(31, '', '', 'pending'),
(32, 'b140425cs', 'CREC Silver Jubilee Endowment Trust (SJET) Scholarships', 'pending'),
(33, '', 'CREC Silver Jubilee Endowment Trust (SJET) Scholarships', 'pending'),
(34, 'b140425cs', 'CREC Silver Jubilee Endowment Trust (SJET) Scholarships', 'pending'),
(35, '', '', 'pending'),
(36, '', '', 'pending'),
(37, 'b140425cs', 's7', 'pending'),
(38, 'b140425cs', 'CREC Silver Jubilee Endowment Trust (SJET) Scholarships', 'pending'),
(39, 'b140425cs', 's7', 'pending'),
(40, 'b140425cs', 'CREC Silver Jubilee Endowment Trust (SJET) Scholarships', 'pending'),
(41, 'b140425cs', 's7', 'pending'),
(42, 'b140425cs', 'CREC Silver Jubilee Endowment Trust (SJET) Scholarships', 'pending'),
(43, '', '', 'pending'),
(44, 'b140425cs', 'CREC Silver Jubilee Endowment Trust (SJET) Scholarships', 'pending'),
(45, 'b140425cs', 'CREC Silver Jubilee Endowment Trust (SJET) Scholarships', 'pending'),
(46, 'b140425cs', 'CREC Silver Jubilee Endowment Trust (SJET) Scholarships', 'pending'),
(47, 'b140425cs', 'CREC Silver Jubilee Endowment Trust (SJET) Scholarships', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `DOCUMENTS`
--

CREATE TABLE `DOCUMENTS` (
  `doc_id` int(11) NOT NULL,
  `doc_type` varchar(45) DEFAULT NULL,
  `doc_name` varchar(45) DEFAULT NULL,
  `doc_path` varchar(100) DEFAULT NULL,
  `description` varchar(45) DEFAULT NULL,
  `year` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `DOCUMENTS`
--

INSERT INTO `DOCUMENTS` (`doc_id`, `doc_type`, `doc_name`, `doc_path`, `description`, `year`) VALUES
(2, 'awarded', 'Curri_Syllabi_EED_21Feb2011.pdf', 'uploads/awarded/Curri_Syllabi_EED_21Feb2011.pdf', '', 2018);

-- --------------------------------------------------------

--
-- Table structure for table `DONATORS`
--

CREATE TABLE `DONATORS` (
  `donator_id` int(11) NOT NULL,
  `donator_name` varchar(30) DEFAULT NULL,
  `donator_email` varchar(45) DEFAULT NULL,
  `donator_mobile` varchar(45) DEFAULT NULL,
  `donator_amount` int(10) DEFAULT NULL,
  `donator_year` int(5) DEFAULT NULL,
  `donator_photo_path` varchar(100) DEFAULT NULL,
  `current_position` varchar(100) DEFAULT NULL,
  `other_info` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `DONATORS`
--

INSERT INTO `DONATORS` (`donator_id`, `donator_name`, `donator_email`, `donator_mobile`, `donator_amount`, `donator_year`, `donator_photo_path`, `current_position`, `other_info`) VALUES
(1, 'Raima', 'raima_zachariah@yahoo.co.in', '9999999999', 1000000000, 2018, 'assets/img/building.jpg', '1', 'very generous'),
(2, 'Akash', 'akashkbaburajan@gmail.com', '88888888888', 888888888, 2017, 'assets/img/header.jpg', '34', 'great donation'),
(3, 'sgdsf', 'qw34ewdfsckj', '1324', 52000, 2018, '', 'oifdjksdlc', NULL),
(4, 'adg', 'hsh@gmail.com', '241', 52000, 2018, 'assets/img/default.jpg', 'aeg', NULL),
(5, 'Akash K', 'akashkbaburajan@gmail.com', '09847064167', 52000, 2018, 'assets/img/default.jpg', 'Student', NULL),
(6, 'appu', 'akashkbaburajan@gmail.com', '09847064167', 10, 2018, 'uploads/donator/scm1.png', 'software analyst', ''),
(7, 'sgdsf', 'qw34ewdfsckj', '1324', 3424, 2018, '', 'oifdjksdlc', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `DONOR_APPLICATION`
--

CREATE TABLE `DONOR_APPLICATION` (
  `Donor_Id` int(11) NOT NULL,
  `Name` text,
  `Address` text,
  `Email` text,
  `ContactNumber` text,
  `Occupation` text,
  `TypeOfDonation` text,
  `AmountOneTime` text,
  `ScholarshipNameExisting` text,
  `AmountExisting` text,
  `ScholarshipNameNew` text,
  `AmountNew` text,
  `Criteria` text,
  `Status` tinyint(1) NOT NULL DEFAULT '0',
  `PhotoPath` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `DONOR_APPLICATION`
--

INSERT INTO `DONOR_APPLICATION` (`Donor_Id`, `Name`, `Address`, `Email`, `ContactNumber`, `Occupation`, `TypeOfDonation`, `AmountOneTime`, `ScholarshipNameExisting`, `AmountExisting`, `ScholarshipNameNew`, `AmountNew`, `Criteria`, `Status`, `PhotoPath`) VALUES
(13, 'adg', 'swg', 'hsh@gmail.com', '241', 'aeg', 'new', '', '', '', 'GSGS', '', '', 0, 'assets/img/default.jpg'),
(14, '', '', '', '', '', '', '', '', '', '', '', '', 0, 'assets/img/default.jpg'),
(15, '', '', '', '', '', '', '', '', '', '', '', '', 0, 'assets/img/default.jpg'),
(16, '', '', '', '', '', '', '', '', '', '', '', '', 0, 'assets/img/default.jpg'),
(17, '', '', '', '', '', '', '', '', '', '', '', '', 0, 'assets/img/default.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `FAQ`
--

CREATE TABLE `FAQ` (
  `faq_id` int(11) NOT NULL,
  `faq_que` varchar(1000) DEFAULT NULL,
  `faq_ans` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `FAQ`
--

INSERT INTO `FAQ` (`faq_id`, `faq_que`, `faq_ans`) VALUES
(1, 'Who are eligible for the Silver Jubilee Endowment Trust Scholarships?', 'The students of National Institute of Technology Calicut are eligible for the award of the scholarships based on economic backwardness, academic merit, character, conduct and other performance parameters.'),
(2, 'How to Apply?', 'The application forms can be obtained either from the photocopy center operating at NITC Library entrance(for Rs.2) or can be downloaded from the NITC website or can be filled online and downloaded here. The completed application duly countersigned by their faculty advisor is to be handed over to the office of the concerned Head of the Department.'),
(3, 'Where can I find the Circulars/Notices regarding the SJET Scholarships?\r\n', 'Refer the SJET Notice Board (at the ground floor of the Main Buidling) or refer the News & Announcements section on the homepage in this site for further Circular/Notice in this regard.'),
(4, 'How many students will be awarded every year?', 'The number and the value of the scholarships will vary depending on the availability of funds under each head.'),
(5, 'What will be the status of an incomplete application?\r\n', 'The incomplete applications will be rejected without notice to the applicant.'),
(6, 'when will i get the certificate', 'Once it is approved, the admin will send you a mail regarding this');

-- --------------------------------------------------------

--
-- Table structure for table `home_desc`
--

CREATE TABLE `home_desc` (
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home_desc`
--

INSERT INTO `home_desc` (`description`) VALUES
('Calicut Regional Engineering College Silver Jubilee Endowment Trust was formed on 5th December 1986. Mr. T.M Jacob ( Education  Minster of Govt of Kerala at  that time)  and  Dr. K Subramonia Iyer, Professor of Civil Engineering,  were the founders of the Trust.  Currently the Director of the Institute is the Ex-officio Chairman of the trust. Other members of the Board of  Trustees  are the Deans of the Institute, Chief Warden of NITC Hostels, Heads of the various Departments, Chairman and Secretary  of the Student Affairs Council, a representative from the Alumni Association of the Institute, one representative from the CREC PTA, one representative from  Faculty of NITC   and a representative from the Non-Teaching Staff of the Institute. The  Honorary Secretary  cum Treasurer is nominated by the Chairman of the Trustees from among the trustees, who shall  hold the office normally for a period of two years from the date of his/her appointment. The term of the nominated members will be for a period of two years from the date of nomination.<br><br>The main objectives of the trust are the following:</p><ol type="a"><li><p>To help poor and needy students of CREC(NITC)  to pursue their engineering education in the Institute  by providing financial assistance/scholarships.</p></li><li><p>To encourage students of the Institute to excel in their studies and other academic activities by instituting medals and awards for meritorious performance.</p></li><li><p>To function as a purely non-profit enterprise helping the poor and meritorious students of the Institute.</p></li></ol> <p>The trustees raise funds for the trust through  donations from individuals such as staff, students, parents of students, alumni of the Institute and other Philanthropic individuals/bodies. At present, the CREC SJE Trust distributes scholarships amounting to  approximately Rupees Ten Lakhs per year  distributed among 90 to 100  needy students.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `NEWS`
--

CREATE TABLE `NEWS` (
  `news_id` int(11) NOT NULL,
  `news_doc_name` varchar(45) DEFAULT NULL,
  `description` varchar(45) DEFAULT NULL,
  `news_doc_path` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `NEWS`
--

INSERT INTO `NEWS` (`news_id`, `news_doc_name`, `description`, `news_doc_path`) VALUES
(1, 'december fees.pdf', 'test', 'uploads/news/december fees.pdf'),
(2, 'file1.txt', 'test11', 'uploads/news/file1.txt'),
(4, 'SJET_Application_2017.pdf', 'sampling', 'uploads/news/SJET_Application_2017.pdf'),
(5, 'SJET_Application_2017.pdf', 'sampling again', 'uploads/news/SJET_Application_2017.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `SCHOLARSHIPS`
--

CREATE TABLE `SCHOLARSHIPS` (
  `sco_id` int(11) NOT NULL,
  `sco_name` varchar(200) DEFAULT NULL,
  `sco_doc_name` varchar(45) DEFAULT NULL,
  `sco_doc_path` varchar(100) DEFAULT NULL,
  `position` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `SCHOLARSHIPS`
--

INSERT INTO `SCHOLARSHIPS` (`sco_id`, `sco_name`, `sco_doc_name`, `sco_doc_path`, `position`) VALUES
(1, 'CREC Silver Jubilee Endowment Trust (SJET) Scholarships', 'adhar.pdf', 'assets/scholarship/adhar.pdf', 2),
(2, 's7 what just happened', 'adhar.pdf', 'assets/scholarship/adhar.pdf', 2),
(4, 'ieee ppt', 'ieeeppt.pdf', 'assets/scholarship/ieeeppt.pdf', 6),
(5, 'raish', 'ieeeppt.pdf', 'assets/scholarship/ieeeppt.pdf', 2),
(6, 'xyz123', 'SJET_Application_2017.pdf', 'assets/scholarship/SJET_Application_2017.pdf', 1);

-- --------------------------------------------------------

--
-- Table structure for table `TRUSTEE`
--

CREATE TABLE `TRUSTEE` (
  `trustee_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `position_trust` varchar(30) NOT NULL,
  `position_college` varchar(200) NOT NULL,
  `photo_path` varchar(100) DEFAULT NULL,
  `phone_num` varchar(30) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `webpage` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `TRUSTEE`
--

INSERT INTO `TRUSTEE` (`trustee_id`, `name`, `position_trust`, `position_college`, `photo_path`, `phone_num`, `email`, `address`, `webpage`) VALUES
(1, 'Dr.Ashok S SS', 'Member', 'Dean (Research & Consultancy) & Professor,Department of Electrical Engineering', 'assets/img/trustees/profile_pic.jpg', '0495-2286305', 'ashoks@nitc.ac.in', '', ''),
(2, 'Dr.G Unnikrishnan', 'Member', 'Dean (Students Welfare) &Professor,Department of Chemistry', 'assets/img/trustees/118_2.jpg', '+91-495-2285302', ' unnig@nitc.ac.in', NULL, NULL),
(3, 'Dr.T. M. Madhavan Pillai', 'Member', 'Dean (Faculty Welfare) & Professor,Department of Civil Engineering', 'assets/img/trustees/43_2.jpg', '0495-2286216', 'mpillai@nitc.ac.in', NULL, NULL),
(4, 'Dr.M.V.L.R Anjaneyulu', 'Member', 'Dean (Planning & Development) & Professor,Civil Engineering Department', 'assets/img/trustees/73_2.jpg', '0495-2286219', 'mvlr@nitc.ac.in', NULL, NULL),
(6, 'Dr.P. S. Sathidevi', 'Member', 'Dean (Academics) & Department of Electronics and Communication Engineering ', 'assets/img/trustees/sathi.jpg', '0495 2286704', 'sathi@nitc.ac.in', NULL, NULL),
(7, 'DrA.K Kasturba', 'Member', 'Head, Dept.of Architecture', 'assets/img/trustees/kasturba.jpg', '2286900', 'kasturba@nitc.ac.in', NULL, NULL),
(8, 'Dr.Sivasubramanian V', 'Member', 'Associate Professor & HOD(Chemical Engineering)', 'assets/img/trustees/361_2.jpg', '0495-2285406', 'siva@nitc.ac.in', NULL, NULL),
(9, 'Dr.Lisa Sreejith', 'Member', 'Associate Professor & HOD(Chemistry)', 'assets/img/trustees/116_2.jpg', '0495-2286553', ' lisa@nitc.ac.in', NULL, NULL),
(10, 'Akash K', 'Joint Secretary', 'student', 'assets/img/trustees/scm1.png', '09847064167', 'akashkbaburajan@gmail.com', 'Room 145 D hostel\r\nNITC campus', ''),
(12, 'Akash K', 'Treasurer', 'qwew', 'assets/img/trustees/game-of-thrones-season-valar-morghulis-wallpaper.jpg', '09847064167', 'akashkbaburajan@gmail.com', 'Room 145 D hostel\r\nNITC campus', ''),
(13, 'Akash K', 'Treasurer', 'qwscef', 'assets/img/trustees/Abstract_Black_VII_1900x1250.jpg', '09847064167', 'akashkbaburajan@gmail.com', 'Room 145 D hostel\r\nNITC campus', 'illa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `APPLICATION_STATUS`
--
ALTER TABLE `APPLICATION_STATUS`
  ADD PRIMARY KEY (`app_id`);

--
-- Indexes for table `DOCUMENTS`
--
ALTER TABLE `DOCUMENTS`
  ADD PRIMARY KEY (`doc_id`);

--
-- Indexes for table `DONATORS`
--
ALTER TABLE `DONATORS`
  ADD PRIMARY KEY (`donator_id`);

--
-- Indexes for table `DONOR_APPLICATION`
--
ALTER TABLE `DONOR_APPLICATION`
  ADD PRIMARY KEY (`Donor_Id`),
  ADD UNIQUE KEY `Donor_Id` (`Donor_Id`);

--
-- Indexes for table `FAQ`
--
ALTER TABLE `FAQ`
  ADD PRIMARY KEY (`faq_id`);

--
-- Indexes for table `NEWS`
--
ALTER TABLE `NEWS`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `SCHOLARSHIPS`
--
ALTER TABLE `SCHOLARSHIPS`
  ADD PRIMARY KEY (`sco_id`);

--
-- Indexes for table `TRUSTEE`
--
ALTER TABLE `TRUSTEE`
  ADD PRIMARY KEY (`trustee_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `APPLICATION_STATUS`
--
ALTER TABLE `APPLICATION_STATUS`
  MODIFY `app_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT for table `DOCUMENTS`
--
ALTER TABLE `DOCUMENTS`
  MODIFY `doc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `DONATORS`
--
ALTER TABLE `DONATORS`
  MODIFY `donator_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `DONOR_APPLICATION`
--
ALTER TABLE `DONOR_APPLICATION`
  MODIFY `Donor_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `FAQ`
--
ALTER TABLE `FAQ`
  MODIFY `faq_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `NEWS`
--
ALTER TABLE `NEWS`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `SCHOLARSHIPS`
--
ALTER TABLE `SCHOLARSHIPS`
  MODIFY `sco_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `TRUSTEE`
--
ALTER TABLE `TRUSTEE`
  MODIFY `trustee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
