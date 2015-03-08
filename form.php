<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php include 'header.php'; ?>
	<div class="main_form_container2">
		<form action="search.php">
            <label>Search</label>
			<input type="text" name="searchString" class="form_search">
            <label>Price</label>
            <input type="text" pattern="[0-9]*" name="minPrice" class="form_price">
            <input type="text" pattern="[0-9]*" name="maxPrice" class="form_price">
            <button onclick="showAdvanced()">A</button>
            <button type="submit" class="form_submit">></button>
		</form>
	</div>
</body>
</html>