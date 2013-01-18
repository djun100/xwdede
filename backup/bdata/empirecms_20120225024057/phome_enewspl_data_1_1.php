<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `phome_enewspl_data_1`;");
E_C("CREATE TABLE `phome_enewspl_data_1` (
  `plid` int(11) NOT NULL auto_increment,
  `classid` smallint(6) NOT NULL default '0',
  `id` int(11) NOT NULL default '0',
  `saytext` text NOT NULL,
  PRIMARY KEY  (`plid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>