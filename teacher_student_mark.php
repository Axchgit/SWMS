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
      <div class="body-content">
        <form name="myForm" onsubmit="return validateForm()" method="post" class="form-x" action="">
          <div class="form-group">            
            <div class="label">
              <label>分数：</label>
            </div>
            <div class="field">
              <input type="text" class="input w50" placeholder="1~100" name="grade" />
              <div class="tips"></div>
              <button name="up" class="button bg-main icon-check-square-o" type="submit"> 提交</button>
            </div>
          </div>
        </form>
      </div>
    </div>
    <script>
          function validateForm() {
            var x = document.forms["myForm"]["grade"].value;
            if (isNaN(x) || x < 1 || x > 100) {
              alert("分数必须为1~100");
              return false;
            }
          }
        </script>

</body>

</html>

<?php
session_start();
$tno = $_SESSION['yh'];
include("conn.php");
include("function.php");
$fc = new func;
if (isset($_POST['up'])) {
  $stu = $_GET['sno'];
  $grade = $_POST['grade'];
$sql1 = "select course_number from course where tea_number = $tno";
$result = $link->query($sql1);

$row = $result->fetch_assoc();


  $sql = "update score set grade=$grade where stu_number=$stu and course_number={$row['course_number']}";
  $rs = $link->query($sql);
  if ($rs == true) {
    $fc->alrt("评分/修改 成功！", "teacher_student_list.php");
  } else {
    $fc->alrt("评分/修改 失败！", "teacher_student_list.php");
  }
}

?>