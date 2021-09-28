<?php
require_once('db.php');
require_once('functions.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <Title>WorldRide</Title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
<nav class="nav-bar">
    <div>
        <img src="drawing.svg"/>
    </div>
    <div>
        <h1>WorldRide</h1>
    </div>
    <div class="add-new">
        <a href="new-entry.php">+</a>
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