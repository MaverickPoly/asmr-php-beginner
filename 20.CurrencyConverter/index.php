<!DOCTYPE html>
<html lang="en">
<head>
	<title>Simple Currency Converter</title>
</head>
<body>
	<form method="post">
		<h3>USD To RUB and vice versa</h3>

		<input type="number" name="value" placeholder="Value..." required><br>

		From:
		<select name="option" required>
			<option value="usd" selected>USD</option>
			<option value="rub">RUB</option>
		</select><br>

		<button type="submit" class="btn">Submit</button>
	</form>
</body>
</html>

<?php
	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		$value = $_POST["value"];
		$option = $_POST["option"];

		// USD -> RUB
		if ($option == "usd") {
			$res = round($value * 81, 2);
			echo "$value USD = $res RUB";
		} else { // RUB -> USD
			$res = round($value / 81, 2);
			echo "$value RUB = $res USD";
		}
	}
?>