<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
</head>

<body>
    <form method="post" action="<?php $_SERVER["PHP_SELF"] ?>">
        <h4>Simple Calculator</h4>

        <label for="num1">Number 1:</label>
        <input type="text" name="num1" id="num1" placeholder="Number 1..." required>

        <br>
        <label for="num2">Number 2:</label>
        <input type="text" name="num2" id="num2" placeholder="Number 2..." required>

        <br>
        <label for="operation">Operation</label>
        <select name="operation" id="operation" required>
            <option value="add" selected>+</option>
            <option value="subtract">-</option>
            <option value="multiply">*</option>
            <option value="divide">/</option>
        </select>

        <br>
        <button type="submit" class="btn">Calculate</button>
    </form>

</body>

</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $operation = $_POST["operation"];
    $result = null;

    if ($operation == "add") {
        $result = $num1 + $num2;
        echo $num1 . " + " . $num2 . " = " . $result . "<br>";
    } elseif ($operation == "subtract") {
        $result = $num1 - $num2;
        echo $num1 . " - " . $num2 . " = " . $result . "<br>";
    } elseif ($operation == "multiply") {
        $result = $num1 * $num2;
        echo $num1 . " * " . $num2 . " = " . $result . "<br>";
    } elseif ($operation == "divide") {
        $result = $num1 / $num2;
        echo $num1 . " / " . $num2 . " = " . $result . "<br>";
    } else {
    }
}
?>