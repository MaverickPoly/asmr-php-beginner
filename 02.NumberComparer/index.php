<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Number Comparer</title>
</head>

<body>
    <form method="post">
        <h2>Number Comparer</h2>
        <p>Enter two numbers to find the largest...</p>

        <!-- Number 1 -->
        <input type="number" name="number1" placeholder="Number 1" required>
        <input type="number" name="number2" placeholder="Number 2" required>

        <input type="submit" name="submit" value="Submit">
    </form>
</body>

</html>

<?php
if (isset($_POST["submit"])) {
    $number1 = $_POST["number1"];
    $number2 = $_POST["number2"];

    echo "Number 1: " . $number1 . "<br>";
    echo "Number 2: " . $number2 . "<br>";

    $largest = $number1 > $number2 ? $number1 : $number2;
    echo "Largest Number: " . $largest . "<br>";
    // This is C-Style Comment
    # This is Python Style Comment
    /*
        Multiline comment
    */
}
?>