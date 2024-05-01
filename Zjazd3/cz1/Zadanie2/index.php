<?php
$today = strtotime('today');
$end = strtotime('31 December this year');
$between = ceil(($today - $end) / (60 * 60 * 24));

echo "Do końca roku pozostało: $between";
?>
