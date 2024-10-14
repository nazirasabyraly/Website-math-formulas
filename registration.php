<?php include 'server.php';
?>
<!DOCTYPE html>
<html>
<head>
<style>
body {
  background-color: green;
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
</style>

<title>Registartion</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<ul class = "nav">
  <li><a href="about.php">About</a></li>
  <li><a class="active" href="registration.php">Registration</a></li>
</ul>
  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="registration.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>" placeholder="Enter your username">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>" placeholder="Enter your email">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1" placeholder="Enter your password">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2" placeholder="Confirm your password">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		<a href="login.php">Sign in</a>
  	</p>
</body>
</html>
