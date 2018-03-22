/*
Navicat MySQL Data Transfer

Source Server         : 127.0.0.1
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : laravel

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2018-03-22 16:38:41
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for courses
-- ----------------------------
DROP TABLE IF EXISTS `courses`;
CREATE TABLE `courses` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `uri` varchar(255) NOT NULL,
  `cover_uri` varchar(255) DEFAULT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `1` (`user_id`),
  CONSTRAINT `1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of courses
-- ----------------------------
INSERT INTO `courses` VALUES ('14', '小松的课程2', 'videos/bea0a18923cbc35923f10ac1a1b74502.mp4', 'images/9f7c886568427cb18eaa9dc70f9f8d23.jpeg', '2', '2018-03-22 03:31:37', '2018-03-22 03:31:37');

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES ('2014_10_12_000000_create_users_table', '1');
INSERT INTO `migrations` VALUES ('2014_10_12_100000_create_password_resets_table', '1');

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `identity` tinyint(4) NOT NULL DEFAULT '10',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('2', '小松', '1098030258@qq.com', '$2y$10$QjMc9N21nAWjG.epirHiJ.ln/xSthjCeaOYePQemZi63BPhrhoBma', 'sg5Mtt8HDgZ3uKIhQX98LRiHZVxwTA8v2P43W3gNrdHKAJAhcKsH8KHg0Aq2', '10', '2018-03-21 07:33:43', '2018-03-22 07:27:07');
INSERT INTO `users` VALUES ('9', 'xiaosong123', '1098030255@qq.com', '$2y$10$4iH5FyuxfiZUbIO.c3nEnufAy.yr7A1rl.VsAurMegVUW2uLgxneS', 'fmJnwDMK3N7f4sSO0y0KDTOzIoqKRuOPCHSPNFI0zX1igqGiwPgD6cB1oZio', '10', '2018-03-22 08:18:40', '2018-03-22 08:19:18');
INSERT INTO `users` VALUES ('10', 'xiaosong12345', '1098030257@qq.com', '$2y$10$1g8Vaz3tKHgrWN7Zb8QCF.u3r5FHlVJbxkZ5J.c/bx90Pigx5nAuK', '6dcHFfp22rOamjBiOv0QkWOLllbLq5Jb7UChxMZh0fLqOyW61cUBqbjZ1Vja', '10', '2018-03-22 08:19:59', '2018-03-22 08:20:31');
