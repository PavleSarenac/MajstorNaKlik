<?php

namespace App\Controllers;

use App\Models\PorukaModel;

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

    /**
     * vraca niz poruka koje su namenjene za autora ciji se id cita iz niza POST
     * 
     * @return JSON file
     */
    public function checkMessagesForAuthor(){
        $authorId = isset($_POST['authorMessages']) ? $_POST['authorMessages'] : null;
        $porukaModel = new PorukaModel();
        $poruke = $porukaModel->getAllReceivedMessages($authorId);
        echo json_encode($poruke);
    }
}

?>