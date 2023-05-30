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
        protected $allowedFields = ['IdMaj','ProsecnaCena', 'ProsecnaBrzina', 'ProsecanKvalitet', 'IdSpec'];
        
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
       
}