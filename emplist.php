
<div class="card mb-3">
    <img src="https://www.bidyaan.com/wp-content/uploads/2018/01/Education-Management-Information-System-in-Bangladesh-1024x683.png" width="75" height="300" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">List of employeers</h5>
        <div class="alert alert-secondary" role="alert">
        You can find here all the informatins about employeers in the system
        </div>

        <table class="table">
            <thead class="thead-light">
            <tr>
                <th scope="col">Branch</th>
                <th scope="col">First name</th>
                <th scope="col">Second Name</th>
                <th scope="col">Age</th>
                <th scope="col">Speciality</th>
                <th scope="col">Operations</th>

            </tr>
            </thead>
            <tbody>
                <form action="edit.php" method="POST">
            <?php
            
            include "mysql.php";
            $sql = "SELECT * FROM emplyoee ";
            $result=$con->query($sql);
            if ( $result->num_rows > 0)
            
            {
                while($row = $result->fetch_assoc()): ?>
                
                    
                    <tr>

                    <td><?= $row['branch']; ?></td>
                    <td><?= $row['first_name'];?></td>
                    <td><?= $row['second_name']; ?></td>
                    <td><?= $row['age'];?></td>
                    <td><?= $row['specialty'];?></td>
                    <td style="width: 15%;">
                    
                <button type="submit" name="delete" value="<?= $row['id'];?>" class="btn btn-danger">Delete</button>
                <button type="submit" name="edit" value="<?= $row['id'];?>" class="btn btn-warning">Edit</button>
                        
                        
                    </td>


                </tr>
            <?php  endwhile; 
            } 
  
            else {
                echo "<div class='alert alert-info' role='alert'>
                there are no employeers at the momment build your first one and enjoy testing it</div>";
              }
              
              $con->close();
            ?>
                    
                
            
            
            
            
                
                    </form>
            </tbody>
        </table>
    </div>
</div>






