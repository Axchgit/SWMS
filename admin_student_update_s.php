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
$new_snu=$_POST['snumber'];
$new_sna=$_POST['sname'];
$new_sex=$_POST['sex'];
$new_yx=$_POST['yx'];
$new_zy=$_POST['zy'];
$new_class=$_POST['class'];
$new_pw=$_POST['pw'];
//$new_sc=$_POST['sc'];
$sql="update student set stu_number='$new_snu' ,name='$new_sna' ,sex='$new_sex' ,department='$new_yx' ,specialty='$new_zy' ,class='$new_class' ,pw='$new_pw' where id='$id'";
$rs=$link->query($sql);
if($rs==true){
	$fc->alrt("修改成功！","admin_student_list.php");
	}else{
		$fc->alrt("修改失败！","");
		}

?>
</body>
</html>