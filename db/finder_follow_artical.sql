/*
Navicat MySQL Data Transfer

Source Server         : 127.0.0.1
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : test

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2018-01-13 17:59:07
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for finder_follow_artical
-- ----------------------------
DROP TABLE IF EXISTS `finder_follow_artical`;
CREATE TABLE `finder_follow_artical` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '文章爱好id',
  `user_id` int(11) DEFAULT NULL COMMENT '用户id',
  `artical_id` int(11) DEFAULT NULL COMMENT '文章id',
  `follow_type` enum('1','2','3','4') DEFAULT '1' COMMENT '文章操作类型 1 喜欢 2 收藏 3 关注',
  `create_time` int(11) DEFAULT NULL COMMENT '创建时间',
  `update_time` int(11) DEFAULT NULL COMMENT '修改时间',
  `is_del` tinyint(4) DEFAULT '0' COMMENT '是否已删除 0:未删除，1：已删除,default:0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='用户关注数据表';
