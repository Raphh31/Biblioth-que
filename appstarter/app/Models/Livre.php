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

    function getLivreBycode_catalogue($code_catalogue)
    {
        return $this->find($code_catalogue);
        if ($result !== null) {
            return (object) $result;
        }
        return null;
    }
}
