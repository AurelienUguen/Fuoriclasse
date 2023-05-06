<?php

abstract class LayoutView
{
    abstract protected function renderBody();

    public function render()
    {
        include 'templates/header.php';

        $this->renderBody();

        include 'templates/footer.php';
    }
}