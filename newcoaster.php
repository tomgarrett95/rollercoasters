<?php
require_once('includes/db.php');
require_once('includes/functions.php');

$coasterAdded = addNewCoaster($db, $_POST);

if ($coasterAdded) {
    header('Location: index.php');
} else {
    header('Location: new-entry.php');
}