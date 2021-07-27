<?php

namespace Controller;

use Model\ArticleModel;

class MainController
{
    static public function home()
    {
        $articleModel = new ArticleModel();
        $articles = $articleModel->getAll();
        include(__DIR__.'/../view/main/index.php');
    }
}