<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Italianno&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
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
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Naslovnica</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="galerija.php">Galerija</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="interijer.php">Interijer</a>
                </li>
                <li class="nav-item active">
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
    <main class="py-5">
        <video autoplay muted loop playsinline class="w-100">
                <source src="video/VID-20250407-WA0001.mp4" type="video/mp4">
        </video>
        <div class="container py-5">
            <h1 class="text-center">Eksterijer</h1>

            <div class="row align-items-center mb-5">
                <div class="col-md-6">
                    <img src="img/vanNoc.jpg" class="img-fluid rounded shadow"/>
                </div>
                <div class="col-md-6">
                    <h2>Privatnost i udobnost</h2>
                    <p>
                        Villa Bellavista smještena je unutar prostrane ograđene parcele s privatnim parkiralištem. 
                        U prvom planu nalazi se bazen s ležaljkama, okružen njegovanim travnjakom — savršenim za sunčanje, igru i opuštanje.
                    </p>
                    <p>
                        Uživajte u tišini i zelenilu, daleko od gradske buke, uz osjećaj potpune privatnosti.
                    </p>
                </div>
            </div>

            <div class="row align-items-center mb-5 flex-md-row-reverse">
                <div class="col-md-6">
                    <img src="img/galerija6.jpg" class="img-fluid rounded shadow" />
                </div>
                <div class="col-md-6">
                    <h2>Zabava za sve uzraste</h2>
                    <p>
                        U stražnjem dijelu dvorišta smješteni su trampolin i stol za stolni tenis — idealna zabava za djecu, ali i odrasle koji žele ostati aktivni i zaigrani.
                    </p>
                    <p>
                        Okruženje je sigurno i otvoreno, s puno prostora za bezbrižnu igru.
                    </p>
                </div>
            </div>

            <div class="row align-items-center mb-5">
                <div class="col-md-6">
                    <img src="img/galerija33.jpg" class="img-fluid rounded shadow" />
                </div>
                <div class="col-md-6">
                    <h2>Pogled koji oduzima dah</h2>
                    <p>
                        S terase vile pruža se očaravajući pogled na okolnu prirodu, koji stvara savršenu atmosferu za jutarnju kavu ili večernje opuštanje.
                    </p>
                    <p>
                        Osjetite pravi istarski duh dok uživate u svakom pogledu.
                    </p>
                </div>
            </div>

            <div class="row align-items-center mb-5 flex-md-row-reverse">
                <div class="col-md-6">
                    <img src="img/galerija11.jpg" class="img-fluid rounded shadow" />
                </div>
                <div class="col-md-6">
                    <h2>Uživanje na otvorenom</h2>
                    <p>
                        Ispred kuće nalazi se natkriveni vanjski stol uz roštilj, savršen za pripremu domaćih specijaliteta i druženja u toplim večerima.
                    </p>
                    <p>
                        Uživajte u obrocima na svježem zraku, uz vino i razgovor — baš kao doma, ali još bolje.
                    </p>
                </div>
            </div>
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