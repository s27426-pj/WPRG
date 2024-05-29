<?php
session_start();
$cookie = "view";

if (isset($_COOKIE[$cookie])) {
    $views = $_COOKIE[$cookie];
} else {
    $views = 1;
}

if (!isset($_SESSION['visited'])) {
    $views++;
    $_SESSION['visited'] = true;
}

setcookie($cookie, $views, time() + 600);
if ($views <= 4) {
    echo "Nie odwiedziłeś tej strony wystarczająco wiele razy.";
} else {
    echo "Gratulacje! Odwiedziłeś tę stronę 4+ razy!";
}
?>
