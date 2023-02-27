<?php

namespace MVC\Controllers;

use MVC\Models\Student;
use MVC\View;

class StudentController extends Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->model = new Student();
        $this->view = new View();
    }

    public function index()
    {
        $students = $this->model->getData();

        $this->view->generate("students", []);
    }

    public function create()
    {
        print_r("Creating"); // TODO

        $students = $this->model->getData();

        $this->view->generate("students", [
            "students" => $students
        ]);
    }

    public function delete()
    {
        print_r("Deleting"); // TODO

        $students = $this->model->getData();

        $this->view->generate("students", [
            "students" => $students
        ]);
    }

    public function download()
    {
        $content = ["sdf" => "dsfsd"];

        file_put_contents("students.csv", $content);

        header('Content-Type: text/csv');
        header('Content-Disposition: attachment; filename=students.csv');
        readfile("students.csv");
    }
}
