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
?>
<!DOCTYPE html>
<html>
<head>
  <title>Perfil</title>
  <?php include 'css/css.html'; ?>
</head>
<body>
  <div class="form">

          <h1> <?php $first_name.' '.$last_name ?></h1>

          <p>
          <?php

          // Display message about account verification link only once
          if ( isset($_SESSION['message']) )
          {
              echo $_SESSION['message'];

              // Don't annoy the user with more messages upon page refresh
              unset( $_SESSION['message'] );
          }

          ?>
          </p>

          <?php
          if ( !$active ){
              echo
              '<div class="info">
              Conta por verificar, por favor confirme clique no link enviado para o seu email!
              </div>';
          }

          ?>
          <h2><?php echo $first_name.' '.$last_name; ?></h2>
          <p><?= $email ?></p>

          <a href="site/index.php"><button class="button button-block" name="logout"/>Avançar para o site</button></a>
          <br>
          <a href="site/index.html"><button class="button button-block" name="logout"/>Logout</button></a>


    </div>

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="js/index.js"></script>

</body>
</html>
