<?php

class TeamController implements ControllerInterface
{
    public function __invoke()
    {
        $view = new TeamView();
        $view->render();
    }
}