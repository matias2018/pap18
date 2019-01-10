<?php session_start();
require 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <title>Sign-Up/Login Form</title>
  <?php include 'css/css.html'; ?>
</head>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
  if (isset($_POST['login'])) {//user logging
    require 'login.php';
  }
  elseif (isset($_POST['register'])) {//user registering
    require 'register.php';
  }
}
?>
<body>

  <div class="form">

      <ul class="tab-group">
        <li class="tab"><a href="#signup">Registo</a></li>
        <li class="tab active"><a href="#login">Log In</a></li>
      </ul>

      <div class="tab-content">

         <div id="login">
          <h1>Bem vindo!</h1>

          <form action="index.php" method="post" autocomplete="off">

            <div class="field-wrap">
            <label>
              Email<span class="req">*</span>
            </label>
            <input type="email" required autocomplete="off" name="email"/>
          </div>

          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password" required autocomplete="off" name="password"/>
          </div>

          <p class="forgot"><a href="forgot.php">Esqueceu a Password?</a></p>

          <button class="button button-block" name="login" />Entrar</button>

          </form>

        </div>

        <div id="signup">
          <h1>Registo</h1>

          <form action="index.php" method="post" autocomplete="off">

          <div class="top-row">
            <div class="field-wrap">
              <label>
                Nome<span class="req">*</span>
              </label>
              <input type="text" required autocomplete="off" name='firstname' />
            </div>

            <div class="field-wrap">
              <label>
                Apelido<span class="req">*</span>
              </label>
              <input type="text"required autocomplete="off" name='lastname' />
            </div>
          </div>

          <div class="field-wrap">
            <label>
              Email<span class="req">*</span>
            </label>
            <input type="email"required autocomplete="off" name='email' />
          </div>

          <div class="field-wrap">
            <label>
              Escolha uma Password<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off" name='password'/>
          </div>

          <button type="submit" class="button button-block" name="register" />Registe-me</button>

          </form>

        </div>

      </div><!-- tab-content -->

</div> <!-- /form -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>

</body>
</html>
