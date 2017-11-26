<?php
echo "<hr/>";
$hrs=strtotime('36 hours');
$yester="2016-9-23";
$def=strtotime('2016-9-24');
echo $def;
echo "<hr/>";
//echo ($def/3600);
//echo strtotime('-1 hours now');
echo "<hr/>";

$ttt= strtotime('now')-1474687195;
echo $ttt/3600;
echo time();

?>