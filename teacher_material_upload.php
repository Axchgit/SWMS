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
    <div class="panel-head"><strong class="icon-reorder">上传资料</strong></div>
	
 
  <div class="body-content">
    <form method="post" class="form-x" action="" enctype="multipart/form-data">  
      <div class="form-group">
        <div class="label">
          <label>资料名：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" value="" name="mname"  />
          <div class="tips"></div>
        </div>
      </div>
      
      
      <div class="form-group">
        <div class="label">
          <label>文件：</label>
        </div>
        <div class="field">
          <input type="file" class="input w50" value="" name="workfile"  />
          <div class="tips"></div>
        </div>
      </div> 

      
      
      
        <div align="center" class="field">
          <button name="up" class="button bg-main icon-check-square-o" type="submit"> 提交</button>
        </div>
      
    </form>
  </div>
</div>

</body></html>

<?php
  session_start();
  @$tno=$_SESSION['yh'];	
include("conn.php");
include("function.php");
$fc=new func;
	if(isset($_POST['up'])){
		$mname = $_POST['mname'];
		$datetime = date("Y-m-d H:i:s",time());
//		$tno = $_SESSION['yh'];
		//文件上传操作
		$arr=$_FILES['workfile'];
		$arr['tmp_name'];
		$address="./files/course_material/".$arr['name'];
		move_uploaded_file($arr['tmp_name'],$address);
		//获取课程号
		$sql1 = "select course_number from `course` where tea_number=$tno";
		$data = $link->query($sql1);
		foreach($data as $v);		

		$cno = $v['course_number'];
		
		$sql="INSERT INTO course_material (`mname`,`course_number`,`tea_number`,`address`,`uploaddate`)
			  VALUES ('$mname', '$cno', '$tno', '$address', '$datetime')";
		$result=$link->query($sql);
		
		if($link->affected_rows>0){
			$fc->alrt("添加成功","teacher_material_list.php");
		}else{
			$fc->alrt("添加失败","teacher_material_list.php");	
		}

	}

?>