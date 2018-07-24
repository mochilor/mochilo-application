<?php

namespace App\Controller;

use Mochilo\Controller\GetController;

class HomeController extends GetController
{
    public function home()
    {
        return $this->twig->render("index.twig", $this->getDataForView());
    }
}