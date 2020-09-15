<?php

include '../dbconnection.php';

$id=$_GET["id"];
$sql="DELETE FROM programs WHERE id=".$id;

if ($conn->query($sql)=== TRUE){
    header("Location:../../programs.php?msg=DeleteSuccess");
}else{
    echo  "error:".$sql . "<br>" . $conn->error;
}
$conn->close();

