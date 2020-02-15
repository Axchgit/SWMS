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
$del=$_GET['del'];
	if($del=="course"){
		$id=$_GET['cid'];
		$table="course";
		$url="admin_course_list.php";
	}else if($del=="student"){
		$id=$_GET['sid'];
	    $table="student";
	    $url="admin_student_list.php";
		
	}else if($del=="teacher"){
		$id=$_GET['tid'];
	    $table="teacher";
	    $url="admin_teacher_list.php";
	}else if($del=="teacher_work"){
		$id=$_GET['id'];
	    $table="teacher_work";
		unlink($_GET['address']);	    
	    $url="teacher_work_list.php";

	}else if($del=="student_work"){
		$id=$_GET['id'];
	    $table="student_work";
		unlink($_GET['address']);	    
	    $url="student_upwork_list.php";

	}else if($del=="course_material"){
		$id=$_GET['id'];
	    $table="course_material";
		unlink($_GET['address']);	    
	    $url="teacher_material_list.php";

	}else{
		$id=$_GET['aid'];
	    $table="admin";
	    $url="admin_self_list.php";
	}
$sql="delete from $table where id=$id";
mysqli_query($link,$sql);
if(mysqli_affected_rows($link)>0){
     $fc->alrt("删除成功",$url);
	}else{
		    $fc->alrt("删除失败",$url);
		}

?>

</body>
</html>