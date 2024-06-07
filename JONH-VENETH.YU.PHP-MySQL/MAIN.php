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
		
		<link rel="stylesheet" href="StileSito.css">	
		
</head>	

<body>



<div class="Box_Container_Nav">
									<div class="Box_Button_Nav">	<a href="RegistrazioneForm.php">Register</a> </div>  
									<div class="Box_Button_Nav">	<a href="Login1.php">LOG-IN</a>	</div>
									
																														
									<div class="Box_Button_Nav">	<a href="">Carrello</a> </div>
									<div class="Box_Button_Nav">	<a href=""></a> </div>
									<div class="Box_Button_Nav">	<a href="Logout.php">LOG-OUT</a> </div>	


</div>	

	
<div class="Box_Container_Art">
		
<?php
	$Art_table="articolo_tab";

	$Query3="SELECT NOME_ARTICOLO, PREZZO_UNITARIO	 FROM  $Art_table;";

	if (!$Risultato_query = mysqli_query($mysqliConnection, $Query3)){
					printf("Nessun risutato\n");				
	}else{
		
		


		while ($row = mysqli_fetch_assoc($Risultato_query)) { // Important line, returns assoc array
		    
		echo "<div class=\"Box_Articolo\">
		
			<img src=\"box.jpg\" alt=\"immagine box\" style=\"width:100%\">
						";  
						 
		    foreach ($row as $field => $value) { 
		    		
	
		 	 
		        	if($field=="PREZZO_UNITARIO"){
		        		echo  "</p class=\"text_art \">".$value . "euro</p>";
		        	}else{
		        		echo "</p class=\"text_art \">". $value . "</p>";
		        	}

		        
		    }

		  echo"</div>
		  		</br>";  
		}

   				
}
	
?>
	
	
</div>		








	</body>
</html>



<?php 
	$stile_interno;
		
		/*
		// Free result set	
		//mysqli_free_result($Risultato_query);	

*/
?> 