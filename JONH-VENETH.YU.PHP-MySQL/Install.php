<?php
$Hostname="localhost:3307";
$UsernameDB="utente1";
$PasswordDB="utente1";
$NomeDB ="sito_web";

//tabelle utilizzata per la fare interazioni con il data base

//connessione con il server myphpadmin per poter accedere ai database;
$mysqliConnection = new mysqli($Hostname, $UsernameDB, $PasswordDB);


//controllo della connessione se è andato a buon fine.
if ($mysqliConnection->connect_error) {
                        
                        die("connection failed". $mysqliConnection->connect_error);
}else{

	echo "Connessione al server phpmyadmin avvenuta con successo<\br>";
	$sql1 = "CREATE DATABASE sito_web";

	if ($mysqliConnection->query($sql1) === TRUE) {
  
  echo "Database created successfully<\br>";
  $mysqliConnection = new mysqli($Hostname, $UsernameDB, $PasswordDB,$NomeDB);
  $sql = file_get_contents("sito_web.sql");
	$mysqliConnection->multi_query($sql);
	} else {
  
  echo "Error creating database: " . $conn->error;
	}

	
	

}






?>