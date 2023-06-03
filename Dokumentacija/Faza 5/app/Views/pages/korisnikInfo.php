<!-- Pavle Sarenac -->
        <div class="row text-center">
            <div class="col">
                <h1><strong>Pregled profila korisnika:</strong></h1>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col flex-center">
                <?php
                    $session = session();
                    switch ($controller) {
                        case "Gost":
                            break;
                        case "Korisnik":
                            if ($email != $session->get("tekuciKorisnikPodaci")[0]->MejlAdresa) {
                                echo "<button id='porukaMajstor' class='btn w-50 btn-dark text-yellow btn-style'>
                                Ostavi poruku korisniku
                                </button>";
                            } else {
                                echo "<button class='btn w-50 btn-dark text-yellow btn-style'>
                                Ažuriraj svoj profil
                                </button>";
                            }
                            break;
                        default:
                            echo "<button id='porukaMajstor' class='btn w-50 btn-dark text-yellow btn-style'>
                            Ostavi poruku korisniku
                            </button>";
                            break;
                    }
                ?>
            </div>
            <div class="col">
                <div class="card mx-auto">
                    <img class="card-img-top img-fluid" src="/images/defaultProfilePicture.png" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">
                            <?php
                                echo $name . " " . $surname . ", " . $city .
                                     "<br>Telefon: ". urlencode($phone) . "<br>" . 
                                     "Mejl: " . $email;
                            ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col flex-center">
                <?php 
                    switch ($controller) {
                        case "Administrator":
                            echo "<button class='btn w-50 btn-dark text-yellow btn-style'>
                                Vidi sve prijave korisnika
                                </button>
                                <button class='btn w-50 btn-dark text-yellow btn-style'>
                                    Izbaci korisnika
                                </button>";
                            break;
                        case "Majstor":
                            echo "<button class='btn w-50 btn-dark text-yellow btn-style'>Prijavi korisnika</button>";
                            break;
                    }
                ?>
            </div>
        </div>
        <div class="row" id="emptyUserFooter">

        </div>
    </div>
</body>

</html>