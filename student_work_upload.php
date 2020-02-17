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
    <div class="panel-head"><strong class="icon-reorder">作业上交</strong></div>


    <div class="body-content">
      <form method="post" class="form-x" action="" enctype="multipart/form-data">
        <div class="form-group">
          <div class="label">
            <label>作业名：</label>
          </div>
          <div class="field">
            <input type="text" class="input w50" value="<?php echo $_GET['wname'] ?>" name="wname" data-validate="required:请输入作业名" readonly/>
            <div class="tips"></div>
          </div>
        </div>

        <div class="form-group">
          <div class="label">
            <label>课程号：</label>
          </div>
          <div class="field">
            <input type="text" class="input w50" value="<?php echo $_GET['cno'] ?>" name="course_number" data-validate="required:请输入课程号"readonly />
            <div class="tips"></div>
          </div>
        </div>
        <div class="form-group">
          <div class="label">
            <label>文件：</label>
          </div>
          <div class="field">
            <input type="file" class="input w50" value="" name="workfile" />
            <div class="tips"></div>
          </div>
        </div>
        <div align="center" class="field">
          <button name="up" class="button bg-main icon-check-square-o" type="submit"> 提交</button>
        </div>

      </form>
    </div>
  </div>

</body>

</html>

<?php
session_start();
@$sno = $_SESSION['yh'];
include("conn.php");
include("function.php");
$fc = new func;
if (isset($_POST['up'])) {
  $sql_name = "select * from student where stu_number = $sno";
  $data_name = $link->query($sql_name);
  $row_name = $data_name->fetch_assoc();

  $wname = $_POST['wname'];
  // $wname = $_GET['wname'];
  $course_number = $_POST['course_number'];
  $sql_course = "select * from course where course_number = $course_number";
  $data_course = $link->query($sql_course);
  $row_course = $data_course->fetch_assoc();
  // $course_number = $_GET['cno'];
  $wid = $_GET['id'];

  $datetime = date("Y-m-d H:i:s", time());
  // $worktime = date("H:i:s", time());
  //		$tno = $_SESSION['yh'];
  //文件上传操作
  $arr = $_FILES['workfile'];
  $arr['tmp_name'];
  //TODO: TIP:截取 . 后面的字符
  $suffix = strrchr($arr['name'], '.');
  $address = "./files/student_work/" .$row_course['name'].'/'.$wname.'/'. $sno
    . '-' . $row_name['name'] . '-' . $wname . '-' . $wid . $suffix;

  move_uploaded_file($arr['tmp_name'], $address);

  $sql2 = "select * from student where stu_number=$sno";
  $data = $link->query($sql2);
  foreach ($data as $v);
  $sname = $v['name'];

  $sql = "INSERT INTO student_work (`twork_id`,`wname`,`stu_number`,`sname`,`course_number`,`address`,`uploaddate`)
    VALUES ('$wid','$wname', '$sno', '$sname','$course_number', '$address', '$datetime')";
  $result = $link->query($sql);

  if ($link->affected_rows > 0) {
    $fc->alrt("添加成功", "student_upwork_list.php");
  } else {
    $fc->alrt("添加失败", "student_upwork_list.php");
  }
}

?>