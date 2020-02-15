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

<?php
include("conn.php");
$id=$_GET['id'];
$sql="select * from student where id='$id'";
$result=$link->query($sql);
$row=$result->fetch_assoc();
?>
<div class="panel admin-panel">
 
  <div class="body-content">
    <form method="post" class="form-x" action="admin_student_update_s.php?xgid=<?php echo $id?>">  
      <div class="form-group">
        <div class="label">
          <label>学号：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" value="<?php echo $row['stu_number']?>" name="snumber" data-validate="required:请输入学号" />
          <div class="tips"></div>
        </div>
      </div>
    
      <div class="form-group">
        <div class="label">
          <label>姓名：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" value="<?php echo $row['name']?>" name="sname" data-validate="required:请输入姓名" />
          <div class="tips"></div>
        </div>
      </div>
      
      <div class="form-group">
        <div class="label">
          <label>性别：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" value="<?php echo $row['sex']?>" name="sex" data-validate="required:请输入性别" />
          <div class="tips"></div>
        </div>
      </div>
      
      <div class="form-group">
        <div class="label">
          <label>所属学院：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" value="<?php echo $row['department']?>" name="yx" data-validate="required:请输入所属学院" />
          <div class="tips"></div>
        </div>
      </div>
      
      <div class="form-group">
        <div class="label">
          <label>专业：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" value="<?php echo $row['specialty']?>" name="zy" data-validate="required:请输入专业" />
          <div class="tips"></div>
        </div>
      </div>
      
      <div class="form-group">
        <div class="label">
          <label>班级：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" value="<?php echo $row['class']?>" name="class" data-validate="required:请输入班级" />
          <div class="tips"></div>
        </div>
      </div>
      
      <div class="form-group">
        <div class="label">
          <label>密码：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" value="<?php echo $row['pw']?>" name="pw" data-validate="required:请输入密码" />
          <div class="tips"></div>
        </div>
      </div>
      
       <div class="form-group">
        <div class="label">
          <label>选修课程：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" value="<?php echo $row['select_course']?>" name="sc" data-validate="required:请输入选修课程" />
          <div class="tips"></div>
        </div>
      </div>
        <div align="center" class="field">
          <button class="button bg-main icon-check-square-o" type="submit"> 提交</button>
        </div>
      
    </form>
  </div>
</div>

</body></html>