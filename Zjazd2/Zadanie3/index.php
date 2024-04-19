<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['step']) && $_POST['step'] == 'step2') {
        $group_data = array();
        for ($i = 1; $i <= $_POST['num_of_people']; $i++) {
            $group_data[] = array(
                'name' => $_POST['name'][$i],
                'surname' => $_POST['surname'][$i],
                'age' => $_POST['age'][$i]
            );
        }
        $num_of_people = $_POST['num_of_people'];
        $credit_card = $_POST['credit_card'];
        $email = $_POST['email'];
        $arrival_date = $_POST['arrival_date'];
        $arrival_time = $_POST['arrival_time'];
        $extra_bed = isset($_POST['extra_bed']) ? 'Tak' : 'Nie';
        $amenities = isset($_POST['amenities']) ? implode(', ', $_POST['amenities']) : 'Brak';

        echo "<h3>Podsumowanie rezerwacji</h3>";
        echo "<p><strong>Liczba osób:</strong> $num_of_people</p>";
        echo "<p><strong>Dane osób w grupie:</strong></p>";
        echo "<ul>";
        foreach ($group_data as $person) {
            echo "<li>Imię: {$person['name']}, Nazwisko: {$person['surname']}, Wiek: {$person['age']}</li>";
        }
        echo "</ul>";
        echo "<p><strong>Numer karty kredytowej:</strong> $credit_card</p>";
        echo "<p><strong>E-mail:</strong> $email</p>";
        echo "<p><strong>Data przyjazdu:</strong> $arrival_date</p>";
        echo "<p><strong>Godzina przyjazdu:</strong> $arrival_time</p>";
        echo "<p><strong>Dostawienie łóżka dla dziecka:</strong> $extra_bed</p>";
        echo "<p><strong>Udogodnienia:</strong> $amenities</p>";
    } else {
        ?>

        <form method="post">
            <input type="hidden" name="step" value="step2">
            <label for="num_of_people">Liczba osób:</label>
            <select name="num_of_people" id="num_of_people">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
            </select><br><br>
            <input type="submit" value="Dalej">
        </form>
        <?php
    }
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

        <div id="people_form"></div>

        <script>
            document.getElementById('num_of_people').addEventListener('change', function() {
                var num_of_people = this.value;
                var form_html = '';
                for (var i = 1; i <= num_of_people; i++) {
                    form_html += '<h3>Osoba ' + i + '</h3>';
                    form_html += '<label for="name[' + i + ']">Imię:</label>';
                    form_html += '<input type="text" name="name[' + i + ']" required><br><br>';
                    form_html += '<label for="surname[' + i + ']">Nazwisko:</label>';
                    form_html += '<input type="text" name="surname[' + i + ']" required><br><br>';
                    form_html += '<label for="age[' + i + ']">Wiek:</label>';
                    form_html += '<input type="number" name="age[' + i + ']" required><br><br>';
                }
                document.getElementById('people_form').innerHTML = form_html;
            });
        </script>

        <label for="credit_card">Numer karty kredytowej:</label>
        <input type="text" name="credit_card" required><br><br>
        <label for="email">E-mail:</label>
        <input type="email" name="email" required><br><br>
        <label for="arrival_date">Data przyjazdu:</label>
        <input type="date" name="arrival_date" required><br><br>
        <label for="arrival_time">Godzina przyjazdu:</label>
        <input type="time" name="arrival_time"><br><br>
        <input type="checkbox" name="extra_bed" id="extra_bed">
        <label for="extra_bed">Dostawienie łóżka dla dziecka</label><br><br>
        <label for="amenities">Udogodnienia:</label><br>
        <select name="amenities[]" multiple>
            <option value="Garaż">Garaż</option>
            <option value="popielniczka">Popielniczka dla palacza</option>
        </select><br><br>
        <input type="submit" value="Zarezerwuj">
    </form>
<?php } ?>
</body>
</html>
