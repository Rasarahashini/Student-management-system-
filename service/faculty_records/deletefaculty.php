<?php

include '../dbconnection.php';

$id=$_GET["id"];
$sql="DELETE FROM faculty WHERE id=".$id;

if ($conn->query($sql)=== TRUE){
    header("Location:../../faculty.php?msg=DeleteSuccess");
}else{
    echo  "error:".$sql . "<br>" . $conn->error;
}
$conn->close();

