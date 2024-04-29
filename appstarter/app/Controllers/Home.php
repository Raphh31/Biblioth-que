<?php

namespace App\Controllers;

class Home extends BaseController
{

    public function index()
    {
        $session=session();
        
        $template =
            view('templates/Header.php',[
        'loggedIn' => $session->get('loggedIn'),
        'name' => $session->get('username')
        ]).
            view("accueil_home").
            view('templates/footer.php');
        return $template;
    }
}