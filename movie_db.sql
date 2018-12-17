/*
 Navicat Premium Data Transfer

 Source Server         : #lokalisasi
 Source Server Type    : MySQL
 Source Server Version : 100134
 Source Host           : localhost:3306
 Source Schema         : movie_db

 Target Server Type    : MySQL
 Target Server Version : 100134
 File Encoding         : 65001

 Date: 18/12/2018 00:19:24
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for vafourite
-- ----------------------------
DROP TABLE IF EXISTS `vafourite`;
CREATE TABLE `vafourite`  (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `id_movie` int(10) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 13 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

SET FOREIGN_KEY_CHECKS = 1;
