<?php 
$id=mysql_connect("localhost","zhxwd888","n5h5b4m7") or die('连接失败:' . mysql_error());
if(mysql_select_db("tb_insert",$id))
echo "";
else
echo ('数据库选择失败:' . mysql_error());
mysql_query("set names gb2312");
?>