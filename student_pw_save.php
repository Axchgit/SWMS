<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>无标题文档</title>
</head>

<body>
	<?php
	session_start();
	$yh = $_SESSION['yh'];
	include("conn.php");
	include("function.php");
	$fc = new func;
	$mpass = $_POST['mpass'];
	$newpass = $_POST['newpass'];
	$sql = "select * from student where stu_number='$yh'";
	$rs = $link->query($sql);
	$row = $rs->fetch_assoc();
	if ($mpass == $row['pw']) {
		$sql1 = "update student set pw='$newpass' where stu_number='$yh'";
		$result = $link->query($sql1);
		if ($result == true) {
			$fc->alrt("修改密码成功", "student_info.php");
		} else {
			$fc->alrt("修改密码失败，请检查原密码是否输入正确", "student_pw_update.php");
		}
	}
	?>
</body>

</html>