<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-cn" lang="zh-cn" >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>投资方块—量化投资理财</title>
<meta name="keywords" content="投资方块,量化投资理财,天通银,黄金价格走势图,天通金,黄金T+D,白银T+D,黄金,黄金期货,白银,白银期货,金价,黄金价格,今日金价,白银,纸白银,黄金价格走势,纸黄金,黄金投资,中国黄金,黄金价格查询,纸黄金网,纸黄金价格走势,贵金属投资,渤海商品交易所网上营业厅,原油价格,螺纹钢价格,动力煤价格,焦炭价格,聚酯切片价格,电解镍价格" />
<meta name="description" content="投资方块—量化投资理财专业团队，即时交易策略，有效风险控制，追求稳步投资收益，摆脱传统散漫式投资。投资平台公正合法：上海黄金交易所（黄金T+D|白银T+D）以及天津渤海商品交易所www.gold166.com" />
<link rel="stylesheet" href="/skin/web/common.css" type="text/css" />
<link rel="stylesheet" href="/skin/web/template.css" type="text/css" />
<link rel="stylesheet" href="http://zhxwd888.gotoip55.com/skin/web/common.css" type="text/css" />
<link rel="stylesheet" href="http://zhxwd888.gotoip55.com/skin/web/template.css" type="text/css" />
<link rel="stylesheet" href="http://zhxwd888.gotoip55.com/images/qq/qq.css" type="text/css" />
<script type="text/javascript" src="/skin/web/jquery.js"></script>
<script type="text/javascript" src="/skin/web/jquery.mlutil.js"></script>
<script type="text/javascript" src="/skin/web/template.js"></script>
<script>
//初始化
var def="1";
function mover(object){
  //主菜单
  var mm=document.getElementById("m_"+object);
  mm.className="m_li_a";
  //初始主菜单隐藏效果
  if(def!=0){
    var mdef=document.getElementById("m_"+def);
    mdef.className="m_li";
  }
  //子菜单
  var ss=document.getElementById("s_"+object);
  ss.style.display="block";
  //初始子菜单隐藏效果
  if(def!=0){
    var sdef=document.getElementById("s_"+def);
    sdef.style.display="none";
  }
}

function mout(object){
  //主菜单
  var mm=document.getElementById("m_"+object);
  mm.className="m_li";
  //初始主菜单
  if(def!=0){
    var mdef=document.getElementById("m_"+def);
    mdef.className="m_li_a";
  }
  //子菜单
  var ss=document.getElementById("s_"+object);
  ss.style.display="none";
  //初始子菜单
  if(def!=0){
    var sdef=document.getElementById("s_"+def);
    sdef.style.display="block";
  }
}
</script>
<!--[if lt IE 7]>
        		<script type="text/javascript" src="/skin/web/unitpngfix.js"></script>
	<![endif]-->
</head>
<body>
<SCRIPT src="http://zhxwd888.gotoip55.com/images/qq/ServiceQQ.htm"></SCRIPT>
<div id="feedback" style="CURSOR: pointer; right:6px; width:185px; height:464px; line-height:15px; overflow:visible; padding:10px 5px; border-radius:5px; bottom:180px; float:right; position:fixed !important; top:120px; bottom:10px;" onclick="javascript:window.open('http://b.qq.com/webc.htm?new=0&sid=1921552906&o=gold166.com&q=7', '_blank', 'height=464px, width=188px,toolbar=no,scrollbars=no,menubar=no,status=no');">
<A style="text-decoration:none;" href="http://wpa.qq.com/msgrd?v=3&amp;uin=1921552906&amp;site=qq&amp;menu=yes" target=_blank><IMG title=咨询 border=0 alt=咨询 src="/skin/web/client1.png?p=2:1921552906:41 &amp;r=0.33349626966221413"></A>
</div>

<div id="header">
	<div class="width960">
		<h1 class="left"><a title="<?=$public_r[sitename]?>" href="/"><?=$public_r[sitename]?></a></h1>
		<div class="right">
			<ul class="menu">
