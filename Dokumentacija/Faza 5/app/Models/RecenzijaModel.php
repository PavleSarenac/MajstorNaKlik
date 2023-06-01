<?php

namespace App\Models;

use CodeIgniter\Model;

/**
 * RecenzijaModel - klasa za implementaciju funkcionalnosti za koriscenje tabele iz baze podataka
 * 
 * @version 1.0
 */
class RecenzijaModel extends Model
{
    /**
     * var String $table
     */
    protected $table      = "recenzija";
    /**
     * var String $primaryKey
     */
    protected $primaryKey = ["IdKli", "IdMaj"];
    /**
     * var String $returnType
     */
    protected $returnType     = "object";
    /**
     * var Array $allowedFields
     */
    protected $allowedFields = ["IdKli", "IdMaj", "Tekst", "DatumVreme"];

    public function saveReview($data) {
        $this->insert($data, true);
    }

    public function isAlreadyReviewed($userId, $handymanId) {
        $db = \Config\Database::connect();
        $builder = $db->table("recenzija");
        if ($builder->select("*")
            ->where("recenzija.IdKli", $userId)
            ->where("recenzija.IdMaj", $handymanId)->get()->getNumRows() > 0) {
            return true;
        } else {
            return false;
        }
    }

}

?>