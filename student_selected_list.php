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

  <form method="post" action="student_cancel_select.php">
    <div class="panel admin-panel">
      <div class="panel-head"><strong class="icon-reorder">已选课程</strong></div>


      <?php
      session_start();
      @$yh = $_SESSION['yh'];
      include("conn.php");
      include("function.php");
      $fc = new func;
      $sql2 = "select * from student where stu_number='$yh'";
      $rs = $link->query($sql2);
      $row = $rs->fetch_assoc();
      // $r=$row['select_course'];
      $sql3 = "select c.course_number 
    			from student a,course b,score c
    			where a.stu_number=c.stu_number and c.course_number=b.course_number and a.stu_number=$yh";
      $data = $link->query($sql3);
      foreach ($data as $vv) :
        $cno[] = $vv['course_number'];
      endforeach;

      $sql1 = "select b.*,c.grade 
    			from student a,course b,score c
    			where a.stu_number=c.stu_number and c.course_number=b.course_number and a.stu_number=$yh";

      $rs = $link->query($sql1);
      ?>
      <table class="table table-hover text-center">
        <tr>
          <td width="100">
            <div align="center">课程号</div>
          </td>
          <td width="100">
            <div align="center">课程名称</div>
          </td>
          <td width="100">
            <div align="center">授课老师</div>
          </td>
          <td width="100">
            <div align="center">学年</div>
          </td>
          <td width="100">
            <div align="center">学期</div>
          </td>
          <td width="100">
            <div align="center">开课学院</div>
          </td>
          <td width="100">
            <div align="center">课程分数</div>
          </td>
          <td width="100">
            <div align="center">退选</div>
          </td>
        </tr>


        <?php
        while ($row = $rs->fetch_assoc()) {
        ?>

          <tr>
            <td align="center"><?php echo $row['course_number'] ?></td>
            <td align="center"><?php echo $row['name'] ?></td>
            <td align="center"><?php echo $row['teacher'] ?></td>
            <td align="center"><?php echo $row['year'] ?></td>
            <td align="center"><?php echo $row['term'] ?></td>
            <td align="center"><?php echo $row['department'] ?></td>
            <!-- 分数外观显示判断 -->
            <?php if ($row['grade'] == NULL) { ?>
              <td align="center" style="color:yellowgreen;font-weight:bolder">
                待评分
              </td>
            <?php } elseif ($row['grade'] >= 60) { ?>
              <td align="center" style="color: green;font-weight:bolder">
                <?php echo $row['grade'] ?>
              </td>
            <?php } else { ?>
              <td align="center" style="color: red;font-weight:bolder">
                <?php echo $row['grade'] ?>
              </td>
            <?php  } ?>

            <td align="center">
              <input type='checkbox' name='kec[]' value='<?php echo $row['course_number'] ?>' />
            </td>
          </tr>
        <?php
        }
        ?>
        <tr>
          <td colspan="7" align="center"><input type="submit" class="button border-green" value="退选" /></td>
        </tr>
      </table>
    </div>
  </form>
</body>

</html>