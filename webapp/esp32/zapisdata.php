<?php

 $teplota_CPU = $_POST["temp_cpu"];
 $hall = $_POST["hall_cpu"];
 $teplota = $_POST["temp_bme"];
 $hum = $_POST["humidity_bme"];
 $altitude = $_POST["altitude"];
 $pressure_raw = $_POST["pressure_raw"];
 $pressure_sea = $_POST["pressure_sea"];
 echo $teplota_CPU."<br>";
 echo $hall."<br>";
 echo $teplota."<br>";
 echo $hum."<br>";
 echo $altitude."<br>";
 echo $pressure_raw."<br>";
 echo $pressure_sea."<br>";
 
 file_put_contents('../values/teplota.txt', $teplota);
 file_put_contents('../values/hall.txt', $hall);
 file_put_contents('../values/teplota_CPU.txt', $teplota_CPU);
 file_put_contents('../values/vlhkost.txt', $hum);
 file_put_contents('../values/vyska.txt', $altitude);
 file_put_contents('../values/tlak_RAW.txt', $pressure_raw);
 file_put_contents('../values/tlak.txt', $pressure_sea);
$rezim =   file_get_contents('../values/rezim.txt');
if($rezim=="Automat"){
$teplota =   file_get_contents('../values/temp2.txt');	
$referencnateplota =   file_get_contents('../values/referencnateplota.txt');	
$stavrele =   file_get_contents('../values/stav.txt');
$hystereza =   file_get_contents('../values/hystereza.txt');
echo 'Automat';

$rozdiel = $referencnateplota-$teplota;

			if($rozdiel>$hystereza)
			{
				if($stavrele!="ZAP"){
	file_put_contents('../values/stav.txt', "ZAP");
}
		
			}
			else if($rozdiel<(-1*$hystereza))
			{
				if($stavrele!="VYP"){
	file_put_contents('../values/stav.txt', "VYP");
}
			}

}

 ?>