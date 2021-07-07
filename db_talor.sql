/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : db_talor

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2021-03-14 22:19:09
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `products`
-- ----------------------------
DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `price` float(11,0) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `description` longtext,
  `image` varchar(255) DEFAULT NULL,
  `c_id` int(11) NOT NULL,
  `dat` date DEFAULT NULL,
  `shop_name` varchar(11) NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of products
-- ----------------------------
INSERT INTO `products` VALUES ('7', 'Wais Coat', '4000', null, 'New in Stores now at very cheap price', 'assets/images307155de569df59a82.jpeg', '2', '2019-12-02', 'maxsol');
INSERT INTO `products` VALUES ('8', 'Coat', '10000', null, 'product is very good and highly featured in shops now', 'assets/images52385df2411bb67e7.jpg', '4', '2019-12-12', 'design&buy');
INSERT INTO `products` VALUES ('9', 'Coat', '12000', null, 'this is a very cheap rate but good quality product.', 'assets/images224685f44b24e420ef.jpg', '5', '2020-08-25', 'Awais');
INSERT INTO `products` VALUES ('10', 'shirts', '200', null, 't shirts', 'assets/images24809604dfdcabe19f.png', '0', '2021-03-14', 'chmian1');

-- ----------------------------
-- Table structure for `signup`
-- ----------------------------
DROP TABLE IF EXISTS `signup`;
CREATE TABLE `signup` (
  `u_id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) DEFAULT NULL,
  `f_name` varchar(255) DEFAULT NULL,
  `l_name` varchar(255) DEFAULT NULL,
  `u_type` varchar(255) DEFAULT NULL,
  `no` int(11) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `province` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `shop_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`u_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of signup
-- ----------------------------
INSERT INTO `signup` VALUES ('2', 'hamzasaood9@gmail.com', 'hamza', 'saood', 'user', '2147483647', 'gulshan e noor L Block house # 64', 'burewala', 'punjab', 'abcd', null);
INSERT INTO `signup` VALUES ('3', 'admin@gmail.com', 'admin', 'admin', 'admin', '5232323', 'admin', 'vehari', 'punjab', 'admin1', null);
INSERT INTO `signup` VALUES ('4', 'awais@gmail.com', 'awais', 'khan', 'shop', '2147483647', 'gulshan e noor L Block house # 64', 'burewala', 'punjab', 'admin1', 'design&buy');
INSERT INTO `signup` VALUES ('5', 'maxsol@gmail.com', 'hamza', 'saood', 'shop', '2147483647', 'gulshan e noor L Block house # 64', 'burewala', 'punjab', 'admin', 'maxsol');
INSERT INTO `signup` VALUES ('6', 'awais@gmail.com', 'awais', 'tariq', 'shop', '2147483647', 'gulshan e noor L Block house # 64', 'vehari', 'punjab', 'abcd1', 'Awais');
INSERT INTO `signup` VALUES ('7', 'talha1@gmail.com', 'talha', 'ihsan', 'user', '433445', '505eb', 'burw', 'pujn', '1234', null);
INSERT INTO `signup` VALUES ('8', 'ch1@gmail.com', 'ch', 'mian', 'shop', '32442', '3232', 'dsfs', 'fdssdf', '12345', 'chmian1');

-- ----------------------------
-- Table structure for `tb_cart`
-- ----------------------------
DROP TABLE IF EXISTS `tb_cart`;
CREATE TABLE `tb_cart` (
  `cc_id` int(11) NOT NULL AUTO_INCREMENT,
  `u_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `quantity` int(200) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `visitor` int(11) DEFAULT NULL,
  PRIMARY KEY (`cc_id`)
) ENGINE=InnoDB AUTO_INCREMENT=69 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_cart
-- ----------------------------
INSERT INTO `tb_cart` VALUES ('55', '2', '7', '1', '1', null);
INSERT INTO `tb_cart` VALUES ('56', '2', '7', '1', '1', null);
INSERT INTO `tb_cart` VALUES ('57', '2', '7', '1', '1', null);
INSERT INTO `tb_cart` VALUES ('58', '2', '7', '1', '1', null);
INSERT INTO `tb_cart` VALUES ('60', '2', '7', '1', '1', null);
INSERT INTO `tb_cart` VALUES ('62', '2', '8', '1', '1', null);
INSERT INTO `tb_cart` VALUES ('63', '2', '7', '1', '1', null);
INSERT INTO `tb_cart` VALUES ('64', '2', '9', '1', '1', null);
INSERT INTO `tb_cart` VALUES ('66', '7', '9', '1', '1', null);
INSERT INTO `tb_cart` VALUES ('67', '7', '10', '1', '1', null);
INSERT INTO `tb_cart` VALUES ('68', '7', '10', '1', '0', null);