<li id="current" class="active item1"><a href="/" class="active"><span>首 页</span></a></li>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from [!db.pre!]enewsclass where bclassid=0 and showclass=0  order by myorder desc limit 5",20,24,0);
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<li class="item<?=$bqno+1?>"><a href="<?=$public_r[newsurl]?><?=$bqr[classpath]?>"><span><?=$bqr[classname]?></span></a></li>
<?php
}
?>
</ul>
		</div>
		<div class="clear"></div>
	</div>
</div>
<div id="indexContenter">
	<div class="width960">
		<div id="indexFlash">
<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="960" height="400">
  <param name="movie" value="imageshow.swf" />
  <param name="quality" value="high" />
  <param name="wmode" value="transparent" />
  <embed src="/skin/web/imageshow.swf" width="960" height="400" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" wmode="transparent"></embed>
</object> </div>
		
	</div>
</div>
<div class="width960" id="centerBar"><link media="screen" type="text/css" rel="stylesheet" href="/skin/web/index.css" />
<script language="JavaScript" type="text/javascript" src="/skin/web/switch.js"></script>

<div class="Frametop_1">
<div id="ser" style="height:53px"></div>
<div class="Frameleft">
<div class="Frameleftfisrt">
<div class="menu_1">
  <ul>
    <li id="m_1" class='m_li_a'><a href="#">贵金属报价</a></li>
    <li id="m_2" class='m_li' onmouseover='mover(2);' onmouseout='mout(2);'><a href="#">大宗商品报价</a></li>
    <li id="m_3" class='m_li' onmouseover='mover(3);' onmouseout='mout(3);'><a href="#">即时新闻</a></li>
  </ul>
</div>
<div>
   <ul class="smenu">
     <li id="s_1" class='s_li_a'>
     <iframe border="0" name="贵金属实时行情" marginwidth="1" marginheight="1" src="http://www.gold166.com/test/" frameborder="0" width="645px" scrolling="no" height="280px" target="_self">上海黄金交易所</iframe>
     </li>
     <li id="s_2" class='s_li' onmouseover='mover(2);' onmouseout='mout(2);'><iframe border="0" name="大宗商品实时行情" marginwidth="1" marginheight="1" src="http://116.213.81.51/web/info/web_hq.jsp" frameborder="0" width="645px" scrolling="no" height="280px" target="_self">渤海商品交易所</iframe></li>
    <li id="s_3" class='s_li' onmouseover='mover(3);' onmouseout='mout(3);'><iframe border="0" name="即时新闻" marginwidth="1" marginheight="1" src="http://www.gold166.com/test/news.html" frameborder="0" width="645px" scrolling="no" height="280px" target="_self">即时新闻</iframe></li>

</ul>
</div>
</div><!--左上部分结束-->

</div> <!--Frameleft-->
<div class="Frameright"><!--框体-->

<div class="k-login-box center">
                  <strong class="k-login-tips">每周牛熊榜</strong>
                    <form id="on_submit" method="post">
                     
	                   <div id="home-weekly">
			<div id="home-weeklyIntro"><?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(18,1,0,0,'','');
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
				<div class="nx_title" style=" color:#000;font-weight:bold; font-size:14px; padding-top:10px; padding-bottom:6px;"><a class="title" href='<?=$bqsr[titleurl]?>'><?=$bqr[title]?><?=date('Y-m-d',$bqr[newstime])?></a></div>
						<div class="nx_text" style="color:#000; font-size:13px; padding-left:10px; padding-right:6px; text-align:left"><?=$bqr[smalltext]?> ...&nbsp;&nbsp;<a class="title" href='<?=$bqsr[titleurl]?>'>[看全文]</a></div>
						 </div><?php
}
?>
		  <div id="home-weeklyItem" style="border-top:#333 solid 1px; font-size:13px; color:#000">
			<ul style="position:relative; margin-left:8px; padding-top:10px"><?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(18,5,0,0,'','');
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
			<li class="itemType" style="float:left; list-style:none;">[牛熊榜]</li>
            <li class="itemDateTime" style="float:left; list-style:none;"><?=date('Y-m-d',$bqr[newstime])?></li>								
			<li class="itemTitle" style="float:left; list-style:none;"><a class="title" href='<?=$bqsr[titleurl]?>'><?=$bqr[title]?></a></li><br />
            <?php
}
?>
			</ul>						
            </div>
			</div>
                  
              </form>
