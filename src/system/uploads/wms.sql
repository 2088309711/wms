# Host: localhost  (Version 5.5.53)
# Date: 2020-02-15 22:54:03
# Generator: MySQL-Front 6.1  (Build 1.15)


#
# Structure for table "employee"
#

DROP TABLE IF EXISTS `employee`;
CREATE TABLE `employee` (
  `id` varchar(8) NOT NULL,
  `name` varchar(10) NOT NULL,
  `sex` varchar(10) DEFAULT NULL,
  `post` varchar(10) DEFAULT NULL COMMENT '职位',
  `phone` int(11) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `depart` varchar(10) DEFAULT NULL COMMENT '部门',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

#
# Data for table "employee"
#

/*!40000 ALTER TABLE `employee` DISABLE KEYS */;
INSERT INTO `employee` VALUES ('13112700','张三','女','job1',2147483647,'wuhan','研发部'),('13112900','李四','男','job2',131,'wuhan','研发部'),('13112901','王五','男','job3',0,'unset','人力资源部'),('13112902','李四','女','job2',131,'wuhan','研发部'),('13112904','李四','男','job2',131,'wuhan','研发部'),('13112906','李四','男','job2',131,'wuhan','研发部'),('13112907','李四','男','job2',131,'wuhan','研发部'),('13113002','测试者','男','职位1',2147483647,'暂定','市场部'),('13113004','测试者','男','职位1',2147483647,'暂定','研发部'),('13120200','1','男','1',1,'1','办公室'),('13120201','市场部','女','job4',2147483647,'DEFINED','办公室'),('13121900','张星','男','None',132,'123','办公室'),('99999999','None','男','None',0,'None','Preset');
/*!40000 ALTER TABLE `employee` ENABLE KEYS */;

#
# Structure for table "table_company"
#

DROP TABLE IF EXISTS `table_company`;
CREATE TABLE `table_company` (
  `id` varchar(4) NOT NULL,
  `name` varchar(10) NOT NULL,
  `type` varchar(10) DEFAULT NULL,
  `contact` varchar(10) DEFAULT NULL,
  `phone` varchar(12) DEFAULT NULL,
  `fax` varchar(12) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `bank` varchar(10) DEFAULT NULL,
  `bankaccount` varchar(20) DEFAULT NULL,
  `tariff` varchar(20) DEFAULT NULL,
  `area` varchar(10) DEFAULT NULL,
  `province` varchar(10) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `zipcode` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`,`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

#
# Data for table "table_company"
#

/*!40000 ALTER TABLE `table_company` DISABLE KEYS */;
INSERT INTO `table_company` VALUES ('0000','公司A','经销商','','','','','','','','东北','','',''),('0001','公司B','经销商','李某','123456','123456','123456@123','','','','西北','','',''),('0002','公司C','供应商','王某','123456','123456','','','','','华北','','',''),('0003','公司D','经销商','张某','123456','123456','','','','','东北','','',''),('0004','经销商1','经销商','','','','','','','','华中','','',''),('0005','经销商2','经销商','','','','','','','','华南','','',''),('0006','供应商1','供应商','','','','','','','','东北','','',''),('0007','供应商2','供应商','','','','','','','','东南','','',''),('0008','经销商3','经销商','','','','','','','','华南','','',''),('0009','供应商3','供应商','','','','','','','','东南','','','');
/*!40000 ALTER TABLE `table_company` ENABLE KEYS */;

#
# Structure for table "table_depart"
#

DROP TABLE IF EXISTS `table_depart`;
CREATE TABLE `table_depart` (
  `id` varchar(4) NOT NULL,
  `name` varchar(10) NOT NULL,
  `major` varchar(20) DEFAULT NULL,
  `phone` varchar(8) DEFAULT NULL,
  PRIMARY KEY (`id`,`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

#
# Data for table "table_depart"
#

/*!40000 ALTER TABLE `table_depart` DISABLE KEYS */;
INSERT INTO `table_depart` VALUES ('0000','办公室','王总','88888888'),('0001','市场部','asd','13518aa'),('0002','研发部','asfwaad','351860'),('1003','人力资源部','zang','132xxxxx'),('9999','Preset','None','0');
/*!40000 ALTER TABLE `table_depart` ENABLE KEYS */;

#
# Structure for table "table_itemclassify"
#

DROP TABLE IF EXISTS `table_itemclassify`;
CREATE TABLE `table_itemclassify` (
  `id` varchar(4) NOT NULL,
  `name` varchar(10) DEFAULT NULL,
  `lowerclass` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

#
# Data for table "table_itemclassify"
#

/*!40000 ALTER TABLE `table_itemclassify` DISABLE KEYS */;
INSERT INTO `table_itemclassify` VALUES ('0000','分类A','|小类1|小类2|小类3|小类4'),('0001','分类B','|小类1|小类2|小类3|小类4'),('0002','分类3','|123|4|5');
/*!40000 ALTER TABLE `table_itemclassify` ENABLE KEYS */;

#
# Structure for table "table_measureunit"
#

DROP TABLE IF EXISTS `table_measureunit`;
CREATE TABLE `table_measureunit` (
  `id` varchar(4) NOT NULL,
  `name` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

#
# Data for table "table_measureunit"
#

/*!40000 ALTER TABLE `table_measureunit` DISABLE KEYS */;
INSERT INTO `table_measureunit` VALUES ('0001','个'),('0002','把'),('0003','箱'),('0004','台'),('0005','件'),('0006','包');
/*!40000 ALTER TABLE `table_measureunit` ENABLE KEYS */;

#
# Structure for table "table_warehouse_0000"
#

DROP TABLE IF EXISTS `table_warehouse_0000`;
CREATE TABLE `table_warehouse_0000` (
  `id` varchar(8) NOT NULL,
  `num` int(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

#
# Data for table "table_warehouse_0000"
#

/*!40000 ALTER TABLE `table_warehouse_0000` DISABLE KEYS */;
INSERT INTO `table_warehouse_0000` VALUES ('0001',1033),('0002',323),('0003',6288),('1008',100),('5365',0);
/*!40000 ALTER TABLE `table_warehouse_0000` ENABLE KEYS */;

#
# Structure for table "table_warehouse_0001"
#

DROP TABLE IF EXISTS `table_warehouse_0001`;
CREATE TABLE `table_warehouse_0001` (
  `id` varchar(8) NOT NULL,
  `num` int(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

#
# Data for table "table_warehouse_0001"
#

/*!40000 ALTER TABLE `table_warehouse_0001` DISABLE KEYS */;
INSERT INTO `table_warehouse_0001` VALUES ('0001',200),('0002',2000),('0003',3000),('1008',310),('5365',90);
/*!40000 ALTER TABLE `table_warehouse_0001` ENABLE KEYS */;

#
# Structure for table "table_warehouse_0002"
#

DROP TABLE IF EXISTS `table_warehouse_0002`;
CREATE TABLE `table_warehouse_0002` (
  `id` varchar(8) NOT NULL,
  `num` int(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

#
# Data for table "table_warehouse_0002"
#

/*!40000 ALTER TABLE `table_warehouse_0002` DISABLE KEYS */;
INSERT INTO `table_warehouse_0002` VALUES ('0001',500),('0002',2000),('0003',3000);
/*!40000 ALTER TABLE `table_warehouse_0002` ENABLE KEYS */;

#
# Structure for table "table_warehouse_0003"
#

DROP TABLE IF EXISTS `table_warehouse_0003`;
CREATE TABLE `table_warehouse_0003` (
  `id` varchar(8) NOT NULL,
  `num` int(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

#
# Data for table "table_warehouse_0003"
#

/*!40000 ALTER TABLE `table_warehouse_0003` DISABLE KEYS */;
INSERT INTO `table_warehouse_0003` VALUES ('0001',9930),('0002',2000),('0003',6302),('0004',2330),('1008',610);
/*!40000 ALTER TABLE `table_warehouse_0003` ENABLE KEYS */;

#
# Structure for table "tb_admin"
#

DROP TABLE IF EXISTS `tb_admin`;
CREATE TABLE `tb_admin` (
  `id` int(4) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL DEFAULT '',
  `pwd` varchar(50) DEFAULT NULL,
  `authority` varchar(100) DEFAULT NULL,
  `state` int(4) unsigned zerofill DEFAULT NULL,
  PRIMARY KEY (`id`,`name`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

#
# Data for table "tb_admin"
#

/*!40000 ALTER TABLE `tb_admin` DISABLE KEYS */;
INSERT INTO `tb_admin` VALUES (1,'admin','e10adc3949ba59abbe56e057f20f883e','1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1',0001),(2,'华小科','e10adc3949ba59abbe56e057f20f883e','1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1',0001);
/*!40000 ALTER TABLE `tb_admin` ENABLE KEYS */;

#
# Structure for table "tb_inout"
#

DROP TABLE IF EXISTS `tb_inout`;
CREATE TABLE `tb_inout` (
  `id` int(4) unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `cost` int(4) NOT NULL,
  PRIMARY KEY (`id`,`name`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

#
# Data for table "tb_inout"
#

/*!40000 ALTER TABLE `tb_inout` DISABLE KEYS */;
INSERT INTO `tb_inout` VALUES (1,'出库','销售出库',0),(2,'出库','生产领料',0),(3,'出库','领用出库',0),(4,'入库','采购入库',1),(5,'入库','生产入库',0),(6,'入库','领料还回',1),(14,'入库','销售退货',1);
/*!40000 ALTER TABLE `tb_inout` ENABLE KEYS */;

#
# Structure for table "tb_product"
#

DROP TABLE IF EXISTS `tb_product`;
CREATE TABLE `tb_product` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `maintype` varchar(20) NOT NULL,
  `subtype` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `encode` varchar(20) NOT NULL,
  `barcode` varchar(20) NOT NULL,
  `size` varchar(20) NOT NULL,
  `unit` varchar(10) NOT NULL,
  `upperlimit` int(4) NOT NULL,
  `lowerlimit` int(4) NOT NULL,
  `inprice` int(4) NOT NULL,
  `outprice` int(4) NOT NULL,
  `tupian` varchar(100) CHARACTER SET gb2312 COLLATE gb2312_bin NOT NULL,
  `jianjie` mediumtext NOT NULL,
  `addtime` varchar(20) NOT NULL,
  PRIMARY KEY (`id`,`encode`,`barcode`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

#
# Data for table "tb_product"
#

/*!40000 ALTER TABLE `tb_product` DISABLE KEYS */;
INSERT INTO `tb_product` VALUES (4,'分类A','小类2','羽绒服','1008','45325365327865','85','把',55,20,50,60,'product/upimages/4.jpg','rtut6ur5y56','2013-12-15'),(6,'分类B','小类1','rfg','3245','63398698','28','个',20,120,20,22,'','','2013-12-16'),(7,'分类B','','fgh','5365','535646','55','台',100,80,100,120,'','','2013-12-16'),(8,'分类A','小类1','货品A','0001','A3S5D4FS5','MODEL A','个',1000,500,5,10,'','','2013-12-17'),(9,'分类B','小类1','货品B','0002','1354132','MODEL B','个',1000,100,1,3,'','','2013-12-17'),(10,'分类C','2','货品C','0003','1356','MODEL C','把',8000,200,46,66,'','','2013-12-17'),(11,'分类D','分类1','货品D','0004','123456','MODEL D','件',10000,10,51,111,'','','2013-12-17');
/*!40000 ALTER TABLE `tb_product` ENABLE KEYS */;

#
# Structure for table "test_check"
#

DROP TABLE IF EXISTS `test_check`;
CREATE TABLE `test_check` (
  `id` varchar(8) NOT NULL,
  `date` varchar(10) DEFAULT NULL,
  `yewuyuan` varchar(10) DEFAULT NULL,
  `warehouse` varchar(4) DEFAULT NULL,
  `remark` varchar(100) DEFAULT NULL,
  `itemstring` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

#
# Data for table "test_check"
#

/*!40000 ALTER TABLE `test_check` DISABLE KEYS */;
INSERT INTO `test_check` VALUES ('13121400','2013-12-14','mains','0000','none','0001+1000+1000|0002+300+300|0003+6000+6000'),('13121401','2013-12-14','mains','0003','test','0001+1000+1000|0002+2000+2000|0003+3000+2000'),('13122300','2013-12-23','mains','0002','','0001+500+500|0002+2000+2000|0003+3000+3000');
/*!40000 ALTER TABLE `test_check` ENABLE KEYS */;

#
# Structure for table "test_exchange"
#

DROP TABLE IF EXISTS `test_exchange`;
CREATE TABLE `test_exchange` (
  `id` varchar(8) NOT NULL,
  `date` varchar(10) DEFAULT NULL,
  `yewuyuan` varchar(10) DEFAULT NULL,
  `type` varchar(4) DEFAULT NULL,
  `warehouse` varchar(4) DEFAULT NULL,
  `warehouse2` varchar(4) DEFAULT NULL,
  `remark` varchar(100) DEFAULT NULL,
  `itemstring` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

#
# Data for table "test_exchange"
#

/*!40000 ALTER TABLE `test_exchange` DISABLE KEYS */;
INSERT INTO `test_exchange` VALUES ('13121400','2013-12-14','mains','none','0001','0000','none','0001+500'),('13121401','2013-12-14','mains','none','0001','0000','none','0001+120'),('13121402','2013-12-14','mains','none','0000','0001','none','0001+120'),('13121403','2013-12-14','mains','none','0000','0001','none','0001+120'),('13121404','2013-12-14','mains','none','0000','0001','none','0001+120'),('13121405','2013-12-14','mains','none','0000','0001','none','0001+120'),('13121406','2013-12-14','mains','none','0001','0000','test','0001+360'),('13121407','2013-12-14','mains','none','0001','0000','test','0001+160'),('13121800','2013-12-18','mains','none','0000','0001','','5365+30'),('13121801','2013-12-18','mains','none','0000','0001','','5365+30'),('13121802','2013-12-18','mains','none','0001','0000','test','1008+200'),('13122300','2013-12-23','mains','none','0000','0001','','1008+10'),('13122301','2013-12-23','mains','none','0000','0001','','5365+30'),('13122302','2013-12-23','mains','none','0000','0003','','1008+90');
/*!40000 ALTER TABLE `test_exchange` ENABLE KEYS */;

#
# Structure for table "test_inout"
#

DROP TABLE IF EXISTS `test_inout`;
CREATE TABLE `test_inout` (
  `id` varchar(8) NOT NULL,
  `item` varchar(4) DEFAULT NULL,
  `num` int(4) DEFAULT NULL,
  `price` float(8,2) DEFAULT NULL,
  `receipt` varchar(8) DEFAULT NULL,
  `type` varchar(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

#
# Data for table "test_inout"
#

/*!40000 ALTER TABLE `test_inout` DISABLE KEYS */;
INSERT INTO `test_inout` VALUES ('13121100','0001',120,12344.45,'13121100','3'),('13121101','0002',222,222.00,'13121100','3'),('13121102','0003',3333,333.00,'13121100','3'),('13121103','0001',120,12344.45,'13121101','3'),('13121104','0002',222,222.00,'13121101','3'),('13121105','0003',3333,333.00,'13121101','3'),('13121106','0001',250,123.00,'13121102','3'),('13121107','0002',200,1222.00,'13121102','3'),('13121108','0003',1111,1231.00,'13121102','3'),('13121109','0001',250,123.00,'13121103','3'),('13121110','0002',200,1222.00,'13121103','3'),('13121111','0003',1111,1231.00,'13121103','3'),('13121112','0001',120,20.00,'13121104','3'),('13121113','0002',144,0.00,'13121104','3'),('13121114','0003',666,0.00,'13121104','3'),('13121115','0001',100,10.00,'13121105','5'),('13121116','0002',200,20.00,'13121105','5'),('13121117','0003',300,30.00,'13121105','5'),('13121118','0004',400,40.00,'13121105','5'),('13121400','0001',500,0.00,'13121400','none'),('13121401','0001',120,0.00,'13121401','none'),('13121402','0001',120,0.00,'13121403','none'),('13121403','0001',120,0.00,'13121404','none'),('13121404','0001',120,0.00,'13121405','none'),('13121405','0001',360,0.00,'13121406','none'),('13121406','0001',160,0.00,'13121407','none'),('13121700','1008',500,50.55,'13121700','4'),('13121800','0001',15,29.99,'13121800','4'),('13121801','5365',90,59.99,'13121800','4'),('13121802','5365',30,0.00,'13121800','none'),('13121803','5365',30,0.00,'13121801','none'),('13121804','1008',200,0.00,'13121802','none'),('13122300','1008',10,0.00,'13122300','none'),('13122301','5365',30,0.00,'13122301','none'),('13122302','1008',90,0.00,'13122302','none'),('13122700','0001',1,1.00,'13122700','4'),('13122701','0001',6,6.00,'13122701','3'),('20021200','0003',288,62.00,'20021200','5'),('20021500','1008',520,1314.00,'20021500','5'),('20021501','0003',1651,1561.00,'20021501','5'),('20021502','0004',1165,41651.00,'20021501','5'),('20021503','0001',4465,321.00,'20021501','5'),('20021504','0003',1651,1561.00,'20021502','5'),('20021505','0004',1165,41651.00,'20021502','5'),('20021506','0001',4465,321.00,'20021502','5'),('20021507','0002',23,23.00,'20021503','5'),('20021508','0001',23,43.00,'20021503','5');
/*!40000 ALTER TABLE `test_inout` ENABLE KEYS */;

#
# Structure for table "test_receipt"
#

DROP TABLE IF EXISTS `test_receipt`;
CREATE TABLE `test_receipt` (
  `id` varchar(8) NOT NULL,
  `date` date DEFAULT NULL,
  `yewuyuan` varchar(10) DEFAULT NULL,
  `type` varchar(4) DEFAULT NULL,
  `company` varchar(4) DEFAULT NULL,
  `warehouse` varchar(4) DEFAULT NULL,
  `remark` varchar(100) DEFAULT NULL,
  `itemstring` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

#
# Data for table "test_receipt"
#

/*!40000 ALTER TABLE `test_receipt` DISABLE KEYS */;
INSERT INTO `test_receipt` VALUES ('13121100','2013-12-11','mains','3','0000','0000','none','0001+120+12344.45|0002+222+222|0003+3333+333'),('13121101','2013-12-11','mains','3','0000','0000','none','0001+120+12344.45|0002+222+222|0003+3333+333'),('13121102','2013-12-11','mains','3','0000','0000','','0001+250+123|0002+200+1222|0003+1111+1231'),('13121103','2013-12-11','mains','3','0000','0000','','0001+250+123|0002+200+1222|0003+1111+1231'),('13121104','2013-12-11','mains','3','0000','0000','none','0001+120+20.00|0002+144+0.00|0003+666+0.00'),('13121105','2013-12-11','mains','5','0001','0001','测试','0001+100+10|0002+200+20|0003+300+30|0004+400+40'),('13121400','2013-12-14','mains','4','0000','0001','','0001+500+0.33'),('13121401','2013-12-14','mains','3','0000','0002','','0001+500+1.33'),('13121700','2013-12-17','mains','4','0000','0001','none','1008+500+50.55'),('13121800','2013-12-18','mains','4','0006','0000','none','0001+15+29.99|5365+90+59.99'),('13122700','2013-12-27','mains','4','0006','0000','test','0001+1+1'),('13122701','2013-12-27','mains','3','0000','0000','test','0001+6+6.00'),('20021200','2020-02-12','0263','5','0006','0000','','0003+288+62'),('20021500','2020-02-15','156165','5','0002','0003','','1008+520+1314'),('20021501','2020-02-15','156165','5','0002','0003','31233','0003+1651+1561|0004+1165+41651|0001+4465+321'),('20021502','2020-02-15','156165','5','0002','0003','31233','0003+1651+1561|0004+1165+41651|0001+4465+321'),('20021503','2020-02-15','1561','5','0006','0000','32131231243aaaaa啊啊啊啊','0002+23+23|0001+23+43');
/*!40000 ALTER TABLE `test_receipt` ENABLE KEYS */;

#
# Structure for table "user"
#

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `create_time` int(11) DEFAULT NULL,
  `update_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id`),
  UNIQUE KEY `user_name` (`user_name`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='顶级用户';

#
# Data for table "user"
#

/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'111','1f43e2fc6f630a9d7d77accd192a269d1c3e74eb',1581759370,1581759370);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

#
# Structure for table "warehouse"
#

DROP TABLE IF EXISTS `warehouse`;
CREATE TABLE `warehouse` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(10) NOT NULL DEFAULT '' COMMENT '仓库名称',
  `principal` varchar(10) DEFAULT NULL COMMENT '负责人',
  `phone` varchar(13) DEFAULT NULL COMMENT '仓库电话',
  `address` varchar(50) DEFAULT NULL COMMENT '仓库地址',
  `remark` varchar(50) DEFAULT NULL COMMENT '备注',
  `phone_principal` varchar(13) DEFAULT NULL COMMENT '负责人电话',
  `user` varchar(20) DEFAULT NULL COMMENT '所属用户',
  `create_time` int(11) DEFAULT NULL,
  `update_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COMMENT='记录所有仓库的相关信息';

#
# Data for table "warehouse"
#

/*!40000 ALTER TABLE `warehouse` DISABLE KEYS */;
INSERT INTO `warehouse` VALUES (1,'仓库0','张三','12345678','武汉','无',NULL,NULL,NULL,NULL),(2,'213321','3123','321312','3123213','321321','321321','111',1581764179,1581764179),(3,'仓库1','李四','12345678','','',NULL,NULL,NULL,NULL),(4,'仓库2','王五','12345678','','',NULL,NULL,NULL,NULL),(5,'仓库3','XX','123','','',NULL,NULL,NULL,NULL),(6,'3213213','3213','213123','3213','4234234','3213','111',1581764578,1581764578),(7,'4332454','456','356436546','456345','435345','2345435','111',1581764619,1581764619),(8,'如3如2','仍然2如2如2','如3 仍然','如服务范围分为非','访问分数帝国时代森岛帆高给第三方','乳房','111',1581765202,1581765202);
/*!40000 ALTER TABLE `warehouse` ENABLE KEYS */;