-- ----------------------------
-- Table structure for `tb_cat`
-- ----------------------------
DROP TABLE IF EXISTS `tb_cat`;
CREATE TABLE `tb_cat` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `des` longtext,
  `shop_name` varchar(255) NOT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_cat
-- ----------------------------
INSERT INTO `tb_cat` VALUES ('2', 'wool', 'product is very good and highly featured in shops now', 'maxsol');
INSERT INTO `tb_cat` VALUES ('3', 'cotton', 'new jeanx styles', 'maxsol');
INSERT INTO `tb_cat` VALUES ('4', 'cotton', 'product is very good and highly featured in shops now', 'design&buy');
INSERT INTO `tb_cat` VALUES ('5', 'Clothing', 'new brands style clothing', 'Awais');

-- ----------------------------
-- Table structure for `tb_order`
-- ----------------------------
DROP TABLE IF EXISTS `tb_order`;
CREATE TABLE `tb_order` (
  `m_id` int(11) NOT NULL AUTO_INCREMENT,
  `colr` float DEFAULT NULL,
  `chest` float DEFAULT NULL,
  `waist` float DEFAULT NULL,
  `shirt_l` float DEFAULT NULL,
  `sholder_width` float DEFAULT NULL,
  `arm_l` float DEFAULT NULL,
  `pant_l` float DEFAULT NULL,
  `u_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `qty` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `o_id` int(11) DEFAULT NULL,
  `price` float(100,0) DEFAULT NULL,
  `shop_name` varchar(255) DEFAULT NULL,
  `odat` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`m_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_order
-- ----------------------------
INSERT INTO `tb_order` VALUES ('1', '23', '33', '55', '44', '3', '55', '55', '2', '7', '3', '1', '0', '12000', 'maxsol', '19/12/03');
INSERT INTO `tb_order` VALUES ('2', '45', '77', '55', '55', '77', '55', '55', '2', '7', '3', '1', '0', '12000', 'maxsol', '19/12/03');
INSERT INTO `tb_order` VALUES ('3', '33', '22', '22', '22', '11', '22', '22', '2', '7', '4', '0', '0', '16000', 'maxsol', '19/12/03');
INSERT INTO `tb_order` VALUES ('4', '11', '22', '5', '33', '22', '44', '22', '2', '7', '3', '0', '0', '12000', 'maxsol', '19/12/04');
INSERT INTO `tb_order` VALUES ('5', '333', '33', '33', '333', '22', '33', '33', '2', '7', '4', '0', '0', '16000', 'maxsol', '19/12/05');
INSERT INTO `tb_order` VALUES ('6', '21', '454', '44', '44', '44', '44', '44', '2', '8', '3', '0', '0', '30000', 'design&buy', '19/12/12');
INSERT INTO `tb_order` VALUES ('7', '21', '454', '44', '44', '44', '44', '44', '2', '7', '2', '0', '0', '8000', 'maxsol', '19/12/12');
INSERT INTO `tb_order` VALUES ('8', '3', '34', '38', '13', '20', '12', '45', '2', '9', '5', '1', '0', '60000', 'Awais', '20/08/25');
INSERT INTO `tb_order` VALUES ('9', '12', '222', '545', '44', '33', '55', '433', '7', '9', '1', '0', '0', '12000', 'Awais', '21/03/14');
INSERT INTO `tb_order` VALUES ('10', '11', '55', '66', '33', '22', '44', '77', '7', '10', '1', '1', '0', '200', 'chmian1', '21/03/14');

-- ----------------------------
-- Table structure for `tb_orders`
-- ----------------------------
DROP TABLE IF EXISTS `tb_orders`;
CREATE TABLE `tb_orders` (
  `o_id` int(11) NOT NULL AUTO_INCREMENT,
  `p_id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `qty` int(11) DEFAULT NULL,
  `m_id` int(11) NOT NULL,
  PRIMARY KEY (`o_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_orders
-- ----------------------------

-- ----------------------------
-- Table structure for `tb_shops`
-- ----------------------------
DROP TABLE IF EXISTS `tb_shops`;
CREATE TABLE `tb_shops` (
  `s_id` int(11) NOT NULL AUTO_INCREMENT,
  `shop_name` varchar(255) DEFAULT NULL,
  `adres` varchar(255) DEFAULT NULL,
  `no` int(11) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `province` varchar(255) DEFAULT NULL,
  `u_id` int(11) NOT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_shops
-- ----------------------------
