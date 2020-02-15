<?php
session_start();
Header("Content_type:image/png");
$im=imagecreate(40,18);
$bg=imagecolorallocate($im,240,248,255);
imagefill($im,0,0,$bg);
$vcodes="";
for($i=0;$i<4;$i++){
	$fontc=imagecolorallocate($im,rand(0,255),rand(0,255),rand(0,255));
	$autonum=rand(1,9);
	imagestring($im,5,2+$i*10,1,$autonum,$fontc);
	$vcodes=$vcodes.$autonum;
	}
$_SESSION['vcode']=$vcodes;
imagepng($im);
imagedestroy($im);
?>

<?php /*?><?php
session_start();
header("content-type:image/png");
$img=imagecreate(110,36);//画布大小
$bg=imagecolorallocate($img,240,248,255);//背景颜色
imagefill($img,0,0,$bg);//画布颜色填充从0.0坐标开始画布里面的颜色会被填充
$vcode="";
for($i=0,$j=1;$i<4;$i++,$j++){
	$font_c=imagecolorallocate($img,rand(0,255),rand(0,255),rand(0,255));
	$num=rand(1,9);
	$vcode.=$num;
	imagestring($img,20,$j*20,10,$num,$font_c);//调节文字大小，img后数字;$i后数字调节验证码的位置
	}
	
	$_SESSION['vcode']=$vcode;
	imagepng($img);
	imagedestroy($img);
?><?php */?>
//<?php
//session_start();
//Header("Content_type:image/png");
//$im=imagecreate(40,18);
//$bg=imagecolorallocate($im,0,0,0);
//imagefill($im,0,0,$bg);
//$vcodes="";
//for($i=0;$i<4;$i++){
//	$fontc=imagecolorallocate($im,255,255,255);
//	$autonum=rand(1,9);
//	imagestring($im,5,2+$i*10,1,$autonum,$fontc);
//	$vcodes=$vcodes.$autonum;
//	}
//$_SESSION['vode']=$vcodes;
//imagepng($im);
//imagedestroy($im);
//?>
