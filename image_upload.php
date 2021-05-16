<?php


$connection = mysqli_connect("localhost", "root" ,"", "library_app");



if($_SERVER['REQUEST_METHOD'] == 'POST')
{


    $email= "";
    if(isset($_POST['email'])){
        $email= $_POST['email'];
    }

    $ImageData= "";
    if(isset($_POST['ImageData'])){
        $ImageData= $_POST['ImageData'];
    }

    $fullname= "";
    if(isset($_POST['fullname'])){
        $fullname = $_POST['fullname'];
    }


    $ImagePath = "../library/images/user_images/$fullname.png";
    $ServerURL = "http:192.168.43.225/$ImagePath";
//    $ServerURL = "http:192.168.137.1/$ImagePath";

    $InsertSQL = "update user_info set imagepath = '$ServerURL' where email = '$email'";

    if(mysqli_query($connection, $InsertSQL)){

        file_put_contents($ImagePath,base64_decode($ImageData));

        echo "Your Image Has Been Uploaded.";
    }

    mysqli_close($connection);
}else{
    echo "Not Uploaded";
}

?>