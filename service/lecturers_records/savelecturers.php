<?php

include'../dbconnection.php';

$id= $_POST["id"];//Insert values to variables
$name = $_POST["name"];//Insert values to variables
$position= $_POST["position"];//Insert values to variables
$office_room = $_POST["office_room"];//Insert values to variables
$course_id = $_POST["course_id"];//Insert values to variables


if( empty($name)|| empty($position) || empty($office_room) || empty($course_id) ){
    die("Blanks cannot be empty,Please enter valid information!");
}
try{
    if(isset($_POST["Save"])){
        $sql = "INSERT INTO lecturers VALUES('" . $id . "' , '" . $name . "' , '" . $position . "', '" . $office_room . "', '" . $course_id . "' )";

        if ($conn->query($sql)=== TRUE){
            header("Location:../../lecturers.php?msg=SaveSuccess");
        }else{
            throw new Exception('There is an error occurred. please try again!');
        } 
    }else{
         $sql = "UPDATE lecturers SET name='" . $name ."', position='". $position ."',  office_room='". $office_room ."',  course_id='". $course_id ."' WHERE id=".$id;
    
       if($conn->query($sql) === TRUE){
            header("Location:../../lecturers.php?msg=UpdateSuccess"); //show message as save success
        }else{
            die("There is an error occurred. please try again!");//Error message
        } 
    }
}catch (Exception $ex){
    echo'Meesage:'.$ex->getMessage();
}

$conn->close();
