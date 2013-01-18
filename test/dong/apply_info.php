<?php
require("../../e/class/connect.php");
require("../../e/class/db_sql.php");
$link=db_connect();
$empire=new mysqlquery();

$inQuery = "INSERT INTO `apply_info` (`member_name`, `telephone`) values ('{$_POST['member_name']}','{$_POST['telephone']}')";
$result = $empire->query($inQuery);
if(!$result){

	echo '<script type="text/javascript">alert("申请失败！");location.href="../../index.html"</script>';
	exit();
}
echo '<script type="text/javascript">alert("申请成功！");location.href="../../index.html"</script>';

?>