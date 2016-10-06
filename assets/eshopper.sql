-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 21, 2016 at 06:35 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `eshopper`
--

-- --------------------------------------------------------

--
-- Table structure for table `advertisements`
--

CREATE TABLE IF NOT EXISTS `advertisements` (
  `adv_id` int(10) NOT NULL AUTO_INCREMENT,
  `company` varchar(100) NOT NULL,
  `title` varchar(150) NOT NULL,
  `image` varchar(100) NOT NULL,
  `details` text NOT NULL,
  `page` varchar(25) NOT NULL,
  `place` varchar(25) NOT NULL,
  `uploaded_date` varchar(15) NOT NULL,
  `expiry_date` varchar(15) NOT NULL,
  PRIMARY KEY (`adv_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Stand-in structure for view `amacategories`
--
CREATE TABLE IF NOT EXISTS `amacategories` (
`subcat_id` int(5)
,`subcat_name` varchar(60)
,`subcat_image` varchar(150)
,`refcat_id` int(5)
,`cat_name` varchar(60)
,`cat_image` varchar(150)
);
-- --------------------------------------------------------

--
-- Table structure for table `auction`
--

CREATE TABLE IF NOT EXISTS `auction` (
  `auction_id` int(20) NOT NULL AUTO_INCREMENT,
  `post` int(20) NOT NULL,
  `countdown_date` int(11) NOT NULL,
  `countdown_time` int(11) NOT NULL,
  `last_bid_user` int(11) NOT NULL,
  `last_bid` int(11) NOT NULL,
  PRIMARY KEY (`auction_id`),
  KEY `post` (`post`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE IF NOT EXISTS `brands` (
  `brand_id` int(5) NOT NULL AUTO_INCREMENT,
  `refsubcat_id` int(5) NOT NULL,
  `brand_name` varchar(60) NOT NULL,
  `brand_image` varchar(150) NOT NULL,
  PRIMARY KEY (`brand_id`),
  KEY `refsubcat_id` (`refsubcat_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `cat_id` int(5) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(60) NOT NULL,
  `cat_image` varchar(150) NOT NULL,
  `linking` varchar(100) NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_name`, `cat_image`, `linking`) VALUES
(3, 'Electronics', 'f8c1f23d6a8d8d7904fc0ea8e066b3bb.jpg', 'electronics'),
(4, 'Mobiles', 'a311dd84030f32ea6e0550b09f5869eb.jpg', 'mobiles'),
(5, 'Furnitures', '5c6c364bf5f3e00a2e2b017859dde995.jpg', 'furnitures'),
(6, 'Fashion', 'f7b6bc883be91f56eb248d72de4d2847.jpg', 'fashion'),
(7, 'Sports & Hobbies', '315f006f691ef2e689125614ea22cc61.jpg', 'sports'),
(8, 'Cars & Bikes', 'aedf8c04c36592dbe313d5938e1cd45e.jpg', 'cars'),
(9, 'Real Estates', 'f7ae62994651460a9f6295c9e34614ec.jpg', 'estates'),
(10, 'Jobs', '9782c50d0c747e4c0be05fc786a7709c.jpg', 'jobs');

--
-- Triggers `categories`
--
DROP TRIGGER IF EXISTS `deletecategory`;
DELIMITER //
CREATE TRIGGER `deletecategory` BEFORE DELETE ON `categories`
 FOR EACH ROW delete from subcategories where refcat_id=old.cat_id
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE IF NOT EXISTS `contactus` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `user_id` int(15) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL,
  `received_date` varchar(12) NOT NULL,
  `seen` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `user_id`, `name`, `email`, `phone`, `subject`, `message`, `received_date`, `seen`) VALUES
(1, 3, 'aristide aristide', 'livus@gmail.com', '0145555', 'gushimira', 'ndabashimiye ku bw iri terambere mwatugejejeho', '2016-08-25', 0),
(4, 6, 'jacky byukusenge', 'jacky@gmail.com', '0788565995', 'kunenga', 'ntabishyashya rwose', '2016-08-25', 0),
(7, 16, 'abdoul razack', 'bbjh@gmail.com', '654646', 'huhiuj', 'huihiu uh ui hihiuhiuhi hihiuh  hiouhiuh huih ', '2016-08-25', 0);

-- --------------------------------------------------------

--
-- Table structure for table `deleted_users`
--

CREATE TABLE IF NOT EXISTS `deleted_users` (
  `user_id` tinyint(1) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `joined_date` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deleted_users`
--

INSERT INTO `deleted_users` (`user_id`, `first_name`, `last_name`, `email`, `phone`, `joined_date`) VALUES
(0, 'adrienne', 'koko', 'koko@gmail.com', '07855522223', '2016-08-25');

-- --------------------------------------------------------

--
-- Stand-in structure for view `items`
--
CREATE TABLE IF NOT EXISTS `items` (
`post_id` int(20)
,`user` int(15)
,`seller` varchar(100)
,`name` varchar(100)
,`price` int(11)
,`details` text
,`contacts` varchar(20)
,`uploaded_date` varchar(20)
,`is_auction` tinyint(1)
,`is_confirmed` tinyint(1)
,`is_accepted` tinyint(1)
,`photo_id` int(20)
,`main` varchar(100)
,`photo1` varchar(100)
,`photo2` varchar(100)
,`photo3` varchar(100)
,`photo4` varchar(100)
,`photo5` varchar(100)
,`photo6` varchar(100)
,`photo7` varchar(100)
,`subcat_id` int(5)
,`refcat_id` int(5)
,`subcat_name` varchar(60)
,`place_id` int(5)
,`place_name` varchar(60)
);
-- --------------------------------------------------------

--
-- Table structure for table `places`
--

CREATE TABLE IF NOT EXISTS `places` (
  `place_id` int(5) NOT NULL AUTO_INCREMENT,
  `place_name` varchar(60) NOT NULL,
  PRIMARY KEY (`place_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `places`
--

INSERT INTO `places` (`place_id`, `place_name`) VALUES
(1, 'Kicukiro'),
(2, 'Nyarugenge');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `post_id` int(20) NOT NULL AUTO_INCREMENT,
  `category` int(5) NOT NULL,
  `user` int(15) NOT NULL,
  `seller` varchar(100) NOT NULL,
  `place` int(5) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `details` text NOT NULL,
  `contacts` varchar(20) NOT NULL,
  `uploaded_date` varchar(20) NOT NULL,
  `is_auction` tinyint(1) NOT NULL,
  `is_confirmed` tinyint(1) NOT NULL,
  `is_accepted` tinyint(1) NOT NULL,
  `photo` int(20) NOT NULL,
  PRIMARY KEY (`post_id`),
  UNIQUE KEY `photo` (`photo`),
  KEY `category` (`category`),
  KEY `user` (`user`),
  KEY `place` (`place`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `category`, `user`, `seller`, `place`, `name`, `price`, `details`, `contacts`, `uploaded_date`, `is_auction`, `is_confirmed`, `is_accepted`, `photo`) VALUES
(1, 4, 1, 'Bajeneza', 2, 'fridge', 70000, 'this fridge is of very good condition', '0788564397', '2016-09-07', 0, 0, 1, 1),
(2, 4, 1, 'bin', 1, 'nothing but checking', 522222, 'sdgsgdfb fbrftbb  tdndn dfgndg  bgdn dfnfd  dgngfh ', '646444545', '2016-09-07', 0, 0, 1, 2),
(3, 4, 1, 'bin', 1, 'essdrg cfghf', 3534, 'dygrthft', '7885555', '2016-09-07', 0, 0, 0, 3),
(4, 4, 1, 'gfhfsg fxgn', 1, 'dfshbsd ssdbsd', 1000, 'hsd snbsrn rsn rs', '45345', '2016-09-07', 0, 0, 0, 4),
(5, 4, 1, 'mukankusi', 1, 'bnnn ngng gngdndg gdn', 20000, 'dhdhndn dgh g hgdhg hg g g  htd d j   jf j hjmf  jjh jh  f jhj mhjmf  hjhm fhjhfhj  j jhjh hj fhhjfjh hjf hjhmjyurujmn  myurryuny y ymmyurtjny numryu yr ymry', '0788585552', '2016-09-07', 0, 0, 0, 5),
(6, 4, 1, 'lolo', 2, 'jfksdhv jhvda', 780000, 'kafh kjahk kjhdfk afoafj kjbaoijf aiolh cfiuerfhoiq fjoi;cqwhe foiqhwoif hqwklhfhqwoifnklw', '7825515', '2016-09-07', 0, 0, 0, 6),
(7, 2, 1, 'cyusa', 2, 'computerndjs s sj js', 8989, 'jdnjdkj kjdn jdkjd nkj ndj djkb jdb jk kjd kjk dkjbkjdbk dkjbd kdbkfjdkbkdbfkd dkbj kbjdbkbfkjbdbf kjfjfjf', '84848948', '2016-09-08', 0, 0, 0, 7),
(8, 2, 1, 'innocent', 1, 'computer sambbgv', 1454558, 'vcfgcf ghfhgv hg ghv ghvgh vgfvfhghcgjfcgjvgjhcvhjgvhjgjh ghgj vghvgjnbn', '07885555', '2016-09-11', 0, 0, 0, 8),
(9, 2, 5, 'bin', 1, 'lappy', 50000, 'lappy yanjye ni orginal, 50000 sinjya munsi', '51000', '2016-09-17', 0, 0, 0, 9),
(10, 3, 1, 'bin', 1, 'samsung tv', 788989, 'utguyguykguy uoihguyg uyg uykyukf gytkuyfjuyyu fkuyf jyfhkyjkgfkyug fkyu gkuy gf', '789890195', '2016-09-17', 0, 0, 0, 10),
(11, 2, 1, 'livus', 1, 'yannnnn', 4000, 'toejtmoi  ej engioejn geno ienog eouig neo', '007888', '2016-09-20', 0, 0, 0, 11),
(12, 2, 1, 'bin', 1, 'hdudjksjn', 5454564, 'sdlkjfnkjsfios joidvoidfvhoidfnvoidfnvoid fnvod', '0484848', '2016-09-20', 0, 0, 0, 12),
(13, 2, 1, 'mugabe', 2, 'five', 788000, 'jksad lsi ajsiodjisd lkasj ;lksdj kldsjk dfskjh jsdhj asj  ajkdgjka dgjkagjka gd ajkhsdgjkag ', '785555', '2016-09-20', 0, 0, 0, 13);

--
-- Triggers `posts`
--
DROP TRIGGER IF EXISTS `post_deletion`;
DELIMITER //
CREATE TRIGGER `post_deletion` BEFORE DELETE ON `posts`
 FOR EACH ROW delete from post_photos where photo_id=old.photo
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `post_photos`
--

CREATE TABLE IF NOT EXISTS `post_photos` (
  `photo_id` int(20) NOT NULL AUTO_INCREMENT,
  `main` varchar(100) NOT NULL,
  `photo1` varchar(100) NOT NULL,
  `photo2` varchar(100) NOT NULL,
  `photo3` varchar(100) NOT NULL,
  `photo4` varchar(100) NOT NULL,
  `photo5` varchar(100) NOT NULL,
  `photo6` varchar(100) NOT NULL,
  `photo7` varchar(100) NOT NULL,
  PRIMARY KEY (`photo_id`),
  UNIQUE KEY `main` (`main`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `post_photos`
--

INSERT INTO `post_photos` (`photo_id`, `main`, `photo1`, `photo2`, `photo3`, `photo4`, `photo5`, `photo6`, `photo7`) VALUES
(1, '90fd4f88f588ae64038134f1eeaa023f.jpg', '98465964ca8cd261e30c525aae7ba618.jpg', '37e82b59af48f2014f73b0a869ebac36.jpg', '', '', '', '', ''),
(2, 'c975028469b2db5ff182d45c92bef0ec.jpg', '', '', '', '', '', '', ''),
(3, 'ca8a2d76a5bcc212226417361a5f0740.jpg', '', '', '', '', '', '', ''),
(4, '35a8b29b1e59fa290eea9888ac038e7d.jpg', '', '', '', '', '', '', ''),
(5, '69ceed2a4ffe2ae23f8abf71d534a4bd.jpg', '', '', '', '', '', '', ''),
(6, '5487315b1286f907165907aa8fc96619.jpg', '', '', '', '', '', '', ''),
(7, '7d929be5b3d4531b7ac0babdd9f49673.jpg', '8b0dc65f996f98fd178a9defd0efa077.jpg', '36c21b6db36f2c7f7791373c93ca8d20.jpg', '', '', '', '', ''),
(8, 'a1bdeb626662373c4e0f1784388a52b7.jpg', 'a8757ce9dc90ea5def6a29b19503dbbb.jpg', '', '', '', '', '', ''),
(9, '293643def1ba1161bcdcfbfe434ab76d.jpg', '1227538d07bf6e225dafee434a20abda.jpg', '', '', '', '', '', ''),
(10, '838e8df20d6fb35ee999c93c416ecc36.jpg', '', '', '', '', '', '', ''),
(11, 'c2b8ebbde383625a81ba05a0f7b7192d.jpg', '4baf54f36935058bcc696fcef3f4689b.jpg', '', '', '', '', '', ''),
(12, '69748bbbc13bc56f17638e9f57b7a155.jpg', '2ef35a8b78b572a47f56846acbeef5d3.jpg', '73983c01982794632e0270cd0006d407.jpg', '', '', '', '', ''),
(13, 'cf05968255451bdefe3c5bc64d550517.jpg', 'c570c225d1fb8a72ad79995dd17a77bc.jpg', '09ec0f40d1fec53253882a9f9f913cbd.jpg', '8bcf12d1a11564975f1e62b898ef0a0d.jpg', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE IF NOT EXISTS `subcategories` (
  `subcat_id` int(5) NOT NULL AUTO_INCREMENT,
  `refcat_id` int(5) NOT NULL,
  `subcat_name` varchar(60) NOT NULL,
  `subcat_image` varchar(150) NOT NULL,
  `linking` varchar(100) NOT NULL,
  PRIMARY KEY (`subcat_id`),
  KEY `refcat_id` (`refcat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`subcat_id`, `refcat_id`, `subcat_name`, `subcat_image`, `linking`) VALUES
(2, 3, 'Computer-Laptops & Accessories', 'ada71870b639ce542d6541ea178e4f25.jpg', 'electronics_computer'),
(3, 3, 'Tv-Radio-Video-Audio-Camera & Accessories', 'd865f737d6777cdadaa957a87662d7ea.jpg', 'electronics_tv'),
(4, 3, 'Fridges-Washing machine-Kitchen materials', '60934168a4560680ede1fe1b1d03ab3e.jpg', 'electronics_fridge'),
(5, 3, 'Other electronic appliances', '04ad5632029cbfbed8e136e5f6f7ddfa.jpg', 'electronics_other'),
(6, 4, 'Smartphones', '4766154cea472a154f89d033051372de.jpg', 'mobile_smartphone'),
(7, 4, 'Tabs', 'fc0de4e0396fff257ea362983c2dda5a.jpg', 'mobile_tab'),
(8, 4, 'Other mobiles', '0d7a39e44fef86b3d8aec172f109bdb1.jpeg', 'mobile_other'),
(9, 4, 'Mobile accessories', 'c699a38d88e2499b4e47f02534c2a4d8.jpg', 'mobile_accessory'),
(10, 8, 'Cars & Accessories', 'f7e2b2b75b04175610e5a00c1e221ebb.jpg', 'car_car');

--
-- Triggers `subcategories`
--
DROP TRIGGER IF EXISTS `deletesubcategory`;
DELIMITER //
CREATE TRIGGER `deletesubcategory` BEFORE DELETE ON `subcategories`
 FOR EACH ROW delete from posts where category=old.subcat_id
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(15) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `is_admin` tinyint(1) NOT NULL,
  `priority` tinyint(1) NOT NULL,
  `joined` varchar(12) NOT NULL,
  `accepted` tinyint(1) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `firstname`, `lastname`, `email`, `phone`, `password`, `is_admin`, `priority`, `joined`, `accepted`) VALUES
(1, 'Yann', 'Vladimir', 'bavlaya549@gmail.com', '0782767289', 'nevergiveup', 1, 1, '2016-08-25', 1),
(2, 'livus', 'lievin', 'livus@gmail.com', '0783629499', 'marryjane', 0, 0, '2016-08-25', 1),
(3, 'aristide', 'Ngabo', 'livus@gmail.com', '0145555', 'kiki', 0, 0, '2016-08-25', 1),
(4, 'Enock', 'Neyo', 'enniro@gamil.com', '0788299565', 'welbeck', 0, 0, '2016-08-25', 1),
(5, 'bin', 'francois', 'bin@gmail.com', '078522200', 'binobin', 0, 0, '2016-08-25', 1),
(6, 'jacky', 'byukusenge', 'jacky@gmail.com', '0788565995', 'burundi', 0, 0, '2016-08-25', 1),
(8, 'gihana', 'charles', 'gikumire@yahoo.fr', '07546555', 'byimana', 0, 0, '2016-08-25', 1),
(11, 'jean', 'luc', 'jean@gmail.com', '078256565254', 'rwanda', 0, 0, '2016-08-25', 1),
(12, 'khalid', 'humeid', 'khalid@gmail.com', '045552552', 'tanzania', 0, 0, '2016-08-25', 1),
(13, 'livus', 'uyuy', 'livus@gmail.com', '54985', 'hhh', 0, 0, '2016-08-25', 1),
(14, 'mputu', 'tresor', 'mput@gmail.com', '748787', 'mputu', 0, 0, '2016-08-25', 1),
(15, 'messi', 'lionel', 'messi@gmail.com', '0595865', 'mata', 0, 0, '2016-08-25', 1);

--
-- Triggers `users`
--
DROP TRIGGER IF EXISTS `user_deletion`;
DELIMITER //
CREATE TRIGGER `user_deletion` BEFORE DELETE ON `users`
 FOR EACH ROW begin
update posts set user=0 where user=old.user_id;
insert into deleted_users (`first_name`, `last_name`, `email`, `phone`,`joined_date`) VALUES (old.firstname, old.lastname, old.email, old.phone, old.joined);
end
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Structure for view `amacategories`
--
DROP TABLE IF EXISTS `amacategories`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `amacategories` AS (select `i`.`subcat_id` AS `subcat_id`,`i`.`subcat_name` AS `subcat_name`,`i`.`subcat_image` AS `subcat_image`,`i`.`refcat_id` AS `refcat_id`,`p`.`cat_name` AS `cat_name`,`p`.`cat_image` AS `cat_image` from (`subcategories` `i` left join `categories` `p` on((`i`.`refcat_id` = `p`.`cat_id`))) where (`i`.`refcat_id` = `p`.`cat_id`));

-- --------------------------------------------------------

--
-- Structure for view `items`
--
DROP TABLE IF EXISTS `items`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `items` AS (select `i`.`post_id` AS `post_id`,`i`.`user` AS `user`,`i`.`seller` AS `seller`,`i`.`name` AS `name`,`i`.`price` AS `price`,`i`.`details` AS `details`,`i`.`contacts` AS `contacts`,`i`.`uploaded_date` AS `uploaded_date`,`i`.`is_auction` AS `is_auction`,`i`.`is_confirmed` AS `is_confirmed`,`i`.`is_accepted` AS `is_accepted`,`p`.`photo_id` AS `photo_id`,`p`.`main` AS `main`,`p`.`photo1` AS `photo1`,`p`.`photo2` AS `photo2`,`p`.`photo3` AS `photo3`,`p`.`photo4` AS `photo4`,`p`.`photo5` AS `photo5`,`p`.`photo6` AS `photo6`,`p`.`photo7` AS `photo7`,`f`.`subcat_id` AS `subcat_id`,`f`.`refcat_id` AS `refcat_id`,`f`.`subcat_name` AS `subcat_name`,`g`.`place_id` AS `place_id`,`g`.`place_name` AS `place_name` from (((`posts` `i` left join `post_photos` `p` on((`i`.`photo` = `p`.`photo_id`))) left join `subcategories` `f` on((`i`.`category` = `f`.`subcat_id`))) left join `places` `g` on((`i`.`place` = `g`.`place_id`))) where ((`i`.`photo` = `p`.`photo_id`) and (`i`.`category` = `f`.`subcat_id`) and (`i`.`place` = `g`.`place_id`)));

--
-- Constraints for dumped tables
--

--
-- Constraints for table `auction`
--
ALTER TABLE `auction`
  ADD CONSTRAINT `auction_ibfk_1` FOREIGN KEY (`post`) REFERENCES `posts` (`post_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `brands`
--
ALTER TABLE `brands`
  ADD CONSTRAINT `brands_ibfk_1` FOREIGN KEY (`refsubcat_id`) REFERENCES `subcategories` (`subcat_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`category`) REFERENCES `subcategories` (`subcat_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `posts_ibfk_2` FOREIGN KEY (`user`) REFERENCES `users` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `posts_ibfk_3` FOREIGN KEY (`place`) REFERENCES `places` (`place_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD CONSTRAINT `subcategories_ibfk_1` FOREIGN KEY (`refcat_id`) REFERENCES `categories` (`cat_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
