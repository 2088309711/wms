# Host: localhost  (Version 5.5.53)
# Date: 2020-02-24 13:22:17
# Generator: MySQL-Front 6.1  (Build 1.15)


#
# Structure for table "categories"
#

DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `type` varchar(20) NOT NULL DEFAULT '' COMMENT '类型',
  `name` varchar(20) NOT NULL DEFAULT '' COMMENT '名称',
  `cost` int(4) NOT NULL DEFAULT '0' COMMENT '是否参与库存成本核算',
  `user` varchar(20) DEFAULT NULL COMMENT '所属用户',
  `create_time` int(11) DEFAULT NULL,
  `update_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC COMMENT='出入库类别';

#
# Data for table "categories"
#

/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'出库','销售出库',0,NULL,NULL,NULL),(2,'出库','生产领料',0,NULL,NULL,NULL),(3,'出库','领用出库',0,NULL,NULL,NULL),(4,'入库','采购入库',1,NULL,NULL,NULL),(5,'入库','生产入库',0,NULL,NULL,NULL),(6,'入库','领料还回',1,NULL,NULL,NULL),(14,'入库','销售退货',1,NULL,NULL,NULL),(16,'323','3213',3213,'111',1581869085,1581869085),(17,'4324','4234',4234,'111',1581869104,1581869104);
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;

#
# Structure for table "check"
#

DROP TABLE IF EXISTS `check`;
CREATE TABLE `check` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `warehouse` varchar(4) DEFAULT NULL COMMENT '仓库',
  `employee` varchar(10) DEFAULT NULL COMMENT '业务员',
  `code` varchar(200) DEFAULT NULL COMMENT '调拨编码',
  `remark` text COMMENT '备注',
  `user` varchar(20) DEFAULT NULL COMMENT '所属用户',
  `create_time` int(11) DEFAULT NULL,
  `update_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC COMMENT='库存盘点';

#
# Data for table "check"
#

