<?php session_start();
require 'db.php';
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
  $email = $mysqli->escape_string($_POST['email']);
  $result = $mysqli->query("SELECT * FROM users WHERE email='$email'");

    if($result->num_rows == 0) //User does not exist
    {
      $_SESSION['message'] = "Esse email não se encontra registado na nossa base de dados!";
      header("location: http://localhost/2018/PAP/error.php");
    }
    else {
      // Usr existes (num_rows !=0)

      $user = $result->fetch_assoc(); //User becomes array with user data
      $email = $user['email'];
      $hash = $user['hash'];
      $first_name = $user['first_name'];

      //Session message to display on success
      $_SESSION['message'] ="<p>Por favor verifica o teu email<span>$email</span>".", clica no link de confirmação para confirmares o reset da password!</p> ";

      // Send registration conformation link(reset.php)
      $to = $email;
      $subject = 'Password Reset Link (portugalmultimedia.pt)';
      $message_body = 'Olá '.$first_name.'! Se não pediste um reset à tua password ignora esta mensagem. Caso contrário, confirma clicando no link seguinte:
        http://localhost/2018/PAP/reset.php?email'.$email.'&hash='.$hash;

      mail($to, $subject, $message_body);
      header("location: http://localhost/2018/PAP/success.php");

    }
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Reset Your Password</title>
  <?php include 'css/css.html'; ?>
</head>
<body>

  <div class="form">

    <h1>Reset Your Password</h1>

    <form action="forgot.php" method="post">
     <div class="field-wrap">
      <label>
        Email Address<span class="req">*</span>
      </label>
      <input type="email"required autocomplete="off" name="email"/>
    </div>
    <button class="button button-block"/>Reset</button>
    </form>
  </div>

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="js/index.js"></script>
</body>

</html>
