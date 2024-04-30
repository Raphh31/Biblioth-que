<?php

namespace App\Controllers;

class GestionLivres extends BaseController
{

    public function index()
    {

        $Livre = model(\App\Models\Livre::class);
        $livres = $Livre->getLivres();
        $data['livres']=$livres;
        $session=session();
        
        $template =
            view('templates/Header.php',[
            'loggedIn' => $session->get('loggedIn'),
            'name' => $session->get('username')
            ]).
            
            view('gestiondeslivres',$data).
            view('templates/footer');
        return $template;
    }

}
