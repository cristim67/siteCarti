<?php include('server.php') ?>
<?php include('mail.php')?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="css/registercss.css" />

    <title>Miloiu Cristi - 414B</title>

      <link rel="shortcut icon" href="images/logo.ico" />
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
<form action="#" class="sign-up-form" method="post">
  <?php include('errors.php'); ?>
            <h2 class="title">Inregistrare</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="username" value="<?php echo $username; ?>" placeholder="Nume utilizator">
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
             <input type="email" name="email" value="<?php echo $email; ?>" placeholder="Email">
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="password_1"placeholder="Parola">
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="password_2"placeholder="Confirma parola">
            </div>
            <button type="submit" class="btn" name="reg_user">Inregistrare</button>
          </form>

                    <form action="#" class="sign-in-form" method="post">
                      <?php include('errors.php'); ?>
            <h2 class="title">Autentificare</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Nume utilizator" name="usernamelogin" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Parola" name="passwordlogin" />
            </div>
            <button action="paginaprincipala.php" type="submit" class="btn" name="login_user">Autentificare</button>
            
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>Înregistrează-te acum!</h3>
            <p>
            Pentru a putea vedea continutul site-ului
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Inregistrare
            </button>
          </div>
          <img src="images/log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>Autentifică-te acum! </h3>
            <p>
            </p>
            <button class="btn transparent" id="sign-in-btn">
             Autentificare
            </button>
          </div>
          <img src="images/register.svg" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="js/app.js"></script>
  </body>
</html>
