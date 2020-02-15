<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body style="background:url(images/login_bg.jpg); background-repeat:no-repeat; text-align:center; background-size: 100%;">

<?php
include("conn.php");
include("function.php");
$fc=new func;
$input_tnu=$_POST['tnumber'];
$input_tna=$_POST['tname'];
$input_sex=$_POST['sex'];
$input_yx=$_POST['yx'];
$input_pw=$_POST['pw'];
$sql="select * from teacher where tea_number='$input_tnu'";
$rs=$link->query($sql);
if($link->affected_rows>0){
	$fc->alrt("教师已经存在！","teacher_add.php");
	
	}else{

$sql="INSERT INTO teacher (`id` ,`tea_number` ,`name` ,`sex` ,`department`,`pw`)
VALUES (NULL , '$input_tnu', '$input_tna', '$input_sex', '$input_yx', '$input_pw');";
$result=$link->query($sql);
if($link->affected_rows>0){
	$fc->alrt("添加成功","admin_teacher_list.php");
	}else{
	$fc->alrt("添加失败","admin_teacher_add.php");	
		}

}
?>

</body>
</html>