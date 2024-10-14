<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html>
<head>
<style>
  body {
    background-color: #90EE90;
    color: dark;
  }
div {
  background-color: #90EE90;
  width: 800px;
  border: 8px green;
  padding: 50px;
  margin: auto;
}
input[type=text]{
 width: 250px;
 box-sizing: border-box;
 border: 10px #ccc; 
 border-radius: 4px;
 font-size: 16px;
 background-color: white;
 background-position: 10px 10px; 
 background-repeat: no-repeat;
 padding: 12px 20px 12px 40px;
 transition: width 0.4s ease-in-out;
}

input[type=text]{
 transition: width 0.4s ease-in-out;
}
input[type=text]:focus{
 width: 50%;
}
input[type=submit]{
 width: 40%;
 background-color: green;
 color:  white;
 padding: 14px 20px;
 margin: 8px 0;
 border: none;
 border-radius: 4px;
 cursor: pointer;
}
label{
font-size: 40px;
}
a {
background-color: green;
  color: white;
  padding: 14px 25px;
  margin: 8px 0;
  border: none;
  border-radius: 6px;
  cursor: pointer;
  display: inline-block;
}
.nav {
  background-color: green; 
  list-style-type: none;
  text-align: center;
  margin: 0;
  padding: 0;
}

.nav li {
  display: inline-block;
  font-size: 20px;
  padding: 20px;
}
li a:hover {
  background-color: lightgreen;
}
.active {
  background-color: lightgreen;
}
button {
  background-color: green; /* Green */
  border: none;
  color: white;
  padding: 15px 50px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 20px;
}
h2 {
  color:red;
  font-size: 30px;
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
</style>
<body>
<ul class = "nav">
  <li><a href="about.php">About</a></li>
  <li><a class="active" href="search.php">Search</a></li>
</ul> 
//the pointer

<div class = "container my-5"> 
        <label> Search for the formula </label>
<form method = "post">
    <input type="text" placeholder="Search formula" name ="search">
    <button name="submit"> Search </button>
</form>
<div class="container my-5">
    <table class="table">
        <?php  
if(isset($_POST['submit'])){
  $search=$_POST['search'];

  $sql="Select * from `math formulas` where id like 
  '%$search%' or topic_name like '%$search%' or grade_num like '%$search%' ";//selects the searched item from database
  $result=mysqli_query($con,$sql);
  if($result){
  if(mysqli_num_rows($result)>0){
    echo '<thead>
    <tr>
    <th>ID</th>
    <th>Grade</th>
    <th>Topic Name</th>
    </tr>
    </thead>
    ';
    while ($row=mysqli_fetch_assoc($result)){
    echo '<tbody>
    <tr>
    <td><a href= "displaysearch.php?data='.$row['id'].'">'.$row['id'].'</td>
    <td>'.$row['grade_num'].'</td>
    <td>'.$row['topic_name'].'</td>
    </tr>
    </tbody>';
    } //any item in database that contains that what is written in search will be displayed
  }  else{
    echo '<h2> Data not found </h2>';
  }
  }
}
?>
    </table>
</div>
</div>
