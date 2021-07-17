


<!doctype html>
<html lang="sk">

<head>
<?php 
include ("meta.php");
session_start();
error_reporting(0);
?>
	
</head>
<?php $stranka = "Dashboard";?>
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
									
									<h2>Log protokolu</h2>
									 <?php 
             echo nl2br(file_get_contents('values/protokol.txt'));     
             ?>
									
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
































