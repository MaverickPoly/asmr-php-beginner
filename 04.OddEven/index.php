<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Odd Or Even Checker</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <form method="post" action="<?php $_SERVER["PHP_SELF"] ?>">
        <h3>Odd or Even Checker</h3>

        <p>Enter a number to check weather it is odd or even...</p>

        <input type="number" name="number" placeholder="Number...">
        <button type="submit" class="btn">Submit</button>


        <?php
        echo "<span>";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $number = $_POST["number"];
            if (!empty($number)) {
                $message = $number % 2 == 0 ? " is Even!" : " is Odd!";
                echo "Number " . $number . $message . "<br>";
            } else {
                echo "Please enter a number!" . "<br>";
            }
        }
        echo "</span>";
        ?>
    </form>

</body>

</html>