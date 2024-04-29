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
        if ($result !== null) {
            return (object) $result;
        }
        return null;
    }

    function SuppAbonne($matricule)
    {
        $this->delete($matricule);
    }
}