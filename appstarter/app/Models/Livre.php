<?php

namespace App\Models;

use CodeIgniter\Model;

class Livre extends Model
{
    protected $table           = 'livre';
    protected $primaryKey      = 'code_catalogue';
    protected $allowedFields   = ['code_catalogue', 'titre_livre', 'theme_livre'];


    function getLivre()
    {
        return $this->find();
    }

    function getLivreBycode($code)
    {
        return $this->find($code);
    }

    function ModifyLivre($data)
    {
        return $this->update($data['code_catalogue'], $data);

    }

    function ADDLivre($data){
        $this->where('code_catalogue',$data['code_catalogue'])->insert($data);
    }



    function SuppLivre($matricule)
    {
        $this->where('code_catalogue',$matricule)->delete();
    }



}
