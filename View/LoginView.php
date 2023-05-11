<?php

class LoginView extends LayoutView
{
    public function renderBody(): void
    {
        extract($this->context);
        
        include 'templates/login.php';
    }

}