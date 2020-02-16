<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>教师中心</title>  
  <link rel="icon" href="images/teacher.jpg" type="image/x-icon" />
    <link rel="stylesheet" href="css/pintuer.css">
    <link rel="stylesheet" href="css/admin.css">
    <script src="js/jquery.js"></script>   
</head>

<body style="background:url(images/login_bg.jpg); background-repeat:no-repeat; text-align:center; background-size: 100%;">

<?php
session_start();
?>
<div class="header bg-main">
  <div class="logo margin-big-left fadein-top">
    <div style="float:left;"><h1><img src="images/teacher.jpg" class="radius-circle rotate-hover" height="60" alt="" />教师中心</h1></div>
  </div>
  <div style="float:right;" class="head-l"><!--<a class="button button-little bg-green" href="" target="_blank"><span class="icon-home"></span> 前台首页</a> &nbsp;&nbsp;--><!--<a href="##" class="button button-little bg-blue"><span class="icon-wrench"></span> 清除缓存</a> &nbsp;&nbsp;-->
  <a class="button button-little bg-red" href="login.html"><span class="icon-power-off"></span> 退出登录</a> </div>
</div>
<div class="leftnav">
  <div class="leftnav-title"><strong><span class="icon-list"></span>菜单列表</strong></div>
  
  <h2 style="background:#3CF"><span class="icon-user"></span>信息展示</h2>
  <ul style="display:block">
  	<!--<li><a href="info.html" target="right"><span class="icon-caret-right"></span>网站设置</a></li>-->
    <li><a href="teacher_course_info.php" target="right"><span class="icon-caret-right"></span>授课信息</a>
    <li><a href="teacher_work_list.php" target="right"><span class="icon-caret-right"></span>作业列表</a>
    <li><a href="teacher_material_list.php" target="right"><span class="icon-caret-right"></span>资料列表</a>    
    </li>
    <!--<li><a href="login.html"><span class="icon-caret-right"></span>退出系统</a></li>-->    
  </ul>
    
  <h2 style="background:#3CF"><span class="icon-user"></span>基本功能</h2>
  <ul style="display:block">
  	 <li><a href="teacher_student_demand.php" target="right"><span class="icon-caret-right"></span>查询学生</a>
    <li><a href="teacher_student_list.php" target="right"><span class="icon-caret-right"></span>学生评分</a>
    <li><a href="teacher_work_upload.php" target="right"><span class="icon-caret-right"></span>作业发布</a>
    <li><a href="teacher_material_upload.php" target="right"><span class="icon-caret-right"></span>上传资料</a>
    <li><a href="teacher_swork_list.php" target="right"><span class="icon-caret-right"></span>作业批改</a>  
  </ul>
  
  <h2 style="background:#3CF"><span class="icon-user"></span>其他</h2>
  <ul style="display:block">
    <li><a href="teacher_pw_update" target="right"><span class="icon-caret-right"></span>修改密码</a></li>
  </ul>
  
</div>
<script type="text/javascript">
$(function(){
  $(".leftnav h2").click(function(){
	  $(this).next().slideToggle(200);	
	  $(this).toggleClass("on"); 
  })
  $(".leftnav ul li a").click(function(){
	    $("#a_leader_txt").text($(this).text());
  		$(".leftnav ul li a").removeClass("on");
		$(this).addClass("on");
  })
});
</script>
<?php
include('conn.php');
// echo$_SESSION['yh'];
// die();
      $sql = "select * from teacher where tea_number = {$_SESSION['yh']}";
        $result = $link->query($sql);
        $row = $result->fetch_assoc();
?>
<ul class="bread">
  <li style="color:#F00; font-size:20px; font-weight:bold"><?php echo @$row['name'] ?></span>老师&nbsp;&nbsp;<span style="color:#000000">欢迎您!!!</span></li>
</ul>
 <div class="admin">
        <iframe scrolling="auto" rameborder="0" src="teacher_course_info.php" name="right" width="100%" height="100%"></iframe>
      </div>
</body>
</html>