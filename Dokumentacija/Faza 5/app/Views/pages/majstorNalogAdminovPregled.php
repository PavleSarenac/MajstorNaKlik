<!--Ljubica Majstorovic-->
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
    <title>MajstorNaKlik - Pregled profila majstora (admin)</title>
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
            <h1><strong>Pregled profila majstora (od strane admina):</strong></h1>
        </div>
        <div class="row">
            <div class="col-sm-4" style="margin-top: 20px;">
                <a href="izlistaj_prijave_jednog_majstora.html"><label style="margin-left: 20px;"><b>Pregled svih
                            prijava</b></label></a>
                <br>
                <label style="margin-left: 20px;"><button class="btn btn-sm"
                        style="background-color: black; color: yellow;"><b>Izbaci majstora</b></button>

            </div>
            <div class="col-sm-4 " style="margin-top: 15px;">
                <div class="card text-center" style="width: 300px; justify-content: center;">
                    <img class="card-img-top" src="slike/stevo_djubre.jpg"
                        style="height: 270px; width: 260px; margin-left: 20px; margin-right: 20px;">
                    <div class="card-body">
                        <h4 class="card-tittle">
                            <b>Stevo Djubre</b>
                        </h4>
                        <p class="card-text">
                            <b>Moler, Beograd</b>
                            <br>
                            <b>Kontakt telefon: +381 62 2838 787</b>
                        </p>
                    </div>
                </div>




            </div>
            <div class="col-sm-4 text-right" style="margin-top: 15px;">
                <a href="cetovanje.html"><label style="margin-left: 20px;"><b>Ostavi poruku majstoru</b></label>
                    <img src="slike/chat.png" style="width:30px; height: 30px; border: 0;"></a>

            </div>
        </div>
        <div class="row">

            <div class="offset-sm-4 col-sm-4 justify-content-center" style="margin-top: 15px;">
                <button class="btn"
                    style="align-items: center; border: 2px solid black; background-color: black; width: 300px;"><a
                        href="pregled_ocena.html" style="font-weight: bold; color: yellow;">Recenzije</a></button>

            </div>
        </div>

    </div>
</body>

</html>