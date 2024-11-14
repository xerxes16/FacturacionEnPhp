<?php

namespace Libs;

class View
{
    public $d;

    public function render($name, $data = [])
    {
        $this ->d = $data;
        require_once "views/$name.php";
        exit;
    }
}