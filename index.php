<?php
require_once('includes/db.php');
require_once('includes/functions.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <Title>🎢 Rollercoasters</Title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/styles.css?v=<?php echo time();?>">
</head>

<body>

<nav class="nav-bar">
    <div class="logo">
        <img src="images/Rollercoasters%20of%20the%20World.png" alt="RotW logo">
    </div>
    <h1>Rollercoasters of the World</h1>
    <a href="new-entry.php">Add coaster <i class="fas fa-plus-circle"></i></a>
</nav>

<main class="coasterCards">
    <?php
        $rides = fetchDB($db);
        echo displayCoaster($rides);
    ?>
</main>

<?php
    if (isset($_GET['error']) && $_GET['error'] == 3) {
        echo '<br><h2>Failed to delete from database.</h2><br>';
    }
?>

<footer>
    <p>&copy; Tom Garrett 2021</p>
</footer>

</body>
</html>