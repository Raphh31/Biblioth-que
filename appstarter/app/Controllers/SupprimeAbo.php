<?php

namespace App\Controllers;

class GestionAbonne extends BaseController
{

    public function index($matricule)
    {

        $abonne = model(\App\Models\abonne::class);
        $abonnes = $abonne->SuppAbonne($matricule);
        
        $template =
            view('templates/Header.php',[
            'loggedIn' => $session->get('loggedIn'),
            'name' => $session->get('username')
            ]).
            
            view('gestiondesabonne').
            view('templates/footer');
            
        return $template;

    }

}
