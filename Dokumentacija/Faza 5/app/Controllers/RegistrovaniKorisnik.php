<?php

namespace App\Controllers;

/**
 * Ova klasa sluzi kao osnovna za sve registrovane korisnike.
 * 
 * @version 1.0
 */
abstract class RegistrovaniKorisnik extends BaseController {

    /**
     * Odjavljivanje ulogovane uloge
     * 
     * @return Response
     */
    public function logout(){
        $this->session->destroy();
        return redirect()->to(site_url("/")); // idi na podrazumevanu pocetnu stranu
    }

}

?>