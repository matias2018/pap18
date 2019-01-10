<?php
  $_SESSION['email'] = $_POST['email'];
  $_SESSION['first_name'] = $_POST['firstname'];
  $_SESSION['last_name'] = $_POST['lastname'];

  //Escape all $_POST variables to protect against SQL injections
  $first_name = $mysqli->escape_string($_POST['firstname']);
  $last_name = $mysqli->escape_string($_POST['lastname']);
  $email = $mysqli->escape_string($_POST['email']);
  $first_name = $mysqli->escape_string($_POST['firstname']);
  $password = $mysqli->escape_string(password_hash($_POST['password'], PASSWORD_BCRYPT) );
  $hash = $mysqli->escape_string(md5( rand(0, 1000) ) );
// Testing purposes only
//Comment when not needed!!!!
/*echo $password. '<br>';
echo $hash;
die;
*/
  //Check if a user with that email exists
  $result = $mysqli->query("SELECT * FROM users WHERE email='$email'") or die($mysqli->error);

// If more than one rows are returned, user exists
if ($result->num_rows > 0 ) {
	$_SESSION['message'] = 'Já existe um utilizador com este email!';
	header("location: http://localhost/2018/PAP/error.php");
}
else {
//email does not exist in DB, proceed..
//active is 0 by DEFAULT
$sql = "INSERT INTO users (first_name, last_name, email, password, hash)" . "VALUES (
'$first_name', '$last_name', '$email', '$password', '$hash')";

	// Add user to DB
	if ($mysqli->query($sql)){

		$_SESSION['active'] = 0; //0 until user verifies -> verify.php
		$SESSION['logged_in'] = true; //so we know user has logged in
		$_SESSION['message'] = "Foi enviado um link de confirmação para $email, por favor confirme o seu registo clicando na mensagem!";

		// Send registration confirmation link (verify.php)

		$to = $email;
		$subject = 'Confirmação de conta (portugalmultimedia.pt)';
		$message_body = '
		Olá ' .$first_name.', obrigado por te registares!
		Por favor clica no seguinte link para activares a tua conta: http://localhost/2018/PAP/verify.php?email='.$email.'&hash='.$hash;

		mail( $to, $subject, $message_body );

		header("location: http://localhost/2018/PAP/profile.php");
	}
	else{
		$_SESSION['message'] = 'Registration failed';
		header("location: http://localhost/2018/PAP/error.php");
	}
}
