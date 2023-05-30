<?php

namespace App\Controllers;

/**
 * Ova klasa predstavlja majstore.
 * 
 * @version 1.0
 */
class Majstor extends RegistrovaniKorisnik {
    
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
        $data['controller'] = 'Majstor';
        $this->session->set("controller", "Majstor");
        echo view("pages/navigacija", $data);
        echo view("pages/$page", $data);
    }

}

?>