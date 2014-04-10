/*
Navicat MySQL Data Transfer

Source Server         : godorders
Source Server Version : 50532
Source Host           : 112.124.44.172:3306
Source Database       : godorders

Target Server Type    : MYSQL
Target Server Version : 50532
File Encoding         : 65001

Date: 2014-02-24 10:54:12
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for models
-- ----------------------------
DROP TABLE IF EXISTS `models`;
CREATE TABLE `models` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `weight` int(11) DEFAULT NULL,
  `height` int(11) DEFAULT NULL,
  `chest` int(11) DEFAULT NULL,
  `waist` int(11) DEFAULT NULL,
  `hips` int(11) DEFAULT NULL,
  `ages` int(11) DEFAULT NULL,
  `imgpath` varchar(255) DEFAULT NULL,
  `distyle` int(11) DEFAULT '0',
  `show` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of models
-- ----------------------------
INSERT INTO `models` VALUES ('1', '马利雅', '51', '172', '86', '64', '90', null, '50.jpg', '0', '1');
INSERT INTO `models` VALUES ('2', '嘉嘉', '46', '163', '85', '67', '87', null, '51.jpg', '0', '1');
INSERT INTO `models` VALUES ('3', '姣姣', '41', '164', '87', '58', '83', null, '51a.jpg', '0', '1');
INSERT INTO `models` VALUES ('4', '林戴丽', '46', '165', '76', '58', '85', null, '52.jpg', '1', '1');
INSERT INTO `models` VALUES ('5', '骆明慧', '45', '165', '78', '62', '82', null, '53.jpg', '1', '0');
INSERT INTO `models` VALUES ('6', '小月', '45', '165', '80', '60', '85', null, '54.jpg', '0', '1');
INSERT INTO `models` VALUES ('7', '欣宜', '47', '165', '83', '60', '88', null, '55.jpg', '1', '1');
INSERT INTO `models` VALUES ('8', '琦琦', '46', '166', null, null, null, null, '56.jpg', '1', '0');
INSERT INTO `models` VALUES ('9', '庆庆', null, '166', null, null, null, null, '57.jpg', '1', '1');
INSERT INTO `models` VALUES ('10', '珍妮', '51', '166', '86', '58', '92', null, '58.jpg', '1', '1');
INSERT INTO `models` VALUES ('11', 'Queen', null, '168', null, null, null, null, '59.jpg', '0', '1');
INSERT INTO `models` VALUES ('12', '珊珊', '46', '168', '88', '60', '80', null, '60.jpg', '1', '1');
INSERT INTO `models` VALUES ('13', '思雨', '80', '168', null, null, null, null, '61.jpg', '1', '1');
INSERT INTO `models` VALUES ('14', '小小', '47', '168', '85', '66', '89', null, '62.jpg', '1', '1');
INSERT INTO `models` VALUES ('15', '谢雅希', '43', '169', '84', '56', '86', null, '63.jpg', '1', '1');
INSERT INTO `models` VALUES ('16', '程芯', null, '170', '91', '68', '86', null, '64.jpg', '1', '1');
INSERT INTO `models` VALUES ('17', '洪娜', '48', '170', null, null, null, null, '65.jpg', '1', '1');
INSERT INTO `models` VALUES ('18', '黄彬', '52', '170', '85', '63', '90', null, '66.jpg', '1', '1');
INSERT INTO `models` VALUES ('19', '可儿', '48', '170', '89', '66', '90', null, '67.jpg', '1', '1');
INSERT INTO `models` VALUES ('21', '李嘉敏', '45', '170', '83', '60', '86', null, '68.jpg', '1', '1');
INSERT INTO `models` VALUES ('22', '刘丽珊', '48', '170', '86', '63', '89', null, '69.jpg', '1', '1');
INSERT INTO `models` VALUES ('24', '周丽莎', '45', '170', '86', '60', '88', null, '70.jpg', '0', '1');
INSERT INTO `models` VALUES ('25', 'KK', '49', '172', '85', '70', '94', null, '71.jpg', '1', '1');
INSERT INTO `models` VALUES ('26', '高鹤允', '52', '172', '85', '60', '89', null, '72.jpg', '1', '1');
INSERT INTO `models` VALUES ('27', '曼琪', '43', '172', '82', '58', '87', null, '74.jpg', '1', '1');
INSERT INTO `models` VALUES ('28', '小丹', null, '172', '85', '62', '88', null, '75.jpg', '1', '1');
INSERT INTO `models` VALUES ('29', '小晴', '49', '173', '84', '62', '88', null, '76.jpg', '1', '1');
INSERT INTO `models` VALUES ('30', '谢婧雯', '48', '172', '88', '62', '86', null, '77.jpg', '1', '1');
INSERT INTO `models` VALUES ('31', '张瑩', '51', '172', '84', '60', '88', null, '78.jpg', '1', '1');
INSERT INTO `models` VALUES ('32', '苹苹', null, '173', '88', '66', '92', null, '79.jpg', '1', '1');
INSERT INTO `models` VALUES ('33', '媛媛', null, '173', '91', '62', '90', null, '80.jpg', '1', '1');
INSERT INTO `models` VALUES ('34', '刘月', '49', '175', '86', '60', '88', null, '81.jpg', '1', '1');
INSERT INTO `models` VALUES ('35', '马欣', '49', '175', '82', '58', '86', null, '82.jpg', '1', '1');
INSERT INTO `models` VALUES ('36', '石圆圆', '48', '175', '85', '61', '89', null, '83.jpg', '1', '1');
INSERT INTO `models` VALUES ('37', '薇薇', '52', '175', '86', '81', '90', null, '84.jpg', '1', '1');
INSERT INTO `models` VALUES ('38', '君宝儿', '55', '176', '85', '62', '89', null, '85.jpg', '0', '1');
INSERT INTO `models` VALUES ('39', '饶为为', '50', '176', '84', '60', '88', null, '86.jpg', '1', '1');
INSERT INTO `models` VALUES ('40', '安琪', '53', '177', '87', '60', '89', null, '87.jpg', '1', '1');

-- ----------------------------
-- Table structure for reservation
-- ----------------------------
DROP TABLE IF EXISTS `reservation`;
CREATE TABLE `reservation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `qq` int(20) DEFAULT NULL,
  `phone` int(20) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of reservation
-- ----------------------------
INSERT INTO `reservation` VALUES ('1', '', '0', '0', '');
INSERT INTO `reservation` VALUES ('2', '', '0', '0', '');
INSERT INTO `reservation` VALUES ('3', '', '0', '0', '');
INSERT INTO `reservation` VALUES ('4', 'lklaskldkalskd', '654564', '21214', '654654a65s4dasd');
INSERT INTO `reservation` VALUES ('5', 'sb', '0', '0', 'sb');
INSERT INTO `reservation` VALUES ('6', '11', '11', '11', '');
INSERT INTO `reservation` VALUES ('7', '', '0', '0', '');
