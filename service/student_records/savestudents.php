<?php

include'../dbconnection.php';

$id= $_POST["id"];//Insert values to variables
$name = $_POST["name"];//Insert values to variables
$birthday= $_POST["birthday"];//Insert values to variables
$enrolled_year = $_POST["enrolled_year"];//Insert values to variables
$course_id = $_POST["course_id"];//Insert values to variables


if( empty($name)|| empty($birthday) || empty($enrolled_year) || empty($course_id) ){
    die("Blanks cannot be empty,Please enter valid information!");
}
try{
    if(isset($_POST["Save"])){
        $sql = "INSERT INTO students VALUES('" . $id . "' , '" . $name . "' , '" . $birthday . "' , '" . $enrolled_year . "', '" . $course_id . "' )";

        if ($conn->query($sql)=== TRUE){
            header("Location:../../students.php?msg=SaveSuccess");
        }else{
            throw new Exception('There is an error occurred. please try again!');
        } 
    }else{
         $sql = "UPDATE students SET name='" . $name ."', birthday='". $birthday ."', enrolled_year='". $enrolled_year ."', course_id='". $course_id ."' WHERE id=".$id;
    
       if($conn->query($sql) === TRUE){
            header("Location:../../students.php?msg=UpdateSuccess"); //show message as save success
        }else{
            die("There is an error occurred. please try again!");//Error message
        } 
    }
}catch (Exception $ex){
    echo'Meesage:'.$ex->getMessage();
}

$conn->close();
