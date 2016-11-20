-- --------------------------------------------------------
-- Host:                         sql6.freemysqlhosting.net
-- Server version:               5.5.49-0ubuntu0.14.04.1 - (Ubuntu)
-- Server OS:                    debian-linux-gnu
-- HeidiSQL Version:             9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping database structure for information_schema


-- Dumping database structure for information_schema


-- Dumping database structure for information_schema


-- Dumping database structure for information_schema


-- Dumping database structure for information_schema


-- Dumping database structure for information_schema


-- Dumping database structure for information_schema


-- Dumping database structure for information_schema


-- Dumping database structure for information_schema


-- Dumping database structure for information_schema


-- Dumping database structure for information_schema


-- Dumping database structure for information_schema


-- Dumping database structure for information_schema


-- Dumping database structure for information_schema


-- Dumping database structure for information_schema


-- Dumping database structure for information_schema


-- Dumping database structure for information_schema


-- Dumping database structure for information_schema


-- Dumping database structure for information_schema


-- Dumping database structure for information_schema


-- Dumping database structure for information_schema


-- Dumping database structure for information_schema


-- Dumping database structure for information_schema


-- Dumping database structure for information_schema


-- Dumping database structure for information_schema


-- Dumping database structure for information_schema


-- Dumping database structure for information_schema


-- Dumping database structure for information_schema


-- Dumping database structure for information_schema


-- Dumping database structure for information_schema


-- Dumping database structure for information_schema


-- Dumping database structure for information_schema


-- Dumping database structure for information_schema


-- Dumping database structure for information_schema


-- Dumping database structure for information_schema


-- Dumping database structure for information_schema


-- Dumping database structure for information_schema


-- Dumping database structure for information_schema


-- Dumping database structure for information_schema


-- Dumping database structure for information_schema


-- Dumping database structure for sql6137899
CREATE DATABASE IF NOT EXISTS `sql6137899` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `sql6137899`;


-- Dumping structure for table sql6137899.customer
CREATE TABLE IF NOT EXISTS `customer` (
  `NIC` varchar(12) NOT NULL,
  `FName` varchar(50) NOT NULL,
  `LName` varchar(50) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `DOB` date NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Status` varchar(10) NOT NULL,
  `Occupation` varchar(50) NOT NULL,
  `Contact` int(10) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(255) NOT NULL,
  PRIMARY KEY (`NIC`),
  UNIQUE KEY `Contact` (`Contact`,`Email`,`Password`),
  UNIQUE KEY `NIC` (`NIC`,`Contact`,`Email`,`Password`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.


-- Dumping structure for table sql6137899.doctor
CREATE TABLE IF NOT EXISTS `doctor` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `hospital` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.


-- Dumping structure for table sql6137899.drug
CREATE TABLE IF NOT EXISTS `drug` (
  `DrugNo` int(4) NOT NULL AUTO_INCREMENT,
  `GeneticName` varchar(50) NOT NULL,
  `DrugBrandName` varchar(20) NOT NULL,
  `DrugAlternatives` varchar(150) DEFAULT NULL,
  `Compositions` varchar(100) NOT NULL,
  `DosageForm` varchar(20) NOT NULL,
  `DosePerPerson` varchar(50) NOT NULL,
  `Strength` varchar(5) NOT NULL,
  `healthTips` varchar(500) DEFAULT NULL,
  `storage` varchar(500) DEFAULT NULL,
  `allergicConditions` varchar(500) DEFAULT NULL,
  `Supplier` varchar(50) NOT NULL,
  `Quantity` int(5) NOT NULL,
  `ManufacturedDate` date NOT NULL,
  `ExpDate` date NOT NULL,
  `OrderedPrice` double(5,2) NOT NULL,
  `Profit` double(5,2) NOT NULL,
  `RetailPrice` double(5,2) NOT NULL,
  `ReturnPolicy` varchar(11) NOT NULL,
  `Discount` varchar(4) NOT NULL,
  `DiscountedPrice` varchar(4) NOT NULL,
  PRIMARY KEY (`DrugNo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.


-- Dumping structure for table sql6137899.hospital
CREATE TABLE IF NOT EXISTS `hospital` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `hospitalname` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `telephonenum` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.


-- Dumping structure for table sql6137899.news
CREATE TABLE IF NOT EXISTS `news` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `postnews` varchar(500) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.


-- Dumping structure for table sql6137899.order
CREATE TABLE IF NOT EXISTS `order` (
  `OrderNo.` int(50) NOT NULL AUTO_INCREMENT,
  `NIC` varchar(12) NOT NULL,
  `DP` varchar(15) NOT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `DPTime` time NOT NULL,
  `Telephone` int(10) unsigned zerofill NOT NULL,
  `Email` varchar(60) NOT NULL,
  `Image1` varchar(255) NOT NULL,
  `ImageName1` varchar(64) NOT NULL,
  `Image1Type` varchar(100) NOT NULL,
  `Image2` varchar(255) NOT NULL,
  `ImageName2` varchar(64) NOT NULL,
  `Image2Type` varchar(100) NOT NULL,
  `Image3` varchar(255) NOT NULL,
  `ImageName3` varchar(64) NOT NULL,
  `Image3Type` varchar(100) NOT NULL,
  PRIMARY KEY (`OrderNo.`),
  UNIQUE KEY `OrderNo.` (`OrderNo.`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.


-- Dumping structure for table sql6137899.pharmacist
CREATE TABLE IF NOT EXISTS `pharmacist` (
  `DateHired` date NOT NULL,
  `NIC` int(13) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `Gender` enum('Male','Female') NOT NULL,
  `DOB` date NOT NULL,
  `PermanentAddress` varchar(150) NOT NULL,
  `CivilStatus` enum('Single','Married','Widowed','Divorced') NOT NULL,
  `ContactNo` int(10) NOT NULL,
  `EmailAddress` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Admin/Trainee` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`NIC`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.


-- Dumping structure for table sql6137899.questions
CREATE TABLE IF NOT EXISTS `questions` (
  `qId` int(2) NOT NULL,
  `question` varchar(500) NOT NULL,
  `correctAns` varchar(200) NOT NULL,
  `wrongAns1` varchar(200) NOT NULL,
  `wrongAns2` varchar(200) NOT NULL,
  `wrongAns3` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.


-- Dumping structure for table sql6137899.supplier
CREATE TABLE IF NOT EXISTS `supplier` (
  `supplier_No` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Company_Name` varchar(50) NOT NULL,
  `Permenant_Address` varchar(100) NOT NULL,
  `Contact_No` int(10) NOT NULL,
  `Email_Address` varchar(50) NOT NULL,
  PRIMARY KEY (`supplier_No`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
