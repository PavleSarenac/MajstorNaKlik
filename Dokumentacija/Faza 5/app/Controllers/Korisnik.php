<?php

namespace App\Controllers;

/**
 * Ova klasa predstavlja korisnike.
 * 
 * @version 1.0
 */
class Korisnik extends RegistrovaniKorisnik {

    /**
     * Ova funkcija sluzi za prikaz prosledjene stranice pri cemu joj se prosledjuju i odgovarajuci parametri.
     * 
     * @param string $page Page
     * @param array $data Data
     * 
     * @return void
     */
    protected function show($page, $data){
        $data["author"] = $this->session->get("author");
        $data['controller'] = 'Korisnik';
        $this->session->set("controller", "Korisnik");
        echo view("pages/navigacija", $data);
        echo view("pages/$page", $data);
    }

    public function showMyProfile() {
        return $this->show("korisnikPregledProfila", []);
    }

}

?>