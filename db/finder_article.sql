/*
Navicat MySQL Data Transfer

Source Server         : 127.0.0.1
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : test

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2018-01-08 20:54:05
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for finder_article
-- ----------------------------
DROP TABLE IF EXISTS `finder_article`;
CREATE TABLE `finder_article` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '文章id 自增',
  `user_id` int(11) DEFAULT NULL COMMENT '作者id',
  `name` varchar(100) DEFAULT NULL COMMENT '作者昵称',
  `title` varchar(100) DEFAULT NULL COMMENT '文章标题',
  `desc` text COMMENT '文章描述',
  `create_time` int(11) DEFAULT NULL COMMENT '创建时间',
  `update_time` int(11) DEFAULT NULL COMMENT '修改时间',
  `is_del` tinyint(4) DEFAULT '0' COMMENT '是否已删除 0:未删除，1：已删除,default:0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
