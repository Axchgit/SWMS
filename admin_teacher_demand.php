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
	
<div class="panel admin-panel">
	    <div class="panel-head"><strong class="icon-reorder">教师查询</strong></div>
 
  <div class="body-content">
    <form method="post" class="form-x" action="" enctype="multipart/form-data">  
      <div class="form-group">
        <div class="label">
          <label>教工号：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" value="" name="teacher_number" data-validate="required:请输入教工号" />
          <div class="tips"></div>
        </div>
      </div>     
      
        <div align="center" class="field">
          <button name="up" class="button bg-main icon-check-square-o" type="submit"> 查询</button>
        </div>
      
    </form>
  </div>
</div>

</body>

<body style="background:url(images/login_bg.jpg); background-repeat:no-repeat; text-align:center; background-size: 100%;">

<form method="post" >
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
  include("conn.php");
  include("function.php");
  $fc=new func;
  
  	if(isset($_POST['up'])){
		$tno = $_POST['teacher_number'];
  		
  $sql="select * from teacher where tea_number=$tno";
  $result=$link->query($sql);
  
?>
   <table class="table table-hover text-center">
        <tr>
    <td width="100"><div align="center">ID</div></td>
    <td width="100"><div align="center">教师编号</div></td>
    <td width="100"><div align="center">姓名</div></td>
    <td width="100"><div align="center">性别</div></td>
    <td width="100"><div align="center">所属学院</div></td>
    <td width="100"><div align="center">密码</div></td>
    <td width="100"><div align="center">操作</div></td>
  </tr>   
       
   <?php

  	while($row=$result->fetch_assoc()){
  ?>
  
  <tr>
    <td align="center"><?php echo $row['id']?></td>
    <td align="center"><?php echo $row['tea_number']?></td>
    <td align="center"><?php echo $row['name']?></td>
    <td align="center"><?php echo $row['sex']?></td>
    <td align="center"><?php echo $row['department']?></td>
    <td align="center"><?php echo $row['pw']?></td>
    <td align="center"><a href="admin_teacher_update.php?id=<?php echo $row['id']?>">修改</a>|<a href="del.php?tid=<?php echo $row['id']?>&del=teacher" onClick="return confirm('真的要删除吗？')">删除</a></td>	
  </tr>
  <?php 
        } 

	 ?>
    </table>
  </div>
</form>

</body>
</html>
  <?php 
  			}
         
	 ?>