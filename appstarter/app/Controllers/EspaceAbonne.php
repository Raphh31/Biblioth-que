<?php

namespace App\Controllers;

class EspaceAbonne extends BaseController
{

    public function index($matricule = null)
    {

        $abonne = model(\App\Models\abonne::class);
        $abonnes = $abonne->getAbonne($matricule );
        $data['abonnes']=$abonnes;
        $session=session();
        
        $template =
            view('templates/Header.php',[
            'loggedIn' => $session->get('loggedIn'),
            'name' => $session->get('username')
            ]).
            
            view('espaceAbonne',$data).
            view('templates/footer');
            
        return $template;

    }

}