<div id="share" style="padding-left:6px;">
<!--Passit BUTTON BEGIN-->
<div class="passit_barDiv"><a class="passit_default" href="http://www.passit.cn/bookmark.html" target="_blank"></a></div>

<script type="text/javascript">
var passit_title = "";//自定义分享标题，删除和留空表示使用默认
var passit_url = "";//自定义分享网址，删除和留空表示使用默认
var passit_content= "";//自定义分享内容，删除和留空表示使用默认Meta中的描述
var passit_image= "";//自定义分享图片，删除和留空表示不分享图片
var sina_appkey= "";//sina微博appkey,删除和留空表示使用默认
var qq_appkey= "";//腾讯微博appkey,删除和留空表示使用默认
</script>
<script type="text/javascript">
bookmark_service_div="qq,kxzt,qqxy,baiduHi,bookmark,baidu,douban,sohuweibo,163weibo,more";
bookmark_service="qqkj,sinaweibo,xnzt,tieba,zjweibo,thexun,more";</script>
<script type="text/javascript" src="http://www.passit.cn/js/passit_bar_big_new.js?pub=0&simple=1&style=52" charset="UTF-8"></script>
<!--Passit BUTTON END--></div>

      </div>

</div>
<!--Frameright-->
<br style="clear:both"  /></div>
<div class="ad"></div>
<div class="Frametop">
<div id="ser" style="height:53px"></div>
<div class="Frameleft">
<div class="Frameleftfisrt">
<div class="tab1">
<ul><li class="nav_current" id="nav1" onMouseOver="javascript:doClick(this)">

<a href="/focus/"  target="_blank" title="今日关注">今日关注</a></li>

<li class="nav_link" id="nav2" onMouseOver="javascript:doClick(this)">

<a href="/wd/" target="_blank" title="市场评论">市场评论</a></li>

<li class="nav_link" id="nav3" onMouseOver="javascript:doClick(this)">

<a href="/zijin/" target="_blank" title="资金动向">资金动向</a></li>

<li class="nav_link" id="nav4" onMouseOver="javascript:doClick(this)">

<a href="/shipin/" target="_blank" title="在线视频">在线视频</a></li>

<li class="nav_link" id="nav5" onMouseOver="javascript:doClick(this)">

<a href="/jiaoyitishi/" target="_blank" title="交易提示">交易提示</a></li>
</ul>
</div>
<div class="cont1" >
<div class="dis" id="tab1">
<ul>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(7,9,0,0,'','');
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<li class="contlist"><div class="Sn1"></div><a style="width:490px; float:left;" href='<?=$bqsr[titleurl]?>'><?=$bqr[title]?></a><span class="contspan"><?=date('Y-m-d',$bqr[newstime])?></span>
</li>
<?php
}
?>

</ul>

</div>

<div class="undis" id="tab2">
<ul>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(6,9,0,0,'','');
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<li class="contlist"><div class="Sn1"></div><a style="width:490px; float:left;" href='<?=$bqsr[titleurl]?>'><?=$bqr[title]?></a><span class="contspan"><?=date('Y-m-d',$bqr[newstime])?></span>
</li>
<?php
}
?>
</ul>
</div>
 <div class="undis" id="tab3">
<ul>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(16,9,0,0,'','');
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<li class="contlist"><div class="Sn1"></div><a style="width:490px; float:left;" href='<?=$bqsr[titleurl]?>'><?=$bqr[title]?></a><span class="contspan"><?=date('Y-m-d',$bqr[newstime])?></span>
</li>
<?php
}
?>

</ul>
</div>
<div class="undis" id="tab4">
<div  class="Aluytop">
<span class="Afa hed" title="黄金分析师">分析师</span><span class="Afb hed" title="在线专家解盘" >主题</span><span class="Afc hed">日期及时间</span><span class="Afd hed" title="查询">查询详情</span>

<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(17,7,0,0,'','');
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<div  class="if"></div>
<span class="Afa"><a class="title" href='<?=$bqsr[keyboardurl]?>'><?=$bqr[keyboard]?></a></span>
<span class="Afb"><a class="title" href='<?=$bqsr[smalltexturl]?>'><?=$bqr[smalltext]?></a></span>
<span class="Afc"><a class="title" href='<?=$bqsr[ftitleurl]?>'><?=$bqr[ftitle]?></a></span>
<span class="Afd"><a class="title" href='<?=$bqsr[titleurl]?>'><?=$bqr[title]?></a></span>
<?php
}
?>
</div></div>

