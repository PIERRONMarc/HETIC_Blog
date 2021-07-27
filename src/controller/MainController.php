<?php

namespace Controller;

class MainController
{
    static public function home()
    {
        include(__DIR__.'/../view/main/index.php');
    }
}