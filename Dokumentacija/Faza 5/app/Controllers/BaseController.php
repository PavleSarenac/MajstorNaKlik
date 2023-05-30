<?php

namespace App\Controllers;

use App\Models\SpecijalnostiModel;
use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 */
abstract class BaseController extends Controller
{
    /**
     * Instance of the main Request object.
     *
     * @var CLIRequest|IncomingRequest
     */
    protected $request;

    /**
     * An array of helpers to be loaded automatically upon
     * class instantiation. These helpers will be available
     * to all other controllers that extend BaseController.
     *
     * @var array
     */
    protected $helpers = ['form', 'url'];

    /**
     * Be sure to declare properties for any property fetch you initialized.
     * The creation of dynamic property is deprecated in PHP 8.2.
     */
    protected $session;

    /**
     * Constructor.
     */
    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        // Do Not Edit This Line
        parent::initController($request, $response, $logger);

        // Preload any models, libraries, etc, here.
        $this->session = session();
    }

    /**
     * Prikaz pocetne stranice index
     * 
     * @return Response
     */
    public function index()
    {
        $this->show("index", []);
    }

    /**
     * Ova funkcija sluzi za prikaz profila majstora.
     * 
     * @param string $name Name
     * @param string $surname Surname
     * @param string $specialty Specialty
     * @param string $city City
     * @param string $phone Phone
     * @param string $email Email
     * 
     * @return void
     */
    public function prikazProfilaMajstora($name, $surname, $specialty, $city, $phone, $email) {
        $this->show("majstorInfo", [
            "name" => $name,
            "surname" => $surname,
            "specialty" => $specialty,
            "city" => $city,
            "phone" => $phone,
            "email" => $email
        ]);
    }

    public function prikazProfilaKorisnika($name, $surname, $city, $phone, $email) {
        $this->show("korisnikInfo", [
            "name" => $name,
            "surname" => $surname,
            "city" => $city,
            "phone" => $phone,
            "email" => $email
        ]);
    }

   /**
     * Za prikaz zeljenih stranica iz foldera pages
     * 
     * @param String $page, @param Array $data
     * 
     * @return Response
     */
    protected function show($page, $data){
        throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
    }

    /**
     * Ova fukcija se izvrsava kada korisnik klikne na dugme pretrazi na pocetnoj stranici. Prikazuje se stranica sa izlistanim
     * majstorima koje je korisnik trazio.
     */
    public function search() {
        $handyman = $this->request->getVar("handyman");
        $city = $this->request->getVar("city");
        $priceSort = $this->request->getVar("priceRadio");
        $speedSort = $this->request->getVar("speedRadio");
        $qualitySort = $this->request->getVar("qualityRadio");

        $specijalnostiModel = new SpecijalnostiModel();
        $searchResult = $specijalnostiModel->search($handyman, $city, $priceSort, $speedSort, $qualitySort);
        $this->session->set("lastSearchResult", $searchResult);

        $this->show("pretraga_i_sortiranje", 
        [
            "searchHandyman" => $handyman, 
            "searchCity" => $city,
        ]);

    }

    /**
     * Ova funkcija se izvrsava kao posledica AJAX zahteva kada korisnik scroll-uje kroz rezultate svoje pretrage i dodje do dna 
     * stranice - tada se dinamicki ucitava novi blok majstora u stranicu.
     */
    public function fetchNextResults() {
        $controller = $this->session->get("controller");

        $rowNumber = (int)$this->request->getVar("rowNumber");
        $remainingRows = count($this->session->get("lastSearchResult")) - $rowNumber;

        $currentBlock = array_slice($this->session->get("lastSearchResult"), $rowNumber, 
        $remainingRows >= 10 ? 10 : null);
        $newResultBlock = "";
        foreach ($currentBlock as $result) {
            $newHandyman = "<div class='alert alert-light' role='alert'><div class='row'>" .
            "<div class='col text-center'>" . $result->Ime . " " . $result->Prezime . "</div>" .
            "<div class='col text-center'>" . ($result->ProsecnaCena ?? "Nije ocenjen.") . "</div>" . 
            "<div class='col text-center'>" . ($result->ProsecnaBrzina ?? "Nije ocenjen.") . "</div>" .
            "<div class='col text-center'>" . ($result->ProsecanKvalitet ?? "Nije ocenjen.") . "</div></div></div>";
            $encodedName = rawurlencode($result->Ime);
            $encodedSurname = rawurlencode($result->Prezime);
            $encodedSpecialty = rawurlencode($result->Opis);
            $encodedCity = rawurlencode($result->Naziv);
            $encodedPhone = rawurlencode($result->Telefon);
            $encodedMail = rawurlencode($result->MejlAdresa);
            $newResultBlock .= anchor(
                "$controller/prikazProfilaMajstora/$encodedName/$encodedSurname/$encodedSpecialty/$encodedCity/$encodedPhone/$encodedMail",
                $newHandyman,
                array('class' => 'majstorLink')
            );
        }
        echo $newResultBlock;
    }
    
}
