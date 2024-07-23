
<?php
session_start();
include 'repository.php';
include 'repositoryImpl.php';
include 'LoginDao.php';

if ((isset($_POST["username"]) || !empty($_POST["username"])) && (isset($_POST["password"]) || !empty($_POST["password"]))) {
    $clean = new CleaningImpl();
    $uname = $_POST['username'];
    $pass = $_POST['password'];
    $_SESSION["username"] = $uname;
    $credential = new LoginDao();
    $credential->setUsername($uname);
    $credential->setPassword($pass);
    $isLogin = $clean->getCredential($credential);
    if ($isLogin == true) {
        header('Location: adminDashboard.php');
        exit;
    } else {
        header("Location: newlog.php?error");
        exit;
    }
}
?>