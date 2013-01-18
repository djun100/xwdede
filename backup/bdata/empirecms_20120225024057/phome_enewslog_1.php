<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `phome_enewslog`;");
E_C("CREATE TABLE `phome_enewslog` (
  `loginid` int(11) NOT NULL auto_increment,
  `username` varchar(30) NOT NULL default '',
  `logintime` datetime NOT NULL default '0000-00-00 00:00:00',
  `loginip` varchar(20) NOT NULL default '',
  `status` tinyint(1) NOT NULL default '0',
  `password` varchar(30) NOT NULL default '',
  `loginauth` tinyint(1) NOT NULL default '0',
  PRIMARY KEY  (`loginid`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewslog` values('1','admin','2012-02-24 15:23:57','127.0.0.1','1','','0');");
E_D("replace into `phome_enewslog` values('2','admin','2012-02-24 20:50:12','127.0.0.1','1','','0');");
E_D("replace into `phome_enewslog` values('3','admin','2012-02-24 21:14:14','127.0.0.1','1','','0');");
E_D("replace into `phome_enewslog` values('4','admin','2012-02-24 23:03:24','127.0.0.1','1','','0');");

require("../../inc/footer.php");
?>