<?php

namespace App\Controllers;

class Home extends BaseController
{

    public function index()
    {
        $template =
            view('templates/Header.php').
            view("accueil_home").
            view('templates/footer.php');
        return $template;
    }

}