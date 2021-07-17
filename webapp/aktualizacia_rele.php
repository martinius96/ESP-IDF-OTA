<?php

$rezim =   file_get_contents('values/rezim.txt');
if($rezim=="Automat"){
$teplota =   file_get_contents('values/temp2.txt');	
$referencnateplota =   file_get_contents('values/referencnateplota.txt');	
$stavrele =   file_get_contents('values/stav.txt');
$hystereza =   file_get_contents('values/hystereza.txt');


$rozdiel = $referencnateplota-$teplota;

			if($rozdiel>$hystereza)
			{
				if($stavrele!="ZAP"){
	file_put_contents('values/stav.txt', "ZAP");
}
		
			}
			else if($rozdiel<(-1*$hystereza))
			{
				if($stavrele!="VYP"){
	file_put_contents('values/stav.txt', "VYP");
}
			}

}
?>