


<!doctype html>
<html lang="sk">

<head>
<?php 
include ("meta.php");
session_start();
?>
 <style>
  .carousel-inner img {
      width: 100%; /* Set width to 100% */
      margin: auto;
      min-height:200px;
  }

  /* Hide the carousel text when the screen is less than 600 pixels wide */
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; 
    }
  }
  

@media screen and (max-width: 600px){
    ul.topnav li.right, 
    ul.topnav li {float: none;}
}

.floatLeft { width: 50%; float: left; }
.floatRight {width: 50%; float: right; }
.container { overflow: hidden; }
			label {
				display: inline-block;
				width: 100px;
				height: 30px;
				border: 3px solid rgba(0,0,0,0.07);
				border-radius: 17px;
				position: relative;
				box-shadow:  inset 1px 1px 1px 1px rgba(0,0,0,0.4), 0px 0px 0px 1px rgba(0,0,0,0.1), 0px 0px 0px 2px rgba(0,0,0,0.1), 0px 0px 4px 2px rgba(0,0,0,0.07);
			}
		
			input[type=checkbox] {
				display: none;
			}
			
			input:checked ~ a {
				left: 50%;
			}
			
			input:checked ~ div span {
				background-color: rgba(0,158,255,0.5);
			}
			
			label div {
			}
			
			label span {
				z-index: 1;
				position: absolute;
				display: inline-block;
				height: 28px;
				left: 0;
				width: 49%;
				border-radius: 15px 0px 0px 15px;
				border-color: rgba(0,0,0,0.1);
				border-style: solid;
				border-width: 1px 0px 1px 1px;
				background-color: rgba(200,200,200,0.5);
				background-image:-webkit-linear-gradient(90deg, rgba(0,0,0,0.1) 0%, rgba(0,0,0,0.0) 100%);
				text-align: center;
				line-height: 30px;
				font-family: helvetica, sans-serif;
				font-size: 14px;
				font-weight: 800;
				color: #555;
				text-shadow: 0px 1px white;
				-webkit-transition: all 1.0s ease-in-out;
				-moz-transition: all 1.0s ease-in-out;
				transition: all 1.0s ease-in-out;
				

			}

			label span.no {

				left: 50%;	
				border-radius: 0px 15px 15px 0px;			
				border-width: 1px 1px 1px 0px;

			}
			
			.slider {
				display: inline-block;
				position: absolute;
				width: 50%;
				height: 28px;
				background-color: #efefef;
				left: 0%;
				border-radius: 30px;
				z-index: 2;
				border: 1px solid rgba(0,0,0,0.2);
				box-shadow: inset 0px 0px 5px 1px rgba(0,0,0,0.1), 0px 1px 1px 0px rgba(0,0,0,0.2);
				-webkit-transition: all 0.5s ease-in-out;
				-moz-transition: all 0.5s ease-in-out;
				transition: all 0.5s ease-in-out;

			}
			
			.slider:after, .slider:before {
				content: "";
				width: 30%;
				height: 25px;
				position: absolute;
				top: 2px;
				border-radius: 50%;
			}

			.slider:after {
				left: 15%;
				background-image:-webkit-linear-gradient(180deg, rgba(0,0,0,0.1) 0%, rgba(0,0,0,0.0) 100%);
			}
			.slider:before {
				right: 15%;
				background-image:-webkit-linear-gradient(0deg, rgba(0,0,0,0.1) 0%, rgba(0,0,0,0.0) 100%);
			}

			/* fluff */
			


			
			form {
				width: 250px;
				margin: 0px auto;
				margin-top: 20px;
				font-family: georgia, times, serif;
				box-shadow: 0px 0px 10px 2px rgba(0,0,0,0.2);
				border-radius: 5px;
				padding: 25px;
				background-color: #fff;
			}
			
			fieldset {
				border: 1px solid #ccc;
				padding: 20px;
				text-align: center;
				border-radius: 3px;
				color: #666;
				margin-bottom: 20px;
			}

		
			h1 {
				background-color: rgba(0,158,255,0.5);
				margin: -25px -25px 25px -25px;
				padding: 10px;
				border-radius: 5px 5px 0px 0px;
				text-align: center;
				font-family: 'Helvetica Neue', Helvetica, sans-serif;
				font-weight: 500;
				letter-spacing: 1px;
				color: #fff;
				background-image: -webkit-linear-gradient(90deg, rgba(0,0,0,0.1) 0%, rgba(0,0,0,0.0) 100%);
				text-shadow: 0px 2px 0px rgba(0,0,0,0.5);

			}
  </style>	
</head>
<?php $stranka = "Ovladanie";?>
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
							<hr>
							<center><h2>Ovládanie relé</h2></center>
							<hr>
									<?php  if(isset($_POST["rele1"])) {
    if(file_get_contents("values/stav.txt") === "ZAP") {
      file_put_contents("values/stav.txt", "VYP");
    }
    else { 
      file_put_contents("values/stav.txt", "ZAP");
    }
  }
  
  
  
  if(isset($_POST['odoslat'])){
  	$hystereza = $_POST['hystereza'];
	$referencnateplota = $_POST['referencnateplota'];
	file_put_contents(__DIR__ . '/values/hystereza.txt', $hystereza);
	file_put_contents(__DIR__ . '/values/referencnateplota.txt', $referencnateplota);
  
  
  }
  
  
  
$hodnota = file_get_contents(__DIR__ . '/values/rezim.txt');
  if($hodnota=="Automat"){
?><br>
 <center><a href="zmennamanual.php" class="btn btn-danger">Zmeniť na manual</a></center>
 <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
 <b>Referenčná teplota</b><br>
   <input type="number" step="0.5" max="30" name="referencnateplota" value="<?php echo file_get_contents(__DIR__ . '/values/referencnateplota.txt'); ?>" style="max-width:100%">
  <b>Hysteréza +-</b><br>
   <input type="number" step="0.5" max="5" name="hystereza" value="<?php echo file_get_contents(__DIR__ . '/values/hystereza.txt'); ?>" style="max-width:100%">
 <center><input type="submit" name="odoslat" class="btn btn-danger" value="ULOŽIŤ"></center>
   </form>
 <?php }else if($hodnota=="Manual"){?>
 <center><a href="zmennaauto.php" class="btn btn-danger">Zmeniť na automat</a></center>
  <form method="post" id="rele1f" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
   <input type="hidden" name="rele1" value="yes">
  <fieldset>
		<legend>Relé</legend>
		<label onClick="document.getElementById('rele1f').submit();">
			<input name="releon" type="checkbox" <?php if(file_get_contents("values/stav.txt") === "ZAP") echo "checked"; ?>>
			<div>
				<span class="yes">ZAP</span>                                              
				<span class="no">VYP</span>
			</div>         
    
			<a class="slider"></a>
		</label>	
	</fieldset>
  
   </form> 
  <?php } ?>
  <center><b>Aktuálny stav: </b><b id="stavrele"></b></center>
  
									
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
    $.get('get_stavrele.php', function(data){
        $('#stavrele').text(data)
       });
   },1000);  
   
</script>
</html>
































