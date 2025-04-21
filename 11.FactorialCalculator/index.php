<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Factorial Calculator</title>
</head>

<body>
    <form action="<?php $_SERVER["PHP_SELF"] ?>" method="post">
        <h3>Factorial Calculator</h3>
        <p>Enter a number to calculate factorial...</p>

        <input type="number" name="number" placeholder="Number..." required>

        <button type="submit">Calculate</button>
    </form>

</body>

</html>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = $_POST["number"];

    $res = 1;
    for ($i = 1; $i <= $number; $i++) {
        $res *= $i;
    }

    echo $number . "! = " . $res;
}
?>