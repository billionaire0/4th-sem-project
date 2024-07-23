<?php
include 'repository.php';
include 'repositoryImpl.php';
include 'LoginDao.php';
$clean = new CleaningImpl();
$uname = $_POST['username'];
$contact = $_POST['contact'];
$pass = $_POST['password'];
$email = $_POST['email'];
$repass = $_POST['repassword'];
$credential = new LoginDao();
$credential->setUsername($uname);
$credential->setContact($contact);
$credential->setPassword($pass);
$credential->setEmail($email);
$credential->setRepassword($repass);
$clean->signUp($credential);
