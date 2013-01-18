<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `phome_enewstempgroup`;");
E_C("CREATE TABLE `phome_enewstempgroup` (
  `gid` smallint(6) NOT NULL auto_increment,
  `gname` varchar(60) NOT NULL default '',
  `isdefault` tinyint(1) NOT NULL default '0',
  PRIMARY KEY  (`gid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewstempgroup` values('1','默认模板组','1');");

require("../../inc/footer.php");
?>