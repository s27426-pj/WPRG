<?php
$connect = new mysqli("localhost", "root", "", "mojaBaza");

$query = "SELECT * FROM samochody ORDER BY rok DESC";
$result = mysqli_query($connect, $query);
?>

<table>
    <tr>
        <th>ID</th>
        <th>Marka</th>
        <th>Model</th>
        <th>Cena</th>
        <th>Szczegóły</th>
    </tr>
    <?php while ($row = mysqli_fetch_assoc($result)): ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['marka']; ?></td>
            <td><?php echo $row['model']; ?></td>
            <td><?php echo $row['cena']; ?></td>
            <td>
                <a href="details.php?id=<?php echo $row['id']; ?>">Szczegóły</a>
            </td>
        </tr>
    <?php endwhile; ?>
</table>
<a href="index.php">Powrót do strony głównej</a>