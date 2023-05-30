<!--Ljubica Majstorovic-->
        <div class="row text-center">
            <div class="col">
                <h1><strong>Pregled profila majstora:</strong></h1>
            </div>
        </div>
        <div class="row">
            <div class="col flex-center">
                <?php
                    $session = session();
                    switch ($controller) {
                        case "Gost":
                            break;
                        case "Majstor":
                            if ($email != $session->get("tekuciMajstorPodaci")[0]->MejlAdresa) {
                                echo "<button class='btn w-50 btn-dark text-yellow btn-style'>
                                Ostavi poruku majstoru
                                </button>";
                            } else {
                                echo "<button class='btn w-50 btn-dark text-yellow btn-style'>
                                Ažuriraj svoj profil
                                </button>";
                            }
                            
                            break;
                        default:
                            echo "<button class='btn w-50 btn-dark text-yellow btn-style'>
                            Ostavi poruku majstoru
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
                                echo $name . " " . $surname . ": " .
                                     $specialty . ", " . $city .
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
                                Vidi sve prijave majstora
                                </button>
                                <button class='btn w-50 btn-dark text-yellow btn-style'>
                                    Izbaci majstora
                                </button>";
                            break;
                        case "Korisnik":
                            echo "<button class='btn w-50 btn-dark text-yellow btn-style'>Prijavi majstora</button>";
                            break;
                    }
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col"></div>
            <div class="col flex-center">
                <?php 
                    if ($controller == "Korisnik") {
                        echo "<button class='btn btn-dark text-yellow btn-style' id='oceniMajstora'>
                        Ostavi svoj utisak o majstoru
                        </button><button class='btn btn-dark text-yellow btn-style' id='recenzijeMajstora'>
                        Procitaj recenzije majstora
                        </button>";
                    } else {
                        echo "<button class='btn btn-dark text-yellow btn-style' id='recenzijeMajstora'>
                        Procitaj recenzije majstora
                        </button>";
                    }
                ?>
            </div>
            <div class="col"></div>
        </div>
    </div>
</body>

</html>