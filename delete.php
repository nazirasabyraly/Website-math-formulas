
<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <?php
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
    
    $sql = "DELETE FROM `registration` where id=$id"; //deletes from database data which's id was chosen
    $result=mysqli_query($con, $sql);
    if($result){
        // echo "great";
        header('location:change.php'); //it comes back to the change page right after deleting
    }else{
        die(mysqli_error($con));
    }
}
?>
</body>
</html>