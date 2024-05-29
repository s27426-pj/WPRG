<?php
$connect = new mysqli("localhost", "root", "", "mojaBaza");


    $id = $_GET['id'];
    $query = "SELECT * FROM samochody WHERE id = $id";
    $result = mysqli_query($connect, $query);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $marka = $row['marka'];
        $model = $row['model'];
        $cena = $row['cena'];
        $rok = $row['rok'];
        $opis = $row['opis'];
    } else {
        echo "Samochód o podanym ID nie został znaleziony.";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<table>
    <tr>
        <td>Marka:</td>
        <td><?php echo $marka; ?></td>
    </tr>
    <tr>
        <td>Model:</td>
        <td><?php echo $model; ?></td>
    </tr>
    <tr>
        <td>Cena:</td>
        <td><?php echo $cena; ?></td>
    </tr>
    <tr>
        <td>Rok produkcji:</td>
        <td><?php echo $rok; ?></td>
    </tr>
    <tr>
        <td>Opis:</td>
        <td><?php echo $opis; ?></td>
    </tr>
</table>
<a href="index.php">Powrót do strony głównej</a>
</body>
</html>
