<?php

class LoginController implements ControllerInterface
{
    public function __invoke(): void
    {
        $view = new LoginView();
        $view->render();
    }

}