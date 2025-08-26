-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2024 at 11:29 AM
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
-- Database: `talent_trade`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_message`
--

CREATE TABLE `tbl_message` (
  `msg_id` int(11) NOT NULL,
  `incoming_msg_id` int(255) NOT NULL,
  `outgoing_msg_id` int(255) NOT NULL,
  `msg` varchar(1000) NOT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_message`
--

INSERT INTO `tbl_message` (`msg_id`, `incoming_msg_id`, `outgoing_msg_id`, `msg`, `created_at`) VALUES
(1, 1659264347, 115792625, 'hiii', '2024-02-21 16:36:53'),
(2, 115792625, 1659264347, 'hello', '2024-02-21 16:37:32'),
(3, 115792625, 1434763537, 'hii', '2024-02-25 13:13:31'),
(4, 1434763537, 1485306151, 'Hello', '2024-03-10 10:47:00'),
(5, 1485306151, 1292318714, 'hii', '2024-03-11 12:27:18'),
(6, 1292318714, 1485306151, 'Hii', '2024-03-11 12:28:29'),
(7, 1485306151, 1292318714, 'byy', '2024-03-11 12:28:35'),
(8, 1292318714, 1485306151, 'ok ', '2024-03-11 12:28:40'),
(9, 1485306151, 1292318714, 'hii', '2024-03-11 12:28:55'),
(10, 1485306151, 1448790007, 'Hello', '2024-03-11 14:14:08'),
(11, 1485306151, 1448790007, 'Want to learn CSS?', '2024-03-11 14:14:22'),
(12, 1448790007, 1485306151, 'Hello', '2024-03-11 14:14:57'),
(13, 1448790007, 1485306151, 'Sure ', '2024-03-11 14:15:38'),
(14, 1448790007, 1485306151, 'What do you want to know?', '2024-03-11 14:15:50'),
(15, 1434763537, 1485306151, 'Can you help me with the skill i want to learn ?', '2024-03-11 15:02:27'),
(16, 1485306151, 576605491, 'hello', '2024-03-11 16:11:16'),
(17, 1515433432, 1485306151, 'Hey', '2024-03-18 10:18:07'),
(18, 1485306151, 1515433432, 'Hello', '2024-03-18 10:18:16'),
(19, 1515433432, 1485306151, 'I want to learn graph designing ', '2024-03-18 10:18:38'),
(20, 1485306151, 1515433432, 'Sure ', '2024-03-18 10:18:43'),
(21, 1485306151, 1515433432, 'Tell me do you have any knowledge about the graphic designing ?', '2024-03-18 10:29:52'),
(22, 1515433432, 1485306151, 'Yes, I do have a basic knowledge about it', '2024-03-18 10:32:18'),
(23, 1515433432, 1485306151, 'I want to know about the shortcuts that will help me for graphic designing', '2024-03-18 10:32:48'),
(24, 1485306151, 1515433432, 'Oh.. thats great', '2024-03-18 10:32:55'),
(25, 1485306151, 1515433432, 'Sure i do know many shortcuts and will surely share it with you.', '2024-03-18 10:33:15'),
(26, 1485306151, 1515433432, 'Zoom in and out: Use the plus and minus keys Add a layer mask: Use Control+Shift+N (Windows) or Command+Shift+N (Mac) Soften the edges of a selection: Use the feather selection shortcut Select objects or areas within images: Use the lasso tool Select layers of a photo: Use the marquee tool Increase or decrease the size of the brush: Use the brackets, ] for increasing and [ for decreasing Select sections and objects: Use the Magic Wand tool Open the Hue/Saturation tool: Use Ctrl+U (PC) or Cmd+U (Mac)', '2024-03-18 10:37:30'),
(27, 1485306151, 1515433432, 'These are few of them', '2024-03-18 10:38:45'),
(28, 1485306151, 1515433432, 'Feel free to ask for some specific', '2024-03-18 10:38:54'),
(29, 1515433432, 1485306151, 'Sure', '2024-03-18 10:39:19'),
(30, 1515433432, 1485306151, 'Thanks for the help', '2024-03-18 10:39:25'),
(31, 1292318714, 1485306151, 'Hello', '2024-03-18 13:21:24'),
(32, 1515433432, 1485306151, 'Hey', '2024-03-18 13:21:41'),
(33, 1515433432, 1485306151, 'Need for help', '2024-03-18 13:21:46'),
(34, 1131188174, 880127963, 'Hello', '2024-03-18 15:54:53'),
(35, 1131188174, 880127963, 'Can you help me with javascript ?', '2024-03-18 15:55:09'),
(36, 880127963, 1131188174, 'Hii', '2024-03-18 15:55:54'),
(37, 880127963, 1131188174, 'Sure i can help you with that', '2024-03-18 15:56:01');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_review`
--

CREATE TABLE `tbl_review` (
  `re_id` int(11) NOT NULL,
  `skill_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `session_user_id` int(11) NOT NULL,
  `review` varchar(1000) NOT NULL,
  `rating` varchar(255) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_review`
--

INSERT INTO `tbl_review` (`re_id`, `skill_id`, `user_id`, `session_user_id`, `review`, `rating`, `created_date`) VALUES
(1, 2, 1, 3, 'worst', '5', '2024-02-25 07:46:10'),
(2, 7, 3, 4, 'Excellent Explanation! Thanks for teaching me Python!', '4.5', '2024-03-11 09:47:00'),
(3, 13, 11, 4, 'Very helpful! Thank you\r\n', '4.5', '2024-03-18 05:10:06'),
(4, 13, 11, 4, 'Very helpful! Thank you\r\n', '4.5', '2024-03-18 05:10:14');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_skill_master`
--

