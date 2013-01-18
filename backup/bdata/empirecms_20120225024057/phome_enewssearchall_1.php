<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `phome_enewssearchall`;");
E_C("CREATE TABLE `phome_enewssearchall` (
  `sid` int(11) NOT NULL auto_increment,
  `id` int(11) NOT NULL default '0',
  `classid` smallint(6) NOT NULL default '0',
  `title` text NOT NULL,
  `infotime` int(11) NOT NULL default '0',
  `infotext` mediumtext NOT NULL,
  PRIMARY KEY  (`sid`),
  KEY `id` (`id`,`classid`,`infotime`),
  FULLTEXT KEY `title` (`title`,`infotext`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>