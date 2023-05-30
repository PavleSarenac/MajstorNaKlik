<?php 

namespace App\Models;

use CodeIgniter\Model;

/**
 * Klasa za implementaciju funkcionalnosti za koriscenje tabele registrovani_korisnik iz baze podataka.
 * 
 * @version 1.0
 */
class RegistrovaniKorisnikModel extends Model {  
    /**
    * @var string $table Table
    */
    protected $table      = 'registrovani_korisnik';
    /**
    * @var string $primaryKey primaryKey
    */
    protected $primaryKey = 'IdKor';
    /**
    * @var string $returnType returnType
    */
    protected $returnType = 'object';
    /**
    * @var array $allowedFields allowedFields
    */
    protected $allowedFields = ['TipKorisnika', 'Ime', 'Prezime', 'MejlAdresa', 'Lozinka', 'KorisnickoIme', 'IdSli', 'IdGra'];


    /**
    * save_user funkcija radi insert novog reda u tabeli
    * @param array $data Data
    * 
    * @return void
    */
    public function save_user($data) {
        $this->insert($data, true);
            // Return the inserted ID
    }

    /**
     * Vraca niz objekata korisnika sa prosledjenim korisnickim imenom
     * 
     * @param String $username
     * 
     * @return Array
     */
    public function getUser($username){
        return $this->where("KorisnickoIme", $username)->findAll();
    }

    public function getAllForHandyman($IdKor) {
        $db = \Config\Database::connect();
        $builder = $db->table("registrovani_korisnik");
        $builder->select("*");
        return $builder->join("grad", "registrovani_korisnik.IdGra = grad.IdGra")
                ->join("majstor", "majstor.IdMaj = registrovani_korisnik.IdKor")
                ->join("specijalnosti", "majstor.IdSpec = specijalnosti.IdSpec")
                ->join("telefon", "registrovani_korisnik.IdKor = telefon.IdKor")
                ->where("registrovani_korisnik.IdKor", $IdKor)->get()->getResult();
    }

    public function getAllForRegUser($IdKor) {
        $db = \Config\Database::connect();
        $builder = $db->table("registrovani_korisnik");
        $builder->select("*");
        return $builder->join("grad", "registrovani_korisnik.IdGra = grad.IdGra")
        ->join("telefon", "registrovani_korisnik.IdKor = telefon.IdKor")
        ->where("registrovani_korisnik.IdKor", $IdKor)->get()->getResult();
    }
}