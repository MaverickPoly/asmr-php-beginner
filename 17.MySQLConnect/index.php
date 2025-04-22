<?php
include("connectDB.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>MySQL Connect</title>
</head>
<body>
	<h1>MySQL Users Project</h1>

	<form method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
		<h3>Create User</h3>
		<input type="text" name="username" placeholder="Username..." >
		<input type="email" name="email" placeholder="Email..." >
		<input type="password" name="password" placeholder="Password..." >
		<button type="submit" class="btn">Create</button>
	</form>

	<h3>Database content:</h3>
	<?php
		$sql = "SELECT * FROM user";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			while($row = mysqli_fetch_assoc($result)) {
				echo "Username: " . $row["username"] . "<br>";
				echo "Email: " . $row["email"]  . "<br>";
				echo "Password: " . $row["password"] . "<br><br>";
			}
		}
	?>
</body>
</html>

<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
	$username = $_POST["username"];
	$email = $_POST["email"];
	$password = $_POST["password"];

	$sql = "INSERT INTO user (username, email, password)
			VALUES ('$username', '$email', '$password')";
	mysqli_query($conn, $sql);
}
?>

<?php
	// Insert Data
	/*
	$sql = "INSERT INTO user (username, email, password)
			VALUES ('Test', 'test@gmail.com', '123456')";

	mysqli_query($conn, $sql);
	*/

	// Fetch Data
	/*
	$sql = "SELECT * FROM user";
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
		while($row = mysqli_fetch_assoc($result)) {
			echo $row["username"] . "<br>";
			echo $row["email"] . "<br>";
			echo $row["password"] . "<br>";
		};
	} else {
		echo "No data found!" . "<br>";
	}
	*/

	mysqli_close($conn);
?>
