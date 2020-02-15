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
$yh=$_SESSION['yh'];
$tea=$_SESSION['tea'];
$sql="select * from result where student='$yh' and teacher='$tea'";
$rs=$link->query($sql);

if($rs!=""){
	$fc->alrt("您已经评教过了","info.html");
	}else{
		$fc->alrt("请开始您的评教","pj_list.php");
		}
?>
</body>
</html>