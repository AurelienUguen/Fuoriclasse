<?php

class ContatController implements ControllerInterface
{
    public function __invoke()
    {
        $view = new ContactView();
        $view->render();
    }
}