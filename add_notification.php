<?php


$cover= "";
if(isset($_POST['cover'])){
    $cover= $_POST['cover'];
}
$title= "";
if(isset($_POST['title'])){
    $title= $_POST['title'];
}

$author= "";
if(isset($_POST['author'])){
    $author= $_POST['author'];
}


$requestedby= "";
if(isset($_POST['requestedby'])){
    $requestedby= $_POST['requestedby'];
}
$views= "";
if(isset($_POST['views'])){
    $views= $_POST['views'];
}

$isbn= "";
if(isset($_POST['isbn'])){
    $isbn= $_POST['isbn'];
}

$status= "";
if(isset($_POST['status'])){
    $status= $_POST['status'];
}










$connection = mysqli_connect("localhost", "root" ,"", "library_app");

$sql = "INSERT INTO notification (cover,title, author, requestedby, views,isbn, status) values ('$cover','$title', '$author', '$requestedby', '$views', '$isbn','$status');";

$result = mysqli_query($connection,$sql);

if($result){
    echo "Requested";
} else{
    echo "Error";
}


