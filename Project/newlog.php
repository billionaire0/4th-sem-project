<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="css/mewlog.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <!-- <link rel="stylesheet" href="css/style.css"> -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
  <body>
  <br>
  <!-- <a href="index.html" class="btn hero-btn" id="gg">Exit</a> -->
  <br><br><br><br><br><br>
    <div class="container">
      <div class="login-form">
          
        <form action="adminDashboard.php" method="post" class="sign-up" onsubmit="return validateForm()">
          <div class="form-group">
            <label for="email-phone">Email or Phone</label>
            <input
              type="text"
              id="email-phone"
              name="email-phone"
              placeholder="Enter your email or phone"
              class="form-control"
              required
            />
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input
              type="password"
              id="password"
              name="password"
              placeholder="Enter your password"
              class="form-control"
              required
            />
          </div>
          <div class="form-group">
            <button type="submit" class="login-button"><a href="adminDashboard.php"></a>Login</button>
          </div>
        </form>
        <p class="signup-link">
          Don't have an account? <a href="sign.php">Sign up</a>
        </p>
      </div>
    </div>
    <script src="script.js"></script>
    <?php
    if (isset($_GET["error"])) {
        echo "<script>alert('Invalid credentials')</script>";
    }
    ?>
  </body>
</html>
