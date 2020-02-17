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
      <div class="panel-head"><strong class="icon-reorder">课程资料列表</strong></div>
      <?php
      session_start();
      @$yh = $_SESSION['yh'];

      include("conn.php");
      include("function.php");
      $fc = new func;
      //$sql="select * from student ";
      $sql = "select c.*
    from student a,score b,course_material c
    where a.stu_number=b.stu_number and b.course_number=c.course_number and a.stu_number=$yh";
      $result = $link->query($sql);
      ?>
      <table class="table table-hover text-center">
        <tr>
          <td width="100">
            <div align="center">ID</div>
          </td>
          <td width="100">
            <div align="center">课程号</div>
          </td>
          <td width="100">
            <div align="center">教工号</div>
          </td>
          <td width="100">
            <div align="center">资料名</div>
          </td>
          <td width="100">
            <div align="center">上传时间</div>
          </td>
          <td width="100">
            <div align="center">操作</div>
          </td>
        </tr>
        <?php
        while ($row = $result->fetch_assoc()) {
        ?>
          <tr>
            <td align="center"><?php echo $row['id'] ?></td>
            <td align="center"><?php echo $row['course_number'] ?></td>
            <td align="center"><?php echo $row['tea_number'] ?></td>
            <td align="center"><?php echo $row['mname'] ?></td>
            <td align="center"><?php echo $row['uploaddate'] ?></td>
            <td align="center"><a href="<?php echo $row['address'] ?>"><button class="button_new button_blue">下载</button></a></td>
          </tr>
        <?php
        }
        ?>
      </table>
    </div>
  </form>

</body>

</html>