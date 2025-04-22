<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sum Of Digits</title>
</head>

<body>
    <form action="<?php $_SERVER["PHP_SELF"] ?>" method="post">
        <p>Enter a number and the app will calculate the sum of its digits!</p>

        <input type="number" name="number" placeholder="Number...">
        <button type="submit" class="btn">Click</button>
    </form>

</body>

</html>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST["number"];

        $num_str = strval($number);
        $total = 0;

        foreach (str_split($num_str) as $el) {
            $total += intval($el);
        }

        echo "Sum of digits (" . $number . "): " . $total;
    }
?>