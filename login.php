<?php
$email = $mysqli->escape_string($_POST['email']);
$result = $mysqli->query("SELECT * FROM users WHERE email='$email'");
if($result->num_rows == 0){
	header("Location: http://localhost/2018/PAP/error.php");
	$_SESSION['message'] = "Não existe nenhuma conta associada a esse email!";
	exit();
} else{
	$user = $result->fetch_assoc();
	if(password_verify($_POST['password'], $user['password'])) {
		header("Location: http://localhost/2018/PAP/profile.php");
		$_SESSION['email'] = $user['email'];
		$_SESSION['first_name'] = $user['first_name'];
		$_SESSION['last_name'] = $user['last_name'];
		$_SESSION['active'] = $user['active'];
		$_SESSION['logged_in'] = true;
		exit();
	}
	else{
		header("Location: http://localhost/2018/PAP/error.php");
		$_SESSION['message'] = "Password está incorrecta, tenta de novo!";
		exit();
	}
}
