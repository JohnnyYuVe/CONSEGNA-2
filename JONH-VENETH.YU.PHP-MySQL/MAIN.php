<?php 
ini_set('display_errors', 1);
error_reporting(E_ALL);
require("Connect_to_Server.php"); 

							session_start();
							echo"</br>qui trovi un piccolo feedback su quello che sta accadendo";
							echo "</br></br></br>". $_SESSION['cliente_id']."</br>";
							echo$_SESSION['Nome']."</br>";
							echo$_SESSION['Cognome']."</br>";
							echo$_SESSION['Username']."</br>";
							echo$_SESSION['Password']."</br>";
?>

<?php
   

if( isset($_POST['add_to_cart'])  ){

if(empty($_POST['Nome_art'] ) || empty($_POST['Prezzo'])|| empty($_POST['id_art']) || empty($_POST['Quantita'])| empty($_POST['id_client']) ){
		echo "\ERRORE NELLA RICEZIONE DELL'ARTICOLO";
	}else{echo "good delle informazioni";

	echo"</br></br>".$_POST["id_client"]."</br>";
	echo	$_POST["id_art"]."</br>";
	echo	$_POST["Nome_art"]."</br>";
	echo	$_POST["Prezzo"]."</br>";
	echo	$_POST["Quantita"]."</br>";

	$carrello_tabLe = "carrello_tab";

	$Querry4="INSERT INTO $carrello_tabLe(ID_CLIENTE,ID_ARTICOLO,NOME_ARTICOLO,PREZZO_UNITARIO,QUANTITA)
		  VALUES
		  		('".$_POST["id_client"]."','".$_POST["id_art"]."','".$_POST["Nome_art"]."','".$_POST["Prezzo"]."','" .$_POST["Quantita"]."'" .")";

	if (!$Risultato_query = mysqli_query($mysqliConnection, $Querry4)){
												  echo"Inserimento articolo nel carrello fallita";
												  printf("Nessun risutato\n");
											      
 	}else{  
 	echo"aggiunto avvenuta con successo";    
	}
	}
	
}
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
									
																														
									<div class="Box_Button_Nav">	<a href="carrello.php">Carrello</a> </div>
									<div class="Box_Button_Nav">	<a href=""></a> </div>
									<div class="Box_Button_Nav">	<a href="Logout.php">LOG-OUT</a> </div>	


</div>	

	
<div class="Box_Container_Art">
		
<?php
	$Art_table="articolo_tab";

	$Query3="SELECT NOME_ARTICOLO, PREZZO_UNITARIO, ID_ARTICOLO	 FROM  $Art_table;";

	if (!$Risultato_query = mysqli_query($mysqliConnection, $Query3)){
					printf("Nessun risutato\n");				
	}else{
		
		


		while ($row = mysqli_fetch_assoc($Risultato_query)) { // Important line, returns assoc array
		    
		echo "<div class=\"Box_Articolo\">

			  <img src=\"box.jpg\" alt=\"immagine box\" style=\"width:100%\">
			 ";  
		    
  				       		
		echo  "</p class=\"text_art \">". $row["NOME_ARTICOLO"]   ."</p>";
		echo "</p class=\"text_art \">".  $row["PREZZO_UNITARIO"] ."euro</p>"
		;
		echo"<form action=\"MAIN.php?id=".$row["ID_ARTICOLO"] ."\" method=\"post\">"; 

		echo"<input type=\"hidden\" name=\"Nome_art\"    value=\"" .$row["NOME_ARTICOLO"]   . "\" >";   
		echo"<input type=\"hidden\" name=\"Prezzo\"      value=\"" .$row["PREZZO_UNITARIO"] . "\" >";
	    echo"<input type=\"hidden\" name=\"id_art\"      value=\"" .$row["ID_ARTICOLO"]     . "\" >";
	    echo"<input type=\"hidden\" name=\"id_client\"   value=\"" .$_SESSION["cliente_id"] . "\" >";

		echo "<div><input type=\"number\" name=\"Quantita\" class=\"Box_quantita\" value=1></div>"; 
		
		echo "<div><input type=\"submit\" name=\"add_to_cart\" class=\"Box_bottone\" value=\"Aggiungi al carrello\"></div>";

		echo"</div>
			</form>	
		</br>";  
		}

   		

		
}
	
?>
	
	
</div>		








	</body>
</html>



