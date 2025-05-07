-- phpMyAdmin SQL Dump
-- Version: 5.2.2
-- Host: localhost
-- Generation Time: May 07, 2025
-- Server version: 10.11.11-MariaDB
-- PHP Version: 8.3.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

-- --------------------------------------------------------

-- Database: `project_DB_skhan27`
CREATE DATABASE IF NOT EXISTS `project_DB_skhan27` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `project_DB_skhan27`;

-- --------------------------------------------------------

-- Table: members_skhan27
CREATE TABLE `members_skhan27` (
  `id` INT(4) NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(65) DEFAULT NULL,
  `password` VARCHAR(65) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO `members_skhan27` (`id`, `username`, `password`) VALUES
(1, 'skadmin', '1234');

-- --------------------------------------------------------

-- Table: tblcomments_skhan27
CREATE TABLE `tblcomments_skhan27` (
  `cid` INT(6) UNSIGNED NOT NULL AUTO_INCREMENT,
  `cname` VARCHAR(100) DEFAULT 'Anonymous',
  `cmessage` TEXT NOT NULL,
  `cdate` DATETIME DEFAULT CURRENT_TIMESTAMP,
  `capproved` TINYINT(1) DEFAULT 0,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

-- Table: tblcontactus_skhan27
CREATE TABLE `tblcontactus_skhan27` (
  `cid` INT(6) UNSIGNED NOT NULL AUTO_INCREMENT,
  `cname` VARCHAR(100) NOT NULL,
  `cemail` VARCHAR(50) DEFAULT NULL,
  `csubject` VARCHAR(500) DEFAULT NULL,
  `ccomments` VARCHAR(500) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

-- Table: tblpcourse_skhan27
CREATE TABLE `tblpcourse_skhan27` (
  `pcid` INT(6) UNSIGNED NOT NULL AUTO_INCREMENT,
  `pcourse` VARCHAR(300) DEFAULT NULL,
  PRIMARY KEY (`pcid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO `tblpcourse_skhan27` (`pcid`, `pcourse`) VALUES
(1, 'IS610'), (2, 'IS410'), (3, 'IS448'), (4, 'IS127'), (5, 'IS450');

-- --------------------------------------------------------

-- Table: tblpname_skhan27
CREATE TABLE `tblpname_skhan27` (
  `pnid` INT(6) UNSIGNED NOT NULL AUTO_INCREMENT,
  `pname` VARCHAR(300) DEFAULT NULL,
  PRIMARY KEY (`pnid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO `tblpname_skhan27` (`pnid`, `pname`) VALUES
(1, 'Kamran Fayyaz'), (2, 'Kamran Fayyaz'), (3, 'Christine Smith'),
(4, 'James Edgar'), (5, 'Kumar Sagar'), (6, 'Robert Jackson'), (7, 'test');

-- --------------------------------------------------------

-- Table: tblprofessor_skhan27
CREATE TABLE `tblprofessor_skhan27` (
  `pid` INT(6) UNSIGNED NOT NULL AUTO_INCREMENT,
  `pname` VARCHAR(300) NOT NULL,
  `pemail` VARCHAR(300) NOT NULL,
  `pcourse` VARCHAR(100) NOT NULL,
  `puniversity` VARCHAR(30) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO `tblprofessor_skhan27` (`pid`, `pname`, `pemail`, `pcourse`, `puniversity`) VALUES
(1, 'Kamran', 'kfayyaz@umbc.edu', 'IS448', 'UMBC'),
(2, 'Kamran', 'kfayyaz@umbc.edu', 'IS127', 'UMBC'),
(3, 'James', 'james@umgc.edu', 'IS448', 'UMGC'),
(4, 'Kim', 'kim@towson.edu', 'IS605', 'Towson'),
(5, 'Smith', 'smith@umbc.edu', 'IS605', 'UMBC'),
(6, 'Smith', 'smith@umbc.edu', 'IS448', 'UMBC'),
(14, 'Kamran Fayyaz', 'kfayyaz@umbc.edu', 'IS610', 'College Park'),
(15, 'Christine Smith', 'smith@umbc.edu', 'IS127', 'UMBC');

-- --------------------------------------------------------

-- Table: tblpuniversity_skhan27
CREATE TABLE `tblpuniversity_skhan27` (
  `puid` INT(6) UNSIGNED NOT NULL AUTO_INCREMENT,
  `puniversity` VARCHAR(300) DEFAULT NULL,
  PRIMARY KEY (`puid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO `tblpuniversity_skhan27` (`puid`, `puniversity`) VALUES
(1, 'College Park'), (2, 'UMBC'), (3, 'UMGC'), (4, 'Towson'), (5, 'John Hopkins');

-- --------------------------------------------------------

-- Table: tblrating_skhan27
CREATE TABLE `tblrating_skhan27` (
  `rid` INT(6) UNSIGNED NOT NULL AUTO_INCREMENT,
  `p_fk` INT(6) NOT NULL,
  `rdate` DATETIME DEFAULT NULL,
  `rrating` INT(2) DEFAULT NULL,
  `rdifficulty` INT(2) DEFAULT NULL,
  `rtag` VARCHAR(50) DEFAULT NULL,
  `ragain` VARCHAR(3) DEFAULT NULL,
  `rcomments` VARCHAR(500) NOT NULL,
  PRIMARY KEY (`rid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

-- Table: tblstyle_skhan27
CREATE TABLE `tblstyle_skhan27` (
  `styleid` INT(6) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tag` VARCHAR(30) NOT NULL,
  `value` LONGTEXT NOT NULL,
  PRIMARY KEY (`styleid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO `tblstyle_skhan27` (`styleid`, `tag`, `value`) VALUES
(1, 'H1', '#f34160'),
(2, 'A', '#1adf37'),
(3, 'Avisited', '#bcbcbc');

COMMIT;
