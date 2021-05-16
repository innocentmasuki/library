<?php


$email= "";
if(isset($_POST['email'])){
    $email= $_POST['email'];
}


$connection = mysqli_connect("localhost", "root" ,"", "library_app");
$sql = "select * from user_info WHERE email = '$email'";
$result = mysqli_query($connection, $sql);
if($result-> num_rows > 0){
    echo "Can't create account! exixting user";
}else{
    echo "dont Exist";
}