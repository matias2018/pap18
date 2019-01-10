<?php 
session_start();
require 'db.php';
// Make sure email and hash variables are not empty
if(isset($_GET['email']) && !empty($_GET['email']) AND isset($_GET['hash']) && !empty($_GET['hash']))
{
	$email = $mysqli->escape_string($_GET['email']);
	$hash = $mysqli->escape_string($_GET['hash']);

	//Select user with matching email and hash, who hasn't verified account yet (active = 0)
	$result = $mysqli->query("SELECT * FROM users WHERE email='$email' AND hash='$hash' AND active='0'");
	if ($result->num_rows == 0){
		$_SESSION['message']="A conta já foi activada ou o URL é inválido!";
		header("location: error.php");
	}
	else{
		$_SESSION['message'] = "Obrigado por activares a conta!";
	// Set user status to active(active=1)
		$mysqli->query("UPDATE users SET active='1' WHERE email='$email'") or die($mysqli->error);
		$_SESSION['active'] = 1;

		header("location: success.php");

	}
}
else {
	$_SESSION['message'] = "Os parametros para verificação de conta são inválidos!";
	header("location: error.php");
}