<div class="undis" id="tab5">
<ul>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(10,9,0,0,'','');
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<li class="contlist"><div class="Sn1"></div><a style="width:490px; float:left;" href='<?=$bqsr[titleurl]?>'><?=$bqr[title]?></a><span class="contspan"><?=date('Y-m-d',$bqr[newstime])?></span>
</li>
<?php
}
?>
</ul>
</div>

</div>
</div><!--左上部分结束-->

</div> <!--Frameleft-->
<div class="Frameright"><!--框体-->

<div class="k-login-box center"> <strong class="k-login-tips">体验短信投资指导</strong>
      <form id="apply_info" name="apply_info" method="post" action="test/dong/apply_info.php" onsubmit="return apply_check();">
        <fieldset class="k-login">
          <em class="k-login-left"></em> <em class="k-login-right"></em>
          <p>
            <label for="name">姓名:</label>
            <input name="member_name"  type="text" value="" id="member_name" class="input-w" />
          </p>
          <p>
            <label for="name">电话:</label>
            <input name="telephone"  type="text" value="" id="telephone" class="input-w" />
          </p>
          <input type="submit" value="  " class="k-login-sub" style="cursor:pointer;" id="sub_login"/>
        </fieldset>
      </form>
     </div>
      <script >function apply_check(){
if (apply_info.member_name.value=="")
   { 
	alert("请填写姓名 ");
	document.apply_info.member_name.focus();
	return false;
   }
if(apply_info.telephone.value == "" )
{
       alert('请填写手机号');
       document.apply_info.telephone.focus();
        return false;
}
}</script>
<div style="padding:10px;width:284px; margin-left:15px;">
<img src="/skin/web/serch.png" width=73 height=63 id=demo1 style="float:left;">
<div id=demo0 style="clear:none;">
<a class="lishi" style="font:Verdana, Geneva, sans-serif; font-size:15px; text-decoration: none; color: #666" href="http://gold166.com/case/pingce/2012-12-28/92.html" target="_parent" >贵金属投资历史检测检测</a>
<p>&nbsp;</p>
<a class="lishi" style="font:Verdana, Geneva, sans-serif; font-size:15px; text-decoration: none; color: #666" href="http://gold166.com/case/pingce/2012-12-28/93.html" target="_parent" >渤海商品投资历史检测检测</a>
</div></div>
</div>

<!--Frameright-->
<br style="clear:both"  /></div>
<div>
<img class="bank" src="/skin/web/pf.gif" width="134" height="36" alt="浦发银行" /><img class="bank" src="/skin/web/gs.gif" width="134" height="36" alt="工商银行" /><img class="bank" src="/skin/web/ny.gif" width="134" height="36" alt="农业银行" /><img class="bank" src="/skin/web/js.gif" width="134" height="36" alt="建设银行" /><img class="bank" src="/skin/web/xy.jpg" width="134" height="36" alt="兴业银行" /><img class="bank" src="/skin/web/jt.gif" width="134" height="36" alt="交通银行" /><img class="bank" src="/skin/web/zs.jpg" width="134" height="36" alt="招商银行" />
</div>
</div>

<div class="footer" style="margin-top:10px; border-top:2px solid #e2e2e2;background:#e9e5e2;text-align:center;color: #000">
<p class="bl34" style="margin-top:20px;line-height:36px">
<a href="http://www.gold166.com">首页 &nbsp;&nbsp;&nbsp;&nbsp;|</a>
<a href="/about/">&nbsp;&nbsp;交易所 &nbsp;&nbsp;|</a>
<a href="/yw/">&nbsp;&nbsp;行情软件 &nbsp;&nbsp;|</a>
<a href="/case/">&nbsp;&nbsp;投资案例&nbsp;&nbsp;|</a>
<a href="/article/">&nbsp;&nbsp;资讯中线&nbsp;&nbsp;|</a>
<a href="/contact/">&nbsp;&nbsp;联系我们&nbsp;&nbsp;|</a>
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