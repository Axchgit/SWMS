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
$input_name=$_POST['user'];
$input_pw=$_POST['pw'];
$input_type=$_POST['user_type'];
$input_code=$_POST['code'];
$_SESSION['yh']=$input_name;
$_SESSION['type']=$input_type;

if($input_code!=$_SESSION['vcode']){
	$fc->alrt("验证码错误！","login.html");
	die;
	}
	if($input_type=="学生"){
		$table='student';
		$num='stu_number';
		$url='student_index.php';
	}else if($input_type=="教师"){
		$table='teacher';
		$num='tea_number';
		$url='teacher_index.php';
	}else{
		$table='admin';
		$num='a_name';
		$url='admin_index.php';
	}
		$sql="select * from $table where $num='$input_name'";
		$rs=$link->query($sql);
	    $row=$rs->fetch_assoc();
	    $aff=$link->affected_rows;
		if($aff>0){
		if($input_pw==$row['pw']){
			$fc->alrt("登录成功！",$url);
			}else{$fc->alrt("密码错误！","login.html");}
			    } else{$fc->alrt("用户名错误！","login.html");}
		
?>
</body>
</html>