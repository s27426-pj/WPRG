<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<?php
function isPrime($n) {
    if ($n <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i === 0) {
            return false;
        }
    }
    return true;
}

function generate($n) {
    $Prime = "";
    $a = 2;
    for ($i = 0; $i < $n ; $i++){
        if (isPrime($a)) {
            $Prime .= $a." ";
        }
        $a++;
    }
    echo $Prime;
}

generate(444);

?>
</body>
</html>
