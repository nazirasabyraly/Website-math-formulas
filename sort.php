<?php
include 'connect.php';

// Assuming you have a database connection and the data is fetched into $database variable
$sorted_database = $con; // Replace with your database retrieval logic

usort($sorted_database, function($a, $b) {
    return strcmp($a['username'], $b['username']);
});
?>

<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <?php
    foreach ($sorted_database as $entry) {
        echo 'Email: ' . $entry['username'] . ', Password: ' . $entry['password'] . '<br>';
    }
    ?>
</body>
</html>