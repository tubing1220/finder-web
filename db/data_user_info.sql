/*
Navicat MySQL Data Transfer

Source Server         : 127.0.0.1
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : test

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2018-01-07 12:28:07
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for data_user_info
-- ----------------------------
DROP TABLE IF EXISTS `data_user_info`;
CREATE TABLE `data_user_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '用户 id  唯一主键',
  `user_name` varchar(100) DEFAULT NULL COMMENT '用户昵称',
  `header_url` varchar(255) DEFAULT NULL COMMENT '用户头像地址',
  `save_article_num` int(10) unsigned DEFAULT NULL COMMENT '收藏文章数量',
  `like_article_num` int(10) unsigned DEFAULT NULL COMMENT '喜欢的文章数量',
  `follow_author_num` int(10) unsigned DEFAULT NULL COMMENT '关注的作者数量',
  `fans_num` int(10) unsigned DEFAULT NULL COMMENT '粉丝（被关注数量）',
  `classify_follow_num` int(10) unsigned DEFAULT NULL COMMENT '关注的分类（标签）数量',
  `History_num` int(10) unsigned DEFAULT NULL COMMENT '阅读过的文章数量',
  `company_info` varchar(255) DEFAULT NULL COMMENT '公司信息',
  `position` varchar(100) DEFAULT NULL COMMENT '职位',
  `introduce` varchar(1000) DEFAULT NULL COMMENT '简介',
  `blog_address` varchar(255) DEFAULT NULL COMMENT '博客地址',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT COMMENT='用户文章信息表';
