
<?php
$connection = mysqli_connect("localhost", "root" ,"", "library_app");

$remaining= "";
if(isset($_POST['remaining'])){
    $remaining= $_POST['remaining'];
}

$email= "";
if(isset($_POST['email'])){
    $email= $_POST['email'];
}

$title= "title";
if(isset($_POST['title'])){
    $title= $_POST['title'];
}






$sql = "update notification set  remaining = '$remaining' where requestedby = '$email' and title = '$title'";

if(mysqli_query($connection,$sql))
{

    echo "NumberUpdated";

}
else
{
    echo "Didnt Update" ;

}
?>