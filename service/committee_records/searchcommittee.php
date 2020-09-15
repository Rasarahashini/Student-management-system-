<?php

include 'service/dbconnection.php';
$sql="SELECT * FROM commitees where 1=1";
if(isset($_GET["SearchID"])&& $_GET["SearchID"] !=""){
    $sql.=" and id='". $_GET["SearchID"]."'";
}


$result=$conn->query($sql);
if($result->num_rows > 0){
    //output data in each row 
echo"<table border='0' class='tablecommDetails' cellspacing='0'>"
    ."<tr>"
    ."<th>ID</th>"
    ."<th>Committee Name</th>"
    ."<th>Faculty Name</th>"
    ."<th>Lecturer Name</th>"
    ."<th>Update</th>"
    ."<th>Delete</th>"
    ."</tr>";
        
    while($row = $result->fetch_assoc()){
        echo"<tr>"    ."<td>".$row["id"]."</td>"
                      ."<td>".$row["name"]."</td>"
                      ."<td>".$row["faculty_id"]."</td>"
                      ."<td>".$row[" lecturers_id"]."</td>"
                      ."<td> <a class='updatepatientb13' href='committees.php?SearchID=".$row["id"]."'> Update </a></td>"
                      ."<td> <a class='deletepatientb13' href='service/committee_records/deletecommittee.php?id=" .$row["id"]."'> Delete </a></td>"
                  ."</tr>";
        }
        echo"</table>";
    }else{
          echo"0 result" ;
        }
  $conn->close();
  ?>
