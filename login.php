<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
<style>
body {
  background-color: #90EE90;
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
<link rel="stylesheet" type="text/css" href="style.css">
<title>Math formulas</title>

</head>
<body>

<ul class = "nav">
  <li><a href="about.php">About</a></li>
  <li><a href="registration.php">Registration</a></li>
</ul>
<div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="display.php"> <!--goes to display page-->
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" placeholder="Enter your username">
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password" placeholder="Enter your password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		<a href="registration.php">Signing up</a>
  	</p>
  </form>
</div>
</body>
</html>