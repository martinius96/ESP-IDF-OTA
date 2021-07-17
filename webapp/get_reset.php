<?php
$stav =   file_get_contents('values/reset.txt');
if($stav=="OK"){
	echo 'Reštart úspešný';	
}else if($stav=="RST"){
	echo 'Reštartujem';
}
?>