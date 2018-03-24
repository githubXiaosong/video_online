/*
Navicat MySQL Data Transfer

Source Server         : 127.0.0.1
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : laravel

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2018-03-24 11:56:19
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
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of courses
-- ----------------------------
INSERT INTO `courses` VALUES ('14', '小松的课程2', 'videos/bea0a18923cbc35923f10ac1a1b74502.mp4', 'images/9f7c886568427cb18eaa9dc70f9f8d23.jpeg', '2', '2018-03-22 03:31:37', '2018-03-22 03:31:37');
INSERT INTO `courses` VALUES ('15', 'test1', 'videos/bea0a18923cbc35923f10ac1a1b74502.mp4', 'images/9f7c886568427cb18eaa9dc70f9f8d23.jpeg', '2', '2018-03-24 00:46:10', '2018-03-24 00:46:10');

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
  `identity` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('2', '小松', '1098030258@qq.com', '$2y$10$QjMc9N21nAWjG.epirHiJ.ln/xSthjCeaOYePQemZi63BPhrhoBma', 'bXMfm6qJRwyyOpJrX3ABfRwicf8EajhYlPga4XoFHWb2IR4RxLUziODm9KJc', '0', '2018-03-21 07:33:43', '2018-03-24 00:46:31');
INSERT INTO `users` VALUES ('21', 'xiaosong111', '1093011258@qq.com', '$2y$10$TYene.au9cvwLpBW3g6DfewRboEKkLN4zkI/3baG63QAv6nW/Tcx6', 'da6th5AslMctrO8zkKSRjvyUM7aXQSVXL9Xz8nonciSsNLPCMKq7oP6xuzCJ', '10', '2018-03-24 01:39:13', '2018-03-24 01:40:10');
INSERT INTO `users` VALUES ('22', 'xiaosong111', '10980258@qq.com', '$2y$10$j6T5gQhybQ6O4XzSZlxdbue1YL8hoYdYH3.WJWVI.yu4I6geIGLii', 'gwdzFKwgRuBdVzZeO2mkc3hlxoSxhu69z9rNKKQr3OZ36oaLSTiHDLiafbOT', '0', '2018-03-24 01:45:42', '2018-03-24 01:45:51');
INSERT INTO `users` VALUES ('23', 'test1', '109808@qq.com', '$2y$10$eK5.ZXWKwtn2b5RXV.PiCerbEOeJ3cb/wAXN1EW5tJqcTvPXIu3/u', '0QdMniUyg3FogxZMVUFn1vZp2NGbOwALWPlvKHAogqIa3156nZBP7gkgamrt', '10', '2018-03-24 01:46:02', '2018-03-24 01:46:09');
INSERT INTO `users` VALUES ('24', 'test1', '109258@qq.com', '$2y$10$dTRn1PMTt9WQHwHzbF8nTOSq1eX2/iI4cEdIGH3cNS4U02ExtaTwK', '9MMVx6oESQRuV4Wo3LH7OaZHj5hYIVhJftG73btEpH1VGXLQpB9gMU8gPKqv', '0', '2018-03-24 01:46:22', '2018-03-24 01:46:31');
