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
    <title>MajstorNaKlik - Pregled svih prijava</title>
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
            <h1><strong>Sve prijave majstora i korisnika:</strong></h1>
        </div>
        <div class="row">
            <div>
                <table style="font-weight: bold; width: 100%;" class="table text-center">
                    <tr class="forma">
                        <th>
                            <label>tekst prijave</label>
                        </th>
                        <th>
                            <label>korisnik za koga je podneta prijava:</label>
                        </th>
                        <th>
                            <label>prijavu podneo: </label>
                        </th>
                    </tr>
                    <tr style="background-color: white; height: 10px;">
                    </tr>
                    <tr class="forma" style="margin-bottom: 10px; margin-left: 10px;">
                        <td>
                            <a href="majstorInfo.html" style="margin-bottom: 10px; margin-top: 10px;">
                                <label>Majstor se nije ponasao profesionalno na poslu, lose uradjen posao na kraju se
                                    zid krunio.</label>
                            </a>
                        </td>
                        <td>
                            <a href="majstorInfo.html">
                                <label>Stevo Djubre</label>
                                <br>
                                <label>Moler</label>
                            </a>
                        </td>
                        <td>
                            <a href="korisnikInfo.html" style="margin-bottom: 10px; margin-top: 10px;">
                                <label>Milutin Ivkovic</label>
                                <br>
                                <label>Korisnik</label>
                            </a>
                        </td>
                    </tr>
                    <tr style="background-color: white; height: 10px;">
                    </tr>
                    <tr class="forma" style="margin-bottom: 10px;">
                        <td>
                            <a href="majstorInfo.html" style="margin-bottom: 10px; margin-top: 10px;">
                                Previse pije na poslu.
                            </a>
                        </td>
                        <td>
                            <a href="majstorInfo.html">
                                <label>Sreten Cico Sreckovic</label>
                                <br>
                                <label>Moler</label>
                            </a>
                        </td>
                        <td>
                            <a href="majstorInfo.html" style="margin-bottom: 10px; margin-top: 10px;">
                                <label>Milorad Trifunovic</label>
                                <br>
                                <label>Elektricar</label>
                            </a>
                        </td>
                    </tr>
                    <tr style="background-color: white; height: 10px;">
                    </tr>
                    <tr class="forma" style="margin-bottom: 10px;">
                        <td>
                            <a href="majstorInfo.html" style="margin-bottom: 10px; margin-top: 10px;">
                                Korisnik nije isplatio dogovorenu sumu novca.
                            </a>
                        </td>
                        <td>
                            <a href="korisnikInfo.html">
                                <label>Marko Janicijevic</label>
                                <br>
                                <label>Korisnik</label>
                            </a>
                        </td>
                        <td>
                            <a href="majstorInfo.html" style="margin-bottom: 10px; margin-top: 10px;">
                                <label>Stevo Djubre</label>
                                <br>
                                <label>Moler</label>
                            </a>
                        </td>
                    </tr>
                </table>
            </div>
        </div>


    </div>
</body>

</html>