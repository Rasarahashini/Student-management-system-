<?php

include 'service/dbconnection.php';
$sql="SELECT pp.id as id, pp.title as title, pp.level as level, pp.duration as duration, f.name as faculty_id FROM programs pp, faculty f WHERE pp.faculty_id=f.id";
if(isset($_GET["SearchID"])&& $_GET["SearchID"] !=""){
    $sql.=" and id='". $_GET["SearchID"]."'";
}


$result=$conn->query($sql);
if($result->num_rows > 0){
    //output data in each row 
echo"<table border='0' class='tableprogramsDetails' cellspacing='0'>"
    ."<tr>"
    ."<th>ID</th>"
    ."<th>Program Title</th>"
    ."<th>Program Level</th>"
    ."<th>Duration</th>"
    ."<th>Faculty Name</th>"
    ."<th>Update</th>"
    ."<th>Delete</th>"
    ."</tr>";
        
    while($row = $result->fetch_assoc()){
        echo"<tr>"    ."<td>".$row["id"]."</td>"
                      ."<td>".$row["title"]."</td>"
                      ."<td>".$row["level"]."</td>"
                      ."<td>".$row["duration"]."</td>"
                      ."<td>".$row["faculty_id"]."</td>"
                      ."<td> <a class='updatepatientb9' href='programs.php?SearchID=".$row["id"]."'> Update </a></td>"
                      ."<td> <a class='deletepatientb9' href='service/programs_records/deleteprograms.php?id=" .$row["id"]."'> Delete </a></td>"
                  ."</tr>";
        }
        echo"</table>";
    }else{
          echo"0 result" ;
        }
  $conn->close();
  ?>
