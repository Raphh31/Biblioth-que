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


    public function creeAbo()    
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
            
            view('creeAbonne',$data).
            view('templates/footer');
            
        return $template;
    }


    public function ModifyAbonne() {
        $matricule = $this->request->getGet();
        $abonne = model(\App\Models\abonne::class);

        $values = $this->request->getPost(['matricule_abonne', 'nom_abonne', 'date_naissance_abonne', 'date_adhesion_abonne', 'adresse_abonne', 'telephone_abonne', 'CSP_abonne']);
        $abonnes = $abonne->ModifyAbonne($values);
        
        return redirect()->to('gestiondesabonne');
    }

    public function AJouteAbonne() {
        $matricule = $this->request->getGet();
        $abonne = model(\App\Models\abonne::class);
        $values = $this->request->getPost(['matricule_abonne', 'nom_abonne', 'date_naissance_abonne', 'date_adhesion_abonne', 'adresse_abonne', 'telephone_abonne', 'CSP_abonne']);
        $abonne->   ADDAbonne($values);
        return redirect()->to('gestiondesabonne');
    }


    public function SupprimeAbonne()
    {
        $matricule = $this->request->getGet();
        $abonne = model(\App\Models\abonne::class);
        $abonnes = $abonne->SuppAbonne($matricule);
        return redirect()->to('gestiondesabonne');

    }



}

