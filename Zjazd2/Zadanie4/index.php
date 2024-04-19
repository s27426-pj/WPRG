<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
<form method="post">
    <label for="n">Wprowadź liczbę:</label>
    <input type="n" name="n" id="n" required>
    <input type="submit" value="Sprawdź">
</form>
<?php
function isPrime($n) {
    if ($n <= 1) {
        return false;
    }
    if ($n <= 3) {
        return true;
    }
    if ($n % 2 == 0 || $n % 3 == 0) {
        return false;
    }
    $i = 5;
    while ($i * $i <= $n) {
        if ($n % $i == 0 || $n % ($i + 2) == 0) {
            return false;
        }
        $i += 6;
    }
    return true;
}
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['n'])) {
    $n = intval($_POST['n']);
    if ($n <= 0) {
        echo "Podana wartość nie jest liczbą całkowitą dodatnią.";
    } else {
        if (isPrime($n)) {
            echo "<br>$n jest liczbą pierwszą.";
        } else {
            echo "<br>$n nie jest liczbą pierwszą.";
        }
    }
}
?>
</body>
</html>
