<?php

abstract class LayoutView
{
    protected array $context = [];

    abstract protected function renderBody();

    public function setContext(array $context)
    {
        $this->context = $context;
    }

    public function render()
    {
        extract($this->context);
        
        include 'templates/header.php';

        $this->renderBody();

        include 'templates/footer.php';
    }
}