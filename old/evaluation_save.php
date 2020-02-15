<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
session_start();
include("conn.php");
include("function.php");
$fc=new func;
$tea=$_SESSION['tea'];
$stu=$_SESSION['yh'];
$input_1=$_POST['1'];
$input_2=$_POST['2'];
$input_3=$_POST['3'];
$input_4=$_POST['4'];
$input_5=$_POST['5'];
$input_6=$_POST['6'];
$input_7=$_POST['7'];
$input_8=$_POST['8'];
$input_9=$_POST['9'];
$input_10=$_POST['10'];
$input_11=$_POST['11'];
$input_12=$_POST['12'];
$input_13=$_POST['13'];
$input_14=$_POST['14'];
$input_15=$_POST['15'];
$input_16=$_POST['16'];
$input_17=$_POST['17'];
$advice=$_POST['advice'];
$sum=$input_1+$input_2+$input_3+$input_4+$input_5+$input_6+$input_7+$input_8+$input_9+$input_10+$input_11+$input_12+$input_13+$input_14+$input_15+$input_16+$input_17;
$sql="INSERT INTO result (`id` ,`student` ,`teacher`  ,`score` ,`advice`)
VALUES (NULL , '$stu', '$tea', '$sum', '$advice')";
$result=$link->query($sql);
if($link->affected_rows>0){
	$fc->alrt("评教成功","pj_list.php");}else{
		$fc->alrt("评教失败","evaluation.php");
		}
?>

</body>
</html>