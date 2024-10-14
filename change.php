<!DOCTYPE html>
<html>
<head>
    <title> change</title>
</head>
<?php
include 'connect.php'
?>
<style>
body{
  background-color: lightgreen;
}
    th {
height: 70px;
background-color: green;
color: white;
}
td {
  text-align: center;
  height: 50px;
  vertical-align: bottom;
}
table, th, td {
  border: 1px solid;
  font-size: 20px;
}
tr:hover {
  background-color: green;
  }
  button {
  background-color: green; /* Green */
  border: none;
  color: white;
  padding: 10px 10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 20px;
}
a:link {
  color: white;
}

/* visited link */
a:visited {
  color: white;
}

/* mouse over link */
a:hover {
  color: blue;
  background-color: lightgreen;
}

/* selected link */
a:active {
  color: blue;
}
</style>
<body>
    <?php
$sql = "SELECT * FROM `registration` ORDER BY username ASC";
$result=mysqli_query($con,$sql);
if ($result){
  if(mysqli_num_rows($result)>0){
    echo "<table>";
    echo "<tr><th>ID</th><th>Username</th><th>Email</th><th>Password</th><th>Operations</th>";
    while ($row=mysqli_fetch_assoc($result)){
    echo "<tr>";
    echo "<td>" .$row['id'] . "</td>";
    echo "<td>" .$row['username']. "</td>";
    echo "<td>" .$row['email']. "</td>";
    echo "<td>" .$row['password']. "</td>";
    echo '<td>  
    <button><a href="update.php">Update</a></button>
    <button><a href="delete.php?deleteid='.$row['id'].'">Delete</a></button>
     </td>
     </tr>';
    }
    //display the database
  
    echo "</table>";
}
else {
    echo "No data found.";
}
}
mysqli_close($con);
?>
<a href = "sort.php"> Sort</a>