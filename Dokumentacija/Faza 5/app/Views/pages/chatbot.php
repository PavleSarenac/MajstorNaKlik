<!-- Pavle Sarenac -->
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
    <title>MajstorNaKlik - Chatbot (Majstor Mile)</title>
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
    </div>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-12">
                <div class="card chat-card">
                    <div class="card-header chat-header">
                        <img src="slike/chatbot.jfif" alt="">
                        <h4 class="mb-0">Majstor Mile</h4>
                    </div>
                    <div class="card-body chat-body">
                        <ul class="chat-messages list-unstyled">
                            <li class="message message-reverse">
                                <div class="message-wrapper-reverse">
                                    <div class="message-content">
                                        <p>Kako da okrecim kupatilo?</p>
                                    </div>
                                    <div class="message-time">11:30 AM</div>
                                </div>
                            </li>
                            <li class="message">
                                <div class="message-wrapper">
                                    <div class="message-content">
                                        <p>Da biste okrečili kupatilo, evo nekoliko koraka koje možete slijediti:

                                            Pripremite površine: Pre početka krečenja, treba da pripremite površine tako
                                            što ćete ih očistiti
                                            i izravnati. Ako postoje rupe ili pukotine, treba da ih popunite kitom za
                                            fugovanje i pustite da
                                            se osuši pre nastavka.

                                            Odaberite boju: Odaberite boju koju želite da primenite u kupatilu. Obično
                                            se u kupatilima koriste
                                            svetlije boje kako bi se stvorio osećaj prostranstva i svetlosti.

                                            Sklonite sve predmete: Pre nego što počnete sa krečenjem, sklonite sve
                                            predmete iz kupatila kako
                                            bi vam bilo lakše da radite.

                                            Zaštitite pod i sanitarije: Zaštitite pod i sanitarije postavljanjem
                                            zaštitne folije ili papira.
                                            Na taj način ćete sprečiti oštećenje poda ili sanitarija ako slučajno
                                            prosipate boju.

                                            Nanesite podlogu: Pre nanošenja boje, nanesite podlogu kako bi se boja bolje
                                            primila na površinu.

                                            Nanesite boju: Nakon nanošenja podloge, nanesite boju valjkom ili četkom.
                                            Pazite da ne nanosite
                                            previše boje kako bi se izbegle nepravilnosti i kapljice.

                                            Pustite da se osuši: Ostavite boju da se osuši prema uputstvima proizvođača.
                                            Obično je potrebno
                                            nekoliko sati da se boja osuši.

                                            Ponovite po potrebi: Ako želite intenzivniju boju, ponovite postupak
                                            nanošenja boje nakon što se
                                            prethodni sloj osuši.

                                            Nakon što se boja potpuno osuši, uklonite zaštitnu foliju ili papir i
                                            vratite sve predmete u
                                            kupatilo. Vaše novo okrečeno kupatilo će sada izgledati sveže i novo!</p>
                                    </div>
                                    <div class="message-time">11:30 AM</div>
                                </div>
                            </li>
                            <li class="message message-reverse">
                                <div class="message-wrapper-reverse">
                                    <div class="message-content">
                                        <p>Fala majstore!</p>
                                    </div>
                                    <div class="message-time">11:31 AM</div>
                                </div>
                            </li>
                            <li class="message">
                                <div class="message-wrapper">
                                    <div class="message-content">
                                        <p>Nema na čemu, drago mi je što sam vam pomogao! Ako imate još neka pitanja ili
                                            nedoumice, slobodno
                                            se obratite.</p>
                                    </div>
                                    <div class="message-time">11:31 AM</div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="card-footer chat-footer">
                        <form class="input-group">
                            <input type="text" placeholder="Pitaj Majstora Mileta sta god zelis...">
                            <button class="btn" type="submit">Send</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>