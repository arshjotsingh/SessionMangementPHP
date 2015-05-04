<?php 
	session_start();
	if(isset($_POST['username']))
	{
		 $_SESSION['name'] = $_POST['username'];
	}

	if(empty($_SESSION['productList']))
	{
		$_SESSION['productList'] = array(
		array("Apple Iphone 6",0),
		array("Samsung Galaxy s6",0),
		array("Microsoft Lumia",0),
		array("Google Nexus",0),
		array("Dell Insipiron",0),
		array("Apple Macbook",0),
		array("HP Envy",0),
		array("Sony Vaio",0),
		array("Apple iPad Air",0),
		array("Lenovo Yoga tablet",0),
		array("Amazon Fire HD",0),
		array("Nokia N1",0)
		);
	}
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
				<li><a href="index.php">Logout</a></li>
			</ul>
		</nav>
	</header>
	<div id="wrapper">
		<h1><?php if(isset($_SESSION['name'])) { echo "Welcome ".$_SESSION['name']."!!!"; } else { echo "Welcome Guest!!!"; } ?></h1>
	</div>
	</body>
</html>
