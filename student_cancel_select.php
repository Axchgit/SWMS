<?php
session_start();
$sno = $_SESSION['yh'];
include("conn.php");
include("function.php");
$ar = "";
$fc = new func;

$arry = @$_POST['kec'];

for ($i = 0; $i < count($arry); $i++) {
	$cno = $arry[$i];
	$sql = "delete from `score` where stu_number=$sno and course_number=$cno";
	$result = $link->query($sql);
}
if ($result == true) {
	$fc->alrt("退选成功", "student_selected_list.php");
} else {

	$fc->alrt("退选失败", "student_selected_list.php ");
}
