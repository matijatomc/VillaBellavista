<?php
?>
<!DOCTYPE html>
<html lang="hr">

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
                <li class="nav-item active">
                    <a class="nav-link" href="interijer.php">Interijer</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="eksterijer.php">Eksterijer</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="cjenik.php">Cjenik</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="rezerviraj.php">Rezerviraj</a>
                </li>
            </ul>
        </div>
    </nav>
    <header>

    </header>
    <main class="py-5">
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h1>Interijer</h1>
                <p class="lead">
                    Villa Bellavista prostire se na 200 m², raspoređenih na dvije etaže. Interijer je pažljivo dizajniran kako bi pružio udobnost, funkcionalnost i toplinu doma.
                </p>
            </div>
        </div>

        <div class="row align-items-center mb-5">
            <div class="col-md-6">
                <img src="img/galerija13.jpg" alt="Dnevni boravak" class="img-fluid rounded shadow" />
            </div>
            <div class="col-md-6">
                <h3>Otvoren i svijetao dnevni prostor</h3>
                <p>
                    U prizemlju se nalazi prostrani dnevni boravak povezan s modernom kuhinjom i blagovaonicom. 
                    Prostor je klimatiziran, opremljen velikim TV-om i udobnim sjedećim garniturama.
                </p>
                <p>
                    Za dodatnu zabavu tu je i stol za stolni nogomet – idealan za večernje druženje s obitelji ili prijateljima.
                </p>
                <p>
                    Dodatni toalet s perilicom rublja osigurava praktičnost tijekom dužeg boravka.
                </p>
            </div>
        </div>

        <div class="row align-items-center mb-5 flex-md-row-reverse">
            <div class="col-md-6">
                <img src="img/galerija20.jpg" alt="Prizemna soba" class="img-fluid rounded shadow" />
            </div>
            <div class="col-md-6">
                <h3>Pristupačna soba u prizemlju</h3>
                <p>
                    Prizemlje uključuje i spavaću sobu s vlastitim kupatilom, prilagođenu osobama s invaliditetom.
                </p>
            </div>
        </div>

        <div class="row align-items-center mb-5">
            <div class="col-md-6">
                <img src="img/galerija24.jpg" alt="Sobe na katu" class="img-fluid rounded shadow" />
            </div>
            <div class="col-md-6">
                <h3>Udobne spavaće sobe na katu</h3>
                <p>
                    Na prvom katu nalaze se tri spavaće sobe – dvije s bračnim krevetima i jedna s dva odvojena kreveta. 
                    Svaka soba ima vlastitu kupaonicu, TV i klima uređaj, osiguravajući privatnost i udobnost svakom gostu.
                </p>
            </div>
        </div>

        <div class="col-md-12">
            <h3 class="text-center mb-4">Sve što vam treba – i više</h3>
            <ul class="list-unstyled text-center">
                <li>✔️ Klima uređaji u svim sobama i dnevnom boravku</li>
                <li>✔️ Smart TV u svim sobama i dnevnom</li>
                <li>✔️ Perilica rublja u zasebnom toaletu</li>
                <li>✔️ Stol za stolni nogomet</li>
                <li>✔️ Moderna i potpuno opremljena kuhinja</li>
            </ul>
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