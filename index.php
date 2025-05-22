<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Italianno&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Villa Bellavista</title>
</head>

<body>
    <nav class="navbar sticky-top navbar-expand-md navbar-light justify-content">
        <a class="brand" href="index.php">Bellavista</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
            aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Naslovnica</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="galerija.php">Galerija</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="interijer.php">Interijer</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="eksterijer.php">Eksterijer</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="cijenik.php">Cijenik</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="rezerviraj.php">Rezerviraj</a>
                </li>
            </ul>
        </div>
    </nav>
    <header>
        <section class="hero-container d-none d-md-flex">
            <div class="left-img">
                <img src="img/pocetna1.jpg" />
            </div>
            <div class="right-imgs">
                <img src="img/pocetna2.jpg" />
                <img src="img/pocetna3.jpg" />
            </div>
            <div class="text-overlay">
                Villa Bellavista
            </div>
        </section>

        <div class="carousel slide d-md-none" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/pocetna1.jpg" class="d-block w-100 carousel-img" />
                </div>
                <div class="carousel-item">
                    <img src="img/pocetna2.jpg" class="d-block w-100 carousel-img" />
                </div>
                <div class="carousel-item">
                    <img src="img/pocetna3.jpg" class="d-block w-100 carousel-img" />
                </div>
            </div>
            <div class="text-overlay">
                <h1>Villa Bellavista</h1>
            </div>
        </div>
    </header>
    <main>
        <p class="title">Tradicionalna, komforna kuća za odmor za 8 - 10 osoba, kompletno ograđeno dvorište, veliki
            privatni bazen, blizu Poreča</p>
        <div class="d-flex justify-content-around align-items-center">
            <div class="row mb-4">
                <div class="col-6 col-md-3 d-flex justify-content-center align-items-center">
                    <i class="fa-solid fa-door-open"></i>
                    <div class="ml-2">
                        <div>Sobe</div>
                        <div>4</div>
                    </div>
                </div>
                <div class="col-6 col-md-3 d-flex justify-content-center align-items-center">
                    <i class="fa-solid fa-shower"></i>
                    <div class="ml-2">
                        <div>Kupaone</div>
                        <div>4</div>
                    </div>
                </div>
                <div class="col-6 col-md-3 d-flex justify-content-center align-items-center">
                    <i class="fa-solid fa-user"></i>
                    <div class="ml-2">
                        <div>Osobe</div>
                        <div>10</div>
                    </div>
                </div>
                <div class="col-6 col-md-3 d-flex justify-content-center align-items-center">
                    <i class="fa-solid fa-dog"></i>
                    <div class="ml-2">
                        <div>Ljubimci</div>
                        <div>Dozvoljeni</div>
                    </div>
                </div>
            </div>
        </div>

        <p class="text-justify">
            Villa Bellavista smještena je u mirnom naselju Radmani, u blizini Poreča, ova tradicionalna vila s bazenom
            pruža savršen spoj udobnosti i elegancije za nezaboravan odmor. Vila ima četiri prostrane spavaće sobe,
            svaka s vlastitom kupaonicom, što osigurava maksimalnu privatnost i udobnost za sve goste.
            Prostrani dnevni boravak, povezan s moderno opremljenom kuhinjom, stvara idealan prostor za druženje i
            opuštanje. Iz dnevnog boravka izlazi se na veliku terasu koja nudi očaravajući pogled na
        </p>
        <div class="more"><a href="#" class="more">Više</a></div>



        <hr>

        <h5>Galerija</h5>

        <section class="d-none d-md-flex">
            <div class="col-md-4 mb-3">
                <img src="img/galerija1.jpg" class="img-fluid">
            </div>
            <div class="col-md-4 mb-3">
                <img src="img/galerija2.jpg" class="img-fluid">
            </div>
            <div class="col-md-4 mb-3">
                <img src="img/galerija3.jpg" class="img-fluid">
            </div>
        </section>

        <div class="carousel slide d-md-none" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/galerija1.jpg" class="d-block img-fluid" />
                </div>
                <div class="carousel-item">
                    <img src="img/galerija2.jpg" class="d-block img-fluid" />
                </div>
                <div class="carousel-item">
                    <img src="img/galerija3.jpg" class="d-block img-fluid" />
                </div>
            </div>
        </div>

        <div class="more"><a href="#" class="more">Više</a></div>

        <hr>

        <h5>Sadržaj</h5>
        <div class="row">
            <div class="col-sm-6 col-md-4">
                <ul>
                    <li>Privatni ulaz</li>
                    <li>Natkrivena terasa</li>
                    <li>Privatni bazen (50 m²)</li>
                </ul>
            </div>
            <div class="col-sm-6 col-md-4">
                <ul>
                    <li>Wi-fi</li>
                    <li>Sat-TV</li>
                    <li>Klima uređaji u sobama</li>
                </ul>
            </div>
            <div class="col-md-4">
                <ul>
                    <li>Klima uređaj u dnevnom boravku</li>
                    <li>Perilica rublja</li>
                    <li>Perilica suđa</li>
                </ul>
            </div>
        </div>
        <div class="more"><a href="#" class="more">Više</a></div>

        <hr>

        <h5>Kućna pravila</h5>
        <div class="row">
            <div class="col-sm-6 col-md-4">
                <ul>
                    <li>Zabave su zabranjene</li>
                    <li>Odlazak (10:00)</li>
                    <li>Ulazak (16:00 - 21:00)</li>
                </ul>
            </div>
            <div class="col-sm-6 col-md-4">
                <ul>
                    <li>Zabranjeno pušenje</li>
                    <li>Pogodno za invalide</li>
                </ul>
            </div>
            <div class="col-md-4">
                <ul>
                    <li>Dolazak svaki dan</li>
                    <li>Zabranjeno za mlade grupe ljudi</li>
                </ul>
            </div>
        </div>

        <hr>

        <h5>Lokacija</h5>
        <div class="col-lg-12">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2811.2666699538822!2d13.682729499999997!3d45.201938999999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x477cbd5e857f4211%3A0xd75dabb2b229e1a!2sVilla%20Bellavista!5e0!3m2!1shr!2shr!4v1745851463155!5m2!1shr!2shr"
                class="w-100" height="400" allowfullscreen="" loading="lazy"></iframe>
        </div>

    </main>
    <footer class="bg-light d-flex text-muted py-3 my-4 border-top">
        <div class="col-md-6">
            <p class="mb-2">Adresa: Radmani 20a, Poreč</p>
        </div>

        <div class="col-md-6 justify-content-end d-flex">
            <p class="mb-2">© 2025 Bellavista</p>
        </div>
    </footer>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="javascript/script.js"></script>
</body>

</html>