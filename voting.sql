CREATE DATABASE IF NOT EXISTS votes;
 
USE votes;


-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(300) NOT NULL,
  `votes` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `votes`) VALUES
(1, 'Apple', 0),
(2, 'Banana', 1),
(3, 'Orange', 1),
(4, 'Pineapple', 0);


CREATE TABLE IF NOT EXISTS `users` (
  `username` varchar(300) NOT NULL,
  `id` int(11) NOT NULL,
   FOREIGN KEY (`id`) REFERENCES `posts`(`id`)
) ;

INSERT INTO `users` (`username`, `id`) VALUES
('Jane', 4),
('John', 3);