<?php

namespace App\Controllers;

use App\Models\PorukaModel;
use App\Models\RegistrovaniKorisnikModel;

class Chat extends BaseController
{
    
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
        $data['controller'] = 'Chat';
        $this->session->set("controller", "Chat");
        echo view("pages/navigacija", $data);
        echo view("pages/$page", $data);
    }

    /**
     * Prikaz pocetne stranice korisnika
     * 
     * @return Response
     */
    public function showChatting()
    {
        $this->show("cetovanje", []);
    }

    public function acceptMessage(){
        $message = isset($_POST['message']) ? $_POST['message'] : null;
        $IdFrom = isset($_POST['from']) ? intval($_POST['from']) : null;
        $IdTo = isset($_POST['to']) ? intval($_POST['to']) : null; 
        $PorukaModel = new PorukaModel(); 
        $IdP = $PorukaModel->insertData($IdFrom, $IdTo, $message);
        $timestamp = $PorukaModel->getTimestampFromId($IdP);

        $regKorisnikModel = new RegistrovaniKorisnikModel();
        $user = $regKorisnikModel->find($IdFrom);
        $response = [$user, $message, $timestamp];
        echo json_encode($response);
    }

    public function setReadMessages(){
        $idFrom = isset($_POST['idFrom']) ? $_POST['idFrom'] : null;
        $idTo = isset($_POST['idTo']) ? $_POST['idTo'] : null;
        $porukaModel = new PorukaModel();
        $porukaModel->setMessagesSeen($idFrom, $idTo);
        echo "primljeno";
    }

    /**
     * vraca niz poruka koje su namenjene za autora ciji se id cita iz niza POST
     * posebna implementacija jer ne zelimo proveru za tekuci cet
     * 
     * @return JSON file
     */
    public function checkMessagesForAuthor(){
        $authorId = isset($_POST['authorMessages']) ? $_POST['authorMessages'] : null;
        $IdTo = isset($_POST['idTo']) ? $_POST['idTo'] : null;
        $porukaModel = new PorukaModel();
        $poruke = $porukaModel->getAllReceivedMessagesWhileInChat($authorId, $IdTo);
        echo json_encode($poruke);
    }

    /**
     * vraca sve poruke jednog korisnika
     * 
     * @return JSON file
     */
    public function getAllMessages(){
        $IdFrom = isset($_POST['idFrom']) ? $_POST['idFrom'] : null;
        $IdTo = isset($_POST['idTo']) ? $_POST['idTo'] : null;
        $porukaModel = new PorukaModel();
        $poruke = $porukaModel->getAllMessages($IdFrom, $IdTo);
        return json_encode($poruke);
    }
}

?>