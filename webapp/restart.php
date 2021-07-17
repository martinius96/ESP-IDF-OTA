


<!doctype html>
<html lang="sk">

<head>
<?php 
include ("meta.php");
session_start();
error_reporting(0);
?>
</head>
<?php $stranka = "Reset";?>
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
 <center><a href="restartuj.php" class="btn btn-danger" role="button">Reštartuj</a></center>
 <hr>
 <center><b>Stav: </b><b id="stavrestartu"></b></center>
									
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
    $.get('get_reset.php', function(data){
        $('#stavrestartu').text(data)
       });
	   $.get('aktualizacia_rele.php', function(data){
        $('#xxx').html(data)
       });
   },1000);  
   
</script>
</html>
































