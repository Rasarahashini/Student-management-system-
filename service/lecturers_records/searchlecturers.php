<?php

include 'service/dbconnection.php';
$sql="SELECT lec.id as id, lec.name as name, lec.position as position, lec.office_room as office_room, cc.name as course_id FROM lecturers lec, course cc WHERE lec.course_id=cc.id";
if(isset($_GET["SearchID"])&& $_GET["SearchID"] !=""){
    $sql.=" and id='". $_GET["SearchID"]."'";
}


$result=$conn->query($sql);
if($result->num_rows > 0){
    //output data in each row 
echo"<table border='0' class='tablelecturersDetails' cellspacing='0'>"
    ."<tr>"
    ."<th>ID</th>"
    ."<th>Lecturer Name</th>"
    ."<th>Position</th>"
    ."<th>Office Room</th>"
    ."<th>Course Name</th>"
    ."<th>Update</th>"
    ."<th>Delete</th>"
    ."</tr>";
        
    while($row = $result->fetch_assoc()){
        echo"<tr>"    ."<td>".$row["id"]."</td>"
                      ."<td>".$row["name"]."</td>"
                      ."<td>".$row["position"]."</td>"
                      ."<td>".$row["office_room"]."</td>"
                      ."<td>".$row["course_id"]."</td>"
                      ."<td> <a class='updatepatientb12' href='lecturers.php?SearchID=".$row["id"]."'> Update </a></td>"
                      ."<td> <a class='deletepatientb12' href='service/lecturers_records/deletelecturers.php?id=" .$row["id"]."'> Delete </a></td>"
                  ."</tr>";
        }
        echo"</table>";
    }else{
          echo"0 result" ;
        }
  $conn->close();
  ?>
