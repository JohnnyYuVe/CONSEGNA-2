<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);// MI NOTIFICA DI TUTTI GLI ERRORI AVVENUTI IN RUNTIME 
session_start();//RIPRENDE LA SESSIONE IN CORSO O LO CREA SE NON NE TROVA UNA
unset($_SESSION);
session_destroy();
?>


<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html
PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
			<title>logout</title>
	</head>

<body>
	
	
	<hr />
	
	<h3>ARRIVEDERCI </h3>
	
	<hr />
	
<li><a href="mysql.ST.login.php" alt="aa">torna a login</a></li>
	
	<hr />

</body>

</html>