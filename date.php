<?php
/**
 * Created by PhpStorm.
 * User: MrLiu
 * Date: 2016/2/25
 * Time: 9:11
 */

echo time();        //时间戳1456363988
echo "<br>";
date_default_timezone_set("Asia/Shanghai");     //时区设置
echo date('Y-m-d H:i:s',1456363988);           //2016-02-25 09:33:08

/*$f=fopen("data",'w');
fwrite($f,'hello');
fclose($f);*/
echo "<br>";
echo file_get_contents("data");

?>