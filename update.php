<!DOCTYPE html>
<html>
<head>
<style>
body {
  background-color: lightgreen;
  color: white;
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

label {
    font-size: 20px;
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
input[type=submit]{
  background-color: green;
  border: none;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
}
</style>
<title>Update</title>
</head>
<body>
<?php
$conn = mysqli_connect('localhost', 'root', '', 'formulas'); //connection with database

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ids = $_POST["id"]; // IDs of the records to update
    $names = $_POST["username"]; // Updated username values
    $emails = $_POST["email"]; // Updated email values
    $passwords = $_POST["password"]; // Updated password values

    // Loop through the submitted data and update the records in the database
    for ($i = 0; $i < count($ids); $i++) {
        $id = $ids[$i];
        $name = $names[$i];
        $email = $emails[$i];
        $password = $passwords[$i];

        $sql = "UPDATE registration 
        SET username = '$name', email = '$email', password = '$password'
        WHERE id = $id";
        
        if (mysqli_query($conn, $sql)) {
            echo "Record updated successfully.";
        } else {
            echo "Error updating record: " . mysqli_error($conn);
        }
    }
}

// Fetch existing data from the database
$sql = "SELECT * FROM registration";
$result = mysqli_query($conn, $sql);

// Display the table data and input boxes for editing
if (mysqli_num_rows($result) > 0) {
    echo "<form method='POST' action='update.php'>"; 
    echo "<table>";
    echo "<tr><th>ID</th><th>Username</th><th>Email</th><th>Password</th></tr>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td><input type='text' name='username[]' value='" . $row['username'] . "'></td>";
        echo "<td><input type='email' name='email[]' value='" . $row['email'] . "'></td>";
        echo "<td><input type='password' name='password[]' value='" . $row['password'] . "'></td>";
        echo "<td><input type='hidden' name='id[]' value='" . $row['id'] . "'></td>";
        echo "</tr>";
    }
  }
    echo "</table>";
    echo "<input type='submit' value= 'Update'/>";