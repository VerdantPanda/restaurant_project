<!DOCTYPE html>
<html>
<head>
	<title>Bell la Bell la - Menu</title>
	<link rel="stylesheet" type="text/css" href="/style/style.css">
         <script type="text/javascript" src="/js/slideshow.js" defer></script>
	
</head>
<body id="bd">

	<div id="container">
		<h1 id="bigTitle">Bell la Bell la</h1>
		<div id="top">
			
			<img src="/imgs/meatballs.jpg" id="slideshow">

			<nav>
				<a href="home.php" id="rd">Home</a>
				<a href="Menu.php" id="gr">Menu</a>
				<a href="hours.php" id="wh">Hours</a>
			</nav>

		</div>

		<div id="bottom">
			<h2>Our Menu</h2>
                        <?php

                        include ('mysql_connect.php');
                            $conn = db_connect();
                            $sql= "Select name, price from menu";
                               $rows=$conn->query($sql);
                            foreach($rows as $row){
                              echo"Name = " .$row["name"]."\t". "Price = " .row["price"] . "<br />";  
                            }
                            ?>
		</div>

		<div id="submitSection">
			<form name="myForm" action="projectForm.php" method="post" >
				<span>Item Name: <input type="text" name="Name"> </span>
				<span>Price: <input type="number" name="Price" min="0" max="999.99"> </span>
				<br>
				<br>
				<input type="submit" name="submitBtn">
			</form>
		</div>
		<div id="rights">No Rights Reserved</div>
	</div>

</body>
</html>
