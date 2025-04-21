<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random Number Generator</title>
</head>

<body>
    <form action="index.php" method="post">
        <h3>Generate Random Number</h3>

        <input type="number" name="min" placeholder="Min...">
        <input type="number" name="max" placeholder="Max...">

        <button type="submit">Generate</button>
    </form>
</body>

</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $min = !empty($_POST["min"]) ? $_POST["min"] : 0;
    $max = !empty($_POST["max"]) ? $_POST["max"] : 100;

    $random_number = random_int($min, $max);

    echo "Random Number: " . $random_number . "<br>";
}
?>