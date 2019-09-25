<?php 
	$username = $_POST['username'];
	$password = $_POST['password'];

	$username = stripcslashes($username);
	$password = stripcslashes($password);

	$conn = mysqli_connect('localhost', 'root', '') or die('No connection');
	mysqli_select_db($conn, 'berik') or die('DB will not open')

	$query = sprintf("SELECT * FROM users WHERE user='%s' AND password='%s'",
    	mysql_real_escape_string($user),
       	mysql_real_escape_string($password));

	$result = mysqli_query($conn, $query)or die('Invalid query')

	$row = mysqli_fetch_array($result);

	if ($row['username'] == $username && $row['password'] == $password) {
		echo "Success";
	}else{
		echo "try again";
	}

 ?>
