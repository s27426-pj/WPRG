<?php

$w = array("niedziela", "poniedziałek", "wtorek", "środa","czwartek", "piątek", "sobota");
$m = array("styczeń","luty","marzec","kwiecień","maj","czerwiec","lipiec","sierpień","wrzesień","październik","listopad","grudzień");

$week = $w[date('w')];
$day = date('d');
$Month = $m[(int)date('m') - 1];
$year = date('Y');
$time = date('h:i:s A');
$GMT = date('O');

echo "Dzisiaj jest $week, $day $Month $year, $time, $GMT GMT.";
?>
