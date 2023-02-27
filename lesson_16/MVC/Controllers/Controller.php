<?php

namespace MVC\Controllers;

use MVC\Model;
use MVC\View;

class Controller
{
    public $model;
    public $view;

    public function __construct()
    {
        $this->view = new View();
        $this->model = new Model();
    }

    public function index()
    {
        print_r("index");
    }
}
