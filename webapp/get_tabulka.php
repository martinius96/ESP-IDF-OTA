<?php 
//include("connect.php");
?>

<?php
/*
file_put_contents('../values/teplota.txt', $teplota);
 file_put_contents('../values/hall.txt', $hall);
 file_put_contents('../values/teplota_CPU.txt', $teplota_CPU);
 file_put_contents('../values/vlhkost.txt', $hum);
 file_put_contents('../values/vyska.txt', $altitude);
 file_put_contents('../values/tlak_RAW.txt', $pressure_raw);
 file_put_contents('../values/tlak.txt', $pressure_sea);
 */
$teplota =   file_get_contents('values/teplota.txt');
$vlhkost =   file_get_contents('values/vlhkost.txt');
$tlak =   file_get_contents('values/tlak.txt');
$tlak_RAW =   file_get_contents('values/tlak_RAW.txt');
$vlhkost =   file_get_contents('values/vlhkost.txt');
$teplota_CPU =   file_get_contents('values/teplota_CPU.txt');
$hall =   file_get_contents('values/hall.txt');
$vyska =   file_get_contents('values/vyska.txt');
?>
<table style="width: 100%;" border="1" class="table table-striped flat-table flat-table-2">
	<thead>
  <tr>
		<th style="width: 50%;">Entita</th>
		<th style="width: 50%;">Hodnota</th>						 
	</tr>
  </thead>
  <tbody>           
<tr>
<td><font color="black">Teplota (BME280)</font></td>
<td><font color="black"><?php echo $teplota; ?> °C</font></td>
</tr>
<tr>
<td><font color="black">Vlhkosť (BME280)</font></td>
<td><font color="black"><?php echo $vlhkost; ?> % RH</font></td>
</tr>
<tr>   
<td><font color="black">Nadmorská výška</font></td>
<td><font color="black"><?php echo $vyska; ?> m.n.m.</font></td>
</tr>  
<tr>   
<td><font color="black">Tlak (BME280) - RAW</font></td>
<td><font color="black"><?php echo $tlak_RAW; ?> hPa</font></td>
</tr>      
<tr>
<td><font color="black">Tlak (BME280) - prepočítaný</font></td>
<td><font color="black"><?php echo $tlak; ?> hPa</font></td>
</tr>
<tr>           
<td><font color="black">Teplota - CPU</font></td>
<td><font color="black"><?php echo $teplota_CPU; ?> °C</font></td>
</tr>           
<tr>
<td><font color="black">Hall - CPU</font></td>
<td><font color="black"><?php echo $hall; ?> (Analog)</font></td>
</tr>
</tbody></table>
<?php
$cas = date("Y-m-d H:i:s",filemtime(__DIR__ . "/values/teplota.txt"));
$prevedeny = strtotime($cas);
$teraz = date("d. M H:i:s", $prevedeny );  
echo "<center><h2>".$teraz."</h2></center>";
?>