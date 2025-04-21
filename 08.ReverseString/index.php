<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reverse A String</title>
</head>

<body>
    <form action="<?php $_SERVER["PHP_SELF"] ?>" method="post">
        <h3>Simple String Reverse Program</h3>
        <p>Enter a string and the app will reverse it...</p>

        <input type="text" name="string" id="string" placeholder="...">

        <input type="submit" value="Reverse" name="reverse">
    </form>

</body>

</html>


<?php
if (isset($_POST["reverse"])) {
    $string = $_POST["string"];
    $revered = strrev($string);
    echo "Reversed: " . $revered . "<br>";
}
?>