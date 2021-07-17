<!-- NAVBAR -->
<?php
session_start();
  error_reporting(0);
?>
		<nav class="navbar navbar-default navbar-fixed-top" style="height:auto;">
			<div class="brand">
				<a href="index.php"><img src="https://i.imgur.com/VoWvEsa.png" alt="FEI TUKE" width=32px height=32px></a>
			</div>
			<div class="container-fluid">
				<div class="navbar-btn">
					<button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
				</div>		
			</div>
		</nav>
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li><a href="index.php" class="<?php if ($stranka == "Dashboard"){ echo "active";} ?>"><img src="https://image.flaticon.com/icons/svg/1035/1035688.svg" width=32px height=32px> <span>Prehľad</span></a></li>
						<li><a href="ovladanie-rele.php" class="<?php if ($stranka == "Ovladanie"){ echo "active";} ?>"><img src="https://image.flaticon.com/icons/svg/445/445719.svg" width=32px height=32px> <span>Ovládanie</span></a></li>
						<li><a href="restart.php" class="<?php if ($stranka == "Reset"){ echo "active";} ?>"><img src="https://image.flaticon.com/icons/svg/1261/1261663.svg" width=32px height=32px> <span>Reštart</span></a></li>
            <li><a href="firmver.php" class="<?php if ($stranka == "Firmver"){ echo "active";} ?>"><img src="https://image.flaticon.com/icons/svg/892/892311.svg" width=32px height=32px> <span>Upload firmvéru</span></a></li>
						<li><a href="zdrojovy-kod.php" class="<?php if ($stranka == "Kod"){ echo "active";} ?>"><img src="https://image.flaticon.com/icons/svg/25/25185.svg" width=32px height=32px> <span>Zdrojový kód</span></a></li>	
						<li><a href="wiring.php" class="<?php if ($stranka == "Wiring"){ echo "active";} ?>"><img src="https://image.flaticon.com/icons/svg/1173/1173047.svg" width=32px height=32px> <span>Wiring</span></a></li>													
					</ul>
				</nav>
			</div>
		</div>