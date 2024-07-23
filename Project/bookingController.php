<html>

<head>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="assets\css\order.css">
    <link rel="stylesheet" href="https://www.phptutorial.net/app/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

</head>

<body>
    <?php
include 'repository.php';
include 'repositoryImpl.php';
include 'bookingDao.php';

    $clean = new CleaningImpl();
    $delivery_address = $_POST['address'];
    $date_of_delivery = $_POST['date'];
    $service = $_POST['service'];
    $time = $_POST['time'];
    $customerName=$_POST['name'];
    $ContactNumber=$_POST['contact'];
    $credential = new bookingDao();
$credential->setCustomerName($customerName);
$credential->setContact($ContactNumber);
$credential->setAddress($delivery_address);
$credential->setDate($date_of_delivery);
$credential->setService($service);
$credential->setTime($time);

$clean->saveBooking($credential);

    ?>

   
</body>

</html>