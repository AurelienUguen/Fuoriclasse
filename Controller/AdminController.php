<?php

class AdminController implements ControllerInterface
{
    public function __invoke(): void
    {
        $view = new AdminView();
        $view->render();
    }
}