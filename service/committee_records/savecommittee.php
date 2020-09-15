<?php

include'../dbconnection.php';

$id= $_POST["id"];//Insert values to variables
$name = $_POST["name"];//Insert values to variables
$faculty_id = $_POST["faculty_id"];//Insert values to variables
$lecturers_id= $_POST["lecturers_id"];//Insert values to variables


if( empty($name)|| empty($faculty_id)|| empty($lecturers_id)){
    die("Blanks cannot be empty,Please enter valid information!");
}
try{
    if(isset($_POST["Save"])){
        $sql = "INSERT INTO commitees VALUES('" . $id . "' , '" . $name . "' ,  '" . $faculty_id . "' ,  '" . $lecturers_id . "')";

        if ($conn->query($sql)=== TRUE){
            header("Location:../../committees.php?msg=SaveSuccess");
        }else{
            throw new Exception('There is an error occurred. please try again!');
        } 
    }else{
         $sql = "UPDATE commitees SET name='" . $name ."',  faculty_id='". $faculty_id ."', lecturers_id='". $lecturers_id ."' WHERE id=".$id;
    
       if($conn->query($sql) === TRUE){
            header("Location:../../committees.php?msg=UpdateSuccess"); //show message as save success
        }else{
            die("There is an error occurred. please try again!");//Error message
        } 
    }
}catch (Exception $ex){
    echo'Meesage:'.$ex->getMessage();
}

$conn->close();
