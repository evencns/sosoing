<?php
/*
 * 
 * ��վע���¼��֤��
 * ���������->����ͼƬ->�����д��ͼƬ->������session��
 */

$rand  ='';
for ($i=0;$i<4;$i++){
	
	$rand.=dechex(rand(1,15));
	
}
$im = imagecreate(60,20);
//������ɫ
$bg = imagecolorallocate($im, 255, 255, 255);
$te = imagecolorallocate($im, 0, 0, 0);
$te1 = imagecolorallocate($im, 100, 100, 100);
//д��ͼƬ
imagestring($im, rand(3,6), rand(1,20), rand(1,8), $rand, $te);


//����
for($i=0;$i<50;$i++){
 	imagesetpixel($im,rand(1,60),rand(1,20),$te1);
}

//����ͼƬ
header ("Content-type: image/jpeg");
imagejpeg($im);

?>