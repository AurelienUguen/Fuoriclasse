<?php

class NotFoundController implements ControllerInterface
{
    public function __invoke()
    {
        $view = new NotFoundView();
        $view->render();
    }
}