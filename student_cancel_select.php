<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body style="background:url(images/login_bg.jpg); background-repeat:no-repeat; text-align:center; background-size: 100%;">

<?php 
session_start();
$sno=$_SESSION['yh'];
include("conn.php");
include("function.php");
$ar="";
$fc=new func;
/*$sql1="select * from student where stu_number='$yh'";
   $rs=$link->query($sql1);
   $row=$rs->fetch_assoc();
   $r=$row['select_course'];*/
   $arry=@$_POST['kec'];
 
for($i=0;$i<count($arry);$i++)
{
//	
//	if($i==(count($arry)-1)){
//		$ar=$ar.$arry[$i];
//		break;	
//	
//	}
//	$ar=$ar.$arry[$i]."|";
	$cno = $arry[$i];

	$sql = "delete from `score` where stu_number=$sno and course_number=$cno";
			  
	$result=$link->query($sql);
}
// $course=$r."|".$ar;
//$sql="update student set select_course='$ar' where stu_number='$yh'";
//
//$result=$link->query($sql);
if($result==true){
			$fc->alrt("退选成功","student_selected_list.php");
			}else{
				
				$fc->alrt("退选失败","student_selected_list.php ");
			}
		


?>
</body>
</html>