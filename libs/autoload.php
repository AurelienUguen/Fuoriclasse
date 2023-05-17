<?php

session_start();


require_once './libs/RouterMatcher.php';
require_once './Controller/ControllerInterface.php';
require_once './Controller/HomeController.php';
require_once './Controller/TeamController.php';
require_once './Controller/ContactController.php';
require_once './Controller/NotFoundController.php';
require_once './Controller/LoginController.php';
require_once './Controller/UserController.php';
require_once './View/LayoutView.php';
require_once './View/HomeView.php';
require_once './View/TeamView.php';
require_once './View/ContactView.php';
require_once './View/NotFoundView.php';
require_once './View/LoginView.php';
require_once './Model/ParentRepository.php';

?>