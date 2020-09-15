<?php

include 'service/dbconnection.php';
$sql="SELECT c.id as id, c.name as name, p.title as programs_id FROM stafford_university.course c, stafford_university.programs p where c.programs_id=p.id and c.id=c.id";
if(isset($_GET["SearchID"])&& $_GET["SearchID"] !=""){
    $sql.=" and id='". $_GET["SearchID"]."'";
}


$result=$conn->query($sql);
if($result->num_rows > 0){
    //output data in each row 
echo"<table border='0' class='tablecourseDetails' cellspacing='0'>"
    ."<tr>"
    ."<th>ID</th>"
    ."<th>Course Name</th>"
    ."<th>Program Name</th>"
    ."<th>Update</th>"
    ."<th>Delete</th>"
    ."</tr>";
        
    while($row = $result->fetch_assoc()){
        echo"<tr>"    ."<td>".$row["id"]."</td>"
                      ."<td>".$row["name"]."</td>"
                      ."<td>".$row["programs_id"]."</td>"
                      ."<td> <a class='updatepatientb10' href='course.php?SearchID=".$row["id"]."'> Update </a></td>"
                      ."<td> <a class='deletepatientb10' href='service/course_records/deletecourse.php?id=" .$row["id"]."'> Delete </a></td>"
                  ."</tr>";
        }
        echo"</table>";
    }else{
          echo"0 result" ;
        }
  $conn->close();
  ?>
