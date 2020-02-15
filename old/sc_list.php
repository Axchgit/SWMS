<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title></title>  
    <link rel="stylesheet" href="css/pintuer.css">
    <link rel="stylesheet" href="css/admin.css">
    <script src="js/jquery.js"></script>
    <script src="js/pintuer.js"></script>  
</head>
<body style="background:url(images/login_bg.jpg); background-repeat:no-repeat; text-align:center; background-size: 100%;">

<form method="post" action="select_save.php">
  <div class="panel admin-panel">
    <div class="panel-head"><strong class="icon-reorder">已选课程</strong></div>
<!--    <div class="padding border-bottom">
      <ul class="search">
        <li>
          <button type="button"  class="button border-green" id="checkall"><span class="icon-check"></span> 全选</button>
          <button type="submit" class="button border-red"><span class="icon-trash-o"></span> 批量删除</button>
        </li>
      </ul>
    </div--> 
<?php
  session_start();
  $yh=$_SESSION['yh'];
  include("conn.php");
  include("function.php");
  $fc=new func;
  $sql="select * from student where stu_number='$yh'";
  $result=$link->query($sql);
  $row=$result->fetch_assoc();
 // if($row['select_course']==""){
//	  $fc->alrt("请先完成选课","select.php");
//	  }else{
  $arr_course=explode('|',$row['select_course']);
?>
    <table class="table table-hover text-center">
        <tr>
    <td width="100"><div align="center">课程号</div></td>
    <td width="100"><div align="center">课程名称</div></td>
   <!-- <td width="100"><div align="center">授课老师编号</div></td>-->
    <td width="100"><div align="center">授课老师</div></td>
    <td width="100"><div align="center">学年</div></td>
    <td width="100"><div align="center">学期</div></td>
    <td width="100"><div align="center">开课学院</div></td>
  </tr>   
       
   <?php
   for($i=0;$i<count($arr_course);$i++){
	  $cno = $arr_course[$i];
	  $sql = "select * from course where course_number='$cno'";
	   $rs=$link->query($sql);

  	while($row=$rs->fetch_assoc()){
  ?>
  
  <tr>
    <td align="center"><?php echo $row['course_number']?></td>
    <td align="center"><?php echo $row['name']?></td>
    <!--<td align="center"><?php// echo $row['tea_number']?></td>-->
    <td align="center"><?php echo $row['teacher']?></td>
    <td align="center"><?php echo $row['year']?></td>
    <td align="center"><?php echo $row['term']?></td>
    <td align="center"><?php echo $row['department']?></td>	
    
  <?php 
        } 
  
	  }?>
    </table>
  </div>
</form>

</body></html>