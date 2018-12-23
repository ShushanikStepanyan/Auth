<?php

	session_start();

	include 'config.php';

	if(isset($_POST['submit'])) {

	$username = mysqli_real_escape_string($con, $_POST['userneme']);
	$password = mysqli_real_escape_string($con, $_POST['password']);

    if(!empty($username) && !empty($password)) {

    $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";

    $results = mysqli_query($con, $query);

}
 	if (isset($results) && mysqli_num_rows($results) == 1) {

 	$_SESSION['username'] = $username;
          
    header('location: home.php');

 } else {
        
    if(!empty($username) || !empty($password)) {

    $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";

    $results = mysqli_query($con, $query);

}
   if (isset($results) && mysqli_num_rows($results) == 0){
  
    echo "<div class='alert alert-danger'> Incorrect login/pass </div>" ;
	exit ;
} 


}

    }
?>






<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>

<div class = "container mx-auto text-center" style = "width:40%; margin-top:10%;">
	
<h3>Login</h3> <br>
<form action = "login.php" method = "post">
	<input class = "form-control" type="text" name = "username" placeholder="username"> <br>


	<input class = "form-control" type="text" name = "password" placeholder="password"> <br>

	<input type="submit" name="submit" class = "btn btn-primary" value="Sign in" style = "width:100%"> 
</form>



</div>

    


 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html>







