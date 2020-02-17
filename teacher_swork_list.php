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

    <!-- <form method="post" action=""> -->
    <div class="panel admin-panel">
        <div onclick="table_one()" ondblclick="table_double()" class="panel-head"><strong class="icon-reorder">学生作业批改</strong></div>

        <?php
        session_start();
        @$yh = $_SESSION['yh'];

        include("conn.php");
        include("function.php");
        $fc = new func;
        //$sql="select * from student ";
        $sql = "select c.*
    from teacher a,course b,student_work c
    where a.tea_number=b.tea_number and b.course_number=c.course_number and a.tea_number=$yh";
        $result = $link->query($sql);

        $sql1 = "select c.wname,c.twork_id,count(*) as sum
    from teacher a,course b,student_work c
    where a.tea_number=b.tea_number and b.course_number=c.course_number and a.tea_number=$yh group by wname";
        $result1 = $link->query($sql1);

        $sql3 = "select count(*) as all_num
    	from student a,course b,score c,teacher t
    	where a.stu_number=c.stu_number and c.course_number=b.course_number and b.tea_number=t.tea_number and t.tea_number=$yh";
        $result2 = $link->query($sql3);
        $row_all = $result2->fetch_assoc()

        ?>

        <table id="talbe" class="table table-hover text-center">
            <tr>
                <td width="100">
                    <div align="center">作业名称</div>
                </td>
                <td width="100">
                    <div align="center">已提交人数</div>
                </td>
                <td width="100">
                    <div align="center">未提交人数</div>
                </td>
                <td width="100">
                    <div align="center">总人数</div>
                </td>
                <td width="100">
                    <div align="center">操做</div>
                </td>
            </tr>
            <?php ?>
            <?php
            while ($row = $result1->fetch_assoc()) {

            ?>
                <tr ondblclick="double()" onclick="one('<?php echo $row['twork_id'] ?>','<?php echo $row['wname'] ?>')">
                    <td width="100">
                        <div>
                            <h3 style="color: green;font-weight:bolder"><?php echo $row['wname'] ?></h3>
                        </div>
                    </td>
                    <td width="100">
                        <div>
                            <h2 style="color: #548fc9"><?php echo $row['sum'] ?></h2>
                        </div>
                    </td>
                    <td width="100">
                        <div>
                            <h2 style="color: red"><?php echo $row_all['all_num'] - $row['sum'] ?></h2>
                        </div>
                    </td>
                    <td width="100">
                        <div>
                            <h2 style="color:black"><?php echo $row_all['all_num'] ?></h2>
                        </div>
                    </td>
                    <td align="center">
                        <a href="del.php?id=<?php echo $row['twork_id'] ?>&del=teacher_work&address=<?php echo $row['address'] ?>" onClick="return confirm('真的要删除吗？')"><button class="button_new button_red">删除</button></a>
                    </td>
                </tr>
            <?php } ?>
        </table>





        <script>
            function one(wid, wname) {
                document.getElementById('demo').style.display = 'block';
                document.getElementById('demo').src = "teacher_student_work?wid=" + wid + "&wname=" + wname;
                // alert(document.getElementById('demo').src);
            }

            function table_one() {
                document.getElementById('table').style.display = 'none';
                // document.getElementById('demo').src = "teacher_student_work?wid=" + wid + "&wname=" + wname;
                // alert(document.getElementById('demo').src);
            }

            function double() {
                document.getElementById('demo').style.display = 'none';
                // document.getElementById('demo').src = "teacher_student_list?sno=1";
            }

            function table_double() {
                document.getElementById('table').style.display = 'block';
                // document.getElementById('demo').src = "teacher_student_work?wid=" + wid + "&wname=" + wname;
                // alert(document.getElementById('demo').src);
            }
        </script>




    </div>
    <!-- </form> -->
    <iframe id="demo" style="display: none;" src="" height="400px" width="100%" frameborder="0"></iframe>

</body>

</html>