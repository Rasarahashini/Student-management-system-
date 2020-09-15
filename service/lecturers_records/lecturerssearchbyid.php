<?php
include 'service/dbconnection.php';

$sql="";
$id="";
$name="";
$position="";
$office_room="";
$course_id="";



if(isset($_GET["SearchID"])){
    $sql.="SELECT * FROM lecturers WHERE id=". $_GET["SearchID"];
$result=$conn->query($sql);

if($result->num_rows > 0){
    //take output of each row
    if($row = $result->fetch_assoc()){
        $id= $row["id"];
        $name= $row["name"];
        $position= $row["position"];
        $office_room= $row["office_room"];
        $course_id =$row["course_id"];
    }
}else{
    echo "0 result";
}
$conn->close();
}
?>


