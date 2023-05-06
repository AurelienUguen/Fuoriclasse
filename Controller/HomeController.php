<?php

class HomeController implements ControllerInterface
{
    public function __invoke()
    {
        $view = new HomeView();
       /*  $view->setContext([

        ]); */
        $view->render();
    }
}