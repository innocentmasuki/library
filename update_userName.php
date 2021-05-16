
<?php
$connection = mysqli_connect("localhost", "root" ,"", "library_app");

$email= "";
if(isset($_POST['email'])){
    $email= $_POST['email'];
}

$fullname= "";
if(isset($_POST['fullname'])){
    $fullname= $_POST['fullname'];
}


$sql = "update user_info set fullname = '$fullname' where email = '$email'";

if(mysqli_query($connection,$sql))
{

    echo "Name changed Successfully";

}
else
{
    echo "Can't change Try again Later ..." ;

}
?>