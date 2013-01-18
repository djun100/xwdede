<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `phome_enewstags`;");
E_C("CREATE TABLE `phome_enewstags` (
  `tagid` int(11) NOT NULL auto_increment,
  `tagname` char(20) NOT NULL default '',
  `num` int(11) NOT NULL default '0',
  `isgood` tinyint(1) NOT NULL default '0',
  `cid` smallint(6) NOT NULL default '0',
  PRIMARY KEY  (`tagid`),
  UNIQUE KEY `tagname` (`tagname`),
  KEY `isgood` (`isgood`),
  KEY `cid` (`cid`),
  KEY `num` (`num`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>