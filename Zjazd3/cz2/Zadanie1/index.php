<?php
function Scan($path) {
    $files = scandir($path);
    $size = 0;
    foreach ($files as $file) {
        if ($file != '.' && $file != '..') {
            $Path = $path . '/' . $file;
            if (is_dir($Path)) {
                $size += Scan($Path);
            } else {
                $size += filesize($Path);
            }
        }
    }
    return $size;
}

$dir = "Katalog_testowy";
$Size = Scan($dir);
echo "Rozmiar całego katalogu: $Size bajtów";
?>
