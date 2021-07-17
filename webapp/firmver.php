


<!doctype html>
<html lang="sk">

<head>
<?php 
include ("meta.php");
session_start();
error_reporting(0);
$pouzivatelske_meno = "admin"; //HTTP AUTH USERNAME (zmeňte)
$pouzivatelske_heslo = "admin";  //HTTP AUTH PASSWORD (zmeňte)
$valid_passwords = array ($pouzivatelske_meno => $pouzivatelske_heslo);
$valid_users = array_keys($valid_passwords);

$user = $_SERVER['PHP_AUTH_USER'];
$pass = $_SERVER['PHP_AUTH_PW'];

$validated = (in_array($user, $valid_users)) && ($pass == $valid_passwords[$user]);

if (!$validated) {
  header('WWW-Authenticate: Basic realm="My Realm"');
  header('HTTP/1.0 401 Unauthorized');
  die ("Not authorized");
}
?>
</head>
<?php $stranka = "Firmver";?>
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
<?php  
if (isset($_POST["submit"])) { 
$target_path = "firmware.bin";   
  
if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_path)) {  
    echo "<div class='alert alert-success'>Firmvér ".$target_path." pre OTA aktualizáciu bol úspešne nahratý do webového rozhrania!</div>";  
} else{  
    echo "<div class='alert alert-danger'>Chyba! Súbor nebol nahratý do webového rozhrania!</div>";  
}  
}
?>  
<form action="firmver.php" method="post" enctype="multipart/form-data">  
    <input type="file" name="fileToUpload"/>  
    <input type="submit" value="Nahrať OTA firmvér" class="btn btn-success" name="submit"/>  
</form>

<div class="alert alert-info">  
 <b>OTA firmvér dostupný od: </b>  
 <?php
$filename = 'firmware.bin';
  if (file_exists($filename)) {
    echo date ("d. M Y H:i:s", filemtime($filename));
  }
echo "<br><b> Checksum firmvéru (SHA-256): </b>".hash_file('sha256', $filename);
 ?>      </div>
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
































