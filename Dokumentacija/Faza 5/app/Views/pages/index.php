<!-- Ljubica Majstorovic, Pavle Sarenac, Nikola Nikolic -->
        <div class="row text-center">
            <h1><strong>Pretražite majstore:</strong></h1>
        </div>
        <div class="row">
            <form name="search" method="get" action="<?php echo site_url("$controller/search") ?>">
                <div class="row">
                    <div class="col"></div>
                    <div class="col">
                        <input type="text" name="handyman" class="form-control" placeholder="Unesite vrstu majstora (npr. stolar) ...">
                    </div>
                    <div class="col"></div>
                </div>
                <div class="row">
                    <div class="col"></div>
                    <div class="col">
                        <input type="text" name="city" class="form-control" placeholder="Unesite grad (npr. Beograd) ...">
                    </div>
                    <div class="col"></div>
                </div>
                <div class="row">
                    <div class="col"></div>
                    <div class="col text-center">
                        Odaberite kriterijume za sortiranje:
                    </div>
                    <div class="col"></div>
                </div>
                <div class="row">
                    <div class="col text-center">
                        <div class="form-check form-check-inline">
                            <input type="checkbox" name="price" class="form-check-input" id="criteriaPrice">
                            <label class="form-check-label" for="criteriaPrice">Cena</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="checkbox" name="speed" class="form-check-input" id="criteriaSpeed">
                            <label class="form-check-label" for="criteriaSpeed">Brzina</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="checkbox" name="quality" class="form-check-input" id="criteriaQuality">
                            <label class="form-check-label" for="criteriaQuality">Kvalitet</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col"></div>
                    <div class="col text-center">
                        Odaberite kakvo sortiranje želite:
                    </div>
                    <div class="col"></div>
                </div>
                <div class="row">
                    <div class="col text-center">
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">Cena:</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input disabled class="form-check-input" type="radio" name="priceRadio" id="inlineRadio1" value="priceAsc">
                            <label class="form-check-label" for="inlineRadio1">Rastuće</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input disabled class="form-check-input" type="radio" name="priceRadio" id="inlineRadio2" value="priceDesc">
                            <label class="form-check-label" for="inlineRadio2">Opadajuće</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col text-center">
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">Brzina:</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input disabled class="form-check-input" type="radio" name="speedRadio" id="inlineRadio3" value="speedAsc">
                            <label class="form-check-label" for="inlineRadio3">Rastuće</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input disabled class="form-check-input" type="radio" name="speedRadio" id="inlineRadio4" value="speedDesc">
                            <label class="form-check-label" for="inlineRadio4">Opadajuće</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col text-center">
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">Kvalitet:</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input disabled class="form-check-input" type="radio" name="qualityRadio" id="inlineRadio5" value="qualityAsc">
                            <label class="form-check-label" for="inlineRadio5">Rastuće</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input disabled class="form-check-input" type="radio" name="qualityRadio" id="inlineRadio6" value="qualityDesc">
                            <label class="form-check-label" for="inlineRadio6">Opadajuće</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col"></div>
                    <div class="col">
                        <button id="submit-btn" type="submit" class="btn btn-dark text-yellow">Pretraži</button>
                    </div>
                    <div class="col"></div>
                </div>
            </form>
        </div>
        <?php 
            $session = session();
            if ($session->has("author")) {
                $author = $session->get("author");
                if ($author->TipKorisnika == "K") {
                    echo "<div class='row'>
                    <div class='col'></div>
                    <div class='col'>
                        <button type='button' class='btn btn-dark text-yellow' id='chatGPT-btn'>Pitajte majstora Mileta</button>
                    </div>
                    <div class='col'></div>
                    </div>";
                }
            }
        ?>
    </div>
</body>

</html>