
<?php
$connection = mysqli_connect("localhost", "root" ,"", "library_app");

$id= "";
if(isset($_POST['id'])){
    $id= $_POST['id'];
}

$isbn= "";
if(isset($_POST['isbn'])){
    $isbn= $_POST['isbn'];
}

$email= "";
if(isset($_POST['email'])){
    $email= $_POST['email'];
}






$value = "select available from books where isbn = '$isbn'";
$sql = "update notification set status = 'Approved', views = 'user', approvedby = '$email' where id = '$id';";

$val=$connection->query($value);

if($val){
    $row = $val -> fetch_row();
    $data = $row[0] - 1;
    $result = mysqli_query($connection, $sql);
    if($result){
        $approve = "update books set available = '$data'  where isbn = '$isbn';";
        $result1 = mysqli_query($connection,$approve);
        if ($result1){
            echo "Approved";
        }else{
            echo "Not Approved";
        }
    }
}











