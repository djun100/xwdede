
<?php
require("../../class/connect.php");
require("../../class/db_sql.php");
require("../../class/functions.php");
require "../".LoadLang("pub/fun.php");
$link=db_connect();
$empire=new mysqlquery();

$page=(int)$_GET['page'];
$start=0;
$line=10;//每页显示条数
$page_line=25;//每页显示链接数
$offset=$page*$line;//总偏移量

$inQuery = "select * from `apply_info` limit $offset, $line";
$num=$empire->gettotal('select count(*) as total from `apply_info`');//取得总条数
$returnpage=page2($num,$line,$page_line,$start,$page,'');

$rr = $empire->query($inQuery);
#$result = $empire->fetch($rr);
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="../adminstyle/1/adminstyle.css" rel="stylesheet" type="text/css">
<title>管理申请</title>
</head>

<body>
<table width="100%" border="0" align="center" cellpadding="3" cellspacing="1">
  <tr> 
    <td width="50%" height="25">位置：管理申请信息</td>
  </tr>
</table>



<table width="100%" border="0" align="center" cellpadding="3" cellspacing="1" class="tableborder">
  <tr class="header"> 
    <td width="6%" height="25"> <div align="center">ID</div></td>
    <td width="51%" height="25"> <div align="center">姓名</div></td>
    <td width="11%" height="25"> <div align="center">手机号</div></td>
   
  </tr>
  <?
  while($r=$empire->fetch($rr))
  {

  ?>
  <tr bgcolor="#FFFFFF" onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#C3EFFF'"> 
    <td height="25"> <div align="center"> 
        <?=$r['id']?>
      </div></td>
    <td height="25"> <div align="center"> 
        <?=$r['member_name']?>
      </div></td>
    <td height="25"> <div align="center"> 
        <?=$r['telephone']?>
      </div></td>
  </tr>
  <?
  }
  ?>
  <tr bgcolor="#FFFFFF"> 
    <td height="25" colspan="5">&nbsp;&nbsp;&nbsp;
      <?=$returnpage?>
    </td>
  </tr>
</table>
</body>
</html>