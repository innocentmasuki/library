<?php


$title= "";
if(isset($_POST['title'])){
    $email= $_POST['title'];
}


$connection = mysqli_connect("localhost", "root" ,"", "library_app");
$sql = "select * from books WHERE title = '$title'";
$result = mysqli_query($connection, $sql);
if($result-> num_rows > 0){
    echo "This book already Exists";
}else{
    echo "dont Exist";
}