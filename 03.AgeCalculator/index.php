<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Age Calculator</title>
</head>

<body>
    <form method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
        <h2>Simple Age Calculator App!</h2>
        <p>Enter the year you were born and we will tell you your age...</p>

        <label for="year">Year Born</label>
        <input type="number" name="year" placeholder="Year..." required>

        <button type="submit" class="btn">Submit</button>
    </form>

</body>

</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $year = $_POST["year"];

    if ($year <= 1900) {
        echo "Invalid year!" . "<br>";
    } else {
        $age = date("Y") - $year;
        echo "You are " . $age . " years old!" . "<br>";
    }
}

/*
foreach ($_SERVER as $key => $value) {
    echo $key . " => " . $value . "<br>";
}
*/
?>