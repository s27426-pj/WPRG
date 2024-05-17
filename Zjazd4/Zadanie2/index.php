<?php
$file = 'licznik.txt';
$open = fopen($file, 'c+');

if ($open) {
     $size = filesize($file);
        if ($size > 0) {
            $n = (int)fread($open, $size);
        } else {
            $n = 0;
        }

        $n++;
        fseek($open, 0);
        fwrite($open, $n);
        ftruncate($open, ftell($open));
        fclose($open);

    echo "Gratulacje jesteś: " . $n . " czytelnikiem tej witryny!";
} else {
    echo "Błąd otwarcia pliku.";
}
?>