/*!40000 ALTER TABLE `check` DISABLE KEYS */;
INSERT INTO `check` VALUES (1,'0000',NULL,NULL,NULL,NULL,NULL,NULL),(2,'0003','213',NULL,NULL,NULL,NULL,NULL),(3,'0002',NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `check` ENABLE KEYS */;

#
# Structure for table "company"
#

DROP TABLE IF EXISTS `company`;
CREATE TABLE `company` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(10) NOT NULL DEFAULT '' COMMENT '单位名称',
  `type` varchar(10) DEFAULT NULL COMMENT '类型（经销商，供应商）',
  `contacts` varchar(100) DEFAULT NULL COMMENT '联系人',
  `phone` varchar(12) DEFAULT NULL COMMENT '电话',
  `fax` varchar(12) DEFAULT NULL COMMENT '传真',
  `email` varchar(20) DEFAULT NULL COMMENT '邮箱',
  `bank` varchar(10) DEFAULT NULL COMMENT '开户行',
  `bankaccount` varchar(20) DEFAULT NULL COMMENT '银行账户',
  `tariff` varchar(20) DEFAULT NULL COMMENT '税号',
  `area` varchar(10) DEFAULT NULL COMMENT '地区（大区）',
  `province` varchar(10) DEFAULT NULL COMMENT '省份',
  `city` varchar(10) DEFAULT NULL COMMENT '城市',
  `address` varchar(50) DEFAULT NULL COMMENT '详细地址',
  `zipcode` varchar(10) DEFAULT NULL COMMENT '邮政编码',
  `remark` text COMMENT '备注',
  `user` varchar(20) DEFAULT NULL COMMENT '所属用户',
  `create_time` int(11) DEFAULT NULL,
  `update_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC COMMENT='往来公司';

#
# Data for table "company"
#

/*!40000 ALTER TABLE `company` DISABLE KEYS */;
INSERT INTO `company` VALUES (1,'','','','','','','','','','','','','','','','111',1581858949,1581858949),(2,'经销商3','经销商','','','','','','','','华南','',NULL,'','',NULL,NULL,NULL,NULL),(3,'供应商3','供应商','','','','','','','','东南','',NULL,'','',NULL,NULL,NULL,NULL),(4,'公司A','经销商','','','','','','','','东北','',NULL,'','',NULL,NULL,NULL,NULL),(5,'供应商2','供应商','','','','','','','','东南','',NULL,'','',NULL,NULL,NULL,NULL),(6,'供应商1','供应商','','','','','','','','东北','',NULL,'','',NULL,NULL,NULL,NULL),(7,'经销商2','经销商','','','','','','','','华南','',NULL,'','',NULL,NULL,NULL,NULL),(8,'经销商1','经销商','','','','','','','','华中','',NULL,'','',NULL,NULL,NULL,NULL),(9,'公司D','经销商','张某','123456','123456','','','','','东北','',NULL,'','',NULL,NULL,NULL,NULL),(10,'公司C','供应商','王某','123456','123456','','','','','华北','',NULL,'','',NULL,NULL,NULL,NULL),(11,'公司B','经销商','李某','123456','123456','123456@123','','','','西北','',NULL,'','',NULL,NULL,NULL,NULL),(12,'3213','3123','312','213','3213','312','213','321','312','2132','123','3213','1312','12321','3123','111',1581859088,1581859088);
/*!40000 ALTER TABLE `company` ENABLE KEYS */;

#
# Structure for table "depart"
#

DROP TABLE IF EXISTS `depart`;
CREATE TABLE `depart` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(10) NOT NULL,
  `major` varchar(20) DEFAULT NULL COMMENT '部门主管',
  `phone` varchar(8) DEFAULT NULL,
  `remark` text COMMENT '备注',
  `user` varchar(20) DEFAULT NULL COMMENT '所属用户',
  `create_time` int(11) DEFAULT NULL,
  `update_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC COMMENT='部门管理';

#
# Data for table "depart"
#

/*!40000 ALTER TABLE `depart` DISABLE KEYS */;
INSERT INTO `depart` VALUES (1,'办公室','王总','88888888',NULL,NULL,NULL,NULL),(2,'市场部','asd','13518aa',NULL,NULL,NULL,NULL),(3,'研发部','asfwaad','351860',NULL,NULL,NULL,NULL),(4,'人力资源部','zang','132xxxxx',NULL,NULL,NULL,NULL),(5,'Preset','None','0',NULL,NULL,NULL,NULL),(6,'3213','321','3213','3123','111',1581871655,0),(7,'345345','435345','435','345345','111',1581871761,1581871761),(8,'435','5435','5346','4534','111',1581871793,1581871793);
/*!40000 ALTER TABLE `depart` ENABLE KEYS */;

#
# Structure for table "employee"
#

DROP TABLE IF EXISTS `employee`;
CREATE TABLE `employee` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(10) NOT NULL,
  `sex` varchar(10) DEFAULT NULL,
  `post` varchar(10) DEFAULT NULL COMMENT '职位',
  `phone` int(11) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `depart` varchar(10) DEFAULT NULL COMMENT '部门',
  `user` varchar(20) DEFAULT NULL COMMENT '所属用户',
  `create_time` int(11) DEFAULT NULL,
  `update_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COMMENT='员工管理';

#
# Data for table "employee"
#

/*!40000 ALTER TABLE `employee` DISABLE KEYS */;
INSERT INTO `employee` VALUES (1,'张三','女','job1',2147483647,'wuhan','研发部',NULL,NULL,NULL),(2,'李四','男','job2',131,'wuhan','研发部',NULL,NULL,NULL),(3,'王五','男','job3',0,'unset','人力资源部',NULL,NULL,NULL),(4,'李四','女','job2',131,'wuhan','研发部',NULL,NULL,NULL),(5,'李四','男','job2',131,'wuhan','研发部',NULL,NULL,NULL),(6,'李四','男','job2',131,'wuhan','研发部',NULL,NULL,NULL),(7,'李四','男','job2',131,'wuhan','研发部',NULL,NULL,NULL),(8,'测试者','男','职位1',2147483647,'暂定','市场部',NULL,NULL,NULL),(9,'测试者','男','职位1',2147483647,'暂定','研发部',NULL,NULL,NULL),(10,'1','男','1',1,'1','办公室',NULL,NULL,NULL),(11,'市场部','女','job4',2147483647,'DEFINED','办公室',NULL,NULL,NULL),(12,'张星','男','None',132,'123','办公室',NULL,NULL,NULL),(13,'None','男','None',0,'None','Preset',NULL,NULL,NULL),(14,'116','1561','561',5616,'1651','561','111',1581782710,1581782710),(15,'3123','323','123',3213,'123','12323','111',1581782909,1581782909),(16,'44324','432','4324',432,'4324','324','111',1581783028,1581783028);
/*!40000 ALTER TABLE `employee` ENABLE KEYS */;

#
# Structure for table "exchange"
#

DROP TABLE IF EXISTS `exchange`;
CREATE TABLE `exchange` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `date` varchar(200) DEFAULT NULL COMMENT '录单日期',
  `employee` varchar(10) DEFAULT NULL COMMENT '业务员',
  `warehouse_from` varchar(4) DEFAULT NULL COMMENT '出自仓库',
  `warehouse_to` varchar(4) DEFAULT NULL COMMENT '存入仓库',
  `code` varchar(200) DEFAULT NULL COMMENT '单据编码',
  `remark` text COMMENT '备注',
  `user` varchar(20) DEFAULT NULL COMMENT '所属用户',
  `create_time` int(11) DEFAULT NULL,
  `update_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC COMMENT='库存调拨';

#
# Data for table "exchange"
#

/*!40000 ALTER TABLE `exchange` DISABLE KEYS */;
INSERT INTO `exchange` VALUES (1,NULL,'mains','0001','0000','0001+500',NULL,NULL,NULL,NULL),(2,NULL,'mains','0001','0000','0001+120',NULL,NULL,NULL,NULL),(3,NULL,'mains','0000','0001','0001+120',NULL,NULL,NULL,NULL),(4,NULL,'mains','0000','0001','0001+120',NULL,NULL,NULL,NULL),(5,NULL,'mains','0000','0001','0001+120',NULL,NULL,NULL,NULL),(6,NULL,'mains','0001','0000','0001+360',NULL,NULL,NULL,NULL),(7,NULL,'mains','0000','0001','0001+120',NULL,NULL,NULL,NULL),(8,NULL,'mains','0001','0000','0001+160',NULL,NULL,NULL,NULL),(9,NULL,'mains','0000','0001','5365+30',NULL,NULL,NULL,NULL),(10,NULL,'mains','0000','0001','5365+30',NULL,NULL,NULL,NULL),(11,NULL,'mains','0000','0001','1008+10',NULL,NULL,NULL,NULL),(12,NULL,'mains','0001','0000','1008+200',NULL,NULL,NULL,NULL),(13,NULL,'mains','0000','0003','1008+90',NULL,NULL,NULL,NULL),(14,NULL,'mains','0000','0001','5365+30',NULL,NULL,NULL,NULL),(15,'213','213123','3213','3213','3123','123','111',1582257156,1582257156),(16,'423','423','423','423','234','423','111',1582257436,1582257436),(17,'756','3453453','5346','746','5435','423','111',1582257449,1582257449),(18,'756','3453453','5346','746','5435','423','111',1582257476,1582257476),(19,'4234','4234','423','4234','4234','4234','111',1582257481,1582257481),(20,'543','534','543','543','5435','534','111',1582257489,1582257489),(21,'4234','4234','4234','423','234','4234','111',1582257831,1582257831),(22,'423','423','423','432','43241111111','4234','111',1582257999,1582257999),(23,'423','423','4234','423','324','4234','111',1582258089,1582258089),(24,'423','423','4234','423','324','4234','111',1582258098,1582258098),(25,'534','543','534','534','5345','5435','111',1582258112,1582258112),(26,'432','54325','423','423','4234','5436456','111',1582258129,1582258129),(27,'43214','3124','3123','3214','3123111','4234','111',1582270006,1582270006),(28,'6345','235443','4234','4235','4234','5345','111',1582270098,1582270098),(29,'42342','4234234','4123','4142','111222333','4234324','111',1582270733,1582270733),(30,'234524','234234','4234','345','4234234','234234','111',1582271040,1582271040),(31,'54353','54235345','4235','4534','4324','25456346','111',1582271152,1582271152),(32,'4234','5234234','4234','534','1242','23424','111',1582389575,1582389575),(33,'5345','5435','534','534','5345','534','111',1582475018,1582475018);
/*!40000 ALTER TABLE `exchange` ENABLE KEYS */;

#
# Structure for table "exchange_data"
#

DROP TABLE IF EXISTS `exchange_data`;
CREATE TABLE `exchange_data` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `product` varchar(255) DEFAULT NULL COMMENT '货品编号',
  `num` int(11) DEFAULT NULL COMMENT '调拨数量',
  `code` varchar(200) DEFAULT NULL COMMENT '单据编码',
  `remark` text COMMENT '备注',
  `user` varchar(20) DEFAULT NULL COMMENT '所属用户',
  `create_time` int(11) DEFAULT NULL,
  `update_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC COMMENT='调拨明细';

#
# Data for table "exchange_data"
#

/*!40000 ALTER TABLE `exchange_data` DISABLE KEYS */;
INSERT INTO `exchange_data` VALUES (1,'1',NULL,'123',NULL,'111',1582269753,1582269753),(2,'3',233,'123',NULL,'111',1582269753,1582474613),(3,'1',32,'111222333',NULL,'111',1582270767,1582474610),(4,'2',NULL,'111222333',NULL,'111',1582270767,1582270767),(5,'3',32,'111222333',NULL,'111',1582270767,1582474610),(6,'4',232,'111222333',NULL,'111',1582270767,1582474612),(7,'2',NULL,'4234234',NULL,'111',1582271048,1582271048),(8,'3',NULL,'4234234',NULL,'111',1582271048,1582271048),(9,'5',NULL,'4234234',NULL,'111',1582271048,1582271048),(10,'6',NULL,'4234234',NULL,'111',1582271048,1582271048),(11,'8',NULL,'4234234',NULL,'111',1582271048,1582271048),(12,'2',NULL,'4324',NULL,'111',1582271168,1582271168),(13,'3',NULL,'4324',NULL,'111',1582271168,1582271168),(14,'4',NULL,'4324',NULL,'111',1582271168,1582271168),(15,'5',NULL,'4324',NULL,'111',1582271168,1582271168),(16,'1',42342,'1242','42342','111',1582389580,1582390697),(17,'2',0,'1242','3个人大哥大法官','111',1582389580,1582390777),(18,'3',0,'1242','754','111',1582389580,1582390742),(19,'4',5435,'5345','54356456','111',1582475026,1582475048),(20,'5',543,'5345','5435645','111',1582475026,1582475047),(21,'6',5435645,'5345','64566456','111',1582475026,1582475049),(22,'7',546,'5345','6456','111',1582475026,1582475045);
/*!40000 ALTER TABLE `exchange_data` ENABLE KEYS */;

#
# Structure for table "inout"
#

DROP TABLE IF EXISTS `inout`;
CREATE TABLE `inout` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `code` varchar(200) DEFAULT NULL COMMENT '单据编码',
  `date` varchar(200) DEFAULT NULL COMMENT '录单日期',
  `type` varchar(4) DEFAULT NULL COMMENT '出入库类型',
  `supplier` varchar(255) DEFAULT NULL COMMENT '交易公司',
  `employee` varchar(10) DEFAULT NULL COMMENT '业务员',
  `warehouse` varchar(200) DEFAULT NULL COMMENT '仓库',
  `remark` text COMMENT '备注',
  `user` varchar(20) DEFAULT NULL COMMENT '所属用户',
  `create_time` int(11) DEFAULT NULL,
  `update_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC COMMENT='出入库';

#
# Data for table "inout"
#

/*!40000 ALTER TABLE `inout` DISABLE KEYS */;
INSERT INTO `inout` VALUES (1,'4234','4234','1','1','4234','1','4324',NULL,1582516985,1582516985),(2,'235345','5345435','1','1','34534','1','543534',NULL,1582517033,1582517033),(3,'54355','345','1','1','645','1','452353','111',1582517084,1582517084),(4,'54355','345','1','1','645','1','452353','111',1582517114,1582517114),(5,'54355','345','1','1','645','1','452353','111',1582517206,1582517206),(6,'4234','4234','0','1','423','1','4234','111',1582517254,1582517254),(7,'4234','4234','0','2','4234','1','4234','111',1582517326,1582517326),(8,'4324','4324','2','0','43','1','4324','111',1582518069,1582518069),(9,'34214','432','1','1','432','1','4324','111',1582519247,1582519247),(10,'41234','423','2','1','4234','1','4234','111',1582519773,1582519773),(11,'111','234234','1','1','4234','1','4234','111',1582519798,1582519798),(12,'4234','4324','1','0','423','1','4324234','111',1582520030,1582520030);
/*!40000 ALTER TABLE `inout` ENABLE KEYS */;

#
# Structure for table "inout_data"
#

DROP TABLE IF EXISTS `inout_data`;
CREATE TABLE `inout_data` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) DEFAULT NULL COMMENT '货品ID',
  `num` int(11) DEFAULT NULL COMMENT '出入库数量',
  `code` varchar(200) DEFAULT NULL COMMENT '单据编码',
  `price` float(10,2) DEFAULT NULL COMMENT '出入库价格',
  `remark` text COMMENT '备注',
  `user` varchar(20) DEFAULT NULL COMMENT '所属用户',
  `create_time` int(11) DEFAULT NULL,
  `update_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC COMMENT='出入库明细';

#
# Data for table "inout_data"
#

/*!40000 ALTER TABLE `inout_data` DISABLE KEYS */;
INSERT INTO `inout_data` VALUES (1,5,312,'4234',3213.00,'423','111',1582517595,1582517927),(2,5,423,'4234',312.00,'312','111',1582517617,1582517927),(3,6,432,'4234',423.00,'321','111',1582517617,1582517928),(4,7,234,'4234',423.00,'234','111',1582517617,1582517929),(5,1,NULL,'34214',NULL,NULL,'111',1582519252,1582519252),(6,2,4324,'34214',NULL,NULL,'111',1582519252,1582519255),(7,3,NULL,'34214',NULL,'4324','111',1582519252,1582519256),(8,4,4324,'34214',NULL,NULL,'111',1582519252,1582519259),(9,5,NULL,'34214',4324.00,NULL,'111',1582519252,1582519255),(10,6,NULL,'34214',NULL,NULL,'111',1582519252,1582519252),(11,7,43,'34214',432.00,NULL,'111',1582519252,1582519258),(12,8,NULL,'34214',NULL,'43','111',1582519252,1582519257),(13,9,NULL,'34214',NULL,NULL,'111',1582519252,1582519252),(14,1,NULL,'111',NULL,NULL,'111',1582519840,1582519840),(15,2,NULL,'111',NULL,NULL,'111',1582519840,1582519840),(16,3,NULL,'111',NULL,NULL,'111',1582519840,1582519840),(17,4,NULL,'111',NULL,NULL,'111',1582519840,1582519840),(18,5,NULL,'111',NULL,NULL,'111',1582519840,1582519840),(19,6,NULL,'111',NULL,NULL,'111',1582519840,1582519840),(20,7,NULL,'111',NULL,NULL,'111',1582519840,1582519840),(21,8,NULL,'111',NULL,NULL,'111',1582519840,1582519840),(22,9,NULL,'111',NULL,NULL,'111',1582519840,1582519840),(23,1,222,'4234',333.00,'444','111',1582520038,1582520115),(24,2,111,'4234',4324.00,'43','111',1582520038,1582520103),(25,3,4324,'4234',4324.00,NULL,'111',1582520038,1582520070),(26,4,NULL,'4234',4234.22,NULL,'111',1582520038,1582520127),(27,5,NULL,'4234',NULL,'4','111',1582520038,1582520072),(28,6,NULL,'4234',NULL,NULL,'111',1582520038,1582520038),(29,7,NULL,'4234',NULL,NULL,'111',1582520038,1582520038),(30,8,NULL,'4234',NULL,NULL,'111',1582520038,1582520038),(31,9,1,'4234',2.00,'3','111',1582520038,1582520150);
/*!40000 ALTER TABLE `inout_data` ENABLE KEYS */;

#
# Structure for table "itemclassify"
#

DROP TABLE IF EXISTS `itemclassify`;
CREATE TABLE `itemclassify` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(10) DEFAULT NULL,
  `parentNode` varchar(50) DEFAULT NULL COMMENT '父节点',
  `node` varchar(50) DEFAULT NULL COMMENT '当前节点',
  `user` varchar(20) DEFAULT NULL COMMENT '所属用户',
  `create_time` int(11) DEFAULT NULL,
  `update_time` int(11) DEFAULT NULL,
  `delete_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=46 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC COMMENT='货品类别';

