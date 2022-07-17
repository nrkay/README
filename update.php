<?php
// include database connection file
include_once("config.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
    $id = $_POST['id'];
    $project_name =$_POST['name'];
    $client =$_POST['client'];
    $project_laeader =$_POST['project_laeaderl'];
    $progress =$_POST['progress'];
    $start =$_POST['start'];
    $end =$_POST['end'];
        
    // update user data
    $result = mysqli_query($mysqli, "UPDATE users SET project_name='$project_name', client='$client', project_laeader='$project_laeader', progress='$progress', start='$start', end='$end' WHERE id=$id");
    
    // Redirect to homepage to display updated user in list
    header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
 
// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id=$id");
 
while($user_data = mysqli_fetch_array($result))
{
    $project_name =$_user_data['project_name'];
    $client =$_user_data['client'];
    $project_laeader =$_user_data['project_laeader'];
    $progress =$_user_data['progress'];
    $start =$_user_data['start'];
    $end =$_user_data['end'];
}
?>
<html>
<head>	
    <title>Edit User Data</title>
</head>
 
<body>
    <a href="index.php">Home</a>
    <br/><br/>
    
    <form name="update_user" method="post" action="edit.php">
        <table border="0">
            <tr> 
                <td>Project Name</td>
                <td><input type="text" name="project_name" value=<?php echo $project_name;?>></td>
            </tr>
            <tr> 
                <td>Client</td>
                <td><input type="text" name="client" value=<?php echo $client;?>></td>
            </tr>
            <tr> 
                <td>Project Leader</td>
                <td><input type="text" name="project_leader" value=<?php echo $project_leader;?>></td>
            </tr>
            <tr> 
                <td>Progress</td>
                <td><input type="text" name="progress" value=<?php echo $progress;?>></td>
            </tr>
            <tr> 
                <td>Start Date</td>
                <td><input type="text" name="start" value=<?php echo $start;?>></td>
            </tr>
            <tr> 
                <td>End Date</td>
                <td><input type="text" name="end" value=<?php echo $end;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>
