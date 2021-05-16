<?php

$title= "";
if(isset($_POST['title'])){
    $title= $_POST['title'];
}

$author= "";
if(isset($_POST['author'])){
    $author= $_POST['author'];
}

$isbn= "";
if(isset($_POST['isbn'])){
    $isbn = $_POST['isbn'];
}
$descriptions= "";
if(isset($_POST['descriptions'])){
    $descriptions = $_POST['descriptions'];
}

$category= "";
if(isset($_POST['category'])){
    $category = $_POST['category'];
}



$cover = "";
if(isset($_POST['cover'])){
    $cover = $_POST['cover'];
}

$uploadedby = "";
if(isset($_POST['uploadedby'])){
    $uploadedby = $_POST['uploadedby'];
}

$requests = "";
if(isset($_POST['requests'])){
    $requests = $_POST['requests'];
}

$available = "";
if(isset($_POST['available'])){
    $available = $_POST['available'];
}

$connection = mysqli_connect("localhost", "root" ,"", "library_app");

$sql = "INSERT INTO books (title,author, isbn, category,descriptions,cover,uploadedby, available) values ('$title','$author', '$isbn', '$category', '$descriptions', '$cover', '$uploadedby', '$available');";
if ($connection->query($sql) === TRUE) {
    echo "Uploaded";
} else {
    echo "Error";
}

$connection->close();