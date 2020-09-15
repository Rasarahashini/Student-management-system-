<?php

include'../dbconnection.php';

$id= $_POST["id"];//Insert values to variables
$name = $_POST["name"];//Insert values to variables
$programs_id= $_POST["programs_id"];//Insert values to variables


if( empty($name)|| empty($programs_id) ){
    die("Blanks cannot be empty,Please enter valid information!");
}
try{
    if(isset($_POST["Save"])){
        $sql = "INSERT INTO course VALUES('" . $id . "' , '" . $name . "' ,  '" . $programs_id . "' )";

        if ($conn->query($sql)=== TRUE){
            header("Location:../../course.php?msg=SaveSuccess");
        }else{
            throw new Exception('There is an error occurred. please try again!');
        } 
    }else{
         $sql = "UPDATE course SET name='" . $name ."',  programs_id='". $programs_id ."' WHERE id=".$id;
    
       if($conn->query($sql) === TRUE){
            header("Location:../../course.php?msg=UpdateSuccess"); //show message as save success
        }else{
            die("There is an error occurred. please try again!");//Error message
        } 
    }
}catch (Exception $ex){
    echo'Meesage:'.$ex->getMessage();
}

$conn->close();
