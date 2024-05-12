-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2024 at 10:07 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `empicom`
--

-- --------------------------------------------------------

--
-- Table structure for table `aktiviti`
--

CREATE TABLE `aktiviti` (
  `ak_id` int(11) NOT NULL,
  `ak_title` varchar(255) NOT NULL,
  `ak_doc` varchar(255) NOT NULL,
  `ak_year` int(11) NOT NULL,
  `staff_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `aktiviti`
--

INSERT INTO `aktiviti` (`ak_id`, `ak_title`, `ak_doc`, `ak_year`, `staff_id`) VALUES
(3, 'Tokyo Career Fair 2007', 'case-studies-row-2.jpg', 2007, 1),
(4, 'Tokyo Career Fair 2007', 'case-studies-row-3.jpg', 2007, 1),
(5, 'Tokyo Career Fair 2007', 'case-studies-row-4.jpg', 2007, 1),
(6, 'Career Fair Tokyo, Japan ', 'carousel-image-1.jpg', 2008, 1),
(8, 'Career Fair Tokyo, Japan ', 'carousel-image-3.jpg', 2007, 1),
(9, 'Career Fair Tokyo, Japan ', 'carousel-image-4.jpg', 2008, 1),
(10, 'Career Fair Tokyo, Japan ', 'what-we-do-1.jpg', 2008, 1),
(26, 'Minggu Sember Manusia PCSB', 'experience-1.png', 2011, 0),
(27, 'Minggu Sember Manusia PCSB', 'experience-2.png', 2011, 0),
(28, 'UiTM Career Fair', 'carousel-image-1.jpg', 2011, 0),
(29, 'UiTM Career Fair', 'carousel-image-2.jpg', 2011, 0),
(30, 'UiTM Career Fair', 'carousel-image-3.jpg', 2011, 0),
(31, 'UiTM Career Fair', 'carousel-image-4.jpg', 2011, 0),
(32, 'UiTM Career Fair', 'case-studies-1.jpg', 2011, 0),
(33, 'CA Signing 15 April', 'banner-slider-1.jpg', 2011, 0),
(34, 'CA Signing 15 April', 'banner-slider-2.jpeg', 2011, 0),
(35, 'CA Signing 15 April', 'banner-slider-3.jpg', 2011, 0),
(36, 'CA Signing  Ceremony', 'avatar-1.jpeg', 2014, 0),
(37, 'CA Signing  Ceremony', 'avatar-2.jpg', 2014, 0),
(38, 'CA Signing  Ceremony', 'avatar-3.jpg', 2014, 0),
(39, 'CA Signing  Ceremony', 'avatar-4.png', 2014, 0),
(40, 'DEP Batch 3 Marching Graduation Ceremony', 'banner-slider-1.jpg', 2016, 0),
(41, 'DEP Batch 3 Marching Graduation Ceremony', 'banner-slider-2.jpeg', 2016, 0),
(42, 'DEP Batch 3 Marching Graduation Ceremony', 'banner-slider-3.jpg', 2016, 0),
(43, 'DEP Batch 3 Marching Graduation Ceremony', 'banner-slider-4.jpg', 2016, 0),
(44, 'DEP MAI Trainess Marching Graduan Ceremony 16 February ', 'case-studies-2.jpg', 2016, 0),
(45, 'DEP MAI Trainess Marching Graduan Ceremony 16 February ', 'case-studies-4.jpg', 2016, 0),
(46, 'DEP MAI Trainess Marching Graduan Ceremony 16 February ', 'case-studies-5.jpg', 2016, 0),
(47, 'Morita Last Day', 'avatar-1.jpeg', 2016, 0),
(48, 'Morita Last Day', 'avatar-2.jpg', 2016, 0),
(49, 'Morita Last Day', 'avatar-3.jpg', 2016, 0),
(50, 'Morita Last Day', 'avatar-4.png', 2016, 0);

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE `announcement` (
  `an_id` int(11) NOT NULL,
  `an_title` varchar(255) NOT NULL,
  `an_desc` varchar(255) NOT NULL,
  `an_date` date NOT NULL,
  `an_image` varchar(255) NOT NULL,
  `staff_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `ar_id` int(11) NOT NULL,
  `ar_title` varchar(255) NOT NULL,
  `ar_date` date NOT NULL,
  `ar_doc` varchar(255) NOT NULL,
  `staff_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`ar_id`, `ar_title`, `ar_date`, `ar_doc`, `staff_id`) VALUES
(4, '55 traits found in excellent managers', '2024-03-12', 'Attachment Orga April 2024 1.pdf', 2),
(5, 'AA traits found in excellent managers', '2024-03-27', '10 traits found in excellent managers.pdf', 1),
(6, '44 traits found in excellent managers', '2024-03-27', 'Memo - Kadar Bayaran Semasa Cuti Umum Nuzul Quran 2024.pdf', 0);

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE `bank` (
  `bk_id` int(11) NOT NULL,
  `bk_title` varchar(255) NOT NULL,
  `bk_category` varchar(255) NOT NULL,
  `bk_year` varchar(255) NOT NULL,
  `bk_doc` varchar(255) NOT NULL,
  `staff_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`bk_id`, `bk_title`, `bk_category`, `bk_year`, `bk_doc`, `staff_id`) VALUES
(1, 'Borang Pembiayaan Pinjaman Peribadi Bank Rakyat', 'Bank Rakyat', '2022', '10 qualities of rockstar employees.pdf', 1),
(2, 'Jadual Ansuran Pembayaran Bank Rakyat', 'Bank Rakyat', '2022', 'Memo - Kadar Bayaran Semasa Cuti Umum Nuzul Quran 2024.pdf', 1),
(3, 'Edaran Risalah Tawaran Khas Perodua', 'Bank Rakyat', '2022', 'boachie2019.pdf', 0),
(4, 'Syarat Kelayakkan Pinjaman Peribadi Bank Rakyat', 'Bank Rakyat', '2022', 'DSR_FinalPrint.pdf', 0),
(5, 'Borang Pengesahan Staff', 'Bank Islam', '2019', 'e025363.full.pdf', 0),
(6, 'Borang Permohonan', 'Bank Islam', '2019', 'c3fd77da7c804345af5f1a77625776ddcc12.pdf', 0),
(7, 'Jadual Ansuran ', 'Bank Islam', '2019', 'duffy2020.pdf', 0),
(8, 'Bank Islam APP FORM', 'Bank Islam', '2017', 'Artificial Intelligence for Mental Health and Mental.pdf', 0),
(9, 'Financing Info Details 3', 'Bank Islam', '2017', 'iasiello2019.pdf', 0),
(10, 'Borang Pembiayaan Bank Islam', 'Bank Islam', '2017', 'A_Chatbot_for_Early_Detection_of_Mental_Health_Issues__among_University_Students relevent tree.pdf', 0),
(11, 'Borang Pembiayaan Bank Islam', 'Bank Islam', 'Older', 'herrmann2019.pdf', 0),
(12, 'Borang Permohonan Pembiayaan Bank Islam', 'Bank Islam', 'Older', 'ERI2022_63295.pdf', 0),
(13, 'Consent Deduct OR Salary Transfer', 'Bank Islam', 'Older', 'e025363.full.pdf', 0),
(14, 'Customer Additional Info', 'Bank Islam', 'Older', '9601630.pdf', 0),
(15, 'New PDPA', 'Bank Islam', 'Older', 'dab5c6c4611632eff37191ad68895257ea96.pdf', 0),
(16, 'PF Bank Islam 2014', 'Bank Islam', 'Older', 'austin2018.pdf', 0);

-- --------------------------------------------------------

--
-- Table structure for table `bborang`
--

