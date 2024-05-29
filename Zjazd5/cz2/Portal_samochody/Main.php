<?php
$connect = new mysqli("localhost", "root", "", "mojaBaza");

$query = "SELECT * FROM samochody ORDER BY cena ASC LIMIT 5";
$result = mysqli_query($connect, $query);
?>

<table>
    <tr>
        <th>Marka</th>
        <th>Model</th>
        <th>Cena</th>
    </tr>
    <?php while ($row = mysqli_fetch_assoc($result)): ?>
        <tr>
            <td><?php echo $row['marka']; ?></td>
            <td><?php echo $row['model']; ?></td>
            <td><?php echo $row['cena']; ?></td>
        </tr>
    <?php endwhile; ?>
</table>
<a href="index.php">Powrót do strony głównej</a>