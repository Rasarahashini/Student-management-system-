<?php
include 'service/dbconnection.php';

$sql="";
$id="";
$name="";
$faculty_id="";
$lecturers_id="";



if(isset($_GET["SearchID"])){
    $sql.="SELECT * FROM commitees WHERE id=". $_GET["SearchID"];
$result=$conn->query($sql);

if($result->num_rows > 0){
    //take output of each row
    if($row = $result->fetch_assoc()){
        $id= $row["id"];
        $name= $row["name"];
        $faculty_id= $row["faculty_id"];
        $lecturers_id= $row["lecturers_id"];
   }
}else{
    echo "0 result";
}
$conn->close();
}
?>


