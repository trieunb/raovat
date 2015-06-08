/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50621
Source Host           : localhost:3306
Source Database       : raovatct

Target Server Type    : MYSQL
Target Server Version : 50621
File Encoding         : 65001

Date: 2015-06-06 07:58:04
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for caidatgianhang
-- ----------------------------
DROP TABLE IF EXISTS `caidatgianhang`;
CREATE TABLE `caidatgianhang` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `gianhang_id` int(11) NOT NULL,
  `tencaidat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `giatri` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of caidatgianhang
-- ----------------------------

-- ----------------------------
-- Table structure for danhmuc
-- ----------------------------
DROP TABLE IF EXISTS `danhmuc`;
CREATE TABLE `danhmuc` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tendanhmuc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `parent` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of danhmuc
-- ----------------------------
INSERT INTO `danhmuc` VALUES ('2', 'Nhà đất - Cần Mua', '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `danhmuc` VALUES ('3', 'Nhà đất - Cần Thuê', '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `danhmuc` VALUES ('5', 'Vật liệu xây dựng', '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `danhmuc` VALUES ('7', 'Điện thoại', '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `danhmuc` VALUES ('10', 'Internet, Card', '0', '0000-00-00 00:00:00', '2015-05-30 09:40:16');
INSERT INTO `danhmuc` VALUES ('11', 'Sang nhượng', '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `danhmuc` VALUES ('12', 'Cho thuê', '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `danhmuc` VALUES ('13', 'Thời trang - Đẹp', '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `danhmuc` VALUES ('14', 'Dịch vụ', '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `danhmuc` VALUES ('15', 'Dạy và Học', '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `danhmuc` VALUES ('16', 'Các loại khác', '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `danhmuc` VALUES ('18', 'Đồ điện tử', '0', '2015-05-30 07:57:35', '2015-05-30 07:57:35');
INSERT INTO `danhmuc` VALUES ('19', 'rsgdgrv', '0', '2015-05-30 08:30:00', '2015-05-30 08:30:00');
INSERT INTO `danhmuc` VALUES ('20', 'trieu nguyen', '0', '2015-05-30 09:42:48', '2015-05-30 09:42:48');

-- ----------------------------
-- Table structure for gianhang
-- ----------------------------
DROP TABLE IF EXISTS `gianhang`;
CREATE TABLE `gianhang` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tengianhang` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of gianhang
-- ----------------------------

-- ----------------------------
-- Table structure for groups
-- ----------------------------
DROP TABLE IF EXISTS `groups`;
CREATE TABLE `groups` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `groups_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of groups
-- ----------------------------
INSERT INTO `groups` VALUES ('1', 'SuperUser', '{\"admin\":1,\"users\":1}', '2015-05-25 01:37:23', '2015-05-25 01:37:23');
INSERT INTO `groups` VALUES ('2', 'Administrator', '{\"users\":1}', '2015-05-25 01:37:23', '2015-05-25 01:37:23');
INSERT INTO `groups` VALUES ('3', 'User', '', '2015-05-25 01:37:24', '2015-05-25 01:37:24');

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
INSERT INTO `migrations` VALUES ('2012_12_06_225921_migration_cartalyst_sentry_install_users', '1');
INSERT INTO `migrations` VALUES ('2012_12_06_225929_migration_cartalyst_sentry_install_groups', '1');
INSERT INTO `migrations` VALUES ('2012_12_06_225945_migration_cartalyst_sentry_install_users_groups_pivot', '1');
INSERT INTO `migrations` VALUES ('2012_12_06_225988_migration_cartalyst_sentry_install_throttle', '1');
INSERT INTO `migrations` VALUES ('2015_05_15_113658_create_danhmuc_table', '2');
INSERT INTO `migrations` VALUES ('2015_05_15_113750_create_gianhang_table', '2');
INSERT INTO `migrations` VALUES ('2015_05_15_113829_create_tinraovat_table', '2');
INSERT INTO `migrations` VALUES ('2015_05_15_113859_create_tinvipham_table', '2');
INSERT INTO `migrations` VALUES ('2015_05_15_113938_create_caidatgianhang_table', '2');
INSERT INTO `migrations` VALUES ('2015_05_16_035909_add_users_table', '2');
INSERT INTO `migrations` VALUES ('2015_05_16_040500_add_users1_table', '2');
INSERT INTO `migrations` VALUES ('2015_05_23_043019_add_users2_table', '2');
INSERT INTO `migrations` VALUES ('2015_05_23_065832_add_danhmuc_table', '2');
INSERT INTO `migrations` VALUES ('2015_05_23_071101_add_tinraovat_table', '2');
INSERT INTO `migrations` VALUES ('2015_05_25_024153_add_tinravat1_table', '3');
INSERT INTO `migrations` VALUES ('2015_05_31_043352_create_store_categories_table', '4');
INSERT INTO `migrations` VALUES ('2015_05_31_045732_create_store_options_table', '4');
INSERT INTO `migrations` VALUES ('2015_05_31_102632_create_store_products_table', '4');
INSERT INTO `migrations` VALUES ('2015_06_01_170125_create_orders_table', '4');
INSERT INTO `migrations` VALUES ('2015_06_01_170637_create_order_details_table', '4');
INSERT INTO `migrations` VALUES ('2015_06_01_173705_add_orders_table', '4');

-- ----------------------------
-- Table structure for orders
-- ----------------------------
DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `store_id` int(11) NOT NULL,
  `order_number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `billing_first` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `billing_last` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `billing_company` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `billing_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `billing_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `billing_phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `shipping_first` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `shipping_last` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `shipping_company` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `shipping_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `shipping_note` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `order_date` datetime NOT NULL,
  `order_status` int(11) NOT NULL,
  `order_total` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of orders
