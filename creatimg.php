<?php
/**
 * Created by PhpStorm.
 * User: MrLiu
 * Date: 2016/2/25
 * Time: 9:49
 */



/*$img = imagecreate(400,300);
imagecolorallocate($img,255,255,255);
imageellipse($img,200,200,20,20,imagecolorallocate($img,255,0,0));
imageline($img,200,200,100,100,imagecolorallocate($img,0,255,0));
header('Content-type:image/png');
imagepng($img);*/


$img = imagecreatefromjpeg('01.jpg');
imagestring($img,3,10,10,"LiuboMake...",imagecolorallocate($img,0,255,0));
header('Content-type:image/jpg');
imagepng($img);




?>
