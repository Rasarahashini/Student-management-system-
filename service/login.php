<?php

$username= $_POST['username'];
$password= $_POST['password'];

if($username=="Stafford University" && $password=="stafford1234"){
    header("Location: ../main.php");
}else{
    header("Location: ../index.php?msg=Invalid");
 }
