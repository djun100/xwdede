<?php session_start(); include("../enews/conn.php");
if($submit=="�ύ"){
$query=mysql_query("insert into tb_insert (name,tel)values('$name','$tel')");}
if($query==true){
echo "������ӳɹ�!!";
}else{echo "���ݲ���ʧ��!!";};
?>

