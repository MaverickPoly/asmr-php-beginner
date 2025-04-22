<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Multiplication Table Generator</title>
</head>
<body>
	<form method="post">
		<h3>Enter a size of multiplication table:</h3>

		<input name="number" type="number" placeholder="Number..">
		<button type="submit" class="btn">Enter</button>
	</form>
</body>
</html>


<?php
	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		$number = $_POST["number"];

		for ($i = 1; $i <= $number; $i++) {
			for($j = 1; $j <= $number; $j++) {
				echo $j * $i . " ";
			}
			echo "<br>";
		}
	}
?>