-- ----------------------------

-- ----------------------------
-- Table structure for order_details
-- ----------------------------
DROP TABLE IF EXISTS `order_details`;
CREATE TABLE `order_details` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of order_details
-- ----------------------------

-- ----------------------------
-- Table structure for store_categories
-- ----------------------------
DROP TABLE IF EXISTS `store_categories`;
CREATE TABLE `store_categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `store_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of store_categories
-- ----------------------------

-- ----------------------------
-- Table structure for store_options
-- ----------------------------
DROP TABLE IF EXISTS `store_options`;
CREATE TABLE `store_options` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `store_id` int(11) NOT NULL,
  `option_key` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `option_des` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `option_value` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of store_options
-- ----------------------------

-- ----------------------------
-- Table structure for store_products
-- ----------------------------
DROP TABLE IF EXISTS `store_products`;
CREATE TABLE `store_products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `store_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `vote` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of store_products
-- ----------------------------

-- ----------------------------
-- Table structure for throttle
-- ----------------------------
DROP TABLE IF EXISTS `throttle`;
CREATE TABLE `throttle` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned DEFAULT NULL,
  `ip_address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `attempts` int(11) NOT NULL DEFAULT '0',
  `suspended` tinyint(1) NOT NULL DEFAULT '0',
  `banned` tinyint(1) NOT NULL DEFAULT '0',
  `last_attempt_at` timestamp NULL DEFAULT NULL,
  `suspended_at` timestamp NULL DEFAULT NULL,
  `banned_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `throttle_user_id_index` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of throttle
-- ----------------------------
INSERT INTO `throttle` VALUES ('1', '1', null, '0', '0', '0', null, null, null);
INSERT INTO `throttle` VALUES ('2', '53', null, '0', '0', '0', null, null, null);
INSERT INTO `throttle` VALUES ('3', '2', '::1', '0', '0', '0', null, null, null);
INSERT INTO `throttle` VALUES ('4', '54', '::1', '0', '0', '0', null, null, null);

-- ----------------------------
-- Table structure for tinraovat
-- ----------------------------
DROP TABLE IF EXISTS `tinraovat`;
CREATE TABLE `tinraovat` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `loaitin` tinyint(4) NOT NULL COMMENT '1:tin cần bán 0:tin cần mua',
  `tieude` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `noidung` text COLLATE utf8_unicode_ci NOT NULL,
  `gia` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `quytrinhvanchuyen` text COLLATE utf8_unicode_ci NOT NULL,
  `vip_to` datetime NOT NULL,
  `ngaydang` datetime NOT NULL,
  `luotxem` int(11) NOT NULL,
  `trangthai` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of tinraovat
