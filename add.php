<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>PROJECT MONITORING</title>
  </head>
  <body>
   <div class="mx-auto">
    <div class="card">
        <div class="card-header">
            <h1>CREATE PROJECT MONITORING</h1>
        </div>
        <div class="card-body">
          <form action="add.php">
          <div class="form-group row">
              <label for="project_name" class="col-sm-2 col-form-label">Project Name</label>
              <div class="col-sm-10">
              <input type="text" class="form-control" name="project_name">
              </div>
          </div>
          <div class="form-group row">
              <label for="project_leader" class="col-sm-2 col-form-label">Project Leader</label>
              <div class="col-sm-10">
              <input type="email" class="form-control" name="project_leader">
              </div>
          </div>
          <div class="form-group row">
              <label for="client" class="col-sm-2 col-form-label">Client</label>
              <div class="col-sm-10">
              <input type="text" class="form-control" name="client">
              </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="start">Start Date</label>
              <input type="text" class="form-control" id="start" placeholder="tahun-bulan-tgl">
            </div>
            <div class="form-group col-md-6">
              <label for="end">End Date</label>
              <input type="text" class="form-control" id="end" placeholder="tahun-bulan-tgl">
            </div>
          </div>

          <div class="form-group row">
              <label for="progress" class="col-sm-2 col-form-label">Progress</label>
              <div class="col-sm-10">
              <input type="text" class="form-control" id="progress">
              </div>
          </div>
          </form>
            <a><input type="submit" name="Submit" value="Add"></a>
        </div>
    </div>
    <div id="kembali">
        <a href="index.php" class="btn btn-primary">DAFTAR PROJECT</a>
    </div>
  </div>

  <?php 
 // Check If form submitted, insert form data into users table.
 if(isset($_POST['Submit'])) {
     $project_name = $_POST['project_name'];
     $client = $_POST['client'];
     $project_leader = $_POST['project_leader'];
     $progress = $_POST['progress'];
     $start = $_POST['start'];
     $end = $_POST['end'];
     
     // include database connection file
     include_once("config.php");
             
     // Insert user data into table
     $result = mysqli_query($mysqli, "INSERT INTO users(project_name, client, project_leader, progress, start, end) VALUES('$project_name','$client', '$project_leader', '$progress', '$start', '$end')");
     
     // Show message when user added
     echo "User added successfully. <a href='index.php'>View Users</a>";
 }
 ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>













































