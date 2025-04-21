<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palindrome Checker</title>
</head>

<body>
    <form action="index.php" method="post">
        <p>Enter a string to check weather it is palindrome or not...</p>
        <input type="text" name="string" id="string" placeholder="String..">
        <input type="submit" value="Check" name="submit">
    </form>
</body>

</html>

<?php
if (isset($_POST["submit"])) {
    $string = $_POST["string"];
    $rev = strrev($string);
    echo "<br>";
    if ($string == $rev) {
        echo "String " . $string . " is Palindrome!" . "<br>";
    } else {
        echo "String " . $string . " is NOT palindrome!" . "<br>";
    }
}
?>