<?php


$email= "";
if(isset($_POST['email'])){
    $email= $_POST['email'];
}

$title= "";
if(isset($_POST['title'])){
    $title= $_POST['title'];
}


$connection = mysqli_connect("localhost", "root" ,"", "library_app");
$sql = "select * from notification WHERE requestedby = '$email' and title = '$title'";
$result = mysqli_query($connection, $sql);
if($result-> num_rows > 0){
    echo "Can't create request";
}else{
    echo "dont Exist";
}