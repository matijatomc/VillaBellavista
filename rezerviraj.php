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
    <link href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" rel="stylesheet">
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
                <li class="nav-item">
                    <a class="nav-link" href="cijenik.php">Cijenik</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="rezerviraj.php">Rezerviraj</a>
                </li>
            </ul>
        </div>
    </nav>
    <main class="re">
        <h1 class="text-center">Rezervirajte svoj boravak</h1>
        <p class="text-center text-muted mb-4">Ispunite obrazac i kontaktirat ćemo vas u najkraćem roku</p>

        <form>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="ime">Ime</label>
                <input type="text" class="form-control" id="ime" placeholder="Vaše ime">
            </div>
            <div class="form-group col-md-6">
                <label for="prezime">Prezime</label>
                <input type="text" class="form-control" id="prezime" placeholder="Vaše prezime">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" placeholder="email@example.com">
            </div>
            <div class="form-group col-md-6">
                <label for="odrasli">Broj odraslih osoba</label>
                <input type="number" class="form-control" id="odrasli" min="1" placeholder="npr. 2">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="mladi">Broj mladih (do 18 god.)</label>
                <input type="number" class="form-control" id="mladi" min="0" placeholder="npr. 1">
            </div>
            <div class="form-group col-md-4">
                <label for="djeca">Broj djece (do 12 god.)</label>
                <input type="number" class="form-control" id="djeca" min="0" placeholder="npr. 2">
            </div>
            <div class="form-group col-md-4">
                <label for="bebe">Broj beba</label>
                <input type="number" class="form-control" id="bebe" min="0" placeholder="npr. 1">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="dolazak">Datum dolaska</label>
                <input type="text" class="form-control" id="dolazak" placeholder="Odaberite datum">
            </div>
            <div class="form-group col-md-6">
                <label for="odlazak">Datum odlaska</label>
                <input type="text" class="form-control" id="odlazak" placeholder="Odaberite datum">
            </div>
        </div>

        <div class="form-group">
            <label for="poruka">Napomena</label>
            <textarea class="form-control" id="poruka" rows="3" placeholder="Dodatne informacije..."></textarea>
        </div>

        <div class="form-group checkbox-group">
            <label>Dodatne opcije (neobavezno):</label>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="osiguranje1">
                <label class="form-check-label" for="osiguranje1">Osiguranje od štete</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="osiguranje2">
                <label class="form-check-label" for="osiguranje2">Osiguranje od otkazivanja</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="kucniLjubimci">
                <label class="form-check-label" for="kucniLjubimci">Dolazak s kućnim ljubimcima</label>
            </div>
        </div>

        <div class="text-center mt-4">
            <button type="submit" class="btn btn-primary">Pošalji rezervaciju</button>
        </div>
        </form>
    </main>
    <footer class="bg-light d-flex text-muted py-3 my-4 border-top">
        <div class="col-md-6">
            <p class="mb-2">Adresa: Radmani 20a, Poreč</p>
        </div>

        <div class="col-md-6 justify-content-end d-flex">
            <p class="mb-2">© 2025 Bellavista</p>
        </div>
    </footer>


    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="javascript/script.js"></script>
    <script>
        $(function () {
            $("#dolazak, #odlazak").datepicker({
            dateFormat: "dd.mm.yy",
            minDate: 0
            });
        });
    </script>
</body>

</html>