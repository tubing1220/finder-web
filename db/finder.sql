/*
Navicat MySQL Data Transfer

Source Server         : 127.0.0.1
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : finder

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2018-01-13 18:49:05
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for finder_article
-- ----------------------------
DROP TABLE IF EXISTS `finder_article`;
CREATE TABLE `finder_article` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '文章id 自增',
  `category_id` int(11) DEFAULT NULL COMMENT '文章分类标签id',
  `user_id` int(11) DEFAULT NULL COMMENT '作者id',
  `name` varchar(100) DEFAULT NULL COMMENT '作者昵称',
  `title` varchar(100) DEFAULT NULL COMMENT '文章标题',
  `desc` text COMMENT '文章描述',
  `create_time` int(11) DEFAULT NULL COMMENT '创建时间',
  `update_time` int(11) DEFAULT NULL COMMENT '修改时间',
  `is_del` tinyint(4) DEFAULT '0' COMMENT '是否已删除 0:未删除，1：已删除,default:0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='文章表';

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

-- ----------------------------
-- Table structure for finder_collection_artical
-- ----------------------------
DROP TABLE IF EXISTS `finder_collection_artical`;
CREATE TABLE `finder_collection_artical` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '自增 关注id',
  `user_id` int(11) DEFAULT NULL COMMENT '关注的用户id',
  `artical_id` int(11) DEFAULT NULL COMMENT '文章id',
  `create_time` int(11) DEFAULT NULL COMMENT '收藏时间',
  `update_time` int(11) DEFAULT NULL COMMENT '更新时间',
  `is_del` tinyint(4) DEFAULT '0' COMMENT '0:未删除，1：已删除,default:0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='收藏的文章列表';

-- ----------------------------
-- Table structure for finder_fans_user
-- ----------------------------
DROP TABLE IF EXISTS `finder_fans_user`;
CREATE TABLE `finder_fans_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '自增 关注id',
  `user_id` int(11) DEFAULT NULL COMMENT '粉丝的用户id',
  `create_time` int(11) DEFAULT NULL COMMENT '关注时间',
  `update_time` int(11) DEFAULT NULL COMMENT '修改时间',
  `is_del` tinyint(4) DEFAULT '0' COMMENT '0:未删除，1：已删除,default:0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='粉丝（被关注）列表';

-- ----------------------------
-- Table structure for finder_follow_category
-- ----------------------------
DROP TABLE IF EXISTS `finder_follow_category`;
CREATE TABLE `finder_follow_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '自增 关注id',
  `name` varchar(255) DEFAULT NULL COMMENT '标签名称',
  `create_time` int(11) DEFAULT NULL COMMENT '关注时间',
  `update_time` int(11) DEFAULT NULL COMMENT '修改时间',
  `is_del` tinyint(4) DEFAULT '0' COMMENT '0:未删除，1：已删除,default:0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='用户关注的标签表';

-- ----------------------------
-- Table structure for finder_follow_user
-- ----------------------------
DROP TABLE IF EXISTS `finder_follow_user`;
CREATE TABLE `finder_follow_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '自增 关注id',
  `user_id` int(11) DEFAULT NULL COMMENT '关注的用户id',
  `create_time` int(11) DEFAULT NULL COMMENT '关注时间',
  `update_time` int(11) DEFAULT NULL COMMENT '修改时间',
  `is_del` tinyint(4) DEFAULT '0' COMMENT '0:未删除，1：已删除,default:0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='关注的作者列表';

-- ----------------------------
-- Table structure for finder_history_artical
-- ----------------------------
DROP TABLE IF EXISTS `finder_history_artical`;
CREATE TABLE `finder_history_artical` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '浏览历史id',
  `user_id` int(11) DEFAULT NULL COMMENT '浏览用户id',
  `artical_id` int(11) DEFAULT NULL COMMENT '浏览文章id',
  `create_time` int(11) DEFAULT NULL COMMENT '浏览时间',
  `update_time` int(11) DEFAULT NULL COMMENT '修改时间',
  `is_del` tinyint(4) DEFAULT '0' COMMENT '0:未删除，1：已删除,default:0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='用户文章浏览历史表';

-- ----------------------------
-- Table structure for finder_like_artical
-- ----------------------------
DROP TABLE IF EXISTS `finder_like_artical`;
CREATE TABLE `finder_like_artical` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '自增 关注id',
  `user_id` int(11) DEFAULT NULL COMMENT '关注的用户id',
  `artical_id` int(11) DEFAULT NULL COMMENT '文章id',
  `create_time` int(11) DEFAULT NULL COMMENT '喜欢时间',
  `update_time` int(11) DEFAULT NULL COMMENT '更新时间',
  `is_del` tinyint(4) DEFAULT '0' COMMENT '0:未删除，1：已删除,default:0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='喜欢的文章表';

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
