<!DOCTYPE html>
<html>
<head>
    <title>PHP Calculator</title>
</head>
<body>

<h2>Simple Calculator</h2>

<form method="POST">
    <input type="number" name="num1" required>

    <select name="operation">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>

    <input type="number" name="num2" required>
    <br><br>

    <input type="submit" value="Calculate">
</form>

<?php
$result = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $op   = $_POST["operation"];

    if ($op == "+") {
        $result = $num1 + $num2;
    } elseif ($op == "-") {
        $result = $num1 - $num2;
    } elseif ($op == "*") {
        $result = $num1 * $num2;
    } elseif ($op == "/") {
        if ($num2 == 0) {
            $result = "Error: division by zero";
        } else {
            $result = $num1 / $num2;
        }
    }
}
?>

<h3>Result: <?php echo $result; ?></h3>

</body>
</html>