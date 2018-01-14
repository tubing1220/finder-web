/*
Navicat MySQL Data Transfer

Source Server         : 127.0.0.1
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : test

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2018-01-13 18:03:37
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for finder_article_category
-- ----------------------------
DROP TABLE IF EXISTS `finder_article_category`;
CREATE TABLE `finder_article_category` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '分类id',
  `category_name` varchar(100) DEFAULT NULL COMMENT '文章分类标签',
  `order_sort` int(11) DEFAULT NULL COMMENT '显示顺序 用于排序',
  `create_time` int(11) DEFAULT NULL COMMENT '创建时间',
  `update_time` int(11) DEFAULT NULL COMMENT '修改时间',
  `is_del` tinyint(4) DEFAULT '0' COMMENT '0:未删除，1：已删除,default:0',
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='文章分类标签表';
