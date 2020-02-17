<?php
include("conn.php");
include("function.php");
$wid = $_GET['wid'];
$wname = $_GET['wname'];
$cname = $_GET['cname'];
$fc = new func;

//删除学生作业数据库信息
$sql = "delete from student_work where twork_id = $wid";
mysqli_query($link, $sql);

//删除教师作业文件
$sql2 = "select * from teacher_work where id = $wid";
$result2 = $link->query($sql2);
$row2 = $result2->fetch_assoc();
unlink($row2['address']);

//删除教师作业文件数据库信息
$sql1 = "delete from teacher_work where id = $wid";
mysqli_query($link, $sql1);

/*
 * 删除学生作业文件
 */
//设置需要删除的文件夹
$path_student = './files/student_work/' . $cname . '/' . $wname . '/';
//清空文件夹函数和清空文件夹后删除空文件夹函数的处理
function deldir($path_student)
{
    //如果是目录则继续
    if (is_dir($path_student)) {
        //扫描一个文件夹内的所有文件夹和文件并返回数组
        $p = scandir($path_student);
        foreach ($p as $val) {
            //排除目录中的.和..
            if ($val != "." && $val != "..") {
                //如果是目录则递归子目录，继续操作
                if (is_dir($path_student . $val)) {
                    //子目录中操作删除文件夹和文件
                    deldir($path_student . $val . '/');
                    //目录清空后删除空文件夹
                    @rmdir($path_student . $val . '/');
                } else {
                    //如果是文件直接删除
                    unlink($path_student . $val);
                }
            }
        }
        //删除本路径文件夹
        rmdir($path_student);
    }
}
//调用函数，传入路径
deldir($path_student);

if (mysqli_affected_rows($link) > 0) {
    $fc->alrt("删除成功", 'teacher_swork_list.php');
} else {
    $fc->alrt("删除失败", 'teacher_swork_list.php');
}
