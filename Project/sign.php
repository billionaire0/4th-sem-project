<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Signup Page</title>
    <link rel="stylesheet" href="css/sign.css" />
  </head>
  <body>
    <h1>Signup</h1>
    <form id="signup-form" onsubmit="return validateForm()" action="signupController.php" method="post" class="sign-up" name="Form">
      <label for="first-name">Username:</label>
      <input
        type="text"
        id="username"
        name="username"
        required
        
      /><br />
      <label for="contact">Contact:</label>
      <input
        type="tel"
        id="contact"
        name="contact"
        required
        pattern="[0-9]{10}"
        title="10 digits required"
      /><br />

      <label for="email">Email:</label>
      <input
        type="email"
        id="email"
        name="email"
        required
        pattern="[a-zA-Z0-9._%+-]+@gmail\.com"
        title="Enter a valid Gmail address"
      /><br />
      <label for="address">Address:</label>
      <input type="text" id="address" name="address" required></input><br />
      <label for="password">Password:</label>
      <input
        type="password"
        id="password"
        name="password"
        required
        pattern="^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$"
        title="Minimum 8 characters, 1 letter, 1 number, and 1 special character"
      /><br />

      <label for="confirm-password">Confirm Password:</label>
      <input
        type="password"
        id="repassword"
        name="repassword"
        required
      /><br />

     

      
      <input type="submit" value="Submit"  />
      <p>Already Have Account <a href="newlog.php">Log in</a></p>
    </form>

    <script>
      function validateForm() {
        var password = document.getElementById("password").value;
        var confirmPassword = document.getElementById("confirm-password").value;
        if (password !== confirmPassword) {
          alert("Passwords do not match");
          return false;
        }
        return true;
      }
    </script>
    
    
  </body>
</html>
