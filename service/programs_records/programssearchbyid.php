<?php
include 'service/dbconnection.php';

$sql="";
$id="";
$title="";
$level="";
$duration="";
$faculty_id="";


if(isset($_GET["SearchID"])){
    $sql.="SELECT * FROM programs WHERE id=". $_GET["SearchID"];
$result=$conn->query($sql);

if($result->num_rows > 0){
    //take output of each row
    if($row = $result->fetch_assoc()){
        $id= $row["id"];
        $title= $row["title"];
        $level= $row["level"];
        $duration= $row["duration"];
        $faculty_id= $row["faculty_id"];
    }
}else{
    echo "0 result";
}
$conn->close();
}
?>


