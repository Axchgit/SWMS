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

  <!-- <form method="post" action="select_save.php"> -->
  <div class="panel admin-panel">
    <div class="panel-head"><strong class="icon-reorder">上交作业列表</strong></div>
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
    @$yh = $_SESSION['yh'];

    include("conn.php");
    include("function.php");
    $fc = new func;
    //$sql="select * from student ";
    $sql = "select * from student_work where stu_number=$yh";
    $result = $link->query($sql);

    ?>
    <table class="table table-hover text-center">
      <tr>
        <td width="100">
          <div align="center">ID</div>
        </td>
        <td width="100">
          <div align="center">作业名</div>
        </td>
        <td width="100">
          <div align="center">学号</div>
        </td>
        <td width="100">
          <div align="center">姓名</div>
        </td>
        <td width="100">
          <div align="center">课程号</div>
        </td>
        <td width="100">
          <div align="center">分数</div>
        </td>

        <td width="100">
          <div align="center">上传时间</div>
        </td>
        <!--<td width="100"><div align="center">专业</div></td>
    <td width="100"><div align="center">班级</div></td>
    <td width="100"><div align="center">分数</div></td>-->

        <!--<td width="100"><div align="center">密码</div></td>-->
        <!--<td width="100"><div align="center">选修课程</div></td>-->
        <td width="100">
          <div align="center">操作</div>
        </td>
      </tr>

      <?php

      while ($row = $result->fetch_assoc()) {
      ?>

        <tr>
          <td align="center"><?php echo $row['id'] ?></td>
          <td align="center"><?php echo $row['wname'] ?></td>
          <td align="center"><?php echo $row['stu_number'] ?></td>
          <td align="center"><?php echo $row['sname'] ?></td>
          <td align="center"><?php echo $row['course_number'] ?></td>
          <!-- 分数外观显示判断 -->
          <?php if ($row['score'] == NULL) { ?>
            <td align="center" style="color:yellowgreen;font-weight:bolder">
              待批改
            </td>
          <?php } elseif ($row['score'] >= 60) { ?>
            <td align="center" style="color: green;font-weight:bolder">
              <?php echo $row['score'] ?>
            </td>
          <?php } else { ?>
            <td align="center" style="color: red;font-weight:bolder">
              <?php echo $row['score'] ?>
            </td>
          <?php  } ?>
          <td align="center"><?php echo $row['uploaddate'] ?></td>
          <!--<td align="center"><?php echo $row['pw'] ?></td>-->
          <!--<td align="center"><?php echo $row['select_course'] ?></td>-->
          <td align="center"><a href="del.php?id=<?php echo $row['id'] ?>&del=student_work&address=<?php echo $row['address'] ?>" onClick="return confirm('真的要删除吗？')"><button class="button_new button_red">删除</button></a>
            <a href="<?php echo $row['address'] ?>"><button class="button_new button_blue">下载</button></a>
          </td>
        </tr>
      <?php
      }

      ?>
    </table>
  </div>
  <!-- </form> -->

</body>

</html>