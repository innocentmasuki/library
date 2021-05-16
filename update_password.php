
<?php
$connection = mysqli_connect("localhost", "root" ,"", "library_app");

$email= "";
if(isset($_POST['email'])){
    $email= $_POST['email'];
}

$password= "";
if(isset($_POST['password'])){
    $password= $_POST['password'];
}

$sql = "update user_info set password = '$password' where email = '$email'";


if(mysqli_query($connection,$sql))
{

    echo "Succesfully update";

}
else
{
    echo "Try again Later ...";

}
?>