/*
Navicat MySQL Data Transfer

Source Server         : mysql
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : lampmaster

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2016-08-08 20:39:58
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for ms_goods_cate
-- ----------------------------
DROP TABLE IF EXISTS `ms_goods_cate`;
CREATE TABLE `ms_goods_cate` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `pid` int(10) NOT NULL,
  `path` varchar(50) NOT NULL,
  `format_path` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ms_goods_cate
-- ----------------------------
INSERT INTO `ms_goods_cate` VALUES ('1', '电视 盒子', '0', '0', '顶级分类--电视 盒子');
INSERT INTO `ms_goods_cate` VALUES ('2', '手机 平板 电话卡', '0', '0', '顶级分类--手机 平板 电话卡');
INSERT INTO `ms_goods_cate` VALUES ('3', '小米手机5', '2', '0,2', '顶级分类--手机 平板 电话卡--小米手机5');
INSERT INTO `ms_goods_cate` VALUES ('4', '小米max', '2', '0,2', '顶级分类--手机 平板 电话卡--小米max');
INSERT INTO `ms_goods_cate` VALUES ('5', '小米note', '2', '0,2', '顶级分类--手机 平板 电话卡--小米note');
INSERT INTO `ms_goods_cate` VALUES ('6', '小米pro', '2', '0,2', '顶级分类--手机 平板 电话卡--小米pro');
INSERT INTO `ms_goods_cate` VALUES ('7', '小米笔记本', '9', '0,9', '顶级分类--笔记本--小米笔记本');
INSERT INTO `ms_goods_cate` VALUES ('8', '小米路由器', '11', '0,11', '顶级分类--路由器  智能硬件--小米路由器');
INSERT INTO `ms_goods_cate` VALUES ('9', '笔记本', '0', '0', '顶级分类--笔记本');
INSERT INTO `ms_goods_cate` VALUES ('10', '红米note', '5', '0,2,5', '顶级分类--手机 平板 电话卡--小米note--红米note');
INSERT INTO `ms_goods_cate` VALUES ('11', '路由器  智能硬件', '0', '0', '顶级分类--路由器  智能硬件');
INSERT INTO `ms_goods_cate` VALUES ('12', '移动电源 电池 插线板', '0', '0', '顶级分类--移动电源 电池 插线板');
INSERT INTO `ms_goods_cate` VALUES ('13', '红米note1', '5', '0,2,5', '顶级分类--手机 平板 电话卡--小米note');
INSERT INTO `ms_goods_cate` VALUES ('14', '小米手机5-1', '3', '0,2,3', '顶级分类--手机 平板 电话卡--小米手机5--小米手机5-1');
INSERT INTO `ms_goods_cate` VALUES ('15', '小米手机5555', '14', '0,2,3,14', '顶级分类--手机 平板 电话卡--小米手机5--小米手机5-1--小米手机5555');
