<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
<form method="post">
    <label for="n1">Liczba 1:</label>
    <input type="text" name="n1" id="n1" value="<?php echo isset($_POST['n1']) ? $_POST['n1'] : ''; ?>"><br><br>
    <label for="n2">Liczba 2:</label>
    <input type="text" name="n2" id="n2" value="<?php echo isset($_POST['n2']) ? $_POST['n2'] : ''; ?>"><br><br>
    <label for="operation">Działanie:</label>
    <select name="operation" id="operation">
        <option value="add" <?php echo isset($_POST['operation']) && $_POST['operation'] == 'add' ? 'selected' : ''; ?>>Dodawanie</option>
        <option value="subtract" <?php echo isset($_POST['operation']) && $_POST['operation'] == 'subtract' ? 'selected' : ''; ?>>Odejmowanie</option>
        <option value="multiply" <?php echo isset($_POST['operation']) && $_POST['operation'] == 'multiply' ? 'selected' : ''; ?>>Mnożenie</option>
        <option value="divide" <?php echo isset($_POST['operation']) && $_POST['operation'] == 'divide' ? 'selected' : ''; ?>>Dzielenie</option>
    </select><br><br>
    <input type="submit" value="Oblicz">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $operation = $_POST['operation'];
    if (!is_numeric($n1) || !is_numeric($n2)) {
        echo "Wprowadź liczby.";
        exit();
    }
    switch ($operation) {
        case 'add':
            $result = $n1 + $n2;
            echo "Wynik dodawania: $result";
            break;
        case 'subtract':
            $result = $n1 - $n2;
            echo "Wynik odejmowania: $result";
            break;
        case 'multiply':
            $result = $n1 * $n2;
            echo "Wynik mnożenia: $result";
            break;
        case 'divide':
            if ($n2 == 0) {
                echo "Nie można dzielić przez zero.";
                exit();
            }
            $result = $n1 / $n2;
            echo "Wynik dzielenia: $result";
            break;
        default:
            echo "Nieprawidłowe działanie.";
    }
}
?>
</body>
</html>
