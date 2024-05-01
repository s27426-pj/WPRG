<?php
function w($date) {
    $week = array("niedziela", "poniedziałek", "wtorek", "środa", "czwartek", "piątek", "sobota");
    $day = date('w', strtotime($date));
    return $week[$day];
}

$date = "18 Mar 2018";
$day = w($date);
echo "$date to $day";
?>
