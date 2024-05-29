<?php
$cookie = "views";

if(isset($_COOKIE[$cookie])) {
    $views = $_COOKIE[$cookie] + 1;
} else {
    $views = 1;
}

setcookie($cookie, $views, time() + 600);
if($views <= 4) {
echo "Nie odwiedziłeś tej strony wystarczająco wiele razy.";
}
else{
    echo "Gratulacje! Odwiedziłeś tę stronę 4+ razy!";
}
?>
