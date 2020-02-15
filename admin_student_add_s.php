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
$input_xnu=$_POST['snumber'];
$input_xna=$_POST['sname'];
$input_sex=$_POST['sex'];
$input_yx=$_POST['yx'];
$input_zy=$_POST['zy'];
$input_class=$_POST['class'];
$input_pw=$_POST['pw'];
//$input_sc=$_POST['sc'];
$sql="select * from student where stu_number='$input_xnu'";
$rs=$link->query($sql);
if($link->affected_rows>0){
	$fc->alrt("学生已经存在！","admin_student_add.php");
	
	}else{

$sql="INSERT INTO student (`id` ,`stu_number` ,`name` ,`sex` ,`department` ,`specialty` ,`class` ,`pw` )
VALUES (NULL , '$input_xnu', '$input_xna', '$input_sex', '$input_yx', '$input_zy', '$input_class', '$input_pw')";
$result=$link->query($sql);
if($link->affected_rows>0){
	$fc->alrt("添加成功","admin_student_list.php");
	}else{
	$fc->alrt("添加失败","admin_student_add.php");	
		}

}
?>

</body>
</html>