<?php

include'../dbconnection.php';

$id= $_POST["id"];//Insert values to variables
$title = $_POST["title"];//Insert values to variables
$level= $_POST["level"];//Insert values to variables
$duration = $_POST["duration"];//Insert values to variables
$faculty_id = $_POST["faculty_id"];//Insert values to variables


if( empty($title)|| empty($level) || empty($duration) || empty($faculty_id) ){
    die("Blanks cannot be empty,Please enter valid information!");
}
try{
    if(isset($_POST["Save"])){
        $sql = "INSERT INTO programs VALUES('" . $id . "' , '" . $title . "' , '" . $level . "' , '" . $duration . "', '" . $faculty_id . "' )";

        if ($conn->query($sql)=== TRUE){
            header("Location:../../programs.php?msg=SaveSuccess");
        }else{
            throw new Exception('There is an error occurred. please try again!');
        } 
    }else{
         $sql = "UPDATE programs SET title='" . $title ."', level='". $level ."', duration='". $duration ."', faculty_id='". $faculty_id ."' WHERE id=".$id;
    
       if($conn->query($sql) === TRUE){
            header("Location:../../programs.php?msg=UpdateSuccess"); //show message as save success
        }else{
            die("There is an error occurred. please try again!");//Error message
        } 
    }
}catch (Exception $ex){
    echo'Meesage:'.$ex->getMessage();
}

$conn->close();
