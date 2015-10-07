<?php
// Set timezone
date_default_timezone_set('Europe/Tallinn');


// Connect to db
require 'include/database.php';

// Set page
$page = !empty($_GET['page']) ? $_GET['page'] : 'home';

// Include controller, if it exists
if (file_exists("controllers/$page.php")) {
    require "controllers/$page.php";
}

// Include template
require "templates/master_template.php";

?>