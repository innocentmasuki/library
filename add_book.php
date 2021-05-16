<?php


$connection = mysqli_connect("localhost", "root" ,"", "library_app");



if($_SERVER['REQUEST_METHOD'] == 'POST')
{


    $title= "";
    if(isset($_POST['title'])){
        $title= $_POST['title'];
    }

    $coverName= "";
    if(isset($_POST['coverName'])){
        $coverName= $_POST['coverName'];
    }



    $ImageData = "";
    if(isset($_POST['ImageData'])){
        $ImageData = $_POST['ImageData'];
    }



    $ImagePath = "../library/images/book_covers/$coverName.png";
    $ServerURL = "http:192.168.43.225/$ImagePath";
//    $ServerURL = "http:192.168.137.1/$ImagePath";



    $InsertSQL = "update books set cover = '$ServerURL' where title = '$title'";

    if(mysqli_query($connection, $InsertSQL)){

        file_put_contents($ImagePath,base64_decode($ImageData));

        echo "Your Image Has Been Uploaded.";
    }

    mysqli_close($connection);
}else{
    echo "Not Uploaded";
}

?>