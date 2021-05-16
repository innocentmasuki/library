<?php
$email= "";
if(isset($_POST['email'])){
    $email= $_POST['email'];
}

$userpass= "";
if(isset($_POST['password'])){
    $userpass= $_POST['password'];
}
$connection = mysqli_connect("localhost", "root" ,"", "library_app");
$sql = "select * from user_info WHERE email = '$email' AND password = '$userpass'";
$result = mysqli_query($connection, $sql);
if($result-> num_rows > 0){
    echo "Welcome";
}else{
    echo "Incorrect Password or Mail";
}