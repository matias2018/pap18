<?php
/* Password reset process, updates database with new user password */
require 'db.php';
session_start();

//Make sure the form is being submited with method="post"
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	//Make sure two password match
	if($_POST['newpassword'] == $_POST['confirmpassword']){

		$new_password = password_hash($_POST['newpassword'], PASSWORD_BCRYPT);

		// We get $_POST['email'] from the hidden input of the form on reset.php
		$email = $mysqli->escape_string($_POST['email']);
		$hash = $mysqli->escape_string($_POST['hash']);

		$sql = "UPDATE users SET password='$new_password' WHERE email='$email' AND". "hash='hash'";

		if($mysqli->query(sql)){

			$_SESSION['message'] = "A password foi alterada com sucesso!";
			header("location: http://localhost/2018/PAP/success.php");
		}
	}
	else{
		$_SESSION['message'] = "As passwords inseridas não coincidem";
		header("location: http://localhost/2018/PAP/error.php");
	}
}
