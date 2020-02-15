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
$input_cnu=$_POST['cnumber'];
$input_cna=$_POST['cname'];
$input_tnu=$_POST['tnumber'];
$input_tna=$_POST['tname'];
$input_year=$_POST['year'];
$input_term=$_POST['term'];
$input_dep=$_POST['xy'];
$sql="select * from course where course_number='$input_cnu'";
$rs=$link->query($sql);
if($link->affected_rows>0){
	$fc->alrt("课程已经存在！","admin_course_add.php");
	
	}else{

$sql="INSERT INTO course (`id` ,`course_number` ,`name` ,`tea_number` ,`teacher` ,`year` ,`term` ,`department` ,`remark`)
VALUES (NULL , '$input_cnu', '$input_cna', '$input_tnu', '$input_tna', '$input_year', '$input_term', '$input_dep', '');";
$result=$link->query($sql);
if($link->affected_rows>0){
	$fc->alrt("添加成功","admin_course_list.php");
	}else{
	$fc->alrt("添加失败","admin_course_add.php");	
		}

}
?>

</body>
</html>