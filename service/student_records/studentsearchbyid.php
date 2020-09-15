<?php
include 'service/dbconnection.php';

$sql="";
$id="";
$name="";
$birthday="";
$enrolled_year="";
$course_id="";


if(isset($_GET["SearchID"])){
    $sql.="SELECT * FROM students WHERE id=". $_GET["SearchID"];
$result=$conn->query($sql);

if($result->num_rows > 0){
    //take output of each row
    if($row = $result->fetch_assoc()){
        $id= $row["id"];
        $name= $row["name"];
        $birthday= $row["birthday"];
        $enrolled_year= $row["enrolled_year"];
        $faculty_id= $row["course_id"];
    }
}else{
    echo "0 result";
}
$conn->close();
}
?>


