!<!DOCTYPE html>
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
    <table border="1" cellpadding="5" cellspacing="0">
    <tr>
      <th>ID </th>
      <th>Name</th>
      <th>Mobile</th>
      <th>City </th>
      <th>State</th>
      <th>Gender</th>
      <th>Password</th>
      <th>Action</th>
</tr>

<?php

$con=mysqli_connect("localhost","root","","ass7");
$q="select * from student ";
$res=mysqli_query($con,$q);

while($row=mysqli_fetch_array($res))
{?>
    <tr>
            <td><?php echo $row['Id']; ?></td>
            <td><?php echo $row['Name']; ?></td>
            <td><?php echo $row['Mobile']; ?></td>
            <td><?php echo $row['Gender']; ?></td>
            <td><?php echo $row['City']; ?></td>
            <td><?php echo $row['State']; ?></td>
            <td><?php echo $row['Password']; ?></td>
            <td><a href="delete.php?id=<?php echo $row['Id'];?>">Delete</td>
</tr>
<?php } ?>
</table>      
<?php 
if(isset($_GET['id']))
{
extract($_GET); 
$con=mysqli_connect("localhost","root","","ass7");
$q="delete from student where ID='$id'";
$res=mysqli_query($con,$q);
header("location:delete.php");
echo "deleted";
}
?>

</table>
</div>
 <footer class="Footer">
        <h1>All Rights Reserved By Manix@Os &copy Act2022</h1>
</footer>
</body>
</html>
