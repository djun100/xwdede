<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `phome_enewssp_2`;");
E_C("CREATE TABLE `phome_enewssp_2` (
  `sid` int(11) NOT NULL auto_increment,
  `spid` smallint(6) NOT NULL default '0',
  `classid` smallint(6) NOT NULL default '0',
  `id` int(11) NOT NULL default '0',
  `newstime` int(10) NOT NULL default '0',
  PRIMARY KEY  (`sid`),
  KEY `spid` (`spid`),
  KEY `newstime` (`newstime`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>