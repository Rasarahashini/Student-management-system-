<?php

include'../dbconnection.php';

$id= $_POST["id"];//Insert values to variables
$name = $_POST["name"];//Insert values to variables
$dean= $_POST["dean"];//Insert values to variables
$building = $_POST["building"];//Insert values to variables


if( empty($name)|| empty($dean) || empty($building) ){
    die("Blanks cannot be empty,Please enter valid information!");
}
try{
    if(isset($_POST["Save"])){
        $sql = "INSERT INTO faculty VALUES('" . $id . "' , '" . $name . "' , '" . $dean . "' , '" . $building . "' )";

        if ($conn->query($sql)=== TRUE){
            header("Location:../../faculty.php?msg=SaveSuccess");
        }else{
            throw new Exception('There is an error occurred. please try again!');
        } 
    }else{
         $sql = "UPDATE faculty SET name='" . $name ."', dean='". $dean ."', building='". $building ."' WHERE id=".$id;
    
       if($conn->query($sql) === TRUE){
            header("Location:../../faculty.php?msg=UpdateSuccess"); //show message as save success
        }else{
            die("There is an error occurred. please try again!");//Error message
        } 
    }
}catch (Exception $ex){
    echo'Meesage:'.$ex->getMessage();
}

$conn->close();
