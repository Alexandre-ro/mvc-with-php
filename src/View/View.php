<?php
namespace Code\View;

class View
{
    private $view;
    private $data = [];

    public function __construct($views)
    {
        $this->view = $views;
    }

    public function __set($index, $value)
    {
        $this->data[$index] = $value;
    }

    public function __get($index)
    {
       return $this->data[$index];
    }

    public function render()
    {
        ob_start();
        require VIEWS_PATH . $this->view;
    }

}