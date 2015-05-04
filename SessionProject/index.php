<?php
session_start();

if(isset($_SESSION['name'])) {
	
	// remove all session variables
	session_unset(); 

	// destroy the session 
	session_destroy(); 

	
}



?>

<!doctype html>
<html>
	<head>	
		<title></title>
		
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<header>
			<nav style="text-align:center">
				<ul>
					<li id="heading">General Electronics Store</li>
				</ul>
			</nav>
		</header>
		<form action="Home.php" method="post">
			<table id="login-table">
				<tr>
					<td>User Name</td>
					<td><input type="text" name="username" required>	</td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password" required=""></td>
				</tr>
				<tr>
					<td colspan="2" style="text-align:center"><button type="reset">Reset</button>
					<button type="submit">Submit</button></td>
				</tr>
			</table>
		</form>
	</body>
</html>
