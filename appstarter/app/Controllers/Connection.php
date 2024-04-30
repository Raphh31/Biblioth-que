<?php

namespace App\Controllers;

class Connection extends BaseController

{
    public function index()
    {
        $template =
            view('templates/Header.php').
            view("login_form").
            view('templates/footer.php');
        return $template;
    }

    public function attemptLogin() // Fonction de tentative de connexion
    {
        $abonneModel = new \App\Models\Abonne();
        $values = $this->request->getPost(['login', 'password']);
        if (
            !empty($values) && $values['login'] == APP_ADMIN_LOGIN &&
            $values['password'] == APP_ADMIN_PASSWORD
        ) {
            return $this->loginUser();
        }
        $rechercheAbonne = $abonneModel->getAbonneByMatricule($values['login']);
        if ($rechercheAbonne !== null) {
            if ($rechercheAbonne->nom_abonne === $values['password']) {
                return $this->loginUser($rechercheAbonne);
            }
        }

        return redirect()->to('login');
    }



private function loginUser($user = null)
{
    $session = session();
    if(isset($user)) {
    $session->set([
        'username' => $user -> nom_abonne,
        'loggedIn' => true,
        'role' =>'user',
    ]);
    } else {
        $session->set([
            'username' => 'Administrator',
            'loggedIn' => true,
            'role' =>'admin',
        ]);
    }
    return redirect()->to("home");
}
}
