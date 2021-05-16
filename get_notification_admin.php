<?php


$con = mysqli_connect("localhost", "root" ,"", "library_app");
$sql = "select * from notification where views = 'Admin' or views = 'user' order by title asc;";

$result = mysqli_query($con, $sql);
$response = array();
while($row = mysqli_fetch_array($result)){
    array_push($response, array("Title"=>$row["title"], "Author"=>$row["author"], "Requestedby"=>$row["requestedby"], "Cover"=>$row["cover"], "Id"=>$row["id"], "Status"=>$row["status"], "Isbn"=>$row["isbn"], "ApprovedBy"=>$row["approvedby"]));

}

echo json_encode($response);