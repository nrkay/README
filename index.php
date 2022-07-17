<?php
// Create database connection using config file
include_once("config.php");
 
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Hello, world!</title>
  </head>
  <body>
    <div class="mx-auto">
        <div class="card">
            <div class="card-header">
                <h1>DAFTAR PROJECT<h1>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">Project Name</th>
                    <th scope="col">Client</th>
                    <th scope="col">Project Leader</th>
                    <th scope="col">Start date</th>
                    <th scope="col">End Date</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php  
                    while($user_data = mysqli_fetch_array($result)) {         
                        echo "<tr>";
                        echo "<td>".$user_data['project_name']."</td>";
                        echo "<td>".$user_data['client']."</td>";
                        echo "<td>".$user_data['project_leader']."</td>";
                        echo "<td>".$user_data['start']."</td>"; 
                        echo "<td>".$user_data['end']."</td>";      
                        echo "<td><a href='edit.php?id=$user_data[id]'> EDIT </a> | <a href='delete.php?id=$user_data[id]'> HAPUS </a></td></tr>";      
                    }
                    ?>
                </tbody>
                </table>
            </div>
        </div>
        <div class="position-relative">
            <a href="add.php" class="btn btn-primary">TAMBAHKAN PROJECT</a>
        </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
