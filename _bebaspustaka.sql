/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50620
Source Host           : localhost:3306
Source Database       : _bebaspustaka

Target Server Type    : MYSQL
Target Server Version : 50620
File Encoding         : 65001

Date: 2020-03-30 01:06:07
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for tbl_bp
-- ----------------------------
DROP TABLE IF EXISTS `tbl_bp`;
CREATE TABLE `tbl_bp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nim` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `prodi` varchar(255) DEFAULT NULL,
  `judul` text,
  `pengarang` varchar(255) DEFAULT NULL,
  `tahun` bigint(20) DEFAULT NULL,
  `v` char(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_bp
-- ----------------------------

-- ----------------------------
-- Table structure for tbl_user
-- ----------------------------
DROP TABLE IF EXISTS `tbl_user`;
CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `akses` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_user
-- ----------------------------
INSERT INTO `tbl_user` VALUES ('1', 'fibunmul', '93f87a64a2c41453b7da57d4bebc87e21f4e2585', 'admin');
