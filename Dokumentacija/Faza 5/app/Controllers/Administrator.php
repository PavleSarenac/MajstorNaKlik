<?php

namespace App\Controllers;

/**
 * Ova klasa predstavlja administratore.
 * 
 * @version 1.0
 */
class Administrator extends RegistrovaniKorisnik {

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
        $data['controller'] = 'Administrator';
        $this->session->set("controller", "Administrator");
        echo view("pages/navigacija", $data);
        echo view("pages/$page", $data);
    }

    public function showAllReports() {
        return $this->show("izlistaj_prijave", []);
    }

}

?>