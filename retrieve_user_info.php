<?php

$connection = mysqli_connect("localhost", "root" ,"", "library_app");
$sql = "select * from user_info;";
$result = mysqli_query($connection, $sql);
$response = array();
while($row = mysqli_fetch_array($result)){
array_push($response, array("Name"=>$row["fullname"], "Email"=>$row["email"], "Password"=>$row["password"], "Category"=>$row["category"], "Imagepath"=>$row["imagepath"]));

}

echo json_encode($response);