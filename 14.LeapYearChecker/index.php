<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leap Year Checker</title>
</head>

<body>
    <form action="<?php $_SERVER["PHP_SELF"] ?>" method="post">
        <h3>Leap Year Checker</h3>
        <p>A simple program to check if the given year is Leap or not.</p>

        <input type="number" name="year" placeholder="Year...">

        <button type="submit" class="btn">Check</button>
    </form>

</body>

</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $year = $_POST["year"];

    if (empty($year)) {
        echo "Year not provided!";
    } else {
        if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
            echo "Leap Year!";
        } else {
            echo "Not Leap Year!";
        }
    }
}
?>