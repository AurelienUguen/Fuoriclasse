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
            return new ContatController();
        }

        return new NotFoundController();
    }
}