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
$sql="select * from course where id='$id'";
$result=$link->query($sql);
$row=$result->fetch_assoc();
?>
<div class="panel admin-panel">
 
  <div class="body-content">
    <form method="post" class="form-x" action="admin_course_update_s.php?id=<?php echo $id;?>">  
      <div class="form-group">
        <div class="label">
          <label>课程号：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" value="<?php echo $row['course_number']?>" name="cnumber" data-validate="required:请输入课程号" />
          <div class="tips"></div>
        </div>
      </div>
    
      <div class="form-group">
        <div class="label">
          <label>课程名：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" value="<?php echo $row['name']?>" name="cname" data-validate="required:请输入课程名" />
          <div class="tips"></div>
        </div>
      </div>
      
      <div class="form-group">
        <div class="label">
          <label>授课教师号：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" value="<?php echo $row['tea_number']?>" name="tnumber" data-validate="required:请输入授课教师号" />
          <div class="tips"></div>
        </div>
      </div>
      
      <div class="form-group">
        <div class="label">
          <label>授课教师名：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" value=" <?php echo $row['teacher']?>" name="tname" data-validate="required:请输入授课教师名" />
          <div class="tips"></div>
        </div>
      </div>
      
      <div class="form-group">
        <div class="label">
          <label>开课学年：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" value="<?php echo $row['year']?>" name="year" data-validate="required:请输入开课学年" />
          <div class="tips"></div>
        </div>
      </div>
      
      <div class="form-group">
        <div class="label">
          <label>开课学期：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" value="<?php echo $row['term']?>" name="term" data-validate="required:请输入开课学期" />
          <div class="tips"></div>
        </div>
      </div>
      
      <div class="form-group">
        <div class="label">
          <label>开课学院：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" value="<?php echo $row['department']?>" name="xy" data-validate="required:请输入开课学院" />
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