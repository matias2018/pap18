<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Erro</title>
  <?php include 'css/css.html'; ?>
</head>
<body>
<div class="form">
    <h1>Erro</h1>
    <p><?php
        if( isset($_SESSION['message']) AND !empty($_SESSION['message'])):
    			echo $_SESSION['message'];
    	else:
    		header("location: http://localhost/2018/PAP/index.php");
    	endif;
    ?></p>
    <a href="index.php"><button class="button button-block"/>Home</button></a>
</div>
</body>
</html>
