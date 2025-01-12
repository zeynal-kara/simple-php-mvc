-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 12 Oca 2025, 21:37:47
-- Sunucu sürümü: 5.7.44
-- PHP Sürümü: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `titledeed`
--

DELIMITER $$
--
-- Yordamlar
--
DROP PROCEDURE IF EXISTS `FilterDeeds`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `FilterDeeds` (IN `first_name` VARCHAR(255) CHARSET utf8, IN `last_name` VARCHAR(255) CHARSET utf8, IN `city_name` VARCHAR(255) CHARSET utf8, IN `district_name` VARCHAR(255) CHARSET utf8, IN `registration_date` DATE, IN `plot_parcel` VARCHAR(255) CHARSET utf8, IN `order_by` VARCHAR(255) CHARSET utf8, IN `order_type` VARCHAR(4) CHARSET utf8, IN `limit_val` INT, IN `offset_val` INT)   BEGIN
    -- Değişkenler
    SET @query = 'SELECT * FROM view_deeds WHERE 1=1';

    -- Şartları dinamik olarak ekle
    IF first_name IS NOT NULL THEN
        SET @query = CONCAT(@query, ' AND first_name LIKE ''%', first_name, '%''');
    END IF;

    IF last_name IS NOT NULL THEN
        SET @query = CONCAT(@query, ' AND last_name LIKE ''%', last_name, '%''');
    END IF;

     IF city_name IS NOT NULL THEN
        SET @query = CONCAT(@query, ' AND city_name LIKE ''%', city_name, '%''');
    END IF;

     IF district_name IS NOT NULL THEN
        SET @query = CONCAT(@query, ' AND district_name LIKE ''%', district_name, '%''');
    END IF;

    IF registration_date IS NOT NULL THEN
        SET @query = CONCAT(@query, ' AND registration_date = ''', registration_date, '''');
    END IF;

    IF plot_parcel IS NOT NULL THEN
        SET @query = CONCAT(@query, ' AND plot_parcel LIKE ''%', plot_parcel, '%''');
    END IF;

    -- Sıralama ekle
    IF order_by IS NOT NULL AND order_type IS NOT NULL THEN
        SET @query = CONCAT(@query, ' ORDER BY ', order_by, ' ', order_type);
    END IF;

    -- Limit ve offset ekle
    IF limit_val IS NOT NULL AND offset_val IS NOT NULL THEN
        SET @query = CONCAT(@query, ' LIMIT ', limit_val, ' OFFSET ', offset_val);
    END IF;

    -- Hazırlanan sorguyu çalıştır
    PREPARE stmt FROM @query;
    EXECUTE stmt;
    DEALLOCATE PREPARE stmt;
END$$

DROP PROCEDURE IF EXISTS `FilterDeedsCount`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `FilterDeedsCount` (IN `first_name` VARCHAR(255) CHARSET utf8, IN `last_name` VARCHAR(255) CHARSET utf8, IN `city_name` VARCHAR(255) CHARSET utf8, IN `district_name` VARCHAR(255) CHARSET utf8, IN `registration_date` DATE, IN `plot_parcel` VARCHAR(255) CHARSET utf8)   BEGIN
    -- Değişkenler
    SET @query = 'SELECT COUNT(*) FROM view_deeds WHERE 1=1';

    -- Şartları dinamik olarak ekle
    IF first_name IS NOT NULL THEN
        SET @query = CONCAT(@query, ' AND first_name LIKE ''%', first_name, '%''');
    END IF;

    IF last_name IS NOT NULL THEN
        SET @query = CONCAT(@query, ' AND last_name LIKE ''%', last_name, '%''');
    END IF;

   IF city_name IS NOT NULL THEN
        SET @query = CONCAT(@query, ' AND city_name LIKE ''%', city_name, '%''');
    END IF;
   
    IF district_name IS NOT NULL THEN
        SET @query = CONCAT(@query, ' AND district_name LIKE ''%', district_name, '%''');
    END IF;

    IF registration_date IS NOT NULL THEN
        SET @query = CONCAT(@query, ' AND registration_date = ''', registration_date, '''');
    END IF;

    IF plot_parcel IS NOT NULL THEN
        SET @query = CONCAT(@query, ' AND plot_parcel LIKE ''%', plot_parcel, '%''');
    END IF;

    -- Hazırlanan sorguyu çalıştır
    PREPARE stmt FROM @query;
    EXECUTE stmt;
    DEALLOCATE PREPARE stmt;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `cities`
--

DROP TABLE IF EXISTS `cities`;
CREATE TABLE IF NOT EXISTS `cities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `cities`
--

INSERT INTO `cities` (`id`, `name`) VALUES
(1, 'İstanbul'),
(2, 'Ankara');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `deeds`
--

DROP TABLE IF EXISTS `deeds`;
CREATE TABLE IF NOT EXISTS `deeds` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `plot_parcel` varchar(50) NOT NULL,
  `district_id` int(11) NOT NULL,
  `registration_date` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `district_id` (`district_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `deeds`
--

INSERT INTO `deeds` (`id`, `user_id`, `plot_parcel`, `district_id`, `registration_date`) VALUES
(1, 1, '123/456', 1, '2025-01-05'),
(2, 2, '789/101', 3, '2025-01-06');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `districts`
--

DROP TABLE IF EXISTS `districts`;
CREATE TABLE IF NOT EXISTS `districts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `city_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `city_id` (`city_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `districts`
--

INSERT INTO `districts` (`id`, `name`, `city_id`) VALUES
(1, 'Kadıköy', 1),
(2, 'Üsküdar', 1),
(3, 'Çankaya', 2),
(4, 'Keçiören', 2);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `registration_date` date NOT NULL,
  `district_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `district_id` (`district_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `first_name`, `last_name`, `registration_date`, `district_id`) VALUES
(1, 'admin', '12345', 'Ahmet', 'Yılmaz', '2025-01-01', 1),
(2, '', '', 'Ayşe', 'Kara', '2025-01-02', 3);

-- --------------------------------------------------------

--
-- Görünüm yapısı durumu `view_deeds`
-- (Asıl görünüm için aşağıya bakın)
--
DROP VIEW IF EXISTS `view_deeds`;
CREATE TABLE IF NOT EXISTS `view_deeds` (
`first_name` varchar(50)
,`last_name` varchar(50)
,`registration_date` date
,`plot_parcel` varchar(50)
,`city_name` varchar(100)
,`district_name` varchar(100)
,`district_id` int(11)
,`city_id` int(11)
);

-- --------------------------------------------------------

--
-- Görünüm yapısı `view_deeds`
--
DROP TABLE IF EXISTS `view_deeds`;

DROP VIEW IF EXISTS `view_deeds`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_deeds`  AS SELECT `users`.`first_name` AS `first_name`, `users`.`last_name` AS `last_name`, `users`.`registration_date` AS `registration_date`, `deeds`.`plot_parcel` AS `plot_parcel`, `cities`.`name` AS `city_name`, `districts`.`name` AS `district_name`, `users`.`district_id` AS `district_id`, `districts`.`city_id` AS `city_id` FROM (((`deeds` left join `users` on((`deeds`.`user_id` = `users`.`id`))) left join `districts` on((`users`.`district_id` = `districts`.`id`))) left join `cities` on((`cities`.`id` = `districts`.`city_id`))) ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
