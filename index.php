<?php


require_once 'libs/autoload.php';


RouterMatcher::match($_SERVER['PATH_INFO'])();


// (new HomeController())();

?>