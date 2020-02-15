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
    <div class="panel-head"><strong class="icon-reorder">查询结果</strong></div>
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
  $sql="select * from result where teacher='$yh'";
  $result=$link->query($sql);
  
?>
    <table class="table table-hover text-center">
        <tr>
    <td width="100"><div align="center">学生</div></td>
   <!-- <td width="100"><div align="center">授课老师编号</div></td>-->
    <td width="100"><div align="center">评价分数</div></td>
    <td width="100"><div align="center">建议</div></td>
  </tr>   
       
   <?php

  	while($row=$result->fetch_assoc()){
		$xh=$row['student'];
		$sql1="select * from student where stu_number='$xh'";
		$rs=$link->query($sql1);
		$rw=$rs->fetch_assoc();
  ?>
  
  <tr>
    <!--<td align="center"><?php// echo $row['tea_number']?></td>-->
    <td align="center"><?php echo $rw['name']?></td>
    <td align="center"><?php echo $row['score']?></td>
    <td align="center"><?php echo $row['advice']?></td>
  </tr>
  <?php 
        
 
	  }?>
    </table>
  </div>
</form>

</body></html>