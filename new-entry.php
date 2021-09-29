<?php
require_once('includes/db.php');
require_once('includes/functions.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <Title>🎢 Add New Coaster</Title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/styles.css?v=<?php echo time(); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

<nav class="nav-bar">
    <div class="logo">
        <img src="images/Rollercoasters%20of%20the%20World.png" alt="RotW logo">
    </div>
    <h1>Rollercoasters of the World</h1>
    <a href="index.php">Return home <i class="fas fa-home"></i></a>
    </div>
</nav>

<main class="form">
    <form method="post" action="newcoaster.php">
        <h2>Add a new rollercoaster</h2>
        <div>
            <p><label for="name">Rollercoaster name:</label></p>
            <input class="field" type="text" id="name" name="name" required>
        </div>
        <div>
            <p><label for="park">Location:</label></p>
            <select class="field" name="location" required>
                <option class="field" value="">Select...</option>
                    <?php
                    $parks = getAllParks($db);
                    foreach ($parks as $park) {
                        $opt = '<option value="' . $park['id'] . '">'
                        . $park['park']
                        . '</option>';
                        echo $opt;
                    }
                    ?>
            </select>
        </div>
        <div>
            <p><label for="img">Image URL:</label></p>
            <input class="field" type="url" id="img" name="img">
        </div>
        <div>
            <p><label for="height">Height(m):</label></p>
            <input class="field" type="number" id="height" name="height" min="0" max="180" step="0.5" required>
        </div>
        <div>
            <p><label for="inversions">Inversions:</label></p>
            <input class="field" type="number" id="inversions" name="inversions" min="0" max="20" step="1" value="0" required>
        </div>
        <div class="formbuttons">
            <input type="reset" value="Reset">
            <input type="submit" value="Submit">
        </div>
    </form>
</main>

<footer class="newfooter">
    <p>&copy; Tom Garrett 2021</p>
</footer>

</body>
</html>
