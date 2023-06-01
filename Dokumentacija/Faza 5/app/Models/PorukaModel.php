<?php

namespace App\Models;

use CodeIgniter\Model;

/**
 * PorukaModel - klasa za implementaciju funkcionalnosti za koriscenje tabele iz baze podataka
 * 
 * @version 1.0
 */
class PorukaModel extends Model
{
    /**
     * var String $table
     */
    protected $table      = "poruka";
    /**
     * var String $primaryKey
     */
    protected $primaryKey = "IdP";
    /**
     * var String $returnType
     */
    protected $returnType     = "object";
    /**
     * var Array $allowedFields
     */
    protected $allowedFields = ["Tekst", "DatumVreme", "IdPri", "IdPos", "Status"];

    /**
     * ubacivanje u bazu podataka u tabelu poruka
     * 
     * @param integer $IdFrom, @param integer $IdTo, @param String $message
     * 
     * @return integer
     */
    public function insertData($IdFrom, $IdTo, $message)
    {
        $data = array(
            'Tekst' => $message,
            'DatumVreme' => date('Y-m-d H:i:s'),
            'IdPos' => $IdFrom,
            'IdPri' => $IdTo,
            'Status'=> "pos",
        );
        $this->insert($data, true); // true for auto validation
        return $this->insertID();
    }

    /**
     * vraca DatumVreme ukoliko postoji prosledjeni id, u suprotnom null
     * 
     * @param integer $IdP
     * 
     * @return Timestamp
     */
    public function getTimestampFromId($IdP)
    {
        $poruka = $this->find($IdP);
        if($poruka)
            return $poruka->DatumVreme;
        else 
            return null;
    }

}

?>