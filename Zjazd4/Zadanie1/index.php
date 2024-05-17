<?php
$input = 'input.txt';
$output = 'output.txt';
$i = fopen($input, 'r');
$o = fopen($output, 'w');

if ($i && $o) {
    $lines = [];
    while (($line = fgets($i)) !== false) {
        $lines[] = $line;
    }

    $revArray = array_reverse($lines);
    foreach ($revArray as $rLine) {
        fwrite($o, $rLine);
        if (substr($rLine, -1) !== "\n") {
            fwrite($o, "\n");
        }
    }

    fclose($i);
    fclose($o);
    echo "Kolejność wierszy odwrócona";
}
?>
