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
				.Box_Container_Nav{
											width: 100%;
											height: auto;	
											overflow: hidden;

																		
											background-color: #666;

											display: flex;
											flex-direction: row;		/* è assegnato per default */
											flex-wrap: wrap;
											justify-content: center;
											align-items: stretch;
											
				}




				.Box_Container {
											width: auto;
											overflow: hidden;

											height: auto;								
											background-color: #666;

											display: flex;
											flex-direction: row;		/* è assegnato per default */
											flex-wrap: wrap;
											justify-content: center;
											align-items: stretch;
				}

				.Box_Button{
							color: white;
							text-align: center;							
							text-decoration: none;
							width: auto;
							height: auto;
							padding: 10px 0px;
							background-color: darkgrey;
							
							

				}	
				

				.Box_Articolo  {

								padding: 3px;
								height: auto;
								width: auto;								 
								margin: 20px;
								vertical-align: middle;
								background-color: blue;
								text-decoration: none;
				}

				@media (max-width: 7000px) {
						  
											.Box_Articolo {
													    flex: 20%;
													    max-width: 20%;
										 	}
										 	.Box_Button{
										 				flex: 20%;
													    max-width: 20%;
										 	}
					 
				}		





				@media (max-width: 2000px) {
						  
											.Box_Articolo {
													    flex: 20%;
													    max-width: 20%;
										 	}
										 	.Box_Button{
										 				flex: 20%;
													    max-width: 20%;
										 	}
					 
				}		


				@media (max-width: 1500px) {
						  
											.Box_Articolo {
													    flex: 25%;
													    max-width: 25%;
										 	}

										 	.Box_Button{
										 				flex: 20%;
													    max-width: 20%;
										 	}
						 	
				}


				@media (max-width: 1000px) {
						  
											.Box_Articolo {
													    flex: 33%;
													    max-width: 33%;
										 	}

										 	.Box_Button{
										 				flex: 20%;
													    max-width: 20%;
										 	}

										 					 	
				}

				@media (max-width: 750px) {
						  
											.Box_Articolo {
													    flex: 50%;
													    max-width: 50%;
										 	}

										 	.Box_Button{
										 				flex: 100%;
													    max-width: 100%;
										 	}

										 					 	
				}

				@media (max-width: 500px) {
											.Box_Container{
														flex-direction:column;
											}
												
											.Box_Articolo {
											    flex: 100%;
											    max-width: 100%;
											}

											.Box_Button{
														flex: 100%;
											    		max-width: 100%;														
											}

														
				}

								

			<?//php required("Nomefile.php"); ?>

		</style>
</head>	

<body>



<div class="Box_Container_Nav">

									<div class="Box_Button">	<a href="Login1.php">LOG-IN</a>	</div>
									<div class="Box_Button">	<a href="RegistrazioneForm.php">Register</a> </div>  
									<div class="Box_Button">	<a href="Logout.php">LOG-OUT</a> </div>																						
									<div class="Box_Button">	<a href="">Carrello</a> </div>
									<div class="Box_Button">	<a href="">Impostazioni</a> </div>


</div>	

	
<div class="Box_Container">
		
<?php
	$Art_table="articolo_tab";

	$Query3="SELECT * FROM  $Art_table;";

	if (!$Risultato_query = mysqli_query($mysqliConnection, $Query3)){
					printf("Nessun risutato\n");				
	}else{
		
		


		while ($row = mysqli_fetch_assoc($Risultato_query)) { // Important line, returns assoc array
		    
		echo "<div class=\"Box_Articolo\">
		
			<img src=\"box.jpg\" alt=\"immagine box\" style=\"width:100%\">
						";  
		echo "</br>";				 
		    foreach ($row as $field => $value) { 
		    		
	
		        	echo $field.":".$value."</br>"; 

		        
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