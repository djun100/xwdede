<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `phome_enewsfile`;");
E_C("CREATE TABLE `phome_enewsfile` (
  `fileid` int(11) NOT NULL auto_increment,
  `filename` varchar(60) NOT NULL default '',
  `filesize` int(11) NOT NULL default '0',
  `path` varchar(20) NOT NULL default '',
  `adduser` varchar(30) NOT NULL default '',
  `filetime` datetime NOT NULL default '0000-00-00 00:00:00',
  `classid` smallint(6) NOT NULL default '0',
  `no` varchar(60) NOT NULL default '',
  `type` tinyint(4) NOT NULL default '0',
  `onclick` int(11) NOT NULL default '0',
  `id` bigint(20) NOT NULL default '0',
  `cjid` bigint(20) NOT NULL default '0',
  `fpath` tinyint(1) NOT NULL default '0',
  PRIMARY KEY  (`fileid`),
  KEY `id` (`id`),
  KEY `type` (`type`),
  KEY `classid` (`classid`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewsfile` values('1','4ca91d768f3e46e87e6c6cf7116b1a4e.jpg','162242','2012-02-24','admin','2012-02-24 16:24:41','0','b1.jpg','1','0','0','0','0');");
E_D("replace into `phome_enewsfile` values('2','0ec75f3b3bd2c24e88bcca2feaf39953.jpg','309346','2012-02-24','admin','2012-02-24 16:35:46','2','20111113234747_3.jpg','1','0','7','0','0');");
E_D("replace into `phome_enewsfile` values('3','a0e8d159a114fd867e043443ceaa3980.jpg','43917','2012-02-24','admin','2012-02-24 16:41:36','0','b3.jpg','1','0','0','0','0');");
E_D("replace into `phome_enewsfile` values('4','6b9d8cd2ae70fb395bdff2980502487d.jpg','41737','2012-02-24','admin','2012-02-24 16:41:56','0','b4.jpg','1','0','0','0','0');");
E_D("replace into `phome_enewsfile` values('5','adcd7a24e934dc2091c9ef3ab11a020a.jpg','275667','2012-02-24','admin','2012-02-24 16:56:56','0','20111113234747_3.jpg','1','0','0','0','0');");
E_D("replace into `phome_enewsfile` values('6','272d429fd3bce144398644c9f262fabe.jpg','72072','2012-02-24','admin','2012-02-24 16:58:02','0','b2.jpg','1','0','0','0','0');");
E_D("replace into `phome_enewsfile` values('7','5e4474d62710c257b9d1313e1739297d.jpg','259303','2012-02-24','admin','2012-02-24 16:58:58','8','index.jpg','1','0','8','0','0');");
E_D("replace into `phome_enewsfile` values('8','5bb5e929324bc4bfbc7164bc4f695bb2.jpg','136356','2012-02-24','admin','2012-02-24 21:44:20','5','b5.jpg','1','0','40','0','0');");

require("../../inc/footer.php");
?>