<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `phome_enewsbuygroup`;");
E_C("CREATE TABLE `phome_enewsbuygroup` (
  `id` smallint(6) NOT NULL auto_increment,
  `gname` varchar(255) NOT NULL default '',
  `gmoney` int(11) NOT NULL default '0',
  `gfen` int(11) NOT NULL default '0',
  `gdate` int(11) NOT NULL default '0',
  `ggroupid` smallint(6) NOT NULL default '0',
  `gzgroupid` smallint(6) NOT NULL default '0',
  `buygroupid` smallint(6) NOT NULL default '0',
  `gsay` text NOT NULL,
  `myorder` smallint(6) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>