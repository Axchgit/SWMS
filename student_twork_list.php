<!DOCTYPE html>
<html lang="zh-cn">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <meta name="renderer" content="webkit">
  <title></title>
  <link rel="stylesheet" type="text/css" href="css/pintuer.css">
  <link rel="stylesheet" type="text/css" href="css/admin.css">
  <script src="js/jquery.js"></script>
  <script src="js/pintuer.js"></script>
</head>

<body style="background:url(images/login_bg.jpg); background-repeat:no-repeat; text-align:center; background-size: 100%;">

  <div class="panel admin-panel">
    <div class="panel-head"><strong class="icon-reorder">课程作业</strong></div>
    <?php
    session_start();
    @$yh = $_SESSION['yh'];

    include("conn.php");
    include("function.php");
    $fc = new func;
    //$sql="select * from student ";
    //$sql = "select * from teacher_work where tea_number=$tno";
    $sql = "select c.*
    from student a,score b,teacher_work c
    where a.stu_number=b.stu_number and b.course_number=c.course_number and a.stu_number=$yh order by deadline desc";
    $result = $link->query($sql);

    $sql3 = "select wname from student_work where stu_number = $yh";
    $data = $link->query($sql3);
    foreach ($data as $vv) :
      $wid[] = $vv['wname'];
    endforeach;

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
          <div align="center">课程号</div>
        </td>
        <td width="100">
          <div align="center">教工号</div>
        </td>

        <td width="100">
          <div align="center">上传时间</div>
        </td>
        <td width="100">
          <div align="center">截止日期</div>
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
          <td align="center"><?php echo $row['wname'] ?></td>
          <td align="center"><?php echo $row['course_number'] ?></td>
          <td align="center"><?php echo $row['tea_number'] ?></td>
          <td align="center"><?php echo $row['uploaddate'] ?></td>
          <td align="center"><?php echo $row['deadline'] ?></td>
          <td align="center">
            <?php
            if ($row['deadline'] <= date("Y-m-d H:i:s", time())) {
            ?>
              <button class="button_new button_red" style="background-color: red;color:white;cursor: not-allowed">已截止</button>

            <?php
            } else {

            ?>
              <button class="button_new button_blue">下载</button>
              <?php
              if (@$wid != null) {
                if (in_array($row['wname'], @$wid)) {
              ?>
                  <button class="button_new button_green" style="background-color: #54c96d;color:white;cursor: not-allowed">已提交</button>
                <?php
                } else {
                ?>
                  <a href="student_work_upload?id=<?php echo $row['id'] ?>&wname=<?php echo $row['wname'] ?>&cno=<?php echo $row['course_number'] ?>"><button class="button_new button_green">提交</button></a>
                <?php
                }
              } else {
                ?>
                <a href="student_work_upload?id=<?php echo $row['id'] ?>&wname=<?php echo $row['wname'] ?>&cno=<?php echo $row['course_number'] ?>"><button class="button_new button_green">提交</button></a>
            <?php
              }
            }
            ?>
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