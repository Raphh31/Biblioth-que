<?php

namespace App\Models;

use CodeIgniter\Model;

class Livre extends Model
{
    protected $table        ='livre';
    protected $primaryKey   ='code_catalogue';
    protected $allowedFields = ['titre_livre','theme_livre'];


    function getLivre()
    {
        return $this->find();
    }
}