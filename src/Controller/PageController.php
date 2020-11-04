<?php
namespace Code\Controller;

use Code\View\View;

class PageController
{

    public function index()
    {
        $view = new View('site/index.phtml');
        $view->name = "Alexandre";

        return $view->render();
    }
}