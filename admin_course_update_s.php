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
$id=$_GET['id'];
$new_cnu=$_POST['cnumber'];
$new_cna=$_POST['cname'];
$new_tnu=$_POST['tnumber'];
$new_tna=$_POST['tname'];
$new_year=$_POST['year'];
$new_term=$_POST['term'];
$new_dep=$_POST['xy'];
$sql="update course set course_number='$new_cnu' ,name='$new_cna' ,tea_number='$new_tnu' ,teacher='$new_tna' ,year='$new_year' ,term='$new_term' ,department='$new_dep' where id='$id'";
$rs=$link->query($sql);
if($rs==true){
	$fc->alrt("修改成功！","admin_course_list.php");
	}else{
		$fc->alrt("修改失败！","");
		}

?>
</body>
</html>