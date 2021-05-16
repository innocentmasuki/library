
<?php
$connection = mysqli_connect("localhost", "root" ,"", "library_app");

$email= "";
if(isset($_POST['email'])){
    $email= $_POST['email'];
}


$sql = "DELETE FROM user_info WHERE email='$email';";

if(mysqli_query($connection,$sql))
{

    echo "Deleted";

}
else
{
    echo "Error Occured" ;

}
?>