<!--Nikola Nikolic-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <script src="/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="/css/index.css">
    <title>MajstorNaKlik - Pregled ocena</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top text-center">
                <a class="navbar-brand" href="index.html">
                    <img src="/images/logo.jpg" alt="logo" height="100">
                </a>
                <a class="heading-link" href="index.html">
                    <h1>MajstorNaKlik</h1>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.html"><span
                                    class="text-yellow">Početna</span></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <span class="text-yellow">Meni</span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="registracija.html">Registruj se</a></li>
                                <li><a class="dropdown-item" href="logovanje.html">Uloguj se</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="row text-italic text-center">
            <h1><strong>Pregled ocena za majstora:</strong></h1>
        </div>
        <div class="row">
            <div class="col-sm-3 offset-sm-1" style="margin-top: 20px;">
                <h2 style="margin:30px">Ocene</h2>
                <label>Cena</label>
                <label>4.56</label>
                <br>
                <label>Brzina</label>
                <label>3.75</label>
                <br>
                <label>kvalitet</label>
                <label>5.00</label>
                <br>
            </div>
            <div class="col-sm-8 " style="margin-top: 20px;">
                <h2 class="text-center" style="margin:30px">Komentari</h2>
                <table style="font-weight: bold; width: 100%;" class="table text-center">
                    <tr class="forma" style="margin-bottom: 10px; margin-left: 10px;">

                        <th>
                            <label>tekst komentara:</label>
                        </th>
                        <th>
                            <label>autor komentara: </label>
                        </th>
                    </tr>
                    <tr style="background-color: white; height: 10px;">
                    </tr>
                    <tr class="forma" style="margin-bottom: 10px;">

                        <td>
                            <label>Cena skroz u redu u skladu sa time koliko dugo i koliko kvalitetno je obavljao
                                posao.</label>
                        </td>
                        <td>
                            <a href="korisnikInfo.html">
                                <label>Zivoradin Nesic</label>
                                <br>
                                <label>Korisnik</label>
                            </a>
                        </td>
                    </tr>
                    <tr style="background-color: white; height: 10px;">
                    </tr>
                    <tr class="forma" style="margin-bottom: 10px;">

                        <td>
                            <label>Majstor savesno i odgovorno izvrsava sve duznosti, sve pohvale.</label>
                        </td>
                        <td>
                            <a href="korisnikInfo.html">
                                <label>Ljubinka Ljubic</label>
                                <br>
                                <label>Korisnik</label>
                            </a>
                        </td>
                    </tr>
                    <tr style="background-color: white; height: 10px;">
                    </tr>
                    <tr class="forma" style="margin-bottom: 10px;">

                        <td>
                            <label>Majstor previse vremena pridaje nevaznim stvarima pa je stoga poprilicno spor,
                                rad korektan.</label>
                        </td>
                        <td>
                            <a href="korisnikInfo.html">
                                <label>Zivojin Aleksic</label>
                                <br>
                                <label>Korisnik</label>
                            </a>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="row">
            <h1 style="margin-top: 50px; text-align: center;">Oceni ovog majstora</h1>
            <div class="col">
                <label for="">Cena</label>
                <ul type="none">
                    <li><input type="radio" name="cena" id="">&nbsp;1</li>
                    <li><input type="radio" name="cena" id="">&nbsp;2</li>
                    <li><input type="radio" name="cena" id="">&nbsp;3</li>
                    <li><input type="radio" name="cena" id="">&nbsp;4</li>
                    <li><input type="radio" name="cena" id="">&nbsp;5</li>
                </ul>
            </div>
            <div class="col">
                <label for="">Brzina</label>
                <ul type="none">
                    <li><input type="radio" name="brzina" id="">&nbsp;1</li>
                    <li><input type="radio" name="brzina" id="">&nbsp;2</li>
                    <li><input type="radio" name="brzina" id="">&nbsp;3</li>
                    <li><input type="radio" name="brzina" id="">&nbsp;4</li>
                    <li><input type="radio" name="brzina" id="">&nbsp;5</li>
                </ul>
            </div>
            <div class="col">
                <label for="">Kvalitet</label>
                <ul type="none">
                    <li><input type="radio" name="kvalitet" id="">&nbsp;1</li>
                    <li><input type="radio" name="kvalitet" id="">&nbsp;2</li>
                    <li><input type="radio" name="kvalitet" id="">&nbsp;3</li>
                    <li><input type="radio" name="kvalitet" id="">&nbsp;4</li>
                    <li><input type="radio" name="kvalitet" id="">&nbsp;5</li>
                </ul>
            </div>
        </div>
        <div class="row">
            <h3 style="text-align: center;">Napisi svoj utisak</h3>
            <textarea name="" id="" cols="30" rows="10"></textarea>
            <button style="margin-top: 10px; margin-bottom: 10px;">Oceni</button>
        </div>
    </div>
</body>

</html>