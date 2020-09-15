<?php

include 'service/dbconnection.php';
$sql="SELECT ss.id as id, ss.name as name, ss.birthday as birthday, ss.enrolled_year as enrolled_year, cc.name as course_id FROM students ss, course cc WHERE ss.course_id=cc.id";
if(isset($_GET["SearchID"])&& $_GET["SearchID"] !=""){
    $sql.=" and id='". $_GET["SearchID"]."'";
}


$result=$conn->query($sql);
if($result->num_rows > 0){
    //output data in each row 
echo"<table border='0' class='tablestudentsDetails' cellspacing='0'>"
    ."<tr>"
    ."<th>ID</th>"
    ."<th>Full Name/th>"
    ."<th>Birthday</th>"
    ."<th>Enrolled year</th>"
    ."<th>Course Name</th>"
    ."<th>Update</th>"
    ."<th>Delete</th>"
    ."</tr>";
        
    while($row = $result->fetch_assoc()){
        echo"<tr>"    ."<td>".$row["id"]."</td>"
                      ."<td>".$row["name"]."</td>"
                      ."<td>".$row["birthday"]."</td>"
                      ."<td>".$row["enrolled_year"]."</td>"
                      ."<td>".$row["course_id"]."</td>"
                      ."<td> <a class='updatepatientb11' href='students.php?SearchID=".$row["id"]."'> Update </a></td>"
                      ."<td> <a class='deletepatientb11' href='service/student_records/deletestudents.php?id=" .$row["id"]."'> Delete </a></td>"
                  ."</tr>";
        }
        echo"</table>";
    }else{
          echo"0 result" ;
        }
  $conn->close();
  ?>
