<?php
/*
 * 
 * 网站注册登录验证码
 * 生成随机数->创建图片->随机数写入图片->保存在session中
 */

$rand  ='';
for ($i=0;$i<4;$i++){
	
	$rand.=dechex(rand(1,15));
	
}
$im = imagecreate(60,20);
//设置颜色
$bg = imagecolorallocate($im, 255, 255, 255);
$te = imagecolorallocate($im, 0, 0, 0);
$te1 = imagecolorallocate($im, 100, 100, 100);
//写入图片
imagestring($im, rand(3,6), rand(1,20), rand(1,8), $rand, $te);


//画点
for($i=0;$i<50;$i++){
 	imagesetpixel($im,rand(1,60),rand(1,20),$te1);
}

//输入图片
header ("Content-type: image/jpeg");
imagejpeg($im);

?>