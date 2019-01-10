<?php
session_start();
// Check if user is logged in using the session variable
if ( $_SESSION['logged_in'] != 1 ) {
  header("location: http://localhost/2018/PAP/error.php");
  $_SESSION['message'] = "Conta por verificar, por favor confirme clique no link enviado para o seu email!";
}
else {
    // Makes it easier to read
    $first_name = $_SESSION['first_name'];
    $last_name = $_SESSION['last_name'];
    $email = $_SESSION['email'];
    $active = $_SESSION['active'];
}
/* Log out process, unsets and destroys session variables */
session_destroy();
exit();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Erro</title>
  <?php include 'css/css.html'; ?>
</head>

<body>
    <div class="form">
          <h1>Obrigado pela visita!</h1>

          <p><?= 'A sua sessão terminou!'; ?></p>

          <a href="index.php"><button class="button button-block"/>Página inicial</button></a>

    </div>
</body>
</html>
