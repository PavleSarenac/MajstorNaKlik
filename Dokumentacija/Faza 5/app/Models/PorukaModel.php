<?php

namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\I18n\Time;

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
            'DatumVreme' => Time::now("Europe/Belgrade", "en_US"),
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

    public function getAllReceivedMessages($IdTo){
        $poruke = $this->select('IdPos, COUNT(*) as BrojPoruka')
                    ->where("IdPri", $IdTo)
                    ->where("Status", "pos")
                    ->groupBy('IdPos')
                    ->orderBy("DatumVreme", "ASC")
                    ->findAll();

        if($poruke == null){
            return null;
        } 

        return $poruke;
    }

    public function getAllMessages($id, $idTo){
        $poruke = $this->select()
        ->where("(IdPri = $id AND IdPos = $idTo) OR (IdPri = $idTo AND IdPos = $id)")
        ->orderBy('DatumVreme', 'ASC')
        ->findAll();

        if($poruke == null){
            return null;
        } 

        return $poruke;
    }

    /**
     * azurira status poruka, gde je autor(idFrom) primalac, na procitan
     * 
     * @param integer $idFrom
     * 
     * @param integer $idTo
     */
    public function setMessagesSeen($idFrom, $idTo){
        $this->set(['Status' => 'pro'])
        ->where('IdPri', $idFrom)
        ->where('IdPos', $idTo)
        ->update();
    }

    /**
     * prima obavestenje o primljenim porukama ali ne od osobe sa kojom se trenutno cetuje
     * 
     * @param integer $authorid
     * 
     * @param integer $IdTo
     */
    public function getAllReceivedMessagesWhileInChat($authorId, $idTo){
        $poruke = $this->select('IdPos, COUNT(*) as BrojPoruka')
                    ->where("IdPri", $authorId)
                    ->where("IdPos !=", $idTo)
                    ->where("Status", "pos")
                    ->groupBy('IdPos')
                    ->orderBy("DatumVreme", "ASC")
                    ->findAll();

        if($poruke == null){
            return null;
        } 

        return $poruke;
    }

}

?>