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
                <li class="nav-item">
                    <a class="nav-link" href="eksterijer.php">Eksterijer</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="cijenik.php">Cijenik</a>
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
        <h1 class="text-center">Cijenik</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col"> </th>
                    <th scope="col">Cijena</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">Ljetna sezona (01.06 - 31.08)</th>
                    <td>500€</td>
                </tr>
                <tr>
                    <th scope="row">Proljetna sezona (01.03 - 31.05)</th>
                    <td>300€</td>
                </tr>
                <tr>
                    <th scope="row">Jesenska sezona (01.09 - 30.11)</th>
                    <td>350€</td>
                </tr>
                <tr>
                    <th scope="row">Zimska sezona (01.12 - 28.02)</th>
                    <td>250€</td>
                </tr>
            </tbody>
        </table>

        <h2>Dodatni troškovi</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col"> </th>
                    <th scope="col">Cijena</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">
                        Osiguranje od otkazivanja rezervacije 
                        <a id="popoverData" class="btn" data-content="U slučaju da morate otkazati rezervaciju unutar 30 dana prije dolaska, dobivate povrat 90% svih uplata" rel="popover" data-placement="top" data-trigger="hover">info</a>
                    </th>
                    <td>5%</td>
                </tr>
                <tr>
                    <th scope="row">
                        Osiguranje od štete
                        <a id="popoverData2" class="btn" data-content="Umjesto gotovinskog pologa, uzmite osiguranje od štete i bit ćete pokriveni do 1250 € u slučaju nenamjerno prouzročene štete" rel="popover" data-placement="top" data-trigger="hover">info</a>
                    </th>
                    <td>35€</td>
                </tr>
                <tr>
                    <th scope="row">Kučni ljubimci dnevno</th>
                    <td>10€</td>
                </tr>
            </tbody>
        </table>
        
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
    <script>
        $('#popoverData').popover();
        $('#popoverData2').popover();
    </script>
</body>

</html>