<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `phome_enewsuserjs`;");
E_C("CREATE TABLE `phome_enewsuserjs` (
  `jsid` smallint(6) NOT NULL auto_increment,
  `jsname` varchar(60) NOT NULL default '',
  `jssql` text NOT NULL,
  `jstempid` smallint(6) NOT NULL default '0',
  `jsfilename` varchar(120) NOT NULL default '',
  PRIMARY KEY  (`jsid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>