<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `phome_enewsclass`;");
E_C("CREATE TABLE `phome_enewsclass` (
  `classid` smallint(6) NOT NULL auto_increment,
  `bclassid` smallint(6) NOT NULL default '0',
  `classname` varchar(50) NOT NULL default '',
  `sonclass` text NOT NULL,
  `is_zt` tinyint(1) NOT NULL default '0',
  `lencord` smallint(6) NOT NULL default '0',
  `link_num` tinyint(4) NOT NULL default '0',
  `newstempid` smallint(6) NOT NULL default '0',
  `onclick` int(11) NOT NULL default '0',
  `listtempid` smallint(6) NOT NULL default '0',
  `featherclass` text NOT NULL,
  `islast` tinyint(1) NOT NULL default '0',
  `classpath` text NOT NULL,
  `classtype` varchar(10) NOT NULL default '',
  `newspath` varchar(20) NOT NULL default '',
  `filename` tinyint(1) NOT NULL default '0',
  `filetype` varchar(10) NOT NULL default '',
  `openpl` tinyint(1) NOT NULL default '0',
  `openadd` tinyint(1) NOT NULL default '0',
  `newline` int(11) NOT NULL default '0',
  `hotline` int(11) NOT NULL default '0',
  `goodline` int(11) NOT NULL default '0',
  `classurl` varchar(200) NOT NULL default '',
  `groupid` smallint(6) NOT NULL default '0',
  `myorder` smallint(6) NOT NULL default '0',
  `filename_qz` varchar(20) NOT NULL default '',
  `hotplline` tinyint(4) NOT NULL default '0',
  `modid` smallint(6) NOT NULL default '0',
  `checked` tinyint(1) NOT NULL default '0',
  `firstline` tinyint(4) NOT NULL default '0',
  `bname` varchar(50) NOT NULL default '',
  `islist` tinyint(1) NOT NULL default '0',
  `searchtempid` smallint(6) NOT NULL default '0',
  `tid` smallint(6) NOT NULL default '0',
  `tbname` varchar(60) NOT NULL default '',
  `maxnum` int(11) NOT NULL default '0',
  `checkpl` tinyint(1) NOT NULL default '0',
  `down_num` tinyint(4) NOT NULL default '0',
  `online_num` tinyint(4) NOT NULL default '0',
  `listorder` varchar(50) NOT NULL default '',
  `reorder` varchar(50) NOT NULL default '',
  `intro` text NOT NULL,
  `classimg` varchar(255) NOT NULL default '',
  `jstempid` smallint(6) NOT NULL default '0',
  `addinfofen` int(11) NOT NULL default '0',
  `listdt` tinyint(1) NOT NULL default '0',
  `showclass` tinyint(1) NOT NULL default '0',
  `showdt` tinyint(1) NOT NULL default '0',
  `checkqadd` tinyint(1) NOT NULL default '0',
  `qaddlist` tinyint(1) NOT NULL default '0',
  `qaddgroupid` text NOT NULL,
  `qaddshowkey` tinyint(1) NOT NULL default '0',
  `adminqinfo` tinyint(1) NOT NULL default '0',
  `doctime` smallint(6) NOT NULL default '0',
  `classpagekey` varchar(255) NOT NULL default '',
  `dtlisttempid` smallint(6) NOT NULL default '0',
  `classtempid` smallint(6) NOT NULL default '0',
  `nreclass` tinyint(1) NOT NULL default '0',
  `nreinfo` tinyint(1) NOT NULL default '0',
  `nrejs` tinyint(1) NOT NULL default '0',
  `nottobq` tinyint(1) NOT NULL default '0',
  `ipath` varchar(255) NOT NULL default '',
  `addreinfo` tinyint(1) NOT NULL default '0',
  `haddlist` tinyint(4) NOT NULL default '0',
  `sametitle` tinyint(1) NOT NULL default '0',
  `definfovoteid` smallint(6) NOT NULL default '0',
  `wburl` varchar(255) NOT NULL default '',
  `qeditchecked` tinyint(1) NOT NULL default '0',
  `wapstyleid` smallint(6) NOT NULL default '0',
  `repreinfo` tinyint(1) NOT NULL default '0',
  `pltempid` smallint(6) NOT NULL default '0',
  `cgroupid` text NOT NULL,
  `yhid` smallint(6) NOT NULL default '0',
  `wfid` smallint(6) NOT NULL default '0',
  `cgtoinfo` tinyint(1) NOT NULL default '0',
  `bdinfoid` varchar(25) NOT NULL default '',
  PRIMARY KEY  (`classid`),
  KEY `bclassid` (`bclassid`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewsclass` values('1','0','公司简介','','0','25','10','10','0','1','','1','about','.html','','0','.html','0','0','10','10','10','','0','0','','10','1','1','10','公司简介','0','0','1','news','0','0','2','2','id DESC','newstime DESC','','/d/file/p/2012-02-24/4ca91d768f3e46e87e6c6cf7116b1a4e.jpg','1','0','0','0','0','0','0','','0','0','0','','1','1','1','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','');");
E_D("replace into `phome_enewsclass` values('2','0','业务介绍','','0','25','10','11','0','1','','1','yw','.html','','0','.html','0','0','10','10','10','','0','0','','10','1','1','10','业务介绍','0','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','1','1','1','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','');");
E_D("replace into `phome_enewsclass` values('3','0','典型案例','|8|9|','0','25','10','1','0','12','','0','case','.html','Y-m-d','0','.html','0','0','10','10','10','','0','0','','10','1','1','10','典型案例','1','0','1','news','0','0','2','2','id DESC','newstime DESC','','/d/file/p/2012-02-24/272d429fd3bce144398644c9f262fabe.jpg','1','0','0','0','0','0','0','','0','0','0','','12','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','');");
E_D("replace into `phome_enewsclass` values('4','0','技术交流','|6|7|','0','10','10','0','0','9','','0','article','.html','Y-m-d','0','.html','0','0','10','10','10','','0','0','','10','1','1','10','技术交流','1','0','1','news','0','0','2','2','id DESC','newstime DESC','','/d/file/p/2012-02-24/a0e8d159a114fd867e043443ceaa3980.jpg','1','0','0','0','0','0','0','','0','0','0','','9','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','');");
E_D("replace into `phome_enewsclass` values('5','0','联系我们','','0','25','10','1','0','1','','1','contact','.html','','0','.html','0','0','10','10','10','','0','0','','10','1','1','10','联系我们','0','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','1','1','1','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','');");
E_D("replace into `phome_enewsclass` values('6','4','技术文档','','0','10','10','1','0','10','|4|','1','wd','.html','Y-m-d','0','.html','0','0','10','10','10','','0','0','','10','1','1','10','技术文档','0','0','1','news','0','0','2','2','id DESC','newstime DESC','','/d/file/p/2012-02-24/a0e8d159a114fd867e043443ceaa3980.jpg','1','0','0','0','0','0','0','','0','0','0','','9','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','');");
E_D("replace into `phome_enewsclass` values('7','4','下载中心','','0','25','10','2','0','2','|4|','1','soft','.html','Y-m-d','0','.html','0','0','10','10','10','','0','0','','10','2','1','10','下载中心','0','0','2','download','0','0','2','2','id DESC','newstime DESC','','/d/file/p/2012-02-24/6b9d8cd2ae70fb395bdff2980502487d.jpg','1','0','0','0','0','0','0','','0','0','0','','2','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','');");
E_D("replace into `phome_enewsclass` values('8','3','长螺旋施工工艺','','0','25','10','12','0','11','|3|','1','one','.html','Y-m-d','0','.html','0','0','10','10','10','','0','0','','10','1','1','10','长螺旋施工工艺','0','0','1','news','0','0','2','2','id DESC','newstime DESC','','/d/file/p/2012-02-24/272d429fd3bce144398644c9f262fabe.jpg','1','0','0','0','0','0','0','','0','0','0','','11','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','');");
E_D("replace into `phome_enewsclass` values('9','3','长螺旋支盘桩工艺','','0','25','10','12','0','11','|3|','1','two','.html','Y-m-d','0','.html','0','0','10','10','10','','0','0','','10','1','1','10','长螺旋支盘桩工艺','0','0','1','news','0','0','2','2','id DESC','newstime DESC','','/d/file/p/2012-02-24/272d429fd3bce144398644c9f262fabe.jpg','1','0','0','0','0','0','0','','0','0','0','','11','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','');");

require("../../inc/footer.php");
?>