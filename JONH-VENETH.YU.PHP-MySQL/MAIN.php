<?php 
ini_set('display_errors', 1);
error_reporting(E_ALL);
require("Connect_to_Server.php"); 
?>

<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html
PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>	
		<title>pagina principale</title>
		

		<style>
				
			<?//php required("Nomefile.php"); ?>

		</style>
</head>	

<body>

	
	<div class="Box_Container">

		<div class="Barra_Navigazione">

									<a class="" href="Login1.php">LOG-IN</a>
									<a class="" href="RegistrazioneForm.php">Register</a>  
									<a class="" href="Logout.php">LOG-OUT</a> 																						
									<a class="" href="">Carrello</a><!-- sostituire con una icona-->
									<a class="" href="">Impostazioni</a>


		</div>	

	<?php

$max=10;
	
	for($i=0; $i<$max; $i++){ 
				
		echo "<div class=\"Articolo_Box\">";


				
		echo"<p>Ciaoo</p>";



		echo "</div>";
		
	}

	
		echo"<p>finito</p>";								
	?>			

	
	</div>		















	</body>
</html>



<?php 
	$stile_interno; 


?> 