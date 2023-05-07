<?php

class MySpaceController implements ControllerInterface
{
    public function __invoke(): void
    {
        $view = new MySpaceView();
        $view->render();
    }
}