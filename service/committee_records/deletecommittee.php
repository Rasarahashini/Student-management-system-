<?php

include '../dbconnection.php';

$id=$_GET["id"];
$sql="DELETE FROM commitees WHERE id=".$id;

if ($conn->query($sql)=== TRUE){
    header("Location:../../committees.php?msg=DeleteSuccess");
}else{
    echo  "error:".$sql . "<br>" . $conn->error;
}
$conn->close();

