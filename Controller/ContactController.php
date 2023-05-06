<?php

class ContatcController implements ControllerInterface
{
    public function __invoke(): void
    {
        $view = new ContactView();
        $view->render();
    }
}