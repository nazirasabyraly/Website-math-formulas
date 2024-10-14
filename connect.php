<?php
$con=mysqli_connect('localhost', 'root', '', 'formulas'); //connection with database
if(!$con){
    die(mysqli_error($con));
}
?>