<?php session_start(); include("../enews/conn.php");
if($submit=="提交"){
$query=mysql_query("insert into tb_insert (name,tel)values('$name','$tel')");}
if($query==true){
echo "数据添加成功!!";
}else{echo "数据插入失败!!";};
?>

