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
$new_name=$_POST['name'];
$new_pw=$_POST['pw'];
$sql="update admin set a_name='$new_name' ,pw='$new_pw' where id='$id'";
$rs=$link->query($sql);
if($rs==true){
	$fc->alrt("修改成功！","admin_self_list.php");
	}else{
		$fc->alrt("修改失败！","");
		}

?>
</body>
</html>