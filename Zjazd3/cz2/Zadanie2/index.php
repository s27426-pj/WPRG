<?php
function Del($path) {
    $files = scandir($path);
    foreach ($files as $file) {
        if ($file != '.' && $file != '..') {
            $Path = $path . '/' . $file;
            if (is_dir($Path)) {
                Del($Path);
            } else {
                if (!unlink($Path)) {
                    echo "Błąd podczas usuwania pliku $Path.<br>";
                }
            }
        }
    }
    if (!rmdir($path)) {
        echo "Błąd podczas usuwania katalogu $path.<br>";
    } else {
        echo "Katalog $path został usunięty.<br>";
    }
}

$dir = "Katalog_testowy";
Del($dir);
?>
