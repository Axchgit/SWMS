<!DOCTYPE html>
<html lang="zh-cn">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <meta name="renderer" content="webkit">
  <title>学生评教中心</title>
  <link rel="icon" href="images/student.jpg" type="image/x-icon" />
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
      <h1><img src="images/student.jpg" class="radius-circle rotate-hover" height="50" alt="" />学生中心</h1>
    </div>
    <div style="float:right; margin-right:5%" class="head-l">
      <!--<a  class="button button-little bg-blue" href="" target="_blank"><span class="icon-home"></span> 前台首页</a> &nbsp;&nbsp;<!--<a href="##" class="button button-little bg-blue"><span class="icon-wrench"></span> 清除缓存</a> &nbsp;&nbsp;--><a class="button button-little bg-red" href="login.html"><span class="icon-power-off"></span> 退出登录</a> </div>
  </div>
  <div class="leftnav">
    <div class="leftnav-title"><strong><span class="icon-list"></span>菜单列表</strong></div>

    <h2 style="background:#3CF"><span class="icon-pencil-square-o"></span>信息展示</h2>
    <ul>
      <li><a href="student_info.php" target="right"><span class="icon-caret-right"></span>个人信息</a></li>
      <li><a href="student_selected_list.php" target="right"><span class="icon-caret-right"></span>已选课程</a></li>
      <li><a href="student_twork_list.php" target="right"><span class="icon-caret-right"></span>作业列表</a></li>
      <li><a href="student_upwork_list.php" target="right"><span class="icon-caret-right"></span>上交作业列表</a></li>
      <li><a href="student_material_list.php" target="right"><span class="icon-caret-right"></span>课程资料列表</a></li>
    </ul>

    <h2 style="background:#3CF"><span class="icon-user"></span>基本功能</h2>
    <ul style="display:block">
      <!--<li><a href="info.html" target="right"><span class="icon-caret-right"></span>网站设置</a></li>-->
      <li><a href="student_course_list.php" target="right"><span class="icon-caret-right"></span>选课入口</a></li>
      <li><a href="student_course_select.php" target="right"><span class="icon-caret-right"></span>查询课程</a></li>
      <!-- <li><a href="student_work_upload.php" target="right"><span class="icon-caret-right"></span>作业上交</a></li> -->
    </ul>


    <h2 style="background:#3CF"><span class="icon-pencil-square-o"></span>其他</h2>
    <ul>
      <li><a href="student_pw_update.php" target="right"><span class="icon-caret-right"></span>修改密码</a></li>
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
  <?php
  include('conn.php');
  // echo$_SESSION['yh'];
  // die();
  $sql = "select * from student where stu_number = {$_SESSION['yh']}";
  $result = $link->query($sql);
  $row = $result->fetch_assoc();
  ?>
  <ul class="bread">
    <li style="color:#F00; font-size:15px; font-weight:bold"><?php echo @$row['name'] ?></span>&nbsp;&nbsp;<span style="color:#3CF">欢迎您!!!</span></li>
  </ul>
  <div class="admin">
    <iframe scrolling="auto" rameborder="0" src="student_info.php" name="right" width="100%" height="100%"></iframe>
  </div>
</body>

</html>