#
# Data for table "itemclassify"
#

/*!40000 ALTER TABLE `itemclassify` DISABLE KEYS */;
INSERT INTO `itemclassify` VALUES (1,'3','root','15822047293879283224790828','111',1582204729,1582204825,1582204825),(2,'5345','15822047293879283224790828','15822047365285718086767997','111',1582204736,1582204741,NULL),(3,'请命名新类别','root','15822048881282496868381388','111',1582204888,1582204888,NULL),(4,'请命名新类别','root','15822048890868410710574910','111',1582204889,1582204889,NULL),(5,'请命名新类别','root','15822048892546006981171502','111',1582204889,1582204889,NULL),(6,'请命名新类别','root','15822048894236501529659896','111',1582204889,1582204889,NULL),(7,'请命名新类别','root','15822048896142589127712150','111',1582204889,1582204889,NULL),(8,'请命名新类别','root','15822048897984787021430703','111',1582204889,1582204889,NULL),(9,'请命名新类别','root','15822051156033681401940551','111',1582205115,1582205115,NULL),(10,'请命名新类别','root','15822051194840309266906273','111',1582205119,1582205119,NULL),(11,'请命名新类别','root','15822051208822875073669970','111',1582205120,1582205120,NULL),(12,'请命名新类别','15822048881282496868381388','15822051254035725609999208','111',1582205125,1582205125,NULL),(13,'请命名新类别','15822048881282496868381388','15822051288425962623741683','111',1582205128,1582205128,NULL),(14,'请命名新类别','15822051288425962623741683','15822051316192909600609966','111',1582205131,1582205131,NULL),(15,'请命名新类别','15822051316192909600609966','15822051390421390185847788','111',1582205139,1582205139,NULL),(16,'请命名新类别','15822051316192909600609966','15822051400504960801148134','111',1582205140,1582205140,NULL),(17,'请命名新类别','15822051316192909600609966','15822051402177526089461238','111',1582205140,1582205140,NULL),(18,'请命名新类别','15822051316192909600609966','15822051404103332616025360','111',1582205140,1582205140,NULL),(19,'请命名新类别','15822051316192909600609966','15822051406022062679063244','111',1582205140,1582205140,NULL),(20,'请命名新类别','15822051316192909600609966','15822051407854457295936228','111',1582205140,1582205140,NULL),(21,'请命名新类别','15822051316192909600609966','15822051409622327815282781','111',1582205141,1582205141,NULL),(22,'请命名新类别','15822048896142589127712150','15822192462142764517446412','111',1582219246,1582219246,NULL),(23,'请命名新类别','15822048896142589127712150','15822192468459743599195225','111',1582219246,1582219246,NULL),(24,'请命名新类别','15822048896142589127712150','15822192470465294356774943','111',1582219247,1582219247,NULL),(25,'请命名新类别','15822048896142589127712150','15822192472374917690841198','111',1582219247,1582219247,NULL),(26,'请命名新类别','15822048896142589127712150','15822192474378988530701644','111',1582219247,1582219247,NULL),(27,'请命名新类别','15822048896142589127712150','15822192476613433876260969','111',1582219247,1582219247,NULL),(28,'请命名新类别','15822048896142589127712150','15822192478376101391068188','111',1582219247,1582219247,NULL),(29,'请命名新类别','15822192472374917690841198','15822192503823600053894140','111',1582219250,1582219250,NULL),(30,'请命名新类别','15822192472374917690841198','15822192505817533146149283','111',1582219250,1582219250,NULL),(31,'请命名新类别','15822192472374917690841198','15822192507810309066633723','111',1582219250,1582219250,NULL),(32,'请命名新类别','15822192472374917690841198','15822192509737178955749429','111',1582219251,1582219251,NULL),(33,'请命名新类别','15822192472374917690841198','15822192511813381509373985','111',1582219251,1582219251,NULL),(34,'请命名新类别','15822192507810309066633723','15822192539657981868303963','111',1582219254,1582219254,NULL),(35,'请命名新类别','15822192507810309066633723','15822192541498807839870412','111',1582219254,1582219254,NULL),(36,'请命名新类别','15822192507810309066633723','15822192543570028651129750','111',1582219254,1582219254,NULL),(37,'请命名新类别','15822192507810309066633723','15822192545573936292785821','111',1582219254,1582219254,NULL),(38,'请命名新类别','15822192507810309066633723','15822192547491755553228181','111',1582219254,1582219254,NULL),(39,'请命名新类别','15822192543570028651129750','15822192578146195023547144','111',1582219257,1582219257,NULL),(40,'请命名新类别','15822192543570028651129750','15822192580058710717929669','111',1582219258,1582219258,NULL),(41,'请命名新类别','15822192543570028651129750','15822192582059032511211089','111',1582219258,1582219258,NULL),(42,'请命名新类别','15822192580058710717929669','15822192604138770752941625','111',1582219260,1582219260,NULL),(43,'请命名新类别','15822192580058710717929669','15822192606457992015667705','111',1582219260,1582219260,NULL),(44,'请命名新类别','15822192580058710717929669','15822192608363503307225410','111',1582219260,1582219260,NULL),(45,'请命名新类别','15822192580058710717929669','15822192610456116706214901','111',1582219261,1582219261,NULL);
/*!40000 ALTER TABLE `itemclassify` ENABLE KEYS */;

