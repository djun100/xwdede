<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `phome_enewsworkflow`;");
E_C("CREATE TABLE `phome_enewsworkflow` (
  `wfid` smallint(6) NOT NULL auto_increment,
  `wfname` varchar(60) NOT NULL default '',
  `wftext` varchar(255) NOT NULL default '',
  `myorder` smallint(6) NOT NULL default '0',
  `addtime` int(11) NOT NULL default '0',
  `adduser` varchar(30) NOT NULL default '',
  PRIMARY KEY  (`wfid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>