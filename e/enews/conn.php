<?php 
$id=mysql_connect("localhost","zhxwd888","n5h5b4m7") or die('����ʧ��:' . mysql_error());
if(mysql_select_db("tb_insert",$id))
echo "";
else
echo ('���ݿ�ѡ��ʧ��:' . mysql_error());
mysql_query("set names gb2312");
?>