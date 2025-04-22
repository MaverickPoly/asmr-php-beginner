<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Word Counter</title>
</head>

<body>
    <form action="<?php $_SERVER["PHP_SELF"] ?>" method="post">
        <p>Enter a text to count number of words in it...</p>
        <textarea name="text" id="text" cols="30"></textarea>
        <button type="submit" class="btn">Submit</button>
    </form>
</body>

</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $text = $_POST["text"]; # -> assotiative array

    echo "Text:<br>" . $text . "<br><br>";

    $res = count(explode(" ", $text));
    echo "Length: " . $res;
}
?>