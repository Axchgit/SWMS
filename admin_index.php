<!DOCTYPE html>
<html lang="zh-cn">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <meta name="renderer" content="webkit">
  <link rel="icon" href="images/new_admin.png" type="image/x-icon" />

  <title>选课系统管理中心</title>
  <link rel="stylesheet" href="css/pintuer.css">
  <link rel="stylesheet" href="css/admin.css">
  <script src="js/jquery.js"></script>
</head>

<body style="background:url(images/login_bg.jpg); background-repeat:no-repeat; text-align:center; background-size: 100%;">

  <?php
  session_start();
  ?>
  <div class="header bg-main">
    <div style="float:left" class="logo margin-big-left fadein-top">
      <h1><img src="images/admin.jpg" class="radius-circle rotate-hover" height="60" alt="" />管理中心</h1>
    </div>
    <div style="float:right; margin-right:5%" class="head-l">
      <!--<a class="button button-little bg-blue" href="front/front_index.php" target="_blank"><span class="icon-home"></span> 前台首页</a> &nbsp;&nbsp;-->
      <!--<a href="##" class="button button-little bg-blue"><span class="icon-wrench"></span> 清除缓存</a> &nbsp;&nbsp;--><a class="button button-little bg-red" href="login.html"><span class="icon-power-off"></span> 退出登录</a> </div>
  </div>
  <div class="leftnav">
    <div class="leftnav-title"><strong><span class="icon-list"></span>菜单列表</strong></div>
    <h2 style="background:#3CF"><span class="icon-user"></span>课程</h2>
    <ul style="display:block">
      <!--<li><a href="info.html" target="right"><span class="icon-caret-right"></span>网站设置</a></li>-->

      <li><a href="admin_course_list.php" target="right"><span class="icon-caret-right"></span>课程列表</a></li>
      <li><a href="admin_course_demand.php" target="right"><span class="icon-caret-right"></span>查询课程</a></li>
      <li><a href="admin_course_add.php" target="right"><span class="icon-caret-right"></span>添加课程</a></li>


    </ul>
    <h2 style="background:#3CF"><span class="icon-pencil-square-o"></span>学生</h2>
    <ul>
      <li><a href="admin_student_list.php" target="right"><span class="icon-caret-right"></span>学生列表</a></li>
      <li><a href="admin_student_demand.php" target="right"><span class="icon-caret-right"></span>查询学生</a></li>
      <li><a href="admin_student_add.php" target="right"><span class="icon-caret-right"></span>添加学生</a></li>


    </ul>
    <h2 style="background:#3CF"><span class="icon-pencil-square-o"></span>教师</h2>
    <ul>
      <li><a href="admin_teacher_list.php" target="right"><span class="icon-caret-right"></span>教师列表</a></li>
      <li><a href="admin_teacher_demand.php" target="right"><span class="icon-caret-right"></span>查询教师</a></li>
      <li><a href="admin_teacher_add.php" target="right"><span class="icon-caret-right"></span>添加教师</a></li>
    </ul>
    <h2 style="background:#3CF"><span class="icon-pencil-square-o"></span>管理员</h2>
    <ul>
      <li><a href="admin_self_list.php" target="right"><span class="icon-caret-right"></span>管理员列表</a></li>
      <li><a href="admin_self_add.php" target="right"><span class="icon-caret-right"></span>添加管理员</a></li>
    </ul>



  </div>
  <script type="text/javascript">
    $(function() {
      $(".leftnav h2").click(function() {
        $(this).next().slideToggle(200);
        $(this).toggleClass("on");
      })
      $(".leftnav ul li a").click(function() {
        $("#a_leader_txt").text($(this).text());
        $(".leftnav ul li a").removeClass("on");
        $(this).addClass("on");
      })
    });
  </script>
  
  <ul class="bread">
    <li style="color:#FF0000; font-size:20px; font-weight:bold"><?php echo @$_SESSION['yh'] ?></span>管理员&nbsp;&nbsp;<span style="color:#000000">欢迎您!!!</span></li>
  </ul>
  <div class="admin">
    <iframe scrolling="auto" rameborder="0" src="admin_student_list.php" name="right" width="100%" height="100%"></iframe>
  </div>

</body>

</html>