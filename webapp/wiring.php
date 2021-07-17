


<!doctype html>
<html lang="sk">

<head>
<?php 
include ("meta.php");
session_start();
error_reporting(0);
?>
	
</head>
<?php $stranka = "Wiring";?>
<body>
	<!-- WRAPPER -->
	<div id="wrapper">
	
	<?php 
include ("menu.php");
?>	
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12">
							<!-- TABLE STRIPED -->
							<div class="panel">
							<div class="panel-body">
									
									<hr><h2>Hardvér Diplomovej práce</h2><hr>
							 <b>Vývojová doska: </b><li>ESP32 DevKIT V1 - 38PIN</li>
							 <b>Senzor (teplota + vlhkosť + tlak vzduchu): </b><li>BME280</li>
							 <b>Rozhranie ESP --> BME280: </b><li>I2C</li>
							 <b>SSR Relé: </b><li>Omron G3MB-202P</li>
							<b>Rozhranie ESP-->SSR: </b><li>Digitálny pin - invertovaná logika</li>
							<hr><h2>Zapojenie</h2><hr>
							 <center><img src="https://i0.wp.com/randomnerdtutorials.com/wp-content/uploads/2018/08/ESP32-bme280_bb_f-768x669.png?ssl=1" style="display: block; max-width: 100%; height: auto;"></center>
									
								</div>
							</div>
					
						</div>
						
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->
		<div class="clearfix"></div>
		<footer>
			<div class="container-fluid">
				<p class="copyright">&copy; 2018 <a href="https://www.themeineed.com" target="_blank">Smart aplikácia</a></p>
			</div>
		</footer>
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
<?php
include ("js_files.php");
?>	
	
</body>
<script>
  setInterval(function(){
   $.get('get_cas.php', function(data){
        $('#cas').text(data)
       });
    $.get('get_stavrele.php', function(data){
        $('#stavrele').text(data)
       });
	    $.get('get_hall.php', function(data){
        $('#hall').html(data + " m<sup>3</sup>A<sup>-1</sup>s<sup>-1</sup>")
       });
 $.get('get_teplota.php', function(data){
        $('#teplota').text(data + " °C")
       });
	    $.get('get_temp2.php', function(data){
        $('#temp2').text(data + " °C")
       });
	    $.get('get_vlhkost.php', function(data){
        $('#vlhkost').text(data + " %")
       });
	    $.get('get_signal.php', function(data){
        $('#signal').text(data + " dBm")
       });
	    $.get('get_ssid.php', function(data){
        $('#ssid').html(data)
       });
	    $.get('get_konektivita.php', function(data){
        $('#konektivita').html(data)
       });
   },1000);  
   
</script>
</html>
































