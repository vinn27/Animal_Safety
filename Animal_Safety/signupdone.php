<?php

$username = $_POST['username'];
$phone = $_POST['phone'];
$password = $_POST['password'];
$email = $_POST['email'];


include 'connect.php';

if ($con->connect_error) {
    die("failed to connect" . $con->connect_error);
} else {
    $x = $con->prepare("insert into login (username,password,email,mobile) values(?,?,?,?)");
    $x->bind_param("sisi", $username, $password, $email,$phone);
    $x->execute();
    // echo "registration successfull";
    include "index.php";
    $x->close();
    $con->close();
}


?>