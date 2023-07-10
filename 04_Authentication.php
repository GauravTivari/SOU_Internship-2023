<?php
require '01_db_connection.php';

if(isset($_POST["Login"])){
$Username = $_POST['Username'];  
$Password = $_POST['Password'];  
    
    $sql = "select * from demo_insert where Username = '$Username' and Password = '$Password'";  
    $result = mysqli_query($conn, $sql);  
    $count = mysqli_num_rows($result);  
      
    if($count == 1){  
        echo "<h1><center> Login successful </center></h1>";  
    }  
    else{  
        echo "<h1> Login failed. Invalid Username or Password.</h1>";  
    }     
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
    <form class="" action="" method="post" autocomplete="off" style-"display:block;">
        <lable for=""> Username</label>
        <input type="text" name="Username" required value=""><br><br>
        <lable for=""> Password</label>
        <input type="password" name="Password" required value=""><br><br>
        <input type="submit" name="Login" required value="Login">
    </form>
</center>
</body>
</html>