CREATE TABLE `tbl_skill_master` (
  `skill_id` int(11) NOT NULL,
  `skill_title` varchar(255) NOT NULL,
  `skill_type` varchar(20) NOT NULL,
  `skill_image` varchar(500) NOT NULL,
  `skill_desc` text DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `status` int(11) DEFAULT 0,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_skill_master`
--

INSERT INTO `tbl_skill_master` (`skill_id`, `skill_title`, `skill_type`, `skill_image`, `skill_desc`, `user_id`, `status`, `created_date`) VALUES
(5, 'Java', 'Learn', 'upload/skill_image/download.png', 'Java is a multi-platform, object-oriented, and network-centric language that can be used as a platform in itself. It is a fast, secure, reliable programming language for coding everything from mobile apps and enterprise software to big data applications and server-side technologies.', 3, 0, '2024-03-09 09:59:26'),
(6, 'C#', 'Learn', 'upload/skill_image/download.jpeg', 'C# (/ˌsiː ˈʃɑːrp/ see SHARP) is a general-purpose high-level programming language supporting multiple paradigms. C# encompasses static typing, strong typing, lexically scoped, imperative, declarative, functional, generic, object-oriented (class-based), and component-oriented programming disciplines.', 3, 0, '2024-03-09 09:59:39'),
(8, 'PHP', 'Teach', 'upload/skill_image/php.png', 'PHP is a general-purpose scripting language geared towards web development. It was originally created by Danish-Canadian programmer Rasmus Lerdorf in 1993 and released in 1995. The PHP reference implementation is now produced by the PHP Group.', 4, 0, '2024-03-09 09:53:36'),
(9, 'CSS ', 'Teach', 'upload/skill_image/css.png', 'Cascading Style Sheets is a style sheet language used for specifying the presentation and styling of a document written in a markup language such as HTML or XML. CSS is a cornerstone technology of the World Wide Web, alongside HTML and JavaScript.\r\n\r\n', 4, 0, '2024-03-09 09:54:29'),
(10, 'Content Writing', 'Learn', 'upload/skill_image/contentwriting.jpg', 'Content writing is the process of creating and publishing written content for a variety of purposes, including marketing, education, and entertainment. Content writers must be able to research topics, write in a clear and concise style, and edit their work for grammar and spelling errors.', 4, 0, '2024-03-09 09:55:10'),
(11, 'CSS ', 'Learn', 'upload/skill_image/css.png', 'Interested in learning few tips and tricks for using CSS.', 7, 0, '2024-03-11 08:43:45'),
(13, 'Graphic Designing ', 'Teach', 'upload/skill_image/graphc-design-traning.jpg', 'Graphic design is a profession, academic discipline and applied art whose activity consists in projecting visual communications intended to transmit specific messages to social groups, with specific objectives. I have knowledge about the graphic designing tools like Adobe Photoshop and know a lot of shortcuts and can help with that.', 11, 0, '2024-03-18 04:28:19'),
(14, 'MS Excel Shortcuts', 'Teach', 'upload/skill_image/Microsoft_Office_Excel_(2019–present).svg.png', 'Microsoft Excel is a spreadsheet editor and have features for calculation or computation capabilities, graphing tools, pivot tables, and a macro programming language called Visual Basic for Applications. I have knowledge about all the functionalities and shortcuts.\r\n', 11, 0, '2024-03-18 04:38:09'),
(15, 'Python', 'Teach', 'upload/skill_image/download.jpg', 'Python is a high-level, general-purpose programming language. Its design philosophy emphasizes code readability with the use of significant indentation. Python is dynamically typed and garbage-collected. It supports multiple programming paradigms, including structured, object-oriented and functional programming. ', 11, 0, '2024-03-18 09:30:39'),
(16, 'Content Writing', 'Teach', 'upload/skill_image/download (1).jpg', 'Content writing is the process of writing, editing, and publishing content in a digital format, such as blog posts, video or podcast scripts, ebooks, press releases, and social media copy. Content writing is a sub-specialty of copywriting that helps brands market their products.', 11, 0, '2024-03-18 09:32:34'),
(17, 'Javascript', 'Teach', 'upload/skill_image/download (1).png', 'JavaScript, often abbreviated as JS, is a programming language and core technology of the Web, alongside HTML and CSS. 99% of websites use JavaScript on the client side for webpage behavior. ', 6, 0, '2024-03-18 09:36:53'),
(18, 'CSS', 'Teach', 'upload/skill_image/css.png', 'Cascading Style Sheets is a style sheet language used for specifying the presentation and styling of a document written in a markup language such as HTML or XML. CSS is a cornerstone technology of the World Wide Web, alongside HTML and JavaScript.', 6, 0, '2024-03-18 09:37:46'),
(19, 'Communication Skills', 'Teach', 'upload/skill_image/1678274316.jpg', 'Communication skills are the ability to exchange information with others.', 6, 0, '2024-03-18 09:42:13'),
(20, 'React', 'Teach', 'upload/skill_image/react.png', 'React is a free and open-source front-end JavaScript library for building user interfaces based on components. It is maintained by Meta and a community of individual developers and companies. React can be used to develop single-page, mobile, or server-rendered applications with frameworks like Next.js.', 6, 0, '2024-03-18 09:43:40'),
(21, 'SQL', 'Teach', 'upload/skill_image/Untitled.jpg', 'Structured Query Language is a domain-specific language used to manage data, especially in a relational database management system. It is particularly useful in handling structured data, i.e., data incorporating relations among entities and variables.', 4, 0, '2024-03-18 09:46:10'),
(22, 'Vocabulary-ILETS', 'Teach', 'upload/skill_image/Untitled1.jpg', 'A vocabulary (also known as a lexicon) is a set of words, typically the set in a language or the set known to an individual. The word vocabulary originated from the Latin vocabulum, meaning \"a word, name\". It forms an essential component of language and communication, helping convey thoughts, ideas, emotions, and information.', 8, 0, '2024-03-18 09:49:00'),
(23, 'Java', 'Learn', 'upload/skill_image/download.png', 'Java is a high-level, class-based, object-oriented programming language that is designed to have as few implementation dependencies as possible. It is a general-purpose programming language.', 8, 0, '2024-03-18 09:50:36'),
(24, 'Python', 'Learn', 'upload/skill_image/python-logo-master-v3-TM.png', 'Python is a high-level, general-purpose programming language. Its design philosophy emphasizes code readability with the use of significant indentation. Python is dynamically typed and garbage-collected.', 8, 0, '2024-03-18 09:51:14'),
(25, 'Musical Tips', 'Teach', 'upload/skill_image/Untitled2.jpg', 'To excel in music, embrace consistent practice, balancing technical proficiency with expressive interpretation. Cultivate a deep understanding of music theory and immerse yourself in diverse genres to broaden your musical palette. ', 14, 0, '2024-03-18 09:56:16'),
(26, 'PHP', 'Learn', 'upload/skill_image/php.png', 'PHP is a general-purpose scripting language geared towards web development. It was originally created by Danish-Canadian programmer Rasmus Lerdorf in 1993 and released in 1995.', 14, 0, '2024-03-18 09:56:59'),
(27, 'Javascript', 'Learn', 'upload/skill_image/download (1).png', 'JavaScript, often abbreviated as JS, is a programming language and core technology of the Web, alongside HTML and CSS. 99% of websites use JavaScript on the client side for webpage behavior. ', 14, 0, '2024-03-18 10:24:20');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_registration`
--

CREATE TABLE `tbl_user_registration` (
  `id` int(11) NOT NULL,
  `unique_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `useremail` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `conffirm_password` varchar(255) NOT NULL,
  `contact` varchar(20) DEFAULT NULL,
  `status` int(11) NOT NULL,
  `login_status` varchar(255) NOT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `profile` varchar(500) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_user_registration`
--

INSERT INTO `tbl_user_registration` (`id`, `unique_id`, `username`, `useremail`, `password`, `conffirm_password`, `contact`, `status`, `login_status`, `gender`, `profile`, `created_date`) VALUES
(3, 1434763537, 'harshilwadiwala', 'harshilwadiwala@gmail.com', '40950be96f393b542ecb73b0a245257a', '', '9328464176', 0, 'Active', 'Male', 'upload/user_profile/bmw.jpeg', '2024-02-25 07:39:59'),
(4, 1485306151, 'Vidhi Trivedi', 'vidhitrivedi@gmail.com', '140362895bb6a05eed71d66b03b95553', '', '810375482', 0, 'Offline', 'Female', 'upload/user_profile/Screenshot 2023-12-04 230428.png', '2024-03-04 06:51:23'),
(5, 1292318714, 'yash Padhiyar', 'padhiyaryash354@gmail.com', '25d55ad283aa400af464c76d713c07ad', '', '9099250717', 0, 'Offline', 'Male', 'upload/user_profile/bmw.jpeg', '2024-03-11 06:55:37'),
(6, 1131188174, 'harshilwadiwala', 'harshil@gmail.com', '3fd0ab5f6c55e641989cd1993e8fa611', '', '9328464176', 0, 'Active', 'Male', 'upload/user_profile/featur-2.jpg', '2024-03-11 07:24:47'),
(7, 1448790007, 'iqra', 'iqra@gmail.com', '3f10febeab0ecca51a4589e0bf5b1894', '', '9328564523', 0, 'Offline', 'Female', 'upload/user_profile/featur-2.jpg', '2024-03-11 07:27:47'),
(8, 1651576386, 'janki', 'janki@gmail.com', '597a215bc8797c90fb77ae656a7d68a7', '', '9328564523', 0, 'Offline', 'Female', 'upload/user_profile/featur-2.jpg', '2024-03-11 07:30:07'),
(9, 576605491, 'bhavini', 'bhavini@gmail.com', '202cb962ac59075b964b07152d234b70', '', '12345678901234567889', 0, 'Offline', 'Female', 'upload/user_profile/PHP-logo.svg.png', '2024-03-11 10:39:23'),
(10, 559468690, 'fwef', 'wfwek@daf.com', '202cb962ac59075b964b07152d234b70', '', '142352463634634634', 0, '', 'Female', 'upload/user_profile/loader.png', '2024-03-11 11:03:38'),
(11, 1515433432, 'Vidz', 'vidhi@gmail.com', '140362895bb6a05eed71d66b03b95553', '', '1234567890', 0, 'Offline', 'Female', 'upload/user_profile/download.png', '2024-03-17 07:08:12'),
(12, 894221005, 'Preet', 'preet@gmail.com', '9eebe7f821d04a9ce6c1369bab9afd7c', '', '12345678901234567890', 0, '', 'Female', 'upload/user_profile/download.png', '2024-03-17 07:12:44'),
(13, 696278427, 'Kaushal', '202cb962ac59075b964b07152d234b70', '202cb962ac59075b964b07152d234b70', 'kaushal@gmail.com', '123456789012345', 0, '', 'Female', 'upload/user_profile/download.png', '2024-03-17 07:24:01'),
(14, 880127963, 'Ayush', 'ayush@gmail.com', '66049c07d9e8546699fe0872fd32d8f6', '66049c07d9e8546699fe0872fd32d8f6', '2345678901', 0, 'Active', 'Male', 'upload/user_profile/download.png', '2024-03-18 09:52:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_message`
--
ALTER TABLE `tbl_message`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `tbl_review`
--
ALTER TABLE `tbl_review`
  ADD PRIMARY KEY (`re_id`);

--
-- Indexes for table `tbl_skill_master`
--
ALTER TABLE `tbl_skill_master`
  ADD PRIMARY KEY (`skill_id`);

--
-- Indexes for table `tbl_user_registration`
--
ALTER TABLE `tbl_user_registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_message`
--
ALTER TABLE `tbl_message`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `tbl_review`
--
ALTER TABLE `tbl_review`
  MODIFY `re_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_skill_master`
--
ALTER TABLE `tbl_skill_master`
  MODIFY `skill_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `tbl_user_registration`
--
ALTER TABLE `tbl_user_registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
