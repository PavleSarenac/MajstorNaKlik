<?php namespace App\Models;

use CodeIgniter\Model;


/**
 * MajstorModel - klasa koja predstavlja model za tabelu Majstor iz baze podataka
 * 
 * @version 1.0
 */
class MajstorModel extends Model
{
        /**
        * @var string $table Table
        */
        protected $table      = 'majstor';
        /**
        *@var string $primaryKey primaryKey
        */
        protected $primaryKey = 'IdMaj';
        /**
        * @var string $returnType returnType
        */        
        protected $returnType = 'object';
        /**
        * @var array $allowedFields AllowedFields
        */
        protected $allowedFields = ['IdMaj', 'BrojRecenzija', 'ProsecnaCena', 'ProsecnaBrzina', 'ProsecanKvalitet', 'IdSpec'];
        
        /**
        * save_city funkcija radi insert novog reda u tabeli
        * @param array $data Data
        * 
        * @return void
        */
        public function save_user($data) {
            $this->insert($data, true);
             // Return the inserted ID
        }

        public function getSpecialty($IdMaj) {
                $db = \Config\Database::connect();
                $builder = $db->table("majstor");
                $builder->select("specijalnosti.Opis");
                $builder->where("majstor.IdMaj", $IdMaj);
                $builder->join("specijalnosti", "majstor.IdSpec = specijalnosti.IdSpec");
                return $builder->get()->getResult();
        }
       
        public function getName($IdMaj) {
                $db = \Config\Database::connect();
                $builder = $db->table("majstor");
                $builder->select("registrovani_korisnik.Ime");
                $builder->where("majstor.IdMaj", $IdMaj);
                $builder->join("registrovani_korisnik", "majstor.IdMaj = registrovani_korisnik.IdKor");
                return $builder->get()->getResult();
        }

        public function getSurname($IdMaj) {
                $db = \Config\Database::connect();
                $builder = $db->table("majstor");
                $builder->select("registrovani_korisnik.Prezime");
                $builder->where("majstor.IdMaj", $IdMaj);
                $builder->join("registrovani_korisnik", "majstor.IdMaj = registrovani_korisnik.IdKor");
                return $builder->get()->getResult();
        }

        public function updateRatings($handymanId, $priceRating, $speedRating, $qualityRating) {
                $db = \Config\Database::connect();
                $builder = $db->table("majstor");
                $handymanRow = $builder->select("*")->where("majstor.IdMaj", $handymanId)->get()->getResult()[0];
                
                $oldNumOfReviews = $handymanRow->BrojRecenzija == null ? 0 : intval($handymanRow->BrojRecenzija);
                $newNumOfReviews = $oldNumOfReviews + 1;
                $newPriceAverage = null;
                $newSpeedAverage = null;
                $newQualityAverage = null;

                // New price average
                if ($handymanRow->ProsecnaCena == null) {
                        $newPriceAverage = $priceRating;
                } else {
                        $newPriceAverage = 
                        ((floatval($handymanRow->ProsecnaCena) * $oldNumOfReviews) + $priceRating) / $newNumOfReviews;
                }

                // New speed average
                if ($handymanRow->ProsecnaBrzina == null) {
                        $newSpeedAverage = $speedRating;
                } else {
                        $newSpeedAverage = 
                        ((floatval($handymanRow->ProsecnaBrzina) * $oldNumOfReviews) + $speedRating) / $newNumOfReviews;
                }

                // New quality average
                if ($handymanRow->ProsecanKvalitet == null) {
                        $newQualityAverage = $qualityRating;
                } else {
                        $newQualityAverage = 
                        ((floatval($handymanRow->ProsecanKvalitet) * $oldNumOfReviews) + $qualityRating) / $newNumOfReviews;
                }

                $builder->set([
                        "BrojRecenzija" => $newNumOfReviews,
                        "ProsecnaCena" => $newPriceAverage,
                        "ProsecnaBrzina" => $newSpeedAverage,
                        "ProsecanKvalitet" => $newQualityAverage,
                ]);
                $builder->where("IdMaj", $handymanId);
                $builder->update();

        }
}