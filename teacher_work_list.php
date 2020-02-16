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

<!-- <form method="post" action=""> -->
  <div class="panel admin-panel">
    <div class="panel-head"><strong class="icon-reorder">已发布作业列表</strong></div>
<?php
  session_start();
  @$tno=$_SESSION['yh'];
  
  include("conn.php");
  include("function.php");
  $fc=new func;
//$sql="select * from student ";
$sql = "select * from teacher_work where tea_number=$tno";
  $result=$link->query($sql);
  
?>
    <table class="table table-hover text-center">
        <tr>
    <td width="100"><div align="center">ID</div></td>
    <td width="100"><div align="center">作业名</div></td>
    <td width="100"><div align="center">课程号</div></td>
    <td width="100"><div align="center">教工号</div></td>
    <td width="100"><div align="center">截止时间</div></td>
    <td width="100"><div align="center">上传时间</div></td>
    <td width="100"><div align="center">操作</div></td>
  </tr>   
       
   <?php

  	while($row=$result->fetch_assoc()){
  ?>
  
  <tr>
    <td align="center"><?php echo $row['id']?></td>
    <td align="center"><?php echo $row['wname']?></td>
    <td align="center"><?php echo $row['course_number']?></td>
    <td align="center"><?php echo $row['tea_number']?></td>
    <td align="center"><?php echo $row['deadline']?></td>

    <td align="center"><?php echo $row['uploaddate']?></td>

    <td align="center"><a href="del.php?id=<?php echo $row['id']?>&del=teacher_work&address=<?php echo $row['address']?>" onClick="return confirm('真的要删除吗？')"><button class="button_new button_red">删除</button></a>
    <a href="<?php echo $row['address']?>"><button class="button_new button_blue">下载</button></a></td>	
  </tr>
  <?php 
        } 

	 ?>
    </table>
  </div>
<!-- </form> -->

</body></html>