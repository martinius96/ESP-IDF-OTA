


<!doctype html>
<html lang="sk">

<head>
<meta name="google-site-verification" content="1oXvrQHmbQHMWfPp6rGbdCQbc5XNHgY4LkdRRd-baMM" />  
<?php 
include ("meta.php");
?>
  
<style>
.aa_h2{
  font:100 5rem/1 Roboto;
  text-transform: uppercase;
}
table{
   background: #fff;
}
table,thead,tbody,tfoot,tr, td,th{
  text-align: center;
  margin: auto;
  border:1px solid #dedede;
  padding: 1rem;
  width: 50%;
}
.table    { display: table; width: 50%; }
.tr       { display: table-row;  }
.thead    { display: table-header-group }
.tbody    { display: table-row-group }
.tfoot    { display: table-footer-group }
.col      { display: table-column }
.colgroup { display: table-column-group }
.td, .th   { display: table-cell; width: 50%; }
.caption  { display: table-caption }

.table,
.thead,
.tbody,
.tfoot,
.tr,
.td,
.th{
  text-align: center;
  margin: auto;
  padding: 1rem;
}
.table{
  background: #fff;
  margin: auto;
  border:none;
  padding: 0;
  margin-bottom: 5rem;
}

.th{
  font-weight: 700;
  border:1px solid #dedede;
  &:nth-child(odd){
    border-right:none;
  }
}
.td{
  font-weight: 300;
  border:1px solid #dedede;
  border-top:none;
  &:nth-child(odd){
    border-right:none;
  }
}

.aa_htmlTable{
  background: tomato;
  padding: 5rem;
  display: table;
  width: 100%;
  height: 100vh;
  vertical-align: middle;
}
.aa_css{
  background: skyblue;
  padding: 5rem;
  display: table;
  width: 100%;
  height: 100vh;
  vertical-align: middle;
}

.aa_ahmadawais{
  display: table;
  width: 100%;
  font: 100 1.2rem/2 Roboto;
  margin: 5rem auto;
}
</style>
	<?php 
	$t = file_get_contents("sprava.txt");
      $today = date("Y-m-d H:i:s");
     	  $prevedeny = strtotime($today);
$teraz = date("d.m.Y H:i:s", $prevedeny );  
       $t .= $teraz." Pouzivatel sa pripojil\r\n";
      file_put_contents("sprava.txt",$t);
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
              <center><h3>Miesto záznamu: Šuňava (okr. Poprad)</h3></center>
        <div id="full">
        </div>
									
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
  $(function() {
   $.get('get_tabulka.php', function(data){
        $('#full').html(data)
    });
  });
  </script>
  <script>
       setInterval(function(){
  $.get('get_tabulka.php', function(data){
        $('#full').html(data)
    });
},15000);   
</script>
</html>