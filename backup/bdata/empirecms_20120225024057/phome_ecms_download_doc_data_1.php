<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `phome_ecms_download_doc_data`;");
E_C("CREATE TABLE `phome_ecms_download_doc_data` (
  `id` int(11) NOT NULL default '0',
  `classid` smallint(6) NOT NULL default '0',
  `softwriter` varchar(30) NOT NULL default '',
  `homepage` varchar(80) NOT NULL default '',
  `demo` varchar(120) NOT NULL default '',
  `downpath` mediumtext NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `classid` (`classid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>