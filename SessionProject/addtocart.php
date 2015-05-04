<?php
	session_start();
	$productId = $_GET['id'];
	$productQuantity = $_GET['qty'];
	

	$_SESSION['productList'][$productId][1] = $productQuantity ;
	
?>

<html>
<head>
	<title></title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<header>
		<nav>
			<ul>
				<li id="heading">General Electronics Store</li>
				<li><a href="Home.php">Home</a></li>
				<li><a href="SmartPhones.php">Smartphones</a></li>
				<li><a href="Notebooks.php">Notebooks</a></li>
				<li><a href="Tablets.php">Tablets</a></li>
				<li><a href="logout.php">Logout</a></li>

			</ul>

		</nav>
	</header>
	<div id="username">
		<p>
			<?php 
				if(isset($_SESSION['name'])) { 
					echo "You are logged in as <a href=''>".$_SESSION['name']."</a>"; 
				} 
				else { 
					echo "Welcome Guest!!!"; 
				} ?>
		</p>
	</div>
	<div id="wrapper">
		<h2>Your item has been successfully added</h2>
		<a href= "" onclick="window.history.go(-1)" style="font-size:1em;color:red;">Go back to previous page </a>
	</div>
</body>
</html>
