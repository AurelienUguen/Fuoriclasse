<?php

class NotFoundController implements ControllerInterface
{
    public function __invoke(): void
    {
        $view = new NotFoundView();
        $view->render();
    }
}