-- ----------------------------
INSERT INTO `tinraovat` VALUES ('57', '53', '1', '0', 'tin 1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta.', '5,345,343,453', '[\"images\\/dangtin\\/TUqrW0gbJM.jpg\",\"images\\/dangtin\\/9hlroXMB0m.jpg\",\"images\\/dangtin\\/OVci2WEmYT.jpg\"]', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta.', '0000-00-00 00:00:00', '2015-05-27 09:07:28', '22', '1', '2015-05-27 09:07:28', '2015-06-05 06:40:37', 'nguyễn Bá Triều', 'trieunb08@gmail.com', '757668768', 'ho chi minh');
INSERT INTO `tinraovat` VALUES ('58', '2', '11', '1', 'Tiêu Đề Tin', '<u>fgs ser ser ser&nbsp;</u>', '67,678,678', '[]', 'dfas erf ef ef awef awer awe', '0000-00-00 00:00:00', '2015-06-02 08:35:43', '8', '0', '2015-06-02 08:35:43', '2015-06-02 10:58:13', '', 'admin@localhost', '', '');
INSERT INTO `tinraovat` VALUES ('59', '2', '2', '0', 'ghd sdgsdfg', 'sdfgs', '5,676', '[\"images\\/dangtin\\/Dm3BwqH1cG.jpg\"]', 'hdh dthd t ', '0000-00-00 00:00:00', '2015-06-02 08:36:10', '10', '0', '2015-06-02 08:36:10', '2015-06-03 04:09:31', 'sfgsg', 'admin@localhost', '89679678', 'sdgs');
INSERT INTO `tinraovat` VALUES ('60', '2', '20', '0', 'Đăng tin rao vặt', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta.', '78,678,678', '[\"images\\/dangtin\\/aXdiZlIzex.jpg\"]', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta.', '0000-00-00 00:00:00', '2015-06-02 08:59:59', '11', '0', '2015-06-02 08:59:59', '2015-06-03 07:07:56', 'trieunb', 'admin@localhost', '01654972165', 'da nang');
INSERT INTO `tinraovat` VALUES ('61', '2', '2', '0', 'fgsfgsg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta.', '5,758', '[]', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta.', '0000-00-00 00:00:00', '2015-06-02 09:06:07', '3', '0', '2015-06-02 09:06:07', '2015-06-03 07:28:15', '', 'admin@localhost', '', '');
INSERT INTO `tinraovat` VALUES ('62', '2', '14', '1', 'rgsgsrgsdrg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta.', '', '[\"images\\/dangtin\\/PZMnpCl1Jg.jpg\"]', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta.', '0000-00-00 00:00:00', '2015-06-02 09:06:24', '15', '0', '2015-06-02 09:06:25', '2015-06-03 06:10:07', '', 'admin@localhost', '', '');
INSERT INTO `tinraovat` VALUES ('63', '2', '7', '1', 'fgsgfg', 'sdg srgsrg sgsgs', '45,456', '[\"images\\/dangtin\\/jEwk5zI2cr.jpg\"]', 's sgs sgs gs fg ', '0000-00-00 00:00:00', '2015-06-05 06:41:25', '1', '0', '2015-06-05 06:41:25', '2015-06-05 06:41:25', 'sggs', 'admin@localhost', '4646545', 'dfgdfgd');

-- ----------------------------
-- Table structure for tinvipham
-- ----------------------------
DROP TABLE IF EXISTS `tinvipham`;
CREATE TABLE `tinvipham` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tin_id` int(11) NOT NULL,
  `thoigian` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `loi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ip` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of tinvipham
-- ----------------------------

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8_unicode_ci,
  `activated` tinyint(1) NOT NULL DEFAULT '0',
  `activation_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `activated_at` timestamp NULL DEFAULT NULL,
  `last_login` timestamp NULL DEFAULT NULL,
  `persist_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `reset_password_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `full_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `facebook_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `google_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_activation_code_index` (`activation_code`),
  KEY `users_reset_password_code_index` (`reset_password_code`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'trieunb@yahoo.com.vn', 'trieunb', '$2y$10$wxrf7CklirOsRTPSHcoyNu/TIOAFJrxmoT2b6VrAugMnuHoe5xlxe', null, '1', null, null, '2015-06-05 06:42:30', '$2y$10$2rlYo8pv5hZ33scsdLYhTeDsTb9k89zjOtKP3qq6cTkFGnYOIqR4y', null, null, null, '2015-05-25 01:36:05', '2015-06-05 06:42:30', 'Leo Nguyễn', 'đà nẳng', '0659465165', '660300610741795', '660300610741795');
INSERT INTO `users` VALUES ('2', 'admin@localhost', 'admin', '$2y$10$Vcssc9o/3CdZGte4lGq2tOPxjREsTg.aLuyrySjdrSmtoBOgP.6Xu', null, '1', null, null, '2015-06-03 06:26:14', '$2y$10$v8rH16uG.nmesH54A.rMsOZLQPYlOyblEXDoxcELsNQU9auJ.7EOq', null, null, null, '2015-05-25 01:37:24', '2015-06-03 06:26:14', '', '', '', '', '');
INSERT INTO `users` VALUES ('3', 'Ken.Predovic@Armstrong.biz', 'Adrianna.Becker', '$2y$10$3sl1/p53nHkNDFqmwR1TdeWzrBwIlfKZDpC/XHDWq1fLU.CCSt/VC', null, '1', null, null, null, null, null, null, null, '2015-05-25 01:37:24', '2015-05-30 03:10:07', 'Ladarius Stanton', '843 Melyssa Port\nEast Colinside, RI 83526', '0977 777 777', '', '');
INSERT INTO `users` VALUES ('4', 'Elmer.Green@hotmail.com', 'Clementine.Muller', '$2y$10$.sl8uyjpFuv5qoQWOpU9CesvkLJMnbrOuRrNgjGro6sRfAL5YNOfa', null, '1', null, null, null, null, null, null, null, '2015-05-25 01:37:24', '2015-05-30 03:10:11', 'Constance Feest', '714 Howell Manor Suite 525\nNew Alva, NM 14151-4234', '0977 777 777', '', '');
INSERT INTO `users` VALUES ('5', 'jDenesik@gmail.com', 'Evie31', '$2y$10$CghyCpj5bAPNZHbLpSndLec.2SY0pArNBUEe91BOqAY.PiLkHol6y', null, '1', null, null, null, null, null, null, null, '2015-05-25 01:37:24', '2015-05-30 03:10:09', 'Meta Cronin', '27851 Destiny Trail Suite 006\nCorwintown, OH 78318-3248', '0977 777 777', '', '');
INSERT INTO `users` VALUES ('6', 'cBorer@McDermott.biz', 'Maria.Stehr', '$2y$10$PqHrT5bVndWDgxcjellNX.yDMRb0DVYau26Id9Y9LZTq7t/rhRQ4S', null, '1', null, null, null, null, null, null, null, '2015-05-25 01:37:24', '2015-05-30 07:06:06', 'Yesenia DuBuque', '8785 Connelly Island Suite 083\nClementineberg, ID 52738', '0977 777 777', '', '');
INSERT INTO `users` VALUES ('7', 'Robert.Wilderman@Turner.org', 'Zachery.Towne', '$2y$10$31MkgBx7/IptVmvkCOVBv.iGf2qRghNobwnHoFI38eFR8g9x.FPWa', null, '1', null, null, null, null, null, null, null, '2015-05-25 01:37:24', '2015-05-30 03:10:13', 'Malika Schneider', '78392 Paris Common\nNorth Luigi, MD 82077', '0977 777 777', '', '');
INSERT INTO `users` VALUES ('8', 'Freddie60@hotmail.com', 'Hilton.Cartwright', '$2y$10$6dN4KM88JTSwSw1p8gdKue.7c4Md8JG5vOazzU.OGO5fu46rgxiIm', null, '0', null, null, null, null, null, null, null, '2015-05-25 01:37:25', '2015-05-30 03:03:10', 'Lea Lehner', '847 Shaylee Circle Apt. 883\nWillowborough, PA 22542-6167', '0977 777 777', '', '');
INSERT INTO `users` VALUES ('9', 'Malvina.Upton@gmail.com', 'Gilbert86', '$2y$10$3bbr4pEiDqdAbrhQSxs5fORDTbHaTNRYmwsXmXSRDP/jCOym4Kk0S', null, '1', null, null, null, null, null, null, null, '2015-05-25 01:37:25', '2015-05-30 09:02:08', 'Nicklaus Gulgowski', '7421 Denesik Tunnel Suite 414\nKuvalisburgh, CT 75262', '0977 777 777', '', '');
INSERT INTO `users` VALUES ('12', 'cReichert@hotmail.com', 'Zemlak.Trevion', '$2y$10$KylYxZ6H8UrKxMKhCTyfOOyjVoqTyDy68NlFKTTtnXcezwLMZtFSy', null, '1', null, null, null, null, null, null, null, '2015-05-25 01:37:25', '2015-05-30 09:25:35', 'Nelson Thompson', '82479 Darrion Coves\nAdrienneborough, MT 11253', '0977 777 777', '', '');
INSERT INTO `users` VALUES ('13', 'gSchultz@Denesik.org', 'Garnett.Crist', '$2y$10$xtos6zcPmEjuxBO4nCJ6W.XQXfPOCoQ3Q8xhhxTue6rC5s3P/WvNS', null, '1', null, null, null, null, null, null, null, '2015-05-25 01:37:25', '2015-05-25 01:37:25', 'Arthur Fritsch', '679 Paucek Union\nBeerport, LA 70954', '0977 777 777', '', '');
INSERT INTO `users` VALUES ('14', 'pKling@Hackett.net', 'tRaynor', '$2y$10$r0PqvK1A5OBjBUF.KSh8q.Nf.yQtiqUqgl3UXJBrMcUbGU3j0j/hm', null, '1', null, null, null, null, null, null, null, '2015-05-25 01:37:25', '2015-05-25 01:37:25', 'Guadalupe Marquardt', '46580 Mateo Stream\nSpinkaton, UT 53794', '0977 777 777', '', '');
INSERT INTO `users` VALUES ('15', 'xDAmore@gmail.com', 'Madisyn.Davis', '$2y$10$fAGRqr0ZZ3.B.V7gZoFGeu3QkO59A472uz7UAX.d5uTZt7rWIytca', null, '1', null, null, null, null, null, null, null, '2015-05-25 01:37:25', '2015-05-25 01:37:25', 'Lenna Kling', '8847 Betty Radial\nPort Riley, NV 56689-9454', '0977 777 777', '', '');
INSERT INTO `users` VALUES ('16', 'Zander.Eichmann@Klocko.info', 'Elijah96', '$2y$10$5hPJUOQE8xaSnIOVnbStvO/iKSaY.PLmdGcnhacLfQB4VuuakG.2a', null, '1', null, null, null, null, null, null, null, '2015-05-25 01:37:25', '2015-05-25 01:37:25', 'Manley Hauck', '2293 Labadie Throughway Suite 352\nWest Luzmouth, ME 07819', '0977 777 777', '', '');
INSERT INTO `users` VALUES ('17', 'Cleve31@yahoo.com', 'Mazie59', '$2y$10$sOoEVNcZBT5dH0jIDT97c.cNiPkJkUs0zABy.fZB8HhejSav3FmVC', null, '1', null, null, null, null, null, null, null, '2015-05-25 01:37:26', '2015-05-25 01:37:26', 'Norberto Nicolas', '7032 Erdman Mountains\nGreenholtmouth, KS 04687-1427', '0977 777 777', '', '');
INSERT INTO `users` VALUES ('18', 'Monahan.Haylee@hotmail.com', 'pWelch', '$2y$10$7q5R0L085CWIgEsONhU5PenrDp9jURlXhyPMMP2Sr29xi2.fvzmTa', null, '1', null, null, null, null, null, null, null, '2015-05-25 01:37:26', '2015-05-25 01:37:26', 'Kianna Trantow', '4381 Sadye Garden\nSouth Agustin, PA 11178', '0977 777 777', '', '');
INSERT INTO `users` VALUES ('19', 'Howell84@gmail.com', 'bJenkins', '$2y$10$8aPjOdZr4GMeRzqAsuCTQed/9hFOYrIE92Od.DRoAqTeuFyAzGJKW', null, '1', null, null, null, null, null, null, null, '2015-05-25 01:37:26', '2015-05-25 01:37:26', 'Ilene Reynolds', '491 Littel Lock Apt. 997\nRodriguezfurt, TX 42739-6729', '0977 777 777', '', '');
INSERT INTO `users` VALUES ('20', 'Geoffrey43@hotmail.com', 'ySawayn', '$2y$10$IjKxDlovM/6OM9LeWdeTa.6TDopI2D33Z9Pr8lu0SmL6ulSLntyBS', null, '1', null, null, null, null, null, null, null, '2015-05-25 01:37:26', '2015-05-25 01:37:26', 'Penelope Schmitt', '884 Gaston Way\nCollierberg, WV 68213-0370', '0977 777 777', '', '');
INSERT INTO `users` VALUES ('21', 'cHamill@Maggio.info', 'Bill.Flatley', '$2y$10$mTP/.sCd2qOQhHkrKyBw8unri3mUyJTxk6M6W5cgwW3iBVKatqvF.', null, '1', null, null, null, null, null, null, null, '2015-05-25 01:37:26', '2015-05-25 01:37:26', 'Kailey Ruecker', '44563 Parker Overpass\nSouth Kenyatta, WY 19108-9133', '0977 777 777', '', '');
INSERT INTO `users` VALUES ('22', 'Candice.Upton@hotmail.com', 'Cornelius78', '$2y$10$5knLujAx2QQNTsMbAit8setOqKYqpbFue5r8tukZ/VRBGl8SitnmG', null, '1', null, null, null, null, null, null, null, '2015-05-25 01:37:26', '2015-05-25 01:37:26', 'Kaia Quitzon', '0749 Mallory Causeway Suite 340\nEast Aishafurt, WI 42474', '0977 777 777', '', '');
INSERT INTO `users` VALUES ('23', 'Wunsch.Enola@Haley.org', 'dLebsack', '$2y$10$rcfuGRSpYpFIECCBOVGiWuw7BPoUgPp0WNdZCxXz99oXTi524YJhW', null, '1', null, null, null, null, null, null, null, '2015-05-25 01:37:26', '2015-05-25 01:37:26', 'Maryam Powlowski', '25182 Madisen Station\nPort Arjuntown, TN 21841-3188', '0977 777 777', '', '');
INSERT INTO `users` VALUES ('24', 'Melvin.Feeney@Bechtelar.com', 'Ashleigh06', '$2y$10$AlwGF8jtm5pdMSwe74kdrOc/e1B5s.VRYJqHSx.SPhdmjhnsIbWLu', null, '1', null, null, null, null, null, null, null, '2015-05-25 01:37:26', '2015-05-25 01:37:26', 'Gene Brown', '1536 Ignacio Light Suite 014\nMavisport, WA 00004-8904', '0977 777 777', '', '');
INSERT INTO `users` VALUES ('25', 'Urban74@gmail.com', 'Jany.Kessler', '$2y$10$Gq2d5ZG6DC9NSOKU0D74hO07Bz7PjTH/EYqUQnhpfghhX0jmd4I62', null, '1', null, null, null, null, null, null, null, '2015-05-25 01:37:26', '2015-05-25 01:37:26', 'Marjorie Conn', '907 Kovacek Crest\nSmithamview, WI 23279', '0977 777 777', '', '');
INSERT INTO `users` VALUES ('26', 'lGibson@yahoo.com', 'Raphaelle89', '$2y$10$9iUWo9Vhxio5frEQL7GarO8B7hLRuncGrzlVwvijoOVUMWimQY4ea', null, '1', null, null, null, null, null, null, null, '2015-05-25 01:37:26', '2015-05-25 01:37:26', 'Una Schneider', '2486 Gina Plains Suite 302\nRutherfordside, AL 08618-8561', '0977 777 777', '', '');
INSERT INTO `users` VALUES ('27', 'rBorer@Gaylord.net', 'Kamille82', '$2y$10$c6lwQFThngSBbHyW9IJ6e.FXwDZ2LkvgOizrgzjIwa8DcfZI9Uic6', null, '1', null, null, null, null, null, null, null, '2015-05-25 01:37:26', '2015-05-25 01:37:26', 'Kian Gibson', '0203 Ruecker River\nWest Patsy, RI 36939', '0977 777 777', '', '');
INSERT INTO `users` VALUES ('28', 'Jewel.Hyatt@Boyle.com', 'Hermann.Ana', '$2y$10$N3tTLRVugGnc8oHTqEysWuv7SEOz5W0tC7K9vzn0jIdl4ezbS1766', null, '1', null, null, null, null, null, null, null, '2015-05-25 01:37:27', '2015-05-25 01:37:27', 'Darien Crooks', '3837 Yoshiko Creek\nNorth Norberto, MI 57498', '0977 777 777', '', '');
INSERT INTO `users` VALUES ('29', 'Christophe.Moen@Stoltenberg.com', 'King.Doug', '$2y$10$6Y4evYcpyKRDqa48Cd.Ome8Xg96HXQ06giGm/K6utj.uRFOFm02d2', null, '1', null, null, null, null, null, null, null, '2015-05-25 01:37:27', '2015-05-25 01:37:27', 'Georgette Keebler', '0282 Olson Walk\nPort Bryanastad, MI 28127-4736', '0977 777 777', '', '');
INSERT INTO `users` VALUES ('30', 'Lamar30@gmail.com', 'Deon.Wintheiser', '$2y$10$DzxXuKuOO9saSTR0KdXNYuwnu8BBZVQZ1BeLpuARgWbwJTrfIDJvi', null, '1', null, null, null, null, null, null, null, '2015-05-25 01:37:27', '2015-05-25 01:37:27', 'Heather Padberg', '94492 Deckow Courts\nBrigitteborough, PA 15100', '0977 777 777', '', '');
INSERT INTO `users` VALUES ('31', 'Kassulke.Hobart@Grimes.com', 'cSpinka', '$2y$10$xlz9OK/MBchacBEMd4lh0.qyXfVEExANPMkbaMD99HkpnM7sMJZc6', null, '1', null, null, null, null, null, null, null, '2015-05-25 01:37:27', '2015-05-25 01:37:27', 'Carmel Johns', '04135 Romaguera Fords\nPort Juniuschester, NY 92115', '0977 777 777', '', '');
INSERT INTO `users` VALUES ('32', 'Dawn.Kirlin@McLaughlin.com', 'Tremblay.Tessie', '$2y$10$dYiRZnKbQEnHIR9jlrM3hubpF1k9VA4K5JA2fCJsanfsMV0Qi2D.6', null, '1', null, null, null, null, null, null, null, '2015-05-25 01:37:27', '2015-05-25 01:37:27', 'Seamus Champlin', '8878 Ida Ford Suite 916\nArelymouth, ME 47336', '0977 777 777', '', '');
INSERT INTO `users` VALUES ('33', 'oFerry@Funk.com', 'White.Charley', '$2y$10$ZwtHgKgROZxjHVQ3Zscqauvo2AIh10Ecjw.xtTLz3Ckma9ulvwthS', null, '1', null, null, null, null, null, null, null, '2015-05-25 01:37:27', '2015-05-25 01:37:27', 'Libby Kling', '925 Ila View Suite 770\nNorth Lillianaside, PA 58042-3956', '0977 777 777', '', '');
INSERT INTO `users` VALUES ('34', 'Goyette.Jerry@Runolfsson.com', 'Isai15', '$2y$10$UhlXlokzy5fRCxywl/PbFOocR8Ki.WgDzRIKlspDR4XG5sSQeIudS', null, '1', null, null, null, null, null, null, null, '2015-05-25 01:37:27', '2015-05-25 01:37:27', 'Jefferey Wiza', '34051 Leonor Road\nNew Jarred, CO 70010-3499', '0977 777 777', '', '');
INSERT INTO `users` VALUES ('35', 'dGutkowski@Tremblay.biz', 'uBeer', '$2y$10$td.yYGrX/yIL8XXVWt67iOsknSnSiQoSGpRUo57Hkeih48IsoHpSK', null, '1', null, null, null, null, null, null, null, '2015-05-25 01:37:27', '2015-05-25 01:37:27', 'Hassie Mueller', '495 Ruecker Curve\nLake Alvenaview, IA 17289', '0977 777 777', '', '');
INSERT INTO `users` VALUES ('36', 'Elwin43@hotmail.com', 'Zboncak.Rodolfo', '$2y$10$PWDLP7ZNHEMgu2VEH70JNe/nQ7v.7mOyjs1YYltpahrZoh63Eegx6', null, '1', null, null, null, null, null, null, null, '2015-05-25 01:37:27', '2015-05-25 01:37:27', 'Franz Feeney', '3991 Barney Island\nSchmittfurt, OK 86718-2256', '0977 777 777', '', '');
INSERT INTO `users` VALUES ('37', 'mKirlin@hotmail.com', 'Deonte36', '$2y$10$8ORbwRec/fBVpCOaEkBuGOPzsO1hrhgzw5tXoMXCOZwNA0F7NoT6K', null, '1', null, null, null, null, null, null, null, '2015-05-25 01:37:28', '2015-05-25 01:37:28', 'Cornell Smitham', '78862 Upton Heights Apt. 748\nMikelberg, NJ 09564', '0977 777 777', '', '');
INSERT INTO `users` VALUES ('38', 'Corwin.Nicolette@Schneider.com', 'Zboncak.Tremaine', '$2y$10$eKP3JK.PMlDn9n0muZh3WuqsdYEWxZHjwebW8WzxH6yP3W3Tj4Heu', null, '1', null, null, null, null, null, null, null, '2015-05-25 01:37:28', '2015-05-25 01:37:28', 'Ana Runte', '2121 Feeney Burgs Suite 343\nEast Zachary, OK 19742', '0977 777 777', '', '');
INSERT INTO `users` VALUES ('39', 'Coralie85@gmail.com', 'dNienow', '$2y$10$5t8eOJ02qahj/m7gPmpxJ.FaMsKz9ogDwBfmEgYkiHhlXfxdxuUIm', null, '1', null, null, null, null, null, null, null, '2015-05-25 01:37:28', '2015-05-25 01:37:28', 'Norbert Balistreri', '935 Laurine Walks\nLake Joesph, ME 69854-5408', '0977 777 777', '', '');
INSERT INTO `users` VALUES ('40', 'pDach@hotmail.com', 'xDAmore', '$2y$10$MHgpWHRPmtd0zbFaewA3OOgjKSWgpQGWgxaLEFid/dq8yU0D1Dbg.', null, '1', null, null, null, null, null, null, null, '2015-05-25 01:37:28', '2015-05-25 01:37:28', 'Yvette Hand', '4112 Doyle Parks Suite 761\nAufderharchester, MA 08887-0353', '0977 777 777', '', '');
INSERT INTO `users` VALUES ('41', 'Felicity18@yahoo.com', 'Lubowitz.Mireille', '$2y$10$BgGbkZVimDslAb3MxDmCmOgaunZWGWA6r5PfKml.I.oaEC1ex0qwi', null, '1', null, null, null, null, null, null, null, '2015-05-25 01:37:28', '2015-05-25 01:37:28', 'Jennie Mosciski', '464 Ricky Run\nNorth Brendatown, MA 42868', '0977 777 777', '', '');
INSERT INTO `users` VALUES ('42', 'Naomi.Metz@gmail.com', 'Vandervort.Queenie', '$2y$10$RMOr2fuUrcCwnJIWPaxHAOXwfnbZacqjQKtHhf3u48./jFFbHoCoO', null, '1', null, null, null, null, null, null, null, '2015-05-25 01:37:28', '2015-05-25 01:37:28', 'Abelardo Stroman', '348 Kuvalis Valleys Apt. 668\nBergehaven, IL 44222', '0977 777 777', '', '');
INSERT INTO `users` VALUES ('43', 'VonRueden.Mose@Goodwin.com', 'Elijah47', '$2y$10$Jhcg8y7dOF21kG9SmoylKOIxEzoq/bu3Z/4tBb57FVIPwW4j5DFKe', null, '1', null, null, null, null, null, null, null, '2015-05-25 01:37:28', '2015-05-25 01:37:28', 'Grant Feil', '3389 Michelle Lane\nWest Baileyland, NE 47489-1252', '0977 777 777', '', '');
INSERT INTO `users` VALUES ('44', 'rQuitzon@Abernathy.com', 'eHintz', '$2y$10$XtA0uMxiSULirSkDVf3ckOgz4PPmIV437jeHh0KsaJPsZ/L9GcmuC', null, '1', null, null, null, null, null, null, null, '2015-05-25 01:37:28', '2015-05-25 01:37:28', 'Barney Ward', '4389 Ed Squares\nBirdietown, AR 79427', '0977 777 777', '', '');
INSERT INTO `users` VALUES ('45', 'Lenora.Kunze@gmail.com', 'xBartell', '$2y$10$BV3hwD.n7/v5I3EkayDUJeJGLyhaW3xgX8n9APG7YTaKfNxxGMOoy', null, '1', null, null, null, null, null, null, null, '2015-05-25 01:37:28', '2015-05-25 01:37:28', 'Lois Monahan', '4557 Doug Forest Apt. 684\nHaleyhaven, SD 41225-2460', '0977 777 777', '', '');
INSERT INTO `users` VALUES ('46', 'Anthony.Kuphal@hotmail.com', 'Gerald.Hauck', '$2y$10$h.luamgRJ/te2heFYQ1ZfOZXOvnF86b2gP.qjh5MfDN5kh4ka79C2', null, '1', null, null, null, null, null, null, null, '2015-05-25 01:37:28', '2015-05-25 01:37:28', 'Armand Legros', '235 Minnie Points Apt. 761\nMrazburgh, NV 63811', '0977 777 777', '', '');
INSERT INTO `users` VALUES ('47', 'Champlin.Elody@gmail.com', 'Dominic.Fahey', '$2y$10$0nCqYrWpvjSml55Va8d7yemtczx1oLMuGeghSqcioCMcc/zD9unQC', null, '1', null, null, null, null, null, null, null, '2015-05-25 01:37:29', '2015-05-25 01:37:29', 'Abraham Wuckert', '93380 Murphy Overpass Suite 837\nPort Kaela, NM 85954-8173', '0977 777 777', '', '');
INSERT INTO `users` VALUES ('48', 'Stark.Abelardo@Senger.com', 'nHilpert', '$2y$10$097DzRv9XuO8LKGGQBFu1uWLTO15c2H6TRLUhmd/O1bsFmmMsiITi', null, '1', null, null, null, null, null, null, null, '2015-05-25 01:37:29', '2015-05-25 01:37:29', 'Elfrieda Flatley', '987 Abernathy Brooks\nNorth Gerardo, SC 05535', '0977 777 777', '', '');
INSERT INTO `users` VALUES ('49', 'tWatsica@hotmail.com', 'Victoria.DuBuque', '$2y$10$NPCPmeJukj8MT0eO2mrhPO2nTYoA2Z4oF17HQE7eWsnejBzc9kzYi', null, '1', null, null, null, null, null, null, null, '2015-05-25 01:37:29', '2015-05-25 01:37:29', 'Scot Douglas', '79811 Hauck Ville\nNew Bobbyton, TX 80424', '0977 777 777', '', '');

-- ----------------------------
-- Table structure for users_groups
-- ----------------------------
DROP TABLE IF EXISTS `users_groups`;
CREATE TABLE `users_groups` (
  `user_id` int(10) unsigned NOT NULL,
  `group_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`user_id`,`group_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of users_groups
-- ----------------------------
INSERT INTO `users_groups` VALUES ('2', '1');
INSERT INTO `users_groups` VALUES ('3', '3');
INSERT INTO `users_groups` VALUES ('4', '3');
INSERT INTO `users_groups` VALUES ('5', '2');
INSERT INTO `users_groups` VALUES ('6', '2');
INSERT INTO `users_groups` VALUES ('7', '2');
INSERT INTO `users_groups` VALUES ('8', '2');
INSERT INTO `users_groups` VALUES ('9', '2');
INSERT INTO `users_groups` VALUES ('10', '2');
INSERT INTO `users_groups` VALUES ('11', '3');
INSERT INTO `users_groups` VALUES ('12', '2');
INSERT INTO `users_groups` VALUES ('13', '2');
INSERT INTO `users_groups` VALUES ('14', '3');
INSERT INTO `users_groups` VALUES ('15', '3');
INSERT INTO `users_groups` VALUES ('16', '2');
INSERT INTO `users_groups` VALUES ('17', '3');
INSERT INTO `users_groups` VALUES ('18', '3');
INSERT INTO `users_groups` VALUES ('19', '3');
INSERT INTO `users_groups` VALUES ('20', '2');
INSERT INTO `users_groups` VALUES ('21', '3');
INSERT INTO `users_groups` VALUES ('22', '3');
INSERT INTO `users_groups` VALUES ('23', '2');
INSERT INTO `users_groups` VALUES ('24', '3');
INSERT INTO `users_groups` VALUES ('25', '3');
INSERT INTO `users_groups` VALUES ('26', '3');
INSERT INTO `users_groups` VALUES ('27', '3');
INSERT INTO `users_groups` VALUES ('28', '2');
INSERT INTO `users_groups` VALUES ('29', '2');
INSERT INTO `users_groups` VALUES ('30', '3');
INSERT INTO `users_groups` VALUES ('31', '3');
INSERT INTO `users_groups` VALUES ('32', '3');
INSERT INTO `users_groups` VALUES ('33', '3');
INSERT INTO `users_groups` VALUES ('34', '3');
INSERT INTO `users_groups` VALUES ('35', '2');
INSERT INTO `users_groups` VALUES ('36', '3');
INSERT INTO `users_groups` VALUES ('37', '2');
INSERT INTO `users_groups` VALUES ('38', '2');
INSERT INTO `users_groups` VALUES ('39', '3');
INSERT INTO `users_groups` VALUES ('40', '2');
INSERT INTO `users_groups` VALUES ('41', '2');
INSERT INTO `users_groups` VALUES ('42', '2');
INSERT INTO `users_groups` VALUES ('43', '3');
INSERT INTO `users_groups` VALUES ('44', '2');
INSERT INTO `users_groups` VALUES ('45', '2');
INSERT INTO `users_groups` VALUES ('46', '3');
INSERT INTO `users_groups` VALUES ('47', '2');
INSERT INTO `users_groups` VALUES ('48', '2');
INSERT INTO `users_groups` VALUES ('49', '2');
INSERT INTO `users_groups` VALUES ('50', '3');
INSERT INTO `users_groups` VALUES ('51', '3');
INSERT INTO `users_groups` VALUES ('52', '3');
INSERT INTO `users_groups` VALUES ('53', '3');
INSERT INTO `users_groups` VALUES ('54', '3');
