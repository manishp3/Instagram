<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
    <header class="header">
      
    <div class="head">
        <h1>STUDENT MANAGEMENT SYSTEM</h1>
</div>
<div class="links">
    <a href="index.php">Home</a>
    <a href="insert.php">Insert</a>
    <a href="select.php">Display</a>
    <a href="Delete.php">Delete</a>
    <a href="Update.php">Update</a>
</div>

</header>
<div class="mid">
    <div class="midtable">
    <table border="2" cellspacing="5" cellpadding="0">  
        <form method="POST">
        <tr>
        <th collspan="2">Registration Form</th>
        </tr>

        <tr>
        <td>Id</td>
        <td><input type="text" name="id" value="<?php echo $updateId; ?>"></td>
        </tr>

        <tr>
        <td>Name</td>
        <td><input type="text" name="name" value="<?php echo $name; ?>"></td>
        </tr>

        <tr>
        <td>Mobile</td>
        <td><input type="number" name="mob" value="<?php echo $mobile; ?>"></td>
        </tr>

        
        <tr>
        <td>gender</td>
        <td><input type="radio" name="gender" value="male">male
        <input type="radio" name="gender" value="female">Female</td>
        </tr>

        <tr>        
        <td>City</td>
        <td><input type="text" name="city" value="<?php echo $city; ?>"></td>
        </tr>

        <tr>
        <td>State</td>
        <td><input type="text" name="state" value="<?php echo $state; ?>"></td>
        </tr>

        <tr>
        <td>Password</td>
        <td><input type="password" name="pwd"></td>
        </tr>

        <tr>
        <td collspan="2"><input type="submit" name="submit" value="submit"></td>
        </tr>
</form>
</table>
</div>
</div>
<footer class="Footer">
        <h1>All Rights Reserved By Manix@Os &copyAct2022</h1>
</footer>

   <?php 
    
        if(isset($_POST['updateId']))
        {
    $con=mysqli_connect("localhost","root","","ass7");
    $q="update student set Name='$name',Mobile='$mobile,City='$city',State='$state',Password='$passwprd' where Id='$updateId'";
    $res=mysqli_query($con,$q);
    header("location:update.php");

}
   ?>
</body>
</html>