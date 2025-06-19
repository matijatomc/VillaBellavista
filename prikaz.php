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

    $stmt = $conn->query("SELECT * FROM rezervacije ORDER BY id DESC");
    $rezervacije = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Italianno&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Villa Bellavista</title>
     <style>
        @media only screen and (max-width: 800px) {
  #no-more-tables table,
  #no-more-tables thead,
  #no-more-tables tbody,
  #no-more-tables th,
  #no-more-tables td,
  #no-more-tables tr {
      display: block;
  }

  #no-more-tables thead tr {
      position: absolute;
      top: -9999px;
      left: -9999px;
  }

  #no-more-tables tr {
      border: 1px solid #ccc;
      margin-bottom: 1rem;
      border-radius: 8px;
      padding: 0.5rem;
  }

  #no-more-tables td {
      border: none;
      border-bottom: 1px solid #eee;
      position: relative;
      padding-left: 50%;
      white-space: normal;
      text-align: left;
  }

  #no-more-tables td:before {
      position: absolute;
      top: 6px;
      left: 6px;
      width: 45%;
      padding-right: 10px;
      white-space: nowrap;
      text-align: left;
      font-weight: bold;
      content: attr(data-title);
  }

  #no-more-tables th {
      display: block;
      background-color: #f8f9fa;
      font-weight: bold;
      padding-left: 6px;
      margin-bottom: 0.5rem;
  }
}
    </style>
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
                <li class="nav-item"><a class="nav-link" href="rezerviraj.php">Rezerviraj</a></li>
            </ul>
        </div>
    </nav>
    <main class="mt-5">
        <h2 class="mb-4 text-center">Sve zaprimljene rezervacije</h2>

        <div id="no-more-tables">
            <table class="table table-bordered table-striped table-condensed">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Ime</th>
                        <th>Prezime</th>
                        <th>Email</th>
                        <th>Odrasli</th>
                        <th>Mladi</th>
                        <th>Djeca</th>
                        <th>Bebe</th>
                        <th>Dolazak</th>
                        <th>Odlazak</th>
                        <th>Poruka</th>
                        <th>Osig. otkaz.</th>
                        <th>Osig. štete</th>
                        <th>Ljubimci</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($rezervacije as $rez) : ?>
                        <tr>
                            <td data-title="ID"><?= htmlspecialchars($rez['id']) ?></td>
                            <td data-title="Ime"><?= htmlspecialchars($rez['ime']) ?></td>
                            <td data-title="Prezime"><?= htmlspecialchars($rez['prezime']) ?></td>
                            <td data-title="Email"><?= htmlspecialchars($rez['email']) ?></td>
                            <td data-title="Odrasli"><?= (int)$rez['odrasli'] ?></td>
                            <td data-title="Mladi"><?= (int)$rez['mladi'] ?></td>
                            <td data-title="Djeca"><?= (int)$rez['djeca'] ?></td>
                            <td data-title="Bebe"><?= (int)$rez['bebe'] ?></td>
                            <td data-title="Dolazak"><?= htmlspecialchars($rez['dolazak']) ?></td>
                            <td data-title="Odlazak"><?= htmlspecialchars($rez['odlazak']) ?></td>
                            <td data-title="Poruka"><?= nl2br(htmlspecialchars($rez['poruka'])) ?></td>
                            <td data-title="Otka."><?= $rez['osiguranje1'] ? 'Da' : 'Ne' ?></td>
                            <td data-title="Šteta"><?= $rez['osiguranje2'] ? 'Da' : 'Ne' ?></td>
                            <td data-title="Ljubimci"><?= $rez['kucniLjubimci'] ? 'Da' : 'Ne' ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
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
</body>
</html>
