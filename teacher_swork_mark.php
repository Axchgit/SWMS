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
<form name="" method="post" enctype="multipart/form-data">

<div class="panel admin-panel">
 
  <div class="body-content">
    <form method="post" class="form-x" action="xga_s.php?xgid=<?php echo $id?>">  
      <div class="form-group">
        <div class="label">
          <label>分数：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" placeholder="1-100" name="score"  />
          <div class="tips"></div>
        </div>
      </div>
    
      
      
      
        <div align="center" class="field">
          <button name="up" class="button bg-main icon-check-square-o" type="submit"> 提交</button>
        </div>
      
    </form>
  </div>
</div>
</form>

</body></html>

<?php
	
include("conn.php");
include("function.php");
$fc=new func;
	if(isset($_POST['up'])){
		$id=$_GET['id'];
		$score = $_POST['score'];
		$sql="update student_work set score='$score' where  id='$id'";
		$rs=$link->query($sql);
		if($rs==true){
			$fc->alrt("评分/修改 成功！","teacher_swork_list.php");
		}else{
			$fc->alrt("评分/修改 失败！","teacher_swork_list.php");
		}
		
		
		
	}

?>