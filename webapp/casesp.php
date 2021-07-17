<?php
$cas =   file_get_contents('values/uptime.txt');
$cas =  $cas/1000;
$hours = floor($cas / 3600);
$minutes = floor(($cas / 60) % 60);
$seconds = $cas % 60;
echo"Uptime:<br>";
echo $hours." hodín<br>";
echo $minutes." minút<br>";
echo $seconds." sekúnd";
?>
