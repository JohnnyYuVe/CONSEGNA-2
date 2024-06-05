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
		<style></style>
</head>	

<body>	

<!--inizio metodo di registrazione-->

<h2>Register Form</h2>
	<div class="container-Register">    
		
		<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">


			<label for="Nome"><b>Nome</b></label>
	      		<input type="text" placeholder="Enter Username" name="Nome" required>

	      	<label for="Cognome"><b>Cognome</b></label>
	      		<input type="text" placeholder="Enter Username" name="Cognome" required>

	      	<label for="Username"><b>Username</b></label>
	      		<input type="text" placeholder="Enter Username" name="Username" required>

	      	<label for="Password"><b>Password</b></label>
	      		<input type="password" placeholder="Enter Password" name="Password" required>
	        
	      	<button type="submit" name="invio">Login</button>
	      	<button type="submit" name="reset">Reset</button>
	      

	    </form> 
	</div>
<!--fine metodo di registrazione-->

	</body>
</html>


<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

//querry utilizzato per la registrazione(aggiunta informazione utente appena registrato)
	$User_table = "Tabella_user";

	 $Query2="INSERT INTO $User_table ( Nome, Cognome,Username,Password)
         VALUES
	($_POST['Nome'] ,$_POST['Cognome'],$_POST['Username'],$_POST['Password'] )
        ";


    //controllo dei dati proveniente dalla form REGISTRAZIONI
	if( isset($_POST['invio'])  ){
							if(!isset($_POST['Nome'])){echo"Nome MANCANTE";}
							if(!isset($_POST['Cognome'])){echo"Cognome MANCANTE";}
							if(!isset($_POST['Username'])){echo"Username MANCANTE";}	
							if(!isset($_POST['Password'])){echo"Password MANCANTE";}

	}

	if (!$Risultato_query = mysqli_query($mysqliConnection, $Query2)){
											  printf("Nessun risutato\n");
										      exit();
 	}


//estrazione informazioni utente dalla tabella user.
$Riga = mysqli_fetch_array($Risultato_query);

// carico le infromazioni dell'utente dentro la sessione;
if($Riga){
					session_start();
					$_SESSION['Nome']=$Riga['Nome'];
					$_SESSION['Cognome']=$Riga['Cognome'];
					$_SESSION['Username']=$Riga['Username'];
					$_SESSION['Password']=$Riga['Password'];
					header('Location: login1.php');			

}else{echo"Accesso negato";}


?>	