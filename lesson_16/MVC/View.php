<?php

namespace MVC;

class View
{
    public function generate($template, $data)
    {
        include "Views/" . $template . "_view.php";
    }
}
