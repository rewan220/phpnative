<?php

session_start();
include "mysql.php";


$name=$_POST["name"];
$email=$_POST["email"];
$phone=$_POST["phone"];
$message=$_POST["message"];


$sql = "INSERT INTO Contact (firstname, email, phone,message)
VALUES ('$name', '$email', '$phone','$message')";
if ($con->query($sql) === TRUE) {
    include "contact.php";
    
            
  } else {
    echo "Error: " . $sql . "<br>" . $con->error;
  }
  
  $con->close();



?>