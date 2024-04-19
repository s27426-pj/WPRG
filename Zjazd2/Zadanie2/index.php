<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num_of_people = $_POST['num_of_people'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $address = $_POST['address'];
    $credit_card = $_POST['credit_card'];
    $email = $_POST['email'];
    $arrival_date = $_POST['arrival_date'];
    $arrival_time = $_POST['arrival_time'];
    $extra_bed = isset($_POST['extra_bed']) ? 'Tak' : 'Nie';
    $amenities = isset($_POST['amenities']) ? implode(', ', $_POST['amenities']) : 'Brak';


    echo "<h3>Podsumowanie rezerwacji</h3>";
    echo "<p>Liczba osób:</strong> $num_of_people</p>";
    echo "<p>Imię:</strong> $name</p>";
    echo "<p>Nazwisko:</strong> $surname</p>";
    echo "<p>Adres:</strong> $address</p>";
    echo "<p>Numer karty kredytowej:</strong> $credit_card</p>";
    echo "<p>E-mail:</strong> $email</p>";
    echo "<p>Data przyjazdu:</strong> $arrival_date</p>";
    echo "<p>Godzina przyjazdu:</strong> $arrival_time</p>";
    echo "<p>Dostawienie łóżka dla dziecka:</strong> $extra_bed</p>";
    echo "<p>Udogodnienia:</strong> $amenities</p>";
} else {
    ?>
    <form method="post">
        <label for="num_of_people">Liczba osób:</label>
        <select name="num_of_people" id="num_of_people">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
        </select><br><br>
        <label for="name">Imię:</label>
        <input type="text" name="name" id="name" required><br><br>
        <label for="surname">Nazwisko:</label>
        <input type="text" name="surname" id="surname" required><br><br>
        <label for="address">Adres:</label>
        <input type="text" name="address" id="address"><br><br>
        <label for="credit_card">Numer karty kredytowej:</label>
        <input type="text" name="credit_card" id="credit_card" required><br><br>
        <label for="email">E-mail:</label>
        <input type="email" name="email" id="email" required><br><br>
        <label for="arrival_date">Data przyjazdu:</label>
        <input type="date" name="arrival_date" id="arrival_date" required><br><br>
        <label for="arrival_time">Godzina przyjazdu:</label>
        <input type="time" name="arrival_time" id="arrival_time"><br><br>
        <input type="checkbox" name="extra_bed" id="extra_bed">
        <label for="extra_bed">Dostawienie łóżka dla dziecka</label><br><br>
        <label for="amenities">Udogodnienia:</label><br>
        <select name="amenities[]" id="amenities" multiple>
            <option value="Garaż">Garaż</option>
            <option value="popielniczka">Popielniczka</option>
        </select><br><br>
        <input type="submit" value="Zarezerwuj">
    </form>
<?php } ?>
</body>
</html>
