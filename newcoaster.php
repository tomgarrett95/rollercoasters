<?php
require_once('includes/db.php');
require_once('includes/functions.php');

// Process the data from the form


// Could validate data in form from here

//if (!$isValid) {
//    header('Location: new-entry.php');
//}

$coasterAdded = addNewCoaster($db, $_POST);

if ($coasterAdded) {
    header('Location: index.php');
} else {
    header('Location: new-entry.php');
}