<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `phome_enewsclassadd`;");
E_C("CREATE TABLE `phome_enewsclassadd` (
  `classid` smallint(6) NOT NULL default '0',
  `classtext` mediumtext NOT NULL,
  `ttids` text NOT NULL,
  PRIMARY KEY  (`classid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewsclassadd` values('1','','');");
E_D("replace into `phome_enewsclassadd` values('2','','');");
E_D("replace into `phome_enewsclassadd` values('3','','');");
E_D("replace into `phome_enewsclassadd` values('4','','');");
E_D("replace into `phome_enewsclassadd` values('5','','');");
E_D("replace into `phome_enewsclassadd` values('6','','');");
E_D("replace into `phome_enewsclassadd` values('7','','');");
E_D("replace into `phome_enewsclassadd` values('8','','');");
E_D("replace into `phome_enewsclassadd` values('9','','');");

require("../../inc/footer.php");
?>