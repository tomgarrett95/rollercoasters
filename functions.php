<?php

function fetchDB(PDO $db): array {
    $query = $db->prepare("SELECT `rides`.`name`, `rides`.`img`, `rides`.`height`, `rides`.`inversions`, `themeparks`.`park`
                                FROM `rides` 
                                LEFT JOIN `themeparks` 
                                ON `rides`.`location` = `themeparks`.`id`;");

    $query->execute();

    return $query->fetchAll();
}

function getImagePath(string $imagePath): string
{
    $path = '';
    $imageStartsWith = substr($imagePath, 0, strlen('http'));
    if (!$imageStartsWith) {
        $path = 'https://via.placeholder.com/350/150';
    } elseif ($imageStartsWith === 'http') {
        $path = $imagePath;
    } else {
        $path = 'images/' . $imagePath;
    }
    return $path;
}

function displayCoaster(array $rides): string {
    $coasterCard = "";
    foreach ($rides as $ride) {
        $coasterCard .= "<div class='coasterCard'>";
        $coasterCard .= "<h3>Name: " . $ride['name'] . "</h3>";
        $coasterCard .= "<p>Ride location: " . $ride['name'] . "</p>";
        $coasterCard .= '<img class="coasterimg" src="';
        $path = getImagePath($ride['img']);
        $coasterCard .= ($path . '" alt="Picture of ' . $ride['name'] . '.">');
        $coasterCard .= "<p>Ride height: " . $ride['height'] . "m</p>";
        $coasterCard .= "<p>Total inversions: " . $ride['inversions'] . "</p>";
        $coasterCard .= "</div>";
    }
    return $coasterCard;
}
