<?php

class HomeController implements ControllerInterface
{
    public function __invoke(): void
    {
        $view = new HomeView();
        $view->render();
    }
}