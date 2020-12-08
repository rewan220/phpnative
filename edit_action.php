<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    
    include "mysql.php";
    session_start();
    $idd=$_SESSION['id'];
    

    $branch=$_POST["branch"];
    $firstName=$_POST["firstName"];
    $secondName=$_POST["secondName"];
    $age=$_POST["age"];
    $speciality=$_POST["speciality"];
    


    $sql = "UPDATE emplyoee SET  branch='$branch', first_name='$firstName', second_name='$secondName',age='$age',specialty='$speciality' WHERE id='$idd' ";
    if ($result=$con->query($sql) == TRUE) {
        echo "<div class='alert alert-success' role='alert'>
        $firstName $secondName 's informations have been updated
           </div>";
        include "empnav.php";
        
                
    } 
    else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }
    
    
    
}





?>