<!-- Ljubica Majstorovic, Pavle Sarenac, Nikola Nikolic -->
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
    <title>MajstorNaKlik - Registracija</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top text-center">
                <a class="navbar-brand" href="index.html">
                    <img src="/images/logo.jpg" alt="logo" height="100">
                </a>
                <h1 class="text-center">
                    <a class="heading-link" href="index.html">MajstorNaKlik</a>
                </h1>
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
                            <a class="nav-link dropdown-toggle text-yellow" href="#" id="navbarDropdown" role="button"
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
            <h1><strong>Registracija:</strong></h1>
        </div>
        <div class="row">
            <form action="">
                <div class="row">
                    <div class="col"></div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Unesite korisničko ime...">
                    </div>
                    <div class="col"></div>
                </div>
                <div class="row">
                    <div class="col"></div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Unesite mejl adresu...">
                    </div>
                    <div class="col"></div>
                </div>
                <div class="row">
                    <div class="col"></div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Unesite broj telefona...">
                    </div>
                    <div class="col"></div>
                </div>
                <div class="row">
                    <div class="col"></div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Unesite grad...">
                    </div>
                    <div class="col"></div>
                </div>
                <div class="row">
                    <div class="col"></div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Unesite lozinku...">
                    </div>
                    <div class="col"></div>
                </div>
                <div class="row">
                    <div class="col"></div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Potvrdite lozinku...">
                    </div>
                    <div class="col"></div>
                </div>
                <div class="row">
                    <div class="col"></div>
                    <div class="col text-center">
                        <div class="form-check form-check-inline">
                            Registruj se kao:
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" name="userType" type="radio" id="user-type-client">
                            <label class="form-check-label" for="user-type-client">Korisnik</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" name="userType" type="radio" id="user-type-master">
                            <label class="form-check-label" for="user-type-master">Majstor</label>
                        </div>
                    </div>
                    <div class="col"></div>
                </div>
                <div class="row">
                    <div class="col"></div>
                    <div class="col">
                        <hr>
                    </div>
                    <div class="col"></div>
                </div>
                <div class="row">
                    <div class="col"></div>
                    <div class="col">
                        Imate nalog? Prijavite se <a class="click-here-link" href="logovanje.html">ovde.</a>
                    </div>
                    <div class="col"></div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>