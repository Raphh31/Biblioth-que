<?php

namespace App\Models;

use CodeIgniter\Model;

class Abonne extends Model
{
    protected $table        ='abonne';
    protected $primaryKey   ='matricule_abonne';
    protected $allowedFields = ['matricule_abonne','nom_abonne','date_naissance_abonne','date_adhesion_abonne','adresse_abonne','telephone_abonne','CSP_abonne'];


    function getAbonne()
    {
        return $this->find();
    }

    function getAbonneByMatricule($matricule)
    {
        return $this->find($matricule);
    }

    function ModifyAbonne($data)
    {
        return $this->update($data['matricule_abonne'], $data);

    }

    function ADDAbonne($data){
        $this->where('matricule_abonne',$data['matricule_abonne'])->insert($data);
    }



    function SuppAbonne($matricule)
    {
        $this->where('matricule_abonne',$matricule)->delete();
    }
}