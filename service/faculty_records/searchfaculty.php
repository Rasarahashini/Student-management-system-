<?php

include 'service/dbconnection.php';
$sql="SELECT * FROM faculty where 1=1";
if(isset($_GET["SearchID"])&& $_GET["SearchID"] !=""){
    $sql.=" and id='". $_GET["SearchID"]."'";
}


$result=$conn->query($sql);
if($result->num_rows > 0){
    //output data in each row 
echo"<table border='0' class='tablefacultyDetails' cellspacing='0'>"
    ."<tr>"
    ."<th>ID</th>"
    ."<th>Faculty Name</th>"
    ."<th>Dean Name</th>"
    ."<th>Building Number</th>"
    ."<th>Update</th>"
    ."<th>Delete</th>"
    ."</tr>";
        
    while($row = $result->fetch_assoc()){
        echo"<tr>"    ."<td>".$row["id"]."</td>"
                      ."<td>".$row["name"]."</td>"
                      ."<td>".$row["dean"]."</td>"
                      ."<td>".$row["building"]."</td>"
                      ."<td> <a class='updatepatientb8' href='faculty.php?SearchID=".$row["id"]."'> Update </a></td>"
                      ."<td> <a class='deletepatientb8' href='service/faculty_records/deletefaculty.php?id=" .$row["id"]."'> Delete </a></td>"
                  ."</tr>";
        }
        echo"</table>";
    }else{
          echo"0 result" ;
        }
  $conn->close();
  ?>
