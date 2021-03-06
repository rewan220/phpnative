
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/emp.css">
    <title>employeer management system</title>
    
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="">Employeers Management</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-item nav-link active" href="empnav.php">Home <span class="sr-only"></span></a>
            <a class="nav-item nav-link " name="create" href="createemp.php">Create</a>

        </div>
    </div>
</nav>


<div class="container-fluid mt-4 " id="create-form">
        <div class="row">
        <section class="col-md-7">

        <div class="card mb-3">
                    <img src="https://media1.tenor.com/images/6bf658d3c1df80990a0817b417b78155/tenor.gif?itemid=10503435" class="card-img-top" width="25" height="300" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Update informations of the emplyeer</h5>
                        <form action="edit_action.php" method="post" >
                           
                            <div class="form-group">
                                <label>branch</label>
                                <input value="<?php echo $row['branch'];?>" name="branch" type="text" class="form-control"  placeholder="Enter branch" required>
                            </div>
                            <div class="form-group">
                                <label>First Name</label>
                                <input value="<?php echo $row['first_name'];?>" name="firstName" type="text" class="form-control"  placeholder="Enter the first name" required>
                            </div>
                            <div class="form-group">
                                <label>second Name</label>
                                <input value="<?php echo $row['second_name'];?>" name="secondName" type="text" class="form-control"  placeholder="Enter second name" required>
                            </div>
                            <div class="form-group">
                                <label>Age</label>
                                <input value="<?php echo $row['age'];?>" name="age" type="number" class="form-control"  placeholder="Enter the Age" required>
                            </div>
                            <div class="form-group">
                                <label>Speciality</label>
                                <input value="<?php echo $row['specialty'];?>" name="speciality" type="text" class="form-control"  placeholder="Enter Sepeciality" required>
                            </div>
                                <input type="submit" name="submit" class="btn btn-info" value="Update">
                            <input type="reset" class="btn btn-warning" value="Reset">

                        </form>
                        
                    </div>
                </div>
                </section>
        <section class="col-md-5">
        <?php
                include "emplist.php";
                ?>
                
           
        </section>
    </div>
</div>

                <footer></footer>
    <!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>