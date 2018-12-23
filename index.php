<?php

include 'config.php' ;


if(isset($_POST['submit'])) {

	$username = mysqli_real_escape_string($con, $_POST['username']);
	$email = mysqli_real_escape_string($con, $_POST['email']);
	$password = mysqli_real_escape_string($con, $_POST['password']);

}

if(!empty($username) && !empty($email) && !empty($password)){

	$query = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')" ;

	mysqli_query($con, $query);   /*$cony-y apahwvwum e kapy bazayi het */

	header('location:login.php'); /*headery naxoed funkciayi ashxteluc heto tanum e nshvac locationy*/

}



?>







<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>

<div class = "container mx-auto text-center" style = "width:40%; margin-top:10%;">
	
<h3>Register</h3> <br>
<form action = "index.php" method = "post">
	<input class = "form-control" type="text" name = "username" placeholder="username"> <br>

	<input class = "form-control" type="email" name = "email" placeholder="email"> <br>

	<input class = "form-control" type="password" name = "password" placeholder="password"> <br>

	<input type="submit" name="submit" class = "btn btn-primary" value="Sign up" style = "width:100%"> 
</form>




</div>




 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html>