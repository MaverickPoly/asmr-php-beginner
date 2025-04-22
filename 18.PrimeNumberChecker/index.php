<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Prime Number Checker</title>
</head>
<body>
	<form method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
		<h3>Check if a number is Prime or not!</h3>

		<input type="number" name="number" placeholder="Number..." >

		<button type="submit">Enter</button>
	</form>
</body>
</html>

<?php
function isPrime($number) {
	if ($number <= 1) {
		return false;
	}
	if ($number <= 3) {
		return true;
	}
	if ($number % 2 == 0 || $number % 3 == 0) {
		return false;
	}
	$i = 5;
	while ($number > $i * $i) {
		if ($number % $i == 0 || $number % ($i + 2) == 0) {
			return false;
		}
		$i +=6;
	}
	return true;

}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
	$number = $_POST["number"];

	if (isPrime($number)) {
		echo "Number " . $number . " is prime!";
	} else {
		echo "Number " . $number . " is NOT prime!";
	}
}
?>