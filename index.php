<?php
require_once('db.php');
require_once('functions.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <Title>Rollercoasters</Title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

<nav class="nav-bar">
    <h1>Rollercoasters of the World</h1>
    <a href="new-entry.php">Add coaster <i class="fas fa-plus-circle"></i></a>
    </div>
</nav>

<main class="coasterCards">
    <?php
        $rides = fetchDB($db);
        echo displayCoaster($rides);
    ?>
</main>

<footer>
</footer>

</body>
</html>