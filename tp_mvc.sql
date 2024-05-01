/*
Navicat MySQL Data Transfer

Source Server         : test
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : tp_mvc

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2024-05-01 23:25:09
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `domicile`
-- ----------------------------
DROP TABLE IF EXISTS `domicile`;
CREATE TABLE `domicile` (
  `id_domicile` int(11) NOT NULL AUTO_INCREMENT,
  `domicile_name` varchar(255) NOT NULL,
  PRIMARY KEY (`id_domicile`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- ----------------------------
-- Records of domicile
-- ----------------------------
INSERT INTO `domicile` VALUES ('1', 'Bekasi');
INSERT INTO `domicile` VALUES ('2', 'Garut');
INSERT INTO `domicile` VALUES ('3', 'Bandung');
INSERT INTO `domicile` VALUES ('4', 'Jakarta');
INSERT INTO `domicile` VALUES ('5', 'Tasikmalaya');
INSERT INTO `domicile` VALUES ('7', 'Subang');

-- ----------------------------
-- Table structure for `members`
-- ----------------------------
DROP TABLE IF EXISTS `members`;
CREATE TABLE `members` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `join_date` date NOT NULL,
  `id_domicile` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=281 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- ----------------------------
-- Records of members
-- ----------------------------
INSERT INTO `members` VALUES ('2', 'Rakhaaa', 'rakhadh@gmail.com', '081806808964', '0000-00-00', '1');
INSERT INTO `members` VALUES ('7', 'ajhh', 'rakha.hariadi@gmail.com', 'okdoqwkodaddwaadwdaw', '2022-10-01', '3');
INSERT INTO `members` VALUES ('279', 'Rakha Hariadi', 'dhifiargo2004@gmail.com', '081806808964', '0000-00-00', '2022');
INSERT INTO `members` VALUES ('280', 'Rakha Hariadi', 'dhifiargo2004@gmail.com', '081806808964', '2022-10-01', '1');
