<?php
require_once 'config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM properties WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title><?php echo $row['title']; ?></title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="property-page">
        <img src="<?php echo $row['image']; ?>" alt="<?php echo $row['title']; ?>">
        <h2><?php echo $row['title']; ?></h2>
        <p class="description"><?php echo $row['description']; ?></p>
        <p class="price"><?php echo $row['price']; ?> руб.</p>
        <a href="index.php">Вернуться к списку</a>
    </div>
</body>
</html>

<?php
mysqli_close($conn);
?>