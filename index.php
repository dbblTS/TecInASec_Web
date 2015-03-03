<!DOCTYPE html>
<html>
<head>
    <title>TecInASec</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" type="text/css" href="style/style.css">
</head>
<body>
	<header>
		<a href="about.php">About Us</a>
		<a href="help.php">Help</a>
	</header>
	<div class="main_form_container">
		<div class="form">
			<form action="search.php">
				<input type="text" class="form_search">
				<label>Search</label>
				<input type="text" pattern="[0-9]*" name="minPrice" class="form_price">
				<input type="text" pattern="[0-9]*" name="maxPrice" class="form_price">
				<label>Price</label>
				<a href="advanced.php" class="form_advanced">Advanced</a>
				<button type="submit" class="form_submit">></button>
			</form>
		</div>
	</div>
	<footer>
		<ul>
			<li>Sean</li>
			<li>Charlie</li>
			<li>Laurynas</li>
			<li>Valentinas</li>
			<li>Dale</li>
		</ul>
		<a href="about.php">TecInASec</a>
	</footer>
</body>
</html>