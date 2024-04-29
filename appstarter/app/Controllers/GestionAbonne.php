<?php

namespace App\Controllers;

class GestionAbonne extends BaseController
{

    public function index($matricule = null)
    {

        $abonne = model(\App\Models\abonne::class);
        $abonnes = $abonne->getAbonne();
        $data['abonnes']=$abonnes;
        $session=session();
        
        $template =
            view('templates/Header.php',[
            'loggedIn' => $session->get('loggedIn'),
            'name' => $session->get('username')
            ]).
            
            view('gestiondesabonne',$data).
            view('templates/footer');
            
        return $template;

    }

    public function SupprimeAbonne()
    {
        $matricule = $this->request->getGet();
        $abonne = model(\App\Models\abonne::class);
        $abonnes = $abonne->SuppAbonne($matricule);
    }



}

