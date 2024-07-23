<?php session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/ad.css" />
    <title>adminDashboard</title>
    <style>
 h1{
 color: #0084ff;
 }
   /* Style for the logout link */
   a#logout-link {
    text-decoration: none; 
    background-color: Blue; 
    color: #fff; 
    padding: 10px 20px; 
    border-radius: 5px; 
  }

  
  #logout-link-container {
    position: absolute;
    top: 40px; 
    right: 40px; 
  }
</style>
</head>
<body>
    <h1>Admin Pannel</h1>
    <div id="logout-link-container">
    <a id="logout-link" href="logout.php">Logout</a>
  </div>
    <div class="container">
        <div class="card">
            <h2>Services</h2>
            <img src="img/servoces.avif"/>
            <p>Services we are currently providing.</p>
            <a href="services.php">Learn More</a>
        </div>
        <div class="card">
            <h2>Edit Services</h2>
            <img src="img/editservice.avif" />
            <p>add services, remove current services, edit price of services and other.</p>
            <a href="admineddit.php">Edit Now</a>
        </div>
        <div class="card">
            <h2>Bookings</h2>
            <img src="img/bookings.avif" />
            <p>See the bookings and schedules and contact the bookers for confirmation.</p>
            <a href="bookingdata.php">View Bookings</a>
        </div>
    </div>

</body>
</html>
