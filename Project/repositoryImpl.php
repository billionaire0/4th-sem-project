<?php
include 'DatabaseConnection.php';
class CleaningImpl implements Cleaning
{
    public function signUp(LoginDao $login)
    {
        $uname = $login->getUsername();
        $pass = $login->getPassword();
        $contactNumber = $login->getContact();
        $email = $login->getEmail();
        $repassword = $login->getRepassword();
        $con = new DatabaseConnection();
        $conn = $con->getConnection();
        $sql = "INSERT INTO signup (username,email,contact,password,repassword)VALUES('$uname','$email','$contactNumber','$pass','$repassword')";
        if (mysqli_query($conn, $sql)) {
            header('Location: newlog.php');
            exit;
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }

    public function getCredential(LoginDao $login)
    {
        $isLogin = false;
        $uname = $login->getUsername();
        $pass = $login->getPassword();
        $con = new DatabaseConnection();
        $conn = $con->getConnection();
        $sql = "SELECT * FROM login WHERE username='$uname' and password='$pass'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $isLogin = true;
        }
        return $isLogin;
    }
    public function saveBooking(bookingDao $book)
    {
        $name = $book->getCustomerName();
        $address = $book->getAddress();
        $date = $book->getdate();
        $time = $book->getTime();
        $service = $book->getService();
        $contact = $book->getContact();
        $con = new DatabaseConnection();
        $conn = $con->getConnection();
        $sql = "INSERT INTO booking (cname,address,contact,date,time, service)VALUES('$name','$address','$contact','$date','$time', '$service')";
        if (mysqli_query($conn, $sql)) {
            header('Location: index1.php');
            exit;
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
   

    // public function saveUserDetails(UserDao $user)
    // {
    //     $uname = $user->getUsername();
    //     $fname = $user->getFirstName();
    //     $lname = $user->getlastName();
    //     $address = $user->getAddress();
    //     $image = $user->getImage();
    //     $contactNumber=$user->getContactNumber();
    //     $con = new DatabaseConnection();
    //     $conn = $con->getConnection();

    //     $sql1 = "SELECT * FROM vendor WHERE username='$uname'";
    //     $results = $conn->query($sql1);
    //     if (!empty($results) && $results->num_rows > 0) {
    //     $sqll="UPDATE vendor SET first_name='$fname', last_name='$lname', address='$address', contact_number='$contactNumber',image='$image', username= '$uname' WHERE username='$uname'";
       
    // }else{
    //     $sqll="insert into vendor(first_name,last_name,address,contact_number,image,username)values('$fname','$lname','$address','$contactNumber','$image','$uname')";
    // }
    // if (mysqli_query($conn, $sqll)) {
    // }
    //     $sql = "UPDATE login SET first_name='$fname', last_name='$lname', address='$address', image='$image', username= '$uname', contactNumber='$contactNumber' WHERE username='$uname' ";
    //     if (mysqli_query($conn, $sql)) {
    //         header('Location: UserDashboard.php');
    //         exit;
    //     } else {
    //         echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    //     }
    // }
    // public function addProducts(ProductDao $productDao)
    // {
    //     $productName = $productDao->getProductName();
    //     $image = $productDao->getImage();
    //     $shopname = $productDao->getShopname();
    //     $price = $productDao->getPrice();
    //     $weight = $productDao->getWeight();
    //     $address = $productDao->getAddress();
    //     $vendorName = $productDao->getVendorName();
    //     $con = new DatabaseConnection();      // DataBaseConnection con= new DatabaseConnection();
    //     $conn = $con->getConnection();       // com.getConnection();
    //     $sql = "Insert into product(product_name,address,image,shop_name,price,weight,vendor_name,valid_product) values('$productName','$address','$image','$shopname',$price,'$weight','$vendorName','pending')";
    //     if (mysqli_query($conn, $sql)) {
    //         header('Location: UserDashboard.php');
    //         exit;
    //     } else {
    //         echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    //     }
    // }

    // public function updateProduct(ProductDao $productDao){
      
    //     $id=$productDao->getId();
    //     $productName = $productDao->getProductName();
    //     $image = $productDao->getImage();
    //     $shopname = $productDao->getShopname();
    //     $price = $productDao->getPrice();
    //     $weight = $productDao->getWeight();
    //     $address = $productDao->getAddress();
    //     $vendorName = $productDao->getVendorName();
    //     $con = new DatabaseConnection();      // DataBaseConnection con= new DatabaseConnection();
    //     $conn = $con->getConnection();       // com.getConnection();
    //     $sql = "UPDATE product SET product_name='$productName',address='$address', image='$image', shop_name='$shopname',price='$price', weight='$weight',vendor_name='$vendorName' where id=$id";
    //     if (mysqli_query($conn, $sql)) {
    //         header('Location: dashboard.php');
    //         exit;
    //     } else {
    //         echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    //     }
    // }

}
