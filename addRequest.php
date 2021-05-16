<?php


$connection = mysqli_connect("localhost", "root" ,"", "library_app");






    $isbn= "";
    if(isset($_POST['isbn'])){
        $isbn= $_POST['isbn'];
    }

    $request= "";
    if(isset($_POST['requests'])){
        $request= $_POST['requests'];
    }




    $InsertSQL = "update books set requests = '$request' where isbn = '$isbn';";

    if(mysqli_query($connection, $InsertSQL)){

        echo "Requested";
    }else{
    echo "Error requesting";
}

?>