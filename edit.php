<?php

include "mysql.php";

if(isset($_POST['delete']))
{
        $id=$_POST['delete'];

        $sql = "DELETE FROM emplyoee WHERE id = ? ";
        $result = $con->prepare($sql);
        $result->bind_param('i',$id);
        if ($result->execute()) 
        {
                echo "<div class='alert alert-danger' role='alert'>
                the employeer 's informations have been successfuly deleted
           </div>";
           include "empnav.php";
        }
        $result->close();
        
        
       
} 
if(isset($_POST['edit']))
{       $id = $_POST['edit'];
        $query = "SELECT * FROM emplyoee WHERE id='$id'";
        $result = mysqli_query($con, $query);
        $row = mysqli_fetch_array($result);
        session_start();
        $_SESSION['id']=$id;
        include "edit_form.php";
        
    
    
    }
  
?>