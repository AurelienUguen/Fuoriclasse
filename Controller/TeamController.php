<?php

class TeamController implements ControllerInterface
{
    public function __invoke(): void
    {
        $view = new TeamView();
        $view->render();
    }
}