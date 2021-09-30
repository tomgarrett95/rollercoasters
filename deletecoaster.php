<?php

require_once ('includes/db.php');
require_once ('includes/functions.php');

//$db = fetchDB('rollercoasterdb');

deleteCoaster($db, $_POST['coaster_id']);