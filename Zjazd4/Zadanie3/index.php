<?php
$links = 'links.txt';
$open = fopen($links, 'r');

    if ($open) {
        echo "<ul>\n";
        while (($line = fgets($open)) !== false) {
            $line = trim($line);
            $part = explode(' ', $line, 2);
            if (count($part) == 2) {
                $adress = $part[0];
                $data = $part[1];
                echo "<li><a href=\"$adress\">$data</a></li>\n";
            }
        }

        echo "</ul>\n";
        fclose($open);

    } else {
    echo "Plik nie istnieje.";
    }
?>
