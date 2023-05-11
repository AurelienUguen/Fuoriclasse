<?php

session_start();

require_once './libs/Database.php';
require_once './libs/RouterMatcher.php';
require_once './libs/LogUser.php';
require_once './libs/Logout.php';
require_once './Controller/ControllerInterface.php';
require_once './Controller/HomeController.php';
require_once './Controller/TeamController.php';
require_once './Controller/ContactController.php';
require_once './Controller/NotFoundController.php';
require_once './Controller/LoginController.php';
require_once './Controller/UserListController.php';
require_once './Controller/AdminController.php';
require_once './Controller/MySpaceController.php';
require_once './View/LayoutView.php';
require_once './View/HomeView.php';
require_once './View/TeamView.php';
require_once './View/ContactView.php';
require_once './View/NotFoundView.php';
require_once './View/LoginView.php';
require_once './View/AdminView.php';
require_once './View/MySpaceView.php';
require_once './Model/User.php';
require_once './Model/UserRepository.php';
require_once './Model/CheckLogin.php';
/* require_once './Model/Team.php';
require_once './Model/TeamRepository.php';
require_once './Model/Rider.php';
require_once './Model/RiderRepository.php';

 */

?>