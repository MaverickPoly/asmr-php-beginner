<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Static Login System</title>
</head>

<body>
    <form action="<?php $_SERVER["PHP_SELF"] ?>" method="post">
        <h3>Login</h3>
        <p>Login system...</p>

        <input type="text" name="username" placeholder="Username...">
        <input type="password" name="password" placeholder="Password...">

        <button type="submit" class="btn">Login</button>
    </form>
</body>

</html>

<?php
$target_username = "maverick";
$target_password = "lightmoon";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if (empty($username)) {
        echo "Username not provided!";
    } elseif (empty($password)) {
        echo "Password not provided!";
    } else {
        if ($username != $target_username) {
            echo "Invalid Username!";
        } elseif ($password != $target_password) {
            echo "Invalid Password!";
        } else {
            echo "Logged in successfully!";
        }
    }
}

?>