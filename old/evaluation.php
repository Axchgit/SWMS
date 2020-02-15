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
<body>
<form method="post" action="evaluation_save.php">
  <div class="panel admin-panel">
    <div class="panel-head"><strong class="icon-reorder">评教入口</strong></div>
<!--    <div class="padding border-bottom">
      <ul class="search">
        <li>
          <button type="button"  class="button border-green" id="checkall"><span class="icon-check"></span> 全选</button>
          <button type="submit" class="button border-red"><span class="icon-trash-o"></span> 批量删除</button>
        </li>
      </ul>
    </div--> 
    <?php
	include("conn.php");
    include("function.php");
    $fc=new func;
	session_start();
	$tea=$_GET["tea_id"];
	$_SESSION['tea']=$tea;
	
	$UserID = $_SESSION["yh"];
	
	$sql = "select * from result where student='$UserID' and teacher='$tea'";
	$rs=$link->query($sql);
	$aff = mysqli_affected_rows($link);
	if($aff>0){
		$fc->alrt("您已经评价过了哟！","pj_list.php");
	}

	?>
<form method="post" action="evaluation_save.php">
<table class="table table-hover text-center">
  <tr>
    <td colspan="4"><div align="center">正在对 <?php echo $tea;?> 进行评教</div></td>
    </tr>
  <tr>
    <td width="381"><div align="center">序号</div></td>
    <td width="381"><div align="center">评价内容</div></td>
    <td width="86"><div align="center">总分值</div></td>
    <td width="231"><div align="center">得分</div></td>
  </tr>
  <tr>
    <td><div align="center">1</div></td>
    <td><div align="center">作业适中，批改认真</div></td>
    <td><div align="center">6</div></td>
    <td><div align="center"><input type="text" name="1" /></div></td>
  </tr>
  <tr>
    <td><div align="center">2</div></td>
    <td><div align="center">适时安排辅导、答疑</div></td>
    <td><div align="center">4</div></td>
    <td><div align="center">
      <input type="text" name="2" />
    </div></td>
  </tr>
  <tr>
    <td><div align="center">3</div></td>
    <td><div align="center">不擅自停课，不随便调课</div></td>
    <td><div align="center">6</div></td>
    <td><div align="center">
      <input type="text" name="3" />
    </div></td>
  </tr>
  <tr>
    <td><div align="center">4</div></td>
    <td><div align="center">教材（讲义）适用</div></td>
    <td><div align="center">5</div></td>
    <td><div align="center">
      <input type="text" name="4" />
    </div></td>
  </tr>
  <tr>
    <td><div align="center">5</div></td>
    <td><div align="center">教学内容充实、精要</div></td>
    <td><div align="center">8</div></td>
    <td><div align="center">
      <input type="text" name="5" />
    </div></td>
  </tr>
  <tr>
    <td><div align="center">6</div></td>
    <td><div align="center">概念准确，条理清楚</div></td>
    <td><div align="center">6</div></td>
    <td><div align="center">
      <input type="text" name="6" />
    </div></td>
  </tr>
  <tr>
    <td><div align="center">7</div></td>
    <td><div align="center">重点突出，难点分析透彻</div></td>
    <td><div align="center">7</div></td>
    <td><div align="center">
      <input type="text" name="7" />
    </div></td>
  </tr>
  <tr>
    <td><div align="center">8</div></td>
    <td><div align="center">适时与学生沟通交流</div></td>
    <td><div align="center">5</div></td>
    <td><div align="center">
      <input type="text" name="8" />
    </div></td>
  </tr>
  <tr>
    <td><div align="center">9</div></td>
    <td><div align="center">注意培养学生分析、解决问题的能力</div></td>
    <td><div align="center">8</div></td>
    <td><div align="center">
      <input type="text" name="9" />
    </div></td>
  </tr>
  <tr>
    <td><div align="center">10</div></td>
    <td><div align="center">讲授生动，富有启发性，激发思维</div></td>
    <td><div align="center">6</div></td>
    <td><div align="center">
      <input type="text" name="10" />
    </div></td>
  </tr>
  <tr>
    <td><div align="center">11</div></td>
    <td><div align="center">恰当使用电教、CAI等教学手段</div></td>
    <td><div align="center">5</div></td>
    <td><div align="center">
      <input type="text" name="11" />
    </div></td>
  </tr>
  <tr>
    <td><div align="center">12</div></td>
    <td><div align="center">情绪饱满，教态良好</div></td>
    <td><div align="center">6</div></td>
    <td><div align="center">
      <input type="text" name="12" />
    </div></td>
  </tr>
  <tr>
    <td><div align="center">13</div></td>
    <td><div align="center">知识丰富，治学严谨</div></td>
    <td><div align="center">6</div></td>
    <td><div align="center">
      <input type="text" name="13" />
    </div></td>
  </tr>
  <tr>
    <td><div align="center">14</div></td>
    <td><div align="center">关心学生，严格要求</div></td>
    <td><div align="center">5</div></td>
    <td><div align="center">
      <input type="text" name="14" />
    </div></td>
  </tr>
  <tr>
    <td><div align="center">15</div></td>
    <td><div align="center">我学会了本课程的基本内容</div></td>
    <td><div align="center">6</div></td>
    <td><div align="center">
      <input type="text" name="15" />
    </div></td>
  </tr>
  <tr>
    <td><div align="center">16</div></td>
    <td><div align="center">提高了兴趣，激发了求知欲</div></td>
    <td><div align="center">5</div></td>
    <td><div align="center">
      <input type="text" name="16" />
    </div></td>
  </tr>
  <tr>
    <td><div align="center">17</div></td>
    <td><div align="center">通过本课程教学感到很有收获</div></td>
    <td><div align="center">6</div></td>
    <td><div align="center">
      <input type="text" name="17" />
    </div></td>
  </tr>
   <tr>
    <td height="47"><div align="center">意见</div></td>
    <td colspan="3"><input style="height:40px;width:600px" type="text" name="advice" /></td>
    </tr>
     <tr>
    <td colspan="4" align="right"><a href="pj_list.php">返回&nbsp;&nbsp;&nbsp;</a><input type="submit" value="保存" /></td>
    </tr>
</table>
</form>

</body></html>