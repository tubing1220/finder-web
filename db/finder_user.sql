/*
Navicat MySQL Data Transfer

Source Server         : 127.0.0.1
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : test

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2018-01-08 20:46:21
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for finder_user
-- ----------------------------
DROP TABLE IF EXISTS `finder_user`;
CREATE TABLE `finder_user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '用户id',
  `user_name` varchar(100) DEFAULT NULL COMMENT '用户昵称',
  `user_token` varchar(255) DEFAULT NULL COMMENT '用户token 唯一验证信息',
  `password` char(32) DEFAULT NULL COMMENT '用户密码',
  `realname` varchar(50) DEFAULT NULL COMMENT '用户真实姓名',
  `email` varchar(100) DEFAULT NULL COMMENT '用户邮箱',
  `phone` varchar(100) DEFAULT NULL COMMENT '用户手机号',
  `header_url` varchar(1000) DEFAULT NULL COMMENT '用户头像地址',
  `company_info` varchar(255) DEFAULT NULL COMMENT '公司信息',
  `position` varchar(255) DEFAULT NULL COMMENT '职位',
  `introduce` varchar(1000) DEFAULT NULL COMMENT '简介',
  `blog_address` varchar(255) DEFAULT NULL COMMENT '博客地址',
  `create_time` int(11) DEFAULT NULL COMMENT '用户注册 创建时间',
  `register_ip` varchar(100) DEFAULT NULL COMMENT '用户注册ip 地址',
  `login_ip` varchar(100) DEFAULT NULL COMMENT '用户登陆ip',
  `login_time` int(11) DEFAULT NULL COMMENT '用户 登录时间',
  `update_time` int(11) DEFAULT NULL COMMENT '修改时间',
  `is_del` tinyint(4) DEFAULT '0' COMMENT '是否已删除 0:未删除，1：已删除,默认:0',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='用户基础信息表';
