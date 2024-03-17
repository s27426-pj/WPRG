<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<?php
function fibo($n) {
    $T = [];
    $T[0] = 0;
    $T[1] = 1;

    for ($i = 2; $i <= $n; $i++) {
        $T[$i] = $T[$i - 1] + $T[$i - 2];
    }
    return $T;
}

function printT($T) {
    $i = 1;
    foreach ($T as $a) {
        if ($a % 2 != 0) {
            echo $i++ . ": " . $a . "<br>";
        }
    }
}


$Table = fibo(444);
printT($Table);
?>
</body>
</html>
