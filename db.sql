-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: May 15, 2021 at 12:25 PM
-- Server version: 5.7.25
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(11) NOT NULL,
  `cat_title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(1, 'Sports'),
(2, 'Music');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(10) NOT NULL,
  `comment_post_id` int(10) NOT NULL,
  `comment_email` varchar(100) NOT NULL,
  `comment_author` varchar(20) NOT NULL,
  `comment_content` varchar(255) NOT NULL,
  `comment_status` varchar(20) NOT NULL,
  `comment_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `comment_post_id`, `comment_email`, `comment_author`, `comment_content`, `comment_status`, `comment_date`) VALUES
(1, 1, 'Bill@formerwhitehouse.com', 'Bill Clinton', 'Great to have you back!', 'Approved', '2021-05-15'),
(2, 2, 'Klopp@liverpool.com', ' ', 'Great Article, lots to take away from this!', 'Rejected', '2021-05-15');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(10) NOT NULL,
  `post_title` varchar(100) NOT NULL,
  `post_author` varchar(100) NOT NULL,
  `post_category_id` int(10) NOT NULL,
  `post_date` date NOT NULL,
  `post_status` varchar(20) NOT NULL,
  `post_image` blob NOT NULL,
  `post_tags` varchar(100) NOT NULL,
  `post_content` varchar(255) NOT NULL,
  `post_views_count` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_title`, `post_author`, `post_category_id`, `post_date`, `post_status`, `post_image`, `post_tags`, `post_content`, `post_views_count`) VALUES
(1, 'I am Back!', ' Ronan', 2, '2021-05-15', 'published', 0x37303634414531332d314530342d343436322d423034382d4235354346413143423830375f345f353030355f632e6a706567, 'Return, Content', '<p>Hi I am back on this website</p>', 12),
(2, 'Will Liverpool finish in a top 4 spot', ' Ronan', 1, '2021-05-15', 'published', 0x74686961676f2e6a706567, 'Liverpool, Sports, Premier League', '<p>Yeah hopefully</p>', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(10) NOT NULL,
  `username` text NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `user_role` text NOT NULL,
  `user_firstname` text NOT NULL,
  `user_lastname` text NOT NULL,
  `user_image` blob
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `username`, `user_email`, `user_password`, `user_role`, `user_firstname`, `user_lastname`, `user_image`) VALUES
(1, 'Ronan', 'ronangabrennan@gmail.com', '$2y$12$l94T2YdWLTmn1zlZXl/xY.4HaJgpS2IZiUcTpvHZB8ue33uzZfwFO', 'admin', '', '', NULL),
(2, 'Test', 'test@test.com', '$2y$10$QT6d1wXkon2foDVlPhDGZePCSRD1et0k4BiyjeRgao0845CrMNC0G', 'subscriber', 'Test ', 'User', NULL),
(3, 'Jurgen Klopp', 'Klopp@liverpool.com', '$2y$12$OeT0GhYP5n1HjgYYrq7AYOz0jRnEh.k4cz5DWPTsRjI4.uMhulvC.', 'subscriber', '', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users_online`
--

CREATE TABLE `users_online` (
  `session` int(10) NOT NULL,
  `time` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users_online`
--
ALTER TABLE `users_online`
  ADD PRIMARY KEY (`session`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users_online`
--
ALTER TABLE `users_online`
  MODIFY `session` int(10) NOT NULL AUTO_INCREMENT;