#
# Structure for table "measureunit"
#

DROP TABLE IF EXISTS `measureunit`;
CREATE TABLE `measureunit` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(5) DEFAULT NULL,
  `remark` text COMMENT '备注',
  `user` varchar(20) DEFAULT NULL COMMENT '所属用户',
  `create_time` int(11) DEFAULT NULL,
  `update_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC COMMENT='计量单位';

#
# Data for table "measureunit"
#

/*!40000 ALTER TABLE `measureunit` DISABLE KEYS */;
INSERT INTO `measureunit` VALUES (1,'None','4234',NULL,NULL,NULL),(2,'个',NULL,NULL,NULL,NULL),(3,'把',NULL,NULL,NULL,NULL),(4,'箱',NULL,NULL,NULL,NULL),(5,'台',NULL,NULL,NULL,NULL),(6,'件',NULL,NULL,NULL,NULL),(7,'包',NULL,NULL,NULL,NULL),(8,'3123','3123','111',1581881898,1581881898),(9,'1111','222','111',1581881923,1581881923);
/*!40000 ALTER TABLE `measureunit` ENABLE KEYS */;

#
# Structure for table "product"
#

DROP TABLE IF EXISTS `product`;
CREATE TABLE `product` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `type` varchar(20) NOT NULL DEFAULT '' COMMENT '类别',
  `name` varchar(20) NOT NULL,
  `encode` varchar(20) NOT NULL DEFAULT '' COMMENT '货品编码',
  `barcode` varchar(20) NOT NULL DEFAULT '' COMMENT '条码',
  `size` varchar(20) NOT NULL DEFAULT '' COMMENT '规格',
  `unit` varchar(10) NOT NULL DEFAULT '' COMMENT '计量单位',
  `upperlimit` int(11) NOT NULL DEFAULT '0' COMMENT '库存上限',
  `lowerlimit` int(11) NOT NULL DEFAULT '0' COMMENT '库存下限',
  `inprice` int(4) NOT NULL DEFAULT '0' COMMENT '入库参考价',
  `outprice` int(4) NOT NULL DEFAULT '0' COMMENT '出库参考价',
  `tupian` varchar(100) NOT NULL DEFAULT '' COMMENT '图片',
  `abstract` text NOT NULL COMMENT '简介',
  `remark` text COMMENT '备注',
  `user` varchar(20) DEFAULT NULL COMMENT '所属用户',
  `create_time` int(11) DEFAULT NULL,
  `update_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC COMMENT='货品';

