<?php 
	session_start();
	
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

		<table>
			
		<?php
		
			for($row = 4; $row < 8; $row++) {
				echo "<tr><form action='addtocart.php' method='get'>";
					echo "<td>".$_SESSION['productList'][$row][0]."</td>";
					echo "<input type='hidden' name='id' value='".$row."'>";
					echo "<td> <input type='number' name='qty' min= '0' max='10' value='".$_SESSION['productList'][$row][1]."' ></td>";
					echo "<td> <button type='submit'>Add to cart</button></td>";
				echo "</form></tr>";
			}
		?>
		
		</table>
	</div>
</body>
</html>