CREATE TABLE `bborang` (
  `bb_id` int(11) NOT NULL,
  `bb_title` varchar(255) NOT NULL,
  `bb_category` varchar(255) NOT NULL,
  `bb_date` date NOT NULL,
  `bb_doc` varchar(255) NOT NULL,
  `staff_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bborang`
--

INSERT INTO `bborang` (`bb_id`, `bb_title`, `bb_category`, `bb_date`, `bb_doc`, `staff_id`) VALUES
(1, 'Borang Claim HardShip', '1. Faedah & Pampasan', '2024-04-18', '3183713.3193560.pdf', 0),
(2, 'Borang Elaun Memangku', '1. Faedah & Pampasan', '2024-04-18', '10.1080@00987913.2019.1644891.pdf', 0),
(3, 'Borang Pendahuluan Perayaan 2011', '1. Faedah & Pampasan', '2024-04-18', 'Designing Dashboard for Campus Stakeholders to Support College Student Mental Health.pdf', 0),
(4, 'Borang Pendaftaran PCDC', '2. PCDC', '2024-04-18', 'dab5c6c4611632eff37191ad68895257ea96.pdf', 0),
(5, 'Borang Penilaian Prestasi (Eksekutif)', '1. Faedah & Pampasan', '2024-04-18', 'duffy2020.pdf', 0),
(6, 'Borang Penamaan Tuntutan Elaun Telefon', '1. Faedah & Pampasan', '2024-04-18', 'fpubh-10-831349.pdf', 0),
(7, 'Acting Nominantion Form For Vacant Position @ 1 March 2013', '4. Penjawatan', '2024-04-18', 'ERI2022_63295.pdf', 0),
(8, 'Attachment 1 - Eligiblility_Criteria', '3. Staff Computer Tablete Purchase and Loan Scheme', '2024-04-18', 'A Graph Based Chatbot for Cancer Patients.pdf', 0),
(9, 'Attachment 2 - Process Flow Chart', '3. Staff Computer Tablete Purchase and Loan Scheme', '2024-04-18', 's13033-021-00502-x.pdf', 0),
(10, 'Form', '3. Staff Computer Tablete Purchase and Loan Scheme', '2024-04-18', 'DSR_FinalPrint.pdf', 0),
(11, 'Manpower Requisition Form', '4. Penjawatan', '2024-04-18', 'mental_disorders_in_malaysia_an_increase_in_lifetime_prevalence.pdf', 0),
(12, 'Borang Pertukaran Jawatan', '4. Penjawatan', '2024-04-18', 'austin2018.pdf', 0),
(13, 'Borang Penamaan Insuran', '5. Sistem', '2024-04-18', 'grover2020.pdf', 0),
(14, 'Borang Pertukaran Terminal ID', '5. Sistem', '2024-04-18', 'venkatraman2019.pdf', 0),
(15, 'Borang Pendaftaran  Seksyen Baru', '5. Sistem', '2024-04-18', 'IJBS_Volume 12_Issue 2_Pages 84-90.pdf', 0),
(16, 'Borang Kilanan', '6. Disiplin', '2024-04-18', 'ERI2022_63295.pdf', 0),
(17, 'Grievenance Form', '6. Disiplin', '2024-04-18', 'Psychiatric_Services_MOH_Pandemic_Report_2020-2021.pdf', 0),
(18, 'Retreate Approval Form', '7. Lain - lain', '2024-04-18', 'Physicians-perceptions-of-chatbots-in-health-care-Crosssectional-webbased-surveyJournal-of-Medical-Internet-Research.pdf', 0),
(19, 'Borang Aduan Penggajian', '7. Lain - lain', '2024-04-18', 'hutchings2021.pdf', 0),
(20, 'Staff Get Customer', '7. Lain - lain', '2024-04-18', 'mental-health-characteristics-associated-with-dysfunctional-coronavirus-anxiety.pdf', 0),
(21, 'Child Seat Form', '7. Lain - lain', '2024-04-18', 'fpubh-10-831349.pdf', 0),
(22, 'DISC', '7. Lain - lain', '2024-04-18', 'DSRM.pdf', 0),
(23, 'Borang Kesihatan KKM', '2. PCDC', '2024-04-19', '0020764012463315.pdf', 0);

-- --------------------------------------------------------

--
-- Table structure for table `brules`
--

CREATE TABLE `brules` (
  `br_id` int(11) NOT NULL,
  `br_title` varchar(255) NOT NULL,
  `br_date` date NOT NULL,
  `br_doc` varchar(255) NOT NULL,
  `staff_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `brules`
--

INSERT INTO `brules` (`br_id`, `br_title`, `br_date`, `br_doc`, `staff_id`) VALUES
(1, 'Basic Rules 2020', '2024-05-10', 'Mental Health of University Students in Sourtheastern Asia.pdf', 1),
(2, 'Basic Rules 2021', '2023-01-01', 'IJBS_Volume 12_Issue 2_Pages 84-90.pdf', 1),
(3, 'Basic Rules 2022', '2022-01-01', 'Mental Health of University Students in Sourtheastern Asia.pdf', 0),
(4, 'Basic Rules 2023', '2021-01-01', 'ERI2022_63295.pdf', 0),
(5, 'Basic Rules 2024', '2020-01-01', 'boachie2019.pdf', 0);

-- --------------------------------------------------------

--
-- Table structure for table `buletin_ir`
--

CREATE TABLE `buletin_ir` (
  `ir_id` int(11) NOT NULL,
  `ir_title` varchar(255) NOT NULL,
  `ir_year` int(11) NOT NULL,
  `ir_doc` varchar(255) DEFAULT NULL,
  `staff_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `buletin_ir`
--

INSERT INTO `buletin_ir` (`ir_id`, `ir_title`, `ir_year`, `ir_doc`, `staff_id`) VALUES
(1, 'Buletin IR - Keluaran November 2009', 2009, '10 qualities of rockstar employees.pdf', 1),
(2, 'Buletin IR - Keluaran September 2009', 2009, 'Top 20 Skills You Need To Develop Your Career.pdf', 0),
(3, 'Buletin IR - Keluaran Januari / Mac 2021', 2021, 'Your company owes you nothing.pdf', 0),
(4, 'Buletin IR - Keluaran Oct 2019', 2019, 'Top 20 Skills You Need To Develop Your Career.pdf', 0),
(5, 'Buletin IR - Keluaran Oct / Dec 2021', 2021, 'Your company owes you nothing.pdf', 0),
(7, 'Buletin IR - Keluaran Oct / Dec 2016', 2016, 'Your company owes you nothing.pdf', 0),
(8, 'Buletin IR - Keluaran April / June 2016', 2016, '10 traits found in excellent managers.pdf', 0);

-- --------------------------------------------------------

--
-- Table structure for table `calendar`
--

CREATE TABLE `calendar` (
  `cal_id` int(11) NOT NULL,
  `cal_event` varchar(255) NOT NULL,
  `cal_date` date NOT NULL,
  `cal_start` date NOT NULL,
  `cal_end` date DEFAULT NULL,
  `cal_doc` varchar(255) NOT NULL,
  `staff_id` int(11) NOT NULL,
  `cal_desc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `calendar`
--

INSERT INTO `calendar` (`cal_id`, `cal_event`, `cal_date`, `cal_start`, `cal_end`, `cal_doc`, `staff_id`, `cal_desc`) VALUES
(1, 'Memo - Pindaan Hari Kerja Ganti Bulan Mac 2024', '2024-03-02', '2024-03-02', '2024-03-02', '10.1080@00987913.2019.1644891.pdf', 1, ''),
(2, 'Memo - Pindaan Hari Kerja Ganti Bulan Mac 2024', '2024-03-22', '2024-03-23', '2024-03-23', '10.1080@08870446.2019.1626393.pdf', 1, ''),
(3, 'Memo - Pindaan Hari Kerja Ganti Bulan Mac 2024', '2024-03-22', '2024-03-24', '2024-03-24', '10.1186@s12911-019-0796-x.pdf', 1, ''),
(4, 'Memo - Pindaan Hari Kerja Ganti Bulan Mac 2024', '2024-03-22', '2024-03-25', '2024-03-25', '10.2105@AJPH.2019.304951.pdf', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `chatbot`
--

CREATE TABLE `chatbot` (
  `id` int(11) NOT NULL,
  `queries` varchar(300) NOT NULL,
  `replies` varchar(999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chatbot`
--

INSERT INTO `chatbot` (`id`, `queries`, `replies`) VALUES
(1, 'hi', 'Hi apa saya boleh bantu?\r\n'),
(22, 'Who to call/refer to ask for leave metter', 'iffah (ext 5692 or Najihah (ext3427)'),
(23, 'Who to call/refer to ask for personal info matter', 'Nurul Faizura (ext4180)'),
(24, 'Who to call/refer to ask for schooling children information', 'Nurul Faizura (ext4180)'),
(25, 'Who to call/refer to ask for bank details', 'Nurul Faizura (ext4180) or payroll (ext3514)'),
(26, 'Who to call/refer to ask for bank deduction', 'payroll (ext3514)'),
(27, 'Who to call/refer to ask for tax calculation', 'payroll (ext3514)'),
(28, 'Who to call/refer to ask for EA form', 'payroll (ext3514)'),
(29, 'How much is the outpatient/clinical medical expenses', 'Please state your employment category by enter code below:\n<ul>\n<li>PCA - Non-executive</li>\n<li>PCB - Contract</li>\n<li>PCC - Executive</li>\n<li>PCD - Management G15-G16</li>\n<li>PCE - Management G17 and above</li>\n</ul>'),
(30, 'PCA - Non-executive', 'unlimited for staff, depend limited based on YOS:\r\n<br>\r\n<ul>\r\n<li>less than 5 year : RM1,000/dependent/yr</li>\r\n<li>less than 10 year : RM1,400/dependent/yr</li>\r\n<li>greater than 10 year : RM1,900/dependent/yr</li>\r\n</ul>'),
(31, 'PCB - Contract', 'Unlimited for staff only'),
(32, 'PCC - Executive', 'Unlimited for staff & dependent'),
(33, 'PCD - Management G15-G16', 'Unlimited for staff & dependent'),
(34, 'PCE - Management G17 & above', 'unlimited for staff & dependent'),
(35, 'How much is the outpatient/hospitalization medical expenses', 'Please state your employment category by enter code below:\n<ul>\n<li>JHA - Non-executive</li>\n<li>JHB - Contract</li>\n<li>JHC - Executive</li>\n<li>JHD - Management G15-G16</li>\n<li>JHE - Management G17 and above</li>\n</ul>'),
(36, 'JHA - Non - Executive', 'RM8,000 / disability Dependent limited to RM6,000/familiy'),
(37, 'JHB - Contract', 'RM8,000 / disability, staff only'),
(38, 'JHC - Executive', 'RM8,500 / disability, including dependent'),
(39, 'JHD - Management G15 -G16', 'Please contact Pn Hanisah at (ext - 5370)'),
(40, 'JHE - Management G17 and above', 'please contact Pn Hanisah at (ext - 5370)'),
(41, 'PCA', 'unlimited for staff, depend limited based on YOS:\n<br>\n<ul>\n<li>less than 5 year : RM1,000/dependent/yr</li>\n<li>less than 10 year : RM1,400/dependent/yr</li>\n<li>greater than 10 year : RM1,900/dependent/yr</li>\n</ul>'),
(42, 'PCB', 'Unlimited for staff only'),
(43, 'PCC', 'Unlimited for staff & dependent'),
(44, 'PCD', 'Unlimited for staff & dependent'),
(45, 'PCE', 'unlimited for staff & dependent'),
(46, 'JHA', 'RM8,000 / disability Dependent limited to RM6,000/familiy'),
(47, 'JHB', 'RM8,000 / disability, staff only'),
(48, 'JHC', 'RM8,500 / disability, including dependent'),
(49, 'JHD', 'Please contact Pn Hanisah at (ext - 5370)'),
(50, 'JHE', 'Please contact Pn Hanisah at (ext - 5370)'),
(51, 'How much is the dental coverage\r\n', 'Please state your employment category by enter code below:\r\n<ul>\r\n<li>ZDA - Non-executive</li>\r\n<li>ZDB - Contract</li>\r\n<li>ZDC - Executive</li>\r\n<li>ZDD - Management G15-G16</li>\r\n<li>ZDE - Management G17 and above</li>\r\n</ul>'),
(52, 'ZDA - Executive', 'RM500 / family / year'),
(53, 'ZDA', 'RM500 / family / year'),
(54, 'ZDB - Contract', 'RM500 / staff only /year'),
(55, 'ZDB', 'RM500 / staff only /year'),
(56, 'ZDC - Executive', 'RM500 / staff and dependent / year'),
(57, 'ZDC', 'RM500 / staff and dependent / year'),
(58, 'ZDD - Management G15 - G16', 'RM500 / staff and dependent / year'),
(59, 'ZDD', 'RM500 / staff and dependent / year'),
(60, 'ZDE - Management G17 & above', 'RM500 / staff and dependent / year'),
(61, 'ZDE', 'RM500 / staff and dependent / year'),
(62, 'How many days for maternity leave', '98days for 5 surviving children'),
(63, 'How many days for paternity leave', '7 days for 5 applications'),
(66, 'looking for medical expenses', 'Which medical would you like to ask about?\n<ul>\n<li>Hospitalization</li>\n<li>Clinical</li>\n<li>Dental</li>\n</ul>');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `cu_id` int(11) NOT NULL,
  `cu_dept` varchar(255) NOT NULL,
  `cu_sect` varchar(255) NOT NULL,
  `cu_name` varchar(255) NOT NULL,
  `cu_position` varchar(255) NOT NULL,
  `cu_ext` int(11) NOT NULL,
  `staff_id` int(11) NOT NULL,
  `cu_category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`cu_id`, `cu_dept`, `cu_sect`, `cu_name`, `cu_position`, `cu_ext`, `staff_id`, `cu_category`) VALUES
(1, 'Human Resource Management Team and GMs Office', 'Human Resource Management Team', 'Nor Anita Muzaffar Desmond', 'General Manager', 4524, 1, 'PCSB'),
(2, 'Human Resource Management Team and GMs Office', 'Human Resource Management Team', 'Hidehiro Harima', 'Div Exec Coordinator', 3369, 0, 'PCSB'),
(3, 'Human Resource Management Team and GMs Office', 'Human Resource Management Team', 'Noreha Jaafar', 'Dep General Manager', 3340, 0, 'PCSB'),
(4, 'Human Resource Management Team and GMs Office', 'GM\'s Office', 'Zatul - Ain Wagiman', 'Executive', 4149, 0, 'PCSB'),
(5, 'Talent Management Team', 'Talent Management', 'Notrah Ahli Jannah', 'Executive', 4149, 0, 'PCSB'),
(6, 'Talent Management Team', 'Manpower Planning', 'Nor Dayana Che Mi', 'Manager', 4524, 0, 'PCSB'),
(7, 'Talent Management Team', 'Recruitment and Onboarding', 'Amran Mohamad', 'Senior Executive', 3612, 0, 'PCSB'),
(8, 'Talent Management Team', 'Recruitment and Onboarding', 'Hanim Amylia Harith', 'Human Resource Executive', 3612, 0, 'PCSB'),
(9, 'Talent Management Team', 'Recruitment and Onboarding', 'Nazronemi Md Saad', 'Human Resource Executive', 3590, 0, 'PCSB'),
(10, 'Talent Management Team', 'Recruitment and Onboarding', 'Khairul Syafiq Jalaluddin', 'Human Resource Executive', 3240, 0, 'PCSB'),
(11, 'Talent Management Team', 'Recruitment and Onboarding', 'Norfazila Sahri', 'Human Resource Assistant', 5450, 0, 'PCSB'),
(12, 'Talent Management Team', 'Recruitment and Onboarding', 'Al Sideq Jamilin', 'Human Resource Assistant', 4040, 0, 'PCSB'),
(13, 'Talent Management Team', 'Expatriates Management', 'Zalina Wati Abdullah Thani', 'Human Resource Executive', 4630, 0, 'PCSB'),
(14, 'Talent Management Team', 'Expatriates Management', 'Muhammad Hishamuddin Jumairan', 'Human Resource Assistant', 4383, 0, 'PCSB'),
(15, 'Human Resource Management System Team', 'Human Resource Management System Team', 'Noor Faiza Othman', 'Assistant Manager', 5523, 0, 'PCSB'),
(16, 'Human Resource Management System Team', 'Human Resource Management System Team', 'Nik Nur Iffah Ilisya Nik Annuar', 'Human Resource Executive', 5692, 0, 'PCSB'),
(17, 'Human Resource Management System Team', 'Human Resource Management System Team', 'Muhmmad Mustakim Mohd Gapor ', 'Human Resource Executive', 4361, 0, 'PCSB'),
(18, 'Human Resource Management System Team', 'Human Resource Management System Team', 'Mahedeen Che Mat ', 'Human Resource Assistant', 3287, 0, 'PCSB'),
(19, 'Human Resource Management System Team', 'Human Resource Management System Team', 'Nurul Faizura Azhar', 'Human Resource Assistant', 4180, 0, 'PCSB'),
(20, 'Human Resource Management System Team', 'Human Resource Management System Team', 'Aslizawati @ Rozita Udin', 'Human Resource Assistant', 3955, 0, 'PCSB'),
(21, 'Human Resource Management System Team', 'Human Resource Management System Team', 'Siti Noor Najihah Rowi', 'Human Resource Assistant', 3427, 0, 'PCSB'),
(22, 'Compenstion and Benefit Team', 'Compenstion and Benefit', 'Nurmiza zakaria', 'Manager', 4396, 0, 'PCSB'),
(23, 'Compenstion and Benefit Team', 'Compenstion and Benefit Mgmt', 'Nur Hanisah Hassan', 'Human Resource Executive', 5370, 0, 'PCSB\r\n'),
(24, 'Compenstion and Benefit Team', 'Employee Personnel Mgmt', 'Mohd hazrul Irfan Nayan', 'Human Resource Executive', 3839, 0, 'PCSB\r\n'),
(25, 'Compenstion and Benefit Team', '', 'Noor Hasniyati Zainuddin', 'Human Resource Executive', 4183, 0, 'PCSB'),
(26, 'Compenstion and Benefit Team', 'Staff and Benefits Administration', 'Haifa Atman', 'Human Resource Executive', 3994, 0, 'PCSB\r\n'),
(27, 'Compenstion and Benefit Team', 'Staff and Benefits Administration', 'Siti Mariam Ariffin', 'Human Resource Assistant', 3357, 0, 'PCSB\r\n'),
(28, 'Compenstion and Benefit Team', 'Staff and Benefits Administration', 'Nur Edayu Mat Basir', 'Human Resource Assistant', 4568, 0, 'PCSB'),
(29, 'Industrial Relations Team ', 'Industrial Relations', 'Noorida Sari Hamiyuddin', 'Assistant Manager', 5679, 0, 'PCSB'),
(30, 'Industrial Relations Team ', 'Industrial Relations', 'Monaliza hashim', 'Human Resource Executive', 3616, 0, 'PCSB\r\n'),
(31, 'Industrial Relations Team ', 'Industrial Relations', 'Kamaruddin Mohamed Yusof', 'Human Resource Executive', 5509, 0, 'PCSB\r\n'),
(32, 'Industrial Relations Team ', 'Industrial Relations', 'Mohammad Faizzul Hisyam Mohd Alias', 'Human Resource Executive', 3241, 0, 'PCSB\r\n'),
(34, 'Recruitment and Manpower Planning', 'Recruitment and Manpower Planning', 'Syahlina', 'Assistant Manager', 3032, 1, 'PSSB'),
(35, 'Recruitment and Manpower Planning', 'Recruitment and Manpower Planning', 'Ahmad', 'Executive', 3582, 1, 'PSSB'),
(36, 'Recruitment and Manpower Planning', 'Recruitment and Manpower Planning', 'Ruzita', 'Executive', 3582, 1, 'PSSB'),
(37, 'Recruitment and Manpower Planning', 'Recruitment and Manpower Planning', 'Ahmad Izzaudin', 'Executive', 3359, 1, 'PSSB'),
(38, 'Recruitment and Manpower Planning', 'Recruitment and Manpower Planning', 'Siti Nor Ain', 'Executive', 3921, 1, 'PSSB'),
(39, 'Recruitment and Manpower Planning', 'Recruitment and Manpower Planning', 'Nurul Hamira', 'Admin Assistant', 5388, 1, 'PSSB'),
(40, 'Human Resource Information System', 'Human Resource Information System', 'Wan Farisah', 'Manager', 3675, 1, 'PSSB'),
(41, 'Human Resource Information System', 'Human Resource Information System', 'Zaleha', 'Assistant Manager', 4313, 1, 'PSSB'),
(42, 'Human Resource Information System', 'Human Resource Information System', 'Nabila', 'Executive', 3268, 1, 'PSSB'),
(43, 'Human Resource Information System', 'Human Resource Information System', 'Nor Hidayah', 'Admin Assistant', 3224, 1, 'PSSB'),
(44, 'Compensation and Benefit', 'Compensation and Benefit', 'Wan Farisah', 'Manager', 3675, 1, 'PSSB'),
(45, 'Compensation and Benefit', 'Compensation and Benefit', 'Shirley', 'Executive', 5901, 1, 'PSSB'),
(46, 'Compensation and Benefit', 'Compensation and Benefit', 'Zurina', 'Executive', 3973, 1, 'PSSB'),
(47, 'Compensation and Benefit', 'Compensation and Benefit', 'Nurul Aqilah', 'Executive', 3751, 1, 'PSSB'),
(48, 'Organization Development', 'Organization Development', 'Mohd Shahfiran', 'Admin Assistant', 3438, 1, 'PSSB'),
(49, 'Organization Development', 'Organization Development', 'Nur Farhana', 'Executive', 3347, 1, 'PSSB'),
(50, 'Organization Development', 'Organization Development', 'Nurul Faezah', 'Executive', 5496, 1, 'PSSB'),
(51, 'Industrial Relation', 'Industrial Relation', 'Ahmad Sofian', 'Assistant Manager', 5357, 1, 'PSSB'),
(52, 'Industrial Relation', 'Industrial Relation', 'Mohd Ikmal ', 'Executive', 3623, 1, 'PSSB'),
(53, 'Industrial Relation', 'Industrial Relation', 'Farah Liyana', 'Executive', 3623, 1, 'PSSB'),
(54, 'Industrial Relation', 'Industrial Relation', 'Normala', 'Executive', 5357, 1, 'PSSB'),
(55, 'Staff Affairs', 'Staff Affairs', 'Suzyla', 'Dep General Manager', 3786, 1, 'PSSB'),
(56, 'Staff Affairs', 'Staff Affairs', 'Rozaimi', 'Assistant Manager', 5552, 1, 'PSSB'),
(57, 'Staff Affairs', 'Staff Affairs', 'Ahmad Furqon', 'Admin Assistant', 4488, 1, 'PSSB'),
(58, 'Staff Affairs', 'Staff Affairs', 'Norazlina', 'Admin Assistant', 4488, 1, 'PSSB'),
(59, 'Admin', 'Admin', 'Mohd Hafiz', 'Manager', 3043, 1, 'PSSB'),
(60, 'Admin', 'Admin', 'Kiren Kaur', 'Assistant Manager', 4551, 1, 'PSSB'),
(61, 'Admin', 'Admin', 'Rabiatul Adawiah', 'Executive', 3308, 1, 'PSSB'),
(62, 'Admin', 'Admin', 'Nurul dashima', 'Admin Assistant', 3638, 1, 'PSSB'),
(63, 'Admin', 'Admin', 'Wizana', 'Admin Assistant', 3638, 1, 'PSSB'),
(64, 'Admin', 'Admin', 'Zuraimi', 'Admin Assistant', 3651, 1, 'PSSB'),
(65, 'Admin', 'Admin', 'Saifullah', 'Admin Assistant', 4506, 1, 'PSSB'),
(66, 'Admin', 'Admin', 'Ismail', 'Admin Assistant', 4506, 1, 'PSSB'),
(67, 'Admin', 'Admin', 'Kannah', 'Admin Assistant', 3606, 1, 'PSSB'),
(68, 'Admin', 'Admin', 'Nor Asiah', 'Admin Assistant', 4127, 1, 'PSSB');

-- --------------------------------------------------------

--
-- Table structure for table `disiplin`
--

CREATE TABLE `disiplin` (
  `d_id` int(11) NOT NULL,
  `d_category` varchar(255) NOT NULL,
  `d_title` varchar(255) NOT NULL,
  `d_doc` varchar(255) NOT NULL,
  `d_date` date NOT NULL,
  `staff_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `disiplin`
--

INSERT INTO `disiplin` (`d_id`, `d_category`, `d_title`, `d_doc`, `d_date`, `staff_id`) VALUES
(3, 'Kod Perlakuan', 'Kod Perlakuan', '10.1080@00987913.2019.1644891.pdf', '2024-03-20', 0),
(4, 'Kod Perlakuan', 'Kod Etika dan Tatalaku Perniagaan', '3183713.3193560.pdf', '2024-03-20', 0),
(5, 'Kod Perlakuan', 'Polisi Pencegahan dan Pembenterasan Gangguan Seksual di Tempat Kerja', '84d33c290f1f3b88ccca07df37eeeee21658.pdf', '2024-03-20', 0),
(6, 'Kod Perlakuan', 'Polisi Penyalah Gunaan Dadah dan Alkohol', '364978b5f28a5ccae59ac0f78d60fecf.pdf', '2024-03-20', 0),
(7, 'Kod Perlakuan', 'Polisi Whistle Blowing', 'Accessibility and Digital Mental Health Considerations for More Accessible and Equitable Mental Health Apps (1).pdf', '2024-03-20', 0),
(8, 'Prosedur Disiplin', 'Prosedur Kilanan', 'Context-AwareDiscoveryofRelevantWebServicesinAd-hocMobileCloud.pdf', '2024-03-20', 0),
(9, 'Prosedur Disiplin', 'Prosedur Mengeluarkan tiket Disiplin', 'chen2019 (1).pdf', '2024-03-20', 0),
(10, 'Prosedur Disiplin', 'Prosedur Penahanan Gaji (Stop / Hold Salary)', 'A Graph Based Chatbot for Cancer Patients.pdf', '2024-03-20', 0),
(11, 'Panduan Tindakkan Disiplin', 'Buku Panduan Disiplin 2012', 'Accessibility and Digital Mental Health Considerations for More Accessible and Equitable Mental Health Apps (1).pdf', '2024-03-21', 0),
(12, 'Panduan Tindakkan Disiplin', 'Buku Panduan Disiplin 2014', 'fyp poster.pdf', '2024-03-21', 0),
(13, 'Panduan Tindakkan Disiplin', 'Buku Panduan Disiplin 2016', 'chen2019 (1).pdf', '2024-03-21', 0);

-- --------------------------------------------------------

--
-- Table structure for table `jawatan_dalaman`
--

CREATE TABLE `jawatan_dalaman` (
  `jd_id` int(11) NOT NULL,
  `jd_title` varchar(255) NOT NULL,
  `jd_year` int(11) NOT NULL,
  `jd_doc` varchar(255) NOT NULL,
  `jd_date` date NOT NULL,
  `staff_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jawatan_dalaman`
--

INSERT INTO `jawatan_dalaman` (`jd_id`, `jd_title`, `jd_year`, `jd_doc`, `jd_date`, `staff_id`) VALUES
(1, 'Jawatan Dalaman Perodua 2021', 2021, '1-s2.0-S0924977X19318693-main.pdf', '2021-09-16', 0),
(2, 'Jawatan Dalaman Perodua 2020', 2020, 'Not Always Smooth Sailing Mental Health Issues.pdf', '2020-08-11', 0),
(3, 'Jawatan Dalaman Perodua 2020', 2020, '1-s2.0-S0924977X19318693-main.pdf', '2020-08-27', 0),
(4, 'Jawatan Dalaman Perodua 2017', 2017, 'fpubh-10-831349.pdf', '2017-05-11', 0),
(5, 'Jawatan Dalaman Perodua 2017', 2017, 'franzen2021.pdf', '2017-04-14', 0),
(6, 'Jawatan Dalaman Perodua 2017', 2017, 'lee2020.pdf', '2017-03-30', 0);

-- --------------------------------------------------------

--
-- Table structure for table `jawatan_kosong`
--

CREATE TABLE `jawatan_kosong` (
  `jk_id` int(11) NOT NULL,
  `jk_title` varchar(255) NOT NULL,
  `jk_shop` varchar(255) NOT NULL,
  `jk_category` varchar(255) NOT NULL,
  `jk_kekosongan` int(11) NOT NULL,
  `jk_kelayakkan` text NOT NULL,
  `jk_due_date` date NOT NULL,
  `staff_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jawatan_kosong`
--

INSERT INTO `jawatan_kosong` (`jk_id`, `jk_title`, `jk_shop`, `jk_category`, `jk_kekosongan`, `jk_kelayakkan`, `jk_due_date`, `staff_id`) VALUES
(1, 'Pengawal Keselamatan', 'Security', 'Bukan Eksekutif', 26, '<ul>\r\n<li>SPM/SPMV</li>\r\n<li>Telah berkhidmat minimum 2 tahun di perodua</li>\r\n</ul>', '2024-05-23', 0),
(2, 'Pengawal Keselamatan', 'Security', 'Bukan Eksekutif', 1, '<ul>\r\n<li>SPM/SPMV</li>\r\n<li>Telah Berkhidmat minimum 3 tahun di Perodua</li>\r\n</ul>', '2024-06-04', 0),
(3, 'Plant Administration', 'Admin', 'Bukan Eksekutif', 1, '<ul>\r\n<li>SPM / SPMV dan telah berkhidmat minimum 3 tahun di Perodua</li>\r\n<li>Mahir mngendalikan perisian microsoft Office&nbsp;</li>\r\n</ul>', '2024-06-04', 0);

-- --------------------------------------------------------

--
-- Table structure for table `memo`
--

CREATE TABLE `memo` (
  `me_id` int(11) NOT NULL,
  `me_title` varchar(255) NOT NULL,
  `me_year` int(11) NOT NULL,
  `me_doc` varchar(255) NOT NULL,
  `me_date` date NOT NULL,
  `me_desc` varchar(255) NOT NULL,
  `staff_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `memo`
--

INSERT INTO `memo` (`me_id`, `me_title`, `me_year`, `me_doc`, `me_date`, `me_desc`, `staff_id`) VALUES
(1, 'Memo - Kadar Bayaran Semasa Cuti Umum Nuzul Quran 2024', 2024, 'herrmann2019.pdf', '2024-04-01', 'Adalah dimaklumkan bahawa pihak Pengurusan telah menetapkan kadar bayaran bagi kakitangan di bawah kelendar Kerja Corporate yang dikehendaki hadir bekerja semasa Cuti Umum Nuzul Quran pada 28 Mac 2024', 0),
(2, 'Memo - Pindaan Hari Kerja Ganti Bulan Mac 2024 Dan Kadar Bayaran Semasa Cuti Sempena Hari Pertama Persekolahan 2024', 2024, 'A Chatbot for Early Detection of Mental Health Issues among University Students.pdf', '2024-04-01', 'Berikut adalah pindaan Hari Kerja Ganti Bulan Mac 2024 bagi kakitangan terlibat di bawah Kalendar Peoduction dan kadar bayaran bagi pekerja yang dikehendaki bekerja semasa cuti sempena Hari Pertama Persekolahan 11 Mac 2024 (Isnin)...', 0),
(3, 'Memo - Kadar Bayaran Semasa Cuti Umum Tahun Baru Cina 2024', 2024, 'Artificial Intelligence for Mental Health and Mental.pdf', '2024-04-01', 'Adalah dimaklumkan bahawa pihak Pengurusan telah menetapkan kadar bayaran untuk kakitangan yang dikehendaki hadir...', 0),
(4, 'Memo - Larangan Membawa Peralatan Komunikasi Elektronik, Kamera dan Alat Perakam Video ke dalam Kawasan Kilang', 2016, 'Not Always Smooth Sailing Mental Health Issues.pdf', '2024-04-01', 'Pihak pengurusan memandang serius berhubung perkara ini sejak dahulu lagi dengan wujudnya peringatan-peringatan kepada setiap pekerja melalui \'hujung jari\' dan dalam masa yang singkat', 0),
(5, 'Memo - Staff Movement 2012', 2012, 'duffy2020.pdf', '2024-04-01', 'Staff Movement 2012', 0);

-- --------------------------------------------------------

--
-- Table structure for table `message_`
--

CREATE TABLE `message_` (
  `ms_id` int(11) NOT NULL,
  `ms_title` varchar(255) NOT NULL,
  `ms_vol` varchar(255) NOT NULL,
  `ms_doc` varchar(255) NOT NULL,
  `ms_date` date NOT NULL,
  `ms_category` varchar(255) NOT NULL,
  `staff_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `message_`
--

INSERT INTO `message_` (`ms_id`, `ms_title`, `ms_vol`, `ms_doc`, `ms_date`, `ms_category`, `staff_id`) VALUES
(1, '\"I will do it!\"', 'Vol 11', 'iasiello2019.pdf', '2024-04-01', 'Message from Mr Masaki Ogita', 0),
(2, '\"Shitsuke / Discipline\"', 'Vol 10', 'Artificial Intelligence for Mental Health and Mental.pdf', '2024-03-04', 'Message from Mr Masaki Ogita', 0),
(3, '\"Risaukan tentang kejayaan\"', 'Vol 169', 'levin2018.pdf', '2023-05-29', 'Message from Mr Takahashi', 0),
(4, '\"Ke arah masa depan Perodua\"', 'Vol 168', 'franzen2021.pdf', '2023-05-15', 'Message from Mr Takahashi', 0),
(5, 'MVA Message', '#130', 'Physicians-perceptions-of-chatbots-in-health-care-Crosssectional-webbased-surveyJournal-of-Medical-Internet-Research.pdf', '2024-04-16', 'MVA Message', 0),
(6, 'MVA Message', '#129', 'weise2018.pdf', '2024-04-16', 'MVA Message', 0);

-- --------------------------------------------------------

--
-- Table structure for table `orga`
--

CREATE TABLE `orga` (
  `or_id` int(11) NOT NULL,
  `or_title` varchar(255) NOT NULL,
  `or_doc` varchar(255) NOT NULL,
  `or_category` varchar(255) NOT NULL,
  `staff_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orga`
--

INSERT INTO `orga` (`or_id`, `or_title`, `or_doc`, `or_category`, `staff_id`) VALUES
(1, 'Attachment Orga January 2024 ', 'Att23-PSSBPCSBJan24 (1) 1.pdf', 'PSSB', 1),
(3, 'Attachment Orga April 2024 ', 'Attachment Orga April 2024 1.pdf', 'POSB', 1);

-- --------------------------------------------------------

--
-- Table structure for table `page_visits`
--

CREATE TABLE `page_visits` (
  `id` int(11) NOT NULL,
  `visit_count` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `page_visits`
--

INSERT INTO `page_visits` (`id`, `visit_count`) VALUES
(1, 2),
(2, 3),
(3, 4),
(4, 5),
(5, 6),
(6, 7),
(7, 8),
(8, 9),
(9, 10),
(10, 11),
(11, 12),
(12, 12),
(13, 13),
(14, 14),
(15, 15),
(16, 16),
(17, 17),
(18, 18),
(19, 19),
(20, 20),
(21, 21),
(22, 22),
(23, 23),
(24, 24),
(25, 25),
(26, 26),
(27, 27),
(28, 28),
(29, 29),
(30, 30),
(31, 31),
(32, 32),
(33, 33),
(34, 34),
(35, 35),
(36, 36),
(37, 37),
(38, 38),
(39, 39),
(40, 40),
(41, 41),
(42, 42),
(43, 43),
(44, 44),
(45, 45),
(46, 46),
(47, 47),
(48, 48),
(49, 49),
(50, 50),
(51, 51),
(52, 52),
(53, 53),
(54, 54),
(55, 55),
(56, 56),
(57, 57),
(58, 58),
(59, 59),
(60, 60),
(61, 61),
(62, 62),
(63, 63),
(64, 64),
(65, 65),
(66, 66),
(67, 72),
(68, 73),
(69, 74),
(70, 75),
(71, 76),
(72, 77),
(73, 78),
(74, 79),
(75, 80),
(76, 81),
(77, 82),
(78, 83),
(79, 84),
(80, 85),
(81, 86),
(82, 87),
(83, 88),
(84, 89),
(85, 90),
(86, 91),
(87, 92),
(88, 93),
(89, 94),
(90, 95),
(91, 96),
(92, 97),
(93, 98),
(94, 99),
(95, 100),
(96, 101),
(97, 102),
(98, 103),
(99, 104),
(100, 105),
(101, 106),
(102, 107),
(103, 108),
(104, 109),
(105, 110),
(106, 111),
(107, 112),
(108, 113),
(109, 114),
(110, 115),
(111, 116),
(112, 117),
(113, 118),
(114, 119),
(115, 120),
(116, 121),
(117, 122),
(118, 123),
(119, 124),
(120, 125),
(121, 126),
(122, 127),
(123, 128),
(124, 129),
(125, 130),
(126, 131),
(127, 132),
(128, 133),
(129, 134),
(130, 135),
(131, 136),
(132, 137),
(133, 138),
(134, 139),
(135, 140),
(136, 141),
(137, 142),
(138, 143),
(139, 144),
(140, 145),
(141, 146),
(142, 147),
(143, 148),
(144, 149),
(145, 150),
(146, 151),
(147, 152),
(148, 153),
(149, 154),
(150, 155),
(151, 156),
(152, 157),
(153, 158),
(154, 159),
(155, 160),
(156, 161),
(157, 162),
(158, 163),
(159, 164),
(160, 165),
(161, 166),
(162, 167),
(163, 168),
(164, 169),
(165, 170),
(166, 171),
(167, 172),
(168, 173),
(169, 174),
(170, 175),
(171, 176),
(172, 177),
(173, 178),
(174, 179),
(175, 180),
(176, 181),
(177, 182),
(178, 183),
(179, 184),
(180, 185),
(181, 186),
(182, 187),
(183, 188),
(184, 189),
(185, 190),
(186, 191),
(187, 192),
(188, 193),
(189, 194),
(190, 195),
(191, 196),
(192, 197),
(193, 198),
(194, 199),
(195, 200),
(196, 201),
(197, 202),
(198, 203),
(199, 204),
(200, 205),
(201, 206),
(202, 207),
(203, 208),
(204, 209),
(205, 210),
(206, 211),
(207, 212),
(208, 213),
(209, 214),
(210, 215),
(211, 216),
(212, 217),
(213, 218),
(214, 219),
(215, 220),
(216, 221),
(217, 222),
(218, 223),
(219, 224),
(220, 225),
(221, 226),
(222, 227),
(223, 228),
(224, 229),
(225, 230),
(226, 231),
(227, 232),
(228, 233),
(229, 234),
(230, 235),
(231, 236),
(232, 237),
(233, 238),
(234, 239),
(235, 240),
(236, 241),
(237, 242),
(238, 243),
(239, 244),
(240, 245),
(241, 246),
(242, 247),
(243, 248),
(244, 249),
(245, 250),
(246, 251),
(247, 252),
(248, 253),
(249, 254),
(250, 255),
(251, 256),
(252, 257),
(253, 258),
(254, 259),
(255, 260),
(256, 261),
(257, 262),
(258, 263),
(259, 264),
(260, 265),
(261, 266),
(262, 267),
(263, 268),
(264, 269),
(265, 270),
(266, 271),
(267, 272),
(268, 273),
(269, 274),
(270, 275),
(271, 276),
(272, 277),
(273, 278),
(274, 279),
(275, 280),
(276, 281),
(277, 282),
(278, 283),
(279, 284),
(280, 285),
(281, 286),
(282, 287),
(283, 288),
(284, 289),
(285, 290),
(286, 291),
(287, 292),
(288, 293),
(289, 294),
(290, 295),
(291, 296),
(292, 297),
(293, 298),
(294, 299),
(295, 300),
(296, 301),
(297, 302),
(298, 303),
(299, 304),
(300, 305),
(301, 306),
(302, 307),
(303, 308),
(304, 309),
(305, 310),
(306, 311),
(307, 312),
(308, 313),
(309, 314),
(310, 315),
(311, 316),
(312, 317),
(313, 318),
(314, 319),
(315, 320),
(316, 321),
(317, 322),
(318, 323),
(319, 324),
(320, 325),
(321, 326),
(322, 327),
(323, 328),
(324, 329),
(325, 330),
(326, 331),
(327, 332),
(328, 333),
(329, 334),
(330, 335),
(331, 336),
(332, 337),
(333, 338),
(334, 339),
(335, 340),
(336, 341),
(337, 342),
(338, 343),
(339, 344),
(340, 345),
(341, 346),
(342, 347),
(343, 348),
(344, 349),
(345, 350),
(346, 351),
(347, 352),
(348, 353),
(349, 354),
(350, 355),
(351, 356),
(352, 357),
(353, 358),
(354, 359),
(355, 360),
(356, 361),
(357, 362),
(358, 363),
(359, 364),
(360, 365),
(361, 366),
(362, 367),
(363, 368),
(364, 369),
(365, 370),
(366, 371),
(367, 372),
(368, 373),
(369, 374),
(370, 375),
(371, 376),
(372, 377),
(373, 378),
(374, 379),
(375, 380),
(376, 381),
(377, 382),
(378, 383),
(379, 384),
(380, 385),
(381, 386),
(382, 387),
(383, 388),
(384, 389),
(385, 390),
(386, 391),
(387, 392),
(388, 393),
(389, 394),
(390, 395),
(391, 396),
(392, 397),
(393, 398),
(394, 399),
(395, 400),
(396, 401),
(397, 402),
(398, 403),
(399, 404),
(400, 404),
(401, 404),
(402, 405),
(403, 406),
(404, 407),
(405, 407),
(406, 408),
(407, 409),
(408, 410),
(409, 411),
(410, 412),
(411, 413),
(412, 414),
(413, 415),
(414, 416),
(415, 417),
(416, 417),
(417, 418),
(418, 419),
(419, 420),
(420, 421),
(421, 422),
(422, 423),
(423, 424),
(424, 425),
(425, 426),
(426, 427),
(427, 428),
(428, 429),
(429, 430),
(430, 431),
(431, 432),
(432, 433),
(433, 434),
(434, 435),
(435, 436),
(436, 437),
(437, 438),
(438, 439),
(439, 440),
(440, 441),
(441, 442),
(442, 443),
(443, 444),
(444, 445),
(445, 446),
(446, 447),
(447, 448),
(448, 449),
(449, 450),
(450, 451),
(451, 452),
(452, 453),
(453, 454),
(454, 454),
(455, 455),
(456, 455),
(457, 456),
(458, 457),
(459, 458),
(460, 459),
(461, 460),
(462, 461),
(463, 462),
(464, 463),
(465, 464),
(466, 465),
(467, 466),
(468, 467),
(469, 468),
(470, 469),
(471, 470),
(472, 471),
(473, 472),
(474, 473),
(475, 474),
(476, 475),
(477, 476),
(478, 477),
(479, 478),
(480, 479),
(481, 480),
(482, 481),
(483, 482),
(484, 483),
(485, 484),
(486, 485),
(487, 486),
(488, 487),
(489, 488),
(490, 489),
(491, 490),
(492, 491),
(493, 492),
(494, 493),
(495, 494),
(496, 495),
(497, 496),
(498, 497),
(499, 498),
(500, 499),
(501, 500),
(502, 501),
(503, 502),
(504, 503),
(505, 504),
(506, 505),
(507, 506),
(508, 507),
(509, 508),
(510, 509),
(511, 510),
(512, 511),
(513, 512),
(514, 513),
(515, 514),
(516, 515),
(517, 516),
(518, 517),
(519, 518),
(520, 519),
(521, 520),
(522, 521),
(523, 522),
(524, 523),
(525, 524),
(526, 525),
(527, 526),
(528, 527),
(529, 528),
(530, 529),
(531, 530),
(532, 531),
(533, 532),
(534, 533),
(535, 534),
(536, 535),
(537, 536),
(538, 537),
(539, 538),
(540, 539),
(541, 540),
(542, 541),
(543, 542),
(544, 543),
(545, 544),
(546, 545),
(547, 546),
(548, 547),
(549, 548),
(550, 549),
(551, 550),
(552, 551),
(553, 552),
(554, 553),
(555, 554),
(556, 555),
(557, 556),
(558, 557),
(559, 558),
(560, 559),
(561, 560),
(562, 561),
(563, 562),
(564, 563),
(565, 564),
(566, 565),
(567, 566),
(568, 567),
(569, 568),
(570, 569),
(571, 570),
(572, 571),
(573, 572),
(574, 573),
(575, 574),
(576, 575),
(577, 576),
(578, 577),
(579, 578),
(580, 579),
(581, 580),
(582, 581),
(583, 582),
(584, 583),
(585, 584),
(586, 585),
(587, 586),
(588, 587),
(589, 588),
(590, 589),
(591, 590),
(592, 591),
(593, 592),
(594, 593),
(595, 594),
(596, 595),
(597, 596),
(598, 597),
(599, 598),
(600, 599),
(601, 600),
(602, 601),
(603, 602),
(604, 603),
(605, 604),
(606, 605),
(607, 606),
(608, 607),
(609, 608),
(610, 609),
(611, 610),
(612, 611),
(613, 612),
(614, 613),
(615, 614),
(616, 615),
(617, 616),
(618, 617),
(619, 618),
(620, 619),
(621, 620),
(622, 621),
(623, 622),
(624, 623),
(625, 624),
(626, 625),
(627, 626),
(628, 627),
(629, 628),
(630, 629),
(631, 630),
(632, 631),
(633, 632),
(634, 633),
(635, 634),
(636, 635),
(637, 636),
(638, 637),
(639, 638),
(640, 639),
(641, 640),
(642, 641),
(643, 642),
(644, 643),
(645, 644),
(646, 645),
(647, 646),
(648, 647),
(649, 648),
(650, 649),
(651, 650),
(652, 651),
(653, 652),
(654, 653),
(655, 654),
(656, 655),
(657, 656),
(658, 657),
(659, 658),
(660, 659),
(661, 660),
(662, 661),
(663, 662),
(664, 663),
(665, 664),
(666, 665),
(667, 666),
(668, 667),
(669, 668),
(670, 669),
(671, 670),
(672, 671),
(673, 672),
(674, 673),
(675, 674),
(676, 675),
(677, 676),
(678, 677),
(679, 678),
(680, 679),
(681, 680),
(682, 681),
(683, 682),
(684, 683),
(685, 684),
(686, 685),
(687, 686),
(688, 687),
(689, 688),
(690, 689),
(691, 690),
(692, 691),
(693, 692),
(694, 693),
(695, 694),
(696, 695),
(697, 696),
(698, 697),
(699, 698),
(700, 699),
(701, 700),
(702, 701),
(703, 702),
(704, 703),
(705, 704),
(706, 705),
(707, 706),
(708, 707),
(709, 708),
(710, 709),
(711, 710),
(712, 711),
(713, 712),
(714, 713),
(715, 714),
(716, 715),
(717, 716),
(718, 717),
(719, 718),
(720, 719),
(721, 720),
(722, 721),
(723, 722),
(724, 723),
(725, 724),
(726, 725),
(727, 726),
(728, 727),
(729, 728),
(730, 729),
(731, 730),
(732, 731),
(733, 732),
(734, 733),
(735, 734),
(736, 735),
(737, 736),
(738, 737),
(739, 738),
(740, 739),
(741, 740),
(742, 741),
(743, 742),
(744, 743),
(745, 744),
(746, 745),
(747, 746),
(748, 747),
(749, 748),
(750, 749),
(751, 750),
(752, 751),
(753, 752),
(754, 753),
(755, 754),
(756, 755),
(757, 756),
(758, 757),
(759, 758),
(760, 759),
(761, 760),
(762, 761),
(763, 762),
(764, 763),
(765, 764),
(766, 765),
(767, 766),
(768, 767),
(769, 768),
(770, 769),
(771, 770),
(772, 771),
(773, 772),
(774, 773),
(775, 774),
(776, 775),
(777, 776),
(778, 777),
(779, 778),
(780, 779),
(781, 780),
(782, 781),
(783, 782),
(784, 783),
(785, 784),
(786, 785),
(787, 786),
(788, 787),
(789, 788),
(790, 789),
(791, 790),
(792, 791),
(793, 792),
(794, 793),
(795, 794),
(796, 795),
(797, 796),
(798, 797),
(799, 798),
(800, 799),
(801, 800),
(802, 801),
(803, 802),
(804, 803),
(805, 804),
(806, 805),
(807, 806),
(808, 807),
(809, 808),
(810, 809),
(811, 810),
(812, 811),
(813, 812),
(814, 813),
(815, 814),
(816, 815),
(817, 816),
(818, 817),
(819, 818),
(820, 819),
(821, 820),
(822, 821),
(823, 822),
(824, 823),
(825, 824),
(826, 825),
(827, 826),
(828, 827),
(829, 828),
(830, 829),
(831, 830),
(832, 831),
(833, 832),
(834, 833),
(835, 834),
(836, 835),
(837, 836),
(838, 837),
(839, 838),
(840, 839),
(841, 840),
(842, 841),
(843, 842),
(844, 843),
(845, 844),
(846, 845),
(847, 846),
(848, 847),
(849, 848),
(850, 849),
(851, 850),
(852, 851),
(853, 852),
(854, 853),
(855, 854),
(856, 855),
(857, 856),
(858, 857),
(859, 858),
(860, 859),
(861, 860),
(862, 861),
(863, 862),
(864, 863),
(865, 864),
(866, 865),
(867, 866),
(868, 867),
(869, 868),
(870, 869),
(871, 870),
(872, 871),
(873, 872),
(874, 873),
(875, 874),
(876, 875),
(877, 876),
(878, 877),
(879, 878),
(880, 879),
(881, 880),
(882, 881),
(883, 882),
(884, 883),
(885, 884),
(886, 885),
(887, 886),
(888, 887),
(889, 888),
(890, 889),
(891, 890),
(892, 891),
(893, 892),
(894, 893),
(895, 894),
(896, 895),
(897, 896),
(898, 897),
(899, 898),
(900, 899),
(901, 900),
(902, 901),
(903, 902),
(904, 903),
(905, 904),
(906, 905),
(907, 906),
(908, 907),
(909, 908),
(910, 909),
(911, 910),
(912, 911),
(913, 912),
(914, 913),
(915, 914),
(916, 915),
(917, 916),
(918, 917),
(919, 918),
(920, 919),
(921, 920),
(922, 921),
(923, 922),
(924, 923),
(925, 924),
(926, 925),
(927, 926),
(928, 927),
(929, 928),
(930, 929),
(931, 930),
(932, 931),
(933, 932),
(934, 933),
(935, 934),
(936, 935),
(937, 936),
(938, 937),
(939, 938),
(940, 939),
(941, 940),
(942, 941),
(943, 942),
(944, 943),
(945, 944),
(946, 945),
(947, 946),
(948, 947),
(949, 948),
(950, 949),
(951, 950),
(952, 951),
(953, 952),
(954, 953),
(955, 954),
(956, 955),
(957, 956),
(958, 957),
(959, 958),
(960, 959),
(961, 960),
(962, 961),
(963, 962),
(964, 963),
(965, 964),
(966, 965),
(967, 966),
(968, 967),
(969, 968),
(970, 969),
(971, 970),
(972, 971),
(973, 972),
(974, 973),
(975, 974),
(976, 975),
(977, 976),
(978, 977),
(979, 978),
(980, 979),
(981, 980),
(982, 981),
(983, 982),
(984, 983),
(985, 984),
(986, 985),
(987, 986),
(988, 987),
(989, 988),
(990, 989),
(991, 990),
(992, 991),
(993, 992),
(994, 993),
(995, 994),
(996, 995),
(997, 996),
(998, 997),
(999, 998),
(1000, 999),
(1001, 1000),
(1002, 1001),
(1003, 1002),
(1004, 1003),
(1005, 1004),
(1006, 1005),
(1007, 1006),
(1008, 1007),
(1009, 1008),
(1010, 1009),
(1011, 1010),
(1012, 1011),
(1013, 1012),
(1014, 1013),
(1015, 1014),
(1016, 1015),
(1017, 1016),
(1018, 1017),
(1019, 1018),
(1020, 1019),
(1021, 1020),
(1022, 1021),
(1023, 1022),
(1024, 1023),
(1025, 1024),
(1026, 1025),
(1027, 1026),
(1028, 1027),
(1029, 1028),
(1030, 1029),
(1031, 1030),
(1032, 1031),
(1033, 1032),
(1034, 1033),
(1035, 1034),
(1036, 1035),
(1037, 1036),
(1038, 1037),
(1039, 1038),
(1040, 1039),
(1041, 1040),
(1042, 1041),
(1043, 1042),
(1044, 1043),
(1045, 1044),
(1046, 1045),
(1047, 1046),
(1048, 1047),
(1049, 1048),
(1050, 1049),
(1051, 1050),
(1052, 1051),
(1053, 1052),
(1054, 1053),
(1055, 1054),
(1056, 1055),
(1057, 1056),
(1058, 1057),
(1059, 1058),
(1060, 1059),
(1061, 1060),
(1062, 1061),
(1063, 1062),
(1064, 1063),
(1065, 1064),
(1066, 1065),
(1067, 1066),
(1068, 1067),
(1069, 1068),
(1070, 1069),
(1071, 1070),
(1072, 1071),
(1073, 1072),
(1074, 1073),
(1075, 1074),
(1076, 1075),
(1077, 1076),
(1078, 1077),
(1079, 1078),
(1080, 1079),
(1081, 1080),
(1082, 1081),
(1083, 1082),
(1084, 1083),
(1085, 1084),
(1086, 1085),
(1087, 1086),
(1088, 1087),
(1089, 1088),
(1090, 1089),
(1091, 1090),
(1092, 1091),
(1093, 1092),
(1094, 1093),
(1095, 1094),
(1096, 1095),
(1097, 1096),
(1098, 1097),
(1099, 1098),
(1100, 1099),
(1101, 1100),
(1102, 1101),
(1103, 1102),
(1104, 1103),
(1105, 1104),
(1106, 1105),
(1107, 1106),
(1108, 1107),
(1109, 1108),
(1110, 1109),
(1111, 1110),
(1112, 1111),
(1113, 1112),
(1114, 1113),
(1115, 1114),
(1116, 1115),
(1117, 1116),
(1118, 1117),
(1119, 1118),
(1120, 1119),
(1121, 1120),
(1122, 1121),
(1123, 1122),
(1124, 1123),
(1125, 1124),
(1126, 1125),
(1127, 1126),
(1128, 1127),
(1129, 1128),
(1130, 1129),
(1131, 1130),
(1132, 1131),
(1133, 1132),
(1134, 1133),
(1135, 1134),
(1136, 1135),
(1137, 1136),
(1138, 1137),
(1139, 1138),
(1140, 1139),
(1141, 1140),
(1142, 1141),
(1143, 1142),
(1144, 1143),
(1145, 1144),
(1146, 1145),
(1147, 1146),
(1148, 1147),
(1149, 1148),
(1150, 1149),
(1151, 1150),
(1152, 1151),
(1153, 1152),
(1154, 1153),
(1155, 1154),
(1156, 1155),
(1157, 1156),
(1158, 1157),
(1159, 1158),
(1160, 1159),
(1161, 1160),
(1162, 1161),
(1163, 1162),
(1164, 1163),
(1165, 1164),
(1166, 1165),
(1167, 1166),
(1168, 1167),
(1169, 1168),
(1170, 1169),
(1171, 1170),
(1172, 1171),
(1173, 1172),
(1174, 1173),
(1175, 1174),
(1176, 1175),
(1177, 1176),
(1178, 1177),
(1179, 1178),
(1180, 1179),
(1181, 1180),
(1182, 1181),
(1183, 1182),
(1184, 1183),
(1185, 1184),
(1186, 1185),
(1187, 1186),
(1188, 1187),
(1189, 1188),
(1190, 1189),
(1191, 1190),
(1192, 1191),
(1193, 1192),
(1194, 1193),
(1195, 1194),
(1196, 1195),
(1197, 1196),
(1198, 1197),
(1199, 1198),
(1200, 1199),
(1201, 1200),
(1202, 1201),
(1203, 1202),
(1204, 1203),
(1205, 1204),
(1206, 1205),
(1207, 1206),
(1208, 1207),
(1209, 1208),
(1210, 1209),
(1211, 1210),
(1212, 1211),
(1213, 1212),
(1214, 1213),
(1215, 1214),
(1216, 1215),
(1217, 1216),
(1218, 1217),
(1219, 1218),
(1220, 1219),
(1221, 1220),
(1222, 1221),
(1223, 1222),
(1224, 1223),
(1225, 1224),
(1226, 1225),
(1227, 1226),
(1228, 1227),
(1229, 1228),
(1230, 1229),
(1231, 1230),
(1232, 1231),
(1233, 1232),
(1234, 1233),
(1235, 1234),
(1236, 1235),
(1237, 1236),
(1238, 1237),
(1239, 1238),
(1240, 1239),
(1241, 1240),
(1242, 1241),
(1243, 1242),
(1244, 1243),
(1245, 1244),
(1246, 1245),
(1247, 1246),
(1248, 1247),
(1249, 1248),
(1250, 1249),
(1251, 1250),
(1252, 1251),
(1253, 1252),
(1254, 1253),
(1255, 1254),
(1256, 1255),
(1257, 1256),
(1258, 1257),
(1259, 1258),
(1260, 1259),
(1261, 1260),
(1262, 1261),
(1263, 1262),
(1264, 1263),
(1265, 1264),
(1266, 1265),
(1267, 1266),
(1268, 1267),
(1269, 1268),
(1270, 1269),
(1271, 1270),
(1272, 1271),
(1273, 1272),
(1274, 1273),
(1275, 1274),
(1276, 1275),
(1277, 1276),
(1278, 1277),
(1279, 1278),
(1280, 1279),
(1281, 1280),
(1282, 1281),
(1283, 1282),
(1284, 1283),
(1285, 1284),
(1286, 1285),
(1287, 1286),
(1288, 1287),
(1289, 1288),
(1290, 1289),
(1291, 1290),
(1292, 1291),
(1293, 1292),
(1294, 1293),
(1295, 1294),
(1296, 1295),
(1297, 1296),
(1298, 1297),
(1299, 1298),
(1300, 1299),
(1301, 1300),
(1302, 1301),
(1303, 1302),
(1304, 1303),
(1305, 1304),
(1306, 1305),
(1307, 1306),
(1308, 1307),
(1309, 1308),
(1310, 1309),
(1311, 1310),
(1312, 1311),
(1313, 1312),
(1314, 1313),
(1315, 1314),
(1316, 1315),
(1317, 1316),
(1318, 1317),
(1319, 1318),
(1320, 1319),
(1321, 1320),
(1322, 1321),
(1323, 1322),
(1324, 1323),
(1325, 1324),
(1326, 1325),
(1327, 1326),
(1328, 1327),
(1329, 1328),
(1330, 1329),
(1331, 1330),
(1332, 1331),
(1333, 1332),
(1334, 1333),
(1335, 1334),
(1336, 1335),
(1337, 1336),
(1338, 1337),
(1339, 1338),
(1340, 1339),
(1341, 1340),
(1342, 1341),
(1343, 1342),
(1344, 1343),
(1345, 1344),
(1346, 1345),
(1347, 1346),
(1348, 1347),
(1349, 1348),
(1350, 1349),
(1351, 1350),
(1352, 1351),
(1353, 1352),
(1354, 1353),
(1355, 1354),
(1356, 1355),
(1357, 1356),
(1358, 1357),
(1359, 1358),
(1360, 1359),
(1361, 1360),
(1362, 1361),
(1363, 1362),
(1364, 1363),
(1365, 1364),
(1366, 1365),
(1367, 1366),
(1368, 1367),
(1369, 1368),
(1370, 1369),
(1371, 1370),
(1372, 1371),
(1373, 1372),
(1374, 1373),
(1375, 1374),
(1376, 1375),
(1377, 1376),
(1378, 1377),
(1379, 1378),
(1380, 1379),
(1381, 1380),
(1382, 1381),
(1383, 1382),
(1384, 1383),
(1385, 1384),
(1386, 1385),
(1387, 1386),
(1388, 1387),
(1389, 1388),
(1390, 1389),
(1391, 1390),
(1392, 1391),
(1393, 1392),
(1394, 1393),
(1395, 1394),
(1396, 1395),
(1397, 1396),
(1398, 1397),
(1399, 1398),
(1400, 1399),
(1401, 1400),
(1402, 1401),
(1403, 1402),
(1404, 1403),
(1405, 1404),
(1406, 1405),
(1407, 1406),
(1408, 1407),
(1409, 1408),
(1410, 1409),
(1411, 1410),
(1412, 1411),
(1413, 1412),
(1414, 1413),
(1415, 1414),
(1416, 1415),
(1417, 1416),
(1418, 1417),
(1419, 1418),
(1420, 1419),
(1421, 1420),
(1422, 1421),
(1423, 1422),
(1424, 1423),
(1425, 1424),
(1426, 1425),
(1427, 1426),
(1428, 1427),
(1429, 1428),
(1430, 1429),
(1431, 1430),
(1432, 1431),
(1433, 1432),
(1434, 1433),
(1435, 1434),
(1436, 1435),
(1437, 1436),
(1438, 1437),
(1439, 1438),
(1440, 1439),
(1441, 1440),
(1442, 1441),
(1443, 1442),
(1444, 1443),
(1445, 1444),
(1446, 1445),
(1447, 1446),
(1448, 1447),
(1449, 1448),
(1450, 1449),
(1451, 1450),
(1452, 1451),
(1453, 1452),
(1454, 1453),
(1455, 1454),
(1456, 1455),
(1457, 1456),
(1458, 1457),
(1459, 1458),
(1460, 1459),
(1461, 1460),
(1462, 1461),
(1463, 1462),
(1464, 1463),
(1465, 1464),
(1466, 1465),
(1467, 1466),
(1468, 1467),
(1469, 1468),
(1470, 1469),
(1471, 1470),
(1472, 1471),
(1473, 1472),
(1474, 1473),
(1475, 1474),
(1476, 1475),
(1477, 1476),
(1478, 1477),
(1479, 1478),
(1480, 1479),
(1481, 1480),
(1482, 1481),
(1483, 1482),
(1484, 1483),
(1485, 1484),
(1486, 1485),
(1487, 1486),
(1488, 1487),
(1489, 1488),
(1490, 1489),
(1491, 1490),
(1492, 1491),
(1493, 1492),
(1494, 1493),
(1495, 1494),
(1496, 1495),
(1497, 1496),
(1498, 1497),
(1499, 1497),
(1500, 1498),
(1501, 1499),
(1502, 1500),
(1503, 1501),
(1504, 1502),
(1505, 1503),
(1506, 1504),
(1507, 1505),
(1508, 1506),
(1509, 1507),
(1510, 1508),
(1511, 1509),
(1512, 1510),
(1513, 1511),
(1514, 1512),
(1515, 1513),
(1516, 1514),
(1517, 1515),
(1518, 1516),
(1519, 1517),
(1520, 1518),
(1521, 1519),
(1522, 1520),
(1523, 1521),
(1524, 1522),
(1525, 1523),
(1526, 1524),
(1527, 1525),
(1528, 1526),
(1529, 1527),
(1530, 1528),
(1531, 1529),
(1532, 1530),
(1533, 1531),
(1534, 1532),
(1535, 1533),
(1536, 1534),
(1537, 1535),
(1538, 1536),
(1539, 1537),
(1540, 1538),
(1541, 1539),
(1542, 1540),
(1543, 1541),
(1544, 1542),
(1545, 1543),
(1546, 1544),
(1547, 1545),
(1548, 1546),
(1549, 1547),
(1550, 1548),
(1551, 1549),
(1552, 1550),
(1553, 1551),
(1554, 1552),
(1555, 1553),
(1556, 1554),
(1557, 1555),
(1558, 1556),
(1559, 1557),
(1560, 1558),
(1561, 1559),
(1562, 1560),
(1563, 1561),
(1564, 1562),
(1565, 1563),
(1566, 1564),
(1567, 1565),
(1568, 1566),
(1569, 1567),
(1570, 1568),
(1571, 1569),
(1572, 1570),
(1573, 1571),
(1574, 1572),
(1575, 1573),
(1576, 1574),
(1577, 1575),
(1578, 1576),
(1579, 1577),
(1580, 1578),
(1581, 1579),
(1582, 1580),
(1583, 1581),
(1584, 1582),
(1585, 1583),
(1586, 1584),
(1587, 1585),
(1588, 1586),
(1589, 1587),
(1590, 1588),
(1591, 1589),
(1592, 1590),
(1593, 1591),
(1594, 1592),
(1595, 1593),
(1596, 1594),
(1597, 1595),
(1598, 1596),
(1599, 1597),
(1600, 1598),
(1601, 1599),
(1602, 1600),
(1603, 1601),
(1604, 1602),
(1605, 1603),
(1606, 1604),
(1607, 1605),
(1608, 1606),
(1609, 1607),
(1610, 1608),
(1611, 1609),
(1612, 1610),
(1613, 1611),
(1614, 1612),
(1615, 1613),
(1616, 1614),
(1617, 1615),
(1618, 1616),
(1619, 1617),
(1620, 1618),
(1621, 1619),
(1622, 1620),
(1623, 1621),
(1624, 1622),
(1625, 1623),
(1626, 1624),
(1627, 1625),
(1628, 1626),
(1629, 1627),
(1630, 1628),
(1631, 1629),
(1632, 1630),
(1633, 1631),
(1634, 1632),
(1635, 1633),
(1636, 1634),
(1637, 1635),
(1638, 1636),
(1639, 1637),
(1640, 1638),
(1641, 1639),
(1642, 1640),
(1643, 1641),
(1644, 1642),
(1645, 1643),
(1646, 1644),
(1647, 1645),
(1648, 1646),
(1649, 1647),
(1650, 1648),
(1651, 1649),
(1652, 1650),
(1653, 1651),
(1654, 1651),
(1655, 1652),
(1656, 1653),
(1657, 1654),
(1658, 1655),
(1659, 1656),
(1660, 1657),
(1661, 1658),
(1662, 1659),
(1663, 1660),
(1664, 1661),
(1665, 1662),
(1666, 1663),
(1667, 1664),
(1668, 1665),
(1669, 1666),
(1670, 1667),
(1671, 1668),
(1672, 1669),
(1673, 1670),
(1674, 1671),
(1675, 1672),
(1676, 1673),
(1677, 1674),
(1678, 1675),
(1679, 1676),
(1680, 1677),
(1681, 1678),
(1682, 1679),
(1683, 1680),
(1684, 1681),
(1685, 1682),
(1686, 1683),
(1687, 1684),
(1688, 1685),
(1689, 1686),
(1690, 1687),
(1691, 1688),
(1692, 1689),
(1693, 1690),
(1694, 1691),
(1695, 1692),
(1696, 1693),
(1697, 1694),
(1698, 1695),
(1699, 1696),
(1700, 1697),
(1701, 1698),
(1702, 1699),
(1703, 1700),
(1704, 1701),
(1705, 1702),
(1706, 1703),
(1707, 1704),
(1708, 1705),
(1709, 1706),
(1710, 1707),
(1711, 1708),
(1712, 1709),
(1713, 1710),
(1714, 1711),
(1715, 1712),
(1716, 1713),
(1717, 1714),
(1718, 1715),
(1719, 1716),
(1720, 1717),
(1721, 1718),
(1722, 1719),
(1723, 1720),
(1724, 1721),
(1725, 1722),
(1726, 1723),
(1727, 1724),
(1728, 1725),
(1729, 1726),
(1730, 1727),
(1731, 1728),
(1732, 1729),
(1733, 1730),
(1734, 1731),
(1735, 1732),
(1736, 1733),
(1737, 1734),
(1738, 1735),
(1739, 1736),
(1740, 1737),
(1741, 1738),
(1742, 1739),
(1743, 1740),
(1744, 1740),
(1745, 1741),
(1746, 1741),
(1747, 1742),
(1748, 1743),
(1749, 1744),
(1750, 1745),
(1751, 1746),
(1752, 1747),
(1753, 1748),
(1754, 1749),
(1755, 1750),
(1756, 1751),
(1757, 1752),
(1758, 1753),
(1759, 1754),
(1760, 1755),
(1761, 1756),
(1762, 1757),
(1763, 1758),
(1764, 1759),
(1765, 1760),
(1766, 1761),
(1767, 1762),
(1768, 1763),
(1769, 1764),
(1770, 1765),
(1771, 1766),
(1772, 1767),
(1773, 1768),
(1774, 1769),
(1775, 1770),
(1776, 1771),
(1777, 1772),
(1778, 1773),
(1779, 1774),
(1780, 1775),
(1781, 1776),
(1782, 1777),
(1783, 1778),
(1784, 1779),
(1785, 1780),
(1786, 1781),
(1787, 1782),
(1788, 1783),
(1789, 1784),
(1790, 1785),
(1791, 1786),
(1792, 1787),
(1793, 1788),
(1794, 1789),
(1795, 1790),
(1796, 1791),
(1797, 1792),
(1798, 1793),
(1799, 1794),
(1800, 1795),
(1801, 1796),
(1802, 1797),
(1803, 1798),
(1804, 1799),
(1805, 1800),
(1806, 1801),
(1807, 1802),
(1808, 1803),
(1809, 1804),
(1810, 1805),
(1811, 1806),
(1812, 1807),
(1813, 1808),
(1814, 1809),
(1815, 1810),
(1816, 1811),
(1817, 1812),
(1818, 1813),
(1819, 1814),
(1820, 1815),
(1821, 1816),
(1822, 1817),
(1823, 1818),
(1824, 1819),
(1825, 1820),
(1826, 1821),
(1827, 1822),
(1828, 1823),
(1829, 1824),
(1830, 1825),
(1831, 1826),
(1832, 1827),
(1833, 1828),
(1834, 1829),
(1835, 1830),
(1836, 1831),
(1837, 1832),
(1838, 1833),
(1839, 1834),
(1840, 1835),
(1841, 1836),
(1842, 1837),
(1843, 1838),
(1844, 1839),
(1845, 1840),
(1846, 1841),
(1847, 1842),
(1848, 1843),
(1849, 1844),
(1850, 1845),
(1851, 1846),
(1852, 1847),
(1853, 1848),
(1854, 1849),
(1855, 1850),
(1856, 1851),
(1857, 1852),
(1858, 1853),
(1859, 1854),
(1860, 1855),
(1861, 1856),
(1862, 1857),
(1863, 1858),
(1864, 1859),
(1865, 1860),
(1866, 1861),
(1867, 1862),
(1868, 1863),
(1869, 1864),
(1870, 1865),
(1871, 1866),
(1872, 1867),
(1873, 1868),
(1874, 1869),
(1875, 1870),
(1876, 1871),
(1877, 1872),
(1878, 1873),
(1879, 1874),
(1880, 1875),
(1881, 1876),
(1882, 1877),
(1883, 1878),
(1884, 1879),
(1885, 1880),
(1886, 1881),
(1887, 1882),
(1888, 1883),
(1889, 1884),
(1890, 1885),
(1891, 1886),
(1892, 1887),
(1893, 1888),
(1894, 1889),
(1895, 1890),
(1896, 1891),
(1897, 1892),
(1898, 1893),
(1899, 1894),
(1900, 1895),
(1901, 1896),
(1902, 1897),
(1903, 1898),
(1904, 1899),
(1905, 1900),
(1906, 1901),
(1907, 1902),
(1908, 1903),
(1909, 1904),
(1910, 1905),
(1911, 1906),
(1912, 1907),
(1913, 1908),
(1914, 1909),
(1915, 1910),
(1916, 1911),
(1917, 1912),
(1918, 1913),
(1919, 1914),
(1920, 1915),
(1921, 1916),
(1922, 1917),
(1923, 1918),
(1924, 1919),
(1925, 1920),
(1926, 1921),
(1927, 1922),
(1928, 1923),
(1929, 1924),
(1930, 1925),
(1931, 1926),
(1932, 1927),
(1933, 1928),
(1934, 1929),
(1935, 1930),
(1936, 1931),
(1937, 1932),
(1938, 1933),
(1939, 1934),
(1940, 1935),
(1941, 1936),
(1942, 1937),
(1943, 1938),
(1944, 1939),
(1945, 1940),
(1946, 1941),
(1947, 1942),
(1948, 1943),
(1949, 1944),
(1950, 1945),
(1951, 1946),
(1952, 1947),
(1953, 1948),
(1954, 1949),
(1955, 1950),
(1956, 1951),
(1957, 1952),
(1958, 1953),
(1959, 1954),
(1960, 1955),
(1961, 1956),
(1962, 1957),
(1963, 1958),
(1964, 1959),
(1965, 1960),
(1966, 1961),
(1967, 1962),
(1968, 1963),
(1969, 1964),
(1970, 1965),
(1971, 1966),
(1972, 1967),
(1973, 1968),
(1974, 1969),
(1975, 1970),
(1976, 1971),
(1977, 1972),
(1978, 1973),
(1979, 1974),
(1980, 1975),
(1981, 1976),
(1982, 1977),
(1983, 1978),
(1984, 1979),
(1985, 1980),
(1986, 1981),
(1987, 1982),
(1988, 1983),
(1989, 1984),
(1990, 1985),
(1991, 1986),
(1992, 1987),
(1993, 1988),
(1994, 1989),
(1995, 1990),
(1996, 1991),
(1997, 1992),
(1998, 1993),
(1999, 1994),
(2000, 1995),
(2001, 1996),
(2002, 1997),
(2003, 1998),
(2004, 1999),
(2005, 2000),
(2006, 2001),
(2007, 2002),
(2008, 2003),
(2009, 2004),
(2010, 2005),
(2011, 2006),
(2012, 2007),
(2013, 2008),
(2014, 2009),
(2015, 2010),
(2016, 2011),
(2017, 2012),
(2018, 2013),
(2019, 2014),
(2020, 2015),
(2021, 2016),
(2022, 2017),
(2023, 2018),
(2024, 2019),
(2025, 2020),
(2026, 2021),
(2027, 2022),
(2028, 2023),
(2029, 2024),
(2030, 2025),
(2031, 2026),
(2032, 2027),
(2033, 2028),
(2034, 2029),
(2035, 2030),
(2036, 2031),
(2037, 2032),
(2038, 2033),
(2039, 2034),
(2040, 2035),
(2041, 2036),
(2042, 2037),
(2043, 2038),
(2044, 2039),
(2045, 2040),
(2046, 2041),
(2047, 2042),
(2048, 2043),
(2049, 2044),
(2050, 2045),
(2051, 2046),
(2052, 2047),
(2053, 2047),
(2054, 2048),
(2055, 2048),
(2056, 2049),
(2057, 2049),
(2058, 2050),
(2059, 2050),
(2060, 2051),
(2061, 2051),
(2062, 2052),
(2063, 2052),
(2064, 2053),
(2065, 2053),
(2066, 2054),
(2067, 2054),
(2068, 2055),
(2069, 2055),
(2070, 2056),
(2071, 2056),
(2072, 2057),
(2073, 2057),
(2074, 2058),
(2075, 2058),
(2076, 2059),
(2077, 2059),
(2078, 2060),
(2079, 2060),
(2080, 2061),
(2081, 2061),
(2082, 2062),
(2083, 2062),
(2084, 2063),
(2085, 2063),
(2086, 2064),
(2087, 2064),
(2088, 2065),
(2089, 2065),
(2090, 2066),
(2091, 2066),
(2092, 2067),
(2093, 2067),
(2094, 2068),
(2095, 2068),
(2096, 2069),
(2097, 2069),
(2098, 2070),
(2099, 2070),
(2100, 2071),
(2101, 2071),
(2102, 2072),
(2103, 2072),
(2104, 2073),
(2105, 2073),
(2106, 2074),
(2107, 2074),
(2108, 2075),
(2109, 2075),
(2110, 2076),
(2111, 2076),
(2112, 2077),
(2113, 2077),
(2114, 2078),
(2115, 2078),
(2116, 2079),
(2117, 2079),
(2118, 2080),
(2119, 2080),
(2120, 2081),
(2121, 2081),
(2122, 2082),
(2123, 2082),
(2124, 2083),
(2125, 2083),
(2126, 2084),
(2127, 2084),
(2128, 2085),
(2129, 2085),
(2130, 2086),
(2131, 2086),
(2132, 2087),
(2133, 2087),
(2134, 2088),
(2135, 2088),
(2136, 2089),
(2137, 2089),
(2138, 2090),
(2139, 2090),
(2140, 2091),
(2141, 2091),
(2142, 2092),
(2143, 2092),
(2144, 2093),
(2145, 2093),
(2146, 2094),
(2147, 2094),
(2148, 2095),
(2149, 2095),
(2150, 2096),
(2151, 2096),
(2152, 2097),
(2153, 2097),
(2154, 2098),
(2155, 2098),
(2156, 2099),
(2157, 2099),
(2158, 2100),
(2159, 2100),
(2160, 2101),
(2161, 2101),
(2162, 2102),
(2163, 2102),
(2164, 2103),
(2165, 2103),
(2166, 2104),
(2167, 2104),
(2168, 2105),
(2169, 2105),
(2170, 2106),
(2171, 2106),
(2172, 2107),
(2173, 2107),
(2174, 2108),
(2175, 2108),
(2176, 2109),
(2177, 2109),
(2178, 2110),
(2179, 2110),
(2180, 2111),
(2181, 2111),
(2182, 2112),
(2183, 2112),
(2184, 2113),
(2185, 2113),
(2186, 2114),
(2187, 2114),
(2188, 2115),
(2189, 2115),
(2190, 2116),
(2191, 2116),
(2192, 2117),
(2193, 2117),
(2194, 2118),
(2195, 2118),
(2196, 2119),
(2197, 2119),
(2198, 2120),
(2199, 2120),
(2200, 2121),
(2201, 2121),
(2202, 2122),
(2203, 2122),
(2204, 2123),
(2205, 2123),
(2206, 2124),
(2207, 2124),
(2208, 2125),
(2209, 2125),
(2210, 2126),
(2211, 2126),
(2212, 2127),
(2213, 2127),
(2214, 2128),
(2215, 2128),
(2216, 2129),
(2217, 2129),
(2218, 2130),
(2219, 2130),
(2220, 2131),
(2221, 2131),
(2222, 2132),
(2223, 2132),
(2224, 2133),
(2225, 2133),
(2226, 2134),
(2227, 2134),
(2228, 2135),
(2229, 2135),
(2230, 2136),
(2231, 2136),
(2232, 2137),
(2233, 2137),
(2234, 2138),
(2235, 2138),
(2236, 2139),
(2237, 2139),
(2238, 2140),
(2239, 2140),
(2240, 2141),
(2241, 2141),
(2242, 2142),
(2243, 2142),
(2244, 2143),
(2245, 2143),
(2246, 2144),
(2247, 2144),
(2248, 2145),
(2249, 2145),
(2250, 2146),
(2251, 2146),
(2252, 2147),
(2253, 2147),
(2254, 2148),
(2255, 2148),
(2256, 2149),
(2257, 2149),
(2258, 2150),
(2259, 2150),
(2260, 2151),
(2261, 2151),
(2262, 2152),
(2263, 2152),
(2264, 2153),
(2265, 2153),
(2266, 2154),
(2267, 2154),
(2268, 2155),
(2269, 2155),
(2270, 2156),
(2271, 2156),
(2272, 2157),
(2273, 2157),
(2274, 2158),
(2275, 2158),
(2276, 2159),
(2277, 2159),
(2278, 2160),
(2279, 2160),
(2280, 2161),
(2281, 2161),
(2282, 2162),
(2283, 2162),
(2284, 2163),
(2285, 2163),
(2286, 2164),
(2287, 2164),
(2288, 2165),
(2289, 2165),
(2290, 2166),
(2291, 2166),
(2292, 2167),
(2293, 2167),
(2294, 2168),
(2295, 2168),
(2296, 2169),
(2297, 2169),
(2298, 2170),
(2299, 2170),
(2300, 2171),
(2301, 2171),
(2302, 2172),
(2303, 2172),
(2304, 2173),
(2305, 2173),
(2306, 2174),
(2307, 2174),
(2308, 2175),
(2309, 2175),
(2310, 2176),
(2311, 2176),
(2312, 2177),
(2313, 2177),
(2314, 2178),
(2315, 2178),
(2316, 2179),
(2317, 2179),
(2318, 2180),
(2319, 2180),
(2320, 2181),
(2321, 2181),
(2322, 2182),
(2323, 2182),
(2324, 2183),
(2325, 2183),
(2326, 2184),
(2327, 2184),
(2328, 2185),
(2329, 2185),
(2330, 2186),
(2331, 2186),
(2332, 2187),
(2333, 2048),
(2334, 2048),
(2335, 2049),
(2336, 2049),
(2337, 2049),
(2338, 2050),
(2339, 2050),
(2340, 2051),
(2341, 2051),
(2342, 2052),
(2343, 2052),
(2344, 2053),
(2345, 2053),
(2346, 2054),
(2347, 2054),
(2348, 2055),
(2349, 2055),
(2350, 2056),
(2351, 2056),
(2352, 2057),
(2353, 2057),
(2354, 2058),
(2355, 2058),
(2356, 2059),
(2357, 2059),
(2358, 2060),
(2359, 2060),
(2360, 2061),
(2361, 2061),
(2362, 2062),
(2363, 2062),
(2364, 2063),
(2365, 2063),
(2366, 2064),
(2367, 2065),
(2368, 2065),
(2369, 2066),
(2370, 2066),
(2371, 2066),
(2372, 2067),
(2373, 2067),
(2374, 2068),
(2375, 2068),
(2376, 2069),
(2377, 2069),
(2378, 2070),
(2379, 2070),
(2380, 2071),
(2381, 2071),
(2382, 2072),
(2383, 2072),
(2384, 2073),
(2385, 2073),
(2386, 2074),
(2387, 2067),
(2388, 2068),
(2389, 2069),
(2390, 2069),
(2391, 2070),
(2392, 2070),
(2393, 2071),
(2394, 2070),
(2395, 2071),
(2396, 2072),
(2397, 2073),
(2398, 2074),
(2399, 2075),
(2400, 2076),
(2401, 2077),
(2402, 2077),
(2403, 2078),
(2404, 2078),
(2405, 2079),
(2406, 2079),
(2407, 2080),
(2408, 2080),
(2409, 2081),
(2410, 2081),
(2411, 2082),
(2412, 2082),
(2413, 2083),
(2414, 2083),
(2415, 2084),
(2416, 2078),
(2417, 2079),
(2418, 2079),
(2419, 2080),
(2420, 2080),
(2421, 2081),
(2422, 2080),
(2423, 2081),
(2424, 2082),
(2425, 2083),
(2426, 2083),
(2427, 2084),
(2428, 2084),
(2429, 2085),
(2430, 2086),
(2431, 2086),
(2432, 2087),
(2433, 2088),
(2434, 2089),
(2435, 2090),
(2436, 2090),
(2437, 2091),
(2438, 2091),
(2439, 2092),
(2440, 2093),
(2441, 2093),
(2442, 2094),
(2443, 2094),
(2444, 2095),
(2445, 2095),
(2446, 2096),
(2447, 2096),
(2448, 2097),
(2449, 2097),
(2450, 2098),
(2451, 2094),
(2452, 2095),
(2453, 2096),
(2454, 2096),
(2455, 2097),
(2456, 2097),
(2457, 2098),
(2458, 2098),
(2459, 2099),
(2460, 2099),
(2461, 2100),
(2462, 2100),
(2463, 2101),
(2464, 2101),
(2465, 2102),
(2466, 2102),
(2467, 2103),
(2468, 2103),
(2469, 2104),
(2470, 2104),
(2471, 2105),
(2472, 2105),
(2473, 2106),
(2474, 2107),
(2475, 2108),
(2476, 2108),
(2477, 2109),
(2478, 2109),
(2479, 2110),
(2480, 2110),
(2481, 2111),
(2482, 2111),
(2483, 2112),
(2484, 2112),
(2485, 2113),
(2486, 2113),
(2487, 2114),
(2488, 2114),
(2489, 2115),
(2490, 2115),
(2491, 2116),
(2492, 2116),
(2493, 2117),
(2494, 2117),
(2495, 2118),
(2496, 2118),
(2497, 2119),
(2498, 2119),
(2499, 2120),
(2500, 2120),
(2501, 2121),
(2502, 2121),
(2503, 2122),
(2504, 2122),
(2505, 2123),
(2506, 2123),
(2507, 2124),
(2508, 2124),
(2509, 2125),
(2510, 2125),
(2511, 2126),
(2512, 2126),
(2513, 2127),
(2514, 2127),
(2515, 2128),
(2516, 2128),
(2517, 2129),
(2518, 2129),
(2519, 2130),
(2520, 2130),
(2521, 2131),
(2522, 2131),
(2523, 2132),
(2524, 2132),
(2525, 2133),
(2526, 2133),
(2527, 2134),
(2528, 2134),
(2529, 2135),
(2530, 2135),
(2531, 2136),
(2532, 2136),
(2533, 2137),
(2534, 2137),
(2535, 2138),
(2536, 2138),
(2537, 2139),
(2538, 2139),
(2539, 2140),
(2540, 2140),
(2541, 2141),
(2542, 2141),
(2543, 2142),
(2544, 2142),
(2545, 2143),
(2546, 2143),
(2547, 2144),
(2548, 2144),
(2549, 2145),
(2550, 2145),
(2551, 2146),
(2552, 2146),
(2553, 2147),
(2554, 2147),
(2555, 2148),
(2556, 2148),
(2557, 2149),
(2558, 2149),
(2559, 2150),
(2560, 2150),
(2561, 2151),
(2562, 2151),
(2563, 2152),
(2564, 2152),
(2565, 2153),
(2566, 2153),
(2567, 2154),
(2568, 2154),
(2569, 2155),
(2570, 2155),
(2571, 2156),
(2572, 2156),
(2573, 2157),
(2574, 2157),
(2575, 2158),
(2576, 2158),
(2577, 2159),
(2578, 2159),
(2579, 2160),
(2580, 2160),
(2581, 2161),
(2582, 2161),
(2583, 2162),
(2584, 2162),
(2585, 2163),
(2586, 2109),
(2587, 2109),
(2588, 2110),
(2589, 2110),
(2590, 2110),
(2591, 2110),
(2592, 2110),
(2593, 2110),
(2594, 2111),
(2595, 2111),
(2596, 2112);

-- --------------------------------------------------------

--
-- Table structure for table `pdpa`
--

CREATE TABLE `pdpa` (
  `pd_id` int(11) NOT NULL,
  `pd_title` varchar(255) NOT NULL,
  `pd_doc` varchar(255) NOT NULL,
  `staff_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pdpa`
--

INSERT INTO `pdpa` (`pd_id`, `pd_title`, `pd_doc`, `staff_id`) VALUES
(1, 'PERODUA Perosnal Data Protection Act 2010 policy', '10 qualities of rockstar employees.pdf', 0),
(2, 'Competition Law', 'Your company owes you nothing.pdf', 0);

-- --------------------------------------------------------

--
-- Table structure for table `pekeliling`
--

CREATE TABLE `pekeliling` (
  `pe_id` int(11) NOT NULL,
  `pe_title` varchar(255) NOT NULL,
  `pe_year` int(11) NOT NULL,
  `pe_doc` varchar(255) NOT NULL,
  `pe_date` date NOT NULL,
  `pe_desc` varchar(255) NOT NULL,
  `staff_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pekeliling`
--

INSERT INTO `pekeliling` (`pe_id`, `pe_title`, `pe_year`, `pe_doc`, `pe_date`, `pe_desc`, `staff_id`) VALUES
(1, 'Circular - Basic Rules (HR/002/01/2020)', 2020, '10.1080@08870446.2019.1626393.pdf', '2024-04-01', 'Basic Rules (HR/002/01/2020)', 0),
(2, 'Circular - Working Hours During Fasting Month 2024 (Ramadan 1445H)', 2024, '0020764012463315.pdf', '2024-04-01', 'Working Hours During Fasting Month 2024 (Ramadan 1445H)', 0),
(3, 'Circular - Hari Kerja Biasa Pada 25 Disember 2020', 2020, 'Artificial Intelligence for Mental Health and Mental.pdf', '2024-04-01', 'Hari Kerja Biasa Pada 25 Disember 2020', 0),
(4, 'Circular - Basic Rules Circular (HR/002/01/2015)', 2015, 'Designing Dashboard for Campus Stakeholders to Support College Student Mental Health.pdf', '2024-04-01', 'Basic Rules Circular (HR/002/01/2015)', 0);

-- --------------------------------------------------------

--
-- Table structure for table `perjanjian_bersama`
--

CREATE TABLE `perjanjian_bersama` (
  `pb_id` int(11) NOT NULL,
  `pb_title` varchar(255) NOT NULL,
  `pb_year` varchar(255) NOT NULL,
  `pb_doc` varchar(255) NOT NULL,
  `staff_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `perjanjian_bersama`
--

INSERT INTO `perjanjian_bersama` (`pb_id`, `pb_title`, `pb_year`, `pb_doc`, `staff_id`) VALUES
(1, 'Bahagian 1 - Statutori 2023-2025', '2023-2025', '1-s2.0-S0924977X19318693-main.pdf', 0),
(2, 'Bahagian 2 - Hubungan Majikan - Kesatuan 2023-2025', '2023-2025', 'melcher2020.pdf', 0),
(3, 'Bahagian 3 - Terma dan Syarat Pekerjaan 2023-2025', '2023-2025', 'kagiyama2019.pdf', 0),
(4, 'Bahagian 1 - Statutori 2020-2022', '2020-2022', 'boachie2019.pdf', 0),
(5, 'Bahagian 2 - Hubungan Majikan - Kesatuan 2020-2022', '2020-2022', 'Not Always Smooth Sailing Mental Health Issues.pdf', 0),
(6, 'Bahagian 3 - Terma dan Syarat Pekerjaan 2020-2022', '2020-2022', 'TeachingDSRPDWICIS2021.pdf', 0),
(7, 'Bahagian 3 - (2) Terma dan Syarat Pekerjaan 2020-2022', '2020-2022', '364978b5f28a5ccae59ac0f78d60fecf.pdf', 0),
(8, 'Bahagian 3 - (2) Terma dan Syarat Pekerjaan 2023-2025', '2023-2025', 'DeBruine_Barr_Simulating_LMEM.pdf', 0);

-- --------------------------------------------------------

--
-- Table structure for table `policy`
--

CREATE TABLE `policy` (
  `p_id` int(11) NOT NULL,
  `p_title` varchar(255) NOT NULL,
  `p_description` varchar(255) NOT NULL,
  `p_category` varchar(255) NOT NULL,
  `p_polisi` varchar(10000) NOT NULL,
  `p_date` date NOT NULL,
  `po_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `policy`
--

INSERT INTO `policy` (`p_id`, `p_title`, `p_description`, `p_category`, `p_polisi`, `p_date`, `po_id`) VALUES
(1, 'Hospitalization Expenses', 'Hospitalization Expenses', 'Medical Benefit', '<p>G12-G16<br><br><br>1.1&nbsp; &nbsp; &nbsp; &nbsp;PERODUA shall provide for the benefit of hospitalization expenses to Executive and Management staff and their<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; dependents.<br><br>1.2&nbsp; &nbsp; &nbsp; &nbsp;This benefit shall include cost of hospital accommodation, x-ray fees, specialist fees and surgical/operation fees.<br><br>1.3&nbsp; &nbsp; &nbsp; &nbsp;The entitlement per person is limited as follows;<br><br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Category of staff&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Daily Room &amp; Board&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Annual Entitlement<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;per disability<br><br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Grade 12 - 16&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; RM 200.00&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; RM 8,500.00<br><br><br>1.4&nbsp; &nbsp; &nbsp; &nbsp;In instances where both husband and wife are employees of PERODUA, the higher entitlement will be utilized for the<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; family and for administration purposes, only the employee with the higher entitlement is allowed to claim for medical<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; benefit for the children.<br><br>1.5&nbsp; &nbsp; &nbsp; &nbsp;PERODUA\'s staff may gain admittance into Government hospitals without payment of deposits, provided that a<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; \"Guarantee Letter\" issued by Clinic Administration Section is obtained beforehand and presented by the staff to the<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; hospital concerned. In instances where due to emergency reasons a staff is unable to obtain the guarantee letter,<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; his family members should arrange with Clinic Administration Section accordingly.<br><br>1.6&nbsp; &nbsp; &nbsp; &nbsp;In instances where the staff are referred for specialists treatment which are available only at private hospitals, or<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; where the nature and urgency of the cases require immediate reference to private specialist practitioners at private<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; hospitals, PERODUA will give due consideration to such cases provided that the letter of reference is submitted to<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; the Company by the staff concerned.<br><br>1.7&nbsp; &nbsp; &nbsp; &nbsp;In case of any industrial accident, the employee will be given pay during the period of SOCSO leave. However, in the<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; case of the temporary disablement, the Company shall be entitled to recover from the employee any temporary<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; disablement benefit awarded by the Social Security Organization.</p>', '2024-04-24', 7),
(2, 'Hospitalization Expenses', 'Hospitalization Expenses', 'Medical Benefit', '<p>G12-G16<br><br><br>1.1&nbsp; &nbsp; &nbsp; &nbsp;PERODUA shall provide for the benefit of hospitalization expenses to Executive and Management staff and their<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; dependents.<br><br>1.2&nbsp; &nbsp; &nbsp; &nbsp;This benefit shall include cost of hospital accommodation, x-ray fees, specialist fees and surgical/operation fees.<br><br>1.3&nbsp; &nbsp; &nbsp; &nbsp;The entitlement per person is limited as follows;<br><br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Category of staff&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Daily Room &amp; Board&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Annual Entitlement<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;per disability<br><br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Grade 12 - 16&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; RM 200.00&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; RM 8,500.00<br><br><br>1.4&nbsp; &nbsp; &nbsp; &nbsp;In instances where both husband and wife are employees of PERODUA, the higher entitlement will be utilized for the<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; family and for administration purposes, only the employee with the higher entitlement is allowed to claim for medical<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; benefit for the children.<br><br>1.5&nbsp; &nbsp; &nbsp; &nbsp;PERODUA\'s staff may gain admittance into Government hospitals without payment of deposits, provided that a<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; \"Guarantee Letter\" issued by Clinic Administration Section is obtained beforehand and presented by the staff to the<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; hospital concerned. In instances where due to emergency reasons a staff is unable to obtain the guarantee letter,<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; his family members should arrange with Clinic Administration Section accordingly.<br><br>1.6&nbsp; &nbsp; &nbsp; &nbsp;In instances where the staff are referred for specialists treatment which are available only at private hospitals, or<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; where the nature and urgency of the cases require immediate reference to private specialist practitioners at private<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; hospitals, PERODUA will give due consideration to such cases provided that the letter of reference is submitted to<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; the Company by the staff concerned.<br><br>1.7&nbsp; &nbsp; &nbsp; &nbsp;In case of any industrial accident, the employee will be given pay during the period of SOCSO leave. However, in the<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; case of the temporary disablement, the Company shall be entitled to recover from the employee any temporary<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; disablement benefit awarded by the Social Security Organization.</p>', '2024-04-24', 9),
(3, 'Hospitalization Expenses', 'Hospitalization Expenses', 'Medical Benefit', '<p>G17-G18<br><br>1.1&nbsp; &nbsp; &nbsp; &nbsp;PERODUA shall provide for the benefit of hospitalization expenses to Executive and Management staff and their<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; dependents.<br><br>1.2&nbsp; &nbsp; &nbsp; &nbsp;This benefit shall include cost of hospital accommodation, x-ray fees, specialist fees and surgical/operation fees.<br><br>1.3&nbsp; &nbsp; &nbsp; &nbsp;The entitlement per person is limited as follows;<br><br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Category of staff&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Daily Room &amp; Board&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Annual Entitlement<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; per disability<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Grade 12 - 16&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; RM 200.00&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;RM 8,500.00<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Grade 17 - 18&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 1st Class Ward&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;RM 11,000.00<br><br><br>1.4&nbsp; &nbsp; &nbsp; &nbsp;In instances where both husband and wife are employees of PERODUA, the higher entitlement will be utilized for the<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; family and for administration purposes, only the employee with the higher entitlement is allowed to claim for medical<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; benefit for the children.<br><br>1.5&nbsp; &nbsp; &nbsp; &nbsp;PERODUA\'s staff may gain admittance into Government hospitals without payment of deposits, provided that a<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; \"Guarantee Letter\" issued by Clinic Administration Section is obtained beforehand and presented by the staff to the<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; hospital concerned. In instances where due to emergency reasons a staff is unable to obtain the guarantee letter,<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; his family members should arrange with Clinic Administration Section accordingly.<br><br>1.6&nbsp; &nbsp; &nbsp; &nbsp;In instances where the staff are referred for specialists treatment which are available only at private hospitals,<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; or where the nature and urgency of the cases require immediate reference to private specialist practitioners at<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; private hospitals, PERODUA will give due consideration to such cases provided that the letter of reference is<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; submitted to the Company by the staff concerned.<br><br>1.7&nbsp; &nbsp; &nbsp; &nbsp;In case of any industrial accident, the employee will be given pay during the period of SOCSO leave. However, in the<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; case of the temporary disablement, the Company shall be entitled to recover from the employee any temporary<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; disablement benefit awarded by the Social Security Organization.</p>', '2024-04-24', 5),
(4, 'Hospitalization Expenses', 'Hospitalization Expenses', 'Medical Benefit', '<p>G19-G21<br><br>1.1&nbsp; &nbsp; &nbsp; &nbsp;PERODUA shall provide for the benefit of hospitalization expenses to Executive and Management staff and their<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; dependents.<br><br>1.2&nbsp; &nbsp; &nbsp; &nbsp;This benefit shall include cost of hospital accommodation, x-ray fees, specialist fees and surgical/operation fees.<br><br>1.3&nbsp; &nbsp; &nbsp; &nbsp;The entitlement per person is limited as follows;<br><br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Category of staff&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Daily Room &amp; Board&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Annual Entitlement<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; per disability<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Grade 12 - 16&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; RM 200.00&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;RM 8,500.00<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Grade 17 - 18&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 1st Class Ward&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; RM 11,000.00<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Grade 19 - 21&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;1st Class Ward&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;RM 13,000.00<br><br><br><br>1.4&nbsp; &nbsp; &nbsp; &nbsp;In instances where both husband and wife are employees of PERODUA, the higher entitlement will be utilized for the<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; family and for administration purposes, only the employee with the higher entitlement is allowed to claim for medical<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; benefit for the children.<br><br>1.5&nbsp; &nbsp; &nbsp; &nbsp;PERODUA\'s staff may gain admittance into Government hospitals without payment of deposits, provided that a<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; \"Guarantee Letter\" issued by Clinic Administration Section is obtained beforehand and presented by the staff to the<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; hospital concerned. In instances where due to emergency reasons a staff is unable to obtain the guarantee letter,<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; his family members should arrange with Clinic Administration Section accordingly.<br><br>1.6&nbsp; &nbsp; &nbsp; &nbsp;In instances where the staff are referred for specialists treatment which are available only at private hospitals,<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; or where the nature and urgency of the cases require immediate reference to private specialist practitioners at<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; private hospitals, PERODUA will give due consideration to such cases provided that the letter of reference is<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; submitted to the Company by the staff concerned.<br><br>1.7&nbsp; &nbsp; &nbsp; &nbsp;In case of any industrial accident, the employee will be given pay during the period of SOCSO leave. However, in the<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; case of the temporary disablement, the Company shall be entitled to recover from the employee any temporary<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; disablement benefit awarded by the Social Security Organization.</p>\r\n<div class=\"yj6qo\">&nbsp;</div>', '2024-04-24', 3),
(5, 'Annual Leave', 'Annual Leave', 'Leave Administration', '<p>G19-G21<br><br>1.1&nbsp; &nbsp; &nbsp; &nbsp;Staff shall be granted leave entitlement upon confirmation of appointment as follows;<br><br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Category of staff&nbsp; &nbsp; &nbsp; &nbsp;Entitlement per year based on service period<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;5 years&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;5-10 years&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &gt;10 years<br><br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Non-Executive staff&nbsp; &nbsp; &nbsp;As per CA&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;As per CA&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;As per CA<br><br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Executive and<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Management staff<br><br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Grade 12 - 17&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 18 days&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;22 days&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;25 days<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Grade 18 - 21&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 21 days&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;25 days&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;28 days<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Grade 22 - 23&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 28 days&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;28 days&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;28 days<br><br>1.2&nbsp; &nbsp; &nbsp; &nbsp;Entitlement for any incomplete year of service will be prorated based on completed months of service. A probationary<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; staff is not allowed to utilize his annual leave entitlement during his probationary period. Due to operational<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; reasons certain group of staff, as PERODUA may specify from time to time, shall take their leave in accordance with<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; a leave roster prepared by PERODUA.<br><br>1.3&nbsp; &nbsp; &nbsp; &nbsp;A staff who intends to utilize his annual leave entitlement shall make a written application using the<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; \"leave application form\" at least seven (7) workdays in advance.<br><br>1.4&nbsp; &nbsp; &nbsp; &nbsp;Half day leave may be availed against annual leave on a full normal working day, on day shift only.<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; The half-day leave is either from 8:00 a.m. to 1:45 p.m. or 1:00 p.m. to 5:45 p.m.<br><br>1.5&nbsp; &nbsp; &nbsp; &nbsp;PERODUA reserves the right to cancel leave already approved or to recall any staff from leave if his exigencies of<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; service so requires it. In such cases, the staff shall be compensated as follows;<br><br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 1.5.1&nbsp; &nbsp; reinstatement of leave canceled; and<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 1.5.2&nbsp; &nbsp; reimbursement of expenses that he would have incurred to return to his workplace as a result of the call back.<br><br><br>1.6&nbsp; &nbsp; &nbsp; &nbsp;Emergency or advance annual leave shall not be granted unless accompanied by valid reasons and approved by<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Departmental Head, and such leave shall be deducted against annual leave, and in the event the staff has fully<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; utilized his annual leave entitlement, as unpaid leave.<br><br>1.6&nbsp; &nbsp; &nbsp; &nbsp;Staff shall ordinarily consume their annual leave during the year of entitlement. Therefore, any leave not taken<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; during the entitlement period shall generally be forfeited. However, where due to exigencies of service a staff is<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; unable to take his annual leave, he is allowed, with prior approval of his departmental head, to carry forward up<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; to the maximum of his current year\'s (Year 1) entitlement to the following year (Year 2).<br><br>1.8&nbsp; &nbsp; &nbsp; &nbsp;All STAFF are allowed to utilize the leave entitlement within the succeeding year (Year 2) once he has fully utilized<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; the leave carried forward from the previous year (Year 1).<br><br>1.9&nbsp; &nbsp; &nbsp; &nbsp;No staff shall be allowed to carry forward his leave for more than a year i.e. from Year 1 to Year 3. The balance of<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; such leave, if any, shall generally be forfeited.<br><br>1.10&nbsp; &nbsp; &nbsp;Up to half of annual leave entitlement may be accumulated for the purpose of pilgrimage (Haj only) to Mecca,<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; provided that a written notice of intention to accumulate annual leave for this purpose has been given at the<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; beginning of the year, or the accumulation period.<br><br>1.11&nbsp; &nbsp; &nbsp;If a staff is granted medical/maternity/<wbr>compassionate leave while on annual leave, he may be allowed extension<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; of his annual leave after such period of leave, if he applied and produced the relevant medical certificates or any<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; other relevant documentary evidence. Alternatively, his annual leave record will be credited back accordingly.<br><br>1.12&nbsp; &nbsp; &nbsp;In the event of a staff\'s cessation of employment due to resignation, retrenchment, retirement, death or on grounds<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; other than misconduct, he will be entitled to proportionate leave for completed months of service during the year in<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; addition to leave carried forward (if any).<br><br>1.13&nbsp; &nbsp; &nbsp;Any payment of money in lieu of annual leave, such as in the event of death or resignation, or compensation for leave<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; forfeited, shall be based on the ordinary rate of pay.</p>', '2024-04-24', 3),
(6, 'Annual Leave', 'Annual Leave', 'Leave Administration', '<p>G12-G14<br><br>&nbsp;1.1&nbsp; &nbsp; &nbsp; &nbsp;Staff shall be granted leave entitlement upon confirmation of appointment as follows;<br><br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Category of staff&nbsp; &nbsp; &nbsp; &nbsp;Entitlement per year based on service period<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;5 years&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;5-10 years&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&gt;10 years<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Grade 12 - 14&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;18 days&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;22 days&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 25 days<br><br><br>1.2&nbsp; &nbsp; &nbsp; &nbsp;Entitlement for any incomplete year of service will be prorated based on completed months of service. A probationary<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;staff is not allowed to utilize his annual leave entitlement during his probationary period. Due to operational<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;reasons certain group of staff, as PERODUA may specify from time to time, shall take their leave in accordance with<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;a leave roster prepared by PERODUA.<br><br>1.3&nbsp; &nbsp; &nbsp; &nbsp;A staff who intends to utilize his annual leave entitlement shall make a written application using the<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; \"leave application form\" at least seven (7) workdays in advance.<br><br>1.4&nbsp; &nbsp; &nbsp; &nbsp;Half day leave may be availed against annual leave on a full normal working day, on day shift only.<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; The half-day leave is either from 8:00 a.m. to 1:45 p.m. or 1:00 p.m. to 5:45 p.m.<br><br>1.5&nbsp; &nbsp; &nbsp; &nbsp;PERODUA reserves the right to cancel leave already approved or to recall any staff from leave if his exigencies of<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;service so requires it. In such cases, the staff shall be compensated as follows;<br><br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 1.5.1&nbsp; &nbsp; reinstatement of leave canceled; and<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 1.5.2&nbsp; &nbsp; reimbursement of expenses that he would have incurred to return to his workplace as a result of the call back.<br><br>1.6&nbsp; &nbsp; &nbsp; &nbsp;Emergency or advance annual leave shall not be granted unless accompanied by valid reasons and approved by<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Departmental Head, and such leave shall be deducted against annual leave, and in the event the staff has fully<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; utilized his annual leave entitlement, as unpaid leave.<br><br>1.7&nbsp; &nbsp; &nbsp; &nbsp;Staff shall ordinarily consume their annual leave during the year of entitlement. Therefore, any leave not taken during<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; the entitlement period shall generally be forfeited. However, where due to exigencies of service a staff is unable to<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; take his annual leave, he is allowed, with prior approval of his departmental head, to carry forward up to the<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; maximum of his current year\'s (Year 1) entitlement to the following year (Year 2).<br><br>1.8&nbsp; &nbsp; &nbsp; &nbsp;All STAFF are allowed to utilize the leave entitlement within the succeeding year (Year 2) once he has fully utilized the<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; leave carried forward from the previous year (Year 1).<br><br>1.9&nbsp; &nbsp; &nbsp; &nbsp;No staff shall be allowed to carry forward his leave for more than a year i.e. from Year 1 to Year 3. The balance of such<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; leave, if any, shall generally be forfeited.<br><br>1.10&nbsp; &nbsp; &nbsp;If a staff is granted medical/maternity/<wbr>compassionate leave while on annual leave, he may be allowed extension of his<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; annual leave after such period of leave, if he applied and produced the relevant medical certificates or any other<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; relevant documentary evidence. Alternatively, his annual leave record will be credited back accordingly.<br><br>1.11&nbsp; &nbsp; &nbsp;In the event of a staff\'s cessation of employment due to resignation, retrenchment, retirement, death or on grounds<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; other than misconduct, he will be entitled to proportionate leave for completed months of service during the year in<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; addition to leave carried forward (if any).<br><br>1.12&nbsp; &nbsp; &nbsp;Any payment of money in lieu of annual leave, such as in the event of death or resignation, or compensation for leave<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; forfeited, shall be based on the ordinary rate of pay.</p>', '2024-04-24', 9),
(7, 'Annual Leave', 'Annual Leave', 'Leave Administration', '<p>G15-G16<br><br>1.1&nbsp; &nbsp; &nbsp; &nbsp;Staff shall be granted leave entitlement upon confirmation of appointment as follows;<br><br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Category of staff&nbsp; &nbsp; &nbsp; &nbsp;Entitlement per year based on service period<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;5 years&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;5-10 years&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &gt;10 years<br><br><br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Grade 12 - 16&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 18 days&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;22 days&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 25 days<br><br><br>1.2&nbsp; &nbsp; &nbsp; &nbsp;Entitlement for any incomplete year of service will be prorated based on completed months of service.<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; A probationary staff is not allowed to utilize his annual leave entitlement<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; during his probationary period. Due to operational reasons certain group of staff, as PERODUA<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; may specify from time to time, shall take their leave in accordance with a leave roster prepared by PERODUA.<br><br>1.3&nbsp; &nbsp; &nbsp; &nbsp;A staff who intends to utilize his annual leave entitlement shall make a written application using the<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; \"leave application form\" at least seven (7) workdays in advance.<br><br>1.4&nbsp; &nbsp; &nbsp; &nbsp;Half day leave may be availed against annual leave on a full normal working day, on day shift only.<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; The half-day leave is either from 8:00 a.m. to 1:45 p.m. or 1:00 p.m. to 5:45 p.m.<br><br>1.5&nbsp; &nbsp; &nbsp; &nbsp;PERODUA reserves the right to cancel leave already approved or to recall any staff from leave if his exigencies of<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;service so requires it. In such cases, the staff shall be compensated as follows;<br><br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 1.5.1&nbsp; &nbsp; reinstatement of leave canceled; and<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 1.5.2&nbsp; &nbsp; reimbursement of expenses that he would have incurred to return to his workplace as a result of the call back.<br><br>1.6&nbsp; &nbsp; &nbsp; &nbsp;Emergency or advance annual leave shall not be granted unless accompanied by valid reasons and approved by<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Departmental Head, and such leave shall be deducted against annual leave, and in the event the staff has fully utilized<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; his annual leave entitlement, as unpaid leave.<br><br>1.7&nbsp; &nbsp; &nbsp; &nbsp;Staff shall ordinarily consume their annual leave during the year of entitlement. Therefore, any leave not taken during<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; the entitlement period shall generally be forfeited. However, where due to exigencies of service a staff is unable to take<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; his annual leave, he is allowed, with prior approval of his departmental head, to carry forward up to the<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; maximum of his current year\'s (Year 1) entitlement to the following year (Year 2).<br><br>1.9&nbsp; &nbsp; &nbsp; &nbsp;All STAFF are allowed to utilize the leave entitlement within the succeeding year (Year 2) once he has fully utilized the<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; leave carried forward from the previous year (Year 1).<br><br>1.10&nbsp; &nbsp; &nbsp;No staff shall be allowed to carry forward his leave for more than a year i.e. from Year 1 to Year 3. The balance of such<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; leave, if any, shall generally be forfeited.<br><br>1.11&nbsp; &nbsp; &nbsp;Up to half of annual leave entitlement may be accumulated for the purpose of pilgrimage (Haj only) to Mecca, provided<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; that a written notice of intention to accumulate annual leave for this purpose has been given at the beginning of the<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; year, or the accumulation period.<br><br>1.12&nbsp; &nbsp; &nbsp;If a staff is granted medical/maternity/<wbr>compassionate leave while on annual leave, he may be allowed extension of his<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; annual leave after such period of leave, if he applied and produced the relevant medical certificates or any other<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; relevant documentary evidence. Alternatively, his annual leave record will be credited back accordingly.<br><br>1.13&nbsp; &nbsp; &nbsp;In the event of a staff\'s cessation of employment due to resignation, retrenchment, retirement, death or on grounds<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; other than misconduct, he will be entitled to proportionate leave for completed months of service during the year in<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; addition to leave carried forward (if any).<br><br>1.14&nbsp; &nbsp; &nbsp;Any payment of money in lieu of annual leave, such as in the event of death or resignation, or compensation for leave<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; forfeited, shall be based on the ordinary rate of pay.</p>', '2024-04-24', 7),
(8, 'Annual Leave', 'Annual Leave', 'Leave Administration', '<p>G17-G18<br><br>1.1&nbsp; &nbsp; &nbsp; &nbsp;Staff shall be granted leave entitlement upon confirmation of appointment as follows;<br><br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Category of staff&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Entitlement per year based on service period<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;5 years&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;5-10 years&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &gt;10 years<br><br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Grade 12 - 16&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 18 days&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;22 days&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 25 days<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Grade 17&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;18 days&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;22 days&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 25 days<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Grade 18&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;21 days&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;25 days&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;28 days<br><br><br>1.2&nbsp; &nbsp; &nbsp; &nbsp;Entitlement for any incomplete year of service will be prorated based on completed months of service. A probationary<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; staff is not allowed to utilize his annual leave entitlement during his probationary period. Due to operational<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; reasons certain group of staff, as PERODUA may specify from time to time, shall take their leave in accordance with<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; a leave roster prepared by PERODUA.<br><br>1.3&nbsp; &nbsp; &nbsp; &nbsp;A staff who intends to utilize his annual leave entitlement shall make a written application using the<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; \"leave application form\" at least seven (7) workdays in advance.<br><br>1.4&nbsp; &nbsp; &nbsp; &nbsp;Half day leave may be availed against annual leave on a full normal working day, on day shift only.<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; The half-day leave is either from 8:00 a.m. to 1:45 p.m. or 1:00 p.m. to 5:45 p.m.<br><br>1.5&nbsp; &nbsp; &nbsp; &nbsp;PERODUA reserves the right to cancel leave already approved or to recall any staff from leave if his exigencies of<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;service so requires it. In such cases, the staff shall be compensated as follows;<br><br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 1.5.1&nbsp; &nbsp; reinstatement of leave canceled; and<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 1.5.2&nbsp; &nbsp; reimbursement of expenses that he would have incurred to return to his workplace as a result of the call back.<br><br>1.6&nbsp; &nbsp; &nbsp; &nbsp;Emergency or advance annual leave shall not be granted unless accompanied by valid reasons and approved by<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Departmental Head, and such leave shall be deducted against annual leave, and in the event the staff has fully<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; utilized his annual leave entitlement, as unpaid leave.<br><br>1.6&nbsp; &nbsp; &nbsp; &nbsp;Staff shall ordinarily consume their annual leave during the year of entitlement. Therefore, any leave not taken during<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; the entitlement period shall generally be forfeited. However, where due to exigencies of service a staff is unable to<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; take his annual leave, he is allowed, with prior approval of his departmental head, to carry forward up to the maximum<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; of his current year\'s (Year 1) entitlement to the following year (Year 2).<br><br>1.8&nbsp; &nbsp; &nbsp; &nbsp;All STAFF are allowed to utilize the leave entitlement within the succeeding year (Year 2) once he has fully utilized the<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; leave carried forward from the previous year (Year 1).<br><br>1.9&nbsp; &nbsp; &nbsp; &nbsp;No staff shall be allowed to carry forward his leave for more than a year i.e. from Year 1 to Year 3. The balance of such<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; leave, if any, shall generally be forfeited.<br><br>1.10&nbsp; &nbsp; &nbsp;Up to half of annual leave entitlement may be accumulated for the purpose of pilgrimage (Haj only) to Mecca, provided<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; that a written notice of intention to accumulate annual leave for this purpose has been given at the beginning of the<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; year, or the accumulation period.<br><br>1.11&nbsp; &nbsp; &nbsp;If a staff is granted medical/maternity/<wbr>compassionate leave while on annual leave, he may be allowed extension of<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; his annual leave after such period of leave, if he applied and produced the relevant medical certificates or any other<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; relevant documentary evidence. Alternatively, his annual leave record will be credited back accordingly.<br><br>1.12&nbsp; &nbsp; &nbsp;In the event of a staff\'s cessation of employment due to resignation, retrenchment, retirement, death or on grounds<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; other than misconduct, he will be entitled to proportionate leave for completed months of service during the year in<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; addition to leave carried forward (if any).<br><br>1.13&nbsp; &nbsp; &nbsp;Any payment of money in lieu of annual leave, such as in the event of death or resignation, or compensation for leave<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; forfeited, shall be based on the ordinary rate of pay</p>', '2024-04-24', 5),
(11, 'test', 'test', 'Industrial Training', '<p>**The Rise of Valorant: A Game-Changer in the Esports World**</p>\r\n<p>In the vast landscape of competitive gaming, Riot Games, renowned for League of Legends, ventured into uncharted territory with Valorant, a tactical first-person shooter (FPS) released in June 2020. Drawing inspiration from classic FPS games like Counter-Strike and blending it with unique character abilities akin to hero shooters like Overwatch, Valorant quickly carved out its niche in the gaming world. With its strategic depth, precise gunplay, and a diverse cast of characters, Valorant has emerged as a prominent player in the esports scene, captivating players and audiences alike. Let\'s delve into what makes Valorant stand out and how it has become a game-changer in the esports industry.</p>\r\n<p>**The Birth of Valorant:**</p>\r\n<p>Valorant\'s journey began with Riot Games\' ambition to create a competitive FPS that combines the elements of tactical gameplay and character-based abilities. The game\'s development was shrouded in secrecy, with limited information released until its official announcement in March 2020. Anticipation soared as gamers worldwide awaited the launch of Riot\'s newest venture.</p>\r\n<p>Upon release, Valorant captivated players with its polished mechanics, sleek visuals, and a diverse roster of agents, each with unique abilities. The game\'s emphasis on precise gunplay and strategic teamwork resonated with fans of tactical shooters, while its character abilities added layers of depth and complexity to gameplay. From the outset, it was evident that Valorant aimed not only to entertain but also to establish itself as a competitive esports title.</p>\r\n<p>**The Competitive Landscape:**</p>\r\n<p>Valorant\'s entry into the esports arena was met with immense enthusiasm from players and organizations alike. With Riot Games\' track record in esports management through League of Legends, expectations were high for Valorant\'s competitive scene. The game\'s format, reminiscent of traditional esports titles, featured ranked modes, tournaments, and a clear path to professional play through the Valorant Champions Tour (VCT).</p>\r\n<p>The VCT served as the pinnacle of Valorant\'s competitive ecosystem, offering aspiring players and established pros the opportunity to compete on a global stage. Regional tournaments, qualifiers, and international events showcased the game\'s competitive depth and provided a platform for emerging talent to shine. With substantial prize pools and a dedicated fanbase, Valorant esports rapidly gained traction, cementing its status as a premier title in the competitive gaming landscape.</p>\r\n<p>**The Impact on Esports:**</p>\r\n<p>Valorant\'s rapid ascent had a profound impact on the esports industry, reshaping the landscape and setting new standards for competitive gaming. Its success demonstrated the viability of character-based shooters in the esports arena, paving the way for future titles to explore similar concepts. Moreover, Valorant\'s emphasis on strategic depth and teamwork highlighted the importance of communication and coordination in competitive play, influencing the approach of aspiring esports professionals.</p>\r\n<p>The game\'s accessibility also played a significant role in its widespread adoption within the esports community. With a free-to-play model and relatively low system requirements, Valorant appealed to a broad audience, transcending geographical and socioeconomic barriers. This accessibility fostered a diverse player base and contributed to the game\'s global appeal, further solidifying its position in the esports zeitgeist.</p>\r\n<p>**Community Engagement and Development:**</p>\r\n<p>Central to Valorant\'s success was Riot Games\' commitment to community engagement and ongoing development. Regular updates, balance patches, and new content releases ensured that the game remained fresh and dynamic, keeping players invested in its long-term success. Additionally, Riot actively solicited feedback from players and pro teams, incorporating community input into its decision-making process and fostering a sense of ownership among the player base.</p>\r\n<p>The developer\'s transparent communication and proactive approach to addressing issues further bolstered player trust and loyalty, reinforcing Valorant\'s reputation as a player-focused title. Esports initiatives, such as in-game esports cosmetics and viewer rewards for tournament broadcasts, also incentivized player engagement and contributed to the growth of Valorant\'s esports ecosystem.</p>\r\n<p>**Conclusion:**</p>\r\n<p>In just a few years since its release, Valorant has established itself as a dominant force in the esports world, captivating players and audiences with its blend of tactical gameplay, character abilities, and competitive depth. Its impact on the industry is undeniable, setting new standards for esports titles and inspiring a new generation of gamers and professionals.</p>\r\n<p>As Valorant continues to evolve and expand, one thing remains certain: its legacy as a game-changer in the esports landscape is secure. With Riot Games\' ongoing support and the unwavering dedication of its community, Valorant is poised to shape the future of competitive gaming for years to come.<br><br></p>\r\n<p>**The Rise of Valorant: A Game-Changer in the Esports World**</p>\r\n<p>In the vast landscape of competitive gaming, Riot Games, renowned for League of Legends, ventured into uncharted territory with Valorant, a tactical first-person shooter (FPS) released in June 2020. Drawing inspiration from classic FPS games like Counter-Strike and blending it with unique character abilities akin to hero shooters like Overwatch, Valorant quickly carved out its niche in the gaming world. With its strategic depth, precise gunplay, and a diverse cast of characters, Valorant has emerged as a prominent player in the esports scene, captivating players and audiences alike. Let\'s delve into what makes Valorant stand out and how it has become a game-changer in the esports industry.</p>\r\n<p>**The Birth of Valorant:**</p>\r\n<p>Valorant\'s journey began with Riot Games\' ambition to create a competitive FPS that combines the elements of tactical gameplay and character-based abilities. The game\'s development was shrouded in secrecy, with limited information released until its official announcement in March 2020. Anticipation soared as gamers worldwide awaited the launch of Riot\'s newest venture.</p>\r\n<p>Upon release, Valorant captivated players with its polished mechanics, sleek visuals, and a diverse roster of agents, each with unique abilities. The game\'s emphasis on precise gunplay and strategic teamwork resonated with fans of tactical shooters, while its character abilities added layers of depth and complexity to gameplay. From the outset, it was evident that Valorant aimed not only to entertain but also to establish itself as a competitive esports title.</p>\r\n<p>**The Competitive Landscape:**</p>\r\n<p>Valorant\'s entry into the esports arena was met with immense enthusiasm from players and organizations alike. With Riot Games\' track record in esports management through League of Legends, expectations were high for Valorant\'s competitive scene. The game\'s format, reminiscent of traditional esports titles, featured ranked modes, tournaments, and a clear path to professional play through the Valorant Champions Tour (VCT).</p>\r\n<p>The VCT served as the pinnacle of Valorant\'s competitive ecosystem, offering aspiring players and established pros the opportunity to compete on a global stage. Regional tournaments, qualifiers, and international events showcased the game\'s competitive depth and provided a platform for emerging talent to shine. With substantial prize pools and a dedicated fanbase, Valorant esports rapidly gained traction, cementing its status as a premier title in the competitive gaming landscape.</p>\r\n<p>**The Impact on Esports:**</p>\r\n<p>Valorant\'s rapid ascent had a profound impact on the esports industry, reshaping the landscape and setting new standards for competitive gaming. Its success demonstrated the viability of character-based shooters in the esports arena, paving the way for future titles to explore similar concepts. Moreover, Valorant\'s emphasis on strategic depth and teamwork highlighted the importance of communication and coordination in competitive play, influencing the approach of aspiring esports professionals.</p>\r\n<p>The game\'s accessibility also played a significant role in its widespread adoption within the esports community. With a free-to-play model and relatively low system requirements, Valorant appealed to a broad audience, transcending geographical and socioeconomic barriers. This accessibility fostered a diverse player base and contributed to the game\'s global appeal, further solidifying its position in the esports zeitgeist.</p>\r\n<p>**Community Engagement and Development:**</p>\r\n<p>Central to Valorant\'s success was Riot Games\' commitment to community engagement and ongoing development. Regular updates, balance patches, and new content releases ensured that the game remained fresh and dynamic, keeping players invested in its long-term success. Additionally, Riot actively solicited feedback from players and pro teams, incorporating community input into its decision-making process and fostering a sense of ownership among the player base.</p>\r\n<p>The developer\'s transparent communication and proactive approach to addressing issues further bolstered player trust and loyalty, reinforcing Valorant\'s reputation as a player-focused title. Esports initiatives, such as in-game esports cosmetics and viewer rewards for tournament broadcasts, also incentivized player engagement and contributed to the growth of Valorant\'s esports ecosystem.</p>\r\n<p>**Conclusion:**</p>\r\n<p>In just a few years since its release, Valorant has established itself as a dominant force in the esports world, captivating players and audiences with its blend of tactical gameplay, character abilities', '2024-05-08', 9);
INSERT INTO `policy` (`p_id`, `p_title`, `p_description`, `p_category`, `p_polisi`, `p_date`, `po_id`) VALUES
(12, 'test', 'test', 'Business and Travel', '<p>**The Rise of Valorant: A Game-Changer in the Esports World**</p>\n<p>In the vast landscape of competitive gaming, Riot Games, renowned for League of Legends, ventured into uncharted territory with Valorant, a tactical first-person shooter (FPS) released in June 2020. Drawing inspiration from classic FPS games like Counter-Strike and blending it with unique character abilities akin to hero shooters like Overwatch, Valorant quickly carved out its niche in the gaming world. With its strategic depth, precise gunplay, and a diverse cast of characters, Valorant has emerged as a prominent player in the esports scene, captivating players and audiences alike. Let\'s delve into what makes Valorant stand out and how it has become a game-changer in the esports industry.</p>\n<p>**The Birth of Valorant:**</p>\n<p>Valorant\'s journey began with Riot Games\' ambition to create a competitive FPS that combines the elements of tactical gameplay and character-based abilities. The game\'s development was shrouded in secrecy, with limited information released until its official announcement in March 2020. Anticipation soared as gamers worldwide awaited the launch of Riot\'s newest venture.</p>\n<p>Upon release, Valorant captivated players with its polished mechanics, sleek visuals, and a diverse roster of agents, each with unique abilities. The game\'s emphasis on precise gunplay and strategic teamwork resonated with fans of tactical shooters, while its character abilities added layers of depth and complexity to gameplay. From the outset, it was evident that Valorant aimed not only to entertain but also to establish itself as a competitive esports title.</p>\n<p>**The Competitive Landscape:**</p>\n<p>Valorant\'s entry into the esports arena was met with immense enthusiasm from players and organizations alike. With Riot Games\' track record in esports management through League of Legends, expectations were high for Valorant\'s competitive scene. The game\'s format, reminiscent of traditional esports titles, featured ranked modes, tournaments, and a clear path to professional play through the Valorant Champions Tour (VCT).</p>\n<p>The VCT served as the pinnacle of Valorant\'s competitive ecosystem, offering aspiring players and established pros the opportunity to compete on a global stage. Regional tournaments, qualifiers, and international events showcased the game\'s competitive depth and provided a platform for emerging talent to shine. With substantial prize pools and a dedicated fanbase, Valorant esports rapidly gained traction, cementing its status as a premier title in the competitive gaming landscape.</p>\n<p>**The Impact on Esports:**</p>\n<p>Valorant\'s rapid ascent had a profound impact on the esports industry, reshaping the landscape and setting new standards for competitive gaming. Its success demonstrated the viability of character-based shooters in the esports arena, paving the way for future titles to explore similar concepts. Moreover, Valorant\'s emphasis on strategic depth and teamwork highlighted the importance of communication and coordination in competitive play, influencing the approach of aspiring esports professionals.</p>\n<p>The game\'s accessibility also played a significant role in its widespread adoption within the esports community. With a free-to-play model and relatively low system requirements, Valorant appealed to a broad audience, transcending geographical and socioeconomic barriers. This accessibility fostered a diverse player base and contributed to the game\'s global appeal, further solidifying its position in the esports zeitgeist.</p>\n<p>**Community Engagement and Development:**</p>\n<p>Central to Valorant\'s success was Riot Games\' commitment to community engagement and ongoing development. Regular updates, balance patches, and new content releases ensured that the game remained fresh and dynamic, keeping players invested in its long-term success. Additionally, Riot actively solicited feedback from players and pro teams, incorporating community input into its decision-making process and fostering a sense of ownership among the player base.</p>\n<p>The developer\'s transparent communication and proactive approach to addressing issues further bolstered player trust and loyalty, reinforcing Valorant\'s reputation as a player-focused title. Esports initiatives, such as in-game esports cosmetics and viewer rewards for tournament broadcasts, also incentivized player engagement and contributed to the growth of Valorant\'s esports ecosystem.</p>\n<p>**Conclusion:**</p>\n<p>In just a few years since its release, Valorant has established itself as a dominant force in the esports world, captivating players and audiences with its blend of tactical gameplay, character abilities, and competitive depth. Its impact on the industry is undeniable, setting new standards for esports titles and inspiring a new generation of gamers and professionals.</p>\n<p>As Valorant continues to evolve and expand, one thing remains certain: its legacy as a game-changer in the esports landscape is secure. With Riot Games\' ongoing support and the unwavering dedication of its community, Valorant is poised to shape the future of competitive gaming for years to come.<br><br></p>\n<p>**The Rise of Valorant: A Game-Changer in the Esports World**</p>\n<p>In the vast landscape of competitive gaming, Riot Games, renowned for League of Legends, ventured into uncharted territory with Valorant, a tactical first-person shooter (FPS) released in June 2020. Drawing inspiration from classic FPS games like Counter-Strike and blending it with unique character abilities akin to hero shooters like Overwatch, Valorant quickly carved out its niche in the gaming world. With its strategic depth, precise gunplay, and a diverse cast of characters, Valorant has emerged as a prominent player in the esports scene, captivating players and audiences alike. Let\'s delve into what makes Valorant stand out and how it has become a game-changer in the esports industry.</p>\n<p>**The Birth of Valorant:**</p>\n<p>Valorant\'s journey began with Riot Games\' ambition to create a competitive FPS that combines the elements of tactical gameplay and character-based abilities. The game\'s development was shrouded in secrecy, with limited information released until its official announcement in March 2020. Anticipation soared as gamers worldwide awaited the launch of Riot\'s newest venture.</p>\n<p>Upon release, Valorant captivated players with its polished mechanics, sleek visuals, and a diverse roster of agents, each with unique abilities. The game\'s emphasis on precise gunplay and strategic teamwork resonated with fans of tactical shooters, while its character abilities added layers of depth and complexity to gameplay. From the outset, it was evident that Valorant aimed not only to entertain but also to establish itself as a competitive esports title.</p>\n<p>**The Competitive Landscape:**</p>\n<p>Valorant\'s entry into the esports arena was met with immense enthusiasm from players and organizations alike. With Riot Games\' track record in esports management through League of Legends, expectations were high for Valorant\'s competitive scene. The game\'s format, reminiscent of traditional esports titles, featured ranked modes, tournaments, and a clear path to professional play through the Valorant Champions Tour (VCT).</p>\n<p>The VCT served as the pinnacle of Valorant\'s competitive ecosystem, offering aspiring players and established pros the opportunity to compete on a global stage. Regional tournaments, qualifiers, and international events showcased the game\'s competitive depth and provided a platform for emerging talent to shine. With substantial prize pools and a dedicated fanbase, Valorant esports rapidly gained traction, cementing its status as a premier title in the competitive gaming landscape.</p>\n<p>**The Impact on Esports:**</p>\n<p>Valorant\'s rapid ascent had a profound impact on the esports industry, reshaping the landscape and setting new standards for competitive gaming. Its success demonstrated the viability of character-based shooters in the esports arena, paving the way for future titles to explore similar concepts. Moreover, Valorant\'s emphasis on strategic depth and teamwork highlighted the importance of communication and coordination in competitive play, influencing the approach of aspiring esports professionals.</p>\n<p>The game\'s accessibility also played a significant role in its widespread adoption within the esports community. With a free-to-play model and relatively low system requirements, Valorant appealed to a broad audience, transcending geographical and socioeconomic barriers. This accessibility fostered a diverse player base and contributed to the game\'s global appeal, further solidifying its position in the esports zeitgeist.</p>\n<p>**Community Engagement and Development:**</p>\n<p>Central to Valorant\'s success was Riot Games\' commitment to community engagement and ongoing development. Regular updates, balance patches, and new content releases ensured that the game remained fresh and dynamic, keeping players invested in its long-term success. Additionally, Riot actively solicited feedback from players and pro teams, incorporating community input into its decision-making process and fostering a sense of ownership among the player base.</p>\n<p>The developer\'s transparent communication and proactive approach to addressing issues further bolstered player trust and loyalty, reinforcing Valorant\'s reputation as a player-focused title. Esports initiatives, such as in-game esports cosmetics and viewer rewards for tournament broadcasts, also incentivized player engagement and contributed to the growth of Valorant\'s esports ecosystem.</p>\n<p>**Conclusion:**</p>\n<p>In just a few years since its release, Valorant has established itself as a dominant force in the esports world, captivating players and audiences with its blend of tactical gameplay, character abilities', '2024-05-08', 7),
(13, 'testeddada', 'testdwad', 'Working Hour', '<p>Hello World!</p>\r\n<p>This is TinyMCE <strong>full</strong> editorwaddadwdw</p>', '2024-05-08', 7);

-- --------------------------------------------------------

--
-- Table structure for table `position_`
--

CREATE TABLE `position_` (
  `po_id` int(11) NOT NULL,
  `po_title` varchar(255) NOT NULL,
  `po_gred` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `position_`
--

INSERT INTO `position_` (`po_id`, `po_title`, `po_gred`) VALUES
(1, 'admin', 'admin'),
(3, 'Deputy General Manager ', 'G19-G23'),
(5, 'Managers', 'G17-G18'),
(7, 'Assistant Manager', 'G15-G16'),
(9, 'Executive', 'G11-G14');

-- --------------------------------------------------------

--
-- Table structure for table `prosedur`
--

CREATE TABLE `prosedur` (
  `pro_id` int(11) NOT NULL,
  `pro_title` varchar(255) NOT NULL,
  `pro_date` date NOT NULL,
  `pro_doc` varchar(255) NOT NULL,
  `pro_category` varchar(255) NOT NULL,
  `staff_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `prosedur`
--

INSERT INTO `prosedur` (`pro_id`, `pro_title`, `pro_date`, `pro_doc`, `pro_category`, `staff_id`) VALUES
(1, 'Prosedur GTL & GPA (Kematian Pekerja)', '2024-04-01', '10.1016@j.neulet.2020.134804.pdf', 'Faedah & Pampasan', 0),
(2, 'Prosedur GTL & GPA (Hilang Upaya Kekal)', '2024-04-01', 'A Chatbot for Early Detection of Mental Health Issues among University Students.pdf', 'Faedah & Pampasan', 0),
(3, 'Prosedur Pengesahan Jawatan', '2024-04-01', 'Context-AwareDiscoveryofRelevantWebServicesinAd-hocMobileCloud.pdf', 'Penjawatan', 0),
(4, 'Prosedur Memohon Tenaga Kerja Baru', '2024-04-01', '364978b5f28a5ccae59ac0f78d60fecf.pdf', 'Penjawatan', 0),
(5, 'Prosedur Pengesahan Jawatan Pekerja', '2024-04-01', 'The Use of Artificial Intelligence–Based Conversational Agents.pdf', 'Sistem', 0),
(6, 'Prosedur Membuat Pertukaran Nombor Akaun', '2024-04-01', 'R_AppyingamethodformeasuringUICperformance.pdf', 'Sistem', 0),
(7, 'Prosedur Cuti Sakit / Penghospitalan', '2024-04-01', 'franzen2021.pdf', 'Rekod Cuti', 0),
(8, 'Prosedur  Membatalkan Cuti Tahunan', '2024-04-01', 'Psychiatrists in Malaysia The Ratio and Distribution.pdf', 'Rekod Cuti', 0),
(9, 'Prosedur Kilanan', '2024-04-01', 'herrmann2019.pdf', 'Disiplin', 0),
(10, 'Prosedur Mengeluarkan Tiket Disiplin', '2024-04-01', 'chapter 3 Methodology - Asyraf .pdf', 'Disiplin', 0),
(11, 'Tag Panduan Tindakkan Disiplin', '2024-04-01', 'mental_disorders_in_malaysia_an_increase_in_lifetime_prevalence.pdf', 'Lain - lain', 0),
(12, 'Prosedur Memohon Pinjaman Peribadi Bank Rakyat', '2024-04-01', 'fpubh-10-831349.pdf', 'Lain - lain', 0),
(13, 'Prosedur Memohon Skim Bantuan Pendidikan', '2024-04-01', 'Faedah & Pampasan', 'Faedah & Pampasan', 0),
(14, 'Prosedur Pembayaran Skim Bantuan Pendidikan', '2024-04-01', 'What are high performers made of.pdf', 'Faedah & Pampasan', 0);

-- --------------------------------------------------------

--
-- Table structure for table `pro_induksi`
--

CREATE TABLE `pro_induksi` (
  `pi_id` int(11) NOT NULL,
  `pi_title` varchar(255) NOT NULL,
  `pi_doc` varchar(255) NOT NULL,
  `pi_category` varchar(255) NOT NULL,
  `staff_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pro_induksi`
--

INSERT INTO `pro_induksi` (`pi_id`, `pi_title`, `pi_doc`, `pi_category`, `staff_id`) VALUES
(1, 'Program Eksekutif', '364978b5f28a5ccae59ac0f78d60fecf.pdf', 'Program Eksekutif', 0),
(2, 'Program Bukan Eksekutif', 'A Graph Based Chatbot for Cancer Patients.pdf', 'Program Bukan Eksekutif', 0),
(3, 'Program Operator Pengeluaran', '10.1186@s12911-019-0796-x.pdf', 'Program Operator Pengeluaran', 0),
(4, 'Borang Permohonan Latihan Industri (ITRF)', '1-s2.0-S0095454322001300.pdf', 'Latihan Industri', 0),
(5, 'Prosedur Pengambilan Pelajar Latihan Industri', 'chen2019 (1).pdf', 'Latihan Industri', 0),
(6, 'Borang Kekosongan Jawatan Dalaman', 'Context-AwareDiscoveryofRelevantWebServicesinAd-hocMobileCloud.pdf', 'Kekosongan Jawatan', 0),
(7, 'Tarikh Temuduga', 'duffy2020.pdf', 'Kekosongan Jawatan', 0),
(8, 'Temuduga Terbuka', 'e025363.full.pdf', 'Kekosongan Jawatan', 0),
(9, 'Prosedur Memohon Tenaga Kerja Baru', 'komorowski2018.pdf', 'Kekosongan Jawatan', 0),
(10, 'Jadual Temuduga', 'A Chatbot for Early Detection of Mental Health Issues among University Students.pdf', 'Pengambilan Pekerja', 0),
(11, 'Manpower Requisition Form', 'DSRM.pdf', 'Pengambilan Pekerja', 0),
(12, 'Prosedure Memohon Tenaga Kerja Baru', 'e025363.full.pdf', 'Pengambilan Pekerja', 0),
(13, 'Manpower Requirement Justification Form', 'Mental Health of University Students in Sourtheastern Asia.pdf', 'Pengambilan Pekerja', 0),
(14, 'Borang Permohonan Jawatan Dalaman', 'Psychiatrists in Malaysia The Ratio and Distribution.pdf', 'Pengambilan Pekerja', 0),
(15, 'Prosedur Pengesahan Jawatan', 'Artificial Intelligence for Mental Health and Mental.pdf', 'Pengesahan Jawatan', 0),
(16, 'Borang Penilaian Pengesahan Jawatan Bagi Eksekutif', 'venkatraman2019.pdf', 'Pengesahan Jawatan', 0),
(17, 'Borang Penilaian Pengesahan Jawatan Bagi Bukan Eksekutif (Pekerja Pejabat)', 'william2021.pdf', 'Pengesahan Jawatan', 0),
(18, 'Borang Penilaian Pengesahan Jawatan Bagi Ketua Kumpulan dan Operator Pengeluaran', 'e025363.full.pdf', 'Pengesahan Jawatan', 0);

-- --------------------------------------------------------

--
-- Table structure for table `schedule_list`
--

CREATE TABLE `schedule_list` (
  `id` int(30) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `start_datetime` date NOT NULL,
  `end_datetime` date DEFAULT NULL,
  `cal_doc` varchar(255) NOT NULL,
  `cal_category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `schedule_list`
--

INSERT INTO `schedule_list` (`id`, `title`, `description`, `start_datetime`, `end_datetime`, `cal_doc`, `cal_category`) VALUES
(1, 'Memo - Kadar Bayaran Semasa Cuti Umum Nuzul Quran 2024', 'Memo - Kadar Bayaran Semasa Cuti Umum Nuzul Quran 2024', '2024-03-28', '2024-03-28', 'Memo - Kadar Bayaran Semasa Cuti Umum Nuzul Quran 2024.pdf', 'Memo'),
(2, 'Shutdown - Cuti Raya', 'Shutdown - Cuti Raya Aidil Fitri', '2024-04-08', '2024-04-12', 'Memo - Kadar Bayaran Semasa Cuti Umum Nuzul Quran 2024.pdf', 'Memo'),
(3, 'Circular Mid-year Appraisal 2024', 'Circular Mid-year Appraisal 2024', '2024-04-03', '2024-04-03', 'Circular Mid-year Appraisal 2024.pdf', 'Pekeliling'),
(4, 'Memo - Kadar Bayaran Semasa Cuti Umum Nuzul Quran 2024', 'Memo - Kadar Bayaran Semasa Cuti Umum Nuzul Quran 2024', '2024-04-26', '2024-04-26', 'Memo - Kadar Bayaran Semasa Cuti Umum Nuzul Quran 2024.pdf', 'Memo'),
(5, 'Circular Mid-year Appraisal 2024', 'Circular Mid-year Appraisal 2024', '2024-04-29', '2024-04-29', 'Circular Mid-year Appraisal 2024.pdf', 'Pekeliling'),
(6, 'Circular Mid-year Appraisal 2024', 'Circular Mid-year Appraisal 2024', '2024-05-01', '2024-05-01', 'Circular Mid-year Appraisal 2024.pdf', 'Pekeliling'),
(7, 'Memo - Kadar Bayaran Semasa Cuti Umum Nuzul Quran 2024', 'Memo - Kadar Bayaran Semasa Cuti Umum Nuzul Quran 2024 ', '2024-05-04', '2024-05-09', '10 traits found in excellent managers.pdf', 'Memo');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `sl_id` int(11) NOT NULL,
  `sl_title` varchar(255) NOT NULL,
  `sl_doc` varchar(255) NOT NULL,
  `staff_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`sl_id`, `sl_title`, `sl_doc`, `staff_id`) VALUES
(1, 'perodua', '432423622_778095194349845_975549074596085863_n (2).jpg', 1),
(2, 'ramadan playlist', '432967080_783332967159401_7334915367442101084_n (1).jpg', 0),
(3, 'verify', 'verify.jpg', 0),
(7, 'ramadan playlist 3', '432423622_778095194349845_975549074596085863_n (2).jpg', 1),
(13, 'slide1', 'slide1.png', 1),
(14, 'slide2', 'slide2.png', 1),
(15, 'slide3', 'slide3.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staff_id` int(11) NOT NULL,
  `staff_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `staff_pass_id` varchar(255) NOT NULL,
  `po_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_id`, `staff_name`, `password`, `staff_pass_id`, `po_id`) VALUES
(1, 'admin', 'admin123', '0', 1),
(2, 'A', '', '1', 3),
(3, 'B', '', '2', 5),
(4, 'C', '', '3', 7),
(5, 'D', '', '4', 9),
(6, 'E', 'password', '5', 9),
(7, 'F', 'F', '6', 7),
(8, 'G', 'G', '7', 5),
(9, 'test a', 'q1w2', '123', 9);

-- --------------------------------------------------------

--
-- Table structure for table `user_admin`
--

CREATE TABLE `user_admin` (
  `ua_id` int(11) NOT NULL,
  `ua_username` varchar(255) NOT NULL,
  `ua_pass_id` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `staff_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_admin`
--

INSERT INTO `user_admin` (`ua_id`, `ua_username`, `ua_pass_id`, `password`, `staff_id`) VALUES
(1, 'Asyraf', '723048', 'asd123', 1),
(5, 'test', '124', '111', 1);

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE `visitors` (
  `visitor_id` int(11) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aktiviti`
--
ALTER TABLE `aktiviti`
  ADD PRIMARY KEY (`ak_id`);

--
-- Indexes for table `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`an_id`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`ar_id`);

--
-- Indexes for table `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`bk_id`);

--
-- Indexes for table `bborang`
--
ALTER TABLE `bborang`
  ADD PRIMARY KEY (`bb_id`);

--
-- Indexes for table `brules`
--
ALTER TABLE `brules`
  ADD PRIMARY KEY (`br_id`);

--
-- Indexes for table `buletin_ir`
--
ALTER TABLE `buletin_ir`
  ADD PRIMARY KEY (`ir_id`);

--
-- Indexes for table `calendar`
--
ALTER TABLE `calendar`
  ADD PRIMARY KEY (`cal_id`),
  ADD KEY `staff_id` (`staff_id`);

--
-- Indexes for table `chatbot`
--
ALTER TABLE `chatbot`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`cu_id`);

--
-- Indexes for table `disiplin`
--
ALTER TABLE `disiplin`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `jawatan_dalaman`
--
ALTER TABLE `jawatan_dalaman`
  ADD PRIMARY KEY (`jd_id`);

--
-- Indexes for table `jawatan_kosong`
--
ALTER TABLE `jawatan_kosong`
  ADD PRIMARY KEY (`jk_id`);

--
-- Indexes for table `memo`
--
ALTER TABLE `memo`
  ADD PRIMARY KEY (`me_id`);

--
-- Indexes for table `message_`
--
ALTER TABLE `message_`
  ADD PRIMARY KEY (`ms_id`);

--
-- Indexes for table `orga`
--
ALTER TABLE `orga`
  ADD PRIMARY KEY (`or_id`);

--
-- Indexes for table `page_visits`
--
ALTER TABLE `page_visits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pdpa`
--
ALTER TABLE `pdpa`
  ADD PRIMARY KEY (`pd_id`);

--
-- Indexes for table `pekeliling`
--
ALTER TABLE `pekeliling`
  ADD PRIMARY KEY (`pe_id`);

--
-- Indexes for table `perjanjian_bersama`
--
ALTER TABLE `perjanjian_bersama`
  ADD PRIMARY KEY (`pb_id`);

--
-- Indexes for table `policy`
--
ALTER TABLE `policy`
  ADD PRIMARY KEY (`p_id`),
  ADD KEY `po_id` (`po_id`);

--
-- Indexes for table `position_`
--
ALTER TABLE `position_`
  ADD PRIMARY KEY (`po_id`);

--
-- Indexes for table `prosedur`
--
ALTER TABLE `prosedur`
  ADD PRIMARY KEY (`pro_id`);

--
-- Indexes for table `pro_induksi`
--
ALTER TABLE `pro_induksi`
  ADD PRIMARY KEY (`pi_id`);

--
-- Indexes for table `schedule_list`
--
ALTER TABLE `schedule_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`sl_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_id`),
  ADD KEY `po_id` (`po_id`);

--
-- Indexes for table `user_admin`
--
ALTER TABLE `user_admin`
  ADD PRIMARY KEY (`ua_id`);

--
-- Indexes for table `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`visitor_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aktiviti`
--
ALTER TABLE `aktiviti`
  MODIFY `ak_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `announcement`
--
ALTER TABLE `announcement`
  MODIFY `an_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `ar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `bank`
--
ALTER TABLE `bank`
  MODIFY `bk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `bborang`
--
ALTER TABLE `bborang`
  MODIFY `bb_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `brules`
--
ALTER TABLE `brules`
  MODIFY `br_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `buletin_ir`
--
ALTER TABLE `buletin_ir`
  MODIFY `ir_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `calendar`
--
ALTER TABLE `calendar`
  MODIFY `cal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `chatbot`
--
ALTER TABLE `chatbot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `cu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `disiplin`
--
ALTER TABLE `disiplin`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `jawatan_dalaman`
--
ALTER TABLE `jawatan_dalaman`
  MODIFY `jd_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `jawatan_kosong`
--
ALTER TABLE `jawatan_kosong`
  MODIFY `jk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `memo`
--
ALTER TABLE `memo`
  MODIFY `me_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `message_`
--
ALTER TABLE `message_`
  MODIFY `ms_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `orga`
--
ALTER TABLE `orga`
  MODIFY `or_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `page_visits`
--
ALTER TABLE `page_visits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2597;

--
-- AUTO_INCREMENT for table `pdpa`
--
ALTER TABLE `pdpa`
  MODIFY `pd_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pekeliling`
--
ALTER TABLE `pekeliling`
  MODIFY `pe_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `perjanjian_bersama`
--
ALTER TABLE `perjanjian_bersama`
  MODIFY `pb_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `policy`
--
ALTER TABLE `policy`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `position_`
--
ALTER TABLE `position_`
  MODIFY `po_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `prosedur`
--
ALTER TABLE `prosedur`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `pro_induksi`
--
ALTER TABLE `pro_induksi`
  MODIFY `pi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `schedule_list`
--
ALTER TABLE `schedule_list`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `sl_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staff_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user_admin`
--
ALTER TABLE `user_admin`
  MODIFY `ua_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `visitors`
--
ALTER TABLE `visitors`
  MODIFY `visitor_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `policy`
--
ALTER TABLE `policy`
  ADD CONSTRAINT `policy_ibfk_1` FOREIGN KEY (`po_id`) REFERENCES `position_` (`po_id`);

--
-- Constraints for table `staff`
--
ALTER TABLE `staff`
  ADD CONSTRAINT `staff_ibfk_1` FOREIGN KEY (`po_id`) REFERENCES `position_` (`po_id`),
  ADD CONSTRAINT `staff_ibfk_2` FOREIGN KEY (`po_id`) REFERENCES `position_` (`po_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
