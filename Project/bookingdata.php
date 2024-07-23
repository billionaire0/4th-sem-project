<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/bookingdata.css">

    <title>Booking Data</title>
</head>
<body>
    <h1>User Data</h1>
    <?php
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "cleaning";

    $conn = new mysqli($servername, $username, $password, $database);
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    $sql = "SELECT * FROM booking";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        echo "<table border='1'>";
        echo "<tr><th>Customer Name</th><th>Date</th><th>Address</th><th>Contact</th><th>Service</th><th>Time</th></tr>";
        
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["cname"] . "</td>";
            echo "<td>" . $row["date"] . "</td>";
            echo "<td>" . $row["address"] . "</td>";
            echo "<td>" . $row["contact"] . "</td>";
            echo "<td>" . $row["service"] . "</td>";
            echo "<td>" . $row["time"] . "</td>";
            echo "</tr>";
        }
        
        echo "</table>";
    } else {
        echo "No data found.";
    }
    
    $conn->close();
    ?>
</body>
</html>


