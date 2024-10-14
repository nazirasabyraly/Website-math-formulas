<?php
include 'connect.php'
?>
<!DOCTYPE html>
<html>
<head>
    <title>Display Search data</title>

</head>
<body>
    <?php
$data=$_GET['data'];
//echo $data;
$sql="Select *from `math formulas` where id=$data"; //selects from database with chosen id, shows only information regarding to that id
$result=mysqli_query($con, $sql);
if($result){
    $row=mysqli_fetch_assoc($result);
}
?>
<h1> <?php echo $row['topic_name'] ?></h1>
<img src="images/<?php echo $_GET['data']?>.jpg" alt="disc"> <!--shows the image ragerding to the data id-->
</body>
</html>