#
# Data for table "product"
#

/*!40000 ALTER TABLE `product` DISABLE KEYS */;
INSERT INTO `product` VALUES (2,'分类C','足球鞋','1002','41645632163532321','dg414','包',8,5,55,82,'','ftgjt是grey和任何',NULL,NULL,NULL,NULL),(4,'分类A','羽绒服','1008','45325365327865','85','把',55,20,50,60,'product/upimages/4.jpg','rtut6ur5y56',NULL,NULL,NULL,NULL),(5,'分类D','手机','1009','45278969869','55','台',200,100,1000,1500,'','ereyrtuy6rtu',NULL,NULL,NULL,NULL),(6,'分类B','rfg','3245','63398698','28','个',20,120,20,22,'','',NULL,NULL,NULL,NULL),(7,'分类B','fgh','5365','535646','55','台',100,80,100,120,'','',NULL,NULL,NULL,NULL),(8,'分类A','货品A','0001','A3S5D4FS5','MODEL A','个',1000,500,5,10,'','',NULL,NULL,NULL,NULL),(9,'分类B','货品B','0002','1354132','MODEL B','个',1000,100,1,3,'','',NULL,NULL,NULL,NULL),(10,'分类C','货品C','0003','1356','MODEL C','把',8000,200,46,66,'','',NULL,NULL,NULL,NULL),(11,'分类D','货品D','0004','123456','MODEL D','件',10000,10,51,111,'','',NULL,NULL,NULL,NULL),(12,'321','32','32','3','321','32',23,32,3,3,'32','32','32','111',1581884057,1581884057),(13,'213','321','321','321','321','321',321,321,321,321,'321','321','321','111',1581884070,1581884070);
/*!40000 ALTER TABLE `product` ENABLE KEYS */;

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
# Structure for table "table_employee"
#

