/*
Navicat MySQL Data Transfer

Source Server         : 127.0.0.1
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : test

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2018-01-08 19:54:20
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for finder_user_auths
-- ----------------------------
DROP TABLE IF EXISTS `finder_user_auths`;
CREATE TABLE `finder_user_auths` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '认证id 自增',
  `user_id` int(11) DEFAULT NULL COMMENT '用户id',
  `uid` varchar(255) DEFAULT NULL COMMENT '第三方用户id',
  `identity_type` varchar(255) DEFAULT NULL COMMENT '登录类型 登录类型（手机号 邮箱 用户名）或第三方应用名称（微信 微博等）',
  `identifier` varchar(255) DEFAULT NULL COMMENT '标识（手机号 邮箱 用户名或第三方应用的唯一标识）',
  `access_token` varchar(255) DEFAULT NULL COMMENT '用户token 第三方token',
  `access_expire` int(11) DEFAULT NULL COMMENT '用户访问 token 有效期时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='用户授权信息表';
