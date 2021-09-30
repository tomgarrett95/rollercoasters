<?php

function fetchDB(PDO $db): array {
    $query = $db->prepare("SELECT `rides`.`name`, `rides`.`img`, `rides`.`height`, `rides`.`inversions`, `themeparks`.`park`
                                FROM `rides` 
                                LEFT JOIN `themeparks` 
                                ON `rides`.`location` = `themeparks`.`id`
                                ORDER BY `rides`.`name`;");
    $query->execute();
    return $query->fetchAll();
}

function getImagePath(string $imagePath): string
{
    $path = '';
    $imageStartsWith = substr($imagePath, 0, strlen('http'));
    if (!$imageStartsWith) {
        $path = 'https://hotemoji.com/images/dl/n/roller-coaster-emoji-by-google.png';
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
        $coasterCard .= "<div class='namelocation'><h3>" . $ride['name'] . "</h3>";
        $coasterCard .= "<p class='parkname'>". $ride['park'] . "</p></div>";
        $coasterCard .= '<img class="coasterimg" src="';
        $path = getImagePath($ride['img']);
        $coasterCard .= ($path . '" alt="Picture of ' . $ride['name'] . '">');
        $coasterCard .= "<div class='heightinversion'><p>Ride height: " . $ride['height'] . "m</p>";
        $coasterCard .= "<p>Total inversions: " . $ride['inversions'] . "</p></div>";
        $coasterCard .= "</div>";
    }
    return $coasterCard;
}

function getAllParks(PDO $db): array {
    $query = $db->prepare("SELECT `id`, `park`
                                FROM `themeparks` 
                                ORDER BY `themeparks`.`park`;");
    $query->execute();
    return $query->fetchAll();
}

function addNewCoaster(PDO $db, array $newCoaster): bool
{
    $query = $db->prepare(
        'INSERT INTO `rides` (`name`, `location`, `img`, `height`, `inversions`)'
        . ' VALUES (:name, :location, :img, :height, :inversions);'
    );
    return $query->execute($newCoaster);
}