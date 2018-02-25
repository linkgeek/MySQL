/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50715
Source Host           : 127.0.0.1:3306
Source Database       : imooc

Target Server Type    : MYSQL
Target Server Version : 50715
File Encoding         : 65001

Date: 2018-02-25 20:50:11
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for redis_queue
-- ----------------------------
DROP TABLE IF EXISTS `redis_queue`;
CREATE TABLE `redis_queue` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL DEFAULT '0',
  `time_stamp` varchar(24) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
