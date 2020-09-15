<?php
include 'service/dbconnection.php';

$sql="";
$id="";
$name="";
$dean="";
$building="";


if(isset($_GET["SearchID"])){
    $sql.="SELECT * FROM faculty WHERE id=". $_GET["SearchID"];
$result=$conn->query($sql);

if($result->num_rows > 0){
    //take output of each row
    if($row = $result->fetch_assoc()){
        $id= $row["id"];
        $name= $row["name"];
        $dean= $row["dean"];
        $building= $row["building"];
    }
}else{
    echo "0 result";
}
$conn->close();
}
?>


