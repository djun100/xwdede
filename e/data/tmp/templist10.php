<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-cn" lang="zh-cn" >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>[!--pagetitle--]</title>
<meta name="keywords" content="[!--pagekey--]" />
<meta name="description" content="[!--pagedes--]" />

<link rel="stylesheet" href="[!--news.url--]skin/web/common.css" type="text/css" />
<link rel="stylesheet" href="[!--news.url--]skin/web/template.css" type="text/css" />

<script type="text/javascript" src="[!--news.url--]skin/web/jquery.js"></script>
<script type="text/javascript" src="[!--news.url--]skin/web/jquery.mlutil.js"></script>
<script type="text/javascript" src="[!--news.url--]skin/web/template.js"></script>

<!--[if lt IE 7]>
        		<script type="text/javascript" src="[!--news.url--]skin/web/unitpngfix.js"></script>
	<![endif]-->
</head>
<body>
<div id="feedback" style="CURSOR: pointer; right:6px; width:185px; height:464px; line-height:15px; overflow:visible; padding:10px 5px; border-radius:5px; bottom:180px; float:right; position:fixed !important; top:120px; bottom:10px;" onclick="javascript:window.open('http://b.qq.com/webc.htm?new=0&sid=1921552906&o=gold166.com&q=7', '_blank', 'height=464px, width=188px,toolbar=no,scrollbars=no,menubar=no,status=no');">
<A style="text-decoration:none;" href="http://wpa.qq.com/msgrd?v=3&amp;uin=1921552906&amp;site=qq&amp;menu=yes" target=_blank><IMG title=咨询 border=0 alt=咨询 src="[!--news.url--]skin/web/client1.png?p=2:1921552906:41 &amp;r=0.33349626966221413"></A>
</div>

<div id="header">
	<div class="width960">
		<h1 class="left"><a title="<?=$public_r[sitename]?>" href="[!--news.url--]"><?=$public_r[sitename]?></a></h1>
		<div class="right">
			<ul class="menu">
<li class="item1"><a href="[!--news.url--]" title="首页">首 页</a></li>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select classid,classname,classpath from [!db.pre!]enewsclass where bclassid=0 and showclass=0  order by myorder,classid asc",0,24,0);
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<?
$class="";
if($GLOBALS[navclassid]==$bqr[classid])
$class="active";
$id="current";
{
?>
<li id="<?=$id?>" class="item<?=$bqno+1?> <?=$class?>"><a href="<?=$public_r[newsurl]?><?=$bqr[classpath]?>" class="<?=$class?>"><span><?=$bqr[classname]?></span></a></li>
<?php    
}
?>
<?php
}
?>
</ul>
		</div>
		<div class="clear"></div>
	</div>
</div>

<div id="innerContenter">
	<div class="width960 mainContent">
		<div class="head">
			<div class="topTitle t4"></div>
			<div class="breadcom">
				<span class="t">当前位置：</span>[!--newsnav--]	</div>
		</div>
		<div class="content">
			<div class="subMenu left">
			<div style="position:absolute;z-index:999;">
								<ul>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select classid,classname,classpath from [!db.pre!]enewsclass where bclassid='".$class_r[$GLOBALS[navclassid]][bclassid]."' and showclass=0  order by myorder,classid asc",0,24,0);
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<?
$class="";
if($GLOBALS[navclassid]==$bqr[classid])
$class="active";
{
?>
<li><a class="sLink <?=$class?>" title="<?=$bqr[classname]?>" href="<?=$public_r[newsurl]?><?=$bqr[classpath]?>"><span class="f left"></span><span class="left"><?=$bqr[classname]?></span><span class="ta right"></span></a>
<div class="clear"></div>
</li>
<?php    
}
?>
<?php
}
?>		
														</ul>
								<div class="img"></div>
				
			</div>
			</div>
			<div class="inner right">
													<div class="banner" style="background: url('[!--class.classimg--]') no-repeat"></div>
												
				<div id="contenters">
																														<ul class="listView">
[!--empirenews.listtemp--]
<!--list.var1-->
[!--empirenews.listtemp--]
															
                                                            
                                                            </ul>
                            <div class="page-list">[!--show.listpage--]
                            <div class="clr"></div></div>																						</div>
							</div>
			<div class="clear"></div>
			<div class="bottomBG"></div>
		</div>
		<div class="backToTop">
			<a href="javascript:scroll(0,0)"></a>
			<div class="clear"></div>
		</div>
	</div>
</div>
<script type="text/javascript">
	var isIE6=false;
	if(window.XMLHttpRequest){ //Mozilla, Safari, IE7
	    if(!window.ActiveXObject){ // Mozilla, Safari,
	       
	    }else{
	    }
	}else {
		isIE6 = true;
	}
	function getPosition(){ 
		
	} 
	$(function(){
		
	});
</script>

<div class="footer" style="margin-top:10px; border-top:2px solid #e2e2e2;background:#e9e5e2;text-align:center;color: #000">
<p class="bl34" style="margin-top:20px;line-height:36px">
<a href="http://www.gold166.com">首页 &nbsp;&nbsp;&nbsp;&nbsp;|</a>
<a href="[!--news.url--]about/">&nbsp;&nbsp;交易所 &nbsp;&nbsp;|</a>
<a href="[!--news.url--]yw/">&nbsp;&nbsp;行情软件 &nbsp;&nbsp;|</a>
<a href="[!--news.url--]case/">&nbsp;&nbsp;投资案例&nbsp;&nbsp;|</a>
<a href="[!--news.url--]article/">&nbsp;&nbsp;资讯中线&nbsp;&nbsp;|</a>
<a href="[!--news.url--]contact/">&nbsp;&nbsp;联系我们&nbsp;&nbsp;|</a>
<a href='javascript:void(0);' onClick="javascript:window.external.AddFavorite('http://www.gold166.com','投资方块—量化投资理财);" rel="sidebar">&nbsp;&nbsp;收藏本站 &nbsp;&nbsp;|</a> 
<a href="javascript:void(0);" onclick="this.style.behavior='url(#default#homepage)';this.setHomePage('http://www.gold166.com');">&nbsp;&nbsp;设为首页</a>
</p>
<p>本站所有内容仅供阁下自行参考研究，阁下所做的任何投资及理财交易决定应自行负责。
</p>
<p class="bfa">Copyright ©  2011 - 2013 GOLD166.COM. All Rights Reserved
</p>
<p class="bc1">投资方块 &nbsp;&nbsp;版权所有 &nbsp;&nbsp; 津ICP备12008656号</p>
<script type="text/javascript">var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3Fc288e4f03ffb2bf445349f8781cd3bd4' type='text/javascript'%3E%3C/script%3E"));	
</div>

</body>
</html>