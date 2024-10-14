<!DOCTYPE html>
<html>
<head>
    <title> display</title>
</head>
<?php
include 'connect.php'
?>
<style>
  body{
    background-color: lightgreen;
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
  div {
  background-color: #90EE90;
  width: 800px;
  border: 8px green;
  padding: 50px;
  margin: auto;
}
</style>
<body>
<ul class = "nav">
  <li><a href="about.php">About</a></li>
  <li><a href="search.php">Search</a></li>
  <li><a href="change.php">Change your data</a></li>
</ul>
    <?php
    $sql = "SELECT * FROM `math formulas` ORDER BY topic_name ASC"; //selects data from database by alphabetic order of topics
    $result =mysqli_query($con,$sql);
if ($result){
  if(mysqli_num_rows($result)>0){
    echo "<table>";
    echo "<tr><th>ID</th><th>Grade_num</th><th>Topic_name</th>";
    while ($row=mysqli_fetch_assoc($result)){
    echo "<tr>";
    echo "<td><a href=\"displaysearch.php?data=" . $row['id'] . "\">" . $row['id'] . "</a></td>"; //displays chosen data information
    echo "<td>" .$row['grade_num']. "</td>";
    echo "<td>" .$row['topic_name']. "</td>";
    echo "</tr>";
    }

    echo "</table>";
}
else {
    echo "No data found.";
}
}
mysqli_close($con);
?>
</body>
</html>