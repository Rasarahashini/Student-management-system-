<?php

include '../dbconnection.php';

$id=$_GET["id"];
$sql="DELETE FROM course WHERE id=".$id;

if ($conn->query($sql)=== TRUE){
    header("Location:../../course.php?msg=DeleteSuccess");
}else{
    echo  "error:".$sql . "<br>" . $conn->error;
}
$conn->close();

