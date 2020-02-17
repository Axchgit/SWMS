<?php

include("conn.php");
include("function.php");
$wid = $_GET['wid'];
$wname = $_GET['wname'];
$fc = new func;
if (isset($_POST['up'])) {
    $id = $_GET['id'];
    $score = $_POST['score'];
    $sql = "update student_work set score='$score' where  id='$id'";
    $rs = $link->query($sql);
    if ($rs == true) {
        $fc->alrt("评分/修改 成功！", "teacher_student_work.php?wid=$wid&wname=$wname");
    } else {
        $fc->alrt("评分/修改 失败！", "teacher_student_work.php?wid=$wid&wname=$wname");
    }
}
