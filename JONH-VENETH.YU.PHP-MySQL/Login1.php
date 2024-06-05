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
		<title>Login</title>
		<style></style>
</head>	

<body>	


<!--inizio metodo di login-->
<h2> Login Form</h2>	
	<div class="container-login">    		

			<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">


		      	<label for="uname"><b>Username</b></label>
		      		<input type="text" placeholder="Enter Username" name="uname" required>

		      	<label for="psw"><b>Password</b></label>
		      		<input type="password" placeholder="Enter Password" name="psw" required>
		        
		      	<button type="submit" name="invio">Login</button>
		      	<button type="submit" name="reset">Reset</button>
	      	

				<label>
					<input type="checkbox" checked="checked" name="remember"> Remember me
				</label>

	    </form> 
	</div>
<!--fine metodo di login-->
</body>

</html>

<?php 
ini_set('display_errors', 1);
error_reporting(E_ALL);

$User_table = "Tabella_user";
//querry utilizzato per il login
$Query1="SELECT *
          FROM $User_table
 		  WHERE Username = \"{$_POST['Username']}\" AND Password =\"{$_POST['Password']}\"
		";

//controllo dei dati proveniente dalla form LOGIN
	if( isset($_POST['invio'])  ){					
							if(!isset($_POST['Username'])){echo"Username MANCANTE";}	
							if(!isset($_POST['Password'])){echo"Password MANCANTE";}
	}

	if (!$Risultato_query = mysqli_query($mysqliConnection, $Query1)){
											  printf("Nessun risutato\n");
										      exit();
 	}

$Riga = mysqli_fetch_array($Risultato_query);

// carico le infromazioni dell'utente dentro la sessione;


if($Riga){
					session_start();
					$_SESSION['Nome']=$Riga['Nome'];
					$_SESSION['Cognome']=$Riga['Cognome'];
					$_SESSION['Username']=$Riga['Username'];
					$_SESSION['Password']=$Riga['Password'];
					header('Location: nomeFile.php');			

}else{echo"Accesso negato";}
?>

