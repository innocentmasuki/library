
<?php
$connection = mysqli_connect("localhost", "root" ,"", "library_app");

$requestedBy= "";
if(isset($_POST['requestedby'])){
    $requestedBy= $_POST['requestedby'];
}

$isbn= "";
if(isset($_POST['isbn'])){
    $isbn= $_POST['isbn'];
}


$sql = "DELETE FROM notification WHERE  isbn = '$isbn' and requestedby='$requestedBy';";


$value = "select available from books where isbn = '$isbn'";
$val=$connection->query($value);

if($val){
    $row = $val -> fetch_row();
    $data = $row[0] + 1;
    if(mysqli_query($connection, $sql)){
        $updateNumber = "update books set available = '$data'  where isbn = '$isbn';";
        $result1 = mysqli_query($connection,$updateNumber);
        if ($result1){
            echo "Deleted";
        }else{
            echo "Not deleted";
        }
    }
}