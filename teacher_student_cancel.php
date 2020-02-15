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
	$sno = $_GET['sno'];
	$cno = $_GET['cno'];

	$sql = "delete from `score` where stu_number=$sno and course_number=$cno";
			  
	$result=$link->query($sql);


if($result==true){
			$fc->alrt("退选成功","teacher_student_list.php");
			}else{
				
				$fc->alrt("退选失败","teacher_student_list.php");
			}
		


?>
</body>
</html>