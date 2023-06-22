<?php include 'includes/session.php'; ?>
<?php
if (isset($_SESSION['user'])) {
  header('location: cart_view.php');
}

if (isset($_SESSION['captcha'])) {
  $now = time();
  if ($now >= $_SESSION['captcha']) {
    unset($_SESSION['captcha']);
  }
}

?>
<?php include 'includes/header.php'; ?>

<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/8c19d42eb3.js" crossorigin="anonymous"></script>
</head>
<body class="hold-transition register-page" style="background-color: lightpink;background-image:url('images/freestocks-_3Q3tsJ01nc-unsplash-removebg-preview.png');background-repeat: no-repeat;background-size:contain;">
  <div class="register-box">
    <?php
    if (isset($_SESSION['error'])) {
      echo "
          <div class='callout callout-danger text-center'>
            <p>" . $_SESSION['error'] . "</p> 
          </div>
        ";
      unset($_SESSION['error']);
    }

    if (isset($_SESSION['success'])) {
      echo "
          <div class='callout callout-success text-center'>
            <p>" . $_SESSION['success'] . "</p> 
          </div>
        ";
      unset($_SESSION['success']);
    }
    ?>
    <!--<div class="register-box-body">
      <p class="login-box-msg">Register a new membership</p>

      <form action="register.php" method="POST">
        <div class="form-group has-feedback">
          <input type="text" class="form-control" name="firstname" placeholder="Firstname" value="<?php echo (isset($_SESSION['firstname'])) ? $_SESSION['firstname'] : '' ?>" required>
          <span class="glyphicon glyphicon-user form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
          <input type="text" class="form-control" name="lastname" placeholder="Lastname" value="<?php echo (isset($_SESSION['lastname'])) ? $_SESSION['lastname'] : '' ?>" required>
          <span class="glyphicon glyphicon-user form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
          <input type="email" class="form-control" name="email" placeholder="Email" value="<?php echo (isset($_SESSION['email'])) ? $_SESSION['email'] : '' ?>" required>
          <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
          <input type="password" class="form-control" name="password" placeholder="Password" required>
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
          <input type="password" class="form-control" name="repassword" placeholder="Retype password" required>
          <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
        </div>
        <?php
        if (!isset($_SESSION['captcha'])) {
          echo '
                <div class="form-group" style="width:100%;">
                  <div class="g-recaptcha" data-sitekey="6LevO1IUAAAAAFX5PpmtEoCxwae-I8cCQrbhTfM6"></div>
                </div>
              ';
        }
        ?>
        <hr>
        <div class="row">
          <div class="col-xs-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat" name="signup"><i class="fa fa-pencil"></i> Sign Up</button>
          </div>
        </div>
      </form>
      <br>
      <a href="login.php">I already have a membership</a><br>
      <a href="index.php"><i class="fa fa-home"></i> Home</a>
    </div>
  </div>-->
  <div class="log-in container">
    <div class="first-section">
      <div class="header d-flex justify-content-between">
        <div class="image-section">
          <img class="login-image" src="https://t3.ftcdn.net/jpg/05/50/05/06/360_F_550050674_Aqh8iWRCi7TCczGcUsuvUz09VsaWuNTN.jpg" alt="" />
          <div class="text">
            <p>
              Shop everything you need in one place!. Get access to your
              Orders,Wishlist and Reccomendations
            </p>
          </div>
          <p class="welcome-back">Sign up to start your session</p>
          <!--<div class="log-in container">-->
          <form action="register.php" method="POST">
            <div class="details">
              <div class="form-group has-feedback">
                <input type="text" class="form-control" name="firstname" placeholder="Firstname" value="<?php echo (isset($_SESSION['firstname'])) ? $_SESSION['firstname'] : '' ?>" required>
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
              </div>
              <div class="form-group has-feedback">
                <input type="text" class="form-control" name="lastname" placeholder="Lastname" value="<?php echo (isset($_SESSION['lastname'])) ? $_SESSION['lastname'] : '' ?>" required>
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
              </div>
              <div class="form-group has-feedback">
                <input type="email" class="form-control" name="email" placeholder="Email" value="<?php echo (isset($_SESSION['email'])) ? $_SESSION['email'] : '' ?>" required>
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
              </div>
              <div class="form-group has-feedback">
                <input type="password" class="form-control" name="password" placeholder="Password" required>
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
              </div>
              <div class="form-group has-feedback">
                <input type="password" class="form-control" name="repassword" placeholder="Retype password" required>
                <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
              </div>
            </div>
            <?php
            if (!isset($_SESSION['captcha'])) {
              echo '
                <div class="form-group" style="width:100%;">
                  <div class="g-recaptcha" data-sitekey="6LevO1IUAAAAAFX5PpmtEoCxwae-I8cCQrbhTfM6"></div>
                </div>
              ';
            }
            ?>
            <hr>
            <div class="row">
              <div class="col-xs-4">
                <button type="submit" class="btn btn-primary btn-block btn-flat" name="signup"><i class="fa fa-pencil"></i> Sign Up</button>
              </div>
            </div>
          </form>
          <br>
          <div class="password-reset">
            <a href="login.php">I have an account already</a><br>
            <a href="index.php"><i class="fa fa-home"></i> Home</a>
          </div>
        </div>
      </div>
      <
      <?php include 'includes/scripts.php' ?>
</body>

</html>