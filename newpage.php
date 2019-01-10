<?php
session_start();
// Check if user is logged in using the session variable
if ( $_SESSION['logged_in'] != 1 ) {
  header("location: http://localhost/2018/PAP/error.php");
  $_SESSION['message'] = "You must log in before viewing your profile page!";
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
  <title>New Page</title>
  <?php include 'css/css.html'; ?>
</head>
<body>
  <div class="form">

          <h1>Welcome <?php $first_name.' '.$last_name ?></h1>

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
              Esta página é a newpage.php!
              </div>';
          }

          ?>
          <h2><?php echo $first_name.' '.$last_name; ?></h2>
          <p><?= $email ?></p>

          <a href="logout.php"><button class="button button-block" name="logout"/>Log Out</button></a>
          <br>
          <a href="index.php"><button class="button button-block" name="logout"/>Go to index</button></a>
    </div>

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="js/index.js"></script>

</body>
</html>