<?php

class RouterMatcher
{
    public static function match(string $pathInfo) : ControllerInterface
    {
      
        if(preg_match('#^\/home$#', $pathInfo, $matches)) {
            return new HomeController();
        }

        if(preg_match('#^\/team$#', $pathInfo, $matches)) {
            return new TeamController();
        }

        if(preg_match('#^\/contact$#', $pathInfo, $matches)) {
            return new ContatcController();
        }

        if(preg_match('#^\/login$#', $pathInfo, $matches)) {
            return new LoginController();
        }

        if(preg_match('#^\/logout#', $pathInfo, $matches)) {
            Logout::logout();
        }

        if(preg_match('#^\/admin$#', $pathInfo, $matches) && $_SESSION['role'] === 'admin') {
            return new AdminController();
        } else {
            header('location: home');
        }

        if(preg_match('#^\/myspace#', $pathInfo, $matches) && $_SESSION['role'] === 'client') {
           return new MySpaceController();
        } else {
            header('location: home');
        }



        return new NotFoundController();
    }
}