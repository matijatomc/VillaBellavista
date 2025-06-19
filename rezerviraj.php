<?php

$user = 'root';
$pass = '';
$db = 'villabellavista';

try {
    $conn = new PDO("mysql:host=localhost;dbname=$db;charset=utf8", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Greška pri spajanju s bazom: " . $e->getMessage());
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $ime = $_POST['ime'] ?? '';
    $prezime = $_POST['prezime'] ?? '';
    $email = $_POST['email'] ?? '';
    $odrasli = $_POST['odrasli'] ?? 0;
    $mladi = $_POST['mladi'] ?? 0;
    $djeca = $_POST['djeca'] ?? 0;
    $bebe = $_POST['bebe'] ?? 0;
    $dolazak = $_POST['dolazak'] ?? '';
    $odlazak = $_POST['odlazak'] ?? '';
    $poruka = $_POST['poruka'] ?? '';
    $osiguranje1 = isset($_POST['osiguranje1']) ? 1 : 0;
    $osiguranje2 = isset($_POST['osiguranje2']) ? 1 : 0;
    $kucniLjubimci = isset($_POST['kucniLjubimci']) ? 1 : 0;

    $dolazakDate = DateTime::createFromFormat('d.m.Y', $dolazak) ?: DateTime::createFromFormat('Y-m-d', $dolazak);
    $odlazakDate = DateTime::createFromFormat('d.m.Y', $odlazak) ?: DateTime::createFromFormat('Y-m-d', $odlazak);

    $dolazak = $dolazakDate ? $dolazakDate->format('Y-m-d') : null;
    $odlazak = $odlazakDate ? $odlazakDate->format('Y-m-d') : null;

    try {
        $stmt = $conn->prepare("
            INSERT INTO rezervacije 
            (ime, prezime, email, odrasli, mladi, djeca, bebe, dolazak, odlazak, poruka, osiguranje1, osiguranje2, kucniLjubimci) 
            VALUES 
            (:ime, :prezime, :email, :odrasli, :mladi, :djeca, :bebe, :dolazak, :odlazak, :poruka, :osiguranje1, :osiguranje2, :kucniLjubimci)
        ");

        $stmt->execute([
            ':ime' => $ime,
            ':prezime' => $prezime,
            ':email' => $email,
            ':odrasli' => $odrasli,
            ':mladi' => $mladi,
            ':djeca' => $djeca,
            ':bebe' => $bebe,
            ':dolazak' => $dolazak,
            ':odlazak' => $odlazak,
            ':poruka' => $poruka,
            ':osiguranje1' => $osiguranje1,
            ':osiguranje2' => $osiguranje2,
            ':kucniLjubimci' => $kucniLjubimci
        ]);

        echo "<script>alert('Rezervacija je uspješno zaprimljena!'); window.location.href='rezerviraj.php';</script>";
        exit;

    } catch (PDOException $e) {
        echo "<script>alert('Greška prilikom spremanja rezervacije: " . $e->getMessage() . "');</script>";
    }
}

?>
<!DOCTYPE html>
<html lang="hr">

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
                <li class="nav-item"><a class="nav-link" href="index.php">Naslovnica</a></li>
                <li class="nav-item"><a class="nav-link" href="galerija.php">Galerija</a></li>
                <li class="nav-item"><a class="nav-link" href="interijer.php">Interijer</a></li>
                <li class="nav-item"><a class="nav-link" href="eksterijer.php">Eksterijer</a></li>
                <li class="nav-item"><a class="nav-link" href="cjenik.php">Cjenik</a></li>
                <li class="nav-item active"><a class="nav-link" href="rezerviraj.php">Rezerviraj</a></li>
            </ul>
        </div>
    </nav>
    <main>
        <h1 class="text-center">Rezervirajte svoj boravak</h1>
        <p class="text-center text-muted mb-4">Ispunite obrazac i kontaktirat ćemo vas u najkraćem roku</p>

        <form method="POST" action="rezerviraj.php">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="ime">Ime</label>
                    <input type="text" class="form-control" id="ime" name="ime" placeholder="Vaše ime">
                    <div class="invalid-feedback">Molimo unesite ime.</div>
                </div>
                <div class="form-group col-md-6">
                    <label for="prezime">Prezime</label>
                    <input type="text" class="form-control" id="prezime" name="prezime" placeholder="Vaše prezime">
                    <div class="invalid-feedback">Molimo unesite prezime.</div>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="email@example.com">
                    <div class="invalid-feedback">Molimo unesite email.</div>
                </div>
                <div class="form-group col-md-6">
                    <label for="odrasli">Broj odraslih osoba</label>
                    <input type="number" class="form-control" id="odrasli" name="odrasli" min="1" placeholder="npr. 2">
                    <div class="invalid-feedback">Molimo unesite broj osoba.</div>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="mladi">Broj mladih (do 18 god.)</label>
                    <input type="number" class="form-control" id="mladi" name="mladi" min="0" value="0">
                </div>
                <div class="form-group col-md-4">
                    <label for="djeca">Broj djece (do 12 god.)</label>
                    <input type="number" class="form-control" id="djeca" name="djeca" min="0" value="0">
                </div>
                <div class="form-group col-md-4">
                    <label for="bebe">Broj beba</label>
                    <input type="number" class="form-control" id="bebe" name="bebe" min="0" value="0">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="dolazak">Datum dolaska</label>
                    <input type="text" class="form-control" id="dolazak" name="dolazak" placeholder="Odaberite datum">
                    <div class="invalid-feedback">Molimo unesite datum dolaska.</div>
                </div>
                <div class="form-group col-md-6">
                    <label for="odlazak">Datum odlaska</label>
                    <input type="text" class="form-control" id="odlazak" name="odlazak" placeholder="Odaberite datum">
                    <div class="invalid-feedback">Molimo unesite datum odlaska.</div>
                </div>
            </div>

            <div class="form-group">
                <label for="poruka">Napomena</label>
                <textarea class="form-control" id="poruka" name="poruka" rows="3" placeholder="Dodatne informacije..."></textarea>
            </div>

            <div class="form-group checkbox-group">
                <label>Dodatne opcije (neobavezno):</label>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="osiguranje1" name="osiguranje1">
                    <label class="form-check-label" for="osiguranje1">Osiguranje od štete</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="osiguranje2" name="osiguranje2">
                    <label class="form-check-label" for="osiguranje2">Osiguranje od otkazivanja</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="kucniLjubimci" name="kucniLjubimci">
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
    <!--script src="javascript/script.js"></script-->
    <script>
        $(function() {
            $("#dolazak, #odlazak").datepicker({
                dateFormat: "dd.mm.yy",
                minDate: 0
            });
        });

        document.querySelector('form').addEventListener('submit', function(e) {
            var requiredFields = ['ime', 'prezime', 'email', 'odrasli', 'dolazak', 'odlazak'];
            var isValid = true;

            requiredFields.forEach(function(id) {
                var field = document.getElementById(id);
                if (!field.value.trim()) {
                    field.classList.add('is-invalid');
                    isValid = false;
                } else {
                    field.classList.remove('is-invalid');
                }
            });

            if (!isValid) {
                e.preventDefault();
            }

            var dolazak = document.getElementById('dolazak').value;
            var odlazak = document.getElementById('odlazak').value;

            if (new Date(dolazak) >= new Date(odlazak)) {
                alert('Datum odlaska ne može biti prije datuma dolaska ili isti.');
                e.preventDefault();
            }
        });
    </script>
</body>

</html>