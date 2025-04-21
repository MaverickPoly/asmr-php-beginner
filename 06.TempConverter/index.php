<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature Converter</title>
</head>

<body>
    <form method="post" action="<?php $_SERVER["PHP_SELF"] ?>">
        <h2>Temperature Converter</h2>

        <p>Convert temperature between Fahrenheit and Celsius!</p>

        <input type="number" name="number" placeholder="Temperature...">

        <label for="from">From:</label>
        <select name="from" id="from">
            <option value="fah">Fahrenheit</option>
            <option value="cel">Celsius</option>
        </select>

        <button type="submit">Convert</button>

    </form>

</body>

</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = $_POST["number"];
    $from = $_POST["from"];
    $result = null;

    if ($from == "fah") {
        $result = round(($number - 32) * 5 / 9, 2);
        echo $number . "°F = " . $result . "°C" . "<br>";
    } else {
        $result = round($number * 9 / 5 + 32, 2);
        echo $number . "°C = " . $result . "°F" . "<br>";
    }
}
?>