DROP TABLE IF EXISTS `table_employee`;
CREATE TABLE `table_employee` (
  `id` varchar(8) NOT NULL,
  `name` varchar(10) NOT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `job` varchar(10) DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `depart` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`,`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

#
# Data for table "table_employee"
#

/*!40000 ALTER TABLE `table_employee` DISABLE KEYS */;
INSERT INTO `table_employee` VALUES ('13112700','张三','女','job1',2147483647,'wuhan','研发部'),('13112900','李四','男','job2',131,'wuhan','研发部'),('13112901','王五','男','job3',0,'unset','人力资源部'),('13112902','李四','女','job2',131,'wuhan','研发部'),('13112904','李四','男','job2',131,'wuhan','研发部'),('13112906','李四','男','job2',131,'wuhan','研发部'),('13112907','李四','男','job2',131,'wuhan','研发部'),('13113002','测试者','男','职位1',2147483647,'暂定','市场部'),('13113004','测试者','男','职位1',2147483647,'暂定','研发部'),('13120200','1','男','1',1,'1','办公室'),('13120201','市场部','女','job4',2147483647,'DEFINED','办公室'),('13121900','张星','男','None',132,'123','办公室'),('99999999','None','男','None',0,'None','Preset');
/*!40000 ALTER TABLE `table_employee` ENABLE KEYS */;

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
INSERT INTO `table_itemclassify` VALUES ('0000','分类A','|小类1|小类2|小类3|小类4'),('0001','分类B','|小类1|小类2|小类3|小类4'),('0002','分类C','|小类A|小类B|小类C|小类D|小类E');
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
INSERT INTO `table_measureunit` VALUES ('0000','None'),('0001','个'),('0002','把'),('0003','箱'),('0004','台'),('0005','件'),('0006','包');
/*!40000 ALTER TABLE `table_measureunit` ENABLE KEYS */;

#
# Structure for table "table_warehouse"
#

DROP TABLE IF EXISTS `table_warehouse`;
CREATE TABLE `table_warehouse` (
  `id` varchar(4) NOT NULL,
  `name` varchar(10) NOT NULL,
  `fuzeren` varchar(10) DEFAULT NULL,
  `phone` varchar(8) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `remark` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`,`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

#
# Data for table "table_warehouse"
#

/*!40000 ALTER TABLE `table_warehouse` DISABLE KEYS */;
INSERT INTO `table_warehouse` VALUES ('0000','仓库0','张三','12345678','武汉','无'),('0001','仓库1','李四','12345678','',''),('0002','仓库2','王五','12345678','',''),('0003','仓库3','XX','123','','');
/*!40000 ALTER TABLE `table_warehouse` ENABLE KEYS */;

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
INSERT INTO `table_warehouse_0000` VALUES ('0001',1010),('0002',300),('0003',6000),('1008',100),('5365',0);
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
INSERT INTO `table_warehouse_0003` VALUES ('0001',1000),('0002',2000),('0003',3000),('1008',90);
/*!40000 ALTER TABLE `table_warehouse_0003` ENABLE KEYS */;

#
# Structure for table "take_check"
#

DROP TABLE IF EXISTS `take_check`;
CREATE TABLE `take_check` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `date` varchar(200) DEFAULT NULL COMMENT '录单日期',
  `employee` varchar(10) DEFAULT NULL COMMENT '业务员',
  `warehouse` varchar(4) DEFAULT NULL COMMENT '盘点仓库',
  `code` varchar(200) DEFAULT NULL COMMENT '单据编码',
  `remark` text COMMENT '备注',
  `user` varchar(20) DEFAULT NULL COMMENT '所属用户',
  `create_time` int(11) DEFAULT NULL,
  `update_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC COMMENT='库存盘点';

#
# Data for table "take_check"
#

/*!40000 ALTER TABLE `take_check` DISABLE KEYS */;
INSERT INTO `take_check` VALUES (1,'4234','423424','4234','234234','234234','111',1582471718,1582471718),(2,'54435','534','534','534','5435','111',1582475068,1582475068);
/*!40000 ALTER TABLE `take_check` ENABLE KEYS */;

#
# Structure for table "take_check_data"
#

DROP TABLE IF EXISTS `take_check_data`;
CREATE TABLE `take_check_data` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) DEFAULT NULL COMMENT '货品ID',
  `location` varchar(256) DEFAULT NULL COMMENT '位置',
  `code` varchar(200) DEFAULT NULL COMMENT '单据编码',
  `remark` text COMMENT '备注',
  `num` int(11) NOT NULL DEFAULT '0' COMMENT '数量',
  `upperlimit` int(11) NOT NULL DEFAULT '0' COMMENT '仓库上限',
  `lowerlimit` int(11) NOT NULL DEFAULT '0' COMMENT '仓库下限',
  `user` varchar(20) DEFAULT NULL COMMENT '所属用户',
  `create_time` int(11) DEFAULT NULL,
  `update_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC COMMENT='盘点明细';

#
# Data for table "take_check_data"
#

/*!40000 ALTER TABLE `take_check_data` DISABLE KEYS */;
INSERT INTO `take_check_data` VALUES (1,0,'5465456456',NULL,'无',5435000,0,0,NULL,NULL,1582474947),(2,213321,'3213216456',NULL,'321321',2147483647,0,0,'111',1581764179,1582475110),(3,0,'5346545345',NULL,'',2147483647,0,0,NULL,NULL,1582475108),(4,0,'54355345753454566456456',NULL,'',2147483647,0,0,NULL,NULL,1582475107),(5,0,'534553464566456',NULL,'',543666666,0,0,NULL,NULL,1582474930),(6,3213213,'32136456456645',NULL,'4234234',2147483647,0,0,'111',1581764578,1582475110),(7,4332454,'2345435543',NULL,'435345',2147483647,0,0,'111',1581764619,1582475111),(8,0,'645646',NULL,'访问分数帝国时代森岛帆高给第三方',2147483647,0,0,'111',1581765202,1582475126);
/*!40000 ALTER TABLE `take_check_data` ENABLE KEYS */;

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
INSERT INTO `tb_product` VALUES (2,'分类C','3','足球鞋','1002','41645632163532321','dg414','包',8,5,55,82,'','ftgjt是grey和任何','2013-12-14'),(4,'分类A','小类2','羽绒服','1008','45325365327865','85','把',55,20,50,60,'product/upimages/4.jpg','rtut6ur5y56','2013-12-15'),(5,'分类D','分类3','手机','1009','45278969869','55','台',200,100,1000,1500,'','ereyrtuy6rtu','2013-12-15'),(6,'分类B','小类1','rfg','3245','63398698','28','个',20,120,20,22,'','','2013-12-16'),(7,'分类B','','fgh','5365','535646','55','台',100,80,100,120,'','','2013-12-16'),(8,'分类A','小类1','货品A','0001','A3S5D4FS5','MODEL A','个',1000,500,5,10,'','','2013-12-17'),(9,'分类B','小类1','货品B','0002','1354132','MODEL B','个',1000,100,1,3,'','','2013-12-17'),(10,'分类C','2','货品C','0003','1356','MODEL C','把',8000,200,46,66,'','','2013-12-17'),(11,'分类D','分类1','货品D','0004','123456','MODEL D','件',10000,10,51,111,'','','2013-12-17');
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
INSERT INTO `test_inout` VALUES ('13121100','0001',120,12344.45,'13121100','3'),('13121101','0002',222,222.00,'13121100','3'),('13121102','0003',3333,333.00,'13121100','3'),('13121103','0001',120,12344.45,'13121101','3'),('13121104','0002',222,222.00,'13121101','3'),('13121105','0003',3333,333.00,'13121101','3'),('13121106','0001',250,123.00,'13121102','3'),('13121107','0002',200,1222.00,'13121102','3'),('13121108','0003',1111,1231.00,'13121102','3'),('13121109','0001',250,123.00,'13121103','3'),('13121110','0002',200,1222.00,'13121103','3'),('13121111','0003',1111,1231.00,'13121103','3'),('13121112','0001',120,20.00,'13121104','3'),('13121113','0002',144,0.00,'13121104','3'),('13121114','0003',666,0.00,'13121104','3'),('13121115','0001',100,10.00,'13121105','5'),('13121116','0002',200,20.00,'13121105','5'),('13121117','0003',300,30.00,'13121105','5'),('13121118','0004',400,40.00,'13121105','5'),('13121400','0001',500,0.00,'13121400','none'),('13121401','0001',120,0.00,'13121401','none'),('13121402','0001',120,0.00,'13121403','none'),('13121403','0001',120,0.00,'13121404','none'),('13121404','0001',120,0.00,'13121405','none'),('13121405','0001',360,0.00,'13121406','none'),('13121406','0001',160,0.00,'13121407','none'),('13121700','1008',500,50.55,'13121700','4'),('13121800','0001',15,29.99,'13121800','4'),('13121801','5365',90,59.99,'13121800','4'),('13121802','5365',30,0.00,'13121800','none'),('13121803','5365',30,0.00,'13121801','none'),('13121804','1008',200,0.00,'13121802','none'),('13122300','1008',10,0.00,'13122300','none'),('13122301','5365',30,0.00,'13122301','none'),('13122302','1008',90,0.00,'13122302','none'),('13122700','0001',1,1.00,'13122700','4'),('13122701','0001',6,6.00,'13122701','3');
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
INSERT INTO `test_receipt` VALUES ('13121100','2013-12-11','mains','3','0000','0000','none','0001+120+12344.45|0002+222+222|0003+3333+333'),('13121101','2013-12-11','mains','3','0000','0000','none','0001+120+12344.45|0002+222+222|0003+3333+333'),('13121102','2013-12-11','mains','3','0000','0000','','0001+250+123|0002+200+1222|0003+1111+1231'),('13121103','2013-12-11','mains','3','0000','0000','','0001+250+123|0002+200+1222|0003+1111+1231'),('13121104','2013-12-11','mains','3','0000','0000','none','0001+120+20.00|0002+144+0.00|0003+666+0.00'),('13121105','2013-12-11','mains','5','0001','0001','测试','0001+100+10|0002+200+20|0003+300+30|0004+400+40'),('13121400','2013-12-14','mains','4','0000','0001','','0001+500+0.33'),('13121401','2013-12-14','mains','3','0000','0002','','0001+500+1.33'),('13121700','2013-12-17','mains','4','0000','0001','none','1008+500+50.55'),('13121800','2013-12-18','mains','4','0006','0000','none','0001+15+29.99|5365+90+59.99'),('13122700','2013-12-27','mains','4','0006','0000','test','0001+1+1'),('13122701','2013-12-27','mains','3','0000','0000','test','0001+6+6.00');
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
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='顶级用户';

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
  `remark` text COMMENT '备注',
  `phone_principal` varchar(13) DEFAULT NULL COMMENT '负责人电话',
  `user` varchar(20) DEFAULT NULL COMMENT '所属用户',
  `create_time` int(11) DEFAULT NULL,
  `update_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COMMENT='仓库资料';

#
# Data for table "warehouse"
#

/*!40000 ALTER TABLE `warehouse` DISABLE KEYS */;
INSERT INTO `warehouse` VALUES (1,'仓库0','张三','12345678','武汉','无',NULL,NULL,NULL,NULL),(2,'213321','3123','321312','3123213','321321','321321','111',1581764179,1581764179),(3,'仓库1','李四','12345678','','',NULL,NULL,NULL,NULL),(4,'仓库2','王五','12345678','','',NULL,NULL,NULL,NULL),(5,'仓库3','XX','123','','',NULL,NULL,NULL,NULL),(6,'3213213','3213','213123','3213','4234234','3213','111',1581764578,1581764578),(7,'4332454','456','356436546','456345','435345','2345435','111',1581764619,1581764619),(8,'如3如2','仍然2如2如2','如3 仍然','如服务范围分为非','访问分数帝国时代森岛帆高给第三方','乳房','111',1581765202,1581765202);
/*!40000 ALTER TABLE `warehouse` ENABLE KEYS */;

#
# Structure for table "warehouse_data"
#

DROP TABLE IF EXISTS `warehouse_data`;
CREATE TABLE `warehouse_data` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) DEFAULT NULL COMMENT '货品ID',
  `location` varchar(256) DEFAULT NULL COMMENT '位置',
  `remark` text COMMENT '备注',
  `num` int(11) NOT NULL DEFAULT '0' COMMENT '数量',
  `upperlimit` int(11) NOT NULL DEFAULT '0' COMMENT '仓库上限',
  `lowerlimit` int(11) NOT NULL DEFAULT '0' COMMENT '仓库下限',
  `user` varchar(20) DEFAULT NULL COMMENT '所属用户',
  `create_time` int(11) DEFAULT NULL,
  `update_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC COMMENT='仓库存储明细';

#
# Data for table "warehouse_data"
#

/*!40000 ALTER TABLE `warehouse_data` DISABLE KEYS */;
INSERT INTO `warehouse_data` VALUES (1,0,NULL,'无',0,0,0,NULL,NULL,NULL),(2,213321,'321321','321321',0,0,0,'111',1581764179,1581764179),(3,0,NULL,'',0,0,0,NULL,NULL,NULL),(4,0,NULL,'',0,0,0,NULL,NULL,NULL),(5,0,NULL,'',0,0,0,NULL,NULL,NULL),(6,3213213,'3213','4234234',0,0,0,'111',1581764578,1581764578),(7,4332454,'2345435','435345',0,0,0,'111',1581764619,1581764619),(8,0,'乳房','访问分数帝国时代森岛帆高给第三方',0,0,0,'111',1581765202,1581765202);
/*!40000 ALTER TABLE `warehouse_data` ENABLE KEYS */;
