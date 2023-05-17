<?php


require_once 'libs/autoload.php';


if (empty($_SERVER['PATH_INFO'])) {
    header('location: home');
}

RouterMatcher::match($_SERVER['PATH_INFO'])();


?>