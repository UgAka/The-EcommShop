<?php include 'includes/session.php'; ?>
<?php
if (isset($_SESSION['user'])) {
  header('location: cart_view.php');
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

<body class="hold-transition login-page" style="background-color: lightblue;background-image:url('images/freestocks-_3Q3tsJ01nc-unsplash-removebg-preview.png');background-repeat: no-repeat;background-size:cover;">
  <div class="login-box">
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
    <!--<div class="login-box-body">-->
    <div class="log-in container">
      <div class="first-section">
        <div class="header d-flex justify-content-between">
          <div class="image-section">
            <img class="login-image" src="https://t3.ftcdn.net/jpg/05/50/05/06/360_F_550050674_Aqh8iWRCi7TCczGcUsuvUz09VsaWuNTN.jpg" alt="" />
            <div class="text">
              <p>
                Shop everything you need in one place!. Get access to your
                Orders, Wishlist and Recommendations
              </p>
            </div>
              <p class="welcome-back">Sign in to start your session</p>
              <!--<div class="log-in container">-->
              <form action="verify.php" method="POST">
                <div class="details">
                  <div class="form-group has-feedback">
                    <input type="email" class="form-control" name="email" placeholder="Email" required>
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                  </div>
                  <div class="form-group has-feedback">
                    <input type="password" class="form-control" name="password" placeholder="Password" required>
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                  </div>
                </div>
                <div class="row">
                  <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat" name="login"><i class="fa fa-sign-in"></i> Sign In</button>
                  </div>
                </div>
              </form>
              <br>
              <a href="password_forgot.php">I forgot my password</a><br>
              <a href="signup.php" class="text-center">Register a new membership</a><br>
              <a href="index.php"><i class="fa fa-home"></i> Home</a>
          </div>
        </div>

        <?php include 'includes/scripts.php' ?>
</body>

</html>