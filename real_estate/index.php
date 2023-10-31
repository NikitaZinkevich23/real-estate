<?php
require_once 'config.php';

$sql = "SELECT * FROM properties";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Недвижимость</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>Недвижимость</h1>
    <div class="property-list">
        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
            <div class="property-item">
                <img src="<?php echo $row['image']; ?>" alt="<?php echo $row['title']; ?>">
                <h3><?php echo $row['title']; ?></h3>
                <p><?php echo $row['description']; ?></p>
                <p class="price"><?php echo $row['price']; ?> руб.</p>
                <a href="property.php?id=<?php echo $row['id']; ?>">Подробнее</a>
            </div>
        <?php endwhile; ?>
    </div>
</body>
</html>

<?php
mysqli_close($conn);
?>