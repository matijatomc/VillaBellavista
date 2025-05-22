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
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Naslovnica</a>
                </li>
                <li class="nav-item active">
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
    <main class="gallery py-5">
        <h1>Galerija</h1>
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-4 mb-4">
                    <img src="img/galerija1.jpg" class="img-fluid rounded shadow" alt="Slika 1">
                </div>
                <div class="col-sm-6 col-md-4 mb-4">
                    <img src="img/galerija2.jpg" class="img-fluid rounded shadow" alt="Slika 2">
                </div>
                <div class="col-sm-6 col-md-4 mb-4">
                    <img src="img/galerija3.jpg" class="img-fluid rounded shadow" alt="Slika 3">
                </div>
                <div class="col-sm-6 col-md-4 mb-4">
                    <img src="img/pocetna1.jpg" class="img-fluid rounded shadow" alt="Slika 1">
                </div>
                <div class="col-sm-6 col-md-4 mb-4">
                    <img src="img/pocetna2.jpg" class="img-fluid rounded shadow" alt="Slika 2">
                </div>
                <div class="col-sm-6 col-md-4 mb-4">
                    <img src="img/pocetna3.jpg" class="img-fluid rounded shadow" alt="Slika 3">
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