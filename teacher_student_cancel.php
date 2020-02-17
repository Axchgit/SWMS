<?php
include("conn.php");
include("function.php");

$fc = new func;
$sno = $_GET['sno'];
$cno = $_GET['cno'];

$sql = "delete from `score` where stu_number=$sno and course_number=$cno";
$result = $link->query($sql);
if ($result == true) {
	$fc->alrt("退选成功", "teacher_student_list.php");
} else {

	$fc->alrt("退选失败", "teacher_student_list.php");
}
