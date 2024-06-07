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
		<title>Register</title>
		<link rel="stylesheet" href="StileSito.css">
</head>	
<body>	


<h2 style="text-align: center;">Register Form</h2>


<div class="Box_Container_Input">    		
		<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">


			<label for="Nome"><b>Nome</b></label></br>
	      		<input type="text" class="BOX_INPUT" placeholder="Enter Nome" name="Nome" required>
	      		</br>
	      	<label for="Cognome"><b>Cognome</b></label></br>
	      		<input type="text" class="BOX_INPUT" placeholder="Enter Cognome" name="Cognome" required>
	      		</br>
	      	<label for="Cognome"><b>Cod. Fiscale</b></label></br>
	      		<input type="text" class="BOX_INPUT" placeholder="Enter C.F" name="C_F" required>	
	      		</br>
	      	<label for="Username"><b>Username</b></label></br>
	      		<input type="text" class="BOX_INPUT" placeholder="Enter Username" name="Username" required>	
	      		</br>
	      	<label for="Password"><b>Password</b></label></br>
	      		<input type="password" class="BOX_INPUT" placeholder="Enter Password" name="Password" required>
	      		</br>
	      	<label for="Password"><b>Email</b></label></br>
	      		<input type="password" class="BOX_INPUT" placeholder="Enter Password" name="Email" required>
	      		</br>
	      	<label for="Password"><b>ID_CLIENTE</b></label></br>
	      		<input type="password" class="BOX_INPUT" placeholder="Enter ID_CLIENTE" name="ID_CLIENTE" required>	</br>	
	        
	      	<button type="submit" class="BOX_BUTTON" name="invio">Login</button>
	      	
	      	<button type="submit" class="BOX_BUTTON" name="reset">Reset</button>
	      

	    </form> 
	
</div>

</body>
</html>


<?php
    //controllo dei dati proveniente dalla form REGISTRAZIONI
if( isset($_POST['invio'])  ){
	if(empty($_POST['Nome'])|| empty($_POST['Cognome']) || empty($_POST['C_F'])|| empty($_POST['Username']) ||empty($_POST['Password']) ||empty($_POST['ID_CLIENTE'])|| empty($_POST['Email'])){
		echo "mancano delle informazioni";
	}else{echo "good delle informazioni";

//querry utilizzato per la registrazione(aggiunta informazione utente appena registrato)
	$User_table = "utente_tab";

	$Query2="INSERT INTO $User_table(ID_CLIENTE, C_F, NOME, COGNOME, EMAIL, USERNAME, PASSWORD)
	         VALUES
		('".$_POST['ID_CLIENTE']."','".$_POST["C_F"]."','".$_POST['Nome']. "','" .$_POST['Cognome']. "','".$_POST['Email']. "','" .$_POST['Username']. "','" .$_POST['Password']. "'" . ")";

	if (!$Risultato_query = mysqli_query($mysqliConnection, $Query2)){
												  echo"Registrazione fallita";
												  printf("Nessun risutato\n");
											      exit();
 	}else{  
 	echo"Registrazione avvenuta con successo";    
	header('Location: MAIN.php');			
	}
	}
}

?>	






