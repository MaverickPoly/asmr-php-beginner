<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Length Calculator</title>
</head>

<body>
    <form action="<?php $_SERVER["PHP_SELF"] ?>" method="get">

        <h2>String Length Calculator</h2>

        <label for="string">Enter a string:</label>
        <input type="text" name="string" id="string" placeholder="String..." required>

        <button type="submit" class="btn">Calculate</button>
    </form>

</body>

</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $string = $_POST["string"];

    $length = strlen($string);
    echo "Length of string '", $string, "' is ", $length, "<br>";
}
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $string = $_GET["string"];

    $length = strlen($string);
    echo "Length of string '", $string, "' is ", $length, "<br>";
}
?>