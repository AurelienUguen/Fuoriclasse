<?php


require_once 'libs/autoload.php';


LogUser::logUser();

// var_dump($_SESSION);

RouterMatcher::match($_SERVER['PATH_INFO'])();


?>