<?php
session_start();
include "mysql.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    



    $branch=$_POST["branch"];
    $firstName=$_POST["firstName"];
    $secondName=$_POST["secondName"];
    $age=$_POST["age"];
    $speciality=$_POST["speciality"];


    $sql = "INSERT INTO emplyoee (branch, first_name, second_name,age,specialty)
    VALUES ('$branch', '$firstName', '$secondName','$age','$speciality')";
    if ($con->query($sql) == TRUE) {
        echo "<div class='alert alert-success' role='alert'>
           $firstName $secondName 's informations have been successfuly added
      </div>";
        include "createemp.php";        
       
                
    } 
    else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }
    
    
}

?>