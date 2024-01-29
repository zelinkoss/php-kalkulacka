<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fufi smrdi kokot</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<?php
$result = '';
if (isset($_POST['calculate'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operator = $_POST['operator'];

    switch ($operator) {
        case 'add':
            $result = $num1 + $num2;
            break;
        case 'subtract':
            $result = $num1 - $num2;
            break;
        case 'multiply':
            $result = $num1 * $num2;
            break;
        case 'divide':
            if ($num2 != 0) {
                $result = $num1 / $num2;
            } else {
                $result = 'Cannot divide by zero';
            }
            break;
        default:
            $result = 'Invalid operator';
    }
}
?>

<h2>fufi je v ofsajdu</h2>
<form method="post" action="">
    <label for="num1">Number 1:</label>
    <input type="number" name="num1" required>

    <label for="operator">Operator:</label>
    <select name="operator" required>
        <option value="add">+</option>
        <option value="subtract">-</option>
        <option value="multiply">*</option>
        <option value="divide">/</option>
    </select>

    <label for="num2">Number 2:</label>
    <input type="number" name="num2" required>

    <input type="submit" name="calculate" value="Calculate">
</form>

<?php
if ($result !== '') {
    echo '<h3>Result: ' . $result . '</h3>';
}
?>

</body>
</html>
