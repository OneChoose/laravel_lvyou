/*
Navicat MySQL Data Transfer

Source Server         : 华邦
Source Server Version : 50616
Source Host           : miaoyu2meelier.mysql.rds.aliyuncs.com:3306
Source Database       : game

Target Server Type    : MYSQL
Target Server Version : 50616
File Encoding         : 65001

Date: 2016-10-10 16:47:30
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `active`
-- ----------------------------
DROP TABLE IF EXISTS `active`;
CREATE TABLE `active` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id',
  `name` varchar(255) NOT NULL COMMENT '活动名称',
  `description` varchar(255) NOT NULL,
  `price` decimal(11,2) NOT NULL COMMENT '价格',
  `img` varchar(255) NOT NULL COMMENT '缩略图',
  `pictures` varchar(255) NOT NULL COMMENT '图片组',
  `content` text NOT NULL COMMENT '描述',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COMMENT='促销活动';

-- ----------------------------
-- Records of active
-- ----------------------------
INSERT INTO `active` VALUES ('1', '客房促销活动', '客房促销活动好便宜的哦', '12.00', '/data/upload/images/2016/10/09/deffd6a04df1633171819f69b6e36123a79a9c29.jpeg', '/data/upload/images/2016/10/09/deffd6a04df1633171819f69b6e36123a79a9c29.jpeg,/data/upload/images/2016/10/09/b7f9c546068af15342b84b16bb323b15c41ea7c1.jpeg', '<p style=\"text-align: center;\"><span style=\"font-size: 18px;\">顶级豪华客房促销啦</span></p><p><img style=\"width: 985px; height: 457px;\" alt=\"18563159_155219603165_2.jpg\" src=\"/data/upload/images/2016/10/09/9ff4c0541ad1773eba427be67baa5c922aad4e09.jpeg\" title=\"9ff4c0541ad1773eba427be67baa5c922aad4e09.jpeg\" width=\"985\" height=\"457\"/></p>', '2016-08-31 07:31:11', '2016-10-09 17:53:42');
INSERT INTO `active` VALUES ('3', '活动1', '此价格适用于年龄在28周岁至64周岁之间的客人，此区间之外的客人敬请现询。特别说明：本产品为购物团行程，全程包含8个购物店，以自愿购买为原则。A行程仅为参考行程，请根据具体团期查看相应行程。\r\n本产品由于内陆段机票不可控因', '545.00', '/data/upload/images/2016/08/31/ba66071d7eabd0cda53c186427e62790cf6236a9.jpeg', '/data/upload/images/2016/08/31/ba66071d7eabd0cda53c186427e62790cf6236a9.jpeg', '<p><span style=\"color: rgb(102, 102, 102); font-family: \" microsoft=\"\" font-size:=\"\" line-height:=\"\" background-color:=\"\">产品特色详情</span><br style=\"padding: 0px; margin: 0px; color: rgb(102, 102, 102); font-family: \" microsoft=\"\" font-size:=\"\" line-height:=\"\" white-space:=\"\"/><span style=\"color: rgb(102, 102, 102); font-family: \" microsoft=\"\" font-size:=\"\" line-height:=\"\" background-color:=\"\">此价格适用于年龄在28周岁至64周岁之间的客人，此区间之外的客人敬请现询。特别说明：本产品为购物团行程，全程包含8个购物店，以自愿购买为原则。A行程仅为参考行程，请根据具体团期查看相应行程。</span><br style=\"padding: 0px; margin: 0px; color: rgb(102, 102, 102); font-family: \" microsoft=\"\" font-size:=\"\" line-height:=\"\" white-space:=\"\"/><span style=\"color: rgb(102, 102, 102); font-family: \" microsoft=\"\" font-size:=\"\" line-height:=\"\" background-color:=\"\">本产品由于内陆段机票不可控因素，行程顺序会有所调整，但景点不会减少，敬请谅解！最终行程以出团通知书上的行程为准。</span><br style=\"padding: 0px; margin: 0px; color: rgb(102, 102, 102); font-family: \" microsoft=\"\" font-size:=\"\" line-height:=\"\" white-space:=\"\"/><span style=\"color: rgb(102, 102, 102); font-family: \" microsoft=\"\" font-size:=\"\" line-height:=\"\" background-color:=\"\">以下特色适用于9月5/12/19/26日 出发的团期：（此团期为购物团，包含8个购物店）澳洲：</span><br style=\"padding: 0px; margin: 0px; color: rgb(102, 102, 102); font-family: \" microsoft=\"\" font-size:=\"\" line-height:=\"\" white-space:=\"\"/><span style=\"color: rgb(102, 102, 102); font-family: \" microsoft=\"\" font-size:=\"\" line-height:=\"\" background-color:=\"\">澳洲：</span><br style=\"padding: 0px; margin: 0px; color: rgb(102, 102, 102); font-family: \" microsoft=\"\" font-size:=\"\" line-height:=\"\" white-space:=\"\"/><span style=\"color:#ff9703;padding: 0px; margin: 0px; font-family: \" microsoft=\"\" font-size:=\"\" line-height:=\"\" white-space:=\"\">海豚之约：</span><span style=\"color: rgb(102, 102, 102); font-family: \" microsoft=\"\" font-size:=\"\" line-height:=\"\" background-color:=\"\">前往摩顿岛国家公园，住天阁露玛海豚度假村一晚</span><br style=\"padding: 0px; margin: 0px; color: rgb(102, 102, 102); font-family: \" microsoft=\"\" font-size:=\"\" line-height:=\"\" white-space:=\"\"/><span style=\"color:#ff9703;padding: 0px; margin: 0px; font-family: \" microsoft=\"\" font-size:=\"\" line-height:=\"\" white-space:=\"\">海滩文化：</span><span style=\"color: rgb(102, 102, 102); font-family: \" microsoft=\"\" font-size:=\"\" line-height:=\"\" background-color:=\"\">滑浪者天堂，漫步黄金海岸</span><br style=\"padding: 0px; margin: 0px; color: rgb(102, 102, 102); font-family: \" microsoft=\"\" font-size:=\"\" line-height:=\"\" white-space:=\"\"/><span style=\"color:#ff9703;padding: 0px; margin: 0px; font-family: \" microsoft=\"\" font-size:=\"\" line-height:=\"\" white-space:=\"\">自然遗产：</span><span style=\"color: rgb(102, 102, 102); font-family: \" microsoft=\"\" font-size:=\"\" line-height:=\"\" background-color:=\"\">蓝山峡谷+鲁拉小镇</span><br style=\"padding: 0px; margin: 0px; color: rgb(102, 102, 102); font-family: \" microsoft=\"\" font-size:=\"\" line-height:=\"\" white-space:=\"\"/><span style=\"color:#ff9703;padding: 0px; margin: 0px; font-family: \" microsoft=\"\" font-size:=\"\" line-height:=\"\" white-space:=\"\">美食体验：</span><span style=\"color: rgb(102, 102, 102); font-family: \" microsoft=\"\" font-size:=\"\" line-height:=\"\" background-color:=\"\">参观FISH MARKET，品尝新鲜海鲜</span><br style=\"padding: 0px; margin: 0px; color: rgb(102, 102, 102); font-family: \" microsoft=\"\" font-size:=\"\" line-height:=\"\" white-space:=\"\"/><span style=\"color:#ff9703;padding: 0px; margin: 0px; font-family: \" microsoft=\"\" font-size:=\"\" line-height:=\"\" white-space:=\"\">四种生态：</span><span style=\"color: rgb(102, 102, 102); font-family: \" microsoft=\"\" font-size:=\"\" line-height:=\"\" background-color:=\"\">丘吉尔岛传统农场+考拉保育中心+诺比司中心+企鹅归巢</span><br style=\"padding: 0px; margin: 0px; color: rgb(102, 102, 102); font-family: \" microsoft=\"\" font-size:=\"\" line-height:=\"\" white-space:=\"\"/><span style=\"color:#ff9703;padding: 0px; margin: 0px; font-family: \" microsoft=\"\" font-size:=\"\" line-height:=\"\" white-space:=\"\">自然遗产：</span><span style=\"color: rgb(102, 102, 102); font-family: \" microsoft=\"\" font-size:=\"\" line-height:=\"\" background-color:=\"\">GREAT OCEAN大洋路奇观之旅,赏大自然的鬼斧神工</span><br style=\"padding: 0px; margin: 0px; color: rgb(102, 102, 102); font-family: \" microsoft=\"\" font-size:=\"\" line-height:=\"\" white-space:=\"\"/><span style=\"color:#ff9703;padding: 0px; margin: 0px; font-family: \" microsoft=\"\" font-size:=\"\" line-height:=\"\" white-space:=\"\">悠游城市：</span><span style=\"color: rgb(102, 102, 102); font-family: \" microsoft=\"\" font-size:=\"\" line-height:=\"\" background-color:=\"\">墨尔本有轨电车</span><br style=\"padding: 0px; margin: 0px; color: rgb(102, 102, 102); font-family: \" microsoft=\"\" font-size:=\"\" line-height:=\"\" white-space:=\"\"/><span style=\"color:#ff9703;padding: 0px; margin: 0px; font-family: \" microsoft=\"\" font-size:=\"\" line-height:=\"\" white-space:=\"\">名校访问：</span><span style=\"color: rgb(102, 102, 102); font-family: \" microsoft=\"\" font-size:=\"\" line-height:=\"\" background-color:=\"\">参观墨尔本大学、悉尼大学</span><br style=\"padding: 0px; margin: 0px; color: rgb(102, 102, 102); font-family: \" microsoft=\"\" font-size:=\"\" line-height:=\"\" white-space:=\"\"/><span style=\"color: rgb(102, 102, 102); font-family: \" microsoft=\"\" font-size:=\"\" line-height:=\"\" background-color:=\"\">新西兰：</span><br style=\"padding: 0px; margin: 0px; color: rgb(102, 102, 102); font-family: \" microsoft=\"\" font-size:=\"\" line-height:=\"\" white-space:=\"\"/><span style=\"color: rgb(102, 102, 102); font-family: \" microsoft=\"\" font-size:=\"\" line-height:=\"\" background-color:=\"\">爸爸去哪儿第二季拍摄地</span><span style=\"color:#ff9703;padding: 0px; margin: 0px; font-family: \" microsoft=\"\" font-size:=\"\" line-height:=\"\" white-space:=\"\">罗托路瓦毛利文化村</span><span style=\"color: rgb(102, 102, 102); font-family: \" microsoft=\"\" font-size:=\"\" line-height:=\"\" background-color:=\"\">体验文化、地热奇观、赠送温泉足浴体验、漫步罗托鲁瓦湖</span><br style=\"padding: 0px; margin: 0px; color: rgb(102, 102, 102); font-family: \" microsoft=\"\" font-size:=\"\" line-height:=\"\" white-space:=\"\"/><span style=\"color:#ff9703;padding: 0px; margin: 0px; font-family: \" microsoft=\"\" font-size:=\"\" line-height:=\"\" white-space:=\"\">农庄风情：</span><span style=\"color: rgb(102, 102, 102); font-family: \" microsoft=\"\" font-size:=\"\" line-height:=\"\" background-color:=\"\">爱歌顿皇家牧场体验骑在羊背上国家的原真风貌</span><br style=\"padding: 0px; margin: 0px; color: rgb(102, 102, 102); font-family: \" microsoft=\"\" font-size:=\"\" line-height:=\"\" white-space:=\"\"/><span style=\"color:#ff9703;padding: 0px; margin: 0px; font-family: \" microsoft=\"\" font-size:=\"\" line-height:=\"\" white-space:=\"\">帆船之都：</span><span style=\"color: rgb(102, 102, 102); font-family: \" microsoft=\"\" font-size:=\"\" line-height:=\"\" background-color:=\"\">奥克兰</span></p>', '2016-08-31 07:17:14', '2016-08-31 07:31:05');
INSERT INTO `active` VALUES ('4', '活动3', '此价格适用于年龄在28周岁至64周岁之间的客人，此区间之外的客人敬请现询。特别说明：本产品为购物团行程，全程包含8个购物店，以自愿购买为原则。A行程仅为参考行程，请根据具体团期查看相应行程。\r\n本产品由于内陆段机票不可控因', '548.00', '/data/upload/images/2016/08/31/bde077c4fdc62971c4ec6cd97bfc849721cde9e7.jpeg', '/data/upload/images/2016/08/31/bde077c4fdc62971c4ec6cd97bfc849721cde9e7.jpeg', '<p><span style=\"color: rgb(102, 102, 102); font-family: \" microsoft=\"\" font-size:=\"\" line-height:=\"\" background-color:=\"\">产品特色详情</span><br style=\"padding: 0px; margin: 0px; color: rgb(102, 102, 102); font-family: \" microsoft=\"\" font-size:=\"\" line-height:=\"\" white-space:=\"\"/><span style=\"color: rgb(102, 102, 102); font-family: \" microsoft=\"\" font-size:=\"\" line-height:=\"\" background-color:=\"\">此价格适用于年龄在28周岁至64周岁之间的客人，此区间之外的客人敬请现询。特别说明：本产品为购物团行程，全程包含8个购物店，以自愿购买为原则。A行程仅为参考行程，请根据具体团期查看相应行程。</span><br style=\"padding: 0px; margin: 0px; color: rgb(102, 102, 102); font-family: \" microsoft=\"\" font-size:=\"\" line-height:=\"\" white-space:=\"\"/><span style=\"color: rgb(102, 102, 102); font-family: \" microsoft=\"\" font-size:=\"\" line-height:=\"\" background-color:=\"\">本产品由于内陆段机票不可控因素，行程顺序会有所调整，但景点不会减少，敬请谅解！最终行程以出团通知书上的行程为准。</span><br style=\"padding: 0px; margin: 0px; color: rgb(102, 102, 102); font-family: \" microsoft=\"\" font-size:=\"\" line-height:=\"\" white-space:=\"\"/><span style=\"color: rgb(102, 102, 102); font-family: \" microsoft=\"\" font-size:=\"\" line-height:=\"\" background-color:=\"\">以下特色适用于9月5/12/19/26日 出发的团期：（此团期为购物团，包含8个购物店）澳洲：</span><br style=\"padding: 0px; margin: 0px; color: rgb(102, 102, 102); font-family: \" microsoft=\"\" font-size:=\"\" line-height:=\"\" white-space:=\"\"/><span style=\"color: rgb(102, 102, 102); font-family: \" microsoft=\"\" font-size:=\"\" line-height:=\"\" background-color:=\"\">澳洲：</span><br style=\"padding: 0px; margin: 0px; color: rgb(102, 102, 102); font-family: \" microsoft=\"\" font-size:=\"\" line-height:=\"\" white-space:=\"\"/><span style=\"color:#ff9703;padding: 0px; margin: 0px; font-family: \" microsoft=\"\" font-size:=\"\" line-height:=\"\" white-space:=\"\">海豚之约：</span><span style=\"color: rgb(102, 102, 102); font-family: \" microsoft=\"\" font-size:=\"\" line-height:=\"\" background-color:=\"\">前往摩顿岛国家公园，住天阁露玛海豚度假村一晚</span><br style=\"padding: 0px; margin: 0px; color: rgb(102, 102, 102); font-family: \" microsoft=\"\" font-size:=\"\" line-height:=\"\" white-space:=\"\"/><span style=\"color:#ff9703;padding: 0px; margin: 0px; font-family: \" microsoft=\"\" font-size:=\"\" line-height:=\"\" white-space:=\"\">海滩文化：</span><span style=\"color: rgb(102, 102, 102); font-family: \" microsoft=\"\" font-size:=\"\" line-height:=\"\" background-color:=\"\">滑浪者天堂，漫步黄金海岸</span><br style=\"padding: 0px; margin: 0px; color: rgb(102, 102, 102); font-family: \" microsoft=\"\" font-size:=\"\" line-height:=\"\" white-space:=\"\"/><span style=\"color:#ff9703;padding: 0px; margin: 0px; font-family: \" microsoft=\"\" font-size:=\"\" line-height:=\"\" white-space:=\"\">自然遗产：</span><span style=\"color: rgb(102, 102, 102); font-family: \" microsoft=\"\" font-size:=\"\" line-height:=\"\" background-color:=\"\">蓝山峡谷+鲁拉小镇</span><br style=\"padding: 0px; margin: 0px; color: rgb(102, 102, 102); font-family: \" microsoft=\"\" font-size:=\"\" line-height:=\"\" white-space:=\"\"/><span style=\"color:#ff9703;padding: 0px; margin: 0px; font-family: \" microsoft=\"\" font-size:=\"\" line-height:=\"\" white-space:=\"\">美食体验：</span><span style=\"color: rgb(102, 102, 102); font-family: \" microsoft=\"\" font-size:=\"\" line-height:=\"\" background-color:=\"\">参观FISH MARKET，品尝新鲜海鲜</span><br style=\"padding: 0px; margin: 0px; color: rgb(102, 102, 102); font-family: \" microsoft=\"\" font-size:=\"\" line-height:=\"\" white-space:=\"\"/><span style=\"color:#ff9703;padding: 0px; margin: 0px; font-family: \" microsoft=\"\" font-size:=\"\" line-height:=\"\" white-space:=\"\">四种生态：</span><span style=\"color: rgb(102, 102, 102); font-family: \" microsoft=\"\" font-size:=\"\" line-height:=\"\" background-color:=\"\">丘吉尔岛传统农场+考拉保育中心+诺比司中心+企鹅归巢</span><br style=\"padding: 0px; margin: 0px; color: rgb(102, 102, 102); font-family: \" microsoft=\"\" font-size:=\"\" line-height:=\"\" white-space:=\"\"/><span style=\"color:#ff9703;padding: 0px; margin: 0px; font-family: \" microsoft=\"\" font-size:=\"\" line-height:=\"\" white-space:=\"\">自然遗产：</span><span style=\"color: rgb(102, 102, 102); font-family: \" microsoft=\"\" font-size:=\"\" line-height:=\"\" background-color:=\"\">GREAT OCEAN大洋路奇观之旅,赏大自然的鬼斧神工</span><br style=\"padding: 0px; margin: 0px; color: rgb(102, 102, 102); font-family: \" microsoft=\"\" font-size:=\"\" line-height:=\"\" white-space:=\"\"/><span style=\"color:#ff9703;padding: 0px; margin: 0px; font-family: \" microsoft=\"\" font-size:=\"\" line-height:=\"\" white-space:=\"\">悠游城市：</span><span style=\"color: rgb(102, 102, 102); font-family: \" microsoft=\"\" font-size:=\"\" line-height:=\"\" background-color:=\"\">墨尔本有轨电车</span><br style=\"padding: 0px; margin: 0px; color: rgb(102, 102, 102); font-family: \" microsoft=\"\" font-size:=\"\" line-height:=\"\" white-space:=\"\"/><span style=\"color:#ff9703;padding: 0px; margin: 0px; font-family: \" microsoft=\"\" font-size:=\"\" line-height:=\"\" white-space:=\"\">名校访问：</span><span style=\"color: rgb(102, 102, 102); font-family: \" microsoft=\"\" font-size:=\"\" line-height:=\"\" background-color:=\"\">参观墨尔本大学、悉尼大学</span><br style=\"padding: 0px; margin: 0px; color: rgb(102, 102, 102); font-family: \" microsoft=\"\" font-size:=\"\" line-height:=\"\" white-space:=\"\"/><span style=\"color: rgb(102, 102, 102); font-family: \" microsoft=\"\" font-size:=\"\" line-height:=\"\" background-color:=\"\">新西兰：</span><br style=\"padding: 0px; margin: 0px; color: rgb(102, 102, 102); font-family: \" microsoft=\"\" font-size:=\"\" line-height:=\"\" white-space:=\"\"/><span style=\"color: rgb(102, 102, 102); font-family: \" microsoft=\"\" font-size:=\"\" line-height:=\"\" background-color:=\"\">爸爸去哪儿第二季拍摄地</span><span style=\"color:#ff9703;padding: 0px; margin: 0px; font-family: \" microsoft=\"\" font-size:=\"\" line-height:=\"\" white-space:=\"\">罗托路瓦毛利文化村</span><span style=\"color: rgb(102, 102, 102); font-family: \" microsoft=\"\" font-size:=\"\" line-height:=\"\" background-color:=\"\">体验文化、地热奇观、赠送温泉足浴体验、漫步罗托鲁瓦湖</span><br style=\"padding: 0px; margin: 0px; color: rgb(102, 102, 102); font-family: \" microsoft=\"\" font-size:=\"\" line-height:=\"\" white-space:=\"\"/><span style=\"color:#ff9703;padding: 0px; margin: 0px; font-family: \" microsoft=\"\" font-size:=\"\" line-height:=\"\" white-space:=\"\">农庄风情：</span><span style=\"color: rgb(102, 102, 102); font-family: \" microsoft=\"\" font-size:=\"\" line-height:=\"\" background-color:=\"\">爱歌顿皇家牧场体验骑在羊背上国家的原真风貌</span><br style=\"padding: 0px; margin: 0px; color: rgb(102, 102, 102); font-family: \" microsoft=\"\" font-size:=\"\" line-height:=\"\" white-space:=\"\"/><span style=\"color:#ff9703;padding: 0px; margin: 0px; font-family: \" microsoft=\"\" font-size:=\"\" line-height:=\"\" white-space:=\"\">帆船之都：</span><span style=\"color: rgb(102, 102, 102); font-family: \" microsoft=\"\" font-size:=\"\" line-height:=\"\" background-color:=\"\">奥克兰</span></p>', '2016-08-31 07:17:30', '2016-08-31 07:30:36');
INSERT INTO `active` VALUES ('5', '活动3', '此价格适用于年龄在28周岁至64周岁之间的客人，此区间之外的客人敬请现询。特别说明：本产品为购物团行程，全程包含8个购物店，以自愿购买为原则。A行程仅为参考行程，请根据具体团期查看相应行程。\r\n本产品由于内陆段机票不可控因', '123.00', '/data/upload/images/2016/08/31/88102a880986aea0facf447aa88292e556bcc99a.jpeg', '/data/upload/images/2016/08/31/88102a880986aea0facf447aa88292e556bcc99a.jpeg', '<p><span style=\"color: rgb(102, 102, 102); font-family: \" microsoft=\"\" font-size:=\"\" line-height:=\"\" background-color:=\"\">产品特色详情</span><br style=\"padding: 0px; margin: 0px; color: rgb(102, 102, 102); font-family: \" microsoft=\"\" font-size:=\"\" line-height:=\"\" white-space:=\"\"/><span style=\"color: rgb(102, 102, 102); font-family: \" microsoft=\"\" font-size:=\"\" line-height:=\"\" background-color:=\"\">此价格适用于年龄在28周岁至64周岁之间的客人，此区间之外的客人敬请现询。特别说明：本产品为购物团行程，全程包含8个购物店，以自愿购买为原则。A行程仅为参考行程，请根据具体团期查看相应行程。</span><br style=\"padding: 0px; margin: 0px; color: rgb(102, 102, 102); font-family: \" microsoft=\"\" font-size:=\"\" line-height:=\"\" white-space:=\"\"/><span style=\"color: rgb(102, 102, 102); font-family: \" microsoft=\"\" font-size:=\"\" line-height:=\"\" background-color:=\"\">本产品由于内陆段机票不可控因素，行程顺序会有所调整，但景点不会减少，敬请谅解！最终行程以出团通知书上的行程为准。</span><br style=\"padding: 0px; margin: 0px; color: rgb(102, 102, 102); font-family: \" microsoft=\"\" font-size:=\"\" line-height:=\"\" white-space:=\"\"/><span style=\"color: rgb(102, 102, 102); font-family: \" microsoft=\"\" font-size:=\"\" line-height:=\"\" background-color:=\"\">以下特色适用于9月5/12/19/26日 出发的团期：（此团期为购物团，包含8个购物店）澳洲：</span><br style=\"padding: 0px; margin: 0px; color: rgb(102, 102, 102); font-family: \" microsoft=\"\" font-size:=\"\" line-height:=\"\" white-space:=\"\"/><span style=\"color: rgb(102, 102, 102); font-family: \" microsoft=\"\" font-size:=\"\" line-height:=\"\" background-color:=\"\">澳洲：</span><br style=\"padding: 0px; margin: 0px; color: rgb(102, 102, 102); font-family: \" microsoft=\"\" font-size:=\"\" line-height:=\"\" white-space:=\"\"/><span style=\"color:#ff9703;padding: 0px; margin: 0px; font-family: \" microsoft=\"\" font-size:=\"\" line-height:=\"\" white-space:=\"\">海豚之约：</span><span style=\"color: rgb(102, 102, 102); font-family: \" microsoft=\"\" font-size:=\"\" line-height:=\"\" background-color:=\"\">前往摩顿岛国家公园，住天阁露玛海豚度假村一晚</span><br style=\"padding: 0px; margin: 0px; color: rgb(102, 102, 102); font-family: \" microsoft=\"\" font-size:=\"\" line-height:=\"\" white-space:=\"\"/><span style=\"color:#ff9703;padding: 0px; margin: 0px; font-family: \" microsoft=\"\" font-size:=\"\" line-height:=\"\" white-space:=\"\">海滩文化：</span><span style=\"color: rgb(102, 102, 102); font-family: \" microsoft=\"\" font-size:=\"\" line-height:=\"\" background-color:=\"\">滑浪者天堂，漫步黄金海岸</span><br style=\"padding: 0px; margin: 0px; color: rgb(102, 102, 102); font-family: \" microsoft=\"\" font-size:=\"\" line-height:=\"\" white-space:=\"\"/><span style=\"color:#ff9703;padding: 0px; margin: 0px; font-family: \" microsoft=\"\" font-size:=\"\" line-height:=\"\" white-space:=\"\">自然遗产：</span><span style=\"color: rgb(102, 102, 102); font-family: \" microsoft=\"\" font-size:=\"\" line-height:=\"\" background-color:=\"\">蓝山峡谷+鲁拉小镇</span><br style=\"padding: 0px; margin: 0px; color: rgb(102, 102, 102); font-family: \" microsoft=\"\" font-size:=\"\" line-height:=\"\" white-space:=\"\"/><span style=\"color:#ff9703;padding: 0px; margin: 0px; font-family: \" microsoft=\"\" font-size:=\"\" line-height:=\"\" white-space:=\"\">美食体验：</span><span style=\"color: rgb(102, 102, 102); font-family: \" microsoft=\"\" font-size:=\"\" line-height:=\"\" background-color:=\"\">参观FISH MARKET，品尝新鲜海鲜</span><br style=\"padding: 0px; margin: 0px; color: rgb(102, 102, 102); font-family: \" microsoft=\"\" font-size:=\"\" line-height:=\"\" white-space:=\"\"/><span style=\"color:#ff9703;padding: 0px; margin: 0px; font-family: \" microsoft=\"\" font-size:=\"\" line-height:=\"\" white-space:=\"\">四种生态：</span><span style=\"color: rgb(102, 102, 102); font-family: \" microsoft=\"\" font-size:=\"\" line-height:=\"\" background-color:=\"\">丘吉尔岛传统农场+考拉保育中心+诺比司中心+企鹅归巢</span><br style=\"padding: 0px; margin: 0px; color: rgb(102, 102, 102); font-family: \" microsoft=\"\" font-size:=\"\" line-height:=\"\" white-space:=\"\"/><span style=\"color:#ff9703;padding: 0px; margin: 0px; font-family: \" microsoft=\"\" font-size:=\"\" line-height:=\"\" white-space:=\"\">自然遗产：</span><span style=\"color: rgb(102, 102, 102); font-family: \" microsoft=\"\" font-size:=\"\" line-height:=\"\" background-color:=\"\">GREAT OCEAN大洋路奇观之旅,赏大自然的鬼斧神工</span><br style=\"padding: 0px; margin: 0px; color: rgb(102, 102, 102); font-family: \" microsoft=\"\" font-size:=\"\" line-height:=\"\" white-space:=\"\"/><span style=\"color:#ff9703;padding: 0px; margin: 0px; font-family: \" microsoft=\"\" font-size:=\"\" line-height:=\"\" white-space:=\"\">悠游城市：</span><span style=\"color: rgb(102, 102, 102); font-family: \" microsoft=\"\" font-size:=\"\" line-height:=\"\" background-color:=\"\">墨尔本有轨电车</span><br style=\"padding: 0px; margin: 0px; color: rgb(102, 102, 102); font-family: \" microsoft=\"\" font-size:=\"\" line-height:=\"\" white-space:=\"\"/><span style=\"color:#ff9703;padding: 0px; margin: 0px; font-family: \" microsoft=\"\" font-size:=\"\" line-height:=\"\" white-space:=\"\">名校访问：</span><span style=\"color: rgb(102, 102, 102); font-family: \" microsoft=\"\" font-size:=\"\" line-height:=\"\" background-color:=\"\">参观墨尔本大学、悉尼大学</span><br style=\"padding: 0px; margin: 0px; color: rgb(102, 102, 102); font-family: \" microsoft=\"\" font-size:=\"\" line-height:=\"\" white-space:=\"\"/><span style=\"color: rgb(102, 102, 102); font-family: \" microsoft=\"\" font-size:=\"\" line-height:=\"\" background-color:=\"\">新西兰：</span><br style=\"padding: 0px; margin: 0px; color: rgb(102, 102, 102); font-family: \" microsoft=\"\" font-size:=\"\" line-height:=\"\" white-space:=\"\"/><span style=\"color: rgb(102, 102, 102); font-family: \" microsoft=\"\" font-size:=\"\" line-height:=\"\" background-color:=\"\">爸爸去哪儿第二季拍摄地</span><span style=\"color:#ff9703;padding: 0px; margin: 0px; font-family: \" microsoft=\"\" font-size:=\"\" line-height:=\"\" white-space:=\"\">罗托路瓦毛利文化村</span><span style=\"color: rgb(102, 102, 102); font-family: \" microsoft=\"\" font-size:=\"\" line-height:=\"\" background-color:=\"\">体验文化、地热奇观、赠送温泉足浴体验、漫步罗托鲁瓦湖</span><br style=\"padding: 0px; margin: 0px; color: rgb(102, 102, 102); font-family: \" microsoft=\"\" font-size:=\"\" line-height:=\"\" white-space:=\"\"/><span style=\"color:#ff9703;padding: 0px; margin: 0px; font-family: \" microsoft=\"\" font-size:=\"\" line-height:=\"\" white-space:=\"\">农庄风情：</span><span style=\"color: rgb(102, 102, 102); font-family: \" microsoft=\"\" font-size:=\"\" line-height:=\"\" background-color:=\"\">爱歌顿皇家牧场体验骑在羊背上国家的原真风貌</span><br style=\"padding: 0px; margin: 0px; color: rgb(102, 102, 102); font-family: \" microsoft=\"\" font-size:=\"\" line-height:=\"\" white-space:=\"\"/><span style=\"color:#ff9703;padding: 0px; margin: 0px; font-family: \" microsoft=\"\" font-size:=\"\" line-height:=\"\" white-space:=\"\">帆船之都：</span><span style=\"color: rgb(102, 102, 102); font-family: \" microsoft=\"\" font-size:=\"\" line-height:=\"\" background-color:=\"\">奥克兰</span></p>', '2016-08-31 07:18:16', '2016-08-31 07:30:29');
INSERT INTO `active` VALUES ('6', '小龙龙', '此价格适用于年龄在28周岁至64周岁之间的客人，此区间之外的客人敬请现询。特别说明：本产品为购物团行程，全程包含8个购物店，以自愿购买为原则。A行程仅为参考行程，请根据具体团期查看相应行程。\r\n本产品由于内陆段机票不可控因', '123123.00', '', '', '<p><span microsoft=\"\" font-size:=\"\" line-height:=\"\" background-color:=\"\" style=\"color: rgb(102, 102, 102);\">此价格适用于年龄在28周岁至64周岁之间的客人，此区间之外的客人敬请现询。特别说明：本产品为购物团行程，全程包含8个购物店，以自愿购买为原则。A行程仅为参考行程，请根据具体团期查看相应行程。</span><br microsoft=\"\" font-size:=\"\" line-height:=\"\" white-space:=\"\" style=\"white-space: normal; padding: 0px; margin: 0px; color: rgb(102, 102, 102);\"/><span microsoft=\"\" font-size:=\"\" line-height:=\"\" background-color:=\"\" style=\"color: rgb(102, 102, 102);\">本产品由于内陆段机票不可控因</span><span microsoft=\"\" font-size:=\"\" line-height:=\"\" background-color:=\"\" style=\"color: rgb(102, 102, 102);\">此价格适用于年龄在28周岁至64周岁之间的客人，此区间之外的客人敬请现询。特别说明：本产品为购物团行程，全程包含8个购物店，以自愿购买为原则。A行程仅为参考行程，请根据具体团期查看相应行程。</span><br microsoft=\"\" font-size:=\"\" line-height:=\"\" white-space:=\"\" style=\"white-space: normal; padding: 0px; margin: 0px; color: rgb(102, 102, 102);\"/><span microsoft=\"\" font-size:=\"\" line-height:=\"\" background-color:=\"\" style=\"color: rgb(102, 102, 102);\">本产品由于内陆段机票不可控因</span><span microsoft=\"\" font-size:=\"\" line-height:=\"\" background-color:=\"\" style=\"color: rgb(102, 102, 102);\">此价格适用于年龄在28周岁至64周岁之间的客人，此区间之外的客人敬请现询。特别说明：本产品为购物团行程，全程包含8个购物店，以自愿购买为原则。A行程仅为参考行程，请根据具体团期查看相应行程。</span><br microsoft=\"\" font-size:=\"\" line-height:=\"\" white-space:=\"\" style=\"white-space: normal; padding: 0px; margin: 0px; color: rgb(102, 102, 102);\"/><span microsoft=\"\" font-size:=\"\" line-height:=\"\" background-color:=\"\" style=\"color: rgb(102, 102, 102);\">本产品由于内陆段机票不可控因</span><span microsoft=\"\" font-size:=\"\" line-height:=\"\" background-color:=\"\" style=\"color: rgb(102, 102, 102);\">此价格适用于年龄在28周岁至64周岁之间的客人，此区间之外的客人敬请现询。特别说明：本产品为购物团行程，全程包含8个购物店，以自愿购买为原则。A行程仅为参考行程，请根据具体团期查看相应行程。</span><br microsoft=\"\" font-size:=\"\" line-height:=\"\" white-space:=\"\" style=\"white-space: normal; padding: 0px; margin: 0px; color: rgb(102, 102, 102);\"/><span microsoft=\"\" font-size:=\"\" line-height:=\"\" background-color:=\"\" style=\"color: rgb(102, 102, 102);\">本产品由于内陆段机票不可控因</span><span microsoft=\"\" font-size:=\"\" line-height:=\"\" background-color:=\"\" style=\"color: rgb(102, 102, 102);\">此价格适用于年龄在28周岁至64周岁之间的客人，此区间之外的客人敬请现询。特别说明：本产品为购物团行程，全程包含8个购物店，以自愿购买为原则。A行程仅为参考行程，请根据具体团期查看相应行程。</span><br microsoft=\"\" font-size:=\"\" line-height:=\"\" white-space:=\"\" style=\"white-space: normal; padding: 0px; margin: 0px; color: rgb(102, 102, 102);\"/><span microsoft=\"\" font-size:=\"\" line-height:=\"\" background-color:=\"\" style=\"color: rgb(102, 102, 102);\">本产品由于内陆段机票不可控因</span><span microsoft=\"\" font-size:=\"\" line-height:=\"\" background-color:=\"\" style=\"color: rgb(102, 102, 102);\">此价格适用于年龄在28周岁至64周岁之间的客人，此区间之外的客人敬请现询。特别说明：本产品为购物团行程，全程包含8个购物店，以自愿购买为原则。A行程仅为参考行程，请根据具体团期查看相应行程。</span><br microsoft=\"\" font-size:=\"\" line-height:=\"\" white-space:=\"\" style=\"white-space: normal; padding: 0px; margin: 0px; color: rgb(102, 102, 102);\"/><span microsoft=\"\" font-size:=\"\" line-height:=\"\" background-color:=\"\" style=\"color: rgb(102, 102, 102);\">本产品由于内陆段机票不可控因</span><span microsoft=\"\" font-size:=\"\" line-height:=\"\" background-color:=\"\" style=\"color: rgb(102, 102, 102);\">此价格适用于年龄在28周岁至64周岁之间的客人，此区间之外的客人敬请现询。特别说明：本产品为购物团行程，全程包含8个购物店，以自愿购买为原则。A行程仅为参考行程，请根据具体团期查看相应行程。</span><br microsoft=\"\" font-size:=\"\" line-height:=\"\" white-space:=\"\" style=\"white-space: normal; padding: 0px; margin: 0px; color: rgb(102, 102, 102);\"/><span microsoft=\"\" font-size:=\"\" line-height:=\"\" background-color:=\"\" style=\"color: rgb(102, 102, 102);\">本产品由于内陆段机票不可控因</span></p>', '2016-08-31 07:31:14', '2016-08-31 07:31:22');

-- ----------------------------
-- Table structure for `active_order`
-- ----------------------------
DROP TABLE IF EXISTS `active_order`;
CREATE TABLE `active_order` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id',
  `order_id` int(10) unsigned NOT NULL COMMENT '订单id',
  `order` varchar(100) NOT NULL COMMENT '订单号',
  `member_id` int(10) unsigned NOT NULL,
  `phone` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `active_id` int(10) unsigned NOT NULL COMMENT '活动id',
  `number` int(10) unsigned NOT NULL COMMENT '活动数量',
  `get_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '消费时间',
  `total_money` decimal(11,2) DEFAULT '0.00' COMMENT '总金额',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `order_id` (`order_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8 COMMENT='活动订单表';

-- ----------------------------
-- Records of active_order
-- ----------------------------
INSERT INTO `active_order` VALUES ('30', '49', '2016090254101485', '0', '', '', '3', '3', '2016-08-30 00:00:00', null, '2016-09-02 03:40:55', '2016-09-02 03:40:55');
INSERT INTO `active_order` VALUES ('31', '50', '2016090249549854', '0', '', '', '3', '3', '2016-08-30 00:00:00', null, '2016-09-02 03:42:57', '2016-09-02 03:42:57');
INSERT INTO `active_order` VALUES ('32', '51', '2016090250974998', '0', '', '', '3', '4', '2015-12-23 00:00:00', null, '2016-09-02 06:33:55', '2016-09-02 06:33:55');
INSERT INTO `active_order` VALUES ('33', '52', '2016090251995748', '0', '', '', '3', '3', '2016-09-05 00:00:00', null, '2016-09-02 06:39:00', '2016-09-02 06:39:00');
INSERT INTO `active_order` VALUES ('34', '53', '2016090210299501', '0', '', '', '3', '3', '2016-09-05 00:00:00', null, '2016-09-02 06:39:44', '2016-09-02 06:39:44');
INSERT INTO `active_order` VALUES ('35', '54', '2016090251981005', '0', '', '', '3', '3', '2016-09-05 00:00:00', null, '2016-09-02 06:42:12', '2016-09-02 06:42:12');
INSERT INTO `active_order` VALUES ('36', '55', '2016090257519854', '0', '', '', '3', '3', '2016-09-05 00:00:00', null, '2016-09-02 06:45:45', '2016-09-02 06:45:45');
INSERT INTO `active_order` VALUES ('37', '57', '2016090298579850', '0', '', '', '3', '2', '2016-09-17 00:00:00', null, '2016-09-02 06:49:31', '2016-09-02 06:49:31');
INSERT INTO `active_order` VALUES ('38', '58', '2016090256565250', '0', '', '', '3', '2', '2016-09-17 00:00:00', null, '2016-09-02 06:51:37', '2016-09-02 06:51:37');
INSERT INTO `active_order` VALUES ('40', '66', '2016090510153102', '42', '12345678965', 'yushen', '3', '1', '2016-09-05 00:00:00', '545.00', '2016-09-05 03:32:14', '2016-09-05 03:32:14');
INSERT INTO `active_order` VALUES ('41', '71', '2016090597505748', '43', '18956485987', '张宇', '1', '1', '2016-09-06 00:00:00', '12.00', '2016-09-05 08:05:30', '2016-09-05 08:05:30');
INSERT INTO `active_order` VALUES ('42', '88', '2016100955501005', '3', '18716628386', '6656', '1', '1', '2016-10-11 00:00:00', '12.00', '2016-10-09 17:55:03', '2016-10-09 17:55:03');
INSERT INTO `active_order` VALUES ('43', '89', '2016100950984856', '3', '18716628386', '6656', '1', '1', '2016-10-11 00:00:00', '12.00', '2016-10-09 17:55:14', '2016-10-09 17:55:14');

-- ----------------------------
-- Table structure for `admin`
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `role_id` bigint(20) NOT NULL COMMENT '管理员角色',
  `remark` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '备注',
  PRIMARY KEY (`id`),
  UNIQUE KEY `admins_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='后台管理员';

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES ('3', '小龙龙22', '1@qq.com', 'e10adc3949ba59abbe56e057f20f883e', '2016-06-21 10:09:07', '2016-09-20 15:12:48', '1', null);
INSERT INTO `admin` VALUES ('7', '12345', '12345@qq.com', 'e10adc3949ba59abbe56e057f20f883e', '2016-09-20 15:16:22', '2016-09-20 15:16:22', '3', null);
INSERT INTO `admin` VALUES ('8', '123456', '123456@qq.com', 'e10adc3949ba59abbe56e057f20f883e', '2016-09-20 15:16:40', '2016-09-20 15:16:40', '4', null);
INSERT INTO `admin` VALUES ('9', 'tester', '123@qq.com', '202cb962ac59075b964b07152d234b70', '2016-09-30 10:51:33', '2016-09-30 10:51:33', '5', null);

-- ----------------------------
-- Table structure for `article`
-- ----------------------------
DROP TABLE IF EXISTS `article`;
CREATE TABLE `article` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `type` int(1) NOT NULL DEFAULT '2' COMMENT '1单页，2文章',
  `keyword` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT '关键词',
  `category_id` int(11) NOT NULL COMMENT '分类id',
  `admin_id` int(11) NOT NULL COMMENT '管理员id',
  `img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT '文章标题',
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `href` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '连接',
  `click` int(10) NOT NULL DEFAULT '0' COMMENT '点击数',
  `sort` int(10) NOT NULL COMMENT '排序',
  `checked` tinyint(1) NOT NULL DEFAULT '1' COMMENT '审核',
  `content` mediumtext COLLATE utf8_unicode_ci NOT NULL COMMENT '内容',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `state` tinyint(3) DEFAULT '1' COMMENT '1--正常  0--删除',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='文章';

-- ----------------------------
-- Records of article
-- ----------------------------
INSERT INTO `article` VALUES ('1', '2', '', '24', '3', '', '阿萨德123', '', '', '50', '4', '1', '<p>阿大声道的功夫高<br/></p>', '0000-00-00 00:00:00', '2016-06-28 03:18:03', '1');
INSERT INTO `article` VALUES ('2', '2', '', '27', '3', '/data/upload/images/2016/08/30/978e9c1f3fdb6ff0580e42e9f6540c1e66212c0d.jpeg', '当年便成为太平', '据电影《北非谍 影》的故事情节创作的，在发行当年便成为太平洋地区年度歌曲，1983年获格莱美金曲奖，希金斯的名字也被记载在美国音乐名据电影《北非谍 影》的故事情节创作的，在发行当年便成为太平洋地区年度歌曲，1983年获格莱美金曲奖，希金斯的名字也被记载在美国音乐名', '', '10', '1', '1', '<p><span style=\"color: rgb(89, 87, 87); font-family: arial, 宋体, georgia, verdana, helvetica, sans-serif; font-size: 14px; line-height: 21px; background-color: rgb(247, 247, 247);\">据电影《北非谍 影》的故事情节创作的，在发行当年便成为太平洋地区年度歌曲，1983年获格莱美金曲奖，希金斯的名字也被记载在美国音乐名</span><span style=\"color: rgb(89, 87, 87); font-family: arial, 宋体, georgia, verdana, helvetica, sans-serif; font-size: 14px; line-height: 21px; background-color: rgb(247, 247, 247);\">据电影《北非谍 影》的故事情节创作的，在发行当年便成为太平洋地区年度歌曲，1983年获格莱美金曲奖，希金斯的名字也被记载在美国音乐名</span><span style=\"color: rgb(89, 87, 87); font-family: arial, 宋体, georgia, verdana, helvetica, sans-serif; font-size: 14px; line-height: 21px; background-color: rgb(247, 247, 247);\">据电影《北非谍 影》的故事情节创作的，在发行当年便成为太平洋地区年度歌曲，1983年获格莱美金曲奖，希金斯的名字也被记载在美国音乐名</span><span style=\"color: rgb(89, 87, 87); font-family: arial, 宋体, georgia, verdana, helvetica, sans-serif; font-size: 14px; line-height: 21px; background-color: rgb(247, 247, 247);\">据电影《北非谍 影》的故事情节创作的，在发行当年便成为太平洋地区年度歌曲，1983年获格莱美金曲奖，希金斯的名字也被记载在美国音乐名</span><span style=\"color: rgb(89, 87, 87); font-family: arial, 宋体, georgia, verdana, helvetica, sans-serif; font-size: 14px; line-height: 21px; background-color: rgb(247, 247, 247);\">据电影《北非谍 影》的故事情节创作的，在发行当年便成为太平洋地区年度歌曲，1983年获格莱美金曲奖，希金斯的名字也被记载在美国音乐名</span><span style=\"color: rgb(89, 87, 87); font-family: arial, 宋体, georgia, verdana, helvetica, sans-serif; font-size: 14px; line-height: 21px; background-color: rgb(247, 247, 247);\">据电影《北非谍 影》的故事情节创作的，在发行当年便成为太平洋地区年度歌曲，1983年获格莱美金曲奖，希金斯的名字也被记载在美国音乐名</span></p>', '2016-06-24 03:03:21', '2016-08-31 06:57:53', '1');
INSERT INTO `article` VALUES ('3', '2', '', '27', '3', '/data/upload/images/2016/08/30/52423780449f58806d55c17c87539a9772946661.jpeg', '根据电影《北非谍 影》', '在中国，提到贝蒂.希金斯，好多年轻人可能会比较陌生，但提到卡萨布兰卡，不知道的人恐怕很少，尤其是70、80年代的人。卡萨布兰卡是根据电影《北非谍 影》的故事情节创作的，在发行当年便成为太平洋地区年度歌曲，1983年获格莱美金曲奖，希金斯的名字也被记载在美国音乐名人堂和摇滚名人堂上。', '', '30', '2', '1', '<p><span style=\"color: rgb(89, 87, 87); font-family: arial, 宋体, georgia, verdana, helvetica, sans-serif; font-size: 18px; line-height: 27px; background-color: rgb(247, 247, 247);\">在中国，提到贝蒂.希金斯，好多年轻人可能会比较陌生，但提到卡萨布兰卡，不知道的人恐怕很少，尤其是70、80年代的人。卡萨布兰卡是根据电影《北非谍 影》的故事情节创作的，在发行当年便成为太平洋地区年度歌曲，1983年获格莱美金曲奖，希金斯的名字也被记载在美国音乐名人堂和摇滚名人堂上。</span><span style=\"color: rgb(89, 87, 87); font-family: arial, 宋体, georgia, verdana, helvetica, sans-serif; font-size: 18px; line-height: 27px; background-color: rgb(247, 247, 247);\">在中国，提到贝蒂.希金斯，好多年轻人可能会比较陌生，但提到卡萨布兰卡，不知道的人恐怕很少，尤其是70、80年代的人。卡萨布兰卡是根据电影《北非谍 影》的故事情节创作的，在发行当年便成为太平洋地区年度歌曲，1983年获格莱美金曲奖，希金斯的名字也被记载在美国音乐名人堂和摇滚名人堂上。</span><span style=\"color: rgb(89, 87, 87); font-family: arial, 宋体, georgia, verdana, helvetica, sans-serif; font-size: 18px; line-height: 27px; background-color: rgb(247, 247, 247);\">在中国，提到贝蒂.希金斯，好多年轻人可能会比较陌生，但提到卡萨布兰卡，不知道的人恐怕很少，尤其是70、80年代的人。卡萨布兰卡是根据电影《北非谍 影》的故事情节创作的，在发行当年便成为太平洋地区年度歌曲，1983年获格莱美金曲奖，希金斯的名字也被记载在美国音乐名人堂和摇滚名人堂上。</span><span style=\"color: rgb(89, 87, 87); font-family: arial, 宋体, georgia, verdana, helvetica, sans-serif; font-size: 18px; line-height: 27px; background-color: rgb(247, 247, 247);\">在中国，提到贝蒂.希金斯，好多年轻人可能会比较陌生，但提到卡萨布兰卡，不知道的人恐怕很少，尤其是70、80年代的人。卡萨布兰卡是根据电影《北非谍 影》的故事情节创作的，在发行当年便成为太平洋地区年度歌曲，1983年获格莱美金曲奖，希金斯的名字也被记载在美国音乐名人堂和摇滚名人堂上。</span><span style=\"color: rgb(89, 87, 87); font-family: arial, 宋体, georgia, verdana, helvetica, sans-serif; font-size: 18px; line-height: 27px; background-color: rgb(247, 247, 247);\">在中国，提到贝蒂.希金斯，好多年轻人可能会比较陌生，但提到卡萨布兰卡，不知道的人恐怕很少，尤其是70、80年代的人。卡萨布兰卡是根据电影《北非谍 影》的故事情节创作的，在发行当年便成为太平洋地区年度歌曲，1983年获格莱美金曲奖，希金斯的名字也被记载在美国音乐名人堂和摇滚名人堂上。</span><span style=\"color: rgb(89, 87, 87); font-family: arial, 宋体, georgia, verdana, helvetica, sans-serif; font-size: 18px; line-height: 27px; background-color: rgb(247, 247, 247);\">在中国，提到贝蒂.希金斯，好多年轻人可能会比较陌生，但提到卡萨布兰卡，不知道的人恐怕很少，尤其是70、80年代的人。卡萨布兰卡是根据电影《北非谍 影》的故事情节创作的，在发行当年便成为太平洋地区年度歌曲，1983年获格莱美金曲奖，希金斯的名字也被记载在美国音乐名人堂和摇滚名人堂上。</span><span style=\"color: rgb(89, 87, 87); font-family: arial, 宋体, georgia, verdana, helvetica, sans-serif; font-size: 18px; line-height: 27px; background-color: rgb(247, 247, 247);\">在中国，提到贝蒂.希金斯，好多年轻人可能会比较陌生，但提到卡萨布兰卡，不知道的人恐怕很少，尤其是70、80年代的人。卡萨布兰卡是根据电影《北非谍 影》的故事情节创作的，在发行当年便成为太平洋地区年度歌曲，1983年获格莱美金曲奖，希金斯的名字也被记载在美国音乐名人堂和摇滚名人堂上。</span><span style=\"color: rgb(89, 87, 87); font-family: arial, 宋体, georgia, verdana, helvetica, sans-serif; font-size: 18px; line-height: 27px; background-color: rgb(247, 247, 247);\">在中国，提到贝蒂.希金斯，好多年轻人可能会比较陌生，但提到卡萨布兰卡，不知道的人恐怕很少，尤其是70、80年代的人。卡萨布兰卡是根据电影《北非谍 影》的故事情节创作的，在发行当年便成为太平洋地区年度歌曲，1983年获格莱美金曲奖，希金斯的名字也被记载在美国音乐名人堂和摇滚名人堂上。</span><span style=\"color: rgb(89, 87, 87); font-family: arial, 宋体, georgia, verdana, helvetica, sans-serif; font-size: 18px; line-height: 27px; background-color: rgb(247, 247, 247);\">在中国，提到贝蒂.希金斯，好多年轻人可能会比较陌生，但提到卡萨布兰卡，不知道的人恐怕很少，尤其是70、80年代的人。卡萨布兰卡是根据电影《北非谍 影》的故事情节创作的，在发行当年便成为太平洋地区年度歌曲，1983年获格莱美金曲奖，希金斯的名字也被记载在美国音乐名人堂和摇滚名人堂上。</span><span style=\"color: rgb(89, 87, 87); font-family: arial, 宋体, georgia, verdana, helvetica, sans-serif; font-size: 18px; line-height: 27px; background-color: rgb(247, 247, 247);\">在中国，提到贝蒂.希金斯，好多年轻人可能会比较陌生，但提到卡萨布兰卡，不知道的人恐怕很少，尤其是70、80年代的人。卡萨布兰卡是根据电影《北非谍 影》的故事情节创作的，在发行当年便成为太平洋地区年度歌曲，1983年获格莱美金曲奖，希金斯的名字也被记载在美国音乐名人堂和摇滚名人堂上。</span></p>', '2016-06-24 03:44:36', '2016-08-31 06:58:02', '1');
INSERT INTO `article` VALUES ('4', '2', '', '24', '3', '', '是vvsf', '', '', '10', '3', '1', '<p>发给好多个<br/></p>', '2016-06-24 06:34:13', '2016-06-28 03:21:20', '1');
INSERT INTO `article` VALUES ('5', '2', '', '24', '3', '/data/upload/images/2016/08/30/5ca485b1a0ef3a728b047195951d9adc442ec53d.jpeg', '23我2额', '在中国，提到贝蒂.希金斯，好多年轻人可能会比较陌生，但提到卡萨布兰卡，不知道的人恐怕很少，尤其是70、80年代的人。卡萨布兰卡是根据电影《北非谍 影》的故事情节创作的，在发行当年便成为太平洋地区年度歌曲，1983年获格莱美金曲奖，希金斯的名字也被记载在美国音乐名人堂和摇滚名人堂上。', '', '10', '1', '1', '<p><span style=\"color: rgb(89, 87, 87); font-family: arial, 宋体, georgia, verdana, helvetica, sans-serif; font-size: 18px; line-height: 27px; background-color: rgb(247, 247, 247);\">在中国，提到贝蒂.希金斯，好多年轻人可能会比较陌生，但提到卡萨布兰卡，不知道的人恐怕很少，尤其是70、80年代的人。卡萨布兰卡是根据电影《北非谍 影》的故事情节创作的，在发行当年便成为太平洋地区年度歌曲，1983年获格莱美金曲奖，希金斯的名字也被记载在美国音乐名人堂和摇滚名人堂上。</span><span style=\"color: rgb(89, 87, 87); font-family: arial, 宋体, georgia, verdana, helvetica, sans-serif; font-size: 18px; line-height: 27px; background-color: rgb(247, 247, 247);\">在中国，提到贝蒂.希金斯，好多年轻人可能会比较陌生，但提到卡萨布兰卡，不知道的人恐怕很少，尤其是70、80年代的人。卡萨布兰卡是根据电影《北非谍 影》的故事情节创作的，在发行当年便成为太平洋地区年度歌曲，1983年获格莱美金曲奖，希金斯的名字也被记载在美国音乐名人堂和摇滚名人堂上。</span><span style=\"color: rgb(89, 87, 87); font-family: arial, 宋体, georgia, verdana, helvetica, sans-serif; font-size: 18px; line-height: 27px; background-color: rgb(247, 247, 247);\">在中国，提到贝蒂.希金斯，好多年轻人可能会比较陌生，但提到卡萨布兰卡，不知道的人恐怕很少，尤其是70、80年代的人。卡萨布兰卡是根据电影《北非谍 影》的故事情节创作的，在发行当年便成为太平洋地区年度歌曲，1983年获格莱美金曲奖，希金斯的名字也被记载在美国音乐名人堂和摇滚名人堂上。</span></p>', '2016-06-27 05:54:03', '2016-08-30 07:27:09', '1');
INSERT INTO `article` VALUES ('6', '2', '华邦酒店', '24', '3', '/data/upload/images/2016/10/09/58dade8a2ea799c2d30cbaae330c3eeaac51c176.jpeg', '华邦酒店官网上线啦', '在中国，提到贝蒂.希金斯，好多年轻人可能会比较陌生，但提到卡萨布兰卡，不知道的人恐怕很少，尤其是70、80年代的人。卡萨布兰卡是根据电影《北非谍 影》的故事情节创作的，在发行当年便成为太平洋地区年度歌曲，1983年获格莱美金曲奖，希金斯的名字也被记载在美国音乐名人堂和摇滚名人堂上。', '', '20', '0', '1', '<p>在中国，提到贝蒂.希金斯，好多年轻人可能会比较陌生，但提到卡萨布兰卡，不知道的人恐怕很少，尤其是70、80年代的人。卡萨布兰卡是根据电影《北非谍 影》的故事情节创作的，在发行当年便成为太平洋地区年度歌曲，1983年获格莱美金曲奖，希金斯的名字也被记载在美国音乐名人堂和摇滚名人堂上。</p><p><img style=\"width: 695px; height: 482px;\" alt=\"20093591426338_2.jpg\" src=\"/data/upload/images/2016/10/09/0e9174252d6b1154b814030218b183399b563b6d.jpeg\" title=\"0e9174252d6b1154b814030218b183399b563b6d.jpeg\" width=\"695\" height=\"482\"/></p><p><br/></p>', '2016-06-27 05:54:30', '2016-10-09 17:49:23', '1');
INSERT INTO `article` VALUES ('7', '2', '', '24', '3', '', '3二天额', '', '', '10', '1', '1', '<p>是飞洒的<br/></p>', '2016-06-27 06:23:46', '2016-06-27 08:35:32', '1');
INSERT INTO `article` VALUES ('8', '2', '', '24', '3', '', '的vsdfb', '', '', '32', '2', '1', '<p>沙发上<br/></p>', '2016-06-27 06:24:24', '2016-09-19 12:11:03', '1');
INSERT INTO `article` VALUES ('9', '2', '', '24', '3', '', '说的GV', '', '', '45', '4', '0', '<p>分规划的<br/></p>', '2016-06-27 06:24:43', '2016-06-27 08:35:46', '1');
INSERT INTO `article` VALUES ('10', '2', '', '24', '3', '', '的人格侮辱', '', '', '34', '5', '0', '<p>上分别发送<br/></p>', '2016-06-27 06:25:54', '2016-06-27 08:35:32', '1');
INSERT INTO `article` VALUES ('11', '1', '', '0', '3', '', '公司简介', '', '', '0', '0', '1', '<h2 style=\"box-sizing: border-box; font-family: inherit; font-weight: 500; line-height: 1.1; color: inherit; margin-top: 20px; margin-bottom: 10px; font-size: 28px;\">重庆华邦酒店旅业有限公司简介</h2><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; font-size: 14px; color: rgb(71, 69, 69); line-height: 24px;\">重庆华邦酒店旅业有限公司（以下简称“华邦旅业”）成立于2002年7月，属华邦生命健康股份有限公司全资子公司，是华邦健康旗下旅游业务板块的主要子公司，主营业务为旅游景区开发与运营、高端度假 酒店的开发经营管理及国内旅游业务经营，并投资运营餐饮连锁公司。<br style=\"box-sizing: border-box;\"/>华邦旅业目前管理的业务资产规模超过10亿元，管理的计划投资规模超过30亿元。经过10余年的经营管理，培养了一支具有丰富景区运营和酒店运营经验的管理团队，保障了公司旅游全链条项目在全国各地的 不断发展壮大。目前华邦旅业旗下有重庆仙女山华邦酒店、重庆拙雅别墅精品酒店，华邦国际旅行社、丽江银石会馆、芝仕联合（北京）餐饮管理有限公司、广西大美大新旅游有限公司和广西大新华邦生态科 技有限公司。</p><h3 style=\"box-sizing: border-box; font-family: inherit; font-weight: 500; line-height: 1.1; color: inherit; margin-top: 20px; margin-bottom: 10px; font-size: 24px;\">集团旗下酒店</h3><p><img src=\"http://lhotel.cc/home/img/img-04.png\" style=\"box-sizing: border-box; border: 0px; vertical-align: middle;\"/></p><h2 style=\"box-sizing: border-box; font-family: inherit; font-weight: 500; line-height: 1.1; color: inherit; margin-top: 20px; margin-bottom: 10px; font-size: 30px;\">重庆仙女山华邦酒店</h2><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; font-size: 14px; color: rgb(71, 69, 69); line-height: 24px;\">仙女山华邦酒店隶属重庆华邦酒店旅业有限公司，是1999年10月华邦旅业在仙女山投资建造的重庆景区内首家高星级酒店。2001年8月17日酒店正式营业。2002年通过四星评审，成为当时重庆景区唯一的四星级 酒店。2011年华邦旅业投资2亿元对酒店进行全面升级改造，酒店总资产超过4亿元，现已成为重庆超五星标准的独具特色的山景度假酒店，是国内首家非物质文化遗产主题酒店。<br style=\"box-sizing: border-box;\"/>仙女山华邦酒店位于世界自然遗产地——武隆，紧邻海拔1900米的仙女山高山草原，坐落于酒店国家5A级森林公园内。酒店占地面积580亩，有5栋客房，共148间不同格调的房间,其中1号楼为非遗文化民族主题 客房，别具一格。有能容纳约450人的大型多功能厅及功能互补的大小会议室7间，并配有多样休闲娱乐设施，奢香水疗，美泊酒屋，星光烧烤场，亲子天堂——萌宠乐园，海百合音乐吧、网球场等。<br style=\"box-sizing: border-box;\"/><br style=\"box-sizing: border-box;\"/>酒店主要历程及荣誉<br style=\"box-sizing: border-box;\"/>·2001年 仙女山华邦酒店开业。<br style=\"box-sizing: border-box;\"/>·2005年 获“重庆最具特色酒店”大奖及建筑风格、绿色环保、健身娱乐、度假休闲及园林景观最具特色5个单项奖。<br style=\"box-sizing: border-box;\"/>·2005年 被指定为亚太城市市长峰会分会场并接待了7位澳洲参会市长。<br style=\"box-sizing: border-box;\"/>·成功接待过国家主席习近平、原国家政协主席贾庆林、中央纪委书记贺国强、国务院副总理吴仪、香港特首曾荫权与社会名流邵逸夫、著名导演张艺谋等重要知名人士。<br style=\"box-sizing: border-box;\"/>·2007年 获评金叶级绿色饭店。&nbsp;<br style=\"box-sizing: border-box;\"/>·2012年获优秀酒店空间设计金堂奖，同年获亚太酒店设计协会金凤凰·金艺奖亚太酒店设计大赛金奖。&nbsp;<br style=\"box-sizing: border-box;\"/>·2013年3月荣获第九届“中国酒店星光奖”之 “中国最佳主题酒店”。&nbsp;<br style=\"box-sizing: border-box;\"/>·2015年荣获亚太酒店联盟颁发的“亚太地区最佳度假酒店”奖项。</p><p><img src=\"http://lhotel.cc/home/img/img-05.png\" style=\"box-sizing: border-box; border: 0px; vertical-align: middle;\"/></p><h2 style=\"box-sizing: border-box; font-family: inherit; font-weight: 500; line-height: 1.1; color: inherit; margin-top: 20px; margin-bottom: 10px; font-size: 30px;\">重庆仙女山华邦酒店</h2><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; font-size: 14px; color: rgb(71, 69, 69); line-height: 24px;\">2013年重庆华邦旅业有限公司推出旗下高端度假精品酒店--拙雅酒店，是华邦旅业进军高端度假市场、提供独特度假体验的酒店品牌。 拙雅酒店就在森林与草原的怀抱里，10栋浑然天成的当地土家吊脚楼风格别墅，34套精工细作、温馨私密的客房，带独立院落。一石一草均来自当地，与武隆仙女山地形地貌完美融合，融建筑于自然，并全部 采用绿色环保材料，打造真正的节能建筑。传统与现代得以有机融合，真正做到了与环境和谐共生，既保留了传统土家建筑的外形风格，又使得房内极尽温馨与舒适，从简洁精致的木质家具，再到汉斯格雅、 杜拉维特等现代洁具，还有更多极具人性化设施。提供24小时管家服务，另有高端休闲娱乐，美泊酒屋、奢香SPA等，一切浑然天成，在房间、院落或任何一个角落，感受静谧、轻松而愉悦的度假。&nbsp;<br style=\"box-sizing: border-box;\"/><br style=\"box-sizing: border-box;\"/>荣誉<br style=\"box-sizing: border-box;\"/>·荣获第八届中国国际建筑装饰及设计博览会酒店空间设计一等奖。</p><p><br/></p>', '2016-06-28 03:33:45', '2016-08-30 06:25:03', '1');
INSERT INTO `article` VALUES ('12', '1', '', '0', '3', '', '联系我们', '', '', '0', '0', '1', '<p><a class=\"current\" style=\"box-sizing: border-box; cursor: pointer; display: table; font-size: 18px; padding: 10px;\">联系我们</a><a href=\"http://lhotel.cc/work-demo.html\" style=\"box-sizing: border-box; color: rgb(89, 87, 87); text-decoration: none; cursor: pointer; display: table; font-size: 14px; padding: 10px;\">工作机会</a></p><p><span style=\"box-sizing: border-box;\">重庆仙女山华邦酒店</span></p><h3 style=\"box-sizing: border-box; font-family: inherit; font-weight: 500; line-height: 1.1; color: inherit; margin-top: 20px; margin-bottom: 10px; font-size: 24px;\">联系我们</h3><p class=\"\" style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 10px;\">仙女山<br style=\"box-sizing: border-box;\"/>重庆, 武隆县 400010<br style=\"box-sizing: border-box;\"/>中国&nbsp;<br style=\"box-sizing: border-box;\"/><br style=\"box-sizing: border-box;\"/>电话: (86)(23) 6380 6666<br style=\"box-sizing: border-box;\"/>传真: (86)(23) 6355 5555<br style=\"box-sizing: border-box;\"/><br style=\"box-sizing: border-box;\"/>电话: (86)(28) 6287 6666传真：<br style=\"box-sizing: border-box;\"/>信用卡付款安全传真号码&nbsp;<br style=\"box-sizing: border-box;\"/>传真: (86)(23) 6037 2008</p><p><span style=\"box-sizing: border-box;\">重庆仙女山拙雅酒店</span></p><h3 style=\"box-sizing: border-box; font-family: inherit; font-weight: 500; line-height: 1.1; color: inherit; margin-top: 20px; margin-bottom: 10px; font-size: 24px;\">联系我们</h3><p class=\"\" style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 10px;\">仙女山<br style=\"box-sizing: border-box;\"/>重庆, 武隆县 400010<br style=\"box-sizing: border-box;\"/>中国&nbsp;<br style=\"box-sizing: border-box;\"/><br style=\"box-sizing: border-box;\"/>电话: (86)(23) 6380 6666<br style=\"box-sizing: border-box;\"/>传真: (86)(23) 6355 5555<br style=\"box-sizing: border-box;\"/><br style=\"box-sizing: border-box;\"/>电话: (86)(28) 6287 6666传真：<br style=\"box-sizing: border-box;\"/>信用卡付款安全传真号码&nbsp;<br style=\"box-sizing: border-box;\"/>传真: (86)(23) 6037 2008</p><nav class=\"page-module\" style=\"box-sizing: border-box; position: absolute; left: 761.188px; bottom: -20px;\"><p><a href=\"http://lhotel.cc/contact#\" style=\"box-sizing: border-box; color: rgb(25, 19, 17); text-decoration: none; cursor: default; position: relative; float: left; padding: 0px 12px; margin-left: -1px; line-height: 1.42857; border: 0px rgb(51, 122, 183); z-index: 2; background: rgb(247, 247, 247);\"><br/><span class=\"sr-only\" style=\"box-sizing: border-box; position: absolute; width: 1px; height: 1px; padding: 0px; margin: -1px; overflow: hidden; clip: rect(0px 0px 0px 0px); border: 0px;\"><br/></span></a></p></nav><p><br/></p>', '2016-06-28 05:50:39', '2016-09-02 02:07:53', '1');
INSERT INTO `article` VALUES ('13', '1', '', '0', '3', '', '1111', '', '', '0', '0', '1', '<p>士大夫士大夫</p>', '0000-00-00 00:00:00', '2016-06-28 06:11:43', '0');
INSERT INTO `article` VALUES ('14', '1', '', '0', '3', '', '555', '', '', '0', '0', '1', '<p>222</p>', '2016-06-28 06:02:11', '2016-06-28 06:11:41', '0');
INSERT INTO `article` VALUES ('15', '1', '', '0', '3', '', '666', '', '', '0', '0', '1', '<p>666</p>', '2016-06-28 06:06:16', '2016-06-28 06:08:46', '0');
INSERT INTO `article` VALUES ('16', '1', '', '0', '3', '', '非遗文化', '', '', '0', '0', '1', '<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 25px; width: 1235.59px; height: auto; overflow: hidden; font-size: 18px; color: rgb(89, 87, 87); font-family: arial, 宋体, georgia, verdana, helvetica, sans-serif; white-space: normal; background-color: rgb(247, 247, 247);\">(重庆 7月8日)得知希金斯近日入住华邦酒店，很多歌迷一早就来到重庆仙女山华邦酒店等候巨星的到来。&nbsp;<br style=\"box-sizing: border-box;\"/><br style=\"box-sizing: border-box;\"/>应2014年仙女山音乐节主办方的邀请，希金斯在拉斯维加斯参加完美国独立日汇演后便直飞重庆，前往仙女山参加“永远的卡萨布兰卡 仙女山国际巨星音乐 会”演出活动。7月4日傍晚，希金斯抵达仙女山，下榻在仙女山华邦酒店，并于7月5日晚，在音乐会上演唱了卡萨布兰卡及自己的其他经典之作。&nbsp;<br style=\"box-sizing: border-box;\"/><br style=\"box-sizing: border-box;\"/>在中国，提到贝蒂.希金斯，好多年轻人可能会比较陌生，但提到卡萨布兰卡，不知道的人恐怕很少，尤其是70、80年代的人。卡萨布兰卡是根据电影《北非谍 影》的故事情节创作的，在发行当年便成为太平洋地区年度歌曲，1983年获格莱美金曲奖，希金斯的名字也被记载在美国音乐名人堂和摇滚名人堂上。&nbsp;<br style=\"box-sizing: border-box;\"/><br style=\"box-sizing: border-box;\"/>卡萨布兰卡的动人旋律与希金斯深情的嗓音至今仍然感动着全世界无数歌迷。歌曲之所以受人喜爱，是因为它唱出了许多无奈离别人的心声。与电影一样，早 已成为人们心目中的经典。</p><p><em class=\"fl\" style=\"box-sizing: border-box; width: 605.438px; overflow: hidden; height: 407px; display: block; float: left; color: rgb(89, 87, 87); font-family: arial, 宋体, georgia, verdana, helvetica, sans-serif; font-size: 12px; line-height: 18px; white-space: normal; background-color: rgb(247, 247, 247);\"><img src=\"http://lhotel.cc/home/img/news-img-01.png\" style=\"box-sizing: border-box; border: 0px; vertical-align: middle;\"/></em><em class=\"fr\" style=\"box-sizing: border-box; width: 605.438px; overflow: hidden; height: 407px; display: block; float: right; color: rgb(89, 87, 87); font-family: arial, 宋体, georgia, verdana, helvetica, sans-serif; font-size: 12px; line-height: 18px; white-space: normal; background-color: rgb(247, 247, 247);\"><img src=\"http://lhotel.cc/home/img/news-img-02.png\" style=\"box-sizing: border-box; border: 0px; vertical-align: middle;\"/></em></p><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 25px; width: 1235.59px; height: auto; overflow: hidden; font-size: 18px; color: rgb(89, 87, 87); font-family: arial, 宋体, georgia, verdana, helvetica, sans-serif; white-space: normal; padding-top: 30px; background-color: rgb(247, 247, 247);\">据了解，此次希金斯入住的重庆仙女山华邦酒店为给希金斯一个惊喜，专门请到重庆民间艺术家邓强连夜创作了一幅希金斯的抛沙肖像画，作为特别礼物送给 希金斯。&nbsp;<br style=\"box-sizing: border-box;\"/><br style=\"box-sizing: border-box;\"/>据这次全程为希金斯提供专属管家服务的华邦酒店管家贾忠成介绍，在听了无笔抛沙画的创作工艺与流程后，希金斯非常兴奋，并惊叹不已，现场就摆出各种 pose与肖像画合影，表示将带回美国放到他洛杉矶的办公室，还会把合影照片放进自己的facebook中。&nbsp;<br style=\"box-sizing: border-box;\"/><br style=\"box-sizing: border-box;\"/>在参观完酒店的各类精美的非遗展示后，希金斯对华邦酒店执行总经理喻瑜说：“你有一个很棒的酒店!”</p><p><br/></p>', '2016-08-30 06:41:35', '2016-08-30 06:41:35', '1');
INSERT INTO `article` VALUES ('17', '2', '', '24', '3', '/data/upload/images/2016/08/30/94172ef5adbaf55da89e71d97711bbcbdefca93b.jpeg', '希金斯入住华邦酒店获赠艺术珍品抛沙画', '应2014年仙女山音乐节主办方的邀请，希金斯在拉斯维加斯参加完美国独立日汇演后便直飞重庆，前往仙女山参加“永远的卡萨布兰卡 仙女山国际巨星音乐 会”演出活动。7月4日傍晚，希金斯抵达仙女山，下榻在仙女山华邦酒店，并于7月5日晚，在音乐会上演唱了卡萨布兰卡及自己的其他经典之作。 ', '', '12', '1', '1', '<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;(重庆 7月8日)得知希金斯近日入住华邦酒店，很多歌迷一早就来到重庆仙女山华邦酒店等候巨星的到来。								<br/><br/>\r\n								应2014年仙女山音乐节主办方的邀请，希金斯在拉斯维加斯参加完美国独立日汇演后便直飞重庆，前往仙女山参加“永远的卡萨布兰卡 仙女山国际巨星音乐\r\n								会”演出活动。7月4日傍晚，希金斯抵达仙女山，下榻在仙女山华邦酒店，并于7月5日晚，在音乐会上演唱了卡萨布兰卡及自己的其他经典之作。								<br/><br/>\r\n								在中国，提到贝蒂.希金斯，好多年轻人可能会比较陌生，但提到卡萨布兰卡，不知道的人恐怕很少，尤其是70、80年代的人。卡萨布兰卡是根据电影《北非谍\r\n								影》的故事情节创作的，在发行当年便成为太平洋地区年度歌曲，1983年获格莱美金曲奖，希金斯的名字也被记载在美国音乐名人堂和摇滚名人堂上。								<br/><br/>\r\n								卡萨布兰卡的动人旋律与希金斯深情的嗓音至今仍然感动着全世界无数歌迷。歌曲之所以受人喜爱，是因为它唱出了许多无奈离别人的心声。与电影一样，早\r\n								已成为人们心目中的经典。<img src=\"/data/upload/images/2016/08/30/a89bffcf28a94af6ed32a469defd223d120a8f00.jpeg\" title=\"a89bffcf28a94af6ed32a469defd223d120a8f00.jpeg\" alt=\"Lighthouse.jpg\"/>							</p><p><em class=\"fl\"><img src=\"http://lhotel.cc/admin/ueditor/themes/default/images/spacer.gif\" word_img=\"file:///F:/%E5%B7%A5%E4%BD%9C%E9%A1%B9%E7%9B%AE/%E5%8D%8E%E9%82%A6%E5%89%8D%E7%AB%AF/%E5%8D%8E%E9%82%A6/img/news-img-01.png\" style=\"background:url(http://lhotel.cc/admin/ueditor/lang/zh-cn/images/localimage.png) no-repeat center center;border:1px solid #ddd\"/></em><em class=\"fr\"><img src=\"http://lhotel.cc/admin/ueditor/themes/default/images/spacer.gif\" word_img=\"file:///F:/%E5%B7%A5%E4%BD%9C%E9%A1%B9%E7%9B%AE/%E5%8D%8E%E9%82%A6%E5%89%8D%E7%AB%AF/%E5%8D%8E%E9%82%A6/img/news-img-02.png\" style=\"background:url(http://lhotel.cc/admin/ueditor/lang/zh-cn/images/localimage.png) no-repeat center center;border:1px solid #ddd\"/></em></p><p style=\"padding-top: 30px; \">\r\n								据了解，此次希金斯入住的重庆仙女山华邦酒店为给希金斯一个惊喜，专门请到重庆民间艺术家邓强连夜创作了一幅希金斯的抛沙肖像画，作为特别礼物送给\r\n								希金斯。								<br/><br/>\r\n								据这次全程为希金斯提供专属管家服务的华邦酒店管家贾忠成介绍，在听了无笔抛沙画的创作工艺与流程后，希金斯非常兴奋，并惊叹不已，现场就摆出各种\r\n								pose与肖像画合影，表示将带回美国放到他洛杉矶的办公室，还会把合影照片放进自己的facebook中。								<br/><br/>\r\n								在参观完酒店的各类精美的非遗展示后，希金斯对华邦酒店执行总经理喻瑜说：“你有一个很棒的酒店!” &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p><p><br/></p>', '2016-08-30 07:07:04', '2016-08-30 07:47:58', '1');
INSERT INTO `article` VALUES ('18', '2', '', '24', '3', '/data/upload/images/2016/08/30/00b5c407292aee7689f5e847564156941ef98111.jpeg', '222', '2222222222', '', '567', '4567', '1', '<p>5678<br/></p>', '2016-08-30 07:16:56', '2016-08-30 07:26:30', '1');
INSERT INTO `article` VALUES ('19', '1', '', '0', '3', '', '工作机会', '', '', '0', '0', '1', '<p><a class=\"work-list\" href=\"http://lhotel.cc/work-us.html\" style=\"box-sizing: border-box; color: rgb(89, 87, 87); text-decoration: none; cursor: pointer; display: block; border-bottom: 1px solid rgb(136, 136, 137); padding: 10px 0px 25px;\"></a></p><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0px; font-size: 16px;\"><a class=\"work-list\" href=\"http://lhotel.cc/work-us.html\" style=\"box-sizing: border-box; color: rgb(89, 87, 87); text-decoration: none; cursor: pointer; display: block; border-bottom: 1px solid rgb(136, 136, 137); padding: 10px 0px 25px;\">市场销售 | Le Meridien Yixing | Yixing, 中国 ·重庆<br style=\"box-sizing: border-box;\"/><span style=\"box-sizing: border-box; font-size: 21px;\">Account Director</span></a></p><p><a class=\"work-list\" href=\"http://lhotel.cc/work-us.html\" style=\"box-sizing: border-box; color: rgb(89, 87, 87); text-decoration: none; cursor: pointer; display: block; border-bottom: 1px solid rgb(136, 136, 137); padding: 25px 0px;\"></a></p><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0px; font-size: 16px;\"><a class=\"work-list\" href=\"http://lhotel.cc/work-us.html\" style=\"box-sizing: border-box; color: rgb(89, 87, 87); text-decoration: none; cursor: pointer; display: block; border-bottom: 1px solid rgb(136, 136, 137); padding: 25px 0px;\">市场销售 | The St. Regis Deer Valley | Park City, 中国 ·重庆<br style=\"box-sizing: border-box;\"/><span style=\"box-sizing: border-box; font-size: 21px;\">Account Director</span></a></p><p><a class=\"work-list\" href=\"http://lhotel.cc/work-us.html\" style=\"box-sizing: border-box; color: rgb(89, 87, 87); text-decoration: none; cursor: pointer; display: block; border-bottom: 1px solid rgb(136, 136, 137); padding: 25px 0px;\"><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0px; font-size: 16px;\">财务 / 会计 | THE US GRANT, San Diego | San Diego, 中国 ·重庆<br style=\"box-sizing: border-box;\"/><span style=\"box-sizing: border-box; font-size: 21px;\">Accounts Receivable Agent</span></p></a><a class=\"work-list\" href=\"http://lhotel.cc/work-us.html\" style=\"box-sizing: border-box; color: rgb(89, 87, 87); text-decoration: none; cursor: pointer; display: block; border-bottom: 1px solid rgb(136, 136, 137); padding: 25px 0px;\"><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0px; font-size: 16px;\">餐饮 / 厨房 | The Westin Mission Hills Resort &amp; Spa | Rancho Mirage, 中国 ·重庆<br style=\"box-sizing: border-box;\"/><span style=\"box-sizing: border-box; font-size: 21px;\">Chef Supervisor</span></p></a></p><p></p><p><br/></p><p><img src=\"http://lhotel.cc/home/img/img-07.png\" style=\"box-sizing: border-box; border: 0px; vertical-align: middle;\"/></p><p><br/></p>', '2016-08-30 07:54:59', '2016-09-01 09:43:45', '1');
INSERT INTO `article` VALUES ('20', '2', '', '27', '3', '/data/upload/images/2016/08/31/b011aef5f7434101c7523ea967f0375da8a0fd35.jpeg', '<意大利12日游>25人小团，一价全含', '立减优惠\r\n\r\n立减优惠\r\n名称：\r\n出境钜惠立减1000元/人\r\n时间：\r\n2016-08-27至2016-09-26', '', '123', '12', '1', '<h3 class=\"shuxian\" style=\"padding: 0px; margin: 0px 0px 10px; font-size: 18px; font-weight: normal; font-family: 微软雅黑; color: rgb(64, 64, 64); white-space: normal; background-color: rgb(255, 255, 255);\"><span class=\"sx\" style=\"padding: 0px; margin: 0px 6px 0px 0px; width: 4px; height: 18px; display: inline-block; top: 3px; position: relative; color: rgb(51, 51, 51); background-color: rgb(229, 136, 33);\"></span>立减优惠</h3><p>立减优惠</p><ul class=\"clearfix list-paddingleft-2\" style=\"padding: 0px 0px 0px 10px; margin: 0px; zoom: 1; clear: both; font-size: 14px; font-family: \" microsoft=\"\"><li><p>名称：</p></li><li><p>出境钜惠立减1000元/人</p></li></ul><ul class=\"clearfix list-paddingleft-2\" style=\"padding: 0px 0px 0px 10px; margin: 0px; zoom: 1; clear: both; font-size: 14px; font-family: \" microsoft=\"\"><li><p>时间：</p></li><li><p>2016-08-27至2016-09-26</p></li></ul><ul class=\"clearfix list-paddingleft-2\" style=\"padding: 0px 0px 0px 10px; margin: 0px; zoom: 1; clear: both; font-size: 14px; font-family: \" microsoft=\"\"><li><p>内容：</p></li><li><p>活动名称：出境钜惠立减1000元/人<br style=\"padding: 0px; margin: 0px;\"/>1、预订指定线路指定团期现金立减1000元/人，提交订单时，勾选“立减优惠”即可扣减相应金额，保险不含。<br style=\"padding: 0px; margin: 0px;\"/>2、儿童同行不享受该优惠政策。（儿童标准以途牛旅游网具体产品线路“费用说明”中公布为准）。<br style=\"padding: 0px; margin: 0px;\"/>3、此活动与其他立减互斥<br style=\"padding: 0px; margin: 0px;\"/>4、本次活动按双人出行共用一间房核算单人价格，最终成行价格将根据所选出发日期、住宿房型、交通以及所选附加服务不同而有所不同，以客服与您确认需求后核算价格为准。<br style=\"padding: 0px; margin: 0px;\"/>5、途牛旅游网在法律允许的范围内保留对本次活动的变更权。<br style=\"padding: 0px; margin: 0px;\"/>6、签约成功，额外赠汪正影业价值868元“私享夹全套拍摄”儿童写真套餐一份，所赠套系仅限上海、北京、天津、成都、南京、大连六大城市非汪正摄影会员参加。名额有限，赠完即止。活动具体内容请点击链接：http://www.tuniu.com/trips/10092802。<br style=\"padding: 0px; margin: 0px;\"/></p><p style=\"padding: 0px; margin-top: 0px; margin-bottom: 0px;\">7、7月19日起购买途牛指定产品可获得中经堂958元调理卡兑换券1份，先到先得，赠完即止。详情请见：http://www.tuniu.com/szt/zhongjingtang/3402.html</p><p style=\"padding: 0px; margin-top: 0px; margin-bottom: 0px;\">8、即日起购买途牛指定产品可获得价值￥235林清轩山茶花润肤油10ml装*1瓶，先到先得，赠完即止。发券时间为下单后3-5个工作日内发送。详情请见：http://www.tuniu.com/szt/linqingxuan<br style=\"padding: 0px; margin: 0px;\"/></p></li></ul><ul class=\"clearfix list-paddingleft-2\" style=\"padding: 0px 0px 0px 10px; margin: 0px; zoom: 1; clear: both; font-size: 14px; font-family: \" microsoft=\"\"><li><p>团期：</p></li><li><p>2016-09-20</p></li></ul><p>多订优惠</p><ul class=\"clearfix list-paddingleft-2\" style=\"padding: 0px 0px 0px 10px; margin: 0px; zoom: 1; clear: both; font-size: 14px; font-family: \" microsoft=\"\"><li><p>名称：</p></li><li><p>多人预订-4人-</p></li></ul><ul class=\"clearfix list-paddingleft-2\" style=\"padding: 0px 0px 0px 10px; margin: 0px; zoom: 1; clear: both; font-size: 14px; font-family: \" microsoft=\"\"><li><p>时间：</p></li><li><p>2012-06-08至2020-01-01</p></li></ul><ul class=\"clearfix list-paddingleft-2\" style=\"padding: 0px 0px 0px 10px; margin: 0px; zoom: 1; clear: both; font-size: 14px; font-family: \" microsoft=\"\"><li><p>内容：</p></li><li><p><span class=\"cred\" style=\"padding: 0px; margin: 0px; color: red;\">4</span>位（含）以上成人预订，每位成人立减<span class=\"cred\" style=\"padding: 0px; margin: 0px; color: red;\">75</span>元；</p></li></ul><p><br/></p>', '2016-08-31 06:37:02', '2016-08-31 06:37:33', '1');
INSERT INTO `article` VALUES ('21', '1', '', '0', '3', '', '常见问题', '', '', '0', '0', '1', '<pre style=\"font-family: 宋体; font-size: 9.8pt; background-color: rgb(255, 255, 255);\">常见问题常见问题常见问题常见问题常见问题常见问题</pre>', '2016-09-14 09:59:14', '2016-09-14 09:59:14', '1');
INSERT INTO `article` VALUES ('22', '1', '', '0', '3', '', '友情链接', '', '', '0', '0', '1', '<pre style=\"font-family: 宋体; font-size: 9.8pt; background-color: rgb(255, 255, 255);\">友情链接</pre><p><br/></p>', '2016-09-14 10:00:45', '2016-09-14 10:00:45', '1');
INSERT INTO `article` VALUES ('23', '1', '', '0', '3', '', '隐私声明', '', '', '0', '0', '1', '<pre style=\"font-family: 宋体; font-size: 9.8pt; background-color: rgb(255, 255, 255);\">隐私声明</pre><p><br/></p>', '2016-09-14 10:00:55', '2016-09-14 10:00:55', '1');

-- ----------------------------
-- Table structure for `article_category`
-- ----------------------------
DROP TABLE IF EXISTS `article_category`;
CREATE TABLE `article_category` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT '分类名称',
  `parent_id` int(11) NOT NULL DEFAULT '0' COMMENT '父id',
  `sort` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '排序',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `state` tinyint(3) DEFAULT '1' COMMENT '1--正常  0--删除',
  PRIMARY KEY (`id`),
  UNIQUE KEY `article_category_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='文章分类';

-- ----------------------------
-- Records of article_category
-- ----------------------------
INSERT INTO `article_category` VALUES ('24', '新闻动态', '0', '1', '2016-06-21 08:19:22', '2016-06-27 09:00:20', '1');
INSERT INTO `article_category` VALUES ('27', '旅游中心', '0', '3', '2016-08-30 03:00:29', '2016-08-31 06:30:54', '1');

-- ----------------------------
-- Table structure for `classic_meeting`
-- ----------------------------
DROP TABLE IF EXISTS `classic_meeting`;
CREATE TABLE `classic_meeting` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id',
  `hotel_type` char(30) NOT NULL COMMENT '类型:华邦、拙雅',
  `meeting_id` mediumint(8) unsigned NOT NULL COMMENT '会议id',
  `title` varchar(80) NOT NULL COMMENT '名称',
  `galleryful` varchar(80) NOT NULL COMMENT '最多容纳',
  `area` varchar(80) NOT NULL COMMENT '面积',
  `location` varchar(80) NOT NULL COMMENT '位置',
  `img` varchar(200) NOT NULL COMMENT '图片',
  `content` text NOT NULL COMMENT '内容',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COMMENT='经典会议';

-- ----------------------------
-- Records of classic_meeting
-- ----------------------------

-- ----------------------------
-- Table structure for `discount`
-- ----------------------------
DROP TABLE IF EXISTS `discount`;
CREATE TABLE `discount` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id',
  `name` varchar(100) NOT NULL COMMENT '活动名称',
  `full_money` int(10) unsigned NOT NULL COMMENT '满',
  `decrease_money` int(10) unsigned NOT NULL COMMENT '减钱',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COMMENT='满打折';

-- ----------------------------
-- Records of discount
-- ----------------------------
INSERT INTO `discount` VALUES ('1', '满110减21', '110', '21', '2016-09-01 15:21:46', '2016-09-01 08:42:53');
INSERT INTO `discount` VALUES ('2', '满200减少30', '200', '30', '2016-09-01 15:22:16', '2016-09-01 15:22:18');
INSERT INTO `discount` VALUES ('3', '满300减40', '300', '40', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- ----------------------------
-- Table structure for `entertainment`
-- ----------------------------
DROP TABLE IF EXISTS `entertainment`;
CREATE TABLE `entertainment` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `picurl` varchar(100) NOT NULL COMMENT '图片',
  `title` varchar(255) NOT NULL COMMENT '标题',
  `introduction` varchar(255) DEFAULT NULL COMMENT '简介',
  `open_time` varchar(100) DEFAULT NULL COMMENT '开门时间',
  `is_pay` tinyint(3) DEFAULT '1' COMMENT '是否支持支付（1--支持  0--不支持）',
  `price` decimal(11,2) DEFAULT '0.00' COMMENT '价格',
  `sort` int(10) DEFAULT NULL COMMENT '排序',
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP COMMENT '更新时间',
  `picarr` varchar(255) DEFAULT NULL COMMENT '图片组',
  `close_time` varchar(100) DEFAULT NULL COMMENT '关门时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COMMENT='休闲娱乐';

-- ----------------------------
-- Records of entertainment
-- ----------------------------
INSERT INTO `entertainment` VALUES ('2', '/data/upload/images/2016/08/31/b44efbd8211f139d7263874029c272a8abe9d40c.jpeg', '麻将', '麻将111', '13:00', '1', '50.00', null, '2016-07-14 06:07:22', '2016-08-31 06:04:54', '/data/upload/images/2016/08/31/b44efbd8211f139d7263874029c272a8abe9d40c.jpeg', '23:00');
INSERT INTO `entertainment` VALUES ('3', '/data/upload/images/2016/08/31/8aefeaade041fc43ef3a0bc25f583b8807739181.jpeg', 'spa', '好耍哦哦', '14:05:18', '1', '123.00', null, '2016-08-31 06:05:24', '2016-08-31 06:05:24', '/data/upload/images/2016/08/31/8aefeaade041fc43ef3a0bc25f583b8807739181.jpeg', '14:05:00');
INSERT INTO `entertainment` VALUES ('4', '/data/upload/images/2016/08/31/4789e3027edff2d9e0ef3c10d16a4b96b0d64ac1.jpeg', '游戏', '好耍哦哦好耍哦哦好耍哦哦好耍哦哦好耍哦哦', '14:06:05', '1', '123.00', null, '2016-08-31 06:06:10', '2016-08-31 06:06:10', '/data/upload/images/2016/08/31/4789e3027edff2d9e0ef3c10d16a4b96b0d64ac1.jpeg', '14:06:07');
INSERT INTO `entertainment` VALUES ('5', '/data/upload/images/2016/08/31/05197086efbeec37c3eb95cb55f8683ffc8e44e0.jpeg', '斗地主', '好耍哦哦', '14:06:46', '1', '545.00', null, '2016-08-31 06:06:50', '2016-08-31 06:06:50', '/data/upload/images/2016/08/31/05197086efbeec37c3eb95cb55f8683ffc8e44e0.jpeg', '14:06:48');
INSERT INTO `entertainment` VALUES ('6', '/data/upload/images/2016/09/02/410b55795d200e6fa953265da997707a68f03045.jpeg', '休闲娱乐3', '123123', '09:47:08', '1', '123.00', null, '2016-09-02 01:47:12', '2016-09-02 01:47:12', '/data/upload/images/2016/09/02/410b55795d200e6fa953265da997707a68f03045.jpeg', '09:47:10');
INSERT INTO `entertainment` VALUES ('7', '/data/upload/images/2016/10/09/b10f45dad8925ad91fad16dd0035aa2f43322b87.jpeg', '棋牌娱乐', '棋牌娱乐是一项非常好玩的活动，棋牌娱乐是一项非常好玩的活动，棋牌娱乐是一项非常好玩的活动，棋牌娱乐是一项非常好玩的活动，棋牌娱乐是一项非常好玩的活动，棋牌娱乐是一项非常好玩的活动。', '17:23:08', '1', '100.00', null, '2016-10-09 17:23:15', '2016-10-09 17:23:15', '/data/upload/images/2016/10/09/b10f45dad8925ad91fad16dd0035aa2f43322b87.jpeg', '17:23:10');

-- ----------------------------
-- Table structure for `entertainment_order`
-- ----------------------------
DROP TABLE IF EXISTS `entertainment_order`;
CREATE TABLE `entertainment_order` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id',
  `order_id` int(10) unsigned NOT NULL COMMENT '订单id',
  `name` varchar(50) NOT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `member_id` int(10) unsigned NOT NULL,
  `order` varchar(100) NOT NULL COMMENT '订单号',
  `entertainment_id` int(10) unsigned NOT NULL COMMENT '娱乐id',
  `number` int(10) unsigned NOT NULL COMMENT '活动数量',
  `get_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '消费时间',
  `total_money` decimal(11,2) DEFAULT '0.00' COMMENT '总金额',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `order_id` (`order_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8 COMMENT='娱乐订单表';

-- ----------------------------
-- Records of entertainment_order
-- ----------------------------
INSERT INTO `entertainment_order` VALUES ('40', '60', '', null, '0', '2016090249521005', '5', '2', '2015-12-23 00:00:00', '1090.00', '2016-09-02 07:52:17', '2016-09-02 07:52:17');
INSERT INTO `entertainment_order` VALUES ('41', '61', '', null, '0', '2016090210156100', '5', '2', '2015-12-23 00:00:00', '1090.00', '2016-09-02 07:52:30', '2016-09-02 07:52:30');
INSERT INTO `entertainment_order` VALUES ('42', '62', '', null, '0', '2016090555995498', '6', '2', '2016-09-05 00:00:00', '246.00', '2016-09-05 02:52:40', '2016-09-05 02:52:40');
INSERT INTO `entertainment_order` VALUES ('43', '63', '11', '12345678954', '39', '2016090598505299', '5', '1', '2016-09-12 00:00:00', '545.00', '2016-09-05 03:16:44', '2016-09-05 03:16:44');
INSERT INTO `entertainment_order` VALUES ('44', '64', '00', '456974', '40', '2016090510097985', '4', '1', '2016-09-06 00:00:00', '123.00', '2016-09-05 03:18:54', '2016-09-05 03:18:54');
INSERT INTO `entertainment_order` VALUES ('45', '65', 'gg', '1456266', '41', '2016090553565457', '6', '1', '2016-09-05 00:00:00', '123.00', '2016-09-05 03:20:05', '2016-09-05 03:20:05');
INSERT INTO `entertainment_order` VALUES ('46', '70', '张宇', '18956485987', '43', '2016090510148534', '6', '1', '2016-09-06 00:00:00', '123.00', '2016-09-05 08:01:18', '2016-09-05 08:01:18');

-- ----------------------------
-- Table structure for `food`
-- ----------------------------
DROP TABLE IF EXISTS `food`;
CREATE TABLE `food` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id',
  `name` varchar(255) NOT NULL COMMENT '名称',
  `type` varchar(100) NOT NULL COMMENT '类型 华邦，非遗',
  `price` decimal(11,2) NOT NULL COMMENT '价格',
  `supply_time` varchar(255) NOT NULL COMMENT '供应时间',
  `img` varchar(255) NOT NULL COMMENT '缩略图',
  `pictures` varchar(255) NOT NULL COMMENT '图片组',
  `content` text NOT NULL COMMENT '描述',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COMMENT='餐饮';

-- ----------------------------
-- Records of food
-- ----------------------------
INSERT INTO `food` VALUES ('1', '扬州炒面', '非遗', '28.00', '早上、晚上', '/data/upload/images/2016/07/11/97898812da128bb8587c8d4f84c3f7a8f0733ed1.jpeg', '/data/upload/images/2016/07/11/97898812da128bb8587c8d4f84c3f7a8f0733ed1.jpeg,/data/upload/images/2016/07/11/800f53702aa9d365fe800ebd0423550f7ad22375.jpeg', '<p>去恶趣味请我请我请问7</p>', '2016-07-11 06:19:25', '2016-07-14 02:37:57');
INSERT INTO `food` VALUES ('2', '33', '华邦', '33.00', '33', '/data/upload/images/2016/07/11/d5f00473b7aee222d3859da423359108fce6691a.jpeg', '/data/upload/images/2016/07/11/d5f00473b7aee222d3859da423359108fce6691a.jpeg,/data/upload/images/2016/07/11/53ec57ba42fa89813a1235a9c250cfa0b419f4be.jpeg', '<p>33人人</p>', '2016-07-11 03:34:46', '2016-07-14 02:25:46');
INSERT INTO `food` VALUES ('3', '人人', '非遗', '33.00', '33', '/data/upload/images/2016/07/11/7543490a8ef4d8eabfdb9b151bb2ec8c4fafda60.jpeg', '/data/upload/images/2016/07/11/7543490a8ef4d8eabfdb9b151bb2ec8c4fafda60.jpeg,/data/upload/images/2016/07/11/2af379a6c0e49353af0d6db01e461b9c038100f7.jpeg,/data/upload/images/2016/07/11/8527efd4926b1203320f77a2e025219a1df1efe9.jpeg', '<p>人人</p>', '2016-07-14 02:23:14', '2016-07-14 02:23:24');

-- ----------------------------
-- Table structure for `goods`
-- ----------------------------
DROP TABLE IF EXISTS `goods`;
CREATE TABLE `goods` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '商品id',
  `typeid` smallint(5) unsigned NOT NULL COMMENT '商品分类',
  `title` varchar(80) NOT NULL COMMENT '商品名称',
  `marketprice` char(10) NOT NULL COMMENT '市场价格',
  `salesprice` char(10) NOT NULL COMMENT '销售价格',
  `housenum` smallint(5) unsigned NOT NULL COMMENT '库存数量',
  `integral` char(10) NOT NULL COMMENT '积分点数',
  `source` varchar(50) NOT NULL COMMENT '文章来源',
  `author` varchar(50) NOT NULL COMMENT '作者编辑',
  `linkurl` varchar(255) NOT NULL COMMENT '跳转链接',
  `keywords` varchar(30) NOT NULL COMMENT '关键词',
  `description` varchar(255) NOT NULL COMMENT '摘要',
  `content` mediumtext NOT NULL COMMENT '详细内容',
  `picurl` varchar(100) NOT NULL COMMENT '缩略图片',
  `picarr` text NOT NULL COMMENT '组图',
  `click` int(10) unsigned NOT NULL COMMENT '点击次数',
  `sort` int(10) unsigned NOT NULL COMMENT '排列排序',
  `checkinfo` enum('true','false') NOT NULL COMMENT '审核状态',
  `delstate` set('true') NOT NULL COMMENT '删除状态',
  `deltime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '删除时间',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COMMENT='商品';

-- ----------------------------
-- Records of goods
-- ----------------------------
INSERT INTO `goods` VALUES ('3', '32', 'ipone236', '218', '200', '200', '210', '呵呵', 'admin', 'www.baidu.com', '哈哈哈', '士大夫士大夫', '<p>是的发送到水电费是打发是打发阿斯蒂芬阿斯顿发是打发傻吊发<img src=\"/data/upload/images/2016/06/27/fed8042a0de6f6e87548b77b61b611d396fd3641.jpeg\" title=\"fed8042a0de6f6e87548b77b61b611d396fd3641.jpeg\" alt=\"Koala.jpg\"/></p>', '', '/data/upload/images/2016/07/04/b3758ec18a13d277e324521fb894075e92e48c33.jpeg,/data/upload/images/2016/07/04/7f8448fea858e0eb021a0b2cc76381facd89a9ba.jpeg', '222', '12', '', '', '0000-00-00 00:00:00', '2016-07-04 01:50:31', '2016-07-04 01:50:19');
INSERT INTO `goods` VALUES ('5', '31', '777', '777', '77', '77', '777', '7', '7', '77', '7', '7', '<p>77</p>', '', '/data/upload/images/2016/06/30/892ce223fa3548ff14e9b3d9e1c8d6e6606adb2f.jpeg,/data/upload/images/2016/06/30/00361a8a2a6ba792c3548eb1765c18ab5063372e.jpeg', '7', '77', '', '', '0000-00-00 00:00:00', '2016-06-30 03:28:23', '2016-06-30 03:27:58');
INSERT INTO `goods` VALUES ('6', '39', '78', '77', '88', '88', '88', '88', '8', '888', '8', '8', '<p>888</p>', '', '', '8', '89', '', '', '0000-00-00 00:00:00', '2016-06-30 03:28:52', '2016-06-30 03:28:25');

-- ----------------------------
-- Table structure for `goods_type`
-- ----------------------------
DROP TABLE IF EXISTS `goods_type`;
CREATE TABLE `goods_type` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT COMMENT '商品类型id',
  `parent_id` mediumint(8) unsigned NOT NULL COMMENT '类型上级id',
  `parentstr` varchar(50) NOT NULL COMMENT '类型上级id字符串',
  `name` varchar(30) NOT NULL COMMENT '类别名称',
  `picurl` varchar(255) DEFAULT NULL COMMENT '缩略图片',
  `linkurl` varchar(255) DEFAULT NULL COMMENT '跳转链接',
  `sort` mediumint(8) unsigned NOT NULL COMMENT '排列顺序',
  `checkinfo` enum('true','false') NOT NULL COMMENT '隐藏类别',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8 COMMENT='商品类型';

-- ----------------------------
-- Records of goods_type
-- ----------------------------
INSERT INTO `goods_type` VALUES ('31', '0', '', '客房中心', '', '', '2', 'false', '2016-06-24 06:15:57', '2016-06-28 03:12:51');
INSERT INTO `goods_type` VALUES ('32', '31', '', ' 华邦', '', '', '0', 'true', '2016-06-24 06:17:45', '2016-06-28 03:14:52');
INSERT INTO `goods_type` VALUES ('33', '0', '', '77', '', '', '0', 'true', '2016-06-24 07:59:25', '2016-06-24 07:59:25');
INSERT INTO `goods_type` VALUES ('35', '0', '', '666', '/data/upload/images/2016/06/246e1f92c584598af72a11c5c6a85a9a8544b327cb.jpeg', '55', '55', 'true', '2016-06-24 08:35:33', '2016-06-24 08:35:33');
INSERT INTO `goods_type` VALUES ('36', '0', '', '567', '/data/upload/images/2016/06/244b670a94d8df18cdaac771ef8253768cd72b8b9e.jpeg', '7', '56', 'true', '2016-06-24 08:55:42', '2016-06-24 08:55:42');
INSERT INTO `goods_type` VALUES ('37', '35', '', '123', null, '', '2', 'true', '2016-06-27 09:27:16', '2016-06-27 09:27:16');
INSERT INTO `goods_type` VALUES ('38', '35', '', '1222', '/data/upload/images/2016/06/27835bd791e1a49376d880678d118e9033e95b6113.jpeg', '2', '2', 'true', '2016-06-27 09:27:30', '2016-06-27 09:27:30');
INSERT INTO `goods_type` VALUES ('39', '33', '', '888', null, '88', '8', 'false', '2016-06-27 09:30:34', '2016-06-27 09:30:34');
INSERT INTO `goods_type` VALUES ('40', '33', '', '88', '/data/upload/images/2016/06/27/e16901ae834ee8ff2c1920c0e3dc0933915ee5f9.jpeg', '8', '89', 'false', '2016-06-27 09:30:57', '2016-06-27 09:30:57');
INSERT INTO `goods_type` VALUES ('44', '31', '', '拙雅', null, '', '0', 'true', '2016-06-28 03:15:09', '2016-06-28 03:15:09');
INSERT INTO `goods_type` VALUES ('45', '0', '', '111', '/data/upload/images/2016/06/29/3f3fd8c7534d72bab35c2982d810c180627a6015.jpeg', '1', '1', 'true', '2016-06-29 03:18:23', '2016-06-29 03:18:23');

-- ----------------------------
-- Table structure for `link`
-- ----------------------------
DROP TABLE IF EXISTS `link`;
CREATE TABLE `link` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '友情链接id',
  `webname` varchar(30) NOT NULL COMMENT '网站名称',
  `webnote` varchar(200) NOT NULL COMMENT '网站描述',
  `picurl` varchar(100) NOT NULL COMMENT '缩略图片',
  `linkurl` varchar(255) NOT NULL COMMENT '跳转链接',
  `nofollow` enum('true','false') NOT NULL COMMENT 'nofollow',
  `orderid` smallint(5) unsigned NOT NULL COMMENT '排列排序',
  `posttime` int(10) unsigned NOT NULL COMMENT '更新时间',
  `checkinfo` enum('true','false') NOT NULL COMMENT '审核状态',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of link
-- ----------------------------
INSERT INTO `link` VALUES ('1', '百度', '百度', '', 'http://www.baidu.com', 'true', '0', '0', 'true', '0000-00-00 00:00:00', '2016-09-27 09:40:51');
INSERT INTO `link` VALUES ('3', 'qq', '', '', 'http://www.qq6.com', 'false', '7', '0', 'true', '2016-08-29 07:47:13', '2016-08-29 08:11:02');
INSERT INTO `link` VALUES ('4', '163', '', '', 'www.163.com', 'true', '2', '0', 'true', '2016-09-27 09:39:00', '2016-09-27 09:39:00');

-- ----------------------------
-- Table structure for `meeting`
-- ----------------------------
DROP TABLE IF EXISTS `meeting`;
CREATE TABLE `meeting` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id',
  `hotel_type` char(30) NOT NULL COMMENT '类型:华邦、拙雅',
  `type` char(30) NOT NULL COMMENT '类型:会议、宴会',
  `title` varchar(80) NOT NULL COMMENT '名称',
  `galleryful` varchar(80) NOT NULL COMMENT '最多容纳',
  `area` varchar(80) NOT NULL COMMENT '面积',
  `terms` varchar(255) NOT NULL COMMENT '预约条款',
  `location` varchar(80) NOT NULL COMMENT '位置',
  `img` varchar(200) NOT NULL COMMENT '图片',
  `content` text NOT NULL COMMENT '内容',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COMMENT='会议、宴会';

-- ----------------------------
-- Records of meeting
-- ----------------------------
INSERT INTO `meeting` VALUES ('13', '华邦', '会议', '会议123', '33', '123', '请问请问', '请问', '/data/upload/images/2016/10/09/3b64e997b9e47e149230a9da925ddcf21cbb0baf.jpeg', '<p>4444444444</p>', '2016-10-09 11:18:29', '2016-10-10 09:49:39');

-- ----------------------------
-- Table structure for `member`
-- ----------------------------
DROP TABLE IF EXISTS `member`;
CREATE TABLE `member` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '用户id',
  `username` varchar(32) NOT NULL COMMENT '用户名',
  `password` varchar(32) NOT NULL COMMENT '密码',
  `name` varchar(10) NOT NULL COMMENT '姓名',
  `avatar` varchar(100) NOT NULL COMMENT '头像',
  `sex` varchar(20) NOT NULL COMMENT '性别',
  `birth` varchar(10) NOT NULL COMMENT '生日',
  `email` varchar(40) NOT NULL COMMENT '电子邮件',
  `qq` varchar(20) NOT NULL COMMENT 'QQ号码',
  `mobile` varchar(20) NOT NULL COMMENT '手机',
  `integral` int(10) unsigned NOT NULL COMMENT '积分',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `mobile` (`mobile`),
  UNIQUE KEY `username` (`username`) USING HASH
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of member
-- ----------------------------
INSERT INTO `member` VALUES ('33', '18716628386', 'e10adc3949ba59abbe56e057f20f883e', '小21', '/data/upload/images/2016/09/06/30cc1d3a58bfcc3aa768b88001a1656d17de63c2.jpeg', '0', '', '123@qq.com', '', '18983056484', '0', '2016-09-02 03:40:55', '2016-09-07 02:31:05');
INSERT INTO `member` VALUES ('34', 'zhangyu11', 'e10adc3949ba59abbe56e057f20f883e', 'zhangyu', '/data/upload/images/2016/09/06/6cb75032efff5241bc2f867e989efb66cd7254d7.jpeg', 'dgd', '', '123@qq.com', '', '18565265212', '0', '2016-09-02 06:33:54', '2016-09-06 06:52:40');
INSERT INTO `member` VALUES ('35', '123123123123', 'e10adc3949ba59abbe56e057f20f883e', '呵', '', '0', '', '', '', '123123123123', '0', '2016-09-02 06:39:00', '2016-09-02 06:39:00');
INSERT INTO `member` VALUES ('37', '18565956565', 'e10adc3949ba59abbe56e057f20f883e', '大龙2号', '', '0', '', '', '', '18565956565', '0', '2016-09-02 07:52:17', '2016-09-02 07:52:17');
INSERT INTO `member` VALUES ('38', '18569874125', 'e10adc3949ba59abbe56e057f20f883e', 'yushen', '', '0', '', '', '', '18569874125', '0', '2016-09-05 02:52:40', '2016-09-05 02:52:40');
INSERT INTO `member` VALUES ('39', '12345678954', 'e10adc3949ba59abbe56e057f20f883e', '11', '', '0', '', '', '', '12345678954', '0', '2016-09-05 03:16:43', '2016-09-05 03:16:43');
INSERT INTO `member` VALUES ('40', '456974', 'e10adc3949ba59abbe56e057f20f883e', '00', '', '0', '', '', '', '456974', '0', '2016-09-05 03:18:53', '2016-09-05 03:18:53');
INSERT INTO `member` VALUES ('41', '1456266', 'e10adc3949ba59abbe56e057f20f883e', 'gg', '', '0', '', '', '', '1456266', '0', '2016-09-05 03:20:05', '2016-09-05 03:20:05');
INSERT INTO `member` VALUES ('42', '12345678965', 'e10adc3949ba59abbe56e057f20f883e', 'yushen', '', '0', '', '', '', '12345678965', '0', '2016-09-05 03:32:14', '2016-09-05 03:32:14');
INSERT INTO `member` VALUES ('43', '18956485987', 'e10adc3949ba59abbe56e057f20f883e', '张宇', '/data/upload/images/2016/09/06/1ff992899a4349f435c61e220609f24cb118722e.jpeg', '0', '', '', '', '18956485987', '0', '2016-09-05 07:26:49', '2016-09-06 02:52:03');
INSERT INTO `member` VALUES ('44', '18696586300', 'e10adc3949ba59abbe56e057f20f883e', '罗杰', '', '', '', '', '', '18696586300', '0', '2016-09-19 10:43:27', '2016-09-19 10:43:27');
INSERT INTO `member` VALUES ('45', '123456', 'e10adc3949ba59abbe56e057f20f883e', 'cc', '', '', '', '', '', '123456', '0', '2016-09-19 11:38:43', '2016-09-19 11:38:43');

-- ----------------------------
-- Table structure for `menu`
-- ----------------------------
DROP TABLE IF EXISTS `menu`;
CREATE TABLE `menu` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT '菜单编号',
  `menu_name` varchar(255) NOT NULL COMMENT '菜单名称',
  `menu_desc` varchar(255) NOT NULL COMMENT '菜单描述',
  `display` tinyint(1) NOT NULL DEFAULT '1' COMMENT '是否显示(1--显示   0--隐藏)',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '更新时间',
  `remark` varchar(255) DEFAULT NULL COMMENT '备注',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COMMENT='菜单表';

-- ----------------------------
-- Records of menu
-- ----------------------------
INSERT INTO `menu` VALUES ('1', 'site', '站点配置', '1', '2016-09-20 15:30:47', '2016-09-20 15:35:19', null);
INSERT INTO `menu` VALUES ('2', 'category', '内容管理', '1', '2016-09-20 15:30:57', '2016-09-20 15:35:22', null);
INSERT INTO `menu` VALUES ('3', 'goods', '商品管理', '1', '2016-09-20 15:32:58', '2016-09-20 15:35:24', null);
INSERT INTO `menu` VALUES ('4', 'room', '客房管理', '1', '2016-09-20 15:33:28', '2016-09-20 15:35:26', null);
INSERT INTO `menu` VALUES ('5', 'food', '餐饮管理', '1', '2016-09-20 15:33:54', '2016-09-20 15:35:29', null);
INSERT INTO `menu` VALUES ('6', 'entertainment', '休闲娱乐', '1', '2016-09-20 15:34:21', '2016-09-20 15:35:31', null);
INSERT INTO `menu` VALUES ('7', 'active', '促销活动', '1', '2016-09-20 15:34:50', '2016-09-20 15:35:33', null);
INSERT INTO `menu` VALUES ('8', 'member', '会员管理', '1', '2016-09-20 15:35:07', '2016-09-20 15:35:35', null);
INSERT INTO `menu` VALUES ('9', 'order', '订单管理', '1', '2016-09-20 15:36:16', '2016-09-20 15:36:16', null);
INSERT INTO `menu` VALUES ('10', 'index', '系统管理', '1', '2016-09-20 15:36:44', '2016-09-20 15:36:44', null);
INSERT INTO `menu` VALUES ('11', 'article', '文章管理', '1', '2016-09-21 11:24:56', '2016-09-21 11:24:56', null);
INSERT INTO `menu` VALUES ('12', 'goodstype', '商品类型', '1', '2016-09-21 11:27:39', '2016-09-21 11:27:39', null);
INSERT INTO `menu` VALUES ('13', 'singlepage', '单页管理', '1', '2016-09-21 11:28:32', '2016-09-21 11:28:32', null);
INSERT INTO `menu` VALUES ('14', 'income', '收益管理', '1', '2016-09-29 10:59:28', '2016-09-29 10:59:28', null);
INSERT INTO `menu` VALUES ('15', 'login', 'login', '1', '2016-10-08 13:44:40', '2016-10-08 13:44:40', null);
INSERT INTO `menu` VALUES ('16', 'meeting', '会议与宴会', '1', '2016-10-08 16:50:36', '2016-10-08 16:50:36', null);

-- ----------------------------
-- Table structure for `order`
-- ----------------------------
DROP TABLE IF EXISTS `order`;
CREATE TABLE `order` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id',
  `order` varchar(100) NOT NULL COMMENT '订单号',
  `type` int(10) unsigned NOT NULL COMMENT '客房1,娱乐2,活动3',
  `member_id` int(10) unsigned NOT NULL,
  `order_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '订单创建时间戳',
  `pay_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '订单支付时间戳',
  `is_pay` tinyint(1) NOT NULL DEFAULT '1' COMMENT '是否支付,1是未支付，2是已支付,3退货中，4确认退货',
  `pay_type` varchar(100) NOT NULL COMMENT '支付方式：到店支付1,线上支付2,支付宝3,微信4',
  `total_money` decimal(11,2) DEFAULT '0.00' COMMENT '总金额',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `order` (`order`)
) ENGINE=InnoDB AUTO_INCREMENT=90 DEFAULT CHARSET=utf8 COMMENT='订单表';

-- ----------------------------
-- Records of order
-- ----------------------------
INSERT INTO `order` VALUES ('9', '2016082998555051', '1', '0', '1472453755', '0', '4', '2', '500.00', '2016-08-29 06:55:55', '2016-09-27 10:52:36');
INSERT INTO `order` VALUES ('16', '2016082948994952', '1', '0', '1472456928', '0', '4', '1', '500.00', '2016-08-29 07:48:48', '2016-09-27 10:53:44');
INSERT INTO `order` VALUES ('17', '2016082910056102', '1', '0', '1472457037', '0', '1', '1', '500.00', '2016-08-29 07:50:37', '2016-08-29 07:50:37');
INSERT INTO `order` VALUES ('19', '2016083056995655', '1', '0', '1472521416', '0', '1', '2', '0.01', '2016-08-30 01:43:36', '2016-08-30 01:43:36');
INSERT INTO `order` VALUES ('20', '2016083054985497', '1', '0', '1472521798', '1472521798', '2', '4', '0.01', '2016-08-30 01:49:58', '2016-08-30 02:56:04');
INSERT INTO `order` VALUES ('21', '2016083097481011', '1', '0', '1472523866', '1472521798', '2', '4', '0.01', '2016-08-30 02:24:26', '2016-08-30 02:59:16');
INSERT INTO `order` VALUES ('22', '2016083057545157', '1', '0', '1472524233', '1472521798', '2', '4', '0.01', '2016-08-30 02:30:33', '2016-08-30 03:05:24');
INSERT INTO `order` VALUES ('23', '2016083048559755', '1', '0', '1472525120', '1472521798', '2', '4', '0.01', '2016-08-30 02:45:20', '2016-08-30 02:45:46');
INSERT INTO `order` VALUES ('24', '2016083010110156', '1', '0', '1472529262', '0', '1', '1', '0.04', '2016-08-30 03:54:22', '2016-08-30 03:54:22');
INSERT INTO `order` VALUES ('28', '2016090155100100', '1', '0', '1472696039', '0', '1', '2', '6001.00', '2016-09-01 02:13:59', '2016-09-01 02:13:59');
INSERT INTO `order` VALUES ('29', '2016090150511011', '1', '0', '1472696754', '0', '1', '2', '100.01', '2016-09-01 02:25:54', '2016-09-01 02:25:54');
INSERT INTO `order` VALUES ('30', '2016090155100101', '1', '0', '1472697095', '0', '1', '2', '0.01', '2016-09-01 02:31:35', '2016-09-01 02:31:35');
INSERT INTO `order` VALUES ('31', '2016090150515410', '1', '0', '1472698514', '0', '1', '2', '0.04', '2016-09-01 02:55:14', '2016-09-01 02:55:14');
INSERT INTO `order` VALUES ('32', '2016090150564850', '1', '0', '1472701138', '0', '1', '2', '0.00', '2016-09-01 03:38:58', '2016-09-01 03:38:58');
INSERT INTO `order` VALUES ('33', '2016090151521025', '1', '0', '1472710051', '0', '1', '2', '0.01', '2016-09-01 06:07:31', '2016-09-01 06:07:31');
INSERT INTO `order` VALUES ('34', '2016090156555448', '1', '0', '1472719000', '0', '1', '2', '0.01', '2016-09-01 08:36:40', '2016-09-01 08:36:40');
INSERT INTO `order` VALUES ('35', '2016090153575749', '1', '0', '1472720533', '0', '1', '2', '400.00', '2016-09-01 09:02:13', '2016-09-01 09:02:13');
INSERT INTO `order` VALUES ('36', '2016090110210150', '1', '0', '1472721343', '0', '1', '2', '360.00', '2016-09-01 09:15:43', '2016-09-01 09:15:43');
INSERT INTO `order` VALUES ('37', '2016090110010250', '1', '0', '1472721373', '0', '1', '2', '400.00', '2016-09-01 09:16:13', '2016-09-01 09:16:13');
INSERT INTO `order` VALUES ('38', '2016090197555610', '1', '0', '1472721386', '0', '1', '2', '360.00', '2016-09-01 09:16:26', '2016-09-01 09:16:26');
INSERT INTO `order` VALUES ('39', '2016090198971011', '1', '0', '1472723771', '0', '1', '1', '3281.00', '2016-09-01 09:56:11', '2016-09-01 09:56:11');
INSERT INTO `order` VALUES ('40', '2016090152100505', '1', '0', '1472723780', '0', '1', '2', '3281.00', '2016-09-01 09:56:20', '2016-09-01 09:56:20');
INSERT INTO `order` VALUES ('41', '2016090210099569', '1', '0', '1472781149', '0', '1', '2', '360.00', '2016-09-02 01:52:29', '2016-09-02 01:52:29');
INSERT INTO `order` VALUES ('42', '2016090210253101', '1', '0', '1472782351', '0', '1', '2', '0.03', '2016-09-02 02:12:31', '2016-09-02 02:12:31');
INSERT INTO `order` VALUES ('43', '2016090257565252', '1', '0', '1472785001', '0', '1', '2', '0.08', '2016-09-02 02:56:41', '2016-09-02 02:56:41');
INSERT INTO `order` VALUES ('49', '2016090254101485', '3', '0', '1472787655', '0', '1', '', null, '2016-09-02 03:40:55', '2016-09-02 03:40:55');
INSERT INTO `order` VALUES ('50', '2016090249549854', '3', '0', '1472787777', '0', '1', '', null, '2016-09-02 03:42:57', '2016-09-02 03:42:57');
INSERT INTO `order` VALUES ('51', '2016090250974998', '3', '0', '1472798034', '0', '1', '', null, '2016-09-02 06:33:54', '2016-09-02 06:33:54');
INSERT INTO `order` VALUES ('52', '2016090251995748', '3', '0', '1472798340', '0', '1', '', null, '2016-09-02 06:39:00', '2016-09-02 06:39:00');
INSERT INTO `order` VALUES ('53', '2016090210299501', '3', '0', '1472798383', '0', '1', '', null, '2016-09-02 06:39:43', '2016-09-02 06:39:43');
INSERT INTO `order` VALUES ('54', '2016090251981005', '3', '0', '1472798531', '0', '1', '', null, '2016-09-02 06:42:11', '2016-09-02 06:42:11');
INSERT INTO `order` VALUES ('55', '2016090257519854', '3', '0', '1472798745', '0', '1', '', null, '2016-09-02 06:45:45', '2016-09-02 06:45:45');
INSERT INTO `order` VALUES ('56', '2016090253981005', '1', '0', '1472798853', '0', '1', '2', '0.15', '2016-09-02 06:47:33', '2016-09-02 06:47:33');
INSERT INTO `order` VALUES ('57', '2016090298579850', '3', '0', '1472798971', '0', '1', '', null, '2016-09-02 06:49:31', '2016-09-02 06:49:31');
INSERT INTO `order` VALUES ('58', '2016090256565250', '3', '0', '1472799097', '0', '1', '', null, '2016-09-02 06:51:37', '2016-09-02 06:51:37');
INSERT INTO `order` VALUES ('60', '2016090249521005', '3', '0', '1472802737', '0', '1', '', '1090.00', '2016-09-02 07:52:17', '2016-09-02 07:52:17');
INSERT INTO `order` VALUES ('61', '2016090210156100', '2', '0', '1472802750', '1472802750', '2', '', '1090.00', '2016-09-02 07:52:30', '2016-09-05 08:40:14');
INSERT INTO `order` VALUES ('62', '2016090555995498', '2', '0', '1473043960', '0', '1', '', '246.00', '2016-09-05 02:52:40', '2016-09-05 02:52:40');
INSERT INTO `order` VALUES ('63', '2016090598505299', '2', '39', '1473045403', '0', '1', '', '545.00', '2016-09-05 03:16:43', '2016-09-05 03:16:43');
INSERT INTO `order` VALUES ('64', '2016090510097985', '2', '40', '1473045534', '0', '1', '', '123.00', '2016-09-05 03:18:54', '2016-09-05 03:18:54');
INSERT INTO `order` VALUES ('65', '2016090553565457', '2', '41', '1473045605', '0', '1', '', '123.00', '2016-09-05 03:20:05', '2016-09-05 03:20:05');
INSERT INTO `order` VALUES ('66', '2016090510153102', '3', '42', '1473046334', '0', '1', '', '545.00', '2016-09-05 03:32:14', '2016-09-05 03:32:14');
INSERT INTO `order` VALUES ('67', '2016090556100101', '1', '0', '1473060408', '0', '1', '1', '0.01', '2016-09-05 07:26:48', '2016-09-05 07:26:48');
INSERT INTO `order` VALUES ('68', '2016090554539754', '1', '0', '1473060950', '0', '1', '1', '0.01', '2016-09-05 07:35:50', '2016-09-05 07:35:50');
INSERT INTO `order` VALUES ('69', '2016090553101519', '1', '0', '1473061317', '0', '1', '1', '0.01', '2016-09-05 07:41:57', '2016-09-05 07:41:57');
INSERT INTO `order` VALUES ('70', '2016090510148534', '2', '43', '1473062478', '0', '1', '', '123.00', '2016-09-05 08:01:18', '2016-09-05 08:01:18');
INSERT INTO `order` VALUES ('71', '2016090597505748', '3', '43', '1473062730', '0', '1', '', '12.00', '2016-09-05 08:05:30', '2016-09-05 08:05:30');
INSERT INTO `order` VALUES ('72', '2016091910252501', '1', '0', '1474253007', '0', '1', '1', '0.01', '2016-09-19 10:43:27', '2016-09-19 10:43:27');
INSERT INTO `order` VALUES ('73', '2016091950100991', '1', '0', '1474256322', '0', '1', '2', '760.00', '2016-09-19 11:38:42', '2016-09-19 11:38:42');
INSERT INTO `order` VALUES ('74', '2016092010010048', '1', '0', '1474354221', '0', '1', '2', '0.04', '2016-09-20 14:50:21', '2016-09-20 14:50:21');
INSERT INTO `order` VALUES ('75', '2016092110255979', '1', '0', '1474427999', '0', '1', '2', '179.00', '2016-09-21 11:19:59', '2016-09-21 11:19:59');
INSERT INTO `order` VALUES ('76', '2016092151515598', '1', '0', '1474428147', '0', '1', '2', '170.00', '2016-09-21 11:22:27', '2016-09-21 11:22:27');
INSERT INTO `order` VALUES ('79', '2016092348971014', '1', '0', '1474597296', '0', '1', '2', '0.00', '2016-09-23 10:21:36', '2016-09-23 10:21:36');
INSERT INTO `order` VALUES ('81', '2016092356101995', '1', '0', '1474597416', '0', '1', '2', '0.00', '2016-09-23 10:23:36', '2016-09-23 10:23:36');
INSERT INTO `order` VALUES ('83', '2016092357535497', '1', '0', '1474597881', '0', '1', '2', '360.00', '2016-09-23 10:31:21', '2016-09-23 10:31:21');
INSERT INTO `order` VALUES ('84', '2016092310255561', '1', '0', '1474597935', '0', '1', '2', '0.00', '2016-09-23 10:32:15', '2016-09-23 10:32:15');
INSERT INTO `order` VALUES ('85', '2016092398495155', '1', '0', '1474598299', '1475119686', '2', '2', '0.01', '2016-09-23 10:38:19', '2016-09-29 11:28:06');
INSERT INTO `order` VALUES ('86', '2016100856515553', '1', '0', '1475907640', '0', '1', '2', '0.03', '2016-10-08 14:20:40', '2016-10-08 14:20:40');
INSERT INTO `order` VALUES ('87', '2016100810250505', '1', '0', '1475907711', '0', '1', '2', '9960.30', '2016-10-08 14:21:51', '2016-10-08 14:21:51');
INSERT INTO `order` VALUES ('88', '2016100955501005', '3', '3', '1476006903', '0', '1', '', '12.00', '2016-10-09 17:55:03', '2016-10-09 17:55:03');
INSERT INTO `order` VALUES ('89', '2016100950984856', '3', '3', '1476006914', '0', '1', '', '12.00', '2016-10-09 17:55:14', '2016-10-09 17:55:14');

-- ----------------------------
-- Table structure for `role`
-- ----------------------------
DROP TABLE IF EXISTS `role`;
CREATE TABLE `role` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT '角色编号',
  `role_name` varchar(255) NOT NULL COMMENT '角色名',
  `role_desc` varchar(255) DEFAULT NULL COMMENT '角色描述',
  `remark` varchar(255) DEFAULT NULL COMMENT '备注',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '更新时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COMMENT='角色表';

-- ----------------------------
-- Records of role
-- ----------------------------
INSERT INTO `role` VALUES ('1', '超级管理员', '具有所有权限', null, '2016-09-19 17:42:40', '2016-09-20 11:32:43');
INSERT INTO `role` VALUES ('3', '普通管理员2', '部分权限', null, '2016-09-20 15:15:23', '2016-09-20 15:15:23');
INSERT INTO `role` VALUES ('4', '普通管理员3', '具有部分', null, '2016-09-20 15:15:59', '2016-09-20 15:15:59');
INSERT INTO `role` VALUES ('5', '测试角色', '', null, '2016-09-30 10:50:48', '2016-09-30 10:50:48');

-- ----------------------------
-- Table structure for `role_menu`
-- ----------------------------
DROP TABLE IF EXISTS `role_menu`;
CREATE TABLE `role_menu` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `role_id` bigint(20) NOT NULL COMMENT '角色ID',
  `menu_id` bigint(20) NOT NULL COMMENT '菜单ID',
  `remark` varchar(255) DEFAULT NULL COMMENT '备注',
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP COMMENT '更新时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=87 DEFAULT CHARSET=utf8 COMMENT='角色拥有的权限';

-- ----------------------------
-- Records of role_menu
-- ----------------------------
INSERT INTO `role_menu` VALUES ('4', '4', '9', null, '2016-09-21 11:03:12', '2016-09-21 11:03:12');
INSERT INTO `role_menu` VALUES ('5', '4', '2', null, '2016-09-21 11:03:13', '2016-09-21 11:03:13');
INSERT INTO `role_menu` VALUES ('68', '5', '15', null, '2016-10-08 16:49:05', '2016-10-08 16:49:05');
INSERT INTO `role_menu` VALUES ('69', '5', '14', null, '2016-10-08 16:49:05', '2016-10-08 16:49:05');
INSERT INTO `role_menu` VALUES ('70', '5', '13', null, '2016-10-08 16:49:06', '2016-10-08 16:49:06');
INSERT INTO `role_menu` VALUES ('71', '1', '16', null, '2016-10-08 16:50:58', '2016-10-08 16:50:58');
INSERT INTO `role_menu` VALUES ('72', '1', '15', null, '2016-10-08 16:50:59', '2016-10-08 16:50:59');
INSERT INTO `role_menu` VALUES ('73', '1', '14', null, '2016-10-08 16:50:59', '2016-10-08 16:50:59');
INSERT INTO `role_menu` VALUES ('74', '1', '13', null, '2016-10-08 16:50:59', '2016-10-08 16:50:59');
INSERT INTO `role_menu` VALUES ('75', '1', '12', null, '2016-10-08 16:50:59', '2016-10-08 16:50:59');
INSERT INTO `role_menu` VALUES ('76', '1', '11', null, '2016-10-08 16:51:00', '2016-10-08 16:51:00');
INSERT INTO `role_menu` VALUES ('77', '1', '10', null, '2016-10-08 16:51:00', '2016-10-08 16:51:00');
INSERT INTO `role_menu` VALUES ('78', '1', '9', null, '2016-10-08 16:51:00', '2016-10-08 16:51:00');
INSERT INTO `role_menu` VALUES ('79', '1', '8', null, '2016-10-08 16:51:01', '2016-10-08 16:51:01');
INSERT INTO `role_menu` VALUES ('80', '1', '7', null, '2016-10-08 16:51:01', '2016-10-08 16:51:01');
INSERT INTO `role_menu` VALUES ('81', '1', '6', null, '2016-10-08 16:51:01', '2016-10-08 16:51:01');
INSERT INTO `role_menu` VALUES ('82', '1', '5', null, '2016-10-08 16:51:01', '2016-10-08 16:51:01');
INSERT INTO `role_menu` VALUES ('83', '1', '4', null, '2016-10-08 16:51:02', '2016-10-08 16:51:02');
INSERT INTO `role_menu` VALUES ('84', '1', '3', null, '2016-10-08 16:51:02', '2016-10-08 16:51:02');
INSERT INTO `role_menu` VALUES ('85', '1', '2', null, '2016-10-08 16:51:02', '2016-10-08 16:51:02');
INSERT INTO `role_menu` VALUES ('86', '1', '1', null, '2016-10-08 16:51:02', '2016-10-08 16:51:02');

-- ----------------------------
-- Table structure for `room`
-- ----------------------------
DROP TABLE IF EXISTS `room`;
CREATE TABLE `room` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id',
  `type` char(30) NOT NULL COMMENT '类型:华邦、拙雅',
  `title` varchar(80) NOT NULL COMMENT '名称',
  `person` int(10) unsigned NOT NULL COMMENT '入住人数',
  `surplus_amount` int(10) unsigned NOT NULL COMMENT '剩余数量',
  `facility` varchar(255) NOT NULL COMMENT '设备设施',
  `price` decimal(11,2) NOT NULL COMMENT '价格',
  `author` varchar(50) NOT NULL COMMENT '作者编辑',
  `keywords` varchar(30) NOT NULL COMMENT '关键词',
  `description` varchar(255) NOT NULL COMMENT '摘要',
  `content` text NOT NULL COMMENT '详细内容',
  `picurl` varchar(100) NOT NULL COMMENT '缩略图片',
  `picarr` text NOT NULL COMMENT '组图',
  `click` int(10) unsigned NOT NULL COMMENT '点击次数',
  `sort` int(10) unsigned NOT NULL COMMENT '排列排序',
  `checkinfo` enum('true','false') NOT NULL COMMENT '审核状态',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COMMENT='客房表';

-- ----------------------------
-- Records of room
-- ----------------------------
INSERT INTO `room` VALUES ('7', '华邦', '超级大房间', '0', '65', 'WiFi 车库', '0.01', '', '123', '123', '<p>22ee</p>', '/data/upload/images/2016/09/05/819ca1fd07f60fb19eadceff06a6d96457dde01e.jpeg', '/data/upload/images/2016/09/05/819ca1fd07f60fb19eadceff06a6d96457dde01e.jpeg', '0', '0', 'true', '2016-09-05 07:41:58', '2016-10-08 14:20:40');
INSERT INTO `room` VALUES ('8', '拙雅', '江景房', '0', '48', 'WiFi 车库', '0.01', '', '江景房', '江景房江景房江景房江景房', '<p>江景房江景房江景房江景房江景房江景房江景房</p>', '/data/upload/images/2016/08/31/772fae78ebc8ca44078dbf9941e7da366a18901b.jpeg', '/data/upload/images/2016/08/31/772fae78ebc8ca44078dbf9941e7da366a18901b.jpeg', '12', '11', 'true', '2016-08-30 01:29:49', '2016-08-31 08:05:02');
INSERT INTO `room` VALUES ('10', '华邦', '单间', '2', '48', 'WiFi 车库', '200.00', '', '单间', '单间单间单间单间单间单间', '<p>单间单间单间单间单间单间单间单间单间单间单间单间单间单间单间单间单间单间单间单间单间单间单间单间单间</p>', '/data/upload/images/2016/08/31/39bbf1061c798dff1cfa0bd3ef6c4a39dcd2c876.jpeg', '/data/upload/images/2016/08/31/39bbf1061c798dff1cfa0bd3ef6c4a39dcd2c876.jpeg', '123', '21', 'true', '2016-08-31 09:29:38', '2016-09-02 01:52:31');
INSERT INTO `room` VALUES ('11', '华邦', '标间', '5', '10', '32', '123.00', '', '213', '123', '<p>123123</p>', '/data/upload/images/2016/08/31/61e01910f6b1112db90e9e0ba7af24eef4bc096c.jpeg', '/data/upload/images/2016/08/31/61e01910f6b1112db90e9e0ba7af24eef4bc096c.jpeg', '213', '123', 'true', '2016-08-31 09:31:21', '2016-09-01 09:56:21');
INSERT INTO `room` VALUES ('12', '华邦', '8折大房', '0', '39', 'WiFi 车库', '500.00', '', '服务项目', '江景房江景房江景房江景房', '<p>江景房江景房江景房江景房江景房江景房江景房江景房江景房江景房江景房江景房江景房江景房江景房江景房江景房江景房江景房江景房江景房江景房江景房江景房</p>', '/data/upload/images/2016/09/21/ca74479dc77947cfcda78d3e664bbb5d4b390138.jpeg', '/data/upload/images/2016/09/21/ca74479dc77947cfcda78d3e664bbb5d4b390138.jpeg', '6', '2', 'true', '2016-09-21 11:22:27', '2016-10-08 14:21:52');
INSERT INTO `room` VALUES ('13', '华邦', '豪华套房', '2', '2', '空调，吹风机，热水器，电热毯', '1000.00', '', '奢华', '房间设施完好房间设施完好房间设施完好房间设施完好', '<p><span style=\"font-size: 16px; color: rgb(165, 165, 165);\"><br style=\"text-align: left;\"/></span></p><p style=\"text-align: left;\"><img src=\"/data/upload/images/2016/10/09/6645333e862dd08c5b272f030461f8b4b0192ef5.jpeg\" style=\"width: 497px; height: 533px;\" title=\"6645333e862dd08c5b272f030461f8b4b0192ef5.jpeg\" width=\"497\" height=\"533\"/></p><p style=\"text-align: left;\">&nbsp;</p><p><span style=\"font-size: 16px; color: rgb(165, 165, 165);\"><br/></span></p><ul class=\"nonBrandedFasList list-paddingleft-2\"><li><p><span style=\"font-size: 16px; color: rgb(165, 165, 165);\">344-807 平方英尺 / 32-75 平米</span></p></li><li><p><span style=\"font-size: 16px; color: rgb(165, 165, 165);\">高楼层位置</span></p></li><li><p><span style=\"font-size: 16px; color: rgb(165, 165, 165);\">欧舒丹卫浴用品</span></p></li><li><p><span style=\"font-size: 16px; color: rgb(165, 165, 165);\">升级设施</span></p></li><li><p><span style=\"font-size: 16px; color: rgb(165, 165, 165);\">行政酒廊特别使用权</span></p></li><li><p><span style=\"font-size: 16px; color: rgb(165, 165, 165);\">浴室放大镜</span></p></li><li><p><span style=\"font-size: 16px; color: rgb(165, 165, 165);\">厚绒浴袍</span></p></li><li><p><span style=\"font-size: 16px; color: rgb(165, 165, 165);\">城市景观</span></p></li></ul><p style=\"text-align: left;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <br style=\"text-align: left;\"/></p><p style=\"text-align: right;\"><br/></p><p><span style=\"font-size: 16px; color: rgb(165, 165, 165);\"><br style=\"text-align: left;\"/></span></p><p style=\"text-align: left;\"><span style=\"font-size: 16px; color: rgb(165, 165, 165);\"><span style=\"font-size: 16px; color: rgb(165, 165, 165);\">行政客房——包括高级、尊贵和豪华客房——利用油画营造出欧式宫廷装饰风格和法式情调，舒适起居区设有装饰壁炉、豪华座椅和咖啡桌，还可观看 42 \r\n英寸纯平高清电视。<br style=\"text-align: left;\"/><br style=\"text-align: left;\"/>宽敞的办公桌和人体工学座椅、双线免提电话、连接面板和高速上网接入令您方便完成工作。您可使用 iPod \r\n基座播放自己喜爱的音乐，并通过咖啡/茶饮机、瓶装水和迷你吧补充体力。<br style=\"text-align: left;\"/><br style=\"text-align: left;\"/>一天结束之余，置身特大或两张双人喜来登特色睡眠体验之床上的全套羽绒被、清爽洁白棉质床单、羽绒枕中，享受一晚安眠。高档大理石浴室中设有浸泡式浴缸、独立玻璃封闭式雨林淋浴间和抽水马桶，令您享受神清气爽的沐浴体验。14 \r\n英寸纯平高清电视、浴袍、拖鞋和豪华欧舒丹卫浴用品令沐浴体验更臻完美。<br style=\"text-align: left;\"/><br style=\"text-align: left;\"/>行政客人还享有喜来登行政酒廊的特别使用权。行政酒廊是一处高档休闲场所，供应早餐、午后小吃和各式饮料选择。您可充分利用行政酒廊的私密氛围与朋友和同事聚会交流，或观看自己最喜爱的电视节目放松身心。这里备有复印机/传真机/打印机和便利的办公用品，供您随意使用。</span></span></p><br style=\"text-align: left;\"/><p id=\"viewStdAmenities\"><br style=\"text-align: left;\"/></p>', '/data/upload/images/2016/10/09/16dee18e90c397cd8af61a3f1f929e571421a87d.jpeg', '/data/upload/images/2016/10/09/16dee18e90c397cd8af61a3f1f929e571421a87d.jpeg,/data/upload/images/2016/10/09/4f8b4957f0e5d37419575fb9a4bae0168a0cd2c1.jpeg,/data/upload/images/2016/10/09/2436d6a35f007f3e41cf68fccaa64d28e72ba914.jpeg,/data/upload/images/2016/10/09/d583656d73dcc37359a3693747ada6268d61fac1.jpeg', '0', '0', 'true', '2016-10-09 17:25:55', '2016-10-09 17:35:50');

-- ----------------------------
-- Table structure for `room_calendar`
-- ----------------------------
DROP TABLE IF EXISTS `room_calendar`;
CREATE TABLE `room_calendar` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id',
  `room_id` int(10) NOT NULL DEFAULT '0' COMMENT '房间id',
  `discount` int(10) NOT NULL DEFAULT '0' COMMENT '折扣',
  `calendar` date NOT NULL DEFAULT '0000-00-00' COMMENT '日期',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `room_id_calendar` (`room_id`,`calendar`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8 COMMENT='客房日历价格表';

-- ----------------------------
-- Records of room_calendar
-- ----------------------------
INSERT INTO `room_calendar` VALUES ('1', '7', '50', '2016-09-20', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `room_calendar` VALUES ('2', '7', '30', '2016-09-21', '2016-09-19 16:46:38', '2016-09-19 16:46:38');
INSERT INTO `room_calendar` VALUES ('3', '7', '30', '2016-09-19', '2016-09-19 16:48:06', '2016-09-19 16:48:06');
INSERT INTO `room_calendar` VALUES ('4', '7', '20', '2016-09-23', '2016-09-19 16:50:15', '2016-09-19 16:50:15');
INSERT INTO `room_calendar` VALUES ('43', '7', '65', '2016-09-24', '2016-09-21 11:04:27', '2016-09-21 11:04:27');
INSERT INTO `room_calendar` VALUES ('44', '7', '65', '2016-09-25', '2016-09-21 11:04:28', '2016-09-21 11:04:28');
INSERT INTO `room_calendar` VALUES ('45', '12', '50', '2016-09-21', '2016-09-21 11:04:28', '2016-09-21 11:04:28');

-- ----------------------------
-- Table structure for `room_comment`
-- ----------------------------
DROP TABLE IF EXISTS `room_comment`;
CREATE TABLE `room_comment` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id',
  `content` varchar(255) NOT NULL COMMENT '评论内容',
  `room_id` int(10) NOT NULL DEFAULT '0' COMMENT '房间id',
  `member_id` int(10) NOT NULL DEFAULT '0' COMMENT '会员id',
  `display` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '显示,2显示，1隐藏',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='评论表';

-- ----------------------------
-- Records of room_comment
-- ----------------------------
INSERT INTO `room_comment` VALUES ('1', '哈哈哈哈哈哈哈哈哈', '7', '33', '2', '2016-09-05 07:18:37', '2016-10-08 15:48:25');
INSERT INTO `room_comment` VALUES ('2', '777777777777777777777777777777', '7', '33', '1', '2016-09-05 07:35:51', '2016-09-30 13:50:31');

-- ----------------------------
-- Table structure for `room_order`
-- ----------------------------
DROP TABLE IF EXISTS `room_order`;
CREATE TABLE `room_order` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id',
  `order_id` int(10) unsigned NOT NULL COMMENT '订单id',
  `member_id` int(10) unsigned NOT NULL,
  `order` varchar(100) NOT NULL COMMENT '订单号',
  `room_id` int(10) unsigned NOT NULL COMMENT '客房id',
  `get_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '入住时间',
  `out_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '退房时间',
  `to_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '最晚到达时间',
  `room_amount` int(10) unsigned NOT NULL COMMENT '客房数量',
  `man_amount` int(10) unsigned NOT NULL COMMENT '成人数量',
  `children_amount` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '儿童数量',
  `bed_amount` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '加床数量',
  `name` varchar(255) NOT NULL COMMENT '姓名',
  `phone` char(11) NOT NULL COMMENT '电话',
  `email` varchar(100) NOT NULL COMMENT '电子邮件',
  `bed_money` decimal(11,2) DEFAULT '0.00' COMMENT '加床费',
  `total_money` decimal(11,2) DEFAULT '0.00' COMMENT '总金额',
  `room_money` decimal(11,2) DEFAULT '0.00' COMMENT '房间费',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `order_id` (`order_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8 COMMENT='客房订单表';

-- ----------------------------
-- Records of room_order
-- ----------------------------
INSERT INTO `room_order` VALUES ('4', '9', '0', '2016082998555051', '8', '2016-08-30 00:00:00', '2016-08-31 00:00:00', '2016-08-30 00:00:00', '1', '2', '0', '0', 'yushen1', '12345698745', '123@qq.com', '0.00', '500.00', '500.00', '2016-08-29 06:55:55', '2016-08-29 06:55:55');
INSERT INTO `room_order` VALUES ('7', '16', '0', '2016082948994952', '7', '2016-08-30 00:00:00', '2016-08-31 00:00:00', '2016-08-30 00:00:00', '1', '2', '0', '0', 'yushen', '98765432167', '123@qq.com', '0.00', '500.00', '500.00', '2016-08-29 07:48:49', '2016-08-29 07:48:49');
INSERT INTO `room_order` VALUES ('8', '17', '0', '2016082910056102', '7', '2016-08-30 00:00:00', '2016-08-31 00:00:00', '2016-08-30 00:00:00', '1', '2', '0', '0', 'yushen', '98765432167', '123@qq.com', '0.00', '500.00', '500.00', '2016-08-29 07:50:37', '2016-08-29 07:50:37');
INSERT INTO `room_order` VALUES ('9', '19', '0', '2016083056995655', '7', '2016-08-31 00:00:00', '2016-09-01 00:00:00', '2016-08-31 00:00:00', '1', '2', '0', '0', 'yushen4', '15845698548', '123456789@qq.com', '0.00', '0.01', '0.01', '2016-08-30 01:43:37', '2016-08-30 01:43:37');
INSERT INTO `room_order` VALUES ('10', '20', '0', '2016083054985497', '7', '2016-08-31 00:00:00', '2016-08-31 00:00:00', '2016-08-31 00:00:00', '1', '2', '0', '0', 'yushen5', '15845698545', '123456789@qq.com', '0.00', '0.01', '0.01', '2016-08-30 01:49:59', '2016-08-30 01:49:59');
INSERT INTO `room_order` VALUES ('11', '21', '0', '2016083097481011', '7', '2016-08-31 00:00:00', '2016-08-31 00:00:00', '2016-08-31 00:00:00', '1', '2', '0', '0', 'yushen5', '98765432167', '123456@qq.com', '0.00', '0.01', '0.01', '2016-08-30 02:24:26', '2016-08-30 02:24:26');
INSERT INTO `room_order` VALUES ('12', '22', '0', '2016083057545157', '7', '2016-08-31 00:00:00', '2016-08-31 00:00:00', '2016-08-31 00:00:00', '1', '2', '0', '0', 'yushen6', '98765432167', '123456@qq.com', '0.00', '0.01', '0.01', '2016-08-30 02:30:33', '2016-08-30 02:30:33');
INSERT INTO `room_order` VALUES ('13', '23', '0', '2016083048559755', '7', '2016-08-31 00:00:00', '2016-08-31 00:00:00', '2016-08-31 00:00:00', '1', '2', '0', '0', 'yushen1', '98765432167', '123456789@qq.com', '0.00', '0.01', '0.01', '2016-08-30 02:45:20', '2016-08-30 02:45:20');
INSERT INTO `room_order` VALUES ('14', '24', '0', '2016083010110156', '7', '2016-08-31 00:00:00', '2016-09-04 00:00:00', '2016-08-31 00:00:00', '1', '2', '0', '0', 'yushen', '98765432167', '123@qq.com', '0.00', '0.04', '0.04', '2016-08-30 03:54:23', '2016-08-30 03:54:23');
INSERT INTO `room_order` VALUES ('15', '28', '0', '2016090155100100', '7', '2016-09-01 00:00:00', '2016-09-21 00:00:00', '2016-10-01 00:00:00', '5', '6', '7', '3', '小龙龙', '18983056777', '', '6000.00', '6001.00', '1.00', '2016-09-01 02:14:01', '2016-09-01 02:14:01');
INSERT INTO `room_order` VALUES ('16', '29', '0', '2016090150511011', '7', '2016-09-01 00:00:00', '2016-09-01 00:00:00', '2016-10-03 00:00:00', '1', '1', '1', '1', '小龙龙', '18983056777', '', '100.00', '100.01', '0.01', '2016-09-01 02:25:55', '2016-09-01 02:25:55');
INSERT INTO `room_order` VALUES ('17', '30', '0', '2016090155100101', '7', '2016-09-01 00:00:00', '2016-09-01 00:00:00', '2016-09-01 00:00:00', '1', '0', '0', '0', '小龙龙', '18983056484', '', '0.00', '0.01', '0.01', '2016-09-01 02:31:36', '2016-09-01 02:31:36');
INSERT INTO `room_order` VALUES ('18', '31', '0', '2016090150515410', '7', '2016-09-01 00:00:00', '2016-09-03 00:00:00', '2016-09-08 00:00:00', '2', '0', '0', '0', 'admin', '18565265245', '', '0.00', '0.04', '0.04', '2016-09-01 02:55:15', '2016-09-01 02:55:15');
INSERT INTO `room_order` VALUES ('19', '32', '0', '2016090150564850', '7', '2016-09-01 00:00:00', '2016-09-01 00:00:00', '2016-09-08 00:00:00', '0', '0', '0', '0', 'admin', '18565265245', '', '0.00', '0.00', '0.00', '2016-09-01 03:38:58', '2016-09-01 03:38:58');
INSERT INTO `room_order` VALUES ('20', '33', '0', '2016090151521025', '7', '2016-09-01 00:00:00', '2016-09-01 00:00:00', '2016-09-06 00:00:00', '1', '0', '0', '0', '小龙龙', '18983056484', '', '0.00', '0.01', '0.01', '2016-09-01 06:07:31', '2016-09-01 06:07:31');
INSERT INTO `room_order` VALUES ('21', '34', '0', '2016090156555448', '7', '2016-09-01 00:00:00', '2016-09-01 00:00:00', '2016-09-05 00:00:00', '1', '0', '0', '0', 'admin', '18565265245', '', '0.00', '0.01', '0.01', '2016-09-01 08:36:40', '2016-09-01 08:36:40');
INSERT INTO `room_order` VALUES ('22', '35', '0', '2016090153575749', '12', '2016-09-01 00:00:00', '2016-09-01 00:00:00', '2016-09-06 00:00:00', '1', '0', '0', '0', '小龙龙', '18983056484', '', '0.00', '400.00', '500.00', '2016-09-01 09:02:13', '2016-09-01 09:02:13');
INSERT INTO `room_order` VALUES ('23', '36', '0', '2016090110210150', '12', '2016-09-01 00:00:00', '2016-09-01 00:00:00', '2016-09-06 00:00:00', '1', '0', '0', '0', '小龙龙', '18983056484', '', '0.00', '360.00', '500.00', '2016-09-01 09:15:44', '2016-09-01 09:15:44');
INSERT INTO `room_order` VALUES ('24', '37', '0', '2016090110010250', '12', '2016-09-01 00:00:00', '2016-09-01 00:00:00', '2016-09-06 00:00:00', '1', '0', '0', '0', '小龙龙', '18983056484', '', '0.00', '400.00', '500.00', '2016-09-01 09:16:14', '2016-09-01 09:16:14');
INSERT INTO `room_order` VALUES ('25', '38', '0', '2016090197555610', '12', '2016-09-01 00:00:00', '2016-09-01 00:00:00', '2016-09-06 00:00:00', '1', '0', '0', '0', '小龙龙', '18983056484', '', '0.00', '360.00', '500.00', '2016-09-01 09:16:26', '2016-09-01 09:16:26');
INSERT INTO `room_order` VALUES ('26', '39', '0', '2016090198971011', '11', '2016-09-01 00:00:00', '2016-09-28 00:00:00', '2016-09-23 00:00:00', '1', '0', '0', '0', '小龙龙', '18565265245', '', '0.00', '3281.00', '3321.00', '2016-09-01 09:56:11', '2016-09-01 09:56:11');
INSERT INTO `room_order` VALUES ('27', '40', '0', '2016090152100505', '11', '2016-09-01 00:00:00', '2016-09-28 00:00:00', '2016-09-23 00:00:00', '1', '0', '0', '0', '小龙龙', '18565265245', '', '0.00', '3281.00', '3321.00', '2016-09-01 09:56:21', '2016-09-01 09:56:21');
INSERT INTO `room_order` VALUES ('28', '41', '0', '2016090210099569', '10', '2016-09-01 00:00:00', '2016-09-02 00:00:00', '2016-09-06 00:00:00', '2', '3', '0', '0', '小龙龙', '18565265245', '', '0.00', '360.00', '400.00', '2016-09-02 01:52:31', '2016-09-02 01:52:31');
INSERT INTO `room_order` VALUES ('29', '42', '0', '2016090210253101', '7', '2016-08-30 00:00:00', '2016-09-02 00:00:00', '2016-08-31 00:00:00', '1', '0', '0', '0', '小龙龙', '18565265245', '', '0.00', '0.03', '0.03', '2016-09-02 02:12:31', '2016-09-02 02:12:31');
INSERT INTO `room_order` VALUES ('30', '43', '0', '2016090257565252', '7', '2016-09-01 00:00:00', '2016-09-09 00:00:00', '2016-09-29 00:00:00', '1', '0', '0', '0', '小龙龙', '18983056484', '', '0.00', '0.08', '0.08', '2016-09-02 02:56:41', '2016-09-02 02:56:41');
INSERT INTO `room_order` VALUES ('31', '56', '0', '2016090253981005', '7', '2016-09-05 00:00:00', '2016-09-10 00:00:00', '2016-09-08 00:00:00', '3', '0', '0', '0', '小龙龙', '18565265245', '', '0.00', '0.15', '0.15', '2016-09-02 06:47:34', '2016-09-02 06:47:34');
INSERT INTO `room_order` VALUES ('32', '67', '0', '2016090556100101', '7', '2016-09-05 00:00:00', '2016-09-06 00:00:00', '2016-09-05 00:00:00', '1', '1', '0', '0', '张宇', '18956485987', '', '0.00', '0.01', '0.01', '2016-09-05 07:26:49', '2016-09-05 07:26:49');
INSERT INTO `room_order` VALUES ('33', '68', '1', '2016090554539754', '7', '2016-09-05 00:00:00', '2016-09-06 00:00:00', '2016-09-05 00:00:00', '1', '1', '0', '0', '张宇', '18956485987', '', '0.00', '0.01', '0.01', '2016-09-05 07:35:50', '2016-09-05 07:35:50');
INSERT INTO `room_order` VALUES ('34', '69', '43', '2016090553101519', '7', '2016-09-05 00:00:00', '2016-09-06 00:00:00', '2016-09-05 00:00:00', '1', '1', '0', '0', '张宇', '18956485987', '', '0.00', '0.01', '0.01', '2016-09-05 07:41:58', '2016-09-05 07:41:58');
INSERT INTO `room_order` VALUES ('35', '72', '44', '2016091910252501', '7', '2016-09-29 00:00:00', '2016-09-30 00:00:00', '2016-09-29 00:00:00', '1', '2', '0', '0', '罗杰', '18696586300', '', '0.00', '0.01', '0.01', '2016-09-19 10:43:27', '2016-09-19 10:43:27');
INSERT INTO `room_order` VALUES ('36', '73', '45', '2016091950100991', '12', '2016-09-24 00:00:00', '2016-09-25 00:00:00', '2016-09-24 00:00:00', '2', '4', '1', '0', 'cc', '123456', '', '0.00', '760.00', '1000.00', '2016-09-19 11:38:43', '2016-09-19 11:38:43');
INSERT INTO `room_order` VALUES ('37', '74', '1', '2016092010010048', '7', '2016-09-28 00:00:00', '2016-09-30 00:00:00', '2016-09-28 00:00:00', '2', '3', '0', '0', 'cc', '123456', '', '0.00', '0.04', '0.04', '2016-09-20 14:50:22', '2016-09-20 14:50:22');
INSERT INTO `room_order` VALUES ('38', '75', '3', '2016092110255979', '12', '2016-09-01 00:00:00', '2016-09-01 00:00:00', '2016-09-01 00:00:00', '1', '1', '0', '0', '小龙龙', '18983056484', '', '0.00', '179.00', '500.00', '2016-09-21 11:19:59', '2016-09-21 11:19:59');
INSERT INTO `room_order` VALUES ('39', '76', '3', '2016092151515598', '12', '2016-09-01 00:00:00', '2016-09-01 00:00:00', '2016-09-01 00:00:00', '1', '1', '0', '0', '小龙龙', '18983056484', '', '0.00', '170.00', '500.00', '2016-09-21 11:22:27', '2016-09-21 11:22:27');
INSERT INTO `room_order` VALUES ('40', '79', '1', '2016092348971014', '7', '2016-09-24 00:00:00', '2016-09-25 00:00:00', '2016-09-24 00:00:00', '1', '1', '0', '0', '小龙龙', '18716628386', '', '0.00', '0.00', '0.01', '2016-09-23 10:21:36', '2016-09-23 10:21:36');
INSERT INTO `room_order` VALUES ('41', '81', '1', '2016092356101995', '7', '2016-09-24 00:00:00', '2016-09-25 00:00:00', '2016-09-24 00:00:00', '1', '1', '0', '0', '小龙龙', '18716628386', '', '0.00', '0.00', '0.01', '2016-09-23 10:23:37', '2016-09-23 10:23:37');
INSERT INTO `room_order` VALUES ('42', '83', '1', '2016092357535497', '12', '2016-09-24 00:00:00', '2016-09-25 00:00:00', '2016-09-24 00:00:00', '1', '1', '0', '0', '小龙龙', '18716628386', '', '0.00', '360.00', '500.00', '2016-09-23 10:31:21', '2016-09-23 10:31:21');
INSERT INTO `room_order` VALUES ('43', '84', '1', '2016092310255561', '7', '2016-09-25 00:00:00', '2016-09-26 00:00:00', '2016-09-25 00:00:00', '1', '1', '0', '0', '呵', '12312312312', '', '0.00', '0.00', '0.01', '2016-09-23 10:32:15', '2016-09-23 10:32:15');
INSERT INTO `room_order` VALUES ('44', '85', '1', '2016092398495155', '7', '2016-09-25 00:00:00', '2016-09-26 00:00:00', '2016-09-25 00:00:00', '1', '1', '0', '0', '呵', '12312312312', '', '0.00', '0.01', '0.01', '2016-09-23 10:38:19', '2016-09-23 10:38:19');
INSERT INTO `room_order` VALUES ('45', '86', '33', '2016100856515553', '7', '2016-10-09 00:00:00', '2016-10-12 00:00:00', '2016-10-04 00:00:00', '1', '1', '0', '0', 'jkl', '18716628386', '', '0.00', '0.03', '0.03', '2016-10-08 14:20:40', '2016-10-08 14:20:40');
INSERT INTO `room_order` VALUES ('46', '87', '33', '2016100810250505', '12', '2016-10-05 00:00:00', '2016-10-15 00:00:00', '2016-09-23 00:00:00', '2', '1', '3', '3', '你那', '18716628386', '', '0.30', '9960.30', '10000.00', '2016-10-08 14:21:51', '2016-10-08 14:21:51');

-- ----------------------------
-- Table structure for `site`
-- ----------------------------
DROP TABLE IF EXISTS `site`;
CREATE TABLE `site` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id',
  `name` varchar(255) NOT NULL COMMENT '设置名称',
  `value` varchar(255) NOT NULL COMMENT '设置值',
  `description` varchar(255) NOT NULL COMMENT '描述',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COMMENT='设置';

-- ----------------------------
-- Records of site
-- ----------------------------
INSERT INTO `site` VALUES ('1', 'children_bed_price', '0.01', '儿童床', '0000-00-00 00:00:00', '2016-09-01 02:31:02');
INSERT INTO `site` VALUES ('2', 'web_name', '酒店管理系统呀', '网站名称', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `site` VALUES ('3', 'web_seo', 'SEO标题', 'seo标题', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `site` VALUES ('4', 'web_keyword', '关键字设置', '关键字', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `site` VALUES ('5', 'web_description', '描述666的', '描述', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `site` VALUES ('6', 'discount', '1', '满减折扣1开启，2关闭', '0000-00-00 00:00:00', '2016-09-01 09:16:21');

-- ----------------------------
-- Table structure for `site_pay`
-- ----------------------------
DROP TABLE IF EXISTS `site_pay`;
CREATE TABLE `site_pay` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id',
  `name` varchar(255) NOT NULL,
  `partner_id` varchar(255) NOT NULL COMMENT '身份者id',
  `seller_id` varchar(255) NOT NULL COMMENT '账号id',
  `key` varchar(255) NOT NULL COMMENT '安全检验码',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '1开启，2关闭',
  `type` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '1--支付宝  2--微信',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COMMENT='支付设置';

-- ----------------------------
-- Records of site_pay
-- ----------------------------
INSERT INTO `site_pay` VALUES ('6', '支付宝', '2088121076274831', '3054647844@qq.com', 'oze2awgqem408h9k06b04wgaw5iou28h', '1', '1', '0000-00-00 00:00:00', '2016-08-18 07:51:07');
