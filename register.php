<?php


$fullname= "";

if(isset($_POST['fullname'])){
    $fullname= $_POST['fullname'];
}


$email= "";
if(isset($_POST['email'])){
    $email= $_POST['email'];
}
$category= "";
if(isset($_POST['category'])){
    $category= $_POST['category'];
}

$userpass= "";
if(isset($_POST['password'])){
    $userpass= $_POST['password'];
}
$connection = mysqli_connect("localhost", "root" ,"", "library_app");

$sql = "INSERT INTO user_info (fullname,email, category, password) values ('$fullname','$email', '$category', '$userpass');";

$result = mysqli_query($connection,$sql);

if ($result) {
    echo "Welcome 🤗";
} else {
    echo "Error";
}

$connection->close();