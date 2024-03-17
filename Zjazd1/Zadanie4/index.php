<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<?php
$text = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";

$T = explode(" ", $text);

$assocT = [];

foreach ($T as $key => $value) {
    if ($key % 2 != 0 && isset($T[$key + 1])) {
        $assocT[$value] = $T[$key + 1];
    }
}

foreach ($assocT as $key => $value) {
    echo $key . " " . $value . "<br>";
}
?>
</body>
</html>