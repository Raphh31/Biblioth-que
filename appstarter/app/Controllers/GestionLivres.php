<?php

namespace App\Controllers;

class GestionLivres extends BaseController
{

    public function index()
    {

        $Livre = model(\App\Models\Livre::class);
        $livres = $Livre->getLivre();
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

    public function creeLiv()    
    {
        $Livre = model(\App\Models\Livre::class);
        $livres = $Livre->getLivre();
        $data['livres']=$livres;
        $session=session();

        $template =
            view('templates/Header.php',[
            'loggedIn' => $session->get('loggedIn'),
            'name' => $session->get('username')
            ]).
            
            view('creelivre',$data).
            view('templates/footer');
        return $template;
    }


    public function ModifyLivre() {
        $Livre = model(\App\Models\Livre::class);
        $values = $this->request->getPost(['code_catalogue', 'titre_livre', 'theme_livre']);
        $Livre->ModifyLivre($values);
        
        return redirect()->to('gestiondeslivres');
    }

    public function AJouteLivre() {
        $Livre = model(\App\Models\Livre::class);
        $values = $this->request->getPost(['code_catalogue', 'titre_livre', 'theme_livre']);
        $Livre->   ADDLivre($values);
        return redirect()->to('gestiondeslivres');
    }


    public function SupprimeLivre()
    {
        $matricule = $this->request->getGet();
        $Livre = model(\App\Models\Livre::class);
        $Livre->SuppAbonne($matricule);
        return redirect()->to('gestiondeslivres');

    }






}



