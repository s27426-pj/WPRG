<?php
$allowed = 'allowed_ips.txt';
function getAllowedIps($file) {
    $ip = [];
    if (file_exists($file)) {
        $open = fopen($file, 'r');
        if ($open) {
            while (($line = fgets($open)) !== false) {
                $ip[] = trim($line);
            }
            fclose($open);
        }
    }
    return $ip;
}

$userIp = $_SERVER['REMOTE_ADDR'];
if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $userIp = $_SERVER['HTTP_X_FORWARDED_FOR'];
}

$ip = getAllowedIps($allowed);
if (in_array($userIp, $ip)) {
    echo "<h1 style='color: DarkGreen;'>Specjalna treść.</h1>";
} else {
    echo "<p style='color: Red;'>Brak dostępu.</p>";
}
?>
