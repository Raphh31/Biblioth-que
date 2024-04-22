<?php

namespace App\Controllers;

class GestionLivres extends BaseController
{

    public function index()
    {
        $template =
            view('templates/Header').
            view('gestiondeslivres').
            view('templates/footer');
        return $template;
    }

}
