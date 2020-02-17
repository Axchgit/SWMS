<?php
$path_student = './files/student_work/PHP项目开发/留言板演示/';
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
    rmdir($path_student);
}
}
//调用函数，传入路径
deldir($path_student);