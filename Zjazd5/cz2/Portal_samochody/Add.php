<?php
$connect = new mysqli("localhost", "root", "", "mojaBaza");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $marka = $_POST['marka'];
    $model = $_POST['model'];
    $cena = $_POST['cena'];
    $rok = $_POST['rok'];
    $opis = $_POST['opis'];

    $query = "INSERT INTO samochody (marka, model, cena, rok, opis) VALUES ('$marka', '$model', '$cena', '$rok', '$opis')";
    if (mysqli_query($connect, $query)) {
        echo "Samochód dodany pomyślnie.";
    } else {
        echo "Błąd operacji";
    }
}
?>

<form action="Add.php" method="post">
    Marka: <input type="text" name="marka"><br>
    Model: <input type="text" name="model"><br>
    Cena: <input type="text" name="cena"><br>
    Rok: <input type="text" name="rok"><br>
    Opis: <textarea name="opis"></textarea><br>
    <input type="submit" value="Dodaj samochód">
</form>
<a href="index.php">Powrót do strony głównej</a>