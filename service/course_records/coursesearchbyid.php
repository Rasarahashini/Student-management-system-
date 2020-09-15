<?php
include 'service/dbconnection.php';

$sql="";
$id="";
$name="";
$programs_id="";



if(isset($_GET["SearchID"])){
    $sql.="SELECT * FROM course WHERE id=". $_GET["SearchID"];
$result=$conn->query($sql);

if($result->num_rows > 0){
    //take output of each row
    if($row = $result->fetch_assoc()){
        $id= $row["id"];
        $name= $row["name"];
        $programs_id= $row["programs_id"];
   }
}else{
    echo "0 result";
}
$conn->close();
}
?>


