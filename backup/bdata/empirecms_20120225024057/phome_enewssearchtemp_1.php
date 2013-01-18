<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `phome_enewssearchtemp`;");
E_C("CREATE TABLE `phome_enewssearchtemp` (
  `tempid` smallint(6) NOT NULL auto_increment,
  `tempname` varchar(60) NOT NULL default '',
  `temptext` mediumtext NOT NULL,
  `subnews` smallint(6) NOT NULL default '0',
  `isdefault` tinyint(1) NOT NULL default '0',
  `listvar` text NOT NULL,
  `rownum` smallint(6) NOT NULL default '0',
  `modid` smallint(6) NOT NULL default '0',
  `showdate` varchar(50) NOT NULL default '',
  `subtitle` smallint(6) NOT NULL default '0',
  `classid` smallint(6) NOT NULL default '0',
  `docode` tinyint(1) NOT NULL default '0',
  PRIMARY KEY  (`tempid`),
  KEY `classid` (`classid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewssearchtemp` values('1','默认搜索模板','<!DOCTYPE html PUBLIC \\\\\"-//W3C//DTD XHTML 1.0 Transitional//EN\\\\\" \\\\\"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\\\\\">\r\n<html xmlns=\\\\\"http://www.w3.org/1999/xhtml\\\\\" xml:lang=\\\\\"zh-cn\\\\\" lang=\\\\\"zh-cn\\\\\" >\r\n<head>\r\n<meta http-equiv=\\\\\"Content-Type\\\\\" content=\\\\\"text/html; charset=utf-8\\\\\" />\r\n<title>[!--keyboard--] 搜索结果</title>\r\n\r\n<link rel=\\\\\"stylesheet\\\\\" href=\\\\\"[!--news.url--]skin/web/common.css\\\\\" type=\\\\\"text/css\\\\\" />\r\n<link rel=\\\\\"stylesheet\\\\\" href=\\\\\"[!--news.url--]skin/web/template.css\\\\\" type=\\\\\"text/css\\\\\" />\r\n\r\n<script type=\\\\\"text/javascript\\\\\" src=\\\\\"[!--news.url--]skin/web/jquery.js\\\\\"></script>\r\n<script type=\\\\\"text/javascript\\\\\" src=\\\\\"[!--news.url--]skin/web/jquery.mlutil.js\\\\\"></script>\r\n<script type=\\\\\"text/javascript\\\\\" src=\\\\\"[!--news.url--]skin/web/template.js\\\\\"></script>\r\n<script>\r\n	var baseurl=\\\\''/\\\\'';\r\n</script>\r\n<!--[if lt IE 7]>\r\n        		<script type=\\\\\"text/javascript\\\\\" src=\\\\\"[!--news.url--]skin/web/unitpngfix.js\\\\\"></script>\r\n	<![endif]-->\r\n</head>\r\n<body>\r\n[!--temp.top--]\r\n\r\n<div id=\\\\\"innerContenter\\\\\">\r\n	<div class=\\\\\"width960 mainContent\\\\\">\r\n		<div class=\\\\\"head\\\\\">\r\n			<div class=\\\\\"topTitle t6\\\\\"></div>\r\n			<div class=\\\\\"breadcom\\\\\">\r\n				<span class=\\\\\"t\\\\\">当前位置：</span><a href=\\\\\"[!--news.url--]\\\\\" class=\\\\\"classlinkclass\\\\\">首页</a>&nbsp;>&nbsp;搜索结果</div>\r\n		</div>\r\n		<div class=\\\\\"content\\\\\">\r\n			<div class=\\\\\"subMenu left\\\\\">\r\n			<div style=\\\\\"position:absolute;z-index:999;\\\\\">\r\n\r\n								<div class=\\\\\"img\\\\\"></div>\r\n				\r\n			</div>\r\n			</div>\r\n			<div class=\\\\\"inner right\\\\\">\r\n													\r\n												\r\n				<div id=\\\\\"contenters\\\\\">\r\n																														<ul class=\\\\\"listView\\\\\">\r\n[!--empirenews.listtemp--]\r\n<!--list.var1-->\r\n[!--empirenews.listtemp--]\r\n															\r\n                                                            \r\n                                                            </ul>\r\n                            <div class=\\\\\"page-list\\\\\">[!--show.page--]\r\n                            <div class=\\\\\"clr\\\\\"></div></div>																						</div>\r\n							</div>\r\n			<div class=\\\\\"clear\\\\\"></div>\r\n			<div class=\\\\\"bottomBG\\\\\"></div>\r\n		</div>\r\n		<div class=\\\\\"backToTop\\\\\">\r\n			<a href=\\\\\"javascript:scroll(0,0)\\\\\"></a>\r\n			<div class=\\\\\"clear\\\\\"></div>\r\n		</div>\r\n	</div>\r\n</div>\r\n<script type=\\\\\"text/javascript\\\\\">\r\n	var isIE6=false;\r\n	if(window.XMLHttpRequest){ //Mozilla, Safari, IE7\r\n	    if(!window.ActiveXObject){ // Mozilla, Safari,\r\n	       \r\n	    }else{\r\n	    }\r\n	}else {\r\n		isIE6 = true;\r\n	}\r\n	function getPosition(){ \r\n		\r\n	} \r\n	\$(function(){\r\n		\r\n	});\r\n</script>\r\n\r\n[!--temp.end--]\r\n\r\n</body>\r\n</html>','180','1','<li><a class=\\\\\"title\\\\\" href=\\\\\"[!--titleurl--]\\\\\">[!--title--]</a><span class=\\\\\"dateTime\\\\\">[!--newstime--]</span>\r\n<div class=\\\\\"clear\\\\\"></div></li>','1','1','Y-m-d','0','0','0');");

require("../../inc/footer.php");
?>