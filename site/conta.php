<?php session_start();
require '../db.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <title>Sign-Up/Login Form</title>
  <?php include '../css/css.html'; ?>

  <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="../css/style.css">

<style>

      header {
        background-color: red;
        height: 100px;
        color: white;
        list-style: none;
        text-decoration: none;
      }

      header li {
        text-align: center;
        position: block;
        margin: auto;
        font-size: 40px;
        padding-top: 20px;
      }

      header li a {
        border: 1px solid white;
        padding: 5px 10px;
      }

      header li a:hover {
        border: 1px solid red;
        background-color: white;
        color: red;
      }

</style>

</head>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
  if (isset($_POST['login'])) {//user logging
    require '../login.php';
  }
  elseif (isset($_POST['register'])) {//user registering
    require '../register.php';
  }
}
?>
<body>
    <header>
      <li><a href="index.html">Voltar para o Site </a></li>
    </header>


  <div style="margin-top:85px;" class="container-fluid">
    <div class="form">

      <ul class="tab-group">
        <li class="tab"><a href="#signup">Registo</a></li>
        <li class="tab active"><a href="#login">Log In</a></li>
      </ul>

      <div class="tab-content">

         <div id="login">
          <h1 style="color:white;">Bem vindo!</h1>

          <form action="conta.php" method="post" autocomplete="off">

            <div class="field-wrap">
            <label>
              Email<span style="color:white;" class="req">*</span>
            </label>
            <input type="email" required autocomplete="off" name="email"/>
          </div>

          <div class="field-wrap">
            <label>
              Password<span style="color:white;" class="req">*</span>
            </label>
            <input type="password" required autocomplete="off" name="password"/>
          </div>

          <p class="forgot"><a style="color:white;" href="forgot.php">Esqueceu a Password?</a></p>

          <button class="button button-block" name="login" />Entrar</button>

          </form>

        </div>

        <div id="signup">
          <h1 style="color:white;">Registo</h1>

          <form action="conta.php" method="post" autocomplete="off">

          <div class="top-row">
            <div class="field-wrap">
              <label>
                Nome<span style="color:white;" class="req">*</span>
              </label>
              <input type="text" required autocomplete="off" name='firstname' />
            </div>

            <div class="field-wrap">
              <label>
                Apelido<span style="color:white;" class="req">*</span>
              </label>
              <input type="text"required autocomplete="off" name='lastname' />
            </div>
          </div>

          <div class="field-wrap">
            <label>
              Email<span style="color:white;" class="req">*</span>
            </label>
            <input type="email"required autocomplete="off" name='email' />
          </div>

          <div class="field-wrap">
            <label>
              Escolha uma Password<span style="color:white;" class="req">*</span>
            </label>
            <input type="password"required autocomplete="off" name='password'/>
          </div>

          <button type="submit" class="button button-block" name="register" />Registe-me</button>

          </form>

        </div>

      </div><!-- tab-content -->

</div> <!-- /form -->
</div>

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="../js/conta_main.js"></script>

</body>
</html>
